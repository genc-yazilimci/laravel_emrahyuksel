<h1>YAŞ KONTROLLÜ GİRİŞ</h1>
<form action="{{route('ageCheckPost')}}" method="POST">
    @CSRF
    Yaşınız
    <input type="text" name="age">
    <input type="submit" value="Giriş Yap">
</form>
