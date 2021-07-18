{extends file="layout.tpl"} 
{block "body"}

  <a href="/210622flight/tags">return to tags</a>
   <form action="shtninsexe" method="post">
    <div class="flex">
     shtn: <input type="text" name="title">
     <input type="submit" value="send">
    </div>
   </form>

  {foreach $rows as $row}
    <a href="shtn/{$row.id}">{$row.title}</a>
    <br>
  {/foreach}

{/block}
