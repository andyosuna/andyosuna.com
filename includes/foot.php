	<?php include 'includes/footer.php'; ?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/functions.js"></script>
<script>
<?php
if($pageCurrent === $navItem[2]):
	echo 'counter();';
endif;
?>

mobileMenu();
</script>
</body>
</html>