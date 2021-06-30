<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="assets/xi/Tropisianimal.png">
    <link rel="stylesheet" href="css/style.css">
    <title>Galeri</title>
  </head>
  <body>
 
  <nav class="navbar navbar-expand-lg navbar-light bg-transparent fixed-top">
  <div class="container">
  <a class="navbar-brand font-weight-bold text-white" href="#">Tropisianimal</a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto">
      <a class="nav-item nav-link js-scroll-trigger active text-white" href="/">HOME <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link js-scroll-trigger text-white" href="/tentang">TENTANG</a>
      <a class="nav-item nav-link js-scroll-trigger text-white" href="/berita">BERITA</a>
      <a class="nav-item nav-link js-scroll-trigger text-white" href="/galeri">GALERI</a>
      <a class="nav-item nav-link js-scroll-trigger text-white" href="/kontak">KONTAK</a>
    </div>
  </div>
  </div>
</nav>
<div class="jumbotron" style="height:500px; background : url({{ asset('assets/x1/dark-back.png')}})">
<div class="container">
<h1 class="display-4 font-weight-bold text-white" style="padding-top:85px; font-size:45px;">Galeri
</h1>
</div>
</div>
<br>
<br>
<div class="container">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style=" width:100%; ">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <div class="slide-box">
      <img src="assets/x2/pakboy.png"  class="d-block w-100" alt="Firts slide">
   </div>
  </div>
  <div class="carousel-item">
    <div class="slide-box">
    <img src="assets/x2/harimau-putih.png"  class="d-block w-100" alt="Second slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span><div style="width:60px; height:60px; margin-left:75px; background-color: #2c8d1f;" class="ml-75mb-2">
        <img src="{{asset('assets/arrow-right (1).svg')}}" style="margin:18px 0 0 5px;" width="20px"></div></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span><div style="width:60px; height:60px; margin-left:75px; background-color: #2c8d1f;" class="ml-75mb-2">
        <img src="{{asset('assets/arrow-right (1).svg')}}" style="margin:18px 0 0 5px;" width="20px"></div></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
</br>
<div class="container">
  <div class="flex-container-column" style="margin-left:20px;">
    <div class="flex-container-row">
      <div class="card-galery">
        <img src="assets/x2/elang.png" alt="" srcset="" class="card-img-top">
      </div>
      <div class="card-galery">
      <img src="assets/x1/rusa.png" alt="" srcset="" class="card-img-top">
      </div>
      <div class="card-galery">
      <img src="assets/x2/mamoth.png" alt="" srcset="" class="card-img-top">
      </div>
      <div class="card-galery">
      <img src="assets/x2/kakaktua.png" alt="" srcset="" class="card-img-top">
      </div>
    </div>
  </div>
  <div class="flex-container-column" style="margin-left:20px;">
    <div class="flex-container-row">
    <div class="card-galery">
    <img src="assets/x1/kudanil.png" alt="" srcset="" class="card-img-top">
    </div>
    <div class="card-galery">
    <img src="assets/x1/orang-utan.png" alt="" srcset="" class="card-img-top">
    </div>
    <div class="card-galery">
    <img src="assets/x1/ikan.png" alt="" srcset="" class="card-img-top">
    </div>
    <div class="card-galery">
    <img src="assets/x2/komodo.png" alt="" srcset="" class="card-img-top">
    </div>
    </div>
  </div>
</div>
<footer class="footer" style="margin-top:65px;">
  <div class="footer-left">
    <h1>Tropisianimal</h1>
    <p>Lorem ipsum dolor sit amet,</br>
    consectetur adipisicing elit.</br>
    Tempora minus nemo dignissimos</br>
    xplicabo, aliquid facere! Ab laboriosam,</p>
      <div class="socials">
      <a href="#"><img src="assets/x1/facebook.png"></i></a>
      <a href="#"><img src="assets/x1/twitter.png"></i></a>
      </div>
</div>
<ul class="footer-right">
  <li>
  <h3>Usefull Links</h3>
  <ul class="box">
    <li><a href="#">Blog</a></li>
    <li><a href="#">Hewan</a></li>
    <li><a href="#">Galeri</a></li>
    <li><a href="#">Testimonials</a></li>
  </ul>
  </li>
  <li class="features">
  <h3>Privacy</h3>
  <ul class="box">
    <li><a href="#">Karir</a></li>
    <li><a href="#">tentang Kami</a></li>
    <li><a href="#">Kontak Kami</a></li>
    <li><a href="#">Servis</a></li>
  </ul>
  </li>
  <li>
  <h3>Contact info</h3>
  <ul class="box">
    <li><img src="{{asset('assets/mail.svg')}}">&nbsp;<a href="#">Tropisianimal@gmail.com</a></li>
    <li><img src="{{asset('assets/phone.svg')}}">&nbsp;<a href="#">+62 812 3456 7890 </a></li>
    <li><img src="{{asset('assets/map-pin.svg')}}">&nbsp;<a href="#">Kota Bandung, Jawa Barat</a></li>
    
  </ul>
  </li>
  </ul>
  
  

  <div class="footer-bottom">
  <p>Copyright &copy;2020 all right reserved</p>
  </div>  
  </footer>




<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

