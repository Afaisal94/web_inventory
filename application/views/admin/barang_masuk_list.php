
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                  <h3 class='box-title'>DATA BARANG MASUK  <?php echo anchor('barang_masuk/create/','Create',array('class'=>'btn btn-primary btn-sm'));?>
		</h3>
                </div><!-- /.box-header -->
                <div class='box-body'>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>Tanggal</th>
		    <th>Nama Barang</th>
		    <th>Nama Suplayer</th>
		    <th>Jumlah Barang</th>
		    <th>Keterangan</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($barang_masuk_data as $barang_masuk)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $barang_masuk->tgl_bm ?></td>
		    <td>
            <?php 
            $nama_barang   =   $this->db->query("SELECT * FROM barang WHERE kd_barang = '$barang_masuk->kd_barang'")->row()->nama_barang;
            echo "$nama_barang";
            ?>        
            </td>
		    <td>
            <?php 
            $nama_suplayer  =   $this->db->query("SELECT * FROM suplayer WHERE kd_suplayer = '$barang_masuk->kd_suplayer'")->row()->nama_suplayer;
            echo "$nama_suplayer";
            ?>      
            </td>
		    <td><?php echo $barang_masuk->jumlah_bm ?></td>
		    <td><?php echo $barang_masuk->keterangan ?></td>
		    <td style="text-align:center" width="140px">
			<?php 
			echo anchor(site_url('barang_masuk/read/'.$barang_masuk->kd_bm),'<i class="fa fa-eye"></i>',array('title'=>'detail','class'=>'btn btn-danger btn-sm')); 
			echo '  '; 
			echo anchor(site_url('barang_masuk/update/'.$barang_masuk->kd_bm),'<i class="fa fa-pencil-square-o"></i>',array('title'=>'edit','class'=>'btn btn-danger btn-sm')); 
			echo '  '; 
			echo anchor(site_url('barang_masuk/delete/'.$barang_masuk->kd_bm),'<i class="fa fa-trash-o"></i>','title="delete" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
			?>
		    </td>
	        </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#mytable").dataTable();
            });
        </script>
                    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->