<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">



<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Apple Store</title>
  <meta name="title" content="Apple">
  <meta name="description" content="This is a e-commerce website. ">

  <link rel="shortcut icon" href="index.php" type="image/svg+xml">


  <link rel="stylesheet" href="assets/css/style.css">
  <script src="../ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600&amp;family=Work+Sans:wght@400;500;700&amp;display=swap"
    rel="stylesheet">

</head>

<body id="top">


<div id="preloader">
  <div id="loader"></div>
</div>



  <header class="header" data-header>
    <div class="header-top">
      <div class="container">
        <a href="index.php" class="logo">
          <img src=" file-apple-logo-black-svg-wikimedia-commons-1.png" width="40" height="28" alt="booken home">
        </a>

        <div class="input-wrapper">
          <input type="search" name="search" placeholder="Zoeken" class="input-field">

          <button class="btn btn-primary">Zoeken</button>
        </div>

        <div class="header-action">

          <button class="header-action-btn cart-btn" aria-label="cart" title="Cart">
            <span class="cart-counter" style="display: none;">0</span>
            <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
          </button>

          <button class="nav-open-btn" aria-label="open menu" title="Open Menu" data-nav-toggler>
            <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
          </button>

          <button class="header-action-btn" aria-label="user" title="User">
            <a href='signup.php'>
              <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
            </a>
          </button>

        </div>

      </div>
    </div>

    <div class="header-bottom" data-navbar>
      <div class="container">

        <nav class="navbar">

          <button class="nav-close-btn" data-nav-toggler aria-label="clsoe menu" title="Clsoe Menu">
            <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
          </button>

          <div class="navbar-top">
            <input type="search" name="search" placeholder="Search our store" class="input-field">

            <button class="search-btn" aria-label="Search">
              <ion-icon name="search-outline" aria-hidden="true"></ion-icon>
            </button>
          </div>

          <ul class="navbar-list">

            <li>
              <a class='navbar-link activ' href='index.php'>Home</a>
            </li>

            <li>
              <a class='navbar-link' href='blog.php'>Blog</a>
            </li>

            <li>
              <a class='navbar-link' href='shop.php'>Shop</a>
            </li>
            <li>
              <a class='navbar-link' href='contact.php'>Contact</a>
            </li>

          </ul>

        </nav>
      </div>
    </div>

    <div class="overlay" data-overlay data-nav-toggler></div>
  </header>





  <main>
    <article>


      <section class="section hero has-bg-image" aria-label="home">
        <div class="container">

          <div class="hero-content">

            <h1 class="h1 hero-title has-after">
             Herfst Korting<br>
             Krijg 20% korting bij aankoop van een Elektronische apparaat.
            </h1>

            <p class="hero-text">
             Beste Online Verkooppplatform voor Elektronische Apparaten. Laagste prijs word hier met 100% gegarandeerd
            </p>

            <div class="btn-wrapper">

              <a class='btn' href='shop.php'>
                <span class="span">Bekijk Meer</span>
                <ion-icon name="cart" aria-hidden="true"></ion-icon>
              </a>
            </div>

          </div>

          <figure class="hero-banner">
            <img src="assets/images/iphone17.png" width="475" height="600" alt="hero banner" class="w-100">
          </figure>

        </div>
      </section>





      <section class="section feature" aria-label="feature">
        <div class="container">

          <div class="grid-list">

            <li>
              <div class="feature-card">

                <div class="card-icon">
                  <img src="assets/images/feature-1.png" width="100" height="100" loading="lazy" alt="feature icon"
                    class="w-100">
                </div>

                <div>
                  <h3 class="h3 card-title">Gratis Verzending</h3>

                  <p class="card-text">Bij bestellingen boven €50,-</p>
                </div>

              </div>
            </li>

            <li>
              <div class="feature-card">

                <div class="card-icon">
                  <img src="assets/images/feature-2.png" width="100" height="100" loading="lazy" alt="feature icon"
                    class="w-100">
                </div>

                <div>
                  <h3 class="h3 card-title">Secure Payment</h3>

                  <p class="card-text">Onze Betalingen zijn 100% Veilig</p>
                </div>

              </div>
            </li>

            <li>
              <div class="feature-card">

                <div class="card-icon">
                  <img src="assets/images/feature-3.png" width="100" height="100" loading="lazy" alt="feature icon"
                    class="w-100">
                </div>

                <div>
                  <h3 class="h3 card-title">Laagsteprijs Garantie</h3>

                  <p class="card-text">Gegarandeerde de laagste prijs</p>
                </div>

              </div>
            </li>

            <li>
              <div class="feature-card">

                <div class="card-icon">
                  <img src="assets/images/feature-4.png" width="100" height="100" loading="lazy" alt="feature icon"
                    class="w-100">
                </div>

                <div>
                  <h3 class="h3 card-title">Makkelijke retounering</h3>

                  <p class="card-text">Binnen 30 dagen te retouneren</p>
                </div>

              </div>
            </li>

          </div>

        </div>
      </section>






   

      <section class="section featured" aria-label="featured collection">
        <div class="container">

          <h2 class="h2 section-title">Back To School</h2>

          <p class="section-text">
           Nieuwste Collectie op voorraad -
          </p>

          <ul class="grid-list">

            <li>
              <div class="product-card">

                <span class="card-badge">New</span>

                <div class="card-banner img-holder" style="--width: 384; --height: 480;">
                  <img src="assets/images/ipada16.jpg" width="384" height="480" loading="lazy" alt="Moet nog gemaakt worden"
                    class="img-cover">

                  <div class="card-action">

                    <button class="action-btn" aria-label="quick view" title="Quick View">
                      <ion-icon name="eye-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="add to wishlist" title="Add to Wishlist">
                      <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="compare" title="Compare">
                      <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn add-to-cart-btn" aria-label="add to cart" title="Add to Cart" data-product-id="IPad A16 Chip" data-product-name="IPad A16 Chip" data-product-price="1199" data-product-image="assets/images/ipada16.jpg">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                    </button>

                  </div>
                </div>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">IPad A16 Chip</a>
                  </h3>

                  <data class="card-price" value="1199">€1199</data>


                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 384; --height: 480;">
                  <img src="app1.webp" width="384" height="480" loading="lazy"
                    alt="moet nog gemaakt worden" class="img-cover">

                  <div class="card-action">

                    <button class="action-btn" aria-label="quick view" title="Quick View">
                      <ion-icon name="eye-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="add to wishlist" title="Add to Wishlist">
                      <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="compare" title="Compare">
                      <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn add-to-cart-btn" aria-label="add to cart" title="Add to Cart" data-product-id="iphone14maxpro" data-product-name="Iphone 14 max pro" data-product-price="1500" data-product-image="app1.webp">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                    </button>

                  </div>
                </div>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">Macbook Air M4</a>
                  </h3>

                  <data class="card-price" value="19">$1200</data>


                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 384; --height: 480;">
                  <img src="app1.webp" width="384" height="480" loading="lazy"
                    alt="moet nog gemaakt worden" class="img-cover">

                  <div class="card-action">

                    <button class="action-btn" aria-label="quick view" title="Quick View">
                      <ion-icon name="eye-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="add to wishlist" title="Add to Wishlist">
                      <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="compare" title="Compare">
                      <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn add-to-cart-btn" aria-label="add to cart" title="Add to Cart" data-product-id="iphone14maxpro" data-product-name="Iphone 14 max pro" data-product-price="1500" data-product-image="app1.webp">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                    </button>

                  </div>
                </div>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">Mac Mini M4</a>
                  </h3>

                  <data class="card-price" value="19">$1200</data>


                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 384; --height: 480;">
                  <img src="assets/images/ipadpro.jpg" width="384" height="480" loading="lazy"
                    alt="IPad Pro" class="img-cover">

                  <div class="card-action">

                    <button class="action-btn" aria-label="quick view" title="Quick View">
                      <ion-icon name="eye-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="add to wishlist" title="Add to Wishlist">
                      <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="compare" title="Compare">
                      <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn add-to-cart-btn" aria-label="add to cart" title="Add to Cart" data-product-id="iphone14maxpro" data-product-name="Iphone 14 max pro" data-product-price="1500" data-product-image="app1.webp">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                    </button>

                  </div>
                </div>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">IPad Pro</a>
                  </h3>

                  <data class="card-price" value="19">$1200</data>


                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 384; --height: 480;">
                  <img src="assets/images/iphone16.png" width="384" height="480" loading="lazy"
                    alt="Iphone 16" class="img-cover">

                  <div class="card-action">

                    <button class="action-btn" aria-label="quick view" title="Quick View">
                      <ion-icon name="eye-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="add to wishlist" title="Add to Wishlist">
                      <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="compare" title="Compare">
                      <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn add-to-cart-btn" aria-label="add to cart" title="Add to Cart" data-product-id="iphone14maxpro" data-product-name="Iphone 14 max pro" data-product-price="1500" data-product-image="app1.webp">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                    </button>

                  </div>
                </div>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">IPhone 16</a>
                  </h3>

                  <data class="card-price" value="19">$1200</data>


                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 384; --height: 480;">
                  <img src="assets/images/airpodsmax.png" width="384" height="480" loading="lazy"
                    alt="airpods max" class="img-cover">

                  <div class="card-action">

                    <button class="action-btn" aria-label="quick view" title="Quick View">
                      <ion-icon name="eye-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="add to wishlist" title="Add to Wishlist">
                      <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="compare" title="Compare">
                      <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn add-to-cart-btn" aria-label="add to cart" title="Add to Cart" data-product-id="iphone14maxpro" data-product-name="Iphone 14 max pro" data-product-price="1500" data-product-image="app1.webp">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                    </button>

                  </div>
                </div>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">Airpods Max</a>
                  </h3>

                  <data class="card-price" value="19">$650</data>


                </div>

              </div>
            </li>

            <li>
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 384; --height: 480;">
                  <img src="app1.webp" width="384" height="480" loading="lazy"
                    alt="Moet gemaakt worden" class="img-cover">

                  <div class="card-action">

                    <button class="action-btn" aria-label="quick view" title="Quick View">
                      <ion-icon name="eye-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="add to wishlist" title="Add to Wishlist">
                      <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="compare" title="Compare">
                      <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn add-to-cart-btn" aria-label="add to cart" title="Add to Cart" data-product-id="iphone14maxpro" data-product-name="Iphone 14 max pro" data-product-price="1500" data-product-image="app1.webp">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                    </button>

                  </div>
                </div>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">Airpods Pro</a>
                  </h3>

                  <data class="card-price" value="19">$550</data>


                </div>

              </div>
            </li>
 <li>
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 382; --height: 480;">
                  <img src="assets/images/imac.png" width="384" height="480" loading="lazy"
                    alt="Moet gemaakt worden" class="img-cover">

                  <div class="card-action">

                    <button class="action-btn" aria-label="quick view" title="Quick View">
                      <ion-icon name="eye-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="add to wishlist" title="Add to Wishlist">
                      <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="compare" title="Compare">
                      <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn add-to-cart-btn" aria-label="add to cart" title="Add to Cart" data-product-id="iphone14maxpro" data-product-name="Iphone 14 max pro" data-product-price="1500" data-product-image="app1.webp">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                    </button>

                  </div>
                </div>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">IMac M4</a>
                  </h3>

                  <data class="card-price" value="19">$550</data>


                </div>

              </div>
            </li>
          </ul>

        </div>
        
      </section>





      
      <section class="section offer has-bg-image" aria-label="special offer" style="background: #F1F6F9;">
        <div class="container">

          <p class="section-subtitle">Speciale Aanbiedingen</p>
          <br>
          <p class="section-text">
          Wij komen onze vaste klanten graag tegemoet. Bij aanmelding via de mail krijg je 10% korting bij de eerste volgende 5 aankopen<br>
            [Actie geldig tot 11 juli 2026. Kortingen kunnen niet worden opgestapeld]
          </p>



          <h2 class="h2 section-title">Alle Elektronische apparaten zijn met 20% Afgeprijst. Mis de deal niet! </h2>


          <ul class="countdown-list">
            <li>
              <p class="countdown-time" id="days">0</p>
              <p class="countdown-label">Dagen</p>
            </li>
            <li>
              <p class="countdown-time" id="hours">23</p>
              <p class="countdown-label">Uren</p>
            </li>
            <li>
              <p class="countdown-time" id="minutes">59</p>
              <p class="countdown-label">Minuten</p>
            </li>
            <li>
              <p class="countdown-time" id="seconds">59</p>
              <p class="countdown-label">Secondes</p>
            </li>
          </ul>
        
          <script>
            let days = document.getElementById('days');
            let hours = document.getElementById('hours');
            let minutes = document.getElementById('minutes');
            let seconds = document.getElementById('seconds');
        
            let countdownInterval = setInterval(function() {
              let time = parseInt(days.textContent) * 86400 + 
                         parseInt(hours.textContent) * 3600 + 
                         parseInt(minutes.textContent) * 60 + 
                         parseInt(seconds.textContent);
        
              time--;
        
              let newDays = Math.floor(time / 86400);
              let newHours = Math.floor((time % 86400) / 3600);
              let newMinutes = Math.floor((time % 3600) / 60);
              let newSeconds = time % 60;
        
              days.textContent = newDays;
              hours.textContent = newHours;
              minutes.textContent = newMinutes;
              seconds.textContent = newSeconds;
        
              if (time <= 0) {
                clearInterval(countdownInterval);
                alert('Countdown complete!');
              }
            }, 1000);
          </script>

          <a href="shop.php" class="btn">Bekijk Meer</a>

        </div>
      </section>






      <section class="section popular" aria-label="popular collection">
        <div class="container">

          <h2 class="h2 section-title">Populaire Collectie</h2>

          <p class="section-text">
           De meest bestelde producten in Juni
          </p>
          <ul class="product-list has-scrollbar">

            <li class="scrollbar-item" data-filter="sell">
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 384; --height: 480;">
                  <img src="app1.webp" width="384" height="480" loading="lazy" alt="Moet nog gemaakt worden"
                    class="img-cover">

                  <div class="card-action">

                    <button class="action-btn" aria-label="quick view" title="Quick View">
                      <ion-icon name="eye-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="add to wishlist" title="Add to Wishlist">
                      <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="compare" title="Compare">
                      <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn add-to-cart-btn" aria-label="add to cart" title="Add to Cart" data-product-id="iphone14maxpro" data-product-name="Iphone 14 max pro" data-product-price="1500" data-product-image="app1.webp">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                    </button>

                  </div>
                </div>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">IPhone 15</a>
                  </h3>

                  <data class="card-price" value="34">$819</data>


                </div>

              </div>
            </li>

            <li class="scrollbar-item" data-filter="new">
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 384; --height: 480;">
                  <img src="app1.webp" width="384" height="480" loading="lazy" alt="Moet nog gemaakt worden"
                    class="img-cover">

                  <div class="card-action">

                    <button class="action-btn" aria-label="quick view" title="Quick View">
                      <ion-icon name="eye-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="add to wishlist" title="Add to Wishlist">
                      <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="compare" title="Compare">
                      <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn add-to-cart-btn" aria-label="add to cart" title="Add to Cart" data-product-id="iphone14maxpro" data-product-name="Iphone 14 max pro" data-product-price="1500" data-product-image="app1.webp">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                    </button>

                  </div>
                </div>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">IPhone 15 Pro</a>
                  </h3>

                  <data class="card-price" value="34">$969</data>


                </div>

              </div>
            </li>

            <li class="scrollbar-item" data-filter="sell">
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 384; --height: 480;">
                  <img src="app1.webp" width="384" height="480" loading="lazy" alt="Moet nog gemaakt worden"
                    class="img-cover">

                  <div class="card-action">

                    <button class="action-btn" aria-label="quick view" title="Quick View">
                      <ion-icon name="eye-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="add to wishlist" title="Add to Wishlist">
                      <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="compare" title="Compare">
                      <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn add-to-cart-btn" aria-label="add to cart" title="Add to Cart" data-product-id="iphone14maxpro" data-product-name="Iphone 14 max pro" data-product-price="1500" data-product-image="app1.webp">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                    </button>

                  </div>
                </div>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">iPhone 15 Pro Max</a>
                  </h3>

                  <data class="card-price" value="34">$1250</data>


                </div>

              </div>
            </li>

            <li class="scrollbar-item" data-filter="featured">
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 384; --height: 480;">
                  <img src="assets/images/product-macbook-air-spacegray.webp" width="384" height="480" loading="lazy" alt="Moet nog gemaakt worden"
                    class="img-cover">

                  <div class="card-action">

                    <button class="action-btn" aria-label="quick view" title="Quick View">
                      <ion-icon name="eye-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="add to wishlist" title="Add to Wishlist">
                      <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="compare" title="Compare">
                      <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn add-to-cart-btn" aria-label="add to cart" title="Add to Cart" data-product-id="iphone14maxpro" data-product-name="Iphone 14 max pro" data-product-price="1500" data-product-image="app1.webp">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                    </button>

                  </div>
                </div>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">Apple MacBook M3 Pro</a>
                  </h3>

                  <data class="card-price" value="34">$3.419</data>


                </div>

              </div>
            </li>

            <li class="scrollbar-item" data-filter="new">
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 384; --height: 480;">
                  <img src="assets/images/iphone14wit.webp" width="384" height="480" loading="lazy" alt="Moet nog gemaakt worden"
                    class="img-cover">

                  <div class="card-action">

                    <button class="action-btn" aria-label="quick view" title="Quick View">
                      <ion-icon name="eye-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="add to wishlist" title="Add to Wishlist">
                      <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="compare" title="Compare">
                      <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn add-to-cart-btn" aria-label="add to cart" title="Add to Cart" data-product-id="iphone14maxpro" data-product-name="Iphone 14 max pro" data-product-price="1500" data-product-image="app1.webp">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                    </button>

                  </div>
                </div>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">Apple IPhone 14</a>
                  </h3>

                  <data class="card-price" value="34">$399</data>


                </div>

              </div>
            </li>

            <li class="scrollbar-item" data-filter="sell">
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 384; --height: 480;">
                  <img src="app1.webp" width="384" height="480" loading="lazy" alt="Moet nog gemaakt worden"
                    class="img-cover">

                  <div class="card-action">

                    <button class="action-btn" aria-label="quick view" title="Quick View">
                      <ion-icon name="eye-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="add to wishlist" title="Add to Wishlist">
                      <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="compare" title="Compare">
                      <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn add-to-cart-btn" aria-label="add to cart" title="Add to Cart" data-product-id="iphone14maxpro" data-product-name="Iphone 14 max pro" data-product-price="1500" data-product-image="app1.webp">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                    </button>

                  </div>
                </div>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">IPhone 13 Pro</a>
                  </h3>

                  <data class="card-price" value="34">$499</data>


                </div>

              </div>
            </li>

            <li class="scrollbar-item" data-filter="featured">
              <div class="product-card">

                <div class="card-banner img-holder" style="--width: 384; --height: 480;">
                  <img src="assets/images/imac-silver.webp" width="100" height="100" loading="lazy" alt="Moet nog gemaakt worden"
                    class="img-cover">

                  <div class="card-action">

                    <button class="action-btn" aria-label="quick view" title="Quick View">
                      <ion-icon name="eye-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="add to wishlist" title="Add to Wishlist">
                      <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn" aria-label="compare" title="Compare">
                      <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
                    </button>

                    <button class="action-btn add-to-cart-btn" aria-label="add to cart" title="Add to Cart" data-product-id="iphone14maxpro" data-product-name="Iphone 14 max pro" data-product-price="1500" data-product-image="app1.webp">
                      <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                    </button>

                  </div>
                </div>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">Apple IMac M3</a>
                  </h3>

                  <data class="card-price" value="34">€3500</data>


                </div>

              </div>
            </li>
            <div class="card-content">
                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      

      <section class="section blog" aria-label="blog">
        <div class="container">

          <h2 class="h2 section-title">Telefoon Tips & Accessoires</h2>

          <p class="section-text">
            Alles wat je moet weten over je telefoon en de beste accessoires
          </p>

          <ul class="has-scrollbar">

            <li class="scrollbar-item">
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 600; --height: 400;">
                  <img src="assets/images/iphone14.webp" width="600" height="400" loading="lazy"
                    alt="iPhone onderhoud" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">5 Tips om je iPhone batterij langer te laten meegaan</a>
                  </h3>

                  <ul class="card-meta-list">

                    <li class="meta-item">
                      <time class="meta-link" datetime="2024-21-06">21 juni, 2024</time>
                    </li>

                    <li class="meta-item">
                      <a href="#" class="meta-link">2.5k Reacties</a>
                    </li>

                  </ul>

                  <p class="card-text">
                    Ontdek hoe je de batterijduur van je iPhone kunt verlengen met deze praktische tips. Van schermhelderheid tot achtergrond-apps.
                  </p>

                  <a href="#" class="btn card-btn">Lees Meer...</a>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 600; --height: 400;">
                  <img src="assets/images/mac.webp" width="600" height="400" loading="lazy"
                    alt="Accessoires" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">Must-have accessoires voor je nieuwe iPhone</a>
                  </h3>

                  <ul class="card-meta-list">

                    <li class="meta-item">
                      <time class="meta-link" datetime="2024-18-05">18 mei 2024</time>
                    </li>

                    <li class="meta-item">
                      <a href="#" class="meta-link">1.8k Reacties</a>
                    </li>

                  </ul>

                  <p class="card-text">
                    Van beschermende hoesjes tot draadloze opladers. Ontdek welke accessoires je echt nodig hebt voor je iPhone.
                  </p>

                  <a href="#" class="btn card-btn">Lees Meer...</a>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="blog-card">

                <figure class="card-banner img-holder" style="--width: 600; --height: 400;">
                  <img src="assets/images/visionpro.webp" width="600" height="400" loading="lazy"
                    alt="Telefoon vergelijking" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title">iPhone 14 vs iPhone 15: Welke moet je kiezen?</a>
                  </h3>

                  <ul class="card-meta-list">

                    <li class="meta-item">
                      <time class="meta-link" datetime="2024-21-06">21 juni, 2024</time>
                    </li>

                    <li class="meta-item">
                      <a href="#" class="meta-link">3.2k Reacties</a>
                    </li>

                  </ul>

                  <p class="card-text">
                    Vergelijk de iPhone 14 en iPhone 15 om te bepalen welke telefoon het beste bij jouw behoeften past.
                  </p>

                  <a href="#" class="btn card-btn">Lees Meer...</a>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>

    </article>
  </main>





  <footer class="footer has-bg-image" style="background-color: #F1F6F9;">

    <div class="footer-top section">
      <div class="container grid-list">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="file-apple-logo-black-svg-wikimedia-commons-1.png" width="40" height="28" alt="booken home">
          </a>

          <p class="footer-text">
            Apple Inc. is een Amerikaans technologiebedrijf dat op 1 april 1976 is opgericht door Steve Jobs, Steve Wozniak en Ronald Wayne. Het bedrijf is gevestigd in Cupertino, Californië.
          </p>



        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">2025</p>
          </li>

          <li>
            <a href="blog.php" class="footer-link">Blogs</a>
          </li>

          <li>
            <a href="contact.php" class="footer-link">Contact</a>
          </li>

          <li>
            <a href="https://support.apple.com/nl-nl" class="footer-link">Veelgestelde vragen</a>
          </li>

        </ul>

        <ul class="footer-list">
          <li><p class="footer-list-title">Informatie</p>
            <a href="shop.php" class="footer-link">Online Store</a>
          </li>

          <li>
            <a href="https://www.apple.com/legal/privacy/en-ww/" class="footer-link">Privacy Policy</a>
          </li>

          <li>
            <a href="https://www.apple.com/shop/help/returns_refund" class="footer-link">Refund Policy</a>
          </li>

          <li>
            <a href="https://www.apple.com/shop/help/shipping_delivery" class="footer-link">Shipping Policy</a>
          </li>

          <li>
            <a href="https://www.apple.com/legal/internet-services/itunes/" class="footer-link">Terms of Service</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Services</p>
          </li>

          <li>
            <a href="https://nl.trustpilot.com/review/www.apple.com" class="footer-link">Reviews</a>
          </li>

          <li>
            <a href="https://locate.apple.com/nl/nl/service" class="footer-link">Online Support</a>
          </li>

          <li>
            <a href="https://www.google.com/search?q=servicepunten+apple&sca_esv=912db3cc79468e64&rlz=1C1JJTC_enNL1111NL1111&sxsrf=ADLYWILQ-LaSk-TyY6MHFJWhxitTb6_sfQ:1719181222598&udm=1&sa=X&ved=2ahUKEwiO_c6Q4fKGAxVy-gIHHar3D04QjGp6BAhTEAE&biw=2133&bih=1012&dpr=0.9#ip=1" class="footer-link">Service Punten</a>
          </li>

          <li>
            <a href="https://support.apple.com/nl-nl/repair" class="footer-link">Reparaties</a>
          </li>

        </ul>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          Copyright 2025 | Rayan Aghmer
        </p>

        <img src="assets/images/payment-mehtod.png" width="311" height="30" loading="lazy" alt="Payment method"
          class="w-100">

      </div>
    </div>

  </footer>







  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>





  <script src="assets/js/script.js" defer></script>
  <script src="assets/js/cart.js" defer></script>
  <script src="assets/js/product-modal.js" defer></script>


  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>