@extends('MainPage/layout.common')

@section('title','事業紹介')
@section('descriotion','このサイトで展開している事業を紹介します')
@section('keyword','ポータルサイト,写真販売,干し芋,画像販売')

@section('mainContents')
<section>

	<h2>事業紹介</h2>
	
	<table class="ta1">
		<caption>事業一覧</caption>
		<tr>
			<th><a href="/MainPage_PhotoSale">画像販売事業</a></th>
			<td>自分で撮影した画像を販売しております。</td>
		</tr>
		<tr>
			<th><a href="/MainPage_DriedPotato">干し芋ファクトリー</a></th>
			<td>干し芋販売事業を行っています。(現在シーズンオフです)</td>
		</tr>
	</table>
	
</section>
@endsection
