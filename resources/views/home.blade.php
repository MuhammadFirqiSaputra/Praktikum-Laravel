<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand mr-auto" href="/">Politeknik Negeri Bengkalis | DIV Rekayasa Perangkat Lunak</a>
        </div>
    </nav>
    
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="text-secondary">Selamat Datang!</h1>
            <h4 class="text-secondary">
                Di Perpustakaan Politeknik Negeri Bengkais
            </h4>
            <h6 class="m-3">
                Silahkan
                <a href="{{ route('auth.login') }}" style="text-decoration: none">masuk</a>
                atau <a href="{{ route('auth.register') }}" style="text-decoration: none">daftar</a>
                jika anda belum punya akun
            </h6>
        </div>
    </div>
    <script>
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    </script>   
</body>
</html>