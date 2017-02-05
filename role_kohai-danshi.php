<?php
	//--------------------------------------------
	// 舎弟系後輩男子変換処理
	// -------------------------------------------
	//一人称
	$i_talk = str_replace('私', 'ジブン', $i_talk);
	$i_talk = str_replace('わたし', 'ジブン', $i_talk);
	$i_talk = str_replace('あたし', 'ジブン', $i_talk);
	$i_talk = str_replace('ワタシ', 'ジブン', $i_talk);
	$i_talk = str_replace('アタシ', 'ジブン', $i_talk);
	$i_talk = str_replace('俺', 'ジブン', $i_talk);
	$i_talk = str_replace('おれ', 'ジブン', $i_talk);
	$i_talk = str_replace('オレ', 'ジブン', $i_talk);
	$i_talk = str_replace('僕', 'ジブン', $i_talk);
	$i_talk = str_replace('ぼく', 'ジブン', $i_talk);
	$i_talk = str_replace('ボク', 'ジブン', $i_talk);	
	$i_talk = str_replace('うち', 'ジブン', $i_talk);
	$i_talk = str_replace('ウチ', 'ジブン', $i_talk);
	$i_talk = str_replace('自分', 'ジブン', $i_talk);
	//二人称
	$i_talk = str_replace('君', 'センパイ', $i_talk);
	$i_talk = str_replace('キミ', 'センパイ', $i_talk);
	$i_talk = str_replace('そちら', 'センパイ', $i_talk);
	$i_talk = str_replace('ソチラ', 'センパイ', $i_talk);
	$i_talk = str_replace('あなた', 'センパイ', $i_talk);
	$i_talk = str_replace('アナタ', 'センパイ', $i_talk);
	$i_talk = str_replace('貴方', 'センパイ', $i_talk);
	$i_talk = str_replace('貴女', 'センパイ', $i_talk);
	$i_talk = str_replace('あんた', 'センパイ', $i_talk);
	$i_talk = str_replace('アンタ', 'センパイ', $i_talk);
	$i_talk = str_replace('おまえ', 'センパイ', $i_talk);
	$i_talk = str_replace('お前', 'センパイ', $i_talk);
	$i_talk = str_replace('てめえ', 'センパイ', $i_talk);
	$i_talk = str_replace('てめぇ', 'センパイ', $i_talk);
	//三人称

	//語尾
	$i_talk = str_replace('じゃん', 'ッス', $i_talk);
	$i_talk = str_replace('じゃね', 'ッス', $i_talk);
	$i_talk = str_replace('だけど', 'スけど', $i_talk);
	$i_talk = str_replace('ですけど', 'スけど', $i_talk);
	$i_talk = str_replace('です', 'ッス', $i_talk);
	$i_talk = str_replace('します', 'するッス', $i_talk);
	$i_talk = str_replace('だよ', 'ッス', $i_talk);
	$i_talk = str_replace('だね', 'ッスね', $i_talk);
	$i_talk = str_replace('だな', 'ッスね', $i_talk);
	$i_talk = str_replace('だろ', 'でしょ', $i_talk);
	$i_talk = str_replace('かい', 'ッスか', $i_talk);
	$i_talk = str_replace('かな', 'ッスかね', $i_talk);
	$i_talk = str_replace('かね', 'ッスかね', $i_talk);
	$i_talk = str_replace('かよ', 'ッスか', $i_talk);
	$i_talk = str_replace('さ。', 'ッス。', $i_talk);
	$i_talk = str_replace('だ。', 'ッス。', $i_talk);
	$i_talk = str_replace('である。', 'ッス。', $i_talk);
	$i_talk = str_replace('かもしれない', 'かもしれないッス', $i_talk);
	// テンプレ
	$i_talk = str_replace('ありがとう', 'あざッス', $i_talk);
	$i_talk = str_replace('ありがとうございます', 'あざーッス', $i_talk);
	$i_talk = str_replace('おはようございます', 'オス！', $i_talk);
	$i_talk = str_replace('お疲れさまでした', 'お疲れした！', $i_talk);

?>