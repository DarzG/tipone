<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
	protected $guarded=[];
    public function user()
	{
		return $this->hasMany(Employees::class);
	}

}
