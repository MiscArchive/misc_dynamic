@extends('layouts.app')

@section('content')
    {!! file_get_contents(public_path('sitemap.xml')) !!}
@endsection
