<!DOCTYPE html>
<html>
<head>
    <title>Items</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <div class="d-flex justify-content-between mb-3">
        <h3>Data Items</h3>
        <div>
            <a href="/uas-app/items?action=create" class="btn btn-success">+ Tambah</a>
            <a href="/uas-app/logout" class="btn btn-danger">Logout</a>
        </div>
    </div>

    <table class="table table-bordered table-striped">
        <tr>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>

        <?php if (!empty($items)): ?>
            <?php foreach ($items as $i): ?>
            <tr>
                <td><?= $i['name'] ?></td>
                <td><?= $i['description'] ?></td>
                <td>
                    <a href="/uas-app/items?action=edit&id=<?= $i['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="/uas-app/items?action=delete&id=<?= $i['id'] ?>"
                       class="btn btn-danger btn-sm"
                       onclick="return confirm('Hapus data?')">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="3" class="text-center">Belum ada data</td>
            </tr>
        <?php endif; ?>
    </table>
</div>

</body>
</html>
