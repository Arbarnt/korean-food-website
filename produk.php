<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Poppins" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
      crossorigin="anonymous">
    
  
    <title>Korean Food - Home</title>
  </head>
  
  <body>
  
    <header class="site-header">
      <div class="wrapper">
        <div class="menu-icon"></div>
        <h1>Korean Food</h1>
        <a href="home.php" class="special-link">Home<span class="fas fa-angle-double-left"></span></a>
      </div>
    </header>
   
       
    <center>
    <br/><br/><br/><br/><br/><br/><br/><br/><br/>
<table style="padding_top:400px; margin: 0 auto;">
<?php 
  $host = "localhost"; 
  $user = "root";
  $pass = "";
  $nama_db = "edit";
  $koneksi = mysqli_connect($host,$user,$pass,$nama_db); 

  if(!$koneksi){ 
    die ("Koneksi dengan database gagal: ".mysql_connect_error());
  }
$kolom = 4;
$i =1;
$query = "Select * from  barang";
$qu = mysqli_query($koneksi,$query);
while($ab=mysqli_fetch_array($qu)) {
    if(($i) % $kolom== 1) {
        echo '<tr>';
    } ?>
    <td><div class="card" style="width: 18rem;">
     <a href="#"><img src="admin/create_barang/gambar/<?php echo $ab['gambar']; ?>" width="200px"; class="card-img-tas" alt=""></a>
     <div class="card-body">
     <h3 class="card-title"><a href="detail1.html"><?php echo $ab['nama_produk']; ?></a></h3>
     <p class="card-text"><?php echo $ab['deskripsi']; ?></p>
     <a href="detail1.html" class="btn btn-primary">Lihat Detail</a>
     </div>
</div></td>
     <?php 
     if(($i) % $kolom== 0) {
    echo '</tr>';
    }
    $i++;
}
?>
</table>
</center>

        <!-- Home cards 1 -->
        <section class="home-cards">
          <div>
            <a href="https://wa.me/6281229532926?text=Nama%3A%0ANo.%20HP%3A%0AAlamat%3A%0APesanan%3A%0AJumlah%3A"><img src="img/s1 (2).png" alt=""></a>
            <a href="https://wa.me/6281229532926?text=Nama%3A%0ANo.%20HP%3A%0AAlamat%3A%0APesanan%3A%0AJumlah%3A"><h3>Corn Tea Bubuk</h3></a>
            <p>Stok : 20</p>
            <p>
              250 gram
            </p>
            <div class="price">Rp.75.000</div>
            <a href="https://wa.me/6281229532926?text=Nama%3A%0ANo.%20HP%3A%0AAlamat%3A%0APesanan%3A%0AJumlah%3A">Shop Now <i class="fas fa-chevron-right"></i></a>
          </div>
          <div>
            <a href="https://wa.me/6281229532926?text=Nama%3A%0ANo.%20HP%3A%0AAlamat%3A%0APesanan%3A%0AJumlah%3A"><img src="img/s2.png" alt="" /></a>
            <a href="https://wa.me/6281229532926?text=Nama%3A%0ANo.%20HP%3A%0AAlamat%3A%0APesanan%3A%0AJumlah%3A"><h3>Misugaru Bubuk</h3></a>
            <p>Stok : 20</p>
            <p>
            150 gram 
            </p>
            <div class="price">Rp.35.000</div>
            <a href="https://wa.me/6281229532926?text=Nama%3A%0ANo.%20HP%3A%0AAlamat%3A%0APesanan%3A%0AJumlah%3A">Shop Now <i class="fas fa-chevron-right"></i></a>
          </div>
          <div>
            <a href="https://wa.me/6281229532926?text=Nama%3A%0ANo.%20HP%3A%0AAlamat%3A%0APesanan%3A%0AJumlah%3A"><img src="img/s3.png" alt="" /></a>
            <a href="https://wa.me/6281229532926?text=Nama%3A%0ANo.%20HP%3A%0AAlamat%3A%0APesanan%3A%0AJumlah%3A"><h3>Banana Milk Bubuk</h3></a>
            <p>Stok : 20</p>
            <p>
             500 gram
            </p>
            <div class="price">Rp.37.500</div>
            <a href="https://wa.me/6281229532926?text=Nama%3A%0ANo.%20HP%3A%0AAlamat%3A%0APesanan%3A%0AJumlah%3A">Shop Now<i class="fas fa-chevron-right"></i></a>
          </div>
          <div>
            <a href="https://wa.me/6281229532926?text=Nama%3A%0ANo.%20HP%3A%0AAlamat%3A%0APesanan%3A%0AJumlah%3A"><img src="img/s4.png" alt="" /></a>
            <a href="https://wa.me/6281229532926?text=Nama%3A%0ANo.%20HP%3A%0AAlamat%3A%0APesanan%3A%0AJumlah%3A"><h3> Saus Gochujang</h3></a>
            <p>Stok : 20</p>
            <p>
              250 ml
            </p>
            <div class="price">Rp.20.000</div>
            <a href="https://wa.me/6281229532926?text=Nama%3A%0ANo.%20HP%3A%0AAlamat%3A%0APesanan%3A%0AJumlah%3A">Shop Now <i class="fas fa-chevron-right"></i></a>
          </div>
          
            <div>
              <a href="https://wa.me/6281229532926?text=Nama%3A%0ANo.%20HP%3A%0AAlamat%3A%0APesanan%3A%0AJumlah%3A"><img src="img/s5..png" alt=""></a>
              <a href="https://wa.me/6281229532926?text=Nama%3A%0ANo.%20HP%3A%0AAlamat%3A%0APesanan%3A%0AJumlah%3A"><h3>Tepung Rendah Kalori</h3></a>
              <p>Stok : 20</p>
              <p>
                1 Kg
              </p>
              <div class="price">Rp.15.000</div>
              <a href="https://wa.me/6281229532926?text=Nama%3A%0ANo.%20HP%3A%0AAlamat%3A%0APesanan%3A%0AJumlah%3A">Shop Now <i class="fas fa-chevron-right"></i></a>
            </div>
            <div>
              <a href="https://wa.me/6281229532926?text=Nama%3A%0ANo.%20HP%3A%0AAlamat%3A%0APesanan%3A%0AJumlah%3A"><img src="img/s6..png" alt="" /></a>
              <a href="https://wa.me/6281229532926?text=Nama%3A%0ANo.%20HP%3A%0AAlamat%3A%0APesanan%3A%0AJumlah%3A"><h3>Minyak Wijen</h3></a>
              <p>Stok : 20</p>
              <p>
              300 Ml
              </p>
              <div class="price">Rp.30.000</div>
              <a href="https://wa.me/6281229532926?text=Nama%3A%0ANo.%20HP%3A%0AAlamat%3A%0APesanan%3A%0AJumlah%3A">Shop Now <i class="fas fa-chevron-right"></i></a>
            </div>
            <div>
              <a href="https://wa.me/6281229532926?text=Nama%3A%0ANo.%20HP%3A%0AAlamat%3A%0APesanan%3A%0AJumlah%3A"><img src="img/s7..png" alt="" /></a>
              <a href="https://wa.me/6281229532926?text=Nama%3A%0ANo.%20HP%3A%0AAlamat%3A%0APesanan%3A%0AJumlah%3A"><h3>Gochugaru</h3></a>
              <p>Stok : 20</p>
              <p>
               1 Kg
              </p>
              <div class="price">Rp.135.000</div>
              <a href="https://wa.me/6281229532926?text=Nama%3A%0ANo.%20HP%3A%0AAlamat%3A%0APesanan%3A%0AJumlah%3A">Shop Now<i class="fas fa-chevron-right"></i></a>
            </div>
            <div>
              <a href="https://wa.me/6281229532926?text=Nama%3A%0ANo.%20HP%3A%0AAlamat%3A%0APesanan%3A%0AJumlah%3A"><img src="img/s8.png" alt="" /></a>
              <a href="https://wa.me/6281229532926?text=Nama%3A%0ANo.%20HP%3A%0AAlamat%3A%0APesanan%3A%0AJumlah%3A"><h3> Madu</h3></a>
              <p>Stok : 20</p>
              <p>
                1 Kg
              </p>
              <div class="price">Rp.130.000</div>
              <a href="https://wa.me/6281229532926?text=Nama%3A%0ANo.%20HP%3A%0AAlamat%3A%0APesanan%3A%0AJumlah%3A">Shop Now <i class="fas fa-chevron-right"></i></a>
            </div>

            <div>
              <a href="https://wa.me/6281229532926?text=Nama%3A%0ANo.%20HP%3A%0AAlamat%3A%0APesanan%3A%0AJumlah%3A"><img src="img/jjj.png" alt=""></a>
              <a href="https://wa.me/6281229532926?text=Nama%3A%0ANo.%20HP%3A%0AAlamat%3A%0APesanan%3A%0AJumlah%3A"><h3>Jajangmyeon</h3></a>
              <p>Stok : 20</p>
              <p>
                200 Gram
              </p>
              <div class="price">Rp.15.000</div>
              <a href="https://wa.me/6281229532926?text=Nama%3A%0ANo.%20HP%3A%0AAlamat%3A%0APesanan%3A%0AJumlah%3A">Shop Now <i class="fas fa-chevron-right"></i></a>
            </div>
            <div>
              <a href="https://wa.me/6281229532926?text=Nama%3A%0ANo.%20HP%3A%0AAlamat%3A%0APesanan%3A%0AJumlah%3A"><img src="img/kkkk.png" alt="" /></a>
              <a href="https://wa.me/6281229532926?text=Nama%3A%0ANo.%20HP%3A%0AAlamat%3A%0APesanan%3A%0AJumlah%3A"><h3>Keju Mozarella</h3></a>
              <p> Stok : 20</p>
              <p>
              200 Gram
              </p>
              <div class="price">Rp.35.000</div>
              <a href="https://wa.me/6281229532926?text=Nama%3A%0ANo.%20HP%3A%0AAlamat%3A%0APesanan%3A%0AJumlah%3A">Shop Now <i class="fas fa-chevron-right"></i></a>
            </div>
            <div>
              <a href="https://wa.me/6281229532926?text=Nama%3A%0ANo.%20HP%3A%0AAlamat%3A%0APesanan%3A%0AJumlah%3A"><img src="img/www.png" alt="" /></a>
              <a href="https://wa.me/6281229532926?text=Nama%3A%0ANo.%20HP%3A%0AAlamat%3A%0APesanan%3A%0AJumlah%3A"><h3>Wijen</h3></a>
              <p>Stok : 20</p>
              <p>
               200 Gram
              </p> 
              <div class="price">Rp.12.000</div>
              <a href="https://wa.me/6281229532926?text=Nama%3A%0ANo.%20HP%3A%0AAlamat%3A%0APesanan%3A%0AJumlah%3A">Shop Now<i class="fas fa-chevron-right"></i></a>
            </div>
            <div>
              <a href="https://wa.me/6281229532926?text=Nama%3A%0ANo.%20HP%3A%0AAlamat%3A%0APesanan%3A%0AJumlah%3A"><img src="img/zzzzzzz.png" alt="" /></a>
              <a href="https://wa.me/6281229532926?text=Nama%3A%0ANo.%20HP%3A%0AAlamat%3A%0APesanan%3A%0AJumlah%3A"><h3> Sosis</h3></a>
              <p> Stok : 20</p>
              <p>
                500 Gram
              </p>
              <div class="price">Rp.45.000</div>
              <a href="https://wa.me/6281229532926?text=Nama%3A%0ANo.%20HP%3A%0AAlamat%3A%0APesanan%3A%0AJumlah%3A">Shop Now <i class="fas fa-chevron-right"></i></a>
            </div>
          </section>
          
        
            <!-- Site footer -->
          
          
          <!-- Follow -->
          
          
          <style type="text/css">
        
        * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  text-align: center;
}

:root {
  --max-w: 1200px;

  --grey-1: #ececec;
  --grey-2: #a0a09f;
  --grey-3: #313131;

  --accent-1: #bbd813;
  --accent-2: #ffffff;
}

html {
  height: 100vh;
  overflow: hidden;
}

body {
  font-family: 'Poppins', sans-serif;
  background: #f8f8f8;
  color: var(--grey-3);
  height: 100vh;
  overflow-x: hidden;
  perspective: 1px;
}

/* Header */

.site-header {
  background: #f8f8f8;
  box-shadow: 0 2px 3px rgba(0, 0, 0, 0.05);
  position: sticky;
  top: 0;
  z-index: 1000;
}

.site-header .wrapper {
  max-width: var(--max-w);
  margin: 0 auto;
  display: grid;
  grid-template-columns: 1fr minmax(max-content, 1fr) 1fr;
  align-items: center;
  height: 65px;
  padding: 0 10px;
}

.site-header .menu-icon {
  background: var(--grey-3);
  height: 2px;
  width: 25px;
  position: relative;
}

.site-header .menu-icon::before {
  content: '';
  background: var(--grey-3);
  height: 2px;
  width: 25px;
  position: absolute;
  top: -7px;
}

.site-header .menu-icon::after {
  content: '';
  background: var(--grey-3);
  height: 2px;
  width: 25px;
  position: absolute;
  top: 7px;
}

h1 {
  font-family: 'Playfair Display', serif;
  font-weight: normal;
  transform: translateY(-2px);
}

.site-header h1 {
  justify-self: center;
}

a {
  text-decoration: none;
  color: inherit;
}

.special-link {
  color: var(--accent-1);
}

.site-header .special-link {
  justify-self: end;
}

.special-link span {
  font-size: 13px;
  margin-left: 3px;
  transition: all 0.2s;
}

.special-link:hover span {
  transform: translateX(5px);
}

/* Main Content */


/* Search Nav */

.search {
  height: 350px;
  display: grid;
  justify-items: center;
  align-items: center;
  padding: 100px 0 60px 0;
  position: relative;
  overflow: hidden;
}

.search::before {
  content: '';
  background-image: url(img/aaa.png);
  position: absolute;
  top: -130px;
  right: 0;
  bottom: 0;
  left: -10px;
  transform: translateZ(-0.5px) scale(1.5);
}

/* Form */

.search form {
  position: relative;
}

.search input {
  max-width: calc(100vw - 20px);
  width: 750px;
  font-size: 35px;
  font-family: 'Playfair Display', serif;
  border: none;
  padding: 10px 30px 15px;
  color: var(--grey-3);
  outline: none;
  border-radius: 5px;
  background: rgba(255, 255, 255, .9);
  transition: all 0.2s;
}

.search input:focus {
  width: 780px;
}

.search input:focus::placeholder {
  color: var(--grey-2);
}

.search input::placeholder {
  font-style: italic;
  color: var(--grey-3);
  transition: all 0.2s;
}

.search button {
  position: absolute;
  right: 30px;
  bottom: 24px;
  border: none;
  background: transparent;
  cursor: pointer;
}

.search .fa-search {
  font-size: 25px;
  color: var(--grey-3);
}

/* Buttons */

ul {
  list-style: none;
}

.search ul {
  position: relative;
  display: flex;
}

.btn {
  font-size: 20px;
  text-transform: uppercase;
  border-radius: 50px;
  display: block;
  height: 50px;
  width: 175px;
  text-align: center;
  line-height: 50px;
  letter-spacing: 2px;
  transition: all 0.2s;
}

.btn:hover {
  transform: translateY(-5px);
}

.search .btn {
  color: white;
  background: var(--accent-1);
  margin: 0 25px;
}
    
    /* Showcase */
    .showcase {
      width: 100%;
      height: 400px;
      background: url() no-repeat center center/cover;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      justify-content: flex-end;
      padding-bottom: 50px;
      margin-bottom: 20px;
    }
    
    .showcase h2, .showcase p {
      margin-bottom: 10px;
    }
    
    .showcase .btn {
      margin-top: 20px;
    }
    
    /* Home cards */
    .home-cards {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      grid-gap: 20px;
      margin-bottom: 40px;
    }
    
    .home-cards img {
      width: 100%;
      margin-bottom: 20px;
    }
    
    .home-cards h3 {
      margin-bottom: 5px;
    }
    
    .home-cards a {
      display: inline-block;
      padding-top: 10px;
      color: #0067b8;
      text-transform: uppercase;
      font-weight: bold;
    }
    
    .home-cards a:hover i {
      margin-left: 10px;
    }
    
    /* Xbox */
    .xbox {
      width: 100%;
      height: 350px;
      background: url('https://i.ibb.co/tBJGPD9/xbox.png') no-repeat center center/cover;
      margin-bottom: 20px;
    }
    
    .xbox .content {
      width: 40%;
      padding: 50px 0 0 30px;
    }
    
    .xbox p, .carbon p {
      margin: 10px 0 20px;
    }
    
    /* Carbon */
    .carbon {
      width: 100%;
      height: 350px;
      background: url('https://i.ibb.co/72cgtsz/carbon.jpg') no-repeat center center/cover;
    }
    
    .carbon .content {
      width: 55%;
      padding: 100px 0 0 30px;
    }
    
    /* Follow */
    .follow {
      display: flex;
      align-items: center;
      justify-content: flex-start;
      margin: 30px 0 30px;
    }
    
    .follow * {
      margin-right: 10px;
    }
    
    /* Links */
    .links {
      background: #f2f2f2;
      color: #616161;
      font-size: 12px;
      padding: 35px 0;
    }
    
    .links-inner {
      max-width: 1100px;
      margin: 0 auto;
      padding: 0 20px;
      display: grid;
      grid-template-columns: repeat(6, 1fr);
      grid-gap: 10px;
      align-items: flex-start;
      justify-content: center;
    }
    
    .links li {
      line-height: 2.8;
    }
    
  
    
    
    @media(max-width: 700px) {
      .menu-btn {
        display: block;
      }
    
      .menu-btn:hover {
        opacity: 0.5;
      }
    
      .main-nav ul.right-menu {
        margin-right: 50px;
      }
    
      .main-nav ul.main-menu {
        display: block;
        position: absolute;
        top:0;
        left: 0;
        background: #f2f2f2;
        width: 50%;
        height: 100%;
        border-right: #ccc 1px solid;
        opacity: 0.9;
        padding: 30px;
        transform: translateX(-500px);
        transition: transform 0.5s ease-in-out;
      }
    
      .main-nav ul.main-menu li {
        padding: 10px;
        border-bottom: #ccc solid 1px;
        font-size: 14px;
      }
    
      .main-nav ul.main-menu li:last-child {
        border-bottom: 0;
      }
    
      .main-nav ul.main-menu.show {
        transform: translateX(-20px);
      }
    
      .home-cards {
        grid-template-columns: repeat(2, 1fr);
      }
    
      .xbox .content p {
        display: none;
      }
    
      .xbox .content h2 {
        margin-bottom: 20px;
      }
    
      .carbon .content {
        width: 85%;
      }
    
      .links .links-inner {
        grid-template-columns: repeat(2, 1fr);
      }
    }
    
    @media(max-width: 500px) {
      .home-cards {
        grid-template-columns: 1fr;
      }
    
      .links .links-inner {
        grid-template-columns: 1fr;
      }
    
      .links .links-inner ul {
        margin-bottom: 20px;
      }
      
      .site-footer
{
  background-color:#26272b;
  padding:45px 0 20px;
  font-size:15px;
  line-height:24px;
  color:#737373;
}
.copyright-text
{
  margin:0
}
@media (max-width:991px)
{
  .site-footer [class^=col-]
  {
    margin-bottom:30px
  }
}
@media (max-width:767px)
{
  .site-footer
  {
    padding-bottom:0
  }
  .site-footer .copyright-text,.site-footer .social-icons
  {
    text-align:center
  }
}

   
}

          </style>
    

