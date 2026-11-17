<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Category</title>
</head>
<body>
    <h1>Tambah Category</h1>
    <form action="/category/store" method="POST">
        @csrf
        <label for="name">Nama Category</label>
        <input type="text" id="name" name="nama_category" placeholder="Nama Category"><br><br>
        <label for="description">Description</label>
        <input type="text" id="description" name="deskripsi_category" placeholder="Description"><br><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>