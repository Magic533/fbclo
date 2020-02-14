<?php
require 'binom_click_api.php';
$old_price = '899 EUR';
$new_price = '2 EUR';
$link = 'https://nl.tertut.space/click?pid=1727&offer_id=1869&sub1='. $subacc . '&sub2=' . $getClick->DataClick[clickid] . '&sub5=' . $fbp;
?>

<!DOCTYPE html><html lang="fr"><head>
  <base href="">

<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<meta name="robots" content="noindex, nofollow, noarchive">
<meta name="referrer" content="no-referrer">
<meta content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" name="viewport">
<title>Félicitations!</title>
<meta content="notranslate" name="google">
<link href="be/favicon.ico" rel="shortcut icon" type="image/x-icon" />

<script>function getURLParameter(d){d=d.replace(/[\[]/,"\\[").replace(/[\]]/,"\\]");var a=new RegExp("[\\?&]"+d+"=([^&#]*)").exec(location.search);return null===a?"":decodeURIComponent(a[1].replace(/\+/g," "))}function dateOffset(j,a){var l=new Boolean(null==j||0==j||void 0==j||""==j),e=new Date(Date.now()-24*j*60*60*1000);1==l&&(j=0);var k=["Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi"],i=["Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre"];return null!=!a&&0!=!a&&void 0!=!a?e.getDate()+" "+i[e.getMonth()]:"day_name_only"==a&&l?k[e.getDay()]:"top_date"==a&&l?k[e.getDay()]+", "+e.getDate()+" "+i[e.getMonth()]+" "+e.getFullYear():void 0}!function(){var b;try{for(b=0;10>b;++b){history.pushState({},"","#")}onpopstate=function(a){a.state&&location.replace("#")}}catch(b){}}();</script>
<link href="be/css/clean3.css" rel="stylesheet">
</head>
<body oncontextmenu="return!1" onload="setButtonHeight(),autospin1()">
 
    
<header>
		  <div class="logo-wrap">
		    <div class="container">
		      <div class="row">
		        <div class="col-xs-12 col-md-8 col-md-offset-2 ">
		          <table style="width: 100%;">
		            <tbody><tr>
		              <td class="logo">
		                <img id="logo" class="clickable" src="be/logo.png">
		              </td>
		              <td class="lang">
		                
		              </td>
		            </tr>
		          </tbody></table>
		        </div>
		      </div>
		    </div>
		  </div>
		  <div class="slogan-wrap">
		    <div class="container">
		      <div class="row">
		        <div class="col-xs-12 col-md-8 col-md-offset-2 slogan text-xs-left">
		          PROGRAMME DE FIDÉLISATION
		        </div>
		      </div>
		    </div>
		  </div>
		</header>        
<!--    
<div id="header">
<span class="menu"></span>
<span><img src="be/images/logo.png" style="margin:5px 0 0 10px; float:left;"></span>
<h3><span id="headline">PROGRAMME DE FIDÉLISATION</span></h3><span class="icon"></span>
</div>
-->
<div id="container">
<div align="center" id="firstpage">
<div class="date" id="topDate" style="padding-bottom:10px;margin:0">
<script>document.write(dateOffset(0,"top_date"));</script> 
</div>
<div style="margin-bottom:2px">
<div id="subheadline">
<p style="font-size:18px"><b>Félicitations!</b></p>
<p style="padding-top:10px">Aujourd'hui vous avez de la chance!</p>
</div>
<div class="intro" style="padding-top:5px">
Tous les <span id="today"><script>document.write(dateOffset(0,"day_name_only"));</script></span> nous sélectionnons 7 utilisateurs <script>document.write(getURLParameter("browser"));</script>Facebook pour donner l'opportunité de gagner des prix de Samsung. Tournez la roue pour savoir quel prix vous obtiendrez!
</div>
<div id="wheelCon">
<img class="spinAround2 transparent" height="501" id="wheel" src="be/images/pw_ix.png" width="501"> <input id="pressButton" onclick="spin()" style="top: 106.2px;" type="button">
<!--<div><img class="animated rotateIn" id="devMockup" src="be/images/ixo.png" style="display: block; left: 96.5px; top: 33px;"></div>-->
</div>
</div>
<div id="secondpage">
<div class="congrats">
<h4>
<a href="#" style="cursor:pointer!important"   rel="noreferrer">
<font color="#3C5A96">Félicitations!<br>Vous avez gagné Samsung Galaxy S20!</font>
</a>
</h4>
</div>
<div class="congrats" style="text-align:left">
<ol>
<li>Cliquez sur SÉLECTIONNEZ, en face de la couleur que vous aimez. Après cela, vous serez redirigé vers le site de notre sponsor</li>
<li>Sur le site du sponsor, entrez vos nom et prénom, ainsi que l'adresse de livraison. Soyez attentif, les champs sont remplis de lettres anglaises</li>
<li>Votre cadeau sera envoyé par service de messagerie à l'adresse indiquée dans les 5 jours</li>
</ol>
<b>IMPORTANT:</b> Les cadeaux peuvent se terminer n'importe quand, choisissez plus vite!
</div>
<div class="timer">Offre valable pour <font color="red"><b><span id="mins">4</span> minutes et <span id="hsecs">31</span> secondes</b></font></div>
<div class="prize">
<table>
<tbody>
<tr>
<th></th>
<td style="padding:10px 5px 10px 0;text-align:center"><img src="be/images/ix-s.png" style="max-width:100px"></td>
<td style="line-height:1.6">
<p style="text-align:left"><a href="#" style="cursor:pointer!important"  rel="noreferrer"><span class="name">Samsung Galaxy S20 128GB (Cosmic Gray)</span></a></p>
<p><span class="smallfont">8K VIDEO + 64MP CAMERA</span></p>
<p class="regular_price">Prix régulier: <s class="red_text"><script>document.write(getURLParameter("pr"));</script><?php echo $old_price; ?></s></p>
<p class="your_price">Votre prix: <span><script>document.write(getURLParameter("yp"));</script><?php echo $new_price; ?></span></p>
<p class="remaining"><b>Pièces: <span>1</span></b></p>
<div>
<a class="qu-take-it" href="<?php echo $link; ?>"  onclick="navigator.sendBeacon('<?= $getClick->getLPClickURL(); ?>')" style="cursor:pointer!important"  rel="noreferrer"> SÉLECTIONNEZ </a>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<div class="prize">
<table>
<tbody>
<tr>
<th></th>
<td style="padding:10px 5px 10px 0;text-align:center"><img src="be/images/ix-g.png" style="max-width:100px"></td>
<td style="line-height:1.6">
<p style="text-align:left"><a href="#" style="cursor:pointer!important"   rel="noreferrer"><span class="name">Samsung Galaxy S20 128GB (Cloud Blue)</span></a></p>
<p><span class="smallfont">8K VIDEO + 64MP CAMERA</span></p>
<p class="regular_price">Prix régulier: <s class="red_text"><script>document.write(getURLParameter("pr"));</script><?php echo $old_price; ?></s></p>
<p class="your_price">Votre prix: <span><script>document.write(getURLParameter("yp"));</script><?php echo $new_price; ?></span></p>
<p class="remaining"><b>Pièces: <span>1</span></b></p>
<div>
<a class="qu-take-it" href="<?php echo $link; ?>"  onclick="navigator.sendBeacon('<?= $getClick->getLPClickURL(); ?>')" style="cursor:pointer!important" rel="noreferrer"> SÉLECTIONNEZ </a>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
<div class="container">
<div class="comments">
<div class="wi_like_wrap border_bottom">
<span class="like_people"><span class="like_people_images"><span class="like_people_image_wrap"><img class="like_people_image" height="24" src="be/images/like_user_1.jpg" width="24"></span> <span class="like_people_image_wrap"><img class="like_people_image" height="24" src="be/images/like_user_2.jpg" width="24"></span></span>
<span class="like_people_text">A aimé 1537 personnes</span></span>
</div>
<div class="wi_buttons border_bottom">
<div class="wi_buttons_wrap">
<span class="like_wrap"><span class="item_like _i"><i class="i_like"></i> <b class="v_like">1537</b></span> <span class="item_share is_empty _i"><i class="i_share"></i> <b class="v_share">234</b></span></span> <span class="item_views"><i class="i_views"></i> <b class="v_views">544K</b></span>
</div>
</div>
<center>
<font face="arial"></font>
<table border="0" cellpadding="4" cellspacing="0" style="padding-top:10px;font-size:13px" width="100%">
<tbody id="comments_list">
<tr>
<td width="40" valign="top" align="right" class="photo_avatar"><img src="be/images/fr11.jpg"></td>
<td align="left" valign="top">
<div class="comment_name">Melville Cinq-Mars</div>
<div class="comment_text">Honnêtement, je voulais Galaxy S20, mais pas aujourd'hui ... Eh bien, je pense que le Galaxy S10 n'est pas si mal non plus?</div>
<div class="comments__item__meta">
<div class="item_date">
Il y a 2 minutes</div>
</div>
<div class="pi_links">
<span class="like_wrap">
<span class="pi_link">J’aime</span>
</span>
<span class="pi_reply_wrap"> ·
<span>Répondre</span>
</span>
<span class="pi_acts_link">
<i class="i_icon"></i>
</span>
</div>
</td>
</tr>
<tr>
<td colspan="2">
<hr>
</td>
</tr>
<tr>
<td width="40" valign="top" align="right" class="photo_avatar"><img src="be/images/fr12.jpg"></td>
<td align="left" valign="top">
<div class="comment_name">Xarles Soucy</div>
<div class="comment_text">J'ai gagné 1 tour gratuit, mais je n'ai pas gagné le prix. Puis-je avoir une autre opportunité?</div>
<div class="comments__item__meta">
<div class="item_date">
Il y a 5 minutes
</div>
</div>
<div class="pi_links">
<span class="like_wrap">
<span class="pi_link">J’aime</span>
</span>
<span class="pi_reply_wrap"> ·
<span>Répondre</span>
</span>
<span class="pi_acts_link">
<i class="i_icon"></i>
</span>
</div>
</td>
</tr>
<tr>
<td colspan="2">
<hr>
</td>
</tr>
<tr>
<td width="40" valign="top" align="right" class="photo_avatar"><img src="be/images/fr13.jpg"></td>
<td align="left" valign="top">
<div class="comment_name">Théodore Brisebois</div>
<div class="comment_text">Je viens de recevoir un nouvel Galaxy Watch! C'est le meilleur prix de tous!</div>
<div class="comments__item__meta">
<div class="item_date">
Il y a 7 minutes</div>
</div>
<div class="pi_links">
<span class="like_wrap">
<span class="pi_link">J’aime</span>
</span>
<span class="pi_reply_wrap"> ·
<span>Répondre</span>
</span>
<span class="pi_acts_link">
<i class="i_icon"></i>
</span>
</div>
</td>
</tr>
<tr>
<td colspan="2">
<hr>
</td>
</tr>
<tr>
<td width="40" valign="top" align="right" class="photo_avatar"><img src="be/images/fr14.jpg"></td>
<td align="left" valign="top">
<div class="comment_name">Alaine Huot</div>
<div class="comment_text">Au début, je pensais que c'était une blague, mais ce matin, j'ai été amené un tout nouveau Galaxy Buds!</div>
<div class="comments__item__meta">
<div class="item_date">
Il y a 11 minutes
</div>
</div>
<div class="pi_links">
<span class="like_wrap">
<span class="pi_link">J’aime</span>
</span>
<span class="pi_reply_wrap"> ·
<span>Répondre</span>
</span>
<span class="pi_acts_link">
<i class="i_icon"></i>
</span>
</div>
</td>
</tr>
<tr>
<td colspan="2">
<hr>
</td>
</tr>
<tr>
<td width="40" valign="top" align="right" class="photo_avatar"><img src="be/images/fr15.jpg"></td>
<td align="left" valign="top">
<div class="comment_name">Alphonsine Grenier</div>
<div class="comment_text">Mon Galaxy S10 est arrivé aujourd'hui dans la matinée! Je suis heureux!!!!</div>
<div class="comments__item__meta">
<div class="item_date">
Il y a 22 minutes
</div>
</div>
<div class="pi_links">
<span class="like_wrap">
<span class="pi_link">J’aime</span>
</span>
<span class="pi_reply_wrap"> ·
<span>Répondre</span>
</span>
<span class="pi_acts_link">
<i class="i_icon"></i>
</span>
</div>
</td>
</tr>
<tr>
<td colspan="2">
<hr>
</td>
</tr>
<tr>
<td width="40" valign="top" align="right" class="photo_avatar"><img src="be/images/fr16.jpg"></td>
<td align="left" valign="top">
<div class="comment_name">Maurelle Doiron</div>
<div class="comment_text">J'étais très heureux de gagner le Galaxy S8. Je ne pense toujours pas que c'est vrai!</div>
<div class="comments__item__meta">
<div class="item_date">
Il y a 31 minutes</div>
</div>
<div class="pi_links">
<span class="like_wrap">
<span class="pi_link">J’aime</span>
</span>
<span class="pi_reply_wrap"> ·
<span>Répondre</span>
</span>
<span class="pi_acts_link">
<i class="i_icon"></i>
</span>
</div>
</td>
</tr>
<tr>
<td colspan="2">
<hr>
</td>
</tr>
<tr>
<td width="40" valign="top" align="right" class="photo_avatar"><img src="be/images/fr17.jpg"></td>
<td align="left" valign="top">
<div class="comment_name">Archard Coupart</div>
<div class="comment_text">J'ai gagné le Samsung Galaxy S10, mais je l'ai déjà, puis-je avoir un Galaxy S20 à la place?</div>
<div class="comments__item__meta">
<div class="item_date">
Il y a 34 minutes
</div>
</div>
<div class="pi_links">
<span class="like_wrap">
<span class="pi_link">J’aime</span>
</span>
<span class="pi_reply_wrap"> ·
<span>Répondre</span>
</span>
<span class="pi_acts_link">
<i class="i_icon"></i>
</span>
</div>
</td>
</tr>
<tr>
<td colspan="2">
<hr>
</td>
</tr>
</tbody>
</table>
<div class="show_next_wrap">
<span class="show_next">Les commentaires suivants</span>
</div>

</center>
</div>
</div>
<div class="fixed_footer">
<img src="be/images/clip_footer_3.png" alt="" class="clip">
<input type="text" placeholder="Votre message" class="footer_input">
<img src="be/images/footer_right.png" alt="" class="btn_send">
</div>
<script type="text/javascript">var page=getURLParameter("page"),brand=getURLParameter("device_brand");function exit_a1(){window.onbeforeunload=null,window.location="http://"+getURLParameter("td")+"/click"}var conMid,mydate=new Date,year=mydate.getFullYear(),month=mydate.getMonth(),day=mydate.getDate(),weekday=mydate.getDay(),count=1,headline=document.getElementById("headline"),topDate=document.getElementById("topDate"),today=document.getElementById("today"),con=document.getElementById("container"),whCon=document.getElementById("wheelCon"),dWheel=document.getElementById("wheel"),button=document.getElementById("pressButton"),device=document.getElementById("devMockup"),first=document.getElementById("firstpage"),second=document.getElementById("secondpage");function setButtonHeight(){conMid=(whCon.getBoundingClientRect().bottom-whCon.getBoundingClientRect().top)/2,button.style.top=conMid-button.offsetHeight/2-0.2*button.offsetHeight/2+"px"}function spin(){switch(count){case 1:button.disabled=!0,dWheel.className="spinAround",setTimeout(function(){button.disabled=!1,alert("Vous avez un essai supplémentaire!\n\nRéessayez!"),autospin2()},6800);break;case 2:dWheel.className="spinAround2",setTimeout(function(){dWheel.className=dWheel.className+" transparent"},6800),setTimeout(function(){device.style.display="block",device.style.left=whCon.offsetWidth/2-device.offsetWidth/2+"px",device.style.top=conMid-device.offsetHeight/2+"px"},7000),setTimeout(function(){first.innerHTML="<img src='be/images/loading.gif'>",first.style.padding="195px 0px",setTimeout(function(){first.parentNode.removeChild(first),second.style.display="block",con.insertBefore(second,con.firstChild),setInterval("countdown()",1000)},1500)},9000)}count++}function autospin2(){spin()}function autospin1(){alert("Félicitations, "+getURLParameter("browser")+' utilisateur!\n\nVous êtes l\'une des 7 personnes sélectionnées pour participer à notre programme de fidélité! Vous avez la possibilité d\'obtenir 1 cadeau sur 4!\n\nCliquez sur OK pour commencer!'),document.getElementById("pressButton").click()}function countdown(){var e=parseInt(document.getElementById("mins").innerHTML),f=parseInt(document.getElementById("hsecs").innerHTML),g=0,h=0;0!==e&&0===f?(g=e-1,h=59):0!==e||0!==f?(g=e,h=f-1):0===e&&0===f&&(g=e,h=f),h<10&&(h="0"+h),document.getElementById("mins").textContent=g,document.getElementById("hsecs").textContent=h};</script>

</div>

</body></html>