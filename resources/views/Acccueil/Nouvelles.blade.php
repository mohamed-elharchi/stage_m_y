@extends('layouts.Acceuill')
@section('content')
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - News Slider Carousel</title>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css'>
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="{{ asset('css/pages.css') }}">
</head>

<body>
<div class="d">
			<div class="website-d">

				<h1> Moulay Ismail</h1>

			<div class="breaking-news-section">
				<span id="btext">NEWS Lycée</span>
				<marquee direction="left" onmouseover="this.stop()" onmouseout="this.start()">
					<a href="#" class="breaking-news">
						<p class="bntime">11 Jan 2019</p>
						Congress under pressure to reach a deal</a>
					<a href="#" class="breaking-news"><p class="bntime">11 Jan 2019</p>Powerful laser beam is helping track the moon</a>
					<a href="#" class="breaking-news"><p class="bntime">11 Jan 2019</p>Snowstorm buries Pacific Northwest, with more on the way</a>
				</marquee>
			</div>
		</div>
<div class="container-fluid">

  <div class="row">
    <div class="col-md-12">
      <div id="news-slider" class="owl-carousel">
        <div class="post-slide">
          <div class="post-img">
            <img src="https://images.unsplash.com/photo-1596265371388-43edbaadab94?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=301&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=501" alt="">
            <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
          </div>
          <div class="post-content">
            <h3 class="post-title">
              <a href="#">Lorem ipsum dolor sit amet.</a>
            </h3>
            <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus neque quae tempora......</p>
            <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
            <a href="#" class="read-more">Show</a>
          </div>
        </div>

        <div class="post-slide">
          <div class="post-img">
            <img src="https://images.unsplash.com/photo-1533227268428-f9ed0900fb3b?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=303&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=503" alt="">
            <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
          </div>
          <div class="post-content">
            <h3 class="post-title">
              <a href="#">Lorem ipsum dolor sit amet.</a>
            </h3>
            <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus neque quae tempora......</p>
            <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
            <a href="#" class="read-more">Show</a>
          </div>
        </div>

        <div class="post-slide">
          <div class="post-img">
            <img src="https://images.unsplash.com/photo-1564979268369-42032c5ca998?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=300&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=500" alt="">
            <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
          </div>
          <div class="post-content">
            <h3 class="post-title">
              <a href="#">Lorem ipsum dolor sit amet.</a>
            </h3>
            <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus neque quae tempora......</p>
            <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
            <a href="#" class="read-more">Show</a>
          </div>
        </div>

        <div class="post-slide">
          <div class="post-img">
            <img src="https://images.unsplash.com/photo-1576659531892-0f4991fca82b?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=301&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=501" alt="">
            <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
          </div>
          <div class="post-content">
            <h3 class="post-title">
              <a href="#">Lorem ipsum dolor sit amet.</a>
            </h3>
            <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus neque quae tempora......</p>
            <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
            <a href="#" class="read-more">Show</a>
          </div>
        </div>

        <div class="post-slide">
          <div class="post-img">
            <img src="https://images.unsplash.com/photo-1586083702768-190ae093d34d?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=305&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=505" alt="">
            <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
          </div>
          <div class="post-content">
            <h3 class="post-title">
              <a href="#">Lorem ipsum dolor sit amet.</a>
            </h3>
            <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus neque quae tempora......</p>
            <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
            <a href="#" class="read-more">Show</a>
          </div>
        </div>

        <div class="post-slide">
          <div class="post-img">
            <img src="https://images.unsplash.com/photo-1484656551321-a1161420a2a0?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=306&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=506" alt="">
            <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
          </div>
          <div class="post-content">
            <h3 class="post-title">
              <a href="#">Lorem ipsum dolor sit amet.</a>
            </h3>
            <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus neque quae tempora......</p>
            <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
            <a href="#" class="read-more">Show</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- partial -->
  <script src='https://code.jquery.com/jquery-1.12.0.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js'></script>
<script>
  $(document).ready(function() {
    $("#news-slider").owlCarousel({
        items : 3,
        itemsDesktop:[1199,3],
        itemsDesktopSmall:[980,2],
        itemsMobile : [600,1],
        navigation:true,
        navigationText:["",""],
        pagination:true,
        autoPlay:true
    });
});
</script>
</body>
</html>


@endsection

