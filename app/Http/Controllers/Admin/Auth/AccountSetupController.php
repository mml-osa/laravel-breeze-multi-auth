<?php
	
	namespace App\Http\Controllers\Admin\Auth;
	
	use App\Http\Controllers\Controller;
	use App\Models\Admin;
	use App\Models\Admin\AdminProfile;
	use App\Models\Student;
	use App\Providers\RouteServiceProvider;
	use Illuminate\Auth\Events\Registered;
	use Illuminate\Http\RedirectResponse;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\Auth;
	use Illuminate\Support\Facades\Hash;
	use Illuminate\Validation\Rules;
	use Illuminate\View\View;
	
	class AccountSetupController extends Controller
	{
		/**
		 * Display the registration view.
		 */
		public function index(): View
		{
			return view('admin.auth.setup');
		}
		
		/**
		 * Handle an incoming registration request.
		 *
		 * @throws \Illuminate\Validation\ValidationException
		 */
		public function store(Request $request): RedirectResponse
		{
			$request->validate([
				'username' => ['required', 'string', 'max:255'],
				'first_name' => ['required', 'string', 'max:255'],
				'last_name' => ['required', 'string', 'max:255'],
				'other_name' => ['string', 'max:255'],
				'password' => ['required', 'confirmed', Rules\Password::defaults()],
			]);
			
			$adminId = Admin::where('id', Auth::user()->id)->first();
			
			$adminProfile = AdminProfile::create([
				'user_id' => $adminId->id,
				'first_name' => $request->first_name,
				'last_name' => $request->last_name,
				'other_name' => $request->other_name,
				'phone' => $request->phone,
			]);
			
			if ($adminProfile) {
				$adminId->update([
					'username' => $request->username,
					'password' => Hash::make($request->password),
					'is_admin' => true,
					'account' => $request->account,
				]);
				
				if ($adminId) {
					$adminId->update([
						'setup' => true,
					]);
				}
			}
			
			return redirect(RouteServiceProvider::ADMIN_DASHBOARD);
		}
	}
