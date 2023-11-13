<?php

namespace App\Http\Controllers\Student\App\Eligibility;

use App\Http\Controllers\Controller;
use App\Models\Setups\SeniorHigh\SeniorHighCategory;
use Illuminate\Http\Request;

class CheckCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
			return view('student.app.eligibility.check-code');
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
