<?php

namespace App\Http\Controllers\Admin\App\Setup\Category;

use App\Http\Controllers\Controller;
use App\Models\Setups\SeniorHigh\SeniorHighCategory;
use App\Models\Setups\University\UniversityCategory;
use Illuminate\Http\Request;

class UniversityCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
			$universityCat = UniversityCategory::all();
			return view('admin.app.setups.category.university.index')
				->with('universityCats', $universityCat);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SeniorHighCategory $seniorHighCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SeniorHighCategory $seniorHighCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SeniorHighCategory $seniorHighCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SeniorHighCategory $seniorHighCategory)
    {
        //
    }
}
