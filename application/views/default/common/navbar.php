<?php if($this->uri->segment(1)==""){
                        ?>
                        <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top" onclick=$("#menu-close").click();>Blue Power Tecnology</a>
            </li>
            <li>
                <a href="#top" onclick=$("#menu-close").click();>Home</a>
            </li>
            <li>
                <a href="#about" onclick=$("#menu-close").click();>About</a>
            </li>
            <li>
                <a href="#services" onclick=$("#menu-close").click();>Services</a>
            </li>
            <li>
                <a href="#news" onclick=$("#menu-close").click();>News</a>
            </li>
            <li>
                <a href="#contact" onclick=$("#menu-close").click();>Contact</a>
            </li>
        </ul>
    </nav>
                        <?php
                        }
                        else {
                        ?>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="bpt-topbar">
    <div class="container text-center">
      <div class="col-md-4 col-xs-6" style="padding: 5px 0;">
        <a href="https://www.facebook.com/bluepowerid"><i class="fa fa-facebook fa-2x" aria-hidden="true" style="margin: 15px 5px 0 0;"></i></a>
        <a href="https://twitter.com/bluepowerid"><i class="fa fa-twitter fa-2x" aria-hidden="true" style="margin: 15px 5px 0 0;"></i></a>
        <a href="https://www.instagram.com/bluepowerid/"><i class="fa fa-instagram fa-2x" aria-hidden="true" style="margin: 15px 5px 0 0;"></i></a>
        <a href="https://www.linkedin.com/company/blue-power-technology"><i class="fa fa-linkedin fa-2x" aria-hidden="true" style="margin: 15px 5px 0 0;"></i></a>
      </div>
      <div class="col-md-6 hidden-xs"></div>
      <div class="col-md-2 col-xs-6 bpt-topbar-flag text-center">
        <!--<a href="#">
          <img src="asset/images/indonesia.jpg" style="height:20px">
        </a>
        <a href="#">
          <img src="asset/images/uk.jpg" style="height:20px">
        </a>
        -->
        <img src="<?php echo base_url('asset/images/member_cti.png')?>" style="height:40px;">
      </div>
    </div>
  </div>
  <div class="bpt-navbar">
      <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12 ">
          <nav class="navbar navbar-default">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bpt-collapse-nav" aria-expanded="false" aria-control="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="visible-xs clearfix" href="#">
                <img src="<?php echo base_url('asset/asset_default/images/logo_bpt.gif')?>" width="80px" alt="Blue Power Technology">
              </a>
              <img src="<?php echo base_url('asset/asset_default/images/logo_bpt.gif')?>" width="100px" alt="Blue Power Technology" class="hidden-xs">
            </div>
            <div class="collapse navbar-collapse" id="bpt-collapse-nav">
              <ul class="nav navbar-nav">
                    <li>
                      <a href="<?php echo base_url('')?>">Home</a>
                    </li>
                    <li>
                      <a href="<?php echo base_url('p/article')?>">Article</a>
                    </li>
                      <!--<ul class="dropdown-menu bpt-submenu">
                        <li><a href="#">Grow with BPT</a></li>
                        <li><a href="#">Our Values</a></li>
                        <li><a href="#">BOD</a></li>
                        <li><a href="#">Testimonial</a></li>
                        <li class="dropdown-submenu">
                          <a class="test" tabindex="-1" href="#">Certifications <span><i class="fa fa-caret-right" aria-hidden="true"></i>
</span></a>
                          <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="#">Software</a></li>
                            <li><a tabindex="-1" href="#">Network</a></li>
                          </ul>
                        </li>
                        <li><a href="#">Awards</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Product</a></li>
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Solutions<span class="caret"></span></a>
                      <ul class="dropdown-menu bpt-submenu">
                        <li><a href="#">Industry</a></li>
                        <li><a href="#">Software Infrastructure</a></li>
                        <li><a href="#">Network Security</a></li>
                        <li><a href="#">Cloud</a></li>
                        <li><a href="#">Infrastructure</a></li>
                        <li><a href="#">Lenovo support</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Article<span class="caret"></span></a>
                      <ul class="dropdown-menu bpt-submenu">
                      <?php
                        $category = $this->mod->fetchAllData('category');
                        if($category != FALSE){
                          foreach ($category as $rows) {
                            ?>
                            <li><a href="<?php echo base_url('page/category/'.$rows->id_category.'/'.$this->mod->urlFriendly($rows->name_category)) ?>"><?php echo $rows->name_category ?></a></li>
                            <?php    
                          }
                        }
                      ?>
                      <li><a href="<?php echo base_url('page/article')?>">All Article</a></li>
                      </ul>
                    </li>-->
                    <!--<li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Media<span class="caret"></span></a>
                      <ul class="dropdown-menu bpt-submenu">
                        <li><a href="#">Media Coverage</a></li>
                        <li><a href="#">Press Release</a></li>
                        <li><a href="#">Articles</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Promotions</a></li>
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Careers<span class="caret"></span></a>
                      <ul class="dropdown-menu bpt-submenu">
                        <li><a href="#">Grow with BPT Indonesia</a></li>
                        <li><a href="#">Search jobs</a></li>
                        <li><a href="#">Graduate Trainee Program</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Contact</a></li>-->
                  </ul>
                  <form class="navbar-form navbar-right" style="margin-top: 40px;">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </form>
            </div>
          </nav>
        </div>
        <div class="clearfix"></div>
        </div>
  </div>
</nav>
                        <?php
                    }    
                    ?>