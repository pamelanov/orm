<html>
<h1><?php echo $judul;?></h1>
<a href="<?php echo base_url(); ?>index.php/admin/student/" > Student</a>
<a href="<?php echo base_url(); ?>index.php/admin/dashboard/refund" > Refund</a>
<a href="<?php echo base_url(); ?>index.php/admin/feedback" > Feedback</a>

<h2 align="center">Status Summary</h2>					
	<form name='searchStudent' action='<?php echo base_url();?>index.php/admin/summary/searchStudent' method='post' >
		<table align="center">
			<tr><td>Enter Student ID</td><td><input type='text' name='idMurid'>
		 	<tr><td></td><td><input type='submit' value='search'></td></tr>
		</table>
	</form>
</html>