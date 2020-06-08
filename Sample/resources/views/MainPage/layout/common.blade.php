<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>@yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="@yield('descriotion')">
<meta name="keywords" content="@yield('keyword')">
<link rel="stylesheet" href="assets/tp_cool7/css/style.css">
<link rel="stylesheet" href="assets/tp_cool7/css/slide.css">
<link rel="stylesheet" href="assets/toppage/css/common.css">
<script type="text/javascript" src="assets/tp_cool7/js/openclose.js"></script>
<script type="text/javascript" src="assets/tp_cool7/js/fixmenu_pagetop.js"></script>
<script type="text/javascript" src="assets/toppage/js/siteCommon.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="assets/slick/slick.css" media="screen">
<link rel="stylesheet" type="text/css" href="assets/slick/slick-theme.css" media="screen">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<script src="assets/slick/slick.min.js"></script>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<meta name="google-site-verification" content="DP1sv-lpxSfx5xdaLWXsHAWGqYWIuSUGwzCqz8fjrUw" />
</head>

<body>

<header>
<div class="inner">
<h1 id="logo"><a href="/" style="text-decoration: none; font-size: 30px;">友の木.com</a></h1>
<div id="contact">
</div>
</div>
</header>

<!--PC用（801px以上端末）メニュー-->
<nav id="menubar">
	<ul class="inner">
		<li class="current drop_down_menu"><a href="/">ホーム<span>HOME</span></a>
			<ul>
				<li><a href="/">トップページ<span>TOPPAGE</span></a></li>
			</ul>
		</li>
		<li class="drop_down_menu"><a href="/MainPage_Company">事業内容<span>COMPANY</span></a>
			<ul>
				<li><a href="/MainPage_PhotoSale">画像販売<span>PHOTOSERVICE</span></a></li>
				<li><a href="/MainPage_DriedPotato">干し芋ファクトリー<span>SERVICE</span></a></li>
			</ul>
		</li>
	</ul>
</nav>
<!--小さな端末用（800px以下端末）メニュー-->
<nav id="menubar-s">
	<ul class="accordion-menu">
		<li>
			<div class="dropdownlink">ホーム<span>HOME</span>
				<i class="fa fa-chevron-down" aria-hidden="true"></i>
			</div>
			<ul class="submenuItems">
				<li><a href="/">ホーム<span>HOME</span></a></li>
			</ul>
		</li>
		<li>
			<div class="dropdownlink">事業内容<span>COMPANY</span>
				<i class="fa fa-chevron-down" aria-hidden="true"></i>
			</div>
			<ul class="submenuItems">
				<li><a href="/MainPage_PhotoSale">画像販売<span>PHOTOSERVICE</span></a></li>
				<li><a href="/MainPage_DriedPotato">干し芋ファクトリー<span>SERVICE</span></a></li>
			</ul>
		</li>
	</ul>
</nav>
	

<div id="contents" class="inner">
<div id="contents-in">

<div id="main">

	@yield('mainContents')

</div>
<!--/#main-->

<div id="sub">

<nav>
<h2>Yahoo RSS ニュース</h2>
<ul id="yahooRss" class="submenu">
</ul>
</nav>

<nav>
<h2>TechAcademy RSS ニュース</h2>
<ul id="techRss" class="submenu">
</ul>
</nav>

{{--  <section>

<h2>製品情報</h2>

<div class="list">
<a href="/MainPage_Service2">
<figure><img src="assets/tp_cool7/images/sample1.jpg" alt="写真の説明"></figure>
<h4>製品タイトル<span class="newicon">NEW</span></h4>
<p>サンプルテキスト。サンプルテキスト。</p>
</a>
</div>

<div class="list">
<a href="/MainPage_Service2">
<figure><img src="assets/tp_cool7/images/sample1.jpg" alt="写真の説明"></figure>
<h4>製品タイトル</h4>
<p>サンプルテキスト。サンプルテキスト。</p>
</a>
</div>

<div class="list">
<a href="/MainPage_Service2">
<figure><img src="assets/tp_cool7/images/sample1.jpg" alt="写真の説明"></figure>
<h4>製品タイトル</h4>
<p>サンプルテキスト。サンプルテキスト。</p>
</a>
</div>

</section>  --}}

</div>
<!--/#sub-->

</div>
<!--/#contents-in-->

{{--  右側の要素  --}}
<div id="side">

<section>

<h2>製品情報</h2>

<div class="list">
<a href="/MainPage_PhotoSale">
<figure><img src="assets/business/photoSale/images/1.jpg" alt="画像販売"></figure>
<h4>画像販売<span class="newicon">NEW</span></h4>
<p>画像販売事業を展開しています</p>
</a>
</div>

<div class="list">
<a href="/MainPage_DriedPotato">
<figure><img src="assets/business/driedPotato/images/2.jpg" alt="干し芋ファクトリー"></figure>
<h4>干し芋ファクトリー<span class="newicon">NEW</span></h4>
<p>現在シーズンオフ</p>
</a>
</div>

</section>

</div>
<!--/#side-->

</div>
<!--/#contents-->

<footer>

<div id="footermenu" class="inner">
</div>
<!--/footermenu-->

<div id="copyright">
<small>Copyright&copy; <a href="/">ドイヤさん人参</a> All Rights Reserved.</small>
<span class="pr"><a href="http://template-party.com/" target="_blank">《Web Design:Template-Party》</a></span>
</div>

</footer>

<p class="nav-fix-pos-pagetop"><a href="#">↑</a></p>

<!--小さな端末用（800px以下端末）メニュー-->
<script type="text/javascript">
if (OCwindowWidth() <= 800) {
	open_close("newinfo_hdr", "newinfo");
}
</script>

<!--メニュー開閉ボタン-->
<div id="menubar_hdr" class="close"></div>
<!--メニューの開閉処理条件設定　800px以下-->
<script type="text/javascript">
if (OCwindowWidth() <= 800) {
	open_close("menubar_hdr", "menubar-s");
}
</script>

<!--サブメニュー開閉ボタン-->
<div id="accordion_hdr" class="close"></div>
<!--サブメニューの開閉処理条件設定　800px以下-->
<script type="text/javascript">
if (OCwindowWidth() <= 800) {
	open_close("accordion_hdr", "accordion-menu");
}
</script>

<script>
{{-- RSS取得 --}}
// HTMLドキュメントの解析後に実行
window.addEventListener('DOMContentLoaded', function() {

	getRSS("yahooRss", "method/yahoo_rss.php")
	getRSSFeed("techRss", "method/techacademy_rss.php")
 
})

{{--  function getRSS(id, path)
{
	// XMLHttpRequestのインスタンスを作成
	var req = new XMLHttpRequest();
	// 読み込み時の処理を設定
	req.onreadystatechange = function() {
		// readyState=4は全てのデータを受信済み、
		// status=200は正常に処理されたことを意味します
		if( req.readyState == 4 && req.status == 200 ) {
			// 結果を代入
			document.getElementById(id).innerHTML = req.responseText;
		}
	}
	
	// 接続先のURLやメソッドを設定します
	req.open( "GET", path);
 
	// リクエストをサーバに送信
	req.send();
}

function getRSSFeed(id, path)
{
	// 
	var request = new XMLHttpRequest();
	request.open('GET', path, true);
	request.addEventListener('load', function (response) {
	  // id属性を持つタグに取得したテキストを挿入する
	  document.getElementById(id).innerHTML = request.responseText;
	});
	request.send();
}  --}}

// スライダーバナースクリプト
$(function() {
		$('.slider').slick({
			autoplay: true, //オートプレイ
			autoplaySpeed: 5000, //オートプレイの切り替わり時間
			dots: true, //下の点々
			easing: 'ease-in-out', //スライドの動きを制御
		});
	});

	$(function() {
		var Accordion = function(el, multiple) {
		  this.el = el || {};
		  // more then one submenu open?
		  this.multiple = multiple || false;
		  
		  var dropdownlink = this.el.find('.dropdownlink');
		  dropdownlink.on('click',
						  { el: this.el, multiple: this.multiple },
						  this.dropdown);
		};
		
		Accordion.prototype.dropdown = function(e) {
		  var $el = e.data.el,
			  $this = $(this),
			  //this is the ul.submenuItems
			  $next = $this.next();
		  
		  $next.slideToggle();
		  $this.parent().toggleClass('open');
		  
		  if(!e.data.multiple) {
			//show only one menu at the same time
			$el.find('.submenuItems').not($next).slideUp().parent().removeClass('open');
		  }
		}
		
		var accordion = new Accordion($('.accordion-menu'), false);
	  })
</script>

</body>
</html>
{{--  {{ SassCompiler::run("assets/toppage/scss/", "assets/toppage/css/") }}  --}}