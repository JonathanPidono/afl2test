@extends('layouts.app')

@section('title', 'About')

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

  <div class="max-w-5xl mx-auto px-4 py-16 space-y-12">

    <div>
      <h2 class="text-2xl font-bold mb-4">Isi Website</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        @foreach ($isi as $item)
          <div class="card bg-base-100 card-sm shadow-sm">
            <div class="card-body">
              <h3 class="card-title">{{ $item['File'] }}</h3>
              <p>{{ $item['Fungsi'] }}</p>
            </div>
          </div>
        @endforeach
      </div>
    </div>

    <div>
      <h2 class="text-2xl font-bold mb-4">Teknologi</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        @foreach ($teknologi as $item)
          <div class="card bg-base-100 card-sm shadow-sm">
            <div class="card-body">
              <h3 class="card-title">{{ $item['Teknologi'] }}</h3>
              <p>{{ $item['Fungsi'] }}</p>
            </div>
          </div>
        @endforeach
      </div>
    </div>

    <div>
      <h2 class="text-2xl font-bold mb-4">Pembuat</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        @foreach ($anggota as $orang)
          <div class="card bg-base-100 card-sm shadow-sm">
            <div class="card-body">
              <h3 class="card-title">{{ $orang['Nama'] }}</h3>
              <p>NIM {{ $orang['Nim'] }}</p>
            </div>
          </div>
        @endforeach
      </div>
    </div>

  </div>

@endsection
