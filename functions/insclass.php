<?php

class Ins{

 public function insexeWithCatid($table,$parentidfield){
  $row = ORM::for_table($table)->create();
  $row->title = Flight::request()->data->title;
  $row->$parentidfield = Flight::request()->data->parentidfield;
  $row->date = date('Y-m-d');
  $row->updated = time();
  $row->save();
  Flight::redirect('/tags');
 }

// public function insexeWithCatid(){
//  $row = ORM::for_table("tag")->create();
//  $row->title = Flight::request()->data->title;
//  $row->catid = Flight::request()->data->catid;
//  $row->date = date('Y-m-d');
//  $row->updated = time();
//  $row->save();
//  Flight::redirect('/tags');
// }

 public function insexe($table,$redirect){
  $row = ORM::for_table($table)->create();
  $row->title = Flight::request()->data->title;
  $row->date = date('Y-m-d');
  $row->updated = time();
  $row->save();
  Flight::redirect('/' . $redirect);
 }

}
