<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    return $this belongsTo(Companies::class);
}
