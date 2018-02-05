<?php if ($loggedIn) : ?>
  <!-- footer -->
  <footer id="footer">
    <div class="text-center padder">
      <p>
        <small>A Powerful, Simple and Free Media Storage.<br>&copy; 2016</small>
      </p>
    </div>
  </footer>
  <!-- / footer -->
<?php endif; ?>
<?= $this->Html->script('jquery.min.js') ?>
<!-- Bootstrap -->
<?= $this->Html->script('bootstrap.js') ?>
<!-- App -->
<?= $this->Html->script('app.js') ?>
<?php if ($loggedIn) : ?>
  <?= $this->Html->script('slimscroll/jquery.slimscroll.min.js') ?>
  <?= $this->Html->script('parsley/parsley.min.js') ?>
  <?= $this->Html->script('parsley/parsley.extend.js') ?>
<?php endif; ?>
  <?= $this->Html->script('app.plugin.js') ?>
</body>
</html>