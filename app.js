$(function() {
    
    var ranNum = $(".ranNum");
    
    function invokePhp() {
        
        var request = $.ajax({
            url: "main.php",
            method: "POST",
            dataType: "text"
        });
        
        request.done(function(response) {
            ranNum.text("Losowa liczba z serwera to: " + response);        
        });
        
        request.fail(function(error) {
            ranNum.text("Coś poszło nie tak! :( Skontaktuj się z Adminem.");
        });
        
        
    }
    
    invokePhp();
    
});
