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
                <a href="#portfolio" onclick=$("#menu-close").click();>Portfolio</a>
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
    <div class="container">
      <div class="col-md-3 col-xs-6">
        <i class="fa fa-map-marker fa-fw"></i> DKI Jakarta
      </div>
      <div class="col-md-7 hidden-xs"></div>
      <div class="col-md-2 col-xs-6 bpt-topbar-flag text-right">
        <!--<a href="#">
          <img src="asset/images/indonesia.jpg" style="height:20px">
        </a>
        <a href="#">
          <img src="asset/images/uk.jpg" style="height:20px">
        </a>
        -->
      </div>
    </div>
  </div>
  <div class="bpt-navbar" style="margin-left:50px">
        <div class="col-md-2 col-sm-3 hidden-xs" style="padding-left:70px">

            <img src="<?php echo base_url('asset/asset_default/images/logo_bpt.gif')?>" class="img-responsive" alt="Blue Power Technology">
      
      <!--    <div class="col-md-4 col-sm-4 col-xs-6 visible-xs">
            <img src="asset/images/logo_bpt.gif" class="img-responsive" alt="Blue Power Technology" style="margin-top:10px">
          </div>
         <div class="col-md-8 col-sm-4 col-xs-6">
            <h1><b>Blue Power</b> Technology</h1>
          </div>-->
        </div>
        <div class="col-md-10 col-xs-10 col-sm-9">
          <nav class="navbar navbar-default">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bpt-collapse-nav" aria-expanded="false" aria-control="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand visible-xs" href="#">BPT</a>
            </div>
            <div class="collapse navbar-collapse" id="bpt-collapse-nav">
              <ul class="nav navbar-nav">
                    <li class="dropdown">
                      <a href="#">Home</a>
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
                    </li>-->
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#">News & Events<span class="caret"></span></a>
                      <ul class="dropdown-menu bpt-submenu">
                        <li><a href="#">News</a></li>
                        <li><a href="#">Events</a></li>
                      </ul>
                    </li>
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
                    </li>-->
                    <li><a href="#">Contact</a></li>
                  </ul>
            </div>
          </nav>
        </div>

  </div>
</nav>
                        <?php
                    }    
                    ?>