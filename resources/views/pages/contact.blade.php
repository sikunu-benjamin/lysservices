@extends('layout.layout')

@section('title')- Processus à suivre @endsection

@section('after-header')
<div id="Subheader" style="padding:80px 0 150px">
    <div class="container">
        <div class="column one">
            <h1 class="title">NOUS CONTACTER</h1>
        </div>
    </div>
</div>
@endsection

@section('content')
<div id="Content">
    <div class="content_wrapper clearfix">
        <div class="sections_group">
            <div class="entry-content">
                <div class="section mcb-section" style="padding-top:60px; padding-bottom:130px">
                    <div class="section_wrapper mcb-section-inner">
                        <div class="wrap mcb-wrap one valign-top clearfix">
                            <div class="mcb-wrap-inner">
                                <div class="column mcb-column one-second column_column">
                                    <div class="column_attr clearfix" style=" padding:0 7% 0 0;">
                                        <h2>MESSAGE</h2>
                                        <hr class="no_line" style="margin:0 auto 15px">
                                        <p>
                                            Duis dignissim mi ut laoreet mollis. Nunc id tellus finibus, eleifend mi vel, maximus justo. Maecenas mi tortor,
                                             pellentesque a aliquam ut, fringilla eleifend lectus. Maecenas ultrices tellus.
                                        </p>
                                        <hr class="no_line" style="margin:0 auto 25px">
                                        <div id="contactWrapper">
                                            <form id="contactform">
                                                <div class="column one-second">
                                                    <input placeholder="Your name" type="text" name="name" id="name" size="40" aria-required="true" aria-invalid="false" />
                                                </div>
                                                <div class="column one-second">
                                                    <input placeholder="Your e-mail" type="email" name="email" id="email" size="40" aria-required="true" aria-invalid="false" />
                                                </div>
                                                <div class="column one">
                                                    <input placeholder="Subject" type="text" name="subject" id="subject" size="40" aria-invalid="false" />
                                                </div>
                                                <div class="column one">
                                                    <textarea placeholder="Message" name="body" id="body" style="width:100%;" rows="10" aria-invalid="false"></textarea>
                                                </div>
                                                <div class="column one">
                                                    <input type="button" value="Send A Message" id="submit" onClick="return check_values();">
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                                <div class="column mcb-column one-second column_map">
                                    <div class="google-map-wrapper no_border">
                                        <div class="google-map" id="google-map-area-59491a063eee3" style="width:100%; height:600px;">
                                            &nbsp;
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
<script src="http://maps.google.com/maps/api/js?sensor=false&ver=5.9"></script>
<script src="{{ asset('js/email.js') }}"></script>

    <script>
        function google_maps_59491a063eee3() {
            var latlng = new google.maps.LatLng(-33.8710, 151.2039);
            var draggable = true;
            var myOptions = {
                zoom: 13,
                center: latlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                styles: [{
                    featureType: "all",
                    elementType: "labels",
                    stylers: [{
                        visibility: "on"
                    }]
                }, {
                    featureType: "administrative",
                    elementType: "all",
                    stylers: [{
                        visibility: "off"
                    }]
                }, {
                    featureType: "landscape",
                    elementType: "all",
                    stylers: [{
                        color: "#584637"
                    }, {
                        visibility: "simplified"
                    }]
                }, {
                    featureType: "poi",
                    elementType: "all",
                    stylers: [{
                        visibility: "off"
                    }]
                }, {
                    featureType: "road",
                    elementType: "all",
                    stylers: [{
                        visibility: "on"
                    }]
                }, {
                    featureType: "road",
                    elementType: "geometry",
                    stylers: [{
                        color: "#584637"
                    }, {
                        lightness: "30"
                    }, {
                        saturation: "-10"
                    }]
                }, {
                    featureType: "road",
                    elementType: "labels.text",
                    stylers: [{
                        visibility: "on"
                    }]
                }, {
                    featureType: "road",
                    elementType: "labels.text.fill",
                    stylers: [{
                        color: "#584637"
                    }, {
                        lightness: "80"
                    }]
                }, {
                    featureType: "road",
                    elementType: "labels.text.stroke",
                    stylers: [{
                        color: "#584637"
                    }, {
                        lightness: "0"
                    }]
                }, {
                    featureType: "road",
                    elementType: "labels.icon",
                    stylers: [{
                        visibility: "off"
                    }]
                }, {
                    featureType: "transit",
                    elementType: "all",
                    stylers: [{
                        visibility: "simplified"
                    }, {
                        color: "#584637"
                    }, {
                        lightness: "50"
                    }]
                }, {
                    featureType: "transit.station",
                    elementType: "all",
                    stylers: [{
                        visibility: "off"
                    }]
                }, {
                    featureType: "water",
                    elementType: "all",
                    stylers: [{
                        color: "#584637"
                    }, {
                        lightness: "-20"
                    }]
                }],
                draggable: draggable,
                zoomControl: true,
                mapTypeControl: false,
                streetViewControl: false,
                scrollwheel: false
            };
            var map = new google.maps.Map(document.getElementById("google-map-area-59491a063eee3"), myOptions);
            var marker = new google.maps.Marker({
                position: latlng,
                icon: "{{ asset('content/garden2/images/home_garden2_pin.png') }}",
                map: map
            });
        }
        jQuery(document).ready(function($) {
            google_maps_59491a063eee3();
        });
    </script>
@endsection
