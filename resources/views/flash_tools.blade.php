<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('title', 'Installation tools')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <div class="row">
    <h1 class="display-4 col">Flash (Pen) Drive installation tools</h1>     
    </div>
    <hr>
    <div class="row">
    <div class="col">
    <h3>To put your ISO files in your portable Flash, pen and thumb drives, you can download any of the following tools</h3>
    <h2>UNetbootin</h2>
    <div class="row">
        <div class="col-sm-12 col-lg-6">
            <ul>
                <li>Downloading for Windows OS <a href="https://github.com/unetbootin/unetbootin/releases/download/681/unetbootin-windows-681.exe">Download Here</a></li>
                <li>Downloading for Linux Distributions</li>
                <ul>
                    <li>For Debian/Ubuntu System via PPA:<br><code>sudo add-apt-repository ppa:gezakovacs/ppa<br>sudo apt-get update<br>sudo apt-get install unetbootin</code></li>
                    <li>Direct Binary Download 32bit: <a href = "https://github.com/unetbootin/unetbootin/releases/download/681/unetbootin-linux-681.bin">Download Here.</a></li>
                    <li>Direct Binary Download 64bit: <a href = "https://github.com/unetbootin/unetbootin/releases/download/681/unetbootin-linux64-681.bin">Download Here.</a></li>
                </ul>
</ul>
</div>
<div class = "col-sm-12 col-lg-6 text-center">
    <img class = "img-fluid" src = "{{asset('/res/img/unetbootin.png')}}" style = "max-height: 150px">
                </div>
</div>
                </div>
                </div>
                <br><br>
<div class = "row">
    <div class = "col">
        <h2 class = "text-right">Universal USB Installer</h2>
                <div class = "row">
                <div class = "col-sm-12 col-lg-6 text-center">
                <img class = "img-fluid" src = "{{asset('/res/img/universalusb.png')}}" style = "max-height: 150px">
                            </div>
                            <div class = "col-sm-12 col-lg-6">
                        <ul>
                            <li style="float: right">Download for Windows OS <a href="https://www.pendrivelinux.com/downloads/Universal-USB-Installer/Universal-USB-Installer-1.9.9.0.exe">Download Here.</a></li>
                </ul>
                </div>
                </div>
                </div>
                            </div>
                            <br>
                            <br>
<div class = "row">
    <div class = "col">
        <h2>Rufus</h2>
                <div class = "row">
                            <div class = "col-sm-12 col-lg-6">
                        <ul>
                            <li>Download for Windows 32/64bit (P) <a href="https://github.com/pbatard/rufus/releases/download/v3.11/rufus-3.11p.exe">Download Here.</a></li>
                            <li>Download for Windows on ARM 64 <a href = "https://github.com/pbatard/rufus/releases/download/v3.11/rufus-3.11_arm64.exe">Download Here</a></li>
                            <li>Download for Windows on ARM 32 <a href = "https://github.com/pbatard/rufus/releases/download/v3.11/rufus-3.11_arm.exe">Download Here</a></li>
                            <li>Download for Windows APPX <a href = "https://github.com/pbatard/rufus/releases/download/v3.11/Rufus-3.11.appx">Download Here</a></li>
                            
                </ul>
                </div>
                <div class = "col-sm-12 col-lg-6 text-center">
                <img class = "img-fluid" src = "{{asset('/res/img/rufus-128.png')}}" style = "max-height: 150px">
                            </div>
                </div>
                </div>
                            </div>
@endsection