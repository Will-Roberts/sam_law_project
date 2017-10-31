 <!-- Navigation Bar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>

            <!-- Three line "hamburger" icon for the collapsed navigation -->
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <!-- Title on nav bar -->
          <a class="navbar-brand" href="#">Game Space</a>
        </div>

        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-left">
            <li <?php if ($current == 'index') {echo 'class="active"';} ?>><a href='index.php'>Home</a></li>
            <li <?php if ($current == 'about') {echo 'class="active"';} ?>><a href='about.php'>About Us</a></li>
            <li <?php if ($current == 'stores') {echo 'class="active"';} ?>><a href='stores.php'>Where Are We?</a></li>
            <li <?php if ($current == 'review') {echo 'class="active"';} ?>><a href='review.php'>Game Reviews</a></li>
            <li <?php if ($current == 'order') {echo 'class="active"';} ?>><a href='order.php'>Order Now</a></li>
            <li <?php if ($current == 'news') {echo 'class="active"';} ?>><a href='news.php'>Company News</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li <?php if ($current == 'login') {echo 'class="active"';} ?>><a href='login.php'>Log In</a></li>
            <li <?php if ($current == 'signup') {echo 'class="active"';} ?>><a href='signup.php'>Sign Up</a></li>
          </ul>
        </div>
      </div>
    </nav>