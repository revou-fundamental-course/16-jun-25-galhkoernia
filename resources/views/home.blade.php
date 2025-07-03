@extends('layouts.app')
@section('title', 'Home')

@section('content')
    <section class="banner">
        <img src="{{ asset('assets/images/banner_page.png') }}" alt="Banner Image">
    </section>
    <section class="banner-text container">
        <h1>Welcome to Our Company</h1>
        <p id="greeting">Hi, Guest!</p>
    </section>
    <section class="intro">
        <div class="container">
            <h2>Who We Are</h2>
            <p>Saya adalah seorang mahasiswa jurusan Fisika disalah satu Universitas Negeri yang berada di Surabaya.</p>
            <a href="/profile" class="btn">Learn More</a>
        </div>
    </section>
@endsection