<?php
/**
 * Created PhpStorm.
 * User: liyw<634482545@qq.com>
 * Date: 2020-11-19
 * File: cli.php
 * Desc: Cli 模式入口文件
 */
define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../'));

$application = new \Yaf\Application(APPLICATION_PATH . "/conf/application.ini", 'product');

if ($argc < 2 || empty($file = ($argv[1] ?? '')) || strpos($file, '.') === false) {
    exit("  usage: php cli.php <class>.<method> [params_json]\nexample: php cli.php Demo.execute '{\"class\": \"Demo\", \"method\": \"execute\"}'");
}

list($class, $method) = explode('.', $file, 2);

if (!empty($json = ($argv[2] ?? '')) && !$param = json_decode($json, true)) {
    exit(sprintf('%s decode error: %s.', $json, json_last_error_msg()));
}

$nameSpaceClass = "app\\cron\\$class";

$application->bootstrap()->execute([new $nameSpaceClass(), $method], $param);