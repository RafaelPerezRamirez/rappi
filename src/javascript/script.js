/**
 * @var {string} time - interval time
*/
var time;
/**
 * Show content and items with animation
 */
function showInfo(){
    var windowsize = $(window).width();
    if (windowsize > 679) {
        time = 80;
        addClasses(time);
    }else{
        setTimeout(function(){
            $('.main-content').addClass('mainanimation');
        }, 500);
        $('.menu-button').on('click', function(){
            time = 40;
            addClasses(time);
        })
        $('.header-item').on('click', function(){
            $(this).closest('.item-loop').find('.item-internal-content').slideToggle();
        })
    }
}
/**
 * Add a class to items with a interval
 * @param {int} time - interval time
 */
function addClasses(time){
    $('.item-loop').each(function(i){
        var row = $(this);
        setTimeout(function() {
            row.addClass('showitem');
        }, time*i);
    })
}
$( document ).ready(function() {
    showInfo();
});
