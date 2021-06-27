{extends file="layout.tpl"} 
{block "body"}

<form action="../tagupdexe" method="post">
  <input type="hidden" name="tagid" value="{$tagid}">
  <input type="text" name="title" value="{$title}">
  <input type="submit" value="send">
</form>

{/block}
