<?php

require_once "../vendor/autoload.php";
$figlet = new Zend\Text\Figlet\Figlet();

?>
<pre>
<?php echo $figlet->render(gethostname()); ?>

<?php echo gethostname(); ?>
</pre>




