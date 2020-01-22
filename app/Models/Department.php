<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function myinfos(){
        return $this->hasMany(Myinfo::class);
    }
}
