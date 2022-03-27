<?php
namespace App\Controller;

class LargeareaController extends AppController {
    public function index(){
        $results = $this->Largearea->find('all');
        $this->set('results',$results);
        $this->loadModel('City');
        $users = $this->City->find('all');
        $this->set('city',$users);
    }

}
