<?php
	
	namespace App\Models\Student;
	
	use App\Models\Setups\SeniorHigh\SeniorHighCourse;
	use App\Models\Setups\SeniorHigh\SeniorHighElective;
	use App\Models\Setups\SeniorHigh\SeniorHighSchool;
	use App\Models\Student;
	use App\Traits\CreatedUpdatedBy;
	use App\Traits\UuidGenerator;
	use Illuminate\Database\Eloquent\Factories\HasFactory;
	use Illuminate\Database\Eloquent\Model;
	use Illuminate\Notifications\Notifiable;
	use Laravel\Sanctum\HasApiTokens;
	
	class StudentAcademic extends Model
	{
		use UuidGenerator, CreatedUpdatedBy;
		
		protected $table = "ac_student_academic";
		
		/**
		 * The attributes that are mass assignable.
		 *
		 * @var array<int, string>
		 */
		protected $fillable = [
			'user_id',
			'shs_id',
			'shs_course_id',
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
		public function academicUser()
		{
			return $this->hasOne(Student::class, 'id', 'user_id');
		}
		
		//Student Profile CityTown Relations
		public function academicSHS()
		{
			return $this->hasOne(SeniorHighSchool::class, 'id', 'shs_id');
		}
		
		//Student Profile CityTown Relations
		public function academicCourse()
		{
			return $this->hasOne(SeniorHighCourse::class, 'id', 'shs_course_id');
		}
		
		//Student Profile CityTown Relations
		public function academicCore()
		{
			return $this->hasMany(SeniorHighElective::class, 'id', 'shs_core_id');
		}
		
		//Student Profile CityTown Relations
		public function academicElective()
		{
			return $this->hasMany(SeniorHighElective::class, 'id', 'shs_elective_id');
		}
	}
