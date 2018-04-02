<?php
    $id_thanhvien = $_GET['id_thanhvien'];
    $sql = "SELECT * FROM thanhvien WHERE id_thanhvien=$id_thanhvien";
    $query = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($query);
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        if(isset($email) && isset($pass)){
            $sql = "UPDATE thanhvien SET email='$email',mat_khau='$pass' WHERE id_thanhvien=$id_thanhvien";
            $query = mysqli_query($conn,$sql);
            header('location: quantri.php?page_layout=danhsachtv');
        }
    }
?>
<div class="row">
    <ol class="breadcrumb">
        <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
        <li class="active"></li>
    </ol>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Sửa thành viên</h1>
    </div>
</div><!--/.row-->


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Sửa thành viên</div>
            <div class="panel-body">
                <div class="col-md-12">
                    <form role="form" method="post">

                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" type="text" name="email" value="<?php echo $row['email']; ?>" required="">
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" type="text" name="pass" value="<?php echo $row['mat_khau']; ?>" required="">
                        </div>  

                        <button type="submit" class="btn btn-primary" name="submit">Sửa</button>
                        <button type="reset" class="btn btn-default">Làm mới</button>

                </div>
                </form>
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->

