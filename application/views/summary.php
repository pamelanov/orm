 <script>
            $(document).on("click", ".recurring", function(e) {
            bootbox.dialog({
                title: "Menambahkan Recurring Status",
                message:
                '<form class="form-horizontal" id="form-recurring"> ' +
                    '<div class="row">  ' +
                    '<div class="col-md-12"> ' +
                        
                            '<div class="form-group"> ' +
                                '<label class="col-md-4 control-label" for="name">ID Kelas</label> ' +
                                    '<div class="col-md-4"> ' +
                                        '<input name="idKelas" type="text" placeholder="ID kelas" class="form-control input-md"> ' +
                                    '</div> ' +
                            '</div> ' +
                            '<div class="form-group"> ' +
                                '<label class="col-md-4 control-label" for="tanggal">Tanggal Pengisian </label>' +
                                    '<div class="col-md-4"> ' +
                                        '<input type="date" name="tanggal"> ' +
                                    '</div>' +
                            '</div>' +
                            '<div class="form-group"> ' +
                                '<label class="col-md-4 control-label" for="recurring">Melanjutkan Kelas?</label> ' +
                                    '<div class="col-md-4"> ' +
                                            '<a class="recurring-ya" href=#>' +
                                                '<span class="glyphicon glyphicon-ok" aria-hidden="true">Ya</span></a> \n' +
                                            '<a class="recurring-tidak" href=#>' +
                                                 '<span class="glyphicon glyphicon-remove" aria-hidden="true">Tidak</span></a> \n' +
                                    '</div>' +
                            '</div>' +
                        //'</form>' +
                    '</div>' +
                '</div>',
                buttons: {
                    success: {
                        label: "Bikin dulu dah huhuhu",
                        className: "btn-success",
                        callback: function () {
                            var name = $('#name').val();
                            var answer = $("input[name='awesomeness']:checked").val()
                            Example.show("Hello " + name + ". You've chosen <b>" + answer + "</b>");
                        }
                    }
                }
                
            }
        );
        });
            
        $(document).on("click", ".recurring-ya", function(a) {
            bootbox.dialog({
                title: "Melanjutkan Kelas",
                message:
                '<div class="row">  ' +
                    '<div class="col-md-12"> ' +
                        //'<form class="form-horizontal"> ' +
                            '<div class="form-group"> ' +
                                 '<label class="col-md-4 control-label" for="periode">Periode</label> ' +
                                        '<div class="col-md-4"> ' +
                                            '<input type="date" name="periode-awal" class="form-control input-md">' +
                                            '<center>s/d</center>' +
                                            '<input type="date" name="periode-akhir" class="form-control input-md">'  +
                                        '</div>' +
                            '</div>' +
                    '</div>' +
                    '<div class="col-md-12"> ' +
                            '<div class="form-group"><br/>' +
                                '<label class="col-md-4 control-label" for="jumlah-jam">Jumlah Jam</label> ' +
                                    '<div class="col-md-4"> ' +
                                        '<input name="jumlah-jam" type="text" placeholder="jumlah jam" class="form-control input-md"> ' +
                                    '</div>' +
                            '</div>' +
                    
                        //'</form>' +
                    '</div>' +
                '</div>' +
                '</form>'
                
                ,
                buttons: {
                    success: {
                        label: "Simpan",
                        className: "btn-success",
                        callback: function () {
                            var name = $('#name').val();
                            var answer = $("input[name='awesomeness']:checked").val()
                            Example.show("Hello " + name + ". You've chosen <b>" + answer + "</b>");
                        }
                    }
                }
            }
        );
        });
        
        $(document).on("click", ".recurring-tidak", function(b) {
            bootbox.dialog({
                title: "Tidak Melanjutkan Kelas",
                message:
                    '<div class="col-md-12"> ' +
                            '<div class="form-group"> ' +
                                 '<label class="col-md-4 control-label" for="periode">Alasan</label> ' +
                                        '<div class="col-md-4"> ' +
                                            '<textarea rows="4" cols="200" name="alasan" form="form-recurring" class="form-control input-md"></textarea>'  +
                                        '</div>' +
                            '</div>' +
                    '</div>' +
                '</form>'
                
                ,
                buttons: {
                    success: {
                        label: "Simpan",
                        className: "btn-success",
                        callback: function () {
                            var name = $('#name').val();
                            var answer = $("input[name='awesomeness']:checked").val()
                            Example.show("Hello " + name + ". You've chosen <b>" + answer + "</b>");
                        }
                    }
                }
            }
        );
        });
</script>

    <h1><?php echo $judul; ?></h1>
    <ul class="nav nav-tabs">
        <li role="presentation" class="active" ><a href="<?php echo base_url(); ?>index.php/dashboard/summary" > Student</a></li>
        <li role="presentation"><a href="<?php echo base_url(); ?>index.php/dashboard/refunds" > Refund</a></li>
        <li role="presentation"><a href="<?php echo base_url(); ?>index.php/dashboard/feedbacks" > Feedback</a></li>
    </ul>

<div class="row">
  <div class="col-xs-6">
<div id="konten">
    <form class="form-inline" align="left" action='<?php echo base_url(); ?>index.php/ops/summary/searchStudent' method='post'>
    <div class="form-group">
        <label for="exampleInputName2">Enter Student ID</label> </div>
        <input type="text" class="form-control" name="idMurid" placeholder="Student ID">
  
    <button type="submit" class="btn btn-danger">
			 <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search</button>

</form>
<br/><br/>
 <?php


if ((!empty($students)) && (!empty($students2))) {
        ?>
        <?php
        
        echo "<table class='table table-bordered'>\n";
            echo "<tr valign='top'>\n";
                echo "<th><center>Status</center></th>
                        <th><center>Tanggal Pengisian</center></th>
                        <th><center>No Invoice</center></th>\n";
            echo "</tr>\n";
            foreach ($students as $student){
            echo "<tr valign='top'>\n";
            echo "<td align='center'>" . $student->status . "</td>\n";
            echo "<td align='center'>" . $student->tanggal . "</td>\n";
            echo "<td align='center'> <span class='glyphicon glyphicon-minus' aria-hidden='true'></span> </td>\n";
            echo "</tr>\n";
            }
            foreach ($students2 as $student) {
            echo "<td align='center'>" . $student->no . "</td>\n";    
            echo "<td align='center'>" . $student->tanggal . "</td>\n";
            echo "<td align='center'> <span class='glyphicon glyphicon-minus' aria-hidden='true'></span> </td>\n";
            echo "</tr>\n";
            }
        echo "</table>";
        // echo "<a href='" . base_url() . "index.php/ops/summary/recurring(" . $student->id .  ")' >
        echo "<a class='recurring' href=#>
        <button class='btn btn-success'>
            <span class='glyphicon glyphicon-plus-sign' aria-hidden='true'></span> Recurring Status
        </button>
        </a>";
} ?>

</div>
<!--nutup col xs--></div>
  
  <div class="col-xs-6">

<div id="konten">
<form id='form-recurring' action='<?php echo base_url();?>index.php/ops/summary/recurring' method='post'>
    <div class="form-group">
        <label>ID Kelas</label>
            <input name="idKelas" type="text" placeholder="ID kelas" class="form-control input-md">
    </div>
    <div class="form-group">
        <label>Tanggal Pengisian </label>
            <input type="date" name="tanggal" class="form-control input-md">
    </div>
    <div class="form-group">
        <label>ID Sales</label>
            <input name="idSales" type="text" placeholder="ID sales" class="form-control input-md">
    </div>
    <center><span class="label label-success">jika melanjutkan:</span></center>
    <div class="form-group">
        <label>Periode</label>
                <input type="date" name="periode-awal" class="form-control input-md">
                s/d
                <input type="date" name="periode-akhir" class="form-control input-md">        
    </div>
    <div class="form-group">
        <label>Jumlah Jam</label>
            <input name="jumlah-jam" type="text" placeholder="jumlah jam" class="form-control input-md">
    </div>
    
    
    <center><span class="label label-success">jika tidak melanjutkan:</span></center>
    <div class="form-group">
        <label>Alasan</label>
            <textarea rows="4" cols="200" name="alasan" form="form-recurring" class="form-control input-md"></textarea>
    </div>
    
    <button type="submit" class='btn btn-success'>
        <span class='glyphicon glyphicon-plus-sign' aria-hidden='true'></span> Tambah
    </button>
</form>
</div>

<!--nutup col xs--></div>
</div>

</html>