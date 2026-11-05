@extends('layouts.app')

@section('title', 'Blog')

@section('content')

  <section class="bg-base-200 border-b border-base-300">
    <div class="max-w-5xl mx-auto px-4 py-16">
      <h1 class=" text-4xl md:text-5xl font-bold">Kisah Hidup Kartini</h1>
      <p class="mt-4 text-lg max-w-2xl leading-relaxed">
        Perjalanan Kartini dari masa kecil di Jepara sampai warisannya hari ini,
        disusun berdasarkan urutan waktu.
      </p>
    </div>
  </section>

  <section class="max-w-5xl mx-auto px-4 py-16">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      @foreach ($posts as $post)
        <article class="card card-border bg-base-100">
          <div class="card-body">
            <h2 class="card-title  text-xl">{{ $post['judul'] }}</h2>
            <p class="leading-relaxed">{{ $post['isi'] }}</p>
          </div>
        </article>
      @endforeach
    </div>
  </section>

@endsection
