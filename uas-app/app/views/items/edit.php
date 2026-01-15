<!DOCTYPE html>
<html>
<head>
    <title>Edit Item</title>
    <link href="https://cdn.jsdelivr.net/npmbootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h3>Edit Item</h3>

    <form method="post" action="/uas-app/items?action=update">
        <input type="hidden" name="id" value="<?= $item['id'] ?>">

        <input class="form-control mb-2" name="name"
               value="<?= $item['name'] ?>" required>

        <textarea class="form-control mb-3" name="description" required><?= $item['description'] ?></textarea>

        <button class="btn btn-primary">Update</button>
        <a href="/uas-app/items" class="btn btn-secondary">Kembali</a>
    </form>
</div>

</body>
</html>
