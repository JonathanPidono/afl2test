@extends('layouts.app')

@section('title', 'Home')

@section('content')

  <div class="hero bg-base-200 py-20">
    <div class="hero-content text-center">
      <div class="max-w-2xl">
        <h1 class="text-5xl font-bold">{{ $hero['Judul'] }}</h1>
        <p class="py-6">{{ $hero['Deskripsi'] }}</p>
        <a href="{{ route($hero['Route']) }}" class="btn btn-primary">{{ $hero['Tombol'] }}</a>
      </div>
    </div>
  </div>

  <section class="max-w-5xl mx-auto px-4 py-16 grid md:grid-cols-3 gap-8">
    <h2 class="text-2xl md:text-3xl font-semibold">Siapa Kartini?</h2>
    <div class="md:col-span-2 space-y-4 leading-relaxed">
      @foreach ($pengantar as $paragraf)
        <p>{{ $paragraf }}</p>
      @endforeach
    </div>
  </section>

  <section class="border-y border-base-300">
    <div class="max-w-5xl mx-auto px-4 py-16 grid md:grid-cols-3 gap-8">
      <h2 class="text-2xl md:text-3xl font-semibold">Sekilas</h2>
      <dl class="md:col-span-2 divide-y divide-base-300">
        @foreach ($sekilas as $item)
          <div class="py-4 grid grid-cols-3 gap-4">
            <dt class="font-semibold">{{ $item['Label'] }}</dt>
            <dd class="col-span-2">{{ $item['Isi'] }}</dd>
          </div>
        @endforeach
      </dl>
    </div>
  </section>

@endsection
