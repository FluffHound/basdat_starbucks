<?php

namespace App\Http\Controllers;

use App\Models\Company_model;
use Illuminate\Http\Request;

class Company_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company_model::orderBy('id','desc')->paginate(5);
		return view('companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
			'name' => 'required',
			'email' => 'required',
			'address' => 'required',
		]);
		
		Company_model::create($request->post());
		
		return redirect()->route('companies.index')->with('success', 'Company has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Company_model $company)
    {
        return view('companies.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Company_model $company)
    {
        return view('companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company_model $company)
    {
        $request->validate([
			'name' => 'required',
			'email' => 'required',
			'address' => 'required',
		]);
		
		$company->fill($request->post())->save();
		
		return redirect()->route('companies.index')->with('success', 'Company has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company_model $company)
    {
        $company->delete();
		return redirect()->route('companies.index')->with('success', 'Company has been deleted successfully');
    }
}
