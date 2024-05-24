<?php
$sql= $koneksi->query("select * from tb_barang");
while ($tampil = $sql->fetch_assoc()) {
    $jumlah_barang = $sql->num_rows;
}

$sql2= $koneksi->query("select * from tb_konsumen");
while ($tampil2 = $sql2->fetch_assoc()) {
    $jumlah_konsumen = $sql2->num_rows;
}

$sql3= $koneksi->query("select * from tb_supplier");
while ($tampil3 = $sql3->fetch_assoc()) {
    $jumlah_supplier = $sql3->num_rows;
}
?>
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-colorhunt2 hover-expand-effect">
                        <div class="icon">
                        <iconify-icon icon="icon-park-solid:adjacent-item" style="font-size:50px;margin-top: 10px;"></iconify-icon>
                        </div>
                        <div class="content">
                            <div class="text">Data Barang</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"><?php echo $jumlah_barang;?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-colorhunt2 hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">add_shopping_cart</i>
                        </div>
                        <div class="content">
                            <div class="text">Data Pelanggan</div>
                            <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"><?php echo $jumlah_konsumen;?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-colorhunt2 hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">handshake</i>
                        </div>
                        <div class="content">
                            <div class="text">Supplier</div>
                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"><?php echo $jumlah_supplier;?></div>
                        </div>
                    </div>
                </div>
            