<!DOCTYPE html>
<html>
<head>
    <title>BookVerse - Upload eBook</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #fdf6e3;
        }
        .navbar {
            background-color: #0a2647;
        }
        .btn-upload {
            background-color: limegreen;
            color: white;
        }
        .btn-danger {
            position: absolute;
            top: 10px;
            left: 10px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <a href="#" class="btn btn-danger">X</a>
        <nav class="navbar navbar-expand-lg navbar-dark mb-4">
            <div class="container-fluid">
                <a class="btn btn-light me-2" href="#">Upload eBook</a>
                <a class="btn btn-outline-light me-2" href="#">Lihat eBook</a>
                <a class="btn btn-outline-light" href="#">Koleksi</a>
            </div>
        </nav>
        
        <form action="{{ route('ebook.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-10">
                    <input type="text" name="judul" class="form-control" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Penulis</label>
                <div class="col-sm-10">
                    <input type="text" name="penulis" class="form-control" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Kategori</label>
                <div class="col-sm-10">
                    <select name="kategori" class="form-select">
                        <option value="Item 0">Pilih Kategori</option>
                        <option value="Item 1">Novel</option>
                        <option value="Item 2">Cerpen</option>
                        <option value="Item 3">Komik</option>
                        <option value="Item 4">Fantasi</option>
                        <option value="Item 5">Fiksi Ilmiah</option>
                        <option value="Item 6">Horror</option>
                        <option value="Item 7">Misteri</option>
                        <option value="Item 8">Romansa</option>
                        <option value="Item 9">Biografi</option>
                        <option value="Item 10">AutoBiografi</option>
                        <option value="Item 11">Sejarah</option>
                        <option value="Item 12">Sains</option>
                        <option value="Item 13">Teknologi</option>
                        <option value="Item 14">Agama</option>
                        <option value="Item 15">Self Improvement</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">File</label>
                <div class="col-sm-10">
                    <input type="file" name="file" class="form-control" required>
                </div>
            </div>
            <div class="text-center">
                <button class="btn btn-upload" type="submit">Upload</button>
            </div>
        </form>
    </div>
</body>
</html>
