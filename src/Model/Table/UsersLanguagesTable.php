<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class UsersLanguagesTable extends Table {

    public function initialize(array $config) {
        $this->addBehavior('Timestamp');
        $this->belongsTo('Users');
        $this->belongsTo('Languages');
    }

}
