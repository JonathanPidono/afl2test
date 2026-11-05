<?php

namespace App\Http\Controllers;

class BlogController extends Controller
{
    public function blog()
    {
        $posts = [
            [
                'judul' => 'Masa Kecil di Jepara',
                'isi'   => 'Kartini lahir pada 21 April 1879 di Mayong, Jepara. Ayahnya, R.M. Adipati Ario Sosroningrat, kemudian menjabat Bupati Jepara. Sebagai anak bangsawan, Kartini boleh bersekolah di ELS (Europese Lagere School) dan di sana ia belajar bahasa Belanda.',
            ],
            [
                'judul' => 'Masa Pingitan',
                'isi'   => 'Pada usia 12 tahun Kartini harus berhenti sekolah dan dipingit di rumah sesuai adat saat itu. Ia tidak berhenti belajar. Buku, koran, dan majalah berbahasa Belanda menjadi jendelanya untuk mengenal dunia luar.',
            ],
            [
                'judul' => 'Surat untuk Sahabat',
                'isi'   => 'Kartini mulai berkirim surat dengan sahabat-sahabatnya di Belanda, di antaranya Stella Zeehandelaar dan Rosa Abendanon. Dalam surat itu ia menulis tentang pendidikan perempuan, adat yang mengekang, dan harapannya untuk kemajuan bangsanya.',
            ],
            [
                'judul' => 'Sekolah untuk Anak Perempuan',
                'isi'   => 'Kartini menikah dengan K.R.M. Adipati Ario Singgih Djojo Adhiningrat, Bupati Rembang. Suaminya mendukung cita-citanya, dan Kartini mendirikan sekolah bagi anak perempuan di lingkungan kantor kabupaten Rembang.',
            ],
            [
                'judul' => 'Wafat di Usia Muda',
                'isi'   => 'Kartini melahirkan putranya, Soesalit Djojoadhiningrat, pada 13 September 1904. Empat hari kemudian, pada 17 September 1904, Kartini wafat di usia 25 tahun dan dimakamkan di Desa Bulu, Rembang.',
            ],
            [
                'judul' => 'Habis Gelap Terbitlah Terang',
                'isi'   => 'J.H. Abendanon mengumpulkan surat-surat Kartini dan menerbitkannya dengan judul Door Duisternis tot Licht. Versi bahasa Indonesianya dikenal sebagai Habis Gelap Terbitlah Terang dan sampai sekarang masih dibaca banyak orang.',
            ],
            [
                'judul' => 'Pahlawan Nasional',
                'isi'   => 'Presiden Soekarno menetapkan Kartini sebagai Pahlawan Kemerdekaan Nasional melalui Keppres No. 108 Tahun 1964. Tanggal lahirnya, 21 April, diperingati setiap tahun sebagai Hari Kartini.',
            ],
            [
                'judul' => 'Warisan Kartini',
                'isi'   => 'Gagasan Kartini tentang hak perempuan untuk belajar menjadi dasar bagi banyak perjuangan pendidikan sesudahnya. Sekolah Kartini dibuka di beberapa kota sejak 1912, dan namanya tetap menjadi simbol kesetaraan dalam pendidikan.',
            ],
        ];

        return view('blog', ['posts' => $posts]);
    }
}
