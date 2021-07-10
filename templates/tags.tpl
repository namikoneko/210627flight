{extends file="layout.tpl"} 
{block "body"}
<div id="app">
  <button v-on:click="show = !show">open</button>
  <div v-if="show">
  <div class="flex">
   <form action="taginsexe" method="post">
    <div class="flex">
     tag: <input type="text" name="title">
     <input type="submit" value="send">
    </div>
   </form>
   <form action="catinsexe" method="post">
    <div class="flex">
     cat: <input type="text" name="title">
     <input type="submit" value="send">
    </div>
   </form>
  </div>
  </div>
 <br>
  
<div class="flex">
{for $i=0 to $cnt - 1 }
{*現在の行のcattitleが，1つ前の行のcattitleと異なるとき*}
 {if $rows[$i].cattitle != $rows[$i-1].cattitle}
   {*現在の行のcattitleが空白のとき*}
   {if $rows[$i].cattitle == ""}
    </div>{*flex*}
    <p>
      タグなし
    </p>
    <div class="flex gap-4">
   {else}
    </div>{*flex*}
    <p>
      {$rows[$i].cattitle}
      <a href="/210622flight/catupd/{$rows[$i].catid}">update</a>
      <a href="/210622flight/catup/{$rows[$i].catid}">up</a>
    </p>
    <div class="flex gap-4">
  {/if}
{/if}
  <p>
    <a href="tag/{$rows[$i].tagid}">{$rows[$i].tagtitle}</a>
    <a href="/210622flight/tagup/{$rows[$i].tagid}">up</a>
  </p>
{/for}
</div>{*flex*}

{*
    {$rows[$i].cattitle}:
  {foreach $rows as $row}
    <a href="tag/{$row.id}">{$row.title}</a>
    <br>
  {/foreach}
*}
  
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
