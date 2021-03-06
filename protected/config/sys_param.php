<?php
	return array(
		'cas_log_path'=>dirname(__FILE__).'/../runtime/cas.log',
		'cas_host'=>'itebeta.baidu.com',
		'cas_port'=>443,
		'groups'=>array(
					'cmatch'=>'频道',
					'trade'=>'行业',
					'unit'=>'运营单位',
					'channel'=>'流量来源',
					'browser'=>'浏览器',
					'area'=>'地域',
				),
		'base_index'=>array(
					'pv'=>array('name'=>'pv','default'=>true),
					'epv'=>array('name'=>'epv','default'=>false),
					'shows'=>array('name'=>'展现','default'=>false),
					'click'=>array('name'=>'点击','default'=>false),
					'charge'=>array('name'=>'收入','default'=>true),
					'cash'=>array('name'=>'现金收入','default'=>false),
				),
		'derivative_index'=>array(
					'cpm1'=>array('name'=>'CPM1','default'=>false),
					'acp'=>array('name'=>'ACP','default'=>false),
					'ctr2'=>array('name'=>'CTR2','default'=>false),
					'pvr'=>array('name'=>'PVR','default'=>false),
					'asn'=>array('name'=>'ASN','default'=>false),
					'pvr*asn'=>array('name'=>'PVR*ASN','default'=>false),
					'cpm2'=>array('name'=>'CPM2','default'=>false),
					'cpm3'=>array('name'=>'CPM3','default'=>false),
					'ctr1'=>array('name'=>'CTR1','default'=>false),
					'ctr3'=>array('name'=>'CTR3','default'=>false),
				),
		)
?>