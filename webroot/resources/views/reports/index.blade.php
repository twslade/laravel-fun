@extends('layout')

@section('content')
    @foreach($reports as $report)
        @include('reports.report')
    @endforeach
@endsection