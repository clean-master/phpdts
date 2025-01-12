<?php

define('CURSCRIPT', 'valid');

require './include/common.inc.php';
//require './include/user.func.php';

if(!$cuser||!$cpass) { gexit($_ERROR['no_login'],__file__,__line__); }
if($gamestate < 20) { gexit($_ERROR['no_start'],__file__,__line__); }
//if($gamestate >= 30) { gexit($_ERROR['valid_stop'],__file__,__line__); }

//$result = $db->query("SELECT * FROM {$gtablepre}users WHERE username='$cuser'");
if(!$udata) { gexit($_ERROR['login_check'],__file__,__line__); }
//$udata = $db->fetch_array($result);
$wingames = $udata['wingames'];
if($udata['password'] != $cpass) { gexit($_ERROR['wrong_pw'], __file__, __line__); }
if($udata['groupid'] <= 0) { gexit($_ERROR['user_ban'], __file__, __line__); }

if($gamestate >= 30 && $udata['groupid'] < 6 && $cuser != $gamefounder) {
	gexit($_ERROR['valid_stop'],__file__,__line__);
}

# 入场时可选内定称号表 t1-随机选3 t2-固定出现
include_once GAME_ROOT.'./include/game/clubslct.func.php';
$t1_list = valid_getclublist_t1($udata);
$t2_list = valid_getclublist_t2($udata);

if($mode == 'enter') {
	if($iplimit) {
		$result = $db->query("SELECT * FROM {$gtablepre}users AS u, {$tablepre}players AS p WHERE u.ip='{$udata['ip']}' AND ( u.username=p.name AND p.type=0)");
		if($db->num_rows($result) > $iplimit) { gexit($_ERROR['ip_limit'],__file__,__line__); }
	}	

	// 加入游戏时，检查是否需要转化新版成就数据结构
	if(!empty($udata['achievement']) && empty($udata['achrev']))
	{
		include_once GAME_ROOT.'./include/game/achievement.func.php';
		$alist = get_achlist();
		$new_ach = Array();$cpl = Array(); $prc = Array();
		foreach($alist as $i => $iarr)
		{
			if($i <= 57)
			{
				$cpl[$i]=check_achievement($i,$n);
				$prc[$i]=fetch_achievement($i,$n);
				//新成就储存结构内，只会保存有进度的成就
				if(!empty($cpl[$i]) || !empty($prc[$i]))
				{
					// 到达999阶段的成就 替换为配置中预设的达成等级
					if($cpl[$i] == 999)
					{
						if($i == 16 || $i == 17 || $i == 18 || $i == 19) 
						{
							//特判：四个结局成就阶段会变更为1...就这样了！
							$cpl[$i] = 1;
						}
						else
						{
							$cpl[$i] = $iarr['lvl'] ?: count($iarr['name']);
						}
					}
					$new_ach[$i]['l'] = $cpl[$i] ?: 0;
					$new_ach[$i]['v'] = $prc[$i] ?: 0;
				}
			}
		}
		$new_ach = json_encode($new_ach);
		$db->query("UPDATE {$gtablepre}users SET achrev='$new_ach' WHERE username='".$udata['username']."'" );
		$cpl = Array(); $prc = Array();
	}

	//$ip = real_ip();
	$ip = $udata['ip'];
	$db->query("UPDATE {$gtablepre}users SET gender='$gender', nick='$nick', icon='$icon', motto='$motto', killmsg='$killmsg', lastword='$lastword' WHERE username='".$udata['username']."'" );
	if($validnum >= $validlimit) {
		gexit($_ERROR['player_limit'],__file__, __line__);
	}
	$result = $db->query("SELECT * FROM {$tablepre}players WHERE name = '$cuser' AND type = 0");
	if($db->num_rows($result)) {
		gexit($_ERROR['player_exist'], __file__, __line__);
	}
	if ($gender !== 'm' && $gender !== 'f'){
		$gender = 'm';
	}
	$validnum++;
	$alivenum++;
	$name = $cuser;
	$pass = $cpass;
	$gd = $gender;
	$type = 0;
	$endtime = $validtime = $now;
	$sNo = $validnum;
	$hp = $mhp = $hplimit;
	$sp = $msp = $splimit;
	$rand = rand(0,15);
	$att = 95 + $rand;
	$def = 105 - $rand;
	$pls = 0;
	$killnum = 0;
	$lvl = 0;
	$exp = $areanum * 20;
	$money = 20;
	$rage = 0;
	$pose = 3;
	$tactic = 2;
	$icon = $icon ? $icon : rand(1,$iconlimit);

	# 入场内定称号合法性检查
	if($club && !in_array($club,$t1_list) && !in_array($club,$t2_list)) $club = 17;

	$wep2 = '拳头'; $wep2k = 'WN'; $wep2e = 0; $wep2s = $nosta; $wep2sk = '';
	$arb = $gd == 'm' ? '男生校服' : '女生校服';
	$arbk = 'DB'; $arbe = 5; $arbs = 15; $arbsk = '';
	$arh = $ara = $arf = $art = '';
	$arhk = $arak = $arfk = $artk = '';
	$arhsk = $arask = $arfsk = $artsk = '';
	$arhe = $arae = $arfe = $arte = 0;
	$arhs = $aras = $arfs = $arts = 0;
	
	for ($i=0; $i<=6; $i++){$itm[$i] = $itmk[$i] = $itmsk[$i] = ''; $itme[$i] = $itms[$i] = 0;}
	$itm[1] = '面包'; $itmk[1] = 'HH'; $itme[1] = 120; $itms[1] = 15;
	$itm[2] = '矿泉水'; $itmk[2] = 'HS'; $itme[2] = 140; $itms[2] = 15;
	//$itm[6] = '银白盒子'; $itmk[6] = 'p'; $itme[6] = 1; $itms[6] = 1; $itmsk[6] = 'ps';
	$dice3 = rand(1,3);
	if($dice3 == 1){
		$itm[3] = '★Eska Sparking Water★';
	}elseif($dice3 == 2){
		$itm[3] = '★Canada Dry★';
	}else{
		$itm[3] = '★Monster Energy★';
	}
	$itmk[3] = 'HB'; $itme[3] = 70; $itms[3] = 15;
	$itm[5] = 'GRAND OPENING 「开门大吉」'; $itmk[5] = 'p000'; $itme[5] = 1; $itms[5] = 1;

	if ($wingames <=1){
	$itm[6] = '银白盒子'; $itmk[6] = 'ps'; $itme[6] = 1; $itms[6] = 1; $itmsk[6] = '';
	}
	
	$weplist = openfile(config('stwep',$gamecfg));
	do { 
		$index = rand(1,count($weplist)-1); 
		list($wep,$wepk,$wepe,$weps,$wepsk) = explode(",",$weplist[$index]);
	} while(!$wepk);

	$stitemlist = openfile(config('stitem',$gamecfg));
	/*do { 
		$index = rand(1,count($stitemlist)-1); 
		list($itm[3],$itmk[3],$itme[3],$itms[3],$itmsk[3]) = explode(",",$stitemlist[$index]);
	} while(!$itmk[3]);*/
	do { 
		$index = rand(1,count($stitemlist)-1); 
		list($itm[4],$itmk[4],$itme[4],$itms[4],$itmsk[4]) = explode(",",$stitemlist[$index]);
	} while(!$itmk[4] || ($itmk[3] == $itmk[4]));

	if ($name == 'Amarillo_NMC') {
		$msp += 500;$mhp += 500;$hp += 500;$sp += 500;
		$att += 200;$def += 200;
		$exp += 3000;$money = 20000;$rage = 255;$pose = 1;$tactic = 3;
		$itm[1] = '死者苏生'; $itmk[1] = 'HB'; $itme[1] = 2000; $itms[1] = 400; $itmsk[1] = '';
		$itm[2] = '移动PC'; $itmk[2] = 'EE'; $itme[2] = 50; $itms[2] = 1;
		$itm[3] = '超光速快子雷达'; $itmk[3] = 'ER'; $itme[3] = 32; $itms[3] = 1;$itmsk[3] = 2;
		$itm[4] = '凸眼鱼'; $itmk[4] = 'Y'; $itme[4] = 1; $itms[4] = 30;$itmsk[4] = '';
		$itm[5] = '楠叶特制营养剂'; $itmk[5] = 'ME'; $itme[5] = 50; $itms[5] = 12;
		$itm[6] = '测试道具'; $itmk[6] = 'ME'; $itme[6] = 50; $itms[6] = 12;
		$wep = '神圣手榴弹';$wepk = 'WC';$wepe = 8765;$weps = 876;$wepsk = 'd';
		$arb = '守桥人的长袍';$arbk = 'DB'; $arbe = 3200; $arbs = 100; $arbsk = 'A';
		$arh = '千年积木';$arhk = 'DH'; $arhe = 1600; $arhs = 120; $arhsk = 'c';
		$ara = '皇家钻戒';$arak = 'DA'; $arae = 1600; $aras = 120; $arask = 'a';
		$arf = '火弩箭';$arfk = 'DF'; $arfe = 1600; $arfs = 120; $arfsk = 'M';
		$art = '贤者之石';$artk = 'A'; $arte = 9999; $arts = 999; $artsk = 'H';
		$wp=$wk=$wg=$wc=$wd=$wf=600;
	
	}elseif($name == '霜火协奏曲') {
		$art = '击败思念的纹章';$artk = 'A'; $arte = 1; $arts = 1; $artsk = 'zZ';
	}elseif($name == '时期') {
		$art = '击败鬼畜级思念的纹章';$artk = 'A'; $arte = 1; $arts = 1; $artsk = 'zZ';
	}elseif($name == '枪毙的某神' || $name == '精灵们的手指舞') {
		$art = 'TDG地雷的证明';$artk = 'A'; $arte = 1; $arts = 1; $artsk = 'zZ';
	}

	# 格式化道具数据
	if(!empty($itm))
	{
		foreach($itm as $i => $value)
		{
			${'itm'.$i} = $value; ${'itmk'.$i} = $itmk[$i]; ${'itme'.$i} = $itme[$i]; ${'itms'.$i} = $itms[$i];
			if(isset($itmsk[$i])) ${'itmsk'.$i} = $itmsk[$i];
		}
	}

	$state = 0;
	$bid = 0;
	$inf = $teamID = $teamPass = '';

	# 初始化曲集
	include_once config('audio',$gamecfg);
	$clbpara['valid_bgmbook'] = $regular_bgm;
	$clbpara['bgmbook'] = $clbpara['valid_bgmbook'];

	# 显示开场剧情模态框
	$clbpara['noskip_dialogue'] = 'opening';

	//$nick=$udata['nick'];
	/*$nicks=$udata['nicks'];
	if (($nicks=='')||($nick=='')){
		$nick='参展者';
		$nicks='参展者';
		$db->query("UPDATE {$gtablepre}users SET nick='$nick', nicks='$nicks' WHERE username='".$udata['username']."'" );
	}else{
		if (strpos($nicks,$nick)===false){
			$nick='弱子';
		}
	}*/

	$nicks = $udata['nicksrev']['nicks'];
	if(empty($nicks) || empty($nick))
	{
		titles_get_new($udata,0);
		$nick = 0;
		$db->query("UPDATE {$gtablepre}users SET nick='$nick',nicksrev='{$udata['nicksrev']}' WHERE username='".$username."'" );
	}
	$nick = in_array($nick,$nicks) ? $nick : 120; 

	# 初始化头衔tooltip
	$nickinfo = titles_get_desc($nick);

	# 初始化头衔的入场效果
	$nickarr =  get_title_valid($nick);
	if(!empty($nickarr))
	{
		foreach($nickarr as $nkey => $nvue)
		{
			if($nkey == 'clbpara' && !empty($$nkey))
			{
				$$nkey = array_merge($$nkey,$nvue);
			}
			else 
			{
				if(strpos($nvue,'[:')!==false && strpos($nvue,':]')!==false)
				{
					if(!isset($$nkey)) $$nkey = 0;
					$$nkey = parse_title_valid_operators($$nkey,$nvue);
				}
				else 
				{
					$$nkey = $nvue;
				}
			}
		}
	}

	# Generate 3 random number and place it in $clbpara for future usage.
	# Let's call this 梦2记系统
	$clbpara['randver1'] = rand(1,128);
	$clbpara['randver2'] = rand(1,256);
	$clbpara['randver3'] = rand(1,1024);

	# 格式化插入player数据
	$ndata = update_db_player_structure(1);
	foreach($ndata as $key => $ntype)
	{
		if(isset($$key)) $ndata[$key] = $$key; 
		elseif(strpos($ntype,'int')!==false) $ndata[$key] = 0;
		else $ndata[$key] = '';
	}

	# 初始化套装信息
	include_once GAME_ROOT.'./include/game/itemmain.func.php';
	reload_set_items($ndata);

	# 初始化称号技能
	if($ndata['club']) updateskill($ndata);

	$ndata = player_format_with_db_structure($ndata);
	if(!empty($ndata)) $db->array_insert("{$tablepre}players", $ndata);
	
	//$db->query("INSERT INTO {$tablepre}players (name,pass,type,endtime,validtime,gd,sNo,icon,club,hp,mhp,sp,msp,att,def,pls,lvl,`exp`,money,bid,inf,rage,pose,tactic,killnum,state,wp,wk,wg,wc,wd,wf,teamID,teamPass,wep,wepk,wepe,weps,arb,arbk,arbe,arbs,arh,arhk,arhe,arhs,ara,arak,arae,aras,arf,arfk,arfe,arfs,art,artk,arte,arts,itm0,itmk0,itme0,itms0,itm1,itmk1,itme1,itms1,itm2,itmk2,itme2,itms2,itm3,itmk3,itme3,itms3,itm4,itmk4,itme4,itms4,itm5,itmk5,itme5,itms5,itm6,itmk6,itme6,itms6,wepsk,arbsk,arhsk,arask,arfsk,artsk,itmsk0,itmsk1,itmsk2,itmsk3,itmsk4,itmsk5,itmsk6,nick,nicks) VALUES ('$name','$pass','$type','$endtime','$validtime','$gd','$sNo','$icon','$club','$hp','$mhp','$sp','$msp','$att','$def','$pls','$lvl','$exp','$money','$bid','$inf','$rage','$pose','$tactic','$state','$killnum','$wp','$wk','$wg','$wc','$wd','$wf','$teamID','$teamPass','$wep','$wepk','$wepe','$weps','$arb','$arbk','$arbe','$arbs','$arh','$arhk','$arhe','$arhs','$ara','$arak','$arae','$aras','$arf','$arfk','$arfe','$arfs','$art','$artk','$arte','$arts','$itm[0]','$itmk[0]','$itme[0]','$itms[0]','$itm[1]','$itmk[1]','$itme[1]','$itms[1]','$itm[2]','$itmk[2]','$itme[2]','$itms[2]','$itm[3]','$itmk[3]','$itme[3]','$itms[3]','$itm[4]','$itmk[4]','$itme[4]','$itms[4]','$itm[5]','$itmk[5]','$itme[5]','$itms[5]','$itm[6]','$itmk[6]','$itme[6]','$itms[6]','$wepsk','$arbsk','$arhsk','$arask','$arfsk','$artsk','$itmsk[0]','$itmsk[1]','$itmsk[2]','$itmsk[3]','$itmsk[4]','$itmsk[5]','$itmsk[6]','$nick','$nicks')");
	$db->query("UPDATE {$gtablepre}users SET lastgame='$gamenum' WHERE username='$name'");

	if($udata['groupid'] >= 6 || $cuser == $gamefounder){
		addnews($now,'newgm',$name,"{$sexinfo[$gd]}{$sNo}号",$ip,$nick);
	}else{
		addnews($now,'newpc',$name,"{$sexinfo[$gd]}{$sNo}号",$ip,$nick);
	}
	
	if($validnum >= $validlimit && $gamestate == 20){
		$gamestate = 30;
	}
	//$gamestate = $validnum < $validlimit ? 20 : 30;
	save_gameinfo();
	

	if (isset($_GET['is_new'])) {
		echo json_encode(array(
			"page" => "validOver",
			"nick" => $nickinfo,
			"name" => $cuser,
			"sub" => $sexinfo[$gd].$sNo.'号',
			"avatar" => $gd.'_'.$icon.'.gif',
			"nowHp" => $hp,
			"maxHp" => $mhp,
			"nowMp" => $sp,
			"maxMp" => $msp,
			"attack" => $att,
			"defense" => $def,
			"gift" => $clubinfo[$club],
			"weapon" => $wep,
			"randomItem1" => $itm[3],
			"randomItem2" => $itm[4],
		));
	} else {
		include template('validover');
	}
} elseif($mode == 'notice') {
	//include template('notice');
	header("Location: game.php");
} elseif($mode == 'tutorial') {
	if(!isset($tmode)){$tmode = 0;}
	$nexttmode = $tmode +1;
	include template('tutorial');
} else {
	extract($udata);
	$result = $db->query("SELECT * FROM {$tablepre}players WHERE name = '$cuser' AND type = 0");
	if($db->num_rows($result)) {
		header("Location: game.php");exit();
	}

	if($validnum >= $validlimit) {
		gexit($_ERROR['player_limit'],__file__,__line__);
	}
	$iconarray = get_iconlist($icon);
	$utlist = get_utitlelist();
	$select_icon = $icon;
	if (isset($_GET['is_new'])) {
		// 获取可选称号
		$nickList = array_map(function($val) use ($titles_list, $title_desc) {
			return array(
				'id' => $val,
				'title' => $titles_list[$val],
				'desc' => $title_desc[$val]['title'],
			);
		}, $nicksrev['nicks']);
		// 获取可选普通内定称号
		$normalGiftList = array_map(function($val) use ($clubinfo) {
			return array(
				'id' => $val,
				'title' => $clubinfo[$val]
			);
		}, $t2_list);
		// 获取可选特殊内定称号
		$specialGiftList = array_map(function($val) use ($clubinfo) {
			return array(
				'id' => $val,
				'title' => $clubinfo[$val]
			);
		}, $t1_list);
		echo json_encode(array(
			"page" => "valid",
			"name" => $username,  // 用户名
			"avatar" => $select_icon, // 头像
			"gender" => $gender,  // 性别
			"nick" => $udata['nick'], // 头衔
			"nickList" => $nickList,  // 可选头衔
			"normalGiftList" => $normalGiftList,  // 可选普通内定称号
			"specialGiftList" => $specialGiftList,  // 可选特殊内定称号
			"motto" => $motto,  // 口头禅
			"killMessage" => $killmsg,  // 杀人宣言
			"lastWord" => $lastword,  // 遗言
		));
	} else {
		include template('valid');
	}
}

function makeclub() {
	global $wp,$wk,$wg,$wc,$wd,$wf,$money,$mhp,$msp,$hp,$sp,$att,$def;
	$wp = $wk = $wg = $wc = $wd = $wf = 0;
	$dice = rand(0,105);
	if($dice < 10)		{$club = 1;$wp = 30;}//殴25
	elseif($dice < 20)	{$club = 2;$wk = 30;}//斩25
	elseif($dice < 30)	{$club = 3;$wc = 30;}//投25
	elseif($dice < 40)	{$club = 4;$wg = 30;}//射25
	elseif($dice < 50)	{$club = 5;$wd = 20;}//爆25
	elseif($dice < 55)	{$club = 6;}//移动、探索消耗减
	elseif($dice < 60)	{$club = 7;}//P(HACK)=1
	elseif($dice < 65)	{$club = 8;}//查毒可
	elseif($dice < 75)	{$club = 9;$wf = 20;}//能使用必杀，灵25
	elseif($dice < 80)	{$club = 10;}//攻击熟练+2
	elseif($dice < 85)	{$club = 11;$money = 500;}//出击钱数500
	elseif($dice < 90)	{$club = 16;$wp = $wk = $wg = $wc = $wd = $wf = 15;}//全熟练50
	elseif($dice < 95)	{$club = 13;$mhp = $mhp + 200;$hp = $mhp;}//生命上限提高200
	elseif($dice < 100)	{$club = 14;$att = $att + 200;$def = $def + 200;}//攻防+100
	elseif($dice <= 105) {$club = 18;}
	else				{$club = makeclub();}
	return $club;
}
?>


