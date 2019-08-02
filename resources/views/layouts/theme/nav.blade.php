<nav class="navbar navbar-expand-lg fixed-top ">
    
        
    
      <a class="navbar-brand" href="#">Chef-Stop</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

       <input type="text" placeholder="Search..." class="search">

      <a class="navbar-brand navi" href="{{URL::to('login')}}">Login</a>
      <a class="navbar-brand navi" href="{{URL::to('register')}}">Register</a>

      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav mr-4">
          

          <li class="nav-item">
            <a class="nav-link" data-value="about" href="#">Home</a>
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