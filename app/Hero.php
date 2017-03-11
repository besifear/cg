<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{

	public function photos(){
		return $this->hasMany('App\Hero_Photos');
	}

	public function thumbnail(){
		return $this->hasOne('App\Hero_Photo')->where('name','=','thumbnail');
	}

    protected $fillable=[
    'name',
    'nickname',
    'health',
    'mana',
    'damage',
    'armour'
    ];
}
