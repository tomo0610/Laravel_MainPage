@extends('MainPage/layout.common')

@section('title','画像販売')
@section('descriotion','自分で撮影した画像を主に販売しています。')
@section('keyword','画像販売,写真販売')

@section('mainContents')
<section>

<h2>画像販売</h2>

<table class="ta1">
	<caption>新しく追加したときに更新していきます</caption>
	<tr>
		<th><img src="assets/business/photoSale/images/1.jpg" alt="画像販売"></th>
		<td>
			<ul>
				<li>海のそばの公園から撮影した朝日です。</li>
				<li>
					<div class="storesjp-button" data-storesjp-item="5ecaca9934ef017a7cade001" data-storesjp-variation="5ecaca9934ef017a7cade004" data-storesjp-name="tomolans" data-storesjp-layout="layout_a" data-storesjp-lang="ja" ></div><script>(function(d,s,id){var st=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return;}var nst=d.createElement(s);nst.id=id;nst.src="//btn.stores.jp/button.js";nst.charset="UTF-8";st.parentNode.insertBefore(nst,st);})(document, "script", "storesjp-button");</script>
				</li>
			</ul>	
		</td>
	</tr>
</table>

</section>

@endsection
