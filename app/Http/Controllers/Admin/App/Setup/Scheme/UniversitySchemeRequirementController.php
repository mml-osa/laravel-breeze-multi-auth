<?php
	
	namespace App\Http\Controllers\Admin\App\Setup\Scheme;
	
	use App\Http\Controllers\Controller;
	use App\Models\Setups\University\Universities;
	use Illuminate\Http\Request;
	
	class UniversitySchemeRequirementController extends Controller
	{
		/**
		 * Display a listing of the resource.
		 */
		public function index()
		{
			$universities = Universities::all();
			return view('admin.app.setups.university.scheme')
				->with('universities', $universities);
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
			Universities::create([
				'university_id' => $request->university_id,
				'course_id' => $request->course_id,
				'cutoff_min' => $request->cutoff_min,
				'cutoff_max' => $request->cutoff_max,
				'is_fee_paying' => $request->is_fee_paying,
				'active' => $request->active,
			]);
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
			try {
				$slug = strtolower(preg_replace('/\s+/', '-', $request->name));
				Universities::where('id',$id)->update([
					'university_id' => $request->university_id,
					'course_id' => $request->course_id,
					'cutoff_min' => $request->cutoff_min,
					'cutoff_max' => $request->cutoff_max,
					'is_fee_paying' => $request->is_fee_paying,
					'active' => $request->active,
				]);
				return redirect()->back();
			} catch (\Exception $e) { return redirect()->back()
				->withInput($request->only($this->username(), 'remember'))
				->withErrors(['error', 'There was a problem updating record. Please try check all fields and try again!']);
			}
		}
		
		/**
		 * Activate the specified resource in storage.
		 */
		public function active(Request $request, $id)
		{
			Universities::where('id', $id)->update([
				'active' => $request->active
			]);
			return redirect()->back();
		}
		
		/**
		 * Remove the specified resource from storage.
		 */
		public function destroy(string $id)
		{
			Universities::where('id',$id)->delete();
			return redirect()->back();
		}
	}
