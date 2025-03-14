<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Lomba Desain Poster</title>
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
                <div class="card">
                    <h2 class="text-center text-primary">Pendaftaran Lomba Desain Poster</h2>
                    <form action="/poster/submit" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Peserta</label>
                            <input type="text" class="form-control" name="name" placeholder="Masukkan nama Anda" required>
                        </div>
                        <div class="mb-3">
                            <label for="class" class="form-label">Kelas</label>
                            <input type="text" class="form-control" name="class" placeholder="Masukkan kelas Anda" required>
                        </div>
                        <div class="mb-3">
                            <label for="poster_title" class="form-label">Judul Poster</label>
                            <input type="text" class="form-control" name="poster_title" placeholder="Masukkan judul poster" required>
                        </div>
                        <div class="mb-3">
                            <label for="poster_file" class="form-label">Upload Poster (JPG/PNG, max 2MB)</label>
                            <input type="file" class="form-control" name="poster_file" accept=".jpg,.png" required>
                        </div>
                        <button type="submit" class="btn btn-custom w-100">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
