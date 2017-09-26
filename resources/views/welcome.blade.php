@extends('layouts.app')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <img src="https://entercorp.net/images/logo.png" alt="Enter" style="max-width: 300px;"/>
            <div class="title m-b-md">
                SOLID Laravel
            </div>

            <div class="links">
                <a href="{{ url('solid') }}">SOLID</a>
                <a href="{{ url('refactor') }}">Refactor</a>
            </div>
        </div>
    </div>
@endsection