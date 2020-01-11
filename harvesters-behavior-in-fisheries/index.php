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
    <h2 class="japanese-title">漁業者の行動分析</h2>
    <hr class="title-line">
    <img src="/iwateuni/images/harvesters-behavior-in-fisheries.png" alt="Harvesters Behavior in Fisheries" class="article-wide-image">
    <p>
        資源管理政策の経済的影響を計測するためには、資源の収穫者(漁業では漁業者)の政策変更に対する反応を説明するモデルが必要である。私の研究は、先を見据えた動学的な収穫者の行動・意思決定をモデル化することに興味がある。それぞれの収穫者がなんらかの目的、例えば利益や効用を最大化するよう行動すると仮定してモデルを構築する。収穫者は多様な意思決定変数を持っており、漁業者であれば漁具・操業時間・ターゲット魚種・操業場所などがあるが、どの変数が重要かは、研究する問いや文脈によって異なる。私のジョブマーケットペーパーでは、漁業の航海日数が動学的に決定されていることを日ごとの漁獲データを用いてモデルを構築・推定した。また、別のプロジェクトでは、漁期の中での漁獲割当をどのタイミングで利用するかをアラスカのスケトウダラ漁業のデータを用いて推定した。   
    </p>

</div>

<div class="next-page">
<!-- Link to Previous Article -->
    <a href="/iwateuni/upside-bioeconomic-model/" class="next-link">
        <div class="next-button left-button">
        &larr; Back<br>Upside 生物経済モデル 
        </div>
    </a>


<!-- Link to Next Article -->
    <a href="/iwateuni/successful-fisheries-in-japan/" class="next-link">
        <div class="next-button right-button">
        Next &rarr;<br>日本における成功漁業
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
