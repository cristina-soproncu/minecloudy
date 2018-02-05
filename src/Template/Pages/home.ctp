<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;

$this->layout = false;
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>MineCloud-Best media cloud!</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?= $this->Html->meta('icon') ?>
    <!--[if lte IE 8]><?= $this->Html->script('home/ie/html5shiv.js') ?><![endif]-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <?= $this->Html->css('home/main.css') ?>
    <!--[if lte IE 8]><?= $this->Html->css('home/ie8.css') ?><![endif]-->
    <!--[if lte IE 9]><?= $this->Html->css('home/ie9.css') ?><![endif]-->
  </head>
  <body id="top">
    <!-- Header -->
    <header id="header">
      <div class="content">
        <h1><a href="/">MineCloudy</a></h1>
        <p><br />A Powerful, Simple and Free Media Storage.</p>
        <ul class="actions">
          <li><a href="/signin" class="button special icon fa-sign-in" >Sign in</a></li>
          <li><a href="/signup" class="button icon fa-user-plus scrolly" >Sign up</a></li>
        </ul>
      </div>
      <div class="image phone">
        <div class="inner">
          <?= $this->Html->image('logo.png') ?>
        </div>
      </div>
    </header>

    <!-- One -->
    <section id="one" class="wrapper style2 special">
      <header class="major">
        <h2>Cloud from anywhere</h2>
      </header>
      <ul class="icons major">
        <li><span class="icon fa-wifi"><span class="label">WiFi</span></span></li>
        <li><span class="icon fa-refresh"><span class="label">Process</span></span></li>
        <li><span class="icon fa-cloud"><span class="label">Upload</span></span></li>
      </ul>
    </section>

    <!-- Two -->
    <section id="two" class="wrapper">
      <div class="inner alt">
        <section class="special">
          <ul class="icons labeled">
            <li><span class="icon fa-facebook-official"><span class="label">Directly from Facebook</span></span></li>
            <li><span class="icon fa-bus"><span class="label">Take your data anywhere</span></span></li>
            <li><span class="icon fa-cloud"><span class="label">Easy to sync</span></span></li>
            <li><span class="icon fa-code"><span class="label">High security</span></span></li>
            <li><span class="icon fa-instagram"><span class="label">Directly from Instagram</span></span></li>
          </ul>
        </section>
      </div>
    </section>

    <!-- Footer -->
    <footer id="footer">
      <ul class="icons">
        <li><a href="https://www.facebook.com/cristina.soproncu" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
        <li><a href="https://twitter.com/Sopronko" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
        <li><a href="https://www.instagram.com/cristinaaakk/" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
      </ul>
      <p class="copyright">&copy; MineCloudy 2016</p>
    </footer>

    <!-- Scripts -->
    <?= $this->Html->script('home/jquery.min.js') ?>
    <?= $this->Html->script('home/jquery.scrolly.min.js') ?>
    <?= $this->Html->script('home/skel.min.js') ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <?= $this->Html->script('home/util.js') ?>
    <!--[if lte IE 8]><?= $this->Html->script('home/ie/respond.min.js') ?><![endif]-->
    <?= $this->Html->script('home/main.js') ?>
  </body>
</html>