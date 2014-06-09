<?php
if($_SESSION['akses']!= 'litbang')
	{
		echo "<script>document.location = 'admin.php'</script>";
	}
?>
<?php
    require_once ('class/bahanClass.php');
    $bahan = new bahan();
    $dataBahan = $bahan->getBahan2();
?>
<div class="main-header">
	<h2>Seleksi Bahan Kuliah</h2>
	<em></em>
</div>
	
	<div class="widget widget-table">
		<div class="widget-header">
			<h3><i class="fa fa-desktop"></i> Browser &amp; OS</h3>
			<div class="btn-group widget-header-toolbar">
				<a href="#" title="Focus" class="btn-borderless btn-focus"><i class="fa fa-eye"></i></a>
				<a href="#" title="Expand/Collapse" class="btn-borderless btn-toggle-expand"><i class="fa fa-chevron-up"></i></a>
				<a href="#" title="Remove" class="btn-borderless btn-remove"><i class="fa fa-times"></i></a>
			</div>
			<div class="btn-group widget-header-toolbar">
				<div class="control-inline toolbar-item-group">
					<span class="control-title">New Visits:</span>
					<div class="label label-success"><i class="fa fa-caret-up"></i> 3.5%</div>
				</div>
			</div>
		</div>
		<div class="widget-content">
			<table id="visit-stat-table" class="table  table-striped table-hover datatable" cellpadding="0" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>No.</th>
						<th>Nama File</th>
						<th>Mata Kuliah</th>
						<th>Keterangan</th>
						<th>Pengupload</th>
                        <th>Ukuran</th>
                        <th>Download</th>
                        <th>Edit</th>
					</tr>
				</thead>
				<tbody>
                <?php
				if($dataBahan === null)
						{
							echo"<tr>"
								. "<td colspan='7'><div class='alert alert-danger text-center'>Data Kosong"
								."</div></td>"
								. "</tr>";
						}
					else 
						{
							$i=1;
							foreach ($dataBahan as $data)
								{
									echo"<tr>"
									. "<td>".$i."</td>"
                                    . "<td>".$data['nama']."</td>"
                                    . "<td>".$data['jenis_matkul']."</td>"
                                    . "<td>".$data['keterangan']."</td>"
									. "<td>".$data['nama1']."</td>"
                                    . "<td>".$data['size']."</td>"
									."<td><a href='view/mainProcess.php?act=download&id=".$data['id_file']."' class='btn btn-primary btn-xs'>​Download</a></td>"
                                    . "<td><a href='view/mainProcess.php?act=editBahan&id=".$data['id_file']."' class='btn btn-success btn-xs'>​Posting</a>||<a href='view/mainProcess.php?act=deleteBahan&id=".$data['id_file']."' class='btn btn-warning btn-xs'>​Delete</a></td>"
                                    . "</tr>";
									$i++;
								}
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
	<!-- END WIDGET TABLE -->