<?= $this->element('header') ?>
<section class="vbox">
  <!--App header-->
  <?= $this->element('app-header') ?>
  <section>
    <section class="hbox stretch">
      <!-- .sidebar -->
      <?= $this->element('sidebar') ?>
      <?= $this->fetch('content') ?>
      <!--End Content-->
    </section>
  </section>
</section>
<?= $this->element('footer') ?>