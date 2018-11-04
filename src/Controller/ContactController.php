<?php
namespace App\Controller;

use Cake\Core\Configure;

class ContactController extends AppController
{
    public function index() {
        include ('Bus/Contact/index.php');
    }
}
