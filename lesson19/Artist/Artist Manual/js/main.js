$(document).ready(function() {

    SyntaxHighlighter.defaults['toolbar'] = false;
    SyntaxHighlighter.all();

});

$(window).load(function(){
   function show_regular_mail(){
		$('body').html($('body').html().replace('web.online.servis-(-at-)-gmail.com','<a href="mailto:web.online.servis@gmail.com?subject=Support template Countdown Hourglass" target="_blank">web.online.servis@gmail.com</a>'));	
   };
   window.setTimeout( show_regular_mail, 2000 );
})