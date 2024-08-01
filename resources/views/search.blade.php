@extends('layout.main')
@section('content')
    <div class="container">
        <div class="card mb-4 mt-5" style="padding: 20px; box-shadow: 5px 5px 5px rgb(0,0,0,0.1 ); min-height:500px">
            <h4 class="  mb-4 mt-5">Search in Documents</h4>

            <div class=""> <input type="search" name="search" id="search"
                    style="font-family: fontawesome, Inter, sans-serif; border-radius: 5px;
    padding: 5px;
    border: 1px solid rgb(221 221 221);
    width: 60%;
"
                    placeholder="&#xf002;  Search Documents...">
                <button class="btn btn-upload" for="search">Search</button>
            </div>
            <h4 class="  mb-4 " style="margin-top:100px">Results</h4>

            <table class="table" style="min-height: 52%; margin-bottom:60px">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">File</th>
                        <th scope="col" style="width: 30%">Matched Content</th>
                        <th scope="col">Upload Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td> <i class="fa fa-file-pdf-o" style="font-size:120px"></i><br><br>File_Name.pdf
                        </td>
                        <td>Matched Content Matched ContentMatched ContentMatched ContentMatched ContentMatched
                            ContentMatched
                            ContentMatched Content</td>
                        <td>@mdo</td>
                    </tr>


                </tbody>
            </table>
        </div>
    </div>
@endsection
