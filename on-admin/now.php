<?php
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'view':
            break;
    }
}
?>
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
      
            <ol class="breadcrumb">
              <li><a href="?pg=dashboard"><i class="fa fa-dashboard"></i> Beranda</a></li>
              <li><a href="?pg=lappj&act=view"><i class="fa fa-dashboard"></i> Laporan </a></li>
             </ol>
              <form action="now.php" method="post" name="postform">
              <table border="0">
                <tr>
                    <td width="80"><input type="submit" value="Tampilkan Data Sekarang" name="tampil"/></td>
                </tr>
            </table>
        </section>

<section class="content">
  <div class="row">
  <div class="col-md-5">
  <form action="?pg=lappj&act=cek" method="POST">
      <div class="form-group">
      <label for="exampleInputEmail1">Tanggal Go-Live</label>
      <input class="form-control" id="date" name="tgl_selesai" placeholder="DD/MM/YYYY" type="text" />
      </div>
  </div>
  
  <div class="col-md-2">
      <div class="form-group">
      <label for="exampleInputEmail1">Mulai Pencarian</label><br>
      <input type="submit" value="Pencarian" class="btn btn-info">
      </div>
  </div>
  </form>
    <div style="border:1px solid #B0C4DE; padding:5px; overflow:auto; width:680px; height:300px;">
        <?php
            
            $tgl    =date("Y-m-d");
        ?>
       
        <p>
        <?php
            //proses jika sudah klik button
            if(isset($_POST['tampil'])){
        ?>
        <i><b>Informasi : </b> Menampilkan Data Berdasarkan Tanggal Sekarang di PHP yaitu Tanggal: <b><?php echo $tgl?></b></i>
        <?php
            $query=mysql_query("SELECT * FROM tb_file WHERE tanggal_selesai='$tgl'");
        ?>
        </p>
        <div class="col-md-12">
                  <!-- general form elements -->
                  <div class="box box-info">
                      <div class="box-body">
                      <div class="table-responsive">
                      <table class="table table-hover responsive">
                        <thead>
                          <tr>
                           <th>Id</th>
                        <th>Nomor</th>
                        <th>Tanggal Order</th>
                        <th>Tanggal Selesai</th>
                        <th>No Kontrak</th>
                        <th>Tiket Imon</th>
                        <th>Jenis Order</th>
                        <th>Sto</th>
                        <th>Odc</th>
                        <th>Nama Cluster</th>
                        <th>Keterangan Order</th>
                        <th>Jumlah Odp</th>
                        <th>Jumlah Ogp Odp</th>
                        <th>Eksekutor</th>
                        <th>Keterangan</th>
                        <th>Nama Project</th>
                        <th>Drafter</th>
                        <th>Current Id Smallworld</th>
                        <th>Jumlah Hp</th>
                        <th>State Sw</th>
                        <th>Ket Drawing Sw</th>
                        <th>Jumlah Port</th>
                        <th>Nama Odp</th>
                        <th>Sto</th>
                        <th>Odc</th>
                        <th>Latitude</th>
                        <th>Longitude</th>
                        <th>Project</th>
                        <th>Ip Olt</th>
                        <th>Port Olt</th>
                        <th>Merk Olt</th>
                        <th>Kap Kabel</th>
                        <th>Dist Ke</th>
                        <th>Sn Spliter</th>
                        <th>Optimalisasi</th>
                          </tr>
                        </thead>
                        <tbody>
            <?php
                //menampilkan data
                $no=0;
                while($row=mysql_fetch_array($query)){
                $no++
            ?>
            <td><?php echo "$id_no"?></td>
                            <td><?php echo "$r[nomor]"?></td>

                           <?php 
                    
                            $tanggal_selesai=tgl_indo($r['tanggal_selesai']);?>
                            
                            <td align="center"><?php echo "$tanggal_order"?></td>
                            <td align="center"><?php echo "$tanggal_selesai"?></td>
                            <td align="center"><?php echo "$r[no_kontrak]"?></td>
                            <td align="center"><?php echo "$r[tiket_imon]"?></td>
                            <td align="center"><?php echo "$r[jenis_order]"?></td>
                            <td align="center"><?php echo "$r[sto]"?></td>
                            <td align="center"><?php echo "$r[odc]"?></td>
                            <td align="center"><?php echo "$r[nama_cluster]"?></td>
                            <td align="center"><?php echo "$r[ket_order]"?></td>
                            <td align="center"><?php echo "$r[jumlah_odp]"?></td>
                            <td align="center"><?php echo "$r[jumlah_ogp_odp]"?></td>
                            <td align="center"><?php echo "$r[eksekutor]"?></td>
                            <td align="center"><?php echo "$r[ket]"?></td>
                            <td align="center"><?php echo "$r[drafter]"?></td>
                            <td align="center"><?php echo "$r[current_id_smallworld]"?></td>
                            <td align="center"><?php echo "$r[jumlah_hp]"?></td>
                            <td align="center"><?php echo "$r[state_sw]"?></td>
                            <td align="center"><?php echo "$r[ket_drawing_sw]"?></td>
                            <td align="center"><?php echo "$r[jumlah_port]"?></td>
                            <td align="center"><?php echo "$r[nama_odp]"?></td>
                            <td align="center"><?php echo "$r[latitude]"?></td>
                            <td align="center"><?php echo "$r[longitude]"?></td>
                            <td align="center"><?php echo "$r[project]"?></td>
                            <td align="center"><?php echo "$r[ip_olt]"?></td>
                            <td align="center"><?php echo "$r[port_olt]"?></td>
                            <td align="center"><?php echo "$r[merk_olt]"?></td>
                            <td align="center"><?php echo "$r[kap_kabel]"?></td>
                            <td align="center"><?php echo "$r[dist_ke]"?></td>
                            <td align="center"><?php echo "$r[sn_spliter]"?></td>
                            <td align="center"><?php echo "$r[optimalisasi]"?></td>
                            </tr>
            <?php
                }
            ?>    
            <tr>
                <td colspan="4" height="40"> 
                <?php
                    //jika tidak ada data
                    if(mysql_num_rows($query)==0){
                        echo "<font color=red><blink>Tidak dapat menampilkan data berdasarkan tanggal sekarang !</blink></font>";
                    }
                ?>
                </td>
            </tr> 
        </table>
        <?php
            }
            else{
                unset($_POST['tampil']);
            }
        ?>

 

