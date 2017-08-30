@extends('layout')


@section('content')

    @include('partials.errors')
    <form action="/reports" method="post">
        {{ csrf_field() }}

        <button type="submit" value="submit">Submit</button>
    </form>
@endsection