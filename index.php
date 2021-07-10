<?php
ini_set('display_errors', 1);
require_once '../libs/flight/Flight.php';
require_once '../libs/Michelf/MarkdownExtra.inc.php';
//use Michelf\MarkdownExtra;
require_once './routing.php';
require_once './functions/tag.php';
require_once './functions/post.php';
require_once './functions/cat.php';
//$my_html = MarkdownExtra::defaultTransform($my_text);
require_once "./functions/insclass.php";
require_once "./functions/updclass.php";
require_once "./functions/delclass.php";
require_once "./functions/upclass.php";

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
//echo "cats!";

$sql = <<<EOD
  SELECT cat.id as catid,cat.title as cattitle,cat.updated as catupdated,
  tag.id as tagid,tag.title as tagtitle
  FROM tag
  left JOIN cat
  ON cat.id = tag.catid 
  order by cat.updated desc, tag.updated desc
EOD;
//  left JOIN cat
//  FROM cat 
//  JOIN tag 
$rows = ORM::for_table('cat')->raw_query($sql)->find_array();
//flight::json($rows);

$cnt = count($rows);
//echo $cnt;
Flight::view()->assign('rows', $rows);
Flight::view()->assign('cnt', $cnt);
Flight::view()->display('cats.tpl');

//$rows = ORM::for_table('cat')->join('tag', array('cat.id', '=', 'tag.catid'))->find_array();
//$rows = ORM::for_table('cat')->join('cat', array('cat.id', '=', 'tag.catid'))->find_many();
}

Flight::start();
