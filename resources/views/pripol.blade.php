<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('title', 'Privacy Policy')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <div class="row">
    <h1 class="display-4 text-center col" style="color: darkred;">Privacy Policy</h1>     
    </div>
    <hr>
    <div class="row">
    <div class="col">
    <h4>Tux Images cares for your privacy.</h4>
    <p>The website itself and it's various components do not store or log any data that may be used for user identification. That includes but not limited to Cache, Session Storage and traffic analysis.</p>
    <p>The website's advertising partners however, use the pre-exisiting data for ad-serving. The policies are under direct purview of the advertising partners and Tux Images has no affect or impact in their policy making.</p>
    <br>
    <h4>Ads and Donations keep us afloat. Please consider donating to us!</h4>
    </div>
    </div>
    <br>
    <br><br>
@endsection