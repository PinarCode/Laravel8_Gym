<section id="mainslider_1" class="slider_wrap slider_fullwide slider_engine_revo slider_alias_homepage_slider_gym1 mainslider_1">
    <div id="rev_slider_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container">

        <div id="rev_slider_1" class="rev_slider fullwidthabanner">
            <ul>
                @foreach($slider as $rs)
                <li data-transition="slideup,slidedown,slideright,slideleft,fade,fadefromright,fadefromleft,fadefromtop,fadefrombottom" data-slotamount="7"  data-randomtransition="on" data-masterspeed="300"  data-saveperformance="off" >
                    <img src="{{Storage::url($rs->image)}}" alt="main-slider-1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                    <div class="tp-caption lfl"
                         data-x="-100"
                         data-y="-180"
                         data-speed="900"
                         data-start="0"
                         data-easing="Power3.easeInOut"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300"
                    >
                        <img src="{{ asset('assets') }}/images/main-slider-el-1.png" alt="">
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption lfr"
                         data-x="870"
                         data-y="-450"
                         data-speed="900"
                         data-start="500"
                         data-easing="Power3.easeInOut"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300"
                    >
                        <img src="{{ asset('assets') }}/images/main-slider-el-2.png" alt="">
                    </div>
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption -main-title tp-fade tp-resizeme"
                         data-x="340"
                         data-y="280"
                         data-speed="600"
                         data-start="500"
                         data-easing="Power3.easeInOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300"
                    >
                        IT'S YOUR
                    </div>
                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption -main-title-sub tp-fade tp-resizeme"
                         data-x="340"
                         data-y="370"
                         data-speed="600"
                         data-start="1000"
                         data-easing="Power3.easeInOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300"
                    >
                        OWN WAY!
                    </div>
                    <!-- LAYER NR. 5 -->
                    <div class="tp-caption -main-text tp-fade tp-resizeme"
                         data-x="340"
                         data-y="500"
                         data-speed="600"
                         data-start="1500"
                         data-easing="Power3.easeInOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300"
                    >
                        {{$rs->title}}
                    </div>
                    <!-- LAYER NR. 7 -->
                    <div class="tp-caption -main-text tp-fade tp-resizeme"
                         data-x="340"
                         data-y="580"
                         data-speed="600"
                         data-start="1700"
                         data-easing="Power3.easeInOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300"
                    >
                        {{$rs->price}}t
                    </div>
                    <!-- LAYER NR. 8 -->
                    <div class="tp-caption black tp-fade tp-resizeme"
                         data-x="340"
                         data-y="650"
                         data-speed="600"
                         data-start="2000"
                         data-easing="Power3.easeInOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300"
                    >
                        <a href='{{route('course',['id'=>$rs->id])}}' class='tp-button lightgrey small'>GET STARTED</a>
                    </div>
                    <!-- LAYER NR. 9 -->
                    <div class="tp-caption tp-fade"
                         data-x="center" data-hoffset="10"
                         data-y="center" data-voffset="365"
                         data-speed="300"
                         data-start="2000"
                         data-easing="Power3.easeInOut"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300"
                    >
                        <div class="tp-layer-inner-rotation1 rs-pulse"  data-easing="Power3.easeInOut" data-speed="2" data-zoomstart="0.8" data-zoomend="0.9">
                            <img src="{{ asset('assets') }}/images/main-slider-el-3.png" alt="">
                        </div>
                    </div>
                    <!-- LAYER NR. 10 -->
                    <div class="tp-caption tp-fade tp-scrollbelowslider"
                         data-x="center" data-hoffset="10"
                         data-y="center" data-voffset="360"
                         data-speed="300"
                         data-start="2300"
                         data-easing="Power3.easeInOut"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300"
                         data-scrolloffset="1"
                    >
                        <div class="tp-layer-inner-rotation1 rs-pulse"  data-easing="Power3.easeInOut" data-speed="2" data-zoomstart="1" data-zoomend="1.2">
                            <a href="#">
                                <img src="{{ asset('assets') }}/images/main-slider-el-4.png" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- LAYER NR. 11 -->
                    <div class="tp-caption tp-fade"
                         data-x="1010"
                         data-y="bottom" data-voffset="-170"
                         data-speed="300"
                         data-start="2600"
                         data-easing="Power3.easeInOut"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300"
                    >
                        <img src="{{ asset('assets') }}/images/main-slider-el-5.png" alt="">
                    </div>
                    <!-- LAYER NR. 12 -->
                    <div class="tp-caption -main-text-sub tp-fade tp-resizeme"
                         data-x="1060"
                         data-y="725"
                         data-speed="300"
                         data-start="2800"
                         data-easing="Power3.easeInOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300"
                    >
                        JOIN TODAY!
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
