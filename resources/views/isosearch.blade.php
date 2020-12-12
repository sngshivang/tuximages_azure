<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('title', 'Download all Linux ISOs and VHDs')

@section('additionalcss')
<link rel = "stylesheet" href="{{ url('/css/isosearch.css') }}">

@endsection

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
<div class="row">
                <h1 class="display-4 text-center col">Search for your ISO!</h1>
            </div>
            <br>
            <form autocomplete = "off">
    <div class="form-group autocomplete">
      <input type="text" class="form-control" id="myInput" placeholder="Enter Distro Name (Like Ubuntu)" name="myCountry">
    </div>
    <button type="button" class="btn btn-primary" onClick = "gotolink()">Submit</button>
  </form>
  <script src="js/downloadpage.js"></script>
            
@endsection