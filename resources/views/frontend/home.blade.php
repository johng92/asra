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

    <!-- --------------purpose---- -->
         <section class="purpose ">
      <div class="purpose__content">
        <h2 class="purpose__content-title ">OUR PURPOSE</h2>

        <p class="purpose__content-para ">
          Care Today, Stronger Communities Tomorrow
        </p>

        <span class="purpose__content-desc ">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt
          minus veniam, vero dolores eveniet molestias quaerat in id itaque,
          iusto sapiente ipsam iure doloremque possimus magni deserunt aut,
          pariatur debitis?
        </span>

        <button class="purpose__content-btn cta">
          <a href="#" class=""
            >Learn More About Us <i class="fa-solid fa-arrow-right-long"></i
          ></a>
        </button>
      </div>
      <figure class="purpose__img">
        <img src="{{ asset('frontend/images/storis.jpg') }}" alt="">
      </figure>
    </section>

    
    <!-- /*********************************************/ -->
    <!----------------Services------------------>
    <!-- /*********************************************/ -->

    <section class="services  ">
      <h2 class="section__title sec-par">HOW WE HELP</h2>

      <h3 class="services__mini-title sec-title">Creating Real change, Together</h3>

      <div class="services__items services__cards ">
        <div class="services__item">
          <a href="#" class="services__item-icon"
            ><i class="fa-solid fa-hand-holding-heart"></i
          ></a>

          <p class="services__item-title">Healthcare Support</p>
          <span class="section__para"
            >Health Camps, check-ups and essentionl medieines,</span
          >
        </div>
        <div class="services__item">
          <a href="#" class="services__item-icon services__item-user"
            ><i class="fas fa-gears"></i
          ></a>

          <p class="services__item-title">Livelihood Assistance</p>
          <span class="section__para"
            >Support for sustainable income opportunities.</span
          >
        </div>
        <div class="services__item">
          <a href="#" class="services__item-icon"
            ><i class="fa-solid fa-users-gear"></i
          ></a>

          <p class="services__item-title">Social Inclusion</p>
          <span class="section__para"
            >Reducing isolotion and buliding community support.</span
          >
        </div>
        <div class="services__item">
          <a href="#" class="services__item-icon services__item-bood-open"
            ><i class="fa-solid fa-book-open"></i
          ></a>

          <p class="services__item-title">Rights & Awareness</p>
          <span class="section__para"
            >Guidance on government schemed and elder rights.</span
          >
        </div>
      </div>
    </section>


        <!-- *********************************************************Gallery********************************************************************************** -->
    <section class="gallery ">
      <div class="gallery__header">
        <p class="gallery__header-title sec-sub-title ">
          Moments of Strenght and Hope
          <span class=""
            >A glimpse into the lives, stories and activities from our
            communities.</span
          >
        </p>

        <button class="purpose__content-btn gallery__header-btn">
          <a href="#"
            >View Full Gallery <i class="fa-solid fa-arrow-right-long"></i
          ></a>
        </button>
      </div>

      <div class="gallery__items ">
        <div class="gallery__item">
          <figure class="gallery__item-figure">
             <img src="{{ asset('frontend/images/storis.jpg') }}" alt="">
          </figure>
          <p class="glalery__item-para">Community gothering</p>
        </div>
        <div class="gallery__item">
          <figure class="gallery__item-figure">
             <img src="{{ asset('frontend/images/womens.jpg') }}" alt="">
          </figure>
          <p class="glalery__item-para">Livelihood support</p>
        </div>
        <div class="gallery__item">
          <figure class="gallery__item-figure">
            <img src="{{ asset('frontend/images/sitting-old-man.jpg') }}" alt="">
          </figure>
          <p class="glalery__item-para">Health comp</p>
        </div>
        <div class="gallery__item">
          <figure class="gallery__item-figure">
            <img src="{{ asset('frontend/images/women.jpg') }}" alt="">
          </figure>
          <p class="glalery__item-para">Celebrothing life</p>
        </div>
      </div>
    </section>
</body>
</html>