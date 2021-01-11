@extends('layouts.app')
@section('title','Index Sayfası')
@section('content')

    <!--    --><?php
    //    $sayi=4;
    //    if ($sayi > 5) {
    //        echo "Sayı 5 ten büyük";
    //    } else if ($sayi < 5) {
    //        echo "Sayı 5 ten küçük";
    //    } else {
    //        echo "Sayı 5 e eşit";
    //    }
    //    ?>

    @php($sayi=0)

    <!--    --><?php //echo $sayi==5 ? '5 eşit' : 'Değil'; ?>

    {{--    {{$sayi==4 ? '5 e eşit' : 'Değil'}}--}}

    {{--    @if($sayi>5)--}}
    {{--        Sayı 5 ten büyük--}}
    {{--        @elseif ($sayi < 5)--}}
    {{--        Sayı 5 ten küçük--}}
    {{--        @else--}}
    {{--        Sayı 5 e eşit--}}
    {{--    @endif--}}


    {{--    @unless($sayi)--}}
    {{--        ok false--}}
    {{--    @endunless--}}

    {{--    @isset($sayi)--}}
    {{--        Tanımlı--}}
    {{--    @endisset--}}

    {{--    @empty($sayi)--}}
    {{--        Boş--}}
    {{--    @endisset--}}

    <!--    --><?php
    //
    //    switch ($sayi) {
    //        case 0:
    //            echo "Sayı 0'a eşit";
    //            break;
    //        case 1:
    //            echo "Sayı 1'e eşit";
    //            break;
    //
    //        default:
    //            echo "Sayı eşit değil";
    //            break;
    //    }
    //
    //    ?>

    @switch($sayi)
        @case(0)
        Sayı 0'a eşit
        @break
        @case(1)
        Sayı 1'e eşit
        @break
        @default
        Sayı eşit değil
    @endswitch



