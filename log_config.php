<?php
//日志配置
$config = array(
	'log_path' => '/data/logs/',
	'product'  => 'uc',
	'level'    => 3,
	'path'     => array(
		'FATAL' => 'php/php',
		'RPC'   => 'rpc/rpc',
		'SYS'   => 'cisys/sys',
	),
	'subffix'  => array(
		'WARNING' => '.wf',
	),
);
