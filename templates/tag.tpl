{extends file="layout.tpl"} 
{block "body"}

<div class="flex gap-2">
  <a href="/210622flight/tags">return to tags</a>
  <a href="/210622flight/shtns">return to shtns</a>
  {$row.title}
  <a href="../tagupd/{$row.id}">update</a>
  <a href="../tagdel/{$row.id}">delete</a>
   <form action="/210622flight/postfindtag/{$row.id}" method="get">
    <div class="flex">
     find: <input type="text" name="q">
     <input type="submit" value="send">
    </div>
   </form>
</div>{*flex*}

<form action="../postinsexe/{$row.id}" method="post">
  <textarea name="text"></textarea>
  <input type="submit" value="send">
</form>
{foreach $rows as $row}
  {$row.posttext}
  <a href="../post/{$row.tagid}/{$row.postid}">post</a>
  <a href="../postupd/{$row.tagid}/{$row.postid}">update</a>
  <a href="../postdel/{$row.tagid}/{$row.postid}">delete</a>
  <a href="/210622flight/postup/{$row.tagid}/{$row.postid}">up</a>
  
  <a href="/210622flight/shtn/{$row.shtnid}">{$row.shtntitle}</a>
  <a href="/210622flight/postcp/{$row.tagid}/{$row.postid}">copy</a>
  <br>
{/foreach}

{*
*}
{/block}
