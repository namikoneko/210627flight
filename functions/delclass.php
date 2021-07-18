<?php

class Del{

public function shtn($shtnid){
  $rows_count = ORM::for_table('post')->where("shtnid",$shtnid)->count();
  if($rows_count == 0){//数が0なら削除する
    $row = ORM::for_table("shtn")->find_one($shtnid);
    $row->delete();
  }
  Flight::redirect('/shtns');
}

public function delexe($delid,$table,$redirect){
//  $rows_count = ORM::for_table('map')->where("tagid",$id)->count();
//  if($rows_count == 0){//数が0なら削除する
    $row = ORM::for_table($table)->find_one($delid);
    $row->delete();
//  }
  Flight::redirect('/' . $redirect);
}

}
