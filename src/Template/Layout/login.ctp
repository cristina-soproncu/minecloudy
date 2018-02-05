<?= $this->element('header') ?>
<section id="content" class="loginpage m-t-lg wrapper-md animated fadeInUp">    
  <div class="container aside-xl">
    <a class="navbar-brand block" href="/"><span class="h1 font-bold">MineCloudy</span></a>
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>
  </div>
</section>
<?= $this->element('footer') ?>