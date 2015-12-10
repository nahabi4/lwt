<?php

$server = getenv('OPENSHIFT_MYSQL_DB_HOST').":".getenv('OPENSHIFT_MYSQL_DB_PORT');
$userid = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
$passwd = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
$dbname = getenv('OPENSHIFT_GEAR_NAME');
?>
