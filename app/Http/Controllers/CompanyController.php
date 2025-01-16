<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyRequest;
use App\Message\CompanyMessage;
use App\Models\Company;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::all();
        return response()->json($companies);
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
    public function show($id)
    {
        Session::put('nameCompany','creativos');
        Session::put('name','nombre');
        try{
            $company = Company::findOrFail($id);
            return response()->json([
                                    'status' => 'success',
                                    'message' => CompanyMessage::succcessFindCompany,
                                    'company' => $company
            ], 200);
        }catch(ModelNotFoundException $eModel){
            return response()->json([
                                    'status' => 'fail',
                                    'message' => CompanyMessage::failFindCompanyModel,
                                    'error' => $eModel->getMessage()
            ], 404);
        }catch(\Exception $eException){
            return response()->json([
                                    'status' => 'fail',
                                    'message' => CompanyMessage::failFindCompanyException,
                                    'error' => $eException->getMessage()
            ], 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CompanyRequest $companyRequest, $id)
    {
        try{
            $dataCompany = $companyRequest->except(['_method','token']);
            $company = Company::findOrFail($id) ;
            $company->update($dataCompany);
            return back()->with('message', CompanyMessage::successUpdateCompany);
            /*return response()->json([
                                    'status' => 'success',
                                    'message' => CompanyMessage::successUpdateCompany,
                                    'company' => $company
            ], 201);*/
        }catch(ModelNotFoundException $eModel){
            return back()->with('message', CompanyMessage::failUpdateCompanyModel);
           /* return response()->json([
                                    'status' => 'fail',
                                    'message' => CompanyMessage::failUpdateCompanyModel,
                                    'error' => $eModel->getMessage()
            ], 404);*/

        }catch(\Exception $eException){
            return back()->with('message',CompanyMessage::failUpdateCompanyException );
           /* return response()->json([
                                    'status' => 'fail',
                                    'message' => CompanyMessage::failUpdateCompanyException,
                                    'error' => $eException->getMessage()
            ], 500);*/
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try{
            $company = Company::findOrFail($id);
            $Customer = User::findOrFail($company['userId']);
            $Customer->delete();
            $company->delete();
            return response()->json([
                                    'status' => 'success',
                                    'message' => CompanyMessage::successDeleteCompany,
                                    'company' => $company
            ], 201);
        }catch(ModelNotFoundException $eModel){
            return response()->json([
                'status' => 'fail',
                'message' => CompanyMessage::failDeleteCompanyModel,
                'error' => $eModel->getMessage()
            ], 404);
        }catch(\Exception $eException){
            return response()->json([
                'status' => 'fail',
                'message' => CompanyMessage::failDeleteCompanyException,
                'error' => $eException->getMessage()
            ], 500);
        }
    }
}
