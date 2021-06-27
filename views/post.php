
post.php!
<script>
let jsStr = "<?php echo($list[0]);?>";

console.log(jsStr);
</script>
<?php

print_r($list);
foreach ($list as $data){
  echo $data;
}
?>
