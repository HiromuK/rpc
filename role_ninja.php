<?php
	//--------------------------------------------
	// 忍者変換処理
	// -------------------------------------------
	$i_talk = str_replace('私', '拙者', $i_talk);
	$i_talk = str_replace('わたし', '拙者', $i_talk);
	$i_talk = str_replace('ワタシ', '拙者', $i_talk);
	$i_talk = str_replace('俺', '拙者', $i_talk);
	$i_talk = str_replace('おれ', '拙者', $i_talk);
	$i_talk = str_replace('オレ', '拙者', $i_talk);
	$i_talk = str_replace('僕', '拙者', $i_talk);
	$i_talk = str_replace('ぼく', '拙者', $i_talk);
	$i_talk = str_replace('ボク', '拙者', $i_talk);	
	$i_talk = str_replace('うち', '拙者', $i_talk);
	$i_talk = str_replace('ウチ', '拙者', $i_talk);
	$i_talk = str_replace('きみ', 'おぬし', $i_talk);	
	$i_talk = str_replace('あなた', 'おぬし', $i_talk);
	$i_talk = str_replace('アナタ', 'おぬし', $i_talk);
	$i_talk = str_replace('貴方', 'おぬし', $i_talk);
	$i_talk = str_replace('だ', 'でござる', $i_talk);
	$i_talk = str_replace('です', 'でござる', $i_talk);
?>