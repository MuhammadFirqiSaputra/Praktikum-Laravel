<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Berita</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand mr-auto" href="/">Politeknik Negeri Bengkalis | DIV Rekayasa Perangkat Lunak</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ml-auto">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item ml-auto">
                        <a class="nav-link" href="{{ route('berita') }}">Berita</a>
                    </li>
                    <li class="nav-item ml-auto">
                        <a class="nav-link" href="{{ route('profile') }}">Profile</a>
                    </li>
                    <li class="nav-item ml-auto">
                        <a class="nav-link" href="{{ route('aktivitas') }}">Aktivitas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container mt-4">
        <h1 class="text-center">Berita Kampus</h1>
        <hr>

        <!-- Daftar Berita -->
        <div class="row">
            <!-- Berita 1 -->
            <div class="col-md-12">
                <div class="card mb-4">
                    <img src="/image/polbeng1.jpeg" class="card-img-top" alt="Gambar Berita 1">
                    <div class="card-body">
                        <h5 class="card-title">Polbeng Terima Bantuan Beasiswa Pendidikan Dari Provinsi Riau</h5>
                        <p class="card-text">Politeknik Negeri Bengkalis menerima bantuan beasiswa sebesar Rp 693.500.000, Selasa (26/9/2023). Bantuan tersebut diserahkan langsung oleh Gubernur Riau (Gubri), Syamsuar kepada Direktur Politeknik Negeri Bengkalis, Johny Custer

Gubernur Riau Syamsuar mengatakan, beasiswa tersebut sebagai upaya dari Pemerintah Provinsi (Pemprov) Riau untuk memajukan pendidikan. Maka, kata dia, hal terpenting yang musti diperhatikan dalam menciptakan pendidikan yang unggul adalah dengan memperhatikan Sumber Daya Manusia (SDM).</p>
                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Berita 2 -->
            <div class="col-md-12">
                <div class="card mb-4">
                    <img src="/image/polbeng2.jpeg" class="card-img-top" alt="Gambar Berita 2">
                    <div class="card-body">
                        <h5 class="card-title">Polbeng Jadi Tuan Rumah Dalam Kegiatan ABEC Ke 11</h5>
                        <p class="card-text">Politeknik Negeri Bengkalis (Polbeng) menjadi tuan rumah dalam kegiatan Applied Business and Engineering Conference (ABEC) ke 11 yang dilaksanakan pada Kamis, 21 September 2023.

ABEC merupakan salah satu seminar nasional diselenggarakan Polbeng bekerjasama dengan 13 politeknik di Sumatera yakni Politeknik Negeri Batam, Politeknik Caltex Riau, Politeknik Negeri Manufaktur Bangka Belitung, Politeknik Negeri Pertanian Payakumbuh, Politeknik Negeri Padang, Politeknik Negari Medan, Politeknik Negeri Lampung, Politeknik Jambi, Politeknik Negeri Lhoksemawe, Politeknik Kampar, Politeknik Negeri Sriwijaya, Politeknik Negeri Media Kreatif dan Batam Tourism Polytecnic.</p>
                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Tambahkan Berita Lainnya di sini -->

        </div>
    </div>

    <!-- Sertakan skrip JavaScript Bootstrap (JQuery dan Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>