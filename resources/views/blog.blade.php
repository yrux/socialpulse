@extends('layouts.main')
@section('content')
<!-- Page Title -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Blogs</h1>
      </div>
    </div>
  </div>
</div>
<!-- Blogs -->
<div class="blogsWrapper">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="blog">
          <div class="row align-items-center">
            <div class="col-12 col-md-6">
              <img src="{{ asset('assets/images/blogs/blog-1.png') }}" alt="blog" class="imgFluid" />
            </div>
            <div class="col-12 col-md-6">
              <div class="blog__content">
                <span>Latest News</span>
                <a href="#" class="blog__contentTitle">
                  Lorem ipsum dolor sit amet
                </a>
                <span>July 28, 2021</span>
                <p>
                  Sed ut perspiciatis unde omnis iste natus error sit
                  voluptatem accusantium doloremque laudantium, totam rem
                  aperiam, eaque ipsa quae ab illo inventore veritatis et
                  quasi architecto beatae vitae dicta sunt explicabo. Nemo
                  enim ipsam voluptatem quia voluptas sit aspernatur aut
                  odit aut fugit, sed quia consequuntur magni dolores eos
                  qui ratione voluptatem sequi nesciunt.
                  <br />
                  <br />
                  Nemo enim ipsam voluptatem quia voluptas sit aspernatur
                  aut odit aut fugit, sed quia consequuntur.
                </p>
                <a href="#" class="themeBtn">Continue Reading</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="blog">
          <img src="{{ asset('assets/images/blogs/blog-2.png') }}" alt="" class="imgFluid" />
          <div class="blog__content">
            <span>Latest News</span>
            <a href="#" class="blog__contentTitle">
              Lorem ipsum dolor sit amet
            </a>
            <span>July 28, 2021</span>
            <p>
              Sed ut perspiciatis unde omnis iste natus error sit voluptatem
              accusantium doloremque laudantium, totam rem aperiam, eaque
              ipsa quae ab illo inventore veritatis et quasi architecto
              beatae vitae dicta sunt explicabo.
            </p>
            <a href="#">Continue Reading</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="blog">
          <img src="{{ asset('assets/images/blogs/blog-3.png') }}" alt="" class="imgFluid" />
          <div class="blog__content">
            <span>Latest News</span>
            <a href="#" class="blog__contentTitle">
              Lorem ipsum dolor sit amet
            </a>
            <span>July 28, 2021</span>
            <p>
              Sed ut perspiciatis unde omnis iste natus error sit voluptatem
              accusantium doloremque laudantium, totam rem aperiam, eaque
              ipsa quae ab illo inventore veritatis et quasi architecto
              beatae vitae dicta sunt explicabo.
            </p>
            <a href="#">Continue Reading</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="blog">
          <img src="{{ asset('assets/images/blogs/blog-4.png') }}" alt="" class="imgFluid" />
          <div class="blog__content">
            <span>Latest News</span>
            <a href="#" class="blog__contentTitle">
              Lorem ipsum dolor sit amet
            </a>
            <span>July 28, 2021</span>
            <p>
              Sed ut perspiciatis unde omnis iste natus error sit voluptatem
              accusantium doloremque laudantium, totam rem aperiam, eaque
              ipsa quae ab illo inventore veritatis et quasi architecto
              beatae vitae dicta sunt explicabo.
            </p>
            <a href="#">Continue Reading</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="blog">
          <img src="{{ asset('assets/images/blogs/blog-5.png') }}" alt="" class="imgFluid" />
          <div class="blog__content">
            <span>Latest News</span>
            <a href="#" class="blog__contentTitle">
              Lorem ipsum dolor sit amet
            </a>
            <span>July 28, 2021</span>
            <p>
              Sed ut perspiciatis unde omnis iste natus error sit voluptatem
              accusantium doloremque laudantium, totam rem aperiam, eaque
              ipsa quae ab illo inventore veritatis et quasi architecto
              beatae vitae dicta sunt explicabo.
            </p>
            <a href="#">Continue Reading</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="blog">
          <img src="{{ asset('assets/images/blogs/blog-6.png') }}" alt="" class="imgFluid" />
          <div class="blog__content">
            <span>Latest News</span>
            <a href="#" class="blog__contentTitle">
              Lorem ipsum dolor sit amet
            </a>
            <span>July 28, 2021</span>
            <p>
              Sed ut perspiciatis unde omnis iste natus error sit voluptatem
              accusantium doloremque laudantium, totam rem aperiam, eaque
              ipsa quae ab illo inventore veritatis et quasi architecto
              beatae vitae dicta sunt explicabo.
            </p>
            <a href="#">Continue Reading</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="blog">
          <img src="{{ asset('assets/images/blogs/blog-7.png') }}" alt="" class="imgFluid" />
          <div class="blog__content">
            <span>Latest News</span>
            <a href="#" class="blog__contentTitle">
              Lorem ipsum dolor sit amet
            </a>
            <span>July 28, 2021</span>
            <p>
              Sed ut perspiciatis unde omnis iste natus error sit voluptatem
              accusantium doloremque laudantium, totam rem aperiam, eaque
              ipsa quae ab illo inventore veritatis et quasi architecto
              beatae vitae dicta sunt explicabo.
            </p>
            <a href="#">Continue Reading</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Pagination -->
<ul class="pagination">
  <li>
    <a href="#"><i class="bx bx-left-arrow-alt"></i> Previous</a>
  </li>
  <li><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li>
    <a href="#">Next <i class="bx bx-right-arrow-alt"></i></a>
  </li>
</ul>
<!-- Newsletter -->
<div class="newsletter">
  <div class="container">
    <div class="row justify-content-center textCenter">
      <div class="col-12 col-md-6">
        <div class="newsletter__content">
          <h4>Sign Up Now &amp; Get 15% Off</h4>
          <p>
            Be the first to know about our new arrivals and exclusive
            offers.
          </p>
          <form action="#">
            <input type="email" name="newsletter" placeholder="Enter your email here" />
            <button type="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection