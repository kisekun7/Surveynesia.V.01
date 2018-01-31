<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class answer extends Model
{
    public $table = "answers";
    public $fillable = ['question_id','answer'];

    public function question()
	{
		return $this->belongsTo(question::class);
	}
}
