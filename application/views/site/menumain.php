 <style>
                    li.parent.dropdown-submenu {
                        position: relative;
                    }
                </style>
                <div class="container">
                    <div class="mainnav-wrap">
                        <div class="row">
                            <div class="col-lg-9 col-md-9 col-sm-6 col-xs-12">
                                <div class="navbar navbar-inverse">
                                    <div class="pav-megamenu">
                                        <div class="navbar">
                                            <div id="mainmenutop" class="megamenu" role="navigation">
                                                <div class="navbar-header">
                                                    <!--button menu on mobile-->
                                                    <a href="javascript:;" data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle">
                                                        <span class="icon-bar"></span>
                                                        <span class="icon-bar"></span>
                                                        <span class="icon-bar"></span>
                                                    </a>
                                                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                                                        <ul class="nav navbar-nav megamenu">
                                                             <!--menu parent-->
                                                                 <!--not lv1-->
                                                                    <li class="">
                                                                        <a href="<?php echo base_url()?>">
                                                                            <span class="menu-title">Trang Chủ</span>
                                                                        </a>
                                                                    </li>
                                                                                                                             <!--menu parent-->
                                                                 <!--not lv1-->
                                                                    <li class="">
                                                                        <a href="<?php echo base_url('About');?>">
                                                                            <span class="menu-title">Giới Thiệu</span>
                                                                        </a>
                                                                    </li>
                                                                                                                             <!--menu parent-->
                                                                 <!--lv1-->
                                                                    <li class="parent dropdown aligned-left">
                                                                        <a class="dropdown-toggle" data-toggle="dropdown" href="">
                                                                            <span class="menu-title">Sản Phẩm</span>
                                                                            <b class="caret"></b>
                                                                        </a>
                                                                        <div class="dropdown-menu level1">
                                                                            <div class="dropdown-menu-inner">
                                                                                <div class="row">
                                                                                    <div class="mega-col col-xs-12 col-sm-12 col-md-12" data-type="menu">
                                                                                        <div class="mega-col-inner">
                                                                                            <ul>
                                                                                                 <!--menu lv1-->
                                                                                                     <!--if not lv2-->
                                                                                                     <?php  foreach ($catalog_list as $row): ?>
                                                                                                        <li class=" ">
                                                                                                            <a href="<?php echo base_url('san-pham/danh-muc/'.seoname($row->name).'/'.$row->id_catalog); ?>" target="_self">
                                                                                                                <span class="menu-title"><?php echo'<b>'. $row->name.'</b>'; ?></span>
                                                                                                            </a>
                                                                                                            <ul class="sub-menu">
                                                                                                                <?php foreach ($row->subs as $subs){ ?>
                                                                                                                    <li><a href="<?php echo base_url('san-pham/danh-muc/'.seoname($subs->name).'/'.$subs->id_catalog); ?>"><?php echo ' &nbsp; &nbsp;'.$subs->name; ?></a></li>
                                                                                                                <?php } ?>
                                                                                                            </ul>
                                                                                                        </li>
                                                                                                     <!--end lv1-->
                                                                                                    <?php endforeach; ?>
                                                                                               
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                  <!--menu parent-->
                                                                 <!--not lv1-->
                                                                    <li class="">
                                                                        <a href="tin-tuc-moi.html">
                                                                            <span class="menu-title">Tin Tức</span>
                                                                        </a>
                                                                    </li>
                                                                  <!--menu parent-->
                                                                 <!--not lv1-->
                                                                    <li class="">
                                                                        <a href="Lien-he.html">
                                                                            <span class="menu-title">Liên Hệ</span>
                                                                        </a>
                                                                    </li>
                                                            </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
                                
                              <div id="search" class="pull-right">
                                  
                                  <input class="input-search" name="search" value="" placeholder="Tìm kiếm" type="text">
                                    <span class="button-search"></span>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>