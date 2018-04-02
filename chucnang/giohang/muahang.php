<?php
    if(isset($_SESSION['giohang'])){
        $arrId = array();
        foreach ($_SESSION['giohang'] as $key => $value) {
            $arrId[] = $key;
        }
        $strId = implode(',', $arrId);
        $sql = "SELECT * FROM sanpham WHERE id_sp IN($strId) ORDER BY id_sp ASC";
        $query = mysqli_query($conn,$sql);
    }
?>


<div id="checkout">
    <h2 class="h2-bar">xác nhận hóa đơn thanh toán</h2>
    <table class="table table-bordered">
        <tr>
            <thead>
            <th>tên sản phẩm</th>
            <th>giá</th>
            <th>số lượng</th>
            <th>thành tiền</th>
            </thead>
        </tr>
        <?php
            $totalAll = 0;
            while ($row = mysqli_fetch_array($query)) {
                $totalPrice = $row['gia_sp'] * $_SESSION['giohang'][$row['id_sp']];
        ?>
        <tr>
            <td><?php echo $row['ten_sp']; ?></td>
            <td><span><?php echo $row['gia_sp'] ?></span></td>
            <td><?php echo $_SESSION['giohang'][$row['id_sp']] ?></td>
            <td><span><?php echo $totalAll ?></span></td>
        </tr>
        <?php
            $totalAll += $totalPrice;
            }
        ?>
        <tr>
            <td>Tổng giá trị hóa đơn:</td>
            <td colspan="2"></td>
            <td><b><span>108.800.000</span></b></td>
        </tr>
    </table>
</div>

<div id="custom-form" class="col-md-6 col-sm-8 col-xs-12">
    <form>
        <div class="form-group">
            <label>Tên khách hàng</label>
            <input required type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label>Địa chỉ Email</label>
            <input required type="text" class="form-control" name="mail">
        </div>
        <div class="form-group">
            <label>Số Điện thoại</label>
            <input required type="text" class="form-control" name="mobi">
        </div>
        <div class="form-group">
            <label>Địa chỉ nhận hàng</label>
            <input required type="text" class="form-control" name="add">
        </div>
        <button class="btn btn-default">Mua hàng</button>
    </form>
</div>
