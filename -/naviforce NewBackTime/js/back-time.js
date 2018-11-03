<script type="text/javascript">
var clock;

$(document).ready(function() {
    var clock;

    clock = $('.clock').FlipClock({
        clockFace: 'DailyCounter',
        autoStart: false,
        callbacks: {
            stop: function() {
                $('.message').html('The clock has stopped!')
            }
        }
    });
            
    clock.setTime(<?echo ($time);?>);
    clock.setCountdown(true);
    clock.start();

});

var clock;

$(document).ready(function() {
    var clockone;

    clock = $('.clockone').FlipClock({
        clockFace: 'DailyCounter',
        autoStart: false,
        callbacks: {
            stop: function() {
                $('.message').html('The clockone has stopped!')
            }
        }
    });
            
    clock.setTime(<?echo ($time);?>);
    clock.setCountdown(true);
    clock.start();

});
</script>