<!DOCTYPE html>
    <html lang="en"></html>
    <h1><?php echo $judul; ?></h1>
<ul class="nav nav-tabs">
    <li role="presentation"><a href="<?php echo base_url(); ?>index.php/dashboard/createData" > Home</a></li>
    <li role="presentation"class="active" ><a href="<?php echo base_url(); ?>index.php/ops/student/searchSummary" > Student</a></li>
    <li role="presentation"><a href="<?php echo base_url(); ?>index.php/dashboard/createRefund" > Refund</a></li>
    <li role="presentation"><a href="<?php echo base_url(); ?>index.php/dashboard/createFeedback" > Feedback</a></li>
</ul>
    <body>
    <h2>Search Student</h2>					
	<form name='searchStudent' action='<?php echo base_url();?>index.php/ops/summary/searchStudentStatus' method='post' >
		<p>
			Enter Student ID
                        <input type='text' name='idMurid'>
                         
		 	<input type='submit' value='search'>
		</p>
<!-- <form>
    <div id ="konten">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <input type="file" id="exampleInputFile">
            <p class="help-block">Example block-level help text here.</p>
        </div>
        <div class="checkbox">
            <label>
            <input type="checkbox"> Check me out
        </label>
    </div>
    <button type="submit" class="btn btn-default">Update Status</button>
</form>
</div>
                -->
</body>
</html>