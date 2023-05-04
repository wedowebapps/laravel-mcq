@extends('layouts.default')
@section('style')
<link rel="stylesheet" type="text/css"
    href="{{ asset('bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/pages/data-table/css/buttons.dataTables.min.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{ asset('bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{ asset('bower_components/bootstrap-tagsinput/css/bootstrap-tagsinput.css')}}">
@endsection
@section('content')
<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="fa fa-question bg-c-blue"></i>
                <div class="d-inline">
                    <h5>Questions</h5>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <a class="btn btn-primary btn-add-task waves-effect waves-light m-t-10"
                href="{{ route('question.create') }}">Add New Question</a>
        </div>
    </div>
</div>
<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">All Questions</div>
                            <div class="card-block">
                                @if (Session::has('success'))
                                <div class="alert alert-success background-success">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <i class="icofont icofont-close-line-circled text-white"></i>
                                    </button>
                                    <strong>Success!</strong> {{ Session::get('success') }}
                                </div>
                                @endif
                                <div class="dt-responsive table-responsive">
                                    <table id="multi-colum-dt" class="table table-striped table-bordered nowrap">
                                        <thead>
                                            <tr>
                                                <th>Sr no</th>
                                                <th>Question Name</th>
                                                <th>Question Type</th>
                                                <th>Choices</th>
                                                <th>Answer</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($questions as $key => $question)
                                            <tr>
                                                <td>{{ $key+1 }}</td>
                                                <td>{{ $question->question_name }}</td>
                                                <td>{{ $question->question_type }}</td>
                                                <td>{{ $question->choice_1 }},{{ $question->choice_2 }},{{ $question->choice_3 }},{{ $question->choice_4 }}</td>
                                                <td>{{ $question->answer  }}</td>
                                                <td>
                                                    <a href="{{ route('question.edit',$question->id) }}"><i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Sr no</th>
                                                <th>Question Name</th>
                                                <th>Question Type</th>
                                                <th>Choices</th>
                                                <th>Answer</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('pages/advance-elements/swithces.js')}}"></script>

// datatables js start
<script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('bower_components/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('pages/data-table/js/jszip.min.js')}}"></script>
<script src="{{ asset('pages/data-table/js/pdfmake.min.js')}}"></script>
<script src="{{ asset('pages/data-table/js/vfs_fonts.js')}}"></script>
<script src="{{ asset('bower_components/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ asset('bower_components/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('bower_components/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ asset('bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
// datatables js start
<script src="{{ asset('bower_components/bootstrap-tagsinput/js/bootstrap-tagsinput.js')}}"></script>

<script src="{{ asset('pages/data-table/js/data-table-custom.js')}}"></script>
<script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/script.js')}}"></script>
@stop