<section class="m-b-lg">
  <header class="wrapper text-center">
    <strong>Sign in to get in touch</strong>
  </header>
  <form id="signinform" method="post" action="/signin">
    <div class="form-group">
      <input name="email" type="email" placeholder="Email" class="form-control rounded input-lg text-center no-border">
    </div>
    <div class="form-group">
      <input name="password" type="password" placeholder="Password" class="form-control rounded input-lg text-center no-border">
    </div>
    <button id="buttonLogIn" type="submit" class="btn btn-lg btn-warning lt b-white b-2x btn-block btn-rounded">
      <i class="icon-arrow-right pull-right"></i>
      <span class="m-r-n-lg">Sign in</span>
    </button>
    <div class="text-center m-t m-b"><a href="#"><small>Forgot password?</small></a></div>
    <div class="line line-dashed"></div>
    <p class="text-muted text-center"><small>Do not have an account?</small></p>
    <a href="/signup" class="btn btn-lg btn-info btn-block rounded">Create an account</a>
  </form>
</section>