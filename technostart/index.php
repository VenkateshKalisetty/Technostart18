<?php
	include "header.php";
    include 'dbconfig.php';
    $notice = mysqli_query($con,"SELECT * FROM notifications ORDER BY sno DESC LIMIT 5");
    if(isset($_SESSION['visitors'])){
    }else{
        $_SESSION['visitors'] = 0;
        $todayVisitors = mysqli_fetch_array(mysqli_query($con,"SELECT SUM(count) FROM visitors"));
        $visits = $todayVisitors[0] + 1;
        mysqli_query($con,"UPDATE visitors set count='$visits'");
    }
    $sql1 = mysqli_query($con,"SELECT count(*) FROM eventdetails");
    $teamCount = mysqli_fetch_array($sql1);
?>

    <div id="home-main-slider" class="vc_row wpb_row vc_row-fluid main-banner">
        <div class="wpb_column col-md-12">
            <div class="wpb_revslider_element wpb_content_element">
                <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                    <!-- START REVOLUTION SLIDER 5.1.5 fullwidth mode -->
                    <div id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.1.5">
                        <ul>
                            <!-- SLIDE  -->
                            <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="assets/images/banner-bg-2-100x50.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="assets/images/banner-bg-2.jpg" alt="" width="2500" height="1667" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->
                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption   tp-resizeme" id="slide-1-layer-1" data-x="442" data-y="152" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: rgba(255, 255, 255, 1.00);">
                                    <div class="text-center">
                                        <div class="date">Feburary 24, 2018 onwards</div>
                                    </div>
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption   tp-resizeme" id="slide-1-layer-2" data-x="330" data-y="253" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: rgba(255, 255, 255, 1.00);">
                                    <div>
                                        <h1>TECHNOSTART 2k18&nbsp;<small style="text-transform:none;color:#fff;font-weight:bold;">v5.0</small></h1>
                                    </div>
                                </div>
                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption   tp-resizeme" id="slide-1-layer-4" data-x="460" data-y="414" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: rgba(255, 255, 255, 1.00);">
                                    <ul class="banner-buttons">
                                        <li class="scrollToLink"><a href="#" data-toggle="modal" data-target="#payMembers" class="colored hvr-bounce-to-right">Hey! Register Now Quick</a></li>
                                    </ul>
                                </div>

                                <!-- LAYER NR. 4 -->
                                <div class="tp-caption   tp-resizeme" id="slide-1-layer-6" data-x="310" data-y="328" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 8; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: rgba(255, 255, 255, 1.00);">
                                    <div>
                                        <p>Technostart v5.0 is a forte to change your million dollar dream into reality with <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the motive of encouraging the innovative Technocrat's of CSE.</p>
                                    </div>
                                </div>
                            </li>
                            <!-- SLIDE  -->
                            <li data-index="rs-2" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="assets/images/subscribe-section-bg-2-100x50.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="assets/images/subscribe-section-bg-2.jpg" alt="" width="1920" height="1200" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption   tp-resizeme" id="slide-2-layer-1" data-x="307" data-y="183" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: rgba(255, 255, 255, 1.00);">
                                    <div class="text-center">
                                        <h1>DONT MISS THE EVENTS</h1>
                                    </div>
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption   tp-resizeme" id="slide-2-layer-2" data-x="310" data-y="276" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: rgba(255, 255, 255, 1.00);">
                                    <div>
                                        <p>Are you curious to compile your concepts?? Wana execute yourself as expert <br>if(1) then come &amp;&amp; compete in Technostart v5.0 30+ events are waiting for you!!!<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hurry up!!!! All the Best...!!!</p>
                                    </div>
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption   tp-resizeme" id="slide-2-layer-3" data-x="470" data-y="389" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: rgba(255, 255, 255, 1.00);">
                                    <ul class="banner-buttons">
                                        <li class="scrollToLink"><a href="events.php" class="colored hvr-bounce-to-right">Do you wana see??</a></li>
                                    </ul>
                                </div>
                            </li>
                            <!-- SLIDE  -->
                            <li data-index="rs-3" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="#" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="assets/images/register-bg-2.jpg" alt="" width="1598" height="1005" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption tp-resizeme" id="slide-3-layer-1" data-x="515" data-y="196" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: rgba(255, 255, 255, 1.00);">
                                    <div class="text-center">
                                        <div class="date">Department of</div>
                                    </div>
                                </div>

                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption tp-resizeme" id="slide-3-layer-2" data-x="120" data-y="263" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: rgba(255, 255, 255, 1.00);">
                                    <div>
                                        <h1>Computer Science and Engineering</h1>
                                    </div>
                                </div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption   tp-resizeme" id="slide-3-layer-3" data-x="190" data-y="374" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: rgba(255, 255, 255, 1.00);">
                                    <div>
                                        <h2><b>Rajiv Gandhi University of Knowledge Technologies - Nuzvid</b></h2>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                    </div>
                    <script>
                        var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
                        var htmlDivCss = "";
                        if (htmlDiv) {
                            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                        } else {
                            var htmlDiv = document.createElement("div");
                            htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
                            document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
                        }

                    </script>
                    <script type="text/javascript">
                        /******************************************                                                                  				-	PREPARE PLACEHOLDER FOR SLIDER	-
                        ******************************************/
                        var setREVStartSize = function() {
                            try {
                                var e = new Object,
                                    i = jQuery(window).width(),
                                    t = 9999,
                                    r = 0,
                                    n = 0,
                                    l = 0,
                                    f = 0,
                                    s = 0,
                                    h = 0;
                                e.c = jQuery('#rev_slider_1_1');
                                e.gridwidth = [1240];
                                e.gridheight = [820];

                                e.sliderLayout = "fullwidth";
                                if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function(e, f) {
                                        f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                                    }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                                    var u = (e.c.width(), jQuery(window).height());
                                    if (void 0 != e.fullScreenOffsetContainer) {
                                        var c = e.fullScreenOffsetContainer.split(",");
                                        if (c) jQuery.each(c, function(e, i) {
                                            u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                                        }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                                    }
                                    f = u
                                } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                                e.c.closest(".rev_slider_wrapper").css({
                                    height: f
                                })

                            } catch (d) {
                                console.log("Failure at Presize of Slider:" + d)
                            }
                        };


                        setREVStartSize();

                        function revslider_showDoubleJqueryError(sliderID) {
                            var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
                            errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
                            errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
                            errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
                            errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
                            jQuery(sliderID).show().html(errorMessage);
                        }
                        var tpj = jQuery;

                        var revapi1;
                        tpj(document).ready(function() {
                            if (tpj("#rev_slider_1_1").revolution == undefined) {
                                revslider_showDoubleJqueryError("#rev_slider_1_1");
                            } else {
                                revapi1 = tpj("#rev_slider_1_1").show().revolution({
                                    sliderType: "standard",
                                    jsFileLocation: "#",
                                    sliderLayout: "fullwidth",
                                    dottedOverlay: "none",
                                    delay: 9000,
                                    navigation: {
                                        keyboardNavigation: "off",
                                        keyboard_direction: "horizontal",
                                        mouseScrollNavigation: "off",
                                        onHoverStop: "off",
                                        arrows: {
                                            style: "hermes",
                                            enable: true,
                                            hide_onmobile: false,
                                            hide_onleave: false,
                                            tmp: '<div class="tp-arr-allwrapper">	<div class="tp-arr-imgholder"></div>	<div class="tp-arr-titleholder">{{title}}</div>	</div>',
                                            left: {
                                                h_align: "left",
                                                v_align: "center",
                                                h_offset: 20,
                                                v_offset: 0
                                            },
                                            right: {
                                                h_align: "right",
                                                v_align: "center",
                                                h_offset: 20,
                                                v_offset: 0
                                            }
                                        }
                                    },
                                    visibilityLevels: [1240, 1024, 778, 480],
                                    gridwidth: 1240,
                                    gridheight: 820,
                                    lazyType: "none",
                                    shadow: 0,
                                    spinner: "spinner0",
                                    stopLoop: "off",
                                    stopAfterLoops: -1,
                                    stopAtSlide: -1,
                                    shuffle: "off",
                                    autoHeight: "off",
                                    disableProgressBar: "on",
                                    hideThumbsOnMobile: "off",
                                    hideSliderAtLimit: 0,
                                    hideCaptionAtLimit: 0,
                                    hideAllCaptionAtLilmit: 0,
                                    debugMode: false,
                                    fallbacks: {
                                        simplifyAll: "off",
                                        nextSlideOnWindowFocus: "off",
                                        disableFocusListener: false,
                                    }
                                });
                            }
                        }); /*ready*/

                    </script>

                </div>
                <!-- END REVOLUTION SLIDER -->
            </div>
        </div>
    </div>
    <div class="vc_row wpb_row vc_row-fluid">
        <div class="wpb_column col-md-12">

            <!-- #information-bar -->
            <section id="information-bar">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                            <ul>
                                <li><span class="img-holder"><img src="assets/images/1-5.png" alt="Image"></span></li>
                                <li><span><b>Dept.CSE</b> A3 Block, 1st floor</span></li>
                            </ul>
                        </div>


                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                            <ul>
                                <li><span class="img-holder"><img src="assets/images/2-5.png" alt="Image"></span></li>
                                <li><span><b>Organized By</b> Batch 2012</span></li>
                            </ul>
                        </div>


                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                            <ul>
                                <li><span class="img-holder"><img src="assets/images/2-5.png" alt="Image"></span></li>
                                <li><span><b>15+ Speakers</b> In Techtalks</span></li>
                            </ul>
                        </div>


                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                            <ul>
                                <li><span class="img-holder"><img src="assets/images/calendar.png" alt="Image"></span></li>
                                <li><span><b>30+ Events</b> In Technostart v5.0</span></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="vc_row wpb_row vc_row-fluid">
        <div class="wpb_column col-md-12">
            <!-- #upcoming-event -->
            <section id="upcoming-event">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-7 col-sm-7">
                            <div class="section-title">
                                <h1>Upcoming Events</h1>
                                <p>Are you curious to compile your concepts?? Wana execute yourself as expert....if(1) then come &amp;&amp; compete in Technostart v5.0 30+ events are waiting for you!!! Hurry up!!!! All the Best...!!!</p>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5">
                            <a href="events.php"><button type="button" class="btn btn-info btn-lg pull-right" >ALL EVENTS</button></a>
                            <!--form action="#" method="get" class="pull-right">
                                <input type="text" name="s" value="" placeholder="Search Event"> <button type="submit"><i class="fa fa-search"></i></button>
                            </form-->
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tab-content-wrap row">

                                <div class="col-lg-3 col-md-4 col-sm-6 mix feb-24  hvr-float-shadow wow fadeIn">
                                    <div class="img-holder"><img width="272" height="170" src="assets/images/thumbnails/iconofcse_tn.jpg" class="img-responsive wp-post-image" alt="1" /></div>
                                    <div class="content-wrap">
                                        <img src="assets/images/overlay-bg.png" alt="" class="author-img">
                                        <div class="meta">
                                            <ul>
                                                <li><span><i class="fa fa-clock-o"></i>Feb 23, 2018</span></li>
                                                <li><span><i class="fa fa-map-marker"></i>Dept.CSE</span></li>
                                            </ul>
                                        </div>
                                        <h3>Icon of CSE</h3>
                                        <p>Confidence doesn’t come when you have all the answers [&#8230;]</p>
                                        <a class="read-more" href="iconofcse.php">read more<i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6 mix feb-26  hvr-float-shadow wow fadeIn">
                                    <div class="img-holder"><img width="272" height="170" src="assets/images/thumbnails/topcoder_tn.jpg" class="img-responsive wp-post-image" alt="2" /></div>
                                    <div class="content-wrap">
                                        <img src="assets/images/overlay-bg.png" alt="" class="author-img">
                                        <div class="meta">
                                            <ul>
                                                <li><span><i class="fa fa-clock-o"></i>Feb 26, 2018</span></li>
                                                <li><span><i class="fa fa-map-marker"></i>Dept.CSE</span></li>
                                            </ul>
                                        </div>
                                        <h3>Top Coder</h3>
                                        <p>Hello Coders!! Here comes the time to feel the excitement. [&#8230;]</p>
                                        <a class="read-more" href="topcoder.php">read more<i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6 mix feb-23  hvr-float-shadow wow fadeIn">
                                    <div class="img-holder"><img width="272" height="170" src="assets/images/thumbnails/developersdate_tn.jpg" class="img-responsive wp-post-image" alt="1" /></div>
                                    <div class="content-wrap">
                                        <img src="assets/images/overlay-bg.png" alt="" class="author-img">
                                        <div class="meta">
                                            <ul>
                                                <li><span><i class="fa fa-clock-o"></i>Feb 23, 2018</span></li>
                                                <li><span><i class="fa fa-map-marker"></i>Dept.CSE</span></li>
                                            </ul>
                                        </div>
                                        <h3>Developers Date</h3>
                                        <p>Every Problem is divided into two modules and [&#8230;]</p>
                                        <a class="read-more" href="developersdate.php">read more<i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                                
                                <div class="col-lg-3 col-md-4 col-sm-6 mix feb-27  hvr-float-shadow wow fadeIn">
                                    <div class="img-holder"><img width="272" height="170" src="assets/images/thumbnails/blindcoding_tn.jpg" class="img-responsive wp-post-image" alt="1" /></div>
                                    <div class="content-wrap">
                                        <img src="assets/images/overlay-bg.png" alt="" class="author-img">
                                        <div class="meta">
                                            <ul>
                                                <li><span><i class="fa fa-clock-o"></i>Soon..</span></li>
                                                <li><span><i class="fa fa-map-marker"></i>Dept.CSE</span></li>
                                            </ul>
                                        </div>
                                        <h3>Blind Coding</h3>
                                        <p>Blind coding is an individual event.The GCC [&#8230;]</p>
                                        <a class="read-more" href="blindcoding.php">read more<i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6 mix may-28  hvr-float-shadow wow fadeIn">
                                    <div class="img-holder"><img width="272" height="170" src="assets/images/thumbnails/counterstrike_tn.jpg" class="img-responsive wp-post-image" alt="1" /></div>
                                    <div class="content-wrap">
                                        <img src="assets/images/overlay-bg.png" alt="" class="author-img">
                                        <div class="meta">
                                            <ul>
                                                <li><span><i class="fa fa-clock-o"></i>Soon...</span></li>
                                                <li><span><i class="fa fa-map-marker"></i>Dept.CSE</span></li>
                                            </ul>
                                        </div>
                                        <h3>Counter Strike</h3>
                                        <p>Counter-Strike is a first-person shooter game in [&#8230;]</p>
                                        <a class="read-more" href="counterstrike.php">read more<i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6 mix may-28  hvr-float-shadow wow fadeIn">
                                    <div class="img-holder"><img width="272" height="170" src="assets/images/thumbnails/motogp_tn.jpg" class="img-responsive wp-post-image" alt="1" /></div>
                                    <div class="content-wrap">
                                        <img src="assets/images/overlay-bg.png" alt="" class="author-img">
                                        <div class="meta">
                                            <ul>
                                                <li><span><i class="fa fa-clock-o"></i>Soon..,</span></li>
                                                <li><span><i class="fa fa-map-marker"></i>Dept.CSE</span></li>
                                            </ul>
                                        </div>
                                        <h3>MotoGP</h3>
                                        <p>Moto GP, like other Racing games, is essentially a driving [&#8230;]</p>
                                        <a class="read-more" href="motogp.php">read more<i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6 mix feb-25  hvr-float-shadow wow fadeIn">
                                    <div class="img-holder"><img width="272" height="170" src="assets/images/thumbnails/algo_tn.jpg" class="img-responsive wp-post-image" alt="1" /></div>
                                    <div class="content-wrap">
                                        <img src="assets/images/overlay-bg.png" alt="" class="author-img">
                                        <div class="meta">
                                            <ul>
                                                <li><span><i class="fa fa-clock-o"></i>Soon..</span></li>
                                                <li><span><i class="fa fa-map-marker"></i>Dept.CSE</span></li>
                                            </ul>
                                        </div>
                                        <h3>Algo Logics</h3>
                                        <p>Algorithm is the perfect event for those who like [&#8230;]</p>
                                        <a class="read-more" href="algologics.php">read more<i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6 mix may-28  hvr-float-shadow wow fadeIn">
                                    <div class="img-holder"><img width="272" height="170" src="assets/images/thumbnails/techquiz_tn.jpg" class="img-responsive wp-post-image" alt="1" /></div>
                                    <div class="content-wrap">
                                        <img src="assets/images/overlay-bg.png" alt="" class="author-img">
                                        <div class="meta">
                                            <ul>
                                                <li><span><i class="fa fa-clock-o"></i>Soon..,</span></li>
                                                <li><span><i class="fa fa-map-marker"></i>Dept.CSE</span></li>
                                            </ul>
                                        </div>
                                        <h3>Technical Quiz</h3>
                                        <p>Technical Quiz is for test your knowledge on Core Computer [&#8230;]</p>
                                        <a class="read-more" href="techquiz.php">read more<i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="vc_row wpb_row vc_row-fluid">
        <div class="wpb_column col-md-12">
            <!-- #number-facts -->
            <section id="number-facts" class="gradient-overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title text-center">
                                <h1>Number’s Fact</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row counter-row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 left">
                            <!-- .single-counter -->
                            <div class="single-counter text-center ">
                                <img src="assets/images/01/icon-1-1-2.png" alt="Icon"> <br>
                                <b class="timer">50</b><b>+</b> <br>
                                <span>Organizers</span>
                            </div>
                            <!-- /.single-counter -->
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 left">
                            <!-- .single-counter -->
                            <div class="single-counter text-center ">
                                <img src="assets/images/01/icon-2-1-2.png" alt="Icon"> <br>
                                <b class="timer">30</b><b>+</b> <br>
                                <span>Event Organized</span>
                            </div>
                            <!-- /.single-counter -->
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 left">
                            <!-- .single-counter -->
                            <div class="single-counter text-center ">
                                <img src="assets/images/01/icon-3-3.png" alt="Icon"> <br>
                                <b class="timer"><?php echo $teamCount[0]; ?></b><br>
                                <span>Registered Teams</span>
                            </div>
                            <!-- /.single-counter -->
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 left">
                            <!-- .single-counter -->
                            <div class="single-counter text-center ">
                                <img src="assets/images/01/icon-4-3.png" alt="Icon"> <br>
                                <b class="timer">15</b><b>+</b> <br>
                                <span>Live Talks</span>
                            </div>
                            <!-- /.single-counter -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- /#number-facts -->
        </div>
    </div>

    <div class="vc_row wpb_row vc_row-fluid">
        <div class="wpb_column col-md-12">
            <div class="clourize">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title text-center">
                                <h1>LATEST NEWS</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="blog" class="vc_row wpb_row vc_row-fluid latest_blog">
        <div class="container">
            <div class="wpb_column col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Notice Title</th>
                                <th>Date / Time</th>
                                <th>About</th>
                                <th>Views</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                        $i=0;
                                            while($row=mysqli_fetch_assoc($notice)){
                                                echo '<tr>
                                                            <td>'.++$i.'</td>
                                                            <td><a data-toggle="modal" data-target="#noticeModal" style="cursor:pointer;"><span onclick="notice('.$row['sno'].')">'.$row['title'].'</span></td>
                                                            <td>'.$row['date'].'</td>
                                                            <td>'.$row['about'].'</td>
                                                            <td>'.$row['views'].'</td>
                                                      </tr>';
                                            }
                                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="vc_row wpb_row vc_row-fluid">
        <div class="wpb_column col-md-12">
            <section id="testimonials" class="gradient-overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title text-center">
                                <h1>Testimonials by Faculty / Students</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="testimonial custom-pager text-center">
                                <ul>
                                    <li class="prev"><img src="assets/images/testimonials/arrow-left.png" alt=""></li>
                                    <li class="next"><img src="assets/images/testimonials/arrow-right.png" alt=""></li>
                                    <li class="active" data-slide-index="0"><span><img width="90" height="90" src="assets/images/uppendra.jpg" class="img-responsive wp-post-image" alt="1"  sizes="(max-width: 90px) 100vw, 90px" /></span></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <ul class="testimonial-slide">
                                <li class="slide">
                                    <h3>R.Upendra</h3>
                                    <span>HOD, Dept of CSE</span>
                                    <p>It brings me to the great pleasure that the students of E4 cse took initiation in bringing out the best 
                                    to their juniors with a Techno Cultural fest. <br>It's been a legacy that students of passing out batches are 
                                    following every year to help their juniors excel in every technical and non-technial streams.<br>My hearty wishes to them.I request every one from CSE department to actively participate in Technostart and make it a grand succes.</p>
                                </li>
                                <!--li class="slide">
                                    <h3>Masum Rana</h3>
                                    <span>Designer, EventTime CO.</span>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been <br> the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of <br> type and scrambled it to make a type specimen book</p>
                                </li>
                                <li class="slide">
                                    <h3>Masum Rana</h3>
                                    <span>Designer, EventTime CO.</span>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been <br> the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of <br> type and scrambled it to make a type specimen book</p>
                                </li>
                                <li class="slide">
                                    <h3>Masum Rana</h3>
                                    <span>Designer, EventTime CO.</span>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been <br> the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of <br> type and scrambled it to make a type specimen book</p>
                                </li-->
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
<!--latest News-->
    <div id="noticeModal" class="modal fade" role="dialog" data-backdrop="false" style="top:15%;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" id="title"></h4>
                </div>
                <div class="modal-body">
                    <p id="description"></p>
                </div>
                <div class="modal-footer">
                     <div style="position: absolute;" id="attachment"></div>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<!-- //Notice modal-->
    <div id="payMembers" class="modal fade" role="dialog" data-backdrop="false" style="top:15%;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Wana pay amount to register events???</h4>
                </div>
                <div class="modal-body">
                    <p>Contact below persons to pay amount : </p>
                    <p><b>Girls : </b><br>1. S.Lakshmi Sirisha - N120299 - 8187062785<br>2. S.Mallika - N120261 - 9505027721<br>3. N.Lakshmi Durga - N120832 - 7981837781</p>
                    <p><b>Boys : </b><br>1. A.Siva Prasad - N120507 - 9703747165<br>2. T.Venkatesh - N120425 - 9985233515</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        function notice(id){
            $.ajax({
                url:"pages/register.php",
                method:"post",
                data:{"noticeid":id},
                dataType:"json",
                success:function(data){
                    $("#title").html(data[0]['title']);
                    $("#description").html(data[0]['description']);
                    if((data[0]['attachment']).length>0){
                        document.getElementById('attachment').innerHTML="<b>Attachment:<b> &nbsp;<span style='color:#2c3e50;' class='label label-danger'><i class='fa fa-download'></i>&nbsp;&nbsp;&nbsp;<a style='text-decoration:none;color:white' href='techadmin/uploads/"+data[0]['attachment']+"' target='_blank' download>" +data[0]['attachment']+ "</a>";
                    }else{
                        $("#attachment").html("");
                    }
                }
            });
        }
    </script>
    <?php
	include "footer.php";
?>
