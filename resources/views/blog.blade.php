@extends('layouts.app')

@section('title', 'Blog')

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
      <h2 class="text-2xl font-bold mb-4">Semasa Hidup</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @foreach ($before as $post)
          <div class="card card-border bg-base-100">
            <div class="card-body">
              <p class="text-sm font-semibold opacity-60">{{ $post['Tanggal'] }}</p>
              <h3 class="card-title">{{ $post['Judul'] }}</h3>
              <p>{{ $post['Artikel'] }}</p>
            </div>
          </div>
        @endforeach
      </div>
    </div>

    <div>
      <h2 class="text-2xl font-bold mb-4">Setelah Wafat</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @foreach ($after as $post)
          <div class="card card-border bg-base-100">
            <div class="card-body">
              <p class="text-sm font-semibold opacity-60">{{ $post['Tanggal'] }}</p>
              <h3 class="card-title">{{ $post['Judul'] }}</h3>
              <p>{{ $post['Artikel'] }}</p>
            </div>
          </div>
        @endforeach
      </div>
    </div>

  </div>

@endsection
