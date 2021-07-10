<?php

class Del{

public function delexe($delid,$table,$redirect){
//  $rows_count = ORM::for_table('map')->where("tagid",$id)->count();
//  if($rows_count == 0){//数が0なら削除する
    $row = ORM::for_table($table)->find_one($delid);
    $row->delete();
//  }
  Flight::redirect('/' . $redirect);
}

}
