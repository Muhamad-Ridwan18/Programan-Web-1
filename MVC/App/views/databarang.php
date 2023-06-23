<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MVC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

  </head>
  <body>
    <?php include 'layout/header.php'; ?>
    <div class="position-absolute top-50 start-50 translate-middle">
        <div class="d-flex justify-content-center">
            <div class="card text-center mt-5 mb-5" style="width: 25rem">
                <div class="card-body">
                    <h5 class="card-title">Data Barang</h5>
                    <p class="card-text">Nama: <?php echo $nama; ?></p>
                    <p class="card-text">Harga: Rp <span><?php echo $harga; ?></span></p>
                    <p class="card-text">Stok: <span><?php echo $stok; ?></span></p>
                    <a href="#" class="btn btn-primary">Beli</a>
                </div>
            </div>
        </div>
    </div>
    <?php include 'layout/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>