<?php
	//--------------------------------------------
	// 小悪魔系後輩女子変換処理
	// -------------------------------------------
	//一人称
	$i_talk = str_replace('私', 'ワタシ', $i_talk);
	$i_talk = str_replace('わたし', 'ワタシ', $i_talk);
	$i_talk = str_replace('あたし', 'ワタシ', $i_talk);
	$i_talk = str_replace('俺', 'ワタシ', $i_talk);
	$i_talk = str_replace('おれ', 'ワタシ', $i_talk);
	$i_talk = str_replace('オレ', 'ワタシ', $i_talk);
	$i_talk = str_replace('僕', 'ワタシ', $i_talk);
	$i_talk = str_replace('ぼく', 'ワタシ', $i_talk);
	$i_talk = str_replace('ボク', 'ワタシ', $i_talk);	
	$i_talk = str_replace('自分', 'ワタシ', $i_talk);
	//二人称
	$i_talk = str_replace('君', 'センパイ', $i_talk);
	$i_talk = str_replace('キミ', 'センパイ', $i_talk);
	$i_talk = str_replace('あなた', 'センパイ', $i_talk);
	$i_talk = str_replace('アナタ', 'センパイ', $i_talk);
	$i_talk = str_replace('貴方', 'センパイ', $i_talk);
	$i_talk = str_replace('貴女', 'センパイ', $i_talk);
	$i_talk = str_replace('あんた', 'センパイ', $i_talk);
	$i_talk = str_replace('アンタ', 'センパイ', $i_talk);
	$i_talk = str_replace('おまえ', 'センパイ', $i_talk);
	$i_talk = str_replace('お前', 'センパイ', $i_talk);
	// 語尾
	$i_talk = str_replace('じゃん', 'ですよね～', $i_talk);
	$i_talk = str_replace('じゃね', 'ですよね～', $i_talk);
	$i_talk = str_replace('だけど', 'ですけど～', $i_talk);
	$i_talk = str_replace('ですけど', 'ですけど～', $i_talk);
	// テンプレ
	$i_talk = str_replace('私は', 'ワタシって～', $i_talk);
	$i_talk = str_replace('好きです。', '好きじゃないですか～？', $i_talk);
	$i_talk = str_replace('好きです', '好きじゃないですか～？', $i_talk);

?>