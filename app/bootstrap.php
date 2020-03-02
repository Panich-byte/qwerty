<?php
require_once "app/db/components/Connection.php";
require_once "app/models/PostData.php";
$config = require_once "config.php";
$newPost = new PostData(Connection::make($config));
//hello boyyyyyy