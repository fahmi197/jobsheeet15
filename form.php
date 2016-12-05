<?php
  mysql_connect("localhost","root","");
  mysql_select_db("absen");
  $query ="SELECT * FROM peserta";
  $hasil= mysql_query($query);
if(isset($_POST['submit']))
{
    //$name = $_FILES['file']['name'];
    //$temp = $_FILES['file']['tmp_name'];
    
    //move_uploaded_file($temp,"foto/".$name);
    $id=$_POST['id'];
    $nama=$_POST['nama'];
    $institusi=$_POST['institusi'];
    $no_hp=$_POST['no_hp'];
    $email=$_POST['email'];
    mysql_query("INSERT INTO `presentasi` (`id`, `nama`, `institusi `, `no_hp`, `email`) VALUES ('$id', '$nama', '$institusi', '$no_hp', '$email')");
    
        echo '<script language="javascript">alert("Insert succesfull  !"); document.location="http://localhost/templateadmin/index.php?page=tabel";</script>';
    
}
?>
<section class="content">
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">ABSEN </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="form.php" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">id</label>

                  <div class="col-sm-10">
                    <input class="form-control" name="nim" placeholder="Inputkan id anda" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <input class="form-control" name="nama" placeholder="Inputkan nama anda" type="text">
                  </div>
                </div>
        <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">institusi</label>
           <div class="col-sm-10">
                  <input class="form-control" name="institusi" placeholder="Inputkan Institusi" type="text">
          </div>
                </div>
        <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">no_hp</label>
           <div class="col-sm-10">
          <input class="form-control" name="nama" placeholder="Inputkan no hp" type="text">
          </div>
                </div>
        <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">email</label>
          <div class="col-sm-10">
                

            <input class="form-control" name="nama" placeholder="Inputkan email" type="text">
          </div>
                </div>
                </div>      
             
        
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Batal</button>
                <button type="submit" class="btn btn-info pull-right" name="submit">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
      
          </div>
</section>