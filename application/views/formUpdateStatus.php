<h1><?php echo $judul; ?></h1>


<script>
function myFunction() {
    if (confirm("Apakah Anda yakin ingin memperbaharui status?") == true) {
        
    } else {
        document.getElementById("konten").innerHTML;
    }
    
}
</script>
<div id="konten">

        <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-8">
        <form name='update_status' action='<?php echo base_url();?>index.php/ops/create/createStatus' method='post' onsubmit='return confirm("Apakah Anda yakin ingin menambahkan status?")'>
        <?php
        
        echo "<div class='form-group'>";
            echo "<label for='id_murid'>ID Murid</label>";
            echo "<input type='text' class='form-control' name='id_murid' placeholder='ID Murid' value='" . $info->id_murid . "' required>";
        echo "</div>";
        
        echo "<div class='form-group'>";
            echo "<label for='jam'>Jam</label>";
            echo "<input type='time' class='form-control' name='jam' placeholder='Jam' value='" . date("H:i:s") . "' required>";
        echo "</div>";
        
        echo "<div class='form-group'>";
            echo "<label for='tanggal'>Tanggal</label>";
            echo "<input type='date' class='form-control' name='tanggal' value=" .  date("Y-m-d") . " required>";
        echo "</div>";
        
        echo "<div class='form-group'>";
            echo "<label for='id_sales'>ID Sales</label>";
            echo "<input type='text'class='form-control' name='id_sales' placeholder='ID Sales' value=" . $this->session->userdata('id') . ">";
        echo "</div>";
        
        echo "<div class='form-group'>";
            echo "<label for='noInvoice'>No Invoice (wajib diisi apabila status yang akan diisi adalah 6, 7 atau 8)</label>";
            echo "<input type='text' class='form-control' name='no_invoice' placeholder='Nomor Invoice'>";
        echo "</div>";
        
        echo "<div class='form-group'>";
                  echo "<label for='status'>Status</label>";
                    echo "<select class='form-control' name='status' required>";
                        echo "<option>1</option>";
                        echo "<option>2</option>";
                        echo "<option>3</option>";
                        echo "<option>4</option>";
                        echo "<option>5</option>";
                        echo "<option>6</option>";
                        echo "<option>7</option>";
                        echo "<option>8</option>";
                    echo "</select>";
        echo "</div>";
        
        echo "<button id='demo' class='btn btn-danger'>
            <span class='glyphicon glyphicon-plus' aria-hidden='true'></span>
             Update Status</button>";
        ?>
        </form>
        </div>
        
                <div class="col-xs-6 col-md-4">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title" id ="toggle">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Penjelasan Status
                        </a>
                        
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                        <p><b>1</b> = yang direncanakan</p>
                        <p><b>2</b> = sudah ditelepon, belum bisa dihubungi</p>
                        <p><b>3</b> = sudah ditelepon, belum mau request</p>
                        <p><b>4</b> = sudah request, guru belum tersedia</p>
                        <p><b>5</b> = sudah request, guru sudah setuju, murid belum</p>
                        <p><b>6</b> = sudah request, guru dan murid sudah setuju</p>
                        <p><b>7</b> = invoice sudah dikirim</p>
                        <p><b>8</b> = uang sudah ditransfer ke Ruangguru</p>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    
        



    
</div>


