<?php 

echo('ADMIN<br>');
echo($_SERVER['REQUEST_URI']);

echo('<pre>');
print_r($_GET);
echo('</pre>');
exit;