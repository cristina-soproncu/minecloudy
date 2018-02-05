<section id="content">
  <section class="vbox">
    <section class="scrollable padder">
      <div class="row">
        <section class="panel panel-default">
          <header class="panel-heading font-bold">Upload new file</header>
          <div class="panel-body">
            <form data-validate="parsley" class="form-horizontal" action="/media/add" method="post" enctype="multipart/form-data">
              <div style="display:none;"><input type="hidden" name="user_id" value="<?= $currentuser; ?>"></div>
              <div class="form-group">
                <div class="col-sm-10 col-sm-offset-1">
                  <input type="text" name="name" class="form-control rounded parsley-validated" data-required="true" placeholder="File Name">                        
                </div>
              </div>
              <div class="line line-dashed b-b line-lg pull-in"></div>
              <div class="form-group">
                <div class="col-sm-10 col-sm-offset-1">
                  <textarea class="form-control parsley-validated" name="description" rows="5" placeholder="File Description"></textarea>
                </div>
              </div>
              <div class="line line-dashed b-b line-lg pull-in"></div>
              <div class="form-group">
                <div class="col-sm-10 col-sm-offset-1">
                  <input type="file" name="uploadfile" class="btn btn-default btn-file parsley-validated" data-required="true" placeholder="File">
                </div>
              </div>
              <div class="line line-dashed b-b line-lg pull-in"></div>
              <div class="form-group">
                <div class="col-sm-4 col-sm-offset-1">
                  <button type="submit" class="btn btn-primary">Upload File</button>
                </div>
              </div>
            </form>
            <?= $this->Flash->render() ?>
          </div>
        </section>
      </div>
    </section>
  </section>
</section>