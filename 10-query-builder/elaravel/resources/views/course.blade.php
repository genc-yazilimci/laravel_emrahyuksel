@extends('layouts.app')
@section('title','Course Page Form')
@section('content')
    <div class="container mt-4">
        <h1>Course Page</h1>
        <hr>

        <div class="col-md-6">
            <h2>Kurs Ekle </h2>
                        @if($errors->any())
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        @endif
            {{--            <p>{{$errors->first()}}</p>--}}
            {{--            <p>{{$errors->first('course_content')}}</p>--}}
{{--            <p>--}}
{{--                @if($errors->has('course_title'))--}}
{{--                    <b>Title Boş ...: </b> {{$errors->first('course_title')}}--}}
{{--                @endif--}}
{{--            </p>--}}

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
                    <input class="form-control" value="{{old('course_title')}}" type="text" name="course_content"
                           placeholder="Title">
                </div>

                <input class="form-control" type="submit" value="Kurs Ekle">

                </div>
            </form>
        </div>
    </div>
@endsection


