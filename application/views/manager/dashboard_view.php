<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		<?php if(!empty($site_name)){ echo $site_name; } ?>
	</h1>
	<ol class="breadcrumb">
		<li><a href="<?php echo site_url(); ?>/manager"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Dashboard</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="box box-default collapsed-box">
        <div class="box-header with-border">
            <h3 class="box-title">Tribute</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
            </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
            Teruntuk Putri kami tercinta. Asyfiya Aniqa Putri, 28 Februari 2018 – 1 Maret 2018
        </div><!-- /.box-body -->
    </div><!-- /.box -->
  <div class="container-fluid px-4">
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
            <div class="info-box-content">
            <span class="info-box-text">Jumlah Siswa</span>
            <span class="info-box-number"><?= $jumlah_siswa->user;?></span>
        </div>
        </div>  
        </div>
    </div>
   
  <br>
	<div class="callout callout-info">
    	<h4>Informasi</h4>
        <p>Ini adalah area administratif ZYA CBT, yang memiliki platform dan bahasa user-friendly untuk membuat, mengelola dan melaksanakan ujian online.</p>
    </div>
    <div class="box">
        <div class="box-header with-border">
            <div class="box-title">Konfigurasi System</div>
        </div><!-- /.box-header -->

        <div class="box-body">
            <div class="row">
                <div class="col-md-4">
                    <b><u>Waktu Server</u></b>
                    <br />
                    <b><?php if(!empty($waktu_server)){ echo $waktu_server; } ?></b>
                    <br />
                    Pastikan waktu server sesuai dengan waktu saat ini. Jika ada perbedaan, cek timezone server dan timezone di konfigurasi PHP.
                </div>
                <div class="col-md-4">
                    <b><u>Informasi Konfigurasi Upload PHP</u></b>
                    <br />
                    POST_MAX_SIZE = <?php if(!empty($post_max_size)){ echo $post_max_size; } ?>
                    <br />
                    UPLOAD_MAX_FILESIZE = <?php if(!empty($upload_max_filesize)){ echo $upload_max_filesize; } ?>
                </div>
                <div class="col-md-4">
                    <b><u>Folder Upload</u></b>
                    <br />
                    Folder "uploads" = <?php if(!empty($dir_public_uploads)){ echo $dir_public_uploads; } ?>
                    <br />
                    Folder "public/uploads" = <?php if(!empty($dir_uploads)){ echo $dir_uploads; } ?>
                    <br />
                    Pastikan kedua folder diatas memiliki nilai Writeable.
                </div>
            </div>
            <p>
            </p>
        </div>
    </div>
    <div class="box box-warning box-solid">
		<div class="box-header with-border">
        	<h3 class="box-title">Petunjuk Penggunaan</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
        	<dl>
        		<dt>Data Modul</dt>
                <dd>
                	Kelompok Data Modul digunakan untuk menambah modul, topik, dan soal. Serta digunakan untuk mengatur file dengan memanfaatkan File Manager.
                	<ol>
                		<li>Modul</li>
                		<li>Topik</li>
                		<li>Soal</li>
                		<li>Import Soal Word</li>
						<li>Import Soal Spreadsheet</li>
                		<li>Daftar Soal</li>
                		<li>File Manager</li>
                	</ol>
                </dd>
                <dt>Data Peserta</dt>
                <dd>
                	Kelompok Data Peserta digunakan untuk mengatur Peserta Siswa, dan Group/Kelas.
                	<ol>
                		<li>Daftar Group/Kelas</li>
                		<li>Daftar Peserta</li>
                		<li>Import Data Peserta</li>
						<li>Cetak Kartu</li>
                	</ol>
                <dt>Data Tes</dt>
                <dd>
                	Kelompok Data Tes digunakan untuk mengatur Tes, mengevaluasi jawaban essay, dan melihat Hasil tes.
                	<ol>
                		<li>Tambah Tes</li>
                		<li>Daftar Tes</li>
                		<li>Evaluasi Tes</li>
                		<li>Hasil tes</li>
                		<li>Token</li>
                	</ol>
                </dd>
				<dt>Laporan</dt>
                <dd>
                	Laporan digunakan untuk menampilkan analisis butir soal, dan rekap hasil tes.
                	<ol>
                		<li>Analisis Butir Soal</li>
                        <li>Rekap Hasil Tes</li>
                	</ol>
                </dd>
                <dt>Tool</dt>
                <dd>
                    Kelompok Tool digunakan untuk membackup database, file pedukung soal, dan Export Import Data Soal
                    <ol>
                        <li>Backup Data</li>
                        <li>Export Import Soal</li>
                    </ol>
                </dd>
            </dl>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</section><!-- /.content -->
<script type="text/javascript">
    $(function () {
        var serverTime = <?php if(!empty($timestamp)){ echo $timestamp; } ?>;
        var counterTime=0;
        var date;

        setInterval(function() {
          date = new Date();

          serverTime = serverTime+1;

          date.setTime(serverTime*1000);
          time = date.toLocaleTimeString();
          $("#timestamp").html(time);
        }, 1000);
    });
  </script>