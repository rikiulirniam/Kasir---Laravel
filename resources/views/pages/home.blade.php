@extends('layouts.resource')
@section('content')
    
<p>{{ Auth::user()->username }}</p>

@endsection

