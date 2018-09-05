@extends('layouts.login')

@section('styles')
<style>
    @media (min-width: 980px) {
        .container {
            width: 980px;
            max-width: 100%;
        }

    }
    @media (min-width: 980px) {
        .container {
            display: table;
            min-width: 980px;
        }
    }
    body {
        background-color: #f3f7fa;
    }

    input[type="text"] {
        border-radius: 0px;
    }

    .btn {
        border-radius: 0px;
    }
    .bg-w {
        background-color: #ffffff;
    }

    input[type="password"] {
        border-radius: 0;
    }
    a {
        color: #2c8ec8 !important;
        cursor: pointer;
    }
</style>
@endsection

@section('content')
    <login></login>
@endsection