<?php
	
	namespace App\Models\Student;
	
	use App\Models\Setups\Location\CityTown;
	use App\Models\Setups\Location\Region;
	use App\Models\Setups\Location\RegionNew;
	use App\Traits\CreatedUpdatedBy;
	use App\Traits\UuidGenerator;
	use Illuminate\Database\Eloquent\Model;
	use Illuminate\Notifications\Notifiable;
	use Laravel\Sanctum\HasApiTokens;
	use Lwwcas\LaravelCountries\Models\Country;
	
	class StudentProfile extends Model
	{
		use UuidGenerator, CreatedUpdatedBy;
		
		protected $table = "ac_student_profile";
		
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
			'nationality_id',
			'residential_address',
			'gps_code',
			'phone',
			'phone_2',
			'city_id',
			'region_id',
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
		
		//Student Profile CityTown Relations
		public function profileCity()
		{
			return $this->hasOne(CityTown::class, 'id', 'city_id');
		}
		
		//Student Profile CityTown Relations
		public function profileRegion()
		{
			return $this->hasOne(RegionNew::class, 'id', 'region_id');
		}
		
		//Student Profile CityTown Relations
		public function profileNational()
		{
			return $this->hasOne(Country::class, 'uuid', 'nationality_id');
		}
	}
