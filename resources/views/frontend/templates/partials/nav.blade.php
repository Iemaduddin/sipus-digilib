<?php

use App\Borrow;

if ($user = auth()->user()) {
    $count = Borrow::where('user_id', $user->id)->count();
}
?>
@php
    // $currentRoute = Route::current();
    // $percobaan1 = $currentRoute->getName();
    // // $percobaan2 = $currentRoute->getPath();
    // $percobaan3 = $currentRoute->getAction();
    // $percobaan4 = $currentRoute->parameters();
    
    // var_dump($percobaan1);
    // // var_dump($percobaan2);
    // var_dump($percobaan3);
    // var_dump($percobaan4);
    
    // $currentRoute = Route::currentRouteName();
    // var_dump($currentRoute);
    
    // $currentRoute = Route::parameters();
    // var_dump($currentRoute);
@endphp
{{-- <p>{{ $percobaan1 }}</p> --}}
{{-- <p>{{ $percobaan2 }}</p> --}}
{{-- <p>
    @foreach ($percobaan3 as $p3)
        <span>{{$p3}}</span>
    @endforeach --}}
{{-- <p>{{ $percobaan4 }}</p> --}}
<nav class="navbar navbar-expand-lg bg-dark d-flex flex-column w-full">

    <ul class="d-flex justify-content-start w-100  border-1 border-bottom border-white h-25" style="font-size: 12px">
        <li class="pe-4">
            <a href="https://www.google.com/maps/dir//sman+negeri+1+blega/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x2dd82102e9471ff5:0xb654904772599bb6?sa=X&ved=2ahUKEwiI7_Tmvpz_AhWqzzgGHcfZB3YQ9Rd6BAhJEAQ" class="text-light text-decoration-none d-flex">
                <p class="me-2"><i class="bi bi-geo-alt-fill"></i></p>
                <p>Kedong, Rosep, Kec. Blega, Kabupaten Bangkalan, Jawa Timur, 69174, ID</p>
            </a>
        </li>
        <li class="pe-4">
            <a href="" class="text-light text-decoration-none d-flex">
                <p class="me-2">
                    <i class="bi bi-phone"></i>
                </p>
                <p>
                    (031) 3041027
                </p>
                1000
            </a>
        </li>
        <li class="pe-4">
            <a href="https://www.sman1blega.sch.id/" class="text-light text-decoration-none d-flex">
                <p class="me-2">
                    <i class="bi bi-envelope-at"></i>
                </p>
                <p>
                    sipus.smansaga.sch.id
                </p>
            </a>
        </li>
    </ul>
    <div class="container-fluid justify-content-center flex-column my-2  >
        <div class="d-flex">
            <a href="#!" class="brand-logo">
                <img class="mt-3 mb-3" src="{{ asset('assets/logo/sipus.png') }}" style="width: 350px;"></a>
        </div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary w-full fw-bold">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02" >
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 m-0 text-uppercase" style="font-size: 12px">
                <li class="nav-item">
                    <a class="nav-link text-light" aria-current="page" href="#" style="text-decoration:none">Home </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-light dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" style="text-decoration:none">Profile</a>
                    <ul class="dropdown-menu dropdown-menu-dark" style="font-size: 12px" > 
                        <li><a class="dropdown-item" href="#" style="text-decoration:none">Sejarah Perpustakaan</a></li>
                        <li><a class="dropdown-item" href="#" style="text-decoration:none">Visi Misi Perpustakaan</a></li>
                        <li><a class="dropdown-item" href="#" style="text-decoration:none">Staf Perpustakaan</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-light dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" style="text-decoration:none">Peraturan</a>
                    <ul class="dropdown-menu dropdown-menu-dark fade-down m-0" style="font-size: 12px">
                        <li><a class="dropdown-item" href="{{ route('tataTertib') }}">Tata Tertib</a></li>
                        <li><a class="dropdown-item" href="{{ route('peminjaman') }}">Peminjaman</a></li>
                        <li><a class="dropdown-item" href="{{ route('pengembalian') }}">Pengembalian</a></li>
                        <li><a class="dropdown-item" href="{{ route('denda') }}">Denda</a></li>
                        <li><a class="dropdown-item" href="#">Keanggotaan</a></li>
                      </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('homepage') }}" class="nav-link text-light" style="text-decoration:none">Koleksi Buku</a>
                </li>
                </li>
                @guest
<<<<<<< HEAD
                    {{-- tampil saat sebelum login --}}
                    <li><a href="{{ route('login') }}" class="nav-link text-light">Login</a></li>
=======
                    <li><a href="{{ route('login') }}" class="nav-link text-light" style="text-decoration:none">Login</a></li>
>>>>>>> refs/remotes/origin/main
                    @if (Route::has('register'))
                        <li><a href="{{ route('register') }}" class="nav-link text-light" style="text-decoration:none">Register</a></li>
                    @endif
                @else
                    {{-- tampil saat user sudah login --}}
                    <li>
                        <a href="{{ route('pinjam.index') }}" class="nav-link text-light"><i
                                class="material-icons">shopping_basket</i>
                            ({{ $count }})
                        </a>
                    </li>
                    <ul id="dropdown2" class="dropdown-content">
                        <li><a href="{{ route('transaksi.index') }}" class="nav-link text-light" style="text-decoration:none">Peminjaman</a></li>
                        <li class="divider"></li>
                        <li><a href="#!" class="nav-link text-light"
                                onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                Logout</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none" style="text-decoration:none">
                            @csrf
                        </form>
                    </ul>
                    <li><a class="dropdown-trigger text-decoration-none text-light" href="#" data-target="dropdown2">
                            {{ ucwords(Auth()->user()->name) }}<i class="material-icons right">arrow_drop_down</i></a>
                    </li>
                @endguest
            </ul>
        </div>
        </nav>
    </div>
</nav>
<<<<<<< HEAD
=======

{{-- <ul class="sidenav" id="mobile-demo">
    <li><a href="{{ route('homepage') }}">Koleksi Buku</a></li>
    <li><a href="badges.html">Layanan</a></li>
    <li><a href="collapsible.html">Syarat & Ketentuan</a></li>
    @guest
        <li><a href="{{ route('login') }}">Login</a></li>
        @if (Route::has('register'))
            <li><a href="{{ route('register') }}">Register</a></li>
        @endif
    @else
        <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">{{ ucwords(Auth()->user()->name) }}<i
                    class="material-icons right">arrow_drop_down</i></a></li>
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="#!">Profil</a></li>
            <li><a href="#!">Peminjaman</a></li>
            <li class="divider"></li>
            <li><a href="#!"
                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
            </li>
        </ul>
    @endguest
</ul> --}}
>>>>>>> refs/remotes/origin/main
