
function galleryShow() {
    $("#content-slider").lightSlider({
        loop:true,
        keyPress:true
    });
    $('#image-gallery').lightSlider({
        gallery:true,
        item:1,
        thumbItem:9,
        slideMargin: 0,
        speed:500,
        auto:true,
        loop:true,
        onSliderLoad: function() {
            $('#image-gallery').removeClass('cS-hidden');
        }  
    });
}

function initMap(elementID, latitude, longitude, iconMaker, infoHTML) {
    var pointOfPosition = {lat: latitude, lng: longitude}
    var htmlInfo = infoHTML;
    var map = new google.maps.Map(document.getElementById(elementID), {
                                scaleControl: true,
                                mapTypeControl: true,
                                mapTypeControlOptions: {
                                    style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
                                    position: google.maps.ControlPosition.TOP_CENTER
                                },
                      
                                center: pointOfPosition,
                                zoom: 14
                            });
    var infowindow = new google.maps.InfoWindow;
    infowindow.setContent(htmlInfo);
    var marker = new google.maps.Marker({
                                        map: map,
                                        position: pointOfPosition,
                                        icon: iconMaker
                                    });
    marker.addListener('click', function() {
            infowindow.open(map, marker);
    });
    infowindow.open(map, marker);
}

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
    
    if(cName == "YAMAGATA") {
        galleryShow();
        initMap('gmap', '38.570639', '140.530468', '../src/images/thumb/cS-1.jpg', 'info');
    }
    else {

    }

});


