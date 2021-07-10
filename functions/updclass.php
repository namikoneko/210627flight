<?php

class Upd{

public function updexeParentid($updid,$catid,$table,$redirect){
  $row = ORM::for_table($table)->find_one($updid);
  $row->catid = $catid;
  $row->save();
  Flight::redirect('/' . $redirect);
}

public function updexe($table,$redirect){
  $updid = Flight::request()->data->updid;
  $row = ORM::for_table($table)->find_one($updid);
  $row->title = Flight::request()->data->title;
  $row->save();
  Flight::redirect('/' . $redirect);
}

public function updform($updid,$table,$tpl){
  $row = ORM::for_table($table)->find_one($updid);
  Flight::view()->assign('title', $row->title);
  Flight::view()->assign('updid', $updid);
  Flight::view()->display($tpl);
}

}

