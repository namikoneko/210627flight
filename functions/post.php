<?php

function postcp($tagid,$postid){
  $row = ORM::for_table('post')->create();
  $rowpost = ORM::for_table('post')->find_one($postid);
  $row->shtnid = $rowpost->shtnid;
  $row->date = date('Y-m-d');
  $row->updated = time();
  $row->save();
  $row = ORM::for_table('map')->create();//map insert
  $row->tagid = $tagid;
  $row->postid = ORM::for_table('post')->max('id');
  $row->save();
  Flight::redirect('/tag/' . $tagid);
}

function postinsexeFromShtn($shtnid){
 $ins = new Ins();
 $ins->postexeFromShtn($shtnid);
}

function postinsexe($tagid){
    $row = ORM::for_table('post')->create();
    //$row->title = Flight::request()->data->title;
    $row->text = Flight::request()->data->text;
    $row->date = date('Y-m-d');
    $row->updated = time();
    $row->save();
    $row = ORM::for_table('map')->create();//map insert
    $row->tagid = $tagid;
    $row->postid = ORM::for_table('post')->max('id');
    $row->save();
    Flight::redirect('/tag/' . $tagid);
}

function postup($tagid,$upid){
 $up = new Up();
 $up->upexetagfix($tagid,$upid,"post","tag");
}

function postfindtag($tagid){
 $find = new Find();
 $find->postfindtag($tagid,"tag.tpl");
}

function postfindtags(){
 $find = new Find();
 $find->postfind("postfind.tpl");
}

function post($tagid,$postid){
  $rowpost = ORM::for_table('post')->find_one($postid);
  Flight::view()->assign('rowpost', $rowpost);

  $rowtag = ORM::for_table('tag')->find_one($tagid);
  Flight::view()->assign('rowtag', $rowtag);

$sql = <<<EOD
  SELECT tag.id as tagid,tag.title as tagtitle,
  post.id as postid,post.title as posttitle,post.text as posttext
  FROM post 
  JOIN map 
  ON post.id = map.postid 
  join tag 
  ON map.tagid = tag.id 
  where postid = $postid
  and not tagid = $tagid
EOD;
  $rows = ORM::for_table('post')->raw_query($sql)->find_array();
  Flight::view()->assign('rows', $rows);
  //flight::json($rows);

  Flight::view()->display('post.tpl');
}

function postdelFromShtn($shtnid,$postid){
  $row = ORM::for_table('post')->find_one($postid);
  $row->delete();
  Flight::redirect('/shtn/' . $shtnid);
}

function postdel($tagid,$postid){
//  $rows_count = ORM::for_table('map')->where("tagid",$id)->count();
//  if($rows_count == 0){//数が0なら削除する
    $row = ORM::for_table('post')->find_one($postid);
    $row->delete();
//  }
  Flight::redirect('/tag/' . $tagid);
}

function postupdFromShtnexe(){
  $shtnid = Flight::request()->data->shtnid;
  $postid = Flight::request()->data->postid;
  $row = ORM::for_table('post')->find_one($postid);
  $row->text = Flight::request()->data->text;
  $row->save();
  Flight::redirect('/shtn/' . $shtnid);
}

function postupdexe(){
  $tagid = Flight::request()->data->tagid;
  $postid = Flight::request()->data->postid;
  $row = ORM::for_table('post')->find_one($postid);
  $row->text = Flight::request()->data->text;
  $row->save();
  Flight::redirect('/tag/' . $tagid);
}

function postupdFromShtn($shtnid,$postid){
  $row = ORM::for_table('post')->find_one($postid);
  Flight::view()->assign('row', $row);
  Flight::view()->assign('shtnid', $shtnid);
  Flight::view()->display('postupdFromShtn.tpl');
}

function postupd($tagid,$postid){
  $row = ORM::for_table('post')->find_one($postid);
  //$row = ORM::for_table('post')->where("id", $postid)->find_array();
//	flight::json($row);
  Flight::view()->assign('row', $row);
  Flight::view()->assign('tagid', $tagid);
  Flight::view()->display('postupd.tpl');
}

