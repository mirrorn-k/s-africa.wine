## ec-cube_tax_management
## UPDATE from version 1.0.0 to 1.0.1
- To version 1.0.1 there is a change in database structure of plg_discount_rate_config
- Basically, EC-CUBE would make the table updated automatically base on changes of Entity but there is a bug in EC-CUBE 4.0.3 that make PluginManager::update() not working
- So we need to update the table manually using sql/alter20200520.sql 

1. Run sql/alter20200520.sql 
2. Update Plugin
