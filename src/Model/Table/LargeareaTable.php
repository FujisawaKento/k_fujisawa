<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class LargeareaTable extends Table
{
    public function initialize(array $config)
    {
        $this->belongsToMany('City');
    }
}
