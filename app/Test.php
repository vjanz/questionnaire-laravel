<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{

    public function questionnaires(){
        return $this->hasMany(Questionnaire::class);
    }
}
