<?php

namespace App\Http\Controllers;

use App\Http\Requests\DocumentRequest;
use App\Message\DocumentMessage;
use App\Models\Document;
use App\Models\Module;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Documents = Document::all();
        return response()->json($Documents);
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
    public function store(DocumentRequest $documentRequest)
    {
        try{
            if($documentRequest->hasFile('file')){
                $file = $documentRequest->file;
                $filePath = $file->store('documents','public');
                $newDocument = new Document();
                $newDocument->documentName = $documentRequest->documentName;
                $newDocument->urlDocument = Storage::url($filePath);
                $newDocument->urlVideo = $documentRequest->urlVideo;
                $newDocument->documentDescription = $documentRequest->documentDescription;
                $newDocument->idModule = $documentRequest->idModule;
                $newDocument->save();
                return response()->json([
                    'document' => $newDocument,
                    'message' => DocumentMessage::createDocumentSuccess
                ],201);
            }else{
                return response()->json(['message' => DocumentMessage::createDocumentModelFail],409);
            }
        }catch(ModelNotFoundException $eModel){
            return response()->json(['message' => DocumentMessage::createDocumentModelFail],404);
        }catch(\Exception $eException){
            return response()->json(['message' => DocumentMessage::createDocumentModelException],500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try{
            $dataDocument = Document::findOrFail($id);
            return response()->json([
                'document' => $dataDocument,
                'message' => DocumentMessage::findDocumentSuccess
            ]);
        }catch(ModelNotFoundException $eModel){
            return response()->json(['message' => DocumentMessage::findDocumentModelFail]);
        }catch(\Exception $eException){
            return response()->json(['message' => DocumentMessage::findDocumentModelException]);
        }
    }

    public function documentsModules($id){
        try{
            $documents = Module::find($id)->documents();
            return response()->json([
                'documents' => $documents,
                'message' => DocumentMessage::findDocumentModuleModelSuccess
            ]);
        }catch(ModelNotFoundException $eModel){
            return response()->json(['message' => DocumentMessage::findDocumentModuleFail]);
        }catch(\Exception $eException){
            return response()->json(['message' => DocumentMessage::finddocumentModuleException]);
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
    public function update(DocumentRequest $documentRequest,$id)
    {
        try{
            $dataDocument = $documentRequest->except(['_method','token']);
            $document = Document::findOrFail($id);
            $document->update($dataDocument);
            return response()->json([
                'document' => $document,
                'message' => DocumentMessage::updateDocumentSuccess
            ]);
        }catch(ModelNotFoundException $eModel){
            return response()->json(['message' => DocumentMessage::updateDocumentModelFail]);
        }catch(\Exception $eException){
            return response()->json(['message' => DocumentMessage::updateDocumentModelException]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try{
            $document = Document::findOrFail($id);
            if($document->urlDocument){
                $filePath = str_replace('/storage', 'public', $document->urlDocument);
                if (Storage::exists($filePath)) {
                    Storage::delete($filePath);
                }
            }
            $document->delete();
            return response()->json(['message' => DocumentMessage::deleteDocumentSuccess]);
        }catch(ModelNotFoundException $eModel){
            return response()->json(['message' => DocumentMessage::deleteDocumentModelFail]);
        }catch(\Exception $eException){
            return response()->json(['message' => DocumentMessage::deleteDocumentModelException]);
        }
    }
}
