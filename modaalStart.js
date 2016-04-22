$(document).ready( function() {
    var platTekst = $('#platdiv').detach();
 
    
    
    
    // events 
    $('#plat').on('click', function() {
        console.log ("Geklikt");
        modaalObj.openen({inhoud: platTekst, breedte: 600});
    });
    
});