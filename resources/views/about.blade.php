<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('title', 'About')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <div class="row">
    <h1 class="display-4 text-center col" style="color: darkred;">All about Tux Images!</h1>     
    </div>
    <hr>
    <div class="row">
    <div class="col">
    <p>Welcome to Tux Images! A place where you can get the link to most Modern Linux distributions and Windows ISOs. All downloads are on the respective distribution's servers so there is no danger of image tampering.</p>    <p>You can also download the pre-installed VHDs (Virtual Hard Disk) from the Tux Images' servers and try out your favourite distributions in Virtual Box, VMWare or booting via VHD.</p>
    <p>We also provide the latest flashing tools help you seamlessly install the operating system from your flash drives.</p>
    <p>Tux Images is a part of Contrify Software consortium. &copy; Contrify Software 2020.</p>
    </div>
    </div>
    <br>
    <div class = "row">
    <div class="col text-center">
    <img src = '{{asset("/res/img/magicupdates_logo.png")}}' alt = "MagicUpdates Logo" onClick = "window.open('https://github.com/sngshivang/magic_updates/wiki')" class="img-fluid float-center" style="max-width: 200px;">
    </div>
    <div class = "col text-center">
    <img src = '{{asset("/res/img/sv_logo3.png")}}' alt = "MagicUpdates Logo" onClick = "window.open('https://play.google.com/store/apps/details?id=com.share.contrify.contrifyshare&hl=en_IN')" class="img-fluid float-center" height = "0.5rem">
    </div>
    </div>
    <br><br>
@endsection