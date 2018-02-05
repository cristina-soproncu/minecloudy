<section class="vbox">
  <section class="scrollable">
    <section class="hbox stretch">
      <aside class="aside-lg bg-light lter b-r">
        <section class="vbox">
          <section class="scrollable">
            <div class="wrapper">
              <div class="text-center m-b m-t">
                <a href="#" class="thumb-lg">
                  <?= $this->Html->image('images/m0.png') ?>
                </a>
                <div>
                  <div class="h3 m-t-xs m-b-xs"> 
                    <?= $username ?>
                  </div>
                </div>                
              </div>
            </div>
          </section>
        </section>
      </aside>
      <aside class="bg-white">
        <section class="vbox">
          <header class="header bg-light lt">
            <ul class="nav nav-tabs nav-white">
              <li class="active"><a href="#activity" data-toggle="tab">Activity</a></li>
            </ul>
          </header>
          <section class="scrollable">
            <div class="tab-content">
              <div class="tab-pane active" id="activity">
                <ul class="list-group no-radius m-b-none m-t-n-xxs list-group-lg no-border">
                  <li class="list-group-item">
                    <a href="edit?id=" class="clear">
                      <strong class="block">          
                        <?= $username ?>
                      </strong>
                      <small>File Name</small>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </section>
        </section>
      </aside>
    </section>
  </section>
</section>