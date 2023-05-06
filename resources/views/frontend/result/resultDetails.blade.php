@extends('frontend.navFooter')
@section('home.content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="header" style="background: #094270;padding:8px 30px;display: inline-block;">
                    <h4 style="color:#ffff; font-family:sans-serif;font-weight:bold;">Show Result</h4>
                </div>


                <div class="card my-5">
                    <div class="card-body">
                        <table class="table table-responsive table-hover">
                           <tr>
                               <th>SN</th>
                               <th>Year</th>
                               <th>date</th>
                               <th>Download PDF</th>
                           </tr>

                           @forelse ($resultList->getResultDetails as $key=>$rslt)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $rslt->year_session  }}</td>
                                <td>{{ $rslt->created_at }}</td>
                                <td>
                                    <a href="{{ route('pdf.index',$rslt->id) }}">Download PDF</a>
                                </td>
                            </tr>
                           @empty

                           @endforelse

                        </table>
                    </div>
                </div>
          </div>
        </div>
    </div>
@endsection
