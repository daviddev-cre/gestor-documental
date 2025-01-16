<?php

namespace App\Http\Controllers;

use App\Models\companyReview;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Message\CompanyReviewMessage;

class companyReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $CompanyReviews = companyReview::all();
        return response()->json($CompanyReviews);
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
        try{
            $companyReview = new companyReview();
            $companyReview['idReview'] = $request->idReview;
            $companyReview['idCompany'] = $request->idCompany;
            $companyReview->save();
        }catch(ModelNotFoundException $eModel){
            return response()->json([
                'status' => 'fail',
                'message' =>  CompanyReviewMessage::createCompanyReviewFailModel,
                'error' => $eModel->getMessage()],404);
        }catch(\Exception $eException){
            return response()->json([
                'status' => 'fail',
                'message' =>  CompanyReviewMessage::createCompanyReviewFailException,
                'error' => $eException->getMessage()],500);
        }
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
    public function update(Request $request, $id)
    {
        try{
            $companyReviewData = $request->except(['_method','token']);
            $companyReview = companyReview::findOrFail($id);
            $companyReview->update($companyReviewData);
            return back()->with('message', CompanyReviewMessage::updateCompanyReviewSuccess);
        }catch(ModelNotFoundException $eModel){
            return back()->with('message', CompanyReviewMessage::updateCompanyReviewFailModel);
        }catch(\Exception $eException){
            return back()->with('message', CompanyReviewMessage::updateCompanyReviewFailException);
        }
    }


public function updateReviewForCompany(Request $request, $idCompany){
    try {
        $companyReviewData = $request->except(['_method', '_token']);
        $companyReview = companyReview::where('idCompany', '=', $idCompany)->firstOrFail();
        $companyReview->update($companyReviewData);
        return back()->with('message', CompanyReviewMessage::updateCompanyReviewSuccess);

    } catch (ModelNotFoundException $eModel) {
        return back()->with('message', CompanyReviewMessage::updateCompanyReviewFailModel);

    } catch (\Exception $eException) {
        return back()->with('message', CompanyReviewMessage::updateCompanyReviewFailException);
    }
}

    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
