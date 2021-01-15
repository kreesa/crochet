
<div class="nav-container">
   <nav class="nav-inner transparent">

      <div class="navbar">
         <div class="container">
            <div class="row">

              <div class="brand">
                <a href="{{ asset('main') }}">Miss Crochet</a>
              </div>

              <div class="navicon">
                <div class="menu-container">

                  <div class="circle dark inline">
                    <i class="icon ion-navicon"></i>
                  </div>

                  <div class="list-menu">
                    <i class="icon ion-close-round close-iframe"></i>
                    <div class="intro-inner">
                      <ul id="nav-menu">
                      
                        <li><a href="{{ asset('main') }}">Home</a></li>
                        <li><a href="{{ asset('about') }}">About</a></li>
                        <li><a href="{{ asset('order') }}">Order</a></li>
                        <li><a href="{{ asset('portfolio') }}">Portfolio</a></li>
                        <li><a href="{{ asset('contact') }}">Contact</a></li>
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                      

                      </ul>
                    </div>
                  </div>

                </div>
              </div>

            </div>
         </div>
      </div>

   </nav>
</div>

