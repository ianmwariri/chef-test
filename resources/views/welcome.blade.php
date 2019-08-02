<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('theme.header.header')
    <body>
  <!-- navbar -->



  <nav class="navbar navbar-expand-lg fixed-top ">
    
        
    
      <a class="navbar-brand" href="{{URL::to('/')}}">Chef-Stop</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

       <input type="text" placeholder="Search..." class="search">

      <a class="navbar-brand navi" href="{{URL::to('login')}}">Login</a>
      <a class="navbar-brand navi" href="{{URL::to('register')}}">Register</a>

      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav mr-4">
          

          <li class="nav-item">
            <a class="nav-link" data-value="about" href="{{URL::to('/')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-value="about" href="{{URL::to('about')}}">About Us</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-value="about" href="{{URL::to('contact')}}">Contact Us</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " data-value="blog" href="{{URL::to('hire')}}">Hire Chef</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " data-value="blog" href="{{URL::to('recruit')}}">Recruitment</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-value="portfolio" href="{{URL::to('rate')}}">Ratings & Reviews</a>
          </li>
          
         
        </ul>
        
      </div>
</nav>
<!-- header -->
<header class="header">
  <div class="overlay"></div>
   <div class="container">
      <div class="description">
    <h1>
        Hello, Welcome To Chef-Stop...
        <p>
       Your One Stop Shop to Bottomless Culinary Experiences!</p>
        <button class="btn btn-outline-secondary btn-lg">Book your experience</button>
    </h1>
  </div>
   </div>
  
</header>

<!-- about section -->
<div class="about" id="about">
    <div class="container">
      <h1 class="text-center">About Us</h1>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <img src="images/team-3.jpg" alt="Chef-Stop Logo" class="img-fluid">
                <span class="text-justify">Chef-Stop</span>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 desc">
              
                <h3>Our Story...</h3>
                <p class="aboutsisi">
                  Imagine a situation where you can book a culinary experience at the click of a button...
                </p>
                <p class="aboutsisi">
                   Depending on what cuisine you want, a catalogue of chefs is provided on your screen.
                </p>
                <p class="aboutsisi">
                   At the click of a button, you can book a chef and voila! They are at your doorstep ready to prepare for you a delicacy!
                </p>
                <p class="aboutsisi">
                    That is what Chef-Stop does for you; provide a platform where you can enjoy different culinary experiences with ease.
                </p>
              <a class="card-link" href="aboutUs">  Read more...</a>
            </div>
        </div>
    </div>
</div>

<!-- portfolio -->
<div class="portfolio" id="portfolio">
     <h1 class="text-center">Popular Cuisines</h1>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <img src="images/portfolio/indianCuisine.jpg" alt="Indian Cusine" class="img-fluid">
                 <a class="card-link" href="#">Indian Cuisine</a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <img src="images/portfolio/africanCuisine.jpg" alt="African Cuisine" class="img-fluid">
                <a href="#">African Cuisine</a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <img src="images/portfolio/europeanCuisine.jpg" alt="European Cuisine" class="img-fluid">
                <a href="#">European Cuisine</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <img src="images/portfolio/australianCuisine.jpg" alt="Australian Cuisine" class="img-fluid">
                <a href="#">Australian Cuisine</a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <img src="images/portfolio/arabianCuisine.jpg" alt="Arabian Cuisine" class="img-fluid">
                <a href="#">Arabian Cuisine</a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <img src="images/portfolio/japaneseCuisine.jpg" alt="Japanese Cuisine" class="img-fluid">
                <a href="#">Japanese Cuisine</a>
            </div>
        </div>
    </div>
</div>


<!-- Posts section -->
<div class="blog" id="blog">
    <div class="container">
    <h1 class="text-center">Blog</h1>
        <div class="row">
            <div class="col-md-4 col-lg-4 col-sm-12">
                <div class="card">
                    <div class="card-img">
                        <img src="images/posts/salad.jpg" class="img-fluid">
                    </div>
                    
                    <div class="card-body">
                    <h4 class="card-title">Try our new Exotic Salads</h4>
                        <p class="card-text">
                            
                            Chef Bahati and her cohorts have perfected the art of salad presentation.
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="" class="card-link">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12">
                <div class="card">
                    <div class="card-img">
                        <img src="images/posts/chefAwards.jpg" class="img-fluid">
                    </div>
                    
                    <div class="card-body">
                       <h4 class="card-title">International Awards</h4>
                        <p class="card-text">
                            
                            We have had the pleasure to be recognized internationally.
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="card-link">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12">
                <div class="card">
                    <div class="card-img">
                        <img src="images/posts/chefOfMonth.jpg" class="img-fluid">
                    </div>
                    
                    <div class="card-body">
                    <h4 class="card-title">Chef of the Month</h4>
                        <p class="card-text">
                            
                            Mombasa born chef, Mike, has been baking pastries since he was 17 years old. 
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="" class="card-link">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Team section -->
<div class="team" id="team">
    <div class="container">
       <h1 class="text-center">Feedback</h1>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 item">
             <a href="#">
                        <img src="images/client.jpg" class="img-fluid" alt="team">
                        <div class="des">
                            Happy Client
                         </div>
             </a>
                <span class="text-muted">Story</span>
            </div>


            <div class="col-lg-3 col-md-3 col-sm-12 item">
                <a href="#">
                            <img src="images/hotelierFeedback.png" class="img-fluid" alt="team">
                            <div class="des">
                                 Hotelier
                             </div>
                </a>
                    <span class="text-muted">Story</span>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 item">
                <a href="#">
                            <img src="images/chefFeedback.jpg" class="img-fluid" alt="team">
                            <div class="des">
                                Chef Oscar 
                             </div>
                </a>
                    <span class="text-muted">Story</span>
            </div>


            <div class="col-lg-3 col-md-3 col-sm-12 item">
                <a href="#">
                            <img src="images/chefFeedback2.jpg" class="img-fluid" alt="team">
                            <div class="des">
                                 Chef Zack
                             </div>
                </a>
                    <span class="text-muted">Story</span>
            </div>
        </div>
    </div>
</div>

<!-- Contact form -->
<div class="contact-form" id="contact">
    <div class="container">
        <form>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                  <h1>Get in Touch</h1> 
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 right">
                   <div class="form-group">
                     <input type="text" class="form-control form-control-lg" placeholder="Your Name" name="">
                   </div>
                   <div class="form-group">
                     <input type="email" class="form-control form-control-lg" placeholder="Example@email.com" name="email">
                   </div>
                   <div class="form-group">
                     <textarea class="form-control form-control-lg">
                        
                     </textarea>
                   </div>
                   <input type="submit" class="btn btn-secondary btn-block" value="Send" name="">
                </div>
            </div>
        </form>
    </div>
</div>


<footer>
    <div class="footer-content">
        <p>&copy; 2019 Chef-Stop</p>
       <p>
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-instagram"></a>
            <a href="#" class="fa fa-google"></a>
            <a href="#" class="fa fa-linkedin"></a>
            <a href="#" class="fa fa-youtube"></a>
            <a href="#" class="fa fa-android"></a>
        </p>

        <p>
          <a href="#">Privacy</a>
          <a href="#">Terms</a>
          <a href="#">Accessibility</a>
      </p>
    </div>    
</footer>


<!-- add Javasscript file from js file -->
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

</body>
</html>