<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>

    <style>

        .carousel-indicators img{
            width: 70px;
            display: block;
            height: 50px;
        }
        .carousel-indicators button{
            width: max-content!important;
        }
        .carousel-indicators{
            position: unset;

        }
        img{
            width: 100%;
            height: 500px;
           
        }
    </style>
      <form class="d-flex" name="form2">
                  <select class="form-control" onchange="form2.submit()" name="search2" id="search2">
                           @foreach ($utilisations as $utilisation)
                               <option>{{ $utilisation->classe }}</option>
                             @endforeach
                </select>
       </form>
<div class="carousel slide"
id="carouselDemo"
data-bs-wrap="true"
data-bs-ride="carousel">

    <div class="carousel-inner">
    @foreach ($utilisations as $key => $utilisation)
        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
        <img src="{{ asset('imagess/' . $utilisation->image) }}" width="100px">
            <div class="carousel-caption">
                <h5>{{ $utilisation->classe }}</h5>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, nemo?
                </p>
            </div>
        </div>
    @endforeach
    </div>

    <button class="carousel-control-prev"
    type="button"
    data-bs-target="#carouselDemo"
    data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>

    <button class="carousel-control-next"
    type="button"
    data-bs-target="#carouselDemo"
    data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
</button>

    <div class="carousel-indicators">
    @foreach ($utilisations as $key => $utilisation)
        <button type="button" class="{{ $key == 0 ? 'active' : '' }}"
            data-bs-target="#carouselDemo"
            data-bs-slide-to="{{ $key }}">
            <img src="{{ asset('imagess/' . $utilisation->image) }}" width="100px">
        </button>
    @endforeach
    </div>

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
