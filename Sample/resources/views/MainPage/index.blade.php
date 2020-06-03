@extends('MainPage/layout.common')

@section('title','ドイヤさん人参')
@section('descriotion','ドイヤさん人参')
@section('keyword','ドイヤさん人参,写真販売,干し芋')


@section('mainContents')
	<!--スライドショー-->
	<aside id="mainimg">
	<ul class="slider">
	<li><a href="/MainPage_Company" target="_blank"><img src="assets/toppage/images/1.jpg" alt=""></a></li>
	<li><a href="/MainPage_DriedPotato" target="_blank"><img src="assets/business/driedPotato/images/1.jpg" alt=""></a></li>
	</ul>
	</aside>

	<section id="new">
	<h2>更新情報・お知らせ</h2>
	<dl>
	<dt>2020/06/03</dt>
	<dd>トップページ作成途中<span class="newicon">NEW</span></dd>
	</dl>
	</section>

	<section>

	<iframe width="560" height="315" src="https://www.youtube.com/embed/TXqzg2iXklE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

	{{-- <h2>テンプレートのご利用前に必ずお読み下さい</h2>

	<h3>利用規約のご案内</h3>
	<p>このテンプレートは、<a href="http://template-party.com/">Template Party</a>にて無料配布している『ビジネスサイトサイト向け 無料ホームページテンプレート tp_cool7』です。必ずダウンロード先のサイトの<a href="http://template-party.com/read.html">利用規約</a>をご一読の上でご利用下さい。</p>
	<p><strong class="color1">■HP最下部の著作表示『Web Design:Template-Party』は無断で削除しないで下さい。</strong><br>
	わざと見えなく加工する事も禁止です。</p>
	<p><strong class="color1">■下部の著作を外したい場合は</strong><br>
	<a href="http://template-party.com/">Template-Party</a>の<a href="http://template-party.com/member.html">ライセンス契約</a>を行う事でHP下部の著作を外す事ができます。</p>

	<h3>当テンプレートにはお問い合わせフォーム（自動フォーム：試用版）がセットされています</h3>
	<p><a href="/MainPage_Contact">contact.html</a>と同じ３項目のお問い合わせフォームを簡単に使えるようにセットしています。</p>
	<p><strong class="color1">■自動フォームを使う場合（※編集に入る前にご確認下さい）</strong><br>
	あなたのメールアドレス設定と、簡単な編集だけで使えます。<a href="http://template-party.com/file/formgen_manual_set2.html" target="_blank">詳しくはこちらのマニュアルをご覧下さい。</a></p>
	<p><strong class="color1">■自動フォームを使わない場合</strong><br>
	テンプレートに梱包されている「form.html」「confirm.html」「finish.html」の3枚のファイルを削除して下さい。</p>

	<h3>メニューなどの開閉ブロック（openclose.js）について</h3>
	<p>当テンプレートの開閉ブロックパーツは<a href="http://www.crytus.co.jp/">有限会社クリタス様</a>提供のプログラムを使用しています。openclose.jsファイルは改変せずにご利用下さい。<br>
	また、当サイトのテンプレート以外に使いたいなど、「プログラムのみ」を使う場合は<a href="http://template-party.com/free_program/openclose_license.html">こちらの規約</a>をお守り下さい。</p>

	<h3>当テンプレートの詳しい使い方は</h3> --}}

	</section>	
@endsection
