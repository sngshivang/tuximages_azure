<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('title', 'About')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <div class="row">
    <h1 class="display-4 col">ISO listings</h1>     
    </div>
    <hr>
    <form class="form-inline was-validated" name="rement">
    @csrf <!-- {{ csrf_field() }} -->
  <div class="form-group">
    <label for="srtxt">Search:</label>
    <input type="text" style = "margin-left: 10px;"class="form-control" placeholder="Enter the name like Ubuntu" id="srtxt" name= "srtxt" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
    </form>
    <div class="row">
    <br>
    <table class="table table-striped col">
    <thead>
      <tr>
        <th>OS Name</th>
        <th>OS Family</th>
        <th>Download Page</th>
      </tr>
    </thead>
    <tbody id = "tcont">
    </tbody>
</table>
    </div>
    <p style = "float: right;"><a id= "prevbut" style = "color: grey; cursor: pointer;" onClick = "prevpage()">Previous Page </a><a id = "nxtbut" onClick = "nxtpage()" style = "color: blue; cursor: pointer;">Next Page</a></p>
    <br>
    <br>
    <script src = "{{asset('/js/isolist.js')}}"></script>
@endsection