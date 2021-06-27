<?php
/* Smarty version 3.1.39, created on 2021-06-27 02:56:17
  from '/Library/WebServer/Documents/210622flight/templates/tags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60d7e8d100f845_02144144',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c82b20f9182c77d92ac702872437beccbdbebb49' => 
    array (
      0 => '/Library/WebServer/Documents/210622flight/templates/tags.tpl',
      1 => 1624761556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60d7e8d100f845_02144144 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58368602060d7e8d10005a7_67673173', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "body"} */
class Block_58368602060d7e8d10005a7_67673173 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_58368602060d7e8d10005a7_67673173',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="app">
<button v-on:click="show = !show">open</button>
<div v-if="show">
<form action="taginsexe" method="post">
  <input type="text" name="title">
  <input type="submit" value="send">
</form>
</div>
<br>
  
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
    <a href="tag/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</a>
    <br>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  
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
