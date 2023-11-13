<?php
	
	namespace App\Http\Controllers\Admin\App\Setup\Schools;
	
	use App\Http\Controllers\Controller;
	use App\Models\Setups\SeniorHigh\SeniorHighSchool;
	use Illuminate\Http\Request;
	
	class SeniorHighController extends Controller
	{
		/**
		 * Display a listing of the resource.
		 */
		public function index()
		{
			$seniorHigh = SeniorHighSchool::all();
			return view('admin.app.setups.senior-high.index')
				->with('seniorHighs', $seniorHigh);
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
			SeniorHighSchool::create([
				'name' => $request->name,
				'category_id' => $request->category_id,
				'address' => $request->address,
				'city_id' => $request->city_id,
				'region_id' => $request->region_id,
				'email' => $request->email,
				'phone' => $request->phone,
				'contact_name' => $request->contact_name,
				'contact_email' => $request->contact_email,
				'contact_phone' => $request->contact_phone,
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
				SeniorHighSchool::where('id',$id)->update([
					'name' => $request->name,
					'category_id' => $request->category_id,
					'address' => $request->address,
					'city_id' => $request->city_id,
					'region_id' => $request->region_id,
					'email' => $request->email,
					'phone' => $request->phone,
					'contact_name' => $request->contact_name,
					'contact_email' => $request->contact_email,
					'contact_phone' => $request->contact_phone,
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
			SeniorHighSchool::where('id',$id)->update([
				'active' => $request->active
			]);
			return redirect()->back();
		}
		
		/**
		 * Remove the specified resource from storage.
		 */
		public function destroy(string $id)
		{
			SeniorHighSchool::where('id',$id)->delete();
			return redirect()->back();
		}
	}
