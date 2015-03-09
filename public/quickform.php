<?php require_once("../include/db_connect.php"); ?>
<?php require_once("../include/functions.php"); ?>
<?php include("../include/layout/header.php") ?>

<script type="text/javascript">

</script>
<form id="form">
	<!-- Name -->
	Title: <br />
			<input onClick="this.select();" type="text" name="movie_name" value="Post Title" maxlength="120" /><br /><br />
	<!-- Category -->
	Category: <br />
	<select name="cat_id">
		<?php makeselectlist("categories", "id", "category_name", $db); ?>
	</select><br /><br />
	<!-- Studio (optional) -->
	<!-- Submit -->
	<button>Submit</button>
</form>

<?php include("../include/layout/footer.php") ?>