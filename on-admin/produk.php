<?php
error_reporting
?>

<?php
//if(empty($_SESSION['username'])){
//    echo "Not found!";
//} else {
    switch ($_GET['act']) {
    // PROSES VIEW DATA PRODUK //      
      case 'view':
      ?>

<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <h1> ODP Go-Live </h1>
            <ol class="breadcrumb">
            <li><a href="?pg=dashboard"><i class="fa fa-dashboard"></i> Beranda</a></li>
            <li class="active"><a href="?pg=pggna&act=view">ODP Golive
        </section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-md-12">
    <div class="box-header">
    <a href="?pg=produk&act=add"> <button type="button" class="btn btn-info"><i class = "fa fa-plus"> Tambah Data </i></button> </a>
    </div><!-- /.box-header -->
              <!-- general form elements -->
              <div class="box box-info">
                  <div class="box-body">
                  <div class="table-responsive">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        
                        <th>Nomor</th>
                        <th>Tanggal Order</th>
                        <th>Tanggal Golive</th>
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
                    $tampil=mysql_query("SELECT * FROM tb_file order by nomor asc");
                    
                      while ($r=mysql_fetch_array($tampil)){
                    ?>
                        <tr>
                        
                        <td><?php echo "$r[nomor]"?></td>
                        <td><?php echo "$r[tanggal_order]"?></td>
                        <td><?php echo "$r[tanggal_selesai]"?></td>
                        <td><?php echo "$r[no_kontrak]"?></td>
                        <td><?php echo "$r[tiket_imon]"?></td>
                        <td><?php echo "$r[jenis_order]"?></td>
                        <td><?php echo "$r[sto]"?></td>
                        <td><?php echo "$r[odc]"?></td>
                        <td><?php echo "$r[nama_cluster]"?></td>
                        <td><?php echo "$r[ket_order]"?></td>
                        <td><?php echo "$r[jumlah_odp]"?></td>
                        <td><?php echo "$r[jumlah_ogp_odp]"?></td>
                        <td><?php echo "$r[eksekutor]"?></td>
                        <td><?php echo "$r[ket]"?></td>
                        <td><?php echo "$r[nama_project]"?></td>
                        <td><?php echo "$r[drafter]"?></td>
                        <td><?php echo "$r[current_id_smallworld]"?></td>
                        <td><?php echo "$r[jumlah_hp]"?></td>
                        <td><?php echo "$r[state_sw]"?></td>
                        <td><?php echo "$r[ket_drawing_sw]"?></td>
                        <td><?php echo "$r[jumlah_port]"?></td>
                        <td><?php echo "$r[nama_odp]"?></td>
                        <td><?php echo "$r[latitude]"?></td>
                        <td><?php echo "$r[longitude]"?></td>
                        <td><?php echo "$r[project]"?></td>
                        <td><?php echo "$r[ip_olt]"?></td>
                        <td><?php echo "$r[port_olt]"?></td>
                        <td><?php echo "$r[merk_olt]"?></td>
                        <td><?php echo "$r[kap_kabel]"?></td>
                        <td><?php echo "$r[dist_ke]"?></td>
                        <td><?php echo "$r[sn_spliter]"?></td>
                        <td><?php echo "$r[optmalisasi]"?></td>
                        

                        <td><a href="?pg=produk&act=edit&id=<?php echo $r['nomor']?>"><button type="button" class="btn bg-orange"><i class="fa fa-pencil-square-o"></i></button></a></td>
                        <td><a href="?pg=produk&act=delete&id=<?php echo $r['nomor']?>"><button type="button" class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapusnya?');"><i class = "fa fa-trash-o"></i></button></a></td>
                        </tr>
						<?php
                    $no++;
                    }
                    ?>
					
			
               </tbody>
                  </table>
                  </div><!-- /.box-body -->
              </div>
              </div><!-- /.box -->
              </div> <!-- /.col -->
	</div>
    <!-- /.row (main row) -->
</section> <!-- /.content -->
    </div><!-- /.container -->
</div><!-- /.content-wrapper -->

       <?php
   break;
      // PROSES TAMBAH DATA PRODUK //
      case 'add':
//proses
    if(isset($_POST['add'])) {
   
    $tanggal_order=$_POST['tanggal_order'];
    $tanggal_selesai=$_POST['tanggal_selesai'];
    $no_kontrak=$_POST['no_kontrak'];
    $tiket_imon=$_POST['tiket_imon'];
    $jenis_order=$_POST['jenis_order'];
    $sto=$_POST['sto'];
    $odc=$_POST['odc'];
    $nama_cluster=$_POST['nama_cluster'];
    $ket_order=$_POST['ket_order'];
    $jumlah_odp=$_POST['jumlah_odp'];
    $jumlah_ogp_odp=$_POST['jumlah_ogp_odp'];
    $eksekutor=$_POST['eksekutor'];
    $ket=$_POST['ket'];
    $nama_project=$_POST['nama_project'];
    $drafter=$_POST['drafter'];
    $current_id_smallworld=$_POST['current_id_smallworld'];
    $jumlah_hp=$_POST['jumlah_hp'];
    $state_sw=$_POST['state_sw'];
    $ket_drawing_sw=$_POST['ket_drawing_sw'];
    $jumlah_port=$_POST['jumlah_port'];
    $nama_odp=$_POST['nama_odp'];
    $latitude=$_POST['latitude'];
    $longitude=$_POST['longitude'];
    $project=$_POST['project'];
    $ip_olt=$_POST['ip_olt'];
    $port_olt=$_POST['port_olt'];
    $merk_olt=$_POST['merk_olt'];
    $kap_kabel=$_POST['kap_kabel'];
    $dist_ke=$_POST['dist_ke'];
    $sn_spliter=$_POST['sn_spliter'];
    $optimalisasi=$_POST['optimalisasi'];
//script validasi data
 
    $cek = mysql_num_rows(mysql_query("SELECT * FROM tb_file WHERE 
	nama_odp='$nama_odp'"));
    if ($cek > 0){
    echo "<script>window.alert('Nama Odp yang anda masukan sudah ada')
    window.location='?pg=produk&act=view'</script>";
    }else {
    $query = mysql_query("INSERT INTO tb_file VALUES ('',
                '$_POST[tanggal_order]','$_POST[tanggal_selesai]','$_POST[no_kontrak]','$_POST[tiket_imon]','$_POST[jenis_order]','$_POST[sto]','$_POST[odc]','$_POST[nama_cluster]','$_POST[ket_order]','$_POST[jumlah_odp]','$_POST[jumlah_ogp_odp]','$_POST[eksekutor]','$_POST[ket]','$_POST[nama_project]','$_POST[drafter]','$_POST[current_id_smallworld]','$_POST[jumlah_hp]','$_POST[state_sw]','$_POST[ket_drawing_sw]','$_POST[jumlah_port]','$_POST[nama_odp]','$_POST[latitude]','$_POST[longitude]','$_POST[project]','$_POST[ip_olt]','$_POST[port_olt]','$_POST[merk_olt]','$_POST[kap_kabel]','$_POST[dist_ke]','$_POST[sn_spliter]','$_POST[optimalisasi]')");
                
    echo "<script>window.alert('Data Berhasil DI Simpan')
    window.location='?pg=produk&act=view'</script>";
    }
    }
    ?>
s
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <h1> Data Produk </h1>
            <ol class="breadcrumb">
            <li><a href="?pg=dashboard"><i class="fa fa-dashboard"></i> Beranda</a></li>
            <li class="active"><a href="?pg=produk&act=view">Data Produk</a></li>
            <li class="active"><a href="#">Tambah Data Produk</a></li>
             </ol>
        </section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-info">
                  <div class="box-body">
                  <!-- form start -->
                <form role="form" method = "POST" action="">
                  <div class="box-body">
                   
                    <div class="form-group">
                       <label for="exampleInputEmail1">Tanggal Order</label>
                      <input class="form-control" id="date" name="tanggal_order" placeholder="DD/MM/YYYY" type="text" required data-fv-notempty-message="Tidak boleh kosong" />
                    </div>
                    <div class="form-group">
                       <label for="exampleInputEmail1">Tanggal Golive</label>
                      <input class="form-control" id="date" name="tanggal_selesai" placeholder="DD/MM/YYYY" type="text" required data-fv-notempty-message="Tidak boleh kosong" />
                    </div>
					          <div class="form-group">
                      <label for="exampleInputEmail1">No Kontrak</label>
                      <input type="text" class="form-control" id="no_kontrak" name="no_kontrak" placeholder="No Kontrak" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
					          <div class="form-group">
                       <label for="exampleInputEmail1">Tiket Imon</label>
                      <input type="text" class="form-control" id="tiket_imon" name="tiket_imon" placeholder="Tiket Imon">
                    </div>
                     <div class="form-group">
                      <label for="exampleInputEmail1">Jenis Order</label>
                      <input type="text" class="form-control" id="jenis_order" name="jenis_order" placeholder="Jenis Order" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                    <div class="form-group">
                       <label for="exampleInputEmail1">Sto</label>
                      <input type="text" class="form-control" id="sto" name="sto" placeholder="Sto" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Odc</label>
                      <input type="text" class="form-control" id="odc" name="odc" placeholder="Odc" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                    <div class="form-group">
                       <label for="exampleInputEmail1">Nama Cluster</label>
                      <input type="text" class="form-control" id="nama_cluster" name="nama_cluster" placeholder="Cluster" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                     <div class="form-group">
                      <label for="exampleInputEmail1">Ket Order</label>
                      <input type="text" class="form-control" id="ket_order" name="ket_order" placeholder="Ket Order" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                    <div class="form-group">
                       <label for="exampleInputEmail1">Jumlah Odp</label>
                      <input type="text" class="form-control" id="jumlah_odp" name="jumlah_odp" placeholder="Jumlah Odp" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Jumlah Ogp Odp</label>
                      <input type="text" class="form-control" id="jumlah_ogp_odp" name="jumlah_ogp_odp" placeholder="JumlahOgpOdp" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                    <div class="form-group">
                       <label for="exampleInputEmail1">Eksekutor</label>
                      <input type="text" class="form-control" id="eksekutor" name="eksekutor" placeholder="Eksekutor" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                     <div class="form-group">
                      <label for="exampleInputEmail1">Ket</label>
                      <input type="text" class="form-control" id="ket" name="ket" placeholder="ket" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                    <div class="form-group">
                       <label for="exampleInputEmail1">Nama Project</label>
                      <input type="text" class="form-control" id="nama_project" name="nama_project" placeholder="nama project" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Drafter</label>
                      <input type="text" class="form-control" id="drafter" name="drafter" placeholder="Drafter" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                    <div class="form-group">
                       <label for="exampleInputEmail1">Current Id Smallworld</label>
                      <input type="text" class="form-control" id="current_id_smallworld" name="current_id_smallworld" placeholder="Current id Smallworld" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                     <div class="form-group">
                      <label for="exampleInputEmail1">Jumlah Hp</label>
                      <input type="text" class="form-control" id="jumlah_hp" name="jumlah_hp" placeholder="Jumlah Hp" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                    <div class="form-group">
                       <label for="exampleInputEmail1">State SW</label>
                      <input type="text" class="form-control" id="state_sw" name="state_sw" placeholder="State Sw" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                    <div class="form-group">
                       <label for="exampleInputEmail1">Ket Drawing Sw</label>
                      <input type="text" class="form-control" id="ket_drawing_sw" name="ket_drawing_sw" placeholder="Ket Drawing" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Odp</label>
                      <input type="text" class="form-control" id="nama_odp" name="nama_odp" placeholder="Nama ODP" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                    <div class="form-group">
                       <label for="exampleInputEmail1">Latitude</label>
                      <input type="text" class="form-control" id="latitude" name="latitude" placeholder="latitude" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                     <div class="form-group">
                      <label for="exampleInputEmail1">Longitude</label>
                      <input type="text" class="form-control" id="longitude" name="longitude" placeholder="longitude" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                    <div class="form-group">
                       <label for="exampleInputEmail1">Project</label>
                      <input type="text" class="form-control" id="project" name="project" placeholder="project" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Ip Olt</label>
                      <input type="text" class="form-control" id="ip_olt" name="ip_olt" placeholder="ip_olt" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                    <div class="form-group">
                       <label for="exampleInputEmail1">Port Olt</label>
                      <input type="text" class="form-control" id="port_olt" name="port_olt" placeholder="port_olt" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                     <div class="form-group">
                      <label for="exampleInputEmail1">Merk Olt</label>
                      <input type="text" class="form-control" id="merk_olt" name="merk_olt" placeholder="merk_olt" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                    <div class="form-group">
                       <label for="exampleInputEmail1">Kap Kabel</label>
                      <input type="text" class="form-control" id="kap_kabel" name="kap_kabel" placeholder="kap_kabel" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Dist Ke</label>
                      <input type="text" class="form-control" id="dist_ke" name="dist_ke" placeholder="dist_ke" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                    <div class="form-group">
                       <label for="exampleInputEmail1">Sn Splitter</label>
                      <input type="text" class="form-control" id="sn_spliter" name="sn_spliter" placeholder="sn_spliter">
                    </div>
                     <div class="form-group">
                      <label for="exampleInputEmail1">Optimalisasi</label>
                      <input type="text" class="form-control" id="optimalisasi" name="optimalisasi" placeholder="optmalisasi">
                    </div>
                
                  </div><!-- /.box-body -->

              </div><!-- /.box -->
              </div> <!-- /.col -->

              </div> <!-- /.row -->

          
            <!-- Tombol Bagian Bawah -->

            <div class="row">
            <!-- left column -->
              <div class="col-md-4 col-md-offset-5">

              <button type="submit" name = 'add' class="btn btn-info">Simpan</button>
              &nbsp;
              <button type="reset" class="btn btn-success">Reset</button>
                  
            </form>
                  </div><!-- /.box-body -->
              </div><!-- /.box -->
              </div> <!-- /.col -->
  </div>
    <!-- /.row (main row) -->
</section> <!-- /.content -->
    </div><!-- /.container -->
</div><!-- /.content-wrapper -->


      <?php
      break;
      // PROSES EDIT DATA PRODUK //
      case 'edit':
      $d = mysql_fetch_array(mysql_query("SELECT * FROM tb_file WHERE nomor='$_GET[nomor]'"));
            if (isset($_POST['update'])) {

                mysql_query("UPDATE tb_file SET
                  tanggal_order='$_POST[tanggal_order]',tanggal_selesai='$_POST[tanggal_selesai]',no_kontrak='$_POST[no_kontrak]',tiket_imon='$_POST[tiket_imon]',jenis_order='$_POST[jenis_order]',sto='$_POST[sto]',odc='$_POST[odc]',nama_cluster='$_POST[nama_cluster]',ket_order='$_POST[ket_order]',jumlah_odp='$_POST[jumlah_odp]',jumlah_ogp_odp='$_POST[jumlah_ogp_odp]',eksekutor='$_POST[eksekutor]',ket='$_POST[ket]',nama_project='$_POST[nama_project]',drafter='$_POST[drafter]',current_id_smallworld='$_POST[current_id_smallworld]',jumlah_hp='$_POST[jumlah_hp]',state_sw='$_POST[state_sw]',ket_drawing_sw='$_POST[ket_drawing_sw]',jumlah_port='$_POST[jumlah_port]',nama_odp='$_POST[nama_odp]',latitude='$_POST[latitude]',longitude='$_POST[longitude]',project='$_POST[project]',ip_olt='$_POST[ip_olt]',port_olt='$_POST[port_olt]',merk_olt='$_POST[merk_olt]',kap_kabel='$_POST[kap_kabel]',dist_ke='$_POST[dist_ke]',sn_spliter='$_POST[sn_spliter]',optimalisasi='$_POST[optimalisasi]' WHERE nomor='$_POST[nomor]'");
                echo "<script>window.location='?pg=produk&act=view'</script>";
          }
              ?>

<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <h1> Data Pengguna </h1>
            <ol class="breadcrumb">
            <li><a href="?pg=dashboard"><i class="fa fa-dashboard"></i> Beranda</a></li>
            <li class="active"><a href="?pg=produk&act=view">Data Produk</a></li>
            <li class="active">Update Data</li>
             </ol>
        </section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-info">
                  <div class="box-body">
                  <!-- form start -->
                <form role="form" method = "POST" action="">
                  <div class="box-body">
                   
                    <div class="form-group">
                       <label for="exampleInputEmail1">Tanggal Order</label>
                      <input class="form-control" id="date" name="tanggal_order" placeholder="DD/MM/YYYY" type="text" required data-fv-notempty-message="Tidak boleh kosong" />
                    </div>
                    <div class="form-group">
                       <label for="exampleInputEmail1">Tanggal Golive</label>
                      <input class="form-control" id="date" name="tanggal_selesai" placeholder="DD/MM/YYYY" type="text" required data-fv-notempty-message="Tidak boleh kosong" />
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">No Kontrak</label>
                      <input type="text" class="form-control" id="no_kontrak" name="no_kontrak" placeholder="No Kontrak" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                    <div class="form-group">
                       <label for="exampleInputEmail1">Tiket Imon</label>
                      <input type="text" class="form-control" id="tiket_imon" name="tiket_imon" placeholder="Tiket Imon" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                     <div class="form-group">
                      <label for="exampleInputEmail1">Jenis Order</label>
                      <input type="text" class="form-control" id="jenis_order" name="jenis_order" placeholder="Jenis Order" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                    <div class="form-group">
                       <label for="exampleInputEmail1">Sto</label>
                      <input type="text" class="form-control" id="sto" name="sto" placeholder="Sto" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Odc</label>
                      <input type="text" class="form-control" id="odc" name="odc" placeholder="Odc" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                    <div class="form-group">
                       <label for="exampleInputEmail1">Nama Cluster</label>
                      <input type="text" class="form-control" id="nama_cluster" name="nama_cluster" placeholder="Cluster" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                     <div class="form-group">
                      <label for="exampleInputEmail1">Ket Order</label>
                      <input type="text" class="form-control" id="ket_order" name="ket_order" placeholder="Ket Order" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                    <div class="form-group">
                       <label for="exampleInputEmail1">Jumlah Odp</label>
                      <input type="text" class="form-control" id="jumlah_odp" name="jumlah_odp" placeholder="Jumlah Odp" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Jumlah Ogp Odp</label>
                      <input type="text" class="form-control" id="jumlah_ogp_odp" name="jumlah_ogp_odp" placeholder="JumlahOgpOdp" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                    <div class="form-group">
                       <label for="exampleInputEmail1">Eksekutor</label>
                      <input type="text" class="form-control" id="eksekutor" name="eksekutor" placeholder="Eksekutor" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                     <div class="form-group">
                      <label for="exampleInputEmail1">Ket</label>
                      <input type="text" class="form-control" id="ket" name="ket" placeholder="ket" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                    <div class="form-group">
                       <label for="exampleInputEmail1">Nama Project</label>
                      <input type="text" class="form-control" id="nama_project" name="nama_project" placeholder="nama project" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Drafter</label>
                      <input type="text" class="form-control" id="drafter" name="drafter" placeholder="Drafter" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                    <div class="form-group">
                       <label for="exampleInputEmail1">Current Id Smallworld</label>
                      <input type="text" class="form-control" id="current_id_smallworld" name="current_id_smallworld" placeholder="Current id Smallworld" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                     <div class="form-group">
                      <label for="exampleInputEmail1">Jumlah Hp</label>
                      <input type="text" class="form-control" id="jumlah_hp" name="jumlah_hp" placeholder="Jumlah Hp" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                    <div class="form-group">
                       <label for="exampleInputEmail1">State SW</label>
                      <input type="text" class="form-control" id="state_sw" name="state_sw" placeholder="State Sw" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                    <div class="form-group">
                       <label for="exampleInputEmail1">Ket Drawing Sw</label>
                      <input type="text" class="form-control" id="ket_drawing_sw" name="ket_drawing_sw" placeholder="Ket Drawing" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Odp</label>
                      <input type="text" class="form-control" id="nama_odp" name="nama_odp" placeholder="Nama ODP" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                    <div class="form-group">
                       <label for="exampleInputEmail1">Latitude</label>
                      <input type="text" class="form-control" id="latitude" name="latitude" placeholder="latitude" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                     <div class="form-group">
                      <label for="exampleInputEmail1">Longitude</label>
                      <input type="text" class="form-control" id="longitude" name="longitude" placeholder="longitude" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                    <div class="form-group">
                       <label for="exampleInputEmail1">Project</label>
                      <input type="text" class="form-control" id="project" name="project" placeholder="project" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Ip Olt</label>
                      <input type="text" class="form-control" id="ip_olt" name="ip_olt" placeholder="ip_olt" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                    <div class="form-group">
                       <label for="exampleInputEmail1">Port Olt</label>
                      <input type="text" class="form-control" id="port_olt" name="port_olt" placeholder="port_olt" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                     <div class="form-group">
                      <label for="exampleInputEmail1">Merk Olt</label>
                      <input type="text" class="form-control" id="merk_olt" name="merk_olt" placeholder="merk_olt" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                    <div class="form-group">
                       <label for="exampleInputEmail1">Kap Kabel</label>
                      <input type="text" class="form-control" id="kap_kabel" name="kap_kabel" placeholder="kap_kabel" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Dist Ke</label>
                      <input type="text" class="form-control" id="dist_ke" name="dist_ke" placeholder="dist_ke" required data-fv-notempty-message="Tidak boleh kosong">
                    </div>
                    <div class="form-group">
                       <label for="exampleInputEmail1">Sn Splitter</label>
                      <input type="text" class="form-control" id="sn_spliter" name="sn_spliter" placeholder="sn_spliter">
                    </div>
                     <div class="form-group">
                      <label for="exampleInputEmail1">Optimalisasi</label>
                      <input type="text" class="form-control" id="optimalisasi" name="optimalisasi" placeholder="optmalisasi">
                    </div>
                  </div><!-- /.box-body -->

              </div><!-- /.box -->
              </div> <!-- /.col -->

              </div> <!-- /.row -->

          
            <!-- Tombol Bagian Bawah -->

            <div class="row">
            <!-- left column -->
              <div class="col-md-4 col-md-offset-5">

              <button type="submit" name = 'update' class="btn btn-info">Update</button>
              &nbsp;
              <button type="reset" class="btn btn-success">Reset</button>
                  
            </form>
                  </div><!-- /.box-body -->
              </div><!-- /.box -->
              </div> <!-- /.col -->
  </div>
    <!-- /.row (main row) -->
</section> <!-- /.content -->
    </div><!-- /.container -->
</div><!-- /.content-wrapper -->


    <?php
    break;

    // PROSES HAPUS DATA PENGGUNA //
      case 'delete':
      mysql_query("DELETE FROM tb_file WHERE nomor='$_GET[nomor]'");
      echo "<script>window.location='?pg=produk&act=view'</script>";
      break;

    }
    ?>