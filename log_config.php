<?php
//日志配置
$config = array(
	'log_path' => '/data/logs/',
	'product'  => 'uc',
	'level'    => 4,
	'path'     => array(
		'FATAL' => 'php/php.log.',
		'RPC'   => 'rpc/rpc.log.',
		'SYS'   => 'cisys/sys.log.',
	),
);