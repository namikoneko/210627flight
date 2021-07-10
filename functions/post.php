<?php

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

function postdel($tagid,$postid){
//  $rows_count = ORM::for_table('map')->where("tagid",$id)->count();
//  if($rows_count == 0){//数が0なら削除する
    $row = ORM::for_table('post')->find_one($postid);
    $row->delete();
//  }
  Flight::redirect('/tag/' . $tagid);
}

function postupdexe(){
  $tagid = Flight::request()->data->tagid;
  $postid = Flight::request()->data->postid;
  $row = ORM::for_table('post')->find_one($postid);
  $row->text = Flight::request()->data->text;
  $row->save();
  Flight::redirect('/tag/' . $tagid);
}

function postupd($tagid,$postid){
  $row = ORM::for_table('post')->find_one($postid);
  //$row = ORM::for_table('post')->where("id", $postid)->find_array();
//	flight::json($row);
  Flight::view()->assign('row', $row);
  Flight::view()->assign('tagid', $tagid);
  Flight::view()->display('postupd.tpl');
}

