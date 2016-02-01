/**
 * Created with JetBrains PhpStorm.
 * User: Максим
 * Date: 30.01.16
 * Time: 17:12
 * To change this template use File | Settings | File Templates.
 */
$(document).ready(function(){
    $('.fotorama')
        .on('fotorama:fullscreenenter fotorama:fullscreenexit', function (e, fotorama) {
            if (e.type === 'fotorama:fullscreenenter') {
                // Options for the fullscreen
                fotorama.setOptions({
                    fit: 'contain'
                });
            } else {
                // Back to normal settings
                fotorama.setOptions({
                    fit: 'cover'
                });
            }
        })
        .fotorama();
});