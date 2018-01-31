<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    protected $fillable = ['code_survey','question','code_quest'];

    public function answer()
    {
    	return $this->hasMany(answer::class);
    }
}
