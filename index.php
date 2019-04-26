<?php
require_once("lib/ivsAMPCacheUpdate.php");
header("Content-Type: text/plain; charset=utf-8");

$domain = "https://example.com";
$urls = [
    "https://example.com/category/example-url/amp",
    "https://example.com/category/example-1-url/amp",
    "https://example.com/category/example-2-url/amp"
];
$pemFileName = "website";

$cache = new Lib\IVS_AMP_CACHE_UPDATE(
    $domain,
    $urls,
    $pemFileName);

$cache->update();