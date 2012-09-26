var zing = angular.module("zing", []);

function parseDevice(obj) {
    var device, retObj = {};

    //for retina screens showing under 800 pixels without multiplier.
    if (!window.devicePixelRatio) {
        window.devicePixelRatio = 1;
    }
    //set real device screen width
    tylted.deviceWidth = document.documentElement.clientWidth * window.devicePixelRatio;

    switch (true) {
        //remove instances of mobile from object
        case (tylted.deviceWidth > 768):
            device = "mobile";
            break;
        //remove instances of desktop from object
        case (tylted.deviceWidth < 768):
            device = "desktop";
            break;
    }

    //iterate over to remove instances of device
    $.each(obj, function (dex, val) {
        if (dex.indexOf(device) != -1) {
            delete obj[dex];
        }

    });

    return obj;
}