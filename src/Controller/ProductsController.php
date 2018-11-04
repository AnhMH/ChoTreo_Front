<?php
namespace App\Controller;

use Cake\Core\Configure;

class ProductsController extends AppController
{
    public function detail($url = '') {
        include ('Bus/Products/detail.php');
    }
    
    public function search() {
        include ('Bus/Products/search.php');
    }
}
