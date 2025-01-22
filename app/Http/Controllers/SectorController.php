<?php

namespace App\Http\Controllers;

use App\Models\Sector;
use Illuminate\Http\Request;
use App\Http\Requests\SectorRequest;
use App\Message\SectorMessage;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class SectorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sector = Sector::all();
        return response()->json($sector);
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
    public function store(SectorRequest $sectorRequest)
    {
        try{
            $sectorFind = Sector::where('sectorName', $sectorRequest->sectorName)->exists();
            if(!$sectorFind){
                $sectorNew = new Sector();
                $sectorNew['sectorName'] = $sectorRequest->sectorName;
                $sectorNew['ModulesSector'] = '{}';
                $sectorNew->save();
                return response()->json(['status' => 'success',
                                         'message' => SectorMessage::successCreateSector,
                                         'sector' =>  $sectorRequest->sectorName], 201);
            }
                return response()->json(['status' => 'fail',
                                         'message' => SectorMessage::existSector], 409);
        }catch(ModelNotFoundException $eModel){
                return response()->json(['status' => 'fail',
                                         'message' => SectorMessage::failCreateModel,
                                         'error' => $eModel->getMessage()], 404);
        }catch(\Exception $eException){
                return response()->json(['status' => 'fail',
                                         'message' => SectorMessage::failCreatorException,
                                         'error' => $eException->getMessage()], 500);
        }
      

    }

    /**
     * Display the specified resource.
     */
    public function show(Sector $sector)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sector $sector)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SectorRequest $sectorRequest, $id)
    {
        try{
            $dataSector = $sectorRequest->except(['_method','token']);
            $sector = Sector::findOrFail($id);
            $sector->update($dataSector);
            return response()->json([
                                    'status' => 'success',
                                    'message' => SectorMessage::successUpdateSector,
                                    'sector' => $sector], 201);
        }catch(ModelNotFoundException $eModel){
            return response()->json([
                                    'status' => 'fail',
                                    'message' => SectorMessage::failUpdateSectorModel,
                                    'error' => $eModel->getMessage()], 404);
        }catch(\Exception $eException){
            return response()->json([
                                    'status' => 'fail',
                                    'message' => SectorMessage::failUpdateSectorException,
                                    'error' => $eException->getMessage()], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try{
            $sector = Sector::findOrFail($id);
            $sector->delete();
            return response()->json([
                                    'status' => 'success',
                                    'message' => SectorMessage::successDeleteSector,
                                    'sector' => $sector],201);
        }catch(ModelNotFoundException $eModel){
            return response()->json([
                                    'status' => 'fail',
                                    'message' => SectorMessage::failDeleteSectorModel,
                                    'error' => $eModel->getMessage()], 404);
        }catch(\Exception $eException){
            return response()->json([
                'status' => 'fail',
                'message' => SectorMessage::failDeleteSectorException,
                'error' => $eException->getMessage()], 500);
        }
        
    }
}
