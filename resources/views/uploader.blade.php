@extends('layout.main')
@section('content')
    <div class="container">
        <div class="card mb-4 mt-5" style="padding: 20px; box-shadow: 5px 5px 5px rgb(0,0,0,0.1 )">

            <div class="row">

                <div class="col-12 ">
                    <h4 class="  mb-4 mt-5">Add a new document</h4>

                    <form>

                        <fieldset class="upload_dropZone text-center mb-3 ">


                            <i class="fa fa-file-pdf-o" style="font-size:45px"></i>


                            <p class="small my-2">Drag &amp; Drop Documents inside dashed region<br><i>or</i></p>

                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">

                            <input id="upload_image_background" data-post-name="file" data-post-url="{{ route('upload') }}"
                                class="position-absolute invisible" type="file" multiple accept="application/pdf" />

                            <label class="btn btn-upload mb-3" for="upload_image_background">Select Files</label>

                            <div class="upload_gallery d-flex flex-wrap justify-content-center gap-3 mb-0"></div>

                        </fieldset>

                        <p style="color: #637587; font-size:14px; margin-bottom:60px">File Format: PDF</p>
                        <h4 class="  mb-4 mt-5">All Documents</h4>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">File</th>
                                    <th scope="col">File Name</th>
                                    <th scope="col">Upload Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($documents as $document)
                                    <tr>
                                        <th scope="row"></th>
                                        <td><a href="{{ route('pdf.show', ['path' => $document->filename]) }}"
                                                target="_blank">
                                                <i class="fa fa-file-pdf-o" style="font-size:45px"></i></a>
                                        </td>
                                        <td>{{ $document->filename }}</td>
                                        <td>{{ Carbon\Carbon::parse($document->date)->format('d-m-Y h:i:s') }}
                                        </td>


                                    </tr>
                                @endforeach

                            </tbody>
                        </table>

                </div>
            </div>
        </div>
        {{ $documents->appends(request()->query())->links() }}

    </div>

    <div class="toast" data-autohide="true" data-delay="3000"
        style="    position: fixed;
    z-index: 999999999;
    bottom: 0px;">
        <div class="toast-header">

            File Uploaded!
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>

        </div>
        <div class="toast-body">
            Your PDF file has been uploaded Successfully.
        </div>


    </div>
@endsection
