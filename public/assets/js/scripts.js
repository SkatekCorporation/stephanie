
/**
* scripts.js
* @author Souvenance <skavunga@gmail.com>
* @version 1.1
*/    
    
taille_f = 752
navbarg = $('#navbar-g')
menr    = $('#menu-r')

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

$('#date').css('padding', 'inherit')
$('#heure').css('padding', 'inherit')
$('#jour').css('padding', 'inherit')