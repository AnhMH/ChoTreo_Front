<?php
namespace App\Controller;

use Cake\Event\Event;

class CustomersController extends AppController
{
     /**
     * Before filter event
     * @param Event $event
     */
    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow();
        if ($this->isAuthorized()) {
            return $this->redirect($this->BASE_URL);
        }
    }
    
    public function login() {
        include ('Bus/Customers/login.php');
    }
    
    public function register() {
        include ('Bus/Customers/register.php');
    }
}
