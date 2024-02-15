<link rel="stylesheet" href="{{ asset('css/style.scss') }}">
<div class="wrapper">
<form method="post" action="{{route('register')}}" class="form-signin">
    @csrf
  <h2 class="form-signin-heading">Please Sign Up</h2>
  <input type="text" class="form-control" name="name" placeholder="name" required="" autofocus="" />
  <input type="email" class="form-control" name="email" placeholder="Email Address" required="" autofocus="" />
  <input type="password" class="form-control" name="password" placeholder="Password" required=""/>
  <label class="checkbox">
    <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
  </label>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
</form>
</div>
