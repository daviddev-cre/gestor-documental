<?php

namespace App\Http\Controllers;

use App\Http\Requests\ModuleRequest;
use Illuminate\Http\Request;
use App\Models\Module;
use App\Message\ModuleMessage;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $modules = Module::all();
        return response()->json($modules);
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
    public function store(ModuleRequest $moduleRequest)
    {
        try{
            $moduleSearch = Module::where('moduleName', $moduleRequest->moduleName)->exists();
            if($moduleSearch){
                return response()->json(['message'=> ModuleMessage::createModulFail],409);
            }else{
                $moduleNew = new Module();
                $moduleNew['moduleName'] = $moduleRequest->moduleName;
                $moduleNew['colorModule'] = $moduleRequest->colorModule;
                $moduleNew['description'] = $moduleRequest->description;
                $moduleNew['icon'] = $moduleRequest->icon;
                $moduleNew->save();
                return response()->json(['message'=> ModuleMessage::createModulSuccess],201);
            }
        }catch(ModelNotFoundException $eModel){
            return response()->json(['message'=> ModuleMessage::createModulException],400);
        }catch(\Exception $eException){
            return response()->json(['message'=> ModuleMessage::createModulFail],500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try{
            $findModel = Module::findOrFail($id);
            return response()->json([
                'module' => $findModel,
                'message' => ModuleMessage::findModuleSuccess
            ],200);
        }catch(ModelNotFoundException $eModel){
            return response()->json(['message' => ModuleMessage::findModuleFail],400);
        }catch(\Exception $eException){
            return response()->json(['message' => ModuleMessage::findModulException],500);
        }
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
    public function update(ModuleRequest $moduleRequest, $id)
    {
        try{
            $moduleData = $moduleRequest->except(['_method','token']);
            $moduleFind = Module::findOrFail($id);
            $moduleFind->update($moduleData);
            return response()->json(['message' => ModuleMessage::updateModulSuccess],201);
        }catch(ModelNotFoundException $eModel){
            return response()->json(['message' => ModuleMessage::updateModulException],400);
        }catch(\Exception $eException){
            return response()->json(['message' => ModuleMessage::updateModulFail],500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $module = Module::findOrFail($id);
            $module->delete();
            return response()->json(['message' => ModuleMessage::deleteModulSuccess], 200);
        } catch (ModelNotFoundException $eModel) {
            return response()->json(['message' => ModuleMessage::deleteModulFail], 404);
        } catch (\Exception $eException) {
            return response()->json(['message' => ModuleMessage::deleteModulException], 500);
        }
    }
    
}
