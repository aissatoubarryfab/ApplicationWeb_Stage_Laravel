
<link href="css/style2.css" rel="stylesheet" media="all">
@extends('layouts.app')
@section('content')
@include('header')
<br><div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    

                </div>
               
        </div>
    </div>
</div>
</div>
@endsection

