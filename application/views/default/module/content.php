    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1>Blue Power Technology</h1>
            <h3>Your IT Expert Partner</h3>
            <br>
            <a href="#about" class="btn btn-dark btn-lg">Find Out More</a>
        </div>
    </header>

    <!-- About -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Don't let your business fail due power failure!</h2>
                    <p class="lead">Let us help your business with <a target="_blank" href="<?php echo base_url('p/article')?>">Riello UPS Smart Solutions </a>!</p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <section id="services" class="services bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>Products & Solutions</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-globe fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Network</strong>
                                </h4>
                                <p>Connect With It</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-shield fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Security</strong>
                                </h4>
                                <p>Safe your Company.</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-list fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Infrastructure</strong>
                                </h4>
                                <p>Build your own IT Infrastructure</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-laptop fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Software</strong>
                                </h4>
                                <p>Keep in touch with company</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Callout -->
    <aside class="callout">
        <div class="text-vertical-center">
            <h1>Every Business needs Analytics</h1>
        </div>
    </aside>

    <!-- Portfolio -->
    <section id="news" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>News & Events</h2>
                    <hr class="small">
                    <div class="row">
                        <?php
                            if($results!= FALSE){
                                foreach ($results as $rows) {
                                ?>
                                <div class="col-md-6">
                                    <div class="news-item" style="background-image:url('<?php echo base_url($rows->image_article)?>');">
                                        <a href="<?php echo base_url('p/read-article/'.$rows->id_article.'/'.$this->mod->urlFriendly($rows->title_article))?>">
                                            <div class="bpt-box">
                                                <div class="news-title">
                                                    <?php echo $rows->title_article?>
                                                </div>
                                                <div class="news-preview">
                                                    <?php echo substr($rows->content_article, 0, 50) ?>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <?php          
                                }
                            }
                        ?>
                    </div>
                    <!-- /.row (nested) -->
                    <a href="<?php echo base_url('p/article')?>" class="btn btn-dark">View More News</a>
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Call to Action -->
    <aside class="call-to-action bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>Our Address & Contact.</h3>
                   <!--  <a href="#" class="btn btn-lg btn-light">Click Me!</a>
                    <a href="#" class="btn btn-lg btn-dark">Look at Me!</a> -->
                </div>
            </div>
        </div>
    </aside>

    <!-- Map -->
    <section id="contact" class="map">
        <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2593613840804!2d106.81804791418791!3d-6.229497995490628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e2e4d89afd%3A0xaa439c728b697fa8!2sPT.+Blue+Power+Technology!5e0!3m2!1sen!2sid!4v1480063446914"></iframe>
        <br />
        <small>
            <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
        </small>
        </iframe>
    </section>