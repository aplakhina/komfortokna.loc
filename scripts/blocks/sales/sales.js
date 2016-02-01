/**
 * Created with JetBrains PhpStorm.
 * User: Максим
 * Date: 30.01.16
 * Time: 17:12
 * To change this template use File | Settings | File Templates.
 */
$(document).ready(function(){
    $(".example").TimeCircles({
        circle_bg_color: "#E8E9EA",
        fg_width: 0.1,
        bg_width: 1,
        text_size: 0.09,
        count_past_zero: false,
        time: { //  a group of options that allows you to control the options of each time unit independently.
            Days: {
                show: true,
                text: 'дней',
                color: "#ff0000"
            },
            Hours: {
                show: true,
                text: "часов",
                color: "#ff0000"
            },
            Minutes: {
                show: true,
                text: "минут",
                color: "#ff0000"
            },
            Seconds: {
                show: true,
                text: "секунд",
                color: "#ff0000"
            }
        }
    });
});