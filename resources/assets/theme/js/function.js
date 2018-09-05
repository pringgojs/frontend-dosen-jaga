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

    // function swal_desc(title, text) {
    //     swal({
    //         title: title,
    //         text: text,
    //         confirmButtonColor: "#0f4fa8",
    //     });
    //     return false;
    // }

    // function secureDelete(url, tr_callback) {
    //     swal({
    //         title: "Anda yakin ingin menghapus data?",
    //         text: "Data yang dihapus tidak bisa dikembalikan lagi",
    //         type: "warning",
    //         showCancelButton: true,
    //         confirmButtonColor: "#f2b701",
    //         confirmButtonText: "Yes, delete it!",
    //         closeOnConfirm: false
    //     }, function () {
    //         deleteExec(url, tr_callback);
    //     });
    // }

    // function deleteExec(url, tr_callback) {
    //     $.ajax({
    //         url: url,
    //         success: function (res) {
    //             swal_success('Berhasil', 'data berhasil dihapus');
    //             if (tr_callback) {
    //                 $(tr_callback).fadeOut();
    //             }
    //         },
    //         error: function (result) {
    //             swal("Failed something went wrong");
    //         }
    //     });
    // }

    function notif(msg) {
        let snackbar = new SnackBar;
        snackbar.make("message",
            [
                msg,
                null,
                "bottom",
                "center"
            ]);
        snackbar.show(4000);
    }
});

