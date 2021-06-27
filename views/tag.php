<script>

</script>
<a href="../tags">return to tags</a>
<form action="../postinsexe/<?php echo ($rows[0]["tagid"]); ?>" method="post">
  <textarea name="text"></textarea>
  <input type="submit" value="send">
</form>
<?php
//print_r($rows[1]["tagtitle"]);

echo ($rows[0]["tagtitle"]);

echo "<hr>";
foreach ($rows as $row){
//  echo $row["posttitle"];
//  echo "<br>";
  echo $row["posttext"];
  echo "<br>";
}
?>
