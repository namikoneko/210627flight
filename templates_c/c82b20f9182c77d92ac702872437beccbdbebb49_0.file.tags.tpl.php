<?php
/* Smarty version 3.1.39, created on 2021-07-18 07:48:25
  from '/Library/WebServer/Documents/210622flight/templates/tags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60f3dcc94cedd6_12725513',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c82b20f9182c77d92ac702872437beccbdbebb49' => 
    array (
      0 => '/Library/WebServer/Documents/210622flight/templates/tags.tpl',
      1 => 1626594501,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60f3dcc94cedd6_12725513 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_100693016960f3dcc94b4643_35879236', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "body"} */
class Block_100693016960f3dcc94b4643_35879236 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_100693016960f3dcc94b4643_35879236',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="app">
  <a href="/210622flight/shtns">return to shtns</a>
  <button v-on:click="show = !show">open</button>
  <div v-if="show">
  <div class="flex">
   <form action="catinsexe" method="post">
    <div class="flex">
     inscat: <input type="text" name="title">
     <input type="submit" value="send">
    </div>
   </form>
   <form action="postfindtags" method="get">
    <div class="flex">
     find: <input type="text" name="q">
     <input type="submit" value="send">
    </div>
   </form>
  </div>
  </div>
 <br>
  
<div class="flex">
<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['cnt']->value-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['cnt']->value-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
 <?php if ($_smarty_tpl->tpl_vars['rows']->value[$_smarty_tpl->tpl_vars['i']->value]['cattitle'] != $_smarty_tpl->tpl_vars['rows']->value[$_smarty_tpl->tpl_vars['i']->value-1]['cattitle']) {?>
      <?php if ($_smarty_tpl->tpl_vars['rows']->value[$_smarty_tpl->tpl_vars['i']->value]['cattitle'] == '') {?>
    </div>    <p>
      ????????????
    </p>
    <div class="flex gap-4">
   <?php } else { ?>
    </div>    <p>
      <?php echo $_smarty_tpl->tpl_vars['rows']->value[$_smarty_tpl->tpl_vars['i']->value]['cattitle'];?>

      <a href="/210622flight/catupd/<?php echo $_smarty_tpl->tpl_vars['rows']->value[$_smarty_tpl->tpl_vars['i']->value]['catid'];?>
">update</a>
      <a href="/210622flight/catup/<?php echo $_smarty_tpl->tpl_vars['rows']->value[$_smarty_tpl->tpl_vars['i']->value]['catid'];?>
">up</a>
    </p>
    <div class="flex gap-4">
   <?php }
}?>
  <p>
    <a href="tag/<?php echo $_smarty_tpl->tpl_vars['rows']->value[$_smarty_tpl->tpl_vars['i']->value]['tagid'];?>
"><?php echo $_smarty_tpl->tpl_vars['rows']->value[$_smarty_tpl->tpl_vars['i']->value]['tagtitle'];?>
</a>
    <a href="/210622flight/tagup/<?php echo $_smarty_tpl->tpl_vars['rows']->value[$_smarty_tpl->tpl_vars['i']->value]['tagid'];?>
">up</a>
  </p>
<?php }
}
?>
</div>
  
</div>

<?php echo '<script'; ?>
>
new Vue({
  el: '#app',
  data: {
    show: false
  }
})
//let jsStr = "<?php echo '<?php ';?>
echo($list[0]);<?php echo '?>';?>
";
//console.log(jsStr);
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "body"} */
}
