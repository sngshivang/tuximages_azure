<!-- Stored in resources/views/layouts/app.blade.php -->

<html>
    <head>
        <title>Tux Linux Images :: @yield('title')</title>
         <!-- Latest compiled and minified CSS -->
         <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel = "stylesheet" href="{{ asset('/css/maincomp.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('/res/img/favicon.ico') }}" type="image/x-icon"/>
    <meta name="author" content="Shivang">
    <!--<script data-ad-client="ca-pub-1916718358186920" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>-->
    <script type="text/javascript" src="//uprimp.com/bnr.php?section=General&pub=659971&format=728x90&ga=g"></script>
<noscript><a href="https://yllix.com/publishers/659971" target="_blank"><img src="//ylx-aff.advertica-cdn.com/pub/728x90.png" style="border:none;margin:0;padding:0;vertical-align:baseline;" alt="ylliX - Online Advertising Network" /></a></noscript>
<meta name="description" content="Download Windows 10, Windows 8, Ubuntu, Fedora, Linux Mint, Debian, Kali, etc. The repository for all modern Operating System ISOs at a single place!">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    @yield('additionalcss')
    </head>
    <body>
    <div class="container">
            <div class="row">
            <img src="{{ asset('/res/img/logofull.png') }}" class="img-fluid" width="300px" onClick="window.open('/','_parent')">
            </div>
        <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: rgba(0, 66, 117, 1);">
            <!--<a class="navbar-brand" href="#">Navbar</a>-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Search your ISO
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="/isosearch">Using Search Box</a>
                    <a class="dropdown-item" href="/isolist">Get list of ISOs Available</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/tools">Download Tools</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/vhddownload">Download VHD</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="https://paypal.me/sngshivang?locale.x=en_GB">Donate</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                  </li>
                <!--<li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>-->
              </ul>
              <!--<form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>-->
            </div>
          </nav>
    </div>
<div class="container">
            @yield('content')
        </div>
        <footer class="container-fluid py-5" style="background-color: rgb(230, 230, 230);">
            <div class="row">
              <div class="col-12 col-md">
                <img src="{{ asset('/res/img/logofull.png') }}" class="img-fluid" style="max-width: 120px;">
              </div>
              <div class="col-6 col-md">
                <h5>&copy; Contrify Software</h5>
                <p>All trademarks belong to their respective owners. Linux&reg; is a registered trademark of Linux foundation.</p>
                <p>Windows&reg; is the registered trademark of Microsoft Corporation.</p>
            </div>
              <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                  <li><a class="text-muted" href="/pripol">Privacy</a></li>
                  <li><a class="text-muted" href="/pripol">Terms</a></li>
                  <li><a class="text-muted" href="/notices">DMCA &amp; GDPR</a></li>
                </ul>
              </div>
            </div>
          </footer>
    </body>
</html>