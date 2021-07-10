<?php

class Find{

public function postfindtag($tagid,$tpl){
  $q = Flight::request()->query->q;
$sql = <<<EOD
  SELECT tag.id as tagid,tag.title as tagtitle,
  post.id as postid,post.title as posttitle,post.text as posttext
  FROM tag 
  JOIN map 
  ON tag.id = map.tagid 
  join post 
  ON map.postid = post.id 
  where tagid = $tagid and posttext like '%$q%'
EOD;
  $rows = ORM::for_table('post')->raw_query($sql)->find_array();
  Flight::view()->assign('rows', $rows);
  $row = ORM::for_table('tag')->find_one($tagid);
  Flight::view()->assign('row', $row);
  Flight::view()->display($tpl);
}

public function postfind($tpl){
  $q = Flight::request()->query->q;
$sql = <<<EOD
  SELECT tag.id as tagid,tag.title as tagtitle,
  post.id as postid,post.title as posttitle,post.text as posttext
  FROM post 
  JOIN map 
  ON post.id = map.postid 
  join tag 
  ON map.tagid = tag.id 
  where posttext like '%$q%'
EOD;
  $rows = ORM::for_table('post')->raw_query($sql)->find_array();
//  flight::json($rows);
//
  Flight::view()->assign('rows', $rows);
  Flight::view()->display($tpl);
//  $rows = ORM::for_table($table)->where($findfield,$title)->find_many();
}

}
