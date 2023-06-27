<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>PHPJabbers.com | Free Restaurant Website Template</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    

    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" type="text/css">
   
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/" class="logo">Restaurant <em> Website</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="/">Home</a></li>
                            <li><a href="/book">Book a table</a></li>
                            <li><a href="/categories"class="active">Categories</a></li>
                            <li><a href="/menu" >Menu</a></li>
                            <li><a href="/about">About</a></li>
                            <li><a href="/contact">Contact</a></li> 
                        </ul>      
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url({{ asset('images/banner-image-1-1920x500.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Our <em>Menu</em></h2>
                        <p>Take a look at our unique delicious items in the menu!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Fleet Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <br>
            <br>

            <div class="row">
                @foreach ($category->menus as $menu)
                    <div class="col-lg-4">
                        <div class="trainer-item">
                            <div class="image-thumb">
                                <img src="{{ Storage::url($menu->image) }}" alt="">
                            </div>
                            <div class="down-content">
                                <span>
                                    ${{ $menu->price }}
                                </span>

                                <h4>{{ $menu->name }}</h4>

                                <p>{{ $menu->description }}</p>

                                <ul class="social-icons">
                                    <li><a href="#">+ Order</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            
            </div>
               
            </div>

            <br>
                
            

        </div>
    </section>
    <!-- ***** Fleet Ends ***** -->

    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        Copyright © 2023 Big Bite<br>
                        
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    
    <script src="{{ asset('js/jquery-2.1.0.min.js') }}"></script>

    <!-- Bootstrap -->
    
    <script src="{{ asset('js/popper.js') }}"></script>
    
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ asset('js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/imgfix.min.js') }}"></script> 
    <script src="{{ asset('js/mixitup.js') }}"></script> 
    <script src="{{ asset('js/accordions.js') }}"></script>
    
    <!-- Global Init -->
    <script src="{{ asset('js/custom.js') }}"></script>

  </body>
</html>