/**
 * Created with JetBrains PhpStorm.
 * User: Максим
 * Date: 30.01.16
 * Time: 17:12
 * To change this template use File | Settings | File Templates.
 */
$(document).ready(function(){
    var loadTimer = function() {
        $(".timeCircles").TimeCircles({
            circle_bg_color: "white",
            fg_width: 0.1,
            bg_width: 1,
            text_size: 0.09,
            count_past_zero: false,
            time: { //  a group of options that allows you to control the options of each time unit independently.
                Days: {
                    show: true,
                    text: 'дней',
                    color: "#4A97CC"
                },
                Hours: {
                    show: true,
                    text: "часов",
                    color: "#4A97CC"
                },
                Minutes: {
                    show: true,
                    text: "минут",
                    color: "#4A97CC"
                },
                Seconds: {
                    show: true,
                    text: "секунд",
                    color: "#4A97CC"
                }
            }
        });
    };

    $(window).bind("resize", function(){
        $(".timeCircles").remove();
        $(".timeCirclesParent").append("<div class='timeCircles' data-timer='900'></div>");
        loadTimer();
    });

    loadTimer();

});