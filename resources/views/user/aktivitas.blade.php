<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Aktivitas</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="/">
                Politeknik Negeri Bengkalis | DIV Rekayasa Perangkat Lunak </a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/biodata') }}">Biodata</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/berita') }}">Berita RPL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/profile') }}">Profile Lulusan RPL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/aktivitas') }}">Aktivitas Mahasiswa RPL</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-12">
                <h1 class="text-primary">Aktivitas Mahasiswa RPL</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <h3>Mahasiswa Terbaru</h3>
                <ul>
                    <li>Budi setiawan</li>
                    <li>Haikal Saputra</li>
                    <li>Ariel Afza</li>
                </ul>
            </div>
            <div class="col-6">
                <h3>Kegiatan Mahasiswa</h3>
                <ul>
                    <li>UKM Olahraga</li>
                    <li>UKM Kesenian</li>
                    <li>UKMI Al-Islah</li>
                </ul>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>