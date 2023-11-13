<?php
	
	namespace App\Http\Controllers\Student\App\Profile;
	
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
	
	class ProfileController extends Controller
	{
		/**
		 * Display the user's profile form.
		 */
		public function index(Request $request): View
		{
			return view('student.app.profile.index', [
				'user' => $request->user()
			]);
		}
		
		/**
		 * Save user profile form.
		 */
		public function store(Request $request, $id): RedirectResponse
		{
//        try {
			$studentProfile = StudentProfile::create([
				'user_id' => $id,
				'first_name' => $request->first_name,
				'last_name' => $request->last_name,
				'other_name' => $request->other_name,
				'nationality_id' => $request->nationality_id,
				'residential_address' => $request->residential_address,
				'gps_code' => $request->gps_code,
				'phone_primary' => $request->phone_primary,
				'phone_alternative' => $request->phone_alternative,
				'city_id' => $request->city_id,
				'region_id' => $request->region_id
			]);
			
			if ($studentProfile) {
				$studentProfile = StudentAcademic::create([
					'user_id' => $id,
					'shs_id' => $request->shs_id,
					'shs_course_id' => $request->shs_course_id,
					'shs_core_id' => $request->shs_core_id,
					'shs_elective_id' => $request->shs_elective_id,
				]);
				
				if ($studentProfile) {
					$user = Student::where('id', $id)->update([
						'setup' => true,
						'active' => true,
					]);
				}
			}
			return redirect()->route('dashboard')->with('success', 'Entry has been saved successfully');
//        } catch (\Exception $exception) { return redirect()->back()->withInput($request->all())->with("error", "There was a problem saving new entry. Please check all fields and try again");}
		}
		
		/**
		 * Display the user's profile form.
		 */
		public function edit(Request $request): View
		{
			return view('student.app.profile.edit', [
				'user' => $request->user(),
			]);
		}
		
		/**
		 * Update the user's profile information.
		 */
		public function update(ProfileUpdateRequest $request): RedirectResponse
		{
			$request->user()->fill($request->validated());
			
			if ($request->user()->isDirty('email')) {
				$request->user()->email_verified_at = null;
			}
			
			$request->user()->save();
			
			return Redirect::route('profile.edit')->with('status', 'profile-updated');
		}
		
		/**
		 * Delete the user's account.
		 */
		public function destroy(Request $request): RedirectResponse
		{
			$request->validateWithBag('userDeletion', [
				'password' => ['required', 'current_password'],
			]);
			
			$user = $request->user();
			
			Auth::logout();
			
			$user->delete();
			
			$request->session()->invalidate();
			$request->session()->regenerateToken();
			
			return Redirect::to('/university/login')->with('status', 'account-deleted');
		}
	}
