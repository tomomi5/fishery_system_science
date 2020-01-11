<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/iwateuni/en/header.php";
   include_once($path);
?>


<div class="white-background">   
    
<!-- Research Page Background -->
<img src="/iwateuni/images/research-background.png" alt="Background Image" class="research-background">


<!-- Research Article Box -->
<div class="article-box english-article">
    <h2 class="english-title">Harvesters Behavior in Fisheries</h2>
    <hr class="title-line">
    <img src="/iwateuni/images/harvesters-behavior-in-fisheries.png" alt="Harvesters Behavior in Fisheries" class="article-wide-image">
    <p>
        To measure economic impacts of natural resource management policy, we need good models that address harvesters' response to the policy change. My research is about developing models of harvester behavior, particularly focusing on the dynamic aspect of their decisions. We assume that harvesters maximize their objective functions, such as profit or utility, by choosing their decision variables. Harvesters have a wide range of margins, and the importance of each margin depends on fisheries and context. In my job market paper, I modeled harvesters’ choice on fishing trip duration using daily catch data and dynamic discrete choice model. In another project of mine, seasonal dynamics in quota use allocation in Alaskan pollock fishery is investigated.  
    </p>

</div>

<div class="next-page">
<!-- Link to Previous Article -->
    <a href="/iwateuni/en/upside-bioeconomic-model/" class="next-link">
        <div class="next-button left-button">
        &larr; Back<br>Upside Bioeconomic Model 
        </div>
    </a>


<!-- Link to Next Article -->
    <a href="/iwateuni/en/successful-fisheries-in-japan/" class="next-link">
        <div class="next-button right-button">
        Next &rarr;<br>Successful Fisheries in Japan
        </div>
    </a>
</div>

</div>
 

    
    
    <footer>
        ©2020 All Rights Reserved <br>
        Website by <a href="http://tomomim.com/" target="_blank" class="linkto-tomo">Tomomi Matsuzaki</a>
    </footer>
    
    
    
    
    
<!-- Script is here -->    
<script> 
// Scrolled Nav    
$(function() {
    var header = $(".w3-whitee");
  
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
        if (scroll >= 50) {
            header.addClass("scrolled");
        } else {
            header.removeClass("scrolled");
        }
    });
  
});
    
// RESPONSIVE Navigation
    
// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
    } else {
        mySidebar.style.display = 'block';
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
    

</script>
    
</body>
</html>  
