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
            @foreach($blogs as $blog)
            @if($blog->is_featured==1)
            <div class="col-12">
                <div class="blog">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6">
                            <img src="{{ asset($blog->image->url) }}" alt="blog" class="imgFluid" />
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="blog__content">
                                <span>Latest News</span>
                                <a href="{{route('blogDetail',[$blog])}}" class="blog__contentTitle">
                                    {{$blog->title}}
                                </a>
                                <span>{{date('F d, Y',strtotime($blog->posted_at))}}</span>
                                <?php print $blog->short_description; ?>
                                <a href="{{route('blogDetail',[$blog])}}" class="themeBtn">Continue Reading</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <div class="col-12 col-lg-6">
                <div class="blog">
                    <img src="{{ asset($blog->image->url) }}" alt="" class="imgFluid" />
                    <div class="blog__content">
                        <span>Latest News</span>
                        <a href="{{route('blogDetail',[$blog])}}" class="blog__contentTitle">
                            {{$blog->title}}
                        </a>
                        <span>{{date('F d, Y',strtotime($blog->posted_at))}}</span>
                        <?php print $blog->short_description; ?>
                        <a href="{{route('blogDetail',[$blog])}}">Continue Reading</a>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</div>
<!-- Pagination -->
{{$blogs->links()}}
@include('extends.newsletter')
@endsection