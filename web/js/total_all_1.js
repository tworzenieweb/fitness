(function($) {
    
    var loginbox = $('#login-box');
    var originalTop = loginbox.css('top');
    
    $('.login-box', loginbox).on('click', function(e) {
        
        e.preventDefault();
        
        loginbox.animate({
            top: loginbox.css('top') != originalTop ? originalTop : 0
        }, 1000, function() {
            // Animation complete.
        });
        
    });
    
    
})(jQuery);