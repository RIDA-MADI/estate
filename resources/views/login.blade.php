<html>
<head>

</head>
<style>
    body{
        margin: 0;
        padding: 0;
        background: url("house.jpg");
        background-size: cover;
        height: 660px;
        font-family: sans-serif;
    }

    .box{
        position: relative;
        width: 385px;
        height: 430px;
        background: #b1c5d094;
        margin: 70px auto;
        padding: 40px;
        border-radius: 5px;
        box-shadow: 0 35px 50px #0a1516c9;
    }

    .box h2{
         margin-top: 0;
        margin-bottom: 45px;
        text-align: center;
        color: #fff;
        font-weight: 500;
    }
    .box .input-box .content {
        position: relative;
    }

    .box .content span {
        position: absolute;
        bottom:10px;
        left: 0;
        color: #fff;
        font-size: 19px;
    }
    .box .content i{
        position: absolute;
        bottom:10px;
        right: 0;
        color: #fff;
        font-size: 22px;
    }

    .box .input-box input {
        display: block;
        background: none;
        border: none;
        border-bottom: 1px solid #fff;
        width: 100%;
        padding: 10px 100px;
        margin-bottom: 35px;
        color: #fff;
        box-sizing: border-box;
        font-size: 19px ;
    }

    .box .input-box input:focus{
        outline: none;
    }
    .box .mid {
        color: #fff;
        font-size: 18px;
    }
    .box .mid a{
        color: #fff;
    }

    .box .mid button{
       display: block;
        width: 100%;
        background: #1B88f5;
        padding: 12px;
        border:none;
       margin: 20px auto;
        margin-top: 15px;
        font-size: 19px;
        cursor: pointer;
        color: #fff;
    }

    .bottom{
        position: absolute;
        bottom: 0;
        width: 91.5%;
        border-bottom-right-radius: 5px;
        overflow: hidden;
        font-size: 19px;
        line-height: 50px;
        color: #fff;

    }

    .bottom i{
        display: inline-block;
        width: 60px;
        height: 60px;
        line-height: 60px;
        text-align: center;
        color: #fff;
        background: #ffffff6b;
        float: right;
        cursor: pointer;
    }

    .bottom i:hover {
        background: #1B88f5;
    }

    .bottom a{
        color: #fff;
    }

</style>
<body>
   <div class="box">
       <h2>Sign In</h2>
       <div class="input-box">
           <div class="content">
               <span>Email</span>
               <input type="text">
               <i class="fa fa-envelope"></i>
           </div>
           <div class="content">
               <span>Password</span>
               <input type="password">
               <i class="fa fa-lock"></i>
           </div>
       </div>
       <div class="mid">
           <a href="">Forget Password?</a>
           <button>Sign In</button>
           <input type="checkbox"> Keep me sign in
       </div>
       <div class="bottom">
           <a herf="">Sign Up</a> or Sign In
           <i class="fa fa-facebook"> <img src="facebook.png" width="40" height="40" style="padding: 10px"></i>
           <i class="fa fa-twitter"> <img src="twiiter.png" width="40" height="40" style="padding: 10px"></i>
           <i class="fa fa-google-plus"> <img src="google.png" width="40" height="40" style="padding: 10px"></i>
       </div>

   </div>
</body>
</html>
