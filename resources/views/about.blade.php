@extends('layouts.app')

@section('title', 'About')

@section('content')

  <section class="bg-base-200 border-b border-base-300">
    <div class="max-w-5xl mx-auto px-4 py-16">
      <h1 class=" text-4xl md:text-5xl font-bold">Tentang Website Ini</h1>
      <p class="mt-4 text-lg max-w-2xl leading-relaxed">
        Website ini dibuat sebagai tugas kelompok untuk belajar Laravel dan Tailwind CSS,
        dengan R.A. Kartini sebagai tokoh yang kami angkat.
      </p>
    </div>
  </section>

  <section class="max-w-5xl mx-auto px-4 py-16 grid md:grid-cols-3 gap-8">
    <h2 class=" text-2xl md:text-3xl font-semibold">Tujuan</h2>
    <div class="md:col-span-2 space-y-4 leading-relaxed">
      <p>
        Banyak orang mengenal Kartini hanya dari peringatan setiap 21 April. Kami ingin
        menyajikan kisah hidupnya secara singkat dan mudah dibaca, supaya pembaca tahu apa yang
        sebenarnya ia perjuangkan.
      </p>
      <p>
        Selain itu, website ini menjadi latihan kami dalam memakai route, controller, dan view
        di Laravel, serta menyusun tampilan dengan Tailwind CSS.
      </p>
    </div>
  </section>

  <section class="border-y border-base-300">
    <div class="max-w-5xl mx-auto px-4 py-16 grid md:grid-cols-3 gap-8">
      <h2 class=" text-2xl md:text-3xl font-semibold">Isi Website</h2>
      <dl class="md:col-span-2 divide-y divide-base-300">
        <div class="py-4 grid grid-cols-3 gap-4">
          <dt class="font-semibold"><a href="{{ route('home') }}" class="hover:text-primary">Home</a></dt>
          <dd class="col-span-2">Pengenalan singkat tentang Kartini dan fakta-fakta penting tentang dirinya.</dd>
        </div>
        <div class="py-4 grid grid-cols-3 gap-4">
          <dt class="font-semibold"><a href="{{ route('about') }}" class="hover:text-primary">About</a></dt>
          <dd class="col-span-2">Halaman ini: tujuan website, isi, teknologi, dan anggota kelompok.</dd>
        </div>
        <div class="py-4 grid grid-cols-3 gap-4">
          <dt class="font-semibold"><a href="{{ route('blog') }}" class="hover:text-primary">Blog</a></dt>
          <dd class="col-span-2">Kisah hidup Kartini dari tahun 1879 sampai sekarang, dibagi per peristiwa.</dd>
        </div>
      </dl>
    </div>
  </section>

  <section class="max-w-5xl mx-auto px-4 py-16 grid md:grid-cols-3 gap-8">
    <h2 class=" text-2xl md:text-3xl font-semibold">Teknologi</h2>
    <ul class="md:col-span-2 space-y-3 leading-relaxed list-disc pl-5">
      <li><span class="font-semibold">Laravel</span> untuk routing, controller, dan Blade view. Setiap halaman punya route dan controller sendiri.</li>
      <li><span class="font-semibold">Tailwind CSS</span> untuk layout, jarak, tipografi, dan warna.</li>
      <li><span class="font-semibold">daisyUI</span> untuk komponen navbar, tombol, dan card.</li>
    </ul>
  </section>

  <section class="max-w-5xl mx-auto px-4 py-16 grid md:grid-cols-3 gap-8">
    <h2 class=" text-2xl md:text-3xl font-semibold">Pembuat</h2>
    <ul class="md:col-span-2 space-y-3 leading-relaxed list-disc pl-5">
      <li><span class="font-semibold">Evelyn</span></li>
      <li><span class="font-semibold">Jonathan</span></li>
    </ul>
  </section>
@endsection
