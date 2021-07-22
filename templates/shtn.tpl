{extends file="layout.tpl"} 
{block "body"}

  <a href="/210622flight/shtns">return to shtns</a>
  <a href="/210622flight/tags">return to tags</a>
  <p>
    {$rowshtn.title}
    <a href="/210622flight/shtnupd/{$rowshtn.id}">update</a>
    <a href="/210622flight/shtndel/{$rowshtn.id}">delete</a>
  </p>

<form action="/210622flight/postinsexeFromShtn/{$rowshtn.id}" method="post">
  <textarea name="text"></textarea>
  <input type="submit" value="send">
</form>

  {foreach $rows as $row}
    <p>
      {$row.posttext}
      <a href="/210622flight/post/1/{$row.postid}">post</a>
      <a href="/210622flight/postupdFromShtn/{$row.shtnid}/{$row.postid}">update</a>
      <a href="/210622flight/postdelFromShtn/{$row.shtnid}/{$row.postid}">delete</a>
    </p>
  {/foreach}
{*
      <a href="/210622flight/post/{$row.tagid}/{$row.postid}">post</a>
      {$row.shtntitle}
*}
{/block}
