<h1><?php echo $judul; ?></h1>

<div id="konten">
  <?php
    echo '<div class="panel panel-primary">
  <div class="panel-heading"><center>Informasi Target Performa</center></div>';
    echo "<table class='table table-bordered'>\n";
	echo "<tr valign='top'>\n";
	echo "<th><center>ID Sales</center></th>
        <th><center>Periode</center></th>
        <th><center>Target</center></th>";
        
	echo "</tr>\n";
	

		echo "<tr valign='top'>\n";
		echo "<td>".$target->id_sales."</td>\n";
                echo "<td>".$target->periode."</td>\n";
                echo "<td>".$target->target."</td>\n";
                
		echo "</td>\n";
		echo "</tr>\n";
    
	echo "</table>	";
	echo "</div>";
        ?>
</div>	
<div id="konten-kecil">	
    
    <form name='editPerformance' action='<?php echo base_url();?>index.php/supervisor/performance/edit' method='post' onsubmit='return confirm("Apakah Anda yakin ingin mengubah target?")' >
                <input type='hidden' class="form-control" name='id_sales' value=<?php echo $target->id_sales ?>>
		<input type='hidden' class="form-control" name='id' value=<?php echo $target->id ?>>
		<div class="form-group">
		<label for="periode">	Periode</label>
                        <input type='month' class="form-control" name='periode' value=<?php echo $target->periode?>>
                </div>
                <div class="form-group">
                	<label for="target">	Target Baru</label>
                        <input type='text' class="form-control" name='target' placeholder="target" value=<?php echo $target->target?>>
                </div>
                        <input type='hidden' class="form-control" name='id_supervisor' value=<?php echo $this->session->userdata['id'] ?>>
                
                        <div class="form-group"><button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Update</button></div>
</form>
</div>

    </html>