<?php
namespace App\Controller;

class CityController extends AppController {
    public function index(){
        $results = $this->City->find('all');
        $this->set('results',$results);
    }
}

