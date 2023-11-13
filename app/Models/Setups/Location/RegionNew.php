<?php

namespace App\Models\Setups\Location;

use App\Traits\CreatedUpdatedBy;
use App\Traits\UuidGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Lwwcas\LaravelCountries\Models\Country;

class RegionNew extends Model
{
    use UuidGenerator,CreatedUpdatedBy;
	
	protected $table = "ac_region_new";

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array<int, string>
	 */
	protected $fillable = [
		'name',
		'region_id',
		'slug',
		'capital',
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
		'password',
		'remember_token',
	];

	/**
	 * The attributes that should be cast.
	 *
	 * @var array<string, string>
	 */
	protected $casts = [
		'email_verified_at' => 'datetime',
		'password' => 'hashed',
	];

    //Location Region Relations
    public function regionMain(){
        return $this->belongsTo(Region::class, 'region_id', 'id');
    }
}
