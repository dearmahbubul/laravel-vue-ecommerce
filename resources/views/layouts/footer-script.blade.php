<?php
/**
 * Created by PhpStorm.
 * User: emamu
 * Date: 12/15/2019
 * Time: 9:00 PM
 */
?>

<!--js working-->
<script src="{{URL::asset('js/jquery-3.4.1.min.js')}}"></script>
<!--//js working-->
<!--bootstrap working-->
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
{{--<!-- easy-responsive-tabs -->
<script src="js/easy-responsive-tabs.js"></script>
<script>
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function (event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
        $('#verticalTab').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true
        });
    });
</script>
<!-- credit-card -->
<script src="js/creditly.js"></script>
<link rel="stylesheet" href="css/creditly.css" type="text/css" media="all" />
<script>
    $(function () {
        var creditly = Creditly.initialize(
            '.creditly-wrapper .expiration-month-and-year',
            '.creditly-wrapper .credit-card-number',
            '.creditly-wrapper .security-code',
            '.creditly-wrapper .card-type');

        $(".creditly-card-form .submit").click(function (e) {
            e.preventDefault();
            var output = creditly.validate();
            if (output) {
                // Your validated credit card output
                console.log(output);
            }
        });
    });
</script>
<script src="{{URL::asset("js/move-top.js")}}"></script>
<script src="js/easing.js"></script>
<script>
    $(document).ready(function () {

        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };
        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<script>
    $(document).ready(function(){
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            },10);
        });
    });
</script>
<script>

    $("#userRegistrationModal").click( function()
        {
            $('#userLoginModal').modal('hide')
            $('#userRegistrationModal').modal('show')
        }
    );
</script>--}}

<script src="{{URL::asset('js/app.js')}}"></script>
