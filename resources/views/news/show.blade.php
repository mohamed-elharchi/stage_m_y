@extends('layouts.Acceuill')
@section('content')
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Slider using property Clip</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">



    <style>


.a {
	position: relative;
	width: 100%;
	height: 100vh;
    margin-bottom: 50px;
    margin-top: 80px;



}
.lefteee {
	float: left;
	height: 100%;
	width: 60%;
	padding: 3rem 3rem 3rem 5rem;
	display: table;

}
.lefteee > div {
	display: table-cell;
	vertical-align: middle;
}
span {
  color: #E8CA2B;
  font-size: 14px;
  font-weight: bold;
  letter-spacing: 2px;
  display: inline-block;
  text-transform: uppercase;
  font-family: sans-serif;
  margin-bottom: 4rem;
}
.zzz {
	font-size: 4rem;
	margin-bottom: 3rem;
}
.zzz + .bb {
  color: #949494;
  font-size: 1.6rem;
  margin-bottom: 4rem;
}
.bb  {
  font-size: 2.6rem;
  color: #000;



}
.sliderrr {
	float: right;
	position: relative;
	width: 40%;
	height: 100%;
    margin-top: 48px;

}
.sliderrr li {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background-size: cover;
	background-repeat: no-repeat;
	background-position: 50% 50%;
	-webkit-transition: clip .7s ease-in-out, z-index 0s .7s;
	transition: clip .7s ease-in-out, z-index 0s .7s;
	clip: rect(0, 100vw, 100vh, 100vw);
	display: table;
}
.centerrr-y {
	display: table-cell;
	vertical-align: middle;
	text-align: center;
	color: #fff;
}
h3 {
	font-size: 5rem;
	font-style: italic;
}
h3 +  {
	font-size: 1.6rem;
	display: inline-block;
	color: #fff;
	margin-top: 2rem;
}
h3, h3 +  {
	opacity: 0;
	-webkit-transition: opacity .7s 0s, -webkit-transform .5s .2s;
	transition: opacity .7s 0s, -webkit-transform .5s .2s;
	transition: opacity .7s 0s, transform .5s .2s;
	transition: opacity .7s 0s, transform .5s .2s, -webkit-transform .5s .2s;
	-webkit-transform: translate3d(0, 50%, 0);
	        transform: translate3d(0, 50%, 0);
}
li.current h3, li.current h3 +  {
	opacity: 1;
	-webkit-transition-delay: 1s;
	        transition-delay: 1s;
	-webkit-transform: translate3d(0, 0, 0);
	        transform: translate3d(0, 0, 0);
}
li.current {
	z-index: 1;
	clip: rect(0, 100vw, 100vh, 0);
}
li.prev {
	clip: rect(0, 0, 100vh, 0);
}
.sliderrr navv {
	position: absolute;
	bottom: 5%;
	left: 0;
	right: 0;
	text-align: center;
	z-index: 10;
}
navv  {
	display: inline-block;
	border-radius: 50%;
	width: 1.2rem;

  min-width: 12px;
  min-height: 12px;
	background: #fff;
	margin: 0 1rem;
  -webkit-transition: -webkit-transform .3s;
  transition: -webkit-transform .3s;
  transition: transform .3s;
  transition: transform .3s, -webkit-transform .3s;
}
.current_dot {
	-webkit-transform: scale(1.4);
	        transform: scale(1.4);
}
@media screen and (max-width: 700px) {
	.lefteee {
		width: 100%;
		height: 30%;
	}
	.sliderrr {
		width: 100%;
		height: 70%;
	}
}
    </style>


</head>

<body>

<div class="a">
      <div class="lefteee">
        <div>
          <span>{{ \Carbon\Carbon::parse($news->created_at)->format('d M Y') }}</span>
          <h1 class="zzz"> {{ $news->title }}</h1>
          <p class="bb">{{ $news->paragraph }} </p>
        </div>
      </div>

      <div class="sliderrr">
        <ul>
          <li style="background-image:url({{ asset('imagess/' . $news->image) }}">
          </li>

        </ul>
      </div>
</div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>


    <script>
      $(function() {
	var slider = $(".sliderrr"),
		slides = slider.find('li'),
		nav = slider.find('navv');

	slides.eq(0).addClass('current');

	nav.children('').eq(0).addClass('current_dot');

	});
    </script>

</body>
</html>
@endsection
