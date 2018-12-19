@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Home sweet home</div>

                <div class="card-body">
                {{-- Check for status or error messages --}}
                    @if (session('status'))
                        <successalerts
                        msg="{{ session('status') }}"
                        snack="true"
                        bootstrap="true"
                        vuetify="true">
                        </successalerts>
                    @endif
                    @if (session('errors'))
                        <erroralerts
                        errors="{{ json_encode(session('errors')) }}"
                        snack="true"
                        bootstrap="true"
                        vuetify="true">
                        </erroralerts>
                    @endif
                    <div>
                        Aici vine ce scriem
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
