<?php return [
  'type'=>'header',
  'method'=>"get",
  'User-Agent'=>'*',
  'Accept'=>['include'=>'text/*'], //[ "include"=>["text/*", '\\*/\\*']  ] for common branch with res's
  'Accept-Language'=>'en-US,en;q=0.5',
  'Accept-Encoding'=>'gzip, deflate, br',
  'Referer'=>'*',
  'Connection'=>'keep-alive',
  'Cache-Control'=>'*',
  'Upgrade-Insecure-Requests'=>0,
];
