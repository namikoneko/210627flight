{extends file="layout.tpl"} 
{block "body"}

<br>
<form action="../../postupdexe" method="post">
  <input type="hidden" name="tagid" value="{$tagid}">
  <input type="hidden" name="postid" value="{$row.id}">
  <textarea name="text">{$row.text}</textarea>
  <input type="submit" value="send">
</form>

{*
  <input type="text" name="title" value="{$title}">
*}
{/block}
