@extends('layout.main')
@section('content')
    <div class="container">
        <div class="card mb-4 mt-5" style="padding: 20px; box-shadow: 5px 5px 5px rgb(0,0,0,0.1 ); min-height:250px">
            <h4 class="  mb-4 mt-5">Search in Documents</h4>

            <form action="{{ route('get-results') }}">
                <div class=""> <input type="search" name="search" id="search"
                        style="font-family: fontawesome, Inter, sans-serif; border-radius: 5px;
    padding: 5px;
    border: 1px solid rgb(221 221 221);
    width: 60%;
"
                        placeholder="&#xf002;  Search Documents...">
                    <button class="btn btn-upload" for="search" type="submit">Search</button>
                </div>
            </form>





            @isset($documents)
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

                        @foreach ($documents as $document)
                            <tr>
                                <th scope="row" style="    width: 90px;
    top: 77px;
    position: relative;">
                                    <div class="text-center">
                                        <p>1</p>
                                    </div>
                                </th>
                                <td class="text-center" style="width:300px"> <a
                                        href="{{ route('pdf.show', ['path' => $document->filename]) }}">
                                        <i class="fa
                                        fa-file-pdf-o"
                                            style="font-size:120px"></i><br><br>{{ $document->filename }}</a>
                                </td>
                                <td
                                    style="    display: flex;
    flex-wrap: wrap;
    align-items: initial;
    align-content: center;">
                                    <p
                                        style="    -webkit-line-clamp: 8;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    overflow: hidden;
    padding: 0;">
                                        @isset($document->withHighlights->attachment['content'])
                                            {!! $document->withHighlights->attachment['content'] !!}
                                        @endisset
                                    </p>
                                </td>
                                <td>{{ Carbon\Carbon::parse($document->date)->format('d-m-Y h:i:s') }}</td>
                            </tr>
                        @endforeach



                    </tbody>

                </table>
                @if (!$documents)
                    <p class="text-center"> No Documents found </p>
                @endif
            @endisset

        </div>
    </div>
@endsection
