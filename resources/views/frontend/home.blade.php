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

    <!--  -->

    
    <section class="stories ">
      <div class="stories__header">
        <p class="stories__header-title">
          REAL STORIES
          <span class="section__title stories__header-mini-title">
            Voices That Inspire
          </span>
        </p>
        <button class="stories__header-btn">
          <a href="#">
            Read More Stories <i class="fa-solid fa-arrow-right-long"></i>
          </a>
        </button>
      </div>

      <div class="story-cards responsive-grid">
        <div class="story-card">
          <figure class="story-card__image">
           <img src="{{ asset('frontend/images/womens.jpg') }}" alt="">
          </figure>
          <div class="story-card__content">
            <h3 class="story-card__title ">
              A New Beginnign At 72
            </h3>
            <p class="story-card__excerpt ">
              With With Livelihood support , Ram Nawa can now support himself
              and live with dignity,
            </p>

            <button class="story-card__link">
              <a href="#">
                Read More Stories <i class="fa-solid fa-arrow-right-long"></i>
              </a>
            </button>
          </div>
        </div>
        <div class="story-card">
          <figure class="story-card__image">
           <img src="{{ asset('frontend/images/storis.jpg') }}" alt="">
          </figure>
          <div class="story-card__content">
            <h3 class="story-card__title ">
              A New Beginnign At 72
            </h3>
            <p class="story-card__excerpt ">
              With With Livelihood support , Ram Nawa can now support himself
              and live with dignity,
            </p>

            <button class="story-card__link">
              <a href="#">
                Read More Stories <i class="fa-solid fa-arrow-right-long"></i>
              </a>
            </button>
          </div>
        </div>
        <div class="story-card">
          <figure class="story-card__image">
            <img src="{{ asset('frontend/images/storis.jpg') }}" alt="">
          </figure>
          <div class="story-card__content">
            <h3 class="story-card__title section__title">
              A New Beginnign At 72
            </h3>
            <p class="story-card__excerpt ">
              With With Livelihood support , Ram Nawa can now support himself
              and live with dignity,
            </p>

            <button class="story-card__link">
              <a href="#">
                Read More Stories <i class="fa-solid fa-arrow-right-long"></i>
              </a>
            </button>
          </div>
        </div>
        <div class="story-card">
          <figure class="story-card__image">
            <img src="{{ asset('frontend/images/storis.jpg') }}" alt="">
          </figure>
          <div class="story-card__content">
            <h3 class="story-card__title ">
              A New Beginnign At 72
            </h3>
            <p class="story-card__excerpt ">
              With With Livelihood support , Ram Nawa can now support himself
              and live with dignity,
            </p>

            <button class="story-card__link">
              <a href="#">
                Read More Stories <i class="fa-solid fa-arrow-right-long"></i>
              </a>
            </button>
          </div>
        </div>
      </div>
    </section>

    <section class="get-involved">

    <div class="get-involved__content">
      <h3 class="get-involved__content-title">GET INVOLVED</h3>
      <h3 class="get-involved__content-mini-title">You Can Make a Difference</h3>
      <p class="get-involved__content-para">Your support helps us reach more elderly people and areat lasting change in their lives.</p>

      <div class="get-involved__links">
        <a href="#" class="get-involved__links-donate">Donate Now</a>
        <a href="#" class="get-involved__links-help">Other Ways to Help</a>
      </div>
    </div>

  <div class="involvement-options ">
  <div class="involvement">
    <a class="involvement__icon" href="#">🛒</a>
    <h3 class="involvement__title">Volunteer</h3>
    <p class="involvement__description">Your time and skills con bring a smille.</p>

  </div>
  <div class="involvement">
    <a class="involvement__icon" href="#">🛒</a>
    <h3 class="involvement__title">Volunteer</h3>
    <p class="involvement__description">Your time and skills con bring a smille.</p>

  </div>
  <div class="involvement">
    <a class="involvement__icon" href="#">🛒</a>
    <h3 class="involvement__title">Volunteer</h3>
    <p class="involvement__description">Your time and skills con bring a smille.</p>

  </div>
  </div>
    </section>


    <section class="blog">

    <div class="blog__header">
      <div class="">
    <h3 class="blog__header-eybrow">LATEST FROM OUR BLOG</h3>
    <h2 class="blog__header-title">Insights, Updates and Stories</h2>
    </div>

    <div class="blog__action ">
      <a href="#" class="blog__action-link">View All Psts</a>

    </div>
    
    </div>

   <div class="blog-grid responsive-grid">
      <div class="blog-card">
         <figure class="blog-card__image">
          <img src="{{ asset('frontend/images/storis.jpg') }}" alt="">
        </figure>
       <div class="blog-card__content">
          <h4 class="blog-card__category">COMMUNITY</h4>
          <h2 class="blog-card__title">Why Elderly Care Matters in Rural India</h2>

          <div class="blog-card__time">
            <p class="blog-card__time-date">Sep 25, 2026</p>
            <a href="#" class="blog-card__time-link">Read More <i class="fa-solid fa-arrow-right-long"></i></a>
          </div>
        </div>
      </div>
      <div class="blog-card">
         <figure class="blog-card__image">
          <img src="{{ asset('frontend/images/old-man.jpg') }}" alt="">
        </figure>
       <div class="blog-card__content">
          <h4 class="blog-card__category">COMMUNITY</h4>
          <h2 class="blog-card__title">Why Elderly Care Matters in Rural India</h2>

          <div class="blog-card__time">
            <p class="blog-card__time-date">Sep 25, 2026</p>
            <a href="#" class="blog-card__time-link">Read More <i class="fa-solid fa-arrow-right-long"></i></a>
          </div>
        </div>
      </div>
      <div class="blog-card">
         <figure class="blog-card__image">
          <img src="{{ asset('frontend/images/storis.jpg') }}" alt="">
        </figure>
       <div class="blog-card__content">
          <h4 class="blog-card__category">COMMUNITY</h4>
          <h2 class="blog-card__title">Why Elderly Care Matters in Rural India</h2>

          <div class="blog-card__time">
            <p class="blog-card__time-date">Sep 25, 2026</p>
            <a href="#" class="blog-card__time-link">Read More <i class="fa-solid fa-arrow-right-long"></i></a>
          </div>
        </div>
      </div>
     
   </div>

    </section>

    <section class="footer">
      <div class="footer__main responsive-grid">
        <div class="footer__brand">
          <a href="#" class="footer__brand-title">Asra</a>
          <p class="footer__brand-para">Working  for the core. dignity and better Livelihood of elderly peopel in imarginllsed communities ocross jharkhond.</p>
       
          <div class="footer__social ">
            <a href="#" class="footer__social-link"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#" class="footer__social-link"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#" class="footer__social-link"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#" class="footer__social-link"><i class="fa-brands fa-facebook-f"></i></a>
          </div>
           </div>

        <div class="footer__links">
          <h2 class="footer__links-title">Quick Links</h2>
          <div class="">
           <a href="#" class="footer__links-link">Home</a>
           <a href="#" class="footer__links-link">About</a>
           <a href="#" class="footer__links-link">Our Work</a>
           <a href="#" class="footer__links-link">Stories</a>
           <a href="#" class="footer__links-link">gallery</a>
           <a href="#" class="footer__links-link">blog</a>
           <a href="#" class="footer__links-link">Contact</a>
          </div>
        </div>
        <div class="footer__involved">
          <h2 class="footer__involved-title">Get Involved</h2>
          <div class="">
           <a href="#" class="footer__involved-link">Donote</a>
           <a href="#" class="footer__involved-link">Volnuteer</a>
           <a href="#" class="footer__involved-link">Partner With Us</a>
           <a href="#" class="footer__involved-link">Sponsor a Couse</a>
          </div>
        </div>
        <div class="footer__contacts">
          <h2 class="footer__contacts-title">Contacts Us</h2>
          <div class="">
            <a href="#" class="footer__contacts-location"><i class="fa-solid fa-location-dot"></i> Dumka, JHARKHAND, India</a>
            <a href="#" class="footer__contacts-location"><i class="fa-solid fa-location-dot"></i> Dumka, JHARKHAND, India</a>
            <a href="#" class="footer__contacts-location"><i class="fa-solid fa-location-dot"></i> Dumka, JHARKHAND, India</a>
          </div>
        </div>
      </div>

      <hr>

      <div class="footer__copyright">
        <p class="footer__copyright-para"><a href="#">@2026</a> Asra All rights Reseved.</p>
 
       <div class="footer__copyright-links">
        <a href="#" class="footer__copyright-link">privacy Policy |</a>
        <a href="#" class="footer__copyright-link">Terms of Use |</a>
        <a href="#" class="footer__copyright-link">Sitemap</a>
       </div>  
     </div>

    </section>
</body>
</html>