<?php
use Cake\Core\Configure;
use App\Lib\Api;

$data = array();

if (!empty($url)) {
    $data = Api::call(Configure::read('API.url_admins_getdetailforfront'), array('url' => $url));
}
$this->set(compact(
    'data'
));