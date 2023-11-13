<?php

namespace App\Models\Admin;

use App\Models\Setups\Location\CityTown;
use App\Models\Setups\Location\RegionNew;
use App\Traits\CreatedUpdatedBy;
use App\Traits\UuidGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Lwwcas\LaravelCountries\Models\Country;

class AdminProfile extends Model
{
	use UuidGenerator, CreatedUpdatedBy;
	
	protected $table = "ac_admin_profile";
	
//	public $timestamps = false;
	
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array<int, string>
	 */
	protected $fillable = [
		'user_id',
		'first_name',
		'last_name',
		'other_name',
		'phone',
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
