<?php $this->load->view('header') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Home
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <?php echo $this->session->userdata('item'); ?>
      <div>
          <div class="row">
          <?php if ($trades) { ?>
          <?php foreach ($trades as $row) { ?>
          <div class="col-md-4" style="min-height: 500px;">
              <div class="box box-solid box-primary">
                <div class="box-header">
                  <h3 class="box-title"><?= $row->trade_title ?></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  
                  <!-- <img class="img-responsive pad" src="dist/img/photo2.png" alt="Photo"> -->
                  <img class="img-responsive pad" src="<?= site_url('dist/img/' . $row->trade_pic_picture); ?>" alt="Photo">
                
                </div><!-- /.box-body -->
                <strong><i class="fa fa-th-list margin-r-5" style="margin-left:20px;"></i>Description</strong>
                  <div class="box-body">
                      <ul>
                        <li><?= $row->trade_description ?></li>
                      </ul>
                    </div>
                    <div class="box-body"  style="margin-left:10px;">
                        <strong><i class="fa fa-pencil margin-r-5" ></i>Interests</strong>
                        <p>
                          <span class="label label-danger"><i class="fa fa-gamepad"></i></span>
                          <span class="label label-success"><i class="fa fa-book"></i></span>
                          <span class="label label-info"><i class="fa fa-mobile-phone"></i></span>
                          <span class="label label-warning"><i class="fa fa-tv "></i></span>
                        </p>
                      </div>

                <!-- <button type="button" class="btn btn-block btn-primary btn-flat" >More info</button> -->
                <a class="btn btn-block btn-primary btn-flat" href="<?= site_url('Exchange/tradeDetails/' . $row->trade_id) ?>">More info</a>
              </div><!-- /.box -->
            </div>
            <?php 
          } ?>
            <?php 
          } else { ?>
              <div class="container">
                <div class="row">
                  <p>No trades available</p>
                </div>
              </div>
            <?php 
          } ?>
            
          </div>
      </div>
    </section>
    </div>
<!-- ./wrapper -->

<?php $this->load->view('footer') ?>