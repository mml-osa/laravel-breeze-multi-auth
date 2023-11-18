<?php
	
	namespace App\Http\Controllers\Admin\App\Setup\Scheme;
	
	use App\Http\Controllers\Controller;
	use App\Models\Setups\University\Universities;
	use App\Models\Setups\University\UniversityScheme;
	use App\Models\Setups\University\UniversitySchemeRequirement;
	use Illuminate\Http\Request;
	
	class UniversitySchemeController extends Controller
	{
		/**
		 * Display a listing of the resource.
		 */
		public function index()
		{
			$universities = Universities::all();
			$universitySchemes = UniversityScheme::all();
			$universitySchemesRequirements = UniversitySchemeRequirement::all();
			return view('admin.app.setups.university.scheme')
				->with('universities', $universities)
				->with('universitySchemes', $universitySchemes)
				->with('universitySchemesRequirements', $universitySchemesRequirements);
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
			$uniSchemeSave = UniversityScheme::create([
				'university_id' => $request->university_id,
				'course_id' => $request->course_id,
				'cutoff_min' => $request->cutoff_min,
				'cutoff_max' => $request->cutoff_max,
				'is_fee_paying' => $request->is_fee_paying,
			]);
			
			if ($uniSchemeSave) {
//				foreach (['firstname' => 'First Name', 'lastname' => 'Last Name'] as $key => $label) {
				foreach ($request->cutoff as $key => $value) {
//					dd($value['grade']);
					$uniRequirement = UniversitySchemeRequirement::create([
						'scheme_id' => $uniSchemeSave->id,
						'subject_id' => $value['subject'],
						'grade' => $value['grade']
					]);
				}
			}
			
			
			
			
			return redirect()->back();
		}
		
		/**
		 * Display the specified resource.
		 */
		public function show(string $id)
		{
			//
		}
		
		/**
		 * Show the form for editing the specified resource.
		 */
		public function edit(string $id)
		{
			//
		}
		
		/**
		 * Update the specified resource in storage.
		 */
		public function update(Request $request, string $id)
		{
//			dd($request);
			try {
				$uniSchemeUpdate = UniversityScheme::where('id', $id)->update([
					'university_id' => $request->university_id,
					'course_id' => $request->course_id,
					'cutoff_min' => $request->cutoff_min,
					'cutoff_max' => $request->cutoff_max,
					'is_fee_paying' => $request->is_fee_paying,
				]);
				
				if ($uniSchemeUpdate) {
					$uniRequirementAdd = UniversitySchemeRequirement::create([
						'scheme_id' => $id,
						'subject_id' => $request->cutoffSubject,
						'grade' => $request->cutoffGrade
					]);
				}
				
				return redirect()->back();
			} catch (\Exception $e) {
				return redirect()->back()
					->withErrors(['error', 'There was a problem updating record. Please try check all fields and try again!']);
			}
		}
		
		/**
		 * Activate the specified resource in storage.
		 */
		public function active(Request $request, $id)
		{
			UniversityScheme::where('id', $id)->update([
				'active' => $request->active
			]);
			return redirect()->back();
		}
		
		/**
		 * Remove the specified resource from storage.
		 */
		public function reqDestroy($id)
		{
			UniversitySchemeRequirement::where('id', $id)->delete();
			return redirect()->back();
		}
		
		/**
		 * Remove the specified resource from storage.
		 */
		public function destroy($id)
		{
			UniversityScheme::where('id', $id)->delete();
			return redirect()->back();
		}
	}
