(function (window, document) {
    'use strict';

    var opt = window._agmOpt;

    function loadGoogleMap() {
        var width = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
        var center = new google.maps.LatLng(parseFloat(opt.map.lat), parseFloat(opt.map.lng));

        var mapOptions = {
            zoomControl: !opt.controls.zoomControl,
            zoomControlOptions: {
                position: google.maps.ControlPosition.LEFT_CENTER
            },
            mapTypeControl: !opt.controls.mapTypeControl,
            streetViewControl: !opt.controls.streetViewControl,
            scrollwheel: !opt.mobile.scrollwheel,
            draggable: true,
            center: center,
            zoom: parseInt(opt.map.zoom),
            mapTypeId: google.maps.MapTypeId[opt.map.type],
            mapTypeControlOptions: {
                style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
                position: google.maps.ControlPosition.TOP_RIGHT
            }
        };
        var map = new google.maps.Map(mapCanvas, mapOptions);

        if (opt.mobile.draggable) {
            map.setOptions({draggable: (width > 480) || !isTouchDevice()});
        }


        /**
         * If marker is enabled
         */
        if (opt.marker.enabled === 1) {
            var marker = new google.maps.Marker({
                position: center,
                map: map,
                title: opt.marker.title
            });
            if (opt.marker.animation !== 'NONE') {
                marker.setAnimation(google.maps.Animation[opt.marker.animation])
            }
            if (opt.marker.color !== false) {
                marker.setIcon(opt.marker.color);
            }

            /**
             * Info window needs marker to be enabled first
             */
            if (opt.info_window.enabled === 1) {
                var infoWindow = new google.maps.InfoWindow({content: opt.info_window.text});
                /**
                 * Clicking on map will close info-window
                 */
                google.maps.event.addListener(map, 'click', function () {
                    infoWindow.close();
                });
            }
        }

        if (opt.marker.enabled === 1 && opt.info_window.enabled === 1) {
            /**
             * Clicking on marker will show info-window
             */
            google.maps.event.addListener(marker, "click", function () {
                infoWindow.open(map, marker);
                marker.setAnimation(null);
            });
            /**
             * If info window enabled by default
             */
            if (opt.info_window.state === 1) {
                window.setTimeout(function () {
                    infoWindow.open(map, marker);
                    marker.setAnimation(null);
                }, 2000);
            }

        }


        var timeout;
        /**
         * Resize event handling, make map more responsive
         * Center map after 300 ms
         */
        google.maps.event.addDomListener(window, 'resize', function () {
            if (timeout) {
                clearTimeout(timeout);
            }
            timeout = window.setTimeout(function () {
                map.setCenter(center);
            }, 300);
        });
    }

    var mapCanvas = document.getElementById("agm-canvas");
    if (typeof mapCanvas !== 'undefined') {
        if (typeof google == "object" && google.maps) {
            google.maps.event.addDomListener(window, "load", loadGoogleMap)
        }
        else {
            mapCanvas.innerHTML = '<p style="text-align: center">Failed to load Google Map.<br>Please try again.</p>';
            mapCanvas.style.height = "auto";
        }
    }

    /**
     * Detect if touch enabled device
     * @source http://stackoverflow.com/questions/4817029/whats-the-best-way-to-detect-a-touch-screen-device-using-javascript
     * @returns {boolean|*}
     */
    function isTouchDevice() {
        return 'ontouchstart' in window        // works on most browsers
            || navigator.maxTouchPoints;       // works on IE10/11 and Surface
    }


})(window, document);