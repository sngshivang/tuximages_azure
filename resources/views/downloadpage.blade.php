<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('title', 'Download all Linux ISOs and VHDs')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <div class="row">
    <h1 class="display-4 text-center">Download page</h1>      
    </div>
    <hr>
    <div class="row">
        <div class = "col-sm-12 col-lg-6">
            <img src = "{{ asset('/res/img/downloadpage.png') }}" alt = "Download page logo" class = "img-fluid rounded">
</div>
<div class= "col-sm-12 col-lg-6">
    <h1 id = "osn">NA</h1>
    <h3 id = "osfam">NA</h2>
    <h3 id = "lastupd">NA</h3>
    <br>
    <ul id = "oslnks">
    <!--<li>This is a test statement <a href = "/windows">Download from Ubuntu</a><ul><li><code>sha goes here</code></li><li style = "font-style: italic;">Last Mod</li></ul></li>-->
    </ul>

</div>

</div>
<br><br>
<script src="{{ asset('/js/todownload.js') }}"> </script>
<script>
showoptions('{{$coreinfo}}');
</script>
@endsection