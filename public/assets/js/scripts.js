
/**
* scripts.js
* @author Souvenance <skavunga@gmail.com>
* @version 1.1
*/    
    
taille_f = 752
navbarg = $('#navbar-g')
menr    = $('#menu-r')

$(document).ready(function () {
    $('[rel=tooltip]').tooltip()
});
// Prenvention
if ($(window).width() <= taille_f){
    navbarg.hide()
    menr.removeClass('pull-right')
    $('#ligne-h').show()
}

$(window).bind('resize', function(){
    if ($(window).width() <= taille_f){
        navbarg.hide()
        menr.removeClass('pull-right')
        $('#ligne-h').show()
    } else {
        $('#ligne-h').hide();
        menr.addClass('pull-right')
    }
})
