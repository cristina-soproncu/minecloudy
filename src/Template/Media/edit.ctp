<section id="content">
  <section class="vbox">
    <section class="scrollable padder">
      <div class="row">
        <section class="panel panel-default">
          <header class="panel-heading font-bold">Edit file</header>
          <div class="panel-body">
            <?php if ($permissions) : ?>
              <div class="col-xs-12 col-sm-4">
                <div class="item">
                  <div class="pos-rlt">
                    <?php if ($media->type == 'video'): ?>
                      <video style="width:100%;max-width:100%;" controls="">
                        <source src="<?php echo '/uploads/' . $media->src; ?>" type="video/mp4">
                        Your browser does not support HTML5 video.
                      </video>
                    <?php elseif ($media->type == 'image'): ?>
                      <img src="<?php echo '/uploads/' . $media->src; ?>" alt="" class="r r-2x img-full">
                    <?php elseif ($media->type == 'audio'): ?>
                      <audio controls="controls" src="<?php echo '/uploads/' . $media->src; ?>">
                        Your browser does not support the HTML5 Audio element.
                      </audio>
                    <?php endif; ?>
                  </div>
                  <div class="padder-v">
                    <?php echo $media->name; ?>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-4">
                <?php echo $media->description; ?>
              </div>
              <form data-validate="parsley" class="form-horizontal" action="/media/edit/<?php echo $media->id; ?>" method="post">
                <div style="display:none;"><input type="hidden" name="_method" value="PUT"></div>
                <div class="form-group">
                  <div class="col-sm-10 col-sm-offset-1">
                    <input type="text" name="name" class="form-control rounded parsley-validated" value="<?php echo $media->name; ?>">                        
                  </div>
                </div>
                <div class="line line-dashed b-b line-lg pull-in"></div>
                <div class="form-group">
                  <div class="col-sm-10 col-sm-offset-1">
                    <textarea class="form-control parsley-validated" name="description" rows="5"><?php echo $media->description; ?></textarea>
                  </div>
                </div>
                <div class="line line-dashed b-b line-lg pull-in"></div>
                <div class="form-group">
                  <div class="col-sm-4 col-sm-offset-1">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </form>
              <?= $this->Form->postLink(__('Delete File'), ['action' => 'delete', $media->id], ['class' => 'btn btn-primary pull-right'], ['confirm' => __('Are you sure you want to delete # {0}?', $media->id)]) ?>
            <?php else: ?>
              <div class="alert alert-danger fade in">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <i class="fa fa-info-sign"></i><strong>You don't have permissions to edit this file.</strong>
              </div>
            <?php endif; ?>
            <?= $this->Flash->render() ?>
          </div>
        </section>
      </div>
    </section>
  </section>
</section>