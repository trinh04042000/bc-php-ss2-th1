<!DOCTYPE html>
<html>
<style>
    table {
        border-collape: collapse;
        width: 100%;
    }
    th,td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
</style>
<body>
<table border="0">
    <caption><h1>Danh sách khách hàng</h1></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>
<?php
$customerlist = array(
    "1"=>array("ten" => "Lê Thị Mĩ Hoàn","ngaysinh" => "2000-09-08","diachi" =>"Hải Phòng","anh" =>"hoan1.jpg"),
    "2"=>array("ten" => "Phạm Thị Lấn","ngaysinh" => "1997-04-20","diachi" =>"Nam Định","anh" => "ngoc.jpg"),
    "3"=>array("ten" => "Nguyễn Thị Trang","ngaysinh" => "2000-02-17","diachi" =>"Hà Nội","anh" =>"trang.jpg"),
);
?>
    <?php
    foreach($customerlist as $key => $values){
        echo "<tr>";
        echo "<td>".$key."</td>";
        echo "<td>".$values['ten']."</td>";
        echo "<td>".$values['ngaysinh']."</td>";
        echo "<td>".$values['diachi']."</td>";
        echo "<td><image src ='".$values['anh']."' width = '60px' height ='60px'/></td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>