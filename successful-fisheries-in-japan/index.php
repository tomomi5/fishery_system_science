<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/iwateuni/header.php";
   include_once($path);
?>


<div class="white-background">   
    
<!-- Research Page Background -->
<img src="/iwateuni/images/research-background.png" alt="Background Image" class="research-background">


<!-- Research Article Box -->
<div class="article-box japanese-article jp">
    <h2 class="japanese-title">日本における成功漁業</h2>
    <hr class="title-line">
    
    <img src="/iwateuni/images/successful-fisheries-in-japan.jpg" alt="Successful Fisheries in Japan" class="article-wide-image">
    <p>
        日本の漁業は斜陽産業と言われて久しい。かつてはその恵まれた資源の元で、きついが稼げる仕事として特に地方の若手の雇用を支えていた漁業も、現在は資源量が減り、収入も減少し、人手不足に悩まされるのが現状である。その中で、日本の漁業を再興するには、日本独特の環境・文化・文脈の元で成功しているモデルケースを発掘し、そこから成功の定義、さらに要因を探っていく必要がある。一般的な漁業の成功としては、トリプルボトムラインという概念がある。これは、資源・環境、経済、そして社会・コミュニティの3つの側面を両立させるような産業が成功しているとする概念である。しかし、厳密には漁業の成功とは地域の文脈によるため、3つの側面それぞれに対する明確な基準はない。この研究では、学際的に漁業の成功と要因を現場ベースの聞き取り調査を中心に探り、地域特有の成功の定義、その要因と、成功へ導くための施策を明らかにする。
    </p>

</div>

<div class="next-page">
<!-- Link to Previous Article -->
    <a href="/iwateuni/harvesters-behavior-in-fisheries/" class="next-link">
        <div class="next-button left-button">
        &larr; Back<br>漁業者の行動分析
        </div>
    </a>


<!-- Link to Next Article -->
    <a href="/iwateuni/portfolio-fisheries/" class="next-link">
        <div class="next-button right-button">
        Next &rarr;<br>ポートフォリオ漁業
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
