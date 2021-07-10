{extends file="layout.tpl"} 
{block "body"}

<form action="/210622flight/catupdexe" method="post">
  <input type="hidden" name="updid" value="{$updid}">
 <div class="flex">
  <input type="text" name="title" value="{$title}">
  <input type="submit" value="send">
  <a href="/210622flight/catdel/{$rows[$i].catid}">delete</a>
 </div>
</form>
<form action="/210622flight/insexeWithCatid" method="post">
  <input type="hidden" name="parentidfield" value="{$updid}">
 <div class="flex">
  tagins: <input type="text" name="title">
  <input type="submit" value="send">
 </div>
</form>

{/block}
