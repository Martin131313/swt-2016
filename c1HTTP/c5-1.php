<!-- Fopen -->
<!-- Fread -->
<!-- Fcloas -->
<!-- Fwrite -->
<!-- Unlink -->
<!-- Filesize -->
<!-- Rewind -->
<?php 

$filename = 'fajl.txt';

$fh = fopen($filename,'a+');

fwrite($fh, 'Vrska nemate od PHP! ');


 ?>