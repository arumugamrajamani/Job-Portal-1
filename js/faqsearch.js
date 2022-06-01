$(document).ready(function() {
    // Trigger this when user click search in FAQ section
    $('#faq').on('click', '#faqsearch', function(){
        // Get the value of the search question
        let searchText = $('#faqsearch-text').val();    
        // Check if the search question is empty
        if($.trim(searchText) != ""){
            searchHighlight(searchText);
        } 
    })

    // Function for highlight search text
    function searchHighlight(searchText){  
        $(".highlight").contents().unwrap(); // removes on span with the class highlight
        $('.collapsed').each(function(index, content){  
            // Gets the each text/content of the .collapsed class            
            var content = $(content).text();   
            // “i” is used to ignoring cases and “g” is used to search patterns throughout the string           
            var searchExp = new RegExp(searchText, "ig");  
            // Check if the searchText is present in the content
            var matches = content.match(searchExp);
            // If matches is not null then highlight the searchText
            if(matches) {
                // Loop through the matches
                $(this).html(content.replace(searchExp, function(match){
                    return "<span class='highlight'>" + match + "</span>";
                }));
            }               
        }) 
    }
})

