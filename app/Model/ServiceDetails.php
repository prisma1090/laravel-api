<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ServiceDetails extends Model
{
    protected $table = 'service_details';
	protected $primaryKey = 'id';
	protected $guarded = [''];

	public function header()
	{
		return $this->belongsTo('App\Model\ServiceHeaders');
	}

}
