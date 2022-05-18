@extends('layouts.app')

@section('header-content')
    @include('partials.header.header_nav')
@endsection


@section('main-content')
    @include('partials.main.insert_car')
@endsection