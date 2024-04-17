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
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
    <div class="container-fluid">
      <div class="row gy-4 justify-content-center">
        @foreach ($utilisations as $utilisation)
        <div class="col-xl-3 col-lg-4 col-md-6">
          <div class="gallery-item h-100">
            <img src="{{ asset('imagess/' . $utilisation->image) }}" class="img-fluid" alt="">
            <div class="gallery-links d-flex align-items-center justify-content-center">
              <a href="{{ asset('imagess/' . $utilisation->image) }}" title="Gallery 1" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
              <a href="{{ asset('imagess/' . $utilisation->image) }}" download="{{ $utilisation->image }}" class="btn btn-primary"><i class="bi bi-download"></i> Download</a>
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




