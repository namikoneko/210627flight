<?php
ini_set('display_errors', 1);
require '../libs/flight/Flight.php';
require_once './routing.php';
require_once './functions/tag.php';
require_once './functions/post.php';

//idiormの設定
require_once '../libs/idiorm.php';
ORM::configure('sqlite:./data.db');
ORM::configure('return_result_sets', true); // returns result sets

//smartyの設定
require_once('../smarty-master/libs/Smarty.class.php');
Flight::register('view', 'Smarty', array(), function($smarty){
    $smarty->template_dir = './templates/';
    $smarty->compile_dir = './templates_c/';
    $smarty->config_dir = './config/';
    $smarty->cache_dir = './cache/';
});

function postinsexe($tagid){
    $row = ORM::for_table('post')->create();
    //$row->title = Flight::request()->data->title;
    $row->text = Flight::request()->data->text;
    $row->date = time();
    $row->save();
    $row = ORM::for_table('map')->create();//map insert
    $row->tagid = $tagid;
    $row->postid = ORM::for_table('post')->max('id');
    $row->save();
    Flight::redirect('/tag/' . $tagid);
}

function test(){
echo "tags!";

  $rows = ORM::for_table('tag')->find_array();
  //Flight::render('tags', array('rows' => $rows), 'body');

// Assign template data
Flight::view()->assign('rows', $rows);

// Display the template
Flight::view()->display('tags.tpl');
//Flight::view()->display('child.tpl');
//Flight::view()->display('parent.tpl');
//Flight::view()->display('hello.tpl');
//$list = ["x","y"];
//Flight::render('post.php', array('list' => $list));

//	$list = orm::for_table('tag')->find_array();
//	flight::json($list);
}

Flight::start();
