@extends('layout.layout')

@section('style')
<link rel="stylesheet" href="{{ asset('plugins/rs-plugin/css/settings.css') }}">
@endsection

@section('header-content')
<div class="mfn-main-slider" id="mfn-rev-slider">
    <div id="rev_slider_2_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-source="gallery" style="background:#292220;padding:0px;">
        <div id="rev_slider_2_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.3.1">
            <ul>
                <li data-index="rs-2" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="1050" data-thumb="images/home_garden2_slider_slide1-100x50.jpg" data-delay="6000" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <img src="{{ asset('content/garden2/images/home_garden2_slider_slide1.jpg') }}" title="Home" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="4" class="rev-slidebg" data-no-retina>
                    <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-2-layer-1" data-x="150" data-y="bottom" data-voffset="" data-width="['540']" data-height="['230']" data-type="shape" data-basealign="slide" data-responsive_offset="on" data-frames='[{"delay":480,"speed":2000,"sfxcolor":"#27422c","sfx_effect":"blockfromtop","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"auto:auto;","ease":"Power4.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5;background-color:rgb(28,51,34);"></div>
                    <h2 class="tp-caption   tp-resizeme" id="slide-2-layer-3" data-x="190" data-y="bottom" data-voffset="60" data-width="['466']" data-height="['105']" data-type="text" data-basealign="slide" data-responsive_offset="on" data-frames='[{"delay":1880,"speed":1000,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; min-width: 466px; max-width: 466px; max-width: 105px; max-width: 105px; white-space: nowrap; font-size: 40px; line-height: 50px; font-weight: 400; color: #fff2e0; letter-spacing: 10px;font-family:Yanone Kaffeesatz;">Propriété privée</br> Saly, Sénégal</h2>
                    <div class="tp-caption rev-btn " id="slide-2-layer-10" data-x="150" data-y="bottom" data-voffset="229" data-width="['auto']" data-height="['auto']" data-type="button" data-basealign="slide" data-responsive_offset="on" data-responsive="off" data-frames='[{"delay":480,"speed":2000,"sfxcolor":"#27422c","sfx_effect":"blockfromtop","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(49,45,42);bg:rgb(230,211,188);bs:solid;bw:0 0 0 0;"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[12,12,12,12]" data-paddingright="[35,35,35,35]" data-paddingbottom="[12,12,12,12]" data-paddingleft="[35,35,35,35]" style="z-index: 7; white-space: nowrap; font-size: 17px; line-height: 17px; font-weight: 500; color: #312d2a; letter-spacing: px;font-family:lora;background-color:rgb(204,185,161);border-color:rgba(0,0,0,1);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                        Fait par nous
                    </div>
                </li>
                <li data-index="rs-3" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="1050" data-thumb="images/home_garden2_slider_slide2-100x50.jpg" data-delay="6000" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <img src="{{ asset('content/garden2/images/home_garden2_slider_slide2.jpg') }}" title="Home" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="4" class="rev-slidebg" data-no-retina>
                    <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-3-layer-1" data-x="150" data-y="bottom" data-voffset="" data-width="['540']" data-height="['230']" data-type="shape" data-basealign="slide" data-responsive_offset="on" data-frames='[{"delay":480,"speed":2000,"sfxcolor":"#27422c","sfx_effect":"blockfromtop","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"auto:auto;","ease":"Power4.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5;background-color:rgb(28,51,34);"></div>
                    <h2 class="tp-caption   tp-resizeme" id="slide-3-layer-3" data-x="190" data-y="bottom" data-voffset="60" data-width="['466']" data-height="['105']" data-type="text" data-basealign="slide" data-responsive_offset="on" data-frames='[{"delay":1880,"speed":1000,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; min-width: 466px; max-width: 466px; max-width: 105px; max-width: 105px; white-space: nowrap; font-size: 40px; line-height: 50px; font-weight: 400; color: #fff2e0; letter-spacing: 10px;font-family:Yanone Kaffeesatz;">Propriété privée</br> Saly, Sénégal</h2>
                    <div class="tp-caption rev-btn " id="slide-3-layer-10" data-x="150" data-y="bottom" data-voffset="229" data-width="['auto']" data-height="['auto']" data-type="button" data-basealign="slide" data-responsive_offset="on" data-responsive="off" data-frames='[{"delay":480,"speed":2000,"sfxcolor":"#27422c","sfx_effect":"blockfromtop","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(49,45,42);bg:rgb(230,211,188);bs:solid;bw:0 0 0 0;"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[12,12,12,12]" data-paddingright="[35,35,35,35]" data-paddingbottom="[12,12,12,12]" data-paddingleft="[35,35,35,35]" style="z-index: 7; white-space: nowrap; font-size: 17px; line-height: 17px; font-weight: 500; color: #312d2a; letter-spacing: px;font-family:lora;background-color:rgb(204,185,161);border-color:rgba(0,0,0,1);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                        Fait par nous
                    </div>
                </li>
                <li data-index="rs-4" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="1050" data-thumb="images/home_garden2_slider_slide3-100x50.jpg" data-delay="6000" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <img src="{{ asset('content/garden2/images/home_garden2_slider_slide3.jpg') }}" title="Home" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="4" class="rev-slidebg" data-no-retina>
                    <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" id="slide-4-layer-1" data-x="150" data-y="bottom" data-voffset="" data-width="['540']" data-height="['230']" data-type="shape" data-basealign="slide" data-responsive_offset="on" data-frames='[{"delay":480,"speed":2000,"sfxcolor":"#27422c","sfx_effect":"blockfromtop","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"+3510","speed":1000,"frame":"999","to":"auto:auto;","ease":"Power4.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5;background-color:rgb(28,51,34);"></div>
                    <h2 class="tp-caption   tp-resizeme" id="slide-4-layer-3" data-x="190" data-y="bottom" data-voffset="61" data-width="['466']" data-height="['105']" data-type="text" data-basealign="slide" data-responsive_offset="on" data-frames='[{"delay":1880,"speed":1000,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"+3110","speed":1000,"frame":"999","to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; min-width: 466px; max-width: 466px; max-width: 105px; max-width: 105px; white-space: nowrap; font-size: 40px; line-height: 50px; font-weight: 400; color: #fff2e0; letter-spacing: 10px;font-family:Yanone Kaffeesatz;">Propriété privée</br> Saly, Sénégal</h2>
                    <div class="tp-caption rev-btn " id="slide-4-layer-10" data-x="150" data-y="bottom" data-voffset="229" data-width="['auto']" data-height="['auto']" data-type="button" data-basealign="slide" data-responsive_offset="on" data-responsive="off" data-frames='[{"delay":480,"speed":2000,"sfxcolor":"#27422c","sfx_effect":"blockfromtop","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"+3510","speed":1000,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(49,45,42);bg:rgb(230,211,188);bs:solid;bw:0 0 0 0;"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[12,12,12,12]" data-paddingright="[35,35,35,35]" data-paddingbottom="[12,12,12,12]" data-paddingleft="[35,35,35,35]" style="z-index: 7; white-space: nowrap; font-size: 17px; line-height: 17px; font-weight: 500; color: #312d2a; letter-spacing: px;font-family:lora;background-color:rgb(204,185,161);border-color:rgba(0,0,0,1);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                        Fait par nous
                    </div>
                </li>
            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div id="Content">
    <div class="content_wrapper clearfix">
        <div class="sections_group">
            <div class="entry-content">
                <div class="section mcb-section" style="padding-top:130px; padding-bottom:130px;" data-parallax="3d">
                <img class="mfn-parallax" src="{{ asset('content/garden2/images/home_garden2_sectionbg1.jpg') }}" style="opacity:0">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one-third  column-margin-0px valign-top clearfix">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_placeholder">
                                    <div class="placeholder">
                                        &nbsp;
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wrap mcb-wrap two-third valign-top clearfix" style="padding:60px 50px 10px; background-color:#eaddcd">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_column  column-margin-20px">
                                    <div class="column_attr clearfix">
                                        <h2>POURQUOI NOUS SOMMES LES MEILLEURS</h2>
                                        <h6>
                                            Nos services sont particulièrement fournis sur mesure en vue que chaque attente de nos clients trouve satisfaction
                                        </h6>
                                    </div>
                                </div>
                                <div class="column mcb-column one-second column_column">
                                    <div class="column_attr clearfix" style=" padding:0 15% 0 0;">
                                        <div class="image_frame image_item no_link scale-with-grid alignnone no_border">
                                            <div class="image_wrapper">
                                                <img class="scale-with-grid" src="{{ asset('content/garden2/images/home_garden2_icon1.png') }}" alt="img">
                                            </div>
                                        </div>
                                        <hr class="no_line" style="margin: 0 auto 20px">
                                        <h4>EXPERIENCE</h4>
                                        <p>
                                            Nos agents de terrain, professionnels et expérimentés, fournissent un travail de
                                             qualité et de précision, selon les règles de l’art et dans le respect des délais
                                        </p>
                                    </div>
                                </div>
                                <div class="column mcb-column one-second column_column">
                                    <div class="column_attr clearfix" style=" padding:0 15% 0 0;">
                                        <div class="image_frame image_item no_link scale-with-grid alignnone no_border">
                                            <div class="image_wrapper">
                                                <img class="scale-with-grid" src="{{ asset('content/garden2/images/home_garden2_icon2.png') }}" alt="img">
                                            </div>
                                        </div>
                                        <hr class="no_line" style="margin: 0 auto 20px">
                                        <h4>NOTRE OFFRE</h4>
                                        <p>
                                            Nous sommes une société dynamique, innovante et entièrement intégrée
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section mcb-section" style="padding-top:130px; padding-bottom:90px">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one valign-top clearfix">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column two-third column_column">
                                    <div class="column_attr clearfix">
                                        <h2>À l'INTERIEUR DU LYSSERVICES</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wrap mcb-wrap one-third valign-top clearfix" style="padding:40px 0 0">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_column  column-margin-10px">
                                    <div class="column_attr clearfix" style=" background-image:url('{{ asset('content/garden2/images/home_garden2_num1.png') }}'); background-repeat:no-repeat; background-position:left top; padding:10px 0 0 55px;">
                                        <p class="big">
                                            Assurer un avenir meilleur en bâtissant une communauté, en responsabilisant les jardiniers et en cultivant de nouvelles générations de gardiens de la terre.
                                        </p>
                                    </div>
                                </div>
                                <div class="column mcb-column one column_column  column-margin-10px">
                                    <div class="column_attr clearfix" style=" background-image:url('{{ asset('content/garden2/images/home_garden2_num2.png') }}'); background-repeat:no-repeat; background-position:left top; padding:10px 0 0 55px;">
                                        <p class="big">
                                            Nous sommes profondément investis dans notre main-d'œuvre, notre communauté et notre planète.
                                    </div>
                                </div>
                                <div class="column mcb-column one column_column">
                                    <div class="column_attr clearfix" style=" background-image:url('{{ asset('content/garden2/images/home_garden2_num3.png') }}'); background-repeat:no-repeat; background-position:left top; padding:10px 0 0 55px;">
                                        <p class="big">
                                            Nous avons encore du travail à faire, mais nous sommes fiers de ce que nous avons accompli
                                        </p>
                                    </div>
                                </div>
                                <div class="column mcb-column one column_column">
                                    <div class="column_attr clearfix">
                                        <a style="border-bottom: 2px solid #98b22e; padding-bottom: 5px; text-decoration: none;" class="big" href="#">Voir plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wrap mcb-wrap two-third valign-top clearfix">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one column_image">
                                    <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                        <div class="image_wrapper">
                                            <img class="scale-with-grid" src="{{ asset('content/garden2/images/home_garden2_pic1.png') }}" alt="img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section mcb-section full-width" style="padding-top:70px; padding-bottom:130px" data-parallax="3d">
                <img class="mfn-parallax" src="{{ asset('content/garden2/images/home_garden2_sectionbg2.jpg') }}" style="opacity:0">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one valign-top clearfix">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one-second column_placeholder">
                                    <div class="placeholder">
                                        &nbsp;
                                    </div>
                                </div>
                                <div class="column mcb-column one-second column_column">
                                    <div class="column_attr clearfix" style=" padding:0 0 0 30px">
                                        <h2 style="color: #fff2e0">LYSSERVICES
                                            <br>
                                            penser et agir comme un propriétaire</h2>
                                    </div>
                                </div>
                                <div class="column mcb-column one column_slider">
                                    <div class="content_slider center hide-dots">
                                        <ul class="content_slider_ul">
                                            <li class="content_slider_li_1">
                                                <a href="#">
                                                    <img src="{{ asset('content/garden2/images/home_garden2_contentslider_slide1.jpg') }}" class="scale-with-grid wp-post-image">
                                                </a>
                                            </li>
                                            <li class="content_slider_li_2">
                                                <a href="#">
                                                    <img src="{{ asset('content/garden2/images/home_garden2_contentslider_slide2.jpg') }}" class="scale-with-grid wp-post-image">
                                                </a>
                                            </li>
                                            <li class="content_slider_li_3">
                                                <a href="#">
                                                    <img src="{{ asset('content/garden2/images/home_garden2_contentslider_slide3.jpg') }}" class="scale-with-grid wp-post-image">
                                                </a>
                                            </li>
                                            <li class="content_slider_li_4">
                                                <a href="#">
                                                    <img src="{{ asset('content/garden2/images/home_garden2_contentslider_slide4.jpg') }}" class="scale-with-grid wp-post-image">
                                                </a>
                                            </li>
                                            <li class="content_slider_li_5">
                                                <a href="#">
                                                    <img src="{{ asset('content/garden2/images/home_garden2_contentslider_slide5.jpg') }}" class="scale-with-grid wp-post-image">
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="slider_pager slider_pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('js/mfn.menu.js') }}"></script>
<script src="{{ asset('js/jquery.plugins.js') }}"></script>
<script src="{{ asset('js/jquery.jplayer.min.js') }}"></script>
<script src="{{ asset('js/animations/animations.js') }}"></script>
<script src="{{ asset('js/translate3d.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
<script src="{{ asset('plugins/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('plugins/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('plugins/rs-plugin/js/extensions/revolution.extension.video.min.js') }}"></script>
<script src="{{ asset('plugins/rs-plugin/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('plugins/rs-plugin/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('plugins/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('plugins/rs-plugin/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('plugins/rs-plugin/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('plugins/rs-plugin/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('plugins/rs-plugin/js/extensions/revolution.extension.parallax.min.js') }}"></script>

<script>
    /*<![CDATA[*/
    function setREVStartSize(e) {
        try {
            var i = jQuery(window).width(),
                t = 9999,
                r = 0,
                n = 0,
                l = 0,
                f = 0,
                s = 0,
                h = 0;
            if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function(e, f) {
                    f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                var u = (e.c.width(), jQuery(window).height());
                if (
                    void 0 != e.fullScreenOffsetContainer) {
                    var c = e.fullScreenOffsetContainer.split(",");
                    if (c)
                        jQuery.each(c, function(e, i) {
                            u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                        }), e.fullScreenOffset.split("%").length > 1 &&
                        void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 :
                        void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                }
                f = u
            } else
                void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
            e.c.closest(".rev_slider_wrapper").css({
                height: f
            })
        } catch (d) {
            console.log("Failure at Presize of Slider:" + d)
        }
    }; /*]]>*/
</script>

<script>
    setREVStartSize({
        c: jQuery('#rev_slider_2_1'),
        gridwidth: [1080],
        gridheight: [1200],
        sliderLayout: 'fullscreen',
        fullScreenAutoWidth: 'off',
        fullScreenAlignForce: 'off',
        fullScreenOffsetContainer: '#Top_bar',
        fullScreenOffset: ''
    });
    var revapi2, tpj = jQuery;
    tpj(document).ready(function() {
        if (tpj("#rev_slider_2_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_2_1");
        } else {
            revapi2 = tpj("#rev_slider_2_1").show().revolution({
                sliderType: "standard",
                sliderLayout: "fullscreen",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    mouseScrollReverse: "default",
                    onHoverStop: "off",
                    arrows: {
                        style: "metis",
                        enable: true,
                        hide_onmobile: true,
                        hide_under: 768,
                        hide_onleave: false,
                        tmp: '',
                        left: {
                            h_align: "right",
                            v_align: "bottom",
                            h_offset: 200,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "bottom",
                            h_offset: 150,
                            v_offset: 0
                        }
                    }
                },
                visibilityLevels: [1240, 1024, 778, 480],
                gridwidth: 1080,
                gridheight: 1200,
                lazyType: "none",
                parallax: {
                    type: "mouse",
                    origo: "enterpoint",
                    speed: 400,
                    levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
                },
                shadow: 0,
                spinner: "spinner2",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                fullScreenAutoWidth: "off",
                fullScreenAlignForce: "off",
                fullScreenOffsetContainer: "#Top_bar",
                fullScreenOffset: "",
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
    });
</script>
@endsection
