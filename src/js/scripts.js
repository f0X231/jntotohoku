
function heroBanner() {
    var bigbanner = $("#bigbanner").slippry({
        // transition: 'fade',
        // useCSS: true,
        // speed: 1000,
        // pause: 3000,
        // auto: true,
        // preload: 'visible',
        // autoHover: false
    });

    /*$('.stop').click(function () {
        bigbanner.stopAuto();
    });

    $('.start').click(function () {
        bigbanner.startAuto();
    });

    $('.prev').click(function () {
        bigbanner.goToPrevSlide();
        return false;
    });
    $('.next').click(function () {
        bigbanner.goToNextSlide();
        return false;
    });
    $('.reset').click(function () {
        bigbanner.destroySlider();
        return false;
    });
    $('.reload').click(function () {
        bigbanner.reloadSlider();
        return false;
    });
    $('.init').click(function () {
        bigbanner = $("#bigbanner").slippry();
        return false;
    });*/
}

function bigbannerLazyLoad() {
    $(".owl-carousel").owlCarousel({
        items:1,
        lazyLoad:true,
        loop:false,
        autoplay:false
    });
}

function galleryShow() {
    var browserWidth = $(window).width();
    var showThumbnailItem = true;

    if(browserWidth <= 768) {
        showThumbnailItem = false;
    }

    $("#content-slider").lightSlider({
        loop:true,
        keyPress:true
    });

    $('#image-gallery').lightSlider({
        gallery:true,
        item:1,
        gallery: showThumbnailItem,
        thumbItem: 6,
        slideMargin: 0,
        speed:500,
        auto:true,
        loop:true,
        onSliderLoad: function() {
            $('#image-gallery').removeClass('cS-hidden');
        }  
    });
}
/*
function initMap(elementID, latitude, longitude, iconMaker, infoHTML) {
    //dropdown example
    new Maplace({
        locations: LocsA,
        map_div: '#gmap-dropdown',
        controls_title: 'Choose a location:',
        listeners: {
            click: function(map, event) {
                alert('That was a click!');
            }
        }
    }).Load();
}*/

function getCurrentURLPageName() {
    var path = window.location.pathname;
    var page = path.split("/").pop();
    var ext = page.split(".").pop();
        
    return page.replace("." + ext, "").toUpperCase();;
}

function getAllUrlParams(url) {

    // get query string from url (optional) or window
    var queryString = url ? url.split('?')[1] : window.location.search.slice(1);
  
    // we'll store the parameters here
    var obj = {};
  
    // if query string exists
    if (queryString) {
  
        // stuff after # is not part of query string, so get rid of it
        queryString = queryString.split('#')[0];
  
        // split our query string into its component parts
        var arr = queryString.split('&');
  
        for (var i=0; i<arr.length; i++) {
            // separate the keys and the values
            var a = arr[i].split('=');
  
            // in case params look like: list[]=thing1&list[]=thing2
            var paramNum = undefined;
            var paramName = a[0].replace(/\[\d*\]/, function(v) {
                                                                    paramNum = v.slice(1,-1);
                                                                    return '';
                                                                });
  
            // set parameter value (use 'true' if empty)
            var paramValue = typeof(a[1])==='undefined' ? true : a[1];
  
            // (optional) keep case consistent
            paramName = paramName.toLowerCase();
            paramValue = paramValue.toLowerCase();
  
            // if parameter name already exists
            if (obj[paramName]) {
                // convert value to array (if still string)
                if (typeof obj[paramName] === 'string') {
                    obj[paramName] = [obj[paramName]];
                }
                // if no array index number specified...
                if (typeof paramNum === 'undefined') {
                    // put the value on the end of the array
                    obj[paramName].push(paramValue);
                }
                // if array index number specified...
                else {
                    // put the value at that index number
                    obj[paramName][paramNum] = paramValue;
                }
            }
            // if param name doesn't exist yet, set it
            else {
                obj[paramName] = paramValue;
            }
        }
    }
  
    return obj;
}

jQuery(document).ready(function() {
    var cName = getCurrentURLPageName();
    
    /* Default load */
    bigbannerLazyLoad();

    /* Load on Pages */
    if(cName == "AKITA") {
        var LocsA = [
            {
                lat: 38.570639, 
                lon: 140.530468,
                zoom: 14,
                title: 'AKITA อะคิตะ',
                html: '<h1 class="is-size-5 fontDBOzone has-text-weight-bold has-text-centered">AKITA อะคิตะ</h1><p class="is-size-6 fontDBOzone has-text-centered"><a href="#" target="_blank">อ่านรายละเอียดเพิ่มเติม</a></p/>',
                icon: './src/images/maker_yamagata.png',
                animation: google.maps.Animation.DROP
            }
        ];
    }

    if(cName == "AOMORI") {
        var LocsA = [
            {
                lat: 40.469747, 
                lon: 140.876058,
                zoom: 14,
                title: 'AOMORI อะโอโมริ',
                html: '<h1 class="is-size-5 fontDBOzone has-text-weight-bold has-text-centered">AOMORI อะโอโมริ</h1><p class="is-size-6 fontDBOzone has-text-centered"><a href="#" target="_blank">อ่านรายละเอียดเพิ่มเติม</a></p/>',
                icon: './src/images/maker_yamagata.png',
                animation: google.maps.Animation.DROP
            }
        ];
    }

    if(cName == "FUKUSHIMA") {
        var LocsA = [
            {
                lat: 37.350761, 
                lon: 139.314857,
                zoom: 14,
                title: 'FUKUSHIMA ฟุคุชิมะ',
                html: '<h1 class="is-size-5 fontDBOzone has-text-weight-bold has-text-centered">FUKUSHIMA ฟุคุชิมะ</h1><p class="is-size-6 fontDBOzone has-text-centered"><a href="#" target="_blank">อ่านรายละเอียดเพิ่มเติม</a></p/>',
                icon: './src/images/maker_yamagata.png',
                animation: google.maps.Animation.DROP
            }
        ];
    }

    if(cName == "IWATE") {
        var LocsA = [
            {
                lat: 40.002681, 
                lon: 140.970314,
                zoom: 14,
                title: 'IWATE อิวะเตะ',
                html: '<h1 class="is-size-5 fontDBOzone has-text-weight-bold has-text-centered">IWATE อิวะเตะ</h1><p class="is-size-6 fontDBOzone has-text-centered"><a href="#" target="_blank">อ่านรายละเอียดเพิ่มเติม</a></p/>',
                icon: './src/images/maker_yamagata.png',
                animation: google.maps.Animation.DROP
            }
        ];
    }

    if(cName == "MIYAGI") {
        var LocsA = [
            {
                lat: 38.135395,
                lon: 140.494937,
                zoom: 14,
                title: 'MIYAGI มิยางิ',
                html: '<h1 class="is-size-5 fontDBOzone has-text-weight-bold has-text-centered">MIYAGI มิยางิ</h1><p class="is-size-6 fontDBOzone has-text-centered"><a href="#" target="_blank">อ่านรายละเอียดเพิ่มเติม</a></p/>',
                icon: './src/images/maker_yamagata.png',
                animation: google.maps.Animation.DROP
            }
        ];
    }

    if(cName == "YAMAGATA") {
        var LocsA = [
            {
                lat: 38.570639, 
                lon: 140.530468,
                zoom: 14,
                title: 'YAMAGATA ยามากาตะ',
                html: '<h1 class="is-size-5 fontDBOzone has-text-weight-bold has-text-centered">YAMAGATA ยามากาตะ</h1><p class="is-size-6 fontDBOzone has-text-centered"><a href="#" target="_blank">อ่านรายละเอียดเพิ่มเติม</a></p/>',
                icon: './src/images/maker_yamagata.png',
                animation: google.maps.Animation.DROP
            }
        ];
    }

    
    if(cName == "MEDIA-INNER") {
        var LocsA = [
            {
                lat: 38.570639, 
                lon: 140.530468,
                zoom: 14,
                title: 'AKITA อะคิตะ',
                html: '<h1 class="is-size-5 fontDBOzone has-text-weight-bold has-text-centered">AKITA อะคิตะ</h1><p class="is-size-6 fontDBOzone has-text-centered"><a href="#" target="_blank">อ่านรายละเอียดเพิ่มเติม</a></p/>',
                icon: './src/images/maker_yamagata.png',
                animation: google.maps.Animation.DROP
            },
            {
                lat: 40.469747, 
                lon: 140.876058,
                zoom: 14,
                title: 'AOMORI อะโอโมริ',
                html: '<h1 class="is-size-5 fontDBOzone has-text-weight-bold has-text-centered">AOMORI อะโอโมริ</h1><p class="is-size-6 fontDBOzone has-text-centered"><a href="#" target="_blank">อ่านรายละเอียดเพิ่มเติม</a></p/>',
                icon: './src/images/maker_yamagata.png',
                animation: google.maps.Animation.DROP
            },
            {
                lat: 37.350761, 
                lon: 139.314857,
                zoom: 14,
                title: 'FUKUSHIMA ฟุคุชิมะ',
                html: '<h1 class="is-size-5 fontDBOzone has-text-weight-bold has-text-centered">FUKUSHIMA ฟุคุชิมะ</h1><p class="is-size-6 fontDBOzone has-text-centered"><a href="#" target="_blank">อ่านรายละเอียดเพิ่มเติม</a></p/>',
                icon: './src/images/maker_yamagata.png',
                animation: google.maps.Animation.DROP
            },
            {
                lat: 40.002681, 
                lon: 140.970314,
                zoom: 14,
                title: 'IWATE อิวะเตะ',
                html: '<h1 class="is-size-5 fontDBOzone has-text-weight-bold has-text-centered">IWATE อิวะเตะ</h1><p class="is-size-6 fontDBOzone has-text-centered"><a href="#" target="_blank">อ่านรายละเอียดเพิ่มเติม</a></p/>',
                icon: './src/images/maker_yamagata.png',
                animation: google.maps.Animation.DROP
            },
            {
                lat: 38.135395,
                lon: 140.494937,
                zoom: 14,
                title: 'MIYAGI มิยางิ',
                html: '<h1 class="is-size-5 fontDBOzone has-text-weight-bold has-text-centered">MIYAGI มิยางิ</h1><p class="is-size-6 fontDBOzone has-text-centered"><a href="#" target="_blank">อ่านรายละเอียดเพิ่มเติม</a></p/>',
                icon: './src/images/maker_yamagata.png',
                animation: google.maps.Animation.DROP
            },
            {
                lat: 38.570639, 
                lon: 140.530468,
                zoom: 14,
                title: 'YAMAGATA ยามากาตะ',
                html: '<h1 class="is-size-5 fontDBOzone has-text-weight-bold has-text-centered">YAMAGATA ยามากาตะ</h1><p class="is-size-6 fontDBOzone has-text-centered"><a href="#" target="_blank">อ่านรายละเอียดเพิ่มเติม</a></p/>',
                icon: './src/images/maker_yamagata.png',
                animation: google.maps.Animation.DROP
            }
        ];        
        new Maplace({
            map_div: '#gmap',
            locations: LocsA
        }).Load();

        $('[data-fancybox="gallery"]').fancybox();
    }

    if(cName == "TOHOKU-ARTS") {
        var LocsA = [
            {
                lat: 38.570639,
                lon: 140.530468,
                zoom: 14,
                title: 'Title A1',
                html: '<h3>Content A1</h3>',
                icon: './src/images/maker_yamagata.png',
                animation: google.maps.Animation.DROP
            },
            {
                lat: 38.570539,
                lon: 140.530568,
                zoom: 14,
                title: 'Title A1',
                html: '<h3>Content A1</h3>',
                icon: './src/images/maker_yamagata.png',
                animation: google.maps.Animation.DROP
            },
            {
                lat: 38.570679,
                lon: 140.530568,
                zoom: 14,
                title: 'Title B1',
                html: '<h3>Content B1</h3>',
                icon: './src/images/maker_yamagata.png',
                animation: google.maps.Animation.DROP
            }
        ];
    }

    if(cName == "TOHOKU-RAILWAY") {
        var LocsA = [
            {
                lat: 38.570639,
                lon: 140.530468,
                zoom: 14,
                title: 'Title A1',
                html: '<h3>Content A1</h3>',
                icon: './src/images/maker_yamagata.png',
                animation: google.maps.Animation.DROP
            }
        ];
    }

    if(cName == "TOHOKU-SPECIAL") {
        var LocsA = [
            {
                lat: 38.570639,
                lon: 140.530468,
                zoom: 14,
                title: 'Title A1',
                html: '<h3>Content A1</h3>',
                icon: './src/images/maker_yamagata.png',
                animation: google.maps.Animation.DROP
            }
        ];
    }

    if(cName == "TOHOKU-FOOD") {
        var LocsA = [
            {
                lat: 38.570639,
                lon: 140.530468,
                zoom: 14,
                title: 'Title A1',
                html: '<h3>Content A1</h3>',
                icon: './src/images/maker_yamagata.png',
                animation: google.maps.Animation.DROP
            }
        ];
    }

    if(cName == "TOHOKU-NATURE") {
        var LocsA = [
            {
                lat: 38.570639,
                lon: 140.530468,
                zoom: 14,
                title: 'Title A1',
                html: '<h3>Content A1</h3>',
                icon: './src/images/maker_yamagata.png',
                animation: google.maps.Animation.DROP
            }
        ];
    }

    if(cName == "TOHOKU-HOT-SPRING") {
        var LocsA = [
            {
                lat: 38.570639,
                lon: 140.530468,
                zoom: 14,
                title: 'Title A1',
                html: '<h3>Content A1</h3>',
                icon: './src/images/maker_yamagata.png',
                animation: google.maps.Animation.DROP
            },
            {
                lat: 38.570539,
                lon: 140.530268,
                zoom: 14,
                title: 'Title B1',
                html: '<h3>Content B1</h3>',
                icon: './src/images/maker_yamagata.png',
                animation: google.maps.Animation.DROP
            }
        ];
    }

    if( cName == "YAMAGATA" || cName == "AKITA" || cName == "AOMORI"  || 
        cName == "FUKUSHIMA" || cName == "IWATE" || cName == "MIYAGI" ) {
        galleryShow();
        new Maplace({
            map_div: '#gmap',
            locations: LocsA
        }).Load();
    }

    if( cName == "TOHOKU-ARTS" || cName == "TOHOKU-RAILWAY"  || cName == "TOHOKU-SPECIAL" ||
        cName == "TOHOKU-FOOD" || cName == "TOHOKU-NATURE"  || cName == "TOHOKU-HOT-SPRING")
    {
        new Maplace({
            map_div: '#gmap',
            locations: LocsA
        }).Load();
    }

});


