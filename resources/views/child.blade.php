<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('title', 'Download all Windows, Linux ISOs and VHDs')

@section('additionalcss')
<link rel = "stylesheet" href="{{ url('/css/mainpage.css') }}">
@endsection

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
<div class="row">
                <h1 class="display-4 text-center">Select from the range of latest ISOs of the popular distributions!</h1>
            </div>
            <div class="row">
                <h4 class="text-center col"><a href = "/isosearch">To search &amp; download other ISO, click here!</a></h4>
</div>
<br>
            <div class="row" style="background-color: royalblue;">
                <h3 class = "col text-center">ISOs available</h3>
            </div>
            <br>
            <div class="row">
            <div class="col-lg-4 col-sm-6 jumbotron text-center" style="background-color: rgb(0,175,240);" onClick = 'window.open("/downloadpage/osid/6","_parent")'>
                    <img class="img-fluid" src="{{ url('/res/img/windowslogo.png') }}" style="max-height: 70px;">
                    <h2>Windows 10</h2>
                    <p>Download directly from Microsoft</p>

                </div>
                <div class="col-lg-4 col-sm-6 jumbotron text-center" style="background-color: rgba(221, 72, 20, 1);" onClick = 'window.open("/downloadpage/osid/1","_parent")'>
                <img class="img-fluid" src="{{ url('/res/img/ubuntu_logo.png') }}" style="max-height: 70px;">
                    <h2>Ubuntu 20.04 LTS</h2>
                    <p>Download directly from Ubuntu</p>

                </div>
                <div class="col-lg-4 col-sm-6 jumbotron text-center" style="background-color: rgba(60, 110, 180, 1);" onClick = 'window.open("/downloadpage/osid/2","_parent")'>
                <img class="img-fluid" src="{{ url('/res/img/fedora_logo.png') }}" style="max-height: 70px;">
                    <h2>Fedora 32 WorkStation</h2>
                    <p>Download directly from Fedora</p>

                </div>
                <div class="col-lg-4 col-sm-6 jumbotron text-center" style="background-color: rgba(135, 207, 62, 1);" onClick = 'window.open("/downloadpage/osid/12","_parent")'>
                <img class="img-fluid" src="{{ url('/res/img/mintlogo.png') }}" style="max-height: 70px;">
                    <h2>Linux Mint</h2>
                    <p>Download directly from Linux Mint</p>

                </div>
                <div class="col-lg-4 col-sm-6 jumbotron text-center" style="background-color: darkorange;" onClick = 'window.open("/downloadpage/osid/5","_parent")'>
                <img class="img-fluid" src="{{ url('/res/img/kalilogo.png') }}" style="max-height: 70px;">
                    <h2>Kali Linux</h2>
                    <p>Download directly from Kali</p>
                </div>
                <div class="col-lg-4 col-sm-6 jumbotron text-center" style="background-color: magenta;" onClick = 'window.open("/downloadpage/osid/4","_parent")'>
                <img class="img-fluid" src="{{ url('/res/img/debianlogo.png') }}" style="max-height: 70px;">
                    <h2>Debian</h2>
                    <p>Download directly from Debian</p>
                </div>
            </div>
            
@endsection