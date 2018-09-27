<!--Mid Content Start-->
<style>
.post-description img {
    max-width: 100%;
}
</style>
<div id="blog-full-width-post">
    <div class="about-intro-wrap pull-left">
        <div class="bread-crumb-wrap ibc-wrap-1">
            <div class="container">
            <!--Title / Beadcrumb-->
                <div class="inner-page-title-wrap col-xs-12 col-md-12 col-sm-12">
                    <div class="bread-heading"><h1>Berita</h1></div>
                        <div class="bread-crumb pull-right">
                            <ul>
                                <li><?php echo anchor('','Home')?></li>
                                <li><?php echo anchor('berita','Berita')?></li>
                                <li><a><?php echo $berita->berita_judul?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>     
            <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="blog-single-image-post">
                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                            <div class="col-xs-12 col-sm-12 col-md-12 pull-left gallery-page-wrap no-pad">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-pad">
                                    <div class="blog-box-title"><?php echo $berita->berita_judul?></div>
                                        <div class="post-meta">By 
                                            <span class="post-author ipost-author"><?php echo $berita->admin_nama ?></span> | 
                                            <span class="post-date"><?php echo mdate('%d/%m/%Y',strtotime($berita->berita_tanggal))?> </span>|
                                            <span class="post-author ipost-author">
                                            <?php
                                                foreach (json_decode($berita->kategori_list) as $key => $list) {
                                                    echo anchor('kategori/'.$list->kategori_id,$list->kategori_nama,'style="float: none"');
                                                }
                                            ?>
                                            </span>
                                        </div>
                                        <br />
                                        <div class="post-description">
                                        <?php echo htmlspecialchars_decode($berita->berita_deskripsi)?>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12  col-sm-12  col-xs-12 no-pad social-section social1-section">
                                        <div class="col-lg-6 col-md-6  col-sm-12  col-xs-12 no-pad social-section1 pull-left">
                                            <p class="para-color">Share This Story, Choose Your Platform!</p>
                                        </div>
                                        <div class="col-lg-6 col-md-6  col-sm-12  col-xs-12 no-pad social-section2 pull-right">
                                            <div class="social-wrap-head col-md-12 no-pad ">
                                                <ul>
                                                    <li><a href="#"><i class="icon-facebook head-social-icon" id="face-head" data-original-title="" title=""></i></a></li>
                                                    <li><a href="#"><i class="icon-social-twitter head-social-icon" id="tweet-head" data-original-title="" title=""></i></a></li>
                                                    <li><a href="#"><i class="icon-google-plus head-social-icon" id="gplus-head" data-original-title="" title=""></i></a></li>
                                                    <li><a href="#"><i class="icon-linkedin head-social-icon" id="link-head" data-original-title="" title=""></i></a></li>
                                                    <li><a href="#"><i class="icon-rss head-social-icon" id="rss-head" data-original-title="" title=""></i></a></li>
                                                    <li><a href="#"><i class="icon-twitter head-social-icon" id="twitter-head" data-original-title="" title=""></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 side-bar-blog-bottom">
                            <div class="catagory-list">
                                <div class="side-blog-title">Catagories</div>
                                    <ul>
                                        <?php foreach ($kategori as $key => $item) { ?>
                                        <li><a href="<?php echo site_url('berita/kategori/'.$item->kategori_id) ?>"><i class="fa fa-angle-right about-list-arrows"></i> <?php echo $item->kategori_nama ?> (<?php echo $item->kategori_count ?>)</a></li>
                                        <?php } ?>
                                    </ul>
                                </div>

                                <!--Sidebar-item-->
                                <div class="post-tabs">
                                <!-- Nav tabs -->
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#popular1" data-toggle="tab">Popular</a></li>
                                        <li><a href="#recent1" data-toggle="tab">Recent</a></li>
                                    </ul>
                                <!-- Tab panes -->
                                    <div class="tab-content">
                                    <!--popular posts--> 
                                        <div class="tab-pane fade in active" id="popular1">
                                            <div class="popular-post-box">
                                                <img alt="" src="images/blog-dummy-1.png" class="img-responsive pull-left" />
                                            <div class="post-title-side">Etiam tristique niba</div>
                                            <div class="post-date-side">April, 7th, 2014</div>
                                        </div>

                                        <div class="popular-post-box">
                                            <div class="post-title-side">Etiam tristique niba</div>
                                            <div class="post-date-side">April, 7th, 2014</div>
                                        </div>

                                        <div class="popular-post-box">
                                            <img alt="" src="images/blog-dummy-1.png" class="img-responsive pull-left" />
                                            <div class="post-title-side">Etiam tristique niba</div>
                                            <div class="post-date-side">April, 7th, 2014</div>
                                        </div>

                                    </div><!--popular posts end--> 

                                    <!--Recent posts-->
                                    <div class="tab-pane fade" id="recent1">
                                        <div class="popular-post-box">
                                                <img alt="" src="images/blog-dummy-1.png" class="img-responsive pull-left" />
                                            <div class="post-title-side">Etiam tristique niba</div>
                                            <div class="post-date-side">April, 7th, 2014</div>
                                        </div>

                                        <div class="popular-post-box">
                                            <div class="post-title-side">Etiam tristique niba</div>
                                            <div class="post-date-side">April, 7th, 2014</div>
                                        </div>

                                        <div class="popular-post-box">
                                            <img alt="" src="images/blog-dummy-1.png" class="img-responsive pull-left" />
                                            <div class="post-title-side">Etiam tristique niba</div>
                                            <div class="post-date-side">April, 7th, 2014</div>
                                        </div>
                                    </div><!--Recent posts End-->
                                </div><!-- Tab panes end-->
                            </div><!-- side item-end -->
                        </div>
                    </div>
                </div>
            </div><!--end-container-->
        </div>
    </div><!--end-blog-full-width-post-->
</div>
<!--Mid Content End-->



<!--Footer Start-->
