@extends('frontend.layout')
@section('title',"Anasayfa Başlığı")
@section('content')
    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner" role="listbox">
                @php($count=0)
                @foreach($data['slider'] as $slider)
                    <div class="carousel-item @if ($count++==0) active @endif"
                         style="background-image: url('/images/sliders/{{$slider->slider_file}}')">
                        <div class="carousel-caption d-none d-md-block">
                            <a href="@if (strlen($slider->slider_url)>0) {{$slider->slider_url}} @else javascript:void(0) @endif">
                                <h3>{{$slider->slider_title}}</h3>
                            </a>
                        </div>
                    </div>
                @endforeach


            </div>

            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">


        <!-- Portfolio Section -->
        <h2 class="mt-4">Blog</h2>

        <div class="row">

            @foreach($data['blog'] as $blog)
                <div class="col-lg-4 col-sm-6 portfolio-item">
                    <div class="card h-100">

                        <a href="{{route('blog.Detail',$blog->blog_slug)}}"><img class="card-img-top" src="/images/blogs/{{$blog->blog_file}}" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="{{route('blog.Detail',$blog->blog_slug)}}">{{$blog->blog_title}}</a>
                            </h4>
                            <p class="card-text">{!! substr($blog->blog_content,0,140) !!}</p>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-6">
                <h2>{{$home_title}}</h2>
                {!! $home_detail !!}
            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded" src="/images/settings/{{$home_image}}" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="row mb-4">
            <div class="col-md-8">
                <p>{{$slogan}}</p>
            </div>
            <div class="col-md-4">
                <a class="btn btn-lg btn-secondary btn-block" href="#">Bize Ulaşın</a>
            </div>
        </div>

    </div>
    <!-- /.container -->

@endsection
@section('css') @endsection
@section('js') @endsection