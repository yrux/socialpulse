@extends('layouts.main')
@section('content')
<!-- Page Title -->
<div class="pageTitle">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>{{$title}}</h1>
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
                            <img src="{{ asset($blog->image->url) }}" alt="blog" class="imgFluid" />
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="blog__content">
                                <span>Latest News</span>
                                <a href="{{route('blogDetail',[$blog])}}" class="blog__contentTitle">
                                    {{$blog->title}}
                                </a>
                                <span>{{date('F d, Y',strtotime($blog->posted_at))}}</span>
                                <?php print $blog->description; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('extends.newsletter')
@endsection