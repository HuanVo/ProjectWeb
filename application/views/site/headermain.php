<link rel="stylesheet" href="<?php echo public_url()?>/js/jquery/autocomplete/css/smoothness/jquery-ui-1.8.16.custom.css" type="text/css">
<script src="<?php echo public_url()?>/js/jquery/autocomplete/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>

<script type="text/javascript">
    $(function() {
        $( "#text-search" ).autocomplete({
            source: "<?php echo site_url('product/search/1'); ?>"
        });
    });
</script>


<div class="container">
                    <div class="row header-wrap">
                        <!--logo-->
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 inner">
                                                            <div id="logo-theme" class="logo-store">
                                    <a href="<?php echo base_url()?>" class="img-responsive" style="background-image: none;">
                                        <img src="<?php echo base_url('upload')?>/logo/logo.png" title="Foodstore" alt="Foodstore" />
                                        
                                    </a>
                                </div>
                       </div>
                        

                        <div class="header-right col-lg-8 col-md-8 col-sm-12 header-hidden inner">
                            <div class="row header-service">
                                <div class="col-sm-4 pull-right">
                                    <div id="cart" class="cart">
                                        <span class="fa fa-shopping-cart pull-left"></span>
                                        <div data-toggle="dropdown" data-loading-text="Đang tải" class="heading dropdown-toggle">
                                            <div class="cart-inner media-body">
                                                <h4>Giỏ hàng</h4>
                                                <a><span id="cart-total">0 sản phẩm - 0đ</span></a>
                                            </div>
                                        </div>

                                        <ul class="dropdown-menu" style="width: 400px;left: initial;right: -30px;margin-top:45px;">
                                            <!--<ul class="dropdown-menu">-->
                                                        <li>
                                                    <p class="text-center">Giỏ hàng của bạn trống!</p>
                                                </li>
                                            </ul>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
