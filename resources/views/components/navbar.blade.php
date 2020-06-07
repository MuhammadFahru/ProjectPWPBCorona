<!-- ======= Header ======= -->
<header id="header" class="fixed-top @yield('bg')">
<div class="container-fluid">

    <div class="row justify-content-center">
    <div class="col-xl-9 d-flex align-items-center">
        {{-- <h1 class="logo mr-auto"><a href="index.html">#Terserah</a></h1>           --}}
        <a href="{{ route('index') }}?#hero" class="logo mr-auto"><img src="{{ url('assets/img/logo-web2.png') }}" alt="" class="img-fluid"></a>

        <nav class="nav-menu d-none d-lg-block">
        <ul>
            <li class="@yield('index')"><a href="{{ route('index') }}?#hero">Home</a></li>
            <li class="@yield('global')"><a href="{{ route('global') }}">Data Global</a></li>              
            <li class="@yield('indonesia')"><a href="{{ route('indonesia') }}">Data Indonesia</a></li>              
            <li class="@yield('article')"><a href="/article-page">Artikel</a></li>              
            <li><a href="{{ route('index') }}?#contact">Contact</a></li>
        </ul>
        </nav><!-- .nav-menu -->

        <a href="/dashboard" class="get-started-btn scrollto">Login</a>
    </div>
    </div>

</div>
</header><!-- End Header -->