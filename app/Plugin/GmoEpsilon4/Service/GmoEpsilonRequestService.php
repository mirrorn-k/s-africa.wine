<?php


namespace Plugin\GmoEpsilon4\Service;

use Eccube\Common\EccubeConfig;
use Plugin\GmoEpsilon4\Repository\ConfigRepository;
use GuzzleHttp\Client;
use Guzzle\Http\Exception\BadResponseException;
use Guzzle\Http\Exception\CurlException;

class GmoEpsilonRequestService
{
    /**
     * @var eccubeConfig
     */
    protected $eccubeConfig;

    /**
     * @var Config
     */
    protected $Config;

    public function __construct(
        EccubeConfig $eccubeConfig,
        ConfigRepository $configRepository
    ) {
        $this->eccubeConfig = $eccubeConfig;

        $this->Config = $configRepository->get();
    }

    /**
     * リクエストを送信
     *
     * @param string $url
     * @param array $arrParameter
     * @return array or boolean
     */
    function sendData($url, $arrParameter, $sslVersion = null)
    {
        //パラメータの文字コードをUTF8⇒EUCJPに変換
        // mb_convert_variables("EUC-JP", "UTF-8", $arrParameter);
        mb_convert_variables("SJIS-win", "UTF-8", $arrParameter);


        // SSLバージョンの設定
        if (is_null($sslVersion)) {
            // 設定画面以外は登録値を設定
        	$sslVersion = $this->Config->getSslVersion();
        }
        
        $config = ['curl' => [
                CURLOPT_SSLVERSION => $sslVersion
            ]
        ];
        $client = new Client($config);

        try {
            $response = $client->post($url, [
                            'form_params' => $arrParameter
                        ]);
        } catch (CurlException $e) {
            logs('gmo_epsilon')->info('CurlException. url='.$url.' parameter='.print_r($arrParameter,true));
            return $e->getErrorNo();
        } catch (BadResponseException $e) {
            logs('gmo_epsilon')->info('BadResponseException. url='.$url.' parameter='.print_r($arrParameter,true));
            return false;
        } catch (\Exception $e) {
            logs('gmo_epsilon')->info('Exception. url='.$url.' parameter='.print_r($arrParameter,true));
            return false;
        }

        $response = $response->getBody(true);

        if (is_null($response)) {
            // $msg = 'レスポンスデータエラー: レスポンスがありません。';
            return false;
        }

        // Shift-JISをUNICODEに変換する
        $response = str_replace("x-sjis-cp932", "UTF-8", $response);

        // XMLパーサを生成する。
        $parser = xml_parser_create('utf-8');

        // 空白文字は読み飛ばしてXMLを読み取る
        xml_parser_set_option($parser,XML_OPTION_TARGET_ENCODING,"UTF-8");
        xml_parser_set_option($parser,XML_OPTION_SKIP_WHITE,1);

        // 配列にXMLのデータを格納する
        $arrVal = [];
        $err = xml_parse_into_struct($parser,$response,$arrVal,$idx);

        // 開放する
        xml_parser_free($parser);

        return $arrVal;

    }

        /**
     * XMLのタグを指定し、要素を取得
     *
     * @param array $arrVal
     * @param string $tag
     * @param string $att
     * @return string
     */
    function getXMLValue($arrVal, $tag, $att)
    {
        $ret = "";
        foreach((array)$arrVal as $array) {
            if($tag == $array['tag']) {
                if(!is_array($array['attributes'])) {
                    continue;
                }
                foreach($array['attributes'] as $key => $val) {
                    if($key == $att) {
                        $ret = mb_convert_encoding(urldecode($val), 'UTF-8', 'SJIS');
                        break;
                    }
                }
            }
        }

        return $ret;
    }
}
?>
