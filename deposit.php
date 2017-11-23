

<!DOCTYPE html>
<html>
<head>
<title>CSGODouble.gg</title>
<meta charset="utf-8">

<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta property="og:image" content="http://csgodouble.gg/images/metadata.png" />
<meta property="og:description" content="CSGODouble.gg - Roulette" />
<meta property="og:title" content="CSGODouble.gg" />
<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "Organization",
  "name" : "CSGODouble.gg",
  "url" : "https://csgodouble.gg",
  "sameAs" : [
    "https://steamcommunity.com/groups/csgodouble_gg",
    "https://twitter.com/csgodoublegg",
    "https://www.facebook.com/CSGODouble.gg/"
  ]
}
</script>
<link href="https://fonts.googleapis.com/css?family=Raleway:400,300,600" rel='stylesheet' type='text/css'>
<link href="/css/new.css?v=8" type="text/css" rel="stylesheet">
<link id="style" href="/css/black.css?v=5" rel="stylesheet">
<script type="text/javascript" src="/js/jquery-2.2.1.min.js"></script>
<script type="text/javascript" src="/js/bootbox.min.js"></script>
<script src="/js/jquery.cookie.js"></script>

<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" type="text/css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css" media="screen,projection" />
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="/js/tinysort.min.js"></script>
<script src="https://cdn.socket.io/socket.io-1.4.5.js"></script>
<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
<link rel="icon" href="/images/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" sizes="57x57" href="/images/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/images/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/images/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/images/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/images/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/images/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/images/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/images/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/images/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192" href="/images/android-icon-192x192.png">
<script type="text/javascript">
		var DEPOSIT = true;		
	</script>
<script type="text/javascript" src="js/offers.js?v=126"></script>
</head>
<style>
	.reject{
		opacity:0.5;
	}
	.reject .price{
		background-color: #d21 !important;
		left: 0px !important;
	}
</style>
<body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-91768543-1', 'auto');
  ga('send', 'pageview');
  
</script>
<script type="text/javascript">

function resizeFooter() {
        var f = $('.footer').outerHeight(true);
        var w = $(window).outerHeight(true);
        $('body').css('margin-bottom',f);
}
$(window).resize(function() {resizeFooter();});
$(document).ready(function() {resizeFooter();});
</script>
<nav class="navbar navbar-default navbar-static-top" role="navigation">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a href="/" class="navbar-brand"><img src="/images/logo-d.png" height="25" width="210"></a>
</div>
<div id="navbar" class="navbar-collapse collapse">
<ul class="nav navbar-nav">
<li><a href="/deposit.php">Deposit</a></li>
<li><a href="/withdraw.php">Withdraw</a></li>
<li><a href="/weekly.php" style="color:#FFD700 !important">Leaderboard</a></li>
<li class="dropdown-button" data-activates="dropdown1" data-beloworigin="true"><a href="/rolls.php">Provably Fair</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
<a href="?login"><img style="margin-top: 3px;" src="/images/steam_login.png"></a>
</ul>
</div>
</div>
</nav>
<div class="modal fade" id="my64id">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title"><b>My SteamID64</b></h4>
</div>
<div class="modal-body">
<b></b> </div>
<div class="modal-footer">
<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
<script type="text/javascript">
  var SETTINGS = ["dark", "confirm","sounds","dongers","hideme","shortnames"];
  if (!String.prototype.format) {
    String.prototype.format = function() {
      var args = arguments;
      return this.replace(/{(\d+)}/g, function(match, number) { 
        return typeof args[number] != 'undefined'
          ? args[number]
          : match
        ;
      });
    };
  }
  function setCookie(key,value){
    var exp = new Date();
    exp.setTime(exp.getTime()+(365*24*60*60*1000));
    document.cookie = key+"="+value+"; expires="+exp.toUTCString();
  }
  function getCookie(key){
    var patt = new RegExp(key+"=([^;]*)");
    var matches = patt.exec(document.cookie);
    if(matches){
      return matches[1];
    }
    return "";
  }
  function formatNum(x){
    if(Math.abs(x)>=10000){
      return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
    return x;
  }
  $(document).ready(function(){
    for(var i=0;i<SETTINGS.length;i++){
      var v = getCookie("settings_"+SETTINGS[i]);
      if(v=="true"){
        $("#settings_"+SETTINGS[i]).prop("checked",true); 
      }else if(v=="false"){
        $("#settings_"+SETTINGS[i]).prop("checked",false);  
      }     
    }
  });
</script>
<ul id="contextMenu" class="dropdown-menu" role="menu" style="display:none">
<li><a tabindex="-1" href="#" data-act="0">Username</a></li>
<li><a tabindex="-1" href="#" data-act="1">Mute player</a></li>
<li><a tabindex="-1" href="#" data-act="2">Kick player</a></li>
<li><a tabindex="-1" href="#" data-act="3">Send credits</a></li>
<li><a tabindex="-1" href="#" data-act="4">Ignore</a></li>
</ul>
<div class="modal fade" id="settingsModal">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title"><b>Settings</b></h4>
</div>
<div class="modal-body">
<form>
<div class="checkbox">
<label>
<input type="checkbox" id="settings_dark" checked>
<strong>Enable dark theme</strong>
</label>
</div>
<div class="checkbox">
<label>
<input type="checkbox" id="settings_confirm" checked>
<strong>Confirm all bets over 10,000 credits</strong>
</label>
</div>
<div class="checkbox">
<label>
<input type="checkbox" id="settings_sounds" checked>
 <strong>Enable sounds</strong>
</label>
</div>
<div class="checkbox">
<label>
<input type="checkbox" id="settings_dongers">
<strong>Display in $ amounts</strong>
</label>
</div>
<div class="checkbox">
<label>
<input type="checkbox" id="settings_hideme">
<strong>Hide my profile link in chat</strong>
</label>
</div>
<div class="checkbox">
<label>
<input type="checkbox" id="settings_shortnames">
<strong>Hide ranks in chat</strong>
</label>
</div>
</form>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
<button type="button" class="btn btn-success" data-dismiss="modal" onclick="saveSettings()">Save changes</button>
</div>
</div>
</div>
</div>
<div class="modal fade" id="promoModal">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title"><b>Redeem Promo Code</b></h4>
</div>
<div class="modal-body">
<div class="form-group">
<label for="exampleInputEmail1">Promo code</label>
<input type='text' class='form-control' id='promocode' value=''> </div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
<button type="button" class="btn btn-success" data-dismiss="modal" onclick="redeem()">Redeem</button>
</div>
</div>
</div>
</div>
<script type="text/javascript">
function redeem(){
	var code = $("#promocode").val();
	$.ajax({
		url:"/scripts/_redeem.php?code="+code,
		success:function(data){		
			try{
				data = JSON.parse(data);
				console.log(data);
				if(data.success){
					bootbox.alert("Success! You've received "+data.credits+" credits.");					
				}else{
					bootbox.alert(data.error);
				}
			}catch(err){
				bootbox.alert("Javascript error: "+err);
			}
		},
		error:function(err){
			bootbox.alert("AJAX error: "+err);
		}
	});
}
</script>
<script>
function inlineAlert(x,y){
	$("#inlineAlert").removeClass("alert-success alert-danger alert-warning hidden");
	if(x=="success"){
		$("#inlineAlert").addClass("alert-success").html("<i class='fa fa-check'></i><b> "+y+"</b>");
	}else if(x=="error"){
		$("#inlineAlert").addClass("alert-danger").html("<i class='fa fa-exclamation-triangle'></i> "+y);
	}else if(x=="cross"){
		$("#inlineAlert").addClass("alert-danger").html("<i class='fa fa-times'></i> "+y);
	}else{
		$("#inlineAlert").addClass("alert-warning").html("<b>"+y+" <i class='fa fa-spinner fa-spin'></i></b>");
	}
}
</script>
<ul id="inspectMenu" class="dropdown-menu" role="menu" style="display:none">
<li><a tabindex="-1" href="#" data-act="0">Inspect in Game...</a></li>
</ul>
<div class="modal fade" id="confirmModal">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<div class="close" data-dismiss="modal">×</div>
<h4 class="modal-title"><b>Confirm</b></h4>
</div>
<div class="modal-body">
<label>Tradelink - <a href="https://steamcommunity.com/id/me/tradeoffers/privacy#trade_offer_access_url" target="_blank">Find my trade</a></label>
<input type="text" class="form-control steam-input" id="tradeurl" value="">
<div class="checkbox">
<label>
<input type="checkbox" id="remember" checked=""> Remember tradelink
</label>
</div>
</div>
<div class="modal-footer">
<button class="btn btn-danger" data-dismiss="modal">Close</button>
<button class="btn btn-success" id="offerButton" onclick="offer()">Confirm</button>
</div>
</div>
</div>
</div>
<div class="text-center">
<div style="display:inline-block">
<div class="alert alert-info">
<b><i class="fa fa-exclamation-circle"></i> After accepting the trade offer you MUST click the green "Get credits" button to recieve your credits. | Minimum deposit is 0.50 $ - 500 credits.</b>
</div>
<div id="inlineAlert" class="alert alert-success" style="font-weight:bold"><i class="fa fa-check"></i><b> Loaded 11 available items.</b></div>
<div class="panel panel-default text-left" id="offerPanel" style="display:none">
<div class="panel-heading">
<h3 class="panel-title"><b>Trade sent <i class="fa fa-download"></i></b></h3>
</div>
<div class="panel-body">
<span id="offerContent" style="line-height:34px"></span>
<div class="pull-right"><button class="btn btn-success" id="confirmButton" data-tid="0">Get credits</button></div>
</div>
</div>
<div class="panel panel-default text-left fw-6">
<div class="panel-heading">
<h3 class="panel-title"><b>Inventory: <span id="left_number">0</span> items</b></h3>
</div>
<div class="panel-body">
<div style="margin-bottom:10px">
<div style="display:inline-block;float:right">
<form class="form-inline">
<select class="form-control" id="orderBy">
<option value="1">Price descending</option>
<option value="2">Acending price</option>
<option value="3">Name A-Z</option>
</select>
</form>
</div>
<div style="overflow:hidden;padding-right:2px">
<input type="text" class="form-control" id="filter" placeholder="Search..." style="width:100%">
</div>
</div>
<div id="left" class="slot-group noselect">
<span class="reals"></span>
<span class="bricks">
<div class="placeholder"></div>
<div class="placeholder"></div>
<div class="placeholder"></div>
<div class="placeholder"></div>
<div class="placeholder"></div>
<div class="placeholder"></div>
<div class="placeholder"></div>
<div class="placeholder"></div>
<div class="placeholder"></div>
<div class="placeholder"></div>
<div class="placeholder"></div>
<div class="placeholder"></div>
</span>
</div>
</div>
</div>
<div class="panel panel-default text-left fw-4" style="vertical-align:top">
<div class="panel-heading">
<h3 class="panel-title"><b>Deposits</b></h3>
</div>
<div class="panel-body">
<button class="btn btn-success btn-lg" style="width:100%" onclick="showConfirm()" id="showConfirmButton">Deposit Items<div style="font-size:12px"><span id="sum">0</span> credits</div></button>
<div id="right" class="slot-group noselect">
<span class="reals"></span>
<span class="bricks">
<div class="placeholder"></div>
<div class="placeholder"></div>
<div class="placeholder"></div>
<div class="placeholder"></div>
<div class="placeholder"></div>
<div class="placeholder"></div>
<div class="placeholder"></div>
<div class="placeholder"></div>
</span>
</div>
</div>
</div>
</div>
</div>
<script type="text/javascript">
function saveSettings(){
  for(var i=0;i<SETTINGS.length;i++){
    setCookie("settings_"+SETTINGS[i],$("#settings_"+SETTINGS[i]).is(":checked"));
  }
  if($("#settings_dongers").is(":checked")){
    $("#balance").html("please reload");
  }else{
    $("#balance").html("please reload");
  }
}
</script>
<script src="/js/theme.js"></script>
<footer class="footer">
<div class="">
<div class="pull-left" style="overflow:hidden">
<a href="https://steamcommunity.com/groups/CSGODoubleGG_" target="_blank"><img class="rounded" alt="Steam Group" src="/images/social/steam_icon.png"></a>

 
<a href="https://www.facebook.com/CSGODouble.gg/" target="_blank"><img class="rounded" alt="Facebook" src="/images/social/facebook_icon.png"></a>
<a href="https://twitter.com/csgodoublegg" target="_blank"><img class="rounded" alt="Twitter" src="/images/social/twitter_icon.png"></a>
</div>
<div class="pull-right" style="overflow:hidden;">
<a href="http://csgo.steamanalyst.com/" target="_blank"><img src="images/social/sa.gif"></a>
</div>
<ul class="list-inline" style="display:inline-block;margin-top:10px">
<li>Copyright © 2017, CSGODouble.gg - All rights reserved.</li>
<li><a href="/tos.php">Terms of Service</a></li>
<li><a href="/faq.php">FAQ</a></li>
<li><a href="/support.php?new">Contact Us</a></li>
<li><a href="http://steampowered.com" target="_target">Powered by Steam</a></li>
</ul>
</div>
</footer>
</body>
</html>
