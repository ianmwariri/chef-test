@extends('main')

@section('body_content')

<!-- <header class="header">
  <div class="overlay"></div>
   <div class="container">
      <div class="description">
    	<h1>
        Hello, Welcome To Chef Stop...
        <p>
       Your One Stop Shop to Bottomless Culinary Experiences!</p>
        <button class="btn btn-outline-secondary btn-lg">Book your experience</button>
    </h1>
  </div>
   </div>
  
</header> -->

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
             <p class="aboutsisi">
                 
             </p>
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




@endsection