@extends('sb-alumni/app_alumni')
@section('title', 'Kuesioner - Alumni')
    
@section('content1')
     <!-- Page Heading -->
     <style>
     .alert-primary {
        color: #000000;
        background-color: #dce3f9;
        border-color: #cdd8f6;
    }
    </style>
     <h1 class="h3 mb-4 text-gray-800 text-center">Kuesioner - Alumni</h1>
     <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <div class="container px-4 text-center">
                <div class="alert alert-primary" role="alert">Para alumni yang terhormat, saat ini kami sedang mengadakan Tracer Study kepada alumni Polibatam. Studi ini dilakukan dalam rangka mengidentifikasi keberadaan alumni setelah lulus kuliah. Tujuan studi ini untuk mengevaluasi proses dan hasil perkuliahan, penyempurnaan serta penjaminan kualitas pembelajaran di Polibatam. Berkaitan dengan hal tersebut kami mohon partisipasi saudara meluangkan waktu untuk menjawab pertanyaan dalam kuisioner ini, data yang telah disampaikan akan dijaga kerahasiaannya. Atas perhatian dan kerjasama yang baik serta bantuannya, kami mengucapkan terima kasih.</div>
                <div class="alert alert-light" role="alert">

        <style>
            form {
                margin: auto;
                width: 700px;
                padding: 50px;
                background-color: #a4a4a6;
                border: 3px solid #ccc;
                border-radius: 10px;
                font-family: Arial, Helvetica, sans-serif;
            }
            input[type="text"], input[type="email"], input[type="password"], select {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #100909;
                border-radius: 4px;
                box-sizing: border-box;
            }
            button[type="submit"] {
                background-color: #1313bb;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }
            button[type="submit"]:hover {
                background-color: #34aae9;
            }
            .alert-light {
                color: #000;
                background-color: #fefefe;
                border-color: #fdfdfe;
            }
        </style>
    <body>
        <form>
                <h5>Umpan balik dari Lulusan<h5><br>

            <label for="nim">NIM:</label><br>
            <input type="text" id="nim" name="nim"><br>
            <label for="nama">Nama:</label><br>
            <input type="text" id="nama" name="nama"><br>
            <label for="tahun">Tahun Masuk:</label><br>
            <input type="text" id="tahun" name="tahun"><br>
            <label for="kelas">Kelas:</label><br>
            <select id="kelas" name="kelas">
                <option value="">Pilih Kelas</option>
                <option value="pagi">Reguler Pagi</option>
                <option value="malam">Karyawan Malam</option>
            </select><br>
            <label for="jurusan">Jurusan:</label><br>
            <select id="jurusan" name="jurusan">
                <option value="">Pilih Jurusan</option>
                <option value="IF">Teknik Informatika</option>
                <option value="mesin">Teknik Mesin</option>
                <option value="elektro">Teknik Elektro</option>
                <option value="manajemen">Manajemen Bisnis</option>
            </select><br>
            <label for="jurusan">Prodi:</label><br>
            <select id="jurusan" name="jurusan">
                <option value="">Pilih Prodi</option>
                <option value="male">D3 Teknik Informatika</option>
                <option value="female">D3 Teknik Geomatika</option>
                <option value="female">D3 Teknik Mesin</option>
                <option value="female">D3 Teknik Instrumentasi</option>
                <option value="female">D3 Akuntansi</option>
                <option value="female">D3 Teknik perawatan pesawat terbang</option>
                <option value="female">D3 Teknik Elektronika Manufaktur</option>
                <option value="female">D4 Akuntansi Manajerial</option>
                <option value="female">D4 Administrasi Bisnis Terapan</option>
                <option value="female">D4 Administrasi Bisnis Terapan ( International Class)</option>
                <option value="female">D4 Teknologi Rekayasa Konstruksi Perkapalan</option>
                <option value="female">D4 Animasi</option>
                <option value="female">D4 Teknik Multimedia dan jaringan</option>
                <option value="female">D4 Rekayasa Keamanan Siber</option>
                <option value="female">D4 Rekayasa Perangkat Lunak</option>
                <option value="female">D4 Teknologi Rekayasa Elektronika</option>
                <option value="female">D4 Teknik Mekatronika</option>
                <option value="female">D4 Teknik Rekayasa Pembangkit Energi</option>
                <option value="female">D4 Teknik Robotika</option>
                <option value="female">D4 Teknologi Rekayasa Pengelasan dan Fabrikasi</option>
            </select><br>
            <label for="date">Bulan dan Tahun Lulus</label><br>
            <input type="text" id="date" name="date"><br>
            <label for="gender">Jenis Kelamin:</label><br>
            <select id="gender" name="gender">
                <option value="">Pilih jenis kelamin</option>
                <option value="male">Laki-laki</option>
                <option value="female">Perempuan</option>
                </select><br>
            <label form="usia">Usia:</label>
            <input type="text" id="usia" name="usia"><br>
            <label form="email">Email:</label>
            <input type="text" id="email" name="email"><br>
            <label form="alamat">Alamat:</label>
            <input type="text" id="alamat" name="alamat"><br>
            <label form="telp">No. Hp saat ini:</label>
            <input type="text" id="telp" name="telp"><br><br><br>
            <h5>Pendataan Ketenagakerjaan<h5><br>
                <label for="">Apakah saat ini anda sudah bekerja?</label><br>
                <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                          Sudah
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                          Belum
                        </label>
                </div><br>
                <label for="">Apakah anda bekerja di tempat magang?</label><br>
                <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                          Ya
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                          Tidak
                        </label>
                </div><br>
                <label for="">Skala Perusahaan tempat Anda bekerja</label><br>
                <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                          Lokal
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                          Nasional
                        </label>
                        <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                  Internasional
                                </label>
                </div><br>
                <label for="">Apakah anda memiliki usaha/berwirausaha?</label><br>
                <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                          Ya
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                          Tidak
                        </label>
                </div><br>
                <label form="">Sudah berapa lama anda bekerja?</label>
                <input type="text" id="" name=""><br>
                <label form="alamat">Dimana alamat anda bekerja?</label>
                <input type="text" id="alamat" name="alamat"><br><br>
                <label form="">Bagaimana kepuasan Anda terhadap kondisi pembeljaran di Politeknik Negeri Batam?</label>
                <h6 class="text-gray-800 text-center">Tidak Baik Sekali = 1</h6>
                <h6 class="text-gray-800 text-center">Tidak Baik = 2</h6>
                <h6 class="text-gray-800 text-center">Cukup = 3</h6>
                <h6 class="text-gray-800 text-center">Baik = 4</h6>
                <h6 class="text-gray-800 text-center">Baik Sekali = 5</h6><br>
                <label for="">Kualitas pendidik/guru/dosen/instruktur</label><br>
                <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">1</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">2</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                        <label class="form-check-label" for="inlineRadio3">3</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                        <label class="form-check-label" for="inlineRadio3">4</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                        <label class="form-check-label" for="inlineRadio3">5</label>
                      </div><br><br>
                <label for="">Kesempatan berkomunikasi di luar kelas dengan pendidik/guru/dosen/instruktur</label><br>
                <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">1</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">2</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                        <label class="form-check-label" for="inlineRadio3">3</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                        <label class="form-check-label" for="inlineRadio3">4</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                        <label class="form-check-label" for="inlineRadio3">5</label>
                      </div><br><br>
                <label for="">Bimbingan akademik secara umum</label><br>
                <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">1</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">2</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                        <label class="form-check-label" for="inlineRadio3">3</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                        <label class="form-check-label" for="inlineRadio3">4</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                        <label class="form-check-label" for="inlineRadio3">5</label>
                      </div><br><br>
                <label for="">Bimbingan untuk menghadapi ujian akhir</label><br>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">1</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">2</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                        <label class="form-check-label" for="inlineRadio3">3</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                        <label class="form-check-label" for="inlineRadio3">4</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                        <label class="form-check-label" for="inlineRadio3">5</label>
                      </div><br><br>
                <label for="">Materi pelajaran/mata kuliah</label><br>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">1</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">2</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                        <label class="form-check-label" for="inlineRadio3">3</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                        <label class="form-check-label" for="inlineRadio3">4</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                        <label class="form-check-label" for="inlineRadio3">5</label>
                      </div><br><br>
                <label for="">Keberagaman program studi/bidang keahlian/keterampilan yang ditawarkan</label><br>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">1</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">2</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                        <label class="form-check-label" for="inlineRadio3">3</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                        <label class="form-check-label" for="inlineRadio3">4</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                        <label class="form-check-label" for="inlineRadio3">5</label>
                      </div><br><br>
                <label for="">Sistem Penilaian</label><br>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">1</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">2</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                        <label class="form-check-label" for="inlineRadio3">3</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                        <label class="form-check-label" for="inlineRadio3">4</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                        <label class="form-check-label" for="inlineRadio3">5</label>
                      </div><br><br>
                <label for="">Penekanan pada praktik dan praktikum</label><br>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">1</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">2</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                        <label class="form-check-label" for="inlineRadio3">3</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                        <label class="form-check-label" for="inlineRadio3">4</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                        <label class="form-check-label" for="inlineRadio3">5</label>
                      </div><br><br>
                <label for="">Penekanan pada praktik dan praktikum</label><br>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">1</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">2</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                        <label class="form-check-label" for="inlineRadio3">3</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                        <label class="form-check-label" for="inlineRadio3">4</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                        <label class="form-check-label" for="inlineRadio3">5</label>
                      </div><br><br>
                <label for="">Metode pengajaran</label><br>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">1</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">2</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                        <label class="form-check-label" for="inlineRadio3">3</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                        <label class="form-check-label" for="inlineRadio3">4</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                        <label class="form-check-label" for="inlineRadio3">5</label>
                      </div><br><br>
                <label for="">Koleksi buku perpustakaan</label><br>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">1</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">2</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                        <label class="form-check-label" for="inlineRadio3">3</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                        <label class="form-check-label" for="inlineRadio3">4</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                        <label class="form-check-label" for="inlineRadio3">5</label>
                      </div><br><br>
                <label for="">Ketesediaan bahan ajar</label><br>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">1</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">2</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                        <label class="form-check-label" for="inlineRadio3">3</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                        <label class="form-check-label" for="inlineRadio3">4</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                        <label class="form-check-label" for="inlineRadio3">5</label>
                      </div><br><br>
                <label for="">Kualitas dari fasilitas yang disediakan</label><br>
                <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">1</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">2</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                        <label class="form-check-label" for="inlineRadio3">3</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                        <label class="form-check-label" for="inlineRadio3">4</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                        <label class="form-check-label" for="inlineRadio3">5</label>
                      </div><br><br>
                <label for="">Kualitas program magang</label><br>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">1</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">2</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                        <label class="form-check-label" for="inlineRadio3">3</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                        <label class="form-check-label" for="inlineRadio3">4</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                        <label class="form-check-label" for="inlineRadio3">5</label>
                      </div><br><br>
            <script>
                function validateForm() {
                    var gender = document.getElementById("gender").value; 
                    var nim = document.getElementById("nim").value;
                    var nama = document.getElementById("nama").value;
                    var tahun = document.getElementById("tahun").value; var date = document.getElementById("date").value;
                    var alamat = document.getElementById("alamat").value;
                    var usia = document.getElementById("usia").value;
                    var email = document.getElementById("email").value;
                    var jurusan = document.getElementById("jurusan").value;
                    var prodi = document.getElementById("prodi").value; 
                    var date = document.getElementById("date").value;
                    var telp = document.getElementById("telp").value;
                    var kelas = document.getElementById("kelas").value;
                    if (nama == "") {
                        alert("Anda belum mengisi Nama");
                        return false;
                    }
                    if (nim == "") {
                        alert("Anda belum mengisi NIM");
                        return false;
                    }
                    if (tahun == "") {
                        alert("Anda belum mengisi Tahun Masuk");
                        return false;
                    }
                    if (gender == "") {
                        alert("Anda belum mengisi Jenis Kelamin");
                        return false;
                    }
                    if (alamat == "") {
                        alert("Anda belum mengisi Alamat");
                        return false;
                    }
                    if (kelas == "") {
                        alert("Anda belum mengisi Kelas");
                        return false;
                    }
                    if (jurusan == "") {
                        alert("Anda belum mengisi Jurusan");
                        return false;
                    }
                    if (prodi == "") {
                        alert("Anda belum mengisi Prodi");
                        return false;
                    }
                    if (date == "") {
                        alert("Anda belum mengisi Bulan dan Tahun Lulus");
                        return false;
                    }
                    if (usia == "") {
                        alert("Anda belum mengisi Usia");
                        return false;
                    }
                    if (email == "") {
                        alert("Anda belum mengisi Email");
                        return false;
                    }
                    if (telp == "") {
                        alert("Anda belum mengisi No. Telp");
                        return false;
                    }
                    var yakin = confirm("Apakah Anda yakin ingin menyimpan?");
                    if (yakin) {
                        alert("Data sudah tersimpan.");
                    } else {
                        alert("");
                    }
                    
            }
            
        </script>
        </form>
    </body>
    
    
@endsection