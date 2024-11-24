@extends('challenge::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('challenge.name') !!}</p>
@endsection
