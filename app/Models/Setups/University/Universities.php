<?php

namespace App\Models\Setups\University;

use App\Traits\CreatedUpdatedBy;
use App\Traits\UuidGenerator;
use Illuminate\Database\Eloquent\Model;

class Universities extends Model
{
	use UuidGenerator, CreatedUpdatedBy;
	
	protected $table = "ac_university";

//	public $timestamps = false;
	
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array<int, string>
	 */
	protected $fillable = [
		'name',
		'category_id',
		'address',
		'city_id',
		'region_id',
		'email',
		'phone',
		'phone_2',
		'active',
		'created_by',
		'updated_by'
	];
	
	/**
	 * The attributes that should be hidden for serialization.
	 *
	 * @var array<int, string>
	 */
	protected $hidden = [
	
	];
	
	/**
	 * The attributes that should be cast.
	 *
	 * @var array<string, string>
	 */
	protected $casts = [
	
	];
}
