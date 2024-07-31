@extends('layout.main')
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-12 ">
                <h4 class="  mb-4 mt-5">Add a new document</h4>

                <form>

                    <fieldset class="upload_dropZone text-center mb-3 ">


                        <i class="fa fa-file-pdf-o" style="font-size:45px"></i>


                        <p class="small my-2">Drag &amp; Drop Documents inside dashed region<br><i>or</i></p>

                        <input id="upload_image_background" data-post-name="image_background"
                            data-post-url="https://someplace.com/image/uploads/backgrounds/"
                            class="position-absolute invisible" type="file" multiple
                            accept="image/jpeg, image/png, image/svg+xml" />

                        <label class="btn btn-upload mb-3" for="upload_image_background">Select Files</label>

                        <div class="upload_gallery d-flex flex-wrap justify-content-center gap-3 mb-0"></div>

                    </fieldset>

                </form>
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
                        <tr>
                            <th scope="row">1</th>
                            <td> <i class="fa fa-file-pdf-o" style="font-size:45px"></i>
                            </td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td> <i class="fa fa-file-pdf-o" style="font-size:45px"></i>
                            </td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
