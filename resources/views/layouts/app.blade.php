<!DOCTYPE html> 
<html lang="fr"> 
<head> 
<title>lycce moulay ismail</title> 
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<script src="{{ asset('js/myjs.js') }}"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-JZ1qj7jVl8FyaeXmFu+VUjMp5b/8GH8zv5xqXCQwc4cqrGf8hZmtU0wSGrnTvgjR4B0MmaaXMX6zWezoeIgFRw==" crossorigin="anonymous" referrerpolicy="no-referrer" />



<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial
scale=1"> 
</head> 

<body> 

    <!-- navigation.+++++++++++++++++  -->
<nav>
    <img src="{{ asset('images/logo.png') }}" alt="Example">
    <div class="navigation">
        <ul>
        <li><a href="#">Houm</a></li>
        <li><a href="#">aboute</a></li>
        <li><a href="#">blog</a></li>
        <li><a href="#">courses</a></li>
        <li><a href="#">contact</a></li>
        <button class="butt1">Login</button>
        </ul>
    </div>
</nav>



<div> 
@yield('content') 
</div> 



<div>
   <h1>footer</h1>
</div>



</body> 
</html> 