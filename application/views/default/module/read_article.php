<div class="container">
  <div class="bpt-about text-center" style="margin-bottom:20px;margin-top:175px">
    <div class="container">
      <div class="row bpt-title text-left">
        <h2>Article <!-- / <?php echo $result['name_category']?> --></h2>
      </div>
    </div>
            <div class="blog-preview">
              <div style="margin-bottom:15px">
                <div class="blog-title text-left">
                  <?php echo $result['title_article']?>
                </div>
                <div class="row bpt-stat">
                  <!-- <div class="col-md-2">
                    <i class="fa fa-pencil" aria-hidden="true"></i>  Created by: <?php echo $result['username'] ?>
                  </div> -->
                  <div class="col-md-2  col-xs-6 text-left">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>  <?php echo date('d M Y',strtotime($result['date_article']))?>
                  </div>
                  <!-- 
                  <div class="col-md-2">
                    <i class="fa fa-eye" aria-hidden="true"></i>  Viewed <?php echo $result['view'] ?> x
                  </div> -->
                </div>
              </div>
              <div class="row">
                <div class="col-md-3">
                  <img class="img-responsive" src="<?php echo base_url($result['image_article'])?>">
                  <small><em><?php echo $result['caption']; ?></em></small>
                </div>
                <div class="col-md-9 text-left">
                  <?php
                    echo $result['content_article']
                  ?>
                </div>
                <div class="pull-right">
                  <br/>
                  <span class='st_facebook_large' displayText='Facebook'></span>
                  <span class='st_twitter_large' displayText='Tweet'></span>
                  <span class='st_linkedin_large' displayText='LinkedIn'></span>
                  <span class='st_pinterest_large' displayText='Pinterest'></span>
                  <span class='st_email_large' displayText='Email'></span>
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