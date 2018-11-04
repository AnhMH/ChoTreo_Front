<?php

/**
 * API's Url
 */
use Cake\Core\Configure;

Configure::write('API.Timeout', 60);
Configure::write('API.secretKey', 'chotreolethuy');

Configure::write('API.url_settings_getfrontdata', 'settings/getfrontdata');
Configure::write('API.url_settings_gethomedata', 'settings/gethomedata');

Configure::write('API.url_products_getdetailforfront', 'products/getdetailforfront');
Configure::write('API.url_products_list', 'products/list');

Configure::write('API.url_cates_getdetailforfront', 'cates/getdetailforfront');