<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TiTan shop</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</head>

<body>
<header>
        <h1></h1>
        <img src="https://i.pinimg.com/736x/12/eb/74/12eb74b79ff13b133af6db1e3055e978.jpg" alt="Logo" class="logo" style="width:100%">
    </header>

    <nav>
    <div class="header" style="margin-top:46px">
        <a href="#"><i class="fas fa-home"></i> Trang chủ</a>
        <a href="http://localhost/project/main/Samsung.php"><i class="fas fa-mobile"></i> Samsung</a>
        <input type="text" placeholder="Tìm kiếm...">
    
        <a href="#"><i class="fas fa-shopping-cart"></i> Giỏ hàng</a>
        <button class="login-btn"><a href="http://localhost/project/main/dangnhap.php" >Đăng nhập</a></button>
        <button class="signup-btn"><a href='http://localhost/project/main/dangky.php'  >Đăng ký</a></button>
        </div>
    </nav>

    <div class="content">
        <div class="scrollable-content">
            <a href="https://www.google.com" target="_blank">
                <img src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2023/11/banner/IP15-720-220-720x220-1.png" alt="Clickable Image" class="clickable-image">
            </a>
            <br>
        </div>
    </div>
    <div class="buyoppo">
    <?php
    $products = [
        [
            'image' => 'https://cdn.tgdd.vn/Products/Images/42/299033/iphone-15-pro-blue-1.jpg',
            'name' => 'Điện thoại iPhone 15 Pro 128GB',
            'price' => '28.990.000đ',
        ],
        [
            'image' => 'https://cdn.tgdd.vn/Products/Images/42/305658/iphone-15-pro-max-black-1-1.jpg',
            'name' => 'Điện thoại iPhone 15 Pro Max 256GB',
            'price' => '34.990.000đ',
        ],
        [
            'image' => 'https://cdn.tgdd.vn/Products/Images/42/249948/samsung-galaxy-s23-ultra-1-2.jpg',
            'name' => 'Điện thoại Samsung Galaxy S23 Ultra 5G 512GB',
            'price' => '36.990.000đ',
        ],
        [
            'image' => 'https://cdn.tgdd.vn/Products/Images/42/250625/samsung-galaxy-z-flod-4-den-1.jpg',
            'name' => 'Điện thoại Samsung Galaxy Z Fold4 5G 256GB',
            'price' => '40.990.000đ',
        ],
        [
            'image' => 'https://cdn.tgdd.vn/Products/Images/42/292780/oppo-a77s-den-1.jpg',
            'name' => 'Điện thoại OPPO A77s ',
            'price' => '6.290.000đ',
        ],
        [
            'image' => 'https://cdn.tgdd.vn/Products/Images/42/309847/oppo-a78-xanh-1-1.jpg',
            'name' => 'Điện thoại OPPO A78 ',
            'price' => '6.990.000đ',
        ],
        [
            'image' => 'https://cdn.tgdd.vn/Products/Images/42/285082/oppo-a57-4g-glr-den-1.jpg',
            'name' => 'Điện thoại OPPO A57 128GB ',
            'price' => '4.990.000đ',
        ],
    ];
    ?>

    <div class="container">

        <div class="promo-image">
            <a href="large_product_page.php">
            <img src="https://bizweb.dktcdn.net/100/438/408/files/anh-may-dep-yodyvn-2.jpg?v=1683598388004" alt="Promo Image">
            </a>
        </div>

        <table class="product-table">
            <tr>
                <?php foreach ($products as $product): ?>
                    <td>
                        <div class="product">
                            <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                            <div class="product-info">
                                <p class="installment">Trả Góp 0%</p>
                                <p class="product-name"><?php echo $product['name']; ?></p>
                                <p class="product-price"><?php echo $product['price']; ?></p>
                            </div>
                        </div>
                    </td>
                <?php endforeach; ?>
            </tr>
        </table>

        <div class="view-all">
            <a href="all_products.php">Xem Tất Cả</a>
        </div>
    </div>
   
<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img src="https://cdn.tgdd.vn/Products/Images/42/250625/samsung-galaxy-z-flod-4-den-1.jpg" alt="Image 1">
            <br>
            <div class="caption">Điện thoại Samsung Galaxy Z Fold4 5G 256GB</div>
        </div>
        <div class="swiper-slide">
            <img src="https://cdn.tgdd.vn/Products/Images/42/258047/samsung-galaxy-flip4-glr-tim-1.jpg" alt="Image 2">
            <div class="caption">Điện thoại Samsung Galaxy Z Flip4 5G 128GB</div>
        </div>
        <div class="swiper-slide">
            <img src="https://cdn.tgdd.vn/Products/Images/42/250103/samsung-galaxy-a54-tim-glr-1.jpg" alt="Image 3">
            <div class="caption">Điện thoại Samsung Galaxy A54 5G 256GB</div>
        </div>
        <div class="swiper-slide">
            <img src="https://cdn.tgdd.vn/Products/Images/42/292770/samsung-galaxy-a14-4g-tim-1.jpg" alt="Image 4">
            <div class="caption">Điện thoại Samsung Galaxy A14 6GB </div>
        </div>           
        <div class="swiper-slide">
            <img src="https://cdn.tgdd.vn/Products/Images/42/249948/samsung-galaxy-s23-ultra-kem-1-1.jpg" alt="Image 5">
            <div class="caption">Điện thoại Samsung Galaxy S23 Ultra 5G 256GB</div>
        </div>   
        <div class="swiper-slide">
            <img src="https://cdn.tgdd.vn/Products/Images/42/264060/samsung-galaxy-s23-xanh-1-1.jpg" alt="Image 6">
            <div class="caption">Điện thoại Samsung Galaxy S23 5G 128GB</div>
        </div>
        <div class="swiper-slide">
            <img src="https://cdn.tgdd.vn/Products/Images/42/303831/iphone-15-pro-titan-tu-nhien-1.jpg" alt="Image 7">
            <div class="caption">Điện thoại iPhone 15 Pro 512GB</div>
        </div>
        <div class="swiper-slide">
            <img src="https://cdn.tgdd.vn/Products/Images/42/305658/iphone-15-pro-max-blue-1-1.jpg" alt="Image 8">
            <div class="caption">Điện thoại iPhone 15 Pro Max 512GB</div>
        </div>           
        <div class="swiper-slide">
            <img src="https://cdn.tgdd.vn/Products/Images/42/240259/iphone-14-do-glr-1.jpg" alt="Image 9">
            <div class="caption">Điện thoại iPhone 14 128GB</div>
        </div> 

        <div class="swiper-slide">
            <img src="https://cdn.tgdd.vn/Products/Images/42/245545/iphone-14-plus-xanh-1.jpg" alt="Image 10">
            <div class="caption">Điện thoại iPhone 14 Plus 256GB </div>
        </div> 
        <div class="swiper-slide">
            <img src="https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-purple-1.jpg" alt="Image 11">
            <div class="caption">Điện thoại iPhone 14 Pro Max 128GB</div>
        </div> 
        <div class="swiper-slide">
            <img src="https://cdn.tgdd.vn/Products/Images/42/307891/oppo-a98-5g-den-1-1.jpg" alt="Image 12">
            <div class="caption">Điện thoại OPPO A98 5G</div>
        </div> 
        <div class="swiper-slide">
            <img src="https://cdn.tgdd.vn/Products/Images/42/275435/oppo-a58-xanh-1.jpg" alt="Image 13">
            <div class="caption">Điện thoại OPPO A58 6GB</div>
        </div> 
        <div class="swiper-slide">
            <img src="https://cdn.tgdd.vn/Products/Images/42/299034/oppo-n2-flip-tim-1-1.jpg" alt="Image 14">
            <div class="caption">Điện thoại OPPO Find N2 Flip 5G </div>
        </div>
        <div class="swiper-slide">
            <img src="https://cdn.tgdd.vn/Products/Images/42/260546/oppo-reno8-pro-xanh-1.jpg" alt="Image 14">
            <div class="caption">Điện thoại OPPO Reno8 Pro 5G </div>
        </div>
        <div class="swiper-slide">
            <img src="https://cdn.tgdd.vn/Products/Images/42/306979/oppo-reno10-pro-tim-1-2.jpg" alt="Image 15">
            <div class="caption">Điện thoại OPPO Reno10 5G 256GB </div>
        </div>
        <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
        </div>
    <!-- Thêm thanh điều hướng -->
    

</div>
<script>
    var mySwiper = new Swiper('.swiper-container', {
        // Tùy chọn thêm thanh điều hướng
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        // Tùy chọn thêm chức năng kéo lần lượt từng ảnh
        grabCursor: true,
        // Tùy chọn thêm chữ mô tả
        on: {
            slideChange: function () {
                var captions = document.querySelectorAll('.swiper-slide .caption');
                captions.forEach(function (caption) {
                    caption.style.opacity = 0;
                });
                captions[mySwiper.activeIndex].style.opacity = 1;
            },
        },
    });
</script>


</body>
</html>