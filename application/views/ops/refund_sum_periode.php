<h1><?php echo $judul; ?></h1>

<div id ="konten-kecil">
        <form name='searchRefund' action='<?php echo base_url(); ?>index.php/ops/refund_controller/searchPeriode' method='post' >
        
        <div class="form-group">
            <label for="tanggal">Tanggal Awal (*)</label>
            <input type='date' class="form-control" name='tanggal-awal' required>
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal Akhir (*)</label>
            <input type='date' class="form-control" name='tanggal-akhir' required>
        </div>

        <button type="submit" class="btn btn-danger">
            <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search</button>
        </form>
        
    

</div>