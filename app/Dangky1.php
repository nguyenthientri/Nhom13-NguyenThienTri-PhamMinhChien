<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/css/dangky.css" />
    <title>Document</title>
</head>

<body>
    <?php require_once 'connect.php'; ?>
    <?php
    if (isset($_POST['add'])) {
        print_r($_POST);
        $msv = $_POST['msv'];
        $hoten = $_POST['hoten'];
        $email = $_POST['email'];
        $gioitinh = $_POST['gioitinh'];
        $sothich = $_POST['sothich'];
        $quoctich = $_POST['quoctich'];
        $ghichu = $_POST['ghichu'];
        if ($conn->query("INSERT INTO sinhvien (Msv,Hoten,Email,Gioitinh,Sothich,Quoctich,Ghichu) 
            VALUES (N'$msv',N'$hoten',N'$email',N'$gioitinh',N'$sothich',N'$quoctich',N'$ghichu')")) {
            echo "<script>alert('Thêm thành công');</script>";
        } else {
            echo "<script>alert('Thêm thất bại')</script>";
        }
    }
    $conn->close();
    ?>
    <div class="content">
        <form id="form" method="POST" action="">
            <h2>ĐĂNG KÝ THÀNH VIÊN</h2>
            <div class="form-control">
                <h4>Mã sinh viên</h4>
                <input name="msv" type="text" id="maSV" />
                <small>Error message</small>
            </div>

            <div class="form-control">
                <h4>Họ và tên</h4>
                <input name="hoten" type="text" id="tenSV" />
                <small>Error message</small>
            </div>

            <div class="form-control">
                <h4>Email</h4>
                <input name="email" type="text" id="email" />
                <small>Error message</small>
            </div>
            <div class="form-control">
                <h4>Giới tính</h4>
                <input type="radio" id="nam" name="gioitinh" value="male" />
                <label for="nam">Nam</label>
                <input type="radio" id="nu" name="gioitinh" value="female" />
                <label for="nu">Nữ</label>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <h4>Sở thích</h4>
                <input type="checkbox" name="sothich" id="doc" />
                <label for="doc">Đọc sách</label>
                <input type="checkbox" name="sothich" id="dulich" />
                <label for="dulich">Du lịch</label>
                <input type="checkbox" name="sothich" id="amnhac" />
                <label for="amnhac">Âm nhạc</label>
                <input type="checkbox" name="sothich" id="amthuc" />
                <label for="amthuc">Ẩm thực</label>
                <input type="checkbox" name="sothich" id="khac" />
                <label for="khac">Khác</label>
                <small>Error message</small>
            </div>

            <div class="form-control">
                <h4>Quốc tịch</h4>
                <select name="quoctich">
                    <option value="">Chọn quốc tịch</option>
                    <option value="Vietnam">Việt nam</option>
                    <option value="NhatBan">Nhật bản</option>
                    <option value="Thailan">Thái lan</option>
                    <option value="My">Mỹ</option>
                </select>
                <small>Error message</small>
            </div>

            <div class="form-control">
                <h4>Ghi chú</h4>
                <textarea name="ghichu" id="note"></textarea>
                <small>Error message</small>
            </div>
            <button class="dangky" type="submit" name="add">Đăng ký</button>
        </form>
    </div>
    <script src="../assets/js/validate1.js"></script>
</body>

</html>