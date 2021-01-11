@extends('layouts.app')
@section('title','Course Page Form')
@section('content')
    <div class="container mt-4">

        <div class="col-md-12">
            <h1>Kurs Düzenle</h1>
            <div align="right">
                <a href="{{route('courseGet')}}">
                    <button class="btn btn-success">Geri</button>
                </a>
            </div>
            <br>

            @if(session()->has('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
            @endif
            @if($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif

            <form action="{{route('courseUpdatePost',['id'=>$course->id])}}" method="POST" enctype="multipart/form-data">
                @CSRF


                <div class="form-group">
                    <input class="form-control" value="{{$course->course_title}}" type="text" name="course_title"
                           placeholder="Title">
                </div>

                <div class="form-group">
                    <input class="form-control" value="{{$course->course_content}}" type="text" name="course_content"
                           placeholder="Content">
                </div>

                <div class="form-group">
                    <input class="form-control" value="{{$course->course_must}}" type="text" name="course_must"
                           placeholder="Must">
                </div>


                <input class="form-control" type="submit" value="Kurs Ekle">

        </div>
        </form>
    </div>
    </div>
@endsection


