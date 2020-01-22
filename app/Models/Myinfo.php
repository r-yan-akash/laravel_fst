<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Myinfo extends Model
{
    protected $fillable=['name','roll','department_id'];
    public function department(){
        return $this->belongsTo(Department::class);
    }
}
