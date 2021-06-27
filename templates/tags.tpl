{extends file="layout.tpl"} 
{block "body"}
<div id="app">
<button v-on:click="show = !show">open</button>
<div v-if="show">
<form action="taginsexe" method="post">
  <input type="text" name="title">
  <input type="submit" value="send">
</form>
</div>
<br>
  
  {foreach $rows as $row}
    <a href="tag/{$row.id}">{$row.title}</a>
    <br>
  {/foreach}
  
</div>

<script>
new Vue({
  el: '#app',
  data: {
    show: false
  }
})
//let jsStr = "<?php echo($list[0]);?>";
//console.log(jsStr);
</script>
{/block}
