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
    <h2 class="english-title">Successful Fisheries in Japan</h2>
    <hr class="title-line">
    
    <img src="/iwateuni/images/successful-fisheries-in-japan.jpg" alt="Successful Fisheries in Japan" class="article-wide-image">
    <p>
        Japanese fisheries has been said that it is declining for a while. The fisheries used to be an industry that support local employment given the abundant resource stocks. It confronts the declining stocks, incomes, and recruitment of young workers. What can we do to revive Japanese fisheries? To lead Japanese fisheries to success, we need to find successful cases in the unique environment, culture and context of Japanese fisheries as model cases. “Success” needs to be defined and explored in terms of defining factors. A general definition of successful fisheries is discussed in a context of triple bottom line, which consists of natural resources/environmental, economic, and community/social sustainability. There are, however, no clear criteria for these three aspects as the success depends on the local context. In this project, we explore the currently succeeding fisheries by survey and through discussion with interdisciplinary scholars to find the locally specific definitions and factors in order to apply them to measure that leads to success. 
    </p>

</div>

<div class="next-page">
<!-- Link to Previous Article -->
    <a href="/iwateuni/en/harvesters-behavior-in-fisheries/" class="next-link">
        <div class="next-button left-button">
        &larr; Back<br>Harvesters Behavior in Fisheries
        </div>
    </a>


<!-- Link to Next Article -->
    <a href="/iwateuni/en/portfolio-fisheries/" class="next-link">
        <div class="next-button right-button">
        Next &rarr;<br>Portfolio Fisheries
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
