load_contents(track_page); //load content

$("#load_more_button").click(function (e) { //user clicks on button
    track_page++; //page number increment everytime user clicks load button
    load_contents(track_page); //load content
});

//Ajax load function
function load_contents(track_page){
    $('.animation_image').show(); //show loading image
    
    $.post( 'fetch_pages.php', {'page': track_page}, function(data){
        
        if(data.trim().length == 0){
            //display text and disable load button if nothing to load
            $("#load_more_button").text("No more records!").prop("disabled", true);
        }
        
        $("#results").append(data); //append data into #results element
        
        //scroll page to button element
        $("html, body").animate({scrollTop: $("#load_more_button").offset().top}, 800);
    
        //hide loading image
        $('.animation_image').hide(); //hide loading image once data is received
    });
}