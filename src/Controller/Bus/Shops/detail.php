<?php
use Cake\Core\Configure;
use App\Lib\Api;

$data = array();
$limit = 8;
$total = 0;
$param = $this->getParams(array(
    'limit' => $limit
));

if (!empty($url)) {
    $param['url'] = $url;
    $data = Api::call(Configure::read('API.url_admins_getdetailforfront'), $param);
    $total = !empty($data['products']['total']) ? $data['products']['total'] : 0;
}
$this->set(compact(
    'data',
    'limit',
    'total'
));