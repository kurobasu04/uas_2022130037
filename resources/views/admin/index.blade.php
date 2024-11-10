@extends('layouts.template')

@section('content')
    <div class="container text-white">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-dark text-white">
                    <div class="card-header bg-dark text-white">{{ __('Admin Dashboard') }}</div>
                    <div class="card-body">{{ __('Welcome, Admin!') }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection
