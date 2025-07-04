@extends('layouts.app')
@section('title', 'About')

@section('content')
    <section class="profile-header">
        <img src="{{ asset('assets/images/banner_page.png') }}" alt="Company Image">
    </section>

    <section class="about-company container">
        <h2>About the Company</h2>
        <img src="{{ asset('assets/images/instrumen_labs.png') }}" alt="About Image">
        <p>Saya seorang mahasiswa fisika yang aktif dan berkomitmen dalam pengembangan diri melalui pendidikan, organisasi,
            dan
            berbagai proyek praktis. Dengan latar belakang teknis, analisis sistem, serta pengembangan teknologi digital.
            Menggabungkan logika sains dengan kreativitas dalam
            membangun solusi.Aktif di kegiatan,organisasi robotika dan pengembangan website, </p>
    </section>

    <section class="vision-mission container">
        <div class="vision">
            <h3>Vision</h3>
            <img src="{{ asset('assets/images/visi_icon.png') }}" alt="Vision">
            <p>Menjadi pribadi yang adaptif inovatis dan berdampak, pengembangan teknologi dan sains terapan untuk mendukung
                kemajuan masyarakat.</p>
        </div>
        <div class="mission">
            <h3>Mission</h3>
            <img src="{{ asset('assets/images/misi_icon.png') }}" alt="Mission">
            <ul>
                <li>Mengembangkan keterampilan melalui pembelajaran berkelanjutan dan proyek nyata.</li>
                </li>
                <li>Menerapkan ilmu fisika dan teknologi dalam solusi praktis yang bermanfaat.</li>
                <li>Menjadi jembatan antara sains, teknologi, dan kebutuhan dunia nyata.</li>
            </ul>
        </div>
    </section>
@endsection