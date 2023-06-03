h3>Login</h3>
<fieldset>
    <form method="post" action="">
        {{@csrf_field()}}
        Email: <input type="name" name="name" placeholder="Enter Name"><br>
        @error('name')
            {{$message}} <br>
        @enderror
        Password: <input type="password" name="password" placeholder="Enter a Password" ><br>
        @error('password')
            {{$message}}<br>
        @enderror
    </fieldset><br>
        <input type="submit" name="login" value="Login">
    </form>
    