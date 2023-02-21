<?php

namespace App\Http\Controllers;

use App\Http\Resources\CompanyResource;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CompanyResource::collection(Company::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $company = new Company([
            'company_name' => $request->company_name,
            'boss_full_name' => $request->boss_full_name,
            'addres' => $request->addres,
            'email' => $request->email,
            'company_site' => $request->company_site,
            'phone_number' => $request->phone_number,
        ]);

        $company->save();
        return response()->json([
            $company
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return new CompanyResource(Company::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {
        
            $company->company_name = $request->company_name;
            $company->boss_full_name = $request->boss_full_name;
            $company->addres = $request->addres;
            $company->email = $request->email;
            $company->company_site = $request->company_site;
            $company->phone_number = $request->phone_number;
    

        $company->save();
        return response()->json([
            $company
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        $company->delete();
    }
}