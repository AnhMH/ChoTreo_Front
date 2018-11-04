<?php
namespace App\Controller;

use Cake\Core\Configure;

class CatesController extends AppController
{
    public function detail($url = '') {
        include ('Bus/Cates/detail.php');
    }
}
