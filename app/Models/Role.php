<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	protected $table = 'roles';

	public function admin()
	{
		return $this->belongsTo('App\Models\Admin');
	}
	public function user()
	{
		return $this->belongsTo('App\Models\User');
	}
}