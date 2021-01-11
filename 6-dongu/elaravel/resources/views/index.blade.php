@extends('layouts.app')
@section('title','Index Sayfası')
@section('content')

    <!--    --><?php
    //    for ($i = 0; $i <= 10; $i++) {
    //        echo $i . " ";
    //    }
    //    ?>

    {{--    @for($i=0; $i<=10; $i++)--}}
    {{--        {{$i}}--}}
    {{--    @endfor--}}

    <?php
    $dizi = ['php1', 'bootstrap', 'js'];
    //    foreach ($dizi as $key) {
    //        echo $key." ";
    //    }
    ?>

    {{--    @foreach($dizi as $key)--}}
    {{--    {{$key}}--}}
    {{--    @endforeach--}}
    <?php
    $deger = 0;
    //    while($deger<10)
    //    {
    //        echo $deger." ";
    //        $deger++;
    //    }
    ?>

    {{--    @while($deger<10)--}}
    {{--        {{$deger}}--}}
    {{--        @php($deger++)--}}
    {{--    @endwhile--}}

    {{--    ForElse--}}

    {{--    @php($dizi=['php'])--}}
    {{--    @if(count($dizi)>0)--}}
    {{--        @foreach($dizi as $key)--}}
    {{--            <li>{{$key}}</li>--}}
    {{--        @endforeach--}}
    {{--    @else--}}
    {{--        Eleman Bulunamadı--}}
    {{--    @endif--}}

    {{--    @php($dizi=['php','bootstrap','js'])--}}

    {{--    @forelse($dizi as $key)--}}
    {{--        <li>{{$key}}</li>--}}
    {{--        @empty--}}
    {{--        Eleman Bulunamadı--}}
    {{--    @endforelse--}}

    @php($dizi=['php','bootstrap','js','Laravel 6'])
    <ul>
        @foreach($dizi as $key)
            @foreach($dizi as $key)
                <li>{{$loop->parent->count}} {{$key}}</li>
            @endforeach
        @endforeach
    </ul>
@endsection



