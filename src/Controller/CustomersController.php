<?php
namespace App\Controller;

use Cake\Core\Configure;

class CustomersController extends AppController
{
    public function login() {
        include ('Bus/Customers/login.php');
    }
}
