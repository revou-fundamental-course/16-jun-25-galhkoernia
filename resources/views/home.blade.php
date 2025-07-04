@extends('layouts.app')
@section('title', 'Home')

@section('content')
    <section class="banner">
        <img src="{{ asset('assets/images/banner_page.png') }}" alt="Banner Image">
    </section>
    <!-- Welcome Section -->
    <section class="welcome-section container">
        <div class="text-side">
            <h2>Welcome to <br><span>Our Company</span></h2>
            <p class="greeting" id="greeting">Hi, Guys!</p>
            <div class="who-we-are">
                <h4>WHO WE ARE</h4>
                <p>Saya adalah seorang mahasiswa jurusan Fisika disalah satu Universitas Negeri yang berada di Surabaya.</p>
                <a href="/profile" class="btn-learn">Learn More</a>
            </div>
        </div>
        <div class="image-side">
            <img src="{{ asset('assets/images/layer_physics.png') }}" alt="Physics" class="img-computer">
        </div>
    </section>
@endsection