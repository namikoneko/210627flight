{extends file="layout.tpl"} 
{block "body"}

<form action="../tagupdexe" method="post">
  <input type="hidden" name="tagid" value="{$tagid}">
  <input type="text" name="title" value="{$title}">
  <input type="submit" value="send">
</form>

{foreach $rows as $row}
  <a href="/210622flight/tagupdexeCatid/{$tagid}/{$row.id}">{$row.title}</a>
  <br>
{/foreach}

{/block}
