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
  SELECT tag.id as tagid,tag.title as tagtitle,
  post.id as postid,post.date as postdate,post.title as posttitle,post.text as posttext,
  shtn.id as shtnid,shtn.title as shtntitle
  FROM shtn 
  left join post 
  ON shtn.id = post.shtnid 
  left JOIN map 
  ON map.postid = post.id 
  left JOIN tag 
  ON tag.id = map.tagid 
  where shtn.id = $shtnid
  order by post.updated desc
EOD;
  //and tag.id = 1
  $rows = ORM::for_table('post')->raw_query($sql)->find_array();
//  flight::json($rows);
//
  Flight::view()->assign('rows', $rows);
  Flight::view()->display('shtn.tpl');
}

function shtns(){
  $rows = ORM::for_table('shtn')->find_many();
  Flight::view()->assign('rows', $rows);
  Flight::view()->display('shtns.tpl');
}
