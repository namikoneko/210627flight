<?php

class Ins{

 public function postexeFromShtn($shtnid){
  $row = ORM::for_table("post")->create();
  $row->text = Flight::request()->data->text;
  $row->date = date('Y-m-d');
  $row->updated = time();
  $row->shtnid = $shtnid;
  $row->save();
  $row = ORM::for_table('map')->create();//map insert
  $row->tagid = 1;
  $row->postid = ORM::for_table('post')->max('id');
  $row->save();
  Flight::redirect('/shtn/' . $shtnid);
 }

 public function shtnexe(){
  $row = ORM::for_table("shtn")->create();
  $row->title = Flight::request()->data->title;
  $row->date = date('Y-m-d');
  $row->updated = time();
  $row->save();
  Flight::redirect('/shtns');
 }

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
