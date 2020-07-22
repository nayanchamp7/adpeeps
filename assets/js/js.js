jQuery(document).ready(function($){
    //Menu
	$('.menuBtn').click(function(){
		$(this).toggleClass('open');
        $('.menu').slideToggle();
    });
    $('.subMenu').prev('a').html(function(i,h){
        return h + '<em>&nbsp;</em>';
    }).click(function(e){
        if( $(e.target).is('em') ){
            e.preventDefault();
            $(this).toggleClass('plus-minus').next('.subMenu').slideToggle();
            return false;
        }
    });
});