@extends('layouts.app')

@section('title', 'Home')

@section('content')

  <section class="bg-base-200 border-b border-base-300">
    <div class="max-w-5xl mx-auto px-4 py-20 md:py-28">
      <h1 class="text-4xl md:text-6xl font-bold leading-tight max-w-3xl">
        Raden Adjeng Kartini
      </h1>
      <p class="mt-4 text-lg text-base-content/80">1879 sampai 1904, Jepara dan Rembang</p>
      <p class="mt-6 text-lg leading-relaxed max-w-2xl">
        Ia hanya hidup 25 tahun, tetapi surat-suratnya mengubah cara bangsa ini memandang
        pendidikan bagi perempuan. Website ini mengajak kamu mengenal siapa Kartini dan apa
        yang ia perjuangkan.
      </p>
      <div class="mt-8 flex flex-wrap gap-3">
        <a href="{{ route('blog') }}" class="btn btn-primary">Baca kisahnya</a>
        <a href="{{ route('about') }}" class="btn btn-ghost border border-base-300">Tentang website ini</a>
      </div>
    </div>
  </section>

  <section class="max-w-5xl mx-auto px-4 py-16 grid md:grid-cols-3 gap-8">
    <h2 class=" text-2xl md:text-3xl font-semibold">Siapa Kartini?</h2>
    <div class="md:col-span-2 space-y-4 leading-relaxed">
      <p>
        Kartini adalah putri Bupati Jepara. Ia sempat bersekolah di sekolah dasar Belanda,
        tetapi pada usia 12 tahun harus berhenti dan tinggal di rumah sesuai adat bangsawan Jawa
        pada masa itu.
      </p>
      <p>
        Dari dalam rumah ia terus membaca dan menulis surat kepada sahabat-sahabatnya di Belanda.
        Ia menulis tentang keinginannya agar anak perempuan boleh belajar, bukan hanya menunggu
        dinikahkan. Setelah Kartini wafat, surat-surat itu dibukukan dan kini dikenal sebagai
        <span class="font-semibold">Habis Gelap Terbitlah Terang</span>.
      </p>
    </div>
  </section>

  <section class="border-y border-base-300">
    <div class="max-w-5xl mx-auto px-4 py-16 grid md:grid-cols-3 gap-8">
      <h2 class=" text-2xl md:text-3xl font-semibold">Sekilas</h2>
      <dl class="md:col-span-2 divide-y divide-base-300">
        <div class="py-4 grid grid-cols-3 gap-4">
          <dt class="font-semibold">Lahir</dt>
          <dd class="col-span-2">21 April 1879, Jepara, Jawa Tengah</dd>
        </div>
        <div class="py-4 grid grid-cols-3 gap-4">
          <dt class="font-semibold">Wafat</dt>
          <dd class="col-span-2">17 September 1904, Rembang, Jawa Tengah</dd>
        </div>
        <div class="py-4 grid grid-cols-3 gap-4">
          <dt class="font-semibold">Dikenal lewat</dt>
          <dd class="col-span-2">Surat-surat yang dibukukan menjadi <span class="font-semibold">Door Duisternis tot Licht</span> (1911)</dd>
        </div>
        <div class="py-4 grid grid-cols-3 gap-4">
          <dt class="font-semibold">Gelar</dt>
          <dd class="col-span-2">Pahlawan Kemerdekaan Nasional (Keppres No. 108 Tahun 1964)</dd>
        </div>
        <div class="py-4 grid grid-cols-3 gap-4">
          <dt class="font-semibold">Diperingati</dt>
          <dd class="col-span-2">Setiap 21 April sebagai Hari Kartini</dd>
        </div>
      </dl>
    </div>
  </section>

@endsection
