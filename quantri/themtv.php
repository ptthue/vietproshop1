<?php
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $mat_khau = $_POST['pass'];
        $quyen_truy_cap = $_POST['quyen_truy_cap'];
        if(isset($email) && isset($mat_khau) && isset($quyen_truy_cap)){
            $sql = "INSERT INTO thanhvien(email,mat_khau,quyen_truy_cap) VALUES('$email','$mat_khau',
            '$quyen_truy_cap')";
            $query=mysqli_query($conn,$sql);
            header('location:quantri.php?page_layout=danhsachtv');
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
        <h1 class="page-header">Thêm thành viên mới</h1>
    </div>
</div><!--/.row-->


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Thêm thành viên mới</div>
            <div class="panel-body">
                <div class="col-md-12">
                    <form role="form" method="post">

                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" type="text" required="" name="email" >
                        </div>  

                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" class="form-control" name="pass" required="" >
                        </div>

                        <div class="form-group">
                            <label>Quyền truy cập</label>
                            <input type="text" class="form-control" name="quyen_truy_cap"  required="">
                        </div>                                                                              
                        <button type="submit" class="btn btn-primary" name="submit">Thêm mới</button>
                        <button type="reset" class="btn btn-default">Làm mới</button>

                </div>
                </form>
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->
