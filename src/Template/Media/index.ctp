<section id="content" class='container-fluid'>
  <section class="hbox stretch">
    <section class="vbox">
      <section class="scrollable">
        <a href="/media/add" class="pull-right text-muted m-t-lg"><i class="icon-plus i-lg  inline" id="refresh"></i></a>
        <h2 class="font-thin m-b">Latest Uploads</h2>
        <div class="row row-sm">
          <?php
          if ($media):
            foreach ($media as $media):
              ?>
              <div class="col-xs-12 col-sm-4">
                <div class="item">
                  <div class="pos-rlt">
                    <?php if ($media->type == 'video'): ?>
                      <video style="width:100%;max-width:100%;" controls="">
                        <source src="/uploads/<?php echo $media->src; ?>" type="video/mp4">
                        Your browser does not support HTML5 video.
                      </video>
                    <?php elseif ($media->type == 'image'): ?>
                      <a href="/media/edit/<?php echo $media->id; ?>"><img src="/uploads/<?php echo $media->src; ?>" alt="" class="r r-2x img-full"></a>
                    <?php elseif ($media->type == 'audio'): ?>
                      <audio controls="controls" src="<?php echo '/uploads/' . $media->src; ?>">
                        Your browser does not support the HTML5 Audio element.
                      </audio>
                    <?php endif; ?>
                  </div>
                  <div class="padder-v">
                    <?= $this->Html->link(__($media->name), ['action' => 'edit', $media->id], ['class' => 'text-ellipsis']) ?>
                  </div>
                </div>
              </div>
              <?php
            endforeach;
          else:
            ?>
            <div class="alert alert-info">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <i class="fa fa-info-sign"></i><strong>Hi!</strong> You don't have any file yet, <a href="upload" class="alert-link">try to upload</a>
            </div>
          <?php endif; ?>
        </div>
      </section>
    </section>
  </section>
  <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
</section>