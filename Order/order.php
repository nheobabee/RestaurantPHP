<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/order-style.css">
    <link rel="stylesheet" href="assets/font/themify-icons/themify-icons.css">
</head>
<body>
    <header>
        <div class="logo-header">
            <img src="assets/img/1.png" alt="">
        </div>
        <nav>
            <a href="../Home/home.html">Home</a>
            <a href="../Categories/categories.html">Categories</a>
            <a href="../Foods/foods.html">Foods</a>
            <a href="#">Contact</a>
        </nav>
    </header>

    <section>
        <h2>Fill this form to confirm your order.</h2>
        <div class="order-form">
            <fieldset class="selected-food">
                <legend>Selected Food</legend>
                    <div class="food-img">
                        <img src="assets/img/6.jpg" alt="">
                    </div>
                    <div class="sub-food">
                        <p id="food-title">Food Title</p>
                        <p id="food-price">$2.3</p>
                        <p id="quantity">Quantity</p>
                        <input type="number" name="" id="" value="1">
                    </div>
            </fieldset>

            <fieldset class="delivery-detail">
                <legend>Delivery Detail</legend>
                    <div class="name-customer">
                        <p id = "fullname">Full Name</p>
                        <input placeholder="E.g. NheoSS" type="text">
                    </div>
                        
                    <div class="phone-customer">
                        <p id ="phone">Phone Number</p>
                        <input placeholder="E.g. 03866xxxxx" type="text">
                    </div>
                       
                    <div class="email-customer">
                        <p id="email">Email</p>
                        <input placeholder="E.g. NheoSS@gmail.com" type="text">
                    </div>

                    <div class="address-customer">
                        <p id="address">Address</p>
                        <textarea placeholder="Street, City, Country" name="" id="" cols="30" rows="10"></textarea>
                    </div>

                    <div class="btn-confirm">
                        <button>Confirm Order</button>
                    </div>
            </fieldset>
        </div>
    </section>

    <footer>
    <div class="footer">
        <div class="logo-social">
            <a class="fb-icon ti-facebook" href="https://www.facebook.com/nheoSoSweet"></a>
        </div>

        <div class="logo-social">
           
            <a class="ig-icon ti-instagram" href="https://www.instagram.com/nheososweet/"></a>
        </div>

        <div class="logo-social">
           
            <a class="ig-icon ti-twitter" href=""></a>
        </div>
        </div>
        <p class="copyright">Designed by <span  style="color:red">Nheo</span></p>
    </div>
    </footer>
</body>
</html>