<h1>BLADE YAPISI</h1>

<?php
//$ad = "Emrah Yüksel";
//echo $ad;
//?>

@php
    $ad = "Emrah Yüksel";
    echo $ad;
@endphp

@php($ad=5)
<br>
Adınız..: {{$ad}}
<br>
@php
$deger="<script>alert('hack')</script>";
@endphp

{{$deger}}
{!! $deger !!}

{{--
YORUM SATIRI 1
YORUM SATIRI 2
--}}




