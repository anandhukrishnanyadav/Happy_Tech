  <!-- start Subscribe Area -->
  <section class="subscribe-area section-half" id="subscribe-area">
    <div class="container">
      <div class="row section_padding">
            <div class="col-12 col-lg-12">
               <!-- message -->
              <?php if ($this->session->flashdata('success_subscriber')): ?>
                <div class="m-b-15">
                    <div class="alert alert-success alert-dismissable">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                        <p>
                            <i class="icon fa fa-check"></i>
                            <?php echo $this->session->flashdata('success_subscriber'); ?>
                        </p>
                    </div>
                </div>
              <?php endif; ?>
    
              <?php if ($this->session->flashdata('error_subscriber')): ?>
                <div class="m-b-15">
                    <div class="alert alert-danger alert-dismissable">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                        <p>
                            <i class="icon fa fa-check"></i>
                            <?php echo $this->session->flashdata('error_subscriber'); ?>
                        </p>
                    </div>
                </div>
              <?php endif; ?>
        </div>    
      
       
      </div>
    </div>
  </section>
  <!-- End Subscribe Area --> 

<!-- start footer Area -->    

<?php $footer =  get_footer_settings(); ?>

<footer class="footer-area footer-section">
  <div class="container">
    <div class="row">

      <?php  foreach ($footer as $col):   ?>

      <div class="col-lg-<?= $col['grid_column'] ?>  col-md-<?= $col['grid_column'] ?> col-sm-6">
        <div class="single-footer-widget newsletter">
          <h6><?=trans($col['title'])?></h6>
          <?= $col['content'] ?>
        </div>
      </div>

      <?php endforeach; ?>
      
    </div>

    
  </div>
</footer>
<!-- End Footer Area -->

<!-- start Copyright Area -->

<!-- End Copyright Area --> 