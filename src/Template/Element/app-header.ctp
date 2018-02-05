<header class="bg-white-only header header-md navbar navbar-fixed-top-xs">
  <div class="navbar-header aside bg-info nav-xs">
    <a href="/" class="navbar-brand text-lt">
      <i class="icon-cloud-upload"></i>
      <img src="/img/logo.png" alt="." class="hide">
      <span class="hidden-nav-xs m-l-sm">MineCloudy</span>
    </a>
  </div>
  <ul class="nav navbar-nav hidden-xs">
    <li>
      <a href="#nav,.navbar-header" data-toggle="class:nav-xs,nav-xs" class="text-muted">
        <i class="fa fa-indent text"></i>
        <i class="fa fa-dedent text-active"></i>
      </a>
    </li>
  </ul>
  <div class="navbar-right ">
    <ul class="nav navbar-nav m-n hidden-xs nav-user user">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle bg clear" data-toggle="dropdown">
          <span class="thumb-sm avatar pull-right m-t-n-sm m-b-n-sm m-l-sm">
            <?= $this->Html->image('images/m0.png') ?>
          </span>
          <?= $currentusername ?>
          <b class="caret"></b>
        </a>
        <ul class="dropdown-menu animated fadeInRight">
          <li>
            <?= $this->Html->link('Profile', ['controller' => 'users', 'action' => 'profile']); ?>
          </li>
          <li class="divider"></li>
          <li>
            <?= $this->Html->link('Logout', ['controller' => 'users', 'action' => 'logout']); ?>
          </li>
        </ul>
      </li>
    </ul>
  </div>      
</header>