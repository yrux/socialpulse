<!-- Header -->
<header>
  <div class="container">
    <div class="topNav">
      <ul class="topNav_contact">
        <li>
          <a href="tel:+14038275502">
            <i class="fas fa-phone-alt"></i> 1(403) 827-5502
          </a>
        </li>
        <li>
          <a href="mailto:carolynn1949@gmail.com">
            <i class="far fa-envelope"></i>
            info@socialpulsellc.com
          </a>
        </li>
      </ul>
      <ul class="topNav_social">
        <li>
          <a href="#">
            <i class="bx bxl-facebook bx-sm bx-fade-up-hover"></i>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bxl-twitter bx-sm bx-fade-up-hover"></i>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bxl-pinterest-alt bx-sm bx-fade-up-hover"></i>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bxl-google bx-sm bx-fade-up-hover"></i>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bxl-linkedin bx-sm bx-fade-up-hover"></i>
          </a>
        </li>
        <li class="seperator">|</li>
        <li>
          <a href="#">My Account <i class="fas fa-chevron-down"></i></a>
        </li>
      </ul>
    </div>
    <nav>
      <a href="{{route('home')}}" class="nav_logo">
        <?php
        print Helper::dynamicImages(asset('/'), 'assets/images/logo.png', array("data-width" => "229", "data-height" => "109", "alt" => "logo", "class" => "imgFluid"), 'logo', true);
        ?>
      </a>
      <ul class="nav_links">
        <li><a href="{{route('home')}}">Home</a></li>
        <li><a href="{{route('about')}}">About Us</a></li>
        <li><a href="{{route('products')}}">Products</a></li>
        <li><a href="blogs.html">Blog</a></li>
        <li><a href="{{route('contactus')}}">Contact Us</a></li>
        <li class="nav_cart">
          <a href="#">
            <div class="badge">0</div>
            <i class="bx bx-shopping-bag bx-sm bx-tada-hover"></i>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</header>