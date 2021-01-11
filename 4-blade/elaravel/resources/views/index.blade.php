@extends('layouts.app')
@includeIf('inc.navbars',['menu1' => 'Anasayfa1','menu2' => 'Hakkımızda1'])
@section('title','Index Sayfası')
@section('content')
    <h1>BLADE INDEX TEMEL ŞABLONU UYGULANDI</h1>
    Emrah @br Yüksel
    @br
    @addName(Emrah Yüksel)
    @custom(br)
@endsection