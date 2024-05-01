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

        <style>
            /* Form container */
            .form-inline {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                /* Center align the form */
            }

            /* Form group */
            .form-group {
                margin-bottom: 1rem;
            }

            /* Form control */
            .form-control {
                display: block;
                width: 100%;
                padding: 0.375rem 0.75rem;
                font-size: 1rem;
                line-height: 1.5;
                color: #495057;
                background-color: #fff;
                background-clip: padding-box;
                border: 1px solid #ced4da;
                border-radius: 0.25rem;
                transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            }

            .form-control:focus {
                color: #495057;
                background-color: #fff;
                border-color: #80bdff;
                outline: 0;
                box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
            }

            /* Button */
            .btn {
                display: inline-block;
                font-weight: 400;
                color: #fff;
                text-align: center;
                vertical-align: middle;
                user-select: none;
                background-color: #007bff;
                border: 1px solid transparent;
                padding: 0.19rem 0.72rem;
                font-size: 1rem;
                line-height: 1.5;
                border-radius: 0.25rem;
                transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                cursor: pointer;
            }

            .btn:hover {
                color: #fff;
                background-color: #0056b3;
                border-color: #0056b3;
            }

            .btn:focus {
                color: #fff;
                background-color: #0056b3;
                border-color: #0056b3;
                box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
            }

            .btn:active {
                color: #fff;
                background-color: #0056b3;
                border-color: #0056b3;
            }

            .btn:active:focus {
                box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
            }
        </style>

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

                            <form action="{{ route('filterByDepartement') }}" method="GET" class="form-inline">
                                <div class="row align-items-center">
                                    <div class="col-sm-8">
                                        <div class="form-group mr-2">
                                            <select class="form-control" id="role" name="role">
                                                <option value="" disabled selected>select your class</option>
                                                @foreach ($utilisationss as $utilisation)
                                                    <option value="{{ $utilisation->departement->name }}">
                                                        {{ $utilisation->departement->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <button type="submit" class="btn btn-primary">Filtrer</button>
                                    </div>
                                </div>
                            </form>
                        </a>

                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        @foreach ($utilisations as $utilisation)
                            <div class="z">
                                <div class="gallery-item">
                                    <img src="{{ asset('imagess/' . $utilisation->image) }}" class="zzz" alt="">
                                    <div class="gallery-links ">
                                        <a href="{{ asset('imagess/' . $utilisation->image) }}"
                                            title=" <h1>class:{{ $utilisation->departement->name }}</h1>"
                                            class="glightbox "><i class="bi bi-arrows-angle-expand"></i></a>
                                    </div>
                                    <div class="dd" style="color:black;">
                                        <h4><span
                                                style="color:rgb(233, 137, 27);    font-size: 30px;">class:</span>{{ $utilisation->departement->name }}
                                            <a href="{{ asset('imagess/' . $utilisation->image) }}"
                                                download="{{ $utilisation->image }}" class="btn btn-primary"><i
                                                    class="bi bi-download"></i> </a></h4>


                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>


            </section>
            <!-- End Gallery Section -->

        </main>


        <!-- Vendor JS Files -->
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/js/main.js"></script>


    </body>

    </html>
@endsection
