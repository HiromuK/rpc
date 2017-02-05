<?php
	//--------------------------------------------
	// 俺様変換処理
	// -------------------------------------------
	$i_talk = str_replace('私', '俺様', $i_talk);
	$i_talk = str_replace('わたし', '俺様', $i_talk);
	$i_talk = str_replace('ワタシ', '俺様', $i_talk);
	$i_talk = str_replace('おれ', '俺様', $i_talk);
	$i_talk = str_replace('オレ', '俺様', $i_talk);
	$i_talk = str_replace('僕', '俺様', $i_talk);
	$i_talk = str_replace('ぼく', '俺様', $i_talk);
	$i_talk = str_replace('ボク', '俺様', $i_talk);	
	$i_talk = str_replace('うち', '俺様', $i_talk);
	$i_talk = str_replace('ウチ', '俺様', $i_talk);
	$i_talk = str_replace('君', 'お前', $i_talk);
	$i_talk = str_replace('キミ', 'お前', $i_talk);
	$i_talk = str_replace('そちら', 'お前', $i_talk);
	$i_talk = str_replace('ソチラ', 'お前', $i_talk);
	$i_talk = str_replace('あなた', 'お前', $i_talk);
	$i_talk = str_replace('アナタ', 'お前', $i_talk);
	$i_talk = str_replace('貴方', 'お前', $i_talk);
	$i_talk = str_replace('です', 'だ', $i_talk);
	$i_talk = str_replace('である。', 'だ', $i_talk);

?>
