
@extends('layouts.app')
@section('content')
@if (Auth::user()->name == 'admin')
    @include('./headerAdmin')
@endif
<br>
<div class="container">
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
                    <img src="images/st.png" alt="stage" width="100%">
                </div>
                
            </div>
        </div>
    </div>
</div>
@if (Auth::user()->name == 'admin')
    @include('pigi')
@endif
@endsection
