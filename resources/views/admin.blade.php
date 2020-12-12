<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('title', 'Admin Panel')


@section('content')
    <div class="row">
    <h1 class="display-4 text-center">Add new OS entry.</h1>      
    </div>
    <hr>
    <form action="/admin/registerlinks/1" method="post" class="form-horizontal was-validated" name="lnkentry">
    @csrf <!-- {{ csrf_field() }} -->
    <input type="hidden" name="tripvar" value="false" id = "tripvar" />
    <div class="form-group">
    <label for="osfname">OSID:</label>
    <input type="text" class="form-control" placeholder="Enter OSID (For modification)" id="osid" name = "osid">
  </div>
  <div class="form-group">
    <label for="osfname">OS Image Name (Full):</label>
    <input type="text" class="form-control" placeholder="Enter ISO name in full" id="osfname" name = "osfname" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="osfam">OS Family:</label>
    <input type="text" class="form-control" placeholder="Enter Family like Ubuntu, Fedora, etc" id="osfam" name= "osfam" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
  <label for="oslnk">Enter Available images with links:</label>
  <textarea class="form-control" rows="5" id="oslnk" name = "oslnk" placeholder="Consult the documentation in case of any doubt" required></textarea>
  <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <button type="button" class="btn btn-primary" onClick = "converttoarr()">Transform</button>
  <button type="button" class="btn btn-primary" id = "modbut" onClick = "modification()">Modification Off</button>
  <button type="button" class="btn btn-primary" onClick = "askPassword()">Authenticate</button>
</form>
<div class="row">
    <h1 class="display-4 text-center">Remove an Entry</h1>      
    </div>
    <hr>
    <form action="/admin/registerlinks/2" method="post" class="form-horizontal was-validated" name="rement">
    @csrf <!-- {{ csrf_field() }} -->
  <div class="form-group">
    <label for="osid">OS ID:</label>
    <input type="number" class="form-control" placeholder="Enter the OS Entry ID" id="osid" name= "osid" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<script src = "{{asset ('/js/admin.js')}}">
    </script>
@endsection