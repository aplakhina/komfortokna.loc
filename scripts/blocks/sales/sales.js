/**
 * Created with JetBrains PhpStorm.
 * User: Максим
 * Date: 30.01.16
 * Time: 17:12
 * To change this template use File | Settings | File Templates.
 */
$(document).ready(function(){
    var setTime = function() {
        var data = Date.parse('02/02/2016') // дата начала 1 шестидневки  строго "месяц/день/год"
        data = new Date(data);
        data.setMinutes((-240 - data.getTimezoneOffset()), 0, 0);
        for (; (new Date).getTime() > data; )  {
            data.setDate(data.getDate() + 6)
        }
        var a = data.getTime() -  (new Date).getTime();
        // document.getElementById("show").innerHTML = "До " + data.toLocaleString() + " по Москве осталось: " + formatTime(a);
        $('.timeCircles').attr('data-timer',a/1000);
        //window.setTimeout(Time, 1E3);
    };



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
        $(".timeCirclesParent").append("<div class='timeCircles'></div>");
        setTime();
        loadTimer();
    });

    setTime();
    loadTimer();

});