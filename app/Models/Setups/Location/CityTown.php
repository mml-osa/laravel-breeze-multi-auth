<?php
	
	namespace App\Models\Setups\Location;
	
	use App\Traits\CreatedUpdatedBy;
	use App\Traits\UuidGenerator;
	use Illuminate\Database\Eloquent\Factories\HasFactory;
	use Illuminate\Database\Eloquent\Model;
	
	class CityTown extends Model
	{
		use UuidGenerator, CreatedUpdatedBy;
		
		protected $table = "ac_city_town";
		
		/**
		 * The attributes that are mass assignable.
		 *
		 * @var array<int, string>
		 */
		protected $fillable = [
			'name',
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
		
		];
		
		/**
		 * The attributes that should be cast.
		 *
		 * @var array<string, string>
		 */
		protected $casts = [
		
		];
	}
