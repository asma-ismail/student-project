<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Response;

class ElasticController extends Controller
{
    //
    protected $client;

    public function __construct()
    {

    }
    public function upload(Request $request)
    {
        $file_name = $request->file('file')->getClientOriginalName();

        Storage::disk('local')->put($file_name, $request->file('file')->get());
        $path = Storage::disk('local')->path($file_name);

        $b64Doc = base64_encode(file_get_contents($path));

        $doc = new Document;
        $doc->file = $b64Doc;
        $doc->filename = $file_name;
        $doc->save();

        return response()->json(["success" => true], 200);

    }

    public function index()
    {

        $documents = Document::paginate(10);
        return view('uploader', compact('documents'));
    }

    public function getDocument($path)
    {
        $full = storage_path('app/files/' . $path);

        return Response::make(file_get_contents($full), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $path . '"',
        ]);
    }

    public function searchStudentName()
    {
        $documents = Document::term(request()->search)->fields(['attachment.content'])->highlight()->search();
        return view('search', compact('documents'));

    }
}
