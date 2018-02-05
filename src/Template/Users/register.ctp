<section class="m-b-lg">
  <header class="wrapper text-center">
    <strong>Sign up to find interesting things</strong>
  </header>
  <form id="sigupform" method="post" action="/signup">
    <div class="form-group">
      <input name="name" placeholder="Name" class="form-control rounded input-lg text-center no-border">
    </div>
    <div class="form-group">
      <input name="email" type="email" placeholder="Email" class="form-control rounded input-lg text-center no-border">
    </div>
    <div class="form-group">
      <input name="password" type="password" placeholder="Password" class="form-control rounded input-lg text-center no-border">
    </div>      
    <button id="buttonsignUp" type="submit" class="btn btn-lg btn-warning lt b-white b-2x btn-block btn-rounded">
      <i class="icon-arrow-right pull-right"></i>
      <span class="m-r-n-lg">Sign up</span>
    </button>
    <div class="line line-dashed"></div>
    <p class="text-muted text-center"><small>Already have an account?</small></p>
    <a href="/signin" class="btn btn-lg btn-info btn-block btn-rounded">Sign in</a>
    </div>
  </form>
</section>