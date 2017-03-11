<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hero_Photo extends Model
{
	protected $fillable = [
		'name',
		'path',
		'hero_id'
	];

	protected $table = 'hero_photos';
    //
}
