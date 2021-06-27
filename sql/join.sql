SELECT tag.id as tagid,tag.title as tagtitle,
  post.id as postid,post.title as posttitle,post.text as posttext
  FROM tag
  left JOIN map
  ON tag.id = map.tagid
  left join post
  ON map.postid = post.id
  where tagid = 2;
--  where tagid = 1;
