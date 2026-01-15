<!DOCTYPE html>
<html>
<head>
    <title>Tambah Item</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h3>Tambah Item</h3>

    <form method="post" action="/uas-app/items?action=store">
        <input class="form-control mb-2" name="name" placeholder="Nama item" required>
        <textarea class="form-control mb-3" name="description" placeholder="Deskripsi" required></textarea>
        <button class="btn btn-primary">Simpan</button>
        <a href="/uas-app/items" class="btn btn-secondary">Kembali</a>
    </form>
</div>

</body>
</html>
