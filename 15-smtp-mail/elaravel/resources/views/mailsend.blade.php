<p>{{session('success')}}</p>
<form action="{{route('sendpost')}}" method="post">
    @CSRF
    Ad Soyad
    <input type="text" name="name" >
    Mail
    <input type="text" name="email" >
    <input type="submit" value="Mail Gönder">
</form>