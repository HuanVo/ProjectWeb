<aside id="sidebar-left" class="col-sm-3">
        <div id="column-left" class="hidden-xs sidebar">
                                <div class="box category">
        <div class="box-heading"><span>Danh mục</span></div>

        <div class="box-content">
            <ul class="box-category list">
                 <?php  foreach ($catalog_list as $row): ?>
                                    <li class="">
                                                    <a href="<?php echo base_url('san-pham/danh-muc/'.seoname($row->name).'/'.$row->id_catalog); ?>" class=""><?php echo'<b>'. $row->name.'</b>'; ?></a>
                                    </li>
                                   
                 <?php endforeach; ?>
            </ul>
        </div>
    </div>
                            
    <div class="box carousel slide pavtestimonial hidden-sm hidden-xs nopadding">
        <div class="box-content">
            <ul class="media-list">
                                    <li class="media">
                                                                        <a class="pull-left" href="#">
                            
                                                            <img src="http://foodstore.myzozo.net/image/cache/catalog/banner/icon-menu-50x60.png" alt="THỰC ĐƠN HÔM NAY" style="width: 50px; height: 60px">
                            
                                                    </a>
                    
                        <div class="media-body">
                                                            <div class="testimonial">
                                    <h4 class="media-heading">THỰC ĐƠN HÔM NAY</h4>
                                    <p>Hãy đến và thưởng thức các món ăn hôm nay của chúng tôi.</p>
                                </div>
                                                    </div>
                    </li>
                                    <li class="media">
                                                                        <a class="pull-left" href="#">
                            
                                                            <img src="http://foodstore.myzozo.net/image/cache/catalog/banner/icon-wines-50x60.png" alt="ĐỒ UỐNG" style="width: 50px; height: 60px">
                            
                                                    </a>
                    
                        <div class="media-body">
                                                            <div class="testimonial">
                                    <h4 class="media-heading">ĐỒ UỐNG</h4>
                                    <p>Mang đến những loại thức uống từ thiên nhiên.</p>
                                </div>
                                                    </div>
                    </li>
                                    <li class="media">
                                                                        <a class="pull-left" href="#">
                            
                                                            <img src="http://foodstore.myzozo.net/image/cache/catalog/banner/icon-team-50x60.png" alt="NGÀY CỦA GIA ĐÌNH" style="width: 50px; height: 60px">
                            
                                                    </a>
                    
                        <div class="media-body">
                                                            <div class="testimonial">
                                    <h4 class="media-heading">NGÀY CỦA GIA ĐÌNH</h4>
                                    <p>Đã bao lâu bạn chưa ăn tối với gia đình, hãy cùng gia đình bạn đến với chúng tôi.</p>
                                </div>
                                                    </div>
                    </li>
                                    <li class="media">
                                                                        <a class="pull-left" href="#">
                            
                                                            <img src="http://foodstore.myzozo.net/image/cache/catalog/banner/icon-find-50x60.png" alt="CHÚNG TÔI Ở ĐÂU?" style="width: 50px; height: 60px">
                            
                                                    </a>
                    
                        <div class="media-body">
                                                            <div class="testimonial">
                                    <h4 class="media-heading">CHÚNG TÔI Ở ĐÂU?</h4>
                                    <p>25 Ngô Quyền, Phường 6, Quận 10</p>
                                </div>
                                                    </div>
                    </li>
                            </ul>
        </div>
    </div>
                            <div class="box filter">
    <div class="box-heading">
        <span>Lọc</span>
        <em class="line"></em>
    </div>
    <div class="box-content">
        <ul class="box-filter clearfix">
                            <li>
                    <span id="filter-group3">Giá Bán</span>
                    <ul class="clearfix">
                                                    <div id="filter-group3">
                                                                    <li>
                                        <input name="filter[]" value="14" id="filter14" type="checkbox">
                                        <label for="filter14">&gt;100.000đ</label>
                                    </li>
                                                            </div>
                                                    <div id="filter-group3">
                                                                    <li>
                                        <input name="filter[]" value="12" id="filter12" type="checkbox">
                                        <label for="filter12">0 - 50.000đ </label>
                                    </li>
                                                            </div>
                                                    <div id="filter-group3">
                                                                    <li>
                                        <input name="filter[]" value="13" id="filter13" type="checkbox">
                                        <label for="filter13">50.000đ - 100.000đ</label>
                                    </li>
                                                            </div>
                                            </ul>
                </li>
                            <li>
                    <span id="filter-group4">Màu Sắc</span>
                    <ul class="clearfix">
                                                    <div id="filter-group4">
                                                                    <li>
                                        <input name="filter[]" value="17" id="filter17" type="checkbox">
                                        <label for="filter17">Vàng</label>
                                    </li>
                                                            </div>
                                                    <div id="filter-group4">
                                                                    <li>
                                        <input name="filter[]" value="15" id="filter15" type="checkbox">
                                        <label for="filter15">Xanh </label>
                                    </li>
                                                            </div>
                                                    <div id="filter-group4">
                                                                    <li>
                                        <input name="filter[]" value="16" id="filter16" type="checkbox">
                                        <label for="filter16">Đỏ</label>
                                    </li>
                                                            </div>
                                            </ul>
                </li>
                    </ul>
        <a id="button-filter" class="button btn btn-theme-default">Lọc Tìm kiếm</a>
    </div>
</div>

<script type="text/javascript">&lt;!--
    $('#button-filter').on('click', function () {
        filter = [];

        $('input[name^=\'filter\']:checked').each(function (element) {
            filter.push(this.value);
        });

        location = 'http://foodstore.myzozo.net/mon-chinh&amp;filter=' + filter.join(',');
    });
    //--&gt;</script>
                    </div>
    </aside>