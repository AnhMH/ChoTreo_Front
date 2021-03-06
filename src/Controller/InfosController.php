<?php

namespace App\Controller;

use Cake\Event\Event;
use Cake\Core\Configure;

/**
 * Show info
 */
class InfosController extends AppController {
    /**
     * Before filter event
     * @param Event $event
     */
    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow();
    }
    
    public function index() {
        phpinfo();
        exit;
    }
    
    public function conf($name = '') {
        if (!empty($name)) {
            try {
                $conf = Configure::read($name);
                echo '<pre>';
                print_r($conf);
            } catch (\Exception $ex) {
                
            }
        }
        exit;
    }
    
    public function clearcache() {
//        include_once ROOT . "/config/auth.php";
        
        // Delete language cache
        $files = glob(ROOT . '/tmp/cache/persistent/*'); // get all file names
        foreach ($files as $file) { // iterate files
            if (is_file($file)) {
                @unlink($file); // delete file
            }
        }
        
        echo 'Done';
        exit;
    }
}
