function getRSS(id, path)
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
}