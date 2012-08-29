(function($) {
    
    var loginbox = $('#login-box');
    var originalTop = loginbox.css('top');
    
    $('.login-box', loginbox).on('click', function(e) {
        
        
        loginbox.animate({
            top: loginbox.css('top') != originalTop ? originalTop : 0
        }, 1000, function() {
            // Animation complete.
        });
        
    });
    
    
    var news = $('.news');
    
    $.getJSON(Routing.generate('news'), function(collection) {
        
        var i = 0;
        $.each(collection, function(index, value) {
           
           var d = new Date(value.created);
           
           
           var template = "<h4>" + value.title + "</h4>";
           
           template += "<div>" + value.body + "</div>";
           
           template += '<a href="' + Routing.generate('news_show', {'slug': value.slug}) 
               + '" class="tiny radius alert button">Czytaj więcej...</a>';
           
           template = '<div class="' + i == 0 ? 'show' : 'hide' + '">' + template + "</div>";
           
           news.append(template);
           i++;
        });
        
    });
    
    
//    $('form', loginbox).on('submit', function(e) {
//        e.preventDefault();
//        
//        $.post($(this).attr('action'), $(this).serialize(), function(data) {
//            
//            loginbox.html();
//            
//        });
//        
//    });
    
    
})(jQuery);