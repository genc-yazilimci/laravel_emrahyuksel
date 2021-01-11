@extends('layouts.app')
@section('title','Course Page Form')
@section('content')
    <div class="container mt-4">
        <div class="col-md-12">
            <h1>Kurslar</h1>
            <div align="right">
                <a href="{{route('courseInsert')}}">
                    <button class="btn btn-success">Yeni Ekle</button>
                </a>
            </div>
            <br>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                    <th scope="col">Must</th>
                    <th scope="col"></th>
                    <th scope="col"></th>

                </tr>
                </thead>
                <tbody>

                @foreach($data['course'] as $key)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$key->course_title}}</td>
                        <td>{{$key->course_content}}</td>
                        <td>{{$key->course_must}}</td>
                        <td width="10"><a href="{{route('courseUpdate',['id' => $key->id])}}">
                                <button class="btn btn-primary">Düzenle</button>
                            </a></td>
                        <td width="10"><a href="{{route('courseDelete',['id' => $key->id])}}">
                                <button class="btn btn-primary">Sil</button>
                            </a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        </form>
    </div>
    </div>
@endsection


