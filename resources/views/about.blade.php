@extends('layouts.app')
@section('title', 'About')

@section('content')
    <section class="profile-header">
        <img src="{{ asset('assets/images/banner_page.png') }}" alt="Company Image">
    </section>

    <section class="about-company container">
        <h2 class="about-title">Tentang Saya</h2>
        <img src="{{ asset('assets/images/instrumen_labs.png') }}" alt="About">
        <p class="about-desc">Saya seorang mahasiswa fisika yang aktif dan berkomitmen dalam pengembangan diri melalui
            pendidikan, organisasi, dan berbagai proyek praktis. Dengan latar belakang teknis, ketertarikan yang kuat
            terhadap instrumentasi, analisis sistem, serta pengembangan teknologi digital. Menggabungkan logika sains dengan
            kreativitas dalam membangun solusi.Aktif dalam kegiatan robotika dan pengembangan website. </p>
    </section>

    <section class="vision-mission container">
        <div class="vision">
            <h3>Visi</h3>
            <img src="{{ asset('assets/images/visi_icon.png') }}" alt="Visi">
            <p>Menjadi pribadi yang adaptif inovatis dan berdampak, pengembangan teknologi dan sains terapan untuk mendukung
                kemajuan masyarakat.</p>
        </div>
        <div class="mission">
            <h3>Misi</h3>
            <img src="{{ asset('assets/images/misi_icon.png') }}" alt="Misi">
            <ul>
                <li>Mengembangkan keterampilan melalui pembelajaran berkelanjutan dan proyek nyata.</li>
                </li>
                <li>Menerapkan ilmu fisika dan teknologi dalam solusi praktis yang bermanfaat.</li>
                <li>Menjadi jembatan antara sains, teknologi, dan kebutuhan dunia nyata.</li>
            </ul>
        </div>
    </section>
@endsection