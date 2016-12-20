<div class="container">
    <div class="bpt-about text-center">
        <?php
          if($results!=FALSE){
            foreach ($results as $rows) {
              ?>
              <div class="blog-preview">
                <div style="margin-bottom:15px">
                  <div class="blog-title text-left">
                    <a href="<?php echo base_url($this->uri->segment(1).'/read-article/'.$rows->id_article.'/'.$this->mod->urlFriendly($rows->title_article))?>"><?php echo $rows->title_article?></a>
                  </div>
                  <div class="row bpt-stat">
                    <!-- <div class="col-md-2 col-xs-4">
                      <i class="fa fa-pencil" aria-hidden="true"></i>  Created by: <?php echo $rows->username; ?>
                    </div> -->
                    <div class="col-md-2 col-xs-6 text-left">
                      <i class="fa fa-clock-o" aria-hidden="true"></i>  <?php echo date('d M Y',strtotime($rows->date_article))?>
                    </div>
                    <!-- <div class="col-md-2 col-xs-4">
                      <i class="fa fa-eye" aria-hidden="true"></i>  Read <?php echo $rows->view; ?>x
                    </div> -->
                    <div class="col-md-6 hidden-xs"></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <!--<img class="img-responsive" src="<?php echo base_url($rows->image_article)?>">-->
                    <div style="background-image:url(<?php echo base_url($rows->image_article)?>);background-size: cover; background-position: center; height:200px"></div>
                    <small><em><?php echo $rows->caption; ?></em></small>
                  </div>
                  <div class="col-md-9 text-left">
                    <div style="height:120px;margin-bottom:45px;" class="hidden-xs hidden-sm">
                      <?php
                        echo substr($rows->content_article, 0, 600)."...";
                      ?>
                    </div>
                    <div style="height:120px;margin-bottom:45px;" class="visible-sm">
                      <?php
                        echo substr($rows->content_article, 0, 300)."...";
                      ?>
                    </div>
                    <div style="height:120px;margin-bottom:25px;" class="visible-xs">
                      <?php
                        echo substr($rows->content_article, 0, 300)."...";
                      ?>
                    </div>
                    <div>
                      <a href="<?php echo base_url($this->uri->segment(1).'/read-article/'.$rows->id_article.'/'.$this->mod->urlFriendly($rows->title_article))?>">
                        <button class="btn btn-md bpt-btn-primary" style="border-radius:0px">Read More <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></button>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3"></div>
                  <div class="col-md-9 text-left">

                  </div>
                </div>
            </div><!-- /.blog-preview-->
              <?php
            }
          }
        ?>
        <center><?php echo $links; ?></center>
    </div>
</div>

<section id="contact">
<div id="bpt-top-footer">
<div class="container">
  <?php $this->load->view('default/common/footer_page')?>
</div>
</div>
