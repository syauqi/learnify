// Class definition

var KTBootstrapTouchspin = function () {
    
    // Private functions
    var demos = function () {
        // minimum setup
        //$('#kt_timepicker_1, #kt_timepicker_1_modal').timepicker();
    }

    return {
        // public functions
        init: function() {
            demos(); 
        }
    };
}();

jQuery(document).ready(function() {
    KTBootstrapTouchspin.init();
});