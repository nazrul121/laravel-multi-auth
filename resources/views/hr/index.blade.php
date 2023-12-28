@extends('layouts.hr')

@section('content')
    welcome to HR <br>
    {{Auth::user()}}
@endsection