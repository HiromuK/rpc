<?php
	//--------------------------------------------
	// お嬢様変換処理
	// -------------------------------------------
	$i_talk = str_replace('わたし', '私', $i_talk);
	$i_talk = str_replace('ワタシ', '私', $i_talk);
	$i_talk = str_replace('俺', '私', $i_talk);
	$i_talk = str_replace('おれ', '私', $i_talk);
	$i_talk = str_replace('オレ', '私', $i_talk);
	$i_talk = str_replace('僕', '私', $i_talk);
	$i_talk = str_replace('ぼく', '私', $i_talk);
	$i_talk = str_replace('ボク', '私', $i_talk);	
	$i_talk = str_replace('うち', '私', $i_talk);
	$i_talk = str_replace('ウチ', '私', $i_talk);
	$i_talk = str_replace('きみ', '貴方', $i_talk);	
	$i_talk = str_replace('あなた', '貴方', $i_talk);
	$i_talk = str_replace('アナタ', '貴方', $i_talk);
	$i_talk = str_replace('だ', 'ですわ', $i_talk);
	$i_talk = str_replace('だよ', 'ですわ', $i_talk);
	$i_talk = str_replace('だよね', 'ですわよね', $i_talk);
	$i_talk = str_replace('です', 'ですわ', $i_talk);
	$i_talk = str_replace('さん', '様', $i_talk);
	$i_talk = str_replace('こんにちわ', 'ごきげんよう', $i_talk);
	$i_talk = str_replace('こんにちは', 'ごきげんよう', $i_talk);

	//--------------------------------------------
	// テンプレ挿入
	// -------------------------------------------
	$i_talk = str_replace('temp01', 'ごきげんよう', $i_talk);
	$i_talk = str_replace('temp02', 'あらあらまぁまぁ', $i_talk);

?>
