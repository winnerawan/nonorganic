<section id="slider"><!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    {{--<ol class="carousel-indicators">--}}
                        {{--<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>--}}
                        {{--<li data-target="#slider-carousel" data-slide-to="1"></li>--}}
                        {{--<li data-target="#slider-carousel" data-slide-to="2"></li>--}}
                    {{--</ol>--}}

                    <div class="carousel-inner">
                        {{--loop here--}}
                        <div class="item active">
                            <div class="col-sm-6">
                                <h1><span>Nonorganic</span>Shop</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                
                            </div>
                            <div class="col-sm-6">
                                <img src="{{ asset("images/sliders/baru.jpg") }}" class="baru img-responsive" alt="" />
								<h4><img src="images/home/LogoMaker01.jpg" width="700" height="322"></h4>
                                <img src="{{ asset("images/sliders/baru1.png") }}"  class="baru1" alt="" />
								<h4><img src="images/home/LogoMaker01.jpg" width="700" height="322"></h4>
                            </div>
                        </div>
                    </div>

                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section><!--/slider-->
