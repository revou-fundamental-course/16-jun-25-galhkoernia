@extends('layouts.app')
@section('title', 'About')

@section('content')
    <section class="profile-header">
        <img src="{{ asset('assets/images/icon_logo.png') }}" alt="Company Image">
    </section>

    <section class="about-company container">
        <h2>About the Company</h2>
        <img src="{{ asset('assets/images/instrumen_labs.png') }}" alt="About Image">
        <p>Kami berdiri sejak ... dan berkomitmen untuk ...</p>
    </section>

    <section class="vision-mission container">
        <div class="vision">
            <h3>Vision</h3>
            <img src="{{ asset('assets/images/visi_icon.png') }}" alt="Vision">
            <p>Menjadi perusahaan terdepan dalam ...</p>
        </div>
        <div class="mission">
            <h3>Mission</h3>
            <img src="{{ asset('assets/images/misi_icon.png') }}" alt="Mission">
            <ul>
                <li>Memberikan layanan terbaik ...</li>
                <li>Membangun kolaborasi ...</li>
            </ul>
        </div>
    </section>
@endsection