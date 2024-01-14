<title>Home</title>
<?php
$htgejala = mysqli_query($conn, "SELECT count(*) as total from gejala");
$dtgejala = mysqli_fetch_assoc($htgejala); ?>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
    <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
    <li data-target="#carousel-example-generic" data-slide-to="2" class="active"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active">
      <img src="aset/banner/cat1.jpg" alt="First slide">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="aset/banner/cat2.jpg" alt="Second slide">
      <div class="carousel-caption">
      </div>
    </div><!--
                  <div class="item active">
                    <img src="aset/banner/daging.jpg" alt="Third slide">
                    <div class="carousel-caption">
                    </div>
                  </div>-->
  </div>
  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
    <span class="fa fa-angle-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
    <span class="fa fa-angle-right"></span>
  </a>
</div>
<br>
<div class="row">
  <div class="col-sm-4 text-center padding wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeIn;">
    <div class="single-service">

      <img src="aset/banner/icon3.png" alt="">

      <h2>Responsif</h2>
      <p>Sistem pakar diagnosis penyakit kucing ini bisa menyesuaikan ukuran perangkat anda, jadi bisa di akses melalui perangkat mobile atau smartphone dengan nyaman.</p>
    </div>
  </div>
  <div class="col-sm-4 text-center padding wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="600ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeIn;">
    <div class="single-service">

      <img src="aset/banner/icon2.png" alt="">

      <h2>Akurat</h2>
      <p>Sistem Pakar ini terus di sesuaikan perhitungan diagnosanya, agar akurasi terhadap penyakit yang diderita lebih sesuai dan menjadi acuan para pecinta kucing.</p>
    </div>
  </div>
  <div class="col-sm-4 text-center padding wow fadeIn animated" data-wow-duration="1000ms" data-wow-delay="900ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 900ms; animation-name: fadeIn;">
    <div class="single-service">
      <img src="aset/banner/icon1.png" alt="">
      <h2>Admin</h2>
      <p>Terdapat fitur Login yang hanya dapat diakses oleh admin dan pakar, untuk mengatur pengetahuan dan CF pakar, dan memiliki tampilan yang mudah dioperasikan oleh pakar.</p>
    </div>
  </div>
</div>
<div></div>