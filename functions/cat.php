<?php
use Michelf\MarkdownExtra;

function catup($upid){
 $up = new Up();
 $up->upexe($upid,"cat","tags");
}

function catdel($delid){
 $del = new Del();
 $del->delexe($delid,"cat","tags");
}

function catupdexe(){
 $upd = new Upd();
 $upd->updexe("cat","tags");
}

function catupd($updid){
 $upd = new Upd();
 //$upd = new Upd($updid,"cat","catupd.tpl");
 $upd->updform($updid,"cat","catupd.tpl");
}

function insexe(){
//echo "ins";
 $ins = new Ins();
 $ins->insexe("cat","tags");
}
