<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Elastic\Elasticsearch\ClientBuilder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Response;

class ElasticController extends Controller
{
    //
    protected $client;

    public function __construct()
    {
        $this->client = ClientBuilder::create()->setHosts([env('ELASTIC_HOST')])->setApiKey(env('ELASTIC_API_KEY'))
            ->build();

    }
    public function upload(Request $request)
    {
        $file_name = $request->file('file')->getClientOriginalName();
        Storage::disk('local')->put($file_name, $request->file('file')->get());
        $path = Storage::disk('local')->path($file_name);

        $b64Doc = base64_encode(file_get_contents($path));
        $params = [
            'index' => 'pdf_index',
            'type' => 'pdfs',
            'pipeline' => 'PDF processor',
            'body' => [
                'file' => $b64Doc,
                'filename' => $file_name,
                'date' => Carbon::now(),
            ],
        ];
        $response = $this->client->index($params);
        return response()->json(["success" => true], 200);

    }

    public function index()
    {

        $params = [
            'index' => 'pdf_index',
            'body' => [
                'query' => [
                    'match_all' => new \stdClass(),
                ],
            ]];

        $response = $this->client->search($params);
        $documents = $response['hits']['hits'];
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
}
