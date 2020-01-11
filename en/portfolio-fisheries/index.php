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
    <h2 class="english-title">Portfolio Fisheries</h2>
    <hr class="title-line">
    
    <p>With the help of the “Japan Society for the Promotion of Science”, our group islooking at innovative ways to enhance resilience in   Japanese multispeciesfisheries. Using concepts borrowed from   Financial Engineering, this projectfocuses on the development of a portfolio fishing theory and associated policies,investigating different portfolios of target fish species and/or stocks that presentheterogeneous volatility in both abundance and price, aiming to achieve greatereconomic stability in Japanese fisheries.</p>
    
    <img src="/iwateuni/images/portfolio-fisheries-image-one.png" alt="Research Image" class="article-image">
    
    <p>Shifts in distribution and abundance of fish species are already occurring along the coasts of Japan, making it critical to understand their ecological and socio-economic ramifications. With the latter aspect in mind, this project exploresthe various adaptation strategies that Japan’s fishing communities should follow when faced with climate change uncertainties.</p>
    <br>
    <p>As such, the <b>objectives</b> of the portfolio fisheries project are 3-fold:</p>
    <ol class="en">
        <li>How should Japanese fisheries and related policies change as we start applying distinct portfolio approaches to fisheries management? (e.g. multispecies and multigears fisheries)</li>
        <li>What are the best strategies that can achieve economic stability under environmental and socio-economic uncertainties?</li>
        <li>What policies and market structures are best suited to support a portfolio theory approach to fishery management in Japan?</li>
    </ol>
    
    <h4>Partners</h4>
    <div class="partners">
        <div>
            <img src="/iwateuni/images/edf.png" alt="EDF">
        </div>
        <div>
            <img src="/iwateuni/images/japan-society.png" alt="UCSB">
        </div>
    </div>

</div>

<div class="next-page">



<!-- Link to Next Article -->
    <a href="/iwateuni/en/upside-bioeconomic-model/" class="next-link">
        <div class="next-button right-button">
        Next &rarr;<br>Upside Bioeconomic Model
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
