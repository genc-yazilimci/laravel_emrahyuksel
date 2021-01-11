@extends('frontend.layout')
@section('title',"Anasayfa Başlığı")
@section('content')

    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">{{$blog->blog_title}}</h1>


        <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-8">

                <!-- Preview Image -->
                <img class="img-fluid rounded" src="/images/blogs/{{$blog->blog_file}}" alt="">

                <hr>

                <!-- Date/Time -->
                <p> Yayınlama Zamanı {{$blog->created_at->format('d-m-Y h:i')}}</p>

                <hr>

                <p>{!! $blog->blog_content !!}</p>
                <hr>

            </div>

            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">


                <!-- Side Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Son Bloglar</h5>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach($blogList as $list)
                                <a href="{{route('blog.Detail',$list->blog_slug)}}"> <li  class="list-group-item ">{{$list->blog_title}}</li></a>
                            @endforeach
                        </ul>

                    </div>
                </div>

            </div>

        </div>
        <!-- /.row -->

    </div>

@endsection
@section('css') @endsection
@section('js') @endsection