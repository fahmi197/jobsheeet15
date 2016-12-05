<?php
  mysql_connect("localhost","root","");
  mysql_select_db("absen");
  $query ="SELECT * FROM peserta";
  $hasil= mysql_query($query);
?>
<section class="content-header">
      <h1>
        Absensi
        <small>Peserta</small>
      </h1>
      <ol class="breadcrumb">
      
        <li></li>

      </ol>
    </section>
<section class="content">
      <div class="box">
            <div class="box-header">
            
        <a href="#"><button type="button" class="btn btn-block btn-warning">Tambah Data</button></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tbody><tr>
                 <th style="width: 10px">NO</th>
                  <th>id</th>
                  <th>nama</th>
                  <th>institusi</th>
            <th>no_hp</th>
          <th>email</th>
          <th>ACTION</th>
                </tr>
        <?php
          $i=1;
          while ($data=mysql_fetch_array($hasil))
          {
          ?>
                <tr>
                  <td><?php echo $i;?></td>
                  <td><span class="badge bg-red"><?php echo $data['id'];?></span></td>
          <td><?php echo $data['nama'];?></td>
          <td><?php echo $data['institusi'];?></td>
          <td><?php echo $data['no_hp'];?></td>
          <td><?php echo $data['email'];?></td>
          
          <td><a href='delete.php?id="<?php echo $data['id'];?>"'><button type="button" class="btn btn-block btn-success">Edit</button></a>&nbsp;
          <a href='delete.php?id="<?php echo $data['id'];?>"'><button type="button" class="btn btn-block btn-danger">Delete</button></td></a>
                </tr>
        <?php
                $i++;
                }
        ?>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
       
</section>