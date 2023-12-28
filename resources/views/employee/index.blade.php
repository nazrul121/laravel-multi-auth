@extends('layouts.employee')

@section('content')
    welcome employee <br>

    {{Auth::user()}}
@endsection