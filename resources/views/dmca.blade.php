<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.app')

@section('title', 'Filing DMCA claims')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <div class="row">
    <h1 class="display-4 text-center col">DMCA</h1>      
    </div>
    <hr>
    <div class="row">
    <div class="col">
    <p>The Digital Millennium Copyright Act (DMCA) is an US act which enforces intellectual property trademarks and copyrights on digital entities such as this website. To read more about DMCA go to <a href= "https://dmca.com"> DMCA's website</a>.</p>
    <p> If you want to file a DMCA notice here, please feel free to mail at support@tuximages.xyz and we will respond in 24 business hours</p>
    </div>
    </div>
    <div class="row">
    <h1 class="display-4 text-center col">GDPR</h1>      
    </div>
    <hr>
    <div class="row">
    <div class="col">
    <p>The GDPR, or the General Data Protection Regulation, will govern the way businesses process, move, and store the personal data of EU citizens. To read more about GDPR, go to <a href = "https://gdpr.eu/"> EU GDPR website</a></p>
    <p>Tux Images does not store any personally identifiable information of any individual or entity across the world. GDPR clauses are inapplicable in this case. </p>
    </div>
    </div>
@endsection