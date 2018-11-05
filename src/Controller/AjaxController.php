<?php

/* 
 * Ajax process
 */

namespace App\Controller;
use Cake\Event\Event;

class AjaxController extends AppController {
    /**
     * Initialize
     */
    public function initialize() {
        parent::initialize();
       // $this->autoRender = false;
    }
    
    /**
     * Before filter event
     * @param Event $event
     */
    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow();
    }
    
    /**
     * Profit list
     */
    public function addtocart() {
        $this->autoRender = false;
        include ('Bus/Ajax/addtocart.php');
    }
}
