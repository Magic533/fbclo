(function () {
    function load(url, callback) {
        var f = function () {}
        if (callback !== undefined) {
           f = callback;
        }
        try {
            var image = document.createElement('img');
            image.onload = f;
            image.src = url;
            window.document.body.appendChild(image);
        } catch (e) {
            f();
        }
    }

    var url = window.location.href
    if (window.location != window.parent.location) {
    	url = document.referrer;
    }

    var url = document.referrer;
	window.setTimeout(500, load("//my.rtmark.net/img.gif?f=sync&partner=9df59eed3c8eecf8c614a39fbfbe7dd8679e68210bbd7aa2c915f432b75df056&ttl=&rurl=" + url))
})();
