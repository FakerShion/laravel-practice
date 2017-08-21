<?php

namespace IntelliHR;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $primaryKey = 'email';
    //
    public function user(){

        return $this->hasMany(People::class);

    }


}
