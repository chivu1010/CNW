
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <form method="POST" action="index.php" class="mx-5 mt-5">
        <h1>Thêm sản phẩm</h1>
        <input type="hidden" name="action" value="add">
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Tên sản phẩm</label>
            <input type="text" name="name" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Giá</label>
            <input type="text" name="price" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
        <a class="btn btn-danger" href="index.php">Cancel</a>
    </form>
</body>
</html>