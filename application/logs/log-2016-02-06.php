<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2016-02-06 00:01:50 --> Config Class Initialized
INFO - 2016-02-06 00:01:50 --> Hooks Class Initialized
DEBUG - 2016-02-06 00:01:50 --> UTF-8 Support Enabled
INFO - 2016-02-06 00:01:50 --> Utf8 Class Initialized
INFO - 2016-02-06 00:01:50 --> URI Class Initialized
INFO - 2016-02-06 00:01:50 --> Router Class Initialized
INFO - 2016-02-06 00:01:50 --> Output Class Initialized
INFO - 2016-02-06 00:01:50 --> Security Class Initialized
DEBUG - 2016-02-06 00:01:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 00:01:50 --> Input Class Initialized
INFO - 2016-02-06 00:01:50 --> Language Class Initialized
INFO - 2016-02-06 00:01:50 --> Language Class Initialized
INFO - 2016-02-06 00:01:50 --> Config Class Initialized
INFO - 2016-02-06 00:01:50 --> Loader Class Initialized
INFO - 2016-02-06 00:01:50 --> Helper loaded: form_helper
INFO - 2016-02-06 00:01:50 --> Helper loaded: url_helper
INFO - 2016-02-06 00:01:50 --> Helper loaded: general_helper
INFO - 2016-02-06 00:01:50 --> Database Driver Class Initialized
INFO - 2016-02-06 00:01:50 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 00:01:50 --> Form Validation Class Initialized
INFO - 2016-02-06 00:01:50 --> Controller Class Initialized
INFO - 2016-02-06 00:01:50 --> Model Class Initialized
INFO - 2016-02-06 00:01:50 --> Helper loaded: inflector_helper
DEBUG - 2016-02-06 00:01:50 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/models/Wijkzorg_m.php
INFO - 2016-02-06 00:01:50 --> Model Class Initialized
INFO - 2016-02-06 00:01:50 --> Model Class Initialized
ERROR - 2016-02-06 00:01:50 --> Query error: Unknown column 'clienten.achternaam' in 'field list' - Invalid query: SELECT `diensten`.`categorie`, DATE_FORMAT(datum, "%a %d-%m-%Y") as `datum`, DATE_FORMAT(van, "%H:%i") as `van`, DATE_FORMAT(tot, "%H:%i") as `tot`, `reiskosten`, `route`, `opmerking`, `id_zorgverlener`, CONCAT_WS(" ", (zorgverleners.achternaam), (zorgverleners.voorletters)) as zorgverlener, CONCAT_WS(" ", (clienten.achternaam), (clienten.voorletters)) as client
FROM `diensten`
JOIN `clienten` `c` ON `diensten`.`id_client` = `c`.`id`
JOIN `zorgverleners` ON `diensten`.`id_zorgverlener` = `zorgverleners`.`id`
WHERE `datum` = '2016-02-05'
AND `route` = '1'
INFO - 2016-02-06 00:01:50 --> Language file loaded: language/dutch/db_lang.php
INFO - 2016-02-06 00:02:13 --> Config Class Initialized
INFO - 2016-02-06 00:02:13 --> Hooks Class Initialized
DEBUG - 2016-02-06 00:02:13 --> UTF-8 Support Enabled
INFO - 2016-02-06 00:02:13 --> Utf8 Class Initialized
INFO - 2016-02-06 00:02:13 --> URI Class Initialized
INFO - 2016-02-06 00:02:13 --> Router Class Initialized
INFO - 2016-02-06 00:02:13 --> Output Class Initialized
INFO - 2016-02-06 00:02:13 --> Security Class Initialized
DEBUG - 2016-02-06 00:02:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 00:02:13 --> Input Class Initialized
INFO - 2016-02-06 00:02:13 --> Language Class Initialized
INFO - 2016-02-06 00:02:13 --> Language Class Initialized
INFO - 2016-02-06 00:02:13 --> Config Class Initialized
INFO - 2016-02-06 00:02:13 --> Loader Class Initialized
INFO - 2016-02-06 00:02:13 --> Helper loaded: form_helper
INFO - 2016-02-06 00:02:13 --> Helper loaded: url_helper
INFO - 2016-02-06 00:02:13 --> Helper loaded: general_helper
INFO - 2016-02-06 00:02:13 --> Database Driver Class Initialized
INFO - 2016-02-06 00:02:13 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 00:02:13 --> Form Validation Class Initialized
INFO - 2016-02-06 00:02:13 --> Controller Class Initialized
INFO - 2016-02-06 00:02:13 --> Model Class Initialized
INFO - 2016-02-06 00:02:13 --> Helper loaded: inflector_helper
DEBUG - 2016-02-06 00:02:13 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/models/Wijkzorg_m.php
INFO - 2016-02-06 00:02:13 --> Model Class Initialized
INFO - 2016-02-06 00:02:13 --> Model Class Initialized
DEBUG - 2016-02-06 00:02:13 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 00:02:13 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/views/wijkzorg/table.php
DEBUG - 2016-02-06 00:02:13 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 00:02:13 --> Final output sent to browser
DEBUG - 2016-02-06 00:02:13 --> Total execution time: 0.1908
INFO - 2016-02-06 00:02:47 --> Config Class Initialized
INFO - 2016-02-06 00:02:47 --> Hooks Class Initialized
DEBUG - 2016-02-06 00:02:47 --> UTF-8 Support Enabled
INFO - 2016-02-06 00:02:47 --> Utf8 Class Initialized
INFO - 2016-02-06 00:02:47 --> URI Class Initialized
INFO - 2016-02-06 00:02:47 --> Router Class Initialized
INFO - 2016-02-06 00:02:47 --> Output Class Initialized
INFO - 2016-02-06 00:02:47 --> Security Class Initialized
DEBUG - 2016-02-06 00:02:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 00:02:47 --> Input Class Initialized
INFO - 2016-02-06 00:02:47 --> Language Class Initialized
INFO - 2016-02-06 00:02:47 --> Language Class Initialized
INFO - 2016-02-06 00:02:47 --> Config Class Initialized
INFO - 2016-02-06 00:02:47 --> Loader Class Initialized
INFO - 2016-02-06 00:02:47 --> Helper loaded: form_helper
INFO - 2016-02-06 00:02:47 --> Helper loaded: url_helper
INFO - 2016-02-06 00:02:47 --> Helper loaded: general_helper
INFO - 2016-02-06 00:02:47 --> Database Driver Class Initialized
INFO - 2016-02-06 00:02:47 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 00:02:47 --> Form Validation Class Initialized
INFO - 2016-02-06 00:02:47 --> Controller Class Initialized
INFO - 2016-02-06 00:02:47 --> Model Class Initialized
INFO - 2016-02-06 00:02:47 --> Helper loaded: inflector_helper
DEBUG - 2016-02-06 00:02:47 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/models/Wijkzorg_m.php
INFO - 2016-02-06 00:02:47 --> Model Class Initialized
INFO - 2016-02-06 00:02:47 --> Model Class Initialized
DEBUG - 2016-02-06 00:02:47 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 00:02:47 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/views/wijkzorg/table.php
DEBUG - 2016-02-06 00:02:47 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 00:02:47 --> Final output sent to browser
DEBUG - 2016-02-06 00:02:47 --> Total execution time: 0.1877
INFO - 2016-02-06 00:03:24 --> Config Class Initialized
INFO - 2016-02-06 00:03:24 --> Hooks Class Initialized
DEBUG - 2016-02-06 00:03:24 --> UTF-8 Support Enabled
INFO - 2016-02-06 00:03:24 --> Utf8 Class Initialized
INFO - 2016-02-06 00:03:24 --> URI Class Initialized
INFO - 2016-02-06 00:03:24 --> Router Class Initialized
INFO - 2016-02-06 00:03:24 --> Output Class Initialized
INFO - 2016-02-06 00:03:24 --> Security Class Initialized
DEBUG - 2016-02-06 00:03:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 00:03:24 --> Input Class Initialized
INFO - 2016-02-06 00:03:24 --> Language Class Initialized
INFO - 2016-02-06 00:03:24 --> Language Class Initialized
INFO - 2016-02-06 00:03:24 --> Config Class Initialized
INFO - 2016-02-06 00:03:24 --> Loader Class Initialized
INFO - 2016-02-06 00:03:24 --> Helper loaded: form_helper
INFO - 2016-02-06 00:03:24 --> Helper loaded: url_helper
INFO - 2016-02-06 00:03:24 --> Helper loaded: general_helper
INFO - 2016-02-06 00:03:24 --> Database Driver Class Initialized
INFO - 2016-02-06 00:03:24 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 00:03:24 --> Form Validation Class Initialized
INFO - 2016-02-06 00:03:24 --> Controller Class Initialized
INFO - 2016-02-06 00:03:24 --> Model Class Initialized
INFO - 2016-02-06 00:03:24 --> Helper loaded: inflector_helper
DEBUG - 2016-02-06 00:03:24 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/models/Wijkzorg_m.php
INFO - 2016-02-06 00:03:24 --> Model Class Initialized
INFO - 2016-02-06 00:03:24 --> Model Class Initialized
ERROR - 2016-02-06 00:03:24 --> Query error: Unknown column 'diensten.categorie' in 'field list' - Invalid query: SELECT `diensten`.`categorie`, DATE_FORMAT(datum, "%a %d-%m-%Y") as `datum`, DATE_FORMAT(van, "%H:%i") as `van`, DATE_FORMAT(tot, "%H:%i") as `tot`, `reiskosten`, `route`, `opmerking`, `id_zorgverlener`, CONCAT_WS(" ", (z.achternaam), (z.voorletters)) as zorgverlener, CONCAT_WS(" ", (c.achternaam), (c.voorletters)) as client
FROM `diensten` `d`
JOIN `clienten` `c` ON `d`.`id_client` = `c`.`id`
JOIN `zorgverleners` `z` ON `d`.`id_zorgverlener` = `z`.`id`
WHERE `datum` = '2016-02-05'
AND `route` = '1'
INFO - 2016-02-06 00:03:24 --> Language file loaded: language/dutch/db_lang.php
INFO - 2016-02-06 00:03:40 --> Config Class Initialized
INFO - 2016-02-06 00:03:40 --> Hooks Class Initialized
DEBUG - 2016-02-06 00:03:40 --> UTF-8 Support Enabled
INFO - 2016-02-06 00:03:40 --> Utf8 Class Initialized
INFO - 2016-02-06 00:03:40 --> URI Class Initialized
INFO - 2016-02-06 00:03:40 --> Router Class Initialized
INFO - 2016-02-06 00:03:40 --> Output Class Initialized
INFO - 2016-02-06 00:03:40 --> Security Class Initialized
DEBUG - 2016-02-06 00:03:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 00:03:40 --> Input Class Initialized
INFO - 2016-02-06 00:03:40 --> Language Class Initialized
INFO - 2016-02-06 00:03:40 --> Language Class Initialized
INFO - 2016-02-06 00:03:40 --> Config Class Initialized
INFO - 2016-02-06 00:03:40 --> Loader Class Initialized
INFO - 2016-02-06 00:03:40 --> Helper loaded: form_helper
INFO - 2016-02-06 00:03:40 --> Helper loaded: url_helper
INFO - 2016-02-06 00:03:40 --> Helper loaded: general_helper
INFO - 2016-02-06 00:03:40 --> Database Driver Class Initialized
INFO - 2016-02-06 00:03:40 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 00:03:40 --> Form Validation Class Initialized
INFO - 2016-02-06 00:03:40 --> Controller Class Initialized
INFO - 2016-02-06 00:03:40 --> Model Class Initialized
INFO - 2016-02-06 00:03:40 --> Helper loaded: inflector_helper
DEBUG - 2016-02-06 00:03:40 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/models/Wijkzorg_m.php
INFO - 2016-02-06 00:03:40 --> Model Class Initialized
INFO - 2016-02-06 00:03:40 --> Model Class Initialized
DEBUG - 2016-02-06 00:03:40 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 00:03:40 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/views/wijkzorg/table.php
DEBUG - 2016-02-06 00:03:40 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 00:03:40 --> Final output sent to browser
DEBUG - 2016-02-06 00:03:40 --> Total execution time: 0.1843
INFO - 2016-02-06 00:04:28 --> Config Class Initialized
INFO - 2016-02-06 00:04:28 --> Hooks Class Initialized
DEBUG - 2016-02-06 00:04:28 --> UTF-8 Support Enabled
INFO - 2016-02-06 00:04:28 --> Utf8 Class Initialized
INFO - 2016-02-06 00:04:28 --> URI Class Initialized
INFO - 2016-02-06 00:04:28 --> Router Class Initialized
INFO - 2016-02-06 00:04:28 --> Output Class Initialized
INFO - 2016-02-06 00:04:28 --> Security Class Initialized
DEBUG - 2016-02-06 00:04:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 00:04:28 --> Input Class Initialized
INFO - 2016-02-06 00:04:28 --> Language Class Initialized
INFO - 2016-02-06 00:04:28 --> Language Class Initialized
INFO - 2016-02-06 00:04:28 --> Config Class Initialized
INFO - 2016-02-06 00:04:28 --> Loader Class Initialized
INFO - 2016-02-06 00:04:28 --> Helper loaded: form_helper
INFO - 2016-02-06 00:04:28 --> Helper loaded: url_helper
INFO - 2016-02-06 00:04:28 --> Helper loaded: general_helper
INFO - 2016-02-06 00:04:28 --> Database Driver Class Initialized
INFO - 2016-02-06 00:04:28 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 00:04:28 --> Form Validation Class Initialized
INFO - 2016-02-06 00:04:28 --> Controller Class Initialized
INFO - 2016-02-06 00:04:28 --> Model Class Initialized
INFO - 2016-02-06 00:04:28 --> Helper loaded: inflector_helper
DEBUG - 2016-02-06 00:04:28 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/models/Wijkzorg_m.php
INFO - 2016-02-06 00:04:28 --> Model Class Initialized
INFO - 2016-02-06 00:04:28 --> Model Class Initialized
DEBUG - 2016-02-06 00:04:28 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 00:04:28 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/views/wijkzorg/table.php
DEBUG - 2016-02-06 00:04:28 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 00:04:28 --> Final output sent to browser
DEBUG - 2016-02-06 00:04:28 --> Total execution time: 0.1799
INFO - 2016-02-06 00:04:40 --> Config Class Initialized
INFO - 2016-02-06 00:04:40 --> Hooks Class Initialized
DEBUG - 2016-02-06 00:04:40 --> UTF-8 Support Enabled
INFO - 2016-02-06 00:04:40 --> Utf8 Class Initialized
INFO - 2016-02-06 00:04:40 --> URI Class Initialized
INFO - 2016-02-06 00:04:40 --> Router Class Initialized
INFO - 2016-02-06 00:04:40 --> Output Class Initialized
INFO - 2016-02-06 00:04:40 --> Security Class Initialized
DEBUG - 2016-02-06 00:04:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 00:04:40 --> Input Class Initialized
INFO - 2016-02-06 00:04:40 --> Language Class Initialized
INFO - 2016-02-06 00:04:40 --> Language Class Initialized
INFO - 2016-02-06 00:04:40 --> Config Class Initialized
INFO - 2016-02-06 00:04:40 --> Loader Class Initialized
INFO - 2016-02-06 00:04:40 --> Helper loaded: form_helper
INFO - 2016-02-06 00:04:40 --> Helper loaded: url_helper
INFO - 2016-02-06 00:04:40 --> Helper loaded: general_helper
INFO - 2016-02-06 00:04:40 --> Database Driver Class Initialized
INFO - 2016-02-06 00:04:40 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 00:04:40 --> Form Validation Class Initialized
INFO - 2016-02-06 00:04:40 --> Controller Class Initialized
INFO - 2016-02-06 00:04:40 --> Model Class Initialized
INFO - 2016-02-06 00:04:40 --> Helper loaded: inflector_helper
DEBUG - 2016-02-06 00:04:40 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/models/Wijkzorg_m.php
INFO - 2016-02-06 00:04:40 --> Model Class Initialized
INFO - 2016-02-06 00:04:40 --> Model Class Initialized
DEBUG - 2016-02-06 00:04:40 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 00:04:40 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/views/wijkzorg/table.php
DEBUG - 2016-02-06 00:04:40 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 00:04:40 --> Final output sent to browser
DEBUG - 2016-02-06 00:04:40 --> Total execution time: 0.1909
INFO - 2016-02-06 00:04:53 --> Config Class Initialized
INFO - 2016-02-06 00:04:53 --> Hooks Class Initialized
DEBUG - 2016-02-06 00:04:53 --> UTF-8 Support Enabled
INFO - 2016-02-06 00:04:53 --> Utf8 Class Initialized
INFO - 2016-02-06 00:04:53 --> URI Class Initialized
INFO - 2016-02-06 00:04:53 --> Router Class Initialized
INFO - 2016-02-06 00:04:53 --> Output Class Initialized
INFO - 2016-02-06 00:04:53 --> Security Class Initialized
DEBUG - 2016-02-06 00:04:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 00:04:53 --> Input Class Initialized
INFO - 2016-02-06 00:04:53 --> Language Class Initialized
INFO - 2016-02-06 00:04:53 --> Language Class Initialized
INFO - 2016-02-06 00:04:53 --> Config Class Initialized
INFO - 2016-02-06 00:04:53 --> Loader Class Initialized
INFO - 2016-02-06 00:04:53 --> Helper loaded: form_helper
INFO - 2016-02-06 00:04:53 --> Helper loaded: url_helper
INFO - 2016-02-06 00:04:53 --> Helper loaded: general_helper
INFO - 2016-02-06 00:04:53 --> Database Driver Class Initialized
INFO - 2016-02-06 00:04:53 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 00:04:53 --> Form Validation Class Initialized
INFO - 2016-02-06 00:04:53 --> Controller Class Initialized
INFO - 2016-02-06 00:04:53 --> Model Class Initialized
INFO - 2016-02-06 00:04:53 --> Helper loaded: inflector_helper
DEBUG - 2016-02-06 00:04:53 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/models/Wijkzorg_m.php
INFO - 2016-02-06 00:04:53 --> Model Class Initialized
INFO - 2016-02-06 00:04:53 --> Model Class Initialized
DEBUG - 2016-02-06 00:04:53 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 00:04:53 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/views/wijkzorg/table.php
DEBUG - 2016-02-06 00:04:53 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 00:04:53 --> Final output sent to browser
DEBUG - 2016-02-06 00:04:53 --> Total execution time: 0.1892
INFO - 2016-02-06 00:05:14 --> Config Class Initialized
INFO - 2016-02-06 00:05:14 --> Hooks Class Initialized
DEBUG - 2016-02-06 00:05:14 --> UTF-8 Support Enabled
INFO - 2016-02-06 00:05:14 --> Utf8 Class Initialized
INFO - 2016-02-06 00:05:14 --> URI Class Initialized
INFO - 2016-02-06 00:05:14 --> Router Class Initialized
INFO - 2016-02-06 00:05:14 --> Output Class Initialized
INFO - 2016-02-06 00:05:14 --> Security Class Initialized
DEBUG - 2016-02-06 00:05:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 00:05:14 --> Input Class Initialized
INFO - 2016-02-06 00:05:14 --> Language Class Initialized
INFO - 2016-02-06 00:05:14 --> Language Class Initialized
INFO - 2016-02-06 00:05:14 --> Config Class Initialized
INFO - 2016-02-06 00:05:14 --> Loader Class Initialized
INFO - 2016-02-06 00:05:14 --> Helper loaded: form_helper
INFO - 2016-02-06 00:05:14 --> Helper loaded: url_helper
INFO - 2016-02-06 00:05:14 --> Helper loaded: general_helper
INFO - 2016-02-06 00:05:14 --> Database Driver Class Initialized
INFO - 2016-02-06 00:05:14 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 00:05:14 --> Form Validation Class Initialized
INFO - 2016-02-06 00:05:14 --> Controller Class Initialized
INFO - 2016-02-06 00:05:14 --> Model Class Initialized
INFO - 2016-02-06 00:05:14 --> Helper loaded: inflector_helper
DEBUG - 2016-02-06 00:05:14 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/models/Wijkzorg_m.php
INFO - 2016-02-06 00:05:14 --> Model Class Initialized
INFO - 2016-02-06 00:05:14 --> Model Class Initialized
DEBUG - 2016-02-06 00:05:15 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 00:05:15 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/views/wijkzorg/table.php
DEBUG - 2016-02-06 00:05:15 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 00:05:15 --> Final output sent to browser
DEBUG - 2016-02-06 00:05:15 --> Total execution time: 0.2576
INFO - 2016-02-06 14:03:27 --> Config Class Initialized
INFO - 2016-02-06 14:03:27 --> Hooks Class Initialized
DEBUG - 2016-02-06 14:03:27 --> UTF-8 Support Enabled
INFO - 2016-02-06 14:03:27 --> Utf8 Class Initialized
INFO - 2016-02-06 14:03:27 --> URI Class Initialized
DEBUG - 2016-02-06 14:03:27 --> No URI present. Default controller set.
INFO - 2016-02-06 14:03:27 --> Router Class Initialized
INFO - 2016-02-06 14:03:27 --> Output Class Initialized
INFO - 2016-02-06 14:03:27 --> Security Class Initialized
DEBUG - 2016-02-06 14:03:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 14:03:27 --> Input Class Initialized
INFO - 2016-02-06 14:03:27 --> Language Class Initialized
INFO - 2016-02-06 14:03:27 --> Language Class Initialized
INFO - 2016-02-06 14:03:27 --> Config Class Initialized
INFO - 2016-02-06 14:03:27 --> Loader Class Initialized
INFO - 2016-02-06 14:03:27 --> Helper loaded: form_helper
INFO - 2016-02-06 14:03:27 --> Helper loaded: url_helper
INFO - 2016-02-06 14:03:27 --> Helper loaded: general_helper
INFO - 2016-02-06 14:03:27 --> Database Driver Class Initialized
INFO - 2016-02-06 14:03:28 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 14:03:28 --> Form Validation Class Initialized
INFO - 2016-02-06 14:03:28 --> Controller Class Initialized
INFO - 2016-02-06 14:03:28 --> Config Class Initialized
INFO - 2016-02-06 14:03:28 --> Hooks Class Initialized
DEBUG - 2016-02-06 14:03:28 --> UTF-8 Support Enabled
INFO - 2016-02-06 14:03:28 --> Utf8 Class Initialized
INFO - 2016-02-06 14:03:28 --> URI Class Initialized
INFO - 2016-02-06 14:03:28 --> Router Class Initialized
INFO - 2016-02-06 14:03:28 --> Output Class Initialized
INFO - 2016-02-06 14:03:28 --> Security Class Initialized
DEBUG - 2016-02-06 14:03:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 14:03:28 --> Input Class Initialized
INFO - 2016-02-06 14:03:28 --> Language Class Initialized
INFO - 2016-02-06 14:03:28 --> Language Class Initialized
INFO - 2016-02-06 14:03:28 --> Config Class Initialized
INFO - 2016-02-06 14:03:28 --> Loader Class Initialized
INFO - 2016-02-06 14:03:28 --> Helper loaded: form_helper
INFO - 2016-02-06 14:03:28 --> Helper loaded: url_helper
INFO - 2016-02-06 14:03:28 --> Helper loaded: general_helper
INFO - 2016-02-06 14:03:28 --> Database Driver Class Initialized
INFO - 2016-02-06 14:03:28 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 14:03:28 --> Form Validation Class Initialized
INFO - 2016-02-06 14:03:28 --> Controller Class Initialized
INFO - 2016-02-06 14:03:28 --> Model Class Initialized
INFO - 2016-02-06 14:03:28 --> Helper loaded: inflector_helper
DEBUG - 2016-02-06 14:03:28 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Auth_m.php
INFO - 2016-02-06 14:03:28 --> Model Class Initialized
INFO - 2016-02-06 14:03:28 --> Helper loaded: cookie_helper
DEBUG - 2016-02-06 14:03:28 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/views/login_form.php
DEBUG - 2016-02-06 14:03:28 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 14:03:28 --> Final output sent to browser
DEBUG - 2016-02-06 14:03:28 --> Total execution time: 0.3010
INFO - 2016-02-06 14:03:31 --> Config Class Initialized
INFO - 2016-02-06 14:03:31 --> Hooks Class Initialized
DEBUG - 2016-02-06 14:03:31 --> UTF-8 Support Enabled
INFO - 2016-02-06 14:03:31 --> Utf8 Class Initialized
INFO - 2016-02-06 14:03:31 --> URI Class Initialized
INFO - 2016-02-06 14:03:31 --> Router Class Initialized
INFO - 2016-02-06 14:03:31 --> Output Class Initialized
INFO - 2016-02-06 14:03:31 --> Security Class Initialized
DEBUG - 2016-02-06 14:03:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 14:03:31 --> Input Class Initialized
INFO - 2016-02-06 14:03:31 --> Language Class Initialized
INFO - 2016-02-06 14:03:32 --> Language Class Initialized
INFO - 2016-02-06 14:03:32 --> Config Class Initialized
INFO - 2016-02-06 14:03:32 --> Loader Class Initialized
INFO - 2016-02-06 14:03:32 --> Helper loaded: form_helper
INFO - 2016-02-06 14:03:32 --> Helper loaded: url_helper
INFO - 2016-02-06 14:03:32 --> Helper loaded: general_helper
INFO - 2016-02-06 14:03:32 --> Database Driver Class Initialized
INFO - 2016-02-06 14:03:32 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 14:03:32 --> Form Validation Class Initialized
INFO - 2016-02-06 14:03:32 --> Controller Class Initialized
INFO - 2016-02-06 14:03:32 --> Model Class Initialized
INFO - 2016-02-06 14:03:32 --> Helper loaded: inflector_helper
DEBUG - 2016-02-06 14:03:32 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Auth_m.php
INFO - 2016-02-06 14:03:32 --> Model Class Initialized
INFO - 2016-02-06 14:03:32 --> Helper loaded: cookie_helper
INFO - 2016-02-06 14:03:32 --> Language file loaded: language/dutch/form_validation_lang.php
INFO - 2016-02-06 14:03:32 --> Config Class Initialized
INFO - 2016-02-06 14:03:32 --> Hooks Class Initialized
DEBUG - 2016-02-06 14:03:32 --> UTF-8 Support Enabled
INFO - 2016-02-06 14:03:32 --> Utf8 Class Initialized
INFO - 2016-02-06 14:03:32 --> URI Class Initialized
INFO - 2016-02-06 14:03:32 --> Router Class Initialized
INFO - 2016-02-06 14:03:32 --> Output Class Initialized
INFO - 2016-02-06 14:03:32 --> Security Class Initialized
DEBUG - 2016-02-06 14:03:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 14:03:32 --> Input Class Initialized
INFO - 2016-02-06 14:03:32 --> Language Class Initialized
INFO - 2016-02-06 14:03:32 --> Language Class Initialized
INFO - 2016-02-06 14:03:32 --> Config Class Initialized
INFO - 2016-02-06 14:03:32 --> Loader Class Initialized
INFO - 2016-02-06 14:03:32 --> Helper loaded: form_helper
INFO - 2016-02-06 14:03:32 --> Helper loaded: url_helper
INFO - 2016-02-06 14:03:32 --> Helper loaded: general_helper
INFO - 2016-02-06 14:03:32 --> Database Driver Class Initialized
INFO - 2016-02-06 14:03:32 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 14:03:32 --> Form Validation Class Initialized
INFO - 2016-02-06 14:03:32 --> Controller Class Initialized
DEBUG - 2016-02-06 14:03:32 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 14:03:32 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dashboard/views/index.php
DEBUG - 2016-02-06 14:03:32 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 14:03:32 --> Final output sent to browser
DEBUG - 2016-02-06 14:03:32 --> Total execution time: 0.2451
INFO - 2016-02-06 14:03:50 --> Config Class Initialized
INFO - 2016-02-06 14:03:50 --> Hooks Class Initialized
DEBUG - 2016-02-06 14:03:50 --> UTF-8 Support Enabled
INFO - 2016-02-06 14:03:50 --> Utf8 Class Initialized
INFO - 2016-02-06 14:03:50 --> URI Class Initialized
INFO - 2016-02-06 14:03:50 --> Router Class Initialized
INFO - 2016-02-06 14:03:50 --> Output Class Initialized
INFO - 2016-02-06 14:03:50 --> Security Class Initialized
DEBUG - 2016-02-06 14:03:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 14:03:50 --> Input Class Initialized
INFO - 2016-02-06 14:03:50 --> Language Class Initialized
INFO - 2016-02-06 14:03:50 --> Language Class Initialized
INFO - 2016-02-06 14:03:50 --> Config Class Initialized
INFO - 2016-02-06 14:03:50 --> Loader Class Initialized
INFO - 2016-02-06 14:03:50 --> Helper loaded: form_helper
INFO - 2016-02-06 14:03:50 --> Helper loaded: url_helper
INFO - 2016-02-06 14:03:50 --> Helper loaded: general_helper
INFO - 2016-02-06 14:03:50 --> Database Driver Class Initialized
INFO - 2016-02-06 14:03:50 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 14:03:50 --> Form Validation Class Initialized
INFO - 2016-02-06 14:03:50 --> Controller Class Initialized
INFO - 2016-02-06 14:03:50 --> Model Class Initialized
INFO - 2016-02-06 14:03:50 --> Helper loaded: inflector_helper
DEBUG - 2016-02-06 14:03:50 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/models/Aftekenlijsten_m.php
INFO - 2016-02-06 14:03:50 --> Model Class Initialized
INFO - 2016-02-06 14:03:50 --> Model Class Initialized
DEBUG - 2016-02-06 14:03:50 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 14:03:50 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/views/aftekenlijsten/index.php
DEBUG - 2016-02-06 14:03:50 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 14:03:50 --> Final output sent to browser
DEBUG - 2016-02-06 14:03:50 --> Total execution time: 0.1806
INFO - 2016-02-06 14:03:58 --> Config Class Initialized
INFO - 2016-02-06 14:03:58 --> Hooks Class Initialized
DEBUG - 2016-02-06 14:03:58 --> UTF-8 Support Enabled
INFO - 2016-02-06 14:03:58 --> Utf8 Class Initialized
INFO - 2016-02-06 14:03:58 --> URI Class Initialized
INFO - 2016-02-06 14:03:58 --> Router Class Initialized
INFO - 2016-02-06 14:03:58 --> Output Class Initialized
INFO - 2016-02-06 14:03:58 --> Security Class Initialized
DEBUG - 2016-02-06 14:03:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 14:03:58 --> Input Class Initialized
INFO - 2016-02-06 14:03:58 --> Language Class Initialized
INFO - 2016-02-06 14:03:58 --> Language Class Initialized
INFO - 2016-02-06 14:03:58 --> Config Class Initialized
INFO - 2016-02-06 14:03:58 --> Loader Class Initialized
INFO - 2016-02-06 14:03:58 --> Helper loaded: form_helper
INFO - 2016-02-06 14:03:58 --> Helper loaded: url_helper
INFO - 2016-02-06 14:03:58 --> Helper loaded: general_helper
INFO - 2016-02-06 14:03:58 --> Database Driver Class Initialized
INFO - 2016-02-06 14:03:58 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 14:03:58 --> Form Validation Class Initialized
INFO - 2016-02-06 14:03:58 --> Controller Class Initialized
INFO - 2016-02-06 14:03:58 --> Model Class Initialized
INFO - 2016-02-06 14:03:58 --> Helper loaded: inflector_helper
DEBUG - 2016-02-06 14:03:58 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/models/Aftekenlijsten_m.php
INFO - 2016-02-06 14:03:58 --> Model Class Initialized
INFO - 2016-02-06 14:03:58 --> Model Class Initialized
INFO - 2016-02-06 14:03:58 --> Language file loaded: language/dutch/form_validation_lang.php
DEBUG - 2016-02-06 14:03:58 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 14:03:58 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/views/aftekenlijsten/index.php
DEBUG - 2016-02-06 14:03:58 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 14:03:58 --> Final output sent to browser
DEBUG - 2016-02-06 14:03:58 --> Total execution time: 0.2080
INFO - 2016-02-06 14:09:25 --> Config Class Initialized
INFO - 2016-02-06 14:09:25 --> Hooks Class Initialized
DEBUG - 2016-02-06 14:09:25 --> UTF-8 Support Enabled
INFO - 2016-02-06 14:09:25 --> Utf8 Class Initialized
INFO - 2016-02-06 14:09:25 --> URI Class Initialized
INFO - 2016-02-06 14:09:25 --> Router Class Initialized
INFO - 2016-02-06 14:09:25 --> Output Class Initialized
INFO - 2016-02-06 14:09:25 --> Security Class Initialized
DEBUG - 2016-02-06 14:09:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 14:09:25 --> Input Class Initialized
INFO - 2016-02-06 14:09:25 --> Language Class Initialized
INFO - 2016-02-06 14:09:25 --> Language Class Initialized
INFO - 2016-02-06 14:09:25 --> Config Class Initialized
INFO - 2016-02-06 14:09:25 --> Loader Class Initialized
INFO - 2016-02-06 14:09:25 --> Helper loaded: form_helper
INFO - 2016-02-06 14:09:25 --> Helper loaded: url_helper
INFO - 2016-02-06 14:09:25 --> Helper loaded: general_helper
INFO - 2016-02-06 14:09:25 --> Database Driver Class Initialized
INFO - 2016-02-06 14:09:25 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 14:09:25 --> Form Validation Class Initialized
INFO - 2016-02-06 14:09:25 --> Controller Class Initialized
INFO - 2016-02-06 14:09:25 --> Model Class Initialized
INFO - 2016-02-06 14:09:25 --> Helper loaded: inflector_helper
DEBUG - 2016-02-06 14:09:25 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dossiers/models/Dossier_m.php
INFO - 2016-02-06 14:09:25 --> Model Class Initialized
DEBUG - 2016-02-06 14:09:25 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 14:09:25 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dossiers/views/clienten.php
DEBUG - 2016-02-06 14:09:25 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 14:09:25 --> Final output sent to browser
DEBUG - 2016-02-06 14:09:25 --> Total execution time: 0.1738
INFO - 2016-02-06 14:09:33 --> Config Class Initialized
INFO - 2016-02-06 14:09:33 --> Hooks Class Initialized
DEBUG - 2016-02-06 14:09:33 --> UTF-8 Support Enabled
INFO - 2016-02-06 14:09:33 --> Utf8 Class Initialized
INFO - 2016-02-06 14:09:33 --> URI Class Initialized
INFO - 2016-02-06 14:09:33 --> Router Class Initialized
INFO - 2016-02-06 14:09:33 --> Output Class Initialized
INFO - 2016-02-06 14:09:33 --> Security Class Initialized
DEBUG - 2016-02-06 14:09:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 14:09:33 --> Input Class Initialized
INFO - 2016-02-06 14:09:33 --> Language Class Initialized
INFO - 2016-02-06 14:09:34 --> Language Class Initialized
INFO - 2016-02-06 14:09:34 --> Config Class Initialized
INFO - 2016-02-06 14:09:34 --> Loader Class Initialized
INFO - 2016-02-06 14:09:34 --> Helper loaded: form_helper
INFO - 2016-02-06 14:09:34 --> Helper loaded: url_helper
INFO - 2016-02-06 14:09:34 --> Helper loaded: general_helper
INFO - 2016-02-06 14:09:34 --> Database Driver Class Initialized
INFO - 2016-02-06 14:09:34 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 14:09:34 --> Form Validation Class Initialized
INFO - 2016-02-06 14:09:34 --> Controller Class Initialized
INFO - 2016-02-06 14:09:34 --> Model Class Initialized
INFO - 2016-02-06 14:09:34 --> Helper loaded: inflector_helper
DEBUG - 2016-02-06 14:09:34 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/models/Aftekenlijsten_m.php
INFO - 2016-02-06 14:09:34 --> Model Class Initialized
INFO - 2016-02-06 14:09:34 --> Model Class Initialized
DEBUG - 2016-02-06 14:09:34 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 14:09:34 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/views/aftekenlijsten/index.php
DEBUG - 2016-02-06 14:09:34 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 14:09:34 --> Final output sent to browser
DEBUG - 2016-02-06 14:09:34 --> Total execution time: 0.1656
INFO - 2016-02-06 14:09:43 --> Config Class Initialized
INFO - 2016-02-06 14:09:43 --> Hooks Class Initialized
DEBUG - 2016-02-06 14:09:43 --> UTF-8 Support Enabled
INFO - 2016-02-06 14:09:43 --> Utf8 Class Initialized
INFO - 2016-02-06 14:09:43 --> URI Class Initialized
INFO - 2016-02-06 14:09:43 --> Router Class Initialized
INFO - 2016-02-06 14:09:43 --> Output Class Initialized
INFO - 2016-02-06 14:09:43 --> Security Class Initialized
DEBUG - 2016-02-06 14:09:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 14:09:43 --> Input Class Initialized
INFO - 2016-02-06 14:09:43 --> Language Class Initialized
INFO - 2016-02-06 14:09:43 --> Language Class Initialized
INFO - 2016-02-06 14:09:43 --> Config Class Initialized
INFO - 2016-02-06 14:09:43 --> Loader Class Initialized
INFO - 2016-02-06 14:09:43 --> Helper loaded: form_helper
INFO - 2016-02-06 14:09:43 --> Helper loaded: url_helper
INFO - 2016-02-06 14:09:43 --> Helper loaded: general_helper
INFO - 2016-02-06 14:09:43 --> Database Driver Class Initialized
INFO - 2016-02-06 14:09:43 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 14:09:43 --> Form Validation Class Initialized
INFO - 2016-02-06 14:09:43 --> Controller Class Initialized
INFO - 2016-02-06 14:09:43 --> Model Class Initialized
INFO - 2016-02-06 14:09:43 --> Helper loaded: inflector_helper
DEBUG - 2016-02-06 14:09:43 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/models/Aftekenlijsten_m.php
INFO - 2016-02-06 14:09:43 --> Model Class Initialized
INFO - 2016-02-06 14:09:43 --> Model Class Initialized
INFO - 2016-02-06 14:09:43 --> Language file loaded: language/dutch/form_validation_lang.php
ERROR - 2016-02-06 14:09:43 --> Query error: Unknown column 'id_client' in 'field list' - Invalid query: SELECT DISTINCT `id_client`, CONCAT_WS(" ", (achternaam), (voorletters)) as naam
FROM `diensten` `d`
JOIN `clienten` `c` ON `d`.`id_client` = `c`.`id`
WHERE `datum` >= '2016/01/01'
AND `datum` <= '2016/01/31'
ORDER BY `achternaam` asc
INFO - 2016-02-06 14:09:43 --> Language file loaded: language/dutch/db_lang.php
INFO - 2016-02-06 14:11:38 --> Config Class Initialized
INFO - 2016-02-06 14:11:38 --> Hooks Class Initialized
DEBUG - 2016-02-06 14:11:38 --> UTF-8 Support Enabled
INFO - 2016-02-06 14:11:38 --> Utf8 Class Initialized
INFO - 2016-02-06 14:11:38 --> URI Class Initialized
INFO - 2016-02-06 14:11:38 --> Router Class Initialized
INFO - 2016-02-06 14:11:38 --> Output Class Initialized
INFO - 2016-02-06 14:11:38 --> Security Class Initialized
DEBUG - 2016-02-06 14:11:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 14:11:38 --> Input Class Initialized
INFO - 2016-02-06 14:11:38 --> Language Class Initialized
INFO - 2016-02-06 14:11:38 --> Language Class Initialized
INFO - 2016-02-06 14:11:38 --> Config Class Initialized
INFO - 2016-02-06 14:11:38 --> Loader Class Initialized
INFO - 2016-02-06 14:11:38 --> Helper loaded: form_helper
INFO - 2016-02-06 14:11:38 --> Helper loaded: url_helper
INFO - 2016-02-06 14:11:38 --> Helper loaded: general_helper
INFO - 2016-02-06 14:11:38 --> Database Driver Class Initialized
INFO - 2016-02-06 14:11:38 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 14:11:39 --> Form Validation Class Initialized
INFO - 2016-02-06 14:11:39 --> Controller Class Initialized
INFO - 2016-02-06 14:11:39 --> Model Class Initialized
INFO - 2016-02-06 14:11:39 --> Helper loaded: inflector_helper
DEBUG - 2016-02-06 14:11:39 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/models/Aftekenlijsten_m.php
INFO - 2016-02-06 14:11:39 --> Model Class Initialized
INFO - 2016-02-06 14:11:39 --> Model Class Initialized
INFO - 2016-02-06 14:11:39 --> Language file loaded: language/dutch/form_validation_lang.php
ERROR - 2016-02-06 14:11:39 --> Query error: Unknown column 'id_client' in 'field list' - Invalid query: SELECT DISTINCT `id_client`, CONCAT_WS(" ", (achternaam), (voorletters)) as naam
FROM `diensten` `d`
JOIN `clienten` `c` ON `d`.`client_id` = `c`.`id`
WHERE `datum` >= '2016/01/01'
AND `datum` <= '2016/01/31'
ORDER BY `achternaam` asc
INFO - 2016-02-06 14:11:39 --> Language file loaded: language/dutch/db_lang.php
INFO - 2016-02-06 14:14:50 --> Config Class Initialized
INFO - 2016-02-06 14:14:50 --> Hooks Class Initialized
DEBUG - 2016-02-06 14:14:50 --> UTF-8 Support Enabled
INFO - 2016-02-06 14:14:50 --> Utf8 Class Initialized
INFO - 2016-02-06 14:14:50 --> URI Class Initialized
INFO - 2016-02-06 14:14:50 --> Router Class Initialized
INFO - 2016-02-06 14:14:50 --> Output Class Initialized
INFO - 2016-02-06 14:14:50 --> Security Class Initialized
DEBUG - 2016-02-06 14:14:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 14:14:50 --> Input Class Initialized
INFO - 2016-02-06 14:14:50 --> Language Class Initialized
INFO - 2016-02-06 14:14:50 --> Language Class Initialized
INFO - 2016-02-06 14:14:50 --> Config Class Initialized
INFO - 2016-02-06 14:14:50 --> Loader Class Initialized
INFO - 2016-02-06 14:14:50 --> Helper loaded: form_helper
INFO - 2016-02-06 14:14:50 --> Helper loaded: url_helper
INFO - 2016-02-06 14:14:50 --> Helper loaded: general_helper
INFO - 2016-02-06 14:14:50 --> Database Driver Class Initialized
INFO - 2016-02-06 14:14:50 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 14:14:50 --> Form Validation Class Initialized
INFO - 2016-02-06 14:14:50 --> Controller Class Initialized
INFO - 2016-02-06 14:14:50 --> Model Class Initialized
INFO - 2016-02-06 14:14:50 --> Helper loaded: inflector_helper
DEBUG - 2016-02-06 14:14:50 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/models/Aftekenlijsten_m.php
INFO - 2016-02-06 14:14:50 --> Model Class Initialized
INFO - 2016-02-06 14:14:50 --> Model Class Initialized
INFO - 2016-02-06 14:14:50 --> Language file loaded: language/dutch/form_validation_lang.php
DEBUG - 2016-02-06 14:14:51 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
ERROR - 2016-02-06 14:14:51 --> Severity: Notice --> Undefined property: stdClass::$id_client C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\diensten\views\aftekenlijsten\index.php 51
ERROR - 2016-02-06 14:14:51 --> Severity: Notice --> Undefined property: stdClass::$id_client C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\diensten\views\aftekenlijsten\index.php 51
ERROR - 2016-02-06 14:14:51 --> Severity: Notice --> Undefined property: stdClass::$id_client C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\diensten\views\aftekenlijsten\index.php 51
ERROR - 2016-02-06 14:14:51 --> Severity: Notice --> Undefined property: stdClass::$id_client C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\diensten\views\aftekenlijsten\index.php 51
ERROR - 2016-02-06 14:14:51 --> Severity: Notice --> Undefined property: stdClass::$id_client C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\diensten\views\aftekenlijsten\index.php 51
ERROR - 2016-02-06 14:14:51 --> Severity: Notice --> Undefined property: stdClass::$id_client C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\diensten\views\aftekenlijsten\index.php 51
ERROR - 2016-02-06 14:14:51 --> Severity: Notice --> Undefined property: stdClass::$id_client C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\diensten\views\aftekenlijsten\index.php 51
ERROR - 2016-02-06 14:14:51 --> Severity: Notice --> Undefined property: stdClass::$id_client C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\diensten\views\aftekenlijsten\index.php 51
ERROR - 2016-02-06 14:14:51 --> Severity: Notice --> Undefined property: stdClass::$id_client C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\diensten\views\aftekenlijsten\index.php 51
ERROR - 2016-02-06 14:14:51 --> Severity: Notice --> Undefined property: stdClass::$id_client C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\diensten\views\aftekenlijsten\index.php 51
ERROR - 2016-02-06 14:14:51 --> Severity: Notice --> Undefined property: stdClass::$id_client C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\diensten\views\aftekenlijsten\index.php 51
ERROR - 2016-02-06 14:14:51 --> Severity: Notice --> Undefined property: stdClass::$id_client C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\diensten\views\aftekenlijsten\index.php 51
ERROR - 2016-02-06 14:14:51 --> Severity: Notice --> Undefined property: stdClass::$id_client C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\diensten\views\aftekenlijsten\index.php 51
ERROR - 2016-02-06 14:14:51 --> Severity: Notice --> Undefined property: stdClass::$id_client C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\diensten\views\aftekenlijsten\index.php 51
ERROR - 2016-02-06 14:14:51 --> Severity: Notice --> Undefined property: stdClass::$id_client C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\diensten\views\aftekenlijsten\index.php 51
ERROR - 2016-02-06 14:14:51 --> Severity: Notice --> Undefined property: stdClass::$id_client C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\diensten\views\aftekenlijsten\index.php 51
ERROR - 2016-02-06 14:14:51 --> Severity: Notice --> Undefined property: stdClass::$id_client C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\diensten\views\aftekenlijsten\index.php 51
ERROR - 2016-02-06 14:14:51 --> Severity: Notice --> Undefined property: stdClass::$id_client C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\diensten\views\aftekenlijsten\index.php 51
ERROR - 2016-02-06 14:14:51 --> Severity: Notice --> Undefined property: stdClass::$id_client C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\diensten\views\aftekenlijsten\index.php 51
ERROR - 2016-02-06 14:14:51 --> Severity: Notice --> Undefined property: stdClass::$id_client C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\diensten\views\aftekenlijsten\index.php 51
ERROR - 2016-02-06 14:14:51 --> Severity: Notice --> Undefined property: stdClass::$id_client C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\diensten\views\aftekenlijsten\index.php 51
ERROR - 2016-02-06 14:14:51 --> Severity: Notice --> Undefined property: stdClass::$id_client C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\diensten\views\aftekenlijsten\index.php 51
ERROR - 2016-02-06 14:14:51 --> Severity: Notice --> Undefined property: stdClass::$id_client C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\diensten\views\aftekenlijsten\index.php 51
ERROR - 2016-02-06 14:14:51 --> Severity: Notice --> Undefined property: stdClass::$id_client C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\diensten\views\aftekenlijsten\index.php 51
ERROR - 2016-02-06 14:14:51 --> Severity: Notice --> Undefined property: stdClass::$id_client C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\diensten\views\aftekenlijsten\index.php 51
ERROR - 2016-02-06 14:14:51 --> Severity: Notice --> Undefined property: stdClass::$id_client C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\diensten\views\aftekenlijsten\index.php 51
ERROR - 2016-02-06 14:14:51 --> Severity: Notice --> Undefined property: stdClass::$id_client C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\diensten\views\aftekenlijsten\index.php 51
ERROR - 2016-02-06 14:14:51 --> Severity: Notice --> Undefined property: stdClass::$id_client C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\diensten\views\aftekenlijsten\index.php 51
ERROR - 2016-02-06 14:14:51 --> Severity: Notice --> Undefined property: stdClass::$id_client C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\diensten\views\aftekenlijsten\index.php 51
ERROR - 2016-02-06 14:14:51 --> Severity: Notice --> Undefined property: stdClass::$id_client C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\diensten\views\aftekenlijsten\index.php 51
ERROR - 2016-02-06 14:14:51 --> Severity: Notice --> Undefined property: stdClass::$id_client C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\diensten\views\aftekenlijsten\index.php 51
ERROR - 2016-02-06 14:14:51 --> Severity: Notice --> Undefined property: stdClass::$id_client C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\diensten\views\aftekenlijsten\index.php 51
ERROR - 2016-02-06 14:14:51 --> Severity: Notice --> Undefined property: stdClass::$id_client C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\diensten\views\aftekenlijsten\index.php 51
ERROR - 2016-02-06 14:14:51 --> Severity: Notice --> Undefined property: stdClass::$id_client C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\diensten\views\aftekenlijsten\index.php 51
ERROR - 2016-02-06 14:14:51 --> Severity: Notice --> Undefined property: stdClass::$id_client C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\diensten\views\aftekenlijsten\index.php 51
ERROR - 2016-02-06 14:14:51 --> Severity: Notice --> Undefined property: stdClass::$id_client C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\diensten\views\aftekenlijsten\index.php 51
DEBUG - 2016-02-06 14:14:51 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/views/aftekenlijsten/index.php
DEBUG - 2016-02-06 14:14:51 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 14:14:51 --> Final output sent to browser
DEBUG - 2016-02-06 14:14:51 --> Total execution time: 0.3785
INFO - 2016-02-06 14:16:14 --> Config Class Initialized
INFO - 2016-02-06 14:16:14 --> Hooks Class Initialized
DEBUG - 2016-02-06 14:16:14 --> UTF-8 Support Enabled
INFO - 2016-02-06 14:16:14 --> Utf8 Class Initialized
INFO - 2016-02-06 14:16:14 --> URI Class Initialized
INFO - 2016-02-06 14:16:14 --> Router Class Initialized
INFO - 2016-02-06 14:16:14 --> Output Class Initialized
INFO - 2016-02-06 14:16:14 --> Security Class Initialized
DEBUG - 2016-02-06 14:16:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 14:16:14 --> Input Class Initialized
INFO - 2016-02-06 14:16:14 --> Language Class Initialized
INFO - 2016-02-06 14:16:14 --> Language Class Initialized
INFO - 2016-02-06 14:16:14 --> Config Class Initialized
INFO - 2016-02-06 14:16:14 --> Loader Class Initialized
INFO - 2016-02-06 14:16:14 --> Helper loaded: form_helper
INFO - 2016-02-06 14:16:14 --> Helper loaded: url_helper
INFO - 2016-02-06 14:16:14 --> Helper loaded: general_helper
INFO - 2016-02-06 14:16:14 --> Database Driver Class Initialized
INFO - 2016-02-06 14:16:14 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 14:16:14 --> Form Validation Class Initialized
INFO - 2016-02-06 14:16:14 --> Controller Class Initialized
INFO - 2016-02-06 14:16:14 --> Model Class Initialized
INFO - 2016-02-06 14:16:14 --> Helper loaded: inflector_helper
DEBUG - 2016-02-06 14:16:14 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/models/Aftekenlijsten_m.php
INFO - 2016-02-06 14:16:14 --> Model Class Initialized
INFO - 2016-02-06 14:16:14 --> Model Class Initialized
INFO - 2016-02-06 14:16:14 --> Language file loaded: language/dutch/form_validation_lang.php
DEBUG - 2016-02-06 14:16:14 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 14:16:14 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/views/aftekenlijsten/index.php
DEBUG - 2016-02-06 14:16:14 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 14:16:14 --> Final output sent to browser
DEBUG - 2016-02-06 14:16:14 --> Total execution time: 0.1955
INFO - 2016-02-06 14:16:18 --> Config Class Initialized
INFO - 2016-02-06 14:16:18 --> Hooks Class Initialized
DEBUG - 2016-02-06 14:16:19 --> UTF-8 Support Enabled
INFO - 2016-02-06 14:16:19 --> Utf8 Class Initialized
INFO - 2016-02-06 14:16:19 --> URI Class Initialized
INFO - 2016-02-06 14:16:19 --> Router Class Initialized
INFO - 2016-02-06 14:16:19 --> Output Class Initialized
INFO - 2016-02-06 14:16:19 --> Security Class Initialized
DEBUG - 2016-02-06 14:16:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 14:16:19 --> Input Class Initialized
INFO - 2016-02-06 14:16:19 --> Language Class Initialized
INFO - 2016-02-06 14:16:19 --> Language Class Initialized
INFO - 2016-02-06 14:16:19 --> Config Class Initialized
INFO - 2016-02-06 14:16:19 --> Loader Class Initialized
INFO - 2016-02-06 14:16:19 --> Helper loaded: form_helper
INFO - 2016-02-06 14:16:19 --> Helper loaded: url_helper
INFO - 2016-02-06 14:16:19 --> Helper loaded: general_helper
INFO - 2016-02-06 14:16:19 --> Database Driver Class Initialized
INFO - 2016-02-06 14:16:19 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 14:16:19 --> Form Validation Class Initialized
INFO - 2016-02-06 14:16:19 --> Controller Class Initialized
INFO - 2016-02-06 14:16:19 --> Model Class Initialized
INFO - 2016-02-06 14:16:19 --> Helper loaded: inflector_helper
DEBUG - 2016-02-06 14:16:19 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/models/Aftekenlijsten_m.php
INFO - 2016-02-06 14:16:19 --> Model Class Initialized
INFO - 2016-02-06 14:16:19 --> Model Class Initialized
ERROR - 2016-02-06 14:16:19 --> Severity: Notice --> Undefined variable: id_clienten C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\diensten\views\aftekenlijsten\detail.php 1
ERROR - 2016-02-06 14:16:19 --> Severity: Warning --> Invalid argument supplied for foreach() C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\diensten\views\aftekenlijsten\detail.php 1
DEBUG - 2016-02-06 14:16:19 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/views/aftekenlijsten/detail.php
DEBUG - 2016-02-06 14:16:19 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 14:16:19 --> Final output sent to browser
DEBUG - 2016-02-06 14:16:19 --> Total execution time: 0.1900
INFO - 2016-02-06 14:17:03 --> Config Class Initialized
INFO - 2016-02-06 14:17:03 --> Hooks Class Initialized
DEBUG - 2016-02-06 14:17:03 --> UTF-8 Support Enabled
INFO - 2016-02-06 14:17:03 --> Utf8 Class Initialized
INFO - 2016-02-06 14:17:03 --> URI Class Initialized
INFO - 2016-02-06 14:17:03 --> Router Class Initialized
INFO - 2016-02-06 14:17:03 --> Output Class Initialized
INFO - 2016-02-06 14:17:03 --> Security Class Initialized
DEBUG - 2016-02-06 14:17:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 14:17:03 --> Input Class Initialized
INFO - 2016-02-06 14:17:03 --> Language Class Initialized
INFO - 2016-02-06 14:17:03 --> Language Class Initialized
INFO - 2016-02-06 14:17:03 --> Config Class Initialized
INFO - 2016-02-06 14:17:03 --> Loader Class Initialized
INFO - 2016-02-06 14:17:03 --> Helper loaded: form_helper
INFO - 2016-02-06 14:17:03 --> Helper loaded: url_helper
INFO - 2016-02-06 14:17:03 --> Helper loaded: general_helper
INFO - 2016-02-06 14:17:03 --> Database Driver Class Initialized
INFO - 2016-02-06 14:17:03 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 14:17:03 --> Form Validation Class Initialized
INFO - 2016-02-06 14:17:03 --> Controller Class Initialized
INFO - 2016-02-06 14:17:03 --> Model Class Initialized
INFO - 2016-02-06 14:17:03 --> Helper loaded: inflector_helper
DEBUG - 2016-02-06 14:17:03 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/models/Aftekenlijsten_m.php
INFO - 2016-02-06 14:17:03 --> Model Class Initialized
INFO - 2016-02-06 14:17:03 --> Model Class Initialized
DEBUG - 2016-02-06 14:17:03 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/views/aftekenlijsten/detail.php
DEBUG - 2016-02-06 14:17:03 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 14:17:03 --> Final output sent to browser
DEBUG - 2016-02-06 14:17:03 --> Total execution time: 0.2465
INFO - 2016-02-06 14:17:03 --> Config Class Initialized
INFO - 2016-02-06 14:17:03 --> Hooks Class Initialized
DEBUG - 2016-02-06 14:17:03 --> UTF-8 Support Enabled
INFO - 2016-02-06 14:17:03 --> Utf8 Class Initialized
INFO - 2016-02-06 14:17:03 --> URI Class Initialized
INFO - 2016-02-06 14:17:03 --> Router Class Initialized
INFO - 2016-02-06 14:17:03 --> Output Class Initialized
INFO - 2016-02-06 14:17:03 --> Security Class Initialized
DEBUG - 2016-02-06 14:17:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 14:17:03 --> Input Class Initialized
INFO - 2016-02-06 14:17:03 --> Language Class Initialized
ERROR - 2016-02-06 14:17:03 --> 404 Page Not Found: /index
INFO - 2016-02-06 14:17:52 --> Config Class Initialized
INFO - 2016-02-06 14:17:52 --> Hooks Class Initialized
DEBUG - 2016-02-06 14:17:52 --> UTF-8 Support Enabled
INFO - 2016-02-06 14:17:52 --> Utf8 Class Initialized
INFO - 2016-02-06 14:17:52 --> URI Class Initialized
INFO - 2016-02-06 14:17:52 --> Router Class Initialized
INFO - 2016-02-06 14:17:52 --> Output Class Initialized
INFO - 2016-02-06 14:17:52 --> Security Class Initialized
DEBUG - 2016-02-06 14:17:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 14:17:52 --> Input Class Initialized
INFO - 2016-02-06 14:17:52 --> Language Class Initialized
INFO - 2016-02-06 14:17:52 --> Language Class Initialized
INFO - 2016-02-06 14:17:52 --> Config Class Initialized
INFO - 2016-02-06 14:17:52 --> Loader Class Initialized
INFO - 2016-02-06 14:17:52 --> Helper loaded: form_helper
INFO - 2016-02-06 14:17:52 --> Helper loaded: url_helper
INFO - 2016-02-06 14:17:52 --> Helper loaded: general_helper
INFO - 2016-02-06 14:17:52 --> Database Driver Class Initialized
INFO - 2016-02-06 14:17:52 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 14:17:52 --> Form Validation Class Initialized
INFO - 2016-02-06 14:17:52 --> Controller Class Initialized
INFO - 2016-02-06 14:17:52 --> Model Class Initialized
INFO - 2016-02-06 14:17:52 --> Helper loaded: inflector_helper
DEBUG - 2016-02-06 14:17:52 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/models/Wijkzorg_m.php
INFO - 2016-02-06 14:17:52 --> Model Class Initialized
INFO - 2016-02-06 14:17:52 --> Model Class Initialized
INFO - 2016-02-06 14:17:53 --> Config Class Initialized
INFO - 2016-02-06 14:17:53 --> Hooks Class Initialized
DEBUG - 2016-02-06 14:17:53 --> UTF-8 Support Enabled
INFO - 2016-02-06 14:17:53 --> Utf8 Class Initialized
INFO - 2016-02-06 14:17:53 --> URI Class Initialized
INFO - 2016-02-06 14:17:53 --> Router Class Initialized
INFO - 2016-02-06 14:17:53 --> Output Class Initialized
INFO - 2016-02-06 14:17:53 --> Security Class Initialized
DEBUG - 2016-02-06 14:17:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 14:17:53 --> Input Class Initialized
INFO - 2016-02-06 14:17:53 --> Language Class Initialized
INFO - 2016-02-06 14:17:53 --> Language Class Initialized
INFO - 2016-02-06 14:17:53 --> Config Class Initialized
INFO - 2016-02-06 14:17:53 --> Loader Class Initialized
INFO - 2016-02-06 14:17:53 --> Helper loaded: form_helper
INFO - 2016-02-06 14:17:53 --> Helper loaded: url_helper
INFO - 2016-02-06 14:17:53 --> Helper loaded: general_helper
INFO - 2016-02-06 14:17:53 --> Database Driver Class Initialized
INFO - 2016-02-06 14:17:53 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 14:17:53 --> Form Validation Class Initialized
INFO - 2016-02-06 14:17:53 --> Controller Class Initialized
INFO - 2016-02-06 14:17:53 --> Model Class Initialized
INFO - 2016-02-06 14:17:53 --> Helper loaded: inflector_helper
DEBUG - 2016-02-06 14:17:53 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/models/Wijkzorg_m.php
INFO - 2016-02-06 14:17:53 --> Model Class Initialized
INFO - 2016-02-06 14:17:53 --> Model Class Initialized
ERROR - 2016-02-06 14:17:53 --> Query error: Unknown column 'd.id_zorgverlener' in 'field list' - Invalid query: SELECT `d`.`categorie`, DATE_FORMAT(d.datum, "%a %d-%m-%Y") `datum`, DATE_FORMAT(d.van, "%H:%i") `van`, DATE_FORMAT(d.tot, "%H:%i") `tot`, `d`.`reiskosten`, `d`.`route`, `d`.`opmerking`, `d`.`id_zorgverlener`, CONCAT_WS(" ", (z.achternaam), (z.voorletters)) zorgverlener, CONCAT_WS(" ", (c.achternaam), (c.voorletters)) client
FROM `diensten` `d`
JOIN `clienten` `c` ON `d`.`client_id` = `c`.`id`
JOIN `zorgverleners` `z` ON `d`.`zorgverlener_id` = `z`.`id`
WHERE `d`.`datum` = '2016-02-06'
AND `d`.`route` = '1'
INFO - 2016-02-06 14:17:53 --> Language file loaded: language/dutch/db_lang.php
INFO - 2016-02-06 14:18:38 --> Config Class Initialized
INFO - 2016-02-06 14:18:38 --> Hooks Class Initialized
DEBUG - 2016-02-06 14:18:38 --> UTF-8 Support Enabled
INFO - 2016-02-06 14:18:38 --> Utf8 Class Initialized
INFO - 2016-02-06 14:18:38 --> URI Class Initialized
INFO - 2016-02-06 14:18:38 --> Router Class Initialized
INFO - 2016-02-06 14:18:38 --> Output Class Initialized
INFO - 2016-02-06 14:18:38 --> Security Class Initialized
DEBUG - 2016-02-06 14:18:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 14:18:38 --> Input Class Initialized
INFO - 2016-02-06 14:18:38 --> Language Class Initialized
INFO - 2016-02-06 14:18:38 --> Language Class Initialized
INFO - 2016-02-06 14:18:38 --> Config Class Initialized
INFO - 2016-02-06 14:18:38 --> Loader Class Initialized
INFO - 2016-02-06 14:18:38 --> Helper loaded: form_helper
INFO - 2016-02-06 14:18:38 --> Helper loaded: url_helper
INFO - 2016-02-06 14:18:38 --> Helper loaded: general_helper
INFO - 2016-02-06 14:18:38 --> Database Driver Class Initialized
INFO - 2016-02-06 14:18:38 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 14:18:38 --> Form Validation Class Initialized
INFO - 2016-02-06 14:18:38 --> Controller Class Initialized
INFO - 2016-02-06 14:18:38 --> Model Class Initialized
INFO - 2016-02-06 14:18:38 --> Helper loaded: inflector_helper
DEBUG - 2016-02-06 14:18:38 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/models/Wijkzorg_m.php
INFO - 2016-02-06 14:18:38 --> Model Class Initialized
INFO - 2016-02-06 14:18:38 --> Model Class Initialized
DEBUG - 2016-02-06 14:18:38 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
ERROR - 2016-02-06 14:18:38 --> Severity: Notice --> Undefined property: stdClass::$id_zorgverlener C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\diensten\views\wijkzorg\table.php 96
DEBUG - 2016-02-06 14:18:38 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/views/wijkzorg/table.php
DEBUG - 2016-02-06 14:18:38 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 14:18:38 --> Final output sent to browser
DEBUG - 2016-02-06 14:18:38 --> Total execution time: 0.2142
INFO - 2016-02-06 14:18:56 --> Config Class Initialized
INFO - 2016-02-06 14:18:56 --> Hooks Class Initialized
DEBUG - 2016-02-06 14:18:56 --> UTF-8 Support Enabled
INFO - 2016-02-06 14:18:56 --> Utf8 Class Initialized
INFO - 2016-02-06 14:18:56 --> URI Class Initialized
INFO - 2016-02-06 14:18:57 --> Router Class Initialized
INFO - 2016-02-06 14:18:57 --> Output Class Initialized
INFO - 2016-02-06 14:18:57 --> Security Class Initialized
DEBUG - 2016-02-06 14:18:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 14:18:57 --> Input Class Initialized
INFO - 2016-02-06 14:18:57 --> Language Class Initialized
INFO - 2016-02-06 14:18:57 --> Language Class Initialized
INFO - 2016-02-06 14:18:57 --> Config Class Initialized
INFO - 2016-02-06 14:18:57 --> Loader Class Initialized
INFO - 2016-02-06 14:18:57 --> Helper loaded: form_helper
INFO - 2016-02-06 14:18:57 --> Helper loaded: url_helper
INFO - 2016-02-06 14:18:57 --> Helper loaded: general_helper
INFO - 2016-02-06 14:18:57 --> Database Driver Class Initialized
INFO - 2016-02-06 14:18:57 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 14:18:57 --> Form Validation Class Initialized
INFO - 2016-02-06 14:18:57 --> Controller Class Initialized
INFO - 2016-02-06 14:18:57 --> Model Class Initialized
INFO - 2016-02-06 14:18:57 --> Helper loaded: inflector_helper
DEBUG - 2016-02-06 14:18:57 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/models/Wijkzorg_m.php
INFO - 2016-02-06 14:18:57 --> Model Class Initialized
INFO - 2016-02-06 14:18:57 --> Model Class Initialized
DEBUG - 2016-02-06 14:18:57 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 14:18:57 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/views/wijkzorg/table.php
DEBUG - 2016-02-06 14:18:57 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 14:18:57 --> Final output sent to browser
DEBUG - 2016-02-06 14:18:57 --> Total execution time: 0.2083
INFO - 2016-02-06 14:18:59 --> Config Class Initialized
INFO - 2016-02-06 14:18:59 --> Hooks Class Initialized
DEBUG - 2016-02-06 14:18:59 --> UTF-8 Support Enabled
INFO - 2016-02-06 14:18:59 --> Utf8 Class Initialized
INFO - 2016-02-06 14:18:59 --> URI Class Initialized
INFO - 2016-02-06 14:18:59 --> Router Class Initialized
INFO - 2016-02-06 14:18:59 --> Output Class Initialized
INFO - 2016-02-06 14:18:59 --> Security Class Initialized
DEBUG - 2016-02-06 14:18:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 14:18:59 --> Input Class Initialized
INFO - 2016-02-06 14:18:59 --> Language Class Initialized
INFO - 2016-02-06 14:18:59 --> Language Class Initialized
INFO - 2016-02-06 14:18:59 --> Config Class Initialized
INFO - 2016-02-06 14:18:59 --> Loader Class Initialized
INFO - 2016-02-06 14:18:59 --> Helper loaded: form_helper
INFO - 2016-02-06 14:18:59 --> Helper loaded: url_helper
INFO - 2016-02-06 14:18:59 --> Helper loaded: general_helper
INFO - 2016-02-06 14:18:59 --> Database Driver Class Initialized
INFO - 2016-02-06 14:18:59 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 14:18:59 --> Form Validation Class Initialized
INFO - 2016-02-06 14:18:59 --> Controller Class Initialized
INFO - 2016-02-06 14:18:59 --> Model Class Initialized
INFO - 2016-02-06 14:18:59 --> Helper loaded: inflector_helper
DEBUG - 2016-02-06 14:18:59 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/models/Wijkzorg_m.php
INFO - 2016-02-06 14:18:59 --> Model Class Initialized
INFO - 2016-02-06 14:18:59 --> Model Class Initialized
DEBUG - 2016-02-06 14:18:59 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 14:18:59 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/views/wijkzorg/table.php
DEBUG - 2016-02-06 14:18:59 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 14:18:59 --> Final output sent to browser
DEBUG - 2016-02-06 14:18:59 --> Total execution time: 0.2330
INFO - 2016-02-06 14:19:01 --> Config Class Initialized
INFO - 2016-02-06 14:19:01 --> Hooks Class Initialized
DEBUG - 2016-02-06 14:19:01 --> UTF-8 Support Enabled
INFO - 2016-02-06 14:19:01 --> Utf8 Class Initialized
INFO - 2016-02-06 14:19:01 --> URI Class Initialized
INFO - 2016-02-06 14:19:01 --> Router Class Initialized
INFO - 2016-02-06 14:19:01 --> Output Class Initialized
INFO - 2016-02-06 14:19:01 --> Security Class Initialized
DEBUG - 2016-02-06 14:19:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 14:19:01 --> Input Class Initialized
INFO - 2016-02-06 14:19:01 --> Language Class Initialized
INFO - 2016-02-06 14:19:01 --> Language Class Initialized
INFO - 2016-02-06 14:19:01 --> Config Class Initialized
INFO - 2016-02-06 14:19:01 --> Loader Class Initialized
INFO - 2016-02-06 14:19:01 --> Helper loaded: form_helper
INFO - 2016-02-06 14:19:01 --> Helper loaded: url_helper
INFO - 2016-02-06 14:19:01 --> Helper loaded: general_helper
INFO - 2016-02-06 14:19:01 --> Database Driver Class Initialized
INFO - 2016-02-06 14:19:01 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 14:19:01 --> Form Validation Class Initialized
INFO - 2016-02-06 14:19:01 --> Controller Class Initialized
INFO - 2016-02-06 14:19:01 --> Model Class Initialized
INFO - 2016-02-06 14:19:01 --> Helper loaded: inflector_helper
DEBUG - 2016-02-06 14:19:01 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/models/Wijkzorg_m.php
INFO - 2016-02-06 14:19:01 --> Model Class Initialized
INFO - 2016-02-06 14:19:01 --> Model Class Initialized
DEBUG - 2016-02-06 14:19:01 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 14:19:01 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/views/wijkzorg/table.php
DEBUG - 2016-02-06 14:19:01 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 14:19:01 --> Final output sent to browser
DEBUG - 2016-02-06 14:19:01 --> Total execution time: 0.2116
INFO - 2016-02-06 14:19:06 --> Config Class Initialized
INFO - 2016-02-06 14:19:06 --> Hooks Class Initialized
DEBUG - 2016-02-06 14:19:06 --> UTF-8 Support Enabled
INFO - 2016-02-06 14:19:06 --> Utf8 Class Initialized
INFO - 2016-02-06 14:19:06 --> URI Class Initialized
INFO - 2016-02-06 14:19:06 --> Router Class Initialized
INFO - 2016-02-06 14:19:06 --> Output Class Initialized
INFO - 2016-02-06 14:19:06 --> Security Class Initialized
DEBUG - 2016-02-06 14:19:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 14:19:06 --> Input Class Initialized
INFO - 2016-02-06 14:19:06 --> Language Class Initialized
INFO - 2016-02-06 14:19:06 --> Language Class Initialized
INFO - 2016-02-06 14:19:06 --> Config Class Initialized
INFO - 2016-02-06 14:19:06 --> Loader Class Initialized
INFO - 2016-02-06 14:19:06 --> Helper loaded: form_helper
INFO - 2016-02-06 14:19:06 --> Helper loaded: url_helper
INFO - 2016-02-06 14:19:06 --> Helper loaded: general_helper
INFO - 2016-02-06 14:19:06 --> Database Driver Class Initialized
INFO - 2016-02-06 14:19:06 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 14:19:06 --> Form Validation Class Initialized
INFO - 2016-02-06 14:19:06 --> Controller Class Initialized
INFO - 2016-02-06 14:19:06 --> Model Class Initialized
INFO - 2016-02-06 14:19:06 --> Helper loaded: inflector_helper
DEBUG - 2016-02-06 14:19:06 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/models/Colabris_m.php
INFO - 2016-02-06 14:19:06 --> Model Class Initialized
INFO - 2016-02-06 14:19:06 --> Model Class Initialized
DEBUG - 2016-02-06 14:19:06 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 14:19:06 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/views/colabris/index.php
DEBUG - 2016-02-06 14:19:06 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 14:19:06 --> Final output sent to browser
DEBUG - 2016-02-06 14:19:06 --> Total execution time: 0.2011
INFO - 2016-02-06 14:19:16 --> Config Class Initialized
INFO - 2016-02-06 14:19:16 --> Hooks Class Initialized
DEBUG - 2016-02-06 14:19:16 --> UTF-8 Support Enabled
INFO - 2016-02-06 14:19:16 --> Utf8 Class Initialized
INFO - 2016-02-06 14:19:16 --> URI Class Initialized
INFO - 2016-02-06 14:19:16 --> Router Class Initialized
INFO - 2016-02-06 14:19:16 --> Output Class Initialized
INFO - 2016-02-06 14:19:16 --> Security Class Initialized
DEBUG - 2016-02-06 14:19:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 14:19:16 --> Input Class Initialized
INFO - 2016-02-06 14:19:16 --> Language Class Initialized
INFO - 2016-02-06 14:19:16 --> Language Class Initialized
INFO - 2016-02-06 14:19:16 --> Config Class Initialized
INFO - 2016-02-06 14:19:16 --> Loader Class Initialized
INFO - 2016-02-06 14:19:16 --> Helper loaded: form_helper
INFO - 2016-02-06 14:19:16 --> Helper loaded: url_helper
INFO - 2016-02-06 14:19:16 --> Helper loaded: general_helper
INFO - 2016-02-06 14:19:16 --> Database Driver Class Initialized
INFO - 2016-02-06 14:19:16 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 14:19:16 --> Form Validation Class Initialized
INFO - 2016-02-06 14:19:16 --> Controller Class Initialized
INFO - 2016-02-06 14:19:16 --> Model Class Initialized
INFO - 2016-02-06 14:19:16 --> Helper loaded: inflector_helper
DEBUG - 2016-02-06 14:19:16 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/models/Colabris_m.php
INFO - 2016-02-06 14:19:16 --> Model Class Initialized
INFO - 2016-02-06 14:19:16 --> Model Class Initialized
INFO - 2016-02-06 14:19:16 --> Language file loaded: language/dutch/form_validation_lang.php
INFO - 2016-02-06 14:19:16 --> Final output sent to browser
DEBUG - 2016-02-06 14:19:16 --> Total execution time: 0.2089
INFO - 2016-02-06 14:19:18 --> Config Class Initialized
INFO - 2016-02-06 14:19:18 --> Hooks Class Initialized
DEBUG - 2016-02-06 14:19:18 --> UTF-8 Support Enabled
INFO - 2016-02-06 14:19:18 --> Utf8 Class Initialized
INFO - 2016-02-06 14:19:18 --> URI Class Initialized
INFO - 2016-02-06 14:19:18 --> Router Class Initialized
INFO - 2016-02-06 14:19:18 --> Output Class Initialized
INFO - 2016-02-06 14:19:18 --> Security Class Initialized
DEBUG - 2016-02-06 14:19:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 14:19:18 --> Input Class Initialized
INFO - 2016-02-06 14:19:18 --> Language Class Initialized
INFO - 2016-02-06 14:19:18 --> Language Class Initialized
INFO - 2016-02-06 14:19:18 --> Config Class Initialized
INFO - 2016-02-06 14:19:18 --> Loader Class Initialized
INFO - 2016-02-06 14:19:18 --> Helper loaded: form_helper
INFO - 2016-02-06 14:19:18 --> Helper loaded: url_helper
INFO - 2016-02-06 14:19:18 --> Helper loaded: general_helper
INFO - 2016-02-06 14:19:18 --> Database Driver Class Initialized
INFO - 2016-02-06 14:19:18 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 14:19:18 --> Form Validation Class Initialized
INFO - 2016-02-06 14:19:18 --> Controller Class Initialized
INFO - 2016-02-06 14:19:18 --> Model Class Initialized
INFO - 2016-02-06 14:19:18 --> Helper loaded: inflector_helper
DEBUG - 2016-02-06 14:19:18 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/models/Colabris_m.php
INFO - 2016-02-06 14:19:18 --> Model Class Initialized
INFO - 2016-02-06 14:19:18 --> Model Class Initialized
DEBUG - 2016-02-06 14:19:18 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 14:19:18 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/views/colabris/index.php
DEBUG - 2016-02-06 14:19:18 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 14:19:18 --> Final output sent to browser
DEBUG - 2016-02-06 14:19:18 --> Total execution time: 0.1729
INFO - 2016-02-06 14:19:42 --> Config Class Initialized
INFO - 2016-02-06 14:19:42 --> Hooks Class Initialized
DEBUG - 2016-02-06 14:19:42 --> UTF-8 Support Enabled
INFO - 2016-02-06 14:19:42 --> Utf8 Class Initialized
INFO - 2016-02-06 14:19:42 --> URI Class Initialized
INFO - 2016-02-06 14:19:42 --> Router Class Initialized
INFO - 2016-02-06 14:19:42 --> Output Class Initialized
INFO - 2016-02-06 14:19:42 --> Security Class Initialized
DEBUG - 2016-02-06 14:19:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 14:19:42 --> Input Class Initialized
INFO - 2016-02-06 14:19:42 --> Language Class Initialized
INFO - 2016-02-06 14:19:42 --> Language Class Initialized
INFO - 2016-02-06 14:19:42 --> Config Class Initialized
INFO - 2016-02-06 14:19:42 --> Loader Class Initialized
INFO - 2016-02-06 14:19:42 --> Helper loaded: form_helper
INFO - 2016-02-06 14:19:42 --> Helper loaded: url_helper
INFO - 2016-02-06 14:19:42 --> Helper loaded: general_helper
INFO - 2016-02-06 14:19:42 --> Database Driver Class Initialized
INFO - 2016-02-06 14:19:42 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 14:19:42 --> Form Validation Class Initialized
INFO - 2016-02-06 14:19:42 --> Controller Class Initialized
INFO - 2016-02-06 14:19:42 --> Model Class Initialized
INFO - 2016-02-06 14:19:42 --> Helper loaded: inflector_helper
DEBUG - 2016-02-06 14:19:42 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/models/Blokkeren_m.php
INFO - 2016-02-06 14:19:42 --> Model Class Initialized
INFO - 2016-02-06 14:19:42 --> Model Class Initialized
DEBUG - 2016-02-06 14:19:42 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 14:19:42 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/views/blokkeren/index.php
DEBUG - 2016-02-06 14:19:42 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 14:19:42 --> Final output sent to browser
DEBUG - 2016-02-06 14:19:42 --> Total execution time: 0.1957
INFO - 2016-02-06 14:23:03 --> Config Class Initialized
INFO - 2016-02-06 14:23:03 --> Hooks Class Initialized
DEBUG - 2016-02-06 14:23:04 --> UTF-8 Support Enabled
INFO - 2016-02-06 14:23:04 --> Utf8 Class Initialized
INFO - 2016-02-06 14:23:04 --> URI Class Initialized
DEBUG - 2016-02-06 14:23:04 --> No URI present. Default controller set.
INFO - 2016-02-06 14:23:04 --> Router Class Initialized
INFO - 2016-02-06 14:23:04 --> Output Class Initialized
INFO - 2016-02-06 14:23:04 --> Security Class Initialized
DEBUG - 2016-02-06 14:23:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 14:23:04 --> Input Class Initialized
INFO - 2016-02-06 14:23:04 --> Language Class Initialized
INFO - 2016-02-06 14:23:04 --> Language Class Initialized
INFO - 2016-02-06 14:23:04 --> Config Class Initialized
INFO - 2016-02-06 14:23:04 --> Loader Class Initialized
INFO - 2016-02-06 14:23:04 --> Helper loaded: form_helper
INFO - 2016-02-06 14:23:04 --> Helper loaded: url_helper
INFO - 2016-02-06 14:23:04 --> Helper loaded: general_helper
INFO - 2016-02-06 14:23:04 --> Database Driver Class Initialized
INFO - 2016-02-06 14:23:04 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 14:23:04 --> Form Validation Class Initialized
INFO - 2016-02-06 14:23:04 --> Controller Class Initialized
DEBUG - 2016-02-06 14:23:04 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 14:23:04 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dashboard/views/index.php
DEBUG - 2016-02-06 14:23:04 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 14:23:04 --> Final output sent to browser
DEBUG - 2016-02-06 14:23:04 --> Total execution time: 0.1867
INFO - 2016-02-06 14:26:40 --> Config Class Initialized
INFO - 2016-02-06 14:26:40 --> Hooks Class Initialized
DEBUG - 2016-02-06 14:26:40 --> UTF-8 Support Enabled
INFO - 2016-02-06 14:26:40 --> Utf8 Class Initialized
INFO - 2016-02-06 14:26:40 --> URI Class Initialized
DEBUG - 2016-02-06 14:26:40 --> No URI present. Default controller set.
INFO - 2016-02-06 14:26:40 --> Router Class Initialized
INFO - 2016-02-06 14:26:40 --> Output Class Initialized
INFO - 2016-02-06 14:26:40 --> Security Class Initialized
DEBUG - 2016-02-06 14:26:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 14:26:40 --> Input Class Initialized
INFO - 2016-02-06 14:26:40 --> Language Class Initialized
INFO - 2016-02-06 14:26:40 --> Language Class Initialized
INFO - 2016-02-06 14:26:40 --> Config Class Initialized
INFO - 2016-02-06 14:26:40 --> Loader Class Initialized
INFO - 2016-02-06 14:26:40 --> Helper loaded: form_helper
INFO - 2016-02-06 14:26:40 --> Helper loaded: url_helper
INFO - 2016-02-06 14:26:40 --> Helper loaded: general_helper
INFO - 2016-02-06 14:26:40 --> Database Driver Class Initialized
INFO - 2016-02-06 14:26:40 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 14:26:40 --> Form Validation Class Initialized
INFO - 2016-02-06 14:26:40 --> Controller Class Initialized
DEBUG - 2016-02-06 14:26:40 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 14:26:40 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dashboard/views/index.php
DEBUG - 2016-02-06 14:26:40 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 14:26:40 --> Final output sent to browser
DEBUG - 2016-02-06 14:26:40 --> Total execution time: 0.1779
INFO - 2016-02-06 14:26:42 --> Config Class Initialized
INFO - 2016-02-06 14:26:42 --> Hooks Class Initialized
DEBUG - 2016-02-06 14:26:42 --> UTF-8 Support Enabled
INFO - 2016-02-06 14:26:42 --> Utf8 Class Initialized
INFO - 2016-02-06 14:26:42 --> URI Class Initialized
INFO - 2016-02-06 14:26:42 --> Router Class Initialized
INFO - 2016-02-06 14:26:42 --> Output Class Initialized
INFO - 2016-02-06 14:26:42 --> Security Class Initialized
DEBUG - 2016-02-06 14:26:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 14:26:42 --> Input Class Initialized
INFO - 2016-02-06 14:26:42 --> Language Class Initialized
ERROR - 2016-02-06 14:26:42 --> 404 Page Not Found: ../modules/diensten/controllers//index
INFO - 2016-02-06 14:27:10 --> Config Class Initialized
INFO - 2016-02-06 14:27:10 --> Hooks Class Initialized
DEBUG - 2016-02-06 14:27:10 --> UTF-8 Support Enabled
INFO - 2016-02-06 14:27:10 --> Utf8 Class Initialized
INFO - 2016-02-06 14:27:10 --> URI Class Initialized
INFO - 2016-02-06 14:27:10 --> Router Class Initialized
INFO - 2016-02-06 14:27:10 --> Output Class Initialized
INFO - 2016-02-06 14:27:10 --> Security Class Initialized
DEBUG - 2016-02-06 14:27:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 14:27:10 --> Input Class Initialized
INFO - 2016-02-06 14:27:10 --> Language Class Initialized
ERROR - 2016-02-06 14:27:10 --> 404 Page Not Found: ../modules/diensten/controllers//index
INFO - 2016-02-06 14:28:01 --> Config Class Initialized
INFO - 2016-02-06 14:28:01 --> Hooks Class Initialized
DEBUG - 2016-02-06 14:28:01 --> UTF-8 Support Enabled
INFO - 2016-02-06 14:28:01 --> Utf8 Class Initialized
INFO - 2016-02-06 14:28:01 --> URI Class Initialized
INFO - 2016-02-06 14:28:01 --> Router Class Initialized
INFO - 2016-02-06 14:28:01 --> Output Class Initialized
INFO - 2016-02-06 14:28:01 --> Security Class Initialized
DEBUG - 2016-02-06 14:28:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 14:28:01 --> Input Class Initialized
INFO - 2016-02-06 14:28:01 --> Language Class Initialized
INFO - 2016-02-06 14:28:01 --> Language Class Initialized
INFO - 2016-02-06 14:28:01 --> Config Class Initialized
INFO - 2016-02-06 14:28:01 --> Loader Class Initialized
INFO - 2016-02-06 14:28:01 --> Helper loaded: form_helper
INFO - 2016-02-06 14:28:01 --> Helper loaded: url_helper
INFO - 2016-02-06 14:28:01 --> Helper loaded: general_helper
INFO - 2016-02-06 14:28:01 --> Database Driver Class Initialized
INFO - 2016-02-06 14:28:01 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 14:28:01 --> Form Validation Class Initialized
INFO - 2016-02-06 14:28:01 --> Controller Class Initialized
INFO - 2016-02-06 14:28:01 --> Model Class Initialized
INFO - 2016-02-06 14:28:01 --> Helper loaded: inflector_helper
DEBUG - 2016-02-06 14:28:01 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/models/Aftekenlijsten_m.php
INFO - 2016-02-06 14:28:01 --> Model Class Initialized
INFO - 2016-02-06 14:28:02 --> Model Class Initialized
DEBUG - 2016-02-06 14:28:02 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 14:28:02 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/views/aftekenlijsten/index.php
DEBUG - 2016-02-06 14:28:02 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 14:28:02 --> Final output sent to browser
DEBUG - 2016-02-06 14:28:02 --> Total execution time: 0.1711
INFO - 2016-02-06 14:37:25 --> Config Class Initialized
INFO - 2016-02-06 14:37:25 --> Hooks Class Initialized
DEBUG - 2016-02-06 14:37:25 --> UTF-8 Support Enabled
INFO - 2016-02-06 14:37:25 --> Utf8 Class Initialized
INFO - 2016-02-06 14:37:25 --> URI Class Initialized
INFO - 2016-02-06 14:37:25 --> Router Class Initialized
INFO - 2016-02-06 14:37:25 --> Output Class Initialized
INFO - 2016-02-06 14:37:25 --> Security Class Initialized
DEBUG - 2016-02-06 14:37:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 14:37:25 --> Input Class Initialized
INFO - 2016-02-06 14:37:25 --> Language Class Initialized
INFO - 2016-02-06 14:37:25 --> Language Class Initialized
INFO - 2016-02-06 14:37:25 --> Config Class Initialized
INFO - 2016-02-06 14:37:25 --> Loader Class Initialized
INFO - 2016-02-06 14:37:25 --> Helper loaded: form_helper
INFO - 2016-02-06 14:37:25 --> Helper loaded: url_helper
INFO - 2016-02-06 14:37:25 --> Helper loaded: general_helper
INFO - 2016-02-06 14:37:25 --> Database Driver Class Initialized
INFO - 2016-02-06 14:37:25 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 14:37:25 --> Form Validation Class Initialized
DEBUG - 2016-02-06 14:37:25 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 14:37:25 --> Email Class Initialized
INFO - 2016-02-06 14:37:25 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 14:37:25 --> Helper loaded: cookie_helper
INFO - 2016-02-06 14:37:25 --> Helper loaded: language_helper
INFO - 2016-02-06 14:37:25 --> Model Class Initialized
INFO - 2016-02-06 14:37:25 --> Helper loaded: inflector_helper
INFO - 2016-02-06 14:39:13 --> Config Class Initialized
INFO - 2016-02-06 14:39:13 --> Hooks Class Initialized
DEBUG - 2016-02-06 14:39:13 --> UTF-8 Support Enabled
INFO - 2016-02-06 14:39:13 --> Utf8 Class Initialized
INFO - 2016-02-06 14:39:13 --> URI Class Initialized
INFO - 2016-02-06 14:39:13 --> Router Class Initialized
INFO - 2016-02-06 14:39:13 --> Output Class Initialized
INFO - 2016-02-06 14:39:13 --> Security Class Initialized
DEBUG - 2016-02-06 14:39:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 14:39:13 --> Input Class Initialized
INFO - 2016-02-06 14:39:13 --> Language Class Initialized
INFO - 2016-02-06 14:39:13 --> Language Class Initialized
INFO - 2016-02-06 14:39:13 --> Config Class Initialized
INFO - 2016-02-06 14:39:13 --> Loader Class Initialized
INFO - 2016-02-06 14:39:13 --> Helper loaded: form_helper
INFO - 2016-02-06 14:39:13 --> Helper loaded: url_helper
INFO - 2016-02-06 14:39:13 --> Helper loaded: general_helper
INFO - 2016-02-06 14:39:13 --> Database Driver Class Initialized
INFO - 2016-02-06 14:39:13 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 14:39:13 --> Form Validation Class Initialized
DEBUG - 2016-02-06 14:39:13 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 14:39:13 --> Email Class Initialized
INFO - 2016-02-06 14:39:13 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 14:39:13 --> Helper loaded: cookie_helper
INFO - 2016-02-06 14:39:13 --> Helper loaded: language_helper
INFO - 2016-02-06 14:39:13 --> Model Class Initialized
INFO - 2016-02-06 14:39:13 --> Helper loaded: inflector_helper
INFO - 2016-02-06 14:39:35 --> Config Class Initialized
INFO - 2016-02-06 14:39:35 --> Hooks Class Initialized
DEBUG - 2016-02-06 14:39:35 --> UTF-8 Support Enabled
INFO - 2016-02-06 14:39:35 --> Utf8 Class Initialized
INFO - 2016-02-06 14:39:35 --> URI Class Initialized
INFO - 2016-02-06 14:39:35 --> Router Class Initialized
INFO - 2016-02-06 14:39:35 --> Output Class Initialized
INFO - 2016-02-06 14:39:35 --> Security Class Initialized
DEBUG - 2016-02-06 14:39:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 14:39:35 --> Input Class Initialized
INFO - 2016-02-06 14:39:35 --> Language Class Initialized
INFO - 2016-02-06 14:39:35 --> Language Class Initialized
INFO - 2016-02-06 14:39:35 --> Config Class Initialized
INFO - 2016-02-06 14:39:35 --> Loader Class Initialized
INFO - 2016-02-06 14:39:35 --> Helper loaded: form_helper
INFO - 2016-02-06 14:39:35 --> Helper loaded: url_helper
INFO - 2016-02-06 14:39:35 --> Helper loaded: general_helper
INFO - 2016-02-06 14:39:35 --> Database Driver Class Initialized
INFO - 2016-02-06 14:39:35 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 14:39:35 --> Form Validation Class Initialized
DEBUG - 2016-02-06 14:39:35 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 14:39:35 --> Email Class Initialized
INFO - 2016-02-06 14:39:35 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 14:39:35 --> Helper loaded: cookie_helper
INFO - 2016-02-06 14:39:35 --> Helper loaded: language_helper
INFO - 2016-02-06 14:39:35 --> Model Class Initialized
INFO - 2016-02-06 14:39:35 --> Helper loaded: inflector_helper
INFO - 2016-02-06 14:39:35 --> Model Class Initialized
INFO - 2016-02-06 14:39:35 --> Helper loaded: date_helper
INFO - 2016-02-06 14:39:35 --> Controller Class Initialized
INFO - 2016-02-06 14:39:35 --> Config Class Initialized
INFO - 2016-02-06 14:39:35 --> Hooks Class Initialized
DEBUG - 2016-02-06 14:39:35 --> UTF-8 Support Enabled
INFO - 2016-02-06 14:39:35 --> Utf8 Class Initialized
INFO - 2016-02-06 14:39:35 --> URI Class Initialized
INFO - 2016-02-06 14:39:35 --> Router Class Initialized
INFO - 2016-02-06 14:39:35 --> Output Class Initialized
INFO - 2016-02-06 14:39:35 --> Security Class Initialized
DEBUG - 2016-02-06 14:39:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 14:39:35 --> Input Class Initialized
INFO - 2016-02-06 14:39:35 --> Language Class Initialized
INFO - 2016-02-06 14:39:35 --> Language Class Initialized
INFO - 2016-02-06 14:39:35 --> Config Class Initialized
INFO - 2016-02-06 14:39:35 --> Loader Class Initialized
INFO - 2016-02-06 14:39:35 --> Helper loaded: form_helper
INFO - 2016-02-06 14:39:35 --> Helper loaded: url_helper
INFO - 2016-02-06 14:39:35 --> Helper loaded: general_helper
INFO - 2016-02-06 14:39:35 --> Database Driver Class Initialized
INFO - 2016-02-06 14:39:35 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 14:39:35 --> Form Validation Class Initialized
DEBUG - 2016-02-06 14:39:35 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 14:39:35 --> Email Class Initialized
INFO - 2016-02-06 14:39:35 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 14:39:35 --> Helper loaded: cookie_helper
INFO - 2016-02-06 14:39:35 --> Helper loaded: language_helper
INFO - 2016-02-06 14:39:35 --> Model Class Initialized
INFO - 2016-02-06 14:39:35 --> Helper loaded: inflector_helper
INFO - 2016-02-06 14:39:35 --> Model Class Initialized
INFO - 2016-02-06 14:39:35 --> Helper loaded: date_helper
INFO - 2016-02-06 14:39:35 --> Controller Class Initialized
INFO - 2016-02-06 14:39:35 --> Final output sent to browser
DEBUG - 2016-02-06 14:39:35 --> Total execution time: 0.1866
INFO - 2016-02-06 14:41:24 --> Config Class Initialized
INFO - 2016-02-06 14:41:24 --> Hooks Class Initialized
DEBUG - 2016-02-06 14:41:24 --> UTF-8 Support Enabled
INFO - 2016-02-06 14:41:24 --> Utf8 Class Initialized
INFO - 2016-02-06 14:41:24 --> URI Class Initialized
INFO - 2016-02-06 14:41:24 --> Router Class Initialized
INFO - 2016-02-06 14:41:24 --> Output Class Initialized
INFO - 2016-02-06 14:41:24 --> Security Class Initialized
DEBUG - 2016-02-06 14:41:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 14:41:24 --> Input Class Initialized
INFO - 2016-02-06 14:41:24 --> Language Class Initialized
INFO - 2016-02-06 14:41:24 --> Language Class Initialized
INFO - 2016-02-06 14:41:24 --> Config Class Initialized
INFO - 2016-02-06 14:41:24 --> Loader Class Initialized
INFO - 2016-02-06 14:41:24 --> Helper loaded: form_helper
INFO - 2016-02-06 14:41:24 --> Helper loaded: url_helper
INFO - 2016-02-06 14:41:24 --> Helper loaded: general_helper
INFO - 2016-02-06 14:41:24 --> Database Driver Class Initialized
INFO - 2016-02-06 14:41:24 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 14:41:24 --> Form Validation Class Initialized
DEBUG - 2016-02-06 14:41:24 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 14:41:24 --> Email Class Initialized
INFO - 2016-02-06 14:41:24 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 14:41:24 --> Helper loaded: cookie_helper
INFO - 2016-02-06 14:41:24 --> Helper loaded: language_helper
INFO - 2016-02-06 14:41:24 --> Model Class Initialized
INFO - 2016-02-06 14:41:24 --> Helper loaded: inflector_helper
INFO - 2016-02-06 14:41:24 --> Model Class Initialized
INFO - 2016-02-06 14:41:24 --> Helper loaded: date_helper
INFO - 2016-02-06 14:41:24 --> Controller Class Initialized
INFO - 2016-02-06 14:41:24 --> Final output sent to browser
DEBUG - 2016-02-06 14:41:24 --> Total execution time: 0.2114
INFO - 2016-02-06 14:41:26 --> Config Class Initialized
INFO - 2016-02-06 14:41:26 --> Hooks Class Initialized
DEBUG - 2016-02-06 14:41:26 --> UTF-8 Support Enabled
INFO - 2016-02-06 14:41:26 --> Utf8 Class Initialized
INFO - 2016-02-06 14:41:26 --> URI Class Initialized
INFO - 2016-02-06 14:41:27 --> Router Class Initialized
INFO - 2016-02-06 14:41:27 --> Output Class Initialized
INFO - 2016-02-06 14:41:27 --> Security Class Initialized
DEBUG - 2016-02-06 14:41:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 14:41:27 --> Input Class Initialized
INFO - 2016-02-06 14:41:27 --> Language Class Initialized
INFO - 2016-02-06 14:41:27 --> Language Class Initialized
INFO - 2016-02-06 14:41:27 --> Config Class Initialized
INFO - 2016-02-06 14:41:27 --> Loader Class Initialized
INFO - 2016-02-06 14:41:27 --> Helper loaded: form_helper
INFO - 2016-02-06 14:41:27 --> Helper loaded: url_helper
INFO - 2016-02-06 14:41:27 --> Helper loaded: general_helper
INFO - 2016-02-06 14:41:27 --> Database Driver Class Initialized
INFO - 2016-02-06 14:41:27 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 14:41:27 --> Form Validation Class Initialized
DEBUG - 2016-02-06 14:41:27 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 14:41:27 --> Email Class Initialized
INFO - 2016-02-06 14:41:27 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 14:41:27 --> Helper loaded: cookie_helper
INFO - 2016-02-06 14:41:27 --> Helper loaded: language_helper
INFO - 2016-02-06 14:41:27 --> Model Class Initialized
INFO - 2016-02-06 14:41:27 --> Helper loaded: inflector_helper
INFO - 2016-02-06 14:41:27 --> Model Class Initialized
INFO - 2016-02-06 14:41:27 --> Helper loaded: date_helper
INFO - 2016-02-06 14:41:27 --> Controller Class Initialized
INFO - 2016-02-06 14:41:27 --> Final output sent to browser
DEBUG - 2016-02-06 14:41:27 --> Total execution time: 0.2109
INFO - 2016-02-06 14:41:41 --> Config Class Initialized
INFO - 2016-02-06 14:41:41 --> Hooks Class Initialized
DEBUG - 2016-02-06 14:41:41 --> UTF-8 Support Enabled
INFO - 2016-02-06 14:41:41 --> Utf8 Class Initialized
INFO - 2016-02-06 14:41:41 --> URI Class Initialized
INFO - 2016-02-06 14:41:41 --> Router Class Initialized
INFO - 2016-02-06 14:41:41 --> Output Class Initialized
INFO - 2016-02-06 14:41:41 --> Security Class Initialized
DEBUG - 2016-02-06 14:41:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 14:41:41 --> Input Class Initialized
INFO - 2016-02-06 14:41:41 --> Language Class Initialized
INFO - 2016-02-06 14:41:41 --> Language Class Initialized
INFO - 2016-02-06 14:41:41 --> Config Class Initialized
INFO - 2016-02-06 14:41:41 --> Loader Class Initialized
INFO - 2016-02-06 14:41:41 --> Helper loaded: form_helper
INFO - 2016-02-06 14:41:41 --> Helper loaded: url_helper
INFO - 2016-02-06 14:41:41 --> Helper loaded: general_helper
INFO - 2016-02-06 14:41:41 --> Database Driver Class Initialized
INFO - 2016-02-06 14:41:41 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 14:41:41 --> Form Validation Class Initialized
DEBUG - 2016-02-06 14:41:41 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 14:41:41 --> Email Class Initialized
INFO - 2016-02-06 14:41:41 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 14:41:41 --> Helper loaded: cookie_helper
INFO - 2016-02-06 14:41:41 --> Helper loaded: language_helper
INFO - 2016-02-06 14:41:41 --> Model Class Initialized
INFO - 2016-02-06 14:41:41 --> Helper loaded: inflector_helper
INFO - 2016-02-06 14:41:41 --> Model Class Initialized
INFO - 2016-02-06 14:41:41 --> Helper loaded: date_helper
INFO - 2016-02-06 14:41:41 --> Controller Class Initialized
INFO - 2016-02-06 14:41:41 --> Final output sent to browser
DEBUG - 2016-02-06 14:41:41 --> Total execution time: 0.1956
INFO - 2016-02-06 14:43:28 --> Config Class Initialized
INFO - 2016-02-06 14:43:28 --> Hooks Class Initialized
DEBUG - 2016-02-06 14:43:28 --> UTF-8 Support Enabled
INFO - 2016-02-06 14:43:28 --> Utf8 Class Initialized
INFO - 2016-02-06 14:43:28 --> URI Class Initialized
DEBUG - 2016-02-06 14:43:28 --> No URI present. Default controller set.
INFO - 2016-02-06 14:43:28 --> Router Class Initialized
INFO - 2016-02-06 14:43:28 --> Output Class Initialized
INFO - 2016-02-06 14:43:28 --> Security Class Initialized
DEBUG - 2016-02-06 14:43:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 14:43:28 --> Input Class Initialized
INFO - 2016-02-06 14:43:28 --> Language Class Initialized
INFO - 2016-02-06 14:43:28 --> Language Class Initialized
INFO - 2016-02-06 14:43:28 --> Config Class Initialized
INFO - 2016-02-06 14:43:28 --> Loader Class Initialized
INFO - 2016-02-06 14:43:28 --> Helper loaded: form_helper
INFO - 2016-02-06 14:43:28 --> Helper loaded: url_helper
INFO - 2016-02-06 14:43:28 --> Helper loaded: general_helper
INFO - 2016-02-06 14:43:28 --> Database Driver Class Initialized
INFO - 2016-02-06 14:43:28 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 14:43:28 --> Form Validation Class Initialized
DEBUG - 2016-02-06 14:43:28 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 14:43:28 --> Email Class Initialized
INFO - 2016-02-06 14:43:28 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 14:43:28 --> Helper loaded: cookie_helper
INFO - 2016-02-06 14:43:28 --> Helper loaded: language_helper
INFO - 2016-02-06 14:43:28 --> Model Class Initialized
INFO - 2016-02-06 14:43:28 --> Helper loaded: inflector_helper
INFO - 2016-02-06 14:43:28 --> Model Class Initialized
INFO - 2016-02-06 14:43:28 --> Helper loaded: date_helper
INFO - 2016-02-06 14:43:28 --> Controller Class Initialized
DEBUG - 2016-02-06 14:43:28 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 14:43:28 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dashboard/views/index.php
DEBUG - 2016-02-06 14:43:28 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 14:43:28 --> Final output sent to browser
DEBUG - 2016-02-06 14:43:28 --> Total execution time: 0.2161
INFO - 2016-02-06 14:43:33 --> Config Class Initialized
INFO - 2016-02-06 14:43:33 --> Hooks Class Initialized
DEBUG - 2016-02-06 14:43:33 --> UTF-8 Support Enabled
INFO - 2016-02-06 14:43:33 --> Utf8 Class Initialized
INFO - 2016-02-06 14:43:33 --> URI Class Initialized
INFO - 2016-02-06 14:43:33 --> Router Class Initialized
INFO - 2016-02-06 14:43:33 --> Output Class Initialized
INFO - 2016-02-06 14:43:33 --> Security Class Initialized
DEBUG - 2016-02-06 14:43:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 14:43:33 --> Input Class Initialized
INFO - 2016-02-06 14:43:33 --> Language Class Initialized
INFO - 2016-02-06 14:43:33 --> Language Class Initialized
INFO - 2016-02-06 14:43:33 --> Config Class Initialized
INFO - 2016-02-06 14:43:33 --> Loader Class Initialized
INFO - 2016-02-06 14:43:33 --> Helper loaded: form_helper
INFO - 2016-02-06 14:43:33 --> Helper loaded: url_helper
INFO - 2016-02-06 14:43:33 --> Helper loaded: general_helper
INFO - 2016-02-06 14:43:33 --> Database Driver Class Initialized
INFO - 2016-02-06 14:43:33 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 14:43:33 --> Form Validation Class Initialized
DEBUG - 2016-02-06 14:43:33 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 14:43:33 --> Email Class Initialized
INFO - 2016-02-06 14:43:33 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 14:43:33 --> Helper loaded: cookie_helper
INFO - 2016-02-06 14:43:33 --> Helper loaded: language_helper
INFO - 2016-02-06 14:43:33 --> Model Class Initialized
INFO - 2016-02-06 14:43:33 --> Helper loaded: inflector_helper
INFO - 2016-02-06 14:43:33 --> Model Class Initialized
INFO - 2016-02-06 14:43:33 --> Helper loaded: date_helper
INFO - 2016-02-06 14:43:33 --> Controller Class Initialized
DEBUG - 2016-02-06 14:43:33 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 14:43:33 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dashboard/views/index.php
DEBUG - 2016-02-06 14:43:33 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 14:43:33 --> Final output sent to browser
DEBUG - 2016-02-06 14:43:33 --> Total execution time: 0.3472
INFO - 2016-02-06 14:45:20 --> Config Class Initialized
INFO - 2016-02-06 14:45:20 --> Hooks Class Initialized
DEBUG - 2016-02-06 14:45:20 --> UTF-8 Support Enabled
INFO - 2016-02-06 14:45:20 --> Utf8 Class Initialized
INFO - 2016-02-06 14:45:20 --> URI Class Initialized
INFO - 2016-02-06 14:45:20 --> Router Class Initialized
INFO - 2016-02-06 14:45:20 --> Output Class Initialized
INFO - 2016-02-06 14:45:20 --> Security Class Initialized
DEBUG - 2016-02-06 14:45:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 14:45:20 --> Input Class Initialized
INFO - 2016-02-06 14:45:20 --> Language Class Initialized
INFO - 2016-02-06 14:45:20 --> Language Class Initialized
INFO - 2016-02-06 14:45:20 --> Config Class Initialized
INFO - 2016-02-06 14:45:20 --> Loader Class Initialized
INFO - 2016-02-06 14:45:20 --> Helper loaded: form_helper
INFO - 2016-02-06 14:45:20 --> Helper loaded: url_helper
INFO - 2016-02-06 14:45:20 --> Helper loaded: general_helper
INFO - 2016-02-06 14:45:21 --> Database Driver Class Initialized
INFO - 2016-02-06 14:45:21 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 14:45:21 --> Form Validation Class Initialized
DEBUG - 2016-02-06 14:45:21 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 14:45:21 --> Email Class Initialized
INFO - 2016-02-06 14:45:21 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 14:45:21 --> Helper loaded: cookie_helper
INFO - 2016-02-06 14:45:21 --> Helper loaded: language_helper
INFO - 2016-02-06 14:45:21 --> Model Class Initialized
INFO - 2016-02-06 14:45:21 --> Helper loaded: inflector_helper
INFO - 2016-02-06 14:45:21 --> Model Class Initialized
INFO - 2016-02-06 14:45:21 --> Helper loaded: date_helper
INFO - 2016-02-06 14:45:21 --> Controller Class Initialized
DEBUG - 2016-02-06 14:45:21 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 14:45:21 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dashboard/views/index.php
DEBUG - 2016-02-06 14:45:21 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 14:45:21 --> Final output sent to browser
DEBUG - 2016-02-06 14:45:21 --> Total execution time: 0.2748
INFO - 2016-02-06 14:55:24 --> Config Class Initialized
INFO - 2016-02-06 14:55:24 --> Hooks Class Initialized
DEBUG - 2016-02-06 14:55:24 --> UTF-8 Support Enabled
INFO - 2016-02-06 14:55:24 --> Utf8 Class Initialized
INFO - 2016-02-06 14:55:24 --> URI Class Initialized
INFO - 2016-02-06 14:55:24 --> Router Class Initialized
INFO - 2016-02-06 14:55:24 --> Output Class Initialized
INFO - 2016-02-06 14:55:24 --> Security Class Initialized
DEBUG - 2016-02-06 14:55:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 14:55:24 --> Input Class Initialized
INFO - 2016-02-06 14:55:24 --> Language Class Initialized
INFO - 2016-02-06 14:55:24 --> Language Class Initialized
INFO - 2016-02-06 14:55:24 --> Config Class Initialized
INFO - 2016-02-06 14:55:24 --> Loader Class Initialized
INFO - 2016-02-06 14:55:24 --> Helper loaded: form_helper
INFO - 2016-02-06 14:55:24 --> Helper loaded: url_helper
INFO - 2016-02-06 14:55:24 --> Helper loaded: general_helper
INFO - 2016-02-06 14:55:24 --> Database Driver Class Initialized
INFO - 2016-02-06 14:55:24 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 14:55:24 --> Form Validation Class Initialized
DEBUG - 2016-02-06 14:55:24 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 14:55:24 --> Email Class Initialized
INFO - 2016-02-06 14:55:24 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 14:55:24 --> Helper loaded: cookie_helper
INFO - 2016-02-06 14:55:24 --> Helper loaded: language_helper
INFO - 2016-02-06 14:55:24 --> Model Class Initialized
INFO - 2016-02-06 14:55:24 --> Helper loaded: inflector_helper
INFO - 2016-02-06 14:55:24 --> Model Class Initialized
INFO - 2016-02-06 14:55:24 --> Helper loaded: date_helper
INFO - 2016-02-06 14:55:24 --> Controller Class Initialized
ERROR - 2016-02-06 14:55:24 --> Severity: Error --> Call to undefined method Dashboard::member_view() C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\dashboard\controllers\dashboard.php 7
INFO - 2016-02-06 14:55:37 --> Config Class Initialized
INFO - 2016-02-06 14:55:37 --> Hooks Class Initialized
DEBUG - 2016-02-06 14:55:37 --> UTF-8 Support Enabled
INFO - 2016-02-06 14:55:37 --> Utf8 Class Initialized
INFO - 2016-02-06 14:55:37 --> URI Class Initialized
INFO - 2016-02-06 14:55:37 --> Router Class Initialized
INFO - 2016-02-06 14:55:37 --> Output Class Initialized
INFO - 2016-02-06 14:55:37 --> Security Class Initialized
DEBUG - 2016-02-06 14:55:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 14:55:37 --> Input Class Initialized
INFO - 2016-02-06 14:55:37 --> Language Class Initialized
INFO - 2016-02-06 14:55:37 --> Language Class Initialized
INFO - 2016-02-06 14:55:37 --> Config Class Initialized
INFO - 2016-02-06 14:55:37 --> Loader Class Initialized
INFO - 2016-02-06 14:55:37 --> Helper loaded: form_helper
INFO - 2016-02-06 14:55:37 --> Helper loaded: url_helper
INFO - 2016-02-06 14:55:37 --> Helper loaded: general_helper
INFO - 2016-02-06 14:55:37 --> Database Driver Class Initialized
INFO - 2016-02-06 14:55:37 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 14:55:37 --> Form Validation Class Initialized
DEBUG - 2016-02-06 14:55:37 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 14:55:37 --> Email Class Initialized
INFO - 2016-02-06 14:55:37 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 14:55:37 --> Helper loaded: cookie_helper
INFO - 2016-02-06 14:55:37 --> Helper loaded: language_helper
INFO - 2016-02-06 14:55:37 --> Model Class Initialized
INFO - 2016-02-06 14:55:37 --> Helper loaded: inflector_helper
INFO - 2016-02-06 14:55:37 --> Model Class Initialized
INFO - 2016-02-06 14:55:37 --> Helper loaded: date_helper
INFO - 2016-02-06 14:55:37 --> Controller Class Initialized
DEBUG - 2016-02-06 14:55:37 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 14:55:38 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dashboard/views/index.php
DEBUG - 2016-02-06 14:55:38 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 14:55:38 --> Final output sent to browser
DEBUG - 2016-02-06 14:55:38 --> Total execution time: 0.2350
INFO - 2016-02-06 14:55:48 --> Config Class Initialized
INFO - 2016-02-06 14:55:48 --> Hooks Class Initialized
DEBUG - 2016-02-06 14:55:48 --> UTF-8 Support Enabled
INFO - 2016-02-06 14:55:48 --> Utf8 Class Initialized
INFO - 2016-02-06 14:55:48 --> URI Class Initialized
INFO - 2016-02-06 14:55:48 --> Router Class Initialized
INFO - 2016-02-06 14:55:48 --> Output Class Initialized
INFO - 2016-02-06 14:55:48 --> Security Class Initialized
DEBUG - 2016-02-06 14:55:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 14:55:48 --> Input Class Initialized
INFO - 2016-02-06 14:55:48 --> Language Class Initialized
INFO - 2016-02-06 14:55:48 --> Language Class Initialized
INFO - 2016-02-06 14:55:48 --> Config Class Initialized
INFO - 2016-02-06 14:55:48 --> Loader Class Initialized
INFO - 2016-02-06 14:55:48 --> Helper loaded: form_helper
INFO - 2016-02-06 14:55:48 --> Helper loaded: url_helper
INFO - 2016-02-06 14:55:48 --> Helper loaded: general_helper
INFO - 2016-02-06 14:55:48 --> Database Driver Class Initialized
INFO - 2016-02-06 14:55:48 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 14:55:48 --> Form Validation Class Initialized
DEBUG - 2016-02-06 14:55:48 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 14:55:48 --> Email Class Initialized
INFO - 2016-02-06 14:55:48 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 14:55:48 --> Helper loaded: cookie_helper
INFO - 2016-02-06 14:55:48 --> Helper loaded: language_helper
INFO - 2016-02-06 14:55:48 --> Model Class Initialized
INFO - 2016-02-06 14:55:48 --> Helper loaded: inflector_helper
INFO - 2016-02-06 14:55:48 --> Model Class Initialized
INFO - 2016-02-06 14:55:48 --> Helper loaded: date_helper
INFO - 2016-02-06 14:55:48 --> Controller Class Initialized
DEBUG - 2016-02-06 14:55:48 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 14:55:48 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dashboard/views/index.php
DEBUG - 2016-02-06 14:55:48 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 14:55:48 --> Final output sent to browser
DEBUG - 2016-02-06 14:55:48 --> Total execution time: 0.2274
INFO - 2016-02-06 14:55:57 --> Config Class Initialized
INFO - 2016-02-06 14:55:57 --> Hooks Class Initialized
DEBUG - 2016-02-06 14:55:57 --> UTF-8 Support Enabled
INFO - 2016-02-06 14:55:57 --> Utf8 Class Initialized
INFO - 2016-02-06 14:55:57 --> URI Class Initialized
INFO - 2016-02-06 14:55:57 --> Router Class Initialized
INFO - 2016-02-06 14:55:57 --> Output Class Initialized
INFO - 2016-02-06 14:55:57 --> Security Class Initialized
DEBUG - 2016-02-06 14:55:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 14:55:57 --> Input Class Initialized
INFO - 2016-02-06 14:55:57 --> Language Class Initialized
INFO - 2016-02-06 14:55:57 --> Language Class Initialized
INFO - 2016-02-06 14:55:57 --> Config Class Initialized
INFO - 2016-02-06 14:55:57 --> Loader Class Initialized
INFO - 2016-02-06 14:55:57 --> Helper loaded: form_helper
INFO - 2016-02-06 14:55:57 --> Helper loaded: url_helper
INFO - 2016-02-06 14:55:57 --> Helper loaded: general_helper
INFO - 2016-02-06 14:55:57 --> Database Driver Class Initialized
INFO - 2016-02-06 14:55:57 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 14:55:57 --> Form Validation Class Initialized
DEBUG - 2016-02-06 14:55:57 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 14:55:57 --> Email Class Initialized
INFO - 2016-02-06 14:55:57 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 14:55:57 --> Helper loaded: cookie_helper
INFO - 2016-02-06 14:55:57 --> Helper loaded: language_helper
INFO - 2016-02-06 14:55:57 --> Model Class Initialized
INFO - 2016-02-06 14:55:57 --> Helper loaded: inflector_helper
INFO - 2016-02-06 14:55:57 --> Model Class Initialized
INFO - 2016-02-06 14:55:57 --> Helper loaded: date_helper
INFO - 2016-02-06 14:55:57 --> Controller Class Initialized
DEBUG - 2016-02-06 14:55:57 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 14:55:57 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dashboard/views/index.php
DEBUG - 2016-02-06 14:55:57 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 14:55:57 --> Final output sent to browser
DEBUG - 2016-02-06 14:55:57 --> Total execution time: 0.2261
INFO - 2016-02-06 14:56:30 --> Config Class Initialized
INFO - 2016-02-06 14:56:30 --> Hooks Class Initialized
DEBUG - 2016-02-06 14:56:30 --> UTF-8 Support Enabled
INFO - 2016-02-06 14:56:30 --> Utf8 Class Initialized
INFO - 2016-02-06 14:56:30 --> URI Class Initialized
INFO - 2016-02-06 14:56:30 --> Router Class Initialized
INFO - 2016-02-06 14:56:30 --> Output Class Initialized
INFO - 2016-02-06 14:56:30 --> Security Class Initialized
DEBUG - 2016-02-06 14:56:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 14:56:30 --> Input Class Initialized
INFO - 2016-02-06 14:56:30 --> Language Class Initialized
INFO - 2016-02-06 14:56:30 --> Language Class Initialized
INFO - 2016-02-06 14:56:30 --> Config Class Initialized
INFO - 2016-02-06 14:56:30 --> Loader Class Initialized
INFO - 2016-02-06 14:56:30 --> Helper loaded: form_helper
INFO - 2016-02-06 14:56:30 --> Helper loaded: url_helper
INFO - 2016-02-06 14:56:30 --> Helper loaded: general_helper
INFO - 2016-02-06 14:56:30 --> Database Driver Class Initialized
INFO - 2016-02-06 14:56:30 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 14:56:30 --> Form Validation Class Initialized
DEBUG - 2016-02-06 14:56:30 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 14:56:30 --> Email Class Initialized
INFO - 2016-02-06 14:56:30 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 14:56:30 --> Helper loaded: cookie_helper
INFO - 2016-02-06 14:56:30 --> Helper loaded: language_helper
INFO - 2016-02-06 14:56:30 --> Model Class Initialized
INFO - 2016-02-06 14:56:30 --> Helper loaded: inflector_helper
INFO - 2016-02-06 14:56:30 --> Model Class Initialized
INFO - 2016-02-06 14:56:30 --> Helper loaded: date_helper
INFO - 2016-02-06 14:56:30 --> Controller Class Initialized
DEBUG - 2016-02-06 14:56:30 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 14:56:30 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dashboard/views/index.php
DEBUG - 2016-02-06 14:56:30 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 14:56:30 --> Final output sent to browser
DEBUG - 2016-02-06 14:56:30 --> Total execution time: 0.2387
INFO - 2016-02-06 14:57:03 --> Config Class Initialized
INFO - 2016-02-06 14:57:03 --> Hooks Class Initialized
DEBUG - 2016-02-06 14:57:03 --> UTF-8 Support Enabled
INFO - 2016-02-06 14:57:03 --> Utf8 Class Initialized
INFO - 2016-02-06 14:57:03 --> URI Class Initialized
INFO - 2016-02-06 14:57:03 --> Router Class Initialized
INFO - 2016-02-06 14:57:03 --> Output Class Initialized
INFO - 2016-02-06 14:57:03 --> Security Class Initialized
DEBUG - 2016-02-06 14:57:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 14:57:03 --> Input Class Initialized
INFO - 2016-02-06 14:57:03 --> Language Class Initialized
INFO - 2016-02-06 14:57:03 --> Language Class Initialized
INFO - 2016-02-06 14:57:03 --> Config Class Initialized
INFO - 2016-02-06 14:57:03 --> Loader Class Initialized
INFO - 2016-02-06 14:57:03 --> Helper loaded: form_helper
INFO - 2016-02-06 14:57:03 --> Helper loaded: url_helper
INFO - 2016-02-06 14:57:03 --> Helper loaded: general_helper
INFO - 2016-02-06 14:57:03 --> Database Driver Class Initialized
INFO - 2016-02-06 14:57:03 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 14:57:03 --> Form Validation Class Initialized
DEBUG - 2016-02-06 14:57:03 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 14:57:03 --> Email Class Initialized
INFO - 2016-02-06 14:57:03 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 14:57:03 --> Helper loaded: cookie_helper
INFO - 2016-02-06 14:57:03 --> Helper loaded: language_helper
INFO - 2016-02-06 14:57:03 --> Model Class Initialized
INFO - 2016-02-06 14:57:03 --> Helper loaded: inflector_helper
INFO - 2016-02-06 14:57:03 --> Model Class Initialized
INFO - 2016-02-06 14:57:03 --> Helper loaded: date_helper
INFO - 2016-02-06 14:57:03 --> Controller Class Initialized
DEBUG - 2016-02-06 14:57:03 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 14:57:03 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dashboard/views/index.php
DEBUG - 2016-02-06 14:57:03 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 14:57:03 --> Final output sent to browser
DEBUG - 2016-02-06 14:57:03 --> Total execution time: 0.2319
INFO - 2016-02-06 14:57:49 --> Config Class Initialized
INFO - 2016-02-06 14:57:49 --> Hooks Class Initialized
DEBUG - 2016-02-06 14:57:49 --> UTF-8 Support Enabled
INFO - 2016-02-06 14:57:49 --> Utf8 Class Initialized
INFO - 2016-02-06 14:57:49 --> URI Class Initialized
INFO - 2016-02-06 14:57:49 --> Router Class Initialized
INFO - 2016-02-06 14:57:49 --> Output Class Initialized
INFO - 2016-02-06 14:57:49 --> Security Class Initialized
DEBUG - 2016-02-06 14:57:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 14:57:49 --> Input Class Initialized
INFO - 2016-02-06 14:57:49 --> Language Class Initialized
INFO - 2016-02-06 14:57:49 --> Language Class Initialized
INFO - 2016-02-06 14:57:49 --> Config Class Initialized
INFO - 2016-02-06 14:57:49 --> Loader Class Initialized
INFO - 2016-02-06 14:57:49 --> Helper loaded: form_helper
INFO - 2016-02-06 14:57:49 --> Helper loaded: url_helper
INFO - 2016-02-06 14:57:49 --> Helper loaded: general_helper
INFO - 2016-02-06 14:57:49 --> Database Driver Class Initialized
INFO - 2016-02-06 14:57:49 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 14:57:49 --> Form Validation Class Initialized
DEBUG - 2016-02-06 14:57:49 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 14:57:49 --> Email Class Initialized
INFO - 2016-02-06 14:57:49 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 14:57:49 --> Helper loaded: cookie_helper
INFO - 2016-02-06 14:57:49 --> Helper loaded: language_helper
INFO - 2016-02-06 14:57:49 --> Model Class Initialized
INFO - 2016-02-06 14:57:49 --> Helper loaded: inflector_helper
INFO - 2016-02-06 14:57:49 --> Model Class Initialized
INFO - 2016-02-06 14:57:49 --> Helper loaded: date_helper
INFO - 2016-02-06 14:57:49 --> Controller Class Initialized
INFO - 2016-02-06 14:57:49 --> Config Class Initialized
INFO - 2016-02-06 14:57:49 --> Hooks Class Initialized
DEBUG - 2016-02-06 14:57:49 --> UTF-8 Support Enabled
INFO - 2016-02-06 14:57:49 --> Utf8 Class Initialized
INFO - 2016-02-06 14:57:49 --> URI Class Initialized
INFO - 2016-02-06 14:57:49 --> Router Class Initialized
INFO - 2016-02-06 14:57:49 --> Output Class Initialized
INFO - 2016-02-06 14:57:49 --> Security Class Initialized
DEBUG - 2016-02-06 14:57:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 14:57:49 --> Input Class Initialized
INFO - 2016-02-06 14:57:49 --> Language Class Initialized
INFO - 2016-02-06 14:57:49 --> Language Class Initialized
INFO - 2016-02-06 14:57:49 --> Config Class Initialized
INFO - 2016-02-06 14:57:49 --> Loader Class Initialized
INFO - 2016-02-06 14:57:49 --> Helper loaded: form_helper
INFO - 2016-02-06 14:57:49 --> Helper loaded: url_helper
INFO - 2016-02-06 14:57:49 --> Helper loaded: general_helper
INFO - 2016-02-06 14:57:49 --> Database Driver Class Initialized
INFO - 2016-02-06 14:57:49 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 14:57:49 --> Form Validation Class Initialized
DEBUG - 2016-02-06 14:57:49 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 14:57:49 --> Email Class Initialized
INFO - 2016-02-06 14:57:50 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 14:57:50 --> Helper loaded: cookie_helper
INFO - 2016-02-06 14:57:50 --> Helper loaded: language_helper
INFO - 2016-02-06 14:57:50 --> Model Class Initialized
INFO - 2016-02-06 14:57:50 --> Helper loaded: inflector_helper
INFO - 2016-02-06 14:57:50 --> Model Class Initialized
INFO - 2016-02-06 14:57:50 --> Helper loaded: date_helper
INFO - 2016-02-06 14:57:50 --> Controller Class Initialized
INFO - 2016-02-06 14:57:50 --> Final output sent to browser
DEBUG - 2016-02-06 14:57:50 --> Total execution time: 0.1978
INFO - 2016-02-06 15:33:20 --> Config Class Initialized
INFO - 2016-02-06 15:33:20 --> Hooks Class Initialized
DEBUG - 2016-02-06 15:33:20 --> UTF-8 Support Enabled
INFO - 2016-02-06 15:33:20 --> Utf8 Class Initialized
INFO - 2016-02-06 15:33:20 --> URI Class Initialized
INFO - 2016-02-06 15:33:20 --> Router Class Initialized
INFO - 2016-02-06 15:33:20 --> Output Class Initialized
INFO - 2016-02-06 15:33:20 --> Security Class Initialized
DEBUG - 2016-02-06 15:33:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 15:33:20 --> Input Class Initialized
INFO - 2016-02-06 15:33:20 --> Language Class Initialized
INFO - 2016-02-06 15:33:20 --> Language Class Initialized
INFO - 2016-02-06 15:33:20 --> Config Class Initialized
INFO - 2016-02-06 15:33:20 --> Loader Class Initialized
INFO - 2016-02-06 15:33:20 --> Helper loaded: form_helper
INFO - 2016-02-06 15:33:20 --> Helper loaded: url_helper
INFO - 2016-02-06 15:33:20 --> Helper loaded: general_helper
INFO - 2016-02-06 15:33:20 --> Database Driver Class Initialized
INFO - 2016-02-06 15:33:21 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 15:33:21 --> Form Validation Class Initialized
DEBUG - 2016-02-06 15:33:21 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 15:33:21 --> Email Class Initialized
INFO - 2016-02-06 15:33:21 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 15:33:21 --> Helper loaded: cookie_helper
INFO - 2016-02-06 15:33:21 --> Helper loaded: language_helper
INFO - 2016-02-06 15:33:21 --> Model Class Initialized
INFO - 2016-02-06 15:33:21 --> Helper loaded: inflector_helper
INFO - 2016-02-06 15:33:21 --> Model Class Initialized
INFO - 2016-02-06 15:33:21 --> Helper loaded: date_helper
INFO - 2016-02-06 15:33:21 --> Controller Class Initialized
DEBUG - 2016-02-06 15:33:21 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
ERROR - 2016-02-06 15:33:21 --> Severity: Notice --> Undefined variable: users C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\users\views\login.php 13
DEBUG - 2016-02-06 15:33:21 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/views/login.php
DEBUG - 2016-02-06 15:33:21 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 15:33:21 --> Final output sent to browser
DEBUG - 2016-02-06 15:33:21 --> Total execution time: 0.2548
INFO - 2016-02-06 15:34:21 --> Config Class Initialized
INFO - 2016-02-06 15:34:21 --> Hooks Class Initialized
DEBUG - 2016-02-06 15:34:21 --> UTF-8 Support Enabled
INFO - 2016-02-06 15:34:21 --> Utf8 Class Initialized
INFO - 2016-02-06 15:34:21 --> URI Class Initialized
INFO - 2016-02-06 15:34:21 --> Router Class Initialized
INFO - 2016-02-06 15:34:21 --> Output Class Initialized
INFO - 2016-02-06 15:34:21 --> Security Class Initialized
DEBUG - 2016-02-06 15:34:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 15:34:21 --> Input Class Initialized
INFO - 2016-02-06 15:34:21 --> Language Class Initialized
ERROR - 2016-02-06 15:34:21 --> Severity: Parsing Error --> syntax error, unexpected '$data' (T_VARIABLE) C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\users\controllers\users.php 14
INFO - 2016-02-06 15:34:42 --> Config Class Initialized
INFO - 2016-02-06 15:34:42 --> Hooks Class Initialized
DEBUG - 2016-02-06 15:34:42 --> UTF-8 Support Enabled
INFO - 2016-02-06 15:34:42 --> Utf8 Class Initialized
INFO - 2016-02-06 15:34:42 --> URI Class Initialized
INFO - 2016-02-06 15:34:42 --> Router Class Initialized
INFO - 2016-02-06 15:34:42 --> Output Class Initialized
INFO - 2016-02-06 15:34:42 --> Security Class Initialized
DEBUG - 2016-02-06 15:34:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 15:34:42 --> Input Class Initialized
INFO - 2016-02-06 15:34:42 --> Language Class Initialized
ERROR - 2016-02-06 15:34:42 --> Severity: Parsing Error --> syntax error, unexpected '$this' (T_VARIABLE) C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\users\controllers\users.php 14
INFO - 2016-02-06 15:35:13 --> Config Class Initialized
INFO - 2016-02-06 15:35:13 --> Hooks Class Initialized
DEBUG - 2016-02-06 15:35:13 --> UTF-8 Support Enabled
INFO - 2016-02-06 15:35:13 --> Utf8 Class Initialized
INFO - 2016-02-06 15:35:13 --> URI Class Initialized
INFO - 2016-02-06 15:35:13 --> Router Class Initialized
INFO - 2016-02-06 15:35:13 --> Output Class Initialized
INFO - 2016-02-06 15:35:13 --> Security Class Initialized
DEBUG - 2016-02-06 15:35:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 15:35:13 --> Input Class Initialized
INFO - 2016-02-06 15:35:13 --> Language Class Initialized
INFO - 2016-02-06 15:35:13 --> Language Class Initialized
INFO - 2016-02-06 15:35:13 --> Config Class Initialized
INFO - 2016-02-06 15:35:13 --> Loader Class Initialized
INFO - 2016-02-06 15:35:13 --> Helper loaded: form_helper
INFO - 2016-02-06 15:35:13 --> Helper loaded: url_helper
INFO - 2016-02-06 15:35:13 --> Helper loaded: general_helper
INFO - 2016-02-06 15:35:13 --> Database Driver Class Initialized
INFO - 2016-02-06 15:35:13 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 15:35:13 --> Form Validation Class Initialized
DEBUG - 2016-02-06 15:35:14 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 15:35:14 --> Email Class Initialized
INFO - 2016-02-06 15:35:14 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 15:35:14 --> Helper loaded: cookie_helper
INFO - 2016-02-06 15:35:14 --> Helper loaded: language_helper
INFO - 2016-02-06 15:35:14 --> Model Class Initialized
INFO - 2016-02-06 15:35:14 --> Helper loaded: inflector_helper
INFO - 2016-02-06 15:35:14 --> Model Class Initialized
INFO - 2016-02-06 15:35:14 --> Helper loaded: date_helper
INFO - 2016-02-06 15:35:14 --> Controller Class Initialized
ERROR - 2016-02-06 15:35:14 --> Severity: Notice --> Undefined property: Users::$auth C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\users\controllers\users.php 12
ERROR - 2016-02-06 15:35:14 --> Severity: Error --> Call to a member function users_dropdown() on null C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\users\controllers\users.php 12
INFO - 2016-02-06 15:35:53 --> Config Class Initialized
INFO - 2016-02-06 15:35:53 --> Hooks Class Initialized
DEBUG - 2016-02-06 15:35:53 --> UTF-8 Support Enabled
INFO - 2016-02-06 15:35:53 --> Utf8 Class Initialized
INFO - 2016-02-06 15:35:53 --> URI Class Initialized
INFO - 2016-02-06 15:35:53 --> Router Class Initialized
INFO - 2016-02-06 15:35:53 --> Output Class Initialized
INFO - 2016-02-06 15:35:53 --> Security Class Initialized
DEBUG - 2016-02-06 15:35:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 15:35:53 --> Input Class Initialized
INFO - 2016-02-06 15:35:53 --> Language Class Initialized
INFO - 2016-02-06 15:35:53 --> Language Class Initialized
INFO - 2016-02-06 15:35:53 --> Config Class Initialized
INFO - 2016-02-06 15:35:53 --> Loader Class Initialized
INFO - 2016-02-06 15:35:53 --> Helper loaded: form_helper
INFO - 2016-02-06 15:35:53 --> Helper loaded: url_helper
INFO - 2016-02-06 15:35:53 --> Helper loaded: general_helper
INFO - 2016-02-06 15:35:53 --> Database Driver Class Initialized
INFO - 2016-02-06 15:35:53 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 15:35:53 --> Form Validation Class Initialized
DEBUG - 2016-02-06 15:35:53 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 15:35:53 --> Email Class Initialized
INFO - 2016-02-06 15:35:53 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 15:35:53 --> Helper loaded: cookie_helper
INFO - 2016-02-06 15:35:53 --> Helper loaded: language_helper
INFO - 2016-02-06 15:35:53 --> Model Class Initialized
INFO - 2016-02-06 15:35:53 --> Helper loaded: inflector_helper
INFO - 2016-02-06 15:35:53 --> Model Class Initialized
INFO - 2016-02-06 15:35:53 --> Helper loaded: date_helper
INFO - 2016-02-06 15:35:53 --> Controller Class Initialized
DEBUG - 2016-02-06 15:35:53 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Auth_m.php
INFO - 2016-02-06 15:35:53 --> Model Class Initialized
DEBUG - 2016-02-06 15:35:53 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 15:35:53 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/views/login.php
DEBUG - 2016-02-06 15:35:53 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 15:35:53 --> Final output sent to browser
DEBUG - 2016-02-06 15:35:53 --> Total execution time: 0.2524
INFO - 2016-02-06 15:39:27 --> Config Class Initialized
INFO - 2016-02-06 15:39:27 --> Hooks Class Initialized
DEBUG - 2016-02-06 15:39:27 --> UTF-8 Support Enabled
INFO - 2016-02-06 15:39:27 --> Utf8 Class Initialized
INFO - 2016-02-06 15:39:27 --> URI Class Initialized
INFO - 2016-02-06 15:39:27 --> Router Class Initialized
INFO - 2016-02-06 15:39:27 --> Output Class Initialized
INFO - 2016-02-06 15:39:27 --> Security Class Initialized
DEBUG - 2016-02-06 15:39:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 15:39:27 --> Input Class Initialized
INFO - 2016-02-06 15:39:27 --> Language Class Initialized
INFO - 2016-02-06 15:39:27 --> Language Class Initialized
INFO - 2016-02-06 15:39:27 --> Config Class Initialized
INFO - 2016-02-06 15:39:27 --> Loader Class Initialized
INFO - 2016-02-06 15:39:27 --> Helper loaded: form_helper
INFO - 2016-02-06 15:39:27 --> Helper loaded: url_helper
INFO - 2016-02-06 15:39:27 --> Helper loaded: general_helper
INFO - 2016-02-06 15:39:27 --> Database Driver Class Initialized
INFO - 2016-02-06 15:39:27 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 15:39:27 --> Form Validation Class Initialized
DEBUG - 2016-02-06 15:39:27 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 15:39:27 --> Email Class Initialized
INFO - 2016-02-06 15:39:27 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 15:39:27 --> Helper loaded: cookie_helper
INFO - 2016-02-06 15:39:27 --> Helper loaded: language_helper
INFO - 2016-02-06 15:39:27 --> Model Class Initialized
INFO - 2016-02-06 15:39:27 --> Helper loaded: inflector_helper
INFO - 2016-02-06 15:39:27 --> Model Class Initialized
INFO - 2016-02-06 15:39:27 --> Helper loaded: date_helper
INFO - 2016-02-06 15:39:27 --> Controller Class Initialized
DEBUG - 2016-02-06 15:39:27 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Auth_m.php
INFO - 2016-02-06 15:39:27 --> Model Class Initialized
DEBUG - 2016-02-06 15:39:27 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 15:39:27 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/views/login.php
DEBUG - 2016-02-06 15:39:27 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 15:39:27 --> Final output sent to browser
DEBUG - 2016-02-06 15:39:27 --> Total execution time: 0.2504
INFO - 2016-02-06 15:39:49 --> Config Class Initialized
INFO - 2016-02-06 15:39:49 --> Hooks Class Initialized
DEBUG - 2016-02-06 15:39:49 --> UTF-8 Support Enabled
INFO - 2016-02-06 15:39:49 --> Utf8 Class Initialized
INFO - 2016-02-06 15:39:49 --> URI Class Initialized
INFO - 2016-02-06 15:39:49 --> Router Class Initialized
INFO - 2016-02-06 15:39:49 --> Output Class Initialized
INFO - 2016-02-06 15:39:49 --> Security Class Initialized
DEBUG - 2016-02-06 15:39:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 15:39:49 --> Input Class Initialized
INFO - 2016-02-06 15:39:49 --> Language Class Initialized
INFO - 2016-02-06 15:39:49 --> Language Class Initialized
INFO - 2016-02-06 15:39:49 --> Config Class Initialized
INFO - 2016-02-06 15:39:49 --> Loader Class Initialized
INFO - 2016-02-06 15:39:49 --> Helper loaded: form_helper
INFO - 2016-02-06 15:39:49 --> Helper loaded: url_helper
INFO - 2016-02-06 15:39:49 --> Helper loaded: general_helper
INFO - 2016-02-06 15:39:49 --> Database Driver Class Initialized
INFO - 2016-02-06 15:39:49 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 15:39:49 --> Form Validation Class Initialized
DEBUG - 2016-02-06 15:39:49 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 15:39:49 --> Email Class Initialized
INFO - 2016-02-06 15:39:49 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 15:39:49 --> Helper loaded: cookie_helper
INFO - 2016-02-06 15:39:49 --> Helper loaded: language_helper
INFO - 2016-02-06 15:39:49 --> Model Class Initialized
INFO - 2016-02-06 15:39:49 --> Helper loaded: inflector_helper
INFO - 2016-02-06 15:39:49 --> Model Class Initialized
INFO - 2016-02-06 15:39:49 --> Helper loaded: date_helper
INFO - 2016-02-06 15:39:49 --> Controller Class Initialized
DEBUG - 2016-02-06 15:39:49 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Auth_m.php
INFO - 2016-02-06 15:39:49 --> Model Class Initialized
DEBUG - 2016-02-06 15:39:49 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 15:39:49 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/views/login.php
DEBUG - 2016-02-06 15:39:49 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 15:39:49 --> Final output sent to browser
DEBUG - 2016-02-06 15:39:49 --> Total execution time: 0.2555
INFO - 2016-02-06 15:41:04 --> Config Class Initialized
INFO - 2016-02-06 15:41:04 --> Hooks Class Initialized
DEBUG - 2016-02-06 15:41:04 --> UTF-8 Support Enabled
INFO - 2016-02-06 15:41:04 --> Utf8 Class Initialized
INFO - 2016-02-06 15:41:04 --> URI Class Initialized
INFO - 2016-02-06 15:41:04 --> Router Class Initialized
INFO - 2016-02-06 15:41:04 --> Output Class Initialized
INFO - 2016-02-06 15:41:04 --> Security Class Initialized
DEBUG - 2016-02-06 15:41:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 15:41:05 --> Input Class Initialized
INFO - 2016-02-06 15:41:05 --> Language Class Initialized
INFO - 2016-02-06 15:41:05 --> Language Class Initialized
INFO - 2016-02-06 15:41:05 --> Config Class Initialized
INFO - 2016-02-06 15:41:05 --> Loader Class Initialized
INFO - 2016-02-06 15:41:05 --> Helper loaded: form_helper
INFO - 2016-02-06 15:41:05 --> Helper loaded: url_helper
INFO - 2016-02-06 15:41:05 --> Helper loaded: general_helper
INFO - 2016-02-06 15:41:05 --> Database Driver Class Initialized
INFO - 2016-02-06 15:41:05 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 15:41:05 --> Form Validation Class Initialized
DEBUG - 2016-02-06 15:41:05 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 15:41:05 --> Email Class Initialized
INFO - 2016-02-06 15:41:05 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 15:41:05 --> Helper loaded: cookie_helper
INFO - 2016-02-06 15:41:05 --> Helper loaded: language_helper
INFO - 2016-02-06 15:41:05 --> Model Class Initialized
INFO - 2016-02-06 15:41:05 --> Helper loaded: inflector_helper
INFO - 2016-02-06 15:41:05 --> Model Class Initialized
INFO - 2016-02-06 15:41:05 --> Helper loaded: date_helper
INFO - 2016-02-06 15:41:05 --> Controller Class Initialized
DEBUG - 2016-02-06 15:41:05 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Auth_m.php
INFO - 2016-02-06 15:41:05 --> Model Class Initialized
DEBUG - 2016-02-06 15:41:05 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 15:41:05 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/views/login.php
DEBUG - 2016-02-06 15:41:05 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 15:41:05 --> Final output sent to browser
DEBUG - 2016-02-06 15:41:05 --> Total execution time: 0.2611
INFO - 2016-02-06 15:41:36 --> Config Class Initialized
INFO - 2016-02-06 15:41:36 --> Hooks Class Initialized
DEBUG - 2016-02-06 15:41:36 --> UTF-8 Support Enabled
INFO - 2016-02-06 15:41:36 --> Utf8 Class Initialized
INFO - 2016-02-06 15:41:36 --> URI Class Initialized
INFO - 2016-02-06 15:41:36 --> Router Class Initialized
INFO - 2016-02-06 15:41:36 --> Output Class Initialized
INFO - 2016-02-06 15:41:36 --> Security Class Initialized
DEBUG - 2016-02-06 15:41:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 15:41:36 --> Input Class Initialized
INFO - 2016-02-06 15:41:36 --> Language Class Initialized
INFO - 2016-02-06 15:41:36 --> Language Class Initialized
INFO - 2016-02-06 15:41:36 --> Config Class Initialized
INFO - 2016-02-06 15:41:36 --> Loader Class Initialized
INFO - 2016-02-06 15:41:36 --> Helper loaded: form_helper
INFO - 2016-02-06 15:41:36 --> Helper loaded: url_helper
INFO - 2016-02-06 15:41:36 --> Helper loaded: general_helper
INFO - 2016-02-06 15:41:36 --> Database Driver Class Initialized
INFO - 2016-02-06 15:41:36 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 15:41:36 --> Form Validation Class Initialized
DEBUG - 2016-02-06 15:41:36 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 15:41:36 --> Email Class Initialized
INFO - 2016-02-06 15:41:36 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 15:41:36 --> Helper loaded: cookie_helper
INFO - 2016-02-06 15:41:36 --> Helper loaded: language_helper
INFO - 2016-02-06 15:41:36 --> Model Class Initialized
INFO - 2016-02-06 15:41:36 --> Helper loaded: inflector_helper
INFO - 2016-02-06 15:41:36 --> Model Class Initialized
INFO - 2016-02-06 15:41:36 --> Helper loaded: date_helper
INFO - 2016-02-06 15:41:36 --> Controller Class Initialized
DEBUG - 2016-02-06 15:41:36 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Auth_m.php
INFO - 2016-02-06 15:41:36 --> Model Class Initialized
DEBUG - 2016-02-06 15:41:36 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 15:41:36 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/views/login.php
DEBUG - 2016-02-06 15:41:36 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 15:41:36 --> Final output sent to browser
DEBUG - 2016-02-06 15:41:36 --> Total execution time: 0.2655
INFO - 2016-02-06 15:55:52 --> Config Class Initialized
INFO - 2016-02-06 15:55:52 --> Hooks Class Initialized
DEBUG - 2016-02-06 15:55:52 --> UTF-8 Support Enabled
INFO - 2016-02-06 15:55:52 --> Utf8 Class Initialized
INFO - 2016-02-06 15:55:52 --> URI Class Initialized
INFO - 2016-02-06 15:55:52 --> Router Class Initialized
INFO - 2016-02-06 15:55:52 --> Output Class Initialized
INFO - 2016-02-06 15:55:52 --> Security Class Initialized
DEBUG - 2016-02-06 15:55:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 15:55:52 --> Input Class Initialized
INFO - 2016-02-06 15:55:52 --> Language Class Initialized
INFO - 2016-02-06 15:55:52 --> Language Class Initialized
INFO - 2016-02-06 15:55:52 --> Config Class Initialized
INFO - 2016-02-06 15:55:52 --> Loader Class Initialized
INFO - 2016-02-06 15:55:52 --> Helper loaded: form_helper
INFO - 2016-02-06 15:55:52 --> Helper loaded: url_helper
INFO - 2016-02-06 15:55:52 --> Helper loaded: general_helper
INFO - 2016-02-06 15:55:52 --> Database Driver Class Initialized
INFO - 2016-02-06 15:55:52 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 15:55:52 --> Form Validation Class Initialized
DEBUG - 2016-02-06 15:55:52 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 15:55:52 --> Email Class Initialized
INFO - 2016-02-06 15:55:52 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 15:55:52 --> Helper loaded: cookie_helper
INFO - 2016-02-06 15:55:52 --> Helper loaded: language_helper
INFO - 2016-02-06 15:55:52 --> Model Class Initialized
INFO - 2016-02-06 15:55:52 --> Helper loaded: inflector_helper
INFO - 2016-02-06 15:55:52 --> Model Class Initialized
INFO - 2016-02-06 15:55:52 --> Helper loaded: date_helper
INFO - 2016-02-06 15:55:52 --> Controller Class Initialized
DEBUG - 2016-02-06 15:55:52 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Auth_m.php
INFO - 2016-02-06 15:55:52 --> Model Class Initialized
ERROR - 2016-02-06 15:55:52 --> Severity: Error --> Call to undefined method Auth_m::dropdown_users() C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\users\controllers\users.php 22
INFO - 2016-02-06 15:56:00 --> Config Class Initialized
INFO - 2016-02-06 15:56:00 --> Hooks Class Initialized
DEBUG - 2016-02-06 15:56:00 --> UTF-8 Support Enabled
INFO - 2016-02-06 15:56:00 --> Utf8 Class Initialized
INFO - 2016-02-06 15:56:00 --> URI Class Initialized
INFO - 2016-02-06 15:56:00 --> Router Class Initialized
INFO - 2016-02-06 15:56:00 --> Output Class Initialized
INFO - 2016-02-06 15:56:00 --> Security Class Initialized
DEBUG - 2016-02-06 15:56:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 15:56:00 --> Input Class Initialized
INFO - 2016-02-06 15:56:00 --> Language Class Initialized
INFO - 2016-02-06 15:56:00 --> Language Class Initialized
INFO - 2016-02-06 15:56:00 --> Config Class Initialized
INFO - 2016-02-06 15:56:00 --> Loader Class Initialized
INFO - 2016-02-06 15:56:00 --> Helper loaded: form_helper
INFO - 2016-02-06 15:56:00 --> Helper loaded: url_helper
INFO - 2016-02-06 15:56:00 --> Helper loaded: general_helper
INFO - 2016-02-06 15:56:00 --> Database Driver Class Initialized
INFO - 2016-02-06 15:56:00 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 15:56:00 --> Form Validation Class Initialized
DEBUG - 2016-02-06 15:56:00 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 15:56:00 --> Email Class Initialized
INFO - 2016-02-06 15:56:00 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 15:56:00 --> Helper loaded: cookie_helper
INFO - 2016-02-06 15:56:00 --> Helper loaded: language_helper
INFO - 2016-02-06 15:56:00 --> Model Class Initialized
INFO - 2016-02-06 15:56:00 --> Helper loaded: inflector_helper
INFO - 2016-02-06 15:56:00 --> Model Class Initialized
INFO - 2016-02-06 15:56:00 --> Helper loaded: date_helper
INFO - 2016-02-06 15:56:00 --> Controller Class Initialized
DEBUG - 2016-02-06 15:56:00 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
ERROR - 2016-02-06 15:56:00 --> Severity: Notice --> Undefined property: Users::$auth_m C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\users\controllers\users.php 22
ERROR - 2016-02-06 15:56:00 --> Severity: Error --> Call to a member function dropdown_users() on null C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\users\controllers\users.php 22
INFO - 2016-02-06 15:56:06 --> Config Class Initialized
INFO - 2016-02-06 15:56:06 --> Hooks Class Initialized
DEBUG - 2016-02-06 15:56:06 --> UTF-8 Support Enabled
INFO - 2016-02-06 15:56:06 --> Utf8 Class Initialized
INFO - 2016-02-06 15:56:06 --> URI Class Initialized
INFO - 2016-02-06 15:56:06 --> Router Class Initialized
INFO - 2016-02-06 15:56:06 --> Output Class Initialized
INFO - 2016-02-06 15:56:06 --> Security Class Initialized
DEBUG - 2016-02-06 15:56:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 15:56:06 --> Input Class Initialized
INFO - 2016-02-06 15:56:06 --> Language Class Initialized
INFO - 2016-02-06 15:56:06 --> Language Class Initialized
INFO - 2016-02-06 15:56:06 --> Config Class Initialized
INFO - 2016-02-06 15:56:06 --> Loader Class Initialized
INFO - 2016-02-06 15:56:06 --> Helper loaded: form_helper
INFO - 2016-02-06 15:56:06 --> Helper loaded: url_helper
INFO - 2016-02-06 15:56:06 --> Helper loaded: general_helper
INFO - 2016-02-06 15:56:06 --> Database Driver Class Initialized
INFO - 2016-02-06 15:56:06 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 15:56:06 --> Form Validation Class Initialized
DEBUG - 2016-02-06 15:56:06 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 15:56:06 --> Email Class Initialized
INFO - 2016-02-06 15:56:06 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 15:56:06 --> Helper loaded: cookie_helper
INFO - 2016-02-06 15:56:06 --> Helper loaded: language_helper
INFO - 2016-02-06 15:56:06 --> Model Class Initialized
INFO - 2016-02-06 15:56:06 --> Helper loaded: inflector_helper
INFO - 2016-02-06 15:56:06 --> Model Class Initialized
INFO - 2016-02-06 15:56:06 --> Helper loaded: date_helper
INFO - 2016-02-06 15:56:06 --> Controller Class Initialized
DEBUG - 2016-02-06 15:56:06 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
ERROR - 2016-02-06 15:56:06 --> Severity: Error --> Call to a member function select() on null C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\core\MY_Model.php 525
INFO - 2016-02-06 15:59:36 --> Config Class Initialized
INFO - 2016-02-06 15:59:36 --> Hooks Class Initialized
DEBUG - 2016-02-06 15:59:36 --> UTF-8 Support Enabled
INFO - 2016-02-06 15:59:36 --> Utf8 Class Initialized
INFO - 2016-02-06 15:59:36 --> URI Class Initialized
INFO - 2016-02-06 15:59:36 --> Router Class Initialized
INFO - 2016-02-06 15:59:36 --> Output Class Initialized
INFO - 2016-02-06 15:59:36 --> Security Class Initialized
DEBUG - 2016-02-06 15:59:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 15:59:36 --> Input Class Initialized
INFO - 2016-02-06 15:59:36 --> Language Class Initialized
INFO - 2016-02-06 15:59:36 --> Language Class Initialized
INFO - 2016-02-06 15:59:36 --> Config Class Initialized
INFO - 2016-02-06 15:59:36 --> Loader Class Initialized
INFO - 2016-02-06 15:59:36 --> Helper loaded: form_helper
INFO - 2016-02-06 15:59:36 --> Helper loaded: url_helper
INFO - 2016-02-06 15:59:36 --> Helper loaded: general_helper
INFO - 2016-02-06 15:59:36 --> Database Driver Class Initialized
INFO - 2016-02-06 15:59:36 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 15:59:36 --> Form Validation Class Initialized
DEBUG - 2016-02-06 15:59:36 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 15:59:36 --> Email Class Initialized
INFO - 2016-02-06 15:59:36 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 15:59:36 --> Helper loaded: cookie_helper
INFO - 2016-02-06 15:59:36 --> Helper loaded: language_helper
INFO - 2016-02-06 15:59:36 --> Model Class Initialized
INFO - 2016-02-06 15:59:36 --> Helper loaded: inflector_helper
INFO - 2016-02-06 15:59:37 --> Model Class Initialized
INFO - 2016-02-06 15:59:37 --> Helper loaded: date_helper
INFO - 2016-02-06 15:59:37 --> Controller Class Initialized
DEBUG - 2016-02-06 15:59:37 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
ERROR - 2016-02-06 15:59:37 --> Severity: Error --> Call to a member function select() on null C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\core\MY_Model.php 525
INFO - 2016-02-06 16:00:16 --> Config Class Initialized
INFO - 2016-02-06 16:00:16 --> Hooks Class Initialized
DEBUG - 2016-02-06 16:00:16 --> UTF-8 Support Enabled
INFO - 2016-02-06 16:00:16 --> Utf8 Class Initialized
INFO - 2016-02-06 16:00:16 --> URI Class Initialized
INFO - 2016-02-06 16:00:16 --> Router Class Initialized
INFO - 2016-02-06 16:00:16 --> Output Class Initialized
INFO - 2016-02-06 16:00:16 --> Security Class Initialized
DEBUG - 2016-02-06 16:00:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 16:00:16 --> Input Class Initialized
INFO - 2016-02-06 16:00:16 --> Language Class Initialized
INFO - 2016-02-06 16:00:16 --> Language Class Initialized
INFO - 2016-02-06 16:00:16 --> Config Class Initialized
INFO - 2016-02-06 16:00:16 --> Loader Class Initialized
INFO - 2016-02-06 16:00:16 --> Helper loaded: form_helper
INFO - 2016-02-06 16:00:16 --> Helper loaded: url_helper
INFO - 2016-02-06 16:00:16 --> Helper loaded: general_helper
INFO - 2016-02-06 16:00:16 --> Database Driver Class Initialized
INFO - 2016-02-06 16:00:16 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 16:00:16 --> Form Validation Class Initialized
DEBUG - 2016-02-06 16:00:16 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 16:00:16 --> Email Class Initialized
INFO - 2016-02-06 16:00:16 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 16:00:16 --> Helper loaded: cookie_helper
INFO - 2016-02-06 16:00:16 --> Helper loaded: language_helper
INFO - 2016-02-06 16:00:16 --> Model Class Initialized
INFO - 2016-02-06 16:00:16 --> Helper loaded: inflector_helper
INFO - 2016-02-06 16:00:16 --> Model Class Initialized
INFO - 2016-02-06 16:00:16 --> Helper loaded: date_helper
INFO - 2016-02-06 16:00:16 --> Controller Class Initialized
DEBUG - 2016-02-06 16:00:16 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
ERROR - 2016-02-06 16:00:16 --> Severity: Error --> Call to a member function select() on null C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\core\MY_Model.php 525
INFO - 2016-02-06 16:00:45 --> Config Class Initialized
INFO - 2016-02-06 16:00:45 --> Hooks Class Initialized
DEBUG - 2016-02-06 16:00:45 --> UTF-8 Support Enabled
INFO - 2016-02-06 16:00:45 --> Utf8 Class Initialized
INFO - 2016-02-06 16:00:45 --> URI Class Initialized
INFO - 2016-02-06 16:00:45 --> Router Class Initialized
INFO - 2016-02-06 16:00:45 --> Output Class Initialized
INFO - 2016-02-06 16:00:45 --> Security Class Initialized
DEBUG - 2016-02-06 16:00:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 16:00:45 --> Input Class Initialized
INFO - 2016-02-06 16:00:45 --> Language Class Initialized
INFO - 2016-02-06 16:00:45 --> Language Class Initialized
INFO - 2016-02-06 16:00:45 --> Config Class Initialized
INFO - 2016-02-06 16:00:45 --> Loader Class Initialized
INFO - 2016-02-06 16:00:45 --> Helper loaded: form_helper
INFO - 2016-02-06 16:00:45 --> Helper loaded: url_helper
INFO - 2016-02-06 16:00:45 --> Helper loaded: general_helper
INFO - 2016-02-06 16:00:45 --> Database Driver Class Initialized
INFO - 2016-02-06 16:00:45 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 16:00:45 --> Form Validation Class Initialized
DEBUG - 2016-02-06 16:00:45 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 16:00:45 --> Email Class Initialized
INFO - 2016-02-06 16:00:45 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 16:00:45 --> Helper loaded: cookie_helper
INFO - 2016-02-06 16:00:45 --> Helper loaded: language_helper
INFO - 2016-02-06 16:00:45 --> Model Class Initialized
INFO - 2016-02-06 16:00:45 --> Helper loaded: inflector_helper
INFO - 2016-02-06 16:00:45 --> Model Class Initialized
INFO - 2016-02-06 16:00:45 --> Helper loaded: date_helper
INFO - 2016-02-06 16:00:45 --> Controller Class Initialized
DEBUG - 2016-02-06 16:00:45 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
ERROR - 2016-02-06 16:00:45 --> Severity: Error --> Call to a member function select() on null C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\core\MY_Model.php 525
INFO - 2016-02-06 16:00:46 --> Config Class Initialized
INFO - 2016-02-06 16:00:46 --> Hooks Class Initialized
DEBUG - 2016-02-06 16:00:46 --> UTF-8 Support Enabled
INFO - 2016-02-06 16:00:46 --> Utf8 Class Initialized
INFO - 2016-02-06 16:00:46 --> URI Class Initialized
INFO - 2016-02-06 16:00:46 --> Router Class Initialized
INFO - 2016-02-06 16:00:46 --> Output Class Initialized
INFO - 2016-02-06 16:00:46 --> Security Class Initialized
DEBUG - 2016-02-06 16:00:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 16:00:46 --> Input Class Initialized
INFO - 2016-02-06 16:00:46 --> Language Class Initialized
INFO - 2016-02-06 16:00:46 --> Language Class Initialized
INFO - 2016-02-06 16:00:46 --> Config Class Initialized
INFO - 2016-02-06 16:00:46 --> Loader Class Initialized
INFO - 2016-02-06 16:00:46 --> Helper loaded: form_helper
INFO - 2016-02-06 16:00:46 --> Helper loaded: url_helper
INFO - 2016-02-06 16:00:46 --> Helper loaded: general_helper
INFO - 2016-02-06 16:00:46 --> Database Driver Class Initialized
INFO - 2016-02-06 16:00:46 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 16:00:46 --> Form Validation Class Initialized
DEBUG - 2016-02-06 16:00:46 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 16:00:46 --> Email Class Initialized
INFO - 2016-02-06 16:00:46 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 16:00:46 --> Helper loaded: cookie_helper
INFO - 2016-02-06 16:00:46 --> Helper loaded: language_helper
INFO - 2016-02-06 16:00:46 --> Model Class Initialized
INFO - 2016-02-06 16:00:46 --> Helper loaded: inflector_helper
INFO - 2016-02-06 16:00:46 --> Model Class Initialized
INFO - 2016-02-06 16:00:46 --> Helper loaded: date_helper
INFO - 2016-02-06 16:00:46 --> Controller Class Initialized
DEBUG - 2016-02-06 16:00:46 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
ERROR - 2016-02-06 16:00:46 --> Severity: Error --> Call to a member function select() on null C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\core\MY_Model.php 525
INFO - 2016-02-06 16:02:11 --> Config Class Initialized
INFO - 2016-02-06 16:02:11 --> Hooks Class Initialized
DEBUG - 2016-02-06 16:02:11 --> UTF-8 Support Enabled
INFO - 2016-02-06 16:02:11 --> Utf8 Class Initialized
INFO - 2016-02-06 16:02:11 --> URI Class Initialized
INFO - 2016-02-06 16:02:11 --> Router Class Initialized
INFO - 2016-02-06 16:02:11 --> Output Class Initialized
INFO - 2016-02-06 16:02:11 --> Security Class Initialized
DEBUG - 2016-02-06 16:02:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 16:02:11 --> Input Class Initialized
INFO - 2016-02-06 16:02:11 --> Language Class Initialized
INFO - 2016-02-06 16:02:11 --> Language Class Initialized
INFO - 2016-02-06 16:02:11 --> Config Class Initialized
INFO - 2016-02-06 16:02:11 --> Loader Class Initialized
INFO - 2016-02-06 16:02:11 --> Helper loaded: form_helper
INFO - 2016-02-06 16:02:11 --> Helper loaded: url_helper
INFO - 2016-02-06 16:02:11 --> Helper loaded: general_helper
INFO - 2016-02-06 16:02:11 --> Database Driver Class Initialized
INFO - 2016-02-06 16:02:11 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 16:02:11 --> Form Validation Class Initialized
DEBUG - 2016-02-06 16:02:11 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 16:02:11 --> Email Class Initialized
INFO - 2016-02-06 16:02:11 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 16:02:11 --> Helper loaded: cookie_helper
INFO - 2016-02-06 16:02:11 --> Helper loaded: language_helper
INFO - 2016-02-06 16:02:11 --> Model Class Initialized
INFO - 2016-02-06 16:02:11 --> Helper loaded: inflector_helper
INFO - 2016-02-06 16:02:11 --> Model Class Initialized
INFO - 2016-02-06 16:02:11 --> Helper loaded: date_helper
INFO - 2016-02-06 16:02:11 --> Controller Class Initialized
DEBUG - 2016-02-06 16:02:11 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
ERROR - 2016-02-06 16:02:11 --> Severity: Error --> Call to a member function select() on null C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\core\MY_Model.php 525
INFO - 2016-02-06 16:02:49 --> Config Class Initialized
INFO - 2016-02-06 16:02:49 --> Hooks Class Initialized
DEBUG - 2016-02-06 16:02:49 --> UTF-8 Support Enabled
INFO - 2016-02-06 16:02:49 --> Utf8 Class Initialized
INFO - 2016-02-06 16:02:49 --> URI Class Initialized
INFO - 2016-02-06 16:02:49 --> Router Class Initialized
INFO - 2016-02-06 16:02:49 --> Output Class Initialized
INFO - 2016-02-06 16:02:49 --> Security Class Initialized
DEBUG - 2016-02-06 16:02:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 16:02:49 --> Input Class Initialized
INFO - 2016-02-06 16:02:49 --> Language Class Initialized
INFO - 2016-02-06 16:02:49 --> Language Class Initialized
INFO - 2016-02-06 16:02:49 --> Config Class Initialized
INFO - 2016-02-06 16:02:49 --> Loader Class Initialized
INFO - 2016-02-06 16:02:49 --> Helper loaded: form_helper
INFO - 2016-02-06 16:02:49 --> Helper loaded: url_helper
INFO - 2016-02-06 16:02:49 --> Helper loaded: general_helper
INFO - 2016-02-06 16:02:49 --> Database Driver Class Initialized
INFO - 2016-02-06 16:02:49 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 16:02:49 --> Form Validation Class Initialized
DEBUG - 2016-02-06 16:02:49 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 16:02:49 --> Email Class Initialized
INFO - 2016-02-06 16:02:49 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 16:02:49 --> Helper loaded: cookie_helper
INFO - 2016-02-06 16:02:49 --> Helper loaded: language_helper
INFO - 2016-02-06 16:02:49 --> Model Class Initialized
INFO - 2016-02-06 16:02:49 --> Helper loaded: inflector_helper
INFO - 2016-02-06 16:02:49 --> Model Class Initialized
INFO - 2016-02-06 16:02:49 --> Helper loaded: date_helper
INFO - 2016-02-06 16:02:49 --> Controller Class Initialized
DEBUG - 2016-02-06 16:02:49 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
ERROR - 2016-02-06 16:02:49 --> Severity: Error --> Call to a member function select() on null C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\core\MY_Model.php 525
INFO - 2016-02-06 16:03:14 --> Config Class Initialized
INFO - 2016-02-06 16:03:14 --> Hooks Class Initialized
DEBUG - 2016-02-06 16:03:14 --> UTF-8 Support Enabled
INFO - 2016-02-06 16:03:14 --> Utf8 Class Initialized
INFO - 2016-02-06 16:03:14 --> URI Class Initialized
INFO - 2016-02-06 16:03:14 --> Router Class Initialized
INFO - 2016-02-06 16:03:14 --> Output Class Initialized
INFO - 2016-02-06 16:03:14 --> Security Class Initialized
DEBUG - 2016-02-06 16:03:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 16:03:14 --> Input Class Initialized
INFO - 2016-02-06 16:03:14 --> Language Class Initialized
INFO - 2016-02-06 16:03:14 --> Language Class Initialized
INFO - 2016-02-06 16:03:14 --> Config Class Initialized
INFO - 2016-02-06 16:03:14 --> Loader Class Initialized
INFO - 2016-02-06 16:03:14 --> Helper loaded: form_helper
INFO - 2016-02-06 16:03:14 --> Helper loaded: url_helper
INFO - 2016-02-06 16:03:14 --> Helper loaded: general_helper
INFO - 2016-02-06 16:03:14 --> Database Driver Class Initialized
INFO - 2016-02-06 16:03:14 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 16:03:14 --> Form Validation Class Initialized
DEBUG - 2016-02-06 16:03:14 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 16:03:14 --> Email Class Initialized
INFO - 2016-02-06 16:03:14 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 16:03:14 --> Helper loaded: cookie_helper
INFO - 2016-02-06 16:03:14 --> Helper loaded: language_helper
INFO - 2016-02-06 16:03:14 --> Model Class Initialized
INFO - 2016-02-06 16:03:14 --> Helper loaded: inflector_helper
INFO - 2016-02-06 16:03:14 --> Model Class Initialized
INFO - 2016-02-06 16:03:14 --> Helper loaded: date_helper
INFO - 2016-02-06 16:03:14 --> Controller Class Initialized
DEBUG - 2016-02-06 16:03:14 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
ERROR - 2016-02-06 16:03:14 --> Severity: Error --> Call to a member function select() on null C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\core\MY_Model.php 525
INFO - 2016-02-06 16:03:33 --> Config Class Initialized
INFO - 2016-02-06 16:03:33 --> Hooks Class Initialized
DEBUG - 2016-02-06 16:03:33 --> UTF-8 Support Enabled
INFO - 2016-02-06 16:03:33 --> Utf8 Class Initialized
INFO - 2016-02-06 16:03:33 --> URI Class Initialized
INFO - 2016-02-06 16:03:33 --> Router Class Initialized
INFO - 2016-02-06 16:03:33 --> Output Class Initialized
INFO - 2016-02-06 16:03:33 --> Security Class Initialized
DEBUG - 2016-02-06 16:03:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 16:03:33 --> Input Class Initialized
INFO - 2016-02-06 16:03:33 --> Language Class Initialized
INFO - 2016-02-06 16:03:33 --> Language Class Initialized
INFO - 2016-02-06 16:03:33 --> Config Class Initialized
INFO - 2016-02-06 16:03:33 --> Loader Class Initialized
INFO - 2016-02-06 16:03:33 --> Helper loaded: form_helper
INFO - 2016-02-06 16:03:33 --> Helper loaded: url_helper
INFO - 2016-02-06 16:03:33 --> Helper loaded: general_helper
INFO - 2016-02-06 16:03:33 --> Database Driver Class Initialized
INFO - 2016-02-06 16:03:33 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 16:03:33 --> Form Validation Class Initialized
DEBUG - 2016-02-06 16:03:33 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 16:03:33 --> Email Class Initialized
INFO - 2016-02-06 16:03:33 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 16:03:33 --> Helper loaded: cookie_helper
INFO - 2016-02-06 16:03:33 --> Helper loaded: language_helper
INFO - 2016-02-06 16:03:33 --> Model Class Initialized
INFO - 2016-02-06 16:03:33 --> Helper loaded: inflector_helper
INFO - 2016-02-06 16:03:33 --> Model Class Initialized
INFO - 2016-02-06 16:03:33 --> Helper loaded: date_helper
INFO - 2016-02-06 16:03:33 --> Controller Class Initialized
DEBUG - 2016-02-06 16:03:33 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
ERROR - 2016-02-06 16:03:33 --> Severity: Error --> Call to a member function select() on null C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\core\MY_Model.php 525
INFO - 2016-02-06 16:04:46 --> Config Class Initialized
INFO - 2016-02-06 16:04:46 --> Hooks Class Initialized
DEBUG - 2016-02-06 16:04:46 --> UTF-8 Support Enabled
INFO - 2016-02-06 16:04:46 --> Utf8 Class Initialized
INFO - 2016-02-06 16:04:46 --> URI Class Initialized
INFO - 2016-02-06 16:04:46 --> Router Class Initialized
INFO - 2016-02-06 16:04:46 --> Output Class Initialized
INFO - 2016-02-06 16:04:47 --> Security Class Initialized
DEBUG - 2016-02-06 16:04:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 16:04:47 --> Input Class Initialized
INFO - 2016-02-06 16:04:47 --> Language Class Initialized
INFO - 2016-02-06 16:04:47 --> Language Class Initialized
INFO - 2016-02-06 16:04:47 --> Config Class Initialized
INFO - 2016-02-06 16:04:47 --> Loader Class Initialized
INFO - 2016-02-06 16:04:47 --> Helper loaded: form_helper
INFO - 2016-02-06 16:04:47 --> Helper loaded: url_helper
INFO - 2016-02-06 16:04:47 --> Helper loaded: general_helper
INFO - 2016-02-06 16:04:47 --> Database Driver Class Initialized
INFO - 2016-02-06 16:04:47 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 16:04:47 --> Form Validation Class Initialized
DEBUG - 2016-02-06 16:04:47 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 16:04:47 --> Email Class Initialized
INFO - 2016-02-06 16:04:47 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 16:04:47 --> Helper loaded: cookie_helper
INFO - 2016-02-06 16:04:47 --> Helper loaded: language_helper
INFO - 2016-02-06 16:04:47 --> Model Class Initialized
INFO - 2016-02-06 16:04:47 --> Helper loaded: inflector_helper
INFO - 2016-02-06 16:04:47 --> Model Class Initialized
INFO - 2016-02-06 16:04:47 --> Helper loaded: date_helper
INFO - 2016-02-06 16:04:47 --> Controller Class Initialized
DEBUG - 2016-02-06 16:04:47 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
ERROR - 2016-02-06 16:04:47 --> Severity: Error --> Call to a member function select() on null C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\core\MY_Model.php 525
INFO - 2016-02-06 16:05:32 --> Config Class Initialized
INFO - 2016-02-06 16:05:32 --> Hooks Class Initialized
DEBUG - 2016-02-06 16:05:32 --> UTF-8 Support Enabled
INFO - 2016-02-06 16:05:32 --> Utf8 Class Initialized
INFO - 2016-02-06 16:05:32 --> URI Class Initialized
INFO - 2016-02-06 16:05:32 --> Router Class Initialized
INFO - 2016-02-06 16:05:32 --> Output Class Initialized
INFO - 2016-02-06 16:05:32 --> Security Class Initialized
DEBUG - 2016-02-06 16:05:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 16:05:32 --> Input Class Initialized
INFO - 2016-02-06 16:05:32 --> Language Class Initialized
INFO - 2016-02-06 16:05:32 --> Language Class Initialized
INFO - 2016-02-06 16:05:32 --> Config Class Initialized
INFO - 2016-02-06 16:05:32 --> Loader Class Initialized
INFO - 2016-02-06 16:05:32 --> Helper loaded: form_helper
INFO - 2016-02-06 16:05:32 --> Helper loaded: url_helper
INFO - 2016-02-06 16:05:32 --> Helper loaded: general_helper
INFO - 2016-02-06 16:05:32 --> Database Driver Class Initialized
INFO - 2016-02-06 16:05:32 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 16:05:32 --> Form Validation Class Initialized
DEBUG - 2016-02-06 16:05:32 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 16:05:32 --> Email Class Initialized
INFO - 2016-02-06 16:05:32 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 16:05:32 --> Helper loaded: cookie_helper
INFO - 2016-02-06 16:05:32 --> Helper loaded: language_helper
INFO - 2016-02-06 16:05:32 --> Model Class Initialized
INFO - 2016-02-06 16:05:32 --> Helper loaded: inflector_helper
INFO - 2016-02-06 16:05:33 --> Model Class Initialized
INFO - 2016-02-06 16:05:33 --> Helper loaded: date_helper
INFO - 2016-02-06 16:05:33 --> Controller Class Initialized
DEBUG - 2016-02-06 16:05:33 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
ERROR - 2016-02-06 16:05:33 --> Severity: Error --> Call to a member function select() on null C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\core\MY_Model.php 525
INFO - 2016-02-06 16:05:44 --> Config Class Initialized
INFO - 2016-02-06 16:05:44 --> Hooks Class Initialized
DEBUG - 2016-02-06 16:05:44 --> UTF-8 Support Enabled
INFO - 2016-02-06 16:05:44 --> Utf8 Class Initialized
INFO - 2016-02-06 16:05:44 --> URI Class Initialized
INFO - 2016-02-06 16:05:44 --> Router Class Initialized
INFO - 2016-02-06 16:05:44 --> Output Class Initialized
INFO - 2016-02-06 16:05:44 --> Security Class Initialized
DEBUG - 2016-02-06 16:05:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 16:05:44 --> Input Class Initialized
INFO - 2016-02-06 16:05:44 --> Language Class Initialized
INFO - 2016-02-06 16:05:44 --> Language Class Initialized
INFO - 2016-02-06 16:05:44 --> Config Class Initialized
INFO - 2016-02-06 16:05:44 --> Loader Class Initialized
INFO - 2016-02-06 16:05:44 --> Helper loaded: form_helper
INFO - 2016-02-06 16:05:44 --> Helper loaded: url_helper
INFO - 2016-02-06 16:05:44 --> Helper loaded: general_helper
INFO - 2016-02-06 16:05:44 --> Database Driver Class Initialized
INFO - 2016-02-06 16:05:44 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 16:05:44 --> Form Validation Class Initialized
DEBUG - 2016-02-06 16:05:44 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 16:05:44 --> Email Class Initialized
INFO - 2016-02-06 16:05:44 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 16:05:44 --> Helper loaded: cookie_helper
INFO - 2016-02-06 16:05:44 --> Helper loaded: language_helper
INFO - 2016-02-06 16:05:44 --> Model Class Initialized
INFO - 2016-02-06 16:05:44 --> Helper loaded: inflector_helper
INFO - 2016-02-06 16:05:44 --> Model Class Initialized
INFO - 2016-02-06 16:05:44 --> Helper loaded: date_helper
INFO - 2016-02-06 16:05:44 --> Controller Class Initialized
DEBUG - 2016-02-06 16:05:44 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
ERROR - 2016-02-06 16:05:44 --> Severity: Error --> Call to a member function select() on null C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\core\MY_Model.php 525
INFO - 2016-02-06 16:06:22 --> Config Class Initialized
INFO - 2016-02-06 16:06:22 --> Hooks Class Initialized
DEBUG - 2016-02-06 16:06:22 --> UTF-8 Support Enabled
INFO - 2016-02-06 16:06:22 --> Utf8 Class Initialized
INFO - 2016-02-06 16:06:22 --> URI Class Initialized
INFO - 2016-02-06 16:06:23 --> Router Class Initialized
INFO - 2016-02-06 16:06:23 --> Output Class Initialized
INFO - 2016-02-06 16:06:23 --> Security Class Initialized
DEBUG - 2016-02-06 16:06:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 16:06:23 --> Input Class Initialized
INFO - 2016-02-06 16:06:23 --> Language Class Initialized
INFO - 2016-02-06 16:06:23 --> Language Class Initialized
INFO - 2016-02-06 16:06:23 --> Config Class Initialized
INFO - 2016-02-06 16:06:23 --> Loader Class Initialized
INFO - 2016-02-06 16:06:23 --> Helper loaded: form_helper
INFO - 2016-02-06 16:06:23 --> Helper loaded: url_helper
INFO - 2016-02-06 16:06:23 --> Helper loaded: general_helper
INFO - 2016-02-06 16:06:23 --> Database Driver Class Initialized
INFO - 2016-02-06 16:06:23 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 16:06:23 --> Form Validation Class Initialized
DEBUG - 2016-02-06 16:06:23 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 16:06:23 --> Email Class Initialized
INFO - 2016-02-06 16:06:23 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 16:06:23 --> Helper loaded: cookie_helper
INFO - 2016-02-06 16:06:23 --> Helper loaded: language_helper
INFO - 2016-02-06 16:06:23 --> Model Class Initialized
INFO - 2016-02-06 16:06:23 --> Helper loaded: inflector_helper
INFO - 2016-02-06 16:06:23 --> Model Class Initialized
INFO - 2016-02-06 16:06:23 --> Helper loaded: date_helper
INFO - 2016-02-06 16:06:23 --> Controller Class Initialized
DEBUG - 2016-02-06 16:06:23 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 16:06:23 --> Model Class Initialized
DEBUG - 2016-02-06 16:06:23 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 16:06:23 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/views/login.php
DEBUG - 2016-02-06 16:06:23 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 16:06:23 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 16:06:23 --> Profiler Class Initialized
INFO - 2016-02-06 16:06:23 --> Helper loaded: text_helper
INFO - 2016-02-06 16:06:23 --> Final output sent to browser
DEBUG - 2016-02-06 16:06:23 --> Total execution time: 0.2718
INFO - 2016-02-06 16:06:37 --> Config Class Initialized
INFO - 2016-02-06 16:06:37 --> Hooks Class Initialized
DEBUG - 2016-02-06 16:06:37 --> UTF-8 Support Enabled
INFO - 2016-02-06 16:06:37 --> Utf8 Class Initialized
INFO - 2016-02-06 16:06:37 --> URI Class Initialized
INFO - 2016-02-06 16:06:37 --> Router Class Initialized
INFO - 2016-02-06 16:06:37 --> Output Class Initialized
INFO - 2016-02-06 16:06:37 --> Security Class Initialized
DEBUG - 2016-02-06 16:06:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 16:06:37 --> Input Class Initialized
INFO - 2016-02-06 16:06:37 --> Language Class Initialized
INFO - 2016-02-06 16:06:37 --> Language Class Initialized
INFO - 2016-02-06 16:06:37 --> Config Class Initialized
INFO - 2016-02-06 16:06:37 --> Loader Class Initialized
INFO - 2016-02-06 16:06:37 --> Helper loaded: form_helper
INFO - 2016-02-06 16:06:37 --> Helper loaded: url_helper
INFO - 2016-02-06 16:06:37 --> Helper loaded: general_helper
INFO - 2016-02-06 16:06:37 --> Database Driver Class Initialized
INFO - 2016-02-06 16:06:37 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 16:06:37 --> Form Validation Class Initialized
DEBUG - 2016-02-06 16:06:37 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 16:06:37 --> Email Class Initialized
INFO - 2016-02-06 16:06:37 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 16:06:37 --> Helper loaded: cookie_helper
INFO - 2016-02-06 16:06:37 --> Helper loaded: language_helper
INFO - 2016-02-06 16:06:37 --> Model Class Initialized
INFO - 2016-02-06 16:06:37 --> Helper loaded: inflector_helper
INFO - 2016-02-06 16:06:38 --> Model Class Initialized
INFO - 2016-02-06 16:06:38 --> Helper loaded: date_helper
INFO - 2016-02-06 16:06:38 --> Controller Class Initialized
DEBUG - 2016-02-06 16:06:38 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 16:06:38 --> Model Class Initialized
DEBUG - 2016-02-06 16:06:38 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 16:06:38 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/views/login.php
DEBUG - 2016-02-06 16:06:38 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 16:06:38 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 16:06:38 --> Profiler Class Initialized
INFO - 2016-02-06 16:06:38 --> Helper loaded: text_helper
INFO - 2016-02-06 16:06:38 --> Final output sent to browser
DEBUG - 2016-02-06 16:06:38 --> Total execution time: 0.2706
INFO - 2016-02-06 16:06:58 --> Config Class Initialized
INFO - 2016-02-06 16:06:58 --> Hooks Class Initialized
DEBUG - 2016-02-06 16:06:58 --> UTF-8 Support Enabled
INFO - 2016-02-06 16:06:58 --> Utf8 Class Initialized
INFO - 2016-02-06 16:06:58 --> URI Class Initialized
INFO - 2016-02-06 16:06:58 --> Router Class Initialized
INFO - 2016-02-06 16:06:58 --> Output Class Initialized
INFO - 2016-02-06 16:06:58 --> Security Class Initialized
DEBUG - 2016-02-06 16:06:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 16:06:58 --> Input Class Initialized
INFO - 2016-02-06 16:06:58 --> Language Class Initialized
INFO - 2016-02-06 16:06:58 --> Language Class Initialized
INFO - 2016-02-06 16:06:58 --> Config Class Initialized
INFO - 2016-02-06 16:06:58 --> Loader Class Initialized
INFO - 2016-02-06 16:06:58 --> Helper loaded: form_helper
INFO - 2016-02-06 16:06:58 --> Helper loaded: url_helper
INFO - 2016-02-06 16:06:58 --> Helper loaded: general_helper
INFO - 2016-02-06 16:06:58 --> Database Driver Class Initialized
INFO - 2016-02-06 16:06:58 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 16:06:58 --> Form Validation Class Initialized
DEBUG - 2016-02-06 16:06:58 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 16:06:58 --> Email Class Initialized
INFO - 2016-02-06 16:06:58 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 16:06:58 --> Helper loaded: cookie_helper
INFO - 2016-02-06 16:06:58 --> Helper loaded: language_helper
INFO - 2016-02-06 16:06:58 --> Model Class Initialized
INFO - 2016-02-06 16:06:58 --> Helper loaded: inflector_helper
INFO - 2016-02-06 16:06:58 --> Model Class Initialized
INFO - 2016-02-06 16:06:58 --> Helper loaded: date_helper
INFO - 2016-02-06 16:06:58 --> Controller Class Initialized
DEBUG - 2016-02-06 16:06:58 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 16:06:58 --> Model Class Initialized
DEBUG - 2016-02-06 16:06:58 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 16:06:58 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/views/login.php
DEBUG - 2016-02-06 16:06:58 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 16:06:58 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 16:06:58 --> Profiler Class Initialized
INFO - 2016-02-06 16:06:58 --> Helper loaded: text_helper
INFO - 2016-02-06 16:06:58 --> Final output sent to browser
DEBUG - 2016-02-06 16:06:58 --> Total execution time: 0.2786
INFO - 2016-02-06 16:07:38 --> Config Class Initialized
INFO - 2016-02-06 16:07:38 --> Hooks Class Initialized
DEBUG - 2016-02-06 16:07:38 --> UTF-8 Support Enabled
INFO - 2016-02-06 16:07:38 --> Utf8 Class Initialized
INFO - 2016-02-06 16:07:38 --> URI Class Initialized
INFO - 2016-02-06 16:07:38 --> Router Class Initialized
INFO - 2016-02-06 16:07:38 --> Output Class Initialized
INFO - 2016-02-06 16:07:38 --> Security Class Initialized
DEBUG - 2016-02-06 16:07:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 16:07:38 --> Input Class Initialized
INFO - 2016-02-06 16:07:38 --> Language Class Initialized
INFO - 2016-02-06 16:07:38 --> Language Class Initialized
INFO - 2016-02-06 16:07:38 --> Config Class Initialized
INFO - 2016-02-06 16:07:38 --> Loader Class Initialized
INFO - 2016-02-06 16:07:38 --> Helper loaded: form_helper
INFO - 2016-02-06 16:07:38 --> Helper loaded: url_helper
INFO - 2016-02-06 16:07:38 --> Helper loaded: general_helper
INFO - 2016-02-06 16:07:38 --> Database Driver Class Initialized
INFO - 2016-02-06 16:07:38 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 16:07:38 --> Form Validation Class Initialized
DEBUG - 2016-02-06 16:07:38 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 16:07:38 --> Email Class Initialized
INFO - 2016-02-06 16:07:38 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 16:07:38 --> Helper loaded: cookie_helper
INFO - 2016-02-06 16:07:38 --> Helper loaded: language_helper
INFO - 2016-02-06 16:07:38 --> Model Class Initialized
INFO - 2016-02-06 16:07:38 --> Helper loaded: inflector_helper
INFO - 2016-02-06 16:07:38 --> Model Class Initialized
INFO - 2016-02-06 16:07:38 --> Helper loaded: date_helper
INFO - 2016-02-06 16:07:38 --> Controller Class Initialized
DEBUG - 2016-02-06 16:07:38 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 16:07:38 --> Model Class Initialized
DEBUG - 2016-02-06 16:07:38 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 16:07:38 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/views/login.php
DEBUG - 2016-02-06 16:07:38 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 16:07:38 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 16:07:38 --> Profiler Class Initialized
INFO - 2016-02-06 16:07:38 --> Helper loaded: text_helper
INFO - 2016-02-06 16:07:38 --> Final output sent to browser
DEBUG - 2016-02-06 16:07:38 --> Total execution time: 0.2777
INFO - 2016-02-06 16:07:42 --> Config Class Initialized
INFO - 2016-02-06 16:07:42 --> Hooks Class Initialized
DEBUG - 2016-02-06 16:07:42 --> UTF-8 Support Enabled
INFO - 2016-02-06 16:07:42 --> Utf8 Class Initialized
INFO - 2016-02-06 16:07:42 --> URI Class Initialized
INFO - 2016-02-06 16:07:42 --> Router Class Initialized
INFO - 2016-02-06 16:07:42 --> Output Class Initialized
INFO - 2016-02-06 16:07:42 --> Security Class Initialized
DEBUG - 2016-02-06 16:07:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 16:07:42 --> Input Class Initialized
INFO - 2016-02-06 16:07:42 --> Language Class Initialized
INFO - 2016-02-06 16:07:42 --> Language Class Initialized
INFO - 2016-02-06 16:07:42 --> Config Class Initialized
INFO - 2016-02-06 16:07:42 --> Loader Class Initialized
INFO - 2016-02-06 16:07:42 --> Helper loaded: form_helper
INFO - 2016-02-06 16:07:42 --> Helper loaded: url_helper
INFO - 2016-02-06 16:07:42 --> Helper loaded: general_helper
INFO - 2016-02-06 16:07:42 --> Database Driver Class Initialized
INFO - 2016-02-06 16:07:42 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 16:07:42 --> Form Validation Class Initialized
DEBUG - 2016-02-06 16:07:42 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 16:07:42 --> Email Class Initialized
INFO - 2016-02-06 16:07:42 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 16:07:42 --> Helper loaded: cookie_helper
INFO - 2016-02-06 16:07:42 --> Helper loaded: language_helper
INFO - 2016-02-06 16:07:42 --> Model Class Initialized
INFO - 2016-02-06 16:07:42 --> Helper loaded: inflector_helper
INFO - 2016-02-06 16:07:42 --> Model Class Initialized
INFO - 2016-02-06 16:07:42 --> Helper loaded: date_helper
INFO - 2016-02-06 16:07:42 --> Controller Class Initialized
DEBUG - 2016-02-06 16:07:42 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 16:07:42 --> Model Class Initialized
DEBUG - 2016-02-06 16:07:42 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 16:07:42 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/views/login.php
DEBUG - 2016-02-06 16:07:42 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 16:07:42 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 16:07:42 --> Profiler Class Initialized
INFO - 2016-02-06 16:07:42 --> Helper loaded: text_helper
INFO - 2016-02-06 16:07:42 --> Final output sent to browser
DEBUG - 2016-02-06 16:07:42 --> Total execution time: 0.2674
INFO - 2016-02-06 16:13:09 --> Config Class Initialized
INFO - 2016-02-06 16:13:09 --> Hooks Class Initialized
DEBUG - 2016-02-06 16:13:09 --> UTF-8 Support Enabled
INFO - 2016-02-06 16:13:09 --> Utf8 Class Initialized
INFO - 2016-02-06 16:13:09 --> URI Class Initialized
INFO - 2016-02-06 16:13:09 --> Router Class Initialized
INFO - 2016-02-06 16:13:09 --> Output Class Initialized
INFO - 2016-02-06 16:13:09 --> Security Class Initialized
DEBUG - 2016-02-06 16:13:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 16:13:09 --> Input Class Initialized
INFO - 2016-02-06 16:13:09 --> Language Class Initialized
INFO - 2016-02-06 16:13:09 --> Language Class Initialized
INFO - 2016-02-06 16:13:09 --> Config Class Initialized
INFO - 2016-02-06 16:13:09 --> Loader Class Initialized
INFO - 2016-02-06 16:13:09 --> Helper loaded: form_helper
INFO - 2016-02-06 16:13:09 --> Helper loaded: url_helper
INFO - 2016-02-06 16:13:09 --> Helper loaded: general_helper
INFO - 2016-02-06 16:13:09 --> Database Driver Class Initialized
INFO - 2016-02-06 16:13:09 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 16:13:09 --> Form Validation Class Initialized
DEBUG - 2016-02-06 16:13:09 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 16:13:09 --> Email Class Initialized
INFO - 2016-02-06 16:13:09 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 16:13:09 --> Helper loaded: cookie_helper
INFO - 2016-02-06 16:13:09 --> Helper loaded: language_helper
INFO - 2016-02-06 16:13:09 --> Model Class Initialized
INFO - 2016-02-06 16:13:09 --> Helper loaded: inflector_helper
INFO - 2016-02-06 16:13:09 --> Model Class Initialized
INFO - 2016-02-06 16:13:09 --> Helper loaded: date_helper
INFO - 2016-02-06 16:13:09 --> Controller Class Initialized
DEBUG - 2016-02-06 16:13:09 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 16:13:09 --> Model Class Initialized
DEBUG - 2016-02-06 16:13:09 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 16:13:09 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/views/login.php
DEBUG - 2016-02-06 16:13:09 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 16:13:09 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 16:13:09 --> Profiler Class Initialized
INFO - 2016-02-06 16:13:09 --> Helper loaded: text_helper
INFO - 2016-02-06 16:13:09 --> Final output sent to browser
DEBUG - 2016-02-06 16:13:09 --> Total execution time: 0.2817
INFO - 2016-02-06 16:13:15 --> Config Class Initialized
INFO - 2016-02-06 16:13:15 --> Hooks Class Initialized
DEBUG - 2016-02-06 16:13:15 --> UTF-8 Support Enabled
INFO - 2016-02-06 16:13:15 --> Utf8 Class Initialized
INFO - 2016-02-06 16:13:15 --> URI Class Initialized
INFO - 2016-02-06 16:13:15 --> Router Class Initialized
INFO - 2016-02-06 16:13:15 --> Output Class Initialized
INFO - 2016-02-06 16:13:15 --> Security Class Initialized
DEBUG - 2016-02-06 16:13:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 16:13:15 --> Input Class Initialized
INFO - 2016-02-06 16:13:15 --> Language Class Initialized
INFO - 2016-02-06 16:13:15 --> Language Class Initialized
INFO - 2016-02-06 16:13:15 --> Config Class Initialized
INFO - 2016-02-06 16:13:15 --> Loader Class Initialized
INFO - 2016-02-06 16:13:15 --> Helper loaded: form_helper
INFO - 2016-02-06 16:13:15 --> Helper loaded: url_helper
INFO - 2016-02-06 16:13:15 --> Helper loaded: general_helper
INFO - 2016-02-06 16:13:15 --> Database Driver Class Initialized
INFO - 2016-02-06 16:13:15 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 16:13:15 --> Form Validation Class Initialized
DEBUG - 2016-02-06 16:13:15 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 16:13:15 --> Email Class Initialized
INFO - 2016-02-06 16:13:15 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 16:13:15 --> Helper loaded: cookie_helper
INFO - 2016-02-06 16:13:15 --> Helper loaded: language_helper
INFO - 2016-02-06 16:13:15 --> Model Class Initialized
INFO - 2016-02-06 16:13:15 --> Helper loaded: inflector_helper
INFO - 2016-02-06 16:13:15 --> Model Class Initialized
INFO - 2016-02-06 16:13:15 --> Helper loaded: date_helper
INFO - 2016-02-06 16:13:15 --> Controller Class Initialized
DEBUG - 2016-02-06 16:13:15 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 16:13:15 --> Model Class Initialized
INFO - 2016-02-06 16:13:15 --> Language file loaded: language/dutch/form_validation_lang.php
DEBUG - 2016-02-06 16:13:15 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 16:13:15 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/views/login.php
DEBUG - 2016-02-06 16:13:15 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 16:13:15 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 16:13:15 --> Profiler Class Initialized
INFO - 2016-02-06 16:13:15 --> Helper loaded: text_helper
INFO - 2016-02-06 16:13:15 --> Final output sent to browser
DEBUG - 2016-02-06 16:13:15 --> Total execution time: 0.2946
INFO - 2016-02-06 16:15:40 --> Config Class Initialized
INFO - 2016-02-06 16:15:40 --> Hooks Class Initialized
DEBUG - 2016-02-06 16:15:41 --> UTF-8 Support Enabled
INFO - 2016-02-06 16:15:41 --> Utf8 Class Initialized
INFO - 2016-02-06 16:15:41 --> URI Class Initialized
INFO - 2016-02-06 16:15:41 --> Router Class Initialized
INFO - 2016-02-06 16:15:41 --> Output Class Initialized
INFO - 2016-02-06 16:15:41 --> Security Class Initialized
DEBUG - 2016-02-06 16:15:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 16:15:41 --> Input Class Initialized
INFO - 2016-02-06 16:15:41 --> Language Class Initialized
INFO - 2016-02-06 16:15:41 --> Language Class Initialized
INFO - 2016-02-06 16:15:41 --> Config Class Initialized
INFO - 2016-02-06 16:15:41 --> Loader Class Initialized
INFO - 2016-02-06 16:15:41 --> Helper loaded: form_helper
INFO - 2016-02-06 16:15:41 --> Helper loaded: url_helper
INFO - 2016-02-06 16:15:41 --> Helper loaded: general_helper
INFO - 2016-02-06 16:15:41 --> Database Driver Class Initialized
INFO - 2016-02-06 16:15:41 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 16:15:41 --> Form Validation Class Initialized
DEBUG - 2016-02-06 16:15:41 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 16:15:41 --> Email Class Initialized
INFO - 2016-02-06 16:15:41 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 16:15:41 --> Helper loaded: cookie_helper
INFO - 2016-02-06 16:15:41 --> Helper loaded: language_helper
INFO - 2016-02-06 16:15:41 --> Model Class Initialized
INFO - 2016-02-06 16:15:41 --> Helper loaded: inflector_helper
INFO - 2016-02-06 16:15:41 --> Model Class Initialized
INFO - 2016-02-06 16:15:41 --> Helper loaded: date_helper
INFO - 2016-02-06 16:15:41 --> Controller Class Initialized
DEBUG - 2016-02-06 16:15:41 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 16:15:41 --> Model Class Initialized
INFO - 2016-02-06 16:15:41 --> Language file loaded: language/dutch/form_validation_lang.php
DEBUG - 2016-02-06 16:15:41 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 16:15:41 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/views/login.php
DEBUG - 2016-02-06 16:15:41 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 16:15:41 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 16:15:41 --> Profiler Class Initialized
INFO - 2016-02-06 16:15:41 --> Helper loaded: text_helper
INFO - 2016-02-06 16:15:41 --> Final output sent to browser
DEBUG - 2016-02-06 16:15:41 --> Total execution time: 0.2849
INFO - 2016-02-06 16:15:50 --> Config Class Initialized
INFO - 2016-02-06 16:15:50 --> Hooks Class Initialized
DEBUG - 2016-02-06 16:15:50 --> UTF-8 Support Enabled
INFO - 2016-02-06 16:15:50 --> Utf8 Class Initialized
INFO - 2016-02-06 16:15:50 --> URI Class Initialized
INFO - 2016-02-06 16:15:50 --> Router Class Initialized
INFO - 2016-02-06 16:15:50 --> Output Class Initialized
INFO - 2016-02-06 16:15:50 --> Security Class Initialized
DEBUG - 2016-02-06 16:15:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 16:15:50 --> Input Class Initialized
INFO - 2016-02-06 16:15:50 --> Language Class Initialized
INFO - 2016-02-06 16:15:50 --> Language Class Initialized
INFO - 2016-02-06 16:15:50 --> Config Class Initialized
INFO - 2016-02-06 16:15:50 --> Loader Class Initialized
INFO - 2016-02-06 16:15:50 --> Helper loaded: form_helper
INFO - 2016-02-06 16:15:50 --> Helper loaded: url_helper
INFO - 2016-02-06 16:15:50 --> Helper loaded: general_helper
INFO - 2016-02-06 16:15:50 --> Database Driver Class Initialized
INFO - 2016-02-06 16:15:50 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 16:15:50 --> Form Validation Class Initialized
DEBUG - 2016-02-06 16:15:50 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 16:15:50 --> Email Class Initialized
INFO - 2016-02-06 16:16:50 --> Config Class Initialized
INFO - 2016-02-06 16:16:50 --> Hooks Class Initialized
DEBUG - 2016-02-06 16:16:50 --> UTF-8 Support Enabled
INFO - 2016-02-06 16:16:50 --> Utf8 Class Initialized
INFO - 2016-02-06 16:16:50 --> URI Class Initialized
INFO - 2016-02-06 16:16:50 --> Router Class Initialized
INFO - 2016-02-06 16:16:50 --> Output Class Initialized
INFO - 2016-02-06 16:16:50 --> Security Class Initialized
DEBUG - 2016-02-06 16:16:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 16:16:50 --> Input Class Initialized
INFO - 2016-02-06 16:16:50 --> Language Class Initialized
INFO - 2016-02-06 16:16:50 --> Language Class Initialized
INFO - 2016-02-06 16:16:50 --> Config Class Initialized
INFO - 2016-02-06 16:16:50 --> Loader Class Initialized
INFO - 2016-02-06 16:16:50 --> Helper loaded: form_helper
INFO - 2016-02-06 16:16:50 --> Helper loaded: url_helper
INFO - 2016-02-06 16:16:50 --> Helper loaded: general_helper
INFO - 2016-02-06 16:16:50 --> Database Driver Class Initialized
INFO - 2016-02-06 16:16:50 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 16:16:50 --> Form Validation Class Initialized
DEBUG - 2016-02-06 16:16:50 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 16:16:50 --> Email Class Initialized
INFO - 2016-02-06 16:16:50 --> Helper loaded: cookie_helper
INFO - 2016-02-06 16:16:50 --> Helper loaded: language_helper
INFO - 2016-02-06 16:16:51 --> Model Class Initialized
INFO - 2016-02-06 16:16:51 --> Helper loaded: inflector_helper
INFO - 2016-02-06 16:16:51 --> Model Class Initialized
INFO - 2016-02-06 16:16:51 --> Helper loaded: date_helper
INFO - 2016-02-06 16:23:54 --> Config Class Initialized
INFO - 2016-02-06 16:23:54 --> Hooks Class Initialized
DEBUG - 2016-02-06 16:23:54 --> UTF-8 Support Enabled
INFO - 2016-02-06 16:23:54 --> Utf8 Class Initialized
INFO - 2016-02-06 16:23:54 --> URI Class Initialized
INFO - 2016-02-06 16:23:54 --> Router Class Initialized
INFO - 2016-02-06 16:23:54 --> Output Class Initialized
INFO - 2016-02-06 16:23:54 --> Security Class Initialized
DEBUG - 2016-02-06 16:23:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 16:23:54 --> Input Class Initialized
INFO - 2016-02-06 16:23:54 --> Language Class Initialized
INFO - 2016-02-06 16:23:54 --> Language Class Initialized
INFO - 2016-02-06 16:23:54 --> Config Class Initialized
INFO - 2016-02-06 16:23:54 --> Loader Class Initialized
INFO - 2016-02-06 16:23:54 --> Helper loaded: form_helper
INFO - 2016-02-06 16:23:54 --> Helper loaded: url_helper
INFO - 2016-02-06 16:23:54 --> Helper loaded: general_helper
INFO - 2016-02-06 16:23:54 --> Database Driver Class Initialized
INFO - 2016-02-06 16:23:54 --> Form Validation Class Initialized
DEBUG - 2016-02-06 16:23:54 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 16:23:54 --> Email Class Initialized
INFO - 2016-02-06 16:23:54 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 16:23:55 --> Helper loaded: cookie_helper
INFO - 2016-02-06 16:23:55 --> Helper loaded: language_helper
INFO - 2016-02-06 16:23:55 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 16:23:55 --> Model Class Initialized
INFO - 2016-02-06 16:23:55 --> Helper loaded: inflector_helper
INFO - 2016-02-06 16:23:55 --> Model Class Initialized
INFO - 2016-02-06 16:23:55 --> Helper loaded: date_helper
INFO - 2016-02-06 16:23:55 --> Controller Class Initialized
DEBUG - 2016-02-06 16:23:55 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 16:23:55 --> Model Class Initialized
INFO - 2016-02-06 16:23:55 --> Language file loaded: language/dutch/form_validation_lang.php
DEBUG - 2016-02-06 16:23:55 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 16:23:55 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/views/login.php
DEBUG - 2016-02-06 16:23:55 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 16:23:55 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 16:23:55 --> Profiler Class Initialized
INFO - 2016-02-06 16:23:55 --> Helper loaded: text_helper
INFO - 2016-02-06 16:23:55 --> Final output sent to browser
DEBUG - 2016-02-06 16:23:55 --> Total execution time: 0.2879
INFO - 2016-02-06 16:24:03 --> Config Class Initialized
INFO - 2016-02-06 16:24:03 --> Hooks Class Initialized
DEBUG - 2016-02-06 16:24:03 --> UTF-8 Support Enabled
INFO - 2016-02-06 16:24:03 --> Utf8 Class Initialized
INFO - 2016-02-06 16:24:03 --> URI Class Initialized
INFO - 2016-02-06 16:24:03 --> Router Class Initialized
INFO - 2016-02-06 16:24:03 --> Output Class Initialized
INFO - 2016-02-06 16:24:03 --> Security Class Initialized
DEBUG - 2016-02-06 16:24:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 16:24:03 --> Input Class Initialized
INFO - 2016-02-06 16:24:03 --> Language Class Initialized
INFO - 2016-02-06 16:24:03 --> Language Class Initialized
INFO - 2016-02-06 16:24:03 --> Config Class Initialized
INFO - 2016-02-06 16:24:03 --> Loader Class Initialized
INFO - 2016-02-06 16:24:03 --> Helper loaded: form_helper
INFO - 2016-02-06 16:24:03 --> Helper loaded: url_helper
INFO - 2016-02-06 16:24:03 --> Helper loaded: general_helper
INFO - 2016-02-06 16:24:03 --> Database Driver Class Initialized
INFO - 2016-02-06 16:24:03 --> Form Validation Class Initialized
DEBUG - 2016-02-06 16:24:03 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 16:24:03 --> Email Class Initialized
INFO - 2016-02-06 16:24:03 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 16:24:03 --> Helper loaded: cookie_helper
INFO - 2016-02-06 16:24:03 --> Helper loaded: language_helper
INFO - 2016-02-06 16:24:03 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 16:24:03 --> Model Class Initialized
INFO - 2016-02-06 16:24:03 --> Helper loaded: inflector_helper
INFO - 2016-02-06 16:24:03 --> Model Class Initialized
INFO - 2016-02-06 16:24:03 --> Helper loaded: date_helper
INFO - 2016-02-06 16:24:03 --> Controller Class Initialized
DEBUG - 2016-02-06 16:24:03 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 16:24:03 --> Model Class Initialized
INFO - 2016-02-06 16:24:03 --> Language file loaded: language/dutch/form_validation_lang.php
DEBUG - 2016-02-06 16:24:03 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 16:24:03 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/views/login.php
DEBUG - 2016-02-06 16:24:03 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 16:24:03 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 16:24:03 --> Profiler Class Initialized
INFO - 2016-02-06 16:24:03 --> Helper loaded: text_helper
INFO - 2016-02-06 16:24:03 --> Final output sent to browser
DEBUG - 2016-02-06 16:24:03 --> Total execution time: 0.2995
INFO - 2016-02-06 16:34:00 --> Config Class Initialized
INFO - 2016-02-06 16:34:00 --> Hooks Class Initialized
DEBUG - 2016-02-06 16:34:00 --> UTF-8 Support Enabled
INFO - 2016-02-06 16:34:00 --> Utf8 Class Initialized
INFO - 2016-02-06 16:34:00 --> URI Class Initialized
INFO - 2016-02-06 16:34:00 --> Router Class Initialized
INFO - 2016-02-06 16:34:00 --> Output Class Initialized
INFO - 2016-02-06 16:34:00 --> Security Class Initialized
DEBUG - 2016-02-06 16:34:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 16:34:00 --> Input Class Initialized
INFO - 2016-02-06 16:34:00 --> Language Class Initialized
INFO - 2016-02-06 16:34:00 --> Language Class Initialized
INFO - 2016-02-06 16:34:00 --> Config Class Initialized
INFO - 2016-02-06 16:34:00 --> Loader Class Initialized
INFO - 2016-02-06 16:34:00 --> Helper loaded: form_helper
INFO - 2016-02-06 16:34:00 --> Helper loaded: url_helper
INFO - 2016-02-06 16:34:00 --> Helper loaded: general_helper
INFO - 2016-02-06 16:34:00 --> Database Driver Class Initialized
INFO - 2016-02-06 16:34:00 --> Form Validation Class Initialized
DEBUG - 2016-02-06 16:34:00 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 16:34:00 --> Email Class Initialized
INFO - 2016-02-06 16:34:00 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 16:34:00 --> Helper loaded: cookie_helper
INFO - 2016-02-06 16:34:00 --> Helper loaded: language_helper
INFO - 2016-02-06 16:34:00 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 16:34:00 --> Model Class Initialized
INFO - 2016-02-06 16:34:00 --> Helper loaded: inflector_helper
INFO - 2016-02-06 16:34:00 --> Model Class Initialized
INFO - 2016-02-06 16:34:00 --> Helper loaded: date_helper
INFO - 2016-02-06 16:34:00 --> Controller Class Initialized
DEBUG - 2016-02-06 16:34:00 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 16:34:00 --> Model Class Initialized
INFO - 2016-02-06 16:34:00 --> Language file loaded: language/dutch/form_validation_lang.php
DEBUG - 2016-02-06 16:34:00 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
ERROR - 2016-02-06 16:34:00 --> Severity: Notice --> Undefined variable: sub_data C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\core\MY_Controller.php 33
ERROR - 2016-02-06 16:34:00 --> Severity: Notice --> Undefined variable: error C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\users\views\login.php 6
ERROR - 2016-02-06 16:34:00 --> Severity: Notice --> Undefined variable: users C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\users\views\login.php 14
DEBUG - 2016-02-06 16:34:00 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/views/login.php
DEBUG - 2016-02-06 16:34:00 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 16:34:00 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 16:34:00 --> Profiler Class Initialized
INFO - 2016-02-06 16:34:00 --> Helper loaded: text_helper
INFO - 2016-02-06 16:34:00 --> Final output sent to browser
DEBUG - 2016-02-06 16:34:00 --> Total execution time: 0.3787
INFO - 2016-02-06 16:34:54 --> Config Class Initialized
INFO - 2016-02-06 16:34:54 --> Hooks Class Initialized
DEBUG - 2016-02-06 16:34:54 --> UTF-8 Support Enabled
INFO - 2016-02-06 16:34:54 --> Utf8 Class Initialized
INFO - 2016-02-06 16:34:54 --> URI Class Initialized
INFO - 2016-02-06 16:34:54 --> Router Class Initialized
INFO - 2016-02-06 16:34:54 --> Output Class Initialized
INFO - 2016-02-06 16:34:54 --> Security Class Initialized
DEBUG - 2016-02-06 16:34:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 16:34:54 --> Input Class Initialized
INFO - 2016-02-06 16:34:54 --> Language Class Initialized
INFO - 2016-02-06 16:34:54 --> Language Class Initialized
INFO - 2016-02-06 16:34:54 --> Config Class Initialized
INFO - 2016-02-06 16:34:54 --> Loader Class Initialized
INFO - 2016-02-06 16:34:54 --> Helper loaded: form_helper
INFO - 2016-02-06 16:34:54 --> Helper loaded: url_helper
INFO - 2016-02-06 16:34:54 --> Helper loaded: general_helper
INFO - 2016-02-06 16:34:54 --> Database Driver Class Initialized
INFO - 2016-02-06 16:34:54 --> Form Validation Class Initialized
DEBUG - 2016-02-06 16:34:54 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 16:34:54 --> Email Class Initialized
INFO - 2016-02-06 16:34:54 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 16:34:54 --> Helper loaded: cookie_helper
INFO - 2016-02-06 16:34:54 --> Helper loaded: language_helper
INFO - 2016-02-06 16:34:54 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 16:34:54 --> Model Class Initialized
INFO - 2016-02-06 16:34:54 --> Helper loaded: inflector_helper
INFO - 2016-02-06 16:34:54 --> Model Class Initialized
INFO - 2016-02-06 16:34:54 --> Helper loaded: date_helper
INFO - 2016-02-06 16:34:54 --> Controller Class Initialized
DEBUG - 2016-02-06 16:34:54 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 16:34:54 --> Model Class Initialized
INFO - 2016-02-06 16:34:54 --> Language file loaded: language/dutch/form_validation_lang.php
DEBUG - 2016-02-06 16:34:54 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
ERROR - 2016-02-06 16:34:54 --> Severity: Notice --> Undefined variable: sub_data C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\core\MY_Controller.php 33
ERROR - 2016-02-06 16:34:54 --> Severity: Notice --> Undefined variable: users C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\users\views\login.php 14
DEBUG - 2016-02-06 16:34:54 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/views/login.php
DEBUG - 2016-02-06 16:34:54 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 16:34:54 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 16:34:54 --> Profiler Class Initialized
INFO - 2016-02-06 16:34:54 --> Helper loaded: text_helper
INFO - 2016-02-06 16:34:54 --> Final output sent to browser
DEBUG - 2016-02-06 16:34:54 --> Total execution time: 0.3224
INFO - 2016-02-06 16:36:36 --> Config Class Initialized
INFO - 2016-02-06 16:36:36 --> Hooks Class Initialized
DEBUG - 2016-02-06 16:36:36 --> UTF-8 Support Enabled
INFO - 2016-02-06 16:36:36 --> Utf8 Class Initialized
INFO - 2016-02-06 16:36:36 --> URI Class Initialized
INFO - 2016-02-06 16:36:36 --> Router Class Initialized
INFO - 2016-02-06 16:36:36 --> Output Class Initialized
INFO - 2016-02-06 16:36:36 --> Security Class Initialized
DEBUG - 2016-02-06 16:36:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 16:36:36 --> Input Class Initialized
INFO - 2016-02-06 16:36:36 --> Language Class Initialized
INFO - 2016-02-06 16:36:36 --> Language Class Initialized
INFO - 2016-02-06 16:36:36 --> Config Class Initialized
INFO - 2016-02-06 16:36:36 --> Loader Class Initialized
INFO - 2016-02-06 16:36:36 --> Helper loaded: form_helper
INFO - 2016-02-06 16:36:36 --> Helper loaded: url_helper
INFO - 2016-02-06 16:36:36 --> Helper loaded: general_helper
INFO - 2016-02-06 16:36:36 --> Database Driver Class Initialized
INFO - 2016-02-06 16:36:36 --> Form Validation Class Initialized
DEBUG - 2016-02-06 16:36:36 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 16:36:36 --> Email Class Initialized
INFO - 2016-02-06 16:36:36 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 16:36:36 --> Helper loaded: cookie_helper
INFO - 2016-02-06 16:36:36 --> Helper loaded: language_helper
INFO - 2016-02-06 16:36:36 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 16:36:36 --> Model Class Initialized
INFO - 2016-02-06 16:36:36 --> Helper loaded: inflector_helper
INFO - 2016-02-06 16:36:36 --> Model Class Initialized
INFO - 2016-02-06 16:36:36 --> Helper loaded: date_helper
INFO - 2016-02-06 16:36:36 --> Controller Class Initialized
DEBUG - 2016-02-06 16:36:36 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 16:36:36 --> Model Class Initialized
INFO - 2016-02-06 16:36:36 --> Language file loaded: language/dutch/form_validation_lang.php
DEBUG - 2016-02-06 16:36:36 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 16:36:36 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 16:36:36 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 16:36:36 --> Profiler Class Initialized
INFO - 2016-02-06 16:36:36 --> Helper loaded: text_helper
INFO - 2016-02-06 16:36:36 --> Final output sent to browser
DEBUG - 2016-02-06 16:36:36 --> Total execution time: 0.3012
INFO - 2016-02-06 16:36:58 --> Config Class Initialized
INFO - 2016-02-06 16:36:58 --> Hooks Class Initialized
DEBUG - 2016-02-06 16:36:58 --> UTF-8 Support Enabled
INFO - 2016-02-06 16:36:58 --> Utf8 Class Initialized
INFO - 2016-02-06 16:36:58 --> URI Class Initialized
INFO - 2016-02-06 16:36:58 --> Router Class Initialized
INFO - 2016-02-06 16:36:58 --> Output Class Initialized
INFO - 2016-02-06 16:36:58 --> Security Class Initialized
DEBUG - 2016-02-06 16:36:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 16:36:58 --> Input Class Initialized
INFO - 2016-02-06 16:36:58 --> Language Class Initialized
INFO - 2016-02-06 16:36:58 --> Language Class Initialized
INFO - 2016-02-06 16:36:58 --> Config Class Initialized
INFO - 2016-02-06 16:36:58 --> Loader Class Initialized
INFO - 2016-02-06 16:36:58 --> Helper loaded: form_helper
INFO - 2016-02-06 16:36:58 --> Helper loaded: url_helper
INFO - 2016-02-06 16:36:58 --> Helper loaded: general_helper
INFO - 2016-02-06 16:36:58 --> Database Driver Class Initialized
INFO - 2016-02-06 16:36:58 --> Form Validation Class Initialized
DEBUG - 2016-02-06 16:36:58 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 16:36:58 --> Email Class Initialized
INFO - 2016-02-06 16:36:58 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 16:36:58 --> Helper loaded: cookie_helper
INFO - 2016-02-06 16:36:59 --> Helper loaded: language_helper
INFO - 2016-02-06 16:36:59 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 16:36:59 --> Model Class Initialized
INFO - 2016-02-06 16:36:59 --> Helper loaded: inflector_helper
INFO - 2016-02-06 16:36:59 --> Model Class Initialized
INFO - 2016-02-06 16:36:59 --> Helper loaded: date_helper
INFO - 2016-02-06 16:36:59 --> Controller Class Initialized
DEBUG - 2016-02-06 16:36:59 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 16:36:59 --> Model Class Initialized
INFO - 2016-02-06 16:36:59 --> Language file loaded: language/dutch/form_validation_lang.php
DEBUG - 2016-02-06 16:36:59 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 16:36:59 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 16:36:59 --> Profiler Class Initialized
INFO - 2016-02-06 16:36:59 --> Helper loaded: text_helper
INFO - 2016-02-06 16:36:59 --> Final output sent to browser
DEBUG - 2016-02-06 16:36:59 --> Total execution time: 0.3043
INFO - 2016-02-06 16:37:14 --> Config Class Initialized
INFO - 2016-02-06 16:37:14 --> Hooks Class Initialized
DEBUG - 2016-02-06 16:37:14 --> UTF-8 Support Enabled
INFO - 2016-02-06 16:37:14 --> Utf8 Class Initialized
INFO - 2016-02-06 16:37:14 --> URI Class Initialized
INFO - 2016-02-06 16:37:14 --> Router Class Initialized
INFO - 2016-02-06 16:37:14 --> Output Class Initialized
INFO - 2016-02-06 16:37:14 --> Security Class Initialized
DEBUG - 2016-02-06 16:37:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 16:37:14 --> Input Class Initialized
INFO - 2016-02-06 16:37:14 --> Language Class Initialized
INFO - 2016-02-06 16:37:14 --> Language Class Initialized
INFO - 2016-02-06 16:37:14 --> Config Class Initialized
INFO - 2016-02-06 16:37:14 --> Loader Class Initialized
INFO - 2016-02-06 16:37:14 --> Helper loaded: form_helper
INFO - 2016-02-06 16:37:14 --> Helper loaded: url_helper
INFO - 2016-02-06 16:37:14 --> Helper loaded: general_helper
INFO - 2016-02-06 16:37:14 --> Database Driver Class Initialized
INFO - 2016-02-06 16:37:14 --> Form Validation Class Initialized
DEBUG - 2016-02-06 16:37:14 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 16:37:14 --> Email Class Initialized
INFO - 2016-02-06 16:37:14 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 16:37:14 --> Helper loaded: cookie_helper
INFO - 2016-02-06 16:37:14 --> Helper loaded: language_helper
INFO - 2016-02-06 16:37:14 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 16:37:14 --> Model Class Initialized
INFO - 2016-02-06 16:37:14 --> Helper loaded: inflector_helper
INFO - 2016-02-06 16:37:14 --> Model Class Initialized
INFO - 2016-02-06 16:37:14 --> Helper loaded: date_helper
INFO - 2016-02-06 16:37:14 --> Controller Class Initialized
DEBUG - 2016-02-06 16:37:14 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 16:37:14 --> Model Class Initialized
INFO - 2016-02-06 16:37:14 --> Language file loaded: language/dutch/form_validation_lang.php
DEBUG - 2016-02-06 16:37:14 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
ERROR - 2016-02-06 16:37:14 --> Severity: Notice --> Undefined variable: sub_data C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\core\MY_Controller.php 33
ERROR - 2016-02-06 16:37:14 --> Severity: Notice --> Undefined variable: users C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\users\views\login.php 14
DEBUG - 2016-02-06 16:37:14 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/views/login.php
DEBUG - 2016-02-06 16:37:14 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 16:37:14 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 16:37:14 --> Profiler Class Initialized
INFO - 2016-02-06 16:37:14 --> Helper loaded: text_helper
INFO - 2016-02-06 16:37:14 --> Final output sent to browser
DEBUG - 2016-02-06 16:37:14 --> Total execution time: 0.3182
INFO - 2016-02-06 16:37:31 --> Config Class Initialized
INFO - 2016-02-06 16:37:31 --> Hooks Class Initialized
DEBUG - 2016-02-06 16:37:31 --> UTF-8 Support Enabled
INFO - 2016-02-06 16:37:31 --> Utf8 Class Initialized
INFO - 2016-02-06 16:37:31 --> URI Class Initialized
INFO - 2016-02-06 16:37:31 --> Router Class Initialized
INFO - 2016-02-06 16:37:31 --> Output Class Initialized
INFO - 2016-02-06 16:37:31 --> Security Class Initialized
DEBUG - 2016-02-06 16:37:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 16:37:31 --> Input Class Initialized
INFO - 2016-02-06 16:37:31 --> Language Class Initialized
INFO - 2016-02-06 16:37:31 --> Language Class Initialized
INFO - 2016-02-06 16:37:31 --> Config Class Initialized
INFO - 2016-02-06 16:37:31 --> Loader Class Initialized
INFO - 2016-02-06 16:37:31 --> Helper loaded: form_helper
INFO - 2016-02-06 16:37:31 --> Helper loaded: url_helper
INFO - 2016-02-06 16:37:31 --> Helper loaded: general_helper
INFO - 2016-02-06 16:37:31 --> Database Driver Class Initialized
INFO - 2016-02-06 16:37:31 --> Form Validation Class Initialized
DEBUG - 2016-02-06 16:37:31 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 16:37:32 --> Email Class Initialized
INFO - 2016-02-06 16:37:32 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 16:37:32 --> Helper loaded: cookie_helper
INFO - 2016-02-06 16:37:32 --> Helper loaded: language_helper
INFO - 2016-02-06 16:37:32 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 16:37:32 --> Model Class Initialized
INFO - 2016-02-06 16:37:32 --> Helper loaded: inflector_helper
INFO - 2016-02-06 16:37:32 --> Model Class Initialized
INFO - 2016-02-06 16:37:32 --> Helper loaded: date_helper
INFO - 2016-02-06 16:37:32 --> Controller Class Initialized
DEBUG - 2016-02-06 16:37:32 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 16:37:32 --> Model Class Initialized
INFO - 2016-02-06 16:37:32 --> Language file loaded: language/dutch/form_validation_lang.php
DEBUG - 2016-02-06 16:37:32 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 16:37:32 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/views/login.php
DEBUG - 2016-02-06 16:37:32 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 16:37:32 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 16:37:32 --> Profiler Class Initialized
INFO - 2016-02-06 16:37:32 --> Helper loaded: text_helper
INFO - 2016-02-06 16:37:32 --> Final output sent to browser
DEBUG - 2016-02-06 16:37:32 --> Total execution time: 0.3000
INFO - 2016-02-06 16:37:37 --> Config Class Initialized
INFO - 2016-02-06 16:37:37 --> Hooks Class Initialized
DEBUG - 2016-02-06 16:37:37 --> UTF-8 Support Enabled
INFO - 2016-02-06 16:37:37 --> Utf8 Class Initialized
INFO - 2016-02-06 16:37:37 --> URI Class Initialized
INFO - 2016-02-06 16:37:37 --> Router Class Initialized
INFO - 2016-02-06 16:37:37 --> Output Class Initialized
INFO - 2016-02-06 16:37:37 --> Security Class Initialized
DEBUG - 2016-02-06 16:37:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 16:37:37 --> Input Class Initialized
INFO - 2016-02-06 16:37:37 --> Language Class Initialized
INFO - 2016-02-06 16:37:37 --> Language Class Initialized
INFO - 2016-02-06 16:37:37 --> Config Class Initialized
INFO - 2016-02-06 16:37:37 --> Loader Class Initialized
INFO - 2016-02-06 16:37:37 --> Helper loaded: form_helper
INFO - 2016-02-06 16:37:37 --> Helper loaded: url_helper
INFO - 2016-02-06 16:37:37 --> Helper loaded: general_helper
INFO - 2016-02-06 16:37:37 --> Database Driver Class Initialized
INFO - 2016-02-06 16:37:37 --> Form Validation Class Initialized
DEBUG - 2016-02-06 16:37:37 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 16:37:37 --> Email Class Initialized
INFO - 2016-02-06 16:37:37 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 16:37:37 --> Helper loaded: cookie_helper
INFO - 2016-02-06 16:37:37 --> Helper loaded: language_helper
INFO - 2016-02-06 16:37:37 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 16:37:37 --> Model Class Initialized
INFO - 2016-02-06 16:37:37 --> Helper loaded: inflector_helper
INFO - 2016-02-06 16:37:37 --> Model Class Initialized
INFO - 2016-02-06 16:37:37 --> Helper loaded: date_helper
INFO - 2016-02-06 16:37:37 --> Controller Class Initialized
DEBUG - 2016-02-06 16:37:37 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 16:37:37 --> Model Class Initialized
INFO - 2016-02-06 16:37:37 --> Language file loaded: language/dutch/form_validation_lang.php
DEBUG - 2016-02-06 16:37:37 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 16:37:37 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/views/login.php
DEBUG - 2016-02-06 16:37:37 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 16:37:37 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 16:37:37 --> Profiler Class Initialized
INFO - 2016-02-06 16:37:37 --> Helper loaded: text_helper
INFO - 2016-02-06 16:37:37 --> Final output sent to browser
DEBUG - 2016-02-06 16:37:37 --> Total execution time: 0.2933
INFO - 2016-02-06 16:37:41 --> Config Class Initialized
INFO - 2016-02-06 16:37:41 --> Hooks Class Initialized
DEBUG - 2016-02-06 16:37:41 --> UTF-8 Support Enabled
INFO - 2016-02-06 16:37:41 --> Utf8 Class Initialized
INFO - 2016-02-06 16:37:41 --> URI Class Initialized
INFO - 2016-02-06 16:37:41 --> Router Class Initialized
INFO - 2016-02-06 16:37:41 --> Output Class Initialized
INFO - 2016-02-06 16:37:41 --> Security Class Initialized
DEBUG - 2016-02-06 16:37:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 16:37:41 --> Input Class Initialized
INFO - 2016-02-06 16:37:41 --> Language Class Initialized
INFO - 2016-02-06 16:37:41 --> Language Class Initialized
INFO - 2016-02-06 16:37:41 --> Config Class Initialized
INFO - 2016-02-06 16:37:41 --> Loader Class Initialized
INFO - 2016-02-06 16:37:41 --> Helper loaded: form_helper
INFO - 2016-02-06 16:37:41 --> Helper loaded: url_helper
INFO - 2016-02-06 16:37:41 --> Helper loaded: general_helper
INFO - 2016-02-06 16:37:41 --> Database Driver Class Initialized
INFO - 2016-02-06 16:37:41 --> Form Validation Class Initialized
DEBUG - 2016-02-06 16:37:41 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 16:37:41 --> Email Class Initialized
INFO - 2016-02-06 16:37:41 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 16:37:41 --> Helper loaded: cookie_helper
INFO - 2016-02-06 16:37:41 --> Helper loaded: language_helper
INFO - 2016-02-06 16:37:41 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 16:37:41 --> Model Class Initialized
INFO - 2016-02-06 16:37:41 --> Helper loaded: inflector_helper
INFO - 2016-02-06 16:37:41 --> Model Class Initialized
INFO - 2016-02-06 16:37:41 --> Helper loaded: date_helper
INFO - 2016-02-06 16:37:41 --> Controller Class Initialized
DEBUG - 2016-02-06 16:37:41 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 16:37:41 --> Model Class Initialized
INFO - 2016-02-06 16:37:41 --> Language file loaded: language/dutch/form_validation_lang.php
DEBUG - 2016-02-06 16:37:41 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 16:37:41 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/views/login.php
DEBUG - 2016-02-06 16:37:41 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 16:37:41 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 16:37:41 --> Profiler Class Initialized
INFO - 2016-02-06 16:37:41 --> Helper loaded: text_helper
INFO - 2016-02-06 16:37:41 --> Final output sent to browser
DEBUG - 2016-02-06 16:37:41 --> Total execution time: 0.3194
INFO - 2016-02-06 16:37:55 --> Config Class Initialized
INFO - 2016-02-06 16:37:55 --> Hooks Class Initialized
DEBUG - 2016-02-06 16:37:55 --> UTF-8 Support Enabled
INFO - 2016-02-06 16:37:55 --> Utf8 Class Initialized
INFO - 2016-02-06 16:37:55 --> URI Class Initialized
INFO - 2016-02-06 16:37:55 --> Router Class Initialized
INFO - 2016-02-06 16:37:55 --> Output Class Initialized
INFO - 2016-02-06 16:37:55 --> Security Class Initialized
DEBUG - 2016-02-06 16:37:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 16:37:55 --> Input Class Initialized
INFO - 2016-02-06 16:37:55 --> Language Class Initialized
INFO - 2016-02-06 16:37:56 --> Language Class Initialized
INFO - 2016-02-06 16:37:56 --> Config Class Initialized
INFO - 2016-02-06 16:37:56 --> Loader Class Initialized
INFO - 2016-02-06 16:37:56 --> Helper loaded: form_helper
INFO - 2016-02-06 16:37:56 --> Helper loaded: url_helper
INFO - 2016-02-06 16:37:56 --> Helper loaded: general_helper
INFO - 2016-02-06 16:37:56 --> Database Driver Class Initialized
INFO - 2016-02-06 16:37:56 --> Form Validation Class Initialized
DEBUG - 2016-02-06 16:37:56 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 16:37:56 --> Email Class Initialized
INFO - 2016-02-06 16:37:56 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 16:37:56 --> Helper loaded: cookie_helper
INFO - 2016-02-06 16:37:56 --> Helper loaded: language_helper
INFO - 2016-02-06 16:37:56 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 16:37:56 --> Model Class Initialized
INFO - 2016-02-06 16:37:56 --> Helper loaded: inflector_helper
INFO - 2016-02-06 16:37:56 --> Model Class Initialized
INFO - 2016-02-06 16:37:56 --> Helper loaded: date_helper
INFO - 2016-02-06 16:37:56 --> Controller Class Initialized
DEBUG - 2016-02-06 16:37:56 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 16:37:56 --> Model Class Initialized
INFO - 2016-02-06 16:37:56 --> Language file loaded: language/dutch/form_validation_lang.php
DEBUG - 2016-02-06 16:37:56 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 16:37:56 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/views/login.php
DEBUG - 2016-02-06 16:37:56 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 16:37:56 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 16:37:56 --> Profiler Class Initialized
INFO - 2016-02-06 16:37:56 --> Helper loaded: text_helper
INFO - 2016-02-06 16:37:56 --> Final output sent to browser
DEBUG - 2016-02-06 16:37:56 --> Total execution time: 0.3329
INFO - 2016-02-06 16:38:49 --> Config Class Initialized
INFO - 2016-02-06 16:38:49 --> Hooks Class Initialized
DEBUG - 2016-02-06 16:38:49 --> UTF-8 Support Enabled
INFO - 2016-02-06 16:38:49 --> Utf8 Class Initialized
INFO - 2016-02-06 16:38:49 --> URI Class Initialized
INFO - 2016-02-06 16:38:49 --> Router Class Initialized
INFO - 2016-02-06 16:38:49 --> Output Class Initialized
INFO - 2016-02-06 16:38:49 --> Security Class Initialized
DEBUG - 2016-02-06 16:38:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 16:38:49 --> Input Class Initialized
INFO - 2016-02-06 16:38:49 --> Language Class Initialized
INFO - 2016-02-06 16:38:49 --> Language Class Initialized
INFO - 2016-02-06 16:38:49 --> Config Class Initialized
INFO - 2016-02-06 16:38:49 --> Loader Class Initialized
INFO - 2016-02-06 16:38:49 --> Helper loaded: form_helper
INFO - 2016-02-06 16:38:49 --> Helper loaded: url_helper
INFO - 2016-02-06 16:38:49 --> Helper loaded: general_helper
INFO - 2016-02-06 16:38:49 --> Database Driver Class Initialized
INFO - 2016-02-06 16:38:49 --> Form Validation Class Initialized
DEBUG - 2016-02-06 16:38:49 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 16:38:49 --> Email Class Initialized
INFO - 2016-02-06 16:38:49 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 16:38:49 --> Helper loaded: cookie_helper
INFO - 2016-02-06 16:38:49 --> Helper loaded: language_helper
INFO - 2016-02-06 16:38:49 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 16:38:49 --> Model Class Initialized
INFO - 2016-02-06 16:38:50 --> Helper loaded: inflector_helper
INFO - 2016-02-06 16:38:50 --> Model Class Initialized
INFO - 2016-02-06 16:38:50 --> Helper loaded: date_helper
INFO - 2016-02-06 16:38:50 --> Controller Class Initialized
DEBUG - 2016-02-06 16:38:50 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 16:38:50 --> Model Class Initialized
INFO - 2016-02-06 16:38:50 --> Language file loaded: language/dutch/form_validation_lang.php
DEBUG - 2016-02-06 16:38:50 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 16:38:50 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/views/login.php
INFO - 2016-02-06 16:39:13 --> Config Class Initialized
INFO - 2016-02-06 16:39:13 --> Hooks Class Initialized
DEBUG - 2016-02-06 16:39:13 --> UTF-8 Support Enabled
INFO - 2016-02-06 16:39:13 --> Utf8 Class Initialized
INFO - 2016-02-06 16:39:13 --> URI Class Initialized
INFO - 2016-02-06 16:39:13 --> Router Class Initialized
INFO - 2016-02-06 16:39:14 --> Output Class Initialized
INFO - 2016-02-06 16:39:14 --> Security Class Initialized
DEBUG - 2016-02-06 16:39:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 16:39:14 --> Input Class Initialized
INFO - 2016-02-06 16:39:14 --> Language Class Initialized
INFO - 2016-02-06 16:39:14 --> Language Class Initialized
INFO - 2016-02-06 16:39:14 --> Config Class Initialized
INFO - 2016-02-06 16:39:14 --> Loader Class Initialized
INFO - 2016-02-06 16:39:14 --> Helper loaded: form_helper
INFO - 2016-02-06 16:39:14 --> Helper loaded: url_helper
INFO - 2016-02-06 16:39:14 --> Helper loaded: general_helper
INFO - 2016-02-06 16:39:14 --> Database Driver Class Initialized
INFO - 2016-02-06 16:39:14 --> Form Validation Class Initialized
DEBUG - 2016-02-06 16:39:14 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 16:39:14 --> Email Class Initialized
INFO - 2016-02-06 16:39:14 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 16:39:14 --> Helper loaded: cookie_helper
INFO - 2016-02-06 16:39:14 --> Helper loaded: language_helper
INFO - 2016-02-06 16:39:14 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 16:39:14 --> Model Class Initialized
INFO - 2016-02-06 16:39:14 --> Helper loaded: inflector_helper
INFO - 2016-02-06 16:39:14 --> Model Class Initialized
INFO - 2016-02-06 16:39:14 --> Helper loaded: date_helper
INFO - 2016-02-06 16:39:14 --> Controller Class Initialized
DEBUG - 2016-02-06 16:39:14 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 16:39:14 --> Model Class Initialized
INFO - 2016-02-06 16:39:14 --> Language file loaded: language/dutch/form_validation_lang.php
DEBUG - 2016-02-06 16:39:14 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/views/login.php
DEBUG - 2016-02-06 16:39:14 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 16:39:14 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 16:39:14 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 16:39:14 --> Profiler Class Initialized
INFO - 2016-02-06 16:39:14 --> Helper loaded: text_helper
INFO - 2016-02-06 16:39:14 --> Final output sent to browser
DEBUG - 2016-02-06 16:39:14 --> Total execution time: 0.3187
INFO - 2016-02-06 16:39:45 --> Config Class Initialized
INFO - 2016-02-06 16:39:45 --> Hooks Class Initialized
DEBUG - 2016-02-06 16:39:45 --> UTF-8 Support Enabled
INFO - 2016-02-06 16:39:45 --> Utf8 Class Initialized
INFO - 2016-02-06 16:39:45 --> URI Class Initialized
INFO - 2016-02-06 16:39:45 --> Router Class Initialized
INFO - 2016-02-06 16:39:45 --> Output Class Initialized
INFO - 2016-02-06 16:39:45 --> Security Class Initialized
DEBUG - 2016-02-06 16:39:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 16:39:45 --> Input Class Initialized
INFO - 2016-02-06 16:39:46 --> Language Class Initialized
INFO - 2016-02-06 16:39:46 --> Language Class Initialized
INFO - 2016-02-06 16:39:46 --> Config Class Initialized
INFO - 2016-02-06 16:39:46 --> Loader Class Initialized
INFO - 2016-02-06 16:39:46 --> Helper loaded: form_helper
INFO - 2016-02-06 16:39:46 --> Helper loaded: url_helper
INFO - 2016-02-06 16:39:46 --> Helper loaded: general_helper
INFO - 2016-02-06 16:39:46 --> Database Driver Class Initialized
INFO - 2016-02-06 16:39:46 --> Form Validation Class Initialized
DEBUG - 2016-02-06 16:39:46 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 16:39:46 --> Email Class Initialized
INFO - 2016-02-06 16:39:46 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 16:39:46 --> Helper loaded: cookie_helper
INFO - 2016-02-06 16:39:46 --> Helper loaded: language_helper
INFO - 2016-02-06 16:39:46 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 16:39:46 --> Model Class Initialized
INFO - 2016-02-06 16:39:46 --> Helper loaded: inflector_helper
INFO - 2016-02-06 16:39:46 --> Model Class Initialized
INFO - 2016-02-06 16:39:46 --> Helper loaded: date_helper
INFO - 2016-02-06 16:39:46 --> Controller Class Initialized
DEBUG - 2016-02-06 16:39:46 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 16:39:46 --> Model Class Initialized
INFO - 2016-02-06 16:39:46 --> Language file loaded: language/dutch/form_validation_lang.php
DEBUG - 2016-02-06 16:39:46 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 16:39:46 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/views/login.php
DEBUG - 2016-02-06 16:39:46 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 16:39:46 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 16:39:46 --> Profiler Class Initialized
INFO - 2016-02-06 16:39:46 --> Helper loaded: text_helper
INFO - 2016-02-06 16:39:46 --> Final output sent to browser
DEBUG - 2016-02-06 16:39:46 --> Total execution time: 0.3058
INFO - 2016-02-06 16:39:49 --> Config Class Initialized
INFO - 2016-02-06 16:39:49 --> Hooks Class Initialized
DEBUG - 2016-02-06 16:39:49 --> UTF-8 Support Enabled
INFO - 2016-02-06 16:39:49 --> Utf8 Class Initialized
INFO - 2016-02-06 16:39:49 --> URI Class Initialized
INFO - 2016-02-06 16:39:49 --> Router Class Initialized
INFO - 2016-02-06 16:39:49 --> Output Class Initialized
INFO - 2016-02-06 16:39:49 --> Security Class Initialized
DEBUG - 2016-02-06 16:39:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 16:39:49 --> Input Class Initialized
INFO - 2016-02-06 16:39:49 --> Language Class Initialized
INFO - 2016-02-06 16:39:49 --> Language Class Initialized
INFO - 2016-02-06 16:39:49 --> Config Class Initialized
INFO - 2016-02-06 16:39:49 --> Loader Class Initialized
INFO - 2016-02-06 16:39:49 --> Helper loaded: form_helper
INFO - 2016-02-06 16:39:49 --> Helper loaded: url_helper
INFO - 2016-02-06 16:39:49 --> Helper loaded: general_helper
INFO - 2016-02-06 16:39:49 --> Database Driver Class Initialized
INFO - 2016-02-06 16:39:49 --> Form Validation Class Initialized
DEBUG - 2016-02-06 16:39:49 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 16:39:49 --> Email Class Initialized
INFO - 2016-02-06 16:39:49 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 16:39:49 --> Helper loaded: cookie_helper
INFO - 2016-02-06 16:39:49 --> Helper loaded: language_helper
INFO - 2016-02-06 16:39:49 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 16:39:49 --> Model Class Initialized
INFO - 2016-02-06 16:39:49 --> Helper loaded: inflector_helper
INFO - 2016-02-06 16:39:50 --> Model Class Initialized
INFO - 2016-02-06 16:39:50 --> Helper loaded: date_helper
INFO - 2016-02-06 16:39:50 --> Controller Class Initialized
DEBUG - 2016-02-06 16:39:50 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 16:39:50 --> Model Class Initialized
INFO - 2016-02-06 16:39:50 --> Language file loaded: language/dutch/form_validation_lang.php
DEBUG - 2016-02-06 16:39:50 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 16:39:50 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/views/login.php
DEBUG - 2016-02-06 16:39:50 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 16:39:50 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 16:39:50 --> Profiler Class Initialized
INFO - 2016-02-06 16:39:50 --> Helper loaded: text_helper
INFO - 2016-02-06 16:39:50 --> Final output sent to browser
DEBUG - 2016-02-06 16:39:50 --> Total execution time: 0.3133
INFO - 2016-02-06 16:39:50 --> Config Class Initialized
INFO - 2016-02-06 16:39:50 --> Hooks Class Initialized
DEBUG - 2016-02-06 16:39:50 --> UTF-8 Support Enabled
INFO - 2016-02-06 16:39:50 --> Utf8 Class Initialized
INFO - 2016-02-06 16:39:50 --> URI Class Initialized
INFO - 2016-02-06 16:39:51 --> Router Class Initialized
INFO - 2016-02-06 16:39:51 --> Output Class Initialized
INFO - 2016-02-06 16:39:51 --> Security Class Initialized
DEBUG - 2016-02-06 16:39:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 16:39:51 --> Input Class Initialized
INFO - 2016-02-06 16:39:51 --> Language Class Initialized
INFO - 2016-02-06 16:39:51 --> Language Class Initialized
INFO - 2016-02-06 16:39:51 --> Config Class Initialized
INFO - 2016-02-06 16:39:51 --> Loader Class Initialized
INFO - 2016-02-06 16:39:51 --> Helper loaded: form_helper
INFO - 2016-02-06 16:39:51 --> Helper loaded: url_helper
INFO - 2016-02-06 16:39:51 --> Helper loaded: general_helper
INFO - 2016-02-06 16:39:51 --> Database Driver Class Initialized
INFO - 2016-02-06 16:39:51 --> Form Validation Class Initialized
DEBUG - 2016-02-06 16:39:51 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 16:39:51 --> Email Class Initialized
INFO - 2016-02-06 16:39:51 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 16:39:51 --> Helper loaded: cookie_helper
INFO - 2016-02-06 16:39:51 --> Helper loaded: language_helper
INFO - 2016-02-06 16:39:51 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 16:39:51 --> Model Class Initialized
INFO - 2016-02-06 16:39:51 --> Helper loaded: inflector_helper
INFO - 2016-02-06 16:39:51 --> Model Class Initialized
INFO - 2016-02-06 16:39:51 --> Helper loaded: date_helper
INFO - 2016-02-06 16:39:51 --> Controller Class Initialized
DEBUG - 2016-02-06 16:39:51 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 16:39:51 --> Model Class Initialized
INFO - 2016-02-06 16:39:51 --> Language file loaded: language/dutch/form_validation_lang.php
DEBUG - 2016-02-06 16:39:51 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 16:39:51 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/views/login.php
DEBUG - 2016-02-06 16:39:51 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 16:39:51 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 16:39:51 --> Profiler Class Initialized
INFO - 2016-02-06 16:39:51 --> Helper loaded: text_helper
INFO - 2016-02-06 16:39:51 --> Final output sent to browser
DEBUG - 2016-02-06 16:39:51 --> Total execution time: 0.3073
INFO - 2016-02-06 16:40:15 --> Config Class Initialized
INFO - 2016-02-06 16:40:15 --> Hooks Class Initialized
DEBUG - 2016-02-06 16:40:15 --> UTF-8 Support Enabled
INFO - 2016-02-06 16:40:15 --> Utf8 Class Initialized
INFO - 2016-02-06 16:40:15 --> URI Class Initialized
INFO - 2016-02-06 16:40:15 --> Router Class Initialized
INFO - 2016-02-06 16:40:15 --> Output Class Initialized
INFO - 2016-02-06 16:40:15 --> Security Class Initialized
DEBUG - 2016-02-06 16:40:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 16:40:15 --> Input Class Initialized
INFO - 2016-02-06 16:40:15 --> Language Class Initialized
INFO - 2016-02-06 16:40:15 --> Language Class Initialized
INFO - 2016-02-06 16:40:15 --> Config Class Initialized
INFO - 2016-02-06 16:40:15 --> Loader Class Initialized
INFO - 2016-02-06 16:40:15 --> Helper loaded: form_helper
INFO - 2016-02-06 16:40:15 --> Helper loaded: url_helper
INFO - 2016-02-06 16:40:15 --> Helper loaded: general_helper
INFO - 2016-02-06 16:40:15 --> Database Driver Class Initialized
INFO - 2016-02-06 16:40:15 --> Form Validation Class Initialized
DEBUG - 2016-02-06 16:40:15 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 16:40:15 --> Email Class Initialized
INFO - 2016-02-06 16:40:15 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 16:40:15 --> Helper loaded: cookie_helper
INFO - 2016-02-06 16:40:15 --> Helper loaded: language_helper
INFO - 2016-02-06 16:40:15 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 16:40:15 --> Model Class Initialized
INFO - 2016-02-06 16:40:15 --> Helper loaded: inflector_helper
INFO - 2016-02-06 16:40:15 --> Model Class Initialized
INFO - 2016-02-06 16:40:15 --> Helper loaded: date_helper
INFO - 2016-02-06 16:40:15 --> Controller Class Initialized
DEBUG - 2016-02-06 16:40:15 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 16:40:15 --> Model Class Initialized
INFO - 2016-02-06 16:40:15 --> Language file loaded: language/dutch/form_validation_lang.php
DEBUG - 2016-02-06 16:40:15 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 16:40:15 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/views/login.php
DEBUG - 2016-02-06 16:40:15 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 16:40:15 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 16:40:15 --> Profiler Class Initialized
INFO - 2016-02-06 16:40:15 --> Helper loaded: text_helper
INFO - 2016-02-06 16:40:15 --> Final output sent to browser
DEBUG - 2016-02-06 16:40:15 --> Total execution time: 0.3264
INFO - 2016-02-06 16:40:29 --> Config Class Initialized
INFO - 2016-02-06 16:40:29 --> Hooks Class Initialized
DEBUG - 2016-02-06 16:40:29 --> UTF-8 Support Enabled
INFO - 2016-02-06 16:40:29 --> Utf8 Class Initialized
INFO - 2016-02-06 16:40:29 --> URI Class Initialized
INFO - 2016-02-06 16:40:29 --> Router Class Initialized
INFO - 2016-02-06 16:40:29 --> Output Class Initialized
INFO - 2016-02-06 16:40:29 --> Security Class Initialized
DEBUG - 2016-02-06 16:40:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 16:40:29 --> Input Class Initialized
INFO - 2016-02-06 16:40:29 --> Language Class Initialized
INFO - 2016-02-06 16:40:29 --> Language Class Initialized
INFO - 2016-02-06 16:40:29 --> Config Class Initialized
INFO - 2016-02-06 16:40:29 --> Loader Class Initialized
INFO - 2016-02-06 16:40:29 --> Helper loaded: form_helper
INFO - 2016-02-06 16:40:29 --> Helper loaded: url_helper
INFO - 2016-02-06 16:40:29 --> Helper loaded: general_helper
INFO - 2016-02-06 16:40:29 --> Database Driver Class Initialized
INFO - 2016-02-06 16:40:29 --> Form Validation Class Initialized
DEBUG - 2016-02-06 16:40:29 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 16:40:29 --> Email Class Initialized
INFO - 2016-02-06 16:40:29 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 16:40:29 --> Helper loaded: cookie_helper
INFO - 2016-02-06 16:40:29 --> Helper loaded: language_helper
INFO - 2016-02-06 16:40:29 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 16:40:29 --> Model Class Initialized
INFO - 2016-02-06 16:40:29 --> Helper loaded: inflector_helper
INFO - 2016-02-06 16:40:29 --> Model Class Initialized
INFO - 2016-02-06 16:40:29 --> Helper loaded: date_helper
INFO - 2016-02-06 16:40:29 --> Controller Class Initialized
DEBUG - 2016-02-06 16:40:29 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 16:40:29 --> Model Class Initialized
INFO - 2016-02-06 16:40:29 --> Language file loaded: language/dutch/form_validation_lang.php
DEBUG - 2016-02-06 16:40:29 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 16:40:29 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/views/login.php
DEBUG - 2016-02-06 16:40:29 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 16:40:29 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 16:40:29 --> Profiler Class Initialized
INFO - 2016-02-06 16:40:29 --> Helper loaded: text_helper
INFO - 2016-02-06 16:40:29 --> Final output sent to browser
DEBUG - 2016-02-06 16:40:29 --> Total execution time: 0.3301
INFO - 2016-02-06 16:42:16 --> Config Class Initialized
INFO - 2016-02-06 16:42:16 --> Hooks Class Initialized
DEBUG - 2016-02-06 16:42:16 --> UTF-8 Support Enabled
INFO - 2016-02-06 16:42:16 --> Utf8 Class Initialized
INFO - 2016-02-06 16:42:16 --> URI Class Initialized
INFO - 2016-02-06 16:42:16 --> Router Class Initialized
INFO - 2016-02-06 16:42:16 --> Output Class Initialized
INFO - 2016-02-06 16:42:16 --> Security Class Initialized
DEBUG - 2016-02-06 16:42:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 16:42:16 --> Input Class Initialized
INFO - 2016-02-06 16:42:16 --> Language Class Initialized
INFO - 2016-02-06 16:42:16 --> Language Class Initialized
INFO - 2016-02-06 16:42:16 --> Config Class Initialized
INFO - 2016-02-06 16:42:16 --> Loader Class Initialized
INFO - 2016-02-06 16:42:16 --> Helper loaded: form_helper
INFO - 2016-02-06 16:42:16 --> Helper loaded: url_helper
INFO - 2016-02-06 16:42:16 --> Helper loaded: general_helper
INFO - 2016-02-06 16:42:16 --> Database Driver Class Initialized
INFO - 2016-02-06 16:42:16 --> Form Validation Class Initialized
DEBUG - 2016-02-06 16:42:16 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 16:42:16 --> Email Class Initialized
INFO - 2016-02-06 16:42:16 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 16:42:16 --> Helper loaded: cookie_helper
INFO - 2016-02-06 16:42:16 --> Helper loaded: language_helper
INFO - 2016-02-06 16:42:16 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 16:42:16 --> Model Class Initialized
INFO - 2016-02-06 16:42:16 --> Helper loaded: inflector_helper
INFO - 2016-02-06 16:42:16 --> Model Class Initialized
INFO - 2016-02-06 16:42:16 --> Helper loaded: date_helper
INFO - 2016-02-06 16:42:16 --> Controller Class Initialized
DEBUG - 2016-02-06 16:42:16 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 16:42:16 --> Model Class Initialized
INFO - 2016-02-06 16:42:16 --> Language file loaded: language/dutch/form_validation_lang.php
DEBUG - 2016-02-06 16:42:16 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 16:42:16 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/views/login.php
DEBUG - 2016-02-06 16:42:16 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 16:42:16 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 16:42:16 --> Profiler Class Initialized
INFO - 2016-02-06 16:42:16 --> Helper loaded: text_helper
INFO - 2016-02-06 16:42:16 --> Final output sent to browser
DEBUG - 2016-02-06 16:42:17 --> Total execution time: 0.3159
INFO - 2016-02-06 16:45:10 --> Config Class Initialized
INFO - 2016-02-06 16:45:10 --> Hooks Class Initialized
DEBUG - 2016-02-06 16:45:10 --> UTF-8 Support Enabled
INFO - 2016-02-06 16:45:10 --> Utf8 Class Initialized
INFO - 2016-02-06 16:45:10 --> URI Class Initialized
INFO - 2016-02-06 16:45:10 --> Router Class Initialized
INFO - 2016-02-06 16:45:10 --> Output Class Initialized
INFO - 2016-02-06 16:45:10 --> Security Class Initialized
DEBUG - 2016-02-06 16:45:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 16:45:10 --> Input Class Initialized
INFO - 2016-02-06 16:45:10 --> Language Class Initialized
INFO - 2016-02-06 16:45:10 --> Language Class Initialized
INFO - 2016-02-06 16:45:10 --> Config Class Initialized
INFO - 2016-02-06 16:45:10 --> Loader Class Initialized
INFO - 2016-02-06 16:45:10 --> Helper loaded: form_helper
INFO - 2016-02-06 16:45:10 --> Helper loaded: url_helper
INFO - 2016-02-06 16:45:10 --> Helper loaded: general_helper
INFO - 2016-02-06 16:45:10 --> Database Driver Class Initialized
INFO - 2016-02-06 16:45:10 --> Form Validation Class Initialized
DEBUG - 2016-02-06 16:45:10 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 16:45:10 --> Email Class Initialized
INFO - 2016-02-06 16:45:10 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 16:45:10 --> Helper loaded: cookie_helper
INFO - 2016-02-06 16:45:11 --> Helper loaded: language_helper
INFO - 2016-02-06 16:45:11 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 16:45:11 --> Model Class Initialized
INFO - 2016-02-06 16:45:11 --> Helper loaded: inflector_helper
INFO - 2016-02-06 16:45:11 --> Model Class Initialized
INFO - 2016-02-06 16:45:11 --> Helper loaded: date_helper
INFO - 2016-02-06 16:45:11 --> Controller Class Initialized
DEBUG - 2016-02-06 16:45:11 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 16:45:11 --> Model Class Initialized
INFO - 2016-02-06 16:45:11 --> Language file loaded: language/dutch/form_validation_lang.php
DEBUG - 2016-02-06 16:45:11 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
ERROR - 2016-02-06 16:45:11 --> Severity: Parsing Error --> syntax error, unexpected ';' C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\users\views\login.php 5
INFO - 2016-02-06 16:47:18 --> Config Class Initialized
INFO - 2016-02-06 16:47:18 --> Hooks Class Initialized
DEBUG - 2016-02-06 16:47:18 --> UTF-8 Support Enabled
INFO - 2016-02-06 16:47:18 --> Utf8 Class Initialized
INFO - 2016-02-06 16:47:19 --> URI Class Initialized
INFO - 2016-02-06 16:47:19 --> Router Class Initialized
INFO - 2016-02-06 16:47:19 --> Output Class Initialized
INFO - 2016-02-06 16:47:19 --> Security Class Initialized
DEBUG - 2016-02-06 16:47:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 16:47:19 --> Input Class Initialized
INFO - 2016-02-06 16:47:19 --> Language Class Initialized
INFO - 2016-02-06 16:47:19 --> Language Class Initialized
INFO - 2016-02-06 16:47:19 --> Config Class Initialized
INFO - 2016-02-06 16:47:19 --> Loader Class Initialized
INFO - 2016-02-06 16:47:19 --> Helper loaded: form_helper
INFO - 2016-02-06 16:47:19 --> Helper loaded: url_helper
INFO - 2016-02-06 16:47:19 --> Helper loaded: general_helper
INFO - 2016-02-06 16:47:19 --> Database Driver Class Initialized
INFO - 2016-02-06 16:47:19 --> Form Validation Class Initialized
DEBUG - 2016-02-06 16:47:19 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 16:47:19 --> Email Class Initialized
INFO - 2016-02-06 16:47:19 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 16:47:19 --> Helper loaded: cookie_helper
INFO - 2016-02-06 16:47:19 --> Helper loaded: language_helper
INFO - 2016-02-06 16:47:19 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 16:47:19 --> Model Class Initialized
INFO - 2016-02-06 16:47:19 --> Helper loaded: inflector_helper
INFO - 2016-02-06 16:47:19 --> Model Class Initialized
INFO - 2016-02-06 16:47:19 --> Helper loaded: date_helper
INFO - 2016-02-06 16:47:19 --> Controller Class Initialized
DEBUG - 2016-02-06 16:47:19 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 16:47:19 --> Model Class Initialized
INFO - 2016-02-06 16:47:19 --> Language file loaded: language/dutch/form_validation_lang.php
DEBUG - 2016-02-06 16:47:19 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 16:47:19 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/views/login.php
DEBUG - 2016-02-06 16:47:19 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 16:47:19 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 16:47:19 --> Profiler Class Initialized
INFO - 2016-02-06 16:47:19 --> Helper loaded: text_helper
INFO - 2016-02-06 16:47:19 --> Final output sent to browser
DEBUG - 2016-02-06 16:47:19 --> Total execution time: 0.3297
INFO - 2016-02-06 16:47:24 --> Config Class Initialized
INFO - 2016-02-06 16:47:24 --> Hooks Class Initialized
DEBUG - 2016-02-06 16:47:24 --> UTF-8 Support Enabled
INFO - 2016-02-06 16:47:24 --> Utf8 Class Initialized
INFO - 2016-02-06 16:47:24 --> URI Class Initialized
INFO - 2016-02-06 16:47:24 --> Router Class Initialized
INFO - 2016-02-06 16:47:24 --> Output Class Initialized
INFO - 2016-02-06 16:47:24 --> Security Class Initialized
DEBUG - 2016-02-06 16:47:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 16:47:24 --> Input Class Initialized
INFO - 2016-02-06 16:47:24 --> Language Class Initialized
INFO - 2016-02-06 16:47:24 --> Language Class Initialized
INFO - 2016-02-06 16:47:24 --> Config Class Initialized
INFO - 2016-02-06 16:47:24 --> Loader Class Initialized
INFO - 2016-02-06 16:47:24 --> Helper loaded: form_helper
INFO - 2016-02-06 16:47:24 --> Helper loaded: url_helper
INFO - 2016-02-06 16:47:24 --> Helper loaded: general_helper
INFO - 2016-02-06 16:47:24 --> Database Driver Class Initialized
INFO - 2016-02-06 16:47:24 --> Form Validation Class Initialized
DEBUG - 2016-02-06 16:47:24 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 16:47:24 --> Email Class Initialized
INFO - 2016-02-06 16:47:24 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 16:47:24 --> Helper loaded: cookie_helper
INFO - 2016-02-06 16:47:24 --> Helper loaded: language_helper
INFO - 2016-02-06 16:47:24 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 16:47:24 --> Model Class Initialized
INFO - 2016-02-06 16:47:24 --> Helper loaded: inflector_helper
INFO - 2016-02-06 16:47:24 --> Model Class Initialized
INFO - 2016-02-06 16:47:24 --> Helper loaded: date_helper
INFO - 2016-02-06 16:47:24 --> Controller Class Initialized
DEBUG - 2016-02-06 16:47:24 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 16:47:24 --> Model Class Initialized
INFO - 2016-02-06 16:47:24 --> Language file loaded: language/dutch/form_validation_lang.php
DEBUG - 2016-02-06 16:47:24 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
ERROR - 2016-02-06 16:47:24 --> Severity: Error --> Call to undefined function We could not log you in() C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\users\views\login.php 6
INFO - 2016-02-06 16:47:49 --> Config Class Initialized
INFO - 2016-02-06 16:47:49 --> Hooks Class Initialized
DEBUG - 2016-02-06 16:47:49 --> UTF-8 Support Enabled
INFO - 2016-02-06 16:47:49 --> Utf8 Class Initialized
INFO - 2016-02-06 16:47:49 --> URI Class Initialized
INFO - 2016-02-06 16:47:49 --> Router Class Initialized
INFO - 2016-02-06 16:47:49 --> Output Class Initialized
INFO - 2016-02-06 16:47:49 --> Security Class Initialized
DEBUG - 2016-02-06 16:47:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 16:47:49 --> Input Class Initialized
INFO - 2016-02-06 16:47:49 --> Language Class Initialized
INFO - 2016-02-06 16:47:49 --> Language Class Initialized
INFO - 2016-02-06 16:47:49 --> Config Class Initialized
INFO - 2016-02-06 16:47:49 --> Loader Class Initialized
INFO - 2016-02-06 16:47:49 --> Helper loaded: form_helper
INFO - 2016-02-06 16:47:49 --> Helper loaded: url_helper
INFO - 2016-02-06 16:47:49 --> Helper loaded: general_helper
INFO - 2016-02-06 16:47:49 --> Database Driver Class Initialized
INFO - 2016-02-06 16:47:49 --> Form Validation Class Initialized
DEBUG - 2016-02-06 16:47:49 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 16:47:49 --> Email Class Initialized
INFO - 2016-02-06 16:47:49 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 16:47:49 --> Helper loaded: cookie_helper
INFO - 2016-02-06 16:47:49 --> Helper loaded: language_helper
INFO - 2016-02-06 16:47:49 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 16:47:49 --> Model Class Initialized
INFO - 2016-02-06 16:47:49 --> Helper loaded: inflector_helper
INFO - 2016-02-06 16:47:49 --> Model Class Initialized
INFO - 2016-02-06 16:47:49 --> Helper loaded: date_helper
INFO - 2016-02-06 16:47:49 --> Controller Class Initialized
DEBUG - 2016-02-06 16:47:49 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 16:47:49 --> Model Class Initialized
INFO - 2016-02-06 16:47:49 --> Language file loaded: language/dutch/form_validation_lang.php
DEBUG - 2016-02-06 16:47:49 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 16:47:49 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/views/login.php
DEBUG - 2016-02-06 16:47:49 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 16:47:49 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 16:47:49 --> Profiler Class Initialized
INFO - 2016-02-06 16:47:49 --> Helper loaded: text_helper
INFO - 2016-02-06 16:47:49 --> Final output sent to browser
DEBUG - 2016-02-06 16:47:49 --> Total execution time: 0.3253
INFO - 2016-02-06 16:48:19 --> Config Class Initialized
INFO - 2016-02-06 16:48:19 --> Hooks Class Initialized
DEBUG - 2016-02-06 16:48:19 --> UTF-8 Support Enabled
INFO - 2016-02-06 16:48:19 --> Utf8 Class Initialized
INFO - 2016-02-06 16:48:19 --> URI Class Initialized
INFO - 2016-02-06 16:48:19 --> Router Class Initialized
INFO - 2016-02-06 16:48:19 --> Output Class Initialized
INFO - 2016-02-06 16:48:19 --> Security Class Initialized
DEBUG - 2016-02-06 16:48:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 16:48:19 --> Input Class Initialized
INFO - 2016-02-06 16:48:19 --> Language Class Initialized
INFO - 2016-02-06 16:48:19 --> Language Class Initialized
INFO - 2016-02-06 16:48:19 --> Config Class Initialized
INFO - 2016-02-06 16:48:19 --> Loader Class Initialized
INFO - 2016-02-06 16:48:19 --> Helper loaded: form_helper
INFO - 2016-02-06 16:48:19 --> Helper loaded: url_helper
INFO - 2016-02-06 16:48:19 --> Helper loaded: general_helper
INFO - 2016-02-06 16:48:19 --> Database Driver Class Initialized
INFO - 2016-02-06 16:48:19 --> Form Validation Class Initialized
DEBUG - 2016-02-06 16:48:19 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 16:48:19 --> Email Class Initialized
INFO - 2016-02-06 16:48:19 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 16:48:19 --> Helper loaded: cookie_helper
INFO - 2016-02-06 16:48:19 --> Helper loaded: language_helper
INFO - 2016-02-06 16:48:19 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 16:48:19 --> Model Class Initialized
INFO - 2016-02-06 16:48:19 --> Helper loaded: inflector_helper
INFO - 2016-02-06 16:48:19 --> Model Class Initialized
INFO - 2016-02-06 16:48:19 --> Helper loaded: date_helper
INFO - 2016-02-06 16:48:19 --> Controller Class Initialized
DEBUG - 2016-02-06 16:48:19 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 16:48:19 --> Model Class Initialized
INFO - 2016-02-06 16:48:19 --> Language file loaded: language/dutch/form_validation_lang.php
DEBUG - 2016-02-06 16:48:19 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 16:48:19 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/views/login.php
DEBUG - 2016-02-06 16:48:19 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 16:48:19 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 16:48:19 --> Profiler Class Initialized
INFO - 2016-02-06 16:48:19 --> Helper loaded: text_helper
INFO - 2016-02-06 16:48:19 --> Final output sent to browser
DEBUG - 2016-02-06 16:48:19 --> Total execution time: 0.3510
INFO - 2016-02-06 16:49:27 --> Config Class Initialized
INFO - 2016-02-06 16:49:27 --> Hooks Class Initialized
DEBUG - 2016-02-06 16:49:27 --> UTF-8 Support Enabled
INFO - 2016-02-06 16:49:27 --> Utf8 Class Initialized
INFO - 2016-02-06 16:49:27 --> URI Class Initialized
INFO - 2016-02-06 16:49:27 --> Router Class Initialized
INFO - 2016-02-06 16:49:27 --> Output Class Initialized
INFO - 2016-02-06 16:49:27 --> Security Class Initialized
DEBUG - 2016-02-06 16:49:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 16:49:27 --> Input Class Initialized
INFO - 2016-02-06 16:49:27 --> Language Class Initialized
INFO - 2016-02-06 16:49:27 --> Language Class Initialized
INFO - 2016-02-06 16:49:27 --> Config Class Initialized
INFO - 2016-02-06 16:49:27 --> Loader Class Initialized
INFO - 2016-02-06 16:49:27 --> Helper loaded: form_helper
INFO - 2016-02-06 16:49:27 --> Helper loaded: url_helper
INFO - 2016-02-06 16:49:27 --> Helper loaded: general_helper
INFO - 2016-02-06 16:49:27 --> Database Driver Class Initialized
INFO - 2016-02-06 16:49:27 --> Form Validation Class Initialized
DEBUG - 2016-02-06 16:49:27 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 16:49:27 --> Email Class Initialized
INFO - 2016-02-06 16:49:27 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 16:49:27 --> Helper loaded: cookie_helper
INFO - 2016-02-06 16:49:27 --> Helper loaded: language_helper
INFO - 2016-02-06 16:49:27 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 16:49:27 --> Model Class Initialized
INFO - 2016-02-06 16:49:27 --> Helper loaded: inflector_helper
INFO - 2016-02-06 16:49:27 --> Model Class Initialized
INFO - 2016-02-06 16:49:27 --> Helper loaded: date_helper
INFO - 2016-02-06 16:49:27 --> Controller Class Initialized
DEBUG - 2016-02-06 16:49:27 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 16:49:27 --> Model Class Initialized
INFO - 2016-02-06 16:49:27 --> Language file loaded: language/dutch/form_validation_lang.php
DEBUG - 2016-02-06 16:49:27 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 16:49:27 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/views/login.php
DEBUG - 2016-02-06 16:49:27 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 16:49:27 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 16:49:27 --> Profiler Class Initialized
INFO - 2016-02-06 16:49:27 --> Helper loaded: text_helper
INFO - 2016-02-06 16:49:27 --> Final output sent to browser
DEBUG - 2016-02-06 16:49:27 --> Total execution time: 0.3165
INFO - 2016-02-06 16:49:45 --> Config Class Initialized
INFO - 2016-02-06 16:49:45 --> Hooks Class Initialized
DEBUG - 2016-02-06 16:49:45 --> UTF-8 Support Enabled
INFO - 2016-02-06 16:49:45 --> Utf8 Class Initialized
INFO - 2016-02-06 16:49:45 --> URI Class Initialized
INFO - 2016-02-06 16:49:45 --> Router Class Initialized
INFO - 2016-02-06 16:49:45 --> Output Class Initialized
INFO - 2016-02-06 16:49:45 --> Security Class Initialized
DEBUG - 2016-02-06 16:49:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 16:49:45 --> Input Class Initialized
INFO - 2016-02-06 16:49:45 --> Language Class Initialized
INFO - 2016-02-06 16:49:45 --> Language Class Initialized
INFO - 2016-02-06 16:49:45 --> Config Class Initialized
INFO - 2016-02-06 16:49:45 --> Loader Class Initialized
INFO - 2016-02-06 16:49:45 --> Helper loaded: form_helper
INFO - 2016-02-06 16:49:45 --> Helper loaded: url_helper
INFO - 2016-02-06 16:49:45 --> Helper loaded: general_helper
INFO - 2016-02-06 16:49:45 --> Database Driver Class Initialized
INFO - 2016-02-06 16:49:45 --> Form Validation Class Initialized
DEBUG - 2016-02-06 16:49:45 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 16:49:45 --> Email Class Initialized
INFO - 2016-02-06 16:49:45 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 16:49:45 --> Helper loaded: cookie_helper
INFO - 2016-02-06 16:49:45 --> Helper loaded: language_helper
INFO - 2016-02-06 16:49:45 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 16:49:45 --> Model Class Initialized
INFO - 2016-02-06 16:49:45 --> Helper loaded: inflector_helper
INFO - 2016-02-06 16:49:45 --> Model Class Initialized
INFO - 2016-02-06 16:49:45 --> Helper loaded: date_helper
INFO - 2016-02-06 16:49:45 --> Controller Class Initialized
DEBUG - 2016-02-06 16:49:45 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 16:49:45 --> Model Class Initialized
INFO - 2016-02-06 16:49:45 --> Language file loaded: language/dutch/form_validation_lang.php
DEBUG - 2016-02-06 16:49:45 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 16:49:45 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/views/login.php
DEBUG - 2016-02-06 16:49:45 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 16:49:45 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 16:49:45 --> Profiler Class Initialized
INFO - 2016-02-06 16:49:45 --> Helper loaded: text_helper
INFO - 2016-02-06 16:49:45 --> Final output sent to browser
DEBUG - 2016-02-06 16:49:45 --> Total execution time: 0.3515
INFO - 2016-02-06 16:49:50 --> Config Class Initialized
INFO - 2016-02-06 16:49:50 --> Hooks Class Initialized
DEBUG - 2016-02-06 16:49:50 --> UTF-8 Support Enabled
INFO - 2016-02-06 16:49:50 --> Utf8 Class Initialized
INFO - 2016-02-06 16:49:50 --> URI Class Initialized
INFO - 2016-02-06 16:49:50 --> Router Class Initialized
INFO - 2016-02-06 16:49:50 --> Output Class Initialized
INFO - 2016-02-06 16:49:50 --> Security Class Initialized
DEBUG - 2016-02-06 16:49:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 16:49:50 --> Input Class Initialized
INFO - 2016-02-06 16:49:50 --> Language Class Initialized
INFO - 2016-02-06 16:49:50 --> Language Class Initialized
INFO - 2016-02-06 16:49:50 --> Config Class Initialized
INFO - 2016-02-06 16:49:50 --> Loader Class Initialized
INFO - 2016-02-06 16:49:50 --> Helper loaded: form_helper
INFO - 2016-02-06 16:49:50 --> Helper loaded: url_helper
INFO - 2016-02-06 16:49:50 --> Helper loaded: general_helper
INFO - 2016-02-06 16:49:50 --> Database Driver Class Initialized
INFO - 2016-02-06 16:49:50 --> Form Validation Class Initialized
DEBUG - 2016-02-06 16:49:50 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 16:49:50 --> Email Class Initialized
INFO - 2016-02-06 16:49:50 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 16:49:50 --> Helper loaded: cookie_helper
INFO - 2016-02-06 16:49:50 --> Helper loaded: language_helper
INFO - 2016-02-06 16:49:50 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 16:49:50 --> Model Class Initialized
INFO - 2016-02-06 16:49:50 --> Helper loaded: inflector_helper
INFO - 2016-02-06 16:49:50 --> Model Class Initialized
INFO - 2016-02-06 16:49:50 --> Helper loaded: date_helper
INFO - 2016-02-06 16:49:50 --> Controller Class Initialized
DEBUG - 2016-02-06 16:49:50 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 16:49:50 --> Model Class Initialized
INFO - 2016-02-06 16:49:50 --> Language file loaded: language/dutch/form_validation_lang.php
DEBUG - 2016-02-06 16:49:50 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 16:49:50 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/views/login.php
DEBUG - 2016-02-06 16:49:50 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 16:49:50 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 16:49:50 --> Profiler Class Initialized
INFO - 2016-02-06 16:49:50 --> Helper loaded: text_helper
INFO - 2016-02-06 16:49:50 --> Final output sent to browser
DEBUG - 2016-02-06 16:49:50 --> Total execution time: 0.3637
INFO - 2016-02-06 16:51:06 --> Config Class Initialized
INFO - 2016-02-06 16:51:06 --> Hooks Class Initialized
DEBUG - 2016-02-06 16:51:06 --> UTF-8 Support Enabled
INFO - 2016-02-06 16:51:06 --> Utf8 Class Initialized
INFO - 2016-02-06 16:51:06 --> URI Class Initialized
INFO - 2016-02-06 16:51:06 --> Router Class Initialized
INFO - 2016-02-06 16:51:06 --> Output Class Initialized
INFO - 2016-02-06 16:51:06 --> Security Class Initialized
DEBUG - 2016-02-06 16:51:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 16:51:06 --> Input Class Initialized
INFO - 2016-02-06 16:51:06 --> Language Class Initialized
INFO - 2016-02-06 16:51:06 --> Language Class Initialized
INFO - 2016-02-06 16:51:06 --> Config Class Initialized
INFO - 2016-02-06 16:51:06 --> Loader Class Initialized
INFO - 2016-02-06 16:51:06 --> Helper loaded: form_helper
INFO - 2016-02-06 16:51:06 --> Helper loaded: url_helper
INFO - 2016-02-06 16:51:06 --> Helper loaded: general_helper
INFO - 2016-02-06 16:51:06 --> Database Driver Class Initialized
INFO - 2016-02-06 16:51:06 --> Form Validation Class Initialized
DEBUG - 2016-02-06 16:51:06 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 16:51:06 --> Email Class Initialized
INFO - 2016-02-06 16:51:06 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 16:51:06 --> Helper loaded: cookie_helper
INFO - 2016-02-06 16:51:06 --> Helper loaded: language_helper
INFO - 2016-02-06 16:51:06 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 16:51:06 --> Model Class Initialized
INFO - 2016-02-06 16:51:06 --> Helper loaded: inflector_helper
INFO - 2016-02-06 16:51:06 --> Model Class Initialized
INFO - 2016-02-06 16:51:06 --> Helper loaded: date_helper
INFO - 2016-02-06 16:51:06 --> Controller Class Initialized
DEBUG - 2016-02-06 16:51:06 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 16:51:06 --> Model Class Initialized
INFO - 2016-02-06 16:51:06 --> Language file loaded: language/dutch/form_validation_lang.php
DEBUG - 2016-02-06 16:51:06 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 16:51:06 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/views/login.php
DEBUG - 2016-02-06 16:51:06 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 16:51:06 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 16:51:06 --> Profiler Class Initialized
INFO - 2016-02-06 16:51:06 --> Helper loaded: text_helper
INFO - 2016-02-06 16:51:06 --> Final output sent to browser
DEBUG - 2016-02-06 16:51:07 --> Total execution time: 0.3479
INFO - 2016-02-06 16:51:10 --> Config Class Initialized
INFO - 2016-02-06 16:51:10 --> Hooks Class Initialized
DEBUG - 2016-02-06 16:51:10 --> UTF-8 Support Enabled
INFO - 2016-02-06 16:51:10 --> Utf8 Class Initialized
INFO - 2016-02-06 16:51:10 --> URI Class Initialized
INFO - 2016-02-06 16:51:10 --> Router Class Initialized
INFO - 2016-02-06 16:51:10 --> Output Class Initialized
INFO - 2016-02-06 16:51:10 --> Security Class Initialized
DEBUG - 2016-02-06 16:51:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 16:51:10 --> Input Class Initialized
INFO - 2016-02-06 16:51:10 --> Language Class Initialized
INFO - 2016-02-06 16:51:10 --> Language Class Initialized
INFO - 2016-02-06 16:51:10 --> Config Class Initialized
INFO - 2016-02-06 16:51:10 --> Loader Class Initialized
INFO - 2016-02-06 16:51:10 --> Helper loaded: form_helper
INFO - 2016-02-06 16:51:10 --> Helper loaded: url_helper
INFO - 2016-02-06 16:51:10 --> Helper loaded: general_helper
INFO - 2016-02-06 16:51:10 --> Database Driver Class Initialized
INFO - 2016-02-06 16:51:10 --> Form Validation Class Initialized
DEBUG - 2016-02-06 16:51:10 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 16:51:10 --> Email Class Initialized
INFO - 2016-02-06 16:51:10 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 16:51:10 --> Helper loaded: cookie_helper
INFO - 2016-02-06 16:51:10 --> Helper loaded: language_helper
INFO - 2016-02-06 16:51:10 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 16:51:10 --> Model Class Initialized
INFO - 2016-02-06 16:51:10 --> Helper loaded: inflector_helper
INFO - 2016-02-06 16:51:10 --> Model Class Initialized
INFO - 2016-02-06 16:51:10 --> Helper loaded: date_helper
INFO - 2016-02-06 16:51:10 --> Controller Class Initialized
DEBUG - 2016-02-06 16:51:10 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 16:51:10 --> Model Class Initialized
INFO - 2016-02-06 16:51:10 --> Language file loaded: language/dutch/form_validation_lang.php
DEBUG - 2016-02-06 16:51:11 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 16:51:11 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/views/login.php
DEBUG - 2016-02-06 16:51:11 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 16:51:11 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 16:51:11 --> Profiler Class Initialized
INFO - 2016-02-06 16:51:11 --> Helper loaded: text_helper
INFO - 2016-02-06 16:51:11 --> Final output sent to browser
DEBUG - 2016-02-06 16:51:11 --> Total execution time: 0.3442
INFO - 2016-02-06 16:52:35 --> Config Class Initialized
INFO - 2016-02-06 16:52:35 --> Hooks Class Initialized
DEBUG - 2016-02-06 16:52:35 --> UTF-8 Support Enabled
INFO - 2016-02-06 16:52:35 --> Utf8 Class Initialized
INFO - 2016-02-06 16:52:35 --> URI Class Initialized
INFO - 2016-02-06 16:52:35 --> Router Class Initialized
INFO - 2016-02-06 16:52:35 --> Output Class Initialized
INFO - 2016-02-06 16:52:35 --> Security Class Initialized
DEBUG - 2016-02-06 16:52:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 16:52:35 --> Input Class Initialized
INFO - 2016-02-06 16:52:35 --> Language Class Initialized
INFO - 2016-02-06 16:52:35 --> Language Class Initialized
INFO - 2016-02-06 16:52:35 --> Config Class Initialized
INFO - 2016-02-06 16:52:35 --> Loader Class Initialized
INFO - 2016-02-06 16:52:35 --> Helper loaded: form_helper
INFO - 2016-02-06 16:52:35 --> Helper loaded: url_helper
INFO - 2016-02-06 16:52:35 --> Helper loaded: general_helper
INFO - 2016-02-06 16:52:36 --> Database Driver Class Initialized
INFO - 2016-02-06 16:52:36 --> Form Validation Class Initialized
DEBUG - 2016-02-06 16:52:36 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 16:52:36 --> Email Class Initialized
INFO - 2016-02-06 16:52:36 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 16:52:36 --> Helper loaded: cookie_helper
INFO - 2016-02-06 16:52:36 --> Helper loaded: language_helper
INFO - 2016-02-06 16:52:36 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 16:52:36 --> Model Class Initialized
INFO - 2016-02-06 16:52:36 --> Helper loaded: inflector_helper
INFO - 2016-02-06 16:52:36 --> Model Class Initialized
INFO - 2016-02-06 16:52:36 --> Helper loaded: date_helper
INFO - 2016-02-06 16:52:36 --> Controller Class Initialized
DEBUG - 2016-02-06 16:52:36 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 16:52:36 --> Model Class Initialized
INFO - 2016-02-06 16:52:36 --> Language file loaded: language/dutch/form_validation_lang.php
DEBUG - 2016-02-06 16:52:36 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 16:52:36 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/views/login.php
DEBUG - 2016-02-06 16:52:36 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 16:52:36 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 16:52:36 --> Profiler Class Initialized
INFO - 2016-02-06 16:52:36 --> Helper loaded: text_helper
INFO - 2016-02-06 16:52:36 --> Final output sent to browser
DEBUG - 2016-02-06 16:52:36 --> Total execution time: 0.3710
INFO - 2016-02-06 16:52:58 --> Config Class Initialized
INFO - 2016-02-06 16:52:58 --> Hooks Class Initialized
DEBUG - 2016-02-06 16:52:58 --> UTF-8 Support Enabled
INFO - 2016-02-06 16:52:58 --> Utf8 Class Initialized
INFO - 2016-02-06 16:52:58 --> URI Class Initialized
INFO - 2016-02-06 16:52:58 --> Router Class Initialized
INFO - 2016-02-06 16:52:58 --> Output Class Initialized
INFO - 2016-02-06 16:52:58 --> Security Class Initialized
DEBUG - 2016-02-06 16:52:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 16:52:58 --> Input Class Initialized
INFO - 2016-02-06 16:52:58 --> Language Class Initialized
INFO - 2016-02-06 16:52:58 --> Language Class Initialized
INFO - 2016-02-06 16:52:58 --> Config Class Initialized
INFO - 2016-02-06 16:52:58 --> Loader Class Initialized
INFO - 2016-02-06 16:52:58 --> Helper loaded: form_helper
INFO - 2016-02-06 16:52:58 --> Helper loaded: url_helper
INFO - 2016-02-06 16:52:58 --> Helper loaded: general_helper
INFO - 2016-02-06 16:52:58 --> Database Driver Class Initialized
INFO - 2016-02-06 16:52:58 --> Form Validation Class Initialized
DEBUG - 2016-02-06 16:52:58 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 16:52:58 --> Email Class Initialized
INFO - 2016-02-06 16:52:58 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 16:52:58 --> Helper loaded: cookie_helper
INFO - 2016-02-06 16:52:58 --> Helper loaded: language_helper
INFO - 2016-02-06 16:52:58 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 16:52:58 --> Model Class Initialized
INFO - 2016-02-06 16:52:58 --> Helper loaded: inflector_helper
INFO - 2016-02-06 16:52:58 --> Model Class Initialized
INFO - 2016-02-06 16:52:58 --> Helper loaded: date_helper
INFO - 2016-02-06 16:52:58 --> Controller Class Initialized
DEBUG - 2016-02-06 16:52:58 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 16:52:58 --> Model Class Initialized
INFO - 2016-02-06 16:52:58 --> Language file loaded: language/dutch/form_validation_lang.php
DEBUG - 2016-02-06 16:52:58 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 16:52:58 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/views/login.php
DEBUG - 2016-02-06 16:52:58 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 16:52:58 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 16:52:58 --> Profiler Class Initialized
INFO - 2016-02-06 16:52:58 --> Helper loaded: text_helper
INFO - 2016-02-06 16:52:58 --> Final output sent to browser
DEBUG - 2016-02-06 16:52:58 --> Total execution time: 0.3667
INFO - 2016-02-06 16:53:04 --> Config Class Initialized
INFO - 2016-02-06 16:53:04 --> Hooks Class Initialized
DEBUG - 2016-02-06 16:53:04 --> UTF-8 Support Enabled
INFO - 2016-02-06 16:53:04 --> Utf8 Class Initialized
INFO - 2016-02-06 16:53:04 --> URI Class Initialized
INFO - 2016-02-06 16:53:04 --> Router Class Initialized
INFO - 2016-02-06 16:53:04 --> Output Class Initialized
INFO - 2016-02-06 16:53:04 --> Security Class Initialized
DEBUG - 2016-02-06 16:53:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 16:53:04 --> Input Class Initialized
INFO - 2016-02-06 16:53:04 --> Language Class Initialized
INFO - 2016-02-06 16:53:04 --> Language Class Initialized
INFO - 2016-02-06 16:53:04 --> Config Class Initialized
INFO - 2016-02-06 16:53:04 --> Loader Class Initialized
INFO - 2016-02-06 16:53:04 --> Helper loaded: form_helper
INFO - 2016-02-06 16:53:04 --> Helper loaded: url_helper
INFO - 2016-02-06 16:53:04 --> Helper loaded: general_helper
INFO - 2016-02-06 16:53:04 --> Database Driver Class Initialized
INFO - 2016-02-06 16:53:05 --> Form Validation Class Initialized
DEBUG - 2016-02-06 16:53:05 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 16:53:05 --> Email Class Initialized
INFO - 2016-02-06 16:53:05 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 16:53:05 --> Helper loaded: cookie_helper
INFO - 2016-02-06 16:53:05 --> Helper loaded: language_helper
INFO - 2016-02-06 16:53:05 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 16:53:05 --> Model Class Initialized
INFO - 2016-02-06 16:53:05 --> Helper loaded: inflector_helper
INFO - 2016-02-06 16:53:05 --> Model Class Initialized
INFO - 2016-02-06 16:53:05 --> Helper loaded: date_helper
INFO - 2016-02-06 16:53:05 --> Controller Class Initialized
DEBUG - 2016-02-06 16:53:05 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 16:53:05 --> Model Class Initialized
INFO - 2016-02-06 16:53:05 --> Language file loaded: language/dutch/form_validation_lang.php
INFO - 2016-02-06 16:53:05 --> Config Class Initialized
INFO - 2016-02-06 16:53:05 --> Hooks Class Initialized
DEBUG - 2016-02-06 16:53:05 --> UTF-8 Support Enabled
INFO - 2016-02-06 16:53:05 --> Utf8 Class Initialized
INFO - 2016-02-06 16:53:05 --> URI Class Initialized
INFO - 2016-02-06 16:53:05 --> Router Class Initialized
INFO - 2016-02-06 16:53:05 --> Output Class Initialized
INFO - 2016-02-06 16:53:05 --> Security Class Initialized
DEBUG - 2016-02-06 16:53:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 16:53:05 --> Input Class Initialized
INFO - 2016-02-06 16:53:05 --> Language Class Initialized
INFO - 2016-02-06 16:53:05 --> Language Class Initialized
INFO - 2016-02-06 16:53:05 --> Config Class Initialized
INFO - 2016-02-06 16:53:05 --> Loader Class Initialized
INFO - 2016-02-06 16:53:05 --> Helper loaded: form_helper
INFO - 2016-02-06 16:53:05 --> Helper loaded: url_helper
INFO - 2016-02-06 16:53:05 --> Helper loaded: general_helper
INFO - 2016-02-06 16:53:05 --> Database Driver Class Initialized
INFO - 2016-02-06 16:53:05 --> Form Validation Class Initialized
DEBUG - 2016-02-06 16:53:05 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 16:53:05 --> Email Class Initialized
INFO - 2016-02-06 16:53:05 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 16:53:05 --> Helper loaded: cookie_helper
INFO - 2016-02-06 16:53:05 --> Helper loaded: language_helper
INFO - 2016-02-06 16:53:05 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 16:53:05 --> Model Class Initialized
INFO - 2016-02-06 16:53:05 --> Helper loaded: inflector_helper
INFO - 2016-02-06 16:53:05 --> Model Class Initialized
INFO - 2016-02-06 16:53:05 --> Helper loaded: date_helper
INFO - 2016-02-06 16:53:05 --> Controller Class Initialized
ERROR - 2016-02-06 16:53:05 --> Severity: Error --> Call to undefined method Dashboard::master_view() C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\dashboard\controllers\dashboard.php 7
INFO - 2016-02-06 16:53:47 --> Config Class Initialized
INFO - 2016-02-06 16:53:47 --> Hooks Class Initialized
DEBUG - 2016-02-06 16:53:47 --> UTF-8 Support Enabled
INFO - 2016-02-06 16:53:47 --> Utf8 Class Initialized
INFO - 2016-02-06 16:53:47 --> URI Class Initialized
INFO - 2016-02-06 16:53:47 --> Router Class Initialized
INFO - 2016-02-06 16:53:47 --> Output Class Initialized
INFO - 2016-02-06 16:53:47 --> Security Class Initialized
DEBUG - 2016-02-06 16:53:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 16:53:48 --> Input Class Initialized
INFO - 2016-02-06 16:53:48 --> Language Class Initialized
INFO - 2016-02-06 16:53:48 --> Language Class Initialized
INFO - 2016-02-06 16:53:48 --> Config Class Initialized
INFO - 2016-02-06 16:53:48 --> Loader Class Initialized
INFO - 2016-02-06 16:53:48 --> Helper loaded: form_helper
INFO - 2016-02-06 16:53:48 --> Helper loaded: url_helper
INFO - 2016-02-06 16:53:48 --> Helper loaded: general_helper
INFO - 2016-02-06 16:53:48 --> Database Driver Class Initialized
INFO - 2016-02-06 16:53:48 --> Form Validation Class Initialized
DEBUG - 2016-02-06 16:53:48 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 16:53:48 --> Email Class Initialized
INFO - 2016-02-06 16:53:48 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 16:53:48 --> Helper loaded: cookie_helper
INFO - 2016-02-06 16:53:48 --> Helper loaded: language_helper
INFO - 2016-02-06 16:53:48 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 16:53:48 --> Model Class Initialized
INFO - 2016-02-06 16:53:48 --> Helper loaded: inflector_helper
INFO - 2016-02-06 16:53:48 --> Model Class Initialized
INFO - 2016-02-06 16:53:48 --> Helper loaded: date_helper
INFO - 2016-02-06 16:53:48 --> Controller Class Initialized
DEBUG - 2016-02-06 16:53:48 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 16:53:48 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dashboard/views/index.php
DEBUG - 2016-02-06 16:53:48 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 16:53:48 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 16:53:48 --> Profiler Class Initialized
INFO - 2016-02-06 16:53:48 --> Helper loaded: text_helper
INFO - 2016-02-06 16:53:48 --> Final output sent to browser
DEBUG - 2016-02-06 16:53:48 --> Total execution time: 0.3105
INFO - 2016-02-06 17:00:34 --> Config Class Initialized
INFO - 2016-02-06 17:00:34 --> Hooks Class Initialized
DEBUG - 2016-02-06 17:00:34 --> UTF-8 Support Enabled
INFO - 2016-02-06 17:00:34 --> Utf8 Class Initialized
INFO - 2016-02-06 17:00:34 --> URI Class Initialized
INFO - 2016-02-06 17:00:34 --> Router Class Initialized
INFO - 2016-02-06 17:00:34 --> Output Class Initialized
INFO - 2016-02-06 17:00:34 --> Security Class Initialized
DEBUG - 2016-02-06 17:00:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 17:00:34 --> Input Class Initialized
INFO - 2016-02-06 17:00:34 --> Language Class Initialized
INFO - 2016-02-06 17:00:34 --> Language Class Initialized
INFO - 2016-02-06 17:00:34 --> Config Class Initialized
INFO - 2016-02-06 17:00:34 --> Loader Class Initialized
INFO - 2016-02-06 17:00:34 --> Helper loaded: form_helper
INFO - 2016-02-06 17:00:34 --> Helper loaded: url_helper
INFO - 2016-02-06 17:00:34 --> Helper loaded: general_helper
INFO - 2016-02-06 17:00:34 --> Database Driver Class Initialized
INFO - 2016-02-06 17:00:34 --> Form Validation Class Initialized
DEBUG - 2016-02-06 17:00:34 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 17:00:34 --> Email Class Initialized
INFO - 2016-02-06 17:00:34 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 17:00:34 --> Helper loaded: cookie_helper
INFO - 2016-02-06 17:00:34 --> Helper loaded: language_helper
INFO - 2016-02-06 17:00:34 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 17:00:34 --> Model Class Initialized
INFO - 2016-02-06 17:00:34 --> Helper loaded: inflector_helper
INFO - 2016-02-06 17:00:34 --> Model Class Initialized
INFO - 2016-02-06 17:00:34 --> Helper loaded: date_helper
INFO - 2016-02-06 17:00:34 --> Controller Class Initialized
DEBUG - 2016-02-06 17:00:34 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 17:00:34 --> Model Class Initialized
INFO - 2016-02-06 17:00:34 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 17:00:34 --> Profiler Class Initialized
INFO - 2016-02-06 17:00:34 --> Helper loaded: text_helper
INFO - 2016-02-06 17:00:34 --> Final output sent to browser
DEBUG - 2016-02-06 17:00:34 --> Total execution time: 0.3089
INFO - 2016-02-06 17:01:38 --> Config Class Initialized
INFO - 2016-02-06 17:01:38 --> Hooks Class Initialized
DEBUG - 2016-02-06 17:01:38 --> UTF-8 Support Enabled
INFO - 2016-02-06 17:01:38 --> Utf8 Class Initialized
INFO - 2016-02-06 17:01:38 --> URI Class Initialized
INFO - 2016-02-06 17:01:38 --> Router Class Initialized
INFO - 2016-02-06 17:01:38 --> Output Class Initialized
INFO - 2016-02-06 17:01:38 --> Security Class Initialized
DEBUG - 2016-02-06 17:01:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 17:01:38 --> Input Class Initialized
INFO - 2016-02-06 17:01:38 --> Language Class Initialized
INFO - 2016-02-06 17:01:38 --> Language Class Initialized
INFO - 2016-02-06 17:01:38 --> Config Class Initialized
INFO - 2016-02-06 17:01:38 --> Loader Class Initialized
INFO - 2016-02-06 17:01:38 --> Helper loaded: form_helper
INFO - 2016-02-06 17:01:38 --> Helper loaded: url_helper
INFO - 2016-02-06 17:01:38 --> Helper loaded: general_helper
INFO - 2016-02-06 17:01:38 --> Database Driver Class Initialized
INFO - 2016-02-06 17:01:38 --> Form Validation Class Initialized
DEBUG - 2016-02-06 17:01:38 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 17:01:38 --> Email Class Initialized
INFO - 2016-02-06 17:01:38 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 17:01:38 --> Helper loaded: cookie_helper
INFO - 2016-02-06 17:01:38 --> Helper loaded: language_helper
INFO - 2016-02-06 17:01:38 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 17:01:38 --> Model Class Initialized
INFO - 2016-02-06 17:01:38 --> Helper loaded: inflector_helper
INFO - 2016-02-06 17:01:38 --> Model Class Initialized
INFO - 2016-02-06 17:01:38 --> Helper loaded: date_helper
INFO - 2016-02-06 17:01:38 --> Controller Class Initialized
INFO - 2016-02-06 17:01:38 --> Config Class Initialized
INFO - 2016-02-06 17:01:38 --> Hooks Class Initialized
DEBUG - 2016-02-06 17:01:38 --> UTF-8 Support Enabled
INFO - 2016-02-06 17:01:38 --> Utf8 Class Initialized
INFO - 2016-02-06 17:01:38 --> URI Class Initialized
INFO - 2016-02-06 17:01:38 --> Router Class Initialized
INFO - 2016-02-06 17:01:39 --> Output Class Initialized
INFO - 2016-02-06 17:01:39 --> Security Class Initialized
DEBUG - 2016-02-06 17:01:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 17:01:39 --> Input Class Initialized
INFO - 2016-02-06 17:01:39 --> Language Class Initialized
INFO - 2016-02-06 17:01:39 --> Language Class Initialized
INFO - 2016-02-06 17:01:39 --> Config Class Initialized
INFO - 2016-02-06 17:01:39 --> Loader Class Initialized
INFO - 2016-02-06 17:01:39 --> Helper loaded: form_helper
INFO - 2016-02-06 17:01:39 --> Helper loaded: url_helper
INFO - 2016-02-06 17:01:39 --> Helper loaded: general_helper
INFO - 2016-02-06 17:01:39 --> Database Driver Class Initialized
INFO - 2016-02-06 17:01:39 --> Form Validation Class Initialized
DEBUG - 2016-02-06 17:01:39 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 17:01:39 --> Email Class Initialized
INFO - 2016-02-06 17:01:39 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 17:01:39 --> Helper loaded: cookie_helper
INFO - 2016-02-06 17:01:39 --> Helper loaded: language_helper
INFO - 2016-02-06 17:01:39 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 17:01:39 --> Model Class Initialized
INFO - 2016-02-06 17:01:39 --> Helper loaded: inflector_helper
INFO - 2016-02-06 17:01:39 --> Model Class Initialized
INFO - 2016-02-06 17:01:39 --> Helper loaded: date_helper
INFO - 2016-02-06 17:01:39 --> Controller Class Initialized
DEBUG - 2016-02-06 17:01:39 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 17:01:39 --> Model Class Initialized
DEBUG - 2016-02-06 17:01:39 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 17:01:39 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/views/login.php
DEBUG - 2016-02-06 17:01:39 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 17:01:39 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 17:01:39 --> Profiler Class Initialized
INFO - 2016-02-06 17:01:39 --> Helper loaded: text_helper
INFO - 2016-02-06 17:01:39 --> Final output sent to browser
DEBUG - 2016-02-06 17:01:39 --> Total execution time: 0.3360
INFO - 2016-02-06 17:01:44 --> Config Class Initialized
INFO - 2016-02-06 17:01:44 --> Hooks Class Initialized
DEBUG - 2016-02-06 17:01:44 --> UTF-8 Support Enabled
INFO - 2016-02-06 17:01:44 --> Utf8 Class Initialized
INFO - 2016-02-06 17:01:44 --> URI Class Initialized
INFO - 2016-02-06 17:01:44 --> Router Class Initialized
INFO - 2016-02-06 17:01:44 --> Output Class Initialized
INFO - 2016-02-06 17:01:44 --> Security Class Initialized
DEBUG - 2016-02-06 17:01:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 17:01:44 --> Input Class Initialized
INFO - 2016-02-06 17:01:44 --> Language Class Initialized
INFO - 2016-02-06 17:01:44 --> Language Class Initialized
INFO - 2016-02-06 17:01:44 --> Config Class Initialized
INFO - 2016-02-06 17:01:44 --> Loader Class Initialized
INFO - 2016-02-06 17:01:44 --> Helper loaded: form_helper
INFO - 2016-02-06 17:01:44 --> Helper loaded: url_helper
INFO - 2016-02-06 17:01:44 --> Helper loaded: general_helper
INFO - 2016-02-06 17:01:44 --> Database Driver Class Initialized
INFO - 2016-02-06 17:01:44 --> Form Validation Class Initialized
DEBUG - 2016-02-06 17:01:44 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 17:01:44 --> Email Class Initialized
INFO - 2016-02-06 17:01:44 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 17:01:44 --> Helper loaded: cookie_helper
INFO - 2016-02-06 17:01:44 --> Helper loaded: language_helper
INFO - 2016-02-06 17:01:44 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 17:01:44 --> Model Class Initialized
INFO - 2016-02-06 17:01:44 --> Helper loaded: inflector_helper
INFO - 2016-02-06 17:01:44 --> Model Class Initialized
INFO - 2016-02-06 17:01:44 --> Helper loaded: date_helper
INFO - 2016-02-06 17:01:44 --> Controller Class Initialized
DEBUG - 2016-02-06 17:01:44 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 17:01:44 --> Model Class Initialized
INFO - 2016-02-06 17:01:44 --> Language file loaded: language/dutch/form_validation_lang.php
INFO - 2016-02-06 17:01:45 --> Config Class Initialized
INFO - 2016-02-06 17:01:45 --> Hooks Class Initialized
DEBUG - 2016-02-06 17:01:45 --> UTF-8 Support Enabled
INFO - 2016-02-06 17:01:45 --> Utf8 Class Initialized
INFO - 2016-02-06 17:01:45 --> URI Class Initialized
INFO - 2016-02-06 17:01:45 --> Router Class Initialized
INFO - 2016-02-06 17:01:45 --> Output Class Initialized
INFO - 2016-02-06 17:01:45 --> Security Class Initialized
DEBUG - 2016-02-06 17:01:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 17:01:45 --> Input Class Initialized
INFO - 2016-02-06 17:01:45 --> Language Class Initialized
INFO - 2016-02-06 17:01:45 --> Language Class Initialized
INFO - 2016-02-06 17:01:45 --> Config Class Initialized
INFO - 2016-02-06 17:01:45 --> Loader Class Initialized
INFO - 2016-02-06 17:01:45 --> Helper loaded: form_helper
INFO - 2016-02-06 17:01:45 --> Helper loaded: url_helper
INFO - 2016-02-06 17:01:45 --> Helper loaded: general_helper
INFO - 2016-02-06 17:01:45 --> Database Driver Class Initialized
INFO - 2016-02-06 17:01:45 --> Form Validation Class Initialized
DEBUG - 2016-02-06 17:01:45 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 17:01:45 --> Email Class Initialized
INFO - 2016-02-06 17:01:45 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 17:01:45 --> Helper loaded: cookie_helper
INFO - 2016-02-06 17:01:45 --> Helper loaded: language_helper
INFO - 2016-02-06 17:01:45 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 17:01:45 --> Model Class Initialized
INFO - 2016-02-06 17:01:45 --> Helper loaded: inflector_helper
INFO - 2016-02-06 17:01:45 --> Model Class Initialized
INFO - 2016-02-06 17:01:45 --> Helper loaded: date_helper
INFO - 2016-02-06 17:01:45 --> Controller Class Initialized
DEBUG - 2016-02-06 17:01:45 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 17:01:45 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dashboard/views/index.php
DEBUG - 2016-02-06 17:01:45 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 17:01:45 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 17:01:45 --> Profiler Class Initialized
INFO - 2016-02-06 17:01:45 --> Helper loaded: text_helper
INFO - 2016-02-06 17:01:45 --> Final output sent to browser
DEBUG - 2016-02-06 17:01:45 --> Total execution time: 0.3058
INFO - 2016-02-06 17:01:48 --> Config Class Initialized
INFO - 2016-02-06 17:01:48 --> Hooks Class Initialized
DEBUG - 2016-02-06 17:01:48 --> UTF-8 Support Enabled
INFO - 2016-02-06 17:01:48 --> Utf8 Class Initialized
INFO - 2016-02-06 17:01:48 --> URI Class Initialized
INFO - 2016-02-06 17:01:48 --> Router Class Initialized
INFO - 2016-02-06 17:01:48 --> Output Class Initialized
INFO - 2016-02-06 17:01:48 --> Security Class Initialized
DEBUG - 2016-02-06 17:01:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 17:01:48 --> Input Class Initialized
INFO - 2016-02-06 17:01:48 --> Language Class Initialized
INFO - 2016-02-06 17:01:48 --> Language Class Initialized
INFO - 2016-02-06 17:01:48 --> Config Class Initialized
INFO - 2016-02-06 17:01:48 --> Loader Class Initialized
INFO - 2016-02-06 17:01:48 --> Helper loaded: form_helper
INFO - 2016-02-06 17:01:48 --> Helper loaded: url_helper
INFO - 2016-02-06 17:01:48 --> Helper loaded: general_helper
INFO - 2016-02-06 17:01:48 --> Database Driver Class Initialized
INFO - 2016-02-06 17:01:48 --> Form Validation Class Initialized
DEBUG - 2016-02-06 17:01:48 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 17:01:48 --> Email Class Initialized
INFO - 2016-02-06 17:01:48 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 17:01:48 --> Helper loaded: cookie_helper
INFO - 2016-02-06 17:01:48 --> Helper loaded: language_helper
INFO - 2016-02-06 17:01:48 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 17:01:48 --> Model Class Initialized
INFO - 2016-02-06 17:01:48 --> Helper loaded: inflector_helper
INFO - 2016-02-06 17:01:48 --> Model Class Initialized
INFO - 2016-02-06 17:01:48 --> Helper loaded: date_helper
INFO - 2016-02-06 17:01:48 --> Controller Class Initialized
DEBUG - 2016-02-06 17:01:48 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 17:01:48 --> Model Class Initialized
INFO - 2016-02-06 17:01:48 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 17:01:48 --> Profiler Class Initialized
INFO - 2016-02-06 17:01:48 --> Helper loaded: text_helper
INFO - 2016-02-06 17:01:48 --> Final output sent to browser
DEBUG - 2016-02-06 17:01:48 --> Total execution time: 0.3047
INFO - 2016-02-06 17:01:59 --> Config Class Initialized
INFO - 2016-02-06 17:01:59 --> Hooks Class Initialized
DEBUG - 2016-02-06 17:01:59 --> UTF-8 Support Enabled
INFO - 2016-02-06 17:01:59 --> Utf8 Class Initialized
INFO - 2016-02-06 17:01:59 --> URI Class Initialized
INFO - 2016-02-06 17:01:59 --> Router Class Initialized
INFO - 2016-02-06 17:01:59 --> Output Class Initialized
INFO - 2016-02-06 17:01:59 --> Security Class Initialized
DEBUG - 2016-02-06 17:01:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 17:01:59 --> Input Class Initialized
INFO - 2016-02-06 17:01:59 --> Language Class Initialized
INFO - 2016-02-06 17:01:59 --> Language Class Initialized
INFO - 2016-02-06 17:01:59 --> Config Class Initialized
INFO - 2016-02-06 17:01:59 --> Loader Class Initialized
INFO - 2016-02-06 17:01:59 --> Helper loaded: form_helper
INFO - 2016-02-06 17:01:59 --> Helper loaded: url_helper
INFO - 2016-02-06 17:01:59 --> Helper loaded: general_helper
INFO - 2016-02-06 17:01:59 --> Database Driver Class Initialized
INFO - 2016-02-06 17:01:59 --> Form Validation Class Initialized
DEBUG - 2016-02-06 17:01:59 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 17:01:59 --> Email Class Initialized
INFO - 2016-02-06 17:01:59 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 17:01:59 --> Helper loaded: cookie_helper
INFO - 2016-02-06 17:01:59 --> Helper loaded: language_helper
INFO - 2016-02-06 17:01:59 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 17:01:59 --> Model Class Initialized
INFO - 2016-02-06 17:01:59 --> Helper loaded: inflector_helper
INFO - 2016-02-06 17:01:59 --> Model Class Initialized
INFO - 2016-02-06 17:01:59 --> Helper loaded: date_helper
INFO - 2016-02-06 17:01:59 --> Controller Class Initialized
INFO - 2016-02-06 17:01:59 --> Config Class Initialized
INFO - 2016-02-06 17:01:59 --> Hooks Class Initialized
DEBUG - 2016-02-06 17:01:59 --> UTF-8 Support Enabled
INFO - 2016-02-06 17:01:59 --> Utf8 Class Initialized
INFO - 2016-02-06 17:01:59 --> URI Class Initialized
INFO - 2016-02-06 17:01:59 --> Router Class Initialized
INFO - 2016-02-06 17:01:59 --> Output Class Initialized
INFO - 2016-02-06 17:01:59 --> Security Class Initialized
DEBUG - 2016-02-06 17:01:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 17:01:59 --> Input Class Initialized
INFO - 2016-02-06 17:01:59 --> Language Class Initialized
INFO - 2016-02-06 17:01:59 --> Language Class Initialized
INFO - 2016-02-06 17:01:59 --> Config Class Initialized
INFO - 2016-02-06 17:01:59 --> Loader Class Initialized
INFO - 2016-02-06 17:01:59 --> Helper loaded: form_helper
INFO - 2016-02-06 17:01:59 --> Helper loaded: url_helper
INFO - 2016-02-06 17:01:59 --> Helper loaded: general_helper
INFO - 2016-02-06 17:01:59 --> Database Driver Class Initialized
INFO - 2016-02-06 17:01:59 --> Form Validation Class Initialized
DEBUG - 2016-02-06 17:01:59 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 17:01:59 --> Email Class Initialized
INFO - 2016-02-06 17:01:59 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 17:01:59 --> Helper loaded: cookie_helper
INFO - 2016-02-06 17:01:59 --> Helper loaded: language_helper
INFO - 2016-02-06 17:01:59 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 17:01:59 --> Model Class Initialized
INFO - 2016-02-06 17:01:59 --> Helper loaded: inflector_helper
INFO - 2016-02-06 17:01:59 --> Model Class Initialized
INFO - 2016-02-06 17:01:59 --> Helper loaded: date_helper
INFO - 2016-02-06 17:01:59 --> Controller Class Initialized
DEBUG - 2016-02-06 17:01:59 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 17:01:59 --> Model Class Initialized
DEBUG - 2016-02-06 17:01:59 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 17:01:59 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/views/login.php
DEBUG - 2016-02-06 17:01:59 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 17:01:59 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 17:01:59 --> Profiler Class Initialized
INFO - 2016-02-06 17:01:59 --> Helper loaded: text_helper
INFO - 2016-02-06 17:01:59 --> Final output sent to browser
DEBUG - 2016-02-06 17:01:59 --> Total execution time: 0.3366
INFO - 2016-02-06 17:02:14 --> Config Class Initialized
INFO - 2016-02-06 17:02:14 --> Hooks Class Initialized
DEBUG - 2016-02-06 17:02:14 --> UTF-8 Support Enabled
INFO - 2016-02-06 17:02:14 --> Utf8 Class Initialized
INFO - 2016-02-06 17:02:14 --> URI Class Initialized
INFO - 2016-02-06 17:02:14 --> Router Class Initialized
INFO - 2016-02-06 17:02:14 --> Output Class Initialized
INFO - 2016-02-06 17:02:14 --> Security Class Initialized
DEBUG - 2016-02-06 17:02:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 17:02:14 --> Input Class Initialized
INFO - 2016-02-06 17:02:14 --> Language Class Initialized
INFO - 2016-02-06 17:02:14 --> Language Class Initialized
INFO - 2016-02-06 17:02:14 --> Config Class Initialized
INFO - 2016-02-06 17:02:14 --> Loader Class Initialized
INFO - 2016-02-06 17:02:14 --> Helper loaded: form_helper
INFO - 2016-02-06 17:02:14 --> Helper loaded: url_helper
INFO - 2016-02-06 17:02:14 --> Helper loaded: general_helper
INFO - 2016-02-06 17:02:14 --> Database Driver Class Initialized
INFO - 2016-02-06 17:02:14 --> Form Validation Class Initialized
DEBUG - 2016-02-06 17:02:14 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 17:02:14 --> Email Class Initialized
INFO - 2016-02-06 17:02:14 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 17:02:14 --> Helper loaded: cookie_helper
INFO - 2016-02-06 17:02:14 --> Helper loaded: language_helper
INFO - 2016-02-06 17:02:14 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 17:02:14 --> Model Class Initialized
INFO - 2016-02-06 17:02:14 --> Helper loaded: inflector_helper
INFO - 2016-02-06 17:02:14 --> Model Class Initialized
INFO - 2016-02-06 17:02:15 --> Helper loaded: date_helper
INFO - 2016-02-06 17:02:15 --> Controller Class Initialized
DEBUG - 2016-02-06 17:02:15 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 17:02:15 --> Model Class Initialized
INFO - 2016-02-06 17:02:15 --> Language file loaded: language/dutch/form_validation_lang.php
INFO - 2016-02-06 17:02:15 --> Config Class Initialized
INFO - 2016-02-06 17:02:15 --> Hooks Class Initialized
DEBUG - 2016-02-06 17:02:15 --> UTF-8 Support Enabled
INFO - 2016-02-06 17:02:15 --> Utf8 Class Initialized
INFO - 2016-02-06 17:02:15 --> URI Class Initialized
INFO - 2016-02-06 17:02:15 --> Router Class Initialized
INFO - 2016-02-06 17:02:15 --> Output Class Initialized
INFO - 2016-02-06 17:02:15 --> Security Class Initialized
DEBUG - 2016-02-06 17:02:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 17:02:15 --> Input Class Initialized
INFO - 2016-02-06 17:02:15 --> Language Class Initialized
INFO - 2016-02-06 17:02:15 --> Language Class Initialized
INFO - 2016-02-06 17:02:15 --> Config Class Initialized
INFO - 2016-02-06 17:02:15 --> Loader Class Initialized
INFO - 2016-02-06 17:02:15 --> Helper loaded: form_helper
INFO - 2016-02-06 17:02:15 --> Helper loaded: url_helper
INFO - 2016-02-06 17:02:15 --> Helper loaded: general_helper
INFO - 2016-02-06 17:02:15 --> Database Driver Class Initialized
INFO - 2016-02-06 17:02:15 --> Form Validation Class Initialized
DEBUG - 2016-02-06 17:02:15 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 17:02:15 --> Email Class Initialized
INFO - 2016-02-06 17:02:15 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 17:02:15 --> Helper loaded: cookie_helper
INFO - 2016-02-06 17:02:15 --> Helper loaded: language_helper
INFO - 2016-02-06 17:02:15 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 17:02:15 --> Model Class Initialized
INFO - 2016-02-06 17:02:15 --> Helper loaded: inflector_helper
INFO - 2016-02-06 17:02:15 --> Model Class Initialized
INFO - 2016-02-06 17:02:15 --> Helper loaded: date_helper
INFO - 2016-02-06 17:02:15 --> Controller Class Initialized
DEBUG - 2016-02-06 17:02:15 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 17:02:15 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dashboard/views/index.php
DEBUG - 2016-02-06 17:02:15 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 17:02:15 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 17:02:15 --> Profiler Class Initialized
INFO - 2016-02-06 17:02:15 --> Helper loaded: text_helper
INFO - 2016-02-06 17:02:15 --> Final output sent to browser
DEBUG - 2016-02-06 17:02:15 --> Total execution time: 0.3160
INFO - 2016-02-06 17:02:24 --> Config Class Initialized
INFO - 2016-02-06 17:02:24 --> Hooks Class Initialized
DEBUG - 2016-02-06 17:02:24 --> UTF-8 Support Enabled
INFO - 2016-02-06 17:02:24 --> Utf8 Class Initialized
INFO - 2016-02-06 17:02:24 --> URI Class Initialized
INFO - 2016-02-06 17:02:24 --> Router Class Initialized
INFO - 2016-02-06 17:02:24 --> Output Class Initialized
INFO - 2016-02-06 17:02:24 --> Security Class Initialized
DEBUG - 2016-02-06 17:02:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 17:02:24 --> Input Class Initialized
INFO - 2016-02-06 17:02:24 --> Language Class Initialized
INFO - 2016-02-06 17:02:24 --> Language Class Initialized
INFO - 2016-02-06 17:02:24 --> Config Class Initialized
INFO - 2016-02-06 17:02:24 --> Loader Class Initialized
INFO - 2016-02-06 17:02:24 --> Helper loaded: form_helper
INFO - 2016-02-06 17:02:24 --> Helper loaded: url_helper
INFO - 2016-02-06 17:02:24 --> Helper loaded: general_helper
INFO - 2016-02-06 17:02:24 --> Database Driver Class Initialized
INFO - 2016-02-06 17:02:24 --> Form Validation Class Initialized
DEBUG - 2016-02-06 17:02:24 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 17:02:24 --> Email Class Initialized
INFO - 2016-02-06 17:02:24 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 17:02:24 --> Helper loaded: cookie_helper
INFO - 2016-02-06 17:02:24 --> Helper loaded: language_helper
INFO - 2016-02-06 17:02:24 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 17:02:24 --> Model Class Initialized
INFO - 2016-02-06 17:02:24 --> Helper loaded: inflector_helper
INFO - 2016-02-06 17:02:24 --> Model Class Initialized
INFO - 2016-02-06 17:02:24 --> Helper loaded: date_helper
INFO - 2016-02-06 17:02:24 --> Controller Class Initialized
DEBUG - 2016-02-06 17:02:24 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 17:02:24 --> Model Class Initialized
INFO - 2016-02-06 17:02:24 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 17:02:24 --> Profiler Class Initialized
INFO - 2016-02-06 17:02:24 --> Helper loaded: text_helper
INFO - 2016-02-06 17:02:24 --> Final output sent to browser
DEBUG - 2016-02-06 17:02:25 --> Total execution time: 0.3163
INFO - 2016-02-06 17:03:42 --> Config Class Initialized
INFO - 2016-02-06 17:03:42 --> Hooks Class Initialized
DEBUG - 2016-02-06 17:03:42 --> UTF-8 Support Enabled
INFO - 2016-02-06 17:03:42 --> Utf8 Class Initialized
INFO - 2016-02-06 17:03:42 --> URI Class Initialized
INFO - 2016-02-06 17:03:42 --> Router Class Initialized
INFO - 2016-02-06 17:03:42 --> Output Class Initialized
INFO - 2016-02-06 17:03:42 --> Security Class Initialized
DEBUG - 2016-02-06 17:03:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 17:03:42 --> Input Class Initialized
INFO - 2016-02-06 17:03:42 --> Language Class Initialized
INFO - 2016-02-06 17:03:42 --> Language Class Initialized
INFO - 2016-02-06 17:03:42 --> Config Class Initialized
INFO - 2016-02-06 17:03:42 --> Loader Class Initialized
INFO - 2016-02-06 17:03:42 --> Helper loaded: form_helper
INFO - 2016-02-06 17:03:42 --> Helper loaded: url_helper
INFO - 2016-02-06 17:03:42 --> Helper loaded: general_helper
INFO - 2016-02-06 17:03:42 --> Database Driver Class Initialized
INFO - 2016-02-06 17:03:42 --> Form Validation Class Initialized
DEBUG - 2016-02-06 17:03:42 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 17:03:42 --> Email Class Initialized
INFO - 2016-02-06 17:03:42 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 17:03:42 --> Helper loaded: cookie_helper
INFO - 2016-02-06 17:03:42 --> Helper loaded: language_helper
INFO - 2016-02-06 17:03:42 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 17:03:42 --> Model Class Initialized
INFO - 2016-02-06 17:03:42 --> Helper loaded: inflector_helper
INFO - 2016-02-06 17:03:42 --> Model Class Initialized
INFO - 2016-02-06 17:03:42 --> Helper loaded: date_helper
INFO - 2016-02-06 17:03:42 --> Controller Class Initialized
INFO - 2016-02-06 17:03:42 --> Config Class Initialized
INFO - 2016-02-06 17:03:42 --> Hooks Class Initialized
DEBUG - 2016-02-06 17:03:42 --> UTF-8 Support Enabled
INFO - 2016-02-06 17:03:42 --> Utf8 Class Initialized
INFO - 2016-02-06 17:03:42 --> URI Class Initialized
INFO - 2016-02-06 17:03:42 --> Router Class Initialized
INFO - 2016-02-06 17:03:42 --> Output Class Initialized
INFO - 2016-02-06 17:03:42 --> Security Class Initialized
DEBUG - 2016-02-06 17:03:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 17:03:42 --> Input Class Initialized
INFO - 2016-02-06 17:03:42 --> Language Class Initialized
INFO - 2016-02-06 17:03:42 --> Language Class Initialized
INFO - 2016-02-06 17:03:42 --> Config Class Initialized
INFO - 2016-02-06 17:03:42 --> Loader Class Initialized
INFO - 2016-02-06 17:03:42 --> Helper loaded: form_helper
INFO - 2016-02-06 17:03:42 --> Helper loaded: url_helper
INFO - 2016-02-06 17:03:43 --> Helper loaded: general_helper
INFO - 2016-02-06 17:03:43 --> Database Driver Class Initialized
INFO - 2016-02-06 17:03:43 --> Form Validation Class Initialized
DEBUG - 2016-02-06 17:03:43 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 17:03:43 --> Email Class Initialized
INFO - 2016-02-06 17:03:43 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 17:03:43 --> Helper loaded: cookie_helper
INFO - 2016-02-06 17:03:43 --> Helper loaded: language_helper
INFO - 2016-02-06 17:03:43 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 17:03:43 --> Model Class Initialized
INFO - 2016-02-06 17:03:43 --> Helper loaded: inflector_helper
INFO - 2016-02-06 17:03:43 --> Model Class Initialized
INFO - 2016-02-06 17:03:43 --> Helper loaded: date_helper
INFO - 2016-02-06 17:03:43 --> Controller Class Initialized
DEBUG - 2016-02-06 17:03:43 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 17:03:43 --> Model Class Initialized
DEBUG - 2016-02-06 17:03:43 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 17:03:43 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/views/login.php
DEBUG - 2016-02-06 17:03:43 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 17:03:43 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 17:03:43 --> Profiler Class Initialized
INFO - 2016-02-06 17:03:43 --> Helper loaded: text_helper
INFO - 2016-02-06 17:03:43 --> Final output sent to browser
DEBUG - 2016-02-06 17:03:43 --> Total execution time: 0.3423
INFO - 2016-02-06 17:03:46 --> Config Class Initialized
INFO - 2016-02-06 17:03:46 --> Hooks Class Initialized
DEBUG - 2016-02-06 17:03:46 --> UTF-8 Support Enabled
INFO - 2016-02-06 17:03:46 --> Utf8 Class Initialized
INFO - 2016-02-06 17:03:46 --> URI Class Initialized
INFO - 2016-02-06 17:03:46 --> Router Class Initialized
INFO - 2016-02-06 17:03:46 --> Output Class Initialized
INFO - 2016-02-06 17:03:46 --> Security Class Initialized
DEBUG - 2016-02-06 17:03:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 17:03:46 --> Input Class Initialized
INFO - 2016-02-06 17:03:46 --> Language Class Initialized
INFO - 2016-02-06 17:03:46 --> Language Class Initialized
INFO - 2016-02-06 17:03:46 --> Config Class Initialized
INFO - 2016-02-06 17:03:46 --> Loader Class Initialized
INFO - 2016-02-06 17:03:46 --> Helper loaded: form_helper
INFO - 2016-02-06 17:03:46 --> Helper loaded: url_helper
INFO - 2016-02-06 17:03:46 --> Helper loaded: general_helper
INFO - 2016-02-06 17:03:46 --> Database Driver Class Initialized
INFO - 2016-02-06 17:03:46 --> Form Validation Class Initialized
DEBUG - 2016-02-06 17:03:46 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 17:03:46 --> Email Class Initialized
INFO - 2016-02-06 17:03:46 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 17:03:46 --> Helper loaded: cookie_helper
INFO - 2016-02-06 17:03:46 --> Helper loaded: language_helper
INFO - 2016-02-06 17:03:46 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 17:03:46 --> Model Class Initialized
INFO - 2016-02-06 17:03:47 --> Helper loaded: inflector_helper
INFO - 2016-02-06 17:03:47 --> Model Class Initialized
INFO - 2016-02-06 17:03:47 --> Helper loaded: date_helper
INFO - 2016-02-06 17:03:47 --> Controller Class Initialized
DEBUG - 2016-02-06 17:03:47 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 17:03:47 --> Model Class Initialized
INFO - 2016-02-06 17:03:47 --> Language file loaded: language/dutch/form_validation_lang.php
INFO - 2016-02-06 17:03:47 --> Config Class Initialized
INFO - 2016-02-06 17:03:47 --> Hooks Class Initialized
DEBUG - 2016-02-06 17:03:47 --> UTF-8 Support Enabled
INFO - 2016-02-06 17:03:47 --> Utf8 Class Initialized
INFO - 2016-02-06 17:03:47 --> URI Class Initialized
INFO - 2016-02-06 17:03:47 --> Router Class Initialized
INFO - 2016-02-06 17:03:47 --> Output Class Initialized
INFO - 2016-02-06 17:03:47 --> Security Class Initialized
DEBUG - 2016-02-06 17:03:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 17:03:47 --> Input Class Initialized
INFO - 2016-02-06 17:03:47 --> Language Class Initialized
INFO - 2016-02-06 17:03:47 --> Language Class Initialized
INFO - 2016-02-06 17:03:47 --> Config Class Initialized
INFO - 2016-02-06 17:03:47 --> Loader Class Initialized
INFO - 2016-02-06 17:03:47 --> Helper loaded: form_helper
INFO - 2016-02-06 17:03:47 --> Helper loaded: url_helper
INFO - 2016-02-06 17:03:47 --> Helper loaded: general_helper
INFO - 2016-02-06 17:03:47 --> Database Driver Class Initialized
INFO - 2016-02-06 17:03:47 --> Form Validation Class Initialized
DEBUG - 2016-02-06 17:03:47 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 17:03:47 --> Email Class Initialized
INFO - 2016-02-06 17:03:47 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 17:03:47 --> Helper loaded: cookie_helper
INFO - 2016-02-06 17:03:47 --> Helper loaded: language_helper
INFO - 2016-02-06 17:03:47 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 17:03:47 --> Model Class Initialized
INFO - 2016-02-06 17:03:47 --> Helper loaded: inflector_helper
INFO - 2016-02-06 17:03:47 --> Model Class Initialized
INFO - 2016-02-06 17:03:47 --> Helper loaded: date_helper
INFO - 2016-02-06 17:03:47 --> Controller Class Initialized
DEBUG - 2016-02-06 17:03:47 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 17:03:47 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dashboard/views/index.php
DEBUG - 2016-02-06 17:03:47 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 17:03:47 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 17:03:47 --> Profiler Class Initialized
INFO - 2016-02-06 17:03:47 --> Helper loaded: text_helper
INFO - 2016-02-06 17:03:47 --> Final output sent to browser
DEBUG - 2016-02-06 17:03:47 --> Total execution time: 0.3200
INFO - 2016-02-06 17:03:48 --> Config Class Initialized
INFO - 2016-02-06 17:03:48 --> Hooks Class Initialized
DEBUG - 2016-02-06 17:03:48 --> UTF-8 Support Enabled
INFO - 2016-02-06 17:03:48 --> Utf8 Class Initialized
INFO - 2016-02-06 17:03:48 --> URI Class Initialized
INFO - 2016-02-06 17:03:48 --> Router Class Initialized
INFO - 2016-02-06 17:03:48 --> Output Class Initialized
INFO - 2016-02-06 17:03:48 --> Security Class Initialized
DEBUG - 2016-02-06 17:03:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 17:03:48 --> Input Class Initialized
INFO - 2016-02-06 17:03:48 --> Language Class Initialized
INFO - 2016-02-06 17:03:48 --> Language Class Initialized
INFO - 2016-02-06 17:03:48 --> Config Class Initialized
INFO - 2016-02-06 17:03:48 --> Loader Class Initialized
INFO - 2016-02-06 17:03:48 --> Helper loaded: form_helper
INFO - 2016-02-06 17:03:48 --> Helper loaded: url_helper
INFO - 2016-02-06 17:03:48 --> Helper loaded: general_helper
INFO - 2016-02-06 17:03:48 --> Database Driver Class Initialized
INFO - 2016-02-06 17:03:48 --> Form Validation Class Initialized
DEBUG - 2016-02-06 17:03:48 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 17:03:48 --> Email Class Initialized
INFO - 2016-02-06 17:03:48 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 17:03:49 --> Helper loaded: cookie_helper
INFO - 2016-02-06 17:03:49 --> Helper loaded: language_helper
INFO - 2016-02-06 17:03:49 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 17:03:49 --> Model Class Initialized
INFO - 2016-02-06 17:03:49 --> Helper loaded: inflector_helper
INFO - 2016-02-06 17:03:49 --> Model Class Initialized
INFO - 2016-02-06 17:03:49 --> Helper loaded: date_helper
INFO - 2016-02-06 17:03:49 --> Controller Class Initialized
DEBUG - 2016-02-06 17:03:49 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 17:03:49 --> Model Class Initialized
INFO - 2016-02-06 17:03:49 --> Config Class Initialized
INFO - 2016-02-06 17:03:49 --> Hooks Class Initialized
DEBUG - 2016-02-06 17:03:49 --> UTF-8 Support Enabled
INFO - 2016-02-06 17:03:49 --> Utf8 Class Initialized
INFO - 2016-02-06 17:03:49 --> URI Class Initialized
INFO - 2016-02-06 17:03:49 --> Router Class Initialized
INFO - 2016-02-06 17:03:49 --> Output Class Initialized
INFO - 2016-02-06 17:03:49 --> Security Class Initialized
DEBUG - 2016-02-06 17:03:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 17:03:49 --> Input Class Initialized
INFO - 2016-02-06 17:03:49 --> Language Class Initialized
INFO - 2016-02-06 17:03:49 --> Language Class Initialized
INFO - 2016-02-06 17:03:49 --> Config Class Initialized
INFO - 2016-02-06 17:03:49 --> Loader Class Initialized
INFO - 2016-02-06 17:03:49 --> Helper loaded: form_helper
INFO - 2016-02-06 17:03:49 --> Helper loaded: url_helper
INFO - 2016-02-06 17:03:49 --> Helper loaded: general_helper
INFO - 2016-02-06 17:03:49 --> Database Driver Class Initialized
INFO - 2016-02-06 17:03:49 --> Form Validation Class Initialized
DEBUG - 2016-02-06 17:03:49 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 17:03:49 --> Email Class Initialized
INFO - 2016-02-06 17:03:49 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 17:03:49 --> Helper loaded: cookie_helper
INFO - 2016-02-06 17:03:49 --> Helper loaded: language_helper
INFO - 2016-02-06 17:03:49 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 17:03:49 --> Model Class Initialized
INFO - 2016-02-06 17:03:49 --> Helper loaded: inflector_helper
INFO - 2016-02-06 17:03:49 --> Model Class Initialized
INFO - 2016-02-06 17:03:49 --> Helper loaded: date_helper
INFO - 2016-02-06 17:03:49 --> Controller Class Initialized
DEBUG - 2016-02-06 17:03:49 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 17:03:49 --> Model Class Initialized
DEBUG - 2016-02-06 17:03:49 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 17:03:49 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/views/login.php
DEBUG - 2016-02-06 17:03:49 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 17:03:49 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 17:03:49 --> Profiler Class Initialized
INFO - 2016-02-06 17:03:49 --> Helper loaded: text_helper
INFO - 2016-02-06 17:03:49 --> Final output sent to browser
DEBUG - 2016-02-06 17:03:49 --> Total execution time: 0.3536
INFO - 2016-02-06 17:13:46 --> Config Class Initialized
INFO - 2016-02-06 17:13:46 --> Hooks Class Initialized
DEBUG - 2016-02-06 17:13:46 --> UTF-8 Support Enabled
INFO - 2016-02-06 17:13:46 --> Utf8 Class Initialized
INFO - 2016-02-06 17:13:46 --> URI Class Initialized
INFO - 2016-02-06 17:13:46 --> Router Class Initialized
INFO - 2016-02-06 17:13:46 --> Output Class Initialized
INFO - 2016-02-06 17:13:46 --> Security Class Initialized
DEBUG - 2016-02-06 17:13:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 17:13:46 --> Input Class Initialized
INFO - 2016-02-06 17:13:46 --> Language Class Initialized
INFO - 2016-02-06 17:13:46 --> Language Class Initialized
INFO - 2016-02-06 17:13:46 --> Config Class Initialized
INFO - 2016-02-06 17:13:46 --> Loader Class Initialized
INFO - 2016-02-06 17:13:46 --> Helper loaded: form_helper
INFO - 2016-02-06 17:13:46 --> Helper loaded: url_helper
INFO - 2016-02-06 17:13:46 --> Helper loaded: general_helper
INFO - 2016-02-06 17:13:46 --> Database Driver Class Initialized
INFO - 2016-02-06 17:13:46 --> Form Validation Class Initialized
DEBUG - 2016-02-06 17:13:46 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 17:13:46 --> Email Class Initialized
INFO - 2016-02-06 17:13:46 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 17:13:46 --> Helper loaded: cookie_helper
INFO - 2016-02-06 17:13:47 --> Helper loaded: language_helper
INFO - 2016-02-06 17:13:47 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 17:13:47 --> Model Class Initialized
INFO - 2016-02-06 17:13:47 --> Helper loaded: inflector_helper
INFO - 2016-02-06 17:13:47 --> Model Class Initialized
INFO - 2016-02-06 17:13:47 --> Helper loaded: date_helper
INFO - 2016-02-06 17:13:47 --> Controller Class Initialized
DEBUG - 2016-02-06 17:13:47 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 17:13:47 --> Model Class Initialized
DEBUG - 2016-02-06 17:13:47 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 17:13:47 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/views/login.php
DEBUG - 2016-02-06 17:13:47 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 17:13:47 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 17:13:47 --> Profiler Class Initialized
INFO - 2016-02-06 17:13:47 --> Helper loaded: text_helper
INFO - 2016-02-06 17:13:47 --> Final output sent to browser
DEBUG - 2016-02-06 17:13:47 --> Total execution time: 0.3411
INFO - 2016-02-06 17:13:52 --> Config Class Initialized
INFO - 2016-02-06 17:13:52 --> Hooks Class Initialized
DEBUG - 2016-02-06 17:13:52 --> UTF-8 Support Enabled
INFO - 2016-02-06 17:13:52 --> Utf8 Class Initialized
INFO - 2016-02-06 17:13:52 --> URI Class Initialized
INFO - 2016-02-06 17:13:52 --> Router Class Initialized
INFO - 2016-02-06 17:13:52 --> Output Class Initialized
INFO - 2016-02-06 17:13:52 --> Security Class Initialized
DEBUG - 2016-02-06 17:13:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 17:13:52 --> Input Class Initialized
INFO - 2016-02-06 17:13:52 --> Language Class Initialized
INFO - 2016-02-06 17:13:52 --> Language Class Initialized
INFO - 2016-02-06 17:13:52 --> Config Class Initialized
INFO - 2016-02-06 17:13:52 --> Loader Class Initialized
INFO - 2016-02-06 17:13:52 --> Helper loaded: form_helper
INFO - 2016-02-06 17:13:52 --> Helper loaded: url_helper
INFO - 2016-02-06 17:13:52 --> Helper loaded: general_helper
INFO - 2016-02-06 17:13:52 --> Database Driver Class Initialized
INFO - 2016-02-06 17:13:52 --> Form Validation Class Initialized
DEBUG - 2016-02-06 17:13:52 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 17:13:52 --> Email Class Initialized
INFO - 2016-02-06 17:13:52 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 17:13:52 --> Helper loaded: cookie_helper
INFO - 2016-02-06 17:13:52 --> Helper loaded: language_helper
INFO - 2016-02-06 17:13:52 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 17:13:52 --> Model Class Initialized
INFO - 2016-02-06 17:13:52 --> Helper loaded: inflector_helper
INFO - 2016-02-06 17:13:52 --> Model Class Initialized
INFO - 2016-02-06 17:13:52 --> Helper loaded: date_helper
INFO - 2016-02-06 17:13:52 --> Controller Class Initialized
DEBUG - 2016-02-06 17:13:52 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 17:13:52 --> Model Class Initialized
INFO - 2016-02-06 17:13:52 --> Language file loaded: language/dutch/form_validation_lang.php
INFO - 2016-02-06 17:13:52 --> Config Class Initialized
INFO - 2016-02-06 17:13:52 --> Hooks Class Initialized
DEBUG - 2016-02-06 17:13:52 --> UTF-8 Support Enabled
INFO - 2016-02-06 17:13:52 --> Utf8 Class Initialized
INFO - 2016-02-06 17:13:52 --> URI Class Initialized
INFO - 2016-02-06 17:13:52 --> Router Class Initialized
INFO - 2016-02-06 17:13:52 --> Output Class Initialized
INFO - 2016-02-06 17:13:52 --> Security Class Initialized
DEBUG - 2016-02-06 17:13:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 17:13:52 --> Input Class Initialized
INFO - 2016-02-06 17:13:52 --> Language Class Initialized
INFO - 2016-02-06 17:13:52 --> Language Class Initialized
INFO - 2016-02-06 17:13:52 --> Config Class Initialized
INFO - 2016-02-06 17:13:52 --> Loader Class Initialized
INFO - 2016-02-06 17:13:52 --> Helper loaded: form_helper
INFO - 2016-02-06 17:13:52 --> Helper loaded: url_helper
INFO - 2016-02-06 17:13:52 --> Helper loaded: general_helper
INFO - 2016-02-06 17:13:52 --> Database Driver Class Initialized
INFO - 2016-02-06 17:13:52 --> Form Validation Class Initialized
DEBUG - 2016-02-06 17:13:52 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 17:13:52 --> Email Class Initialized
INFO - 2016-02-06 17:13:52 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 17:13:52 --> Helper loaded: cookie_helper
INFO - 2016-02-06 17:13:52 --> Helper loaded: language_helper
INFO - 2016-02-06 17:13:52 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 17:13:52 --> Model Class Initialized
INFO - 2016-02-06 17:13:52 --> Helper loaded: inflector_helper
INFO - 2016-02-06 17:13:52 --> Model Class Initialized
INFO - 2016-02-06 17:13:52 --> Helper loaded: date_helper
INFO - 2016-02-06 17:13:52 --> Controller Class Initialized
DEBUG - 2016-02-06 17:13:52 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 17:13:52 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dashboard/views/index.php
DEBUG - 2016-02-06 17:13:52 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 17:13:52 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 17:13:52 --> Profiler Class Initialized
INFO - 2016-02-06 17:13:52 --> Helper loaded: text_helper
INFO - 2016-02-06 17:13:52 --> Final output sent to browser
DEBUG - 2016-02-06 17:13:52 --> Total execution time: 0.3270
INFO - 2016-02-06 17:13:55 --> Config Class Initialized
INFO - 2016-02-06 17:13:55 --> Hooks Class Initialized
DEBUG - 2016-02-06 17:13:55 --> UTF-8 Support Enabled
INFO - 2016-02-06 17:13:55 --> Utf8 Class Initialized
INFO - 2016-02-06 17:13:55 --> URI Class Initialized
INFO - 2016-02-06 17:13:55 --> Router Class Initialized
INFO - 2016-02-06 17:13:55 --> Output Class Initialized
INFO - 2016-02-06 17:13:55 --> Security Class Initialized
DEBUG - 2016-02-06 17:13:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 17:13:55 --> Input Class Initialized
INFO - 2016-02-06 17:13:55 --> Language Class Initialized
INFO - 2016-02-06 17:13:55 --> Language Class Initialized
INFO - 2016-02-06 17:13:55 --> Config Class Initialized
INFO - 2016-02-06 17:13:55 --> Loader Class Initialized
INFO - 2016-02-06 17:13:55 --> Helper loaded: form_helper
INFO - 2016-02-06 17:13:55 --> Helper loaded: url_helper
INFO - 2016-02-06 17:13:55 --> Helper loaded: general_helper
INFO - 2016-02-06 17:13:55 --> Database Driver Class Initialized
INFO - 2016-02-06 17:13:55 --> Form Validation Class Initialized
DEBUG - 2016-02-06 17:13:55 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 17:13:55 --> Email Class Initialized
INFO - 2016-02-06 17:13:55 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 17:13:55 --> Helper loaded: cookie_helper
INFO - 2016-02-06 17:13:55 --> Helper loaded: language_helper
INFO - 2016-02-06 17:13:56 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 17:13:56 --> Model Class Initialized
INFO - 2016-02-06 17:13:56 --> Helper loaded: inflector_helper
INFO - 2016-02-06 17:13:56 --> Model Class Initialized
INFO - 2016-02-06 17:13:56 --> Helper loaded: date_helper
INFO - 2016-02-06 17:13:56 --> Controller Class Initialized
DEBUG - 2016-02-06 17:13:56 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 17:13:56 --> Model Class Initialized
INFO - 2016-02-06 17:13:56 --> Config Class Initialized
INFO - 2016-02-06 17:13:56 --> Hooks Class Initialized
DEBUG - 2016-02-06 17:13:56 --> UTF-8 Support Enabled
INFO - 2016-02-06 17:13:56 --> Utf8 Class Initialized
INFO - 2016-02-06 17:13:56 --> URI Class Initialized
INFO - 2016-02-06 17:13:56 --> Router Class Initialized
INFO - 2016-02-06 17:13:56 --> Output Class Initialized
INFO - 2016-02-06 17:13:56 --> Security Class Initialized
DEBUG - 2016-02-06 17:13:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 17:13:56 --> Input Class Initialized
INFO - 2016-02-06 17:13:56 --> Language Class Initialized
INFO - 2016-02-06 17:13:56 --> Language Class Initialized
INFO - 2016-02-06 17:13:56 --> Config Class Initialized
INFO - 2016-02-06 17:13:56 --> Loader Class Initialized
INFO - 2016-02-06 17:13:56 --> Helper loaded: form_helper
INFO - 2016-02-06 17:13:56 --> Helper loaded: url_helper
INFO - 2016-02-06 17:13:56 --> Helper loaded: general_helper
INFO - 2016-02-06 17:13:56 --> Database Driver Class Initialized
INFO - 2016-02-06 17:13:56 --> Form Validation Class Initialized
DEBUG - 2016-02-06 17:13:56 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 17:13:56 --> Email Class Initialized
INFO - 2016-02-06 17:13:56 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 17:13:56 --> Helper loaded: cookie_helper
INFO - 2016-02-06 17:13:56 --> Helper loaded: language_helper
INFO - 2016-02-06 17:13:56 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 17:13:56 --> Model Class Initialized
INFO - 2016-02-06 17:13:56 --> Helper loaded: inflector_helper
INFO - 2016-02-06 17:13:56 --> Model Class Initialized
INFO - 2016-02-06 17:13:56 --> Helper loaded: date_helper
INFO - 2016-02-06 17:13:56 --> Controller Class Initialized
DEBUG - 2016-02-06 17:13:56 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 17:13:56 --> Model Class Initialized
DEBUG - 2016-02-06 17:13:56 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 17:13:56 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/views/login.php
DEBUG - 2016-02-06 17:13:56 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 17:13:56 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 17:13:56 --> Profiler Class Initialized
INFO - 2016-02-06 17:13:56 --> Helper loaded: text_helper
INFO - 2016-02-06 17:13:56 --> Final output sent to browser
DEBUG - 2016-02-06 17:13:56 --> Total execution time: 0.4687
INFO - 2016-02-06 17:14:00 --> Config Class Initialized
INFO - 2016-02-06 17:14:00 --> Hooks Class Initialized
DEBUG - 2016-02-06 17:14:00 --> UTF-8 Support Enabled
INFO - 2016-02-06 17:14:00 --> Utf8 Class Initialized
INFO - 2016-02-06 17:14:00 --> URI Class Initialized
INFO - 2016-02-06 17:14:00 --> Router Class Initialized
INFO - 2016-02-06 17:14:00 --> Output Class Initialized
INFO - 2016-02-06 17:14:00 --> Security Class Initialized
DEBUG - 2016-02-06 17:14:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 17:14:00 --> Input Class Initialized
INFO - 2016-02-06 17:14:00 --> Language Class Initialized
INFO - 2016-02-06 17:14:00 --> Language Class Initialized
INFO - 2016-02-06 17:14:00 --> Config Class Initialized
INFO - 2016-02-06 17:14:00 --> Loader Class Initialized
INFO - 2016-02-06 17:14:00 --> Helper loaded: form_helper
INFO - 2016-02-06 17:14:00 --> Helper loaded: url_helper
INFO - 2016-02-06 17:14:00 --> Helper loaded: general_helper
INFO - 2016-02-06 17:14:00 --> Database Driver Class Initialized
INFO - 2016-02-06 17:14:00 --> Form Validation Class Initialized
DEBUG - 2016-02-06 17:14:00 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 17:14:00 --> Email Class Initialized
INFO - 2016-02-06 17:14:00 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 17:14:00 --> Helper loaded: cookie_helper
INFO - 2016-02-06 17:14:00 --> Helper loaded: language_helper
INFO - 2016-02-06 17:14:00 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 17:14:00 --> Model Class Initialized
INFO - 2016-02-06 17:14:00 --> Helper loaded: inflector_helper
INFO - 2016-02-06 17:14:00 --> Model Class Initialized
INFO - 2016-02-06 17:14:00 --> Helper loaded: date_helper
INFO - 2016-02-06 17:14:00 --> Controller Class Initialized
INFO - 2016-02-06 17:14:01 --> Config Class Initialized
INFO - 2016-02-06 17:14:01 --> Hooks Class Initialized
DEBUG - 2016-02-06 17:14:01 --> UTF-8 Support Enabled
INFO - 2016-02-06 17:14:01 --> Utf8 Class Initialized
INFO - 2016-02-06 17:14:01 --> URI Class Initialized
INFO - 2016-02-06 17:14:01 --> Router Class Initialized
INFO - 2016-02-06 17:14:01 --> Output Class Initialized
INFO - 2016-02-06 17:14:01 --> Security Class Initialized
DEBUG - 2016-02-06 17:14:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 17:14:01 --> Input Class Initialized
INFO - 2016-02-06 17:14:01 --> Language Class Initialized
INFO - 2016-02-06 17:14:01 --> Language Class Initialized
INFO - 2016-02-06 17:14:01 --> Config Class Initialized
INFO - 2016-02-06 17:14:01 --> Loader Class Initialized
INFO - 2016-02-06 17:14:01 --> Helper loaded: form_helper
INFO - 2016-02-06 17:14:01 --> Helper loaded: url_helper
INFO - 2016-02-06 17:14:01 --> Helper loaded: general_helper
INFO - 2016-02-06 17:14:01 --> Database Driver Class Initialized
INFO - 2016-02-06 17:14:01 --> Form Validation Class Initialized
DEBUG - 2016-02-06 17:14:01 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 17:14:01 --> Email Class Initialized
INFO - 2016-02-06 17:14:01 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 17:14:01 --> Helper loaded: cookie_helper
INFO - 2016-02-06 17:14:01 --> Helper loaded: language_helper
INFO - 2016-02-06 17:14:01 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 17:14:01 --> Model Class Initialized
INFO - 2016-02-06 17:14:01 --> Helper loaded: inflector_helper
INFO - 2016-02-06 17:14:01 --> Model Class Initialized
INFO - 2016-02-06 17:14:01 --> Helper loaded: date_helper
INFO - 2016-02-06 17:14:01 --> Controller Class Initialized
INFO - 2016-02-06 17:14:01 --> Config Class Initialized
INFO - 2016-02-06 17:14:01 --> Hooks Class Initialized
DEBUG - 2016-02-06 17:14:01 --> UTF-8 Support Enabled
INFO - 2016-02-06 17:14:01 --> Utf8 Class Initialized
INFO - 2016-02-06 17:14:01 --> URI Class Initialized
INFO - 2016-02-06 17:14:01 --> Router Class Initialized
INFO - 2016-02-06 17:14:01 --> Output Class Initialized
INFO - 2016-02-06 17:14:01 --> Security Class Initialized
DEBUG - 2016-02-06 17:14:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 17:14:01 --> Input Class Initialized
INFO - 2016-02-06 17:14:01 --> Language Class Initialized
INFO - 2016-02-06 17:14:01 --> Language Class Initialized
INFO - 2016-02-06 17:14:01 --> Config Class Initialized
INFO - 2016-02-06 17:14:01 --> Loader Class Initialized
INFO - 2016-02-06 17:14:01 --> Helper loaded: form_helper
INFO - 2016-02-06 17:14:01 --> Helper loaded: url_helper
INFO - 2016-02-06 17:14:01 --> Helper loaded: general_helper
INFO - 2016-02-06 17:14:01 --> Database Driver Class Initialized
INFO - 2016-02-06 17:14:01 --> Form Validation Class Initialized
DEBUG - 2016-02-06 17:14:01 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 17:14:01 --> Email Class Initialized
INFO - 2016-02-06 17:14:01 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 17:14:01 --> Helper loaded: cookie_helper
INFO - 2016-02-06 17:14:01 --> Helper loaded: language_helper
INFO - 2016-02-06 17:14:01 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 17:14:01 --> Model Class Initialized
INFO - 2016-02-06 17:14:01 --> Helper loaded: inflector_helper
INFO - 2016-02-06 17:14:01 --> Model Class Initialized
INFO - 2016-02-06 17:14:01 --> Helper loaded: date_helper
INFO - 2016-02-06 17:14:01 --> Controller Class Initialized
DEBUG - 2016-02-06 17:14:01 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 17:14:01 --> Model Class Initialized
DEBUG - 2016-02-06 17:14:01 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 17:14:01 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/views/login.php
DEBUG - 2016-02-06 17:14:01 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 17:14:01 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 17:14:01 --> Profiler Class Initialized
INFO - 2016-02-06 17:14:01 --> Helper loaded: text_helper
INFO - 2016-02-06 17:14:01 --> Final output sent to browser
DEBUG - 2016-02-06 17:14:01 --> Total execution time: 0.3705
INFO - 2016-02-06 18:19:36 --> Config Class Initialized
INFO - 2016-02-06 18:19:36 --> Hooks Class Initialized
DEBUG - 2016-02-06 18:19:36 --> UTF-8 Support Enabled
INFO - 2016-02-06 18:19:36 --> Utf8 Class Initialized
INFO - 2016-02-06 18:19:36 --> URI Class Initialized
INFO - 2016-02-06 18:19:36 --> Router Class Initialized
INFO - 2016-02-06 18:19:36 --> Output Class Initialized
INFO - 2016-02-06 18:19:36 --> Security Class Initialized
DEBUG - 2016-02-06 18:19:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 18:19:36 --> Input Class Initialized
INFO - 2016-02-06 18:19:36 --> Language Class Initialized
INFO - 2016-02-06 18:19:36 --> Language Class Initialized
INFO - 2016-02-06 18:19:36 --> Config Class Initialized
INFO - 2016-02-06 18:19:36 --> Loader Class Initialized
INFO - 2016-02-06 18:19:36 --> Helper loaded: form_helper
INFO - 2016-02-06 18:19:36 --> Helper loaded: url_helper
INFO - 2016-02-06 18:19:36 --> Helper loaded: general_helper
INFO - 2016-02-06 18:19:36 --> Database Driver Class Initialized
INFO - 2016-02-06 18:19:36 --> Form Validation Class Initialized
DEBUG - 2016-02-06 18:19:36 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 18:19:36 --> Email Class Initialized
INFO - 2016-02-06 18:19:36 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 18:19:36 --> Helper loaded: cookie_helper
INFO - 2016-02-06 18:19:36 --> Helper loaded: language_helper
INFO - 2016-02-06 18:19:36 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 18:19:36 --> Model Class Initialized
INFO - 2016-02-06 18:19:36 --> Helper loaded: inflector_helper
INFO - 2016-02-06 18:19:36 --> Model Class Initialized
INFO - 2016-02-06 18:19:36 --> Helper loaded: date_helper
INFO - 2016-02-06 18:19:36 --> Controller Class Initialized
DEBUG - 2016-02-06 18:19:36 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 18:19:36 --> Model Class Initialized
DEBUG - 2016-02-06 18:19:36 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 18:19:36 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/views/login.php
DEBUG - 2016-02-06 18:19:36 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 18:19:36 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 18:19:36 --> Profiler Class Initialized
INFO - 2016-02-06 18:19:36 --> Helper loaded: text_helper
INFO - 2016-02-06 18:19:37 --> Final output sent to browser
DEBUG - 2016-02-06 18:19:37 --> Total execution time: 0.3628
INFO - 2016-02-06 18:19:57 --> Config Class Initialized
INFO - 2016-02-06 18:19:57 --> Hooks Class Initialized
DEBUG - 2016-02-06 18:19:57 --> UTF-8 Support Enabled
INFO - 2016-02-06 18:19:57 --> Utf8 Class Initialized
INFO - 2016-02-06 18:19:57 --> URI Class Initialized
INFO - 2016-02-06 18:19:57 --> Router Class Initialized
INFO - 2016-02-06 18:19:57 --> Output Class Initialized
INFO - 2016-02-06 18:19:57 --> Security Class Initialized
DEBUG - 2016-02-06 18:19:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 18:19:57 --> Input Class Initialized
INFO - 2016-02-06 18:19:57 --> Language Class Initialized
INFO - 2016-02-06 18:19:57 --> Language Class Initialized
INFO - 2016-02-06 18:19:57 --> Config Class Initialized
INFO - 2016-02-06 18:19:57 --> Loader Class Initialized
INFO - 2016-02-06 18:19:57 --> Helper loaded: form_helper
INFO - 2016-02-06 18:19:57 --> Helper loaded: url_helper
INFO - 2016-02-06 18:19:57 --> Helper loaded: general_helper
INFO - 2016-02-06 18:19:57 --> Database Driver Class Initialized
INFO - 2016-02-06 18:19:57 --> Form Validation Class Initialized
DEBUG - 2016-02-06 18:19:57 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 18:19:57 --> Email Class Initialized
INFO - 2016-02-06 18:19:57 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 18:19:57 --> Helper loaded: cookie_helper
INFO - 2016-02-06 18:19:57 --> Helper loaded: language_helper
INFO - 2016-02-06 18:19:57 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 18:19:57 --> Model Class Initialized
INFO - 2016-02-06 18:19:57 --> Helper loaded: inflector_helper
INFO - 2016-02-06 18:19:57 --> Model Class Initialized
INFO - 2016-02-06 18:19:57 --> Helper loaded: date_helper
INFO - 2016-02-06 18:19:57 --> Controller Class Initialized
INFO - 2016-02-06 18:19:57 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 18:19:57 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/login.php
INFO - 2016-02-06 18:19:57 --> Final output sent to browser
DEBUG - 2016-02-06 18:19:57 --> Total execution time: 0.3160
INFO - 2016-02-06 18:26:36 --> Config Class Initialized
INFO - 2016-02-06 18:26:36 --> Hooks Class Initialized
DEBUG - 2016-02-06 18:26:36 --> UTF-8 Support Enabled
INFO - 2016-02-06 18:26:36 --> Utf8 Class Initialized
INFO - 2016-02-06 18:26:36 --> URI Class Initialized
INFO - 2016-02-06 18:26:36 --> Router Class Initialized
INFO - 2016-02-06 18:26:36 --> Output Class Initialized
INFO - 2016-02-06 18:26:36 --> Security Class Initialized
DEBUG - 2016-02-06 18:26:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 18:26:36 --> Input Class Initialized
INFO - 2016-02-06 18:26:36 --> Language Class Initialized
INFO - 2016-02-06 18:26:36 --> Language Class Initialized
INFO - 2016-02-06 18:26:36 --> Config Class Initialized
INFO - 2016-02-06 18:26:36 --> Loader Class Initialized
INFO - 2016-02-06 18:26:36 --> Helper loaded: form_helper
INFO - 2016-02-06 18:26:36 --> Helper loaded: url_helper
INFO - 2016-02-06 18:26:36 --> Helper loaded: general_helper
INFO - 2016-02-06 18:26:36 --> Database Driver Class Initialized
INFO - 2016-02-06 18:26:36 --> Form Validation Class Initialized
DEBUG - 2016-02-06 18:26:36 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 18:26:36 --> Email Class Initialized
INFO - 2016-02-06 18:26:36 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 18:26:36 --> Helper loaded: cookie_helper
INFO - 2016-02-06 18:26:36 --> Helper loaded: language_helper
INFO - 2016-02-06 18:26:36 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 18:26:36 --> Model Class Initialized
INFO - 2016-02-06 18:26:36 --> Helper loaded: inflector_helper
INFO - 2016-02-06 18:26:36 --> Model Class Initialized
INFO - 2016-02-06 18:26:36 --> Helper loaded: date_helper
INFO - 2016-02-06 18:26:36 --> Controller Class Initialized
INFO - 2016-02-06 18:26:36 --> Language file loaded: language/dutch/auth_lang.php
INFO - 2016-02-06 18:26:36 --> Language file loaded: language/dutch/form_validation_lang.php
DEBUG - 2016-02-06 18:26:36 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/login.php
INFO - 2016-02-06 18:26:36 --> Final output sent to browser
DEBUG - 2016-02-06 18:26:36 --> Total execution time: 0.3286
INFO - 2016-02-06 18:26:45 --> Config Class Initialized
INFO - 2016-02-06 18:26:45 --> Hooks Class Initialized
DEBUG - 2016-02-06 18:26:45 --> UTF-8 Support Enabled
INFO - 2016-02-06 18:26:45 --> Utf8 Class Initialized
INFO - 2016-02-06 18:26:45 --> URI Class Initialized
INFO - 2016-02-06 18:26:45 --> Router Class Initialized
INFO - 2016-02-06 18:26:45 --> Output Class Initialized
INFO - 2016-02-06 18:26:45 --> Security Class Initialized
DEBUG - 2016-02-06 18:26:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 18:26:45 --> Input Class Initialized
INFO - 2016-02-06 18:26:46 --> Language Class Initialized
INFO - 2016-02-06 18:26:46 --> Language Class Initialized
INFO - 2016-02-06 18:26:46 --> Config Class Initialized
INFO - 2016-02-06 18:26:46 --> Loader Class Initialized
INFO - 2016-02-06 18:26:46 --> Helper loaded: form_helper
INFO - 2016-02-06 18:26:46 --> Helper loaded: url_helper
INFO - 2016-02-06 18:26:46 --> Helper loaded: general_helper
INFO - 2016-02-06 18:26:46 --> Database Driver Class Initialized
INFO - 2016-02-06 18:26:46 --> Form Validation Class Initialized
DEBUG - 2016-02-06 18:26:46 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 18:26:46 --> Email Class Initialized
INFO - 2016-02-06 18:26:46 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 18:26:46 --> Helper loaded: cookie_helper
INFO - 2016-02-06 18:26:46 --> Helper loaded: language_helper
INFO - 2016-02-06 18:26:46 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 18:26:46 --> Model Class Initialized
INFO - 2016-02-06 18:26:46 --> Helper loaded: inflector_helper
INFO - 2016-02-06 18:26:46 --> Model Class Initialized
INFO - 2016-02-06 18:26:46 --> Helper loaded: date_helper
INFO - 2016-02-06 18:26:46 --> Controller Class Initialized
INFO - 2016-02-06 18:26:46 --> Language file loaded: language/dutch/auth_lang.php
INFO - 2016-02-06 18:26:46 --> Language file loaded: language/dutch/form_validation_lang.php
DEBUG - 2016-02-06 18:26:46 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/login.php
INFO - 2016-02-06 18:26:46 --> Final output sent to browser
DEBUG - 2016-02-06 18:26:46 --> Total execution time: 0.3451
INFO - 2016-02-06 18:28:00 --> Config Class Initialized
INFO - 2016-02-06 18:28:00 --> Hooks Class Initialized
DEBUG - 2016-02-06 18:28:00 --> UTF-8 Support Enabled
INFO - 2016-02-06 18:28:00 --> Utf8 Class Initialized
INFO - 2016-02-06 18:28:00 --> URI Class Initialized
INFO - 2016-02-06 18:28:00 --> Router Class Initialized
INFO - 2016-02-06 18:28:00 --> Output Class Initialized
INFO - 2016-02-06 18:28:00 --> Security Class Initialized
DEBUG - 2016-02-06 18:28:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 18:28:00 --> Input Class Initialized
INFO - 2016-02-06 18:28:00 --> Language Class Initialized
INFO - 2016-02-06 18:28:00 --> Language Class Initialized
INFO - 2016-02-06 18:28:00 --> Config Class Initialized
INFO - 2016-02-06 18:28:00 --> Loader Class Initialized
INFO - 2016-02-06 18:28:00 --> Helper loaded: form_helper
INFO - 2016-02-06 18:28:00 --> Helper loaded: url_helper
INFO - 2016-02-06 18:28:00 --> Helper loaded: general_helper
INFO - 2016-02-06 18:28:00 --> Database Driver Class Initialized
INFO - 2016-02-06 18:28:00 --> Form Validation Class Initialized
DEBUG - 2016-02-06 18:28:00 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 18:28:00 --> Email Class Initialized
INFO - 2016-02-06 18:28:00 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 18:28:00 --> Helper loaded: cookie_helper
INFO - 2016-02-06 18:28:00 --> Helper loaded: language_helper
INFO - 2016-02-06 18:28:00 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 18:28:00 --> Model Class Initialized
INFO - 2016-02-06 18:28:00 --> Helper loaded: inflector_helper
INFO - 2016-02-06 18:28:00 --> Model Class Initialized
INFO - 2016-02-06 18:28:00 --> Helper loaded: date_helper
INFO - 2016-02-06 18:28:00 --> Controller Class Initialized
INFO - 2016-02-06 18:28:00 --> Language file loaded: language/dutch/auth_lang.php
INFO - 2016-02-06 18:28:00 --> Language file loaded: language/dutch/form_validation_lang.php
DEBUG - 2016-02-06 18:28:00 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 18:28:01 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/login.php
DEBUG - 2016-02-06 18:28:01 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 18:28:01 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 18:28:01 --> Profiler Class Initialized
INFO - 2016-02-06 18:28:01 --> Helper loaded: text_helper
INFO - 2016-02-06 18:28:01 --> Final output sent to browser
DEBUG - 2016-02-06 18:28:01 --> Total execution time: 0.3829
INFO - 2016-02-06 18:30:24 --> Config Class Initialized
INFO - 2016-02-06 18:30:24 --> Hooks Class Initialized
DEBUG - 2016-02-06 18:30:24 --> UTF-8 Support Enabled
INFO - 2016-02-06 18:30:24 --> Utf8 Class Initialized
INFO - 2016-02-06 18:30:24 --> URI Class Initialized
INFO - 2016-02-06 18:30:24 --> Router Class Initialized
INFO - 2016-02-06 18:30:24 --> Output Class Initialized
INFO - 2016-02-06 18:30:24 --> Security Class Initialized
DEBUG - 2016-02-06 18:30:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 18:30:24 --> Input Class Initialized
INFO - 2016-02-06 18:30:24 --> Language Class Initialized
INFO - 2016-02-06 18:30:24 --> Language Class Initialized
INFO - 2016-02-06 18:30:24 --> Config Class Initialized
INFO - 2016-02-06 18:30:24 --> Loader Class Initialized
INFO - 2016-02-06 18:30:24 --> Helper loaded: form_helper
INFO - 2016-02-06 18:30:24 --> Helper loaded: url_helper
INFO - 2016-02-06 18:30:24 --> Helper loaded: general_helper
INFO - 2016-02-06 18:30:24 --> Database Driver Class Initialized
INFO - 2016-02-06 18:30:24 --> Form Validation Class Initialized
DEBUG - 2016-02-06 18:30:24 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 18:30:24 --> Email Class Initialized
INFO - 2016-02-06 18:30:24 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 18:30:24 --> Helper loaded: cookie_helper
INFO - 2016-02-06 18:30:24 --> Helper loaded: language_helper
INFO - 2016-02-06 18:30:24 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 18:30:24 --> Model Class Initialized
INFO - 2016-02-06 18:30:24 --> Helper loaded: inflector_helper
INFO - 2016-02-06 18:30:24 --> Model Class Initialized
INFO - 2016-02-06 18:30:24 --> Helper loaded: date_helper
INFO - 2016-02-06 18:30:24 --> Controller Class Initialized
INFO - 2016-02-06 18:30:24 --> Language file loaded: language/dutch/auth_lang.php
INFO - 2016-02-06 18:30:24 --> Language file loaded: language/dutch/form_validation_lang.php
DEBUG - 2016-02-06 18:30:24 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 18:30:24 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/login.php
DEBUG - 2016-02-06 18:30:24 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 18:30:24 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 18:30:24 --> Profiler Class Initialized
INFO - 2016-02-06 18:30:24 --> Helper loaded: text_helper
INFO - 2016-02-06 18:30:24 --> Final output sent to browser
DEBUG - 2016-02-06 18:30:24 --> Total execution time: 0.3729
INFO - 2016-02-06 18:30:40 --> Config Class Initialized
INFO - 2016-02-06 18:30:40 --> Hooks Class Initialized
DEBUG - 2016-02-06 18:30:40 --> UTF-8 Support Enabled
INFO - 2016-02-06 18:30:40 --> Utf8 Class Initialized
INFO - 2016-02-06 18:30:40 --> URI Class Initialized
INFO - 2016-02-06 18:30:40 --> Router Class Initialized
INFO - 2016-02-06 18:30:40 --> Output Class Initialized
INFO - 2016-02-06 18:30:40 --> Security Class Initialized
DEBUG - 2016-02-06 18:30:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 18:30:40 --> Input Class Initialized
INFO - 2016-02-06 18:30:40 --> Language Class Initialized
INFO - 2016-02-06 18:30:40 --> Language Class Initialized
INFO - 2016-02-06 18:30:40 --> Config Class Initialized
INFO - 2016-02-06 18:30:40 --> Loader Class Initialized
INFO - 2016-02-06 18:30:40 --> Helper loaded: form_helper
INFO - 2016-02-06 18:30:40 --> Helper loaded: url_helper
INFO - 2016-02-06 18:30:40 --> Helper loaded: general_helper
INFO - 2016-02-06 18:30:40 --> Database Driver Class Initialized
INFO - 2016-02-06 18:30:40 --> Form Validation Class Initialized
DEBUG - 2016-02-06 18:30:40 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 18:30:40 --> Email Class Initialized
INFO - 2016-02-06 18:30:40 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 18:30:40 --> Helper loaded: cookie_helper
INFO - 2016-02-06 18:30:40 --> Helper loaded: language_helper
INFO - 2016-02-06 18:30:40 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 18:30:40 --> Model Class Initialized
INFO - 2016-02-06 18:30:40 --> Helper loaded: inflector_helper
INFO - 2016-02-06 18:30:40 --> Model Class Initialized
INFO - 2016-02-06 18:30:40 --> Helper loaded: date_helper
INFO - 2016-02-06 18:30:40 --> Controller Class Initialized
INFO - 2016-02-06 18:30:40 --> Language file loaded: language/dutch/auth_lang.php
INFO - 2016-02-06 18:30:40 --> Language file loaded: language/dutch/form_validation_lang.php
DEBUG - 2016-02-06 18:30:40 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 18:30:40 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/login.php
DEBUG - 2016-02-06 18:30:40 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 18:30:40 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 18:30:40 --> Profiler Class Initialized
INFO - 2016-02-06 18:30:40 --> Helper loaded: text_helper
INFO - 2016-02-06 18:30:40 --> Final output sent to browser
DEBUG - 2016-02-06 18:30:40 --> Total execution time: 0.3571
INFO - 2016-02-06 18:34:56 --> Config Class Initialized
INFO - 2016-02-06 18:34:56 --> Hooks Class Initialized
DEBUG - 2016-02-06 18:34:56 --> UTF-8 Support Enabled
INFO - 2016-02-06 18:34:56 --> Utf8 Class Initialized
INFO - 2016-02-06 18:34:56 --> URI Class Initialized
INFO - 2016-02-06 18:34:56 --> Router Class Initialized
INFO - 2016-02-06 18:34:56 --> Output Class Initialized
INFO - 2016-02-06 18:34:56 --> Security Class Initialized
DEBUG - 2016-02-06 18:34:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 18:34:56 --> Input Class Initialized
INFO - 2016-02-06 18:34:56 --> Language Class Initialized
INFO - 2016-02-06 18:34:56 --> Language Class Initialized
INFO - 2016-02-06 18:34:56 --> Config Class Initialized
INFO - 2016-02-06 18:34:56 --> Loader Class Initialized
INFO - 2016-02-06 18:34:56 --> Helper loaded: form_helper
INFO - 2016-02-06 18:34:56 --> Helper loaded: url_helper
INFO - 2016-02-06 18:34:56 --> Helper loaded: general_helper
INFO - 2016-02-06 18:34:56 --> Database Driver Class Initialized
INFO - 2016-02-06 18:34:56 --> Form Validation Class Initialized
DEBUG - 2016-02-06 18:34:56 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 18:34:56 --> Email Class Initialized
INFO - 2016-02-06 18:34:56 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 18:34:56 --> Helper loaded: cookie_helper
INFO - 2016-02-06 18:34:56 --> Helper loaded: language_helper
INFO - 2016-02-06 18:34:57 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 18:34:57 --> Model Class Initialized
INFO - 2016-02-06 18:34:57 --> Helper loaded: inflector_helper
INFO - 2016-02-06 18:34:57 --> Model Class Initialized
INFO - 2016-02-06 18:34:57 --> Helper loaded: date_helper
INFO - 2016-02-06 18:34:57 --> Controller Class Initialized
DEBUG - 2016-02-06 18:34:57 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 18:34:57 --> Model Class Initialized
INFO - 2016-02-06 18:34:57 --> Config Class Initialized
INFO - 2016-02-06 18:34:57 --> Hooks Class Initialized
DEBUG - 2016-02-06 18:34:57 --> UTF-8 Support Enabled
INFO - 2016-02-06 18:34:57 --> Utf8 Class Initialized
INFO - 2016-02-06 18:34:57 --> URI Class Initialized
INFO - 2016-02-06 18:34:57 --> Router Class Initialized
INFO - 2016-02-06 18:34:57 --> Output Class Initialized
INFO - 2016-02-06 18:34:57 --> Security Class Initialized
DEBUG - 2016-02-06 18:34:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 18:34:57 --> Input Class Initialized
INFO - 2016-02-06 18:34:57 --> Language Class Initialized
INFO - 2016-02-06 18:34:57 --> Language Class Initialized
INFO - 2016-02-06 18:34:57 --> Config Class Initialized
INFO - 2016-02-06 18:34:57 --> Loader Class Initialized
INFO - 2016-02-06 18:34:57 --> Helper loaded: form_helper
INFO - 2016-02-06 18:34:57 --> Helper loaded: url_helper
INFO - 2016-02-06 18:34:57 --> Helper loaded: general_helper
INFO - 2016-02-06 18:34:57 --> Database Driver Class Initialized
INFO - 2016-02-06 18:34:57 --> Form Validation Class Initialized
DEBUG - 2016-02-06 18:34:57 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 18:34:57 --> Email Class Initialized
INFO - 2016-02-06 18:34:57 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 18:34:57 --> Helper loaded: cookie_helper
INFO - 2016-02-06 18:34:57 --> Helper loaded: language_helper
INFO - 2016-02-06 18:34:57 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 18:34:57 --> Model Class Initialized
INFO - 2016-02-06 18:34:57 --> Helper loaded: inflector_helper
INFO - 2016-02-06 18:34:57 --> Model Class Initialized
INFO - 2016-02-06 18:34:57 --> Helper loaded: date_helper
INFO - 2016-02-06 18:34:57 --> Controller Class Initialized
DEBUG - 2016-02-06 18:34:57 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 18:34:57 --> Model Class Initialized
DEBUG - 2016-02-06 18:34:57 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 18:34:57 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/views/login.php
DEBUG - 2016-02-06 18:34:57 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 18:34:57 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 18:34:57 --> Profiler Class Initialized
INFO - 2016-02-06 18:34:57 --> Helper loaded: text_helper
INFO - 2016-02-06 18:34:57 --> Final output sent to browser
DEBUG - 2016-02-06 18:34:57 --> Total execution time: 0.4005
INFO - 2016-02-06 18:37:57 --> Config Class Initialized
INFO - 2016-02-06 18:37:57 --> Hooks Class Initialized
DEBUG - 2016-02-06 18:37:58 --> UTF-8 Support Enabled
INFO - 2016-02-06 18:37:58 --> Utf8 Class Initialized
INFO - 2016-02-06 18:37:58 --> URI Class Initialized
INFO - 2016-02-06 18:37:58 --> Router Class Initialized
INFO - 2016-02-06 18:37:58 --> Output Class Initialized
INFO - 2016-02-06 18:37:58 --> Security Class Initialized
DEBUG - 2016-02-06 18:37:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 18:37:58 --> Input Class Initialized
INFO - 2016-02-06 18:37:58 --> Language Class Initialized
INFO - 2016-02-06 18:37:58 --> Language Class Initialized
INFO - 2016-02-06 18:37:58 --> Config Class Initialized
INFO - 2016-02-06 18:37:58 --> Loader Class Initialized
INFO - 2016-02-06 18:37:58 --> Helper loaded: form_helper
INFO - 2016-02-06 18:37:58 --> Helper loaded: url_helper
INFO - 2016-02-06 18:37:58 --> Helper loaded: general_helper
INFO - 2016-02-06 18:37:58 --> Database Driver Class Initialized
INFO - 2016-02-06 18:37:58 --> Form Validation Class Initialized
DEBUG - 2016-02-06 18:37:58 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 18:37:58 --> Email Class Initialized
INFO - 2016-02-06 18:37:58 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 18:37:58 --> Helper loaded: cookie_helper
INFO - 2016-02-06 18:37:58 --> Helper loaded: language_helper
INFO - 2016-02-06 18:37:58 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 18:37:58 --> Model Class Initialized
INFO - 2016-02-06 18:37:58 --> Helper loaded: inflector_helper
INFO - 2016-02-06 18:37:58 --> Model Class Initialized
INFO - 2016-02-06 18:37:58 --> Helper loaded: date_helper
INFO - 2016-02-06 18:37:58 --> Controller Class Initialized
INFO - 2016-02-06 18:37:58 --> Language file loaded: language/dutch/auth_lang.php
INFO - 2016-02-06 18:38:29 --> Config Class Initialized
INFO - 2016-02-06 18:38:29 --> Hooks Class Initialized
DEBUG - 2016-02-06 18:38:29 --> UTF-8 Support Enabled
INFO - 2016-02-06 18:38:29 --> Utf8 Class Initialized
INFO - 2016-02-06 18:38:29 --> URI Class Initialized
INFO - 2016-02-06 18:38:29 --> Router Class Initialized
INFO - 2016-02-06 18:38:29 --> Output Class Initialized
INFO - 2016-02-06 18:38:29 --> Security Class Initialized
DEBUG - 2016-02-06 18:38:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 18:38:29 --> Input Class Initialized
INFO - 2016-02-06 18:38:29 --> Language Class Initialized
INFO - 2016-02-06 18:38:29 --> Language Class Initialized
INFO - 2016-02-06 18:38:29 --> Config Class Initialized
INFO - 2016-02-06 18:38:29 --> Loader Class Initialized
INFO - 2016-02-06 18:38:29 --> Helper loaded: form_helper
INFO - 2016-02-06 18:38:29 --> Helper loaded: url_helper
INFO - 2016-02-06 18:38:29 --> Helper loaded: general_helper
INFO - 2016-02-06 18:38:29 --> Database Driver Class Initialized
INFO - 2016-02-06 18:38:29 --> Form Validation Class Initialized
DEBUG - 2016-02-06 18:38:29 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 18:38:29 --> Email Class Initialized
INFO - 2016-02-06 18:38:29 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 18:38:29 --> Helper loaded: cookie_helper
INFO - 2016-02-06 18:38:29 --> Helper loaded: language_helper
INFO - 2016-02-06 18:38:29 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 18:38:29 --> Model Class Initialized
INFO - 2016-02-06 18:38:29 --> Helper loaded: inflector_helper
INFO - 2016-02-06 18:38:29 --> Model Class Initialized
INFO - 2016-02-06 18:38:29 --> Helper loaded: date_helper
INFO - 2016-02-06 18:38:29 --> Controller Class Initialized
INFO - 2016-02-06 18:38:29 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 18:38:29 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 18:38:29 --> Model Class Initialized
ERROR - 2016-02-06 18:38:29 --> Severity: Error --> Call to undefined method Users_m::dropdownZorgverleners() C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\auth\controllers\auth.php 89
INFO - 2016-02-06 18:38:59 --> Config Class Initialized
INFO - 2016-02-06 18:38:59 --> Hooks Class Initialized
DEBUG - 2016-02-06 18:38:59 --> UTF-8 Support Enabled
INFO - 2016-02-06 18:38:59 --> Utf8 Class Initialized
INFO - 2016-02-06 18:38:59 --> URI Class Initialized
INFO - 2016-02-06 18:38:59 --> Router Class Initialized
INFO - 2016-02-06 18:38:59 --> Output Class Initialized
INFO - 2016-02-06 18:38:59 --> Security Class Initialized
DEBUG - 2016-02-06 18:38:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 18:39:00 --> Input Class Initialized
INFO - 2016-02-06 18:39:00 --> Language Class Initialized
INFO - 2016-02-06 18:39:00 --> Language Class Initialized
INFO - 2016-02-06 18:39:00 --> Config Class Initialized
INFO - 2016-02-06 18:39:00 --> Loader Class Initialized
INFO - 2016-02-06 18:39:00 --> Helper loaded: form_helper
INFO - 2016-02-06 18:39:00 --> Helper loaded: url_helper
INFO - 2016-02-06 18:39:00 --> Helper loaded: general_helper
INFO - 2016-02-06 18:39:00 --> Database Driver Class Initialized
INFO - 2016-02-06 18:39:00 --> Form Validation Class Initialized
DEBUG - 2016-02-06 18:39:00 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 18:39:00 --> Email Class Initialized
INFO - 2016-02-06 18:39:00 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 18:39:00 --> Helper loaded: cookie_helper
INFO - 2016-02-06 18:39:00 --> Helper loaded: language_helper
INFO - 2016-02-06 18:39:00 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 18:39:00 --> Model Class Initialized
INFO - 2016-02-06 18:39:00 --> Helper loaded: inflector_helper
INFO - 2016-02-06 18:39:00 --> Model Class Initialized
INFO - 2016-02-06 18:39:00 --> Helper loaded: date_helper
INFO - 2016-02-06 18:39:00 --> Controller Class Initialized
INFO - 2016-02-06 18:39:00 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 18:39:00 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 18:39:00 --> Model Class Initialized
DEBUG - 2016-02-06 18:39:00 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 18:39:00 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/login.php
DEBUG - 2016-02-06 18:39:00 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 18:39:00 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 18:39:00 --> Profiler Class Initialized
INFO - 2016-02-06 18:39:00 --> Helper loaded: text_helper
INFO - 2016-02-06 18:39:00 --> Final output sent to browser
DEBUG - 2016-02-06 18:39:00 --> Total execution time: 0.3695
INFO - 2016-02-06 18:41:14 --> Config Class Initialized
INFO - 2016-02-06 18:41:14 --> Hooks Class Initialized
DEBUG - 2016-02-06 18:41:14 --> UTF-8 Support Enabled
INFO - 2016-02-06 18:41:14 --> Utf8 Class Initialized
INFO - 2016-02-06 18:41:14 --> URI Class Initialized
INFO - 2016-02-06 18:41:14 --> Router Class Initialized
INFO - 2016-02-06 18:41:14 --> Output Class Initialized
INFO - 2016-02-06 18:41:14 --> Security Class Initialized
DEBUG - 2016-02-06 18:41:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 18:41:14 --> Input Class Initialized
INFO - 2016-02-06 18:41:14 --> Language Class Initialized
INFO - 2016-02-06 18:41:14 --> Language Class Initialized
INFO - 2016-02-06 18:41:14 --> Config Class Initialized
INFO - 2016-02-06 18:41:14 --> Loader Class Initialized
INFO - 2016-02-06 18:41:14 --> Helper loaded: form_helper
INFO - 2016-02-06 18:41:14 --> Helper loaded: url_helper
INFO - 2016-02-06 18:41:14 --> Helper loaded: general_helper
INFO - 2016-02-06 18:41:14 --> Database Driver Class Initialized
INFO - 2016-02-06 18:41:14 --> Form Validation Class Initialized
DEBUG - 2016-02-06 18:41:14 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 18:41:14 --> Email Class Initialized
INFO - 2016-02-06 18:41:14 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 18:41:14 --> Helper loaded: cookie_helper
INFO - 2016-02-06 18:41:14 --> Helper loaded: language_helper
INFO - 2016-02-06 18:41:14 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 18:41:14 --> Model Class Initialized
INFO - 2016-02-06 18:41:14 --> Helper loaded: inflector_helper
INFO - 2016-02-06 18:41:14 --> Model Class Initialized
INFO - 2016-02-06 18:41:14 --> Helper loaded: date_helper
INFO - 2016-02-06 18:41:14 --> Controller Class Initialized
INFO - 2016-02-06 18:41:14 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 18:41:14 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 18:41:14 --> Model Class Initialized
DEBUG - 2016-02-06 18:41:14 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 18:41:14 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/login.php
DEBUG - 2016-02-06 18:41:14 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 18:41:14 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 18:41:14 --> Profiler Class Initialized
INFO - 2016-02-06 18:41:14 --> Helper loaded: text_helper
INFO - 2016-02-06 18:41:14 --> Final output sent to browser
DEBUG - 2016-02-06 18:41:14 --> Total execution time: 0.3736
INFO - 2016-02-06 18:41:58 --> Config Class Initialized
INFO - 2016-02-06 18:41:58 --> Hooks Class Initialized
DEBUG - 2016-02-06 18:41:58 --> UTF-8 Support Enabled
INFO - 2016-02-06 18:41:58 --> Utf8 Class Initialized
INFO - 2016-02-06 18:41:58 --> URI Class Initialized
INFO - 2016-02-06 18:41:58 --> Router Class Initialized
INFO - 2016-02-06 18:41:58 --> Output Class Initialized
INFO - 2016-02-06 18:41:58 --> Security Class Initialized
DEBUG - 2016-02-06 18:41:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 18:41:58 --> Input Class Initialized
INFO - 2016-02-06 18:41:58 --> Language Class Initialized
INFO - 2016-02-06 18:41:58 --> Language Class Initialized
INFO - 2016-02-06 18:41:58 --> Config Class Initialized
INFO - 2016-02-06 18:41:58 --> Loader Class Initialized
INFO - 2016-02-06 18:41:58 --> Helper loaded: form_helper
INFO - 2016-02-06 18:41:58 --> Helper loaded: url_helper
INFO - 2016-02-06 18:41:58 --> Helper loaded: general_helper
INFO - 2016-02-06 18:41:58 --> Database Driver Class Initialized
INFO - 2016-02-06 18:41:58 --> Form Validation Class Initialized
DEBUG - 2016-02-06 18:41:58 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 18:41:58 --> Email Class Initialized
INFO - 2016-02-06 18:41:58 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 18:41:58 --> Helper loaded: cookie_helper
INFO - 2016-02-06 18:41:58 --> Helper loaded: language_helper
INFO - 2016-02-06 18:41:58 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 18:41:59 --> Model Class Initialized
INFO - 2016-02-06 18:41:59 --> Helper loaded: inflector_helper
INFO - 2016-02-06 18:41:59 --> Model Class Initialized
INFO - 2016-02-06 18:41:59 --> Helper loaded: date_helper
INFO - 2016-02-06 18:41:59 --> Controller Class Initialized
INFO - 2016-02-06 18:41:59 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 18:41:59 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 18:41:59 --> Model Class Initialized
DEBUG - 2016-02-06 18:41:59 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 18:41:59 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/login.php
DEBUG - 2016-02-06 18:41:59 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 18:41:59 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 18:41:59 --> Profiler Class Initialized
INFO - 2016-02-06 18:41:59 --> Helper loaded: text_helper
INFO - 2016-02-06 18:41:59 --> Final output sent to browser
DEBUG - 2016-02-06 18:41:59 --> Total execution time: 0.3874
INFO - 2016-02-06 18:44:16 --> Config Class Initialized
INFO - 2016-02-06 18:44:16 --> Hooks Class Initialized
DEBUG - 2016-02-06 18:44:16 --> UTF-8 Support Enabled
INFO - 2016-02-06 18:44:16 --> Utf8 Class Initialized
INFO - 2016-02-06 18:44:16 --> URI Class Initialized
INFO - 2016-02-06 18:44:16 --> Router Class Initialized
INFO - 2016-02-06 18:44:16 --> Output Class Initialized
INFO - 2016-02-06 18:44:16 --> Security Class Initialized
DEBUG - 2016-02-06 18:44:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 18:44:16 --> Input Class Initialized
INFO - 2016-02-06 18:44:16 --> Language Class Initialized
INFO - 2016-02-06 18:44:16 --> Language Class Initialized
INFO - 2016-02-06 18:44:16 --> Config Class Initialized
INFO - 2016-02-06 18:44:16 --> Loader Class Initialized
INFO - 2016-02-06 18:44:16 --> Helper loaded: form_helper
INFO - 2016-02-06 18:44:16 --> Helper loaded: url_helper
INFO - 2016-02-06 18:44:16 --> Helper loaded: general_helper
INFO - 2016-02-06 18:44:16 --> Database Driver Class Initialized
INFO - 2016-02-06 18:44:16 --> Form Validation Class Initialized
DEBUG - 2016-02-06 18:44:16 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 18:44:16 --> Email Class Initialized
INFO - 2016-02-06 18:44:16 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 18:44:16 --> Helper loaded: cookie_helper
INFO - 2016-02-06 18:44:16 --> Helper loaded: language_helper
INFO - 2016-02-06 18:44:16 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 18:44:16 --> Model Class Initialized
INFO - 2016-02-06 18:44:16 --> Helper loaded: inflector_helper
INFO - 2016-02-06 18:44:16 --> Model Class Initialized
INFO - 2016-02-06 18:44:16 --> Helper loaded: date_helper
INFO - 2016-02-06 18:44:16 --> Controller Class Initialized
INFO - 2016-02-06 18:44:16 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 18:44:16 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 18:44:16 --> Model Class Initialized
DEBUG - 2016-02-06 18:44:16 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 18:44:16 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/login.php
DEBUG - 2016-02-06 18:44:16 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 18:44:16 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 18:44:16 --> Profiler Class Initialized
INFO - 2016-02-06 18:44:16 --> Helper loaded: text_helper
INFO - 2016-02-06 18:44:16 --> Final output sent to browser
DEBUG - 2016-02-06 18:44:16 --> Total execution time: 0.3872
INFO - 2016-02-06 18:46:02 --> Config Class Initialized
INFO - 2016-02-06 18:46:02 --> Hooks Class Initialized
DEBUG - 2016-02-06 18:46:02 --> UTF-8 Support Enabled
INFO - 2016-02-06 18:46:02 --> Utf8 Class Initialized
INFO - 2016-02-06 18:46:02 --> URI Class Initialized
INFO - 2016-02-06 18:46:02 --> Router Class Initialized
INFO - 2016-02-06 18:46:02 --> Output Class Initialized
INFO - 2016-02-06 18:46:02 --> Security Class Initialized
DEBUG - 2016-02-06 18:46:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 18:46:02 --> Input Class Initialized
INFO - 2016-02-06 18:46:02 --> Language Class Initialized
INFO - 2016-02-06 18:46:02 --> Language Class Initialized
INFO - 2016-02-06 18:46:02 --> Config Class Initialized
INFO - 2016-02-06 18:46:02 --> Loader Class Initialized
INFO - 2016-02-06 18:46:02 --> Helper loaded: form_helper
INFO - 2016-02-06 18:46:02 --> Helper loaded: url_helper
INFO - 2016-02-06 18:46:02 --> Helper loaded: general_helper
INFO - 2016-02-06 18:46:02 --> Database Driver Class Initialized
INFO - 2016-02-06 18:46:03 --> Form Validation Class Initialized
DEBUG - 2016-02-06 18:46:03 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 18:46:03 --> Email Class Initialized
INFO - 2016-02-06 18:46:03 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 18:46:03 --> Helper loaded: cookie_helper
INFO - 2016-02-06 18:46:03 --> Helper loaded: language_helper
INFO - 2016-02-06 18:46:03 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 18:46:03 --> Model Class Initialized
INFO - 2016-02-06 18:46:03 --> Helper loaded: inflector_helper
INFO - 2016-02-06 18:46:03 --> Model Class Initialized
INFO - 2016-02-06 18:46:03 --> Helper loaded: date_helper
INFO - 2016-02-06 18:46:03 --> Controller Class Initialized
INFO - 2016-02-06 18:46:03 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 18:46:03 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 18:46:03 --> Model Class Initialized
DEBUG - 2016-02-06 18:46:03 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 18:46:03 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/login.php
DEBUG - 2016-02-06 18:46:03 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 18:46:03 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 18:46:03 --> Profiler Class Initialized
INFO - 2016-02-06 18:46:03 --> Helper loaded: text_helper
INFO - 2016-02-06 18:46:03 --> Final output sent to browser
DEBUG - 2016-02-06 18:46:03 --> Total execution time: 0.3870
INFO - 2016-02-06 18:47:22 --> Config Class Initialized
INFO - 2016-02-06 18:47:22 --> Hooks Class Initialized
DEBUG - 2016-02-06 18:47:22 --> UTF-8 Support Enabled
INFO - 2016-02-06 18:47:22 --> Utf8 Class Initialized
INFO - 2016-02-06 18:47:22 --> URI Class Initialized
INFO - 2016-02-06 18:47:22 --> Router Class Initialized
INFO - 2016-02-06 18:47:22 --> Output Class Initialized
INFO - 2016-02-06 18:47:22 --> Security Class Initialized
DEBUG - 2016-02-06 18:47:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 18:47:22 --> Input Class Initialized
INFO - 2016-02-06 18:47:22 --> Language Class Initialized
INFO - 2016-02-06 18:47:22 --> Language Class Initialized
INFO - 2016-02-06 18:47:22 --> Config Class Initialized
INFO - 2016-02-06 18:47:22 --> Loader Class Initialized
INFO - 2016-02-06 18:47:22 --> Helper loaded: form_helper
INFO - 2016-02-06 18:47:22 --> Helper loaded: url_helper
INFO - 2016-02-06 18:47:22 --> Helper loaded: general_helper
INFO - 2016-02-06 18:47:22 --> Database Driver Class Initialized
INFO - 2016-02-06 18:47:22 --> Form Validation Class Initialized
DEBUG - 2016-02-06 18:47:22 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 18:47:22 --> Email Class Initialized
INFO - 2016-02-06 18:47:22 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 18:47:22 --> Helper loaded: cookie_helper
INFO - 2016-02-06 18:47:22 --> Helper loaded: language_helper
INFO - 2016-02-06 18:47:22 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 18:47:22 --> Model Class Initialized
INFO - 2016-02-06 18:47:22 --> Helper loaded: inflector_helper
INFO - 2016-02-06 18:47:22 --> Model Class Initialized
INFO - 2016-02-06 18:47:22 --> Helper loaded: date_helper
INFO - 2016-02-06 18:47:22 --> Controller Class Initialized
INFO - 2016-02-06 18:47:22 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 18:47:22 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 18:47:22 --> Model Class Initialized
DEBUG - 2016-02-06 18:47:22 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 18:47:22 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/login.php
DEBUG - 2016-02-06 18:47:22 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 18:47:22 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 18:47:22 --> Profiler Class Initialized
INFO - 2016-02-06 18:47:22 --> Helper loaded: text_helper
INFO - 2016-02-06 18:47:22 --> Final output sent to browser
DEBUG - 2016-02-06 18:47:22 --> Total execution time: 0.4636
INFO - 2016-02-06 18:50:15 --> Config Class Initialized
INFO - 2016-02-06 18:50:15 --> Hooks Class Initialized
DEBUG - 2016-02-06 18:50:15 --> UTF-8 Support Enabled
INFO - 2016-02-06 18:50:15 --> Utf8 Class Initialized
INFO - 2016-02-06 18:50:15 --> URI Class Initialized
INFO - 2016-02-06 18:50:15 --> Router Class Initialized
INFO - 2016-02-06 18:50:15 --> Output Class Initialized
INFO - 2016-02-06 18:50:15 --> Security Class Initialized
DEBUG - 2016-02-06 18:50:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 18:50:15 --> Input Class Initialized
INFO - 2016-02-06 18:50:15 --> Language Class Initialized
INFO - 2016-02-06 18:50:15 --> Language Class Initialized
INFO - 2016-02-06 18:50:15 --> Config Class Initialized
INFO - 2016-02-06 18:50:15 --> Loader Class Initialized
INFO - 2016-02-06 18:50:15 --> Helper loaded: form_helper
INFO - 2016-02-06 18:50:15 --> Helper loaded: url_helper
INFO - 2016-02-06 18:50:15 --> Helper loaded: general_helper
INFO - 2016-02-06 18:50:15 --> Database Driver Class Initialized
INFO - 2016-02-06 18:50:15 --> Form Validation Class Initialized
DEBUG - 2016-02-06 18:50:15 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 18:50:15 --> Email Class Initialized
INFO - 2016-02-06 18:50:15 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 18:50:15 --> Helper loaded: cookie_helper
INFO - 2016-02-06 18:50:15 --> Helper loaded: language_helper
INFO - 2016-02-06 18:50:15 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 18:50:15 --> Model Class Initialized
INFO - 2016-02-06 18:50:15 --> Helper loaded: inflector_helper
INFO - 2016-02-06 18:50:15 --> Model Class Initialized
INFO - 2016-02-06 18:50:15 --> Helper loaded: date_helper
INFO - 2016-02-06 18:50:15 --> Controller Class Initialized
INFO - 2016-02-06 18:50:15 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 18:50:15 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 18:50:15 --> Model Class Initialized
DEBUG - 2016-02-06 18:50:15 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 18:50:15 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/login.php
DEBUG - 2016-02-06 18:50:15 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 18:50:15 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 18:50:15 --> Profiler Class Initialized
INFO - 2016-02-06 18:50:15 --> Helper loaded: text_helper
INFO - 2016-02-06 18:50:15 --> Final output sent to browser
DEBUG - 2016-02-06 18:50:15 --> Total execution time: 0.5105
INFO - 2016-02-06 18:52:31 --> Config Class Initialized
INFO - 2016-02-06 18:52:31 --> Hooks Class Initialized
DEBUG - 2016-02-06 18:52:31 --> UTF-8 Support Enabled
INFO - 2016-02-06 18:52:31 --> Utf8 Class Initialized
INFO - 2016-02-06 18:52:31 --> URI Class Initialized
INFO - 2016-02-06 18:52:31 --> Router Class Initialized
INFO - 2016-02-06 18:52:31 --> Output Class Initialized
INFO - 2016-02-06 18:52:31 --> Security Class Initialized
DEBUG - 2016-02-06 18:52:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 18:52:31 --> Input Class Initialized
INFO - 2016-02-06 18:52:31 --> Language Class Initialized
INFO - 2016-02-06 18:52:31 --> Language Class Initialized
INFO - 2016-02-06 18:52:31 --> Config Class Initialized
INFO - 2016-02-06 18:52:31 --> Loader Class Initialized
INFO - 2016-02-06 18:52:31 --> Helper loaded: form_helper
INFO - 2016-02-06 18:52:31 --> Helper loaded: url_helper
INFO - 2016-02-06 18:52:31 --> Helper loaded: general_helper
INFO - 2016-02-06 18:52:31 --> Database Driver Class Initialized
INFO - 2016-02-06 18:52:31 --> Form Validation Class Initialized
DEBUG - 2016-02-06 18:52:31 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 18:52:31 --> Email Class Initialized
INFO - 2016-02-06 18:52:31 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 18:52:31 --> Helper loaded: cookie_helper
INFO - 2016-02-06 18:52:31 --> Helper loaded: language_helper
INFO - 2016-02-06 18:52:31 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 18:52:31 --> Model Class Initialized
INFO - 2016-02-06 18:52:31 --> Helper loaded: inflector_helper
INFO - 2016-02-06 18:52:31 --> Model Class Initialized
INFO - 2016-02-06 18:52:31 --> Helper loaded: date_helper
INFO - 2016-02-06 18:52:31 --> Controller Class Initialized
INFO - 2016-02-06 18:52:31 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 18:52:31 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 18:52:31 --> Model Class Initialized
INFO - 2016-02-06 18:52:31 --> Config Class Initialized
INFO - 2016-02-06 18:52:31 --> Hooks Class Initialized
DEBUG - 2016-02-06 18:52:31 --> UTF-8 Support Enabled
INFO - 2016-02-06 18:52:31 --> Utf8 Class Initialized
INFO - 2016-02-06 18:52:31 --> URI Class Initialized
INFO - 2016-02-06 18:52:31 --> Router Class Initialized
INFO - 2016-02-06 18:52:31 --> Output Class Initialized
INFO - 2016-02-06 18:52:31 --> Security Class Initialized
DEBUG - 2016-02-06 18:52:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 18:52:31 --> Input Class Initialized
INFO - 2016-02-06 18:52:31 --> Language Class Initialized
INFO - 2016-02-06 18:52:31 --> Language Class Initialized
INFO - 2016-02-06 18:52:31 --> Config Class Initialized
INFO - 2016-02-06 18:52:31 --> Loader Class Initialized
INFO - 2016-02-06 18:52:31 --> Helper loaded: form_helper
INFO - 2016-02-06 18:52:31 --> Helper loaded: url_helper
INFO - 2016-02-06 18:52:31 --> Helper loaded: general_helper
INFO - 2016-02-06 18:52:31 --> Database Driver Class Initialized
INFO - 2016-02-06 18:52:31 --> Form Validation Class Initialized
DEBUG - 2016-02-06 18:52:31 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 18:52:31 --> Email Class Initialized
INFO - 2016-02-06 18:52:31 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 18:52:31 --> Helper loaded: cookie_helper
INFO - 2016-02-06 18:52:31 --> Helper loaded: language_helper
INFO - 2016-02-06 18:52:31 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 18:52:31 --> Model Class Initialized
INFO - 2016-02-06 18:52:31 --> Helper loaded: inflector_helper
INFO - 2016-02-06 18:52:31 --> Model Class Initialized
INFO - 2016-02-06 18:52:31 --> Helper loaded: date_helper
INFO - 2016-02-06 18:52:31 --> Controller Class Initialized
INFO - 2016-02-06 18:52:31 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 18:52:31 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 18:52:31 --> Model Class Initialized
DEBUG - 2016-02-06 18:52:31 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 18:52:31 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/login.php
DEBUG - 2016-02-06 18:52:31 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 18:52:31 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 18:52:31 --> Profiler Class Initialized
INFO - 2016-02-06 18:52:32 --> Helper loaded: text_helper
INFO - 2016-02-06 18:52:32 --> Final output sent to browser
DEBUG - 2016-02-06 18:52:32 --> Total execution time: 0.4251
INFO - 2016-02-06 18:52:49 --> Config Class Initialized
INFO - 2016-02-06 18:52:49 --> Hooks Class Initialized
DEBUG - 2016-02-06 18:52:49 --> UTF-8 Support Enabled
INFO - 2016-02-06 18:52:49 --> Utf8 Class Initialized
INFO - 2016-02-06 18:52:49 --> URI Class Initialized
INFO - 2016-02-06 18:52:49 --> Router Class Initialized
INFO - 2016-02-06 18:52:49 --> Output Class Initialized
INFO - 2016-02-06 18:52:49 --> Security Class Initialized
DEBUG - 2016-02-06 18:52:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 18:52:49 --> Input Class Initialized
INFO - 2016-02-06 18:52:49 --> Language Class Initialized
INFO - 2016-02-06 18:52:49 --> Language Class Initialized
INFO - 2016-02-06 18:52:49 --> Config Class Initialized
INFO - 2016-02-06 18:52:49 --> Loader Class Initialized
INFO - 2016-02-06 18:52:49 --> Helper loaded: form_helper
INFO - 2016-02-06 18:52:49 --> Helper loaded: url_helper
INFO - 2016-02-06 18:52:49 --> Helper loaded: general_helper
INFO - 2016-02-06 18:52:49 --> Database Driver Class Initialized
INFO - 2016-02-06 18:52:49 --> Form Validation Class Initialized
DEBUG - 2016-02-06 18:52:49 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 18:52:49 --> Email Class Initialized
INFO - 2016-02-06 18:52:49 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 18:52:49 --> Helper loaded: cookie_helper
INFO - 2016-02-06 18:52:49 --> Helper loaded: language_helper
INFO - 2016-02-06 18:52:49 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 18:52:49 --> Model Class Initialized
INFO - 2016-02-06 18:52:49 --> Helper loaded: inflector_helper
INFO - 2016-02-06 18:52:49 --> Model Class Initialized
INFO - 2016-02-06 18:52:49 --> Helper loaded: date_helper
INFO - 2016-02-06 18:52:49 --> Controller Class Initialized
INFO - 2016-02-06 18:52:49 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 18:52:49 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 18:52:49 --> Model Class Initialized
INFO - 2016-02-06 18:52:49 --> Language file loaded: language/dutch/form_validation_lang.php
INFO - 2016-02-06 18:52:49 --> Config Class Initialized
INFO - 2016-02-06 18:52:49 --> Hooks Class Initialized
DEBUG - 2016-02-06 18:52:49 --> UTF-8 Support Enabled
INFO - 2016-02-06 18:52:49 --> Utf8 Class Initialized
INFO - 2016-02-06 18:52:49 --> URI Class Initialized
DEBUG - 2016-02-06 18:52:49 --> No URI present. Default controller set.
INFO - 2016-02-06 18:52:49 --> Router Class Initialized
INFO - 2016-02-06 18:52:49 --> Output Class Initialized
INFO - 2016-02-06 18:52:49 --> Security Class Initialized
DEBUG - 2016-02-06 18:52:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 18:52:49 --> Input Class Initialized
INFO - 2016-02-06 18:52:49 --> Language Class Initialized
INFO - 2016-02-06 18:52:49 --> Language Class Initialized
INFO - 2016-02-06 18:52:49 --> Config Class Initialized
INFO - 2016-02-06 18:52:49 --> Loader Class Initialized
INFO - 2016-02-06 18:52:49 --> Helper loaded: form_helper
INFO - 2016-02-06 18:52:49 --> Helper loaded: url_helper
INFO - 2016-02-06 18:52:49 --> Helper loaded: general_helper
INFO - 2016-02-06 18:52:49 --> Database Driver Class Initialized
INFO - 2016-02-06 18:52:49 --> Form Validation Class Initialized
DEBUG - 2016-02-06 18:52:49 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 18:52:49 --> Email Class Initialized
INFO - 2016-02-06 18:52:49 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 18:52:49 --> Helper loaded: cookie_helper
INFO - 2016-02-06 18:52:49 --> Helper loaded: language_helper
INFO - 2016-02-06 18:52:49 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 18:52:49 --> Model Class Initialized
INFO - 2016-02-06 18:52:49 --> Helper loaded: inflector_helper
INFO - 2016-02-06 18:52:49 --> Model Class Initialized
INFO - 2016-02-06 18:52:49 --> Helper loaded: date_helper
INFO - 2016-02-06 18:52:49 --> Controller Class Initialized
DEBUG - 2016-02-06 18:52:49 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 18:52:49 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dashboard/views/index.php
DEBUG - 2016-02-06 18:52:49 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 18:52:49 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 18:52:50 --> Profiler Class Initialized
INFO - 2016-02-06 18:52:50 --> Helper loaded: text_helper
INFO - 2016-02-06 18:52:50 --> Final output sent to browser
DEBUG - 2016-02-06 18:52:50 --> Total execution time: 0.4230
INFO - 2016-02-06 18:52:54 --> Config Class Initialized
INFO - 2016-02-06 18:52:54 --> Hooks Class Initialized
DEBUG - 2016-02-06 18:52:54 --> UTF-8 Support Enabled
INFO - 2016-02-06 18:52:54 --> Utf8 Class Initialized
INFO - 2016-02-06 18:52:54 --> URI Class Initialized
INFO - 2016-02-06 18:52:54 --> Router Class Initialized
INFO - 2016-02-06 18:52:54 --> Output Class Initialized
INFO - 2016-02-06 18:52:54 --> Security Class Initialized
DEBUG - 2016-02-06 18:52:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 18:52:54 --> Input Class Initialized
INFO - 2016-02-06 18:52:54 --> Language Class Initialized
INFO - 2016-02-06 18:52:54 --> Language Class Initialized
INFO - 2016-02-06 18:52:54 --> Config Class Initialized
INFO - 2016-02-06 18:52:54 --> Loader Class Initialized
INFO - 2016-02-06 18:52:54 --> Helper loaded: form_helper
INFO - 2016-02-06 18:52:54 --> Helper loaded: url_helper
INFO - 2016-02-06 18:52:54 --> Helper loaded: general_helper
INFO - 2016-02-06 18:52:54 --> Database Driver Class Initialized
INFO - 2016-02-06 18:52:54 --> Form Validation Class Initialized
DEBUG - 2016-02-06 18:52:54 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 18:52:55 --> Email Class Initialized
INFO - 2016-02-06 18:52:55 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 18:52:55 --> Helper loaded: cookie_helper
INFO - 2016-02-06 18:52:55 --> Helper loaded: language_helper
INFO - 2016-02-06 18:52:55 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 18:52:55 --> Model Class Initialized
INFO - 2016-02-06 18:52:55 --> Helper loaded: inflector_helper
INFO - 2016-02-06 18:52:55 --> Model Class Initialized
INFO - 2016-02-06 18:52:55 --> Helper loaded: date_helper
INFO - 2016-02-06 18:52:55 --> Controller Class Initialized
INFO - 2016-02-06 18:52:55 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 18:52:55 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 18:52:55 --> Model Class Initialized
DEBUG - 2016-02-06 18:52:55 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 18:52:55 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 18:52:55 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 18:52:55 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 18:52:55 --> Profiler Class Initialized
INFO - 2016-02-06 18:52:55 --> Helper loaded: text_helper
INFO - 2016-02-06 18:52:55 --> Final output sent to browser
DEBUG - 2016-02-06 18:52:55 --> Total execution time: 0.4906
INFO - 2016-02-06 18:53:05 --> Config Class Initialized
INFO - 2016-02-06 18:53:05 --> Hooks Class Initialized
DEBUG - 2016-02-06 18:53:05 --> UTF-8 Support Enabled
INFO - 2016-02-06 18:53:05 --> Utf8 Class Initialized
INFO - 2016-02-06 18:53:05 --> URI Class Initialized
INFO - 2016-02-06 18:53:05 --> Router Class Initialized
INFO - 2016-02-06 18:53:05 --> Output Class Initialized
INFO - 2016-02-06 18:53:05 --> Security Class Initialized
DEBUG - 2016-02-06 18:53:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 18:53:05 --> Input Class Initialized
INFO - 2016-02-06 18:53:05 --> Language Class Initialized
INFO - 2016-02-06 18:53:05 --> Language Class Initialized
INFO - 2016-02-06 18:53:05 --> Config Class Initialized
INFO - 2016-02-06 18:53:05 --> Loader Class Initialized
INFO - 2016-02-06 18:53:05 --> Helper loaded: form_helper
INFO - 2016-02-06 18:53:05 --> Helper loaded: url_helper
INFO - 2016-02-06 18:53:05 --> Helper loaded: general_helper
INFO - 2016-02-06 18:53:06 --> Database Driver Class Initialized
INFO - 2016-02-06 18:53:06 --> Form Validation Class Initialized
DEBUG - 2016-02-06 18:53:06 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 18:53:06 --> Email Class Initialized
INFO - 2016-02-06 18:53:06 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 18:53:06 --> Helper loaded: cookie_helper
INFO - 2016-02-06 18:53:06 --> Helper loaded: language_helper
INFO - 2016-02-06 18:53:06 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 18:53:06 --> Model Class Initialized
INFO - 2016-02-06 18:53:06 --> Helper loaded: inflector_helper
INFO - 2016-02-06 18:53:06 --> Model Class Initialized
INFO - 2016-02-06 18:53:06 --> Helper loaded: date_helper
INFO - 2016-02-06 18:53:06 --> Controller Class Initialized
DEBUG - 2016-02-06 18:53:06 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 18:53:06 --> Model Class Initialized
INFO - 2016-02-06 18:53:06 --> Config Class Initialized
INFO - 2016-02-06 18:53:06 --> Hooks Class Initialized
DEBUG - 2016-02-06 18:53:06 --> UTF-8 Support Enabled
INFO - 2016-02-06 18:53:06 --> Utf8 Class Initialized
INFO - 2016-02-06 18:53:06 --> URI Class Initialized
INFO - 2016-02-06 18:53:06 --> Router Class Initialized
INFO - 2016-02-06 18:53:06 --> Output Class Initialized
INFO - 2016-02-06 18:53:06 --> Security Class Initialized
DEBUG - 2016-02-06 18:53:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 18:53:06 --> Input Class Initialized
INFO - 2016-02-06 18:53:06 --> Language Class Initialized
INFO - 2016-02-06 18:53:06 --> Language Class Initialized
INFO - 2016-02-06 18:53:06 --> Config Class Initialized
INFO - 2016-02-06 18:53:06 --> Loader Class Initialized
INFO - 2016-02-06 18:53:06 --> Helper loaded: form_helper
INFO - 2016-02-06 18:53:06 --> Helper loaded: url_helper
INFO - 2016-02-06 18:53:06 --> Helper loaded: general_helper
INFO - 2016-02-06 18:53:06 --> Database Driver Class Initialized
INFO - 2016-02-06 18:53:06 --> Form Validation Class Initialized
DEBUG - 2016-02-06 18:53:06 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 18:53:06 --> Email Class Initialized
INFO - 2016-02-06 18:53:06 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 18:53:06 --> Helper loaded: cookie_helper
INFO - 2016-02-06 18:53:06 --> Helper loaded: language_helper
INFO - 2016-02-06 18:53:06 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 18:53:06 --> Model Class Initialized
INFO - 2016-02-06 18:53:06 --> Helper loaded: inflector_helper
INFO - 2016-02-06 18:53:06 --> Model Class Initialized
INFO - 2016-02-06 18:53:06 --> Helper loaded: date_helper
INFO - 2016-02-06 18:53:06 --> Controller Class Initialized
DEBUG - 2016-02-06 18:53:06 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/models/Users_m.php
INFO - 2016-02-06 18:53:06 --> Model Class Initialized
DEBUG - 2016-02-06 18:53:06 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 18:53:06 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/users/views/login.php
DEBUG - 2016-02-06 18:53:06 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 18:53:06 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 18:53:06 --> Profiler Class Initialized
INFO - 2016-02-06 18:53:06 --> Helper loaded: text_helper
INFO - 2016-02-06 18:53:06 --> Final output sent to browser
DEBUG - 2016-02-06 18:53:06 --> Total execution time: 0.4427
INFO - 2016-02-06 18:53:11 --> Config Class Initialized
INFO - 2016-02-06 18:53:11 --> Hooks Class Initialized
DEBUG - 2016-02-06 18:53:11 --> UTF-8 Support Enabled
INFO - 2016-02-06 18:53:11 --> Utf8 Class Initialized
INFO - 2016-02-06 18:53:11 --> URI Class Initialized
INFO - 2016-02-06 18:53:11 --> Router Class Initialized
INFO - 2016-02-06 18:53:11 --> Output Class Initialized
INFO - 2016-02-06 18:53:11 --> Security Class Initialized
DEBUG - 2016-02-06 18:53:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 18:53:11 --> Input Class Initialized
INFO - 2016-02-06 18:53:11 --> Language Class Initialized
INFO - 2016-02-06 18:53:11 --> Language Class Initialized
INFO - 2016-02-06 18:53:11 --> Config Class Initialized
INFO - 2016-02-06 18:53:11 --> Loader Class Initialized
INFO - 2016-02-06 18:53:11 --> Helper loaded: form_helper
INFO - 2016-02-06 18:53:11 --> Helper loaded: url_helper
INFO - 2016-02-06 18:53:11 --> Helper loaded: general_helper
INFO - 2016-02-06 18:53:11 --> Database Driver Class Initialized
INFO - 2016-02-06 18:53:11 --> Form Validation Class Initialized
DEBUG - 2016-02-06 18:53:11 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 18:53:11 --> Email Class Initialized
INFO - 2016-02-06 18:53:11 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 18:53:11 --> Helper loaded: cookie_helper
INFO - 2016-02-06 18:53:11 --> Helper loaded: language_helper
INFO - 2016-02-06 18:53:11 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 18:53:11 --> Model Class Initialized
INFO - 2016-02-06 18:53:11 --> Helper loaded: inflector_helper
INFO - 2016-02-06 18:53:11 --> Model Class Initialized
INFO - 2016-02-06 18:53:11 --> Helper loaded: date_helper
INFO - 2016-02-06 18:53:11 --> Controller Class Initialized
INFO - 2016-02-06 18:53:11 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 18:53:11 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 18:53:11 --> Model Class Initialized
DEBUG - 2016-02-06 18:53:11 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 18:53:11 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/login.php
DEBUG - 2016-02-06 18:53:11 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 18:53:11 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 18:53:11 --> Profiler Class Initialized
INFO - 2016-02-06 18:53:11 --> Helper loaded: text_helper
INFO - 2016-02-06 18:53:11 --> Final output sent to browser
DEBUG - 2016-02-06 18:53:12 --> Total execution time: 0.4115
INFO - 2016-02-06 18:54:53 --> Config Class Initialized
INFO - 2016-02-06 18:54:53 --> Hooks Class Initialized
DEBUG - 2016-02-06 18:54:53 --> UTF-8 Support Enabled
INFO - 2016-02-06 18:54:53 --> Utf8 Class Initialized
INFO - 2016-02-06 18:54:53 --> URI Class Initialized
INFO - 2016-02-06 18:54:53 --> Router Class Initialized
INFO - 2016-02-06 18:54:53 --> Output Class Initialized
INFO - 2016-02-06 18:54:53 --> Security Class Initialized
DEBUG - 2016-02-06 18:54:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 18:54:53 --> Input Class Initialized
INFO - 2016-02-06 18:54:53 --> Language Class Initialized
INFO - 2016-02-06 18:54:53 --> Language Class Initialized
INFO - 2016-02-06 18:54:53 --> Config Class Initialized
INFO - 2016-02-06 18:54:53 --> Loader Class Initialized
INFO - 2016-02-06 18:54:53 --> Helper loaded: form_helper
INFO - 2016-02-06 18:54:53 --> Helper loaded: url_helper
INFO - 2016-02-06 18:54:53 --> Helper loaded: general_helper
INFO - 2016-02-06 18:54:53 --> Database Driver Class Initialized
INFO - 2016-02-06 18:54:53 --> Form Validation Class Initialized
DEBUG - 2016-02-06 18:54:53 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 18:54:53 --> Email Class Initialized
INFO - 2016-02-06 18:54:53 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 18:54:53 --> Helper loaded: cookie_helper
INFO - 2016-02-06 18:54:53 --> Helper loaded: language_helper
INFO - 2016-02-06 18:54:53 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 18:54:53 --> Model Class Initialized
INFO - 2016-02-06 18:54:53 --> Helper loaded: inflector_helper
INFO - 2016-02-06 18:54:53 --> Model Class Initialized
INFO - 2016-02-06 18:54:53 --> Helper loaded: date_helper
INFO - 2016-02-06 18:54:53 --> Controller Class Initialized
INFO - 2016-02-06 18:54:53 --> Config Class Initialized
INFO - 2016-02-06 18:54:53 --> Hooks Class Initialized
DEBUG - 2016-02-06 18:54:54 --> UTF-8 Support Enabled
INFO - 2016-02-06 18:54:54 --> Utf8 Class Initialized
INFO - 2016-02-06 18:54:54 --> URI Class Initialized
INFO - 2016-02-06 18:54:54 --> Router Class Initialized
INFO - 2016-02-06 18:54:54 --> Output Class Initialized
INFO - 2016-02-06 18:54:54 --> Security Class Initialized
DEBUG - 2016-02-06 18:54:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 18:54:54 --> Input Class Initialized
INFO - 2016-02-06 18:54:54 --> Language Class Initialized
INFO - 2016-02-06 18:54:54 --> Language Class Initialized
INFO - 2016-02-06 18:54:54 --> Config Class Initialized
INFO - 2016-02-06 18:54:54 --> Loader Class Initialized
INFO - 2016-02-06 18:54:54 --> Helper loaded: form_helper
INFO - 2016-02-06 18:54:54 --> Helper loaded: url_helper
INFO - 2016-02-06 18:54:54 --> Helper loaded: general_helper
INFO - 2016-02-06 18:54:54 --> Database Driver Class Initialized
INFO - 2016-02-06 18:54:54 --> Form Validation Class Initialized
DEBUG - 2016-02-06 18:54:54 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 18:54:54 --> Email Class Initialized
INFO - 2016-02-06 18:54:54 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 18:54:54 --> Helper loaded: cookie_helper
INFO - 2016-02-06 18:54:54 --> Helper loaded: language_helper
INFO - 2016-02-06 18:54:54 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 18:54:54 --> Model Class Initialized
INFO - 2016-02-06 18:54:54 --> Helper loaded: inflector_helper
INFO - 2016-02-06 18:54:54 --> Model Class Initialized
INFO - 2016-02-06 18:54:54 --> Helper loaded: date_helper
INFO - 2016-02-06 18:54:54 --> Controller Class Initialized
INFO - 2016-02-06 18:54:54 --> Config Class Initialized
INFO - 2016-02-06 18:54:54 --> Hooks Class Initialized
DEBUG - 2016-02-06 18:54:54 --> UTF-8 Support Enabled
INFO - 2016-02-06 18:54:54 --> Utf8 Class Initialized
INFO - 2016-02-06 18:54:54 --> URI Class Initialized
INFO - 2016-02-06 18:54:54 --> Router Class Initialized
INFO - 2016-02-06 18:54:54 --> Output Class Initialized
INFO - 2016-02-06 18:54:54 --> Security Class Initialized
DEBUG - 2016-02-06 18:54:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 18:54:54 --> Input Class Initialized
INFO - 2016-02-06 18:54:54 --> Language Class Initialized
INFO - 2016-02-06 18:54:54 --> Language Class Initialized
INFO - 2016-02-06 18:54:54 --> Config Class Initialized
INFO - 2016-02-06 18:54:54 --> Loader Class Initialized
INFO - 2016-02-06 18:54:54 --> Helper loaded: form_helper
INFO - 2016-02-06 18:54:54 --> Helper loaded: url_helper
INFO - 2016-02-06 18:54:54 --> Helper loaded: general_helper
INFO - 2016-02-06 18:54:54 --> Database Driver Class Initialized
INFO - 2016-02-06 18:54:54 --> Form Validation Class Initialized
DEBUG - 2016-02-06 18:54:54 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 18:54:54 --> Email Class Initialized
INFO - 2016-02-06 18:54:54 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 18:54:54 --> Helper loaded: cookie_helper
INFO - 2016-02-06 18:54:54 --> Helper loaded: language_helper
INFO - 2016-02-06 18:54:54 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 18:54:54 --> Model Class Initialized
INFO - 2016-02-06 18:54:54 --> Helper loaded: inflector_helper
INFO - 2016-02-06 18:54:54 --> Model Class Initialized
INFO - 2016-02-06 18:54:54 --> Helper loaded: date_helper
INFO - 2016-02-06 18:54:54 --> Controller Class Initialized
INFO - 2016-02-06 18:54:54 --> Config Class Initialized
INFO - 2016-02-06 18:54:54 --> Hooks Class Initialized
DEBUG - 2016-02-06 18:54:54 --> UTF-8 Support Enabled
INFO - 2016-02-06 18:54:55 --> Utf8 Class Initialized
INFO - 2016-02-06 18:54:55 --> URI Class Initialized
INFO - 2016-02-06 18:54:55 --> Router Class Initialized
INFO - 2016-02-06 18:54:55 --> Output Class Initialized
INFO - 2016-02-06 18:54:55 --> Security Class Initialized
DEBUG - 2016-02-06 18:54:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 18:54:55 --> Input Class Initialized
INFO - 2016-02-06 18:54:55 --> Language Class Initialized
INFO - 2016-02-06 18:54:55 --> Language Class Initialized
INFO - 2016-02-06 18:54:55 --> Config Class Initialized
INFO - 2016-02-06 18:54:55 --> Loader Class Initialized
INFO - 2016-02-06 18:54:55 --> Helper loaded: form_helper
INFO - 2016-02-06 18:54:55 --> Helper loaded: url_helper
INFO - 2016-02-06 18:54:55 --> Helper loaded: general_helper
INFO - 2016-02-06 18:54:55 --> Database Driver Class Initialized
INFO - 2016-02-06 18:54:55 --> Form Validation Class Initialized
DEBUG - 2016-02-06 18:54:55 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 18:54:55 --> Email Class Initialized
INFO - 2016-02-06 18:54:55 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 18:54:55 --> Helper loaded: cookie_helper
INFO - 2016-02-06 18:54:55 --> Helper loaded: language_helper
INFO - 2016-02-06 18:54:55 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 18:54:55 --> Model Class Initialized
INFO - 2016-02-06 18:54:55 --> Helper loaded: inflector_helper
INFO - 2016-02-06 18:54:55 --> Model Class Initialized
INFO - 2016-02-06 18:54:55 --> Helper loaded: date_helper
INFO - 2016-02-06 18:54:55 --> Controller Class Initialized
INFO - 2016-02-06 18:54:55 --> Config Class Initialized
INFO - 2016-02-06 18:54:55 --> Hooks Class Initialized
DEBUG - 2016-02-06 18:54:55 --> UTF-8 Support Enabled
INFO - 2016-02-06 18:54:55 --> Utf8 Class Initialized
INFO - 2016-02-06 18:54:55 --> URI Class Initialized
INFO - 2016-02-06 18:54:55 --> Router Class Initialized
INFO - 2016-02-06 18:54:55 --> Output Class Initialized
INFO - 2016-02-06 18:54:55 --> Security Class Initialized
DEBUG - 2016-02-06 18:54:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 18:54:55 --> Input Class Initialized
INFO - 2016-02-06 18:54:55 --> Language Class Initialized
INFO - 2016-02-06 18:54:55 --> Language Class Initialized
INFO - 2016-02-06 18:54:55 --> Config Class Initialized
INFO - 2016-02-06 18:54:55 --> Loader Class Initialized
INFO - 2016-02-06 18:54:55 --> Helper loaded: form_helper
INFO - 2016-02-06 18:54:55 --> Helper loaded: url_helper
INFO - 2016-02-06 18:54:55 --> Helper loaded: general_helper
INFO - 2016-02-06 18:54:55 --> Database Driver Class Initialized
INFO - 2016-02-06 18:54:55 --> Form Validation Class Initialized
DEBUG - 2016-02-06 18:54:55 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 18:54:55 --> Email Class Initialized
INFO - 2016-02-06 18:54:55 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 18:54:55 --> Helper loaded: cookie_helper
INFO - 2016-02-06 18:54:55 --> Helper loaded: language_helper
INFO - 2016-02-06 18:54:55 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 18:54:55 --> Model Class Initialized
INFO - 2016-02-06 18:54:55 --> Helper loaded: inflector_helper
INFO - 2016-02-06 18:54:55 --> Model Class Initialized
INFO - 2016-02-06 18:54:55 --> Helper loaded: date_helper
INFO - 2016-02-06 18:54:55 --> Controller Class Initialized
INFO - 2016-02-06 18:54:55 --> Config Class Initialized
INFO - 2016-02-06 18:54:55 --> Hooks Class Initialized
DEBUG - 2016-02-06 18:54:55 --> UTF-8 Support Enabled
INFO - 2016-02-06 18:54:55 --> Utf8 Class Initialized
INFO - 2016-02-06 18:54:55 --> URI Class Initialized
INFO - 2016-02-06 18:54:55 --> Router Class Initialized
INFO - 2016-02-06 18:54:55 --> Output Class Initialized
INFO - 2016-02-06 18:54:56 --> Security Class Initialized
DEBUG - 2016-02-06 18:54:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 18:54:56 --> Input Class Initialized
INFO - 2016-02-06 18:54:56 --> Language Class Initialized
INFO - 2016-02-06 18:54:56 --> Language Class Initialized
INFO - 2016-02-06 18:54:56 --> Config Class Initialized
INFO - 2016-02-06 18:54:56 --> Loader Class Initialized
INFO - 2016-02-06 18:54:56 --> Helper loaded: form_helper
INFO - 2016-02-06 18:54:56 --> Helper loaded: url_helper
INFO - 2016-02-06 18:54:56 --> Helper loaded: general_helper
INFO - 2016-02-06 18:54:56 --> Database Driver Class Initialized
INFO - 2016-02-06 18:54:56 --> Form Validation Class Initialized
DEBUG - 2016-02-06 18:54:56 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 18:54:56 --> Email Class Initialized
INFO - 2016-02-06 18:54:56 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 18:54:56 --> Helper loaded: cookie_helper
INFO - 2016-02-06 18:54:56 --> Helper loaded: language_helper
INFO - 2016-02-06 18:54:56 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 18:54:56 --> Model Class Initialized
INFO - 2016-02-06 18:54:56 --> Helper loaded: inflector_helper
INFO - 2016-02-06 18:54:56 --> Model Class Initialized
INFO - 2016-02-06 18:54:56 --> Helper loaded: date_helper
INFO - 2016-02-06 18:54:56 --> Controller Class Initialized
INFO - 2016-02-06 18:54:56 --> Config Class Initialized
INFO - 2016-02-06 18:54:56 --> Hooks Class Initialized
DEBUG - 2016-02-06 18:54:56 --> UTF-8 Support Enabled
INFO - 2016-02-06 18:54:56 --> Utf8 Class Initialized
INFO - 2016-02-06 18:54:56 --> URI Class Initialized
INFO - 2016-02-06 18:54:56 --> Router Class Initialized
INFO - 2016-02-06 18:54:56 --> Output Class Initialized
INFO - 2016-02-06 18:54:56 --> Security Class Initialized
DEBUG - 2016-02-06 18:54:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 18:54:56 --> Input Class Initialized
INFO - 2016-02-06 18:54:56 --> Language Class Initialized
INFO - 2016-02-06 18:54:56 --> Language Class Initialized
INFO - 2016-02-06 18:54:56 --> Config Class Initialized
INFO - 2016-02-06 18:54:56 --> Loader Class Initialized
INFO - 2016-02-06 18:54:56 --> Helper loaded: form_helper
INFO - 2016-02-06 18:54:56 --> Helper loaded: url_helper
INFO - 2016-02-06 18:54:56 --> Helper loaded: general_helper
INFO - 2016-02-06 18:54:56 --> Database Driver Class Initialized
INFO - 2016-02-06 18:54:56 --> Form Validation Class Initialized
DEBUG - 2016-02-06 18:54:56 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 18:54:56 --> Email Class Initialized
INFO - 2016-02-06 18:54:56 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 18:54:56 --> Helper loaded: cookie_helper
INFO - 2016-02-06 18:54:56 --> Helper loaded: language_helper
INFO - 2016-02-06 18:54:56 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 18:54:56 --> Model Class Initialized
INFO - 2016-02-06 18:54:56 --> Helper loaded: inflector_helper
INFO - 2016-02-06 18:54:56 --> Model Class Initialized
INFO - 2016-02-06 18:54:56 --> Helper loaded: date_helper
INFO - 2016-02-06 18:54:56 --> Controller Class Initialized
INFO - 2016-02-06 18:54:56 --> Config Class Initialized
INFO - 2016-02-06 18:54:56 --> Hooks Class Initialized
DEBUG - 2016-02-06 18:54:56 --> UTF-8 Support Enabled
INFO - 2016-02-06 18:54:56 --> Utf8 Class Initialized
INFO - 2016-02-06 18:54:56 --> URI Class Initialized
INFO - 2016-02-06 18:54:56 --> Router Class Initialized
INFO - 2016-02-06 18:54:56 --> Output Class Initialized
INFO - 2016-02-06 18:54:56 --> Security Class Initialized
DEBUG - 2016-02-06 18:54:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 18:54:56 --> Input Class Initialized
INFO - 2016-02-06 18:54:56 --> Language Class Initialized
INFO - 2016-02-06 18:54:56 --> Language Class Initialized
INFO - 2016-02-06 18:54:57 --> Config Class Initialized
INFO - 2016-02-06 18:54:57 --> Loader Class Initialized
INFO - 2016-02-06 18:54:57 --> Helper loaded: form_helper
INFO - 2016-02-06 18:54:57 --> Helper loaded: url_helper
INFO - 2016-02-06 18:54:57 --> Helper loaded: general_helper
INFO - 2016-02-06 18:54:57 --> Database Driver Class Initialized
INFO - 2016-02-06 18:54:57 --> Form Validation Class Initialized
DEBUG - 2016-02-06 18:54:57 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 18:54:57 --> Email Class Initialized
INFO - 2016-02-06 18:54:57 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 18:54:57 --> Helper loaded: cookie_helper
INFO - 2016-02-06 18:54:57 --> Helper loaded: language_helper
INFO - 2016-02-06 18:54:57 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 18:54:57 --> Model Class Initialized
INFO - 2016-02-06 18:54:57 --> Helper loaded: inflector_helper
INFO - 2016-02-06 18:54:57 --> Model Class Initialized
INFO - 2016-02-06 18:54:57 --> Helper loaded: date_helper
INFO - 2016-02-06 18:54:57 --> Controller Class Initialized
INFO - 2016-02-06 18:54:57 --> Config Class Initialized
INFO - 2016-02-06 18:54:57 --> Hooks Class Initialized
DEBUG - 2016-02-06 18:54:57 --> UTF-8 Support Enabled
INFO - 2016-02-06 18:54:57 --> Utf8 Class Initialized
INFO - 2016-02-06 18:54:57 --> URI Class Initialized
INFO - 2016-02-06 18:54:57 --> Router Class Initialized
INFO - 2016-02-06 18:54:57 --> Output Class Initialized
INFO - 2016-02-06 18:54:57 --> Security Class Initialized
DEBUG - 2016-02-06 18:54:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 18:54:57 --> Input Class Initialized
INFO - 2016-02-06 18:54:57 --> Language Class Initialized
INFO - 2016-02-06 18:54:57 --> Language Class Initialized
INFO - 2016-02-06 18:54:57 --> Config Class Initialized
INFO - 2016-02-06 18:54:57 --> Loader Class Initialized
INFO - 2016-02-06 18:54:57 --> Helper loaded: form_helper
INFO - 2016-02-06 18:54:57 --> Helper loaded: url_helper
INFO - 2016-02-06 18:54:57 --> Helper loaded: general_helper
INFO - 2016-02-06 18:54:57 --> Database Driver Class Initialized
INFO - 2016-02-06 18:54:57 --> Form Validation Class Initialized
DEBUG - 2016-02-06 18:54:57 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 18:54:57 --> Email Class Initialized
INFO - 2016-02-06 18:54:57 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 18:54:57 --> Helper loaded: cookie_helper
INFO - 2016-02-06 18:54:57 --> Helper loaded: language_helper
INFO - 2016-02-06 18:54:57 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 18:54:57 --> Model Class Initialized
INFO - 2016-02-06 18:54:57 --> Helper loaded: inflector_helper
INFO - 2016-02-06 18:54:57 --> Model Class Initialized
INFO - 2016-02-06 18:54:57 --> Helper loaded: date_helper
INFO - 2016-02-06 18:54:57 --> Controller Class Initialized
INFO - 2016-02-06 18:54:57 --> Config Class Initialized
INFO - 2016-02-06 18:54:58 --> Hooks Class Initialized
DEBUG - 2016-02-06 18:54:58 --> UTF-8 Support Enabled
INFO - 2016-02-06 18:54:58 --> Utf8 Class Initialized
INFO - 2016-02-06 18:54:58 --> URI Class Initialized
INFO - 2016-02-06 18:54:58 --> Router Class Initialized
INFO - 2016-02-06 18:54:58 --> Output Class Initialized
INFO - 2016-02-06 18:54:58 --> Security Class Initialized
DEBUG - 2016-02-06 18:54:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 18:54:58 --> Input Class Initialized
INFO - 2016-02-06 18:54:58 --> Language Class Initialized
INFO - 2016-02-06 18:54:58 --> Language Class Initialized
INFO - 2016-02-06 18:54:58 --> Config Class Initialized
INFO - 2016-02-06 18:54:58 --> Loader Class Initialized
INFO - 2016-02-06 18:54:58 --> Helper loaded: form_helper
INFO - 2016-02-06 18:54:58 --> Helper loaded: url_helper
INFO - 2016-02-06 18:54:58 --> Helper loaded: general_helper
INFO - 2016-02-06 18:54:58 --> Database Driver Class Initialized
INFO - 2016-02-06 18:54:58 --> Form Validation Class Initialized
DEBUG - 2016-02-06 18:54:58 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 18:54:58 --> Email Class Initialized
INFO - 2016-02-06 18:54:58 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 18:54:58 --> Helper loaded: cookie_helper
INFO - 2016-02-06 18:54:58 --> Helper loaded: language_helper
INFO - 2016-02-06 18:54:58 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 18:54:58 --> Model Class Initialized
INFO - 2016-02-06 18:54:58 --> Helper loaded: inflector_helper
INFO - 2016-02-06 18:54:58 --> Model Class Initialized
INFO - 2016-02-06 18:54:58 --> Helper loaded: date_helper
INFO - 2016-02-06 18:54:58 --> Controller Class Initialized
INFO - 2016-02-06 18:54:58 --> Config Class Initialized
INFO - 2016-02-06 18:54:58 --> Hooks Class Initialized
DEBUG - 2016-02-06 18:54:58 --> UTF-8 Support Enabled
INFO - 2016-02-06 18:54:58 --> Utf8 Class Initialized
INFO - 2016-02-06 18:54:58 --> URI Class Initialized
INFO - 2016-02-06 18:54:58 --> Router Class Initialized
INFO - 2016-02-06 18:54:58 --> Output Class Initialized
INFO - 2016-02-06 18:54:58 --> Security Class Initialized
DEBUG - 2016-02-06 18:54:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 18:54:58 --> Input Class Initialized
INFO - 2016-02-06 18:54:58 --> Language Class Initialized
INFO - 2016-02-06 18:54:58 --> Language Class Initialized
INFO - 2016-02-06 18:54:58 --> Config Class Initialized
INFO - 2016-02-06 18:54:58 --> Loader Class Initialized
INFO - 2016-02-06 18:54:58 --> Helper loaded: form_helper
INFO - 2016-02-06 18:54:58 --> Helper loaded: url_helper
INFO - 2016-02-06 18:54:58 --> Helper loaded: general_helper
INFO - 2016-02-06 18:54:58 --> Database Driver Class Initialized
INFO - 2016-02-06 18:54:58 --> Form Validation Class Initialized
DEBUG - 2016-02-06 18:54:58 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 18:54:58 --> Email Class Initialized
INFO - 2016-02-06 18:54:58 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 18:54:58 --> Helper loaded: cookie_helper
INFO - 2016-02-06 18:54:58 --> Helper loaded: language_helper
INFO - 2016-02-06 18:54:58 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 18:54:58 --> Model Class Initialized
INFO - 2016-02-06 18:54:58 --> Helper loaded: inflector_helper
INFO - 2016-02-06 18:54:58 --> Model Class Initialized
INFO - 2016-02-06 18:54:58 --> Helper loaded: date_helper
INFO - 2016-02-06 18:54:58 --> Controller Class Initialized
INFO - 2016-02-06 18:54:59 --> Config Class Initialized
INFO - 2016-02-06 18:54:59 --> Hooks Class Initialized
DEBUG - 2016-02-06 18:54:59 --> UTF-8 Support Enabled
INFO - 2016-02-06 18:54:59 --> Utf8 Class Initialized
INFO - 2016-02-06 18:54:59 --> URI Class Initialized
INFO - 2016-02-06 18:54:59 --> Router Class Initialized
INFO - 2016-02-06 18:54:59 --> Output Class Initialized
INFO - 2016-02-06 18:54:59 --> Security Class Initialized
DEBUG - 2016-02-06 18:54:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 18:54:59 --> Input Class Initialized
INFO - 2016-02-06 18:54:59 --> Language Class Initialized
INFO - 2016-02-06 18:54:59 --> Language Class Initialized
INFO - 2016-02-06 18:54:59 --> Config Class Initialized
INFO - 2016-02-06 18:54:59 --> Loader Class Initialized
INFO - 2016-02-06 18:54:59 --> Helper loaded: form_helper
INFO - 2016-02-06 18:54:59 --> Helper loaded: url_helper
INFO - 2016-02-06 18:54:59 --> Helper loaded: general_helper
INFO - 2016-02-06 18:54:59 --> Database Driver Class Initialized
INFO - 2016-02-06 18:54:59 --> Form Validation Class Initialized
DEBUG - 2016-02-06 18:54:59 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 18:54:59 --> Email Class Initialized
INFO - 2016-02-06 18:54:59 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 18:54:59 --> Helper loaded: cookie_helper
INFO - 2016-02-06 18:54:59 --> Helper loaded: language_helper
INFO - 2016-02-06 18:54:59 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 18:54:59 --> Model Class Initialized
INFO - 2016-02-06 18:54:59 --> Helper loaded: inflector_helper
INFO - 2016-02-06 18:54:59 --> Model Class Initialized
INFO - 2016-02-06 18:54:59 --> Helper loaded: date_helper
INFO - 2016-02-06 18:54:59 --> Controller Class Initialized
INFO - 2016-02-06 18:54:59 --> Config Class Initialized
INFO - 2016-02-06 18:54:59 --> Hooks Class Initialized
DEBUG - 2016-02-06 18:54:59 --> UTF-8 Support Enabled
INFO - 2016-02-06 18:54:59 --> Utf8 Class Initialized
INFO - 2016-02-06 18:54:59 --> URI Class Initialized
INFO - 2016-02-06 18:54:59 --> Router Class Initialized
INFO - 2016-02-06 18:54:59 --> Output Class Initialized
INFO - 2016-02-06 18:54:59 --> Security Class Initialized
DEBUG - 2016-02-06 18:54:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 18:54:59 --> Input Class Initialized
INFO - 2016-02-06 18:54:59 --> Language Class Initialized
INFO - 2016-02-06 18:54:59 --> Language Class Initialized
INFO - 2016-02-06 18:54:59 --> Config Class Initialized
INFO - 2016-02-06 18:54:59 --> Loader Class Initialized
INFO - 2016-02-06 18:54:59 --> Helper loaded: form_helper
INFO - 2016-02-06 18:54:59 --> Helper loaded: url_helper
INFO - 2016-02-06 18:54:59 --> Helper loaded: general_helper
INFO - 2016-02-06 18:54:59 --> Database Driver Class Initialized
INFO - 2016-02-06 18:54:59 --> Form Validation Class Initialized
DEBUG - 2016-02-06 18:54:59 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 18:54:59 --> Email Class Initialized
INFO - 2016-02-06 18:54:59 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 18:54:59 --> Helper loaded: cookie_helper
INFO - 2016-02-06 18:54:59 --> Helper loaded: language_helper
INFO - 2016-02-06 18:54:59 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 18:54:59 --> Model Class Initialized
INFO - 2016-02-06 18:54:59 --> Helper loaded: inflector_helper
INFO - 2016-02-06 18:54:59 --> Model Class Initialized
INFO - 2016-02-06 18:54:59 --> Helper loaded: date_helper
INFO - 2016-02-06 18:54:59 --> Controller Class Initialized
INFO - 2016-02-06 18:55:00 --> Config Class Initialized
INFO - 2016-02-06 18:55:00 --> Hooks Class Initialized
DEBUG - 2016-02-06 18:55:00 --> UTF-8 Support Enabled
INFO - 2016-02-06 18:55:00 --> Utf8 Class Initialized
INFO - 2016-02-06 18:55:00 --> URI Class Initialized
INFO - 2016-02-06 18:55:00 --> Router Class Initialized
INFO - 2016-02-06 18:55:00 --> Output Class Initialized
INFO - 2016-02-06 18:55:00 --> Security Class Initialized
DEBUG - 2016-02-06 18:55:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 18:55:00 --> Input Class Initialized
INFO - 2016-02-06 18:55:00 --> Language Class Initialized
INFO - 2016-02-06 18:55:00 --> Language Class Initialized
INFO - 2016-02-06 18:55:00 --> Config Class Initialized
INFO - 2016-02-06 18:55:00 --> Loader Class Initialized
INFO - 2016-02-06 18:55:00 --> Helper loaded: form_helper
INFO - 2016-02-06 18:55:00 --> Helper loaded: url_helper
INFO - 2016-02-06 18:55:00 --> Helper loaded: general_helper
INFO - 2016-02-06 18:55:00 --> Database Driver Class Initialized
INFO - 2016-02-06 18:55:00 --> Form Validation Class Initialized
DEBUG - 2016-02-06 18:55:00 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 18:55:00 --> Email Class Initialized
INFO - 2016-02-06 18:55:00 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 18:55:00 --> Helper loaded: cookie_helper
INFO - 2016-02-06 18:55:00 --> Helper loaded: language_helper
INFO - 2016-02-06 18:55:00 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 18:55:00 --> Model Class Initialized
INFO - 2016-02-06 18:55:00 --> Helper loaded: inflector_helper
INFO - 2016-02-06 18:55:00 --> Model Class Initialized
INFO - 2016-02-06 18:55:00 --> Helper loaded: date_helper
INFO - 2016-02-06 18:55:00 --> Controller Class Initialized
INFO - 2016-02-06 18:55:07 --> Config Class Initialized
INFO - 2016-02-06 18:55:07 --> Hooks Class Initialized
DEBUG - 2016-02-06 18:55:07 --> UTF-8 Support Enabled
INFO - 2016-02-06 18:55:07 --> Utf8 Class Initialized
INFO - 2016-02-06 18:55:07 --> URI Class Initialized
INFO - 2016-02-06 18:55:07 --> Router Class Initialized
INFO - 2016-02-06 18:55:07 --> Output Class Initialized
INFO - 2016-02-06 18:55:07 --> Security Class Initialized
DEBUG - 2016-02-06 18:55:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 18:55:07 --> Input Class Initialized
INFO - 2016-02-06 18:55:07 --> Language Class Initialized
INFO - 2016-02-06 18:55:07 --> Language Class Initialized
INFO - 2016-02-06 18:55:07 --> Config Class Initialized
INFO - 2016-02-06 18:55:07 --> Loader Class Initialized
INFO - 2016-02-06 18:55:07 --> Helper loaded: form_helper
INFO - 2016-02-06 18:55:07 --> Helper loaded: url_helper
INFO - 2016-02-06 18:55:07 --> Helper loaded: general_helper
INFO - 2016-02-06 18:55:07 --> Database Driver Class Initialized
INFO - 2016-02-06 18:55:07 --> Form Validation Class Initialized
DEBUG - 2016-02-06 18:55:07 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 18:55:07 --> Email Class Initialized
INFO - 2016-02-06 18:55:07 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 18:55:07 --> Helper loaded: cookie_helper
INFO - 2016-02-06 18:55:07 --> Helper loaded: language_helper
INFO - 2016-02-06 18:55:07 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 18:55:07 --> Model Class Initialized
INFO - 2016-02-06 18:55:07 --> Helper loaded: inflector_helper
INFO - 2016-02-06 18:55:07 --> Model Class Initialized
INFO - 2016-02-06 18:55:07 --> Helper loaded: date_helper
INFO - 2016-02-06 18:55:07 --> Controller Class Initialized
INFO - 2016-02-06 18:55:07 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 18:55:07 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 18:55:07 --> Model Class Initialized
DEBUG - 2016-02-06 18:55:07 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 18:55:07 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/login.php
DEBUG - 2016-02-06 18:55:07 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 18:55:07 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 18:55:07 --> Profiler Class Initialized
INFO - 2016-02-06 18:55:07 --> Helper loaded: text_helper
INFO - 2016-02-06 18:55:07 --> Final output sent to browser
DEBUG - 2016-02-06 18:55:07 --> Total execution time: 0.4338
INFO - 2016-02-06 18:57:33 --> Config Class Initialized
INFO - 2016-02-06 18:57:33 --> Hooks Class Initialized
DEBUG - 2016-02-06 18:57:33 --> UTF-8 Support Enabled
INFO - 2016-02-06 18:57:33 --> Utf8 Class Initialized
INFO - 2016-02-06 18:57:33 --> URI Class Initialized
INFO - 2016-02-06 18:57:33 --> Router Class Initialized
INFO - 2016-02-06 18:57:33 --> Output Class Initialized
INFO - 2016-02-06 18:57:33 --> Security Class Initialized
DEBUG - 2016-02-06 18:57:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 18:57:33 --> Input Class Initialized
INFO - 2016-02-06 18:57:33 --> Language Class Initialized
INFO - 2016-02-06 18:57:33 --> Language Class Initialized
INFO - 2016-02-06 18:57:33 --> Config Class Initialized
INFO - 2016-02-06 18:57:33 --> Loader Class Initialized
INFO - 2016-02-06 18:57:33 --> Helper loaded: form_helper
INFO - 2016-02-06 18:57:33 --> Helper loaded: url_helper
INFO - 2016-02-06 18:57:33 --> Helper loaded: general_helper
INFO - 2016-02-06 18:57:33 --> Database Driver Class Initialized
INFO - 2016-02-06 18:57:33 --> Form Validation Class Initialized
DEBUG - 2016-02-06 18:57:33 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 18:57:33 --> Email Class Initialized
INFO - 2016-02-06 18:57:33 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 18:57:33 --> Helper loaded: cookie_helper
INFO - 2016-02-06 18:57:33 --> Helper loaded: language_helper
INFO - 2016-02-06 18:57:33 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 18:57:33 --> Model Class Initialized
INFO - 2016-02-06 18:57:33 --> Helper loaded: inflector_helper
INFO - 2016-02-06 18:57:33 --> Model Class Initialized
INFO - 2016-02-06 18:57:33 --> Helper loaded: date_helper
INFO - 2016-02-06 18:57:33 --> Controller Class Initialized
DEBUG - 2016-02-06 18:57:33 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 18:57:33 --> Model Class Initialized
DEBUG - 2016-02-06 18:57:33 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
ERROR - 2016-02-06 18:57:33 --> Could not find the language line "login_heading"
ERROR - 2016-02-06 18:57:33 --> Could not find the language line "login_subheading"
ERROR - 2016-02-06 18:57:33 --> Could not find the language line "login_identity_label"
ERROR - 2016-02-06 18:57:33 --> Could not find the language line "login_password_label"
ERROR - 2016-02-06 18:57:33 --> Could not find the language line "login_remember_label"
ERROR - 2016-02-06 18:57:33 --> Could not find the language line "login_submit_btn"
ERROR - 2016-02-06 18:57:33 --> Could not find the language line "login_forgot_password"
DEBUG - 2016-02-06 18:57:33 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/login.php
DEBUG - 2016-02-06 18:57:33 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 18:57:33 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 18:57:33 --> Profiler Class Initialized
INFO - 2016-02-06 18:57:33 --> Helper loaded: text_helper
INFO - 2016-02-06 18:57:33 --> Final output sent to browser
DEBUG - 2016-02-06 18:57:33 --> Total execution time: 0.4700
INFO - 2016-02-06 18:57:42 --> Config Class Initialized
INFO - 2016-02-06 18:57:42 --> Hooks Class Initialized
DEBUG - 2016-02-06 18:57:42 --> UTF-8 Support Enabled
INFO - 2016-02-06 18:57:42 --> Utf8 Class Initialized
INFO - 2016-02-06 18:57:42 --> URI Class Initialized
INFO - 2016-02-06 18:57:42 --> Router Class Initialized
INFO - 2016-02-06 18:57:42 --> Output Class Initialized
INFO - 2016-02-06 18:57:42 --> Security Class Initialized
DEBUG - 2016-02-06 18:57:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 18:57:42 --> Input Class Initialized
INFO - 2016-02-06 18:57:42 --> Language Class Initialized
INFO - 2016-02-06 18:57:42 --> Language Class Initialized
INFO - 2016-02-06 18:57:42 --> Config Class Initialized
INFO - 2016-02-06 18:57:42 --> Loader Class Initialized
INFO - 2016-02-06 18:57:42 --> Helper loaded: form_helper
INFO - 2016-02-06 18:57:42 --> Helper loaded: url_helper
INFO - 2016-02-06 18:57:42 --> Helper loaded: general_helper
INFO - 2016-02-06 18:57:42 --> Database Driver Class Initialized
INFO - 2016-02-06 18:57:42 --> Form Validation Class Initialized
DEBUG - 2016-02-06 18:57:42 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 18:57:42 --> Email Class Initialized
INFO - 2016-02-06 18:57:42 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 18:57:42 --> Helper loaded: cookie_helper
INFO - 2016-02-06 18:57:42 --> Helper loaded: language_helper
INFO - 2016-02-06 18:57:42 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 18:57:42 --> Model Class Initialized
INFO - 2016-02-06 18:57:42 --> Helper loaded: inflector_helper
INFO - 2016-02-06 18:57:42 --> Model Class Initialized
INFO - 2016-02-06 18:57:42 --> Helper loaded: date_helper
INFO - 2016-02-06 18:57:42 --> Controller Class Initialized
INFO - 2016-02-06 18:57:42 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 18:57:42 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 18:57:42 --> Model Class Initialized
DEBUG - 2016-02-06 18:57:42 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 18:57:42 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/login.php
DEBUG - 2016-02-06 18:57:42 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 18:57:42 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 18:57:42 --> Profiler Class Initialized
INFO - 2016-02-06 18:57:42 --> Helper loaded: text_helper
INFO - 2016-02-06 18:57:42 --> Final output sent to browser
DEBUG - 2016-02-06 18:57:42 --> Total execution time: 0.4177
INFO - 2016-02-06 18:57:49 --> Config Class Initialized
INFO - 2016-02-06 18:57:49 --> Hooks Class Initialized
DEBUG - 2016-02-06 18:57:49 --> UTF-8 Support Enabled
INFO - 2016-02-06 18:57:49 --> Utf8 Class Initialized
INFO - 2016-02-06 18:57:49 --> URI Class Initialized
INFO - 2016-02-06 18:57:49 --> Router Class Initialized
INFO - 2016-02-06 18:57:49 --> Output Class Initialized
INFO - 2016-02-06 18:57:49 --> Security Class Initialized
DEBUG - 2016-02-06 18:57:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 18:57:49 --> Input Class Initialized
INFO - 2016-02-06 18:57:49 --> Language Class Initialized
INFO - 2016-02-06 18:57:49 --> Language Class Initialized
INFO - 2016-02-06 18:57:49 --> Config Class Initialized
INFO - 2016-02-06 18:57:49 --> Loader Class Initialized
INFO - 2016-02-06 18:57:49 --> Helper loaded: form_helper
INFO - 2016-02-06 18:57:49 --> Helper loaded: url_helper
INFO - 2016-02-06 18:57:49 --> Helper loaded: general_helper
INFO - 2016-02-06 18:57:49 --> Database Driver Class Initialized
INFO - 2016-02-06 18:57:49 --> Form Validation Class Initialized
DEBUG - 2016-02-06 18:57:49 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 18:57:49 --> Email Class Initialized
INFO - 2016-02-06 18:57:49 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 18:57:49 --> Helper loaded: cookie_helper
INFO - 2016-02-06 18:57:49 --> Helper loaded: language_helper
INFO - 2016-02-06 18:57:49 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 18:57:49 --> Model Class Initialized
INFO - 2016-02-06 18:57:49 --> Helper loaded: inflector_helper
INFO - 2016-02-06 18:57:49 --> Model Class Initialized
INFO - 2016-02-06 18:57:49 --> Helper loaded: date_helper
INFO - 2016-02-06 18:57:49 --> Controller Class Initialized
INFO - 2016-02-06 18:57:49 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 18:57:49 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 18:57:50 --> Model Class Initialized
INFO - 2016-02-06 18:57:50 --> Language file loaded: language/dutch/form_validation_lang.php
DEBUG - 2016-02-06 18:57:50 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 18:57:50 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/login.php
DEBUG - 2016-02-06 18:57:50 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 18:57:50 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 18:57:50 --> Profiler Class Initialized
INFO - 2016-02-06 18:57:50 --> Helper loaded: text_helper
INFO - 2016-02-06 18:57:50 --> Final output sent to browser
DEBUG - 2016-02-06 18:57:50 --> Total execution time: 0.4394
INFO - 2016-02-06 19:00:32 --> Config Class Initialized
INFO - 2016-02-06 19:00:32 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:00:32 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:00:32 --> Utf8 Class Initialized
INFO - 2016-02-06 19:00:32 --> URI Class Initialized
INFO - 2016-02-06 19:00:32 --> Router Class Initialized
INFO - 2016-02-06 19:00:32 --> Output Class Initialized
INFO - 2016-02-06 19:00:32 --> Security Class Initialized
DEBUG - 2016-02-06 19:00:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:00:32 --> Input Class Initialized
INFO - 2016-02-06 19:00:32 --> Language Class Initialized
INFO - 2016-02-06 19:00:32 --> Language Class Initialized
INFO - 2016-02-06 19:00:32 --> Config Class Initialized
INFO - 2016-02-06 19:00:32 --> Loader Class Initialized
INFO - 2016-02-06 19:00:32 --> Helper loaded: form_helper
INFO - 2016-02-06 19:00:32 --> Helper loaded: url_helper
INFO - 2016-02-06 19:00:32 --> Helper loaded: general_helper
INFO - 2016-02-06 19:00:32 --> Database Driver Class Initialized
INFO - 2016-02-06 19:00:32 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:00:32 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:00:32 --> Email Class Initialized
INFO - 2016-02-06 19:00:32 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:00:32 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:00:32 --> Helper loaded: language_helper
INFO - 2016-02-06 19:00:32 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:00:32 --> Model Class Initialized
INFO - 2016-02-06 19:00:32 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:00:32 --> Model Class Initialized
INFO - 2016-02-06 19:00:32 --> Helper loaded: date_helper
INFO - 2016-02-06 19:00:32 --> Controller Class Initialized
INFO - 2016-02-06 19:00:32 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 19:00:32 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 19:00:32 --> Model Class Initialized
INFO - 2016-02-06 19:00:32 --> Language file loaded: language/dutch/form_validation_lang.php
DEBUG - 2016-02-06 19:00:33 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:00:33 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/login.php
DEBUG - 2016-02-06 19:00:33 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:00:33 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 19:00:33 --> Profiler Class Initialized
INFO - 2016-02-06 19:00:33 --> Helper loaded: text_helper
INFO - 2016-02-06 19:00:33 --> Final output sent to browser
DEBUG - 2016-02-06 19:00:33 --> Total execution time: 0.4348
INFO - 2016-02-06 19:00:34 --> Config Class Initialized
INFO - 2016-02-06 19:00:34 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:00:34 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:00:34 --> Utf8 Class Initialized
INFO - 2016-02-06 19:00:34 --> URI Class Initialized
INFO - 2016-02-06 19:00:34 --> Router Class Initialized
INFO - 2016-02-06 19:00:34 --> Output Class Initialized
INFO - 2016-02-06 19:00:34 --> Security Class Initialized
DEBUG - 2016-02-06 19:00:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:00:34 --> Input Class Initialized
INFO - 2016-02-06 19:00:34 --> Language Class Initialized
INFO - 2016-02-06 19:00:34 --> Language Class Initialized
INFO - 2016-02-06 19:00:34 --> Config Class Initialized
INFO - 2016-02-06 19:00:34 --> Loader Class Initialized
INFO - 2016-02-06 19:00:34 --> Helper loaded: form_helper
INFO - 2016-02-06 19:00:34 --> Helper loaded: url_helper
INFO - 2016-02-06 19:00:34 --> Helper loaded: general_helper
INFO - 2016-02-06 19:00:34 --> Database Driver Class Initialized
INFO - 2016-02-06 19:00:34 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:00:34 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:00:34 --> Email Class Initialized
INFO - 2016-02-06 19:00:34 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:00:35 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:00:35 --> Helper loaded: language_helper
INFO - 2016-02-06 19:00:35 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:00:35 --> Model Class Initialized
INFO - 2016-02-06 19:00:35 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:00:35 --> Model Class Initialized
INFO - 2016-02-06 19:00:35 --> Helper loaded: date_helper
INFO - 2016-02-06 19:00:35 --> Controller Class Initialized
INFO - 2016-02-06 19:00:35 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 19:00:35 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 19:00:35 --> Model Class Initialized
INFO - 2016-02-06 19:00:35 --> Language file loaded: language/dutch/form_validation_lang.php
DEBUG - 2016-02-06 19:00:35 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:00:35 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/login.php
DEBUG - 2016-02-06 19:00:35 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:00:35 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 19:00:35 --> Profiler Class Initialized
INFO - 2016-02-06 19:00:35 --> Helper loaded: text_helper
INFO - 2016-02-06 19:00:35 --> Final output sent to browser
DEBUG - 2016-02-06 19:00:35 --> Total execution time: 0.4610
INFO - 2016-02-06 19:00:38 --> Config Class Initialized
INFO - 2016-02-06 19:00:38 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:00:38 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:00:38 --> Utf8 Class Initialized
INFO - 2016-02-06 19:00:38 --> URI Class Initialized
INFO - 2016-02-06 19:00:38 --> Router Class Initialized
INFO - 2016-02-06 19:00:38 --> Output Class Initialized
INFO - 2016-02-06 19:00:38 --> Security Class Initialized
DEBUG - 2016-02-06 19:00:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:00:38 --> Input Class Initialized
INFO - 2016-02-06 19:00:38 --> Language Class Initialized
INFO - 2016-02-06 19:00:38 --> Language Class Initialized
INFO - 2016-02-06 19:00:38 --> Config Class Initialized
INFO - 2016-02-06 19:00:38 --> Loader Class Initialized
INFO - 2016-02-06 19:00:38 --> Helper loaded: form_helper
INFO - 2016-02-06 19:00:38 --> Helper loaded: url_helper
INFO - 2016-02-06 19:00:38 --> Helper loaded: general_helper
INFO - 2016-02-06 19:00:38 --> Database Driver Class Initialized
INFO - 2016-02-06 19:00:38 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:00:38 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:00:38 --> Email Class Initialized
INFO - 2016-02-06 19:00:38 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:00:38 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:00:38 --> Helper loaded: language_helper
INFO - 2016-02-06 19:00:38 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:00:38 --> Model Class Initialized
INFO - 2016-02-06 19:00:38 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:00:38 --> Model Class Initialized
INFO - 2016-02-06 19:00:38 --> Helper loaded: date_helper
INFO - 2016-02-06 19:00:38 --> Controller Class Initialized
INFO - 2016-02-06 19:00:38 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 19:00:38 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 19:00:38 --> Model Class Initialized
INFO - 2016-02-06 19:00:38 --> Language file loaded: language/dutch/form_validation_lang.php
INFO - 2016-02-06 19:00:39 --> Config Class Initialized
INFO - 2016-02-06 19:00:39 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:00:39 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:00:39 --> Utf8 Class Initialized
INFO - 2016-02-06 19:00:39 --> URI Class Initialized
INFO - 2016-02-06 19:00:39 --> Router Class Initialized
INFO - 2016-02-06 19:00:39 --> Output Class Initialized
INFO - 2016-02-06 19:00:39 --> Security Class Initialized
DEBUG - 2016-02-06 19:00:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:00:39 --> Input Class Initialized
INFO - 2016-02-06 19:00:39 --> Language Class Initialized
INFO - 2016-02-06 19:00:39 --> Language Class Initialized
INFO - 2016-02-06 19:00:39 --> Config Class Initialized
INFO - 2016-02-06 19:00:39 --> Loader Class Initialized
INFO - 2016-02-06 19:00:39 --> Helper loaded: form_helper
INFO - 2016-02-06 19:00:39 --> Helper loaded: url_helper
INFO - 2016-02-06 19:00:39 --> Helper loaded: general_helper
INFO - 2016-02-06 19:00:39 --> Database Driver Class Initialized
INFO - 2016-02-06 19:00:39 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:00:39 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:00:39 --> Email Class Initialized
INFO - 2016-02-06 19:00:39 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:00:39 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:00:39 --> Helper loaded: language_helper
INFO - 2016-02-06 19:00:39 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:00:39 --> Model Class Initialized
INFO - 2016-02-06 19:00:39 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:00:39 --> Model Class Initialized
INFO - 2016-02-06 19:00:39 --> Helper loaded: date_helper
INFO - 2016-02-06 19:00:39 --> Controller Class Initialized
INFO - 2016-02-06 19:00:39 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 19:00:39 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 19:00:39 --> Model Class Initialized
DEBUG - 2016-02-06 19:00:39 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:00:39 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/login.php
DEBUG - 2016-02-06 19:00:39 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:00:39 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 19:00:39 --> Profiler Class Initialized
INFO - 2016-02-06 19:00:39 --> Helper loaded: text_helper
INFO - 2016-02-06 19:00:39 --> Final output sent to browser
DEBUG - 2016-02-06 19:00:39 --> Total execution time: 0.4758
INFO - 2016-02-06 19:01:52 --> Config Class Initialized
INFO - 2016-02-06 19:01:52 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:01:52 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:01:52 --> Utf8 Class Initialized
INFO - 2016-02-06 19:01:52 --> URI Class Initialized
INFO - 2016-02-06 19:01:52 --> Router Class Initialized
INFO - 2016-02-06 19:01:52 --> Output Class Initialized
INFO - 2016-02-06 19:01:52 --> Security Class Initialized
DEBUG - 2016-02-06 19:01:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:01:52 --> Input Class Initialized
INFO - 2016-02-06 19:01:52 --> Language Class Initialized
INFO - 2016-02-06 19:01:52 --> Language Class Initialized
INFO - 2016-02-06 19:01:52 --> Config Class Initialized
INFO - 2016-02-06 19:01:53 --> Loader Class Initialized
INFO - 2016-02-06 19:01:53 --> Helper loaded: form_helper
INFO - 2016-02-06 19:01:53 --> Helper loaded: url_helper
INFO - 2016-02-06 19:01:53 --> Helper loaded: general_helper
INFO - 2016-02-06 19:01:53 --> Database Driver Class Initialized
INFO - 2016-02-06 19:01:53 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:01:53 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:01:53 --> Email Class Initialized
INFO - 2016-02-06 19:01:53 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:01:53 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:01:53 --> Helper loaded: language_helper
INFO - 2016-02-06 19:01:53 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:01:53 --> Model Class Initialized
INFO - 2016-02-06 19:01:53 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:01:53 --> Model Class Initialized
INFO - 2016-02-06 19:01:53 --> Helper loaded: date_helper
INFO - 2016-02-06 19:01:53 --> Controller Class Initialized
INFO - 2016-02-06 19:01:53 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 19:01:53 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 19:01:53 --> Model Class Initialized
DEBUG - 2016-02-06 19:01:53 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:01:53 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/login.php
DEBUG - 2016-02-06 19:01:53 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:01:53 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 19:01:53 --> Profiler Class Initialized
INFO - 2016-02-06 19:01:53 --> Helper loaded: text_helper
INFO - 2016-02-06 19:01:53 --> Final output sent to browser
DEBUG - 2016-02-06 19:01:53 --> Total execution time: 0.4336
INFO - 2016-02-06 19:01:53 --> Config Class Initialized
INFO - 2016-02-06 19:01:53 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:01:53 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:01:53 --> Utf8 Class Initialized
INFO - 2016-02-06 19:01:53 --> URI Class Initialized
INFO - 2016-02-06 19:01:53 --> Router Class Initialized
INFO - 2016-02-06 19:01:53 --> Output Class Initialized
INFO - 2016-02-06 19:01:54 --> Security Class Initialized
DEBUG - 2016-02-06 19:01:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:01:54 --> Input Class Initialized
INFO - 2016-02-06 19:01:54 --> Language Class Initialized
INFO - 2016-02-06 19:01:54 --> Language Class Initialized
INFO - 2016-02-06 19:01:54 --> Config Class Initialized
INFO - 2016-02-06 19:01:54 --> Loader Class Initialized
INFO - 2016-02-06 19:01:54 --> Helper loaded: form_helper
INFO - 2016-02-06 19:01:54 --> Helper loaded: url_helper
INFO - 2016-02-06 19:01:54 --> Helper loaded: general_helper
INFO - 2016-02-06 19:01:54 --> Database Driver Class Initialized
INFO - 2016-02-06 19:01:54 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:01:54 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:01:54 --> Email Class Initialized
INFO - 2016-02-06 19:01:54 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:01:54 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:01:54 --> Helper loaded: language_helper
INFO - 2016-02-06 19:01:54 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:01:54 --> Model Class Initialized
INFO - 2016-02-06 19:01:54 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:01:54 --> Model Class Initialized
INFO - 2016-02-06 19:01:54 --> Helper loaded: date_helper
INFO - 2016-02-06 19:01:54 --> Controller Class Initialized
INFO - 2016-02-06 19:01:54 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 19:01:54 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 19:01:54 --> Model Class Initialized
INFO - 2016-02-06 19:01:54 --> Language file loaded: language/dutch/form_validation_lang.php
DEBUG - 2016-02-06 19:01:54 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:01:54 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/login.php
DEBUG - 2016-02-06 19:01:54 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:01:54 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 19:01:54 --> Profiler Class Initialized
INFO - 2016-02-06 19:01:54 --> Helper loaded: text_helper
INFO - 2016-02-06 19:01:54 --> Final output sent to browser
DEBUG - 2016-02-06 19:01:54 --> Total execution time: 0.4253
INFO - 2016-02-06 19:02:13 --> Config Class Initialized
INFO - 2016-02-06 19:02:13 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:02:13 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:02:13 --> Utf8 Class Initialized
INFO - 2016-02-06 19:02:13 --> URI Class Initialized
INFO - 2016-02-06 19:02:13 --> Router Class Initialized
INFO - 2016-02-06 19:02:13 --> Output Class Initialized
INFO - 2016-02-06 19:02:13 --> Security Class Initialized
DEBUG - 2016-02-06 19:02:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:02:13 --> Input Class Initialized
INFO - 2016-02-06 19:02:13 --> Language Class Initialized
INFO - 2016-02-06 19:02:13 --> Language Class Initialized
INFO - 2016-02-06 19:02:13 --> Config Class Initialized
INFO - 2016-02-06 19:02:13 --> Loader Class Initialized
INFO - 2016-02-06 19:02:13 --> Helper loaded: form_helper
INFO - 2016-02-06 19:02:13 --> Helper loaded: url_helper
INFO - 2016-02-06 19:02:13 --> Helper loaded: general_helper
INFO - 2016-02-06 19:02:13 --> Database Driver Class Initialized
INFO - 2016-02-06 19:02:13 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:02:13 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:02:13 --> Email Class Initialized
INFO - 2016-02-06 19:02:13 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:02:13 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:02:13 --> Helper loaded: language_helper
INFO - 2016-02-06 19:02:13 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:02:13 --> Model Class Initialized
INFO - 2016-02-06 19:02:13 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:02:13 --> Model Class Initialized
INFO - 2016-02-06 19:02:13 --> Helper loaded: date_helper
INFO - 2016-02-06 19:02:13 --> Controller Class Initialized
INFO - 2016-02-06 19:02:14 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 19:02:14 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 19:02:14 --> Model Class Initialized
INFO - 2016-02-06 19:02:14 --> Language file loaded: language/dutch/form_validation_lang.php
INFO - 2016-02-06 19:02:14 --> Config Class Initialized
INFO - 2016-02-06 19:02:14 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:02:14 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:02:14 --> Utf8 Class Initialized
INFO - 2016-02-06 19:02:14 --> URI Class Initialized
DEBUG - 2016-02-06 19:02:14 --> No URI present. Default controller set.
INFO - 2016-02-06 19:02:14 --> Router Class Initialized
INFO - 2016-02-06 19:02:14 --> Output Class Initialized
INFO - 2016-02-06 19:02:14 --> Security Class Initialized
DEBUG - 2016-02-06 19:02:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:02:14 --> Input Class Initialized
INFO - 2016-02-06 19:02:14 --> Language Class Initialized
INFO - 2016-02-06 19:02:14 --> Language Class Initialized
INFO - 2016-02-06 19:02:14 --> Config Class Initialized
INFO - 2016-02-06 19:02:14 --> Loader Class Initialized
INFO - 2016-02-06 19:02:14 --> Helper loaded: form_helper
INFO - 2016-02-06 19:02:14 --> Helper loaded: url_helper
INFO - 2016-02-06 19:02:14 --> Helper loaded: general_helper
INFO - 2016-02-06 19:02:14 --> Database Driver Class Initialized
INFO - 2016-02-06 19:02:14 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:02:14 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:02:14 --> Email Class Initialized
INFO - 2016-02-06 19:02:14 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:02:14 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:02:14 --> Helper loaded: language_helper
INFO - 2016-02-06 19:02:14 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:02:14 --> Model Class Initialized
INFO - 2016-02-06 19:02:14 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:02:14 --> Model Class Initialized
INFO - 2016-02-06 19:02:14 --> Helper loaded: date_helper
INFO - 2016-02-06 19:02:14 --> Controller Class Initialized
DEBUG - 2016-02-06 19:02:14 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:02:14 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dashboard/views/index.php
DEBUG - 2016-02-06 19:02:14 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:02:14 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 19:02:14 --> Profiler Class Initialized
INFO - 2016-02-06 19:02:14 --> Helper loaded: text_helper
INFO - 2016-02-06 19:02:14 --> Final output sent to browser
DEBUG - 2016-02-06 19:02:14 --> Total execution time: 0.6666
INFO - 2016-02-06 19:03:40 --> Config Class Initialized
INFO - 2016-02-06 19:03:40 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:03:40 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:03:40 --> Utf8 Class Initialized
INFO - 2016-02-06 19:03:40 --> URI Class Initialized
DEBUG - 2016-02-06 19:03:40 --> No URI present. Default controller set.
INFO - 2016-02-06 19:03:40 --> Router Class Initialized
INFO - 2016-02-06 19:03:40 --> Output Class Initialized
INFO - 2016-02-06 19:03:40 --> Security Class Initialized
DEBUG - 2016-02-06 19:03:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:03:40 --> Input Class Initialized
INFO - 2016-02-06 19:03:40 --> Language Class Initialized
INFO - 2016-02-06 19:03:40 --> Language Class Initialized
INFO - 2016-02-06 19:03:40 --> Config Class Initialized
INFO - 2016-02-06 19:03:40 --> Loader Class Initialized
INFO - 2016-02-06 19:03:40 --> Helper loaded: form_helper
INFO - 2016-02-06 19:03:40 --> Helper loaded: url_helper
INFO - 2016-02-06 19:03:40 --> Helper loaded: general_helper
INFO - 2016-02-06 19:03:40 --> Database Driver Class Initialized
INFO - 2016-02-06 19:03:41 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:03:41 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:03:41 --> Email Class Initialized
INFO - 2016-02-06 19:03:41 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:03:41 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:03:41 --> Helper loaded: language_helper
INFO - 2016-02-06 19:03:41 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:03:41 --> Model Class Initialized
INFO - 2016-02-06 19:03:41 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:03:41 --> Model Class Initialized
INFO - 2016-02-06 19:03:41 --> Helper loaded: date_helper
INFO - 2016-02-06 19:03:41 --> Controller Class Initialized
DEBUG - 2016-02-06 19:03:41 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:03:41 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dashboard/views/index.php
DEBUG - 2016-02-06 19:03:41 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:03:41 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 19:03:41 --> Profiler Class Initialized
INFO - 2016-02-06 19:03:41 --> Helper loaded: text_helper
INFO - 2016-02-06 19:03:41 --> Final output sent to browser
DEBUG - 2016-02-06 19:03:41 --> Total execution time: 0.4489
INFO - 2016-02-06 19:04:08 --> Config Class Initialized
INFO - 2016-02-06 19:04:08 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:04:08 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:04:08 --> Utf8 Class Initialized
INFO - 2016-02-06 19:04:08 --> URI Class Initialized
DEBUG - 2016-02-06 19:04:08 --> No URI present. Default controller set.
INFO - 2016-02-06 19:04:08 --> Router Class Initialized
INFO - 2016-02-06 19:04:08 --> Output Class Initialized
INFO - 2016-02-06 19:04:08 --> Security Class Initialized
DEBUG - 2016-02-06 19:04:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:04:08 --> Input Class Initialized
INFO - 2016-02-06 19:04:08 --> Language Class Initialized
INFO - 2016-02-06 19:04:08 --> Language Class Initialized
INFO - 2016-02-06 19:04:08 --> Config Class Initialized
INFO - 2016-02-06 19:04:08 --> Loader Class Initialized
INFO - 2016-02-06 19:04:08 --> Helper loaded: form_helper
INFO - 2016-02-06 19:04:09 --> Helper loaded: url_helper
INFO - 2016-02-06 19:04:09 --> Helper loaded: general_helper
INFO - 2016-02-06 19:04:09 --> Database Driver Class Initialized
INFO - 2016-02-06 19:04:09 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:04:09 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:04:09 --> Email Class Initialized
INFO - 2016-02-06 19:04:09 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:04:09 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:04:09 --> Helper loaded: language_helper
INFO - 2016-02-06 19:04:09 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:04:09 --> Model Class Initialized
INFO - 2016-02-06 19:04:09 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:04:09 --> Model Class Initialized
INFO - 2016-02-06 19:04:09 --> Helper loaded: date_helper
INFO - 2016-02-06 19:04:09 --> Controller Class Initialized
DEBUG - 2016-02-06 19:04:09 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:04:09 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dashboard/views/index.php
DEBUG - 2016-02-06 19:04:09 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:04:09 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 19:04:09 --> Profiler Class Initialized
INFO - 2016-02-06 19:04:09 --> Helper loaded: text_helper
INFO - 2016-02-06 19:04:09 --> Final output sent to browser
DEBUG - 2016-02-06 19:04:09 --> Total execution time: 0.4287
INFO - 2016-02-06 19:04:11 --> Config Class Initialized
INFO - 2016-02-06 19:04:11 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:04:11 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:04:11 --> Utf8 Class Initialized
INFO - 2016-02-06 19:04:11 --> URI Class Initialized
INFO - 2016-02-06 19:04:11 --> Router Class Initialized
INFO - 2016-02-06 19:04:11 --> Output Class Initialized
INFO - 2016-02-06 19:04:11 --> Security Class Initialized
DEBUG - 2016-02-06 19:04:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:04:11 --> Input Class Initialized
INFO - 2016-02-06 19:04:11 --> Language Class Initialized
INFO - 2016-02-06 19:04:11 --> Language Class Initialized
INFO - 2016-02-06 19:04:11 --> Config Class Initialized
INFO - 2016-02-06 19:04:11 --> Loader Class Initialized
INFO - 2016-02-06 19:04:11 --> Helper loaded: form_helper
INFO - 2016-02-06 19:04:11 --> Helper loaded: url_helper
INFO - 2016-02-06 19:04:11 --> Helper loaded: general_helper
INFO - 2016-02-06 19:04:11 --> Database Driver Class Initialized
INFO - 2016-02-06 19:04:12 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:04:12 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:04:12 --> Email Class Initialized
INFO - 2016-02-06 19:04:12 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:04:12 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:04:12 --> Helper loaded: language_helper
INFO - 2016-02-06 19:04:12 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:04:12 --> Model Class Initialized
INFO - 2016-02-06 19:04:12 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:04:12 --> Model Class Initialized
INFO - 2016-02-06 19:04:12 --> Helper loaded: date_helper
INFO - 2016-02-06 19:04:12 --> Controller Class Initialized
INFO - 2016-02-06 19:04:12 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 19:04:12 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 19:04:12 --> Model Class Initialized
INFO - 2016-02-06 19:04:12 --> Config Class Initialized
INFO - 2016-02-06 19:04:12 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:04:12 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:04:12 --> Utf8 Class Initialized
INFO - 2016-02-06 19:04:12 --> URI Class Initialized
INFO - 2016-02-06 19:04:12 --> Router Class Initialized
INFO - 2016-02-06 19:04:12 --> Output Class Initialized
INFO - 2016-02-06 19:04:12 --> Security Class Initialized
DEBUG - 2016-02-06 19:04:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:04:12 --> Input Class Initialized
INFO - 2016-02-06 19:04:12 --> Language Class Initialized
INFO - 2016-02-06 19:04:12 --> Language Class Initialized
INFO - 2016-02-06 19:04:12 --> Config Class Initialized
INFO - 2016-02-06 19:04:12 --> Loader Class Initialized
INFO - 2016-02-06 19:04:12 --> Helper loaded: form_helper
INFO - 2016-02-06 19:04:12 --> Helper loaded: url_helper
INFO - 2016-02-06 19:04:12 --> Helper loaded: general_helper
INFO - 2016-02-06 19:04:12 --> Database Driver Class Initialized
INFO - 2016-02-06 19:04:12 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:04:12 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:04:12 --> Email Class Initialized
INFO - 2016-02-06 19:04:12 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:04:12 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:04:12 --> Helper loaded: language_helper
INFO - 2016-02-06 19:04:12 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:04:12 --> Model Class Initialized
INFO - 2016-02-06 19:04:12 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:04:12 --> Model Class Initialized
INFO - 2016-02-06 19:04:12 --> Helper loaded: date_helper
INFO - 2016-02-06 19:04:12 --> Controller Class Initialized
INFO - 2016-02-06 19:04:12 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 19:04:12 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 19:04:12 --> Model Class Initialized
DEBUG - 2016-02-06 19:04:12 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:04:12 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/login.php
DEBUG - 2016-02-06 19:04:12 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:04:12 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 19:04:12 --> Profiler Class Initialized
INFO - 2016-02-06 19:04:12 --> Helper loaded: text_helper
INFO - 2016-02-06 19:04:12 --> Final output sent to browser
DEBUG - 2016-02-06 19:04:12 --> Total execution time: 0.4976
INFO - 2016-02-06 19:06:06 --> Config Class Initialized
INFO - 2016-02-06 19:06:06 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:06:06 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:06:06 --> Utf8 Class Initialized
INFO - 2016-02-06 19:06:06 --> URI Class Initialized
INFO - 2016-02-06 19:06:06 --> Router Class Initialized
INFO - 2016-02-06 19:06:06 --> Output Class Initialized
INFO - 2016-02-06 19:06:06 --> Security Class Initialized
DEBUG - 2016-02-06 19:06:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:06:06 --> Input Class Initialized
INFO - 2016-02-06 19:06:06 --> Language Class Initialized
INFO - 2016-02-06 19:06:06 --> Language Class Initialized
INFO - 2016-02-06 19:06:06 --> Config Class Initialized
INFO - 2016-02-06 19:06:06 --> Loader Class Initialized
INFO - 2016-02-06 19:06:06 --> Helper loaded: form_helper
INFO - 2016-02-06 19:06:06 --> Helper loaded: url_helper
INFO - 2016-02-06 19:06:06 --> Helper loaded: general_helper
INFO - 2016-02-06 19:06:06 --> Database Driver Class Initialized
INFO - 2016-02-06 19:06:06 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:06:06 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:06:06 --> Email Class Initialized
INFO - 2016-02-06 19:06:06 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:06:06 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:06:06 --> Helper loaded: language_helper
INFO - 2016-02-06 19:06:06 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:06:06 --> Model Class Initialized
INFO - 2016-02-06 19:06:06 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:06:06 --> Model Class Initialized
INFO - 2016-02-06 19:06:06 --> Helper loaded: date_helper
INFO - 2016-02-06 19:06:06 --> Controller Class Initialized
INFO - 2016-02-06 19:06:06 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 19:06:06 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 19:06:06 --> Model Class Initialized
DEBUG - 2016-02-06 19:06:06 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:06:06 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/login.php
DEBUG - 2016-02-06 19:06:06 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:06:06 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 19:06:06 --> Profiler Class Initialized
INFO - 2016-02-06 19:06:06 --> Helper loaded: text_helper
INFO - 2016-02-06 19:06:06 --> Final output sent to browser
DEBUG - 2016-02-06 19:06:06 --> Total execution time: 0.4313
INFO - 2016-02-06 19:06:10 --> Config Class Initialized
INFO - 2016-02-06 19:06:10 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:06:10 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:06:10 --> Utf8 Class Initialized
INFO - 2016-02-06 19:06:10 --> URI Class Initialized
DEBUG - 2016-02-06 19:06:10 --> No URI present. Default controller set.
INFO - 2016-02-06 19:06:10 --> Router Class Initialized
INFO - 2016-02-06 19:06:10 --> Output Class Initialized
INFO - 2016-02-06 19:06:10 --> Security Class Initialized
DEBUG - 2016-02-06 19:06:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:06:10 --> Input Class Initialized
INFO - 2016-02-06 19:06:10 --> Language Class Initialized
INFO - 2016-02-06 19:06:10 --> Language Class Initialized
INFO - 2016-02-06 19:06:10 --> Config Class Initialized
INFO - 2016-02-06 19:06:10 --> Loader Class Initialized
INFO - 2016-02-06 19:06:10 --> Helper loaded: form_helper
INFO - 2016-02-06 19:06:10 --> Helper loaded: url_helper
INFO - 2016-02-06 19:06:10 --> Helper loaded: general_helper
INFO - 2016-02-06 19:06:10 --> Database Driver Class Initialized
INFO - 2016-02-06 19:06:10 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:06:10 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:06:10 --> Email Class Initialized
INFO - 2016-02-06 19:06:10 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:06:10 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:06:10 --> Helper loaded: language_helper
INFO - 2016-02-06 19:06:10 --> Config Class Initialized
INFO - 2016-02-06 19:06:10 --> Hooks Class Initialized
INFO - 2016-02-06 19:06:10 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:06:10 --> Model Class Initialized
DEBUG - 2016-02-06 19:06:10 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:06:10 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:06:10 --> Utf8 Class Initialized
INFO - 2016-02-06 19:06:10 --> URI Class Initialized
INFO - 2016-02-06 19:06:10 --> Model Class Initialized
DEBUG - 2016-02-06 19:06:11 --> No URI present. Default controller set.
INFO - 2016-02-06 19:06:11 --> Helper loaded: date_helper
INFO - 2016-02-06 19:06:11 --> Router Class Initialized
INFO - 2016-02-06 19:06:11 --> Controller Class Initialized
INFO - 2016-02-06 19:06:11 --> Output Class Initialized
INFO - 2016-02-06 19:06:11 --> Security Class Initialized
DEBUG - 2016-02-06 19:06:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:06:11 --> Input Class Initialized
INFO - 2016-02-06 19:06:11 --> Language Class Initialized
INFO - 2016-02-06 19:06:11 --> Language Class Initialized
INFO - 2016-02-06 19:06:11 --> Config Class Initialized
INFO - 2016-02-06 19:06:11 --> Loader Class Initialized
INFO - 2016-02-06 19:06:11 --> Helper loaded: form_helper
INFO - 2016-02-06 19:06:11 --> Helper loaded: url_helper
INFO - 2016-02-06 19:06:11 --> Helper loaded: general_helper
INFO - 2016-02-06 19:06:11 --> Database Driver Class Initialized
INFO - 2016-02-06 19:06:11 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:06:11 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:06:11 --> Email Class Initialized
INFO - 2016-02-06 19:06:11 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:06:11 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:06:11 --> Helper loaded: language_helper
INFO - 2016-02-06 19:06:11 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:06:11 --> Model Class Initialized
INFO - 2016-02-06 19:06:11 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:06:11 --> Model Class Initialized
INFO - 2016-02-06 19:06:11 --> Helper loaded: date_helper
INFO - 2016-02-06 19:06:11 --> Controller Class Initialized
INFO - 2016-02-06 19:06:11 --> Config Class Initialized
INFO - 2016-02-06 19:06:11 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:06:11 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:06:11 --> Utf8 Class Initialized
INFO - 2016-02-06 19:06:11 --> URI Class Initialized
INFO - 2016-02-06 19:06:11 --> Router Class Initialized
INFO - 2016-02-06 19:06:11 --> Output Class Initialized
INFO - 2016-02-06 19:06:11 --> Security Class Initialized
DEBUG - 2016-02-06 19:06:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:06:11 --> Input Class Initialized
INFO - 2016-02-06 19:06:11 --> Language Class Initialized
INFO - 2016-02-06 19:06:11 --> Language Class Initialized
INFO - 2016-02-06 19:06:11 --> Config Class Initialized
INFO - 2016-02-06 19:06:11 --> Loader Class Initialized
INFO - 2016-02-06 19:06:11 --> Helper loaded: form_helper
INFO - 2016-02-06 19:06:11 --> Helper loaded: url_helper
INFO - 2016-02-06 19:06:11 --> Helper loaded: general_helper
INFO - 2016-02-06 19:06:11 --> Database Driver Class Initialized
INFO - 2016-02-06 19:06:11 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:06:11 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:06:11 --> Email Class Initialized
INFO - 2016-02-06 19:06:11 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:06:11 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:06:11 --> Helper loaded: language_helper
INFO - 2016-02-06 19:06:11 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:06:11 --> Model Class Initialized
INFO - 2016-02-06 19:06:11 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:06:11 --> Model Class Initialized
INFO - 2016-02-06 19:06:11 --> Helper loaded: date_helper
INFO - 2016-02-06 19:06:11 --> Controller Class Initialized
INFO - 2016-02-06 19:06:11 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 19:06:11 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 19:06:11 --> Model Class Initialized
DEBUG - 2016-02-06 19:06:11 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:06:11 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/login.php
DEBUG - 2016-02-06 19:06:11 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:06:11 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 19:06:11 --> Profiler Class Initialized
INFO - 2016-02-06 19:06:11 --> Helper loaded: text_helper
INFO - 2016-02-06 19:06:11 --> Final output sent to browser
DEBUG - 2016-02-06 19:06:11 --> Total execution time: 0.4948
INFO - 2016-02-06 19:09:52 --> Config Class Initialized
INFO - 2016-02-06 19:09:52 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:09:52 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:09:52 --> Utf8 Class Initialized
INFO - 2016-02-06 19:09:52 --> URI Class Initialized
INFO - 2016-02-06 19:09:52 --> Router Class Initialized
INFO - 2016-02-06 19:09:52 --> Output Class Initialized
INFO - 2016-02-06 19:09:52 --> Security Class Initialized
DEBUG - 2016-02-06 19:09:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:09:52 --> Input Class Initialized
INFO - 2016-02-06 19:09:52 --> Language Class Initialized
INFO - 2016-02-06 19:09:52 --> Language Class Initialized
INFO - 2016-02-06 19:09:52 --> Config Class Initialized
INFO - 2016-02-06 19:09:52 --> Loader Class Initialized
INFO - 2016-02-06 19:09:52 --> Helper loaded: form_helper
INFO - 2016-02-06 19:09:52 --> Helper loaded: url_helper
INFO - 2016-02-06 19:09:52 --> Helper loaded: general_helper
INFO - 2016-02-06 19:09:52 --> Database Driver Class Initialized
INFO - 2016-02-06 19:09:52 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:09:52 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:09:52 --> Email Class Initialized
INFO - 2016-02-06 19:09:52 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:09:52 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:09:52 --> Helper loaded: language_helper
INFO - 2016-02-06 19:09:52 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:09:52 --> Model Class Initialized
INFO - 2016-02-06 19:09:52 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:09:52 --> Model Class Initialized
INFO - 2016-02-06 19:09:52 --> Helper loaded: date_helper
INFO - 2016-02-06 19:09:52 --> Controller Class Initialized
INFO - 2016-02-06 19:09:52 --> Config Class Initialized
INFO - 2016-02-06 19:09:52 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:09:52 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:09:52 --> Utf8 Class Initialized
INFO - 2016-02-06 19:09:52 --> URI Class Initialized
INFO - 2016-02-06 19:09:52 --> Router Class Initialized
INFO - 2016-02-06 19:09:52 --> Output Class Initialized
INFO - 2016-02-06 19:09:52 --> Security Class Initialized
DEBUG - 2016-02-06 19:09:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:09:52 --> Input Class Initialized
INFO - 2016-02-06 19:09:52 --> Language Class Initialized
INFO - 2016-02-06 19:09:52 --> Language Class Initialized
INFO - 2016-02-06 19:09:52 --> Config Class Initialized
INFO - 2016-02-06 19:09:52 --> Loader Class Initialized
INFO - 2016-02-06 19:09:52 --> Helper loaded: form_helper
INFO - 2016-02-06 19:09:52 --> Helper loaded: url_helper
INFO - 2016-02-06 19:09:52 --> Helper loaded: general_helper
INFO - 2016-02-06 19:09:52 --> Database Driver Class Initialized
INFO - 2016-02-06 19:09:52 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:09:52 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:09:52 --> Email Class Initialized
INFO - 2016-02-06 19:09:52 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:09:52 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:09:52 --> Helper loaded: language_helper
INFO - 2016-02-06 19:09:52 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:09:52 --> Model Class Initialized
INFO - 2016-02-06 19:09:52 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:09:52 --> Model Class Initialized
INFO - 2016-02-06 19:09:52 --> Helper loaded: date_helper
INFO - 2016-02-06 19:09:52 --> Controller Class Initialized
INFO - 2016-02-06 19:09:52 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 19:09:52 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 19:09:53 --> Model Class Initialized
DEBUG - 2016-02-06 19:09:53 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:09:53 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/login.php
DEBUG - 2016-02-06 19:09:53 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:09:53 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 19:09:53 --> Profiler Class Initialized
INFO - 2016-02-06 19:09:53 --> Helper loaded: text_helper
INFO - 2016-02-06 19:09:53 --> Final output sent to browser
DEBUG - 2016-02-06 19:09:53 --> Total execution time: 0.4536
INFO - 2016-02-06 19:10:01 --> Config Class Initialized
INFO - 2016-02-06 19:10:01 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:10:01 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:10:01 --> Utf8 Class Initialized
INFO - 2016-02-06 19:10:01 --> URI Class Initialized
INFO - 2016-02-06 19:10:01 --> Router Class Initialized
INFO - 2016-02-06 19:10:01 --> Output Class Initialized
INFO - 2016-02-06 19:10:01 --> Security Class Initialized
DEBUG - 2016-02-06 19:10:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:10:01 --> Input Class Initialized
INFO - 2016-02-06 19:10:01 --> Language Class Initialized
INFO - 2016-02-06 19:10:01 --> Language Class Initialized
INFO - 2016-02-06 19:10:01 --> Config Class Initialized
INFO - 2016-02-06 19:10:01 --> Loader Class Initialized
INFO - 2016-02-06 19:10:01 --> Helper loaded: form_helper
INFO - 2016-02-06 19:10:01 --> Helper loaded: url_helper
INFO - 2016-02-06 19:10:01 --> Helper loaded: general_helper
INFO - 2016-02-06 19:10:01 --> Database Driver Class Initialized
INFO - 2016-02-06 19:10:01 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:10:01 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:10:01 --> Email Class Initialized
INFO - 2016-02-06 19:10:01 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:10:01 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:10:01 --> Helper loaded: language_helper
INFO - 2016-02-06 19:10:01 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:10:01 --> Model Class Initialized
INFO - 2016-02-06 19:10:01 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:10:01 --> Model Class Initialized
INFO - 2016-02-06 19:10:01 --> Helper loaded: date_helper
INFO - 2016-02-06 19:10:01 --> Controller Class Initialized
INFO - 2016-02-06 19:10:01 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 19:10:01 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 19:10:01 --> Model Class Initialized
INFO - 2016-02-06 19:10:01 --> Language file loaded: language/dutch/form_validation_lang.php
INFO - 2016-02-06 19:10:01 --> Config Class Initialized
INFO - 2016-02-06 19:10:01 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:10:01 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:10:01 --> Utf8 Class Initialized
INFO - 2016-02-06 19:10:01 --> URI Class Initialized
DEBUG - 2016-02-06 19:10:01 --> No URI present. Default controller set.
INFO - 2016-02-06 19:10:01 --> Router Class Initialized
INFO - 2016-02-06 19:10:01 --> Output Class Initialized
INFO - 2016-02-06 19:10:01 --> Security Class Initialized
DEBUG - 2016-02-06 19:10:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:10:01 --> Input Class Initialized
INFO - 2016-02-06 19:10:01 --> Language Class Initialized
INFO - 2016-02-06 19:10:01 --> Language Class Initialized
INFO - 2016-02-06 19:10:01 --> Config Class Initialized
INFO - 2016-02-06 19:10:01 --> Loader Class Initialized
INFO - 2016-02-06 19:10:01 --> Helper loaded: form_helper
INFO - 2016-02-06 19:10:01 --> Helper loaded: url_helper
INFO - 2016-02-06 19:10:01 --> Helper loaded: general_helper
INFO - 2016-02-06 19:10:01 --> Database Driver Class Initialized
INFO - 2016-02-06 19:10:01 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:10:01 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:10:01 --> Email Class Initialized
INFO - 2016-02-06 19:10:01 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:10:01 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:10:01 --> Helper loaded: language_helper
INFO - 2016-02-06 19:10:01 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:10:01 --> Model Class Initialized
INFO - 2016-02-06 19:10:01 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:10:01 --> Model Class Initialized
INFO - 2016-02-06 19:10:01 --> Helper loaded: date_helper
INFO - 2016-02-06 19:10:01 --> Controller Class Initialized
DEBUG - 2016-02-06 19:10:01 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:10:01 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dashboard/views/index.php
DEBUG - 2016-02-06 19:10:01 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:10:01 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 19:10:02 --> Profiler Class Initialized
INFO - 2016-02-06 19:10:02 --> Helper loaded: text_helper
INFO - 2016-02-06 19:10:02 --> Final output sent to browser
DEBUG - 2016-02-06 19:10:02 --> Total execution time: 0.4640
INFO - 2016-02-06 19:10:14 --> Config Class Initialized
INFO - 2016-02-06 19:10:14 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:10:14 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:10:14 --> Utf8 Class Initialized
INFO - 2016-02-06 19:10:14 --> URI Class Initialized
DEBUG - 2016-02-06 19:10:14 --> No URI present. Default controller set.
INFO - 2016-02-06 19:10:14 --> Router Class Initialized
INFO - 2016-02-06 19:10:14 --> Output Class Initialized
INFO - 2016-02-06 19:10:14 --> Security Class Initialized
DEBUG - 2016-02-06 19:10:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:10:14 --> Input Class Initialized
INFO - 2016-02-06 19:10:14 --> Language Class Initialized
INFO - 2016-02-06 19:10:14 --> Language Class Initialized
INFO - 2016-02-06 19:10:14 --> Config Class Initialized
INFO - 2016-02-06 19:10:14 --> Loader Class Initialized
INFO - 2016-02-06 19:10:14 --> Helper loaded: form_helper
INFO - 2016-02-06 19:10:14 --> Helper loaded: url_helper
INFO - 2016-02-06 19:10:14 --> Helper loaded: general_helper
INFO - 2016-02-06 19:10:15 --> Database Driver Class Initialized
INFO - 2016-02-06 19:10:15 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:10:15 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:10:15 --> Email Class Initialized
INFO - 2016-02-06 19:10:15 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:10:15 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:10:15 --> Helper loaded: language_helper
INFO - 2016-02-06 19:10:15 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:10:15 --> Model Class Initialized
INFO - 2016-02-06 19:10:15 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:10:15 --> Model Class Initialized
INFO - 2016-02-06 19:10:15 --> Helper loaded: date_helper
INFO - 2016-02-06 19:10:15 --> Controller Class Initialized
DEBUG - 2016-02-06 19:10:15 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:10:15 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dashboard/views/index.php
DEBUG - 2016-02-06 19:10:15 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:10:15 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 19:10:15 --> Profiler Class Initialized
INFO - 2016-02-06 19:10:15 --> Helper loaded: text_helper
INFO - 2016-02-06 19:10:15 --> Final output sent to browser
DEBUG - 2016-02-06 19:10:15 --> Total execution time: 0.4714
INFO - 2016-02-06 19:10:24 --> Config Class Initialized
INFO - 2016-02-06 19:10:24 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:10:24 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:10:24 --> Utf8 Class Initialized
INFO - 2016-02-06 19:10:24 --> URI Class Initialized
INFO - 2016-02-06 19:10:24 --> Router Class Initialized
INFO - 2016-02-06 19:10:24 --> Output Class Initialized
INFO - 2016-02-06 19:10:24 --> Security Class Initialized
DEBUG - 2016-02-06 19:10:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:10:24 --> Input Class Initialized
INFO - 2016-02-06 19:10:24 --> Language Class Initialized
INFO - 2016-02-06 19:10:24 --> Language Class Initialized
INFO - 2016-02-06 19:10:24 --> Config Class Initialized
INFO - 2016-02-06 19:10:24 --> Loader Class Initialized
INFO - 2016-02-06 19:10:24 --> Helper loaded: form_helper
INFO - 2016-02-06 19:10:24 --> Helper loaded: url_helper
INFO - 2016-02-06 19:10:24 --> Helper loaded: general_helper
INFO - 2016-02-06 19:10:24 --> Database Driver Class Initialized
INFO - 2016-02-06 19:10:24 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:10:24 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:10:24 --> Email Class Initialized
INFO - 2016-02-06 19:10:24 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:10:24 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:10:24 --> Helper loaded: language_helper
INFO - 2016-02-06 19:10:24 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:10:24 --> Model Class Initialized
INFO - 2016-02-06 19:10:24 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:10:24 --> Model Class Initialized
INFO - 2016-02-06 19:10:24 --> Helper loaded: date_helper
INFO - 2016-02-06 19:10:24 --> Controller Class Initialized
DEBUG - 2016-02-06 19:10:24 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
ERROR - 2016-02-06 19:10:24 --> Could not find the language line "index_heading"
ERROR - 2016-02-06 19:10:24 --> Could not find the language line "index_subheading"
ERROR - 2016-02-06 19:10:24 --> Could not find the language line "index_fname_th"
ERROR - 2016-02-06 19:10:24 --> Could not find the language line "index_lname_th"
ERROR - 2016-02-06 19:10:24 --> Could not find the language line "index_email_th"
ERROR - 2016-02-06 19:10:24 --> Could not find the language line "index_groups_th"
ERROR - 2016-02-06 19:10:24 --> Could not find the language line "index_status_th"
ERROR - 2016-02-06 19:10:24 --> Could not find the language line "index_action_th"
ERROR - 2016-02-06 19:10:24 --> Could not find the language line "index_active_link"
ERROR - 2016-02-06 19:10:24 --> Could not find the language line "index_create_user_link"
ERROR - 2016-02-06 19:10:24 --> Could not find the language line "index_create_group_link"
DEBUG - 2016-02-06 19:10:24 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 19:10:24 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:10:24 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 19:10:24 --> Profiler Class Initialized
INFO - 2016-02-06 19:10:24 --> Helper loaded: text_helper
INFO - 2016-02-06 19:10:24 --> Final output sent to browser
DEBUG - 2016-02-06 19:10:24 --> Total execution time: 0.5151
INFO - 2016-02-06 19:11:00 --> Config Class Initialized
INFO - 2016-02-06 19:11:00 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:11:00 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:11:00 --> Utf8 Class Initialized
INFO - 2016-02-06 19:11:00 --> URI Class Initialized
INFO - 2016-02-06 19:11:00 --> Router Class Initialized
INFO - 2016-02-06 19:11:00 --> Output Class Initialized
INFO - 2016-02-06 19:11:00 --> Security Class Initialized
DEBUG - 2016-02-06 19:11:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:11:00 --> Input Class Initialized
INFO - 2016-02-06 19:11:00 --> Language Class Initialized
INFO - 2016-02-06 19:11:00 --> Language Class Initialized
INFO - 2016-02-06 19:11:00 --> Config Class Initialized
INFO - 2016-02-06 19:11:00 --> Loader Class Initialized
INFO - 2016-02-06 19:11:00 --> Helper loaded: form_helper
INFO - 2016-02-06 19:11:00 --> Helper loaded: url_helper
INFO - 2016-02-06 19:11:00 --> Helper loaded: general_helper
INFO - 2016-02-06 19:11:00 --> Database Driver Class Initialized
INFO - 2016-02-06 19:11:00 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:11:00 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:11:00 --> Email Class Initialized
INFO - 2016-02-06 19:11:00 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:11:00 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:11:00 --> Helper loaded: language_helper
INFO - 2016-02-06 19:11:00 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:11:00 --> Model Class Initialized
INFO - 2016-02-06 19:11:00 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:11:00 --> Model Class Initialized
INFO - 2016-02-06 19:11:00 --> Helper loaded: date_helper
INFO - 2016-02-06 19:11:01 --> Controller Class Initialized
INFO - 2016-02-06 19:11:01 --> Language file loaded: language/dutch/auth_lang.php
INFO - 2016-02-06 19:11:26 --> Config Class Initialized
INFO - 2016-02-06 19:11:26 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:11:26 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:11:26 --> Utf8 Class Initialized
INFO - 2016-02-06 19:11:26 --> URI Class Initialized
INFO - 2016-02-06 19:11:26 --> Router Class Initialized
INFO - 2016-02-06 19:11:27 --> Output Class Initialized
INFO - 2016-02-06 19:11:27 --> Security Class Initialized
DEBUG - 2016-02-06 19:11:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:11:27 --> Input Class Initialized
INFO - 2016-02-06 19:11:27 --> Language Class Initialized
INFO - 2016-02-06 19:11:27 --> Language Class Initialized
INFO - 2016-02-06 19:11:27 --> Config Class Initialized
INFO - 2016-02-06 19:11:27 --> Loader Class Initialized
INFO - 2016-02-06 19:11:27 --> Helper loaded: form_helper
INFO - 2016-02-06 19:11:27 --> Helper loaded: url_helper
INFO - 2016-02-06 19:11:27 --> Helper loaded: general_helper
INFO - 2016-02-06 19:11:27 --> Database Driver Class Initialized
INFO - 2016-02-06 19:11:27 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:11:27 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:11:27 --> Email Class Initialized
INFO - 2016-02-06 19:11:27 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:11:27 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:11:27 --> Helper loaded: language_helper
INFO - 2016-02-06 19:11:27 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:11:27 --> Model Class Initialized
INFO - 2016-02-06 19:11:27 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:11:27 --> Model Class Initialized
INFO - 2016-02-06 19:11:27 --> Helper loaded: date_helper
INFO - 2016-02-06 19:11:27 --> Controller Class Initialized
INFO - 2016-02-06 19:11:27 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 19:11:27 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:11:27 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 19:11:27 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:11:27 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 19:11:27 --> Profiler Class Initialized
INFO - 2016-02-06 19:11:27 --> Helper loaded: text_helper
INFO - 2016-02-06 19:11:27 --> Final output sent to browser
DEBUG - 2016-02-06 19:11:27 --> Total execution time: 0.4402
INFO - 2016-02-06 19:12:41 --> Config Class Initialized
INFO - 2016-02-06 19:12:41 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:12:41 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:12:41 --> Utf8 Class Initialized
INFO - 2016-02-06 19:12:41 --> URI Class Initialized
INFO - 2016-02-06 19:12:41 --> Router Class Initialized
INFO - 2016-02-06 19:12:41 --> Output Class Initialized
INFO - 2016-02-06 19:12:41 --> Security Class Initialized
DEBUG - 2016-02-06 19:12:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:12:41 --> Input Class Initialized
INFO - 2016-02-06 19:12:41 --> Language Class Initialized
INFO - 2016-02-06 19:12:41 --> Language Class Initialized
INFO - 2016-02-06 19:12:41 --> Config Class Initialized
INFO - 2016-02-06 19:12:41 --> Loader Class Initialized
INFO - 2016-02-06 19:12:41 --> Helper loaded: form_helper
INFO - 2016-02-06 19:12:41 --> Helper loaded: url_helper
INFO - 2016-02-06 19:12:41 --> Helper loaded: general_helper
INFO - 2016-02-06 19:12:41 --> Database Driver Class Initialized
INFO - 2016-02-06 19:12:41 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:12:41 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:12:41 --> Email Class Initialized
INFO - 2016-02-06 19:12:41 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:12:41 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:12:42 --> Helper loaded: language_helper
INFO - 2016-02-06 19:12:42 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:12:42 --> Model Class Initialized
INFO - 2016-02-06 19:12:42 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:12:42 --> Model Class Initialized
INFO - 2016-02-06 19:12:42 --> Helper loaded: date_helper
INFO - 2016-02-06 19:12:42 --> Controller Class Initialized
INFO - 2016-02-06 19:12:42 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 19:12:42 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:12:42 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 19:12:42 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:12:42 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 19:12:42 --> Profiler Class Initialized
INFO - 2016-02-06 19:12:42 --> Helper loaded: text_helper
INFO - 2016-02-06 19:12:42 --> Final output sent to browser
DEBUG - 2016-02-06 19:12:42 --> Total execution time: 0.4411
INFO - 2016-02-06 19:12:45 --> Config Class Initialized
INFO - 2016-02-06 19:12:45 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:12:45 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:12:45 --> Utf8 Class Initialized
INFO - 2016-02-06 19:12:45 --> URI Class Initialized
INFO - 2016-02-06 19:12:45 --> Router Class Initialized
INFO - 2016-02-06 19:12:45 --> Output Class Initialized
INFO - 2016-02-06 19:12:45 --> Security Class Initialized
DEBUG - 2016-02-06 19:12:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:12:45 --> Input Class Initialized
INFO - 2016-02-06 19:12:45 --> Language Class Initialized
INFO - 2016-02-06 19:12:45 --> Language Class Initialized
INFO - 2016-02-06 19:12:45 --> Config Class Initialized
INFO - 2016-02-06 19:12:45 --> Loader Class Initialized
INFO - 2016-02-06 19:12:45 --> Helper loaded: form_helper
INFO - 2016-02-06 19:12:45 --> Helper loaded: url_helper
INFO - 2016-02-06 19:12:45 --> Helper loaded: general_helper
INFO - 2016-02-06 19:12:45 --> Database Driver Class Initialized
INFO - 2016-02-06 19:12:45 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:12:45 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:12:45 --> Email Class Initialized
INFO - 2016-02-06 19:12:45 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:12:45 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:12:45 --> Helper loaded: language_helper
INFO - 2016-02-06 19:12:45 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:12:45 --> Model Class Initialized
INFO - 2016-02-06 19:12:45 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:12:45 --> Model Class Initialized
INFO - 2016-02-06 19:12:45 --> Helper loaded: date_helper
INFO - 2016-02-06 19:12:45 --> Controller Class Initialized
INFO - 2016-02-06 19:12:45 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 19:12:45 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:12:45 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 19:12:45 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:12:45 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 19:12:45 --> Profiler Class Initialized
INFO - 2016-02-06 19:12:45 --> Helper loaded: text_helper
INFO - 2016-02-06 19:12:45 --> Final output sent to browser
DEBUG - 2016-02-06 19:12:45 --> Total execution time: 0.4336
INFO - 2016-02-06 19:14:46 --> Config Class Initialized
INFO - 2016-02-06 19:14:46 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:14:46 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:14:46 --> Utf8 Class Initialized
INFO - 2016-02-06 19:14:46 --> URI Class Initialized
INFO - 2016-02-06 19:14:46 --> Router Class Initialized
INFO - 2016-02-06 19:14:46 --> Output Class Initialized
INFO - 2016-02-06 19:14:46 --> Security Class Initialized
DEBUG - 2016-02-06 19:14:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:14:46 --> Input Class Initialized
INFO - 2016-02-06 19:14:46 --> Language Class Initialized
INFO - 2016-02-06 19:14:46 --> Language Class Initialized
INFO - 2016-02-06 19:14:46 --> Config Class Initialized
INFO - 2016-02-06 19:14:46 --> Loader Class Initialized
INFO - 2016-02-06 19:14:46 --> Helper loaded: form_helper
INFO - 2016-02-06 19:14:46 --> Helper loaded: url_helper
INFO - 2016-02-06 19:14:46 --> Helper loaded: general_helper
INFO - 2016-02-06 19:14:46 --> Database Driver Class Initialized
INFO - 2016-02-06 19:14:46 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:14:46 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:14:46 --> Email Class Initialized
INFO - 2016-02-06 19:14:46 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:14:46 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:14:46 --> Helper loaded: language_helper
INFO - 2016-02-06 19:14:46 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:14:46 --> Model Class Initialized
INFO - 2016-02-06 19:14:46 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:14:46 --> Model Class Initialized
INFO - 2016-02-06 19:14:46 --> Helper loaded: date_helper
INFO - 2016-02-06 19:14:46 --> Controller Class Initialized
INFO - 2016-02-06 19:14:46 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 19:14:46 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:14:46 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 19:14:46 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:14:46 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 19:14:46 --> Profiler Class Initialized
INFO - 2016-02-06 19:14:46 --> Helper loaded: text_helper
INFO - 2016-02-06 19:14:46 --> Final output sent to browser
DEBUG - 2016-02-06 19:14:46 --> Total execution time: 0.4479
INFO - 2016-02-06 19:15:01 --> Config Class Initialized
INFO - 2016-02-06 19:15:01 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:15:01 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:15:01 --> Utf8 Class Initialized
INFO - 2016-02-06 19:15:01 --> URI Class Initialized
INFO - 2016-02-06 19:15:01 --> Router Class Initialized
INFO - 2016-02-06 19:15:01 --> Output Class Initialized
INFO - 2016-02-06 19:15:01 --> Security Class Initialized
DEBUG - 2016-02-06 19:15:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:15:01 --> Input Class Initialized
INFO - 2016-02-06 19:15:01 --> Language Class Initialized
INFO - 2016-02-06 19:15:01 --> Language Class Initialized
INFO - 2016-02-06 19:15:01 --> Config Class Initialized
INFO - 2016-02-06 19:15:01 --> Loader Class Initialized
INFO - 2016-02-06 19:15:01 --> Helper loaded: form_helper
INFO - 2016-02-06 19:15:01 --> Helper loaded: url_helper
INFO - 2016-02-06 19:15:01 --> Helper loaded: general_helper
INFO - 2016-02-06 19:15:01 --> Database Driver Class Initialized
INFO - 2016-02-06 19:15:01 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:15:01 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:15:01 --> Email Class Initialized
INFO - 2016-02-06 19:15:01 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:15:01 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:15:01 --> Helper loaded: language_helper
INFO - 2016-02-06 19:15:01 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:15:01 --> Model Class Initialized
INFO - 2016-02-06 19:15:01 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:15:01 --> Model Class Initialized
INFO - 2016-02-06 19:15:01 --> Helper loaded: date_helper
INFO - 2016-02-06 19:15:01 --> Controller Class Initialized
INFO - 2016-02-06 19:15:01 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 19:15:01 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:15:01 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 19:15:01 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:15:01 --> Language file loaded: language/dutch/profiler_lang.php
INFO - 2016-02-06 19:15:01 --> Profiler Class Initialized
INFO - 2016-02-06 19:15:01 --> Helper loaded: text_helper
INFO - 2016-02-06 19:15:01 --> Final output sent to browser
DEBUG - 2016-02-06 19:15:02 --> Total execution time: 0.4550
INFO - 2016-02-06 19:15:38 --> Config Class Initialized
INFO - 2016-02-06 19:15:38 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:15:38 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:15:38 --> Utf8 Class Initialized
INFO - 2016-02-06 19:15:38 --> URI Class Initialized
INFO - 2016-02-06 19:15:38 --> Router Class Initialized
INFO - 2016-02-06 19:15:38 --> Output Class Initialized
INFO - 2016-02-06 19:15:38 --> Security Class Initialized
DEBUG - 2016-02-06 19:15:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:15:38 --> Input Class Initialized
INFO - 2016-02-06 19:15:38 --> Language Class Initialized
INFO - 2016-02-06 19:15:38 --> Language Class Initialized
INFO - 2016-02-06 19:15:38 --> Config Class Initialized
INFO - 2016-02-06 19:15:38 --> Loader Class Initialized
INFO - 2016-02-06 19:15:38 --> Helper loaded: form_helper
INFO - 2016-02-06 19:15:38 --> Helper loaded: url_helper
INFO - 2016-02-06 19:15:38 --> Helper loaded: general_helper
INFO - 2016-02-06 19:15:38 --> Database Driver Class Initialized
INFO - 2016-02-06 19:15:38 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:15:38 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:15:38 --> Email Class Initialized
INFO - 2016-02-06 19:15:38 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:15:38 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:15:38 --> Helper loaded: language_helper
INFO - 2016-02-06 19:15:38 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:15:38 --> Model Class Initialized
INFO - 2016-02-06 19:15:38 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:15:38 --> Model Class Initialized
INFO - 2016-02-06 19:15:38 --> Helper loaded: date_helper
INFO - 2016-02-06 19:15:38 --> Controller Class Initialized
INFO - 2016-02-06 19:15:38 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 19:15:38 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:15:38 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 19:15:38 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:15:38 --> Final output sent to browser
DEBUG - 2016-02-06 19:15:38 --> Total execution time: 0.4231
INFO - 2016-02-06 19:16:02 --> Config Class Initialized
INFO - 2016-02-06 19:16:02 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:16:02 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:16:02 --> Utf8 Class Initialized
INFO - 2016-02-06 19:16:02 --> URI Class Initialized
INFO - 2016-02-06 19:16:02 --> Router Class Initialized
INFO - 2016-02-06 19:16:02 --> Output Class Initialized
INFO - 2016-02-06 19:16:02 --> Security Class Initialized
DEBUG - 2016-02-06 19:16:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:16:02 --> Input Class Initialized
INFO - 2016-02-06 19:16:02 --> Language Class Initialized
INFO - 2016-02-06 19:16:02 --> Language Class Initialized
INFO - 2016-02-06 19:16:02 --> Config Class Initialized
INFO - 2016-02-06 19:16:02 --> Loader Class Initialized
INFO - 2016-02-06 19:16:02 --> Helper loaded: form_helper
INFO - 2016-02-06 19:16:02 --> Helper loaded: url_helper
INFO - 2016-02-06 19:16:02 --> Helper loaded: general_helper
INFO - 2016-02-06 19:16:02 --> Database Driver Class Initialized
INFO - 2016-02-06 19:16:02 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:16:02 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:16:02 --> Email Class Initialized
INFO - 2016-02-06 19:16:02 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:16:02 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:16:02 --> Helper loaded: language_helper
INFO - 2016-02-06 19:16:02 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:16:02 --> Model Class Initialized
INFO - 2016-02-06 19:16:02 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:16:02 --> Model Class Initialized
INFO - 2016-02-06 19:16:02 --> Helper loaded: date_helper
INFO - 2016-02-06 19:16:02 --> Controller Class Initialized
DEBUG - 2016-02-06 19:16:02 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 19:16:02 --> Model Class Initialized
INFO - 2016-02-06 19:16:02 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 19:16:02 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:16:02 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/change_password.php
DEBUG - 2016-02-06 19:16:02 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:16:02 --> Final output sent to browser
DEBUG - 2016-02-06 19:16:02 --> Total execution time: 0.5146
INFO - 2016-02-06 19:17:01 --> Config Class Initialized
INFO - 2016-02-06 19:17:01 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:17:01 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:17:01 --> Utf8 Class Initialized
INFO - 2016-02-06 19:17:02 --> URI Class Initialized
DEBUG - 2016-02-06 19:17:02 --> No URI present. Default controller set.
INFO - 2016-02-06 19:17:02 --> Router Class Initialized
INFO - 2016-02-06 19:17:02 --> Output Class Initialized
INFO - 2016-02-06 19:17:02 --> Security Class Initialized
DEBUG - 2016-02-06 19:17:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:17:02 --> Input Class Initialized
INFO - 2016-02-06 19:17:02 --> Language Class Initialized
INFO - 2016-02-06 19:17:02 --> Language Class Initialized
INFO - 2016-02-06 19:17:02 --> Config Class Initialized
INFO - 2016-02-06 19:17:02 --> Loader Class Initialized
INFO - 2016-02-06 19:17:02 --> Helper loaded: form_helper
INFO - 2016-02-06 19:17:02 --> Helper loaded: url_helper
INFO - 2016-02-06 19:17:02 --> Helper loaded: general_helper
INFO - 2016-02-06 19:17:02 --> Database Driver Class Initialized
INFO - 2016-02-06 19:17:02 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:17:02 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:17:02 --> Email Class Initialized
INFO - 2016-02-06 19:17:02 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:17:02 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:17:02 --> Helper loaded: language_helper
INFO - 2016-02-06 19:17:02 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:17:02 --> Model Class Initialized
INFO - 2016-02-06 19:17:02 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:17:02 --> Model Class Initialized
INFO - 2016-02-06 19:17:02 --> Helper loaded: date_helper
INFO - 2016-02-06 19:17:02 --> Controller Class Initialized
DEBUG - 2016-02-06 19:17:02 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:17:02 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dashboard/views/index.php
DEBUG - 2016-02-06 19:17:02 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:17:02 --> Final output sent to browser
DEBUG - 2016-02-06 19:17:02 --> Total execution time: 0.4192
INFO - 2016-02-06 19:17:03 --> Config Class Initialized
INFO - 2016-02-06 19:17:03 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:17:03 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:17:03 --> Utf8 Class Initialized
INFO - 2016-02-06 19:17:03 --> URI Class Initialized
INFO - 2016-02-06 19:17:03 --> Router Class Initialized
INFO - 2016-02-06 19:17:03 --> Output Class Initialized
INFO - 2016-02-06 19:17:03 --> Security Class Initialized
DEBUG - 2016-02-06 19:17:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:17:03 --> Input Class Initialized
INFO - 2016-02-06 19:17:03 --> Language Class Initialized
INFO - 2016-02-06 19:17:03 --> Language Class Initialized
INFO - 2016-02-06 19:17:03 --> Config Class Initialized
INFO - 2016-02-06 19:17:03 --> Loader Class Initialized
INFO - 2016-02-06 19:17:04 --> Helper loaded: form_helper
INFO - 2016-02-06 19:17:04 --> Helper loaded: url_helper
INFO - 2016-02-06 19:17:04 --> Helper loaded: general_helper
INFO - 2016-02-06 19:17:04 --> Database Driver Class Initialized
INFO - 2016-02-06 19:17:04 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:17:04 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:17:04 --> Email Class Initialized
INFO - 2016-02-06 19:17:04 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:17:04 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:17:04 --> Helper loaded: language_helper
INFO - 2016-02-06 19:17:04 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:17:04 --> Model Class Initialized
INFO - 2016-02-06 19:17:04 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:17:04 --> Model Class Initialized
INFO - 2016-02-06 19:17:04 --> Helper loaded: date_helper
INFO - 2016-02-06 19:17:04 --> Controller Class Initialized
DEBUG - 2016-02-06 19:17:04 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:17:04 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dashboard/views/index.php
DEBUG - 2016-02-06 19:17:04 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:17:04 --> Final output sent to browser
DEBUG - 2016-02-06 19:17:04 --> Total execution time: 0.4327
INFO - 2016-02-06 19:17:38 --> Config Class Initialized
INFO - 2016-02-06 19:17:38 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:17:38 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:17:38 --> Utf8 Class Initialized
INFO - 2016-02-06 19:17:38 --> URI Class Initialized
INFO - 2016-02-06 19:17:38 --> Router Class Initialized
INFO - 2016-02-06 19:17:38 --> Output Class Initialized
INFO - 2016-02-06 19:17:38 --> Security Class Initialized
DEBUG - 2016-02-06 19:17:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:17:38 --> Input Class Initialized
INFO - 2016-02-06 19:17:38 --> Language Class Initialized
INFO - 2016-02-06 19:17:38 --> Language Class Initialized
INFO - 2016-02-06 19:17:38 --> Config Class Initialized
INFO - 2016-02-06 19:17:38 --> Loader Class Initialized
INFO - 2016-02-06 19:17:38 --> Helper loaded: form_helper
INFO - 2016-02-06 19:17:38 --> Helper loaded: url_helper
INFO - 2016-02-06 19:17:38 --> Helper loaded: general_helper
INFO - 2016-02-06 19:17:38 --> Database Driver Class Initialized
INFO - 2016-02-06 19:17:38 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:17:38 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:17:38 --> Email Class Initialized
INFO - 2016-02-06 19:17:38 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:17:38 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:17:38 --> Helper loaded: language_helper
INFO - 2016-02-06 19:17:38 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:17:38 --> Model Class Initialized
INFO - 2016-02-06 19:17:38 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:17:38 --> Model Class Initialized
INFO - 2016-02-06 19:17:38 --> Helper loaded: date_helper
INFO - 2016-02-06 19:17:38 --> Controller Class Initialized
DEBUG - 2016-02-06 19:17:39 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:17:39 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dashboard/views/index.php
DEBUG - 2016-02-06 19:17:39 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:17:39 --> Final output sent to browser
DEBUG - 2016-02-06 19:17:39 --> Total execution time: 0.4250
INFO - 2016-02-06 19:17:48 --> Config Class Initialized
INFO - 2016-02-06 19:17:48 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:17:48 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:17:48 --> Utf8 Class Initialized
INFO - 2016-02-06 19:17:48 --> URI Class Initialized
INFO - 2016-02-06 19:17:48 --> Router Class Initialized
INFO - 2016-02-06 19:17:48 --> Output Class Initialized
INFO - 2016-02-06 19:17:48 --> Security Class Initialized
DEBUG - 2016-02-06 19:17:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:17:48 --> Input Class Initialized
INFO - 2016-02-06 19:17:48 --> Language Class Initialized
INFO - 2016-02-06 19:17:48 --> Language Class Initialized
INFO - 2016-02-06 19:17:48 --> Config Class Initialized
INFO - 2016-02-06 19:17:48 --> Loader Class Initialized
INFO - 2016-02-06 19:17:48 --> Helper loaded: form_helper
INFO - 2016-02-06 19:17:48 --> Helper loaded: url_helper
INFO - 2016-02-06 19:17:48 --> Helper loaded: general_helper
INFO - 2016-02-06 19:17:48 --> Database Driver Class Initialized
INFO - 2016-02-06 19:17:48 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:17:48 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:17:48 --> Email Class Initialized
INFO - 2016-02-06 19:17:48 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:17:48 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:17:48 --> Helper loaded: language_helper
INFO - 2016-02-06 19:17:48 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:17:48 --> Model Class Initialized
INFO - 2016-02-06 19:17:48 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:17:48 --> Model Class Initialized
INFO - 2016-02-06 19:17:48 --> Helper loaded: date_helper
INFO - 2016-02-06 19:17:48 --> Controller Class Initialized
INFO - 2016-02-06 19:17:48 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 19:17:48 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:17:48 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 19:17:48 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:17:48 --> Final output sent to browser
DEBUG - 2016-02-06 19:17:48 --> Total execution time: 0.4197
INFO - 2016-02-06 19:17:54 --> Config Class Initialized
INFO - 2016-02-06 19:17:54 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:17:54 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:17:54 --> Utf8 Class Initialized
INFO - 2016-02-06 19:17:54 --> URI Class Initialized
INFO - 2016-02-06 19:17:54 --> Router Class Initialized
INFO - 2016-02-06 19:17:54 --> Output Class Initialized
INFO - 2016-02-06 19:17:54 --> Security Class Initialized
DEBUG - 2016-02-06 19:17:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:17:54 --> Input Class Initialized
INFO - 2016-02-06 19:17:54 --> Language Class Initialized
INFO - 2016-02-06 19:17:54 --> Language Class Initialized
INFO - 2016-02-06 19:17:54 --> Config Class Initialized
INFO - 2016-02-06 19:17:54 --> Loader Class Initialized
INFO - 2016-02-06 19:17:54 --> Helper loaded: form_helper
INFO - 2016-02-06 19:17:54 --> Helper loaded: url_helper
INFO - 2016-02-06 19:17:54 --> Helper loaded: general_helper
INFO - 2016-02-06 19:17:54 --> Database Driver Class Initialized
INFO - 2016-02-06 19:17:54 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:17:54 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:17:54 --> Email Class Initialized
INFO - 2016-02-06 19:17:54 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:17:54 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:17:55 --> Helper loaded: language_helper
INFO - 2016-02-06 19:17:55 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:17:55 --> Model Class Initialized
INFO - 2016-02-06 19:17:55 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:17:55 --> Model Class Initialized
INFO - 2016-02-06 19:17:55 --> Helper loaded: date_helper
INFO - 2016-02-06 19:17:55 --> Controller Class Initialized
DEBUG - 2016-02-06 19:17:55 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 19:17:55 --> Model Class Initialized
INFO - 2016-02-06 19:17:55 --> Language file loaded: language/dutch/auth_lang.php
ERROR - 2016-02-06 19:17:55 --> Could not find the language line "create_user_validation_phone_label"
DEBUG - 2016-02-06 19:17:55 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:17:55 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/create_user.php
DEBUG - 2016-02-06 19:17:55 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:17:55 --> Final output sent to browser
DEBUG - 2016-02-06 19:17:55 --> Total execution time: 0.4701
INFO - 2016-02-06 19:18:33 --> Config Class Initialized
INFO - 2016-02-06 19:18:33 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:18:33 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:18:33 --> Utf8 Class Initialized
INFO - 2016-02-06 19:18:33 --> URI Class Initialized
INFO - 2016-02-06 19:18:33 --> Router Class Initialized
INFO - 2016-02-06 19:18:33 --> Output Class Initialized
INFO - 2016-02-06 19:18:33 --> Security Class Initialized
DEBUG - 2016-02-06 19:18:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:18:33 --> Input Class Initialized
INFO - 2016-02-06 19:18:33 --> Language Class Initialized
INFO - 2016-02-06 19:18:33 --> Language Class Initialized
INFO - 2016-02-06 19:18:33 --> Config Class Initialized
INFO - 2016-02-06 19:18:33 --> Loader Class Initialized
INFO - 2016-02-06 19:18:33 --> Helper loaded: form_helper
INFO - 2016-02-06 19:18:33 --> Helper loaded: url_helper
INFO - 2016-02-06 19:18:33 --> Helper loaded: general_helper
INFO - 2016-02-06 19:18:33 --> Database Driver Class Initialized
INFO - 2016-02-06 19:18:33 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:18:33 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:18:33 --> Email Class Initialized
INFO - 2016-02-06 19:18:33 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:18:34 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:18:34 --> Helper loaded: language_helper
INFO - 2016-02-06 19:18:34 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:18:34 --> Model Class Initialized
INFO - 2016-02-06 19:18:34 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:18:34 --> Model Class Initialized
INFO - 2016-02-06 19:18:34 --> Helper loaded: date_helper
INFO - 2016-02-06 19:18:34 --> Controller Class Initialized
DEBUG - 2016-02-06 19:18:34 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 19:18:34 --> Model Class Initialized
INFO - 2016-02-06 19:18:34 --> Language file loaded: language/dutch/auth_lang.php
ERROR - 2016-02-06 19:18:34 --> Could not find the language line "create_user_validation_phone_label"
INFO - 2016-02-06 19:18:34 --> Language file loaded: language/dutch/form_validation_lang.php
INFO - 2016-02-06 19:18:34 --> Config Class Initialized
INFO - 2016-02-06 19:18:34 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:18:34 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:18:34 --> Utf8 Class Initialized
INFO - 2016-02-06 19:18:34 --> URI Class Initialized
INFO - 2016-02-06 19:18:34 --> Router Class Initialized
INFO - 2016-02-06 19:18:34 --> Output Class Initialized
INFO - 2016-02-06 19:18:34 --> Security Class Initialized
DEBUG - 2016-02-06 19:18:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:18:34 --> Input Class Initialized
INFO - 2016-02-06 19:18:34 --> Language Class Initialized
ERROR - 2016-02-06 19:18:34 --> 404 Page Not Found: ../modules/auth/controllers/Auth/index
INFO - 2016-02-06 19:20:45 --> Config Class Initialized
INFO - 2016-02-06 19:20:45 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:20:45 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:20:45 --> Utf8 Class Initialized
INFO - 2016-02-06 19:20:45 --> URI Class Initialized
INFO - 2016-02-06 19:20:45 --> Router Class Initialized
INFO - 2016-02-06 19:20:45 --> Output Class Initialized
INFO - 2016-02-06 19:20:45 --> Security Class Initialized
DEBUG - 2016-02-06 19:20:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:20:45 --> Input Class Initialized
INFO - 2016-02-06 19:20:45 --> Language Class Initialized
INFO - 2016-02-06 19:20:45 --> Language Class Initialized
INFO - 2016-02-06 19:20:45 --> Config Class Initialized
INFO - 2016-02-06 19:20:45 --> Loader Class Initialized
INFO - 2016-02-06 19:20:45 --> Helper loaded: form_helper
INFO - 2016-02-06 19:20:45 --> Helper loaded: url_helper
INFO - 2016-02-06 19:20:45 --> Helper loaded: general_helper
INFO - 2016-02-06 19:20:45 --> Database Driver Class Initialized
INFO - 2016-02-06 19:20:45 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:20:45 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:20:45 --> Email Class Initialized
INFO - 2016-02-06 19:20:45 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:20:45 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:20:45 --> Helper loaded: language_helper
INFO - 2016-02-06 19:20:45 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:20:45 --> Model Class Initialized
INFO - 2016-02-06 19:20:45 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:20:45 --> Model Class Initialized
INFO - 2016-02-06 19:20:45 --> Helper loaded: date_helper
INFO - 2016-02-06 19:20:45 --> Controller Class Initialized
DEBUG - 2016-02-06 19:20:45 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 19:20:45 --> Model Class Initialized
INFO - 2016-02-06 19:20:45 --> Language file loaded: language/dutch/auth_lang.php
ERROR - 2016-02-06 19:20:45 --> Could not find the language line "create_user_validation_phone_label"
DEBUG - 2016-02-06 19:20:45 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:20:45 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/create_user.php
DEBUG - 2016-02-06 19:20:45 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:20:45 --> Final output sent to browser
DEBUG - 2016-02-06 19:20:45 --> Total execution time: 0.4708
INFO - 2016-02-06 19:20:46 --> Config Class Initialized
INFO - 2016-02-06 19:20:46 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:20:46 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:20:46 --> Utf8 Class Initialized
INFO - 2016-02-06 19:20:46 --> URI Class Initialized
INFO - 2016-02-06 19:20:46 --> Router Class Initialized
INFO - 2016-02-06 19:20:46 --> Output Class Initialized
INFO - 2016-02-06 19:20:46 --> Security Class Initialized
DEBUG - 2016-02-06 19:20:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:20:46 --> Input Class Initialized
INFO - 2016-02-06 19:20:46 --> Language Class Initialized
INFO - 2016-02-06 19:20:46 --> Language Class Initialized
INFO - 2016-02-06 19:20:46 --> Config Class Initialized
INFO - 2016-02-06 19:20:46 --> Loader Class Initialized
INFO - 2016-02-06 19:20:47 --> Helper loaded: form_helper
INFO - 2016-02-06 19:20:47 --> Helper loaded: url_helper
INFO - 2016-02-06 19:20:47 --> Helper loaded: general_helper
INFO - 2016-02-06 19:20:47 --> Database Driver Class Initialized
INFO - 2016-02-06 19:20:47 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:20:47 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:20:47 --> Email Class Initialized
INFO - 2016-02-06 19:20:47 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:20:47 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:20:47 --> Helper loaded: language_helper
INFO - 2016-02-06 19:20:47 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:20:47 --> Model Class Initialized
INFO - 2016-02-06 19:20:47 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:20:47 --> Model Class Initialized
INFO - 2016-02-06 19:20:47 --> Helper loaded: date_helper
INFO - 2016-02-06 19:20:47 --> Controller Class Initialized
INFO - 2016-02-06 19:20:47 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 19:20:47 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:20:47 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 19:20:47 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:20:47 --> Final output sent to browser
DEBUG - 2016-02-06 19:20:47 --> Total execution time: 0.4253
INFO - 2016-02-06 19:20:49 --> Config Class Initialized
INFO - 2016-02-06 19:20:49 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:20:49 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:20:49 --> Utf8 Class Initialized
INFO - 2016-02-06 19:20:49 --> URI Class Initialized
INFO - 2016-02-06 19:20:49 --> Router Class Initialized
INFO - 2016-02-06 19:20:49 --> Output Class Initialized
INFO - 2016-02-06 19:20:49 --> Security Class Initialized
DEBUG - 2016-02-06 19:20:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:20:49 --> Input Class Initialized
INFO - 2016-02-06 19:20:49 --> Language Class Initialized
INFO - 2016-02-06 19:20:49 --> Language Class Initialized
INFO - 2016-02-06 19:20:50 --> Config Class Initialized
INFO - 2016-02-06 19:20:50 --> Loader Class Initialized
INFO - 2016-02-06 19:20:50 --> Helper loaded: form_helper
INFO - 2016-02-06 19:20:50 --> Helper loaded: url_helper
INFO - 2016-02-06 19:20:50 --> Helper loaded: general_helper
INFO - 2016-02-06 19:20:50 --> Database Driver Class Initialized
INFO - 2016-02-06 19:20:50 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:20:50 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:20:50 --> Email Class Initialized
INFO - 2016-02-06 19:20:50 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:20:50 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:20:50 --> Helper loaded: language_helper
INFO - 2016-02-06 19:20:50 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:20:50 --> Model Class Initialized
INFO - 2016-02-06 19:20:50 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:20:50 --> Model Class Initialized
INFO - 2016-02-06 19:20:50 --> Helper loaded: date_helper
INFO - 2016-02-06 19:20:50 --> Controller Class Initialized
DEBUG - 2016-02-06 19:20:50 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 19:20:50 --> Model Class Initialized
INFO - 2016-02-06 19:20:50 --> Language file loaded: language/dutch/auth_lang.php
ERROR - 2016-02-06 19:20:50 --> Could not find the language line "create_user_validation_phone_label"
DEBUG - 2016-02-06 19:20:50 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:20:50 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/create_user.php
DEBUG - 2016-02-06 19:20:50 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:20:50 --> Final output sent to browser
DEBUG - 2016-02-06 19:20:50 --> Total execution time: 0.4675
INFO - 2016-02-06 19:21:10 --> Config Class Initialized
INFO - 2016-02-06 19:21:10 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:21:10 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:21:10 --> Utf8 Class Initialized
INFO - 2016-02-06 19:21:10 --> URI Class Initialized
INFO - 2016-02-06 19:21:10 --> Router Class Initialized
INFO - 2016-02-06 19:21:10 --> Output Class Initialized
INFO - 2016-02-06 19:21:10 --> Security Class Initialized
DEBUG - 2016-02-06 19:21:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:21:10 --> Input Class Initialized
INFO - 2016-02-06 19:21:10 --> Language Class Initialized
INFO - 2016-02-06 19:21:10 --> Language Class Initialized
INFO - 2016-02-06 19:21:10 --> Config Class Initialized
INFO - 2016-02-06 19:21:10 --> Loader Class Initialized
INFO - 2016-02-06 19:21:10 --> Helper loaded: form_helper
INFO - 2016-02-06 19:21:10 --> Helper loaded: url_helper
INFO - 2016-02-06 19:21:10 --> Helper loaded: general_helper
INFO - 2016-02-06 19:21:10 --> Database Driver Class Initialized
INFO - 2016-02-06 19:21:10 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:21:10 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:21:10 --> Email Class Initialized
INFO - 2016-02-06 19:21:10 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:21:10 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:21:10 --> Helper loaded: language_helper
INFO - 2016-02-06 19:21:10 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:21:10 --> Model Class Initialized
INFO - 2016-02-06 19:21:10 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:21:10 --> Model Class Initialized
INFO - 2016-02-06 19:21:10 --> Helper loaded: date_helper
INFO - 2016-02-06 19:21:10 --> Controller Class Initialized
DEBUG - 2016-02-06 19:21:10 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 19:21:10 --> Model Class Initialized
INFO - 2016-02-06 19:21:10 --> Language file loaded: language/dutch/auth_lang.php
ERROR - 2016-02-06 19:21:10 --> Could not find the language line "create_user_validation_phone_label"
INFO - 2016-02-06 19:21:10 --> Language file loaded: language/dutch/form_validation_lang.php
DEBUG - 2016-02-06 19:21:10 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:21:10 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/create_user.php
DEBUG - 2016-02-06 19:21:10 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:21:10 --> Final output sent to browser
DEBUG - 2016-02-06 19:21:10 --> Total execution time: 0.4722
INFO - 2016-02-06 19:21:42 --> Config Class Initialized
INFO - 2016-02-06 19:21:42 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:21:42 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:21:42 --> Utf8 Class Initialized
INFO - 2016-02-06 19:21:42 --> URI Class Initialized
INFO - 2016-02-06 19:21:42 --> Router Class Initialized
INFO - 2016-02-06 19:21:42 --> Output Class Initialized
INFO - 2016-02-06 19:21:42 --> Security Class Initialized
DEBUG - 2016-02-06 19:21:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:21:42 --> Input Class Initialized
INFO - 2016-02-06 19:21:42 --> Language Class Initialized
INFO - 2016-02-06 19:21:42 --> Language Class Initialized
INFO - 2016-02-06 19:21:42 --> Config Class Initialized
INFO - 2016-02-06 19:21:42 --> Loader Class Initialized
INFO - 2016-02-06 19:21:42 --> Helper loaded: form_helper
INFO - 2016-02-06 19:21:42 --> Helper loaded: url_helper
INFO - 2016-02-06 19:21:42 --> Helper loaded: general_helper
INFO - 2016-02-06 19:21:42 --> Database Driver Class Initialized
INFO - 2016-02-06 19:21:42 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:21:42 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:21:42 --> Email Class Initialized
INFO - 2016-02-06 19:21:42 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:21:42 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:21:42 --> Helper loaded: language_helper
INFO - 2016-02-06 19:21:42 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:21:42 --> Model Class Initialized
INFO - 2016-02-06 19:21:42 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:21:42 --> Model Class Initialized
INFO - 2016-02-06 19:21:42 --> Helper loaded: date_helper
INFO - 2016-02-06 19:21:42 --> Controller Class Initialized
DEBUG - 2016-02-06 19:21:42 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 19:21:42 --> Model Class Initialized
INFO - 2016-02-06 19:21:42 --> Language file loaded: language/dutch/auth_lang.php
ERROR - 2016-02-06 19:21:42 --> Could not find the language line "create_user_validation_phone_label"
DEBUG - 2016-02-06 19:21:42 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:21:42 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/create_user.php
DEBUG - 2016-02-06 19:21:42 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:21:42 --> Final output sent to browser
DEBUG - 2016-02-06 19:21:42 --> Total execution time: 0.4986
INFO - 2016-02-06 19:21:45 --> Config Class Initialized
INFO - 2016-02-06 19:21:45 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:21:45 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:21:45 --> Utf8 Class Initialized
INFO - 2016-02-06 19:21:45 --> URI Class Initialized
INFO - 2016-02-06 19:21:45 --> Router Class Initialized
INFO - 2016-02-06 19:21:45 --> Output Class Initialized
INFO - 2016-02-06 19:21:45 --> Security Class Initialized
DEBUG - 2016-02-06 19:21:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:21:45 --> Input Class Initialized
INFO - 2016-02-06 19:21:45 --> Language Class Initialized
INFO - 2016-02-06 19:21:45 --> Language Class Initialized
INFO - 2016-02-06 19:21:45 --> Config Class Initialized
INFO - 2016-02-06 19:21:45 --> Loader Class Initialized
INFO - 2016-02-06 19:21:45 --> Helper loaded: form_helper
INFO - 2016-02-06 19:21:45 --> Helper loaded: url_helper
INFO - 2016-02-06 19:21:45 --> Helper loaded: general_helper
INFO - 2016-02-06 19:21:45 --> Database Driver Class Initialized
INFO - 2016-02-06 19:21:45 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:21:45 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:21:45 --> Email Class Initialized
INFO - 2016-02-06 19:21:45 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:21:45 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:21:45 --> Helper loaded: language_helper
INFO - 2016-02-06 19:21:45 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:21:45 --> Model Class Initialized
INFO - 2016-02-06 19:21:45 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:21:45 --> Model Class Initialized
INFO - 2016-02-06 19:21:45 --> Helper loaded: date_helper
INFO - 2016-02-06 19:21:45 --> Controller Class Initialized
DEBUG - 2016-02-06 19:21:45 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 19:21:45 --> Model Class Initialized
INFO - 2016-02-06 19:21:45 --> Language file loaded: language/dutch/auth_lang.php
ERROR - 2016-02-06 19:21:45 --> Could not find the language line "create_user_validation_phone_label"
DEBUG - 2016-02-06 19:21:45 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:21:45 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/create_user.php
DEBUG - 2016-02-06 19:21:45 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:21:45 --> Final output sent to browser
DEBUG - 2016-02-06 19:21:45 --> Total execution time: 0.4727
INFO - 2016-02-06 19:22:18 --> Config Class Initialized
INFO - 2016-02-06 19:22:18 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:22:18 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:22:18 --> Utf8 Class Initialized
INFO - 2016-02-06 19:22:18 --> URI Class Initialized
INFO - 2016-02-06 19:22:18 --> Router Class Initialized
INFO - 2016-02-06 19:22:18 --> Output Class Initialized
INFO - 2016-02-06 19:22:18 --> Security Class Initialized
DEBUG - 2016-02-06 19:22:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:22:18 --> Input Class Initialized
INFO - 2016-02-06 19:22:18 --> Language Class Initialized
INFO - 2016-02-06 19:22:18 --> Language Class Initialized
INFO - 2016-02-06 19:22:18 --> Config Class Initialized
INFO - 2016-02-06 19:22:18 --> Loader Class Initialized
INFO - 2016-02-06 19:22:18 --> Helper loaded: form_helper
INFO - 2016-02-06 19:22:18 --> Helper loaded: url_helper
INFO - 2016-02-06 19:22:18 --> Helper loaded: general_helper
INFO - 2016-02-06 19:22:18 --> Database Driver Class Initialized
INFO - 2016-02-06 19:22:18 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:22:18 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:22:18 --> Email Class Initialized
INFO - 2016-02-06 19:22:18 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:22:18 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:22:18 --> Helper loaded: language_helper
INFO - 2016-02-06 19:22:18 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:22:18 --> Model Class Initialized
INFO - 2016-02-06 19:22:18 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:22:18 --> Model Class Initialized
INFO - 2016-02-06 19:22:18 --> Helper loaded: date_helper
INFO - 2016-02-06 19:22:18 --> Controller Class Initialized
DEBUG - 2016-02-06 19:22:18 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 19:22:18 --> Model Class Initialized
INFO - 2016-02-06 19:22:18 --> Language file loaded: language/dutch/auth_lang.php
ERROR - 2016-02-06 19:22:18 --> Could not find the language line "create_user_validation_phone_label"
INFO - 2016-02-06 19:22:18 --> Language file loaded: language/dutch/form_validation_lang.php
INFO - 2016-02-06 19:22:18 --> Config Class Initialized
INFO - 2016-02-06 19:22:18 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:22:18 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:22:18 --> Utf8 Class Initialized
INFO - 2016-02-06 19:22:18 --> URI Class Initialized
INFO - 2016-02-06 19:22:18 --> Router Class Initialized
INFO - 2016-02-06 19:22:18 --> Output Class Initialized
INFO - 2016-02-06 19:22:19 --> Security Class Initialized
DEBUG - 2016-02-06 19:22:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:22:19 --> Input Class Initialized
INFO - 2016-02-06 19:22:19 --> Language Class Initialized
INFO - 2016-02-06 19:22:19 --> Language Class Initialized
INFO - 2016-02-06 19:22:19 --> Config Class Initialized
INFO - 2016-02-06 19:22:19 --> Loader Class Initialized
INFO - 2016-02-06 19:22:19 --> Helper loaded: form_helper
INFO - 2016-02-06 19:22:19 --> Helper loaded: url_helper
INFO - 2016-02-06 19:22:19 --> Helper loaded: general_helper
INFO - 2016-02-06 19:22:19 --> Database Driver Class Initialized
INFO - 2016-02-06 19:22:19 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:22:19 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:22:19 --> Email Class Initialized
INFO - 2016-02-06 19:22:19 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:22:19 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:22:19 --> Helper loaded: language_helper
INFO - 2016-02-06 19:22:19 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:22:19 --> Model Class Initialized
INFO - 2016-02-06 19:22:19 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:22:19 --> Model Class Initialized
INFO - 2016-02-06 19:22:19 --> Helper loaded: date_helper
INFO - 2016-02-06 19:22:19 --> Controller Class Initialized
DEBUG - 2016-02-06 19:22:19 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 19:22:19 --> Model Class Initialized
INFO - 2016-02-06 19:22:19 --> Language file loaded: language/dutch/auth_lang.php
ERROR - 2016-02-06 19:22:19 --> Could not find the language line "create_user_validation_phone_label"
DEBUG - 2016-02-06 19:22:19 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:22:19 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/create_user.php
DEBUG - 2016-02-06 19:22:19 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:22:19 --> Final output sent to browser
DEBUG - 2016-02-06 19:22:19 --> Total execution time: 0.5108
INFO - 2016-02-06 19:22:49 --> Config Class Initialized
INFO - 2016-02-06 19:22:49 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:22:49 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:22:49 --> Utf8 Class Initialized
INFO - 2016-02-06 19:22:49 --> URI Class Initialized
INFO - 2016-02-06 19:22:49 --> Router Class Initialized
INFO - 2016-02-06 19:22:49 --> Output Class Initialized
INFO - 2016-02-06 19:22:49 --> Security Class Initialized
DEBUG - 2016-02-06 19:22:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:22:49 --> Input Class Initialized
INFO - 2016-02-06 19:22:49 --> Language Class Initialized
INFO - 2016-02-06 19:22:49 --> Language Class Initialized
INFO - 2016-02-06 19:22:49 --> Config Class Initialized
INFO - 2016-02-06 19:22:49 --> Loader Class Initialized
INFO - 2016-02-06 19:22:49 --> Helper loaded: form_helper
INFO - 2016-02-06 19:22:49 --> Helper loaded: url_helper
INFO - 2016-02-06 19:22:49 --> Helper loaded: general_helper
INFO - 2016-02-06 19:22:49 --> Database Driver Class Initialized
INFO - 2016-02-06 19:22:49 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:22:49 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:22:49 --> Email Class Initialized
INFO - 2016-02-06 19:22:49 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:22:49 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:22:49 --> Helper loaded: language_helper
INFO - 2016-02-06 19:22:49 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:22:49 --> Model Class Initialized
INFO - 2016-02-06 19:22:49 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:22:49 --> Model Class Initialized
INFO - 2016-02-06 19:22:49 --> Helper loaded: date_helper
INFO - 2016-02-06 19:22:49 --> Controller Class Initialized
INFO - 2016-02-06 19:22:49 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 19:22:49 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:22:49 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 19:22:49 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:22:49 --> Final output sent to browser
DEBUG - 2016-02-06 19:22:49 --> Total execution time: 0.4608
INFO - 2016-02-06 19:22:58 --> Config Class Initialized
INFO - 2016-02-06 19:22:58 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:22:58 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:22:58 --> Utf8 Class Initialized
INFO - 2016-02-06 19:22:58 --> URI Class Initialized
INFO - 2016-02-06 19:22:58 --> Router Class Initialized
INFO - 2016-02-06 19:22:58 --> Output Class Initialized
INFO - 2016-02-06 19:22:58 --> Security Class Initialized
DEBUG - 2016-02-06 19:22:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:22:58 --> Input Class Initialized
INFO - 2016-02-06 19:22:58 --> Language Class Initialized
INFO - 2016-02-06 19:22:58 --> Language Class Initialized
INFO - 2016-02-06 19:22:58 --> Config Class Initialized
INFO - 2016-02-06 19:22:58 --> Loader Class Initialized
INFO - 2016-02-06 19:22:58 --> Helper loaded: form_helper
INFO - 2016-02-06 19:22:58 --> Helper loaded: url_helper
INFO - 2016-02-06 19:22:58 --> Helper loaded: general_helper
INFO - 2016-02-06 19:22:58 --> Database Driver Class Initialized
INFO - 2016-02-06 19:22:58 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:22:58 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:22:58 --> Email Class Initialized
INFO - 2016-02-06 19:22:58 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:22:58 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:22:58 --> Helper loaded: language_helper
INFO - 2016-02-06 19:22:59 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:22:59 --> Model Class Initialized
INFO - 2016-02-06 19:22:59 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:22:59 --> Model Class Initialized
INFO - 2016-02-06 19:22:59 --> Helper loaded: date_helper
INFO - 2016-02-06 19:22:59 --> Controller Class Initialized
DEBUG - 2016-02-06 19:22:59 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 19:22:59 --> Model Class Initialized
INFO - 2016-02-06 19:22:59 --> Language file loaded: language/dutch/auth_lang.php
ERROR - 2016-02-06 19:22:59 --> Could not find the language line "edit_user_validation_phone_label"
INFO - 2016-02-06 19:22:59 --> Helper loaded: string_helper
DEBUG - 2016-02-06 19:22:59 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:22:59 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/edit_user.php
DEBUG - 2016-02-06 19:22:59 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:22:59 --> Final output sent to browser
DEBUG - 2016-02-06 19:22:59 --> Total execution time: 0.4956
INFO - 2016-02-06 19:23:07 --> Config Class Initialized
INFO - 2016-02-06 19:23:07 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:23:07 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:23:07 --> Utf8 Class Initialized
INFO - 2016-02-06 19:23:07 --> URI Class Initialized
INFO - 2016-02-06 19:23:07 --> Router Class Initialized
INFO - 2016-02-06 19:23:07 --> Output Class Initialized
INFO - 2016-02-06 19:23:07 --> Security Class Initialized
DEBUG - 2016-02-06 19:23:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:23:07 --> Input Class Initialized
INFO - 2016-02-06 19:23:07 --> Language Class Initialized
INFO - 2016-02-06 19:23:07 --> Language Class Initialized
INFO - 2016-02-06 19:23:07 --> Config Class Initialized
INFO - 2016-02-06 19:23:07 --> Loader Class Initialized
INFO - 2016-02-06 19:23:07 --> Helper loaded: form_helper
INFO - 2016-02-06 19:23:07 --> Helper loaded: url_helper
INFO - 2016-02-06 19:23:07 --> Helper loaded: general_helper
INFO - 2016-02-06 19:23:07 --> Database Driver Class Initialized
INFO - 2016-02-06 19:23:07 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:23:07 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:23:07 --> Email Class Initialized
INFO - 2016-02-06 19:23:07 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:23:07 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:23:07 --> Helper loaded: language_helper
INFO - 2016-02-06 19:23:07 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:23:07 --> Model Class Initialized
INFO - 2016-02-06 19:23:07 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:23:07 --> Model Class Initialized
INFO - 2016-02-06 19:23:07 --> Helper loaded: date_helper
INFO - 2016-02-06 19:23:07 --> Controller Class Initialized
INFO - 2016-02-06 19:23:07 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 19:23:07 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:23:07 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 19:23:07 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:23:08 --> Final output sent to browser
DEBUG - 2016-02-06 19:23:08 --> Total execution time: 0.4429
INFO - 2016-02-06 19:23:53 --> Config Class Initialized
INFO - 2016-02-06 19:23:53 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:23:53 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:23:53 --> Utf8 Class Initialized
INFO - 2016-02-06 19:23:53 --> URI Class Initialized
INFO - 2016-02-06 19:23:53 --> Router Class Initialized
INFO - 2016-02-06 19:23:53 --> Output Class Initialized
INFO - 2016-02-06 19:23:53 --> Security Class Initialized
DEBUG - 2016-02-06 19:23:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:23:53 --> Input Class Initialized
INFO - 2016-02-06 19:23:53 --> Language Class Initialized
INFO - 2016-02-06 19:23:53 --> Language Class Initialized
INFO - 2016-02-06 19:23:53 --> Config Class Initialized
INFO - 2016-02-06 19:23:53 --> Loader Class Initialized
INFO - 2016-02-06 19:23:53 --> Helper loaded: form_helper
INFO - 2016-02-06 19:23:53 --> Helper loaded: url_helper
INFO - 2016-02-06 19:23:53 --> Helper loaded: general_helper
INFO - 2016-02-06 19:23:53 --> Database Driver Class Initialized
INFO - 2016-02-06 19:23:53 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:23:53 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:23:53 --> Email Class Initialized
INFO - 2016-02-06 19:23:53 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:23:53 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:23:53 --> Helper loaded: language_helper
INFO - 2016-02-06 19:23:53 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:23:53 --> Model Class Initialized
INFO - 2016-02-06 19:23:53 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:23:53 --> Model Class Initialized
INFO - 2016-02-06 19:23:53 --> Helper loaded: date_helper
INFO - 2016-02-06 19:23:53 --> Controller Class Initialized
INFO - 2016-02-06 19:23:53 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 19:23:53 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:23:53 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 19:23:53 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:23:53 --> Final output sent to browser
DEBUG - 2016-02-06 19:23:53 --> Total execution time: 0.4639
INFO - 2016-02-06 19:25:04 --> Config Class Initialized
INFO - 2016-02-06 19:25:04 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:25:04 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:25:04 --> Utf8 Class Initialized
INFO - 2016-02-06 19:25:04 --> URI Class Initialized
INFO - 2016-02-06 19:25:04 --> Router Class Initialized
INFO - 2016-02-06 19:25:04 --> Output Class Initialized
INFO - 2016-02-06 19:25:04 --> Security Class Initialized
DEBUG - 2016-02-06 19:25:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:25:04 --> Input Class Initialized
INFO - 2016-02-06 19:25:04 --> Language Class Initialized
INFO - 2016-02-06 19:25:04 --> Language Class Initialized
INFO - 2016-02-06 19:25:04 --> Config Class Initialized
INFO - 2016-02-06 19:25:04 --> Loader Class Initialized
INFO - 2016-02-06 19:25:04 --> Helper loaded: form_helper
INFO - 2016-02-06 19:25:04 --> Helper loaded: url_helper
INFO - 2016-02-06 19:25:04 --> Helper loaded: general_helper
INFO - 2016-02-06 19:25:04 --> Database Driver Class Initialized
INFO - 2016-02-06 19:25:04 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:25:04 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:25:04 --> Email Class Initialized
INFO - 2016-02-06 19:25:04 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:25:04 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:25:04 --> Helper loaded: language_helper
INFO - 2016-02-06 19:25:04 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:25:04 --> Model Class Initialized
INFO - 2016-02-06 19:25:04 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:25:04 --> Model Class Initialized
INFO - 2016-02-06 19:25:04 --> Helper loaded: date_helper
INFO - 2016-02-06 19:25:04 --> Controller Class Initialized
INFO - 2016-02-06 19:25:04 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 19:25:04 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:25:04 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 19:25:04 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:25:04 --> Final output sent to browser
DEBUG - 2016-02-06 19:25:04 --> Total execution time: 0.4426
INFO - 2016-02-06 19:25:11 --> Config Class Initialized
INFO - 2016-02-06 19:25:11 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:25:11 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:25:11 --> Utf8 Class Initialized
INFO - 2016-02-06 19:25:11 --> URI Class Initialized
INFO - 2016-02-06 19:25:11 --> Router Class Initialized
INFO - 2016-02-06 19:25:11 --> Output Class Initialized
INFO - 2016-02-06 19:25:11 --> Security Class Initialized
DEBUG - 2016-02-06 19:25:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:25:11 --> Input Class Initialized
INFO - 2016-02-06 19:25:11 --> Language Class Initialized
INFO - 2016-02-06 19:25:11 --> Language Class Initialized
INFO - 2016-02-06 19:25:11 --> Config Class Initialized
INFO - 2016-02-06 19:25:11 --> Loader Class Initialized
INFO - 2016-02-06 19:25:11 --> Helper loaded: form_helper
INFO - 2016-02-06 19:25:11 --> Helper loaded: url_helper
INFO - 2016-02-06 19:25:11 --> Helper loaded: general_helper
INFO - 2016-02-06 19:25:11 --> Database Driver Class Initialized
INFO - 2016-02-06 19:25:11 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:25:11 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:25:11 --> Email Class Initialized
INFO - 2016-02-06 19:25:11 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:25:11 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:25:11 --> Helper loaded: language_helper
INFO - 2016-02-06 19:25:11 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:25:11 --> Model Class Initialized
INFO - 2016-02-06 19:25:11 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:25:11 --> Model Class Initialized
INFO - 2016-02-06 19:25:11 --> Helper loaded: date_helper
INFO - 2016-02-06 19:25:11 --> Controller Class Initialized
INFO - 2016-02-06 19:25:11 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 19:25:11 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:25:11 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 19:25:11 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:25:11 --> Final output sent to browser
DEBUG - 2016-02-06 19:25:11 --> Total execution time: 0.6598
INFO - 2016-02-06 19:26:35 --> Config Class Initialized
INFO - 2016-02-06 19:26:35 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:26:35 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:26:35 --> Utf8 Class Initialized
INFO - 2016-02-06 19:26:35 --> URI Class Initialized
INFO - 2016-02-06 19:26:35 --> Router Class Initialized
INFO - 2016-02-06 19:26:35 --> Output Class Initialized
INFO - 2016-02-06 19:26:35 --> Security Class Initialized
DEBUG - 2016-02-06 19:26:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:26:35 --> Input Class Initialized
INFO - 2016-02-06 19:26:35 --> Language Class Initialized
INFO - 2016-02-06 19:26:35 --> Language Class Initialized
INFO - 2016-02-06 19:26:35 --> Config Class Initialized
INFO - 2016-02-06 19:26:35 --> Loader Class Initialized
INFO - 2016-02-06 19:26:35 --> Helper loaded: form_helper
INFO - 2016-02-06 19:26:35 --> Helper loaded: url_helper
INFO - 2016-02-06 19:26:35 --> Helper loaded: general_helper
INFO - 2016-02-06 19:26:35 --> Database Driver Class Initialized
INFO - 2016-02-06 19:26:35 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:26:35 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:26:35 --> Email Class Initialized
INFO - 2016-02-06 19:26:35 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:26:35 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:26:35 --> Helper loaded: language_helper
INFO - 2016-02-06 19:26:35 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:26:35 --> Model Class Initialized
INFO - 2016-02-06 19:26:35 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:26:35 --> Model Class Initialized
INFO - 2016-02-06 19:26:35 --> Helper loaded: date_helper
INFO - 2016-02-06 19:26:35 --> Controller Class Initialized
INFO - 2016-02-06 19:26:35 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 19:26:35 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:26:35 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 19:26:35 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:26:35 --> Final output sent to browser
DEBUG - 2016-02-06 19:26:35 --> Total execution time: 0.4830
INFO - 2016-02-06 19:26:58 --> Config Class Initialized
INFO - 2016-02-06 19:26:58 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:26:58 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:26:58 --> Utf8 Class Initialized
INFO - 2016-02-06 19:26:58 --> URI Class Initialized
INFO - 2016-02-06 19:26:58 --> Router Class Initialized
INFO - 2016-02-06 19:26:58 --> Output Class Initialized
INFO - 2016-02-06 19:26:58 --> Security Class Initialized
DEBUG - 2016-02-06 19:26:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:26:58 --> Input Class Initialized
INFO - 2016-02-06 19:26:58 --> Language Class Initialized
INFO - 2016-02-06 19:26:58 --> Language Class Initialized
INFO - 2016-02-06 19:26:58 --> Config Class Initialized
INFO - 2016-02-06 19:26:58 --> Loader Class Initialized
INFO - 2016-02-06 19:26:58 --> Helper loaded: form_helper
INFO - 2016-02-06 19:26:58 --> Helper loaded: url_helper
INFO - 2016-02-06 19:26:58 --> Helper loaded: general_helper
INFO - 2016-02-06 19:26:58 --> Database Driver Class Initialized
INFO - 2016-02-06 19:26:58 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:26:58 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:26:58 --> Email Class Initialized
INFO - 2016-02-06 19:26:58 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:26:58 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:26:59 --> Helper loaded: language_helper
INFO - 2016-02-06 19:26:59 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:26:59 --> Model Class Initialized
INFO - 2016-02-06 19:26:59 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:26:59 --> Model Class Initialized
INFO - 2016-02-06 19:26:59 --> Helper loaded: date_helper
INFO - 2016-02-06 19:26:59 --> Controller Class Initialized
INFO - 2016-02-06 19:26:59 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 19:26:59 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:26:59 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 19:26:59 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:26:59 --> Final output sent to browser
DEBUG - 2016-02-06 19:26:59 --> Total execution time: 0.4999
INFO - 2016-02-06 19:27:16 --> Config Class Initialized
INFO - 2016-02-06 19:27:16 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:27:16 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:27:16 --> Utf8 Class Initialized
INFO - 2016-02-06 19:27:16 --> URI Class Initialized
INFO - 2016-02-06 19:27:16 --> Router Class Initialized
INFO - 2016-02-06 19:27:16 --> Output Class Initialized
INFO - 2016-02-06 19:27:16 --> Security Class Initialized
DEBUG - 2016-02-06 19:27:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:27:16 --> Input Class Initialized
INFO - 2016-02-06 19:27:16 --> Language Class Initialized
INFO - 2016-02-06 19:27:16 --> Language Class Initialized
INFO - 2016-02-06 19:27:16 --> Config Class Initialized
INFO - 2016-02-06 19:27:16 --> Loader Class Initialized
INFO - 2016-02-06 19:27:16 --> Helper loaded: form_helper
INFO - 2016-02-06 19:27:16 --> Helper loaded: url_helper
INFO - 2016-02-06 19:27:16 --> Helper loaded: general_helper
INFO - 2016-02-06 19:27:16 --> Database Driver Class Initialized
INFO - 2016-02-06 19:27:16 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:27:16 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:27:16 --> Email Class Initialized
INFO - 2016-02-06 19:27:16 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:27:16 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:27:16 --> Helper loaded: language_helper
INFO - 2016-02-06 19:27:16 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:27:16 --> Model Class Initialized
INFO - 2016-02-06 19:27:16 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:27:16 --> Model Class Initialized
INFO - 2016-02-06 19:27:16 --> Helper loaded: date_helper
INFO - 2016-02-06 19:27:16 --> Controller Class Initialized
INFO - 2016-02-06 19:27:16 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 19:27:16 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:27:16 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 19:27:16 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:27:16 --> Final output sent to browser
DEBUG - 2016-02-06 19:27:16 --> Total execution time: 0.4760
INFO - 2016-02-06 19:28:07 --> Config Class Initialized
INFO - 2016-02-06 19:28:07 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:28:07 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:28:07 --> Utf8 Class Initialized
INFO - 2016-02-06 19:28:07 --> URI Class Initialized
INFO - 2016-02-06 19:28:07 --> Router Class Initialized
INFO - 2016-02-06 19:28:07 --> Output Class Initialized
INFO - 2016-02-06 19:28:07 --> Security Class Initialized
DEBUG - 2016-02-06 19:28:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:28:08 --> Input Class Initialized
INFO - 2016-02-06 19:28:08 --> Language Class Initialized
INFO - 2016-02-06 19:28:08 --> Language Class Initialized
INFO - 2016-02-06 19:28:08 --> Config Class Initialized
INFO - 2016-02-06 19:28:08 --> Loader Class Initialized
INFO - 2016-02-06 19:28:08 --> Helper loaded: form_helper
INFO - 2016-02-06 19:28:08 --> Helper loaded: url_helper
INFO - 2016-02-06 19:28:08 --> Helper loaded: general_helper
INFO - 2016-02-06 19:28:08 --> Database Driver Class Initialized
INFO - 2016-02-06 19:28:08 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:28:08 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:28:08 --> Email Class Initialized
INFO - 2016-02-06 19:28:08 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:28:08 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:28:08 --> Helper loaded: language_helper
INFO - 2016-02-06 19:28:08 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:28:08 --> Model Class Initialized
INFO - 2016-02-06 19:28:08 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:28:08 --> Model Class Initialized
INFO - 2016-02-06 19:28:08 --> Helper loaded: date_helper
INFO - 2016-02-06 19:28:08 --> Controller Class Initialized
INFO - 2016-02-06 19:28:08 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 19:28:08 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:28:08 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 19:28:08 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:28:08 --> Final output sent to browser
DEBUG - 2016-02-06 19:28:08 --> Total execution time: 0.4764
INFO - 2016-02-06 19:28:20 --> Config Class Initialized
INFO - 2016-02-06 19:28:20 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:28:20 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:28:20 --> Utf8 Class Initialized
INFO - 2016-02-06 19:28:20 --> URI Class Initialized
INFO - 2016-02-06 19:28:20 --> Router Class Initialized
INFO - 2016-02-06 19:28:20 --> Output Class Initialized
INFO - 2016-02-06 19:28:20 --> Security Class Initialized
DEBUG - 2016-02-06 19:28:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:28:20 --> Input Class Initialized
INFO - 2016-02-06 19:28:20 --> Language Class Initialized
INFO - 2016-02-06 19:28:20 --> Language Class Initialized
INFO - 2016-02-06 19:28:20 --> Config Class Initialized
INFO - 2016-02-06 19:28:20 --> Loader Class Initialized
INFO - 2016-02-06 19:28:20 --> Helper loaded: form_helper
INFO - 2016-02-06 19:28:20 --> Helper loaded: url_helper
INFO - 2016-02-06 19:28:20 --> Helper loaded: general_helper
INFO - 2016-02-06 19:28:20 --> Database Driver Class Initialized
INFO - 2016-02-06 19:28:20 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:28:20 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:28:20 --> Email Class Initialized
INFO - 2016-02-06 19:28:20 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:28:20 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:28:20 --> Helper loaded: language_helper
INFO - 2016-02-06 19:28:20 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:28:20 --> Model Class Initialized
INFO - 2016-02-06 19:28:20 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:28:21 --> Model Class Initialized
INFO - 2016-02-06 19:28:21 --> Helper loaded: date_helper
INFO - 2016-02-06 19:28:21 --> Controller Class Initialized
INFO - 2016-02-06 19:28:21 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 19:28:21 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:28:21 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 19:28:21 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:28:21 --> Final output sent to browser
DEBUG - 2016-02-06 19:28:21 --> Total execution time: 0.4718
INFO - 2016-02-06 19:28:25 --> Config Class Initialized
INFO - 2016-02-06 19:28:25 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:28:25 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:28:25 --> Utf8 Class Initialized
INFO - 2016-02-06 19:28:25 --> URI Class Initialized
INFO - 2016-02-06 19:28:25 --> Router Class Initialized
INFO - 2016-02-06 19:28:25 --> Output Class Initialized
INFO - 2016-02-06 19:28:25 --> Security Class Initialized
DEBUG - 2016-02-06 19:28:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:28:25 --> Input Class Initialized
INFO - 2016-02-06 19:28:25 --> Language Class Initialized
INFO - 2016-02-06 19:28:25 --> Language Class Initialized
INFO - 2016-02-06 19:28:25 --> Config Class Initialized
INFO - 2016-02-06 19:28:25 --> Loader Class Initialized
INFO - 2016-02-06 19:28:25 --> Helper loaded: form_helper
INFO - 2016-02-06 19:28:25 --> Helper loaded: url_helper
INFO - 2016-02-06 19:28:25 --> Helper loaded: general_helper
INFO - 2016-02-06 19:28:25 --> Database Driver Class Initialized
INFO - 2016-02-06 19:28:25 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:28:25 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:28:25 --> Email Class Initialized
INFO - 2016-02-06 19:28:25 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:28:25 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:28:25 --> Helper loaded: language_helper
INFO - 2016-02-06 19:28:25 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:28:25 --> Model Class Initialized
INFO - 2016-02-06 19:28:25 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:28:26 --> Model Class Initialized
INFO - 2016-02-06 19:28:26 --> Helper loaded: date_helper
INFO - 2016-02-06 19:28:26 --> Controller Class Initialized
INFO - 2016-02-06 19:28:26 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 19:28:26 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:28:26 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 19:28:26 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:28:26 --> Final output sent to browser
DEBUG - 2016-02-06 19:28:26 --> Total execution time: 0.4979
INFO - 2016-02-06 19:28:45 --> Config Class Initialized
INFO - 2016-02-06 19:28:45 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:28:45 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:28:45 --> Utf8 Class Initialized
INFO - 2016-02-06 19:28:45 --> URI Class Initialized
INFO - 2016-02-06 19:28:45 --> Router Class Initialized
INFO - 2016-02-06 19:28:45 --> Output Class Initialized
INFO - 2016-02-06 19:28:45 --> Security Class Initialized
DEBUG - 2016-02-06 19:28:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:28:45 --> Input Class Initialized
INFO - 2016-02-06 19:28:45 --> Language Class Initialized
INFO - 2016-02-06 19:28:45 --> Language Class Initialized
INFO - 2016-02-06 19:28:45 --> Config Class Initialized
INFO - 2016-02-06 19:28:45 --> Loader Class Initialized
INFO - 2016-02-06 19:28:45 --> Helper loaded: form_helper
INFO - 2016-02-06 19:28:45 --> Helper loaded: url_helper
INFO - 2016-02-06 19:28:45 --> Helper loaded: general_helper
INFO - 2016-02-06 19:28:46 --> Database Driver Class Initialized
INFO - 2016-02-06 19:28:46 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:28:46 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:28:46 --> Email Class Initialized
INFO - 2016-02-06 19:28:46 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:28:46 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:28:46 --> Helper loaded: language_helper
INFO - 2016-02-06 19:28:46 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:28:46 --> Model Class Initialized
INFO - 2016-02-06 19:28:46 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:28:46 --> Model Class Initialized
INFO - 2016-02-06 19:28:46 --> Helper loaded: date_helper
INFO - 2016-02-06 19:28:46 --> Controller Class Initialized
INFO - 2016-02-06 19:28:46 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 19:28:46 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:28:46 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 19:28:46 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:28:46 --> Final output sent to browser
DEBUG - 2016-02-06 19:28:46 --> Total execution time: 0.5038
INFO - 2016-02-06 19:29:42 --> Config Class Initialized
INFO - 2016-02-06 19:29:42 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:29:42 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:29:42 --> Utf8 Class Initialized
INFO - 2016-02-06 19:29:42 --> URI Class Initialized
INFO - 2016-02-06 19:29:42 --> Router Class Initialized
INFO - 2016-02-06 19:29:42 --> Output Class Initialized
INFO - 2016-02-06 19:29:42 --> Security Class Initialized
DEBUG - 2016-02-06 19:29:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:29:42 --> Input Class Initialized
INFO - 2016-02-06 19:29:42 --> Language Class Initialized
INFO - 2016-02-06 19:29:42 --> Language Class Initialized
INFO - 2016-02-06 19:29:42 --> Config Class Initialized
INFO - 2016-02-06 19:29:42 --> Loader Class Initialized
INFO - 2016-02-06 19:29:42 --> Helper loaded: form_helper
INFO - 2016-02-06 19:29:43 --> Helper loaded: url_helper
INFO - 2016-02-06 19:29:43 --> Helper loaded: general_helper
INFO - 2016-02-06 19:29:43 --> Database Driver Class Initialized
INFO - 2016-02-06 19:29:43 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:29:43 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:29:43 --> Email Class Initialized
INFO - 2016-02-06 19:29:43 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:29:43 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:29:43 --> Helper loaded: language_helper
INFO - 2016-02-06 19:29:43 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:29:43 --> Model Class Initialized
INFO - 2016-02-06 19:29:43 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:29:43 --> Model Class Initialized
INFO - 2016-02-06 19:29:43 --> Helper loaded: date_helper
INFO - 2016-02-06 19:29:43 --> Controller Class Initialized
INFO - 2016-02-06 19:29:43 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 19:29:43 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:29:43 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 19:29:43 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:29:43 --> Final output sent to browser
DEBUG - 2016-02-06 19:29:43 --> Total execution time: 0.4462
INFO - 2016-02-06 19:30:26 --> Config Class Initialized
INFO - 2016-02-06 19:30:26 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:30:26 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:30:26 --> Utf8 Class Initialized
INFO - 2016-02-06 19:30:26 --> URI Class Initialized
INFO - 2016-02-06 19:30:26 --> Router Class Initialized
INFO - 2016-02-06 19:30:26 --> Output Class Initialized
INFO - 2016-02-06 19:30:26 --> Security Class Initialized
DEBUG - 2016-02-06 19:30:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:30:26 --> Input Class Initialized
INFO - 2016-02-06 19:30:26 --> Language Class Initialized
INFO - 2016-02-06 19:30:26 --> Language Class Initialized
INFO - 2016-02-06 19:30:26 --> Config Class Initialized
INFO - 2016-02-06 19:30:26 --> Loader Class Initialized
INFO - 2016-02-06 19:30:26 --> Helper loaded: form_helper
INFO - 2016-02-06 19:30:26 --> Helper loaded: url_helper
INFO - 2016-02-06 19:30:26 --> Helper loaded: general_helper
INFO - 2016-02-06 19:30:26 --> Database Driver Class Initialized
INFO - 2016-02-06 19:30:26 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:30:26 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:30:26 --> Email Class Initialized
INFO - 2016-02-06 19:30:26 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:30:26 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:30:26 --> Helper loaded: language_helper
INFO - 2016-02-06 19:30:26 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:30:26 --> Model Class Initialized
INFO - 2016-02-06 19:30:26 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:30:26 --> Model Class Initialized
INFO - 2016-02-06 19:30:26 --> Helper loaded: date_helper
INFO - 2016-02-06 19:30:26 --> Controller Class Initialized
INFO - 2016-02-06 19:30:26 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 19:30:26 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:30:26 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 19:30:26 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:30:26 --> Final output sent to browser
DEBUG - 2016-02-06 19:30:26 --> Total execution time: 0.5412
INFO - 2016-02-06 19:30:39 --> Config Class Initialized
INFO - 2016-02-06 19:30:39 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:30:39 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:30:39 --> Utf8 Class Initialized
INFO - 2016-02-06 19:30:39 --> URI Class Initialized
INFO - 2016-02-06 19:30:39 --> Router Class Initialized
INFO - 2016-02-06 19:30:39 --> Output Class Initialized
INFO - 2016-02-06 19:30:40 --> Security Class Initialized
DEBUG - 2016-02-06 19:30:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:30:40 --> Input Class Initialized
INFO - 2016-02-06 19:30:40 --> Language Class Initialized
INFO - 2016-02-06 19:30:40 --> Language Class Initialized
INFO - 2016-02-06 19:30:40 --> Config Class Initialized
INFO - 2016-02-06 19:30:40 --> Loader Class Initialized
INFO - 2016-02-06 19:30:40 --> Helper loaded: form_helper
INFO - 2016-02-06 19:30:40 --> Helper loaded: url_helper
INFO - 2016-02-06 19:30:40 --> Helper loaded: general_helper
INFO - 2016-02-06 19:30:40 --> Database Driver Class Initialized
INFO - 2016-02-06 19:30:40 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:30:40 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:30:40 --> Email Class Initialized
INFO - 2016-02-06 19:30:40 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:30:40 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:30:40 --> Helper loaded: language_helper
INFO - 2016-02-06 19:30:40 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:30:40 --> Model Class Initialized
INFO - 2016-02-06 19:30:40 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:30:40 --> Model Class Initialized
INFO - 2016-02-06 19:30:40 --> Helper loaded: date_helper
INFO - 2016-02-06 19:30:40 --> Controller Class Initialized
INFO - 2016-02-06 19:30:40 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 19:30:40 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:30:40 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 19:30:40 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:30:40 --> Final output sent to browser
DEBUG - 2016-02-06 19:30:40 --> Total execution time: 0.4799
INFO - 2016-02-06 19:30:51 --> Config Class Initialized
INFO - 2016-02-06 19:30:51 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:30:51 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:30:51 --> Utf8 Class Initialized
INFO - 2016-02-06 19:30:51 --> URI Class Initialized
INFO - 2016-02-06 19:30:51 --> Router Class Initialized
INFO - 2016-02-06 19:30:51 --> Output Class Initialized
INFO - 2016-02-06 19:30:51 --> Security Class Initialized
DEBUG - 2016-02-06 19:30:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:30:51 --> Input Class Initialized
INFO - 2016-02-06 19:30:51 --> Language Class Initialized
INFO - 2016-02-06 19:30:51 --> Language Class Initialized
INFO - 2016-02-06 19:30:51 --> Config Class Initialized
INFO - 2016-02-06 19:30:51 --> Loader Class Initialized
INFO - 2016-02-06 19:30:51 --> Helper loaded: form_helper
INFO - 2016-02-06 19:30:51 --> Helper loaded: url_helper
INFO - 2016-02-06 19:30:51 --> Helper loaded: general_helper
INFO - 2016-02-06 19:30:51 --> Database Driver Class Initialized
INFO - 2016-02-06 19:30:51 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:30:51 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:30:51 --> Email Class Initialized
INFO - 2016-02-06 19:30:51 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:30:51 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:30:51 --> Helper loaded: language_helper
INFO - 2016-02-06 19:30:51 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:30:51 --> Model Class Initialized
INFO - 2016-02-06 19:30:51 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:30:51 --> Model Class Initialized
INFO - 2016-02-06 19:30:51 --> Helper loaded: date_helper
INFO - 2016-02-06 19:30:51 --> Controller Class Initialized
INFO - 2016-02-06 19:30:51 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 19:30:51 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:30:51 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 19:30:51 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:30:51 --> Final output sent to browser
DEBUG - 2016-02-06 19:30:51 --> Total execution time: 0.4709
INFO - 2016-02-06 19:32:16 --> Config Class Initialized
INFO - 2016-02-06 19:32:17 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:32:17 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:32:17 --> Utf8 Class Initialized
INFO - 2016-02-06 19:32:17 --> URI Class Initialized
INFO - 2016-02-06 19:32:17 --> Router Class Initialized
INFO - 2016-02-06 19:32:17 --> Output Class Initialized
INFO - 2016-02-06 19:32:17 --> Security Class Initialized
DEBUG - 2016-02-06 19:32:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:32:17 --> Input Class Initialized
INFO - 2016-02-06 19:32:17 --> Language Class Initialized
INFO - 2016-02-06 19:32:17 --> Language Class Initialized
INFO - 2016-02-06 19:32:17 --> Config Class Initialized
INFO - 2016-02-06 19:32:17 --> Loader Class Initialized
INFO - 2016-02-06 19:32:17 --> Helper loaded: form_helper
INFO - 2016-02-06 19:32:17 --> Helper loaded: url_helper
INFO - 2016-02-06 19:32:17 --> Helper loaded: general_helper
INFO - 2016-02-06 19:32:17 --> Database Driver Class Initialized
INFO - 2016-02-06 19:32:17 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:32:17 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:32:17 --> Email Class Initialized
INFO - 2016-02-06 19:32:17 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:32:17 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:32:17 --> Helper loaded: language_helper
INFO - 2016-02-06 19:32:17 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:32:17 --> Model Class Initialized
INFO - 2016-02-06 19:32:17 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:32:17 --> Model Class Initialized
INFO - 2016-02-06 19:32:17 --> Helper loaded: date_helper
INFO - 2016-02-06 19:32:17 --> Controller Class Initialized
INFO - 2016-02-06 19:32:17 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 19:32:17 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:32:17 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 19:32:17 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:32:17 --> Final output sent to browser
DEBUG - 2016-02-06 19:32:17 --> Total execution time: 0.4823
INFO - 2016-02-06 19:32:28 --> Config Class Initialized
INFO - 2016-02-06 19:32:28 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:32:28 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:32:28 --> Utf8 Class Initialized
INFO - 2016-02-06 19:32:28 --> URI Class Initialized
INFO - 2016-02-06 19:32:28 --> Router Class Initialized
INFO - 2016-02-06 19:32:28 --> Output Class Initialized
INFO - 2016-02-06 19:32:28 --> Security Class Initialized
DEBUG - 2016-02-06 19:32:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:32:28 --> Input Class Initialized
INFO - 2016-02-06 19:32:28 --> Language Class Initialized
INFO - 2016-02-06 19:32:28 --> Language Class Initialized
INFO - 2016-02-06 19:32:28 --> Config Class Initialized
INFO - 2016-02-06 19:32:28 --> Loader Class Initialized
INFO - 2016-02-06 19:32:29 --> Helper loaded: form_helper
INFO - 2016-02-06 19:32:29 --> Helper loaded: url_helper
INFO - 2016-02-06 19:32:29 --> Helper loaded: general_helper
INFO - 2016-02-06 19:32:29 --> Database Driver Class Initialized
INFO - 2016-02-06 19:32:29 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:32:29 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:32:29 --> Email Class Initialized
INFO - 2016-02-06 19:32:29 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:32:29 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:32:29 --> Helper loaded: language_helper
INFO - 2016-02-06 19:32:29 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:32:29 --> Model Class Initialized
INFO - 2016-02-06 19:32:29 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:32:29 --> Model Class Initialized
INFO - 2016-02-06 19:32:29 --> Helper loaded: date_helper
INFO - 2016-02-06 19:32:29 --> Controller Class Initialized
INFO - 2016-02-06 19:32:29 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 19:32:29 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:32:29 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 19:32:29 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:32:29 --> Final output sent to browser
DEBUG - 2016-02-06 19:32:29 --> Total execution time: 0.4783
INFO - 2016-02-06 19:34:15 --> Config Class Initialized
INFO - 2016-02-06 19:34:15 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:34:15 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:34:15 --> Utf8 Class Initialized
INFO - 2016-02-06 19:34:15 --> URI Class Initialized
INFO - 2016-02-06 19:34:15 --> Router Class Initialized
INFO - 2016-02-06 19:34:15 --> Output Class Initialized
INFO - 2016-02-06 19:34:15 --> Security Class Initialized
DEBUG - 2016-02-06 19:34:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:34:15 --> Input Class Initialized
INFO - 2016-02-06 19:34:15 --> Language Class Initialized
INFO - 2016-02-06 19:34:15 --> Language Class Initialized
INFO - 2016-02-06 19:34:15 --> Config Class Initialized
INFO - 2016-02-06 19:34:15 --> Loader Class Initialized
INFO - 2016-02-06 19:34:15 --> Helper loaded: form_helper
INFO - 2016-02-06 19:34:15 --> Helper loaded: url_helper
INFO - 2016-02-06 19:34:16 --> Helper loaded: general_helper
INFO - 2016-02-06 19:34:16 --> Database Driver Class Initialized
INFO - 2016-02-06 19:34:16 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:34:16 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:34:16 --> Email Class Initialized
INFO - 2016-02-06 19:34:16 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:34:16 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:34:16 --> Helper loaded: language_helper
INFO - 2016-02-06 19:34:16 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:34:16 --> Model Class Initialized
INFO - 2016-02-06 19:34:16 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:34:16 --> Model Class Initialized
INFO - 2016-02-06 19:34:16 --> Helper loaded: date_helper
INFO - 2016-02-06 19:34:16 --> Controller Class Initialized
INFO - 2016-02-06 19:34:16 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 19:34:16 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:34:16 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 19:34:16 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:34:16 --> Final output sent to browser
DEBUG - 2016-02-06 19:34:16 --> Total execution time: 0.5340
INFO - 2016-02-06 19:34:40 --> Config Class Initialized
INFO - 2016-02-06 19:34:40 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:34:40 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:34:40 --> Utf8 Class Initialized
INFO - 2016-02-06 19:34:40 --> URI Class Initialized
INFO - 2016-02-06 19:34:40 --> Router Class Initialized
INFO - 2016-02-06 19:34:40 --> Output Class Initialized
INFO - 2016-02-06 19:34:40 --> Security Class Initialized
DEBUG - 2016-02-06 19:34:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:34:40 --> Input Class Initialized
INFO - 2016-02-06 19:34:40 --> Language Class Initialized
INFO - 2016-02-06 19:34:40 --> Language Class Initialized
INFO - 2016-02-06 19:34:40 --> Config Class Initialized
INFO - 2016-02-06 19:34:40 --> Loader Class Initialized
INFO - 2016-02-06 19:34:40 --> Helper loaded: form_helper
INFO - 2016-02-06 19:34:40 --> Helper loaded: url_helper
INFO - 2016-02-06 19:34:40 --> Helper loaded: general_helper
INFO - 2016-02-06 19:34:40 --> Database Driver Class Initialized
INFO - 2016-02-06 19:34:40 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:34:40 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:34:40 --> Email Class Initialized
INFO - 2016-02-06 19:34:40 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:34:40 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:34:40 --> Helper loaded: language_helper
INFO - 2016-02-06 19:34:40 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:34:40 --> Model Class Initialized
INFO - 2016-02-06 19:34:40 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:34:40 --> Model Class Initialized
INFO - 2016-02-06 19:34:40 --> Helper loaded: date_helper
INFO - 2016-02-06 19:34:40 --> Controller Class Initialized
INFO - 2016-02-06 19:34:40 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 19:34:40 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:34:40 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 19:34:40 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:34:40 --> Final output sent to browser
DEBUG - 2016-02-06 19:34:40 --> Total execution time: 0.4886
INFO - 2016-02-06 19:35:26 --> Config Class Initialized
INFO - 2016-02-06 19:35:26 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:35:26 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:35:26 --> Utf8 Class Initialized
INFO - 2016-02-06 19:35:26 --> URI Class Initialized
INFO - 2016-02-06 19:35:26 --> Router Class Initialized
INFO - 2016-02-06 19:35:26 --> Output Class Initialized
INFO - 2016-02-06 19:35:26 --> Security Class Initialized
DEBUG - 2016-02-06 19:35:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:35:26 --> Input Class Initialized
INFO - 2016-02-06 19:35:26 --> Language Class Initialized
INFO - 2016-02-06 19:35:26 --> Language Class Initialized
INFO - 2016-02-06 19:35:26 --> Config Class Initialized
INFO - 2016-02-06 19:35:26 --> Loader Class Initialized
INFO - 2016-02-06 19:35:26 --> Helper loaded: form_helper
INFO - 2016-02-06 19:35:26 --> Helper loaded: url_helper
INFO - 2016-02-06 19:35:26 --> Helper loaded: general_helper
INFO - 2016-02-06 19:35:26 --> Database Driver Class Initialized
INFO - 2016-02-06 19:35:26 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:35:26 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:35:26 --> Email Class Initialized
INFO - 2016-02-06 19:35:26 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:35:26 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:35:26 --> Helper loaded: language_helper
INFO - 2016-02-06 19:35:26 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:35:26 --> Model Class Initialized
INFO - 2016-02-06 19:35:26 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:35:26 --> Model Class Initialized
INFO - 2016-02-06 19:35:26 --> Helper loaded: date_helper
INFO - 2016-02-06 19:35:26 --> Controller Class Initialized
DEBUG - 2016-02-06 19:35:27 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 19:35:27 --> Model Class Initialized
INFO - 2016-02-06 19:35:27 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 19:35:27 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:35:27 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/edit_group.php
DEBUG - 2016-02-06 19:35:27 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:35:27 --> Final output sent to browser
DEBUG - 2016-02-06 19:35:27 --> Total execution time: 0.5105
INFO - 2016-02-06 19:35:32 --> Config Class Initialized
INFO - 2016-02-06 19:35:32 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:35:32 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:35:32 --> Utf8 Class Initialized
INFO - 2016-02-06 19:35:32 --> URI Class Initialized
INFO - 2016-02-06 19:35:32 --> Router Class Initialized
INFO - 2016-02-06 19:35:32 --> Output Class Initialized
INFO - 2016-02-06 19:35:32 --> Security Class Initialized
DEBUG - 2016-02-06 19:35:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:35:32 --> Input Class Initialized
INFO - 2016-02-06 19:35:32 --> Language Class Initialized
INFO - 2016-02-06 19:35:32 --> Language Class Initialized
INFO - 2016-02-06 19:35:32 --> Config Class Initialized
INFO - 2016-02-06 19:35:32 --> Loader Class Initialized
INFO - 2016-02-06 19:35:32 --> Helper loaded: form_helper
INFO - 2016-02-06 19:35:32 --> Helper loaded: url_helper
INFO - 2016-02-06 19:35:32 --> Helper loaded: general_helper
INFO - 2016-02-06 19:35:32 --> Database Driver Class Initialized
INFO - 2016-02-06 19:35:32 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:35:32 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:35:32 --> Email Class Initialized
INFO - 2016-02-06 19:35:32 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:35:32 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:35:32 --> Helper loaded: language_helper
INFO - 2016-02-06 19:35:32 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:35:32 --> Model Class Initialized
INFO - 2016-02-06 19:35:32 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:35:32 --> Model Class Initialized
INFO - 2016-02-06 19:35:32 --> Helper loaded: date_helper
INFO - 2016-02-06 19:35:32 --> Controller Class Initialized
INFO - 2016-02-06 19:35:32 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 19:35:32 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:35:32 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 19:35:32 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:35:33 --> Final output sent to browser
DEBUG - 2016-02-06 19:35:33 --> Total execution time: 0.4749
INFO - 2016-02-06 19:35:46 --> Config Class Initialized
INFO - 2016-02-06 19:35:46 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:35:46 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:35:46 --> Utf8 Class Initialized
INFO - 2016-02-06 19:35:46 --> URI Class Initialized
INFO - 2016-02-06 19:35:46 --> Router Class Initialized
INFO - 2016-02-06 19:35:46 --> Output Class Initialized
INFO - 2016-02-06 19:35:46 --> Security Class Initialized
DEBUG - 2016-02-06 19:35:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:35:46 --> Input Class Initialized
INFO - 2016-02-06 19:35:46 --> Language Class Initialized
INFO - 2016-02-06 19:35:46 --> Language Class Initialized
INFO - 2016-02-06 19:35:46 --> Config Class Initialized
INFO - 2016-02-06 19:35:46 --> Loader Class Initialized
INFO - 2016-02-06 19:35:46 --> Helper loaded: form_helper
INFO - 2016-02-06 19:35:46 --> Helper loaded: url_helper
INFO - 2016-02-06 19:35:46 --> Helper loaded: general_helper
INFO - 2016-02-06 19:35:46 --> Database Driver Class Initialized
INFO - 2016-02-06 19:35:46 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:35:46 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:35:46 --> Email Class Initialized
INFO - 2016-02-06 19:35:46 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:35:46 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:35:46 --> Helper loaded: language_helper
INFO - 2016-02-06 19:35:46 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:35:46 --> Model Class Initialized
INFO - 2016-02-06 19:35:46 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:35:46 --> Model Class Initialized
INFO - 2016-02-06 19:35:46 --> Helper loaded: date_helper
INFO - 2016-02-06 19:35:46 --> Controller Class Initialized
INFO - 2016-02-06 19:35:46 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 19:35:46 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:35:46 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 19:35:46 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:35:46 --> Final output sent to browser
DEBUG - 2016-02-06 19:35:46 --> Total execution time: 0.4736
INFO - 2016-02-06 19:37:25 --> Config Class Initialized
INFO - 2016-02-06 19:37:25 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:37:25 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:37:25 --> Utf8 Class Initialized
INFO - 2016-02-06 19:37:25 --> URI Class Initialized
INFO - 2016-02-06 19:37:25 --> Router Class Initialized
INFO - 2016-02-06 19:37:25 --> Output Class Initialized
INFO - 2016-02-06 19:37:25 --> Security Class Initialized
DEBUG - 2016-02-06 19:37:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:37:25 --> Input Class Initialized
INFO - 2016-02-06 19:37:25 --> Language Class Initialized
INFO - 2016-02-06 19:37:25 --> Language Class Initialized
INFO - 2016-02-06 19:37:25 --> Config Class Initialized
INFO - 2016-02-06 19:37:25 --> Loader Class Initialized
INFO - 2016-02-06 19:37:25 --> Helper loaded: form_helper
INFO - 2016-02-06 19:37:25 --> Helper loaded: url_helper
INFO - 2016-02-06 19:37:25 --> Helper loaded: general_helper
INFO - 2016-02-06 19:37:25 --> Database Driver Class Initialized
INFO - 2016-02-06 19:37:25 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:37:25 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:37:25 --> Email Class Initialized
INFO - 2016-02-06 19:37:25 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:37:25 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:37:25 --> Helper loaded: language_helper
INFO - 2016-02-06 19:37:25 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:37:25 --> Model Class Initialized
INFO - 2016-02-06 19:37:25 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:37:25 --> Model Class Initialized
INFO - 2016-02-06 19:37:25 --> Helper loaded: date_helper
INFO - 2016-02-06 19:37:25 --> Controller Class Initialized
INFO - 2016-02-06 19:37:25 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 19:37:25 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:37:25 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 19:37:25 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:37:25 --> Final output sent to browser
DEBUG - 2016-02-06 19:37:25 --> Total execution time: 0.4681
INFO - 2016-02-06 19:37:59 --> Config Class Initialized
INFO - 2016-02-06 19:37:59 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:37:59 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:37:59 --> Utf8 Class Initialized
INFO - 2016-02-06 19:37:59 --> URI Class Initialized
INFO - 2016-02-06 19:37:59 --> Router Class Initialized
INFO - 2016-02-06 19:37:59 --> Output Class Initialized
INFO - 2016-02-06 19:37:59 --> Security Class Initialized
DEBUG - 2016-02-06 19:37:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:37:59 --> Input Class Initialized
INFO - 2016-02-06 19:37:59 --> Language Class Initialized
INFO - 2016-02-06 19:37:59 --> Language Class Initialized
INFO - 2016-02-06 19:37:59 --> Config Class Initialized
INFO - 2016-02-06 19:37:59 --> Loader Class Initialized
INFO - 2016-02-06 19:37:59 --> Helper loaded: form_helper
INFO - 2016-02-06 19:37:59 --> Helper loaded: url_helper
INFO - 2016-02-06 19:37:59 --> Helper loaded: general_helper
INFO - 2016-02-06 19:37:59 --> Database Driver Class Initialized
INFO - 2016-02-06 19:38:00 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:38:00 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:38:00 --> Email Class Initialized
INFO - 2016-02-06 19:38:00 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:38:00 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:38:00 --> Helper loaded: language_helper
INFO - 2016-02-06 19:38:00 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:38:00 --> Model Class Initialized
INFO - 2016-02-06 19:38:00 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:38:00 --> Model Class Initialized
INFO - 2016-02-06 19:38:00 --> Helper loaded: date_helper
INFO - 2016-02-06 19:38:00 --> Controller Class Initialized
DEBUG - 2016-02-06 19:38:00 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 19:38:00 --> Model Class Initialized
INFO - 2016-02-06 19:38:00 --> Language file loaded: language/dutch/auth_lang.php
INFO - 2016-02-06 19:38:00 --> Helper loaded: string_helper
DEBUG - 2016-02-06 19:38:00 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:38:00 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/deactivate_user.php
DEBUG - 2016-02-06 19:38:00 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:38:00 --> Final output sent to browser
DEBUG - 2016-02-06 19:38:00 --> Total execution time: 0.5196
INFO - 2016-02-06 19:38:04 --> Config Class Initialized
INFO - 2016-02-06 19:38:04 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:38:04 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:38:04 --> Utf8 Class Initialized
INFO - 2016-02-06 19:38:04 --> URI Class Initialized
INFO - 2016-02-06 19:38:04 --> Router Class Initialized
INFO - 2016-02-06 19:38:04 --> Output Class Initialized
INFO - 2016-02-06 19:38:04 --> Security Class Initialized
DEBUG - 2016-02-06 19:38:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:38:04 --> Input Class Initialized
INFO - 2016-02-06 19:38:04 --> Language Class Initialized
INFO - 2016-02-06 19:38:04 --> Language Class Initialized
INFO - 2016-02-06 19:38:04 --> Config Class Initialized
INFO - 2016-02-06 19:38:04 --> Loader Class Initialized
INFO - 2016-02-06 19:38:04 --> Helper loaded: form_helper
INFO - 2016-02-06 19:38:04 --> Helper loaded: url_helper
INFO - 2016-02-06 19:38:04 --> Helper loaded: general_helper
INFO - 2016-02-06 19:38:04 --> Database Driver Class Initialized
INFO - 2016-02-06 19:38:04 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:38:04 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:38:04 --> Email Class Initialized
INFO - 2016-02-06 19:38:04 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:38:04 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:38:04 --> Helper loaded: language_helper
INFO - 2016-02-06 19:38:04 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:38:04 --> Model Class Initialized
INFO - 2016-02-06 19:38:04 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:38:04 --> Model Class Initialized
INFO - 2016-02-06 19:38:04 --> Helper loaded: date_helper
INFO - 2016-02-06 19:38:04 --> Controller Class Initialized
INFO - 2016-02-06 19:38:04 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 19:38:04 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:38:04 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 19:38:05 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:38:05 --> Final output sent to browser
DEBUG - 2016-02-06 19:38:05 --> Total execution time: 0.4746
INFO - 2016-02-06 19:38:59 --> Config Class Initialized
INFO - 2016-02-06 19:39:00 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:39:00 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:39:00 --> Utf8 Class Initialized
INFO - 2016-02-06 19:39:00 --> URI Class Initialized
INFO - 2016-02-06 19:39:00 --> Router Class Initialized
INFO - 2016-02-06 19:39:00 --> Output Class Initialized
INFO - 2016-02-06 19:39:00 --> Security Class Initialized
DEBUG - 2016-02-06 19:39:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:39:00 --> Input Class Initialized
INFO - 2016-02-06 19:39:00 --> Language Class Initialized
INFO - 2016-02-06 19:39:00 --> Language Class Initialized
INFO - 2016-02-06 19:39:00 --> Config Class Initialized
INFO - 2016-02-06 19:39:00 --> Loader Class Initialized
INFO - 2016-02-06 19:39:00 --> Helper loaded: form_helper
INFO - 2016-02-06 19:39:00 --> Helper loaded: url_helper
INFO - 2016-02-06 19:39:00 --> Helper loaded: general_helper
INFO - 2016-02-06 19:39:00 --> Database Driver Class Initialized
INFO - 2016-02-06 19:39:00 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:39:00 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:39:00 --> Email Class Initialized
INFO - 2016-02-06 19:39:00 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:39:00 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:39:00 --> Helper loaded: language_helper
INFO - 2016-02-06 19:39:00 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:39:00 --> Model Class Initialized
INFO - 2016-02-06 19:39:00 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:39:00 --> Model Class Initialized
INFO - 2016-02-06 19:39:00 --> Helper loaded: date_helper
INFO - 2016-02-06 19:39:00 --> Controller Class Initialized
DEBUG - 2016-02-06 19:39:00 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 19:39:00 --> Model Class Initialized
INFO - 2016-02-06 19:39:00 --> Language file loaded: language/dutch/auth_lang.php
ERROR - 2016-02-06 19:39:00 --> Could not find the language line "edit_user_validation_phone_label"
INFO - 2016-02-06 19:39:00 --> Helper loaded: string_helper
DEBUG - 2016-02-06 19:39:00 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:39:00 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/edit_user.php
DEBUG - 2016-02-06 19:39:00 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:39:00 --> Final output sent to browser
DEBUG - 2016-02-06 19:39:00 --> Total execution time: 0.5179
INFO - 2016-02-06 19:39:26 --> Config Class Initialized
INFO - 2016-02-06 19:39:26 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:39:26 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:39:26 --> Utf8 Class Initialized
INFO - 2016-02-06 19:39:26 --> URI Class Initialized
INFO - 2016-02-06 19:39:26 --> Router Class Initialized
INFO - 2016-02-06 19:39:26 --> Output Class Initialized
INFO - 2016-02-06 19:39:26 --> Security Class Initialized
DEBUG - 2016-02-06 19:39:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:39:26 --> Input Class Initialized
INFO - 2016-02-06 19:39:26 --> Language Class Initialized
INFO - 2016-02-06 19:39:26 --> Language Class Initialized
INFO - 2016-02-06 19:39:26 --> Config Class Initialized
INFO - 2016-02-06 19:39:26 --> Loader Class Initialized
INFO - 2016-02-06 19:39:26 --> Helper loaded: form_helper
INFO - 2016-02-06 19:39:26 --> Helper loaded: url_helper
INFO - 2016-02-06 19:39:26 --> Helper loaded: general_helper
INFO - 2016-02-06 19:39:26 --> Database Driver Class Initialized
INFO - 2016-02-06 19:39:26 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:39:26 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:39:26 --> Email Class Initialized
INFO - 2016-02-06 19:39:26 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:39:26 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:39:26 --> Helper loaded: language_helper
INFO - 2016-02-06 19:39:26 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:39:27 --> Model Class Initialized
INFO - 2016-02-06 19:39:27 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:39:27 --> Model Class Initialized
INFO - 2016-02-06 19:39:27 --> Helper loaded: date_helper
INFO - 2016-02-06 19:39:27 --> Controller Class Initialized
DEBUG - 2016-02-06 19:39:27 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 19:39:27 --> Model Class Initialized
INFO - 2016-02-06 19:39:27 --> Language file loaded: language/dutch/auth_lang.php
ERROR - 2016-02-06 19:39:27 --> Could not find the language line "edit_user_validation_phone_label"
INFO - 2016-02-06 19:39:27 --> Helper loaded: string_helper
DEBUG - 2016-02-06 19:39:27 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:39:27 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/edit_user.php
DEBUG - 2016-02-06 19:39:27 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:39:27 --> Final output sent to browser
DEBUG - 2016-02-06 19:39:27 --> Total execution time: 0.6787
INFO - 2016-02-06 19:39:33 --> Config Class Initialized
INFO - 2016-02-06 19:39:33 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:39:33 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:39:33 --> Utf8 Class Initialized
INFO - 2016-02-06 19:39:33 --> URI Class Initialized
INFO - 2016-02-06 19:39:33 --> Router Class Initialized
INFO - 2016-02-06 19:39:33 --> Output Class Initialized
INFO - 2016-02-06 19:39:33 --> Security Class Initialized
DEBUG - 2016-02-06 19:39:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:39:33 --> Input Class Initialized
INFO - 2016-02-06 19:39:33 --> Language Class Initialized
INFO - 2016-02-06 19:39:33 --> Language Class Initialized
INFO - 2016-02-06 19:39:33 --> Config Class Initialized
INFO - 2016-02-06 19:39:33 --> Loader Class Initialized
INFO - 2016-02-06 19:39:33 --> Helper loaded: form_helper
INFO - 2016-02-06 19:39:33 --> Helper loaded: url_helper
INFO - 2016-02-06 19:39:33 --> Helper loaded: general_helper
INFO - 2016-02-06 19:39:33 --> Database Driver Class Initialized
INFO - 2016-02-06 19:39:33 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:39:33 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:39:33 --> Email Class Initialized
INFO - 2016-02-06 19:39:33 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:39:33 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:39:33 --> Helper loaded: language_helper
INFO - 2016-02-06 19:39:33 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:39:33 --> Model Class Initialized
INFO - 2016-02-06 19:39:33 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:39:33 --> Model Class Initialized
INFO - 2016-02-06 19:39:33 --> Helper loaded: date_helper
INFO - 2016-02-06 19:39:33 --> Controller Class Initialized
INFO - 2016-02-06 19:39:33 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 19:39:34 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:39:34 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 19:39:34 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:39:34 --> Final output sent to browser
DEBUG - 2016-02-06 19:39:34 --> Total execution time: 0.5397
INFO - 2016-02-06 19:39:37 --> Config Class Initialized
INFO - 2016-02-06 19:39:37 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:39:37 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:39:37 --> Utf8 Class Initialized
INFO - 2016-02-06 19:39:37 --> URI Class Initialized
INFO - 2016-02-06 19:39:37 --> Router Class Initialized
INFO - 2016-02-06 19:39:37 --> Output Class Initialized
INFO - 2016-02-06 19:39:37 --> Security Class Initialized
DEBUG - 2016-02-06 19:39:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:39:37 --> Input Class Initialized
INFO - 2016-02-06 19:39:37 --> Language Class Initialized
INFO - 2016-02-06 19:39:37 --> Language Class Initialized
INFO - 2016-02-06 19:39:37 --> Config Class Initialized
INFO - 2016-02-06 19:39:37 --> Loader Class Initialized
INFO - 2016-02-06 19:39:37 --> Helper loaded: form_helper
INFO - 2016-02-06 19:39:37 --> Helper loaded: url_helper
INFO - 2016-02-06 19:39:37 --> Helper loaded: general_helper
INFO - 2016-02-06 19:39:37 --> Database Driver Class Initialized
INFO - 2016-02-06 19:39:37 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:39:37 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:39:37 --> Email Class Initialized
INFO - 2016-02-06 19:39:37 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:39:38 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:39:38 --> Helper loaded: language_helper
INFO - 2016-02-06 19:39:38 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:39:38 --> Model Class Initialized
INFO - 2016-02-06 19:39:38 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:39:38 --> Model Class Initialized
INFO - 2016-02-06 19:39:38 --> Helper loaded: date_helper
INFO - 2016-02-06 19:39:38 --> Controller Class Initialized
INFO - 2016-02-06 19:39:38 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 19:39:38 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:39:38 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 19:39:38 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:39:38 --> Final output sent to browser
DEBUG - 2016-02-06 19:39:38 --> Total execution time: 0.5044
INFO - 2016-02-06 19:45:05 --> Config Class Initialized
INFO - 2016-02-06 19:45:05 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:45:05 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:45:05 --> Utf8 Class Initialized
INFO - 2016-02-06 19:45:05 --> URI Class Initialized
INFO - 2016-02-06 19:45:05 --> Router Class Initialized
INFO - 2016-02-06 19:45:05 --> Output Class Initialized
INFO - 2016-02-06 19:45:05 --> Security Class Initialized
DEBUG - 2016-02-06 19:45:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:45:05 --> Input Class Initialized
INFO - 2016-02-06 19:45:05 --> Language Class Initialized
INFO - 2016-02-06 19:45:05 --> Language Class Initialized
INFO - 2016-02-06 19:45:05 --> Config Class Initialized
INFO - 2016-02-06 19:45:05 --> Loader Class Initialized
INFO - 2016-02-06 19:45:05 --> Helper loaded: form_helper
INFO - 2016-02-06 19:45:05 --> Helper loaded: url_helper
INFO - 2016-02-06 19:45:05 --> Helper loaded: general_helper
INFO - 2016-02-06 19:45:05 --> Database Driver Class Initialized
INFO - 2016-02-06 19:45:05 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:45:05 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:45:05 --> Email Class Initialized
INFO - 2016-02-06 19:45:05 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:45:05 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:45:05 --> Helper loaded: language_helper
INFO - 2016-02-06 19:45:05 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:45:06 --> Model Class Initialized
INFO - 2016-02-06 19:45:06 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:45:06 --> Model Class Initialized
INFO - 2016-02-06 19:45:06 --> Helper loaded: date_helper
INFO - 2016-02-06 19:45:06 --> Controller Class Initialized
DEBUG - 2016-02-06 19:45:06 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:45:06 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dashboard/views/index.php
DEBUG - 2016-02-06 19:45:06 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:45:06 --> Final output sent to browser
DEBUG - 2016-02-06 19:45:06 --> Total execution time: 0.4599
INFO - 2016-02-06 19:45:07 --> Config Class Initialized
INFO - 2016-02-06 19:45:07 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:45:07 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:45:07 --> Utf8 Class Initialized
INFO - 2016-02-06 19:45:07 --> URI Class Initialized
DEBUG - 2016-02-06 19:45:08 --> No URI present. Default controller set.
INFO - 2016-02-06 19:45:08 --> Router Class Initialized
INFO - 2016-02-06 19:45:08 --> Output Class Initialized
INFO - 2016-02-06 19:45:08 --> Security Class Initialized
DEBUG - 2016-02-06 19:45:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:45:08 --> Input Class Initialized
INFO - 2016-02-06 19:45:08 --> Language Class Initialized
INFO - 2016-02-06 19:45:08 --> Language Class Initialized
INFO - 2016-02-06 19:45:08 --> Config Class Initialized
INFO - 2016-02-06 19:45:08 --> Loader Class Initialized
INFO - 2016-02-06 19:45:08 --> Helper loaded: form_helper
INFO - 2016-02-06 19:45:08 --> Helper loaded: url_helper
INFO - 2016-02-06 19:45:08 --> Helper loaded: general_helper
INFO - 2016-02-06 19:45:08 --> Database Driver Class Initialized
INFO - 2016-02-06 19:45:08 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:45:08 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:45:08 --> Email Class Initialized
INFO - 2016-02-06 19:45:08 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:45:08 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:45:08 --> Helper loaded: language_helper
INFO - 2016-02-06 19:45:08 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:45:08 --> Model Class Initialized
INFO - 2016-02-06 19:45:08 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:45:08 --> Model Class Initialized
INFO - 2016-02-06 19:45:08 --> Helper loaded: date_helper
INFO - 2016-02-06 19:45:08 --> Controller Class Initialized
DEBUG - 2016-02-06 19:45:08 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:45:08 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dashboard/views/index.php
DEBUG - 2016-02-06 19:45:08 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:45:08 --> Final output sent to browser
DEBUG - 2016-02-06 19:45:08 --> Total execution time: 0.4775
INFO - 2016-02-06 19:45:11 --> Config Class Initialized
INFO - 2016-02-06 19:45:11 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:45:11 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:45:11 --> Utf8 Class Initialized
INFO - 2016-02-06 19:45:11 --> URI Class Initialized
INFO - 2016-02-06 19:45:11 --> Router Class Initialized
INFO - 2016-02-06 19:45:11 --> Output Class Initialized
INFO - 2016-02-06 19:45:11 --> Security Class Initialized
DEBUG - 2016-02-06 19:45:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:45:11 --> Input Class Initialized
INFO - 2016-02-06 19:45:11 --> Language Class Initialized
INFO - 2016-02-06 19:45:11 --> Language Class Initialized
INFO - 2016-02-06 19:45:11 --> Config Class Initialized
INFO - 2016-02-06 19:45:11 --> Loader Class Initialized
INFO - 2016-02-06 19:45:11 --> Helper loaded: form_helper
INFO - 2016-02-06 19:45:11 --> Helper loaded: url_helper
INFO - 2016-02-06 19:45:11 --> Helper loaded: general_helper
INFO - 2016-02-06 19:45:11 --> Database Driver Class Initialized
INFO - 2016-02-06 19:45:11 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:45:11 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:45:11 --> Email Class Initialized
INFO - 2016-02-06 19:45:11 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:45:11 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:45:11 --> Helper loaded: language_helper
INFO - 2016-02-06 19:45:11 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:45:11 --> Model Class Initialized
INFO - 2016-02-06 19:45:11 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:45:11 --> Model Class Initialized
INFO - 2016-02-06 19:45:11 --> Helper loaded: date_helper
INFO - 2016-02-06 19:45:11 --> Controller Class Initialized
DEBUG - 2016-02-06 19:45:11 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/models/Aftekenlijsten_m.php
INFO - 2016-02-06 19:45:11 --> Model Class Initialized
INFO - 2016-02-06 19:45:11 --> Model Class Initialized
ERROR - 2016-02-06 19:45:11 --> Severity: Error --> Call to undefined method Aftekenlijsten::member_view() C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\diensten\controllers\aftekenlijsten.php 25
INFO - 2016-02-06 19:45:13 --> Config Class Initialized
INFO - 2016-02-06 19:45:13 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:45:13 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:45:13 --> Utf8 Class Initialized
INFO - 2016-02-06 19:45:13 --> URI Class Initialized
DEBUG - 2016-02-06 19:45:13 --> No URI present. Default controller set.
INFO - 2016-02-06 19:45:13 --> Router Class Initialized
INFO - 2016-02-06 19:45:13 --> Output Class Initialized
INFO - 2016-02-06 19:45:13 --> Security Class Initialized
DEBUG - 2016-02-06 19:45:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:45:13 --> Input Class Initialized
INFO - 2016-02-06 19:45:13 --> Language Class Initialized
INFO - 2016-02-06 19:45:13 --> Language Class Initialized
INFO - 2016-02-06 19:45:13 --> Config Class Initialized
INFO - 2016-02-06 19:45:13 --> Loader Class Initialized
INFO - 2016-02-06 19:45:13 --> Helper loaded: form_helper
INFO - 2016-02-06 19:45:13 --> Helper loaded: url_helper
INFO - 2016-02-06 19:45:13 --> Helper loaded: general_helper
INFO - 2016-02-06 19:45:13 --> Database Driver Class Initialized
INFO - 2016-02-06 19:45:13 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:45:13 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:45:13 --> Email Class Initialized
INFO - 2016-02-06 19:45:13 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:45:13 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:45:13 --> Helper loaded: language_helper
INFO - 2016-02-06 19:45:13 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:45:13 --> Model Class Initialized
INFO - 2016-02-06 19:45:13 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:45:13 --> Model Class Initialized
INFO - 2016-02-06 19:45:13 --> Helper loaded: date_helper
INFO - 2016-02-06 19:45:13 --> Controller Class Initialized
DEBUG - 2016-02-06 19:45:13 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:45:13 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dashboard/views/index.php
DEBUG - 2016-02-06 19:45:13 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:45:13 --> Final output sent to browser
DEBUG - 2016-02-06 19:45:13 --> Total execution time: 0.4608
INFO - 2016-02-06 19:45:15 --> Config Class Initialized
INFO - 2016-02-06 19:45:15 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:45:15 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:45:15 --> Utf8 Class Initialized
INFO - 2016-02-06 19:45:15 --> URI Class Initialized
INFO - 2016-02-06 19:45:15 --> Router Class Initialized
INFO - 2016-02-06 19:45:15 --> Output Class Initialized
INFO - 2016-02-06 19:45:15 --> Security Class Initialized
DEBUG - 2016-02-06 19:45:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:45:15 --> Input Class Initialized
INFO - 2016-02-06 19:45:15 --> Language Class Initialized
INFO - 2016-02-06 19:45:15 --> Language Class Initialized
INFO - 2016-02-06 19:45:15 --> Config Class Initialized
INFO - 2016-02-06 19:45:15 --> Loader Class Initialized
INFO - 2016-02-06 19:45:15 --> Helper loaded: form_helper
INFO - 2016-02-06 19:45:15 --> Helper loaded: url_helper
INFO - 2016-02-06 19:45:15 --> Helper loaded: general_helper
INFO - 2016-02-06 19:45:15 --> Database Driver Class Initialized
INFO - 2016-02-06 19:45:15 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:45:15 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:45:15 --> Email Class Initialized
INFO - 2016-02-06 19:45:15 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:45:15 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:45:15 --> Helper loaded: language_helper
INFO - 2016-02-06 19:45:15 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:45:15 --> Model Class Initialized
INFO - 2016-02-06 19:45:15 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:45:15 --> Model Class Initialized
INFO - 2016-02-06 19:45:15 --> Helper loaded: date_helper
INFO - 2016-02-06 19:45:15 --> Controller Class Initialized
INFO - 2016-02-06 19:45:15 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 19:45:15 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:45:16 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 19:45:16 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:45:16 --> Final output sent to browser
DEBUG - 2016-02-06 19:45:16 --> Total execution time: 0.4937
INFO - 2016-02-06 19:45:18 --> Config Class Initialized
INFO - 2016-02-06 19:45:18 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:45:18 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:45:18 --> Utf8 Class Initialized
INFO - 2016-02-06 19:45:18 --> URI Class Initialized
INFO - 2016-02-06 19:45:18 --> Router Class Initialized
INFO - 2016-02-06 19:45:18 --> Output Class Initialized
INFO - 2016-02-06 19:45:18 --> Security Class Initialized
DEBUG - 2016-02-06 19:45:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:45:18 --> Input Class Initialized
INFO - 2016-02-06 19:45:18 --> Language Class Initialized
INFO - 2016-02-06 19:45:18 --> Language Class Initialized
INFO - 2016-02-06 19:45:18 --> Config Class Initialized
INFO - 2016-02-06 19:45:18 --> Loader Class Initialized
INFO - 2016-02-06 19:45:18 --> Helper loaded: form_helper
INFO - 2016-02-06 19:45:18 --> Helper loaded: url_helper
INFO - 2016-02-06 19:45:18 --> Helper loaded: general_helper
INFO - 2016-02-06 19:45:18 --> Database Driver Class Initialized
INFO - 2016-02-06 19:45:18 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:45:18 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:45:18 --> Email Class Initialized
INFO - 2016-02-06 19:45:18 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:45:18 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:45:18 --> Helper loaded: language_helper
INFO - 2016-02-06 19:45:18 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:45:18 --> Model Class Initialized
INFO - 2016-02-06 19:45:18 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:45:18 --> Model Class Initialized
INFO - 2016-02-06 19:45:18 --> Helper loaded: date_helper
INFO - 2016-02-06 19:45:18 --> Controller Class Initialized
DEBUG - 2016-02-06 19:45:18 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 19:45:18 --> Model Class Initialized
INFO - 2016-02-06 19:45:18 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 19:45:18 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:45:18 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/edit_group.php
DEBUG - 2016-02-06 19:45:18 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:45:18 --> Final output sent to browser
DEBUG - 2016-02-06 19:45:18 --> Total execution time: 0.5141
INFO - 2016-02-06 19:45:21 --> Config Class Initialized
INFO - 2016-02-06 19:45:21 --> Hooks Class Initialized
DEBUG - 2016-02-06 19:45:21 --> UTF-8 Support Enabled
INFO - 2016-02-06 19:45:21 --> Utf8 Class Initialized
INFO - 2016-02-06 19:45:21 --> URI Class Initialized
INFO - 2016-02-06 19:45:21 --> Router Class Initialized
INFO - 2016-02-06 19:45:21 --> Output Class Initialized
INFO - 2016-02-06 19:45:21 --> Security Class Initialized
DEBUG - 2016-02-06 19:45:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 19:45:21 --> Input Class Initialized
INFO - 2016-02-06 19:45:21 --> Language Class Initialized
INFO - 2016-02-06 19:45:21 --> Language Class Initialized
INFO - 2016-02-06 19:45:21 --> Config Class Initialized
INFO - 2016-02-06 19:45:21 --> Loader Class Initialized
INFO - 2016-02-06 19:45:21 --> Helper loaded: form_helper
INFO - 2016-02-06 19:45:21 --> Helper loaded: url_helper
INFO - 2016-02-06 19:45:21 --> Helper loaded: general_helper
INFO - 2016-02-06 19:45:21 --> Database Driver Class Initialized
INFO - 2016-02-06 19:45:21 --> Form Validation Class Initialized
DEBUG - 2016-02-06 19:45:21 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 19:45:21 --> Email Class Initialized
INFO - 2016-02-06 19:45:21 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 19:45:21 --> Helper loaded: cookie_helper
INFO - 2016-02-06 19:45:21 --> Helper loaded: language_helper
INFO - 2016-02-06 19:45:21 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 19:45:21 --> Model Class Initialized
INFO - 2016-02-06 19:45:21 --> Helper loaded: inflector_helper
INFO - 2016-02-06 19:45:21 --> Model Class Initialized
INFO - 2016-02-06 19:45:21 --> Helper loaded: date_helper
INFO - 2016-02-06 19:45:21 --> Controller Class Initialized
INFO - 2016-02-06 19:45:21 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 19:45:22 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 19:45:22 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 19:45:22 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 19:45:22 --> Final output sent to browser
DEBUG - 2016-02-06 19:45:22 --> Total execution time: 0.5162
INFO - 2016-02-06 21:03:04 --> Config Class Initialized
INFO - 2016-02-06 21:03:04 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:03:04 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:03:04 --> Utf8 Class Initialized
INFO - 2016-02-06 21:03:04 --> URI Class Initialized
DEBUG - 2016-02-06 21:03:04 --> No URI present. Default controller set.
INFO - 2016-02-06 21:03:04 --> Router Class Initialized
INFO - 2016-02-06 21:03:04 --> Output Class Initialized
INFO - 2016-02-06 21:03:04 --> Security Class Initialized
DEBUG - 2016-02-06 21:03:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:03:05 --> Input Class Initialized
INFO - 2016-02-06 21:03:05 --> Language Class Initialized
INFO - 2016-02-06 21:03:05 --> Language Class Initialized
INFO - 2016-02-06 21:03:05 --> Config Class Initialized
INFO - 2016-02-06 21:03:05 --> Loader Class Initialized
INFO - 2016-02-06 21:03:05 --> Helper loaded: form_helper
INFO - 2016-02-06 21:03:05 --> Helper loaded: url_helper
INFO - 2016-02-06 21:03:05 --> Helper loaded: general_helper
INFO - 2016-02-06 21:03:05 --> Database Driver Class Initialized
INFO - 2016-02-06 21:03:05 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:03:05 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:03:05 --> Email Class Initialized
INFO - 2016-02-06 21:03:05 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:03:05 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:03:05 --> Helper loaded: language_helper
INFO - 2016-02-06 21:03:05 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:03:05 --> Model Class Initialized
INFO - 2016-02-06 21:03:05 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:03:05 --> Model Class Initialized
INFO - 2016-02-06 21:03:05 --> Helper loaded: date_helper
INFO - 2016-02-06 21:03:05 --> Controller Class Initialized
DEBUG - 2016-02-06 21:03:05 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 21:03:05 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dashboard/views/index.php
DEBUG - 2016-02-06 21:03:05 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 21:03:05 --> Final output sent to browser
DEBUG - 2016-02-06 21:03:05 --> Total execution time: 0.4977
INFO - 2016-02-06 21:03:07 --> Config Class Initialized
INFO - 2016-02-06 21:03:07 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:03:07 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:03:07 --> Utf8 Class Initialized
INFO - 2016-02-06 21:03:07 --> URI Class Initialized
INFO - 2016-02-06 21:03:07 --> Router Class Initialized
INFO - 2016-02-06 21:03:07 --> Output Class Initialized
INFO - 2016-02-06 21:03:07 --> Security Class Initialized
DEBUG - 2016-02-06 21:03:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:03:07 --> Input Class Initialized
INFO - 2016-02-06 21:03:07 --> Language Class Initialized
INFO - 2016-02-06 21:03:07 --> Language Class Initialized
INFO - 2016-02-06 21:03:07 --> Config Class Initialized
INFO - 2016-02-06 21:03:07 --> Loader Class Initialized
INFO - 2016-02-06 21:03:07 --> Helper loaded: form_helper
INFO - 2016-02-06 21:03:07 --> Helper loaded: url_helper
INFO - 2016-02-06 21:03:07 --> Helper loaded: general_helper
INFO - 2016-02-06 21:03:07 --> Database Driver Class Initialized
INFO - 2016-02-06 21:03:07 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:03:07 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:03:07 --> Email Class Initialized
INFO - 2016-02-06 21:03:07 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:03:07 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:03:07 --> Helper loaded: language_helper
INFO - 2016-02-06 21:03:07 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:03:07 --> Model Class Initialized
INFO - 2016-02-06 21:03:07 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:03:07 --> Model Class Initialized
INFO - 2016-02-06 21:03:07 --> Helper loaded: date_helper
INFO - 2016-02-06 21:03:07 --> Controller Class Initialized
DEBUG - 2016-02-06 21:03:07 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 21:03:07 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dashboard/views/index.php
DEBUG - 2016-02-06 21:03:07 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 21:03:07 --> Final output sent to browser
DEBUG - 2016-02-06 21:03:07 --> Total execution time: 0.4873
INFO - 2016-02-06 21:04:02 --> Config Class Initialized
INFO - 2016-02-06 21:04:02 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:04:02 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:04:02 --> Utf8 Class Initialized
INFO - 2016-02-06 21:04:02 --> URI Class Initialized
INFO - 2016-02-06 21:04:02 --> Router Class Initialized
INFO - 2016-02-06 21:04:02 --> Output Class Initialized
INFO - 2016-02-06 21:04:02 --> Security Class Initialized
DEBUG - 2016-02-06 21:04:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:04:02 --> Input Class Initialized
INFO - 2016-02-06 21:04:02 --> Language Class Initialized
INFO - 2016-02-06 21:04:02 --> Language Class Initialized
INFO - 2016-02-06 21:04:02 --> Config Class Initialized
INFO - 2016-02-06 21:04:02 --> Loader Class Initialized
INFO - 2016-02-06 21:04:02 --> Helper loaded: form_helper
INFO - 2016-02-06 21:04:02 --> Helper loaded: url_helper
INFO - 2016-02-06 21:04:02 --> Helper loaded: general_helper
INFO - 2016-02-06 21:04:03 --> Database Driver Class Initialized
INFO - 2016-02-06 21:04:03 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:04:03 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:04:03 --> Email Class Initialized
INFO - 2016-02-06 21:04:03 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:04:03 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:04:03 --> Helper loaded: language_helper
INFO - 2016-02-06 21:04:03 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:04:03 --> Model Class Initialized
INFO - 2016-02-06 21:04:03 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:04:03 --> Model Class Initialized
INFO - 2016-02-06 21:04:03 --> Helper loaded: date_helper
INFO - 2016-02-06 21:04:03 --> Controller Class Initialized
DEBUG - 2016-02-06 21:04:03 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 21:04:03 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dashboard/views/index.php
DEBUG - 2016-02-06 21:04:03 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 21:04:03 --> Final output sent to browser
DEBUG - 2016-02-06 21:04:03 --> Total execution time: 0.5010
INFO - 2016-02-06 21:04:14 --> Config Class Initialized
INFO - 2016-02-06 21:04:14 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:04:14 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:04:14 --> Utf8 Class Initialized
INFO - 2016-02-06 21:04:14 --> URI Class Initialized
INFO - 2016-02-06 21:04:14 --> Router Class Initialized
INFO - 2016-02-06 21:04:14 --> Output Class Initialized
INFO - 2016-02-06 21:04:14 --> Security Class Initialized
DEBUG - 2016-02-06 21:04:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:04:14 --> Input Class Initialized
INFO - 2016-02-06 21:04:14 --> Language Class Initialized
INFO - 2016-02-06 21:04:14 --> Language Class Initialized
INFO - 2016-02-06 21:04:14 --> Config Class Initialized
INFO - 2016-02-06 21:04:14 --> Loader Class Initialized
INFO - 2016-02-06 21:04:14 --> Helper loaded: form_helper
INFO - 2016-02-06 21:04:14 --> Helper loaded: url_helper
INFO - 2016-02-06 21:04:14 --> Helper loaded: general_helper
INFO - 2016-02-06 21:04:14 --> Database Driver Class Initialized
INFO - 2016-02-06 21:04:14 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:04:14 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:04:14 --> Email Class Initialized
INFO - 2016-02-06 21:04:14 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:04:14 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:04:14 --> Helper loaded: language_helper
INFO - 2016-02-06 21:04:14 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:04:14 --> Model Class Initialized
INFO - 2016-02-06 21:04:14 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:04:14 --> Model Class Initialized
INFO - 2016-02-06 21:04:14 --> Helper loaded: date_helper
INFO - 2016-02-06 21:04:14 --> Controller Class Initialized
DEBUG - 2016-02-06 21:04:14 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 21:04:14 --> Model Class Initialized
INFO - 2016-02-06 21:04:14 --> Language file loaded: language/dutch/auth_lang.php
INFO - 2016-02-06 21:04:14 --> Config Class Initialized
INFO - 2016-02-06 21:04:14 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:04:14 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:04:14 --> Utf8 Class Initialized
INFO - 2016-02-06 21:04:14 --> URI Class Initialized
INFO - 2016-02-06 21:04:14 --> Router Class Initialized
INFO - 2016-02-06 21:04:14 --> Output Class Initialized
INFO - 2016-02-06 21:04:14 --> Security Class Initialized
DEBUG - 2016-02-06 21:04:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:04:14 --> Input Class Initialized
INFO - 2016-02-06 21:04:14 --> Language Class Initialized
INFO - 2016-02-06 21:04:14 --> Language Class Initialized
INFO - 2016-02-06 21:04:14 --> Config Class Initialized
INFO - 2016-02-06 21:04:14 --> Loader Class Initialized
INFO - 2016-02-06 21:04:14 --> Helper loaded: form_helper
INFO - 2016-02-06 21:04:14 --> Helper loaded: url_helper
INFO - 2016-02-06 21:04:14 --> Helper loaded: general_helper
INFO - 2016-02-06 21:04:14 --> Database Driver Class Initialized
INFO - 2016-02-06 21:04:15 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:04:15 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:04:15 --> Email Class Initialized
INFO - 2016-02-06 21:04:15 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:04:15 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:04:15 --> Helper loaded: language_helper
INFO - 2016-02-06 21:04:15 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:04:15 --> Model Class Initialized
INFO - 2016-02-06 21:04:15 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:04:15 --> Model Class Initialized
INFO - 2016-02-06 21:04:15 --> Helper loaded: date_helper
INFO - 2016-02-06 21:04:15 --> Controller Class Initialized
DEBUG - 2016-02-06 21:04:15 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 21:04:15 --> Model Class Initialized
INFO - 2016-02-06 21:04:15 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 21:04:15 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 21:04:15 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/login.php
DEBUG - 2016-02-06 21:04:15 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 21:04:15 --> Final output sent to browser
DEBUG - 2016-02-06 21:04:15 --> Total execution time: 0.5446
INFO - 2016-02-06 21:04:26 --> Config Class Initialized
INFO - 2016-02-06 21:04:26 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:04:26 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:04:26 --> Utf8 Class Initialized
INFO - 2016-02-06 21:04:26 --> URI Class Initialized
INFO - 2016-02-06 21:04:26 --> Router Class Initialized
INFO - 2016-02-06 21:04:26 --> Output Class Initialized
INFO - 2016-02-06 21:04:26 --> Security Class Initialized
DEBUG - 2016-02-06 21:04:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:04:26 --> Input Class Initialized
INFO - 2016-02-06 21:04:26 --> Language Class Initialized
INFO - 2016-02-06 21:04:26 --> Language Class Initialized
INFO - 2016-02-06 21:04:26 --> Config Class Initialized
INFO - 2016-02-06 21:04:26 --> Loader Class Initialized
INFO - 2016-02-06 21:04:26 --> Helper loaded: form_helper
INFO - 2016-02-06 21:04:26 --> Helper loaded: url_helper
INFO - 2016-02-06 21:04:26 --> Helper loaded: general_helper
INFO - 2016-02-06 21:04:26 --> Database Driver Class Initialized
INFO - 2016-02-06 21:04:26 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:04:26 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:04:26 --> Email Class Initialized
INFO - 2016-02-06 21:04:26 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:04:26 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:04:26 --> Helper loaded: language_helper
INFO - 2016-02-06 21:04:26 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:04:26 --> Model Class Initialized
INFO - 2016-02-06 21:04:26 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:04:26 --> Model Class Initialized
INFO - 2016-02-06 21:04:26 --> Helper loaded: date_helper
INFO - 2016-02-06 21:04:26 --> Controller Class Initialized
DEBUG - 2016-02-06 21:04:26 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 21:04:26 --> Model Class Initialized
INFO - 2016-02-06 21:04:26 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 21:04:26 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/login.php
DEBUG - 2016-02-06 21:04:26 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 21:04:26 --> Final output sent to browser
DEBUG - 2016-02-06 21:04:26 --> Total execution time: 0.5096
INFO - 2016-02-06 21:04:43 --> Config Class Initialized
INFO - 2016-02-06 21:04:43 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:04:43 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:04:43 --> Utf8 Class Initialized
INFO - 2016-02-06 21:04:43 --> URI Class Initialized
INFO - 2016-02-06 21:04:43 --> Router Class Initialized
INFO - 2016-02-06 21:04:43 --> Output Class Initialized
INFO - 2016-02-06 21:04:43 --> Security Class Initialized
DEBUG - 2016-02-06 21:04:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:04:43 --> Input Class Initialized
INFO - 2016-02-06 21:04:43 --> Language Class Initialized
INFO - 2016-02-06 21:04:43 --> Language Class Initialized
INFO - 2016-02-06 21:04:43 --> Config Class Initialized
INFO - 2016-02-06 21:04:43 --> Loader Class Initialized
INFO - 2016-02-06 21:04:43 --> Helper loaded: form_helper
INFO - 2016-02-06 21:04:43 --> Helper loaded: url_helper
INFO - 2016-02-06 21:04:43 --> Helper loaded: general_helper
INFO - 2016-02-06 21:04:43 --> Database Driver Class Initialized
INFO - 2016-02-06 21:04:43 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:04:43 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:04:43 --> Email Class Initialized
INFO - 2016-02-06 21:04:44 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:04:44 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:04:44 --> Helper loaded: language_helper
INFO - 2016-02-06 21:04:44 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:04:44 --> Model Class Initialized
INFO - 2016-02-06 21:04:44 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:04:44 --> Model Class Initialized
INFO - 2016-02-06 21:04:44 --> Helper loaded: date_helper
INFO - 2016-02-06 21:04:44 --> Controller Class Initialized
DEBUG - 2016-02-06 21:04:44 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 21:04:44 --> Model Class Initialized
INFO - 2016-02-06 21:04:44 --> Language file loaded: language/dutch/auth_lang.php
INFO - 2016-02-06 21:04:44 --> Language file loaded: language/dutch/form_validation_lang.php
INFO - 2016-02-06 21:04:44 --> Config Class Initialized
INFO - 2016-02-06 21:04:44 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:04:44 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:04:44 --> Utf8 Class Initialized
INFO - 2016-02-06 21:04:44 --> URI Class Initialized
DEBUG - 2016-02-06 21:04:44 --> No URI present. Default controller set.
INFO - 2016-02-06 21:04:44 --> Router Class Initialized
INFO - 2016-02-06 21:04:44 --> Output Class Initialized
INFO - 2016-02-06 21:04:44 --> Security Class Initialized
DEBUG - 2016-02-06 21:04:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:04:44 --> Input Class Initialized
INFO - 2016-02-06 21:04:44 --> Language Class Initialized
INFO - 2016-02-06 21:04:44 --> Language Class Initialized
INFO - 2016-02-06 21:04:44 --> Config Class Initialized
INFO - 2016-02-06 21:04:44 --> Loader Class Initialized
INFO - 2016-02-06 21:04:44 --> Helper loaded: form_helper
INFO - 2016-02-06 21:04:44 --> Helper loaded: url_helper
INFO - 2016-02-06 21:04:44 --> Helper loaded: general_helper
INFO - 2016-02-06 21:04:44 --> Database Driver Class Initialized
INFO - 2016-02-06 21:04:44 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:04:44 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:04:44 --> Email Class Initialized
INFO - 2016-02-06 21:04:44 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:04:44 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:04:44 --> Helper loaded: language_helper
INFO - 2016-02-06 21:04:44 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:04:44 --> Model Class Initialized
INFO - 2016-02-06 21:04:44 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:04:44 --> Model Class Initialized
INFO - 2016-02-06 21:04:44 --> Helper loaded: date_helper
INFO - 2016-02-06 21:04:44 --> Controller Class Initialized
DEBUG - 2016-02-06 21:04:44 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 21:04:44 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dashboard/views/index.php
DEBUG - 2016-02-06 21:04:44 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 21:04:44 --> Final output sent to browser
DEBUG - 2016-02-06 21:04:44 --> Total execution time: 0.5036
INFO - 2016-02-06 21:04:52 --> Config Class Initialized
INFO - 2016-02-06 21:04:52 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:04:52 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:04:52 --> Utf8 Class Initialized
INFO - 2016-02-06 21:04:52 --> URI Class Initialized
INFO - 2016-02-06 21:04:52 --> Router Class Initialized
INFO - 2016-02-06 21:04:52 --> Output Class Initialized
INFO - 2016-02-06 21:04:52 --> Security Class Initialized
DEBUG - 2016-02-06 21:04:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:04:52 --> Input Class Initialized
INFO - 2016-02-06 21:04:52 --> Language Class Initialized
INFO - 2016-02-06 21:04:52 --> Language Class Initialized
INFO - 2016-02-06 21:04:52 --> Config Class Initialized
INFO - 2016-02-06 21:04:52 --> Loader Class Initialized
INFO - 2016-02-06 21:04:52 --> Helper loaded: form_helper
INFO - 2016-02-06 21:04:52 --> Helper loaded: url_helper
INFO - 2016-02-06 21:04:52 --> Helper loaded: general_helper
INFO - 2016-02-06 21:04:52 --> Database Driver Class Initialized
INFO - 2016-02-06 21:04:52 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:04:52 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:04:52 --> Email Class Initialized
INFO - 2016-02-06 21:04:52 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:04:52 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:04:52 --> Helper loaded: language_helper
INFO - 2016-02-06 21:04:52 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:04:52 --> Model Class Initialized
INFO - 2016-02-06 21:04:52 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:04:52 --> Model Class Initialized
INFO - 2016-02-06 21:04:52 --> Helper loaded: date_helper
INFO - 2016-02-06 21:04:52 --> Controller Class Initialized
DEBUG - 2016-02-06 21:04:52 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 21:04:52 --> Model Class Initialized
INFO - 2016-02-06 21:04:52 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 21:04:52 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/login.php
DEBUG - 2016-02-06 21:04:52 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 21:04:52 --> Final output sent to browser
DEBUG - 2016-02-06 21:04:52 --> Total execution time: 0.5492
INFO - 2016-02-06 21:04:57 --> Config Class Initialized
INFO - 2016-02-06 21:04:57 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:04:57 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:04:57 --> Utf8 Class Initialized
INFO - 2016-02-06 21:04:57 --> URI Class Initialized
DEBUG - 2016-02-06 21:04:57 --> No URI present. Default controller set.
INFO - 2016-02-06 21:04:57 --> Router Class Initialized
INFO - 2016-02-06 21:04:57 --> Output Class Initialized
INFO - 2016-02-06 21:04:57 --> Security Class Initialized
DEBUG - 2016-02-06 21:04:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:04:57 --> Input Class Initialized
INFO - 2016-02-06 21:04:57 --> Language Class Initialized
INFO - 2016-02-06 21:04:57 --> Language Class Initialized
INFO - 2016-02-06 21:04:57 --> Config Class Initialized
INFO - 2016-02-06 21:04:57 --> Loader Class Initialized
INFO - 2016-02-06 21:04:57 --> Helper loaded: form_helper
INFO - 2016-02-06 21:04:57 --> Helper loaded: url_helper
INFO - 2016-02-06 21:04:57 --> Helper loaded: general_helper
INFO - 2016-02-06 21:04:57 --> Database Driver Class Initialized
INFO - 2016-02-06 21:04:57 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:04:57 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:04:57 --> Email Class Initialized
INFO - 2016-02-06 21:04:57 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:04:57 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:04:57 --> Helper loaded: language_helper
INFO - 2016-02-06 21:04:57 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:04:57 --> Model Class Initialized
INFO - 2016-02-06 21:04:57 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:04:58 --> Model Class Initialized
INFO - 2016-02-06 21:04:58 --> Helper loaded: date_helper
INFO - 2016-02-06 21:04:58 --> Controller Class Initialized
DEBUG - 2016-02-06 21:04:58 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 21:04:58 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dashboard/views/index.php
DEBUG - 2016-02-06 21:04:58 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 21:04:58 --> Final output sent to browser
DEBUG - 2016-02-06 21:04:58 --> Total execution time: 0.4978
INFO - 2016-02-06 21:09:19 --> Config Class Initialized
INFO - 2016-02-06 21:09:19 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:09:20 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:09:20 --> Utf8 Class Initialized
INFO - 2016-02-06 21:09:20 --> URI Class Initialized
INFO - 2016-02-06 21:09:20 --> Router Class Initialized
INFO - 2016-02-06 21:09:20 --> Output Class Initialized
INFO - 2016-02-06 21:09:20 --> Security Class Initialized
DEBUG - 2016-02-06 21:09:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:09:20 --> Input Class Initialized
INFO - 2016-02-06 21:09:20 --> Language Class Initialized
INFO - 2016-02-06 21:09:20 --> Language Class Initialized
INFO - 2016-02-06 21:09:20 --> Config Class Initialized
INFO - 2016-02-06 21:09:20 --> Loader Class Initialized
INFO - 2016-02-06 21:09:20 --> Helper loaded: form_helper
INFO - 2016-02-06 21:09:20 --> Helper loaded: url_helper
INFO - 2016-02-06 21:09:20 --> Helper loaded: general_helper
INFO - 2016-02-06 21:09:20 --> Database Driver Class Initialized
INFO - 2016-02-06 21:09:20 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:09:20 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:09:20 --> Email Class Initialized
INFO - 2016-02-06 21:09:20 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:09:20 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:09:20 --> Helper loaded: language_helper
INFO - 2016-02-06 21:09:20 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:09:20 --> Model Class Initialized
INFO - 2016-02-06 21:09:20 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:09:20 --> Model Class Initialized
INFO - 2016-02-06 21:09:20 --> Helper loaded: date_helper
INFO - 2016-02-06 21:09:20 --> Controller Class Initialized
DEBUG - 2016-02-06 21:09:20 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 21:09:20 --> Model Class Initialized
INFO - 2016-02-06 21:09:20 --> Language file loaded: language/dutch/auth_lang.php
INFO - 2016-02-06 21:09:20 --> Config Class Initialized
INFO - 2016-02-06 21:09:20 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:09:20 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:09:20 --> Utf8 Class Initialized
INFO - 2016-02-06 21:09:20 --> URI Class Initialized
INFO - 2016-02-06 21:09:20 --> Router Class Initialized
INFO - 2016-02-06 21:09:20 --> Output Class Initialized
INFO - 2016-02-06 21:09:20 --> Security Class Initialized
DEBUG - 2016-02-06 21:09:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:09:20 --> Input Class Initialized
INFO - 2016-02-06 21:09:20 --> Language Class Initialized
INFO - 2016-02-06 21:09:20 --> Language Class Initialized
INFO - 2016-02-06 21:09:20 --> Config Class Initialized
INFO - 2016-02-06 21:09:20 --> Loader Class Initialized
INFO - 2016-02-06 21:09:20 --> Helper loaded: form_helper
INFO - 2016-02-06 21:09:20 --> Helper loaded: url_helper
INFO - 2016-02-06 21:09:20 --> Helper loaded: general_helper
INFO - 2016-02-06 21:09:20 --> Database Driver Class Initialized
INFO - 2016-02-06 21:09:20 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:09:20 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:09:20 --> Email Class Initialized
INFO - 2016-02-06 21:09:20 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:09:20 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:09:20 --> Helper loaded: language_helper
INFO - 2016-02-06 21:09:20 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:09:20 --> Model Class Initialized
INFO - 2016-02-06 21:09:20 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:09:20 --> Model Class Initialized
INFO - 2016-02-06 21:09:20 --> Helper loaded: date_helper
INFO - 2016-02-06 21:09:20 --> Controller Class Initialized
DEBUG - 2016-02-06 21:09:20 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 21:09:21 --> Model Class Initialized
INFO - 2016-02-06 21:09:21 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 21:09:21 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/login.php
DEBUG - 2016-02-06 21:09:21 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 21:09:21 --> Final output sent to browser
DEBUG - 2016-02-06 21:09:21 --> Total execution time: 0.5282
INFO - 2016-02-06 21:09:27 --> Config Class Initialized
INFO - 2016-02-06 21:09:27 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:09:27 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:09:27 --> Utf8 Class Initialized
INFO - 2016-02-06 21:09:27 --> URI Class Initialized
INFO - 2016-02-06 21:09:27 --> Router Class Initialized
INFO - 2016-02-06 21:09:27 --> Output Class Initialized
INFO - 2016-02-06 21:09:27 --> Security Class Initialized
DEBUG - 2016-02-06 21:09:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:09:27 --> Input Class Initialized
INFO - 2016-02-06 21:09:27 --> Language Class Initialized
INFO - 2016-02-06 21:09:27 --> Language Class Initialized
INFO - 2016-02-06 21:09:27 --> Config Class Initialized
INFO - 2016-02-06 21:09:27 --> Loader Class Initialized
INFO - 2016-02-06 21:09:27 --> Helper loaded: form_helper
INFO - 2016-02-06 21:09:27 --> Helper loaded: url_helper
INFO - 2016-02-06 21:09:27 --> Helper loaded: general_helper
INFO - 2016-02-06 21:09:27 --> Database Driver Class Initialized
INFO - 2016-02-06 21:09:27 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:09:27 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:09:27 --> Email Class Initialized
INFO - 2016-02-06 21:09:27 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:09:27 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:09:27 --> Helper loaded: language_helper
INFO - 2016-02-06 21:09:27 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:09:27 --> Model Class Initialized
INFO - 2016-02-06 21:09:27 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:09:27 --> Model Class Initialized
INFO - 2016-02-06 21:09:27 --> Helper loaded: date_helper
INFO - 2016-02-06 21:09:27 --> Controller Class Initialized
DEBUG - 2016-02-06 21:09:27 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 21:09:27 --> Model Class Initialized
INFO - 2016-02-06 21:09:27 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 21:09:27 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/login.php
DEBUG - 2016-02-06 21:09:27 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 21:09:27 --> Final output sent to browser
DEBUG - 2016-02-06 21:09:27 --> Total execution time: 0.5136
INFO - 2016-02-06 21:11:08 --> Config Class Initialized
INFO - 2016-02-06 21:11:08 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:11:08 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:11:09 --> Utf8 Class Initialized
INFO - 2016-02-06 21:11:09 --> URI Class Initialized
INFO - 2016-02-06 21:11:09 --> Router Class Initialized
INFO - 2016-02-06 21:11:09 --> Output Class Initialized
INFO - 2016-02-06 21:11:09 --> Security Class Initialized
DEBUG - 2016-02-06 21:11:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:11:09 --> Input Class Initialized
INFO - 2016-02-06 21:11:09 --> Language Class Initialized
INFO - 2016-02-06 21:11:09 --> Language Class Initialized
INFO - 2016-02-06 21:11:09 --> Config Class Initialized
INFO - 2016-02-06 21:11:09 --> Loader Class Initialized
INFO - 2016-02-06 21:11:09 --> Helper loaded: form_helper
INFO - 2016-02-06 21:11:09 --> Helper loaded: url_helper
INFO - 2016-02-06 21:11:09 --> Helper loaded: general_helper
INFO - 2016-02-06 21:11:09 --> Database Driver Class Initialized
INFO - 2016-02-06 21:11:09 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:11:09 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:11:09 --> Email Class Initialized
INFO - 2016-02-06 21:11:09 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:11:09 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:11:09 --> Helper loaded: language_helper
INFO - 2016-02-06 21:11:09 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:11:09 --> Model Class Initialized
INFO - 2016-02-06 21:11:09 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:11:09 --> Model Class Initialized
INFO - 2016-02-06 21:11:09 --> Helper loaded: date_helper
INFO - 2016-02-06 21:11:09 --> Controller Class Initialized
DEBUG - 2016-02-06 21:11:09 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 21:11:09 --> Model Class Initialized
INFO - 2016-02-06 21:11:09 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 21:11:09 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/login.php
DEBUG - 2016-02-06 21:11:09 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 21:11:09 --> Final output sent to browser
DEBUG - 2016-02-06 21:11:09 --> Total execution time: 0.5079
INFO - 2016-02-06 21:14:43 --> Config Class Initialized
INFO - 2016-02-06 21:14:43 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:14:43 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:14:43 --> Utf8 Class Initialized
INFO - 2016-02-06 21:14:43 --> URI Class Initialized
INFO - 2016-02-06 21:14:43 --> Router Class Initialized
INFO - 2016-02-06 21:14:43 --> Output Class Initialized
INFO - 2016-02-06 21:14:43 --> Security Class Initialized
DEBUG - 2016-02-06 21:14:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:14:43 --> Input Class Initialized
INFO - 2016-02-06 21:14:43 --> Language Class Initialized
INFO - 2016-02-06 21:14:43 --> Language Class Initialized
INFO - 2016-02-06 21:14:43 --> Config Class Initialized
INFO - 2016-02-06 21:14:43 --> Loader Class Initialized
INFO - 2016-02-06 21:14:43 --> Helper loaded: form_helper
INFO - 2016-02-06 21:14:43 --> Helper loaded: url_helper
INFO - 2016-02-06 21:14:43 --> Helper loaded: general_helper
INFO - 2016-02-06 21:14:43 --> Database Driver Class Initialized
INFO - 2016-02-06 21:14:43 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:14:43 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:14:43 --> Email Class Initialized
INFO - 2016-02-06 21:14:43 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:14:43 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:14:43 --> Helper loaded: language_helper
INFO - 2016-02-06 21:14:43 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:14:43 --> Model Class Initialized
INFO - 2016-02-06 21:14:43 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:14:43 --> Model Class Initialized
INFO - 2016-02-06 21:14:43 --> Helper loaded: date_helper
INFO - 2016-02-06 21:14:43 --> Controller Class Initialized
DEBUG - 2016-02-06 21:14:43 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 21:14:43 --> Model Class Initialized
INFO - 2016-02-06 21:14:43 --> Language file loaded: language/dutch/auth_lang.php
INFO - 2016-02-06 21:14:43 --> Language file loaded: language/dutch/form_validation_lang.php
INFO - 2016-02-06 21:14:44 --> Config Class Initialized
INFO - 2016-02-06 21:14:44 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:14:44 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:14:44 --> Utf8 Class Initialized
INFO - 2016-02-06 21:14:44 --> URI Class Initialized
DEBUG - 2016-02-06 21:14:44 --> No URI present. Default controller set.
INFO - 2016-02-06 21:14:44 --> Router Class Initialized
INFO - 2016-02-06 21:14:44 --> Output Class Initialized
INFO - 2016-02-06 21:14:44 --> Security Class Initialized
DEBUG - 2016-02-06 21:14:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:14:44 --> Input Class Initialized
INFO - 2016-02-06 21:14:44 --> Language Class Initialized
INFO - 2016-02-06 21:14:44 --> Language Class Initialized
INFO - 2016-02-06 21:14:44 --> Config Class Initialized
INFO - 2016-02-06 21:14:44 --> Loader Class Initialized
INFO - 2016-02-06 21:14:44 --> Helper loaded: form_helper
INFO - 2016-02-06 21:14:44 --> Helper loaded: url_helper
INFO - 2016-02-06 21:14:44 --> Helper loaded: general_helper
INFO - 2016-02-06 21:14:44 --> Database Driver Class Initialized
INFO - 2016-02-06 21:14:44 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:14:44 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:14:44 --> Email Class Initialized
INFO - 2016-02-06 21:14:44 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:14:44 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:14:44 --> Helper loaded: language_helper
INFO - 2016-02-06 21:14:44 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:14:44 --> Model Class Initialized
INFO - 2016-02-06 21:14:44 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:14:44 --> Model Class Initialized
INFO - 2016-02-06 21:14:44 --> Helper loaded: date_helper
INFO - 2016-02-06 21:14:44 --> Controller Class Initialized
DEBUG - 2016-02-06 21:14:44 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 21:14:44 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dashboard/views/index.php
DEBUG - 2016-02-06 21:14:44 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 21:14:44 --> Final output sent to browser
DEBUG - 2016-02-06 21:14:44 --> Total execution time: 0.6506
INFO - 2016-02-06 21:14:58 --> Config Class Initialized
INFO - 2016-02-06 21:14:58 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:14:58 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:14:58 --> Utf8 Class Initialized
INFO - 2016-02-06 21:14:58 --> URI Class Initialized
INFO - 2016-02-06 21:14:58 --> Router Class Initialized
INFO - 2016-02-06 21:14:58 --> Output Class Initialized
INFO - 2016-02-06 21:14:58 --> Security Class Initialized
DEBUG - 2016-02-06 21:14:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:14:58 --> Input Class Initialized
INFO - 2016-02-06 21:14:58 --> Language Class Initialized
INFO - 2016-02-06 21:14:58 --> Language Class Initialized
INFO - 2016-02-06 21:14:58 --> Config Class Initialized
INFO - 2016-02-06 21:14:58 --> Loader Class Initialized
INFO - 2016-02-06 21:14:58 --> Helper loaded: form_helper
INFO - 2016-02-06 21:14:58 --> Helper loaded: url_helper
INFO - 2016-02-06 21:14:58 --> Helper loaded: general_helper
INFO - 2016-02-06 21:14:58 --> Database Driver Class Initialized
INFO - 2016-02-06 21:14:58 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:14:58 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:14:58 --> Email Class Initialized
INFO - 2016-02-06 21:14:58 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:14:58 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:14:58 --> Helper loaded: language_helper
INFO - 2016-02-06 21:14:58 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:14:58 --> Model Class Initialized
INFO - 2016-02-06 21:14:59 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:14:59 --> Model Class Initialized
INFO - 2016-02-06 21:14:59 --> Helper loaded: date_helper
INFO - 2016-02-06 21:14:59 --> Controller Class Initialized
DEBUG - 2016-02-06 21:14:59 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 21:14:59 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dashboard/views/index.php
DEBUG - 2016-02-06 21:14:59 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 21:14:59 --> Final output sent to browser
DEBUG - 2016-02-06 21:14:59 --> Total execution time: 0.5934
INFO - 2016-02-06 21:23:35 --> Config Class Initialized
INFO - 2016-02-06 21:23:35 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:23:35 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:23:35 --> Utf8 Class Initialized
INFO - 2016-02-06 21:23:35 --> URI Class Initialized
INFO - 2016-02-06 21:23:35 --> Router Class Initialized
INFO - 2016-02-06 21:23:35 --> Output Class Initialized
INFO - 2016-02-06 21:23:35 --> Security Class Initialized
DEBUG - 2016-02-06 21:23:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:23:35 --> Input Class Initialized
INFO - 2016-02-06 21:23:35 --> Language Class Initialized
INFO - 2016-02-06 21:23:35 --> Language Class Initialized
INFO - 2016-02-06 21:23:35 --> Config Class Initialized
INFO - 2016-02-06 21:23:35 --> Loader Class Initialized
INFO - 2016-02-06 21:23:35 --> Helper loaded: form_helper
INFO - 2016-02-06 21:23:35 --> Helper loaded: url_helper
INFO - 2016-02-06 21:23:36 --> Helper loaded: general_helper
INFO - 2016-02-06 21:23:36 --> Database Driver Class Initialized
INFO - 2016-02-06 21:23:36 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:23:36 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:23:36 --> Email Class Initialized
INFO - 2016-02-06 21:23:36 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:23:36 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:23:36 --> Helper loaded: language_helper
INFO - 2016-02-06 21:23:36 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:23:36 --> Model Class Initialized
INFO - 2016-02-06 21:23:36 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:23:36 --> Model Class Initialized
INFO - 2016-02-06 21:23:36 --> Helper loaded: date_helper
INFO - 2016-02-06 21:23:36 --> Controller Class Initialized
DEBUG - 2016-02-06 21:23:36 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 21:23:36 --> Model Class Initialized
INFO - 2016-02-06 21:23:36 --> Language file loaded: language/dutch/auth_lang.php
INFO - 2016-02-06 21:23:36 --> Config Class Initialized
INFO - 2016-02-06 21:23:36 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:23:36 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:23:36 --> Utf8 Class Initialized
INFO - 2016-02-06 21:23:36 --> URI Class Initialized
INFO - 2016-02-06 21:23:36 --> Router Class Initialized
INFO - 2016-02-06 21:23:36 --> Output Class Initialized
INFO - 2016-02-06 21:23:36 --> Security Class Initialized
DEBUG - 2016-02-06 21:23:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:23:36 --> Input Class Initialized
INFO - 2016-02-06 21:23:36 --> Language Class Initialized
INFO - 2016-02-06 21:23:36 --> Language Class Initialized
INFO - 2016-02-06 21:23:36 --> Config Class Initialized
INFO - 2016-02-06 21:23:36 --> Loader Class Initialized
INFO - 2016-02-06 21:23:36 --> Helper loaded: form_helper
INFO - 2016-02-06 21:23:36 --> Helper loaded: url_helper
INFO - 2016-02-06 21:23:36 --> Helper loaded: general_helper
INFO - 2016-02-06 21:23:36 --> Database Driver Class Initialized
INFO - 2016-02-06 21:23:36 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:23:36 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:23:36 --> Email Class Initialized
INFO - 2016-02-06 21:23:36 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:23:36 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:23:36 --> Helper loaded: language_helper
INFO - 2016-02-06 21:23:36 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:23:36 --> Model Class Initialized
INFO - 2016-02-06 21:23:36 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:23:36 --> Model Class Initialized
INFO - 2016-02-06 21:23:36 --> Helper loaded: date_helper
INFO - 2016-02-06 21:23:36 --> Controller Class Initialized
DEBUG - 2016-02-06 21:23:36 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 21:23:36 --> Model Class Initialized
INFO - 2016-02-06 21:23:36 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 21:23:36 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/login.php
DEBUG - 2016-02-06 21:23:36 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 21:23:36 --> Final output sent to browser
DEBUG - 2016-02-06 21:23:36 --> Total execution time: 0.5214
INFO - 2016-02-06 21:23:38 --> Config Class Initialized
INFO - 2016-02-06 21:23:38 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:23:38 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:23:38 --> Utf8 Class Initialized
INFO - 2016-02-06 21:23:38 --> URI Class Initialized
INFO - 2016-02-06 21:23:38 --> Router Class Initialized
INFO - 2016-02-06 21:23:38 --> Output Class Initialized
INFO - 2016-02-06 21:23:38 --> Security Class Initialized
DEBUG - 2016-02-06 21:23:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:23:38 --> Input Class Initialized
INFO - 2016-02-06 21:23:38 --> Language Class Initialized
INFO - 2016-02-06 21:23:38 --> Language Class Initialized
INFO - 2016-02-06 21:23:38 --> Config Class Initialized
INFO - 2016-02-06 21:23:38 --> Loader Class Initialized
INFO - 2016-02-06 21:23:38 --> Helper loaded: form_helper
INFO - 2016-02-06 21:23:38 --> Helper loaded: url_helper
INFO - 2016-02-06 21:23:38 --> Helper loaded: general_helper
INFO - 2016-02-06 21:23:38 --> Database Driver Class Initialized
INFO - 2016-02-06 21:23:38 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:23:38 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:23:38 --> Email Class Initialized
INFO - 2016-02-06 21:23:38 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:23:38 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:23:38 --> Helper loaded: language_helper
INFO - 2016-02-06 21:23:38 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:23:38 --> Model Class Initialized
INFO - 2016-02-06 21:23:38 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:23:38 --> Model Class Initialized
INFO - 2016-02-06 21:23:38 --> Helper loaded: date_helper
INFO - 2016-02-06 21:23:38 --> Controller Class Initialized
INFO - 2016-02-06 21:23:38 --> Config Class Initialized
INFO - 2016-02-06 21:23:38 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:23:39 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:23:39 --> Utf8 Class Initialized
INFO - 2016-02-06 21:23:39 --> URI Class Initialized
INFO - 2016-02-06 21:23:39 --> Router Class Initialized
INFO - 2016-02-06 21:23:39 --> Output Class Initialized
INFO - 2016-02-06 21:23:39 --> Security Class Initialized
DEBUG - 2016-02-06 21:23:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:23:39 --> Input Class Initialized
INFO - 2016-02-06 21:23:39 --> Language Class Initialized
INFO - 2016-02-06 21:23:39 --> Language Class Initialized
INFO - 2016-02-06 21:23:39 --> Config Class Initialized
INFO - 2016-02-06 21:23:39 --> Loader Class Initialized
INFO - 2016-02-06 21:23:39 --> Helper loaded: form_helper
INFO - 2016-02-06 21:23:39 --> Helper loaded: url_helper
INFO - 2016-02-06 21:23:39 --> Helper loaded: general_helper
INFO - 2016-02-06 21:23:39 --> Database Driver Class Initialized
INFO - 2016-02-06 21:23:39 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:23:39 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:23:39 --> Email Class Initialized
INFO - 2016-02-06 21:23:39 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:23:39 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:23:39 --> Helper loaded: language_helper
INFO - 2016-02-06 21:23:39 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:23:39 --> Model Class Initialized
INFO - 2016-02-06 21:23:39 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:23:39 --> Model Class Initialized
INFO - 2016-02-06 21:23:39 --> Helper loaded: date_helper
INFO - 2016-02-06 21:23:39 --> Controller Class Initialized
DEBUG - 2016-02-06 21:23:39 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 21:23:39 --> Model Class Initialized
INFO - 2016-02-06 21:23:39 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 21:23:39 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/login.php
DEBUG - 2016-02-06 21:23:39 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 21:23:39 --> Final output sent to browser
DEBUG - 2016-02-06 21:23:39 --> Total execution time: 0.5154
INFO - 2016-02-06 21:23:48 --> Config Class Initialized
INFO - 2016-02-06 21:23:48 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:23:48 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:23:48 --> Utf8 Class Initialized
INFO - 2016-02-06 21:23:48 --> URI Class Initialized
INFO - 2016-02-06 21:23:48 --> Router Class Initialized
INFO - 2016-02-06 21:23:48 --> Output Class Initialized
INFO - 2016-02-06 21:23:48 --> Security Class Initialized
DEBUG - 2016-02-06 21:23:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:23:48 --> Input Class Initialized
INFO - 2016-02-06 21:23:48 --> Language Class Initialized
INFO - 2016-02-06 21:23:48 --> Language Class Initialized
INFO - 2016-02-06 21:23:48 --> Config Class Initialized
INFO - 2016-02-06 21:23:48 --> Loader Class Initialized
INFO - 2016-02-06 21:23:48 --> Helper loaded: form_helper
INFO - 2016-02-06 21:23:48 --> Helper loaded: url_helper
INFO - 2016-02-06 21:23:48 --> Helper loaded: general_helper
INFO - 2016-02-06 21:23:48 --> Database Driver Class Initialized
INFO - 2016-02-06 21:23:48 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:23:48 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:23:48 --> Email Class Initialized
INFO - 2016-02-06 21:23:48 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:23:48 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:23:48 --> Helper loaded: language_helper
INFO - 2016-02-06 21:23:48 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:23:48 --> Model Class Initialized
INFO - 2016-02-06 21:23:48 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:23:48 --> Model Class Initialized
INFO - 2016-02-06 21:23:48 --> Helper loaded: date_helper
INFO - 2016-02-06 21:23:48 --> Controller Class Initialized
INFO - 2016-02-06 21:23:48 --> Config Class Initialized
INFO - 2016-02-06 21:23:48 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:23:48 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:23:48 --> Utf8 Class Initialized
INFO - 2016-02-06 21:23:48 --> URI Class Initialized
INFO - 2016-02-06 21:23:48 --> Router Class Initialized
INFO - 2016-02-06 21:23:48 --> Output Class Initialized
INFO - 2016-02-06 21:23:48 --> Security Class Initialized
DEBUG - 2016-02-06 21:23:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:23:48 --> Input Class Initialized
INFO - 2016-02-06 21:23:48 --> Language Class Initialized
INFO - 2016-02-06 21:23:48 --> Language Class Initialized
INFO - 2016-02-06 21:23:48 --> Config Class Initialized
INFO - 2016-02-06 21:23:48 --> Loader Class Initialized
INFO - 2016-02-06 21:23:48 --> Helper loaded: form_helper
INFO - 2016-02-06 21:23:48 --> Helper loaded: url_helper
INFO - 2016-02-06 21:23:48 --> Helper loaded: general_helper
INFO - 2016-02-06 21:23:48 --> Database Driver Class Initialized
INFO - 2016-02-06 21:23:49 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:23:49 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:23:49 --> Email Class Initialized
INFO - 2016-02-06 21:23:49 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:23:49 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:23:49 --> Helper loaded: language_helper
INFO - 2016-02-06 21:23:49 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:23:49 --> Model Class Initialized
INFO - 2016-02-06 21:23:49 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:23:49 --> Model Class Initialized
INFO - 2016-02-06 21:23:49 --> Helper loaded: date_helper
INFO - 2016-02-06 21:23:49 --> Controller Class Initialized
DEBUG - 2016-02-06 21:23:49 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 21:23:49 --> Model Class Initialized
INFO - 2016-02-06 21:23:49 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 21:23:49 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/login.php
DEBUG - 2016-02-06 21:23:49 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 21:23:49 --> Final output sent to browser
DEBUG - 2016-02-06 21:23:49 --> Total execution time: 0.5369
INFO - 2016-02-06 21:24:12 --> Config Class Initialized
INFO - 2016-02-06 21:24:12 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:24:12 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:24:12 --> Utf8 Class Initialized
INFO - 2016-02-06 21:24:12 --> URI Class Initialized
INFO - 2016-02-06 21:24:12 --> Router Class Initialized
INFO - 2016-02-06 21:24:12 --> Output Class Initialized
INFO - 2016-02-06 21:24:12 --> Security Class Initialized
DEBUG - 2016-02-06 21:24:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:24:12 --> Input Class Initialized
INFO - 2016-02-06 21:24:12 --> Language Class Initialized
INFO - 2016-02-06 21:24:12 --> Language Class Initialized
INFO - 2016-02-06 21:24:12 --> Config Class Initialized
INFO - 2016-02-06 21:24:12 --> Loader Class Initialized
INFO - 2016-02-06 21:24:12 --> Helper loaded: form_helper
INFO - 2016-02-06 21:24:12 --> Helper loaded: url_helper
INFO - 2016-02-06 21:24:12 --> Helper loaded: general_helper
INFO - 2016-02-06 21:24:12 --> Database Driver Class Initialized
INFO - 2016-02-06 21:24:12 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:24:12 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:24:12 --> Email Class Initialized
INFO - 2016-02-06 21:24:12 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:24:12 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:24:12 --> Helper loaded: language_helper
INFO - 2016-02-06 21:24:12 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:24:12 --> Model Class Initialized
INFO - 2016-02-06 21:24:12 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:24:12 --> Model Class Initialized
INFO - 2016-02-06 21:24:12 --> Helper loaded: date_helper
INFO - 2016-02-06 21:24:12 --> Controller Class Initialized
DEBUG - 2016-02-06 21:24:12 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 21:24:12 --> Model Class Initialized
INFO - 2016-02-06 21:24:12 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 21:24:12 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/login.php
DEBUG - 2016-02-06 21:24:13 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 21:24:13 --> Final output sent to browser
DEBUG - 2016-02-06 21:24:13 --> Total execution time: 0.5383
INFO - 2016-02-06 21:24:14 --> Config Class Initialized
INFO - 2016-02-06 21:24:14 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:24:14 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:24:14 --> Utf8 Class Initialized
INFO - 2016-02-06 21:24:14 --> URI Class Initialized
INFO - 2016-02-06 21:24:14 --> Router Class Initialized
INFO - 2016-02-06 21:24:14 --> Output Class Initialized
INFO - 2016-02-06 21:24:14 --> Security Class Initialized
DEBUG - 2016-02-06 21:24:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:24:14 --> Input Class Initialized
INFO - 2016-02-06 21:24:14 --> Language Class Initialized
INFO - 2016-02-06 21:24:14 --> Language Class Initialized
INFO - 2016-02-06 21:24:14 --> Config Class Initialized
INFO - 2016-02-06 21:24:14 --> Loader Class Initialized
INFO - 2016-02-06 21:24:14 --> Helper loaded: form_helper
INFO - 2016-02-06 21:24:14 --> Helper loaded: url_helper
INFO - 2016-02-06 21:24:14 --> Helper loaded: general_helper
INFO - 2016-02-06 21:24:14 --> Database Driver Class Initialized
INFO - 2016-02-06 21:24:14 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:24:14 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:24:14 --> Email Class Initialized
INFO - 2016-02-06 21:24:14 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:24:14 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:24:14 --> Helper loaded: language_helper
INFO - 2016-02-06 21:24:14 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:24:14 --> Model Class Initialized
INFO - 2016-02-06 21:24:14 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:24:14 --> Model Class Initialized
INFO - 2016-02-06 21:24:14 --> Helper loaded: date_helper
INFO - 2016-02-06 21:24:14 --> Controller Class Initialized
DEBUG - 2016-02-06 21:24:14 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 21:24:14 --> Model Class Initialized
INFO - 2016-02-06 21:24:14 --> Language file loaded: language/dutch/auth_lang.php
ERROR - 2016-02-06 21:24:14 --> Could not find the language line "forgot_password_identity_label"
ERROR - 2016-02-06 21:24:14 --> Could not find the language line "forgot_password_identity_label"
DEBUG - 2016-02-06 21:24:14 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
ERROR - 2016-02-06 21:24:14 --> Could not find the language line "forgot_password_identity_label"
DEBUG - 2016-02-06 21:24:14 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/forgot_password.php
DEBUG - 2016-02-06 21:24:14 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 21:24:14 --> Final output sent to browser
DEBUG - 2016-02-06 21:24:14 --> Total execution time: 0.5678
INFO - 2016-02-06 21:25:50 --> Config Class Initialized
INFO - 2016-02-06 21:25:50 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:25:50 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:25:50 --> Utf8 Class Initialized
INFO - 2016-02-06 21:25:50 --> URI Class Initialized
INFO - 2016-02-06 21:25:50 --> Router Class Initialized
INFO - 2016-02-06 21:25:50 --> Output Class Initialized
INFO - 2016-02-06 21:25:50 --> Security Class Initialized
DEBUG - 2016-02-06 21:25:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:25:50 --> Input Class Initialized
INFO - 2016-02-06 21:25:50 --> Language Class Initialized
INFO - 2016-02-06 21:25:50 --> Language Class Initialized
INFO - 2016-02-06 21:25:50 --> Config Class Initialized
INFO - 2016-02-06 21:25:50 --> Loader Class Initialized
INFO - 2016-02-06 21:25:50 --> Helper loaded: form_helper
INFO - 2016-02-06 21:25:50 --> Helper loaded: url_helper
INFO - 2016-02-06 21:25:50 --> Helper loaded: general_helper
INFO - 2016-02-06 21:25:50 --> Database Driver Class Initialized
INFO - 2016-02-06 21:25:50 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:25:50 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:25:50 --> Email Class Initialized
INFO - 2016-02-06 21:25:50 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:25:50 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:25:50 --> Helper loaded: language_helper
INFO - 2016-02-06 21:25:50 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:25:50 --> Model Class Initialized
INFO - 2016-02-06 21:25:50 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:25:50 --> Model Class Initialized
INFO - 2016-02-06 21:25:50 --> Helper loaded: date_helper
INFO - 2016-02-06 21:25:50 --> Controller Class Initialized
DEBUG - 2016-02-06 21:25:50 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 21:25:50 --> Model Class Initialized
INFO - 2016-02-06 21:25:50 --> Language file loaded: language/dutch/auth_lang.php
ERROR - 2016-02-06 21:25:50 --> Could not find the language line "forgot_password_identity_label"
ERROR - 2016-02-06 21:25:50 --> Could not find the language line "forgot_password_identity_label"
ERROR - 2016-02-06 21:25:50 --> Could not find the language line "forgot_password_identity_label"
DEBUG - 2016-02-06 21:25:50 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/forgot_password.php
DEBUG - 2016-02-06 21:25:50 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 21:25:50 --> Final output sent to browser
DEBUG - 2016-02-06 21:25:50 --> Total execution time: 0.5452
INFO - 2016-02-06 21:26:09 --> Config Class Initialized
INFO - 2016-02-06 21:26:10 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:26:10 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:26:10 --> Utf8 Class Initialized
INFO - 2016-02-06 21:26:10 --> URI Class Initialized
INFO - 2016-02-06 21:26:10 --> Router Class Initialized
INFO - 2016-02-06 21:26:10 --> Output Class Initialized
INFO - 2016-02-06 21:26:10 --> Security Class Initialized
DEBUG - 2016-02-06 21:26:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:26:10 --> Input Class Initialized
INFO - 2016-02-06 21:26:10 --> Language Class Initialized
INFO - 2016-02-06 21:26:10 --> Language Class Initialized
INFO - 2016-02-06 21:26:10 --> Config Class Initialized
INFO - 2016-02-06 21:26:10 --> Loader Class Initialized
INFO - 2016-02-06 21:26:10 --> Helper loaded: form_helper
INFO - 2016-02-06 21:26:10 --> Helper loaded: url_helper
INFO - 2016-02-06 21:26:10 --> Helper loaded: general_helper
INFO - 2016-02-06 21:26:10 --> Database Driver Class Initialized
INFO - 2016-02-06 21:26:10 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:26:10 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:26:10 --> Email Class Initialized
INFO - 2016-02-06 21:26:10 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:26:10 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:26:10 --> Helper loaded: language_helper
INFO - 2016-02-06 21:26:10 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:26:10 --> Model Class Initialized
INFO - 2016-02-06 21:26:10 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:26:10 --> Model Class Initialized
INFO - 2016-02-06 21:26:10 --> Helper loaded: date_helper
INFO - 2016-02-06 21:26:10 --> Controller Class Initialized
DEBUG - 2016-02-06 21:26:10 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 21:26:10 --> Model Class Initialized
INFO - 2016-02-06 21:26:10 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 21:26:10 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/login.php
DEBUG - 2016-02-06 21:26:10 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 21:26:10 --> Final output sent to browser
DEBUG - 2016-02-06 21:26:10 --> Total execution time: 0.5899
INFO - 2016-02-06 21:26:20 --> Config Class Initialized
INFO - 2016-02-06 21:26:20 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:26:20 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:26:20 --> Utf8 Class Initialized
INFO - 2016-02-06 21:26:20 --> URI Class Initialized
INFO - 2016-02-06 21:26:20 --> Router Class Initialized
INFO - 2016-02-06 21:26:20 --> Output Class Initialized
INFO - 2016-02-06 21:26:20 --> Security Class Initialized
DEBUG - 2016-02-06 21:26:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:26:20 --> Input Class Initialized
INFO - 2016-02-06 21:26:20 --> Language Class Initialized
INFO - 2016-02-06 21:26:20 --> Language Class Initialized
INFO - 2016-02-06 21:26:20 --> Config Class Initialized
INFO - 2016-02-06 21:26:20 --> Loader Class Initialized
INFO - 2016-02-06 21:26:20 --> Helper loaded: form_helper
INFO - 2016-02-06 21:26:20 --> Helper loaded: url_helper
INFO - 2016-02-06 21:26:20 --> Helper loaded: general_helper
INFO - 2016-02-06 21:26:20 --> Database Driver Class Initialized
INFO - 2016-02-06 21:26:20 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:26:20 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:26:20 --> Email Class Initialized
INFO - 2016-02-06 21:26:20 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:26:20 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:26:20 --> Helper loaded: language_helper
INFO - 2016-02-06 21:26:20 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:26:20 --> Model Class Initialized
INFO - 2016-02-06 21:26:20 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:26:20 --> Model Class Initialized
INFO - 2016-02-06 21:26:20 --> Helper loaded: date_helper
INFO - 2016-02-06 21:26:20 --> Controller Class Initialized
DEBUG - 2016-02-06 21:26:20 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 21:26:20 --> Model Class Initialized
INFO - 2016-02-06 21:26:20 --> Language file loaded: language/dutch/auth_lang.php
INFO - 2016-02-06 21:26:20 --> Language file loaded: language/dutch/form_validation_lang.php
INFO - 2016-02-06 21:26:20 --> Config Class Initialized
INFO - 2016-02-06 21:26:20 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:26:20 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:26:20 --> Utf8 Class Initialized
INFO - 2016-02-06 21:26:20 --> URI Class Initialized
DEBUG - 2016-02-06 21:26:20 --> No URI present. Default controller set.
INFO - 2016-02-06 21:26:20 --> Router Class Initialized
INFO - 2016-02-06 21:26:20 --> Output Class Initialized
INFO - 2016-02-06 21:26:20 --> Security Class Initialized
DEBUG - 2016-02-06 21:26:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:26:20 --> Input Class Initialized
INFO - 2016-02-06 21:26:20 --> Language Class Initialized
INFO - 2016-02-06 21:26:20 --> Language Class Initialized
INFO - 2016-02-06 21:26:20 --> Config Class Initialized
INFO - 2016-02-06 21:26:20 --> Loader Class Initialized
INFO - 2016-02-06 21:26:20 --> Helper loaded: form_helper
INFO - 2016-02-06 21:26:20 --> Helper loaded: url_helper
INFO - 2016-02-06 21:26:20 --> Helper loaded: general_helper
INFO - 2016-02-06 21:26:20 --> Database Driver Class Initialized
INFO - 2016-02-06 21:26:21 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:26:21 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:26:21 --> Email Class Initialized
INFO - 2016-02-06 21:26:21 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:26:21 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:26:21 --> Helper loaded: language_helper
INFO - 2016-02-06 21:26:21 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:26:21 --> Model Class Initialized
INFO - 2016-02-06 21:26:21 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:26:21 --> Model Class Initialized
INFO - 2016-02-06 21:26:21 --> Helper loaded: date_helper
INFO - 2016-02-06 21:26:21 --> Controller Class Initialized
DEBUG - 2016-02-06 21:26:21 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 21:26:21 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dashboard/views/index.php
DEBUG - 2016-02-06 21:26:21 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 21:26:21 --> Final output sent to browser
DEBUG - 2016-02-06 21:26:21 --> Total execution time: 0.5117
INFO - 2016-02-06 21:29:14 --> Config Class Initialized
INFO - 2016-02-06 21:29:14 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:29:14 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:29:14 --> Utf8 Class Initialized
INFO - 2016-02-06 21:29:14 --> URI Class Initialized
INFO - 2016-02-06 21:29:14 --> Router Class Initialized
INFO - 2016-02-06 21:29:14 --> Output Class Initialized
INFO - 2016-02-06 21:29:14 --> Security Class Initialized
DEBUG - 2016-02-06 21:29:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:29:14 --> Input Class Initialized
INFO - 2016-02-06 21:29:14 --> Language Class Initialized
INFO - 2016-02-06 21:29:14 --> Language Class Initialized
INFO - 2016-02-06 21:29:14 --> Config Class Initialized
INFO - 2016-02-06 21:29:14 --> Loader Class Initialized
INFO - 2016-02-06 21:29:14 --> Helper loaded: form_helper
INFO - 2016-02-06 21:29:14 --> Helper loaded: url_helper
INFO - 2016-02-06 21:29:14 --> Helper loaded: general_helper
INFO - 2016-02-06 21:29:14 --> Database Driver Class Initialized
INFO - 2016-02-06 21:29:14 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:29:14 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:29:14 --> Email Class Initialized
INFO - 2016-02-06 21:29:14 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:29:14 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:29:14 --> Helper loaded: language_helper
INFO - 2016-02-06 21:29:15 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:29:15 --> Model Class Initialized
INFO - 2016-02-06 21:29:15 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:29:15 --> Model Class Initialized
INFO - 2016-02-06 21:29:15 --> Helper loaded: date_helper
INFO - 2016-02-06 21:29:15 --> Controller Class Initialized
DEBUG - 2016-02-06 21:29:15 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 21:29:15 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dashboard/views/index.php
DEBUG - 2016-02-06 21:29:15 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 21:29:15 --> Final output sent to browser
DEBUG - 2016-02-06 21:29:15 --> Total execution time: 0.4825
INFO - 2016-02-06 21:29:29 --> Config Class Initialized
INFO - 2016-02-06 21:29:29 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:29:29 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:29:29 --> Utf8 Class Initialized
INFO - 2016-02-06 21:29:29 --> URI Class Initialized
INFO - 2016-02-06 21:29:29 --> Router Class Initialized
INFO - 2016-02-06 21:29:29 --> Output Class Initialized
INFO - 2016-02-06 21:29:29 --> Security Class Initialized
DEBUG - 2016-02-06 21:29:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:29:30 --> Input Class Initialized
INFO - 2016-02-06 21:29:30 --> Language Class Initialized
INFO - 2016-02-06 21:29:30 --> Language Class Initialized
INFO - 2016-02-06 21:29:30 --> Config Class Initialized
INFO - 2016-02-06 21:29:30 --> Loader Class Initialized
INFO - 2016-02-06 21:29:30 --> Helper loaded: form_helper
INFO - 2016-02-06 21:29:30 --> Helper loaded: url_helper
INFO - 2016-02-06 21:29:30 --> Helper loaded: general_helper
INFO - 2016-02-06 21:29:30 --> Database Driver Class Initialized
INFO - 2016-02-06 21:29:30 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:29:30 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:29:30 --> Email Class Initialized
INFO - 2016-02-06 21:29:30 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:29:30 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:29:30 --> Helper loaded: language_helper
INFO - 2016-02-06 21:29:30 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:29:30 --> Model Class Initialized
INFO - 2016-02-06 21:29:30 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:29:30 --> Model Class Initialized
INFO - 2016-02-06 21:29:30 --> Helper loaded: date_helper
INFO - 2016-02-06 21:29:30 --> Controller Class Initialized
INFO - 2016-02-06 21:29:30 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 21:29:30 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 21:29:30 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 21:29:30 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 21:29:30 --> Final output sent to browser
DEBUG - 2016-02-06 21:29:30 --> Total execution time: 0.5082
INFO - 2016-02-06 21:33:50 --> Config Class Initialized
INFO - 2016-02-06 21:33:50 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:33:50 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:33:50 --> Utf8 Class Initialized
INFO - 2016-02-06 21:33:50 --> URI Class Initialized
INFO - 2016-02-06 21:33:50 --> Router Class Initialized
INFO - 2016-02-06 21:33:50 --> Output Class Initialized
INFO - 2016-02-06 21:33:50 --> Security Class Initialized
DEBUG - 2016-02-06 21:33:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:33:50 --> Input Class Initialized
INFO - 2016-02-06 21:33:50 --> Language Class Initialized
INFO - 2016-02-06 21:33:50 --> Language Class Initialized
INFO - 2016-02-06 21:33:50 --> Config Class Initialized
INFO - 2016-02-06 21:33:50 --> Loader Class Initialized
INFO - 2016-02-06 21:33:50 --> Helper loaded: form_helper
INFO - 2016-02-06 21:33:50 --> Helper loaded: url_helper
INFO - 2016-02-06 21:33:50 --> Helper loaded: general_helper
INFO - 2016-02-06 21:33:50 --> Database Driver Class Initialized
INFO - 2016-02-06 21:33:50 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:33:50 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:33:50 --> Email Class Initialized
INFO - 2016-02-06 21:33:50 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:33:50 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:33:50 --> Helper loaded: language_helper
INFO - 2016-02-06 21:33:50 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:33:50 --> Model Class Initialized
INFO - 2016-02-06 21:33:50 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:33:50 --> Model Class Initialized
INFO - 2016-02-06 21:33:50 --> Helper loaded: date_helper
INFO - 2016-02-06 21:33:50 --> Controller Class Initialized
DEBUG - 2016-02-06 21:33:50 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/models/Aftekenlijsten_m.php
INFO - 2016-02-06 21:33:50 --> Model Class Initialized
INFO - 2016-02-06 21:33:50 --> Model Class Initialized
ERROR - 2016-02-06 21:33:50 --> Severity: Error --> Call to undefined method Aftekenlijsten::member_view() C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\diensten\controllers\aftekenlijsten.php 25
INFO - 2016-02-06 21:35:27 --> Config Class Initialized
INFO - 2016-02-06 21:35:27 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:35:27 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:35:27 --> Utf8 Class Initialized
INFO - 2016-02-06 21:35:27 --> URI Class Initialized
INFO - 2016-02-06 21:35:27 --> Router Class Initialized
INFO - 2016-02-06 21:35:27 --> Output Class Initialized
INFO - 2016-02-06 21:35:27 --> Security Class Initialized
DEBUG - 2016-02-06 21:35:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:35:28 --> Input Class Initialized
INFO - 2016-02-06 21:35:28 --> Language Class Initialized
INFO - 2016-02-06 21:35:28 --> Language Class Initialized
INFO - 2016-02-06 21:35:28 --> Config Class Initialized
INFO - 2016-02-06 21:35:28 --> Loader Class Initialized
INFO - 2016-02-06 21:35:28 --> Helper loaded: form_helper
INFO - 2016-02-06 21:35:28 --> Helper loaded: url_helper
INFO - 2016-02-06 21:35:28 --> Helper loaded: general_helper
INFO - 2016-02-06 21:35:28 --> Database Driver Class Initialized
INFO - 2016-02-06 21:35:28 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:35:28 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:35:28 --> Email Class Initialized
INFO - 2016-02-06 21:35:28 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:35:28 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:35:28 --> Helper loaded: language_helper
INFO - 2016-02-06 21:35:28 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:35:28 --> Model Class Initialized
INFO - 2016-02-06 21:35:28 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:35:28 --> Model Class Initialized
INFO - 2016-02-06 21:35:28 --> Helper loaded: date_helper
INFO - 2016-02-06 21:35:28 --> Controller Class Initialized
DEBUG - 2016-02-06 21:35:28 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/models/Aftekenlijsten_m.php
INFO - 2016-02-06 21:35:28 --> Model Class Initialized
INFO - 2016-02-06 21:35:28 --> Model Class Initialized
DEBUG - 2016-02-06 21:35:28 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 21:35:28 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/views/aftekenlijsten/index.php
DEBUG - 2016-02-06 21:35:28 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 21:35:28 --> Final output sent to browser
DEBUG - 2016-02-06 21:35:28 --> Total execution time: 0.5706
INFO - 2016-02-06 21:35:44 --> Config Class Initialized
INFO - 2016-02-06 21:35:44 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:35:44 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:35:44 --> Utf8 Class Initialized
INFO - 2016-02-06 21:35:44 --> URI Class Initialized
INFO - 2016-02-06 21:35:44 --> Router Class Initialized
INFO - 2016-02-06 21:35:44 --> Output Class Initialized
INFO - 2016-02-06 21:35:44 --> Security Class Initialized
DEBUG - 2016-02-06 21:35:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:35:44 --> Input Class Initialized
INFO - 2016-02-06 21:35:44 --> Language Class Initialized
INFO - 2016-02-06 21:35:44 --> Language Class Initialized
INFO - 2016-02-06 21:35:44 --> Config Class Initialized
INFO - 2016-02-06 21:35:44 --> Loader Class Initialized
INFO - 2016-02-06 21:35:44 --> Helper loaded: form_helper
INFO - 2016-02-06 21:35:44 --> Helper loaded: url_helper
INFO - 2016-02-06 21:35:44 --> Helper loaded: general_helper
INFO - 2016-02-06 21:35:44 --> Database Driver Class Initialized
INFO - 2016-02-06 21:35:44 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:35:44 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:35:44 --> Email Class Initialized
INFO - 2016-02-06 21:35:44 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:35:44 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:35:44 --> Helper loaded: language_helper
INFO - 2016-02-06 21:35:45 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:35:45 --> Model Class Initialized
INFO - 2016-02-06 21:35:45 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:35:45 --> Model Class Initialized
INFO - 2016-02-06 21:35:45 --> Helper loaded: date_helper
INFO - 2016-02-06 21:35:45 --> Controller Class Initialized
DEBUG - 2016-02-06 21:35:45 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 21:35:45 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dashboard/views/index.php
DEBUG - 2016-02-06 21:35:45 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 21:35:45 --> Final output sent to browser
DEBUG - 2016-02-06 21:35:45 --> Total execution time: 0.4853
INFO - 2016-02-06 21:35:48 --> Config Class Initialized
INFO - 2016-02-06 21:35:48 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:35:48 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:35:48 --> Utf8 Class Initialized
INFO - 2016-02-06 21:35:48 --> URI Class Initialized
INFO - 2016-02-06 21:35:48 --> Router Class Initialized
INFO - 2016-02-06 21:35:48 --> Output Class Initialized
INFO - 2016-02-06 21:35:48 --> Security Class Initialized
DEBUG - 2016-02-06 21:35:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:35:48 --> Input Class Initialized
INFO - 2016-02-06 21:35:48 --> Language Class Initialized
INFO - 2016-02-06 21:35:48 --> Language Class Initialized
INFO - 2016-02-06 21:35:48 --> Config Class Initialized
INFO - 2016-02-06 21:35:48 --> Loader Class Initialized
INFO - 2016-02-06 21:35:48 --> Helper loaded: form_helper
INFO - 2016-02-06 21:35:48 --> Helper loaded: url_helper
INFO - 2016-02-06 21:35:48 --> Helper loaded: general_helper
INFO - 2016-02-06 21:35:48 --> Database Driver Class Initialized
INFO - 2016-02-06 21:35:48 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:35:49 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:35:49 --> Email Class Initialized
INFO - 2016-02-06 21:35:49 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:35:49 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:35:49 --> Helper loaded: language_helper
INFO - 2016-02-06 21:35:49 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:35:49 --> Model Class Initialized
INFO - 2016-02-06 21:35:49 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:35:49 --> Model Class Initialized
INFO - 2016-02-06 21:35:49 --> Helper loaded: date_helper
INFO - 2016-02-06 21:35:49 --> Controller Class Initialized
DEBUG - 2016-02-06 21:35:49 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/models/Wijkzorg_m.php
INFO - 2016-02-06 21:35:49 --> Model Class Initialized
INFO - 2016-02-06 21:35:49 --> Model Class Initialized
INFO - 2016-02-06 21:35:49 --> Config Class Initialized
INFO - 2016-02-06 21:35:49 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:35:49 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:35:49 --> Utf8 Class Initialized
INFO - 2016-02-06 21:35:49 --> URI Class Initialized
INFO - 2016-02-06 21:35:49 --> Router Class Initialized
INFO - 2016-02-06 21:35:49 --> Output Class Initialized
INFO - 2016-02-06 21:35:49 --> Security Class Initialized
DEBUG - 2016-02-06 21:35:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:35:49 --> Input Class Initialized
INFO - 2016-02-06 21:35:49 --> Language Class Initialized
INFO - 2016-02-06 21:35:49 --> Language Class Initialized
INFO - 2016-02-06 21:35:49 --> Config Class Initialized
INFO - 2016-02-06 21:35:49 --> Loader Class Initialized
INFO - 2016-02-06 21:35:49 --> Helper loaded: form_helper
INFO - 2016-02-06 21:35:49 --> Helper loaded: url_helper
INFO - 2016-02-06 21:35:49 --> Helper loaded: general_helper
INFO - 2016-02-06 21:35:49 --> Database Driver Class Initialized
INFO - 2016-02-06 21:35:49 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:35:49 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:35:49 --> Email Class Initialized
INFO - 2016-02-06 21:35:49 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:35:49 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:35:49 --> Helper loaded: language_helper
INFO - 2016-02-06 21:35:49 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:35:49 --> Model Class Initialized
INFO - 2016-02-06 21:35:49 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:35:49 --> Model Class Initialized
INFO - 2016-02-06 21:35:49 --> Helper loaded: date_helper
INFO - 2016-02-06 21:35:49 --> Controller Class Initialized
DEBUG - 2016-02-06 21:35:49 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/models/Wijkzorg_m.php
INFO - 2016-02-06 21:35:49 --> Model Class Initialized
INFO - 2016-02-06 21:35:49 --> Model Class Initialized
DEBUG - 2016-02-06 21:35:49 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 21:35:49 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/views/wijkzorg/table.php
DEBUG - 2016-02-06 21:35:49 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 21:35:49 --> Final output sent to browser
DEBUG - 2016-02-06 21:35:49 --> Total execution time: 0.5815
INFO - 2016-02-06 21:36:30 --> Config Class Initialized
INFO - 2016-02-06 21:36:30 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:36:30 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:36:30 --> Utf8 Class Initialized
INFO - 2016-02-06 21:36:30 --> URI Class Initialized
DEBUG - 2016-02-06 21:36:30 --> No URI present. Default controller set.
INFO - 2016-02-06 21:36:30 --> Router Class Initialized
INFO - 2016-02-06 21:36:30 --> Output Class Initialized
INFO - 2016-02-06 21:36:30 --> Security Class Initialized
DEBUG - 2016-02-06 21:36:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:36:30 --> Input Class Initialized
INFO - 2016-02-06 21:36:30 --> Language Class Initialized
INFO - 2016-02-06 21:36:30 --> Language Class Initialized
INFO - 2016-02-06 21:36:30 --> Config Class Initialized
INFO - 2016-02-06 21:36:30 --> Loader Class Initialized
INFO - 2016-02-06 21:36:30 --> Helper loaded: form_helper
INFO - 2016-02-06 21:36:30 --> Helper loaded: url_helper
INFO - 2016-02-06 21:36:30 --> Helper loaded: general_helper
INFO - 2016-02-06 21:36:30 --> Database Driver Class Initialized
INFO - 2016-02-06 21:36:30 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:36:30 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:36:30 --> Email Class Initialized
INFO - 2016-02-06 21:36:30 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:36:30 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:36:30 --> Helper loaded: language_helper
INFO - 2016-02-06 21:36:30 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:36:30 --> Model Class Initialized
INFO - 2016-02-06 21:36:30 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:36:30 --> Model Class Initialized
INFO - 2016-02-06 21:36:31 --> Helper loaded: date_helper
INFO - 2016-02-06 21:36:31 --> Controller Class Initialized
DEBUG - 2016-02-06 21:36:31 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 21:36:31 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dashboard/views/index.php
DEBUG - 2016-02-06 21:36:31 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 21:36:31 --> Final output sent to browser
DEBUG - 2016-02-06 21:36:31 --> Total execution time: 0.5387
INFO - 2016-02-06 21:36:33 --> Config Class Initialized
INFO - 2016-02-06 21:36:33 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:36:33 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:36:33 --> Utf8 Class Initialized
INFO - 2016-02-06 21:36:33 --> URI Class Initialized
INFO - 2016-02-06 21:36:33 --> Router Class Initialized
INFO - 2016-02-06 21:36:33 --> Output Class Initialized
INFO - 2016-02-06 21:36:33 --> Security Class Initialized
DEBUG - 2016-02-06 21:36:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:36:33 --> Input Class Initialized
INFO - 2016-02-06 21:36:33 --> Language Class Initialized
INFO - 2016-02-06 21:36:33 --> Language Class Initialized
INFO - 2016-02-06 21:36:33 --> Config Class Initialized
INFO - 2016-02-06 21:36:33 --> Loader Class Initialized
INFO - 2016-02-06 21:36:33 --> Helper loaded: form_helper
INFO - 2016-02-06 21:36:33 --> Helper loaded: url_helper
INFO - 2016-02-06 21:36:33 --> Helper loaded: general_helper
INFO - 2016-02-06 21:36:33 --> Database Driver Class Initialized
INFO - 2016-02-06 21:36:33 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:36:33 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:36:33 --> Email Class Initialized
INFO - 2016-02-06 21:36:33 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:36:33 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:36:33 --> Helper loaded: language_helper
INFO - 2016-02-06 21:36:33 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:36:33 --> Model Class Initialized
INFO - 2016-02-06 21:36:33 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:36:33 --> Model Class Initialized
INFO - 2016-02-06 21:36:33 --> Helper loaded: date_helper
INFO - 2016-02-06 21:36:33 --> Controller Class Initialized
DEBUG - 2016-02-06 21:36:33 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dossiers/models/Dossier_m.php
INFO - 2016-02-06 21:36:33 --> Model Class Initialized
ERROR - 2016-02-06 21:36:33 --> Severity: Error --> Call to undefined method Clienten::member_view() C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\dossiers\controllers\clienten.php 20
INFO - 2016-02-06 21:37:02 --> Config Class Initialized
INFO - 2016-02-06 21:37:02 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:37:02 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:37:02 --> Utf8 Class Initialized
INFO - 2016-02-06 21:37:02 --> URI Class Initialized
INFO - 2016-02-06 21:37:02 --> Router Class Initialized
INFO - 2016-02-06 21:37:02 --> Output Class Initialized
INFO - 2016-02-06 21:37:02 --> Security Class Initialized
DEBUG - 2016-02-06 21:37:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:37:02 --> Input Class Initialized
INFO - 2016-02-06 21:37:02 --> Language Class Initialized
INFO - 2016-02-06 21:37:02 --> Language Class Initialized
INFO - 2016-02-06 21:37:02 --> Config Class Initialized
INFO - 2016-02-06 21:37:02 --> Loader Class Initialized
INFO - 2016-02-06 21:37:02 --> Helper loaded: form_helper
INFO - 2016-02-06 21:37:02 --> Helper loaded: url_helper
INFO - 2016-02-06 21:37:02 --> Helper loaded: general_helper
INFO - 2016-02-06 21:37:02 --> Database Driver Class Initialized
INFO - 2016-02-06 21:37:02 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:37:02 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:37:02 --> Email Class Initialized
INFO - 2016-02-06 21:37:02 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:37:02 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:37:02 --> Helper loaded: language_helper
INFO - 2016-02-06 21:37:03 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:37:03 --> Model Class Initialized
INFO - 2016-02-06 21:37:03 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:37:03 --> Model Class Initialized
INFO - 2016-02-06 21:37:03 --> Helper loaded: date_helper
INFO - 2016-02-06 21:37:03 --> Controller Class Initialized
DEBUG - 2016-02-06 21:37:03 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dossiers/models/Dossier_m.php
INFO - 2016-02-06 21:37:03 --> Model Class Initialized
DEBUG - 2016-02-06 21:37:03 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 21:37:03 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dossiers/views/clienten.php
DEBUG - 2016-02-06 21:37:03 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 21:37:03 --> Final output sent to browser
DEBUG - 2016-02-06 21:37:03 --> Total execution time: 0.5553
INFO - 2016-02-06 21:37:58 --> Config Class Initialized
INFO - 2016-02-06 21:37:58 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:37:58 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:37:58 --> Utf8 Class Initialized
INFO - 2016-02-06 21:37:58 --> URI Class Initialized
INFO - 2016-02-06 21:37:58 --> Router Class Initialized
INFO - 2016-02-06 21:37:58 --> Output Class Initialized
INFO - 2016-02-06 21:37:58 --> Security Class Initialized
DEBUG - 2016-02-06 21:37:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:37:58 --> Input Class Initialized
INFO - 2016-02-06 21:37:58 --> Language Class Initialized
ERROR - 2016-02-06 21:37:58 --> 404 Page Not Found: ../modules/dossiers/controllers//index
INFO - 2016-02-06 21:39:54 --> Config Class Initialized
INFO - 2016-02-06 21:39:54 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:39:54 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:39:54 --> Utf8 Class Initialized
INFO - 2016-02-06 21:39:54 --> URI Class Initialized
INFO - 2016-02-06 21:39:54 --> Router Class Initialized
INFO - 2016-02-06 21:39:54 --> Output Class Initialized
INFO - 2016-02-06 21:39:54 --> Security Class Initialized
DEBUG - 2016-02-06 21:39:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:39:54 --> Input Class Initialized
INFO - 2016-02-06 21:39:54 --> Language Class Initialized
INFO - 2016-02-06 21:39:54 --> Language Class Initialized
INFO - 2016-02-06 21:39:54 --> Config Class Initialized
INFO - 2016-02-06 21:39:54 --> Loader Class Initialized
INFO - 2016-02-06 21:39:54 --> Helper loaded: form_helper
INFO - 2016-02-06 21:39:54 --> Helper loaded: url_helper
INFO - 2016-02-06 21:39:54 --> Helper loaded: general_helper
INFO - 2016-02-06 21:39:54 --> Database Driver Class Initialized
INFO - 2016-02-06 21:39:54 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:39:54 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:39:54 --> Email Class Initialized
INFO - 2016-02-06 21:39:54 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:39:54 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:39:54 --> Helper loaded: language_helper
INFO - 2016-02-06 21:39:54 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:39:54 --> Model Class Initialized
INFO - 2016-02-06 21:39:54 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:39:54 --> Model Class Initialized
INFO - 2016-02-06 21:39:54 --> Helper loaded: date_helper
INFO - 2016-02-06 21:39:54 --> Controller Class Initialized
DEBUG - 2016-02-06 21:39:54 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dossiers/models/Dossier_m.php
INFO - 2016-02-06 21:39:54 --> Model Class Initialized
DEBUG - 2016-02-06 21:39:54 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 21:39:54 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dossiers/views/clienten.php
DEBUG - 2016-02-06 21:39:54 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 21:39:54 --> Final output sent to browser
DEBUG - 2016-02-06 21:39:54 --> Total execution time: 0.5669
INFO - 2016-02-06 21:39:56 --> Config Class Initialized
INFO - 2016-02-06 21:39:56 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:39:56 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:39:56 --> Utf8 Class Initialized
INFO - 2016-02-06 21:39:56 --> URI Class Initialized
INFO - 2016-02-06 21:39:56 --> Router Class Initialized
INFO - 2016-02-06 21:39:56 --> Output Class Initialized
INFO - 2016-02-06 21:39:56 --> Security Class Initialized
DEBUG - 2016-02-06 21:39:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:39:56 --> Input Class Initialized
INFO - 2016-02-06 21:39:56 --> Language Class Initialized
INFO - 2016-02-06 21:39:56 --> Language Class Initialized
INFO - 2016-02-06 21:39:56 --> Config Class Initialized
INFO - 2016-02-06 21:39:56 --> Loader Class Initialized
INFO - 2016-02-06 21:39:56 --> Helper loaded: form_helper
INFO - 2016-02-06 21:39:56 --> Helper loaded: url_helper
INFO - 2016-02-06 21:39:56 --> Helper loaded: general_helper
INFO - 2016-02-06 21:39:56 --> Database Driver Class Initialized
INFO - 2016-02-06 21:39:56 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:39:56 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:39:57 --> Email Class Initialized
INFO - 2016-02-06 21:39:57 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:39:57 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:39:57 --> Helper loaded: language_helper
INFO - 2016-02-06 21:39:57 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:39:57 --> Model Class Initialized
INFO - 2016-02-06 21:39:57 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:39:57 --> Model Class Initialized
INFO - 2016-02-06 21:39:57 --> Helper loaded: date_helper
INFO - 2016-02-06 21:39:57 --> Controller Class Initialized
DEBUG - 2016-02-06 21:39:57 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 21:39:57 --> Model Class Initialized
INFO - 2016-02-06 21:39:57 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 21:39:57 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 21:39:57 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/change_password.php
DEBUG - 2016-02-06 21:39:57 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 21:39:57 --> Final output sent to browser
DEBUG - 2016-02-06 21:39:57 --> Total execution time: 0.5795
INFO - 2016-02-06 21:41:29 --> Config Class Initialized
INFO - 2016-02-06 21:41:29 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:41:29 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:41:29 --> Utf8 Class Initialized
INFO - 2016-02-06 21:41:29 --> URI Class Initialized
INFO - 2016-02-06 21:41:29 --> Router Class Initialized
INFO - 2016-02-06 21:41:29 --> Output Class Initialized
INFO - 2016-02-06 21:41:29 --> Security Class Initialized
DEBUG - 2016-02-06 21:41:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:41:29 --> Input Class Initialized
INFO - 2016-02-06 21:41:30 --> Language Class Initialized
INFO - 2016-02-06 21:41:30 --> Language Class Initialized
INFO - 2016-02-06 21:41:30 --> Config Class Initialized
INFO - 2016-02-06 21:41:30 --> Loader Class Initialized
INFO - 2016-02-06 21:41:30 --> Helper loaded: form_helper
INFO - 2016-02-06 21:41:30 --> Helper loaded: url_helper
INFO - 2016-02-06 21:41:30 --> Helper loaded: general_helper
INFO - 2016-02-06 21:41:30 --> Database Driver Class Initialized
INFO - 2016-02-06 21:41:30 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:41:30 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:41:30 --> Email Class Initialized
INFO - 2016-02-06 21:41:30 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:41:30 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:41:30 --> Helper loaded: language_helper
INFO - 2016-02-06 21:41:30 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:41:30 --> Model Class Initialized
INFO - 2016-02-06 21:41:30 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:41:30 --> Model Class Initialized
INFO - 2016-02-06 21:41:30 --> Helper loaded: date_helper
INFO - 2016-02-06 21:41:30 --> Controller Class Initialized
DEBUG - 2016-02-06 21:41:30 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 21:41:30 --> Model Class Initialized
INFO - 2016-02-06 21:41:30 --> Language file loaded: language/dutch/auth_lang.php
INFO - 2016-02-06 21:41:30 --> Language file loaded: language/dutch/form_validation_lang.php
INFO - 2016-02-06 21:41:30 --> Config Class Initialized
INFO - 2016-02-06 21:41:30 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:41:30 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:41:30 --> Utf8 Class Initialized
INFO - 2016-02-06 21:41:30 --> URI Class Initialized
INFO - 2016-02-06 21:41:30 --> Router Class Initialized
INFO - 2016-02-06 21:41:30 --> Output Class Initialized
INFO - 2016-02-06 21:41:30 --> Security Class Initialized
DEBUG - 2016-02-06 21:41:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:41:30 --> Input Class Initialized
INFO - 2016-02-06 21:41:30 --> Language Class Initialized
INFO - 2016-02-06 21:41:30 --> Language Class Initialized
INFO - 2016-02-06 21:41:30 --> Config Class Initialized
INFO - 2016-02-06 21:41:30 --> Loader Class Initialized
INFO - 2016-02-06 21:41:30 --> Helper loaded: form_helper
INFO - 2016-02-06 21:41:30 --> Helper loaded: url_helper
INFO - 2016-02-06 21:41:30 --> Helper loaded: general_helper
INFO - 2016-02-06 21:41:30 --> Database Driver Class Initialized
INFO - 2016-02-06 21:41:30 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:41:30 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:41:30 --> Email Class Initialized
INFO - 2016-02-06 21:41:30 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:41:30 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:41:30 --> Helper loaded: language_helper
INFO - 2016-02-06 21:41:30 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:41:30 --> Model Class Initialized
INFO - 2016-02-06 21:41:30 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:41:30 --> Model Class Initialized
INFO - 2016-02-06 21:41:30 --> Helper loaded: date_helper
INFO - 2016-02-06 21:41:30 --> Controller Class Initialized
DEBUG - 2016-02-06 21:41:30 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 21:41:30 --> Model Class Initialized
INFO - 2016-02-06 21:41:31 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 21:41:31 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/login.php
DEBUG - 2016-02-06 21:41:31 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 21:41:31 --> Final output sent to browser
DEBUG - 2016-02-06 21:41:31 --> Total execution time: 0.5611
INFO - 2016-02-06 21:41:37 --> Config Class Initialized
INFO - 2016-02-06 21:41:37 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:41:37 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:41:37 --> Utf8 Class Initialized
INFO - 2016-02-06 21:41:37 --> URI Class Initialized
INFO - 2016-02-06 21:41:37 --> Router Class Initialized
INFO - 2016-02-06 21:41:37 --> Output Class Initialized
INFO - 2016-02-06 21:41:37 --> Security Class Initialized
DEBUG - 2016-02-06 21:41:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:41:37 --> Input Class Initialized
INFO - 2016-02-06 21:41:37 --> Language Class Initialized
INFO - 2016-02-06 21:41:37 --> Language Class Initialized
INFO - 2016-02-06 21:41:37 --> Config Class Initialized
INFO - 2016-02-06 21:41:37 --> Loader Class Initialized
INFO - 2016-02-06 21:41:37 --> Helper loaded: form_helper
INFO - 2016-02-06 21:41:37 --> Helper loaded: url_helper
INFO - 2016-02-06 21:41:37 --> Helper loaded: general_helper
INFO - 2016-02-06 21:41:37 --> Database Driver Class Initialized
INFO - 2016-02-06 21:41:37 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:41:37 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:41:37 --> Email Class Initialized
INFO - 2016-02-06 21:41:37 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:41:37 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:41:37 --> Helper loaded: language_helper
INFO - 2016-02-06 21:41:37 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:41:37 --> Model Class Initialized
INFO - 2016-02-06 21:41:37 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:41:37 --> Model Class Initialized
INFO - 2016-02-06 21:41:37 --> Helper loaded: date_helper
INFO - 2016-02-06 21:41:37 --> Controller Class Initialized
DEBUG - 2016-02-06 21:41:37 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 21:41:37 --> Model Class Initialized
INFO - 2016-02-06 21:41:37 --> Language file loaded: language/dutch/auth_lang.php
INFO - 2016-02-06 21:41:37 --> Language file loaded: language/dutch/form_validation_lang.php
INFO - 2016-02-06 21:41:37 --> Config Class Initialized
INFO - 2016-02-06 21:41:37 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:41:37 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:41:37 --> Utf8 Class Initialized
INFO - 2016-02-06 21:41:37 --> URI Class Initialized
DEBUG - 2016-02-06 21:41:37 --> No URI present. Default controller set.
INFO - 2016-02-06 21:41:37 --> Router Class Initialized
INFO - 2016-02-06 21:41:37 --> Output Class Initialized
INFO - 2016-02-06 21:41:37 --> Security Class Initialized
DEBUG - 2016-02-06 21:41:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:41:38 --> Input Class Initialized
INFO - 2016-02-06 21:41:38 --> Language Class Initialized
INFO - 2016-02-06 21:41:38 --> Language Class Initialized
INFO - 2016-02-06 21:41:38 --> Config Class Initialized
INFO - 2016-02-06 21:41:38 --> Loader Class Initialized
INFO - 2016-02-06 21:41:38 --> Helper loaded: form_helper
INFO - 2016-02-06 21:41:38 --> Helper loaded: url_helper
INFO - 2016-02-06 21:41:38 --> Helper loaded: general_helper
INFO - 2016-02-06 21:41:38 --> Database Driver Class Initialized
INFO - 2016-02-06 21:41:38 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:41:38 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:41:38 --> Email Class Initialized
INFO - 2016-02-06 21:41:38 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:41:38 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:41:38 --> Helper loaded: language_helper
INFO - 2016-02-06 21:41:38 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:41:38 --> Model Class Initialized
INFO - 2016-02-06 21:41:38 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:41:38 --> Model Class Initialized
INFO - 2016-02-06 21:41:38 --> Helper loaded: date_helper
INFO - 2016-02-06 21:41:38 --> Controller Class Initialized
DEBUG - 2016-02-06 21:41:38 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 21:41:38 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dashboard/views/index.php
DEBUG - 2016-02-06 21:41:38 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 21:41:38 --> Final output sent to browser
DEBUG - 2016-02-06 21:41:38 --> Total execution time: 0.5535
INFO - 2016-02-06 21:46:13 --> Config Class Initialized
INFO - 2016-02-06 21:46:13 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:46:13 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:46:13 --> Utf8 Class Initialized
INFO - 2016-02-06 21:46:13 --> URI Class Initialized
DEBUG - 2016-02-06 21:46:13 --> No URI present. Default controller set.
INFO - 2016-02-06 21:46:13 --> Router Class Initialized
INFO - 2016-02-06 21:46:13 --> Output Class Initialized
INFO - 2016-02-06 21:46:13 --> Security Class Initialized
DEBUG - 2016-02-06 21:46:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:46:13 --> Input Class Initialized
INFO - 2016-02-06 21:46:13 --> Language Class Initialized
INFO - 2016-02-06 21:46:13 --> Language Class Initialized
INFO - 2016-02-06 21:46:13 --> Config Class Initialized
INFO - 2016-02-06 21:46:13 --> Loader Class Initialized
INFO - 2016-02-06 21:46:13 --> Helper loaded: form_helper
INFO - 2016-02-06 21:46:13 --> Helper loaded: url_helper
INFO - 2016-02-06 21:46:13 --> Helper loaded: general_helper
INFO - 2016-02-06 21:46:13 --> Database Driver Class Initialized
INFO - 2016-02-06 21:46:13 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:46:13 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:46:13 --> Email Class Initialized
INFO - 2016-02-06 21:46:13 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:46:13 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:46:13 --> Helper loaded: language_helper
INFO - 2016-02-06 21:46:13 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:46:13 --> Model Class Initialized
INFO - 2016-02-06 21:46:13 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:46:13 --> Model Class Initialized
INFO - 2016-02-06 21:46:13 --> Helper loaded: date_helper
INFO - 2016-02-06 21:46:13 --> Controller Class Initialized
DEBUG - 2016-02-06 21:46:13 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 21:46:13 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dashboard/views/index.php
DEBUG - 2016-02-06 21:46:13 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 21:46:13 --> Final output sent to browser
DEBUG - 2016-02-06 21:46:13 --> Total execution time: 0.5356
INFO - 2016-02-06 21:46:15 --> Config Class Initialized
INFO - 2016-02-06 21:46:15 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:46:15 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:46:15 --> Utf8 Class Initialized
INFO - 2016-02-06 21:46:15 --> URI Class Initialized
INFO - 2016-02-06 21:46:15 --> Router Class Initialized
INFO - 2016-02-06 21:46:15 --> Output Class Initialized
INFO - 2016-02-06 21:46:15 --> Security Class Initialized
DEBUG - 2016-02-06 21:46:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:46:15 --> Input Class Initialized
INFO - 2016-02-06 21:46:15 --> Language Class Initialized
INFO - 2016-02-06 21:46:15 --> Language Class Initialized
INFO - 2016-02-06 21:46:15 --> Config Class Initialized
INFO - 2016-02-06 21:46:15 --> Loader Class Initialized
INFO - 2016-02-06 21:46:16 --> Helper loaded: form_helper
INFO - 2016-02-06 21:46:16 --> Helper loaded: url_helper
INFO - 2016-02-06 21:46:16 --> Helper loaded: general_helper
INFO - 2016-02-06 21:46:16 --> Database Driver Class Initialized
INFO - 2016-02-06 21:46:16 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:46:16 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:46:16 --> Email Class Initialized
INFO - 2016-02-06 21:46:16 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:46:16 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:46:16 --> Helper loaded: language_helper
INFO - 2016-02-06 21:46:16 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:46:16 --> Model Class Initialized
INFO - 2016-02-06 21:46:16 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:46:16 --> Model Class Initialized
INFO - 2016-02-06 21:46:16 --> Helper loaded: date_helper
INFO - 2016-02-06 21:46:16 --> Controller Class Initialized
DEBUG - 2016-02-06 21:46:16 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 21:46:16 --> Model Class Initialized
INFO - 2016-02-06 21:46:16 --> Language file loaded: language/dutch/auth_lang.php
ERROR - 2016-02-06 21:46:16 --> Severity: Warning --> Missing argument 1 for Auth::edit_user() C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\auth\controllers\auth.php 492
ERROR - 2016-02-06 21:46:16 --> Severity: Notice --> Undefined variable: id C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\auth\controllers\auth.php 501
ERROR - 2016-02-06 21:46:16 --> Severity: Notice --> Undefined variable: id C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\auth\controllers\auth.php 503
ERROR - 2016-02-06 21:46:16 --> Could not find the language line "edit_user_validation_phone_label"
INFO - 2016-02-06 21:46:16 --> Helper loaded: string_helper
DEBUG - 2016-02-06 21:46:16 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 21:46:16 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/edit_user.php
DEBUG - 2016-02-06 21:46:16 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 21:46:16 --> Final output sent to browser
DEBUG - 2016-02-06 21:46:16 --> Total execution time: 0.6167
INFO - 2016-02-06 21:47:58 --> Config Class Initialized
INFO - 2016-02-06 21:47:58 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:47:58 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:47:58 --> Utf8 Class Initialized
INFO - 2016-02-06 21:47:58 --> URI Class Initialized
INFO - 2016-02-06 21:47:58 --> Router Class Initialized
INFO - 2016-02-06 21:47:58 --> Output Class Initialized
INFO - 2016-02-06 21:47:58 --> Security Class Initialized
DEBUG - 2016-02-06 21:47:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:47:58 --> Input Class Initialized
INFO - 2016-02-06 21:47:58 --> Language Class Initialized
INFO - 2016-02-06 21:47:58 --> Language Class Initialized
INFO - 2016-02-06 21:47:58 --> Config Class Initialized
INFO - 2016-02-06 21:47:58 --> Loader Class Initialized
INFO - 2016-02-06 21:47:58 --> Helper loaded: form_helper
INFO - 2016-02-06 21:47:58 --> Helper loaded: url_helper
INFO - 2016-02-06 21:47:58 --> Helper loaded: general_helper
INFO - 2016-02-06 21:47:58 --> Database Driver Class Initialized
INFO - 2016-02-06 21:47:58 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:47:58 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:47:58 --> Email Class Initialized
INFO - 2016-02-06 21:47:58 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:47:58 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:47:58 --> Helper loaded: language_helper
INFO - 2016-02-06 21:47:58 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:47:58 --> Model Class Initialized
INFO - 2016-02-06 21:47:58 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:47:58 --> Model Class Initialized
INFO - 2016-02-06 21:47:58 --> Helper loaded: date_helper
INFO - 2016-02-06 21:47:58 --> Controller Class Initialized
DEBUG - 2016-02-06 21:47:58 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 21:47:58 --> Model Class Initialized
INFO - 2016-02-06 21:47:58 --> Language file loaded: language/dutch/auth_lang.php
ERROR - 2016-02-06 21:47:59 --> Severity: Warning --> Missing argument 1 for Auth::edit_user() C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules\auth\controllers\auth.php 492
ERROR - 2016-02-06 21:47:59 --> Could not find the language line "edit_user_validation_phone_label"
INFO - 2016-02-06 21:47:59 --> Helper loaded: string_helper
DEBUG - 2016-02-06 21:47:59 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 21:47:59 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/edit_user.php
DEBUG - 2016-02-06 21:47:59 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 21:47:59 --> Final output sent to browser
DEBUG - 2016-02-06 21:47:59 --> Total execution time: 0.6129
INFO - 2016-02-06 21:48:16 --> Config Class Initialized
INFO - 2016-02-06 21:48:16 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:48:16 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:48:16 --> Utf8 Class Initialized
INFO - 2016-02-06 21:48:16 --> URI Class Initialized
INFO - 2016-02-06 21:48:16 --> Router Class Initialized
INFO - 2016-02-06 21:48:16 --> Output Class Initialized
INFO - 2016-02-06 21:48:16 --> Security Class Initialized
DEBUG - 2016-02-06 21:48:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:48:16 --> Input Class Initialized
INFO - 2016-02-06 21:48:16 --> Language Class Initialized
INFO - 2016-02-06 21:48:16 --> Language Class Initialized
INFO - 2016-02-06 21:48:16 --> Config Class Initialized
INFO - 2016-02-06 21:48:16 --> Loader Class Initialized
INFO - 2016-02-06 21:48:16 --> Helper loaded: form_helper
INFO - 2016-02-06 21:48:16 --> Helper loaded: url_helper
INFO - 2016-02-06 21:48:16 --> Helper loaded: general_helper
INFO - 2016-02-06 21:48:16 --> Database Driver Class Initialized
INFO - 2016-02-06 21:48:16 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:48:16 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:48:16 --> Email Class Initialized
INFO - 2016-02-06 21:48:16 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:48:16 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:48:16 --> Helper loaded: language_helper
INFO - 2016-02-06 21:48:16 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:48:16 --> Model Class Initialized
INFO - 2016-02-06 21:48:16 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:48:16 --> Model Class Initialized
INFO - 2016-02-06 21:48:16 --> Helper loaded: date_helper
INFO - 2016-02-06 21:48:16 --> Controller Class Initialized
DEBUG - 2016-02-06 21:48:16 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 21:48:16 --> Model Class Initialized
INFO - 2016-02-06 21:48:16 --> Language file loaded: language/dutch/auth_lang.php
ERROR - 2016-02-06 21:48:16 --> Could not find the language line "edit_user_validation_phone_label"
INFO - 2016-02-06 21:48:16 --> Helper loaded: string_helper
DEBUG - 2016-02-06 21:48:16 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 21:48:16 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/edit_user.php
DEBUG - 2016-02-06 21:48:16 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 21:48:16 --> Final output sent to browser
DEBUG - 2016-02-06 21:48:16 --> Total execution time: 0.5827
INFO - 2016-02-06 21:49:18 --> Config Class Initialized
INFO - 2016-02-06 21:49:18 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:49:18 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:49:18 --> Utf8 Class Initialized
INFO - 2016-02-06 21:49:18 --> URI Class Initialized
INFO - 2016-02-06 21:49:18 --> Router Class Initialized
INFO - 2016-02-06 21:49:18 --> Output Class Initialized
INFO - 2016-02-06 21:49:18 --> Security Class Initialized
DEBUG - 2016-02-06 21:49:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:49:18 --> Input Class Initialized
INFO - 2016-02-06 21:49:18 --> Language Class Initialized
INFO - 2016-02-06 21:49:18 --> Language Class Initialized
INFO - 2016-02-06 21:49:18 --> Config Class Initialized
INFO - 2016-02-06 21:49:18 --> Loader Class Initialized
INFO - 2016-02-06 21:49:18 --> Helper loaded: form_helper
INFO - 2016-02-06 21:49:18 --> Helper loaded: url_helper
INFO - 2016-02-06 21:49:18 --> Helper loaded: general_helper
INFO - 2016-02-06 21:49:18 --> Database Driver Class Initialized
INFO - 2016-02-06 21:49:18 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:49:18 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:49:18 --> Email Class Initialized
INFO - 2016-02-06 21:49:18 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:49:18 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:49:18 --> Helper loaded: language_helper
INFO - 2016-02-06 21:49:18 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:49:18 --> Model Class Initialized
INFO - 2016-02-06 21:49:18 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:49:18 --> Model Class Initialized
INFO - 2016-02-06 21:49:18 --> Helper loaded: date_helper
INFO - 2016-02-06 21:49:18 --> Controller Class Initialized
DEBUG - 2016-02-06 21:49:18 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/models/Aftekenlijsten_m.php
INFO - 2016-02-06 21:49:18 --> Model Class Initialized
INFO - 2016-02-06 21:49:18 --> Model Class Initialized
DEBUG - 2016-02-06 21:49:18 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 21:49:18 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/views/aftekenlijsten/index.php
DEBUG - 2016-02-06 21:49:18 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 21:49:18 --> Final output sent to browser
DEBUG - 2016-02-06 21:49:18 --> Total execution time: 0.5487
INFO - 2016-02-06 21:49:21 --> Config Class Initialized
INFO - 2016-02-06 21:49:21 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:49:21 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:49:21 --> Utf8 Class Initialized
INFO - 2016-02-06 21:49:21 --> URI Class Initialized
INFO - 2016-02-06 21:49:21 --> Router Class Initialized
INFO - 2016-02-06 21:49:21 --> Output Class Initialized
INFO - 2016-02-06 21:49:21 --> Security Class Initialized
DEBUG - 2016-02-06 21:49:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:49:21 --> Input Class Initialized
INFO - 2016-02-06 21:49:21 --> Language Class Initialized
INFO - 2016-02-06 21:49:21 --> Language Class Initialized
INFO - 2016-02-06 21:49:21 --> Config Class Initialized
INFO - 2016-02-06 21:49:21 --> Loader Class Initialized
INFO - 2016-02-06 21:49:21 --> Helper loaded: form_helper
INFO - 2016-02-06 21:49:21 --> Helper loaded: url_helper
INFO - 2016-02-06 21:49:21 --> Helper loaded: general_helper
INFO - 2016-02-06 21:49:21 --> Database Driver Class Initialized
INFO - 2016-02-06 21:49:21 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:49:21 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:49:21 --> Email Class Initialized
INFO - 2016-02-06 21:49:21 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:49:21 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:49:21 --> Helper loaded: language_helper
INFO - 2016-02-06 21:49:21 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:49:21 --> Model Class Initialized
INFO - 2016-02-06 21:49:21 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:49:21 --> Model Class Initialized
INFO - 2016-02-06 21:49:21 --> Helper loaded: date_helper
INFO - 2016-02-06 21:49:21 --> Controller Class Initialized
DEBUG - 2016-02-06 21:49:21 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dossiers/models/Dossier_m.php
INFO - 2016-02-06 21:49:21 --> Model Class Initialized
DEBUG - 2016-02-06 21:49:21 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 21:49:21 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dossiers/views/clienten.php
DEBUG - 2016-02-06 21:49:21 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 21:49:21 --> Final output sent to browser
DEBUG - 2016-02-06 21:49:21 --> Total execution time: 0.5415
INFO - 2016-02-06 21:50:39 --> Config Class Initialized
INFO - 2016-02-06 21:50:39 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:50:39 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:50:39 --> Utf8 Class Initialized
INFO - 2016-02-06 21:50:39 --> URI Class Initialized
INFO - 2016-02-06 21:50:39 --> Router Class Initialized
INFO - 2016-02-06 21:50:39 --> Output Class Initialized
INFO - 2016-02-06 21:50:39 --> Security Class Initialized
DEBUG - 2016-02-06 21:50:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:50:39 --> Input Class Initialized
INFO - 2016-02-06 21:50:39 --> Language Class Initialized
INFO - 2016-02-06 21:50:39 --> Language Class Initialized
INFO - 2016-02-06 21:50:39 --> Config Class Initialized
INFO - 2016-02-06 21:50:39 --> Loader Class Initialized
INFO - 2016-02-06 21:50:39 --> Helper loaded: form_helper
INFO - 2016-02-06 21:50:39 --> Helper loaded: url_helper
INFO - 2016-02-06 21:50:39 --> Helper loaded: general_helper
INFO - 2016-02-06 21:50:39 --> Database Driver Class Initialized
INFO - 2016-02-06 21:50:39 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:50:39 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:50:39 --> Email Class Initialized
INFO - 2016-02-06 21:50:39 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:50:39 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:50:39 --> Helper loaded: language_helper
INFO - 2016-02-06 21:50:39 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:50:39 --> Model Class Initialized
INFO - 2016-02-06 21:50:39 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:50:39 --> Model Class Initialized
INFO - 2016-02-06 21:50:39 --> Helper loaded: date_helper
INFO - 2016-02-06 21:50:39 --> Controller Class Initialized
DEBUG - 2016-02-06 21:50:39 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dossiers/models/Dossier_m.php
INFO - 2016-02-06 21:50:39 --> Model Class Initialized
DEBUG - 2016-02-06 21:50:39 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 21:50:39 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dossiers/views/clienten.php
DEBUG - 2016-02-06 21:50:39 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 21:50:39 --> Final output sent to browser
DEBUG - 2016-02-06 21:50:40 --> Total execution time: 0.5588
INFO - 2016-02-06 21:50:42 --> Config Class Initialized
INFO - 2016-02-06 21:50:42 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:50:42 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:50:42 --> Utf8 Class Initialized
INFO - 2016-02-06 21:50:42 --> URI Class Initialized
INFO - 2016-02-06 21:50:42 --> Router Class Initialized
INFO - 2016-02-06 21:50:42 --> Output Class Initialized
INFO - 2016-02-06 21:50:42 --> Security Class Initialized
DEBUG - 2016-02-06 21:50:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:50:43 --> Input Class Initialized
INFO - 2016-02-06 21:50:43 --> Language Class Initialized
INFO - 2016-02-06 21:50:43 --> Language Class Initialized
INFO - 2016-02-06 21:50:43 --> Config Class Initialized
INFO - 2016-02-06 21:50:43 --> Loader Class Initialized
INFO - 2016-02-06 21:50:43 --> Helper loaded: form_helper
INFO - 2016-02-06 21:50:43 --> Helper loaded: url_helper
INFO - 2016-02-06 21:50:43 --> Helper loaded: general_helper
INFO - 2016-02-06 21:50:43 --> Database Driver Class Initialized
INFO - 2016-02-06 21:50:43 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:50:43 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:50:43 --> Email Class Initialized
INFO - 2016-02-06 21:50:43 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:50:43 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:50:43 --> Helper loaded: language_helper
INFO - 2016-02-06 21:50:43 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:50:43 --> Model Class Initialized
INFO - 2016-02-06 21:50:43 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:50:43 --> Model Class Initialized
INFO - 2016-02-06 21:50:43 --> Helper loaded: date_helper
INFO - 2016-02-06 21:50:43 --> Controller Class Initialized
DEBUG - 2016-02-06 21:50:43 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/models/Aftekenlijsten_m.php
INFO - 2016-02-06 21:50:43 --> Model Class Initialized
INFO - 2016-02-06 21:50:43 --> Model Class Initialized
DEBUG - 2016-02-06 21:50:43 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 21:50:43 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/views/aftekenlijsten/index.php
DEBUG - 2016-02-06 21:50:43 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 21:50:43 --> Final output sent to browser
DEBUG - 2016-02-06 21:50:43 --> Total execution time: 0.5618
INFO - 2016-02-06 21:50:44 --> Config Class Initialized
INFO - 2016-02-06 21:50:44 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:50:44 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:50:44 --> Utf8 Class Initialized
INFO - 2016-02-06 21:50:44 --> URI Class Initialized
INFO - 2016-02-06 21:50:44 --> Router Class Initialized
INFO - 2016-02-06 21:50:44 --> Output Class Initialized
INFO - 2016-02-06 21:50:44 --> Security Class Initialized
DEBUG - 2016-02-06 21:50:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:50:44 --> Input Class Initialized
INFO - 2016-02-06 21:50:44 --> Language Class Initialized
INFO - 2016-02-06 21:50:44 --> Language Class Initialized
INFO - 2016-02-06 21:50:44 --> Config Class Initialized
INFO - 2016-02-06 21:50:44 --> Loader Class Initialized
INFO - 2016-02-06 21:50:44 --> Helper loaded: form_helper
INFO - 2016-02-06 21:50:44 --> Helper loaded: url_helper
INFO - 2016-02-06 21:50:44 --> Helper loaded: general_helper
INFO - 2016-02-06 21:50:44 --> Database Driver Class Initialized
INFO - 2016-02-06 21:50:44 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:50:44 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:50:44 --> Email Class Initialized
INFO - 2016-02-06 21:50:44 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:50:44 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:50:45 --> Helper loaded: language_helper
INFO - 2016-02-06 21:50:45 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:50:45 --> Model Class Initialized
INFO - 2016-02-06 21:50:45 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:50:45 --> Model Class Initialized
INFO - 2016-02-06 21:50:45 --> Helper loaded: date_helper
INFO - 2016-02-06 21:50:45 --> Controller Class Initialized
DEBUG - 2016-02-06 21:50:45 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/models/Wijkzorg_m.php
INFO - 2016-02-06 21:50:45 --> Model Class Initialized
INFO - 2016-02-06 21:50:45 --> Model Class Initialized
INFO - 2016-02-06 21:50:45 --> Config Class Initialized
INFO - 2016-02-06 21:50:45 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:50:45 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:50:45 --> Utf8 Class Initialized
INFO - 2016-02-06 21:50:45 --> URI Class Initialized
INFO - 2016-02-06 21:50:45 --> Router Class Initialized
INFO - 2016-02-06 21:50:45 --> Output Class Initialized
INFO - 2016-02-06 21:50:45 --> Security Class Initialized
DEBUG - 2016-02-06 21:50:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:50:45 --> Input Class Initialized
INFO - 2016-02-06 21:50:45 --> Language Class Initialized
INFO - 2016-02-06 21:50:45 --> Language Class Initialized
INFO - 2016-02-06 21:50:45 --> Config Class Initialized
INFO - 2016-02-06 21:50:45 --> Loader Class Initialized
INFO - 2016-02-06 21:50:45 --> Helper loaded: form_helper
INFO - 2016-02-06 21:50:45 --> Helper loaded: url_helper
INFO - 2016-02-06 21:50:45 --> Helper loaded: general_helper
INFO - 2016-02-06 21:50:45 --> Database Driver Class Initialized
INFO - 2016-02-06 21:50:45 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:50:45 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:50:45 --> Email Class Initialized
INFO - 2016-02-06 21:50:45 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:50:45 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:50:45 --> Helper loaded: language_helper
INFO - 2016-02-06 21:50:45 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:50:45 --> Model Class Initialized
INFO - 2016-02-06 21:50:45 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:50:45 --> Model Class Initialized
INFO - 2016-02-06 21:50:45 --> Helper loaded: date_helper
INFO - 2016-02-06 21:50:45 --> Controller Class Initialized
DEBUG - 2016-02-06 21:50:45 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/models/Wijkzorg_m.php
INFO - 2016-02-06 21:50:45 --> Model Class Initialized
INFO - 2016-02-06 21:50:45 --> Model Class Initialized
DEBUG - 2016-02-06 21:50:45 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 21:50:45 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/views/wijkzorg/table.php
DEBUG - 2016-02-06 21:50:45 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 21:50:45 --> Final output sent to browser
DEBUG - 2016-02-06 21:50:45 --> Total execution time: 0.6030
INFO - 2016-02-06 21:50:47 --> Config Class Initialized
INFO - 2016-02-06 21:50:47 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:50:47 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:50:47 --> Utf8 Class Initialized
INFO - 2016-02-06 21:50:47 --> URI Class Initialized
INFO - 2016-02-06 21:50:47 --> Router Class Initialized
INFO - 2016-02-06 21:50:47 --> Output Class Initialized
INFO - 2016-02-06 21:50:47 --> Security Class Initialized
DEBUG - 2016-02-06 21:50:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:50:47 --> Input Class Initialized
INFO - 2016-02-06 21:50:47 --> Language Class Initialized
INFO - 2016-02-06 21:50:47 --> Language Class Initialized
INFO - 2016-02-06 21:50:47 --> Config Class Initialized
INFO - 2016-02-06 21:50:47 --> Loader Class Initialized
INFO - 2016-02-06 21:50:47 --> Helper loaded: form_helper
INFO - 2016-02-06 21:50:47 --> Helper loaded: url_helper
INFO - 2016-02-06 21:50:47 --> Helper loaded: general_helper
INFO - 2016-02-06 21:50:47 --> Database Driver Class Initialized
INFO - 2016-02-06 21:50:47 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:50:47 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:50:47 --> Email Class Initialized
INFO - 2016-02-06 21:50:47 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:50:47 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:50:47 --> Helper loaded: language_helper
INFO - 2016-02-06 21:50:47 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:50:47 --> Model Class Initialized
INFO - 2016-02-06 21:50:47 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:50:47 --> Model Class Initialized
INFO - 2016-02-06 21:50:47 --> Helper loaded: date_helper
INFO - 2016-02-06 21:50:47 --> Controller Class Initialized
DEBUG - 2016-02-06 21:50:47 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/models/Colabris_m.php
INFO - 2016-02-06 21:50:47 --> Model Class Initialized
INFO - 2016-02-06 21:50:47 --> Model Class Initialized
DEBUG - 2016-02-06 21:50:47 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 21:50:47 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/views/colabris/index.php
DEBUG - 2016-02-06 21:50:47 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 21:50:47 --> Final output sent to browser
DEBUG - 2016-02-06 21:50:47 --> Total execution time: 0.5596
INFO - 2016-02-06 21:50:49 --> Config Class Initialized
INFO - 2016-02-06 21:50:49 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:50:49 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:50:49 --> Utf8 Class Initialized
INFO - 2016-02-06 21:50:49 --> URI Class Initialized
INFO - 2016-02-06 21:50:49 --> Router Class Initialized
INFO - 2016-02-06 21:50:49 --> Output Class Initialized
INFO - 2016-02-06 21:50:49 --> Security Class Initialized
DEBUG - 2016-02-06 21:50:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:50:49 --> Input Class Initialized
INFO - 2016-02-06 21:50:50 --> Language Class Initialized
INFO - 2016-02-06 21:50:50 --> Language Class Initialized
INFO - 2016-02-06 21:50:50 --> Config Class Initialized
INFO - 2016-02-06 21:50:50 --> Loader Class Initialized
INFO - 2016-02-06 21:50:50 --> Helper loaded: form_helper
INFO - 2016-02-06 21:50:50 --> Helper loaded: url_helper
INFO - 2016-02-06 21:50:50 --> Helper loaded: general_helper
INFO - 2016-02-06 21:50:50 --> Database Driver Class Initialized
INFO - 2016-02-06 21:50:50 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:50:50 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:50:50 --> Email Class Initialized
INFO - 2016-02-06 21:50:50 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:50:50 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:50:50 --> Helper loaded: language_helper
INFO - 2016-02-06 21:50:50 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:50:50 --> Model Class Initialized
INFO - 2016-02-06 21:50:50 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:50:50 --> Model Class Initialized
INFO - 2016-02-06 21:50:50 --> Helper loaded: date_helper
INFO - 2016-02-06 21:50:50 --> Controller Class Initialized
DEBUG - 2016-02-06 21:50:50 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/models/Blokkeren_m.php
INFO - 2016-02-06 21:50:50 --> Model Class Initialized
INFO - 2016-02-06 21:50:50 --> Model Class Initialized
DEBUG - 2016-02-06 21:50:50 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 21:50:50 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/views/blokkeren/index.php
DEBUG - 2016-02-06 21:50:50 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 21:50:50 --> Final output sent to browser
DEBUG - 2016-02-06 21:50:50 --> Total execution time: 0.5648
INFO - 2016-02-06 21:50:52 --> Config Class Initialized
INFO - 2016-02-06 21:50:52 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:50:52 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:50:52 --> Utf8 Class Initialized
INFO - 2016-02-06 21:50:52 --> URI Class Initialized
INFO - 2016-02-06 21:50:52 --> Router Class Initialized
INFO - 2016-02-06 21:50:52 --> Output Class Initialized
INFO - 2016-02-06 21:50:52 --> Security Class Initialized
DEBUG - 2016-02-06 21:50:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:50:52 --> Input Class Initialized
INFO - 2016-02-06 21:50:52 --> Language Class Initialized
INFO - 2016-02-06 21:50:52 --> Language Class Initialized
INFO - 2016-02-06 21:50:52 --> Config Class Initialized
INFO - 2016-02-06 21:50:52 --> Loader Class Initialized
INFO - 2016-02-06 21:50:52 --> Helper loaded: form_helper
INFO - 2016-02-06 21:50:52 --> Helper loaded: url_helper
INFO - 2016-02-06 21:50:52 --> Helper loaded: general_helper
INFO - 2016-02-06 21:50:52 --> Database Driver Class Initialized
INFO - 2016-02-06 21:50:52 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:50:52 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:50:52 --> Email Class Initialized
INFO - 2016-02-06 21:50:52 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:50:52 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:50:52 --> Helper loaded: language_helper
INFO - 2016-02-06 21:50:52 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:50:52 --> Model Class Initialized
INFO - 2016-02-06 21:50:52 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:50:52 --> Model Class Initialized
INFO - 2016-02-06 21:50:52 --> Helper loaded: date_helper
INFO - 2016-02-06 21:50:52 --> Controller Class Initialized
INFO - 2016-02-06 21:50:52 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 21:50:52 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 21:50:52 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 21:50:52 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 21:50:52 --> Final output sent to browser
DEBUG - 2016-02-06 21:50:52 --> Total execution time: 0.5389
INFO - 2016-02-06 21:52:45 --> Config Class Initialized
INFO - 2016-02-06 21:52:45 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:52:45 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:52:45 --> Utf8 Class Initialized
INFO - 2016-02-06 21:52:45 --> URI Class Initialized
INFO - 2016-02-06 21:52:45 --> Router Class Initialized
INFO - 2016-02-06 21:52:45 --> Output Class Initialized
INFO - 2016-02-06 21:52:45 --> Security Class Initialized
DEBUG - 2016-02-06 21:52:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:52:45 --> Input Class Initialized
INFO - 2016-02-06 21:52:45 --> Language Class Initialized
INFO - 2016-02-06 21:52:45 --> Language Class Initialized
INFO - 2016-02-06 21:52:45 --> Config Class Initialized
INFO - 2016-02-06 21:52:45 --> Loader Class Initialized
INFO - 2016-02-06 21:52:45 --> Helper loaded: form_helper
INFO - 2016-02-06 21:52:45 --> Helper loaded: url_helper
INFO - 2016-02-06 21:52:45 --> Helper loaded: general_helper
INFO - 2016-02-06 21:52:45 --> Database Driver Class Initialized
INFO - 2016-02-06 21:52:45 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:52:45 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:52:45 --> Email Class Initialized
INFO - 2016-02-06 21:52:45 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:52:45 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:52:45 --> Helper loaded: language_helper
INFO - 2016-02-06 21:52:45 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:52:45 --> Model Class Initialized
INFO - 2016-02-06 21:52:45 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:52:45 --> Model Class Initialized
INFO - 2016-02-06 21:52:45 --> Helper loaded: date_helper
INFO - 2016-02-06 21:52:45 --> Controller Class Initialized
DEBUG - 2016-02-06 21:52:45 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/models/Colabris_m.php
INFO - 2016-02-06 21:52:45 --> Model Class Initialized
INFO - 2016-02-06 21:52:45 --> Model Class Initialized
DEBUG - 2016-02-06 21:52:45 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 21:52:45 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/diensten/views/colabris/index.php
DEBUG - 2016-02-06 21:52:45 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 21:52:45 --> Final output sent to browser
DEBUG - 2016-02-06 21:52:45 --> Total execution time: 0.5724
INFO - 2016-02-06 21:57:41 --> Config Class Initialized
INFO - 2016-02-06 21:57:41 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:57:41 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:57:41 --> Utf8 Class Initialized
INFO - 2016-02-06 21:57:41 --> URI Class Initialized
INFO - 2016-02-06 21:57:41 --> Router Class Initialized
INFO - 2016-02-06 21:57:41 --> Output Class Initialized
INFO - 2016-02-06 21:57:41 --> Security Class Initialized
DEBUG - 2016-02-06 21:57:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:57:41 --> Input Class Initialized
INFO - 2016-02-06 21:57:41 --> Language Class Initialized
INFO - 2016-02-06 21:57:41 --> Language Class Initialized
INFO - 2016-02-06 21:57:41 --> Config Class Initialized
INFO - 2016-02-06 21:57:41 --> Loader Class Initialized
INFO - 2016-02-06 21:57:41 --> Helper loaded: form_helper
INFO - 2016-02-06 21:57:41 --> Helper loaded: url_helper
INFO - 2016-02-06 21:57:41 --> Helper loaded: general_helper
INFO - 2016-02-06 21:57:41 --> Database Driver Class Initialized
INFO - 2016-02-06 21:57:41 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:57:42 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:57:42 --> Email Class Initialized
INFO - 2016-02-06 21:57:42 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:57:42 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:57:42 --> Helper loaded: language_helper
INFO - 2016-02-06 21:57:42 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:57:42 --> Model Class Initialized
INFO - 2016-02-06 21:57:42 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:57:42 --> Model Class Initialized
INFO - 2016-02-06 21:57:42 --> Helper loaded: date_helper
INFO - 2016-02-06 21:57:42 --> Controller Class Initialized
INFO - 2016-02-06 21:57:42 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 21:57:42 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 21:57:42 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 21:57:42 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 21:57:42 --> Final output sent to browser
DEBUG - 2016-02-06 21:57:42 --> Total execution time: 0.9703
INFO - 2016-02-06 21:59:25 --> Config Class Initialized
INFO - 2016-02-06 21:59:25 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:59:25 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:59:25 --> Utf8 Class Initialized
INFO - 2016-02-06 21:59:25 --> URI Class Initialized
INFO - 2016-02-06 21:59:25 --> Router Class Initialized
INFO - 2016-02-06 21:59:25 --> Output Class Initialized
INFO - 2016-02-06 21:59:25 --> Security Class Initialized
DEBUG - 2016-02-06 21:59:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:59:25 --> Input Class Initialized
INFO - 2016-02-06 21:59:25 --> Language Class Initialized
INFO - 2016-02-06 21:59:25 --> Language Class Initialized
INFO - 2016-02-06 21:59:25 --> Config Class Initialized
INFO - 2016-02-06 21:59:25 --> Loader Class Initialized
INFO - 2016-02-06 21:59:25 --> Helper loaded: form_helper
INFO - 2016-02-06 21:59:25 --> Helper loaded: url_helper
INFO - 2016-02-06 21:59:25 --> Helper loaded: general_helper
INFO - 2016-02-06 21:59:25 --> Database Driver Class Initialized
INFO - 2016-02-06 21:59:25 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:59:25 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:59:25 --> Email Class Initialized
INFO - 2016-02-06 21:59:25 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:59:25 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:59:25 --> Helper loaded: language_helper
INFO - 2016-02-06 21:59:25 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:59:25 --> Model Class Initialized
INFO - 2016-02-06 21:59:25 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:59:25 --> Model Class Initialized
INFO - 2016-02-06 21:59:25 --> Helper loaded: date_helper
INFO - 2016-02-06 21:59:25 --> Controller Class Initialized
DEBUG - 2016-02-06 21:59:25 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 21:59:25 --> Model Class Initialized
INFO - 2016-02-06 21:59:25 --> Language file loaded: language/dutch/auth_lang.php
ERROR - 2016-02-06 21:59:25 --> Could not find the language line "edit_user_validation_phone_label"
INFO - 2016-02-06 21:59:25 --> Helper loaded: string_helper
DEBUG - 2016-02-06 21:59:25 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 21:59:25 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/edit_user.php
DEBUG - 2016-02-06 21:59:25 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 21:59:25 --> Final output sent to browser
DEBUG - 2016-02-06 21:59:25 --> Total execution time: 0.6198
INFO - 2016-02-06 21:59:29 --> Config Class Initialized
INFO - 2016-02-06 21:59:29 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:59:29 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:59:29 --> Utf8 Class Initialized
INFO - 2016-02-06 21:59:29 --> URI Class Initialized
INFO - 2016-02-06 21:59:29 --> Router Class Initialized
INFO - 2016-02-06 21:59:29 --> Output Class Initialized
INFO - 2016-02-06 21:59:29 --> Security Class Initialized
DEBUG - 2016-02-06 21:59:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:59:29 --> Input Class Initialized
INFO - 2016-02-06 21:59:29 --> Language Class Initialized
INFO - 2016-02-06 21:59:29 --> Language Class Initialized
INFO - 2016-02-06 21:59:29 --> Config Class Initialized
INFO - 2016-02-06 21:59:29 --> Loader Class Initialized
INFO - 2016-02-06 21:59:29 --> Helper loaded: form_helper
INFO - 2016-02-06 21:59:29 --> Helper loaded: url_helper
INFO - 2016-02-06 21:59:29 --> Helper loaded: general_helper
INFO - 2016-02-06 21:59:29 --> Database Driver Class Initialized
INFO - 2016-02-06 21:59:29 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:59:29 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:59:29 --> Email Class Initialized
INFO - 2016-02-06 21:59:29 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:59:29 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:59:29 --> Helper loaded: language_helper
INFO - 2016-02-06 21:59:29 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:59:29 --> Model Class Initialized
INFO - 2016-02-06 21:59:29 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:59:29 --> Model Class Initialized
INFO - 2016-02-06 21:59:29 --> Helper loaded: date_helper
INFO - 2016-02-06 21:59:29 --> Controller Class Initialized
INFO - 2016-02-06 21:59:29 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 21:59:29 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 21:59:29 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 21:59:29 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 21:59:29 --> Final output sent to browser
DEBUG - 2016-02-06 21:59:29 --> Total execution time: 0.5471
INFO - 2016-02-06 21:59:34 --> Config Class Initialized
INFO - 2016-02-06 21:59:34 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:59:34 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:59:34 --> Utf8 Class Initialized
INFO - 2016-02-06 21:59:34 --> URI Class Initialized
INFO - 2016-02-06 21:59:34 --> Router Class Initialized
INFO - 2016-02-06 21:59:34 --> Output Class Initialized
INFO - 2016-02-06 21:59:34 --> Security Class Initialized
DEBUG - 2016-02-06 21:59:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:59:34 --> Input Class Initialized
INFO - 2016-02-06 21:59:34 --> Language Class Initialized
INFO - 2016-02-06 21:59:34 --> Language Class Initialized
INFO - 2016-02-06 21:59:34 --> Config Class Initialized
INFO - 2016-02-06 21:59:34 --> Loader Class Initialized
INFO - 2016-02-06 21:59:34 --> Helper loaded: form_helper
INFO - 2016-02-06 21:59:34 --> Helper loaded: url_helper
INFO - 2016-02-06 21:59:34 --> Helper loaded: general_helper
INFO - 2016-02-06 21:59:34 --> Database Driver Class Initialized
INFO - 2016-02-06 21:59:34 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:59:34 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:59:34 --> Email Class Initialized
INFO - 2016-02-06 21:59:34 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:59:34 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:59:34 --> Helper loaded: language_helper
INFO - 2016-02-06 21:59:34 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:59:34 --> Model Class Initialized
INFO - 2016-02-06 21:59:34 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:59:34 --> Model Class Initialized
INFO - 2016-02-06 21:59:34 --> Helper loaded: date_helper
INFO - 2016-02-06 21:59:34 --> Controller Class Initialized
DEBUG - 2016-02-06 21:59:34 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dossiers/models/Dossier_m.php
INFO - 2016-02-06 21:59:34 --> Model Class Initialized
DEBUG - 2016-02-06 21:59:34 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 21:59:34 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dossiers/views/verzorgers.php
DEBUG - 2016-02-06 21:59:34 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 21:59:34 --> Final output sent to browser
DEBUG - 2016-02-06 21:59:34 --> Total execution time: 0.5672
INFO - 2016-02-06 21:59:36 --> Config Class Initialized
INFO - 2016-02-06 21:59:36 --> Hooks Class Initialized
DEBUG - 2016-02-06 21:59:36 --> UTF-8 Support Enabled
INFO - 2016-02-06 21:59:36 --> Utf8 Class Initialized
INFO - 2016-02-06 21:59:36 --> URI Class Initialized
INFO - 2016-02-06 21:59:36 --> Router Class Initialized
INFO - 2016-02-06 21:59:37 --> Output Class Initialized
INFO - 2016-02-06 21:59:37 --> Security Class Initialized
DEBUG - 2016-02-06 21:59:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 21:59:37 --> Input Class Initialized
INFO - 2016-02-06 21:59:37 --> Language Class Initialized
INFO - 2016-02-06 21:59:37 --> Language Class Initialized
INFO - 2016-02-06 21:59:37 --> Config Class Initialized
INFO - 2016-02-06 21:59:37 --> Loader Class Initialized
INFO - 2016-02-06 21:59:37 --> Helper loaded: form_helper
INFO - 2016-02-06 21:59:37 --> Helper loaded: url_helper
INFO - 2016-02-06 21:59:37 --> Helper loaded: general_helper
INFO - 2016-02-06 21:59:37 --> Database Driver Class Initialized
INFO - 2016-02-06 21:59:37 --> Form Validation Class Initialized
DEBUG - 2016-02-06 21:59:37 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 21:59:37 --> Email Class Initialized
INFO - 2016-02-06 21:59:37 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 21:59:37 --> Helper loaded: cookie_helper
INFO - 2016-02-06 21:59:37 --> Helper loaded: language_helper
INFO - 2016-02-06 21:59:37 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 21:59:37 --> Model Class Initialized
INFO - 2016-02-06 21:59:37 --> Helper loaded: inflector_helper
INFO - 2016-02-06 21:59:37 --> Model Class Initialized
INFO - 2016-02-06 21:59:37 --> Helper loaded: date_helper
INFO - 2016-02-06 21:59:37 --> Controller Class Initialized
DEBUG - 2016-02-06 21:59:37 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dossiers/models/Dossier_m.php
INFO - 2016-02-06 21:59:37 --> Model Class Initialized
DEBUG - 2016-02-06 21:59:37 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 21:59:37 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dossiers/views/clienten.php
DEBUG - 2016-02-06 21:59:37 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 21:59:37 --> Final output sent to browser
DEBUG - 2016-02-06 21:59:37 --> Total execution time: 0.5553
INFO - 2016-02-06 22:01:00 --> Config Class Initialized
INFO - 2016-02-06 22:01:00 --> Hooks Class Initialized
DEBUG - 2016-02-06 22:01:00 --> UTF-8 Support Enabled
INFO - 2016-02-06 22:01:00 --> Utf8 Class Initialized
INFO - 2016-02-06 22:01:00 --> URI Class Initialized
INFO - 2016-02-06 22:01:00 --> Router Class Initialized
INFO - 2016-02-06 22:01:00 --> Output Class Initialized
INFO - 2016-02-06 22:01:00 --> Security Class Initialized
DEBUG - 2016-02-06 22:01:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 22:01:00 --> Input Class Initialized
INFO - 2016-02-06 22:01:00 --> Language Class Initialized
INFO - 2016-02-06 22:01:00 --> Language Class Initialized
INFO - 2016-02-06 22:01:00 --> Config Class Initialized
INFO - 2016-02-06 22:01:00 --> Loader Class Initialized
INFO - 2016-02-06 22:01:00 --> Helper loaded: form_helper
INFO - 2016-02-06 22:01:00 --> Helper loaded: url_helper
INFO - 2016-02-06 22:01:00 --> Helper loaded: general_helper
INFO - 2016-02-06 22:01:00 --> Database Driver Class Initialized
INFO - 2016-02-06 22:01:00 --> Form Validation Class Initialized
DEBUG - 2016-02-06 22:01:00 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 22:01:00 --> Email Class Initialized
INFO - 2016-02-06 22:01:00 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 22:01:00 --> Helper loaded: cookie_helper
INFO - 2016-02-06 22:01:00 --> Helper loaded: language_helper
INFO - 2016-02-06 22:01:00 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 22:01:00 --> Model Class Initialized
INFO - 2016-02-06 22:01:00 --> Helper loaded: inflector_helper
INFO - 2016-02-06 22:01:00 --> Model Class Initialized
INFO - 2016-02-06 22:01:00 --> Helper loaded: date_helper
INFO - 2016-02-06 22:01:00 --> Controller Class Initialized
DEBUG - 2016-02-06 22:01:00 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dossiers/models/Dossier_m.php
INFO - 2016-02-06 22:01:00 --> Model Class Initialized
DEBUG - 2016-02-06 22:01:00 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
ERROR - 2016-02-06 22:01:00 --> Could not find the language line "index_create_user_link"
ERROR - 2016-02-06 22:01:00 --> Could not find the language line "index_create_group_link"
DEBUG - 2016-02-06 22:01:00 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dossiers/views/clienten.php
DEBUG - 2016-02-06 22:01:00 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 22:01:00 --> Final output sent to browser
DEBUG - 2016-02-06 22:01:00 --> Total execution time: 0.6029
INFO - 2016-02-06 22:01:51 --> Config Class Initialized
INFO - 2016-02-06 22:01:51 --> Hooks Class Initialized
DEBUG - 2016-02-06 22:01:51 --> UTF-8 Support Enabled
INFO - 2016-02-06 22:01:51 --> Utf8 Class Initialized
INFO - 2016-02-06 22:01:51 --> URI Class Initialized
INFO - 2016-02-06 22:01:51 --> Router Class Initialized
INFO - 2016-02-06 22:01:51 --> Output Class Initialized
INFO - 2016-02-06 22:01:51 --> Security Class Initialized
DEBUG - 2016-02-06 22:01:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 22:01:51 --> Input Class Initialized
INFO - 2016-02-06 22:01:51 --> Language Class Initialized
INFO - 2016-02-06 22:01:51 --> Language Class Initialized
INFO - 2016-02-06 22:01:51 --> Config Class Initialized
INFO - 2016-02-06 22:01:51 --> Loader Class Initialized
INFO - 2016-02-06 22:01:51 --> Helper loaded: form_helper
INFO - 2016-02-06 22:01:51 --> Helper loaded: url_helper
INFO - 2016-02-06 22:01:51 --> Helper loaded: general_helper
INFO - 2016-02-06 22:01:51 --> Database Driver Class Initialized
INFO - 2016-02-06 22:01:51 --> Form Validation Class Initialized
DEBUG - 2016-02-06 22:01:51 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 22:01:51 --> Email Class Initialized
INFO - 2016-02-06 22:01:51 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 22:01:51 --> Helper loaded: cookie_helper
INFO - 2016-02-06 22:01:51 --> Helper loaded: language_helper
INFO - 2016-02-06 22:01:51 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 22:01:51 --> Model Class Initialized
INFO - 2016-02-06 22:01:52 --> Helper loaded: inflector_helper
INFO - 2016-02-06 22:01:52 --> Model Class Initialized
INFO - 2016-02-06 22:01:52 --> Helper loaded: date_helper
INFO - 2016-02-06 22:01:52 --> Controller Class Initialized
DEBUG - 2016-02-06 22:01:52 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 22:01:52 --> Model Class Initialized
INFO - 2016-02-06 22:01:52 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 22:01:52 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 22:01:52 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/change_password.php
DEBUG - 2016-02-06 22:01:52 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 22:01:52 --> Final output sent to browser
DEBUG - 2016-02-06 22:01:52 --> Total execution time: 0.5712
INFO - 2016-02-06 22:01:56 --> Config Class Initialized
INFO - 2016-02-06 22:01:56 --> Hooks Class Initialized
DEBUG - 2016-02-06 22:01:56 --> UTF-8 Support Enabled
INFO - 2016-02-06 22:01:56 --> Utf8 Class Initialized
INFO - 2016-02-06 22:01:56 --> URI Class Initialized
INFO - 2016-02-06 22:01:56 --> Router Class Initialized
INFO - 2016-02-06 22:01:56 --> Output Class Initialized
INFO - 2016-02-06 22:01:56 --> Security Class Initialized
DEBUG - 2016-02-06 22:01:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 22:01:56 --> Input Class Initialized
INFO - 2016-02-06 22:01:56 --> Language Class Initialized
INFO - 2016-02-06 22:01:56 --> Language Class Initialized
INFO - 2016-02-06 22:01:56 --> Config Class Initialized
INFO - 2016-02-06 22:01:56 --> Loader Class Initialized
INFO - 2016-02-06 22:01:56 --> Helper loaded: form_helper
INFO - 2016-02-06 22:01:56 --> Helper loaded: url_helper
INFO - 2016-02-06 22:01:56 --> Helper loaded: general_helper
INFO - 2016-02-06 22:01:56 --> Database Driver Class Initialized
INFO - 2016-02-06 22:01:56 --> Form Validation Class Initialized
DEBUG - 2016-02-06 22:01:56 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 22:01:56 --> Email Class Initialized
INFO - 2016-02-06 22:01:56 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 22:01:56 --> Helper loaded: cookie_helper
INFO - 2016-02-06 22:01:56 --> Helper loaded: language_helper
INFO - 2016-02-06 22:01:56 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 22:01:56 --> Model Class Initialized
INFO - 2016-02-06 22:01:56 --> Helper loaded: inflector_helper
INFO - 2016-02-06 22:01:56 --> Model Class Initialized
INFO - 2016-02-06 22:01:56 --> Helper loaded: date_helper
INFO - 2016-02-06 22:01:56 --> Controller Class Initialized
INFO - 2016-02-06 22:01:56 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 22:01:56 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 22:01:56 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 22:01:56 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 22:01:56 --> Final output sent to browser
DEBUG - 2016-02-06 22:01:56 --> Total execution time: 0.5470
INFO - 2016-02-06 22:02:24 --> Config Class Initialized
INFO - 2016-02-06 22:02:24 --> Hooks Class Initialized
DEBUG - 2016-02-06 22:02:24 --> UTF-8 Support Enabled
INFO - 2016-02-06 22:02:24 --> Utf8 Class Initialized
INFO - 2016-02-06 22:02:24 --> URI Class Initialized
INFO - 2016-02-06 22:02:24 --> Router Class Initialized
INFO - 2016-02-06 22:02:24 --> Output Class Initialized
INFO - 2016-02-06 22:02:24 --> Security Class Initialized
DEBUG - 2016-02-06 22:02:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 22:02:24 --> Input Class Initialized
INFO - 2016-02-06 22:02:24 --> Language Class Initialized
INFO - 2016-02-06 22:02:24 --> Language Class Initialized
INFO - 2016-02-06 22:02:24 --> Config Class Initialized
INFO - 2016-02-06 22:02:24 --> Loader Class Initialized
INFO - 2016-02-06 22:02:24 --> Helper loaded: form_helper
INFO - 2016-02-06 22:02:24 --> Helper loaded: url_helper
INFO - 2016-02-06 22:02:24 --> Helper loaded: general_helper
INFO - 2016-02-06 22:02:24 --> Database Driver Class Initialized
INFO - 2016-02-06 22:02:24 --> Form Validation Class Initialized
DEBUG - 2016-02-06 22:02:24 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 22:02:24 --> Email Class Initialized
INFO - 2016-02-06 22:02:24 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 22:02:24 --> Helper loaded: cookie_helper
INFO - 2016-02-06 22:02:24 --> Helper loaded: language_helper
INFO - 2016-02-06 22:02:24 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 22:02:24 --> Model Class Initialized
INFO - 2016-02-06 22:02:24 --> Helper loaded: inflector_helper
INFO - 2016-02-06 22:02:24 --> Model Class Initialized
INFO - 2016-02-06 22:02:24 --> Helper loaded: date_helper
INFO - 2016-02-06 22:02:24 --> Controller Class Initialized
INFO - 2016-02-06 22:02:24 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 22:02:24 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 22:02:24 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 22:02:24 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 22:02:24 --> Final output sent to browser
DEBUG - 2016-02-06 22:02:24 --> Total execution time: 0.5746
INFO - 2016-02-06 22:02:29 --> Config Class Initialized
INFO - 2016-02-06 22:02:29 --> Hooks Class Initialized
DEBUG - 2016-02-06 22:02:29 --> UTF-8 Support Enabled
INFO - 2016-02-06 22:02:29 --> Utf8 Class Initialized
INFO - 2016-02-06 22:02:29 --> URI Class Initialized
INFO - 2016-02-06 22:02:29 --> Router Class Initialized
INFO - 2016-02-06 22:02:29 --> Output Class Initialized
INFO - 2016-02-06 22:02:29 --> Security Class Initialized
DEBUG - 2016-02-06 22:02:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 22:02:29 --> Input Class Initialized
INFO - 2016-02-06 22:02:29 --> Language Class Initialized
INFO - 2016-02-06 22:02:29 --> Language Class Initialized
INFO - 2016-02-06 22:02:29 --> Config Class Initialized
INFO - 2016-02-06 22:02:29 --> Loader Class Initialized
INFO - 2016-02-06 22:02:29 --> Helper loaded: form_helper
INFO - 2016-02-06 22:02:29 --> Helper loaded: url_helper
INFO - 2016-02-06 22:02:29 --> Helper loaded: general_helper
INFO - 2016-02-06 22:02:29 --> Database Driver Class Initialized
INFO - 2016-02-06 22:02:29 --> Form Validation Class Initialized
DEBUG - 2016-02-06 22:02:29 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 22:02:29 --> Email Class Initialized
INFO - 2016-02-06 22:02:29 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 22:02:29 --> Helper loaded: cookie_helper
INFO - 2016-02-06 22:02:29 --> Helper loaded: language_helper
INFO - 2016-02-06 22:02:29 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 22:02:29 --> Model Class Initialized
INFO - 2016-02-06 22:02:29 --> Helper loaded: inflector_helper
INFO - 2016-02-06 22:02:29 --> Model Class Initialized
INFO - 2016-02-06 22:02:29 --> Helper loaded: date_helper
INFO - 2016-02-06 22:02:29 --> Controller Class Initialized
DEBUG - 2016-02-06 22:02:29 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dossiers/models/Dossier_m.php
INFO - 2016-02-06 22:02:29 --> Model Class Initialized
DEBUG - 2016-02-06 22:02:29 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
ERROR - 2016-02-06 22:02:29 --> Could not find the language line "index_create_group_link"
DEBUG - 2016-02-06 22:02:29 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dossiers/views/clienten.php
DEBUG - 2016-02-06 22:02:29 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 22:02:30 --> Final output sent to browser
DEBUG - 2016-02-06 22:02:30 --> Total execution time: 0.5785
INFO - 2016-02-06 22:02:43 --> Config Class Initialized
INFO - 2016-02-06 22:02:43 --> Hooks Class Initialized
DEBUG - 2016-02-06 22:02:43 --> UTF-8 Support Enabled
INFO - 2016-02-06 22:02:43 --> Utf8 Class Initialized
INFO - 2016-02-06 22:02:43 --> URI Class Initialized
INFO - 2016-02-06 22:02:43 --> Router Class Initialized
INFO - 2016-02-06 22:02:43 --> Output Class Initialized
INFO - 2016-02-06 22:02:44 --> Security Class Initialized
DEBUG - 2016-02-06 22:02:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 22:02:44 --> Input Class Initialized
INFO - 2016-02-06 22:02:44 --> Language Class Initialized
INFO - 2016-02-06 22:02:44 --> Language Class Initialized
INFO - 2016-02-06 22:02:44 --> Config Class Initialized
INFO - 2016-02-06 22:02:44 --> Loader Class Initialized
INFO - 2016-02-06 22:02:44 --> Helper loaded: form_helper
INFO - 2016-02-06 22:02:44 --> Helper loaded: url_helper
INFO - 2016-02-06 22:02:44 --> Helper loaded: general_helper
INFO - 2016-02-06 22:02:44 --> Database Driver Class Initialized
INFO - 2016-02-06 22:02:44 --> Form Validation Class Initialized
DEBUG - 2016-02-06 22:02:44 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 22:02:44 --> Email Class Initialized
INFO - 2016-02-06 22:02:44 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 22:02:44 --> Helper loaded: cookie_helper
INFO - 2016-02-06 22:02:44 --> Helper loaded: language_helper
INFO - 2016-02-06 22:02:44 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 22:02:44 --> Model Class Initialized
INFO - 2016-02-06 22:02:44 --> Helper loaded: inflector_helper
INFO - 2016-02-06 22:02:44 --> Model Class Initialized
INFO - 2016-02-06 22:02:44 --> Helper loaded: date_helper
INFO - 2016-02-06 22:02:44 --> Controller Class Initialized
DEBUG - 2016-02-06 22:02:44 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dossiers/models/Dossier_m.php
INFO - 2016-02-06 22:02:44 --> Model Class Initialized
DEBUG - 2016-02-06 22:02:44 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 22:02:44 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dossiers/views/clienten.php
DEBUG - 2016-02-06 22:02:44 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 22:02:44 --> Final output sent to browser
DEBUG - 2016-02-06 22:02:44 --> Total execution time: 0.5955
INFO - 2016-02-06 22:51:32 --> Config Class Initialized
INFO - 2016-02-06 22:51:32 --> Hooks Class Initialized
DEBUG - 2016-02-06 22:51:32 --> UTF-8 Support Enabled
INFO - 2016-02-06 22:51:32 --> Utf8 Class Initialized
INFO - 2016-02-06 22:51:32 --> URI Class Initialized
INFO - 2016-02-06 22:51:32 --> Router Class Initialized
INFO - 2016-02-06 22:51:32 --> Output Class Initialized
INFO - 2016-02-06 22:51:32 --> Security Class Initialized
DEBUG - 2016-02-06 22:51:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 22:51:32 --> Input Class Initialized
INFO - 2016-02-06 22:51:32 --> Language Class Initialized
INFO - 2016-02-06 22:51:32 --> Language Class Initialized
INFO - 2016-02-06 22:51:32 --> Config Class Initialized
INFO - 2016-02-06 22:51:32 --> Loader Class Initialized
INFO - 2016-02-06 22:51:32 --> Helper loaded: form_helper
INFO - 2016-02-06 22:51:32 --> Helper loaded: url_helper
INFO - 2016-02-06 22:51:32 --> Helper loaded: general_helper
INFO - 2016-02-06 22:51:32 --> Database Driver Class Initialized
INFO - 2016-02-06 22:51:33 --> Form Validation Class Initialized
DEBUG - 2016-02-06 22:51:33 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 22:51:33 --> Email Class Initialized
INFO - 2016-02-06 22:51:33 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 22:51:33 --> Helper loaded: cookie_helper
INFO - 2016-02-06 22:51:33 --> Helper loaded: language_helper
INFO - 2016-02-06 22:51:33 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 22:51:33 --> Model Class Initialized
INFO - 2016-02-06 22:51:33 --> Helper loaded: inflector_helper
INFO - 2016-02-06 22:51:33 --> Model Class Initialized
INFO - 2016-02-06 22:51:33 --> Helper loaded: date_helper
INFO - 2016-02-06 22:51:33 --> Controller Class Initialized
DEBUG - 2016-02-06 22:51:33 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dossiers/models/Dossier_m.php
INFO - 2016-02-06 22:51:33 --> Model Class Initialized
DEBUG - 2016-02-06 22:51:33 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 22:51:33 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dossiers/views/clienten.php
DEBUG - 2016-02-06 22:51:33 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 22:51:33 --> Final output sent to browser
DEBUG - 2016-02-06 22:51:33 --> Total execution time: 0.5636
INFO - 2016-02-06 22:52:41 --> Config Class Initialized
INFO - 2016-02-06 22:52:41 --> Hooks Class Initialized
DEBUG - 2016-02-06 22:52:41 --> UTF-8 Support Enabled
INFO - 2016-02-06 22:52:41 --> Utf8 Class Initialized
INFO - 2016-02-06 22:52:41 --> URI Class Initialized
INFO - 2016-02-06 22:52:41 --> Router Class Initialized
INFO - 2016-02-06 22:52:41 --> Output Class Initialized
INFO - 2016-02-06 22:52:41 --> Security Class Initialized
DEBUG - 2016-02-06 22:52:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 22:52:41 --> Input Class Initialized
INFO - 2016-02-06 22:52:41 --> Language Class Initialized
INFO - 2016-02-06 22:52:41 --> Language Class Initialized
INFO - 2016-02-06 22:52:41 --> Config Class Initialized
INFO - 2016-02-06 22:52:41 --> Loader Class Initialized
INFO - 2016-02-06 22:52:41 --> Helper loaded: form_helper
INFO - 2016-02-06 22:52:41 --> Helper loaded: url_helper
INFO - 2016-02-06 22:52:41 --> Helper loaded: general_helper
INFO - 2016-02-06 22:52:41 --> Database Driver Class Initialized
INFO - 2016-02-06 22:52:41 --> Form Validation Class Initialized
DEBUG - 2016-02-06 22:52:41 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 22:52:41 --> Email Class Initialized
INFO - 2016-02-06 22:52:41 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 22:52:41 --> Helper loaded: cookie_helper
INFO - 2016-02-06 22:52:41 --> Helper loaded: language_helper
INFO - 2016-02-06 22:52:41 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 22:52:41 --> Model Class Initialized
INFO - 2016-02-06 22:52:41 --> Helper loaded: inflector_helper
INFO - 2016-02-06 22:52:41 --> Model Class Initialized
INFO - 2016-02-06 22:52:41 --> Helper loaded: date_helper
INFO - 2016-02-06 22:52:41 --> Controller Class Initialized
DEBUG - 2016-02-06 22:52:41 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dossiers/models/Dossier_m.php
INFO - 2016-02-06 22:52:41 --> Model Class Initialized
DEBUG - 2016-02-06 22:52:41 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 22:52:41 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dossiers/views/clienten.php
DEBUG - 2016-02-06 22:52:41 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 22:52:41 --> Final output sent to browser
DEBUG - 2016-02-06 22:52:41 --> Total execution time: 0.5630
INFO - 2016-02-06 22:53:24 --> Config Class Initialized
INFO - 2016-02-06 22:53:24 --> Hooks Class Initialized
DEBUG - 2016-02-06 22:53:24 --> UTF-8 Support Enabled
INFO - 2016-02-06 22:53:24 --> Utf8 Class Initialized
INFO - 2016-02-06 22:53:24 --> URI Class Initialized
INFO - 2016-02-06 22:53:24 --> Router Class Initialized
INFO - 2016-02-06 22:53:24 --> Output Class Initialized
INFO - 2016-02-06 22:53:24 --> Security Class Initialized
DEBUG - 2016-02-06 22:53:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 22:53:24 --> Input Class Initialized
INFO - 2016-02-06 22:53:24 --> Language Class Initialized
INFO - 2016-02-06 22:53:24 --> Language Class Initialized
INFO - 2016-02-06 22:53:24 --> Config Class Initialized
INFO - 2016-02-06 22:53:24 --> Loader Class Initialized
INFO - 2016-02-06 22:53:24 --> Helper loaded: form_helper
INFO - 2016-02-06 22:53:24 --> Helper loaded: url_helper
INFO - 2016-02-06 22:53:24 --> Helper loaded: general_helper
INFO - 2016-02-06 22:53:24 --> Database Driver Class Initialized
INFO - 2016-02-06 22:53:24 --> Form Validation Class Initialized
DEBUG - 2016-02-06 22:53:24 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 22:53:24 --> Email Class Initialized
INFO - 2016-02-06 22:53:24 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 22:53:24 --> Helper loaded: cookie_helper
INFO - 2016-02-06 22:53:24 --> Helper loaded: language_helper
INFO - 2016-02-06 22:53:24 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 22:53:24 --> Model Class Initialized
INFO - 2016-02-06 22:53:24 --> Helper loaded: inflector_helper
INFO - 2016-02-06 22:53:24 --> Model Class Initialized
INFO - 2016-02-06 22:53:24 --> Helper loaded: date_helper
INFO - 2016-02-06 22:53:24 --> Controller Class Initialized
DEBUG - 2016-02-06 22:53:24 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dossiers/models/Dossier_m.php
INFO - 2016-02-06 22:53:24 --> Model Class Initialized
DEBUG - 2016-02-06 22:53:24 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 22:53:24 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dossiers/views/clienten.php
DEBUG - 2016-02-06 22:53:24 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 22:53:24 --> Final output sent to browser
DEBUG - 2016-02-06 22:53:24 --> Total execution time: 0.5743
INFO - 2016-02-06 22:53:52 --> Config Class Initialized
INFO - 2016-02-06 22:53:52 --> Hooks Class Initialized
DEBUG - 2016-02-06 22:53:52 --> UTF-8 Support Enabled
INFO - 2016-02-06 22:53:52 --> Utf8 Class Initialized
INFO - 2016-02-06 22:53:52 --> URI Class Initialized
INFO - 2016-02-06 22:53:52 --> Router Class Initialized
INFO - 2016-02-06 22:53:52 --> Output Class Initialized
INFO - 2016-02-06 22:53:52 --> Security Class Initialized
DEBUG - 2016-02-06 22:53:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 22:53:52 --> Input Class Initialized
INFO - 2016-02-06 22:53:53 --> Language Class Initialized
INFO - 2016-02-06 22:53:53 --> Language Class Initialized
INFO - 2016-02-06 22:53:53 --> Config Class Initialized
INFO - 2016-02-06 22:53:53 --> Loader Class Initialized
INFO - 2016-02-06 22:53:53 --> Helper loaded: form_helper
INFO - 2016-02-06 22:53:53 --> Helper loaded: url_helper
INFO - 2016-02-06 22:53:53 --> Helper loaded: general_helper
INFO - 2016-02-06 22:53:53 --> Database Driver Class Initialized
INFO - 2016-02-06 22:53:53 --> Form Validation Class Initialized
DEBUG - 2016-02-06 22:53:53 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 22:53:53 --> Email Class Initialized
INFO - 2016-02-06 22:53:53 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 22:53:53 --> Helper loaded: cookie_helper
INFO - 2016-02-06 22:53:53 --> Helper loaded: language_helper
INFO - 2016-02-06 22:53:53 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 22:53:53 --> Model Class Initialized
INFO - 2016-02-06 22:53:53 --> Helper loaded: inflector_helper
INFO - 2016-02-06 22:53:53 --> Model Class Initialized
INFO - 2016-02-06 22:53:53 --> Helper loaded: date_helper
INFO - 2016-02-06 22:53:53 --> Controller Class Initialized
DEBUG - 2016-02-06 22:53:53 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dossiers/models/Dossier_m.php
INFO - 2016-02-06 22:53:53 --> Model Class Initialized
DEBUG - 2016-02-06 22:53:53 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 22:53:53 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/dossiers/views/clienten.php
DEBUG - 2016-02-06 22:53:53 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 22:53:53 --> Final output sent to browser
DEBUG - 2016-02-06 22:53:53 --> Total execution time: 0.5698
INFO - 2016-02-06 22:53:55 --> Config Class Initialized
INFO - 2016-02-06 22:53:55 --> Hooks Class Initialized
DEBUG - 2016-02-06 22:53:55 --> UTF-8 Support Enabled
INFO - 2016-02-06 22:53:55 --> Utf8 Class Initialized
INFO - 2016-02-06 22:53:55 --> URI Class Initialized
INFO - 2016-02-06 22:53:55 --> Router Class Initialized
INFO - 2016-02-06 22:53:55 --> Output Class Initialized
INFO - 2016-02-06 22:53:55 --> Security Class Initialized
DEBUG - 2016-02-06 22:53:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 22:53:55 --> Input Class Initialized
INFO - 2016-02-06 22:53:55 --> Language Class Initialized
INFO - 2016-02-06 22:53:55 --> Language Class Initialized
INFO - 2016-02-06 22:53:55 --> Config Class Initialized
INFO - 2016-02-06 22:53:55 --> Loader Class Initialized
INFO - 2016-02-06 22:53:55 --> Helper loaded: form_helper
INFO - 2016-02-06 22:53:55 --> Helper loaded: url_helper
INFO - 2016-02-06 22:53:55 --> Helper loaded: general_helper
INFO - 2016-02-06 22:53:55 --> Database Driver Class Initialized
INFO - 2016-02-06 22:53:55 --> Form Validation Class Initialized
DEBUG - 2016-02-06 22:53:55 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 22:53:55 --> Email Class Initialized
INFO - 2016-02-06 22:53:55 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 22:53:55 --> Helper loaded: cookie_helper
INFO - 2016-02-06 22:53:55 --> Helper loaded: language_helper
INFO - 2016-02-06 22:53:55 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 22:53:56 --> Model Class Initialized
INFO - 2016-02-06 22:53:56 --> Helper loaded: inflector_helper
INFO - 2016-02-06 22:53:56 --> Model Class Initialized
INFO - 2016-02-06 22:53:56 --> Helper loaded: date_helper
INFO - 2016-02-06 22:53:56 --> Controller Class Initialized
INFO - 2016-02-06 22:53:56 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 22:53:56 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 22:53:56 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 22:53:56 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 22:53:56 --> Final output sent to browser
DEBUG - 2016-02-06 22:53:56 --> Total execution time: 0.5685
INFO - 2016-02-06 22:57:14 --> Config Class Initialized
INFO - 2016-02-06 22:57:14 --> Hooks Class Initialized
DEBUG - 2016-02-06 22:57:14 --> UTF-8 Support Enabled
INFO - 2016-02-06 22:57:14 --> Utf8 Class Initialized
INFO - 2016-02-06 22:57:14 --> URI Class Initialized
INFO - 2016-02-06 22:57:14 --> Router Class Initialized
INFO - 2016-02-06 22:57:14 --> Output Class Initialized
INFO - 2016-02-06 22:57:14 --> Security Class Initialized
DEBUG - 2016-02-06 22:57:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 22:57:15 --> Input Class Initialized
INFO - 2016-02-06 22:57:15 --> Language Class Initialized
INFO - 2016-02-06 22:57:15 --> Language Class Initialized
INFO - 2016-02-06 22:57:15 --> Config Class Initialized
INFO - 2016-02-06 22:57:15 --> Loader Class Initialized
INFO - 2016-02-06 22:57:15 --> Helper loaded: form_helper
INFO - 2016-02-06 22:57:15 --> Helper loaded: url_helper
INFO - 2016-02-06 22:57:15 --> Helper loaded: general_helper
INFO - 2016-02-06 22:57:15 --> Database Driver Class Initialized
INFO - 2016-02-06 22:57:15 --> Form Validation Class Initialized
DEBUG - 2016-02-06 22:57:15 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 22:57:15 --> Email Class Initialized
INFO - 2016-02-06 22:57:15 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 22:57:15 --> Helper loaded: cookie_helper
INFO - 2016-02-06 22:57:15 --> Helper loaded: language_helper
INFO - 2016-02-06 22:57:15 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 22:57:15 --> Model Class Initialized
INFO - 2016-02-06 22:57:15 --> Helper loaded: inflector_helper
INFO - 2016-02-06 22:57:15 --> Model Class Initialized
INFO - 2016-02-06 22:57:15 --> Helper loaded: date_helper
INFO - 2016-02-06 22:57:15 --> Controller Class Initialized
INFO - 2016-02-06 22:57:15 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 22:57:15 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 22:57:15 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 22:57:15 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 22:57:15 --> Final output sent to browser
DEBUG - 2016-02-06 22:57:15 --> Total execution time: 0.5587
INFO - 2016-02-06 22:57:19 --> Config Class Initialized
INFO - 2016-02-06 22:57:19 --> Hooks Class Initialized
DEBUG - 2016-02-06 22:57:19 --> UTF-8 Support Enabled
INFO - 2016-02-06 22:57:19 --> Utf8 Class Initialized
INFO - 2016-02-06 22:57:19 --> URI Class Initialized
INFO - 2016-02-06 22:57:19 --> Router Class Initialized
INFO - 2016-02-06 22:57:19 --> Output Class Initialized
INFO - 2016-02-06 22:57:19 --> Security Class Initialized
DEBUG - 2016-02-06 22:57:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 22:57:19 --> Input Class Initialized
INFO - 2016-02-06 22:57:19 --> Language Class Initialized
INFO - 2016-02-06 22:57:19 --> Language Class Initialized
INFO - 2016-02-06 22:57:19 --> Config Class Initialized
INFO - 2016-02-06 22:57:19 --> Loader Class Initialized
INFO - 2016-02-06 22:57:19 --> Helper loaded: form_helper
INFO - 2016-02-06 22:57:19 --> Helper loaded: url_helper
INFO - 2016-02-06 22:57:19 --> Helper loaded: general_helper
INFO - 2016-02-06 22:57:19 --> Database Driver Class Initialized
INFO - 2016-02-06 22:57:19 --> Form Validation Class Initialized
DEBUG - 2016-02-06 22:57:19 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 22:57:19 --> Email Class Initialized
INFO - 2016-02-06 22:57:19 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 22:57:19 --> Helper loaded: cookie_helper
INFO - 2016-02-06 22:57:19 --> Helper loaded: language_helper
INFO - 2016-02-06 22:57:19 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 22:57:19 --> Model Class Initialized
INFO - 2016-02-06 22:57:19 --> Helper loaded: inflector_helper
INFO - 2016-02-06 22:57:19 --> Model Class Initialized
INFO - 2016-02-06 22:57:19 --> Helper loaded: date_helper
INFO - 2016-02-06 22:57:19 --> Controller Class Initialized
INFO - 2016-02-06 22:57:19 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 22:57:19 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 22:57:19 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 22:57:19 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 22:57:19 --> Final output sent to browser
DEBUG - 2016-02-06 22:57:19 --> Total execution time: 0.5702
INFO - 2016-02-06 22:57:34 --> Config Class Initialized
INFO - 2016-02-06 22:57:34 --> Hooks Class Initialized
DEBUG - 2016-02-06 22:57:34 --> UTF-8 Support Enabled
INFO - 2016-02-06 22:57:34 --> Utf8 Class Initialized
INFO - 2016-02-06 22:57:34 --> URI Class Initialized
INFO - 2016-02-06 22:57:34 --> Router Class Initialized
INFO - 2016-02-06 22:57:34 --> Output Class Initialized
INFO - 2016-02-06 22:57:34 --> Security Class Initialized
DEBUG - 2016-02-06 22:57:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 22:57:34 --> Input Class Initialized
INFO - 2016-02-06 22:57:34 --> Language Class Initialized
INFO - 2016-02-06 22:57:34 --> Language Class Initialized
INFO - 2016-02-06 22:57:34 --> Config Class Initialized
INFO - 2016-02-06 22:57:34 --> Loader Class Initialized
INFO - 2016-02-06 22:57:34 --> Helper loaded: form_helper
INFO - 2016-02-06 22:57:34 --> Helper loaded: url_helper
INFO - 2016-02-06 22:57:34 --> Helper loaded: general_helper
INFO - 2016-02-06 22:57:34 --> Database Driver Class Initialized
INFO - 2016-02-06 22:57:34 --> Form Validation Class Initialized
DEBUG - 2016-02-06 22:57:34 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 22:57:34 --> Email Class Initialized
INFO - 2016-02-06 22:57:34 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 22:57:34 --> Helper loaded: cookie_helper
INFO - 2016-02-06 22:57:35 --> Helper loaded: language_helper
INFO - 2016-02-06 22:57:35 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 22:57:35 --> Model Class Initialized
INFO - 2016-02-06 22:57:35 --> Helper loaded: inflector_helper
INFO - 2016-02-06 22:57:35 --> Model Class Initialized
INFO - 2016-02-06 22:57:35 --> Helper loaded: date_helper
INFO - 2016-02-06 22:57:35 --> Controller Class Initialized
INFO - 2016-02-06 22:57:35 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 22:57:35 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 22:57:35 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 22:57:35 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 22:57:35 --> Final output sent to browser
DEBUG - 2016-02-06 22:57:35 --> Total execution time: 0.5677
INFO - 2016-02-06 22:58:05 --> Config Class Initialized
INFO - 2016-02-06 22:58:05 --> Hooks Class Initialized
DEBUG - 2016-02-06 22:58:05 --> UTF-8 Support Enabled
INFO - 2016-02-06 22:58:05 --> Utf8 Class Initialized
INFO - 2016-02-06 22:58:05 --> URI Class Initialized
INFO - 2016-02-06 22:58:05 --> Router Class Initialized
INFO - 2016-02-06 22:58:05 --> Output Class Initialized
INFO - 2016-02-06 22:58:05 --> Security Class Initialized
DEBUG - 2016-02-06 22:58:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 22:58:05 --> Input Class Initialized
INFO - 2016-02-06 22:58:05 --> Language Class Initialized
INFO - 2016-02-06 22:58:05 --> Language Class Initialized
INFO - 2016-02-06 22:58:05 --> Config Class Initialized
INFO - 2016-02-06 22:58:05 --> Loader Class Initialized
INFO - 2016-02-06 22:58:05 --> Helper loaded: form_helper
INFO - 2016-02-06 22:58:05 --> Helper loaded: url_helper
INFO - 2016-02-06 22:58:05 --> Helper loaded: general_helper
INFO - 2016-02-06 22:58:05 --> Database Driver Class Initialized
INFO - 2016-02-06 22:58:05 --> Form Validation Class Initialized
DEBUG - 2016-02-06 22:58:05 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 22:58:05 --> Email Class Initialized
INFO - 2016-02-06 22:58:05 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 22:58:05 --> Helper loaded: cookie_helper
INFO - 2016-02-06 22:58:05 --> Helper loaded: language_helper
INFO - 2016-02-06 22:58:05 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 22:58:05 --> Model Class Initialized
INFO - 2016-02-06 22:58:05 --> Helper loaded: inflector_helper
INFO - 2016-02-06 22:58:05 --> Model Class Initialized
INFO - 2016-02-06 22:58:05 --> Helper loaded: date_helper
INFO - 2016-02-06 22:58:05 --> Controller Class Initialized
INFO - 2016-02-06 22:58:05 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 22:58:05 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 22:58:05 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 22:58:05 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 22:58:05 --> Final output sent to browser
DEBUG - 2016-02-06 22:58:05 --> Total execution time: 0.5454
INFO - 2016-02-06 22:58:19 --> Config Class Initialized
INFO - 2016-02-06 22:58:19 --> Hooks Class Initialized
DEBUG - 2016-02-06 22:58:19 --> UTF-8 Support Enabled
INFO - 2016-02-06 22:58:19 --> Utf8 Class Initialized
INFO - 2016-02-06 22:58:19 --> URI Class Initialized
INFO - 2016-02-06 22:58:19 --> Router Class Initialized
INFO - 2016-02-06 22:58:19 --> Output Class Initialized
INFO - 2016-02-06 22:58:19 --> Security Class Initialized
DEBUG - 2016-02-06 22:58:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 22:58:19 --> Input Class Initialized
INFO - 2016-02-06 22:58:19 --> Language Class Initialized
INFO - 2016-02-06 22:58:19 --> Language Class Initialized
INFO - 2016-02-06 22:58:19 --> Config Class Initialized
INFO - 2016-02-06 22:58:19 --> Loader Class Initialized
INFO - 2016-02-06 22:58:19 --> Helper loaded: form_helper
INFO - 2016-02-06 22:58:19 --> Helper loaded: url_helper
INFO - 2016-02-06 22:58:19 --> Helper loaded: general_helper
INFO - 2016-02-06 22:58:19 --> Database Driver Class Initialized
INFO - 2016-02-06 22:58:19 --> Form Validation Class Initialized
DEBUG - 2016-02-06 22:58:19 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 22:58:19 --> Email Class Initialized
INFO - 2016-02-06 22:58:19 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 22:58:19 --> Helper loaded: cookie_helper
INFO - 2016-02-06 22:58:19 --> Helper loaded: language_helper
INFO - 2016-02-06 22:58:19 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 22:58:19 --> Model Class Initialized
INFO - 2016-02-06 22:58:19 --> Helper loaded: inflector_helper
INFO - 2016-02-06 22:58:19 --> Model Class Initialized
INFO - 2016-02-06 22:58:19 --> Helper loaded: date_helper
INFO - 2016-02-06 22:58:19 --> Controller Class Initialized
INFO - 2016-02-06 22:58:19 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 22:58:19 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 22:58:19 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 22:58:19 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 22:58:19 --> Final output sent to browser
DEBUG - 2016-02-06 22:58:19 --> Total execution time: 0.5681
INFO - 2016-02-06 22:58:54 --> Config Class Initialized
INFO - 2016-02-06 22:58:54 --> Hooks Class Initialized
DEBUG - 2016-02-06 22:58:54 --> UTF-8 Support Enabled
INFO - 2016-02-06 22:58:55 --> Utf8 Class Initialized
INFO - 2016-02-06 22:58:55 --> URI Class Initialized
INFO - 2016-02-06 22:58:55 --> Router Class Initialized
INFO - 2016-02-06 22:58:55 --> Output Class Initialized
INFO - 2016-02-06 22:58:55 --> Security Class Initialized
DEBUG - 2016-02-06 22:58:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 22:58:55 --> Input Class Initialized
INFO - 2016-02-06 22:58:55 --> Language Class Initialized
INFO - 2016-02-06 22:58:55 --> Language Class Initialized
INFO - 2016-02-06 22:58:55 --> Config Class Initialized
INFO - 2016-02-06 22:58:55 --> Loader Class Initialized
INFO - 2016-02-06 22:58:55 --> Helper loaded: form_helper
INFO - 2016-02-06 22:58:55 --> Helper loaded: url_helper
INFO - 2016-02-06 22:58:55 --> Helper loaded: general_helper
INFO - 2016-02-06 22:58:55 --> Database Driver Class Initialized
INFO - 2016-02-06 22:58:55 --> Form Validation Class Initialized
DEBUG - 2016-02-06 22:58:55 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 22:58:55 --> Email Class Initialized
INFO - 2016-02-06 22:58:55 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 22:58:55 --> Helper loaded: cookie_helper
INFO - 2016-02-06 22:58:55 --> Helper loaded: language_helper
INFO - 2016-02-06 22:58:55 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 22:58:55 --> Model Class Initialized
INFO - 2016-02-06 22:58:55 --> Helper loaded: inflector_helper
INFO - 2016-02-06 22:58:55 --> Model Class Initialized
INFO - 2016-02-06 22:58:55 --> Helper loaded: date_helper
INFO - 2016-02-06 22:58:55 --> Controller Class Initialized
INFO - 2016-02-06 22:58:55 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 22:58:55 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 22:58:55 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 22:58:55 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 22:58:55 --> Final output sent to browser
DEBUG - 2016-02-06 22:58:55 --> Total execution time: 0.5581
INFO - 2016-02-06 22:59:11 --> Config Class Initialized
INFO - 2016-02-06 22:59:11 --> Hooks Class Initialized
DEBUG - 2016-02-06 22:59:11 --> UTF-8 Support Enabled
INFO - 2016-02-06 22:59:11 --> Utf8 Class Initialized
INFO - 2016-02-06 22:59:11 --> URI Class Initialized
INFO - 2016-02-06 22:59:11 --> Router Class Initialized
INFO - 2016-02-06 22:59:11 --> Output Class Initialized
INFO - 2016-02-06 22:59:11 --> Security Class Initialized
DEBUG - 2016-02-06 22:59:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 22:59:11 --> Input Class Initialized
INFO - 2016-02-06 22:59:11 --> Language Class Initialized
INFO - 2016-02-06 22:59:11 --> Language Class Initialized
INFO - 2016-02-06 22:59:11 --> Config Class Initialized
INFO - 2016-02-06 22:59:11 --> Loader Class Initialized
INFO - 2016-02-06 22:59:11 --> Helper loaded: form_helper
INFO - 2016-02-06 22:59:11 --> Helper loaded: url_helper
INFO - 2016-02-06 22:59:11 --> Helper loaded: general_helper
INFO - 2016-02-06 22:59:11 --> Database Driver Class Initialized
INFO - 2016-02-06 22:59:11 --> Form Validation Class Initialized
DEBUG - 2016-02-06 22:59:11 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 22:59:11 --> Email Class Initialized
INFO - 2016-02-06 22:59:11 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 22:59:11 --> Helper loaded: cookie_helper
INFO - 2016-02-06 22:59:11 --> Helper loaded: language_helper
INFO - 2016-02-06 22:59:11 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 22:59:11 --> Model Class Initialized
INFO - 2016-02-06 22:59:11 --> Helper loaded: inflector_helper
INFO - 2016-02-06 22:59:11 --> Model Class Initialized
INFO - 2016-02-06 22:59:11 --> Helper loaded: date_helper
INFO - 2016-02-06 22:59:11 --> Controller Class Initialized
INFO - 2016-02-06 22:59:11 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 22:59:11 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 22:59:11 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 22:59:11 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 22:59:11 --> Final output sent to browser
DEBUG - 2016-02-06 22:59:11 --> Total execution time: 0.5692
INFO - 2016-02-06 22:59:26 --> Config Class Initialized
INFO - 2016-02-06 22:59:26 --> Hooks Class Initialized
DEBUG - 2016-02-06 22:59:26 --> UTF-8 Support Enabled
INFO - 2016-02-06 22:59:26 --> Utf8 Class Initialized
INFO - 2016-02-06 22:59:26 --> URI Class Initialized
INFO - 2016-02-06 22:59:26 --> Router Class Initialized
INFO - 2016-02-06 22:59:26 --> Output Class Initialized
INFO - 2016-02-06 22:59:26 --> Security Class Initialized
DEBUG - 2016-02-06 22:59:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 22:59:26 --> Input Class Initialized
INFO - 2016-02-06 22:59:26 --> Language Class Initialized
INFO - 2016-02-06 22:59:26 --> Language Class Initialized
INFO - 2016-02-06 22:59:26 --> Config Class Initialized
INFO - 2016-02-06 22:59:26 --> Loader Class Initialized
INFO - 2016-02-06 22:59:26 --> Helper loaded: form_helper
INFO - 2016-02-06 22:59:26 --> Helper loaded: url_helper
INFO - 2016-02-06 22:59:26 --> Helper loaded: general_helper
INFO - 2016-02-06 22:59:26 --> Database Driver Class Initialized
INFO - 2016-02-06 22:59:26 --> Form Validation Class Initialized
DEBUG - 2016-02-06 22:59:26 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 22:59:26 --> Email Class Initialized
INFO - 2016-02-06 22:59:26 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 22:59:27 --> Helper loaded: cookie_helper
INFO - 2016-02-06 22:59:27 --> Helper loaded: language_helper
INFO - 2016-02-06 22:59:27 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 22:59:27 --> Model Class Initialized
INFO - 2016-02-06 22:59:27 --> Helper loaded: inflector_helper
INFO - 2016-02-06 22:59:27 --> Model Class Initialized
INFO - 2016-02-06 22:59:27 --> Helper loaded: date_helper
INFO - 2016-02-06 22:59:27 --> Controller Class Initialized
INFO - 2016-02-06 22:59:27 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 22:59:27 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 22:59:27 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 22:59:27 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 22:59:27 --> Final output sent to browser
DEBUG - 2016-02-06 22:59:27 --> Total execution time: 0.5700
INFO - 2016-02-06 23:00:01 --> Config Class Initialized
INFO - 2016-02-06 23:00:01 --> Hooks Class Initialized
DEBUG - 2016-02-06 23:00:01 --> UTF-8 Support Enabled
INFO - 2016-02-06 23:00:01 --> Utf8 Class Initialized
INFO - 2016-02-06 23:00:01 --> URI Class Initialized
INFO - 2016-02-06 23:00:01 --> Router Class Initialized
INFO - 2016-02-06 23:00:01 --> Output Class Initialized
INFO - 2016-02-06 23:00:01 --> Security Class Initialized
DEBUG - 2016-02-06 23:00:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 23:00:02 --> Input Class Initialized
INFO - 2016-02-06 23:00:02 --> Language Class Initialized
INFO - 2016-02-06 23:00:02 --> Language Class Initialized
INFO - 2016-02-06 23:00:02 --> Config Class Initialized
INFO - 2016-02-06 23:00:02 --> Loader Class Initialized
INFO - 2016-02-06 23:00:02 --> Helper loaded: form_helper
INFO - 2016-02-06 23:00:02 --> Helper loaded: url_helper
INFO - 2016-02-06 23:00:02 --> Helper loaded: general_helper
INFO - 2016-02-06 23:00:02 --> Database Driver Class Initialized
INFO - 2016-02-06 23:00:02 --> Form Validation Class Initialized
DEBUG - 2016-02-06 23:00:02 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 23:00:02 --> Email Class Initialized
INFO - 2016-02-06 23:00:02 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 23:00:02 --> Helper loaded: cookie_helper
INFO - 2016-02-06 23:00:02 --> Helper loaded: language_helper
INFO - 2016-02-06 23:00:02 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 23:00:02 --> Model Class Initialized
INFO - 2016-02-06 23:00:02 --> Helper loaded: inflector_helper
INFO - 2016-02-06 23:00:02 --> Model Class Initialized
INFO - 2016-02-06 23:00:02 --> Helper loaded: date_helper
INFO - 2016-02-06 23:00:02 --> Controller Class Initialized
DEBUG - 2016-02-06 23:00:02 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 23:00:02 --> Model Class Initialized
INFO - 2016-02-06 23:00:02 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 23:00:02 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 23:00:02 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/create_group.php
DEBUG - 2016-02-06 23:00:02 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 23:00:02 --> Final output sent to browser
DEBUG - 2016-02-06 23:00:02 --> Total execution time: 0.5811
INFO - 2016-02-06 23:00:03 --> Config Class Initialized
INFO - 2016-02-06 23:00:03 --> Hooks Class Initialized
DEBUG - 2016-02-06 23:00:03 --> UTF-8 Support Enabled
INFO - 2016-02-06 23:00:03 --> Utf8 Class Initialized
INFO - 2016-02-06 23:00:03 --> URI Class Initialized
INFO - 2016-02-06 23:00:03 --> Router Class Initialized
INFO - 2016-02-06 23:00:03 --> Output Class Initialized
INFO - 2016-02-06 23:00:03 --> Security Class Initialized
DEBUG - 2016-02-06 23:00:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 23:00:04 --> Input Class Initialized
INFO - 2016-02-06 23:00:04 --> Language Class Initialized
INFO - 2016-02-06 23:00:04 --> Language Class Initialized
INFO - 2016-02-06 23:00:04 --> Config Class Initialized
INFO - 2016-02-06 23:00:04 --> Loader Class Initialized
INFO - 2016-02-06 23:00:04 --> Helper loaded: form_helper
INFO - 2016-02-06 23:00:04 --> Helper loaded: url_helper
INFO - 2016-02-06 23:00:04 --> Helper loaded: general_helper
INFO - 2016-02-06 23:00:04 --> Database Driver Class Initialized
INFO - 2016-02-06 23:00:04 --> Form Validation Class Initialized
DEBUG - 2016-02-06 23:00:04 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 23:00:04 --> Email Class Initialized
INFO - 2016-02-06 23:00:04 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 23:00:04 --> Helper loaded: cookie_helper
INFO - 2016-02-06 23:00:04 --> Helper loaded: language_helper
INFO - 2016-02-06 23:00:04 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 23:00:04 --> Model Class Initialized
INFO - 2016-02-06 23:00:04 --> Helper loaded: inflector_helper
INFO - 2016-02-06 23:00:04 --> Model Class Initialized
INFO - 2016-02-06 23:00:04 --> Helper loaded: date_helper
INFO - 2016-02-06 23:00:04 --> Controller Class Initialized
INFO - 2016-02-06 23:00:04 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 23:00:04 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 23:00:04 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 23:00:04 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 23:00:04 --> Final output sent to browser
DEBUG - 2016-02-06 23:00:04 --> Total execution time: 0.5573
INFO - 2016-02-06 23:00:05 --> Config Class Initialized
INFO - 2016-02-06 23:00:05 --> Hooks Class Initialized
DEBUG - 2016-02-06 23:00:05 --> UTF-8 Support Enabled
INFO - 2016-02-06 23:00:05 --> Utf8 Class Initialized
INFO - 2016-02-06 23:00:05 --> URI Class Initialized
INFO - 2016-02-06 23:00:05 --> Router Class Initialized
INFO - 2016-02-06 23:00:05 --> Output Class Initialized
INFO - 2016-02-06 23:00:05 --> Security Class Initialized
DEBUG - 2016-02-06 23:00:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 23:00:05 --> Input Class Initialized
INFO - 2016-02-06 23:00:05 --> Language Class Initialized
INFO - 2016-02-06 23:00:05 --> Language Class Initialized
INFO - 2016-02-06 23:00:05 --> Config Class Initialized
INFO - 2016-02-06 23:00:05 --> Loader Class Initialized
INFO - 2016-02-06 23:00:05 --> Helper loaded: form_helper
INFO - 2016-02-06 23:00:05 --> Helper loaded: url_helper
INFO - 2016-02-06 23:00:05 --> Helper loaded: general_helper
INFO - 2016-02-06 23:00:05 --> Database Driver Class Initialized
INFO - 2016-02-06 23:00:05 --> Form Validation Class Initialized
DEBUG - 2016-02-06 23:00:05 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 23:00:05 --> Email Class Initialized
INFO - 2016-02-06 23:00:05 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 23:00:05 --> Helper loaded: cookie_helper
INFO - 2016-02-06 23:00:05 --> Helper loaded: language_helper
INFO - 2016-02-06 23:00:05 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 23:00:05 --> Model Class Initialized
INFO - 2016-02-06 23:00:05 --> Helper loaded: inflector_helper
INFO - 2016-02-06 23:00:05 --> Model Class Initialized
INFO - 2016-02-06 23:00:05 --> Helper loaded: date_helper
INFO - 2016-02-06 23:00:05 --> Controller Class Initialized
DEBUG - 2016-02-06 23:00:05 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 23:00:05 --> Model Class Initialized
INFO - 2016-02-06 23:00:05 --> Language file loaded: language/dutch/auth_lang.php
ERROR - 2016-02-06 23:00:05 --> Could not find the language line "create_user_validation_phone_label"
DEBUG - 2016-02-06 23:00:05 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 23:00:05 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/create_user.php
DEBUG - 2016-02-06 23:00:05 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 23:00:05 --> Final output sent to browser
DEBUG - 2016-02-06 23:00:05 --> Total execution time: 0.6073
INFO - 2016-02-06 23:00:06 --> Config Class Initialized
INFO - 2016-02-06 23:00:06 --> Hooks Class Initialized
DEBUG - 2016-02-06 23:00:06 --> UTF-8 Support Enabled
INFO - 2016-02-06 23:00:06 --> Utf8 Class Initialized
INFO - 2016-02-06 23:00:06 --> URI Class Initialized
INFO - 2016-02-06 23:00:06 --> Router Class Initialized
INFO - 2016-02-06 23:00:06 --> Output Class Initialized
INFO - 2016-02-06 23:00:06 --> Security Class Initialized
DEBUG - 2016-02-06 23:00:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 23:00:06 --> Input Class Initialized
INFO - 2016-02-06 23:00:06 --> Language Class Initialized
INFO - 2016-02-06 23:00:06 --> Language Class Initialized
INFO - 2016-02-06 23:00:06 --> Config Class Initialized
INFO - 2016-02-06 23:00:06 --> Loader Class Initialized
INFO - 2016-02-06 23:00:06 --> Helper loaded: form_helper
INFO - 2016-02-06 23:00:06 --> Helper loaded: url_helper
INFO - 2016-02-06 23:00:06 --> Helper loaded: general_helper
INFO - 2016-02-06 23:00:06 --> Database Driver Class Initialized
INFO - 2016-02-06 23:00:06 --> Form Validation Class Initialized
DEBUG - 2016-02-06 23:00:06 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 23:00:06 --> Email Class Initialized
INFO - 2016-02-06 23:00:06 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 23:00:07 --> Helper loaded: cookie_helper
INFO - 2016-02-06 23:00:07 --> Helper loaded: language_helper
INFO - 2016-02-06 23:00:07 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 23:00:07 --> Model Class Initialized
INFO - 2016-02-06 23:00:07 --> Helper loaded: inflector_helper
INFO - 2016-02-06 23:00:07 --> Model Class Initialized
INFO - 2016-02-06 23:00:07 --> Helper loaded: date_helper
INFO - 2016-02-06 23:00:07 --> Controller Class Initialized
INFO - 2016-02-06 23:00:07 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 23:00:07 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 23:00:07 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 23:00:07 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 23:00:07 --> Final output sent to browser
DEBUG - 2016-02-06 23:00:07 --> Total execution time: 0.5570
INFO - 2016-02-06 23:00:25 --> Config Class Initialized
INFO - 2016-02-06 23:00:25 --> Hooks Class Initialized
DEBUG - 2016-02-06 23:00:25 --> UTF-8 Support Enabled
INFO - 2016-02-06 23:00:25 --> Utf8 Class Initialized
INFO - 2016-02-06 23:00:25 --> URI Class Initialized
INFO - 2016-02-06 23:00:25 --> Router Class Initialized
INFO - 2016-02-06 23:00:25 --> Output Class Initialized
INFO - 2016-02-06 23:00:25 --> Security Class Initialized
DEBUG - 2016-02-06 23:00:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 23:00:25 --> Input Class Initialized
INFO - 2016-02-06 23:00:25 --> Language Class Initialized
INFO - 2016-02-06 23:00:25 --> Language Class Initialized
INFO - 2016-02-06 23:00:25 --> Config Class Initialized
INFO - 2016-02-06 23:00:25 --> Loader Class Initialized
INFO - 2016-02-06 23:00:25 --> Helper loaded: form_helper
INFO - 2016-02-06 23:00:25 --> Helper loaded: url_helper
INFO - 2016-02-06 23:00:25 --> Helper loaded: general_helper
INFO - 2016-02-06 23:00:25 --> Database Driver Class Initialized
INFO - 2016-02-06 23:00:25 --> Form Validation Class Initialized
DEBUG - 2016-02-06 23:00:25 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 23:00:25 --> Email Class Initialized
INFO - 2016-02-06 23:00:25 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 23:00:25 --> Helper loaded: cookie_helper
INFO - 2016-02-06 23:00:25 --> Helper loaded: language_helper
INFO - 2016-02-06 23:00:25 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 23:00:25 --> Model Class Initialized
INFO - 2016-02-06 23:00:25 --> Helper loaded: inflector_helper
INFO - 2016-02-06 23:00:25 --> Model Class Initialized
INFO - 2016-02-06 23:00:25 --> Helper loaded: date_helper
INFO - 2016-02-06 23:00:25 --> Controller Class Initialized
DEBUG - 2016-02-06 23:00:25 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 23:00:25 --> Model Class Initialized
INFO - 2016-02-06 23:00:25 --> Language file loaded: language/dutch/auth_lang.php
ERROR - 2016-02-06 23:00:25 --> Could not find the language line "create_user_validation_phone_label"
DEBUG - 2016-02-06 23:00:25 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 23:00:25 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/create_user.php
DEBUG - 2016-02-06 23:00:25 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 23:00:25 --> Final output sent to browser
DEBUG - 2016-02-06 23:00:26 --> Total execution time: 0.6226
INFO - 2016-02-06 23:00:52 --> Config Class Initialized
INFO - 2016-02-06 23:00:52 --> Hooks Class Initialized
DEBUG - 2016-02-06 23:00:52 --> UTF-8 Support Enabled
INFO - 2016-02-06 23:00:52 --> Utf8 Class Initialized
INFO - 2016-02-06 23:00:52 --> URI Class Initialized
INFO - 2016-02-06 23:00:52 --> Router Class Initialized
INFO - 2016-02-06 23:00:52 --> Output Class Initialized
INFO - 2016-02-06 23:00:52 --> Security Class Initialized
DEBUG - 2016-02-06 23:00:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 23:00:52 --> Input Class Initialized
INFO - 2016-02-06 23:00:53 --> Language Class Initialized
INFO - 2016-02-06 23:00:53 --> Language Class Initialized
INFO - 2016-02-06 23:00:53 --> Config Class Initialized
INFO - 2016-02-06 23:00:53 --> Loader Class Initialized
INFO - 2016-02-06 23:00:53 --> Helper loaded: form_helper
INFO - 2016-02-06 23:00:53 --> Helper loaded: url_helper
INFO - 2016-02-06 23:00:53 --> Helper loaded: general_helper
INFO - 2016-02-06 23:00:53 --> Database Driver Class Initialized
INFO - 2016-02-06 23:00:53 --> Form Validation Class Initialized
DEBUG - 2016-02-06 23:00:53 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 23:00:53 --> Email Class Initialized
INFO - 2016-02-06 23:00:53 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 23:00:53 --> Helper loaded: cookie_helper
INFO - 2016-02-06 23:00:53 --> Helper loaded: language_helper
INFO - 2016-02-06 23:00:53 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 23:00:53 --> Model Class Initialized
INFO - 2016-02-06 23:00:53 --> Helper loaded: inflector_helper
INFO - 2016-02-06 23:00:53 --> Model Class Initialized
INFO - 2016-02-06 23:00:53 --> Helper loaded: date_helper
INFO - 2016-02-06 23:00:53 --> Controller Class Initialized
INFO - 2016-02-06 23:00:53 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 23:00:53 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 23:00:53 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 23:00:53 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 23:00:53 --> Final output sent to browser
DEBUG - 2016-02-06 23:00:53 --> Total execution time: 0.5595
INFO - 2016-02-06 23:00:55 --> Config Class Initialized
INFO - 2016-02-06 23:00:55 --> Hooks Class Initialized
DEBUG - 2016-02-06 23:00:55 --> UTF-8 Support Enabled
INFO - 2016-02-06 23:00:55 --> Utf8 Class Initialized
INFO - 2016-02-06 23:00:55 --> URI Class Initialized
INFO - 2016-02-06 23:00:55 --> Router Class Initialized
INFO - 2016-02-06 23:00:55 --> Output Class Initialized
INFO - 2016-02-06 23:00:55 --> Security Class Initialized
DEBUG - 2016-02-06 23:00:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 23:00:55 --> Input Class Initialized
INFO - 2016-02-06 23:00:55 --> Language Class Initialized
INFO - 2016-02-06 23:00:55 --> Language Class Initialized
INFO - 2016-02-06 23:00:55 --> Config Class Initialized
INFO - 2016-02-06 23:00:55 --> Loader Class Initialized
INFO - 2016-02-06 23:00:55 --> Helper loaded: form_helper
INFO - 2016-02-06 23:00:55 --> Helper loaded: url_helper
INFO - 2016-02-06 23:00:55 --> Helper loaded: general_helper
INFO - 2016-02-06 23:00:55 --> Database Driver Class Initialized
INFO - 2016-02-06 23:00:55 --> Form Validation Class Initialized
DEBUG - 2016-02-06 23:00:55 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 23:00:55 --> Email Class Initialized
INFO - 2016-02-06 23:00:55 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 23:00:55 --> Helper loaded: cookie_helper
INFO - 2016-02-06 23:00:55 --> Helper loaded: language_helper
INFO - 2016-02-06 23:00:55 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 23:00:55 --> Model Class Initialized
INFO - 2016-02-06 23:00:55 --> Helper loaded: inflector_helper
INFO - 2016-02-06 23:00:55 --> Model Class Initialized
INFO - 2016-02-06 23:00:55 --> Helper loaded: date_helper
INFO - 2016-02-06 23:00:56 --> Controller Class Initialized
DEBUG - 2016-02-06 23:00:56 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 23:00:56 --> Model Class Initialized
INFO - 2016-02-06 23:00:56 --> Language file loaded: language/dutch/auth_lang.php
ERROR - 2016-02-06 23:00:56 --> Could not find the language line "create_user_validation_phone_label"
DEBUG - 2016-02-06 23:00:56 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 23:00:56 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/create_user.php
DEBUG - 2016-02-06 23:00:56 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 23:00:56 --> Final output sent to browser
DEBUG - 2016-02-06 23:00:56 --> Total execution time: 0.6196
INFO - 2016-02-06 23:00:58 --> Config Class Initialized
INFO - 2016-02-06 23:00:58 --> Hooks Class Initialized
DEBUG - 2016-02-06 23:00:58 --> UTF-8 Support Enabled
INFO - 2016-02-06 23:00:58 --> Utf8 Class Initialized
INFO - 2016-02-06 23:00:58 --> URI Class Initialized
INFO - 2016-02-06 23:00:58 --> Router Class Initialized
INFO - 2016-02-06 23:00:58 --> Output Class Initialized
INFO - 2016-02-06 23:00:58 --> Security Class Initialized
DEBUG - 2016-02-06 23:00:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 23:00:58 --> Input Class Initialized
INFO - 2016-02-06 23:00:58 --> Language Class Initialized
INFO - 2016-02-06 23:00:59 --> Language Class Initialized
INFO - 2016-02-06 23:00:59 --> Config Class Initialized
INFO - 2016-02-06 23:00:59 --> Loader Class Initialized
INFO - 2016-02-06 23:00:59 --> Helper loaded: form_helper
INFO - 2016-02-06 23:00:59 --> Helper loaded: url_helper
INFO - 2016-02-06 23:00:59 --> Helper loaded: general_helper
INFO - 2016-02-06 23:00:59 --> Database Driver Class Initialized
INFO - 2016-02-06 23:00:59 --> Form Validation Class Initialized
DEBUG - 2016-02-06 23:00:59 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 23:00:59 --> Email Class Initialized
INFO - 2016-02-06 23:00:59 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 23:00:59 --> Helper loaded: cookie_helper
INFO - 2016-02-06 23:00:59 --> Helper loaded: language_helper
INFO - 2016-02-06 23:00:59 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 23:00:59 --> Model Class Initialized
INFO - 2016-02-06 23:00:59 --> Helper loaded: inflector_helper
INFO - 2016-02-06 23:00:59 --> Model Class Initialized
INFO - 2016-02-06 23:00:59 --> Helper loaded: date_helper
INFO - 2016-02-06 23:00:59 --> Controller Class Initialized
INFO - 2016-02-06 23:00:59 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 23:00:59 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 23:00:59 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 23:00:59 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 23:00:59 --> Final output sent to browser
DEBUG - 2016-02-06 23:00:59 --> Total execution time: 0.5877
INFO - 2016-02-06 23:01:00 --> Config Class Initialized
INFO - 2016-02-06 23:01:00 --> Hooks Class Initialized
DEBUG - 2016-02-06 23:01:00 --> UTF-8 Support Enabled
INFO - 2016-02-06 23:01:00 --> Utf8 Class Initialized
INFO - 2016-02-06 23:01:00 --> URI Class Initialized
INFO - 2016-02-06 23:01:00 --> Router Class Initialized
INFO - 2016-02-06 23:01:00 --> Output Class Initialized
INFO - 2016-02-06 23:01:00 --> Security Class Initialized
DEBUG - 2016-02-06 23:01:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 23:01:00 --> Input Class Initialized
INFO - 2016-02-06 23:01:00 --> Language Class Initialized
INFO - 2016-02-06 23:01:00 --> Language Class Initialized
INFO - 2016-02-06 23:01:00 --> Config Class Initialized
INFO - 2016-02-06 23:01:00 --> Loader Class Initialized
INFO - 2016-02-06 23:01:00 --> Helper loaded: form_helper
INFO - 2016-02-06 23:01:00 --> Helper loaded: url_helper
INFO - 2016-02-06 23:01:00 --> Helper loaded: general_helper
INFO - 2016-02-06 23:01:00 --> Database Driver Class Initialized
INFO - 2016-02-06 23:01:00 --> Form Validation Class Initialized
DEBUG - 2016-02-06 23:01:00 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 23:01:00 --> Email Class Initialized
INFO - 2016-02-06 23:01:00 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 23:01:00 --> Helper loaded: cookie_helper
INFO - 2016-02-06 23:01:00 --> Helper loaded: language_helper
INFO - 2016-02-06 23:01:00 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 23:01:00 --> Model Class Initialized
INFO - 2016-02-06 23:01:00 --> Helper loaded: inflector_helper
INFO - 2016-02-06 23:01:01 --> Model Class Initialized
INFO - 2016-02-06 23:01:01 --> Helper loaded: date_helper
INFO - 2016-02-06 23:01:01 --> Controller Class Initialized
DEBUG - 2016-02-06 23:01:01 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/models/Users_m.php
INFO - 2016-02-06 23:01:01 --> Model Class Initialized
INFO - 2016-02-06 23:01:01 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 23:01:01 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 23:01:01 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/create_group.php
DEBUG - 2016-02-06 23:01:01 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 23:01:01 --> Final output sent to browser
DEBUG - 2016-02-06 23:01:01 --> Total execution time: 0.5991
INFO - 2016-02-06 23:01:11 --> Config Class Initialized
INFO - 2016-02-06 23:01:11 --> Hooks Class Initialized
DEBUG - 2016-02-06 23:01:11 --> UTF-8 Support Enabled
INFO - 2016-02-06 23:01:11 --> Utf8 Class Initialized
INFO - 2016-02-06 23:01:11 --> URI Class Initialized
INFO - 2016-02-06 23:01:11 --> Router Class Initialized
INFO - 2016-02-06 23:01:11 --> Output Class Initialized
INFO - 2016-02-06 23:01:11 --> Security Class Initialized
DEBUG - 2016-02-06 23:01:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2016-02-06 23:01:11 --> Input Class Initialized
INFO - 2016-02-06 23:01:11 --> Language Class Initialized
INFO - 2016-02-06 23:01:11 --> Language Class Initialized
INFO - 2016-02-06 23:01:11 --> Config Class Initialized
INFO - 2016-02-06 23:01:11 --> Loader Class Initialized
INFO - 2016-02-06 23:01:11 --> Helper loaded: form_helper
INFO - 2016-02-06 23:01:11 --> Helper loaded: url_helper
INFO - 2016-02-06 23:01:11 --> Helper loaded: general_helper
INFO - 2016-02-06 23:01:11 --> Database Driver Class Initialized
INFO - 2016-02-06 23:01:11 --> Form Validation Class Initialized
DEBUG - 2016-02-06 23:01:11 --> Config file loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\config/ion_auth.php
INFO - 2016-02-06 23:01:11 --> Email Class Initialized
INFO - 2016-02-06 23:01:11 --> Language file loaded: language/dutch/ion_auth_lang.php
INFO - 2016-02-06 23:01:11 --> Helper loaded: cookie_helper
INFO - 2016-02-06 23:01:11 --> Helper loaded: language_helper
INFO - 2016-02-06 23:01:11 --> Session: Class initialized using 'files' driver.
INFO - 2016-02-06 23:01:11 --> Model Class Initialized
INFO - 2016-02-06 23:01:11 --> Helper loaded: inflector_helper
INFO - 2016-02-06 23:01:11 --> Model Class Initialized
INFO - 2016-02-06 23:01:11 --> Helper loaded: date_helper
INFO - 2016-02-06 23:01:11 --> Controller Class Initialized
INFO - 2016-02-06 23:01:11 --> Language file loaded: language/dutch/auth_lang.php
DEBUG - 2016-02-06 23:01:11 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/nav_view.php
DEBUG - 2016-02-06 23:01:11 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\modules/auth/views/index.php
DEBUG - 2016-02-06 23:01:11 --> File loaded: C:\Users\Menno\Google Drive\xampp\htdocs\pluto.local\application\views\layouts/master_view.php
INFO - 2016-02-06 23:01:11 --> Final output sent to browser
DEBUG - 2016-02-06 23:01:11 --> Total execution time: 0.5618
