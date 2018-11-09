<?php
use Cake\Core\Configure;
use App\Lib\Api;

$data = array();
$limit = 20;
$param = $this->getParams(array(
    'limit' => $limit
));
$data = Api::call(Configure::read('API.url_coupons_list'), $param);
$total = !empty($data['total']) ? $data['total'] : 0;
$coupons = !empty($data['data']) ? $data['data'] : array();
$this->set(compact(
        'data',
        'limit',
        'total',
        'coupons',
        'param'
    ));