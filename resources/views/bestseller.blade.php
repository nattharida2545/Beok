<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Prompt">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>เว็บซื้อหนังสือ</title>
    <link rel="stylesheet" href="style.css">

</head>

<body style="font-family: Prompt;" background = "picture/background/BG2.jpg">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
    <div class="topnav">
        <a href="index.php"><b>หน้าแรก</b></a>
        <a class="active" href="bestseller.html"><b>ขายดี</b></a>
        <a href="new.html"><b>มาใหม่</b></a>
        <a href="promotion.html"><b>โปรโมชั่น</b></a>
        <a href="recommend.html"><b>แนะนำ</b></a>
        <div class="dropdown">
            <button class="dropbtn"><b>หมวดหมู่ <i class="arrow"></i></b></button>
            <div class="dropdown-content">
                <a href="love.html">นิยายรัก</a>
                <a href="romand.html">นิยายโรมานซ์</a>
                <a href="china.html">นิยายรักจีนโบราณ</a>
                <a href="#">นิยายกำลังภายใน</a>
                <a href="#">นิยายแฟนตาซี</a>
                <a href="#">การ์ตูนทั่วไป</a>
                <a href="#">การ์ตูนผู้หญิง</a>
                <a href="#">พัฒนาตนเอง</a>
        </div>
        </div>
        <div class="topnav-right">
            <div class="dropdown">
                <button class="dropbtn"><b>ผู้ใช้งาน <i class="arrow"></i></b></button>
                <div class="dropdown-content">
                    <a href="profile.html">จัดการข้อมูล</a>
                    <a href="cart.php">ตะกร้าสินค้า</a>
                    <a href="log_reg/login.php">ออกจากระบบ</a>
                </div>
            </div>
        </div>
        </div> 
        
        <div class="centerSlide" style="max-width:500px" >
            <img class="mySlides" src="picture/best/best1.gif" style="width:80%">
            <img class="mySlides" src="picture/best/best2.gif" style="width:80%">
            <img class="mySlides" src="picture/best/best3.gif" style="width:80%">
            <img class="mySlides" src="picture/best/best4.gif" style="width:80%">
            <img class="mySlides" src="picture/best/best5.gif" style="width:80%">
        </div>
        <script>
            var myIndex = 0;
            carousel();
            
            function carousel() {
              var i;
              var x = document.getElementsByClassName("mySlides");
              for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
              }
              myIndex++;
              if (myIndex > x.length) {myIndex = 1}    
              x[myIndex-1].style.display = "block";  
              setTimeout(carousel, 3000); 
            }
            </script>
        <h2><br>&nbsp;&nbsp;ขายดี</h2>
        <hr>
        <div class="row">
            <div class="column">
                <div class="card" >
                    <a href="books/b2.html" target="_blank" ><img src="picture/best/best1.gif"  alt="book" style="height:300px; width:220px"></a>
                    <h2>ดุจดวงดาวเกียรติยศ<h2>
                    <p class="price">฿316 </p>
                    <button>Add to Cart</button>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="picture/best/best2.gif"  alt="book" style="height:300px; width:220px">
                    <h2>ข้าคือกาฝาก!<h2>
                    <p class="price">฿229</p>
                    <button>Add to Cart</button>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="picture/best/best3.gif"  alt="book" style="height:300px; width:220px">
                    <h2>เป็นสไลม์ไปซะแล้ว 13<h2>
                    <p class="price">฿245</p>
                    <button>Add to Cart</button>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="picture/best/best4.gif"  alt="book" style="height:300px; width:220px">
                    <h2>โซ่แค้นจองจำใจ<h2>
                    <p class="price">฿199</p>
                    <button>Add to Cart</button>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="picture/best/best5.gif" alt="book" style="height:300px; width:220px">
                    <h2>เล่นเส้น (LENSEN)<h2>
                    <p class="price">฿345</p>
                    <button>Add to Cart</button>
                </div>
            </div>
        </div>
       
        <h2><br>&nbsp;&nbsp;ขายดีในหมวดหมู่ นิยายรัก</h2>
        <hr>
        <div class="row">
            <div class="column">
                <div class="card">
                    <img src ="picture/best/best1.gif" alt="book" style= "height:300px; width:220px">
                    <h2>ดุจดวงดาวเกียรติยศ<h2>
                    <p class="price">฿316</p>
                    <button>Add to Cart</button>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src ="picture/best/best2.gif" alt="book" style= "height:300px; width:220px">
                    <h2>ข้าคือกาฝาก!<h2>
                    <p class="price">฿229</p>
                    <button>Add to Cart</button>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src ="picture/best/best5.gif" alt="book" style= "height:300px; width:220px">
                    <h2>เล่นเส้น<h2>
                    <p class="price">฿345</p>
                    <button>Add to Cart</button>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src ="picture/best/best6.gif" alt="book" style= "height:300px; width:220px">
                    <h2>เฮียอย่ามารัก<h2>
                    <p class="price">฿239</p>
                    <button>Add to Cart</button>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src ="picture/best/best7.gif" alt="book" style= "height:300px; width:220px">
                    <h2>เพื่อนเจ้าสาวมืออาชีพ<h2>
                    <p class="price">฿369</p>
                    <button>Add to Cart</button>
                </div>
            </div>
        </div>
            
        <h2><br>&nbsp;&nbsp;ขายดีในหมวดหมู่ นิยายโรมานซ์</h2>
        <hr>
        <div class="row">
            <div class="column">
                <div class="card">
                    <img src ="picture/best/best8.gif" alt="book" style= "height:300px; width:220px">
                    <h2>Daddy ที่แปลว่าร้าย<h2>
                    <p class="price">฿245</p>
                    <button>Add to Cart</button>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src ="picture/best/best9.gif" alt="book" style= "height:300px; width:220px">
                    <h2>ท่านพี่อย่าเย็นชา<h2>
                    <p class="price">฿175</p>
                    <button>Add to Cart</button>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src ="picture/best/best10.gif" alt="book" style= "height:300px; width:220px">
                    <h2>เซียนกระบี่มาแล้ว<h2>
                    <p class="price">฿179</p>
                    <button>Add to Cart</button>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src ="picture/best/best11.gif" alt="book" style= "height:300px; width:220px">
                    <h2>ผจญภัยสุดจักรวาล<h2>
                    <p class="price">฿199</p>
                    <button>Add to Cart</button>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src ="picture/best/best12.gif"  alt="book" style= "height:300px; width:220px">
                    <h2>ยอดคุณพ่อขั้นเทพ<h2>
                    <p class="price">฿219</p>
                    <button>Add to Cart</button>
                </div>
            </div>
        </div>
            
        <h2><br>&nbsp;&nbsp;ขายดีในหมวดหมู่ นิยายรักจีนโบราณ</h2>
        <hr>
        <div class="row">
            <div class="column">
                <div class="card">
                    <img src ="picture/best/best13.gif"  alt="book" style= "height:300px; width:220px">
                    <h2>สะดุดรักยัยแฟนเช่า<h2>
                    <p class="price">฿55</p>
                    <button>Add to Cart</button>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src ="picture/best/best14.gif" alt="book" style= "height:300px; width:220px">
                    <h2>สลายในวันสิ้นโลก<h2>
                    <p class="price">฿179</p>
                    <button>Add to Cart</button>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src ="picture/best/best15.gif"  alt="book" style= "height:300px; width:220px">
                    <h2>คุณพ่อยอดพระกาฬ<h2>
                    <p class="price">฿159</p>
                    <button>Add to Cart</button>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src ="picture/best/best12.gif" alt="book" style= "height:300px; width:220px">
                    <h2>ยอดคุณพ่อขั้นเทพ<h2>
                    <p class="price">฿219</p>
                    <button>Add to Cart</button>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src ="picture/best/best10.gif"  alt="book" style= "height:300px; width:220px">
                    <h2>เซียนกระบี่มาแล้ว<h2>
                    <p class="price">฿179</p>
                    <button>Add to Cart</button>
                </div>
            </div>
        </div>
        <br><div class="footer">
            <br><h3>ผู้จัดทำ</h3>
            <div style="opacity: 60%;">
                Narawit Khomsan<br>
                Pimnipa Srisamor<br>
                Areeya Loedarayakun<br>
                Nattharida Rasri<br>
                Trin Nanant
            </div><br>
            </div>
        </div>
    </div>
</x-app-layout>
    </body>
</html>
    
    