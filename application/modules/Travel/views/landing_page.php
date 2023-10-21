<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Manrope' rel='stylesheet'>
    <title>TRAVEL</title>
    <style>
        body{
            font-family: 'Manrope';
        }
        .container{
            width: 100%; 
        }
        .navbar{
            font-size: 16px;
            padding: 40px 120px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
        }
        nav{
            width: 50%;
        }
        ul{
            padding-left:0;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            list-style-type: none;
            text-align: center;
        }
        nav ul li a{
            text-decoration : none;
            color: black;
        }
        ul > .active > a{
            color: #0F9DD6;
        }
        .nav-button > button{
            font-size: 16px;
            font-family: 'Manrope';
            background-color: #38BCE5;
            border-radius: 100px;
            padding: 17px 48px;
            border: 0;
            color: #fff;
        }
        .banner{
            display:flex;
            overflow: auto;
            overflow-y: hidden;
            white-space: nowrap;
        }
        .box-one{
            margin-left: 368px;
            width: 872px;
            height: 626px;
        }
        .box-two{
            height: 626px;
            margin-left: 51px;
        }
        .dot{
            position: absolute;
            z-index: 999;
            margin-left: 0;
            margin-top: 291px;
            height: 101.5px;
        }
        .card-banner{
            position: absolute;
            z-index: 999;
            margin-left: 120px;
            margin-top: 83px;
            width: 561px;
            height: 433px;
            background-color: rgba(255, 255, 255, 0.6);
            box-shadow: 7px 19px 70px -14px rgba(0,0,0,0.5);
            -webkit-box-shadow: 7px 19px 70px -14px rgba(0,0,0,0.5);
            -moz-box-shadow: 7px 19px 70px -14px rgba(0,0,0,0.5);

            border-radius: 10px;
        }
        .title{
            word-wrap: break-word;
            padding-left: 45px;
            padding-top: 51px;
            color: black;
            font-weight: 800;
            font-size: 55px;
        }
        .subtitle{
            word-wrap: break-word;
            padding-left: 45px;
            padding-top: 35px;
            color: black;
            font-size: 18px;
        }
        .btn-card{
            padding-left: 45px;
            padding-top: 16px;
        }
        .btn-card > button{
            background-color: #38BCE5;
            border-radius: 10px;
            padding: 18px 48px;
            border: 0;
            color: #fff;
            font-size: 16px;
        }
        .about{
            margin-top: 141px;
            height: 374px;
            background-color: #F1F1F1;
            padding: 48px 119px;
            display: flex;
        }
        .text-about{
            padding: 72px 1px 72px 70px;
        }
        .member{
            margin: 142px 122px;
        }
        .box-member{
            /* height: 290px; */
            background-color: #F3F3F3;
            border-radius: 20px;
            display: flex;
            padding: 72.5px 78px;
        }
        .box-member-content{
            display: flex;
        }
        .box-member-content > img{
            width: 46px;
            height: 46px;
        }
        .member-text{
            margin-left: 18px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="<?= base_url() ?>assets/logo.png" alt="">
            </div>
            <nav>
                <ul>
                    <li class="active"><a href="#">Open Trip</a></li>
                    <li><a href="#">Testimony</a></li>
                    <li><a href="#">Inspiration</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Need Help?</a></li>
                </ul>
            </nav>
            <div class="nav-button">
                <button>Message Us</button>
            </div>
        </div>
        <div class="banner">
            <div class="dot">
                <img src="<?= base_url() ?>assets/dot.png" alt="">
            </div>
            <div class="card-banner">
                <div class="title">
                    Looking for <br> Trip Experience
                </div>
                <div class="subtitle">
                Get your amazing trip experiences with us. <br> And share your moments!
                <br><br>
                <b>We've got you covered!</b> 
                </div>
                <div class="btn-card">
                    <button>Start Booking Now</button>
                </div>
            </div>
            <div class="box-one">
                <img src="<?= base_url() ?>assets/banner.png" alt="">
            </div>
            <div class="box-two">
                <img src="<?= base_url() ?>assets/banner.png" alt="">
            </div>            
        </div>
        <div class="about">
            <div class="img-about">
                <img src="<?= base_url() ?>assets/about.png" alt="">
            </div>
            <div class="text-about">
                <h1>About Us</h3>
                <p>Travel is the leading travel agent in Indonesia which has been established since 1971. With branch offices spread across Indonesia and the goldenrama.com website, we are here to be your gateway to extraordinary destinations.</p>
            </div>
        </div>
        <div class="member">
            <h1>How to <br> Get your Member</h1>
            <div class="box-member">
                <div class="box-member-content">
                    <img src="<?= base_url() ?>assets/Paper.png" alt="">
                    <div class="member-text">
                        <h3 style="margin-top: 0">Prepare your Document</h3>
                        <p style="color:#A0A0A0">Prepare your identity and personal data</p>
                    </div>
                </div>
                <div class="box-member-content">
                    <img src="<?= base_url() ?>assets/Verif.png" alt="">
                    <div class="member-text">
                        <h3 style="margin-top: 0">Self Verification</h3>
                        <p style="color:#A0A0A0">Do Video Call to verifiy identity yourself</p>
                    </div>
                </div>
                <div class="box-member-content">
                    <img src="<?= base_url() ?>assets/File.png" alt="">
                    <div class="member-text">
                        <h3 style="margin-top: 0">Ready to use your travel member</h3>
                        <p style="color:#A0A0A0">Your member will send to your address</p>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</body>
</html>