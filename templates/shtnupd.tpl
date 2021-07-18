{extends file="layout.tpl"} 
{block "body"}

<form action="/210622flight/shtnupdexe" method="post">
  <input type="hidden" name="shtnid" value="{$shtnid}">
  <input type="text" name="title" value="{$title}">
  <input type="submit" value="send">
</form>

{/block}
