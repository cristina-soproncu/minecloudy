<!DOCTYPE html>
<html lang="en" class="app">
  <head>  
    <meta charset="utf-8" />
    <title>MineCloudy</title>
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->css('animate.css') ?>
    <?= $this->Html->css('font-awesome.min.css') ?>
    <?= $this->Html->css('simple-line-icons.css') ?>
    <?= $this->Html->css('font.css') ?>
    <?= $this->Html->css('app.css') ?>
    <?= $this->Html->css('main.css') ?>
    <!--[if lt IE 9]>
      <?= $this->Html->script('ie/html5shiv.js') ?>
      <?= $this->Html->script('ie/respond.min.js') ?>
      <?= $this->Html->script('ie/excanvas.js') ?>
    <![endif]-->
  </head>
  <body class="<?php echo $loggedIn ? '' : 'bg-info dker'; ?>">