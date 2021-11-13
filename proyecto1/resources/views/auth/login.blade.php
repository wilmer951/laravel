<h1>Loguero</h1>



<form action="{{ route('login') }}" method="POST">
    @csrf
<input type="email" name="email">
<input type="password" name="password">
<input type="submit" value="ingresar">

</form>








