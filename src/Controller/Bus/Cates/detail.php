<?php
use Cake\Core\Configure;
use App\Lib\Api;

$data = array();
$limit = 16;
$sortBy = array(
    0 => 'Sắp xếp mặc định',
    'sell_price-asc' => 'Giá thấp đến cao',
    'sell_price-desc' => 'Giá cao đến thấp',
    'is_feature-desc' => 'Phổ biến',
    'is_hot-desc' => 'Bán chạy',
    'is_new-desc' => 'Mới nhất',
);
$limitData = array(
    8 => 'Hiển thị 8 sản phẩm',
    16 => 'Hiển thị 16 sản phẩm',
    32 => 'Hiển thị 32 sản phẩm',
);
$param = $this->getParams(array(
    'limit' => $limit,
    'disable' => 0
));
if (!empty($url)) {
    $param['url'] = $url;
    $data = Api::call(Configure::read('API.url_cates_getdetailforfront'), $param);
}
$total = !empty($data['products']['total']) ? $data['products']['total'] : 0;
$products = !empty($data['products']['data']) ? $data['products']['data'] : array();
$cate = !empty($data['cate']) ? $data['cate'] : array();
unset($param['disable']);
unset($param['url']);
$this->set(compact(
        'data',
        'limit',
        'total',
        'products',
        'cate',
        'sortBy',
        'limitData',
        'param',
        'url'
    ));