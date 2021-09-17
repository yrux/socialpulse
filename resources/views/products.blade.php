@extends('layouts.main')
@section('content')
<!-- Page Title -->
<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Products</h1>
      </div>
    </div>
  </div>
</div>
<div id="app">
<!-- Tabs -->
<div class="container">
  <ul class="tabs">
    <li class="{{!$m_flag->id?'active':''}}"><a href="{{route('products')}}">All</a></li>
    @foreach($categories as $category)
      <li class="{{$m_flag->id==$category->id?'active':''}}"><a href="{{route('products',[$category])}}">{{$category->flag_value}}</a></li>
    @endforeach
  </ul>
</div>
<!-- Search Products -->
<div class="container searchProduct">
  <form action="#">
    <input v-model="q" type="text" name="searchProduct" id="searchProduct" placeholder="Search By Keyword..." />
    <button type="submit"><i class="bx bx-search bx-sm"></i></button>
  </form>
</div>
<!-- Filter -->
<div class="container filter">
  <form action="#">
    <div>
      <button type="submit">
        Filter <i class="bx bx-right-arrow-alt"></i>
      </button>
      <select v-model="sort" name="sort" id="sort">
        <option value="Most Popular">Most Popular</option>
        <option value="Latest">Latest</option>
        <option value="By Category">By Category</option>
      </select>
    </div>
    <div>
      <label for="">Show:</label>
      <select v-model="limit" name="show" id="show">
        <option value="12">12</option>
        <option value="24">24</option>
        <option value="36">36</option>
      </select>
    </div>
  </form>
</div>
<!-- Products -->
<div class="container">
  <div class="row">
    <div v-for="product in data.data" class="col-12 col-lg-4">
      <div class="product">
        <img :src="'{{ asset('/') }}'+product.image.url" alt="product" class="imgFluid" />
        <h4 class="product_title" name="name" v-html="product.name"></h4>
        <div class="product_overlay">
          <h4 v-html="product.name"></h4>
          <a :href="'{{ route('product') }}/'+product.slug" class="themeBtn">Shop Now</a>
          <div>
            <span >&dollar;@{{product.formatted_price_discounted}}</span>
            <div>
              <i class="bx bx-heart bx-sm bx-tada-hover"></i>
              <i class="bx bx-shopping-bag bx-sm bx-tada-hover"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div v-if="data.data.length==0">
      <h2>No Products Found</h2>
    </div>
  </div>
</div>
<!-- Pagination -->
<ul class="pagination">
  <li v-if="page>1">
    <a @click="goPrev()" href="#!"><i class="bx bx-left-arrow-alt"></i> Previous</a>
  </li>
  <!-- <li><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li> -->
  <li v-if="page<total">
    <a @click="goNext()" href="#!">Next <i class="bx bx-right-arrow-alt"></i></a>
  </li>
</ul>
<!-- Power Banks -->
<div class="powerBanksWrapper">
  <div class="powerBanks">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-5">
          <div class="powerBanks_content">
            <h3>Pick Our</h3>
            <h2>Power Banks</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
              do eiusmod tempor incididunt ut labore et dolore magna.
            </p>
            <a href="#" class="themeBtn">Click Here</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
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
</div>
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
<script>
var app = new Vue({
  el: '#app',
  data: {
    q:'',
    sort:'Most Popular',
    limit:'24',
    data: [],
    page:1,
    total: 0,
  },
  methods:{
    async getProducts(){
      this.data = await ajaxify({
        q: this.q,
        sort: this.sort,
        limit: this.limit
      },'POST','{{route('productsdata')}}?page='+this.page)
      this.total = this.data.last_page;
    },
    goPrev(){
      if(this.page>1){
        this.page = (this.page-1)
        this.getProducts()
      }
    },
    goNext(){
      this.page = (this.page+1)
      this.getProducts()
    },
    resetPage(){
      this.page = 1;
      this.getProducts()
    }
  },
  mounted(){
    this.getProducts()
  },
  watch:{
    'q': function(){
      this.resetPage();
    },
    'limit': function(){
      this.resetPage();
    },
    'sort': function(){
      this.resetPage();
    },
  }
})
</script>
@endsection