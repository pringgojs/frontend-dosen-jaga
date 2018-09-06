"use strict";
$(document).ready(function () {
    function isMobile() {
        return ('ontouchstart' in document.documentElement);
    }

    function swal_success(title, text) {
        //Success Message
        swal({
            title: title,
            type: "success",
            text: text,
            confirmButtonColor: "#09a275",
        });
        return false;
    }

    function swal(text) {
        swal({
            title: text,
            confirmButtonColor: "#0f4fa8",
        });
        return false;
    }
});

