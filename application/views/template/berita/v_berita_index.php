<!--Mid Content Start-->
<div class="about-intro-wrap pull-left">
    <div class="bread-crumb-wrap ibc-wrap-3">
        <div class="container"><!--Title / Beadcrumb-->
            <div class="inner-page-title-wrap col-xs-12 col-md-12 col-sm-12">
                <div class="bread-heading"><h1>Blog Medium Image Right Sidebar</h1></div>
                <div class="bread-crumb pull-right">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about-us-1.html">Blog Medium Image Right Sidebar</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> 
    <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pull-left blgo-full-wrap no-pad">
            <div id="blog-medium-left">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div id="blog-medium-left">
                    <!--blog-medium-left-->
                        <?php foreach ($news as $row) { ?>
                        <?php
                            $deskripsi = htmlspecialchars_decode($row->berita_deskripsi);
                            // https://stackoverflow.com/questions/18450767/detect-and-extract-image-url-from-text-and-html-tags
                            preg_match_all('/<img[^>]*?\s+src\s*=\s*"([^"]+)"[^>]*?>/i',$deskripsi,$thumbs);
                            
                            $path = (count($thumbs[1])) ? pathinfo($thumbs[1][0]) : NULL;
                            $thumb = $path ? $path['dirname'].'/'.$path['filename'].'_thumb.'.$path['extension'] : base_url('dist/images/default.png');
                            $url = 'berita/post/'.$row->berita_id.'/'.url_title(strtolower(word_limiter($row->berita_judul,5)));
                        ?>
                        <div class="row  margin-top border-bottom">
                            <div class="col-sm-3 col-xs-12">
                            <!-- Blog box -->
                                <div class="blog-box wow fadeInDown" data-wow-delay="0.5s" data-wow-offset="0">
                                    <img alt="<?php echo $row->berita_judul ?>" src="<?php echo $thumb ?>" class="img-responsive" />
                                </div>
                            </div> 
                            <div class="col-sm-9 col-xs-12 fadeInDown wow">
                                <div class="blog-box-title"><?php echo anchor($url,$row->berita_judul) ?></div>
                                <div class="post-meta">By 
                                    <span class="post-author ipost-author"><?php echo $row->admin_nama ?></span> | 
                                    <span class="post-date"><?php echo mdate('%d/%m/%Y', strtotime($row->berita_tanggal)) ?></span> |
                                    <span class="post-author ipost-author">
                                    <?php
                                    foreach (json_decode($row->kategori_list) as $key => $item) {
                                        if ($key > 0) { echo ', '; }
                                        echo anchor('berita/kategori/'.$item->kategori_id,$item->kategori_nama, 'style="float: none;"');
                                    }
                                    ?>
                                    </span>
                                </div>
                                <div class="post-para">
                                    <p><?php echo character_limiter(trim(strip_tags($deskripsi)),140)?></p>
                                </div><!--end-post-para-->
                                <div class="r-more">
                                    <?php echo anchor($url,'Read More >') ?>
                                </div>
                            </div>
                        </div><!--end-row-->                    
                        <?php } ?>
                        <br />
                        <?php echo $pagination ?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-left side-bar-blog-bottom">
                <!--Sidebar-item-->
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
            </div><!--end-blog-medium-left-->
        </div>
    </div>
</div>
<!--Mid Content End-->
<!--Footer Start-->