<p>Thêm sản phẩm </p> 
<br>
<table border='1' width='50%' style='border-collapse:collapse'>
<form method='post' action='xuly.php'>
  <tr>
    <th colspan='2'>Điền sản phẩm</th>
  </tr>
  <tr>
    <td>Tên sản phẩm</td>
    <td><input type='text' name='tensp' id='tensp'></td>
  </tr>
  <tr>
    <td>Mã sản phẩm</td>
    <td><input type='text' name='masp' id='masp'></td>
  </tr>
  <tr>
    <td>Mô tả</td>
    <td><textarea name='mota' id='mota' rows='5' style='resize:none'></textarea></td>
  </tr>
  <tr>
    <td>Số lượng</td>
    <td><input type='number' name='soluong' id='soluong'></td>
  </tr>
  <tr>
    <td>Giá</td>
    <td><input type='text' name='gia' id='gia'></td>
  </tr>
  <tr>
    <td>Giá đã giảm</td>
    <td><input type='text' name='gia' id='discount'></td>
  </tr>
  <tr>
    <td>Hình ảnh</td>
    <td><input type='file' name='hinhanh' id='hinhanh'></textarea></td>
  </tr>
  <tr>
    <td>Tình trạng</td>
    <td><select id='tinhtrang'>
        <option>Kích hoạt</option>
        <option>Ẩn</option>
    </select></td>
  </tr>
  
  <tr>
    <th colspan='2'><input type='submit' value='Thêm sản phẩm' name='themsp' id='submit'></th>
  </tr>
  </form>
</table>

<script>
  $(document).ready(function(){
     $('#submit').on('click', function(){
        data={
            tensp : $('#tensp').val(),
            masp : $('#masp').val(),
            mota : $('#mota').val(),
            gia : $('#gia').val(),
            giadagiam : $('#discount').val(),
            soluong : $('#soluong').val(),
            hinhanh : $('#hinhanh').val(),
            tinhtrang:$('#tinhtrang').val()
        };
        $.post(
        )
     })
  })
</script>
