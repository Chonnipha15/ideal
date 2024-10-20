<?php
	session_start();
	include("connectdb.php");
	error_reporting(0);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Carousel Template · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">

    

    

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

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

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
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
          
          
          <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
          <div class="btn-group" role="group">
    <a class="nav-link active-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
      ประเภทสินค้า
    </a>
         <ul class="dropdown-menu">
      	  <li>
    		<li><a class="dropdown-item" href="dressing.php">ห้องแต่งตัว</a></li>
            <li><a class="dropdown-item" href="kitchen.php">ห้องครัว</a></li>
            <li><a class="dropdown-item" href="living.php">ห้องนั่งเล่น</a></li>
            <li><a class="dropdown-item" href="bathroom.php">ห้องน้ำ</a></li>
            <li><a class="dropdown-item" href="bedroom.php">ห้องนอน</a></li>
            <li><a class="dropdown-item" href="Office.php">ห้องทำงาน</a></li>
         </li>
        </ul>
  </div>
</div>

 
		  <li class="nav-item">
          <a href="cart.php"class="nav-link active-primary">สั่งซื้อสินค้า</a>
          </li>
          
          
          <div class="btn-group" role="group">
    <a class="nav-link active-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
      เข้าสู่ระบบ
    </a>
         <ul class="dropdown-menu">
      	  <li>
    		<li><a class="dropdown-item" href="login.php">ลูกค้า</a></li>
            <li><a class="dropdown-item" href="login1.php">แอดมิน</a></li>
        </ul>
  </div>
    
    
  
         </li>
        </ul>
        
        <form method="post" action="" class="d-flex" >
          <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
    </div>
  </nav>
</header>

<main>
  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="album py-5 bg-body-tertiary">
    <div class="container">

      
      
      
         <?php
	include("connectdb.php");
	@$kw = $_POST['search'];	
	$sql = "SELECT * FROM dressing WHERE p_id='{$_GET['pid']}' ";
	$rs = mysqli_query($conn,$sql);
	while ($data = mysqli_fetch_array($rs)){
?>     
        <div class="card mb-3" style="max-width: 1200px  max-higth :1200px ;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="images/<?=$data['p_id'];?>.<?=$data['p_picture'];?>" width="100%" height="280" > 
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?=$data['p_name'];?><br></h5>
        <p class="card-text"><?=$data['p_detail'];?></p>
        <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                
                  <p><a href="cart.php?id=<?=$data['p_id'];?>" type="button" class="btn btn-sm btn-info">หยิบใส่ตะกร้า</a></p>
      </div>
     </div>
     </div>
    </div>
  </div>
</div>
    <?php
		}
		mysqli_close($conn);
		?>  
          
    
                 
       </div>
    </div><!-- /.row -->

  
    <!-- START THE FEATURETTES -->      
    

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2017–2022 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
   

      
  </body>
</html>
