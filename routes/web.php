<?php
	
	use App\Http\Controllers\Admin\App\Accounts\AdminController;
	use App\Http\Controllers\Admin\App\Accounts\StudentController;
	use App\Http\Controllers\Admin\App\Setup\Courses\SeniorHighCoreController;
	use App\Http\Controllers\Admin\App\Setup\Courses\SeniorHighCourseController;
	use App\Http\Controllers\Admin\App\Setup\Courses\SeniorHighElectiveController;
	use App\Http\Controllers\Admin\App\Setup\Courses\UniversityCourseController;
	use App\Http\Controllers\Admin\App\Setup\Gender\GenderController;
	use App\Http\Controllers\Admin\App\Setup\Location\CityController;
	use App\Http\Controllers\Admin\App\Setup\Location\RegionController;
	use App\Http\Controllers\Admin\App\Setup\Location\RegionNewController;
	use App\Http\Controllers\Admin\App\Setup\Scheme\UniversitySchemeController;
	use App\Http\Controllers\Admin\App\Setup\Schools\SeniorHighController;
	use App\Http\Controllers\Admin\App\Setup\Schools\UniversityController;
	use Illuminate\Support\Facades\Route;
	
	/*
	|--------------------------------------------------------------------------
	| Web Routes
	|--------------------------------------------------------------------------
	|
	| Here is where you can register web routes for your application. These
	| routes are loaded by the RouteServiceProvider and all of them will
	| be assigned to the "web" middleware group. Make something great!
	|
	*/
	
	//	WEB ROUTES GROUP
	Route::get('/', function () {return view('web.welcome');})->name('home');
	Route::get('/contact', function () {return view('web.contact');})->name('contact');
	
	//	STUDENT ROUTES GROUP
	require __DIR__ . '/auth.php';
	Route::group(['prefix' => 'student', 'middleware' => ['auth', 'verified'], 'namespace' => 'App\Http\Controllers\Student'], function () {
		Route::group(['namespace' => 'Auth'], function () {
			Route::get('/account/setup', 'AccountSetupController@index')->name('student.account.setup');
			Route::post('/account/setup/store', 'AccountSetupController@store')->name('student.account.setup.store');
		});
		
		Route::group(['middleware' => ['setup'], 'namespace' => 'App'], function () {
			Route::get('/dashboard', 'Dashboard\DashboardController@index')->name('student.dashboard');
			Route::get('/help', 'Help\HelpController@index')->name('student.help');
			
			/*============ STUDENT PROFILE ============*/
			Route::group(['prefix' => 'profile'], function () {
				Route::get('/', 'Profile\ProfileController@index')->name('student.profile');
			});
			
			Route::group(['prefix' => 'application'], function () {
				Route::get('/university', 'Application\ApplicationController@index')->name('student.university.application');
				Route::post('/university/create', 'Application\ApplicationController@create')->name('student.university.application.create');
				Route::get('/university/store', 'Application\ApplicationController@store')->name('student.university.application.roles');
				Route::get('/university/destroy/{id}', 'Application\ApplicationController@destroy')->name('student.university.application.destroy');
			});
			
			Route::group(['prefix' => 'eligibility'], function () {
				Route::get('/', 'Eligibility\EligibilityController@index')->name('student.university.eligibility');
				Route::get('/check-code/', 'Eligibility\CheckCodeController@index')->name('student.university.check-code');
				Route::get('/university/store', 'Application\ApplicationController@store')->name('student.university.application.roles');
				Route::get('/university/destroy/{id}', 'Application\ApplicationController@destroy')->name('student.university.application.destroy');
			});
		});
	});
	
	
	//	ADMIN ROUTES GROUP
	require __DIR__ . '/admin.php';
	Route::group(['prefix' => 'admin', 'middleware' => ['admin.auth:admin'], 'namespace' => 'App\Http\Controllers\Admin'], function () {
		Route::group(['namespace' => 'Auth'], function () {
			Route::get('/account/setup', 'AccountSetupController@index')->name('admin.account.setup');
			Route::post('/account/setup/store', 'AccountSetupController@store')->name('admin.account.setup.store');
		});
		
		Route::group(['middleware' => ['setup'],  'namespace' => 'App'], function (){
			Route::get('/', 'Profile\ProfileController@index')->name('admin.profile');
			Route::get('/dashboard', 'Dashboard\DashboardController@index')->name('admin.dashboard');

			Route::group(['prefix' => 'profile'], function () {
				Route::get('/', 'Profile\ProfileController@index')->name('admin.profile');
			});
			
			Route::group(['prefix' => 'users'], function () {
				Route::get('/admin/manage', [AdminController::class, 'index'])->name('admin.users.manage');
				Route::post('/admin/create', [AdminController::class, 'create'])->name('admin.users.create');
				Route::get('/admin/roles', [AdminController::class, 'roles'])->name('admin.users.roles');
				Route::post('/admin/destroy/{id}', [AdminController::class, 'destroy'])->name('admin.users.destroy');
				
				Route::get('/student/manage', [StudentController::class, 'index'])->name('admin.students');
				Route::get('/university/manage', [UniversityController::class, 'index'])->name('admin.institutions');
			});
			
			//ADMIN SETUPS ROUTES
			Route::group(['prefix' => 'setups'], function () {
				
				Route::group(['prefix' => 'gender'], function () {
					//GENDER SETUPS ROUTES
					Route::get('/', [GenderController::class, 'index'])->name('admin.setups.gender.index');
					Route::get('/create', [GenderController::class, 'create'])->name('admin.setups.gender.create');
					Route::post('/store', [GenderController::class, 'store'])->name('admin.setups.gender.store');
					Route::post('/update/{id}', [GenderController::class, 'update'])->name('admin.setups.gender.update');
					Route::post('/active/{id}', [GenderController::class, 'active'])->name('admin.setups.gender.active');
					Route::post('/destroy/{id}', [GenderController::class, 'destroy'])->name('admin.setups.gender.destroy');
				});
				
				Route::group(['prefix' => 'location'], function () {
					//REGION SETUPS ROUTES
					Route::get('/region', [RegionController::class, 'index'])->name('admin.setups.region.index');
					Route::get('/region/create', [RegionController::class, 'create'])->name('admin.setups.region.create');
					Route::post('/region/store', [RegionController::class, 'store'])->name('admin.setups.region.store');
					Route::post('/region/update/{id}', [RegionController::class, 'update'])->name('admin.setups.region.update');
					Route::post('/region/active/{id}', [RegionController::class, 'active'])->name('admin.setups.region.active');
					Route::post('/region/destroy/{id}', [RegionController::class, 'destroy'])->name('admin.setups.region.destroy');
					
					//REGION NEW SETUPS ROUTES
					Route::get('/region-new', [RegionNewController::class, 'index'])->name('admin.setups.region-new.index');
					Route::get('/region-new/create', [RegionNewController::class, 'create'])->name('admin.setups.region-new.create');
					Route::post('/region-new/store', [RegionNewController::class, 'store'])->name('admin.setups.region-new.store');
					Route::post('/region-new/update/{id}', [RegionNewController::class, 'update'])->name('admin.setups.region-new.update');
					Route::post('/region-new/active/{id}', [RegionNewController::class, 'active'])->name('admin.setups.region-new.active');
					Route::post('/region-new/destroy/{id}', [RegionNewController::class, 'destroy'])->name('admin.setups.region-new.destroy');
					
					//CITY TOWNSHIP SETUPS ROUTES
					Route::get('/city-town', [CityController::class, 'index'])->name('admin.setups.city-town.index');
					Route::get('/city-town/create', [CityController::class, 'create'])->name('admin.setups.city-town.create');
					Route::post('/city-town/store', [CityController::class, 'store'])->name('admin.setups.city-town.store');
					Route::post('/city-town/update/{id}', [CityController::class, 'update'])->name('admin.setups.city-town.update');
					Route::post('/city-town/active/{id}', [CityController::class, 'active'])->name('admin.setups.city-town.active');
					Route::post('/city-town/destroy/{id}', [CityController::class, 'destroy'])->name('admin.setups.city-town.destroy');
				});
				
				Route::group(['prefix' => 'senior-high'], function () {
					//SHS SCHOOLS SETUPS ROUTES
					Route::get('/', [SeniorHighController::class, 'index'])->name('admin.setups.senior-high.index');
					Route::get('/create', [SeniorHighController::class, 'create'])->name('admin.setups.senior-high.create');
					Route::post('/store', [SeniorHighController::class, 'store'])->name('admin.setups.senior-high.store');
					Route::post('/update/{id}', [SeniorHighController::class, 'update'])->name('admin.setups.senior-high.update');
					Route::post('/active/{id}', [SeniorHighController::class, 'active'])->name('admin.setups.senior-high.active');
					Route::post('/destroy/{id}', [SeniorHighController::class, 'destroy'])->name('admin.setups.senior-high.destroy');
					
					Route::group(['prefix' => 'courses'], function () {
						
						//SHS COURSES SETUPS ROUTES
						Route::get('/senior-high-courses', [SeniorHighCourseController::class, 'index'])->name('admin.setups.senior-high-courses.index');
						Route::get('/senior-high-courses/create', [SeniorHighCourseController::class, 'create'])->name('admin.setups.senior-high-courses.create');
						Route::post('/senior-high-courses/store', [SeniorHighCourseController::class, 'store'])->name('admin.setups.senior-high-courses.store');
						Route::post('/senior-high-courses/update/{id}', [SeniorHighCourseController::class, 'update'])->name('admin.setups.senior-high-courses.update');
						Route::post('/senior-high-courses/active/{id}', [SeniorHighCourseController::class, 'active'])->name('admin.setups.senior-high-courses.active');
						Route::post('/senior-high-courses/destroy/{id}', [SeniorHighCourseController::class, 'destroy'])->name('admin.setups.senior-high-courses.destroy');
						
						//SHS CORES SETUPS ROUTES
						Route::get('/senior-high-cores', [SeniorHighCoreController::class, 'index'])->name('admin.setups.senior-high-cores.index');
						Route::get('/senior-high-cores/create', [SeniorHighCoreController::class, 'create'])->name('admin.setups.senior-high-cores.create');
						Route::post('/senior-high-cores/store', [SeniorHighCoreController::class, 'store'])->name('admin.setups.senior-high-cores.store');
						Route::post('/senior-high-cores/update/{id}', [SeniorHighCoreController::class, 'update'])->name('admin.setups.senior-high-cores.update');
						Route::post('/senior-high-cores/active/{id}', [SeniorHighCoreController::class, 'active'])->name('admin.setups.senior-high-cores.active');
						Route::post('/senior-high-cores/destroy/{id}', [SeniorHighCoreController::class, 'destroy'])->name('admin.setups.senior-high-cores.destroy');
						
						//SHS ELECTIVES SETUPS ROUTES
						Route::get('/senior-high-electives', [SeniorHighElectiveController::class, 'index'])->name('admin.setups.senior-high-electives.index');
						Route::get('/senior-high-electives/create', [SeniorHighElectiveController::class, 'create'])->name('admin.setups.senior-high-electives.create');
						Route::post('/senior-high-electives/store', [SeniorHighElectiveController::class, 'store'])->name('admin.setups.senior-high-electives.store');
						Route::post('/senior-high-electives/update/{id}', [SeniorHighElectiveController::class, 'update'])->name('admin.setups.senior-high-electives.update');
						Route::post('/senior-high-electives/active/{id}', [SeniorHighElectiveController::class, 'active'])->name('admin.setups.senior-high-electives.active');
						Route::post('/senior-high-electives/destroy/{id}', [SeniorHighElectiveController::class, 'destroy'])->name('admin.setups.senior-high-electives.destroy');
					});
				});
				
				Route::group(['prefix' => 'university'], function () {
					
					//UNIVERSITY SCHOOLS SETUPS ROUTES
					Route::get('/', [UniversityController::class, 'index'])->name('admin.setups.university.index');
					Route::get('/create', [UniversityController::class, 'create'])->name('admin.setups.university.create');
					Route::post('/store', [UniversityController::class, 'store'])->name('admin.setups.university.store');
					Route::post('/update/{id}', [UniversityController::class, 'update'])->name('admin.setups.university.update');
					Route::post('/active/{id}', [UniversityController::class, 'active'])->name('admin.setups.university.active');
					Route::post('/destroy/{id}', [UniversityController::class, 'destroy'])->name('admin.setups.university.destroy');
					
					Route::group(['prefix' => 'courses'], function () {
						
						//UNIVERSITY COURSES SETUPS ROUTES
						Route::get('/', [UniversityCourseController::class, 'index'])->name('admin.setups.university-courses.index');
						Route::get('/create', [UniversityCourseController::class, 'create'])->name('admin.setups.university-courses.create');
						Route::post('/store', [UniversityCourseController::class, 'store'])->name('admin.setups.university-courses.store');
						Route::post('/update/{id}', [UniversityCourseController::class, 'update'])->name('admin.setups.university-courses.update');
						Route::post('/active/{id}', [UniversityCourseController::class, 'active'])->name('admin.setups.university-courses.active');
						Route::post('/destroy/{id}', [UniversityCourseController::class, 'destroy'])->name('admin.setups.university-courses.destroy');
					});
					
					Route::group(['prefix' => 'scheme'], function () {
						
						//UNIVERSITY SCHEME SETUPS ROUTES
						Route::get('/', [UniversitySchemeController::class, 'index'])->name('admin.setups.university-scheme.index');
						Route::get('/create', [UniversitySchemeController::class, 'create'])->name('admin.setups.university-scheme.create');
						Route::post('/store', [UniversitySchemeController::class, 'store'])->name('admin.setups.university-scheme.store');
						Route::post('/update/{id}', [UniversitySchemeController::class, 'update'])->name('admin.setups.university-scheme.update');
						Route::post('/active/{id}', [UniversitySchemeController::class, 'active'])->name('admin.setups.university-scheme.active');
						Route::post('/destroy/{id}', [UniversitySchemeController::class, 'destroy'])->name('admin.setups.university-scheme.destroy');
					});
				});
				
				
				
			});
			
		});
	});
	
	//	INSTITUTION ROUTES GROUP
//	require __DIR__ . '/university.php';
//	Route::group(['prefix' => 'university'], function () {
//
//		Route::get('/dashboard', function () {
//			return view('university.dashboard');
//		})->middleware(['university.auth:admin', 'verified'])->name('university.dashboard');
//
//		Route::middleware('university.auth:admin')->group(function () {
//			Route::get('/profile', [ProfileController::class, 'edit'])->name('university.profile.edit');
//			Route::patch('/profile', [ProfileController::class, 'update'])->name('university.profile.update');
//			Route::delete('/profile', [ProfileController::class, 'destroy'])->name('university.profile.destroy');
//		});
//	});
	
	
