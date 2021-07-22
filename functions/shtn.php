<?php

function shtndel($shtnid){
 $del = new Del();
 $del->shtn($shtnid);
}

function shtnupdexe(){
 $upd = new Upd();
 $upd->shtnexe();
}

function shtnupd($shtnid){
 $upd = new Upd();
 $upd->shtn($shtnid);
}

function shtninsexe(){
 $ins = new Ins();
 $ins->shtnexe();
}

function shtn($shtnid){
$sql = <<<EOD
  SELECT
  post.id as postid,post.date as postdate,post.title as posttitle,post.text as posttext,
  shtn.id as shtnid,shtn.title as shtntitle
  FROM shtn 
  join post 
  ON shtn.id = post.shtnid 
  where shtn.id = $shtnid
  order by post.updated desc
EOD;
//  SELECT tag.id as tagid,tag.title as tagtitle,
//  JOIN map 
//  ON map.postid = post.id 
//  JOIN tag 
//  ON tag.id = map.tagid 
  //and tag.id = 1
  $rows = ORM::for_table('post')->raw_query($sql)->find_array();
//  flight::json($rows);

  $rowshtn = ORM::for_table('shtn')->find_one($shtnid);
  Flight::view()->assign('rowshtn', $rowshtn);

  Flight::view()->assign('rows', $rows);
  Flight::view()->display('shtn.tpl');
}

function shtns(){
  $rows = ORM::for_table('shtn')->find_many();
  Flight::view()->assign('rows', $rows);
  Flight::view()->display('shtns.tpl');
}
