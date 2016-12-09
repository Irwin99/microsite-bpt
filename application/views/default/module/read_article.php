<div class="container">
  <div class="bpt-about text-center" style="margin-bottom:20px;margin-top:175px">
    <div class="row bpt-title">
      <h2>Article</h2>
    </div>
            <div class="blog-preview">
              <div style="margin-bottom:15px">
                <div class="blog-title text-left">
                  <?php echo $result['title_article']?>
                </div>
                <div class="row bpt-stat">
                  <div class="col-md-2">
                    <i class="fa fa-pencil" aria-hidden="true"></i>  Created by: <?php echo $result['username'] ?>
                  </div>
                  <div class="col-md-2">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>  <?php echo date('d M Y',strtotime($result['date_article']))?>
                  </div>
                  <div class="col-md-2">
                    <i class="fa fa-eye" aria-hidden="true"></i>  Viewed <?php echo $result['view'] ?> x
                  </div>
                  <div class="col-md-6"></div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <img class="img-responsive" src="<?php echo base_url($result['image_article'])?>">
                </div>
                <div class="col-md-9 text-left">
                  <?php
                    echo $result['content_article']
                  ?>
                </div>
              </div>
          </div><!-- /.blog-preview-->
  </div>
</div>

<section id="contact">
<div id="bpt-top-footer">
<div class="container">
  <?php $this->load->view('default/common/footer_page')?>
</div>
</div>