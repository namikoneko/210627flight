<?php
function tagrm($tagid,$postid,$tagidcur){
  $rows_count = ORM::for_table('map')->where("postid",$postid)->count();
  if($rows_count > 1){
    $row = ORM::for_table('map')->where("tagid",$tagid)->where("postid",$postid)->find_one();
    $row->delete();
//    //$row = ORM::for_table('map')->where("tagid",$tagid)->where("postid",$postid)->find_array();
//    //flight::json($row);
  }
    Flight::redirect('/post/' . $tagidcur ."/". $postid);
}

function tagaddexe(){
//echo "tag add exe!";
  $title = Flight::request()->data->title;
  $tagid = Flight::request()->data->tagid;
  $postid = Flight::request()->data->postid;
  $rows_count = ORM::for_table('tag')->where("title",$title)->count();
  if($rows_count == 0){
    $row = ORM::for_table('tag')->create();
    $row->title = $title;
    $row->date = time();
    $row->save();
    $row = ORM::for_table('map')->create();//map insert
    $row->tagid = ORM::for_table('tag')->max('id');
    $row->postid = $postid;
    $row->save();
  }else{
    $rowtag = ORM::for_table('tag')->where("title",$title)->find_one();
    $row = ORM::for_table('map')->create();//map insert
    $row->tagid = $rowtag->id;
    $row->postid = $postid;
    $row->save();
  }
  Flight::redirect('/post/' . $tagid ."/". $postid);
}

function tagdel($tagid){
//  $rows_count = ORM::for_table('map')->where("tagid",$id)->count();
//  if($rows_count == 0){//数が0なら削除する
    $row = ORM::for_table('tag')->find_one($tagid);
    $row->delete();
//  }
  Flight::redirect('/tags');
}

function tagupdexe(){
  $tagid = Flight::request()->data->tagid;
  $row = ORM::for_table('tag')->find_one($tagid);
  $row->title = Flight::request()->data->title;
  $row->save();
  Flight::redirect('/tag/' . $tagid);
}

function tagupd($tagid){
  $row = ORM::for_table('tag')->find_one($tagid);
  Flight::view()->assign('title', $row->title);
  Flight::view()->assign('tagid', $tagid);
  Flight::view()->display('tagupd.tpl');
}

function taginsexe(){
    $result = ORM::for_table('tag')->create();
    $result->title = Flight::request()->data->title;
    $result->date = date('Y-m-d');
    $result->updated = time();
    $result->save();
    Flight::redirect('/tags');
}

function tags(){
  $rows = ORM::for_table('tag')->find_array();
  Flight::view()->assign('rows', $rows);
  Flight::view()->display('tags.tpl');
//  Flight::render('tags', array('rows' => $rows), 'body');
//  Flight::render('layout');
  //flight::json($rows);
}

function tag($tagid){
$sql = <<<EOD
  SELECT tag.id as tagid,tag.title as tagtitle,
  post.id as postid,post.title as posttitle,post.text as posttext
  FROM tag 
  JOIN map 
  ON tag.id = map.tagid 
  join post 
  ON map.postid = post.id 
  where tagid = $tagid
EOD;
  $rows = ORM::for_table('post')->raw_query($sql)->find_array();
  Flight::view()->assign('rows', $rows);

  $row = ORM::for_table('tag')->find_one($tagid);
  Flight::view()->assign('row', $row);

  Flight::view()->display('tag.tpl');

/*
//$postids = [];
foreach($rows as $row){
  $postids[] = $row["postid"];
}
//$postrows = ORM::for_table('post')->where_in('id', $postids)->find_array();

  flight::json($postrows);

$sql = <<<EOD
  SELECT tag.id as tagid,tag.title as tagtitle,
  post.id as postid,post.title as posttitle,post.text as posttext
  FROM post 
  JOIN map 
  ON post.id = map.tagid 
  join tag 
  ON map.tagid = tag.id 
  where postid = $postid
EOD;
  $rows = ORM::for_table('post')->raw_query($sql)->find_array();
*/
  /*
  SELECT post.title as posttitle 
  from post
  */
}
