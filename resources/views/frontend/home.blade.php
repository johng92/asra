<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Asra</title>
    @vite([
        'resources/assets/frontend/scss/app.scss',
        'resources/assets/frontend/js/app.js',
        ])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css" integrity="sha512-QeR2VH+lsBE5LSAe1Q5EnTBbe7XTBubt8dG93Y7gidSgdMCr8nVqKcfKAMyN96SV8KDbZVTDXChatu5G2KQGzg==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body class="">
    <!------------header--------->
    <!-- /*********************************************/ -->
      <header class="header padd ">
      <a class="header__logo" href="index.html">
              <img src="{{ asset('frontend/images/logo3.png') }}" alt="">
      </a>

      <nav class="header__nav">
        <ul class="header__nav-links">
          <li><a class="header__nav-link" href="#">Home</a></li>
          <li><a class="header__nav-link" href="#">About</a></li>
          <li><a class="header__nav-link" href="#">Our Work</a></li>
          <li><a class="header__nav-link" href="#">Stories </a></li>
          <li><a class="header__nav-link" href="#">Gallery</a></li>
          <li><a class="header__nav-link" href="#">Get Involved</a></li>
          <li><a class="header__nav-link" href="#">Blog</a></li>
          <li ><a class="header__nav-link" href="#">Contact</a></li>
          <button class="header__donate-btn">
            <i class="fa-regular fa-heart"></i>
            <a href="#">  Donate Now</a>
          </button>
        </ul>
      </nav>

      <!-- There isn't any content in hamburger so, it'll not hamper website in any way -->
      <div class="hamburger">
        <div class="hamburger__line"></div>
        <div class="hamburger__line"></div>
        <div class="hamburger__line"></div>
      </div>
    </header>


</body>
</html>