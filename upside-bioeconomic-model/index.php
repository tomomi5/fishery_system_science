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
    <h2 class="japanese-title">Upside 生物経済モデル</h2>
    <hr class="title-line">
    <p>
        2018年、<a href="http://www.jfa.maff.go.jp/j/kikaku/kaikaku/suisankaikaku.html" target="_blank">水産政策の改革</a>が行われ、科学的知見による資源評価に基づく漁獲制限を基本とする管理方法を採用しながら、国内資源評価を増やす方針へと変更されます。すなわち、MSY(最大持続生産量)水準を資源管理の目標とする管理を目指します。この動向と、カリフォルニア大学サンタバーバラ校(UCSB)で行われた初期研究[参照: <a href="https://www.pnas.org/content/113/18/5125" target="_blank">Costello et al.(2016)</a>]からインスピレーションを受けて私たちの新しいプロジェクトが発足しました。私たちのプロジェクトの主な目的は、UCSBで開発されたUpside生物経済モデルを日本の漁業に適用することです。そうすることにより、私たちのプロジェクトが国や都道府県が代替政策戦略の実施に伴う潜在的な利益と結果のより良い理解に役立つことが期待されます。具体的には、下記の3つの異なる政策で将来50年間の予測を行いました。:     
    </p>
    <ol class="jp">
        <li><b>Business as usual</b> – 現在の漁獲死亡係数を維持し続ける漁獲</li>
        <li><b>FMSY</b> – 最大持続生産量を維持するレベルの漁獲</li>
        <li><b>Economically Optimal</b> – 経済効率を高め、利益最大化となる漁獲</li>
    </ol>
    <!-- English Ver. 
    <p>In 2018, the Government of Japan passed a new <a href="http://www.jfa.maff.go.jp/j/kikaku/kaikaku/suisankaikaku.html" target="_blank">National Fishing Reform</a>,increasing the number of national stock assessments while adopting newmanagement practices based on scientifically-driven catch limits, i.e. MSY-basedmanagement. Such a move prompted a new project whose inspiration stemmedfrom an initial study conducted at the University of California Santa Barbara(UCSB) [see <a href="" target="_blank">Costello et al. (2016)</a>]. The main goal of our project is to apply theupside bioeconomic model developed at UCSB in the context of Japanese fisheries. By doing so, it will help the national and prefectural governments tobetter   understand   the   potential gains and outcomes associated with the implementation of alternative policy strategies. Specifically, three distinct policyscenarios are evaluated when running projections up to 50 years in the future: </p>

    -->
    <p class="image-title">National Level</p>
    <img src="/iwateuni/images/upside-bioeconomic-model-national-level.png" alt="Upside Bioeconomic Model National Level" class="article-image upside-image">
    
    <p class="image-title">Prefectual Level</p>
    <img src="/iwateuni/images/upside-bioeconomic-model-prefectual-level.png" alt="Upside Bioeconomic Model National Level" class="article-image upside-image">
    
    
    <h3>プロジェクトの現状</h3>
    <p>86系群の水揚げデータに基づいて、系群単位のデータフレームを作成した後、MSY水準点(すなわちB/BMSYとF/FMSY)が推定され、その中の43%の系群が過剰漁獲されている事が判明しました。この歴史的傾向を、私たちのUpside生物経済モデルのインプットとして用いて、関心のある3つの変数を算出しました：(1)資源量、(2)漁獲量、(3)利益。予測された各変数は、どの政策を選択するかによって異なる傾向を示します。総計(または国内合計)の数字は現在、都道府県単位に配分しているので地域管理のツールとしても役立ちます。Integrating stochasticityと気候変動の不確実性を国単位・都道府県単位のモデルの両方で考慮することが、このプロジェクトの次の段階です。</p>
    <br>
    
    <h4>協力</h4>
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
    <a href="/iwateuni/portfolio-fisheries/" class="next-link">
        <div class="next-button left-button">
        &larr; Back<br>ポートフォリオ漁業
        </div>
    </a>


<!-- Link to Next Article -->
    <a href="/iwateuni/harvesters-behavior-in-fisheries/" class="next-link">
        <div class="next-button right-button">
        Next &rarr;<br>漁業者の行動分析
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
