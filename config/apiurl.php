<?php

/**
 * API's Url
 */
use Cake\Core\Configure;

Configure::write('API.Timeout', 60);
Configure::write('API.secretKey', 'chotreolethuy');

Configure::write('API.url_settings_getfrontdata', 'settings/getfrontdata');
Configure::write('API.url_settings_gethomedata', 'settings/gethomedata');