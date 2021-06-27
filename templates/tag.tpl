{extends file="layout.tpl"} 
{block "body"}

<a href="../tags">return to tags</a>
<br>
{$row.title}
<a href="../tagupd/{$row.id}">update</a>
<a href="../tagdel/{$row.id}">delete</a>
<form action="../postinsexe/{$row.id}" method="post">
  <textarea name="text"></textarea>
  <input type="submit" value="send">
</form>
{foreach $rows as $row}
  {$row.posttext}
  <a href="../post/{$row.tagid}/{$row.postid}">post</a>
  <a href="../postupd/{$row.tagid}/{$row.postid}">update</a>
  <a href="../postdel/{$row.tagid}/{$row.postid}">delete</a>
  <br>
{/foreach}

{*
*}
{/block}
