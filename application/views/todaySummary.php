<h1><?php echo $judul; ?></h1>

<p><?php echo anchor("dashboard/todaySummary", "<button type='button' class='btn btn-info'>Today's Summary</button>"); ?></p>
<br/><br/>
        <?php
	
        
        echo "<table id='tableSum' class='table table-bordered'>\n";
            echo "<tr valign='top'>\n";
                echo "
			<th><center>ID Murid</center></th>
			<th><center>Status</center></th>
                        <th><center>Tanggal</center></th>
			<th><center>Action</center></th>";
                       
            echo "</tr>\n";
            
            foreach ($statusAwal as $status){
            echo "<tr valign='top'>\n";
	    echo "<td align='center'>" . $status->id_murid . "</td>\n";
            echo "<td align='center'>" . $status->status . "</td>\n";
            echo "<td align='center'>" . $status->tanggal . "</td>\n";
	    echo "<td align='center'> <button type='button' class='btn btn-danger'><span class='glyphicon glyphicon-plus' aria-hidden='true'></span>Add</button> </td>\n";
            echo "</tr>\n";
            }
	    
            foreach ($statusAkhir as $status) {
	    echo "<td align='center'>" . $status->id_invoice . "</td>\n";
            echo "<td align='center'>" . $status->no . "</td>\n";    
            echo "<td align='center'>" . $status->tanggal . "</td>\n";
	     echo "<td align='center'> <button type='button' class='btn btn-danger'><span class='glyphicon glyphicon-plus' aria-hidden='true'></span>Add</button> </td>\n";
            echo "</tr>\n";
            }
            
            
        echo "</table>";
        /*
        echo "<a href='" . base_url() . "index.php/ops/summary/recurring' >
        <button class='btn btn-success'>
            <span class='glyphicon glyphicon-plus-sign' aria-hidden='true'></span> Recurring Status
        </button>
        </a>";
        */
		?>

</div>
</form>
</html>
