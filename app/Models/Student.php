<?php
	
	namespace App\Models;
	
	// use Illuminate\Contracts\Auth\MustVerifyEmail;
	use App\Models\Student\StudentAcademic;
	use App\Models\Student\StudentProfile;
	use App\Traits\UuidGenerator;
	use Illuminate\Contracts\Auth\MustVerifyEmail;
	use Illuminate\Database\Eloquent\Factories\HasFactory;
	use Illuminate\Foundation\Auth\User as Authenticatable;
	use Illuminate\Notifications\Notifiable;
	use Laravel\Sanctum\HasApiTokens;
	
	class Student extends Authenticatable implements MustVerifyEmail
	{
		use HasApiTokens, HasFactory, Notifiable, UuidGenerator;
		
		/**
		 * The attributes that are mass assignable.
		 *
		 * @var array<int, string>
		 */
		protected $fillable = [
			'username',
			'email',
			'password',
			'is_student',
			'account',
			'setup',
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
		
		//Student Profile Relations
		public function studentProfile()
		{
			return $this->hasOne(StudentProfile::class, 'user_id', 'id');
		}
		
		//Student Profile CityTown Relations
		public function studentAcademic()
		{
			return $this->hasOne(StudentAcademic::class, 'user_id', 'id');
		}
	}
