@extends('layout')

@section('content')
    @foreach($reports as $report)
        @include('reports.reportList')
    @endforeach
@endsection