<?php

define('CURSCRIPT', 'help');

require './include/common.inc.php';
require './include/game.func.php';
include_once GAME_ROOT.'./include/game/itemplace.func.php';

$mixfile = config('mixitem',$gamecfg);
$shopfile = config('shopitem',$gamecfg);
$mapitemfile = config('mapitem',$gamecfg);
$synfile = config('synitem',$gamecfg);
$ovlfile = config('overlay',$gamecfg);
$presentfile = config('present',$gamecfg);
$boxfile = config('box',$gamecfg);
$vnmixfile = config('vnmixitem',$gamecfg);
include $mixfile;
include $vnmixfile;
$writefile = GAME_ROOT.TPLDIR.'/mixhelp.htm';

include config('npc',$gamecfg);
include config('addnpc',$gamecfg);
include config('evonpc',$gamecfg);
//for ($i=0; $i<=20; $i++) $p[$i]=$i; //？？？
for ($i=1; $i<=6; $i++) $itemlst[$i]=$i;

# 将evonpc加入npc队列
foreach($enpcinfo as $ekey => $enpcs)
{
	# evonpc在npcinfo中一定会有大类 所以只加入子类别
	foreach($enpcs as $sname => $enpc) $npcinfo[$ekey]['esub'][$sname] = $enpc;
}
# 将addnpc加入npc队列
foreach($anpcinfo as $akey => $anpcs)
{
	# 如果npc队列中没有该addnpc大类，则先加入大类
	if(!isset($npcinfo[$akey])) $npcinfo[$akey] = $anpcs;
	# 之后遍历每个子类addnpc，依次加入
	foreach($anpcs['sub'] as $aid => $anpc) $npcinfo[$akey]['asub'][$aid] = $anpc;
}
$npcinfo = get_npc_helpinfo($npcinfo);
//print_r($npcinfo[14]['esub']);

$ty1[1]=1; $ty1[2]=88; 
$ty2[1]=Array(5,'asub'); $ty2[2]=Array(6,'asub'); 
$ty2a[1]=Array(19,'asub'); #真红蓝
$ty3[1]=Array(11,'asub');
$ty4[1]=90; $ty4[2]=92;
//$ty5[1]=2; 
$ty5[1] = Array(2,'asub');
$ty6[1]=14; $ty6[2]=4; 
$ty6e[1]=Array(14,'esub'); #女主第二形态情报
$ty7[1]=Array(13,'asub'); 
$ty8[1]=Array(15,'asub'); 
$ty9[1]=22;
$ty10[1]=21;
$ty11[1]=Array(89,'asub'); 
$ty11e[1]=Array(89,'esub'); #电掣NPC第二形态情报
$ty12[1]=24;
$ty25a[1] = Array(25,'asub'); #佣兵NPC

if(filemtime($vnmixfile) > filemtime($writefile) ||filemtime($mixfile) > filemtime($writefile) || filemtime($shopfile) > filemtime($writefile) || filemtime($mapitemfile) > filemtime($writefile) || filemtime($synfile) > filemtime($writefile) || filemtime($ovlfile) > filemtime($writefile) || filemtime($presentfile) > filemtime($writefile) || filemtime($boxfile) > filemtime($writefile)){
	$mixitem = array();
	foreach($mixinfo as $mix){
		if($mix['class'] !== 'hidden')
		{
			//名字
			$mix['result'][0] = parse_nameinfo_desc($mix['result'][0]);
			//属性
			$mixitmsk = empty($mix['result'][4]) ? '' : parse_skinfo_desc($mix['result'][4],$mix['result'][1]);
			//类别
			$mixitmk = parse_kinfo_desc($mix['result'][1],$mix['result'][4]);

			$mixitem[$mix['class']][] = array('stuff' => $mix['stuff'], 'result' => array($mix['result'][0],$mixitmk,$mix['result'][2],$mix['result'][3],$mixitmsk));
		}
	}
	
	$mixclass = array(
		'wp'=> array('殴系武器','yellow'),
		'wk'=> array('斩系武器','yellow'),
		'wg'=> array('射系武器','yellow'),
		'wc'=> array('投系武器','yellow'),
		'wd'=> array('爆系武器','yellow'),
		'wf'=> array('灵系武器','yellow'),
		'wmu' => array('多重武器','yellow'),
		'w' => array('其他装备','yellow'),
		'h' => array('补给品','lime'),
		'pokemon'=> array('小黄系道具','yellow'),
		'fseed'=> array('种火系道具','lime'),
		'ocg'=> array('游戏王系道具','clan'),
		'key'=> array('KEY系道具','lime'),
		'cube'=> array('方块系道具','yellow'),
		'item'=> array('其他道具','yellow'),
		'titles'=> array('头衔奖励相关道具','sienna'),
		);
	$mixhelpinfo = '';
	foreach($mixitem as $class => $list){
		$classname = $mixclass[$class][0];
		$classcolor = $mixclass[$class][1];
		$mixhelpinfo .= "<p><span class=\"$classcolor\">{$classname}合成表</span>：</p>\n";
		$mixhelpinfo .= 
		"<table>
			<tr>
				<td class=\"b1\" height=20px><span>合成材料一</span></td>
				<td class=\"b1\"><span>合成材料二</span></td>
				<td class=\"b1\"><span>合成材料三</span></td>
				<td class=\"b1\"><span>合成材料四</span></td>
				<td class=\"b1\"><span>合成材料五</span></td>
				<td class=\"b1\"></td>
				<td class=\"b1\"><span>合成结果</span></td>
				<td class=\"b1\"><span>物品属性</span></td>
			</tr>
			";
		foreach($list as $val){
			if(!empty($val['result'][4])){$itmskword = '/'.$val['result'][4];}
			else{$itmskword = '';}
			if(!isset($val['stuff'][2])){$val['stuff'][2] = '-';}
			if(!isset($val['stuff'][3])){$val['stuff'][3] = '-';}
			if(!isset($val['stuff'][4])){$val['stuff'][4] = '-';}
			$mixhelpinfo .= "<tr>";
			for ($i=0; $i<=4; $i++)
			{
				$mixhelpinfo .= "<td class=\"b3\" ";
				if ($i==0)  $mixhelpinfo .= "height=20px";
				if ($val['stuff'][$i]!='-')
				{
					$tooltipinfo = get_item_place($val['stuff'][$i]);
					if(!empty($tooltipinfo)) $mixhelpinfo .= "><span tooltip=\"".$tooltipinfo."\" ";
				}
				$mixhelpinfo .= ">{$val['stuff'][$i]}</span></td>";
				//修复加入悬浮提示后出现的问题。
			}
//			$mixhelpinfo .= "<td class=\"b3\">→</td>
//					<td class=\"b3\" title=\"{$val['result'][1]}/{$val['result'][2]}/{$val['result'][3]}{$itmskword}\"><span>{$val['result'][0]}</span></td>
//					<td class=\"b3\"><span>{$val['result'][1]}/{$val['result'][2]}/{$val['result'][3]}{$itmskword}</span></td>
			$mixhelpinfo .= "<td class=\"b3\">→</td>
			<td class=\"b3\"><span>{$val['result'][0]}</span></td>
			<td class=\"b3\"><span>{$val['result'][1]}/{$val['result'][2]}/{$val['result'][3]}{$itmskword}</span></td>
				</tr>
				";
		}
		$mixhelpinfo .= "</table>\n";
	}

	$mixhelpinfo .= "\r <br><span class='evergreen'>此外，游戏中还包含由玩家提交的原创合成：</span><br> \r";

	# 玩家原创合成部分
	foreach($vn_mixinfo as $mix)
	{
		if($mix['class'] !== 'hidden')
		{
			//名字
			$mix['result'][0] = parse_nameinfo_desc($mix['result'][0]);
			//属性
			$mixitmsk = empty($mix['result'][4]) ? '' : parse_skinfo_desc($mix['result'][4],$mix['result'][1]);
			//类别
			$mixitmk = parse_kinfo_desc($mix['result'][1],$mix['result'][4]);
			
			$vmixitem[$mix['class']][] = array('name' => $mix['name'], 'stuff' => $mix['stuff'], 'result' => array($mix['result'][0],$mixitmk,$mix['result'][2],$mix['result'][3],$mixitmsk));
		}
	}
	
	foreach($vmixitem as $class => $list){
		$classname = $mixclass[$class][0];
		$classcolor = $mixclass[$class][1];
		$mixhelpinfo .= "<p><span class=\"$classcolor\">{$classname}合成表 - 玩家原创</span>：</p>\n";
		$mixhelpinfo .= 
		"<table>
			<tr>
				<td class=\"b1\" width=100px><span>配方作者</span></td>
				<td class=\"b1\" height=20px><span>合成材料一</span></td>
				<td class=\"b1\"><span>合成材料二</span></td>
				<td class=\"b1\"><span>合成材料三</span></td>
				<td class=\"b1\"><span>合成材料四</span></td>
				<td class=\"b1\"><span>合成材料五</span></td>
				<td class=\"b1\"></td>
				<td class=\"b1\"><span>合成结果</span></td>
				<td class=\"b1\"><span>物品属性</span></td>
			</tr>
			";
		foreach($list as $val){
			if(!empty($val['result'][4])){$itmskword = '/'.$val['result'][4];}
			else{$itmskword = '';}
			if(!isset($val['stuff'][2])){$val['stuff'][2] = '-';}
			if(!isset($val['stuff'][3])){$val['stuff'][3] = '-';}
			if(!isset($val['stuff'][4])){$val['stuff'][4] = '-';}
			$mixhelpinfo .= "<tr><td class=\"b3\">{$val['name']}</td>";
			for ($i=0; $i<=4; $i++)
			{
				$mixhelpinfo .= "<td class=\"b3\" ";
				if ($i==0)  $mixhelpinfo .= "height=20px";
				if ($val['stuff'][$i]!='-')
				{
					$tooltipinfo = get_item_place($val['stuff'][$i]);
					if(!empty($tooltipinfo)) $mixhelpinfo .= "><span tooltip=\"".$tooltipinfo."\" ";
				}
				$mixhelpinfo .= ">{$val['stuff'][$i]}</span></td>";
			}
			$mixhelpinfo .= "<td class=\"b3\">→</td>
			<td class=\"b3\"><span>{$val['result'][0]}</span></td>
			<td class=\"b3\"><span>{$val['result'][1]}/{$val['result'][2]}/{$val['result'][3]}{$itmskword}</span></td>
				</tr>
				";
		}
		$mixhelpinfo .= "</table>\n";
	}
	
	writeover($writefile,$mixhelpinfo);
}

$extrahead = <<<EOT
<STYLE type=text/css>
BODY {
	FONT-SIZE: 10pt;MARGIN: 0; color:#eee; FONT-FAMILY: "Trebuchet MS","Gill Sans","Microsoft Sans Serif",sans-serif;
}
A {
	COLOR: #eee
}
A:visited {
	COLOR: #eee
}
A:active {
	color: #98fb98;text-decoration:underline
}
P{ line-height:16px
}

DIV.help {
	PADDING-LEFT: 1em;PADDING-right: 1em
}

.subtitle2 {
	font-family: "微软雅黑"; color: #98fb98; width: 100%;font-size: 16px;font-weight:900;
}

DIV.FAQ {
	PADDING-LEFT: 1em; line-height:16px
}
DIV.FAQ DT {
	COLOR: #98fb98
}
DIV.FAQ DD {
	
}

</STYLE>
EOT;

include template('help');



?>
