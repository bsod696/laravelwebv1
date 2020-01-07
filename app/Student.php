<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
   	protected $table = 'students';
	protected $fillable = [
		'name',
		'nric_number',
		'course_code',
		'current_semester',
		'studentid',
	];
}
