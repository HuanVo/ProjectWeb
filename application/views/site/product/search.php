<div id="breadcrumb">
        <ol class="breadcrumb container">
            <li><a href="<?php echo base_url();?>"><span><i class="fa fa-home"></i></span></a></li>
                <li><a href=""><span>Tìm kiếm</span></a></li>
        </ol>
    </div>
<section id="sidebar-main" class="col-sm-12">
                <div id="content">
                    <h1>Tìm kiếm - combo</h1>
                    <label class="control-label" for="input-search">Tiêu chí Tìm kiếm</label>
                    <div class="content">
                        <div class="wrapper">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-horizontal">
                                        <div class="form-group">
                                            <label for="search" class="col-md-3 hidden-xs hidden-sm">Tiêu chí Tìm kiếm</label>
                                            <div class="col-md-9">
                                                <input name="search" value="combo" placeholder="Từ khóa" id="input-search" class="input-text form-control" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <select name="category_id" class="form-control">
                                        <option value="0">Tất cả danh mục</option>
                                        <option value="61">Món chính</option>
                                        <option value="63">Thức uống</option>
                                        <option value="62">Tráng miệng</option>
                                    </select>
                                </div>

                                <div class="col-sm-4">
                                    <label for="sub_category" class="checkbox">
                                        <input name="sub_category" value="1" id="sub_category" disabled="" type="checkbox">
                                            Tìm kiếm trong danh mục con
                                    </label>
                                </div>
                            </div>
                            <p>
                                <label for="description" class="checkbox">
                                    <input name="description" value="1" id="description" type="checkbox">
                                     Tìm trong mô tả sản phẩm 
                                </label>
                            </p>
                        </div>
                    </div>
                    <div class="buttons">
                        <div class="left">
                            <input value="Tìm" id="button-search" class="button btn btn-theme-default" type="button">
                        </div>
                    </div>
                    <h2>Các sản phẩm thỏa mãn tiêu chí tìm kiếm</h2>
                     <!--==========products filter=========-->
                        <div class="product-filter ">
                            <div class="inner clearfix">
                                <div class="display">
                                    <div class="btn-group group-switch">
                                        <button type="button" id="list-view" class="btn btn-switch list" data-toggle="tooltip" title="" data-original-title="Danh sách">
                                            <i class="fa fa-th-list"></i></button>
                                        <button type="button" id="grid-view" class="btn btn-switch grid active" data-toggle="tooltip" title="" data-original-title="Lưới">
                                            <i class="fa fa-th"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="filter-right">
                                    <div class="product-compare">
                                        <a href="http://foodstore.myzozo.net/index.php?route=product/compare" class="btn btn-theme-primary" id="compare-total">Thêm vào so sánh (0)</a>
                                    </div>
                                    <div class="sort">
                                        <span>Sắp xếp theo:</span>
                                        <select class="form-control" onchange="location = this.value;">
                                            <option value="http://foodstore.myzozo.net/search?sort=p.sort_order&amp;order=ASC&amp;search=combo" selected="selected">Mặc định</option>
                                            <option value="http://foodstore.myzozo.net/search?sort=pd.name&amp;order=ASC&amp;search=combo">Tên (A - Z)</option>
                                            <option value="http://foodstore.myzozo.net/search?sort=pd.name&amp;order=DESC&amp;search=combo">Tên (Z - A)</option>
                                            <option value="http://foodstore.myzozo.net/search?sort=p.price&amp;order=ASC&amp;search=combo">Giá (Thấp &gt; Cao)</option>
                                            <option value="http://foodstore.myzozo.net/search?sort=p.price&amp;order=DESC&amp;search=combo">Giá (Cao &gt; Thấp)</option>
                                            <option value="http://foodstore.myzozo.net/search?sort=rating&amp;order=DESC&amp;search=combo">Đánh giá (Cao nhất)</option>
                                            <option value="http://foodstore.myzozo.net/search?sort=rating&amp;order=ASC&amp;search=combo">Đánh giá (Thấp nhất)</option>
                                            <option value="http://foodstore.myzozo.net/search?sort=p.model&amp;order=ASC&amp;search=combo">Dòng sản phẩm (A - Z)</option>
                                            <option value="http://foodstore.myzozo.net/search?sort=p.model&amp;order=DESC&amp;search=combo">Dòng sản phẩm (Z - A)</option>
                                        </select>
                                    </div>

                                    <div class="limit">
                                        <span>Giới hạn:</span>
                                        <select class="form-control" onchange="location = this.value;">
                                            <option value="http://foodstore.myzozo.net/search?search=combo&amp;limit=15" selected="selected">15</option>
                                            <option value="http://foodstore.myzozo.net/search?search=combo&amp;limit=25">25</option>
                                            <option value="http://foodstore.myzozo.net/search?search=combo&amp;limit=50">50</option>
                                            <option value="http://foodstore.myzozo.net/search?search=combo&amp;limit=75">75</option>
                                            <option value="http://foodstore.myzozo.net/search?search=combo&amp;limit=100">100</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--==========products filter=========-->

                        <!--==========products list=========-->
                        <div id="products" class="product-grid">
                            <div class="products-block">
                                <div class="row product-items">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 product-cols">
                                <div class="product-block item-default" itemtype="http://schema.org/Product" itemscope="">

            <div class="image">
            <!-- text sale-->
            
            <a class="img" href="http://foodstore.myzozo.net/combo?search=combo">
                <img src="http://foodstore.myzozo.net/image/cache/catalog/san-pham/img-produce05-550x650.jpg" alt="Combo" class="img-responsive">
            </a>

            <!-- zoom image-->
                        <a href="http://foodstore.myzozo.net/image/catalog/san-pham/img-produce05.jpg" class="info-view product-zoom" title="Combo">
                <i class="fa fa-search-plus"></i>
            </a>

            <!-- view-->
            <a class="pav-colorbox cboxElement" href="http://foodstore.myzozo.net/combo?search=combo" title="Xem">
                <span>Xem</span>
            </a>

        </div>
    
    <div class="product-meta">
        <h3 class="name"><a href="http://foodstore.myzozo.net/combo?search=combo">Combo</a></h3>

                    <div class="description" itemprop="description">
                ...
            </div>
        
                    <div class="price" itemtype="http://schema.org/Offer" itemscope="" itemprop="offers">
                        <span class="special-price">100,000đ</span>
                        <meta content="100,000" itemprop="price">
                        <meta content="" itemprop="priceCurrency">
                    </div>
                    <div class="rating">
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                    </div>
                    <div class="cart">
                        <input value="Thêm vào giỏ" onclick="cart.addcart('55');" class="button" type="button">
                    </div>

                    <div class="wishlist">
                        <a onclick="wishlist.addwishlist('55');" data-toggle="tooltip" title="" class="fa fa-heart product-icon" data-original-title="Thêm vào yêu thích">
                            <span>Thêm vào yêu thích</span>
                        </a>
                    </div>

                    <div class="compare">
                        <a onclick="compare.addcompare('55');" data-toggle="tooltip" title="" class="fa fa-refresh product-icon" data-original-title="So sánh sản phẩm">
                            <span>So sánh sản phẩm</span>
                        </a>
                    </div>
                </div>
            </div>                                   
         </div>
    </div>
</div>
</div>
                        <div class="paginations row">
                            <div class="links"></div>
                            <div class="results">Hiển thị 1 đến 1 của 1 (1 trang)</div>
                        </div>
                        <!--==========products list=========-->   
   </div>
</section>