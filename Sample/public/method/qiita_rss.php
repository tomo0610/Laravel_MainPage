<?php
// techacademyマガジンのRSSフィードからRSSを取得します
$feed = file_get_contents('https://techacademy.jp/magazine/feed');

// MAXの表示件数を設定
$max = 5;

// feed取得数
$cnt = 0;

// XML解析を行う上で、XMLで不正文字と扱われる対象を空文字に変換します
$invalid_characters = '/[^\x9\xa\x20-\xD7FF\xE000-\xFFFD]/';
$feed = preg_replace($invalid_characters, '', $feed);

// 文字列をXMLとして解析して、SimpleXMLElementクラスのインスタンスに変換
$rss = simplexml_load_string($feed);

// $rss->channel->itemではまず、
// xmlタグの1階層下にあるchannelタグにアクセスし、
// 最終的にはそのchannelタグの1階層下にある複数のitemタグにアクセスしています
// 複数のitemタグは配列扱いとなっているため、foreachでループさせる事が可能です
foreach($rss->channel->item as $item){
	// MAXの表示件数を超えたら終了
	if( $cnt >= $max ) break;

    // itemタグの1階層下にあるtitleタグを取得します
    $title = $item->title;

    // itemタグの1階層下にあるpubDateタグを取得し、年月日に変換します
    $date = date("Y年 n月 j日", strtotime($item->pubDate));

    // itemタグの1階層下にあるlinkタグを取得します
    $link = $item->link;

    // itemタグの1階層下にあるdescriptionタグを取得し、HTMLタグだけを削除します
    $description = strip_tags($item->description);

	// それぞれの情報を出力します
	$output .= '<li><a href="'. $link .'">' . $date . " " . $title . '</a></li><br>';
	$cnt++;
}

echo $output;