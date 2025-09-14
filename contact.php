<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Apple</title>
  <meta name="title" content="Apple">
  <meta name="description" content="This is a e-commerce website. ">

  <link rel="shortcut icon" href="#" type="image/svg+xml">


  <link rel="stylesheet" href="assets/css/style.css">

  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600&amp;family=Work+Sans:wght@400;500;700&amp;display=swap"
    rel="stylesheet">

</head>

<body id="top">



  <header class="header" data-header>
    <div class="header-top">
      <div class="container">

        <a href="index.php" class="logo">
          <img src="file-apple-logo-black-svg-wikimedia-commons-1.png" width="40" height="28" alt="booken home">
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
            <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
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
              <a class='navbar-link ' href='index.php'>Home</a>
            </li>

            <li>
              <a class='navbar-link ' href='blog.php'>Blog</a>
            </li>
            <li>
              <a class='navbar-link ' href='shop.php'>Shop</a>
            </li>
            <li>
              <a class='navbar-link activ' href='contact.php'>Contact</a>
            </li>

          </ul>

        </nav>
      </div>
    </div>

    <div class="overlay" data-overlay data-nav-toggler></div>
  </header>





  <main>
    <article>



       

        <h2>Get in Touch</h2>
        <form>
          <label for="name">Name</label>
          <input type="text" id="name" name="name" required>
          <label for="email">Email</label>
          <input type="email" id="email" name="email" required>
          <label for="message">Message</label>
          <textarea id="message" name="message" required></textarea>
          <button type="submit" id="submit-btn">Send</button>
        </form>



    </article>
  </main>







  <footer class="footer has-bg-image" style="background-color: #F1F6F9;">

    <div class="footer-top section">
      <div class="container grid-list">

        <div class="footer-brand">

          <a href="index.php" class="logo">
            <img src="file-apple-logo-black-svg-wikimedia-commons-1.png" width="40" height="28" alt="booken home">
          </a>

          <p class="footer-text">
            Apple Inc. is een Amerikaans technologiebedrijf dat op 1 april 1976 is opgericht door Steve Jobs, Steve Wozniak en Ronald Wayne. Het bedrijf is gevestigd in Cupertino, Californië.
          </p>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-youtube"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-pinterest"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">2024</p>
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

          <li>
            <p class="footer-list-title">Informatie</p>
          </li>

          <li>
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
         Copyright 2024 | Rayan Aghmer
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