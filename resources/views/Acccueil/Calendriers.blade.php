@extends('layouts.Acceuill')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PhotoFolio Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->


  <!-- Google Fonts -->


  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">



<body>

  <!-- ======= Header ======= -->
  <!-- End Header -->

<!-- End Hero Section -->

<main id="main" data-aos="fade" data-aos-delay="1500">

  <!-- Gallery Section -->

  <section id="gallery" class="gallery">
  <div class="header">
  <a href="#default" class="logo">Pour rechercher Calendriers</a>

  <div class="header-right">
    <a class="activeee" href="#home">
    <form class="d-flex" name="form2">

     <select onchange="form2.submit()" name="search2" id="search2" class="custom-select sources" placeholder="Search classe">
        <option value="Search classe" style="text-align: center;">rechercher class :</option>
       @foreach ($utilisations as $utilisation)
      <option value="{{ $utilisation->classe }}">{{ $utilisation->classe }}</option>
       @endforeach
       </select>

      </form>
    </a>

  </div>
</div>
    <div class="container-fluid">
      <div class="row">
        @foreach ($utilisations as $utilisation)
        <div class="z">
          <div class="gallery-item">
            <img  src="{{ asset('imagess/' . $utilisation->image) }}" class="zzz" alt="">
            <div class="gallery-links ">
              <a href="{{ asset('imagess/' . $utilisation->image) }}" title="class:{{ $utilisation->classe }} " class="glightbox "><i class="bi bi-arrows-angle-expand"></i></a>
            </div>
            <div class="dd" style="color:black;"><h4><span style="color:blue;    font-size: 30px;">class:</span>{{ $utilisation->classe }} <a href="{{ asset('imagess/' . $utilisation->image) }}" download="{{ $utilisation->image }}" class="btn btn-primary"><i class="bi bi-download"></i> </a></h4>


            </div>
          </div>
        </div>

        @endforeach
      </div>
    </div>


  </section>
  <!-- End Gallery Section -->

</main>
  <div id="preloader">
    <div class="line">
    </div>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/js/main.js"></script>


</body>

</html>











@endsection




