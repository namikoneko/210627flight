{extends file="layout.tpl"} 
{block "body"}

<form action="/210622flight/postupdFromShtnexe" method="post">
  <input type="hidden" name="shtnid" value="{$shtnid}">
  <input type="hidden" name="postid" value="{$row.id}">
  <textarea name="text">{$row.text}</textarea>
  <input type="submit" value="send">
</form>

{/block}
