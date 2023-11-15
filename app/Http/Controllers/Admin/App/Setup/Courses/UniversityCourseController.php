<?php
	
	namespace App\Http\Controllers\Admin\App\Setup\Courses;
	
	use App\Http\Controllers\Controller;
	use App\Models\Setups\SeniorHigh\SeniorHighCourse;
	use App\Models\Setups\University\UniversityCourse;
	use Illuminate\Http\Request;
	
	class UniversityCourseController extends Controller
	{
		/**
		 * Display a listing of the resource.
		 */
		public function index()
		{
			$universityCourses = UniversityCourse::all();
			return view('admin.app.setups.courses.university.index')
				->with('universityCourses', $universityCourses);
		}
		
		/**
		 * Show the form for creating a new resource.
		 */
		public function create()
		{
			//
		}
		
		/**
		 * Store a newly created resource in storage.
		 */
		public function store(Request $request)
		{
			$slug = strtolower(preg_replace('/\s+/', '-', $request->name));
			UniversityCourse::create([
				'name' => $request->name,
				'slug' => $slug,
				'description' => $request->description,
			]);
			return redirect()->back();
		}
		
		/**
		 * Display the specified resource.
		 */
		public function show(SeniorHighCourse $course)
		{
			//
		}
		
		/**
		 * Show the form for editing the specified resource.
		 */
		public function edit(SeniorHighCourse $course)
		{
			//
		}
		
		/**
		 * Update the specified resource in storage.
		 */
		public function update(Request $request, $id)
		{
			try {
				$slug = strtolower(preg_replace('/\s+/', '-', $request->name));
				UniversityCourse::where('id', $id)->update([
					'name' => $request->name,
					'slug' => $slug,
					'description' => $request->description,
				]);
				return redirect()->back();
			} catch (\Exception $e) {
				return redirect()->back()
					->withInput($request->only($this->username(), 'remember'))
					->withErrors(['error', 'There was a problem updating record. Please try check all fields and try again!']);
			}
		}
		
		/**
		 * Activate the specified resource in storage.
		 */
		public function active(Request $request, $id)
		{
			UniversityCourse::where('id', $id)->update([
				'active' => $request->active
			]);
			return redirect()->back();
		}
		
		/**
		 * Remove the specified resource from storage.
		 */
		public function destroy($id)
		{
			UniversityCourse::where('id', $id)->delete();
			return redirect()->back();
		}
	}
