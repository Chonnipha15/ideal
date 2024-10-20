<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>IDEAL HOME</title>

    <!-- เชื่อมต่อ Bootstrap ผ่าน CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

  </head>
  <body>
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">IDEAL HOME</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active-primary" aria-current="page" href="index.php">Home</a>
          </li>
          
          <li class="nav-item">
            <a href="cart.php" class="nav-link active-primary">สั่งซื้อสินค้า</a>
          </li>
          <li class="nav-item">
            <a href="ordercus.php" class="nav-link active-primary">ประวัติการสั่งซื้อ</a>
          </li>
        </ul>
        
        <form method="post" action="" class="d-flex">
          <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
</header>

<main>
  <div class="container marketing">
    <div class="album py-5 bg-body-tertiary">
      <div class="container">
        <h2>ตะกร้าสินค้า - IDEAL HOME</h2>
        <a href="index3.php" class="btn btn-primary">กลับไปเลือกสินค้า</a> 
        <a href="clear2.php" class="btn btn-warning">ลบสินค้าทั้งหมด</a> 
        <!-- เนื้อหาของตะกร้าสินค้า -->
      </div>
    </div>
  </div>
</main>

<!-- เชื่อมต่อ Bootstrap JavaScript ผ่าน CDN -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.2.0/js/bootstrap.bundle.min.js"></script>

</body>
</html>
