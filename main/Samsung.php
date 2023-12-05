<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Điện thoại Samsung</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <style>
       header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            position: relative;
        }
        h1 {
            position: relative;
            z-index: 2;
        }
        .logo1 {
            width: 100%;
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            z-index: 1;
        }
       
        img {
            width: 200px;
            border-radius: 10px;
        }
        table,
        td {
            border: 0px solid #FFA500;
            border-radius: 10px;
            border-collapse: collapse;
            text-align: center;
            padding: 15px;
        }
        .sp {
            margin: 0 auto; 
            width: 80%;
        }
        th {
            align-items: center;
        }
        button {
            display: block;
            margin: 0 auto; 
            margin-top: 20px; 
            padding: 10px 20px; 
            background-color: #FFA500; 
            color: white; 
            border: 2px solid #FFA500; 
            border-radius: 10px;
            font-size: 16px; 
        }
        a {
            color: red;
            text-decoration: line-through; /* Add strikethrough */
        }

        .discount-price {
            color: green;
            font-weight: bold;
            margin-top: 5px; /* Add space below the original price */
        }
        .clickable-image {
        width: 100%; /* Đảm bảo chiều ngang của hình ảnh bằng với chiều ngang của trang web */
        cursor: pointer;
        }
    </style>
    <body>

    <header>
        <h1>Điện thoại Samsung</h1>
        <img src="https://scr.vn/wp-content/uploads/2020/07/Background-%C4%91%E1%BB%8F-cam.jpg" alt="Logo1" class="logo1">
        <br>
    </header>
    <div class="content">
        <div class="scrollable-content">
            <a href="https://www.google.com" target="_blank">
                <img src="https://i.ytimg.com/vi/zMDlvmJ-WVQ/maxresdefault.jpg" alt="Clickable Image" class="clickable-image">
            </a>
            <br>
        </div>
    </div>
   
        <div class="sp">
        <table class="samsung_product">
            <tr colspan="4"> 
                <th>Samsung Galaxy Z (Màn hình gập)</th>
            </tr> 
            <tr>
                <td>   
                    <img src="https://cdn.tgdd.vn/Products/Images/42/258047/samsung-galaxy-flip4-glr-tim-1.jpg" alt="" />
                    <figcaption>Điện thoại Samsung Galaxy Z Flip4 5G 128GB</figcaption>
                    <a>23.990.000đ</a><br>
                    <div class="discount-price">Giảm giá: 14.990.000đ</div>
                    <button class="btn-infor" name="samsung" value="14990000">Xem thông tin </button>
                </td>
                <td>   
                    <img src="https://cdn.tgdd.vn/Products/Images/42/285696/samsung-galaxy-flip-den-1.jpg" alt="" />
                    <figcaption>Điện thoại Samsung Galaxy Z Flip4 5G 512GB</figcaption>
                    <a>29.490.000đ</a><br>
                    <div class="discount-price">Giảm giá: 15.490.000đ</div>
                    <button class="btn-infor" name="samsung" value="15490000">Xem thông tin </button>
                </td>
                <td>
                    <img src="https://cdn.tgdd.vn/Products/Images/42/250625/samsung-galaxy-z-fold4-256gb-1.jpg" alt="" />
                    <figcaption>Điện thoại Samsung Galaxy Z Fold4 5G 256GB</figcaption>
                    <a>40.990.000đ</a><br>
                    <div class="discount-price">Giảm giá: 22.990.000đ</div>
                    <button class="btn-infor" name="samsung" value="22990000">Xem thông tin</button>
                </td>    
                <td>
                    <img src="https://cdn.tgdd.vn/Products/Images/42/250625/samsung-galaxy-z-fold4-256gb-1.jpg" alt="" />
                    <figcaption>Điện thoại Samsung Galaxy Z Fold4 5G 512GB</figcaption>
                    <a>44.490.000đ</a><br>
                    <div class="discount-price">Giảm giá: 24.990.000đ</div>
                    <button class="btn-infor" name="samsung" value="24990000">Xem thông tin</button>
                </td>            
            </tr>
        </table>
        <br> 

        <table  class="samsung_product">
            <tr colspan="12"> 
                <th>Samsung Galaxy A</th>
            </tr> 
            <tr>
                <td>
                    <img src="https://cdn.tgdd.vn/Products/Images/42/283819/samsung-galaxy-a04s-1.jpg" alt="" />
                    <figcaption>Điện thoại Samsung Galaxy A04s</figcaption>
                    <a>3.990.000đ</a><br>
                    <div class="discount-price">Giảm giá: 3.190.000đ</div>
                    <button class="btn-infor" name="samsung" value="3190000">Xem thông tin</button>
                </td>   
                <td>
                    <img src="https://cdn.tgdd.vn/Products/Images/42/275434/samsung-galaxy-04-xanh-1-1.jpg" alt="" />
                    <figcaption>Điện thoại Samsung Galaxy A04 (3GB/32GB)</figcaption>
                    <a>2.990.000đ</a><br>
                    <div class="discount-price">Giảm giá: 2.590.000đ</div>
                    <button class="btn-infor" name="samsung" value="">Xem thông tin</button>
                </td> 
                <td>
                    <img src="https://cdn.tgdd.vn/Products/Images/42/291625/samsung-galaxy-04-dong-1.jpg" alt="" />
                    <figcaption>Điện thoại Samsung Galaxy A04 (4GB/64GB)</figcaption>
                    <a>3.490.000đ</a><br>
                    <div class="discount-price">Giảm giá: 3.090.000đ</div>
                    <button class="btn-infor" name="samsung" value="3090000">Xem thông tin</button>
                </td>       
                <td>
                    <img src="https://cdn.tgdd.vn/Products/Images/42/271721/samsung-galaxy-a14-5g-bac-1-1.jpg" alt="" />
                    <figcaption>Điện thoại Samsung Galaxy A14 5G </figcaption>
                    <a>5.190.000đ</a><br>
                    <div class="discount-price">Giảm giá: 4.490.000đ</div>
                    <button class="btn-infor" name="samsung" value="4490000">Xem thông tin</button>
                </td> 
            </tr>    
            <tr>
                <td>
                    <img src="https://cdn.tgdd.vn/Products/Images/42/303579/samsung-galaxy-a14-4g-tim-1.jpg" alt="" />
                    <figcaption>Điện thoại Samsung Galaxy A14 4GB</figcaption>
                    <a>4.490.000đ</a><br>
                    <div class="discount-price">Giảm giá: 3.690.000đ</div>
                    <button class="btn-infor" name="samsung" value="3690000">Xem thông tin</button>
                </td> 
                <td>
                    <img src="https://cdn.tgdd.vn/Products/Images/42/292770/samsung-galaxy-a14-4g-den-1-1.jpg" alt="" />
                    <figcaption>Điện thoại Samsung Galaxy A14 6GB</figcaption>
                    <a>4.990.000đ</a><br>
                    <div class="discount-price">Giảm giá: 4.390.000đ</div>
                    <button class="btn-infor" name="samsung" value="4390000">Xem thông tin</button>
                </td> 
                <td>
                    <img src="https://cdn.tgdd.vn/Products/Images/42/274018/samsung-galaxy-a24-den-1.jpg" alt="" />
                    <figcaption>Điện thoại Samsung Galaxy A24 6GB</figcaption>
                    <a>6.490.000đ</a><br>
                    <div class="discount-price">Giảm giá: 5.890.000đ</div>
                    <button class="btn-infor" name="samsung" value="5890000">Xem thông tin</button>
                </td> 
                <td>
                    <img src="https://cdn.tgdd.vn/Products/Images/42/305886/samsung-galaxy-a24-xanh-1.jpg" alt="" />
                    <figcaption>Điện thoại Samsung Galaxy A24 8GB</figcaption>
                    <a>6.990.000đ</a><br>
                    <div class="discount-price">Giảm giá: 6.390.000đ</div>
                    <button class="btn-infor" name="samsung" value="6390000">Xem thông tin</button>
                </td>
            </tr>    
            <tr>
                 
                <td>
                    <img src="https://cdn.tgdd.vn/Products/Images/42/298377/samsung-galaxy-a34-xanh-glr-1.jpg" alt="" />
                    <figcaption>Điện thoại Samsung Galaxy A34 5G 128GB</figcaption>
                    <a>8.490.000đ</a><br>
                    <div class="discount-price">Giảm giá: 7.490.000đ</div>
                    <button class="btn-infor" name="samsung" value="7490000">Xem thông tin</button>
                </td>
                <td>
                    <img src="https://cdn.tgdd.vn/Products/Images/42/298377/samsung-galaxy-a34-den-1.jpg" alt="" />
                    <figcaption>Điện thoại Samsung Galaxy A34 5G 256GB</figcaption>
                    <a>9.490.000đ</a><br>
                    <div class="discount-price">Giảm giá: 7.990.000đ</div>
                    <button class="btn-infor" name="samsung" value="7990000">Xem thông tin</button>
                </td>                 
                <td>
                    <img src="https://cdn.tgdd.vn/Products/Images/42/250103/samsung-galaxy-a54-xanh-1.jpg" alt="" />
                    <figcaption>Điện thoại Samsung Galaxy A54 5G 128GB</figcaption>
                    <a>10.490.000đ</a><br>
                    <div class="discount-price">Giảm giá: 9.490.000đ</div>
                    <button class="btn-infor" name="samsung" value="9490000">Xem thông tin</button>
                </td> 
                <td>
                    <img src="https://cdn.tgdd.vn/Products/Images/42/250103/samsung-galaxy-a54-tim-glr-1.jpg" alt="" />
                    <figcaption>Điện thoại Samsung Galaxy A54 5G 256GB</figcaption>
                    <a>11.490.000đ</a><br>
                    <div class="discount-price">Giảm giá: 9.990.000đ</div>
                    <button class="btn-infor" name="samsung" value="9990000">Xem thông tin</button>
                </td> 
            </tr>    
               
        </table>   
        <br>    
            
        <table class="samsung_product">
            <tr colspan="12"> 
                <th>Samsung Galaxy S</th>
            </tr> 
            <tr>
                <td>   
                    <img src="https://cdn.tgdd.vn/Products/Images/42/267211/samsung-galaxy-s21-fe-1.jpg" alt="" />
                    <figcaption>Điện thoại Samsung Galaxy S21 FE 5G (6GB/128GB)</figcaption>
                    <a>12.990.000đ</a><br>
                    <div class="discount-price">Giảm giá: 9.990.000đ</div>
                    <button class="btn-infor" name="samsung" value="9990000">Xem thông tin</button>
                </td>
                <td>   
                    <img src="https://cdn.tgdd.vn/Products/Images/42/267212/samsung-galaxy-s21-fe-1-1.jpg" alt="" />
                    <figcaption>Điện thoại Samsung Galaxy S21 FE 5G (8GB/256GB)</figcaption>
                    <a>18.990.000đ</a><br>
                    <div class="discount-price">Giảm giá: 11.990.000đ</div>
                    <button class="btn-infor" name="samsung" value="11990000">Xem thông tin</button>
                </td>
                <td>
                    <img src="https://cdn.tgdd.vn/Products/Images/42/264060/samsung-galaxy-s23-den-1-1.jpg" alt="" />
                    <figcaption>Điện thoại Samsung Galaxy S23 5G 128GB</figcaption>
                    <a>22.990.000đ</a><br>
                    <div class="discount-price">Giảm giá: 16.990.000đ</div>
                    <button class="btn-infor" name="samsung" value="16990000">Xem thông tin</button>
                </td> 
                <td>
                    <img src="https://cdn.tgdd.vn/Products/Images/42/290829/samsung-galaxy-s23-plus-kem-1.jpg" alt="" />
                    <figcaption>Điện thoại Samsung Galaxy S23 5G 256GB</figcaption>
                    <a>26.990.000đ</a><br>
                    <div class="discount-price">Giảm giá: 19.990.000đ</div>
                    <button class="btn-infor" name="samsung" value="19990000">Xem thông tin</button>
                </td> 
            </tr>    
            <tr>
                <td>
                    <img src="https://cdn.tgdd.vn/Products/Images/42/290829/samsung-galaxy-s23-plus-xanh-1-1.jpg" alt="" />
                    <figcaption>Điện thoại Samsung Galaxy S23 5G 512GB</figcaption>
                    <a>29.990.000đ</a><br>
                    <div class="discount-price">Giảm giá: 22.990.000đ</div>
                    <button class="btn-infor" name="samsung" value="22990000">Xem thông tin</button>
                </td>
                <td>
                    <img src="https://cdn.tgdd.vn/Products/Images/42/249948/samsung-galaxy-s23-ultra-1-2.jpg" alt="" />
                    <figcaption>Điện thoại Samsung Galaxy S23 Ultra 5G 256GB</figcaption>
                    <a>31.990.000đ</a><br>
                    <div class="discount-price">Giảm giá: 23.990.000đ</div>
                    <button class="btn-infor" name="samsung" value="23990000">Xem thông tin</button>
                </td>                
                <td>
                    <img src="https://cdn.tgdd.vn/Products/Images/42/249948/samsung-galaxy-s23-ultra-1-2.jpg" alt="" />
                    <figcaption>Điện thoại Samsung Galaxy S23 Ultra 5G 512GB</figcaption>
                    <a>36.990.000đ</a><br>
                    <div class="discount-price">Giảm giá: 29.990.000đ</div>
                    <button class="btn-infor" name="samsung" value="29990000">Xem thông tin</button>
                </td> 
                <td>
                    <img src="https://cdn.tgdd.vn/Products/Images/42/301796/samsung-galaxy-s-ultra-tim-1.jpg" alt="" />
                    <figcaption>Điện thoại Samsung Galaxy S23 5G Ultra 1TB</figcaption>
                    <a>44.990.000đ</a><br>
                    <div class="discount-price">Giảm giá: 35.990.000đ</div>
                    <button class="btn-infor" name="samsung" value="35990000">Xem thông tin</button>
                </td> 
            </tr>                   
            </tr>
        </table>
        <br> 
    </div>    
</body>
</html>
