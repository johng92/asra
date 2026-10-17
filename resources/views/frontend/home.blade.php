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
      <header class="header ">
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


    <!----------------HERO------------------>
    <!-- /*********************************************/ -->
    <section class="hero ">
      <div class="hero__content">
        <h5 class="hero__mini-title">ELDERLY CARE IN JHARKHAND</h5>
        <h1 class="hero__content-title">
          Respectful Aging for a Brighter Tomorrow
        </h1>

        <p class="hero__content-para">
          Lorem ipsum dolor sit, amquibusdam eveniet fugit laborum nulla dolor,
          nihil quisqias ad enim nostrum?
        </p>

        <div class="hero__links">
          <a href="#" class="hero__links-support">Support Our Work</a>
          <a href="#" class="hero__links-story">Watch Our Story</a>
        </div>
      </div>

      <figure class="hero__bg">
        <img src="{{ asset('frontend/images/hero.jpg') }}" alt="">
      </figure>
    </section>

    <!-- ---------------impact------------------------ -->

    <section class="impact">
      <div class="impact__items ">
        <div class="impact__item">
          <a href="#" class="impact__icon"
            ><i class="fa-solid fa-people-group"></i
          ></a>
          <div class="impact__content">
            <h2 class="impact__content-number sec-title">500+</h2>
            <p class="impact__content-para section__para">
              Elderly lives Touched
            </p>
          </div>
        </div>
        <div class="impact__item">
          <a href="#" class="impact__icon"
            ><i class="fa-solid fa-house-chimney"></i
          ></a>
          <div class="impact__content">
            <h2 class="impact__content-number sec-title">25+</h2>
            <p class="impact__content-para section__para">Villoges Covred</p>
          </div>
        </div>
        <div class="impact__item">
          <a href="#" class="impact__icon"><i class="fa-solid fa-heart"></i></a>
          <div class="impact__content">
            <h2 class="impact__content-number sec-sub-para">
              Livelihood Support
            </h2>
            <p class="impact__content-para section__para">
              For a better tomorrow
            </p>
          </div>
        </div>
        <div class="impact__item">
          <a href="#" class="impact__icon">
            <i class="fa-solid fa-users"></i>
          </a>
          <div class="impact__content">
            <h2 class="impact__content-number sec-sub-para">
              community Driven
            </h2>
            <p class="impact__content-para section__para">
              By People, for peopel
            </p>
          </div>
        </div>
      </div>
    </section>
</body>
</html>