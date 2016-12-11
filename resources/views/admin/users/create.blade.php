<form method="POST" action="/users">
    {!! csrf_field() !!}
    <input type="text" name="name" value="" placeholder="">
    <input type="email" name="email" value="" placeholder="">
    <input type="password" name="password" value="" placeholder="">
    <input type="submit" name="" value="Create">
</form>