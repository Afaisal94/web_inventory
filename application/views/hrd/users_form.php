<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                
                  <h3 class='box-title'>Data Pegawai</h3>
                      <div class='box box-primary'>
        <form action="<?php echo $action; ?>" method="post"><table class='table table-bordered'>
	    <tr><td>Username <?php echo form_error('username') ?></td>
            <td><input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo $username; ?>" />
        </td>
	    <tr><td>Password <?php echo form_error('password') ?></td>
            <td><input type="text" class="form-control" name="password" id="password" placeholder="Password" value="" />
        </td>
	    <tr><td>Level <?php echo form_error('level') ?></td>
            <td><input type="text" class="form-control" name="level" id="level" placeholder="Level" value="<?php echo $level; ?>" />
        </td>
	    <tr><td>Nama <?php echo form_error('nama') ?></td>
            <td><input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" />
        </td>
	    <tr><td>Kd Pegawai <?php echo form_error('kd_pegawai') ?></td>
            <td><input type="text" class="form-control" name="kd_pegawai" id="kd_pegawai" placeholder="Kd Pegawai" value="<?php echo $kd_pegawai; ?>" />
        </td>
	    <tr><td>Posisi <?php echo form_error('posisi') ?></td>
            <td><input type="text" class="form-control" name="posisi" id="posisi" placeholder="Posisi" value="<?php echo $posisi; ?>" />
        </td>
	    <input type="hidden" name="kd_user" value="<?php echo $kd_user; ?>" /> 
	    <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('users') ?>" class="btn btn-default">Cancel</a></td></tr>
	
    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->