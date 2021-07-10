<?php

class Up{

public function upexetagfix($tagid,$upid,$table,$redirect){
  $row = ORM::for_table($table)->find_one($upid);
  $row->updated = time();
  $row->save();
  Flight::redirect('/' . $redirect . '/' . $tagid);
}

public function upexe($upid,$table,$redirect){
  $row = ORM::for_table($table)->find_one($upid);
  $row->updated = time();
  $row->save();
  Flight::redirect('/' . $redirect);
}

}
