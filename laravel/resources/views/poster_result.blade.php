<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #ffffff, #9e9d9e);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .card {
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            background: white;
        }
        .poster-img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        .btn-custom {
            background-color: #8a8a8a;
            color: white;
            transition: 0.3s;
        }
        .btn-custom:hover {
            background-color: #5f5f5f;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card text-center">
                    <h2 class="text-primary">Hasil Pendaftaran</h2>
                    <hr>
                    <p><strong>Nama:</strong> {{ $data['name'] }}</p>
                    <p><strong>Kelas:</strong> {{ $data['class'] }}</p>
                    <p><strong>Judul Poster:</strong> {{ $data['poster_title'] }}</p>
                    <p><strong>Poster:</strong></p>
                    <img src="{{ asset('storage/' . $data['poster_path']) }}" class="poster-img" width="300" alt="Poster">
                    <br><br>
                    <a href="/poster" class="btn btn-custom w-100">Kembali</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
