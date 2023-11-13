<?php
	
	namespace App\Http\Controllers\Student\Auth;
	
	use App\Http\Controllers\Controller;
	use App\Http\Requests\ProfileUpdateRequest;
	use App\Models\Student\StudentAcademic;
	use App\Models\Student\StudentProfile;
	use App\Models\Student;
	use Illuminate\Http\RedirectResponse;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\Auth;
	use Illuminate\Support\Facades\Redirect;
	use Illuminate\View\View;
	
	class AccountSetupController extends Controller
	{
		/**
		 * Display the user's profile form.
		 */
		public function index()
		{
			return view('student.auth.setup');
		}
		
		/**
		 * Save user profile form.
		 */
		public function store(Request $request): RedirectResponse
		{
			$request->validate([
				'first_name' => ['required', 'string', 'max:151'],
				'last_name' => ['required', 'string', 'max:151'],
				'other_name' => ['string', 'max:151'],
				'nationality_id' => ['required','uuid', 'max:36'],
				'residential_address' => ['required','string', 'max:255'],
				'gps_code' => ['string', 'max:15'],
				'phone' => ['required','string', 'max:20','unique:ac_student_profile'],
				'phone_2' => ['string', 'max:20'],
				'city_id' => ['required','uuid','max:36'],
				'region_id' => ['required','uuid', 'max:36'],
				'shs_id' => ['required','uuid', 'max:36'],
				'shs_course_id' => ['required','uuid', 'max:36'],
			]);
			
			try {
				$studentProfile = StudentProfile::create([
					'user_id' => Auth::user()->id,
					'first_name' => $request->first_name,
					'last_name' => $request->last_name,
					'other_name' => $request->other_name,
					'nationality_id' => $request->nationality_id,
					'residential_address' => $request->residential_address,
					'gps_code' => $request->gps_code,
					'phone' => $request->phone,
					'phone_2' => $request->phone_2,
					'city_id' => $request->city_id,
					'region_id' => $request->region_id
				]);
				
				if ($studentProfile) {
					$studentProfile = StudentAcademic::create([
						'user_id' => Auth::user()->id,
						'shs_id' => $request->shs_id,
						'shs_course_id' => $request->shs_course_id,
					]);
					
					if ($studentProfile) {
						$user = Student::where('id', Auth::user()->id)->update([
							'setup' => true,
							'active' => true,
						]);
					}
				}
				
				return redirect()->route('student.dashboard')->with('success', 'Your account has been setup successfully');
			} catch (\Exception $exception) {
				return redirect()->back()->withInput($request->all())->with("error", "There was a problem saving new entry. Please check all fields and try again");
			}
		}
	}
