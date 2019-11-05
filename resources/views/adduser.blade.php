



<form method="post" action="{{action('UserController@insertAction')}}">
    Meno:<br>
    <input type="text" name="meno" value="Mickey">
    <br>
    Priezvisko:<br>
    <br>
    <input type="text" name="priezvisko" value="Mouse">
    Email:<br>
        <input type="text" name="email" value="@">
    <br>
    Vek:<br>
    <input type="number" name="vek" value="14">
    <br><br>

    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <input type="submit" name="Odoslat">

</form>
