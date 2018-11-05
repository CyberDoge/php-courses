<?php
require __DIR__ . "/engine.php";
require __DIR__ . "/сylinder.php";
require __DIR__ . "/valve.php";
require __DIR__ . "/lamp.php";

$engine = new Engine();
$engine -> startEngine();
