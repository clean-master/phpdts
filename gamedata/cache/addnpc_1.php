<?php
if(!defined('IN_GAME')) exit('Access Denied');
$npcinit = array
	(
		'name' => '',	'pass' => 'bra', 'gd' => 'm',	'icon' => 0,	'club' => 0,	
		'mhp' => 0,	'msp' => 0,	'att' => 0,	'def' => 0,	'pls' => 0,	'lvl' => 0,
		'money' => 0,	'inf' => '',	'rage' => 0,	'pose' => 0,	'tactic' => 0,	
		'killnum' => 0,	'state' => 1,	'teamID' => '',	'teamPass' => '','bid' => 0,
		'wp' => 0, 'wk' => 0, 'wc' => 0, 'wg' => 0, 'wd' => 0, 'wf' => 0,
		'wep' => '',	'wepk' => '',	'wepe' => 0,	'weps' => 0,	'wepsk' => '',
		'arb' => '',	'arbk' => '',	'arbe' => 0,	'arbs' => 0,	'arbsk' => '',
		'arh' => '',	'arhk' => '',	'arhe' => 0,	'arhs' => 0,	'arhsk' => '',
		'arf' => '',	'arfk' => '',	'arfe' => 0,	'arfs' => 0,	'arfsk' => '',
		'ara' => '',	'arak' => '',	'arae' => 0,	'aras' => 0,	'arask' => '',
		'art' => '',	'artk' => '',	'arte' => 0,	'arts' => 0,	'artsk' => '',
		'itm0' => '',	'itmk0' => '',	'itme0' => 0,	'itms0' => 0,	'itmsk0' => '',
		'itm1' => '',	'itmk1' => '',	'itme1' => 0,	'itms1' => 0,	'itmsk1' => '',
		'itm2' => '',	'itmk2' => '',	'itme2' => 0,	'itms2' => 0,	'itmsk2' => '',
		'itm3' => '',	'itmk3' => '',	'itme3' => 0,	'itms3' => 0,	'itmsk3' => '',
		'itm4' => '',	'itmk4' => '',	'itme4' => 0,	'itms4' => 0,	'itmsk4' => '',
		'itm5' => '',	'itmk5' => '',	'itme5' => 0,	'itms5' => 0,	'itmsk5' => '',
		'itm6' => '',	'itmk6' => '',	'itme6' => 0,	'itms6' => 0,	'itmsk6' => '',
	);
$anpcinfo = array
	( 
		2 => array
		(
		'mode' => 2,
		'num' => 16,
		'pass' => 'bra',
		'club' => 0,
		'bid' => 0,
		'inf' => '',
		'rage' => 0,
		'pose'=> 0,
		'tactic' => 0,
		'killnum' => 0,
		'rp' => 150,
		'teamID' => '',
		'teamPass' => '',
		'pls' => 99,
		'mhp' => 2300,
		'msp' => 200,
		'att' => 250,
		'def' => 350,
		'lvl' => 25,
		'skill' => 135,
		'money' => 1600,
		'arb' => 'SSS战队校服',
		'arbk' => 'DB',
		'arbe' => 150,
		'arbs' => 100,
		'arh' => '鼓舞士气的头带',
		'arhk' => 'DH',
		'arhe' => 75,
		'arhs' => 100,
		'arf' => '橙黄学生鞋',
		'arfk' => 'DF',
		'arfe' => 75,
		'arfs' => 100,
		'ara' => '广播装置手表α',
		'arak' => 'DA',
		'arae' => 75,
		'aras' => 100,
//		'itm5' => '好人卡',
//		'itmk5' => 'Y',
//		'itme5' => 1,
//		'itms5' => 16,
		'sub' => array
			(
			0 => array
			  (
			'name' => '水濑 名雪-改',
			'icon' => 11,
			'gd' => 'f',
			'wep' => '大型闹钟',
			'wepk' => 'WP',
			'wepe' => 75,
			'weps' => 200,
			'itm1' => '雪兔【复制品】',
			'itmk1' => 'WD',
			'itme1' => 280,
			'itms1' => 300,
			'itmsk1' => 'iwd',
			'itm2' => '水濑 名雪的半身像',
			'itmk2' => 'WP',
			'itme2' => 33,
			'itms2' => 2,
			'itmsk2' => 'r',
			),
		1 => array
			(
			'name' => '立华 奏-改',
			'icon' => 12,
			'gd' => 'f',
			'wep' => 'GS【伪Hand_Sonic】',
			'wepk' => 'WK',
			'wepe' => 75,
			'weps' => 200,
			'itm1' => 'GS【HandSonic Ver.4】',
			'itmk1' => 'WP',
			'itme1' => 300,
			'itms1' => 300,
			'itmsk1' => 'ZN',
			'itm2' => '立华 奏的半身像',
			'itmk2' => 'WP',
			'itme2' => 33,
			'itms2' => 2,
			'itmsk2' => 'r',
			),
		2 => array
			(
			'name' => '思念体-海马 濑人',
			'icon' => 13,
			'gd' => 'm',
			'wep' => '【逆转的女神】',
			'wepk' => 'WC',
			'wepe' => 150,
			'weps' => 200,
			'itm1' => '■DarthNote■',
			'itmk1' => 'WK',
			'itme1' => 380,
			'itms1' => 300,
			'itmsk1' => 'Z',
			'itm2' => '混沌黑磨刀石',
			'itmk2' => 'Y',
			'itme2' => 40,
			'itms2' => 8,
			),
		3 => array
			(
			'name' => '思念体-触手众',
			'icon' => 14,
			'gd' => 'm',
			'wep' => '触手的力量',
			'wepk' => 'WG',
			'wepe' => 75,
			'weps' => 200,
			'itm1' => '妖精的羽翼',
			'itmk1' => 'A',
			'itme1' => 1,
			'itms1' => 1,
			'itmsk1' => 'q',
			'itm2' => '艾莲娜的圣钉',
			'itmk2' => 'Y',
			'itme2' => 40,
			'itms2' => 10,
			'itm3' => '斗技【神砂风暴】',
			'itmk3' => 'WF',
			'itme3' => 340,
			'itms3' => 300,
			),
		),
	),

	4 => array
		(
		'mode' => 1,
		'num' => 1,
		'pass' => 'bra',
		'club' => 9,
		'bid' => 0,
		'inf' => '',
		'state' => 1,
		'rage' => 10,
		'pose'=> 4,
		'tactic' => 4,
		'killnum' => 0,
		'teamID' => '',
		'teampsss' => '',
		'gd' => 'f',
		'pls' => 33,
		'mhp' => 300,
		'msp' => 400,
		'att' => 800000,
		'def' => 800000,
		'lvl' => 250,
		'skill' => 50000,
		'money' => 1,
		'arb' => '黑色连衣裙',
		'arbk' => 'DB',
		'arbe' => 800,
		'arbs' => 20,
		'arbsk' => 'Aa',
		'arh' => '红色的丝带',
		'arhk' => 'DH',
		'arhe' => 800,
		'arhs' => 15,
		'arhsk' => 'B',
		'arf' => '黑色布鞋',
		'arfk' => 'DF',
		'arfe' => 800,
		'arfs' => 21,
		'ara' => '红色的丝带',
		'arak' => 'DA',
		'arae' => 800,
		'aras' => 15,
		'arask' => 'b',
		'art' => '十字发卡',
		'artk' => 'Y',
		'arte' => 1,
		'arts' => 1,
		'sub' => array
		(
			0 => array
			(
			'name' => '■',
			'icon' => 83,
			'wep' => '红色的丝带',
			'wepk' => 'WP',
			'wepe' => 800,
			'weps' => 20,
			'wepsk' => 'u',
			),
		),
	),

	5 => array
		(
		'mode' => 2,
		'num' => 2,
		'pass' => 'bra',
		'bid' => 0,
		'inf' => '',
		'rage' => 150,
		'pose'=> 1,
		'tactic' => 3,
		'killnum' => 0,
		'rp' => 360,
		'teamID' => '结界',
		'teamPass' => 'Rea1ity',
		'pls' => 99,
		'mhp' => 3333,
		'msp' => 333,
		'att' => 333,
		'def' => 333,
		'lvl' => 33,
		'skill' => 233,
		'money' => 3333,
		'arb' => '杏仁豆腐模样的以太结晶',
		'arbk' => 'DB',
		'arbe' => 333,
		'arbs' => 333,
		'arbsk' => 'A',
		'arh' => '杏仁豆腐模样的狙击镜片',
		'arhk' => 'DH',
		'arhe' => 333,
		'arhs' => 333,
		'arhsk' => 'cW',
		'arf' => '杏仁豆腐模样的长筒靴',
		'arfk' => 'DF',
		'arfe' => 333,
		'arfs' => 333,
		'arfsk' => 'qE',
		'ara' => '杏仁豆腐模样的童话伪翼',
		'arak' => 'DA',
		'arae' => 333,
		'aras' => 333,
		'arask' => 'UI',
		'art' => '杏仁豆腐模样的HP制御系统',
		'artk' => 'A',
		'arte' => 333,
		'arts' => 333,
		'artsk' => 'H',
		'itm1' => '杏仁豆腐的ID卡',
		'itmk1' => 'Z',
		'itme1' => 1,
		'itms1' => 1,
//		'itm5' => '好人卡',
//		'itmk5' => 'Y',
//		'itme5' => 1,
//		'itms5' => 33,
		'sub' => array
		(
		0 => array
			(
			'name' => '冴月 麟',
			'icon' => 3,
			'gd' => 'f',
			'club' => 9,
			'wep' => '简称为UCW的杏仁豆腐',
			'wepk' => 'WK',
			'wepe' => 133,
			'weps' => 333,
			'wepsk' => 'dr',
			'itm2' => '【生まれたての风】模样的杏仁豆腐',
			'itmk2' => 'WF',
			'itme2' => 500,
			'itms2' => 100,
			'itmsk2' => 'cd',
			),
		1 => array
			(
			'name' => '某四面',
			'icon' => 4,
			'gd' => 'm',
			'club' => 8,
			'wep' => '彩虹色的杏仁豆腐',
			'wepk' => 'WD',
			'wepe' => 100,
			'weps' => 333,
			'wepsk' => 'drp',
			'itm2' => '【连续凤凰】模样的杏仁豆腐',
			'itmk2' => 'WG',
			'itme2' => 500,
			'itms2' => 6,
			'itmsk2' => 'd',
			),
		),
	),

	6 => array
		(
		'mode' => 2,
		'num' => 1,
		'pass' => 'bra',
		'club' => 0,
		'bid' => 0,
		'inf' => '',
		'rage' => 0,
		'pose'=> 4,
		'tactic' => 3,
		'killnum' => 0,
		'rp' => 500,
		'teamID' => '',
		'teamPass' => '',
		'gd' => 'r',
		'pls' => 99,
		'mhp' => 8888,
		'msp' => 400,
		'att' => 400,
		'def' => 777,
		'lvl' => 45,
		'skill' => 477,
		'money' => 17777,
		'arb' => '【属性防御装甲】',
		'arbk' => 'DB',
		'arbe' => 480,
		'arbs' => 200,
		'arbsk' => 'a',
		'arh' => '【冲击防御头盔】',
		'arhk' => 'DH',
		'arhe' => 360,
		'arhs' => 200,
		'arhsk' => 'A',
		'arf' => '【数据护膝】',
		'arfk' => 'DF',
		'arfe' => 360,
		'arfs' => 200,
		'ara' => '【陷阱拦截护盾】',
		'arak' => 'DA',
		'arae' => 360,
		'aras' => 200,
		'arask' => 'm',
		'art' => '【ACFUN的荣耀】',
		'artk' => 'Ag',
		'arte' => 5000,
		'arts' => 500,
		'artsk' => 'H',
//		'itm5' => '好人卡',
//		'itmk5' => 'Y',
//		'itme5' => 1,
//		'itms5' => 177,
		'sub' => array
		(
			0 => array
			(
			'name' => 'Acg_Xilin',
			'icon' => 2,
			'wep' => '【全屏幕弹幕发射】',
			'wepk' => 'WG',
			'wepe' => 360,
			'weps' => 600,
			'wepsk' => 'rew',
			'itm1' => '■DeathNote■',
			'itmk1' => 'Y',
			'itme1' => 1,
			'itms1' => 1,
			'itm2' => 'TDG压片猴',
			'itmk2' => 'Y',
			'itme2' => 1,
			'itms2' => 1,
			),
		),
	),

	7 => array
		(
		'mode' => 1,
		'num' => 3,
		'pass' => 'bra',
		'club' => 9,
		'bid' => 0,
		'inf' => '',
		'rage' => 100,
		'pose'=> 1,
		'tactic' => 3,
		'killnum' => 0,
		'teamID' => '',
		'teampsss' => '',
		'pls' => 99,
		'mhp' => 2550,
		'msp' => 400,
		'att' => 250,
		'def' => 750,
		'lvl' => 60,
		'skill' => 20,
		'money' => 24000,
		'arb' => '【执行官装甲-改】',
		'arbk' => 'DB',
		'arbe' => 700,
		'arbs' => 120,
		'arbsk' => 'Aa',
		'arh' => '【执行官头盔-改】',
		'arhk' => 'DH',
		'arhe' => 500,
		'arhs' => 120,
		'arhsk' => '',
		'arf' => '【执行官战靴-改】',
		'arfk' => 'DF',
		'arfe' => 480,
		'arfs' => 120,
		'arfsk' => '',
		'ara' => '【执行官护手-改】',
		'arak' => 'DA',
		'arae' => 480,
		'aras' => 120,
		'arask' => 'c',
		'art' => '【HP制御系统】',
		'artk' => 'A',
		'arte' => 1,
		'arts' => 1,
		'artsk' => 'H',
//		'itm5' => '好人卡',
//		'itmk5' => 'Y',
//		'itme5' => 1,
//		'itms5' => 240,
		'sub' => array
		(
			0 => array
			(
			'name' => '电击使 御坂 美琴',
			'icon' => 41,
			'gd' => 'f',
			'wep' => '【科学的超电磁炮-改】',
			'wepk' => 'WG',
			'wepe' => 770,
			'weps' => 999,
			'wepsk' => 'ed',
			'itm1' => '社员专用的ID卡',
			'itmk1' => 'Z',
			'itme1' => 1,
			'itms1' => 1,
			),
			1 => array
			(
			'name' => '班主任 坂持 金发',
			'icon' => 42,
			'gd' => 'm',
			'wep' => '【水素粒子水铁炮-改】',
			'wepk' => 'WG',
			'wepe' => 770,
			'weps' => 999,
			'wepsk' => 'id',
			'itm1' => '社员专用的ID卡',
			'itmk1' => 'Z',
			'itme1' => 1,
			'itms1' => 1,
			),
			2 => array
			(
			'name' => '花之领主 风见 幽香',
			'icon' => 43,
			'gd' => 'f',
			'wep' => '魔炮【元祖二重魔炮】',
			'wepk' => 'WF',
			'wepe' => 770,
			'weps' => 999,
			'wepsk' => 'pd',
			'itm1' => '社员专用的ID卡',
			'itmk1' => 'Z',
			'itme1' => 1,
			'itms1' => 1,
			),
		),
	),

	9 => array
		(
		'mode' => 1,
		'num' => 1,
		'pass' => 'bra',
		'club' => 0,
		'bid' => 0,
		'inf' => '',
		'rage' => 255,
		'pose'=> 1,
		'tactic' => 3,
		'killnum' => 99,
		'teamID' => '',
		'teamPass' => '',
		'gd' => 'f',
		'pls' => 0,
		'mhp' => 100,
		'msp' => 4000,
		'att' => 20,
		'def' => 400,
		'lvl' => 97,
		'skill' => 18,
		'money' => 1,
		//'arb' => '奥术盔甲B - 霜',
		//'arbk' => 'DB',
		//'arbe' => 6000,
		//'arbs' => 400,
		//'arbsk' => 'Aa',
		//'arh' => '奥术盔甲H - 霜',
		//'arhk' => 'DH',
		//'arhe' => 4000,
		//'arhs' => 300,
		//'arf' => '奥术盔甲F - 霜',
		//'arfk' => 'DF',
		//'arfe' => 4000,
		//'arfs' => 300,
		//'ara' => '奥术盔甲A - 霜',
		//'arak' => 'DA',
		//'arae' => 4000,
		//'aras' => 300,
		//'art' => '龙虎徽标',
		// 'artk' => 'A',
		// 'arte' => 200,
		// 'arts' => 300,
		// 'artsk' => 'Hc',
		'sub' => array
		(
			0 => array
			(
			'name' => '感觉像蓝凝的东西',
			'icon' => 52,
			'wep' => '『AZURE RONDO』',
			'wepk' => 'WK',
			'wepe' => 4000,
			'weps' => 360,
			'wepsk' => 'rkd',
			'itm1' => '琉璃血',
			'itmk1' => 'X',
			'itme1' => 1,
			'itms1' => 1,
			),
		),
	),

	11 => array
	(
	'mode' => 1,
	'num' => 6,
	'pass' => 'bra',
	'club' => 0,
	'bid' => 0,
	'inf' => '',
	'rage' => 88,
	'pose'=> 1,
	'tactic' => 3,
	'killnum' => 0,
	'rp' => 300,
	'teamID' => '',
	'teamPass' => '',
	'gd' => 'r',
	'pls' => 99,
	'mhp' => 2888,
	'msp' => 888,
	'att' => 88,
	'def' => 88,
	'lvl' => 30,
	'skill' => 100,
	'money' => 888,
	'arb' => '职人的佩服',
	'arbk' => 'DB',
	'arbe' => 888,
	'arbs' => 888,
	'arbsk' => 'a',
	'arh' => '职人的搞头',
	'arhk' => 'DH',
	'arhe' => 888,
	'arhs' => 888,
	'arhsk' => 'DF',
	'arf' => '职人的满足',
	'arfk' => 'DF',
	'arfe' => 888,
	'arfs' => 888,
	'ara' => '职人的拿手',
	'arak' => 'DA',
	'arae' => 888,
	'aras' => 888,
	'arask' => 'H',
	'art' => '职人的荣耀',
	'artk' => 'A',
	'arte' => 888,
	'arts' => 888,
	'artsk' => 'c',
//		'itm5' => '好人卡',
//		'itmk5' => 'Y',
//		'itme5' => 1,
//		'itms5' => 88,
	'sub' => array
	(
		0 => array
		(
		'name' => 'Hank',
		'icon' => 91,
		'wep' => '『性感玉米』',
		'wepk' => 'WD',
		'wepe' => 88,
		'weps' => 888,
		'wepsk' => 'ewuip',
		'itm1' => '我打败HANK了！',
		'itmk1' => 'Z',
		'itme1' => 1,
		'itms1' => 1,
		),
		1 => array
		(
		'name' => '爱情上甘岭',
		'icon' => 92,
		'wep' => '『阿里嘎头哦～』',
		'wepk' => 'WK',
		'wepe' => 88,
		'weps' => 888,
		'wepsk' => 'ewuip',
		'itm1' => '我成功TDGSGL了！',
		'itmk1' => 'Z',
		'itme1' => 1,
		'itms1' => 1,
		),
		2 => array
		(
		'name' => '221',
		'icon' => 94,
		'wep' => '『和谐你全家』',
		'wepk' => 'WP',
		'wepe' => 88,
		'weps' => 888,
		'wepsk' => 'uiewp',
		'arb' => '神之装束',
		'arbk' => 'DB',
		'arbe' => 888,
		'arbs' => 888,
		'arbsk' => 'a',
		'arh' => '神之远见',
		'arhk' => 'DH',
		'arhe' => 888,
		'arhs' => 888,
		'arhsk' => 'DF',
		'arf' => '神之步伐',
		'arfk' => 'DF',
		'arfe' => 888,
		'arfs' => 888,
		'ara' => '神之操控',
		'arak' => 'DA',
		'arae' => 888,
		'aras' => 888,
		'arask' => 'H',
		'art' => '神之荣耀',
		'artk' => 'A',
		'arte' => 888,
		'arts' => 888,
		'artsk' => 'c',
		'itm1' => '荼荼丸的茶',
		'itmk1' => 'Z',
		'itme1' => 1,
		'itms1' => 1,
		),
		3 => array
		(
		'name' => 'Erul Tron',
		'icon' => 93,
		'club' => 0,
		'wep' => 'RV『罗德不列颠号』',
		'wepk' => 'WG',
		'wepe' => 88,
		'weps' => 888,
		'wepsk' => 'uiewp',
		'arb' => '天使队制服G-E.T',
		'arbk' => 'DB',
		'arbe' => 888,
		'arbs' => 888,
		'arbsk' => 'a',
		'arh' => '通信装置',
		'arhk' => 'DH',
		'arhe' => 888,
		'arhs' => 888,
		'arhsk' => 'DF',
		'arf' => '少女的高筒靴',
		'arfk' => 'DF',
		'arfe' => 888,
		'arfs' => 888,
		'ara' => '传说的绒边手套',
		'arak' => 'DA',
		'arae' => 888,
		'aras' => 888,
		'arask' => 'H',
		'art' => '努力的富人气光环',
		'artk' => 'A',
		'arte' => 888,
		'arts' => 888,
		'artsk' => 'c',
		'itm1' => '罗德不列颠号机师钥匙',
		'itmk1' => 'Z',
		'itme1' => 1,
		'itms1' => 1,
		),
		4 => array
		(
		'name' => '【77-JACKPOT】',
		'icon' => 95,
		'club' => 0,
		'wep' => '负人气的光环',
		'wepk' => 'WP',
		'wepe' => 88,
		'weps' => 888,
		'wepsk' => 'uiewp',
		'arb' => '阿婆主的点击量',
		'arbk' => 'DB',
		'arbe' => 888,
		'arbs' => 888,
		'arbsk' => 'a',
		'arh' => '阿婆主的点击量',
		'arhk' => 'DH',
		'arhe' => 888,
		'arhs' => 888,
		'arhsk' => 'DF',
		'arf' => '阿婆主的点击量',
		'arfk' => 'DF',
		'arfe' => 888,
		'arfs' => 888,
		'ara' => '阿婆主的点击量',
		'arak' => 'DA',
		'arae' => 888,
		'aras' => 888,
		'arask' => 'H',
		'art' => '阿婆主的点击量',
		'artk' => 'A',
		'arte' => 888,
		'arts' => 888,
		'artsk' => 'c',
		'itm1' => '点击量终于爆表了！',
		'itmk1' => 'Z',
		'itme1' => 1,
		'itms1' => 1,
		'itm2' => '负人品的结界',
		'itmk2' => 'WG',
		'itme2' => 88,
		'itms2' => 88,
		'itmsk2' => 'kN',
		),
		5 => array
		(
		'name' => '便当盒',
		'icon' => 100,
		'club' => 17,
		'lvl' => 1,
		'mhp' => 8888888,
		'skill' => 20,
		'def' => 88888,
		'wep' => '灭罪「正直者の死」',
		'wepk' => 'WF',
		'wepe' => 8,
		'weps' => 888,
		'wepsk' => 'r',
		'arb' => '吉祥物',
		'arbk' => 'DB',
		'arbe' => 1,
		'arbs' => 10000,
		'arbsk' => 'Aa',
		'arh' => '吉祥物',
		'arhk' => 'DH',
		'arhe' => 1,
		'arhs' => 10000,
		'arhsk' => '',
		'arf' => '吉祥物',
		'arfk' => 'DF',
		'arfe' => 1,
		'arfs' => 10000,
		'ara' => '吉祥物',
		'arak' => 'DA',
		'arae' => 1,
		'aras' => 10000,
		'arask' => '',
		'art' => '姬露瑞希的爱心便当',
		'artk' => 'A',
		'arte' => 1,
		'arts' => 1,
		'artsk' => 'Bb',
			),
		),
	),

	12 => array
		(
		'mode' => 1,
		'num' => 1,
		'pass' => 'bra',
		'club' => 99,
		'bid' => 0,
		'inf' => '',
		'state' => 1,
		'rage' => 10,
		'pose'=> 4,
		'tactic' => 4,
		'killnum' => 0,
		'teamID' => '',
		'teampsss' => '',
		'gd' => 'f',
		'pls' => 99,
		'mhp' => 1800,
		'msp' => 400,
		'att' => 150,
		'def' => 260,
		'lvl' => 18,
		'skill' => 30,
		'money' => 1,
		'arb' => '黑色哥特装',
		'arbk' => 'DB',
		'arbe' => 25,
		'arbs' => 20,
		'arh' => '不明饰物',
		'arhk' => 'DH',
		'arhe' => 12,
		'arhs' => 15,
		'arf' => '黑色布鞋',
		'arfk' => 'DF',
		'arfe' => 18,
		'arfs' => 21,
		'ara' => '黑铁镣铐',
		'arak' => 'DA',
		'arae' => 5,
		'aras' => 15,
		'art' => '镣铐的碎片',
		'artk' => 'Y',
		'arte' => 1,
		'arts' => 1,
		'sub' => array
		(
			0 => array
			(
			'name' => 'Dark Force幼体',
			'icon' => 81,
			'wep' => 'RV『Black Riper』',
			'wepk' => 'WG',
			'wepe' => 80,
			'weps' => 125,
			'wepsk' => 'c',
			),
		),
	),
	
	// 13 => array(
	// 	'mode' => 1,
	// 	'num' => 1,
	// 	'pass' => 'bra',
	// 	'club' => 99,
	// 	'bid' => 0,
	// 	'inf' => '',
	// 	'state' => 1,
	// 	'rage' => 5,
	// 	'pose'=> 0,
	// 	'tactic' => 0,
	// 	'killnum' => 0,
	// 	'teamID' => '循环',
	// 	'teampsss' => 'circle',
	// 	'gd' => 'f',
	// 	'pls' => 99,
	// 	'mhp' => 600,
	// 	'msp' => 400,
	// 	'att' => 150,
	// 	'def' => 100,
	// 	'lvl' => 10,
	// 	'skill' => 50,
	// 	'money' => 500,
	// 	'arb' => '旧式布拉吉',
	// 	'arbk' => 'DB',
	// 	'arbe' => 75,
	// 	'arbs' => 20,
	// 	'arbsk' => '',
	// 	'arh' => '蝙蝠羽翼帽子',
	// 	'arhk' => 'DH',
	// 	'arhe' => 75,
	// 	'arhs' => 20,
	// 	'arf' => '女式皮鞋',
	// 	'arfk' => 'DF',
	// 	'arfe' => 75,
	// 	'arfs' => 20,
	// 	'ara' => '粉色披风',
	// 	'arak' => 'DA',
	// 	'arae' => 50,
	// 	'aras' => 25,
	// 	'art' => '飞行之愿',
	// 	'artk' => 'A',
	// 	'arte' => 1,
	// 	'arts' => 1,
	// 	'artsk' => 'H',
	// 	'sub' => array
	// 	(
	// 		0 => array
	// 		(
	// 		'name' => '库特',
	// 		'icon' => 8,
	// 		'wep' => '光束镰刀',
	// 		'wepk' => 'WK',
	// 		'wepe' => 100,
	// 		'weps' => 36,
	// 		'wepsk' => 'ec',
	// 		),
	// 	),
	// ), 

	13 => array
	(
	'mode' => 1,
	'num' => 3,
	'pass' => 'bra',
	'club' => 0,
	'bid' => 0,
	'inf' => '',
	'rage' => 1,
	'pose'=> 0,
	'tactic' => 0,
	'killnum' => 0,
	'teamID' => '循环',
	'teamPass' => 'L1g2t2D2k',
	'gd' => 'f',
	'pls' => 99,
	'mhp' => 480000,
	'msp' => 100,
	'att' => 400,
	'def' => 400,
	'lvl' => 32,
	'skill' => 288,
	'money' => 800,
	'arb' => '人工湮灭力场B',
	'arbk' => 'DB',
	'arbe' => 100,
	'arbs' => 500,
	'arbsk' => '*',
	'arh' => '人工干扰力场H',
	'arhk' => 'DH',
	'arhe' => 100,
	'arhs' => 500,
	'arhsk' => '-',
	'arf' => '人工波动力场F',
	'arfk' => 'DF',
	'arfe' => 100,
	'arfs' => 500,
	'arfsk' => '+',
	'ara' => '人工备用力场A',
	'arak' => 'DA',
	'arae' => 100,
	'aras' => 500,
	'arask' => 'aA',
	'art' => '妖精的羽翼',
	'artk' => 'A',
	'arte' => 1,
	'arts' => 1,
	'artsk' => 'q',
	'sub' => array
	(
		0 => array
		(
		'name' => '妖精幻象-麦基',
		'icon' => 121,
		'wep' => '幻象箭头',
		'wepk' => 'WC',
		'wepe' => 200,
		'weps' => 5000,
		'wepsk' => '',
		),
		1 => array
		(
		'name' => '妖精幻象-拉普尼',
		'icon' => 122,
		'wep' => '幻象预言',
		'wepk' => 'WD',
		'wepe' => 200,
		'weps' => 5000,
		'wepsk' => '',
		),
		2 => array
		(
		'name' => '妖精幻象-斯洛蒂',
		'icon' => 123,
		'wep' => '幻象路径',
		'wepk' => 'WF',
		'wepe' => 200,
		'weps' => 5000,
		'wepsk' => '',
		),
	),
	),

	89 => array
		(
		'mode' => 2,
		'num' => 9,
		'pass' => 'bra',
		'club' => 0,
		'bid' => 0,
		'inf' => '',
		'rage' => 0,
		'pose'=> 4,
		'tactic' => 4,
		'killnum' => 0,
		'teamID' => '和平组织',
		'teamPass' => 'Da1Key2Truth',
		'gd' => 'f',
		'pls' => 99,
		'mhp' => 2800,
		'msp' => 200,
		'att' => 10,
		'def' => 100,
		'lvl' => 10,
		'skill' => 50,
		'money' => 4500,
		'arb' => '不可思议的盔甲',
		'arbk' => 'DB',
		'arbe' => 420,
		'arbs' => 100,
		'arh' => '不可思议的帽子',
		'arhk' => 'DH',
		'arhe' => 240,
		'arhs' => 100,
		'arf' => '不可思议的跑鞋',
		'arfk' => 'DF',
		'arfe' => 240,
		'arfs' => 100,
		'ara' => '不可思议的手套',
		'arak' => 'DA',
		'arae' => 240,
		'aras' => 100,
		'art' => '奇迹的十字架',
		'artk' => 'A',
		'arte' => 200,
		'arts' => 10,
		'artsk' => 'a',
//		'itm5' => '好人卡',
//		'itmk5' => 'Y',
//		'itme5' => 1,
//		'itms5' => 45,
		'sub' => array
		(
		0 => array
			(
			'name' => '月宫 亚由',
			'icon' => 31,
			'wep' => '鲷鱼烧',
			'wepk' => 'WC',
			'wepe' => 15,
			'weps' => 200,
			'itm1' => '天使玩偶',
			'itmk1' => 'X',
			'itme1' => 1,
			'itms1' => 1,
			'itm2' => '亲手制作的鲷鱼烧',
			'itmk2' => 'HB',
			'itme2' => 500,
			'itms2' => 150,
			'itm3' => '真-红色的发圈',
			'itmk3' => 'DH',
			'itme3' => 500,
			'itms3' => 150,
			'itmsk3' => 'KG',
			'itm4' => '天使之剑',
			'itmk4' => 'WK',
			'itme4' => 600,
			'itms4' => 150,
			'itmsk4' => 'cd',
			),
		1 => array
			(
			'name' => '神尾 观铃',
			'icon' => 32,
			'wep' => '绘图志',
			'wepk' => 'WP',
			'wepe' => 10,
			'weps' => 200,
			'itm1' => '恐龙玩偶',
			'itmk1' => 'X',
			'itme1' => 1,
			'itms1' => 1,
			'itm2' => '培根蛋+？',
			'itmk2' => 'HB',
			'itme2' => 500,
			'itms2' => 150,
			'itm3' => '小空',
			'itmk3' => 'DA',
			'itme3' => 500,
			'itms3' => 150,
			'itmsk3' => 'CD',
			'itm4' => '恐龙扑克牌',
			'itmk4' => 'WC',
			'itme4' => 600,
			'itms4' => 150,
			'itmsk4' => 'rdc',
			),
		2 => array
			(
			'name' => '古河 渚',
			'icon' => 33,
			'wep' => '团子',
			'wepk' => 'WC',
			'wepe' => 15,
			'weps' => 200,
			'itm1' => '团子玩偶',
			'itmk1' => 'X',
			'itme1' => 1,
			'itms1' => 1,
			'itm2' => '秋生大叔的面包',
			'itmk2' => 'HB',
			'itme2' => 500,
			'itms2' => 150,
			'itm3' => '真 - 幻想戏服',
			'itmk3' => 'DB',
			'itme3' => 500,
			'itms3' => 150,
			'itmsk3' => 'PF',
			'itm4' => '秋生大叔的球棒',
			'itmk4' => 'WP',
			'itme4' => 600,
			'itms4' => 150,
			'itmsk4' => 'cd',
			),
		),
	),

	15 => array(
		'mode' => 1,
		'num' => 1,
		'pass' => 'bra',
		'club' => 98,
		'bid' => 0,
		'inf' => '',
		'state' => 1,
		'rage' => 5,
		'pose'=> 0,
		'tactic' => 4,
		'killnum' => 0,
		'teamID' => '',
		'teampsss' => '',
		'gd' => 'f',
		'pls' => 99,
		'mhp' => 900,
		'msp' => 1600,
		'att' => 900,
		'def' => 400,
		'lvl' => 42,
		'skill' => 50,
		'wp' => 300, 'wk' => 555, 'wc' => 684, 'wg' => 880, 'wd' => 360, 'wf' => 80,
		'money' => 123,
		'arb' => '气息遮蔽装置',
		'arbk' => 'DB',
		'arbe' => 400,
		'arbs' => 220,
		'arbsk' => 'Aa',
		'arh' => '身份遮蔽装置',
		'arhk' => 'DH',
		'arhe' => 360,
		'arhs' => 220,
		'arhsk' => 'm',
		'arf' => '反制遮蔽装置',
		'arfk' => 'DF',
		'arfe' => 360,
		'arfs' => 220,
		'arfsk' => 'b',
		'ara' => '罪业遮蔽装置',
		'arak' => 'DA',
		'arae' => 360,
		'aras' => 220,
		'arask' => 'H',
		'art' => '红色按钮',
		'artk' => 'A',
		'arte' => 1,
		'arts' => 1,
		'artsk' => 'Z',
		'sub' => array
		(
			0 => array
			(
			'name' => '【SANMA_TK】',
			'icon' => 69,
			'wep' => '元素枪刃『Glider』',
			'wepk' => 'WGK',
			'wepe' => 400,
			'weps' => 9999,
			'wepsk' => 'peNn',
			'itm1' => '断罪之光刃',
			'itmk1' => 'WK',
			'itme1' => 300,
			'itms1' => 500,
			'itmsk1' => 'dNne',
			'itm2' => '破灭之天雷',
			'itmk2' => 'WC',
			'itme2' => 300,
			'itms2' => 500,
			'itmsk2' => 'wNne',
			'itm3' => '无尽之洪流',
			'itmk3' => 'WP',
			'itme3' => 300,
			'itms3' => 500,
			'itmsk3' => 'uNne',
			'itm4' => '黄金秋刀鱼',
			'itmk4' => 'HB',
			'itme4' => 9999,
			'itms4' => '∞',
			'itmsk4' => 'Z',
			'itm5' => '限定型-MSM-04 アッガイ',
			'itmk5' => 'X',
			'itme5' => 9999,
			'itms5' => 1,
			'itmsk5' => 'Z',
			),
		),
	), 

	92 => array
	(
	'mode' => 2,
	'num' => 250,
	'pass' => 'bra',
	'club' => 0,
	'bid' => 0,
	'inf' => '',
	'rage' => 13,
	'pose'=> 0,
	'tactic' => 0,
	'killnum' => 0,
	'teamID' => '',
	'teamPass' => '',
	'gd' => 'f',
	'pls' => 99,
	'mhp' => 17,
	'msp' => 200,
	'att' => 27,
	'def' => 99999,
	'lvl' => 13,
	'skill' => 1,
	'money' => 250,
	'arb' => '◆篝火',
	'arbk' => 'DB',
	'arbe' => 1,
	'arbs' => 1,
	'arbsk' => 'a',
	'arh' => '◆埋火',
	'arhk' => 'DH',
	'arhe' => 1,
	'arhs' => 1,
	'arhsk' => 'B',
	'arf' => '◆永火',
	'arfk' => 'DF',
	'arfe' => 1,
	'arfs' => 1,
	'arfsk' => 'M',
	'ara' => '◆残火',
	'arak' => 'DA',
	'arae' => 1,
	'aras' => 1,
	'arask' => 'b',
	'art' => '◆焰火',
	'artk' => 'A',
	'arte' => 1,
	'arts' => 1,
	'artsk' => 'H',
	'itm6' => '◆火之碎片',
	'itmk6' => 'HB',
	'itme6' => 13337,
	'itms6' => 1,
	
	'sub' => array
	(
	 0 => array
		(
		'name' => '✦覆唱的篝火',
		'icon' => 34,
		'wep' => '✧覆唱之歌',
		'wepk' => 'WF',
		'wepe' => 1,
		'weps' => 50,
		'itm5' => '◆愈合数据',
		'itmk5' => 'HB',
		'itme5' => 5,
		'itms5' => '∞',
		),
	1 => array
		(
		'name' => '✦爱恋的埋火',
		'icon' => 35,
		'wep' => '✧无畏之爱',
		'wepk' => 'WF',
		'wepe' => 1,
		'weps' => 50,
		'itm5' => '◆熟练数据',
		'itmk5' => 'VV',
		'itme5' => 1,
		'itms5' => 5,
		),
	2 => array
		(
		'name' => '✦怜悯的永火',
		'icon' => 36,
		'wep' => '✧怜悯之痛',
		'wepk' => 'WF',
		'wepe' => 1,
		'weps' => 50,
		'itm5' => '◆生命数据',
		'itmk5' => 'MH',
		'itme5' => 1,
		'itms5' => 10,
		),
	3 => array
		(
		'name' => '✦执念的残火',
		'icon' => 37,
		'wep' => '✧执念之刺',
		'wepk' => 'WF',
		'wepe' => 1,
		'weps' => 50,
		'itm5' => '◆意念数据',
		'itmk5' => 'MD',
		'itme5' => 1,
		'itms5' => 10,
		),
	4 => array
		(
		'name' => '✦希望的焰火',
		'icon' => 38,
		'wep' => '✧希望之风',
		'wepk' => 'WF',
		'wepe' => 1,
		'weps' => 50,
		'itm5' => '银白盒子',
		'itmk5' => 'p',
		'itme5' => 1,
		'itms5' => 1,
		'itmsk5' => 'ps',
		),
	),
),
);
?>