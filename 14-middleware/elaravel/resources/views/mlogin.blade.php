<h1>Giriş Sayfası</h1>
<hr>
<form action="{{route('mloginCheck')}}" method="POST">
    @CSRF
    <input type="text" name="email">
    <input type="text" name="password">
    <input type="checkbox" name="remember"> Beni Hatırla
    <input type="submit" value="Giriş Yap">
</form>