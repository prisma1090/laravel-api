<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ServiceHeaders extends Model
{
    protected $table = 'service_headers';
	protected $primaryKey = 'id';
	protected $guarded = [''];
}
