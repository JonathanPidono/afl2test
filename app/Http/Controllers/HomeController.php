<?php

namespace App\Http\Controllers;

class HomeController extends Controller{
    public function home(){
        $hero = [
            'Judul' => 'Raden Adjeng Kartini',
            'Deskripsi' => '1879 sampai 1904, Jepara dan Rembang. Ia hanya hidup 25 tahun, tetapi surat-suratnya mengubah cara bangsa ini memandang pendidikan bagi perempuan.',
            'Tombol' => 'Baca Kisahnya',
            'Route' => 'blog',
        ];

        $pengantar = [
            'Kartini adalah putri Bupati Jepara. Ia sempat bersekolah di sekolah dasar Belanda, tetapi pada usia 12 tahun harus berhenti dan tinggal di rumah sesuai adat bangsawan Jawa pada masa itu.',
            'Dari dalam rumah ia terus membaca dan menulis surat kepada sahabat-sahabatnya di Belanda. Ia menulis tentang keinginannya agar anak perempuan boleh belajar, bukan hanya menunggu dinikahkan. Setelah Kartini wafat, surat-surat itu dibukukan dan kini dikenal sebagai Habis Gelap Terbitlah Terang.',
        ];

        $sekilas = [
            [
                'Label' => 'Lahir',
                'Isi' => '21 April 1879, Jepara, Jawa Tengah',
            ],
            [
                'Label' => 'Wafat',
                'Isi' => '17 September 1904, Rembang, Jawa Tengah',
            ],
            [
                'Label' => 'Dikenal lewat',
                'Isi' => 'Surat-surat yang dibukukan menjadi Door Duisternis tot Licht (1911)',
            ],
            [
                'Label' => 'Gelar',
                'Isi' => 'Pahlawan Kemerdekaan Nasional (Keppres No. 108 Tahun 1964)',
            ],
            [
                'Label' => 'Diperingati',
                'Isi' => 'Setiap 21 April sebagai Hari Kartini',
            ],
        ];

        return view('home', ['hero' => $hero, 'pengantar' => $pengantar, 'sekilas' => $sekilas]);
    }
}
