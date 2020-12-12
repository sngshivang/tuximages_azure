<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('title', '503: Down for Maintenance')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <div class="row">
    <h1 class="display-4 text-center col" style="color: darkred;">503: Down for Maintenance</h1>  
    <div class ="col">
    <h4 style="margin-top: 1.6rem">We are currently performing some maintenance work on this page. We will be back shortly!</h4> 
    </div>    
    </div>
    <hr>
@endsection