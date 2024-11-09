@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('User Dashboard') }}</div>

                    <div class="card-body">
                        {{ __('Welcome, User!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
