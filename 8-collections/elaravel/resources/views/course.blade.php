@extends('layouts.app')
@section('title','Course Page Form')
@section('content')
    <div class="container mt-4">
        <h1>Course Page</h1>
        <hr>

        <div class="col-md-6">
            <h2>Kurs Ekle </h2>
            <p>
                @if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif
            </p>
            <form action="{{route('courseInsert')}}" method="POST" enctype="multipart/form-data">
                @CSRF
                <div class="form-group">
                    <input class="form-control" type="file" name="course_file">
                </div>
                <div class="form-group">
                    <input class="form-control" value="{{old('course_title')}}" type="text" name="course_title"
                           placeholder="Title">
                </div>
                <div class="form-group">
                    <input class="form-control" value="{{old('course_content')}}" type="text" name="course_content"
                           placeholder="Content">
                </div>
                <div class="form-group">
                    <input class="form-control" value="{{old('course_must')}}" type="number" name="course_must"
                           placeholder="Must">
                </div>
                <input class="form-control" type="submit" value="Kurs Ekle">
            </form>
        </div>
    </div>
@endsection


