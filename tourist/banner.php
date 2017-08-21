<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
              <!-- //banner effect// -->
    <script src="js/jssor.slider-23.1.1.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {
            var jssor_1_SlideshowTransitions = [
              {$Duration:1200,$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1349);
                    // refSize = 1349;
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            // $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*responsive code end*/
        };
    </script>

     <!-- /////////////////////////////banner////////////////////////////////// -->
            <div id="jssor_1" style="position:absolute;margin-top:0px;left:0px;width:1100px;height:300px;overflow:hidden;visibility:hidden;">    
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1100px;height:300px;overflow:hidden;">
            <?php 
            if($city == 'Đà Nẵng') { ?>
            <div>
                <img data-u="image" src="image/danang.jpg" />
            </div>
            <div>
                <img data-u="image" src="image/danang1.jpg" />
            </div>
            <div>
                <img data-u="image" src="image/danang2.jpg" />
            </div>
            <?php }
            if($city == 'Quảng Nam') { ?>
            <div>
            <img data-u="image" src="image/qn-banner.jpg" />
            </div>
            <div>
            <img data-u="image" src="image/quangnam1.jpg" />
            </div>
            <div>
            <img data-u="image" src="image/quangnam2.jpg" />
            </div>
            <?php }
            if($city == 'Huế'){ ?>
            <div>
                <img data-u="image" src="image/hue.jpg" />
            </div>
            <div>
                <img data-u="image" src="image/hue1.jpg" />
            </div>
            <div>
                <img data-u="image" src="image/hue2.jpg" />
            </div>
            <?php }
            if($city == 'Hà Nội') { ?>
            <div>
                <img data-u="image" src="image/hanoi.jpg" />
            </div>
            <div>
                <img data-u="image" src="image/hanoi1.jpg" />
            </div>
            <div>
                <img data-u="image" src="image/hanoi2.jpg" />
            </div>
            <?php }
            if($city == 'Hồ Chí Minh') { ?>
            <div>
                <img data-u="image" src="image/hcm-banner.jpg" />
            </div>
            <div>
                <img data-u="image" src="image/hochiminh1.jpg" />
            </div>
            <div>
                <img data-u="image" src="image/hochiminh2.jpg" />
            </div>
            <?php } ?>

        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>

        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora12l" style="top:0px;left:0px;width:30px;height:46px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora12r" style="top:0px;right:0px;width:30px;height:46px;" data-autocenter="2"></span>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
    <!-- //////////////////////////////////////////////////////////////////////////// -->