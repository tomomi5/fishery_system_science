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
    <h2 class="english-title">Upside Bioeconomic Model</h2>
    <hr class="title-line">
    <p>In 2018, the Government of Japan passed a new <a href="http://www.jfa.maff.go.jp/j/kikaku/kaikaku/suisankaikaku.html" target="_blank">National Fishing Reform</a>,increasing the number of national stock assessments while adopting newmanagement practices based on scientifically-driven catch limits, i.e. MSY-basedmanagement. Such a move prompted a new project whose inspiration stemmedfrom an initial study conducted at the University of California Santa Barbara(UCSB) [see <a href="" target="_blank">Costello et al. (2016)</a>]. The main goal of our project is to apply theupside bioeconomic model developed at UCSB in the context of Japanese fisheries. By doing so, it will help the national and prefectural governments tobetter   understand   the   potential gains and outcomes associated with the implementation of alternative policy strategies. Specifically, three distinct policyscenarios are evaluated when running projections up to 50 years in the future: </p>
    <ol class="en">
        <li><b>Business as usual</b> – assuming that current fishing mortality rates arekept unchecked</li>
        <li><b>FMSY</b> – catch at the level of maximum sustainable yield</li>
        <li><b>Economically Optimal</b> – where economic efficiency and thus profits aremaximized.</li>
    </ol>
   
    <p class="image-title">National Level</p>
    <img src="/iwateuni/images/upside-bioeconomic-model-national-level.png" alt="Upside Bioeconomic Model National Level" class="article-image upside-image">
    
    <p class="image-title">Prefectual Level</p>
    <img src="/iwateuni/images/upside-bioeconomic-model-prefectual-level.png" alt="Upside Bioeconomic Model National Level" class="article-image upside-image">
    
    
    <h4>Partners</h4>
    <div class="partners">
        <div>
            <img src="/iwateuni/images/edf.png" alt="EDF">
        </div>
        <div>
            <img src="/iwateuni/images/ucsb.png" alt="UCSB">
        </div>
    </div>

</div>

<div class="next-page">
<!-- Link to Previous Article -->
    <a href="/iwateuni/en/portfolio-fisheries/" class="next-link">
        <div class="next-button left-button">
        &larr; Back<br>Portfolio Fisheries
        </div>
    </a>


<!-- Link to Next Article -->
    <a href="/iwateuni/en/harvesters-behavior-in-fisheries/" class="next-link">
        <div class="next-button right-button">
        Next &rarr;<br>Harverters Behavior in Fisheries
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
