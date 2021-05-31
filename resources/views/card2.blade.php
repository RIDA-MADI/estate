<html>
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="all.css">
    <link rel="stylesheet" href="fontawesome.min.css">
    <link rel="stylesheet" href="staylest.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
    .rida{

        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #969696;
    }

    .container{
        display: flex;
        justify-content: right;
        align-items: center;
        position: relative;
        width: 100%;
        padding: 30px;
        flex-wrap: wrap;

    }
    .card{
        position: relative;
        max-width: 300px;
        height: 215px;
        background-color: #fff;
        margin: 30px 30px;
        padding: 20px 15px;
        display: flex;
        flex-direction: column;
        box-shadow: 0 5px 20px rgba(0,0,0,0.5);
        transition: 0.3s ease-in-out;

    }

    .card:hover{
        height: 420px;
    }

    .card .image{
        position: relative;
        width: 260px;
        height: 260px;
        top: -60px;
        left: 0;
        border-radius: 5px;
        box-shadow: 0 5px 10px rgba(0,0,0,0.5);
        z-index: 1;
        background-color: #321c48;
    }

    .card .image img{
        width: 100% ;
    }

    .card .text{
        position: relative;
        margin-top: -140px;
        padding: 10px 15px;
        color: #321c48;
        opacity: 0;
        visibility: hidden;
        transition: 0.3s ease-in-out;
        text-align: center;
    }

    .card:hover .text {

        opacity: 1;
        visibility: visible;
        margin-top: -40px;
        transition-delay: 0.3s;
    }


</style>
<body>
<section id="header">
    <nav class="nav navbar navbar-expand-lg navbar-light bg-dark ">
        <h3> REAL STATE</h3>
        <div class="lable-select ml-auto">
            <label class="lable" style="margin-left: 200px;">choce your region</label>
            <select class="sellect" name="your region">
                <option>DAMASCUSE</option>
                <option> HOMS</option>
                <option> ALEPO</option>
            </select>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class=" but collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link btn-lg btn-light bg-dark" style="color: thistle;"href="#header"><i class="fas fa-plus"></i> ADD<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item style='color:#fff'">
                    <a class="nav-link btn-lg btn-light bg-dark" style="color: thistle;"href="#footer"> <i class="fas fa-user"></i> SIGNUP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-lg btn-light bg-dark"style="color: thistle;"href="propertys.html"> <i class="fas fa-gift"></i> BIDS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-lg btn-light bg-dark"style="color: thistle;"href="#"><i class="fas fa-arrow-up"></i><i class="fas fa-dollar-sign"></i> AUCTION</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle btn-lg bg-dark btn-light" style="color:thistle ;"href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        TYPE
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item bg-dark" style="color:thistle" href="#">APARTMENT</a>
                        <a class="dropdown-item bg-dark" style="color:thistle" href="#">VILLA</a>
                        <a class="dropdown-item bg-dark" style="color:thistle" href="#">RESTAURANT</a>
                        <a class="dropdown-item bg-dark" style="color:thistle" href="#">CHALET</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</section>




<div class="rida">

   <div class="container">
       <div class="card">
           <div class="image">
               <img src="house.jpg">
           </div>
           <div class="text">
               <h2>Noritch</h2>
               <p>price$ : <i>4</i></p>
               <p>area : <i>4</i></p>
               <p>Address : <i>4</i></p>
               <a href="#" class="btn btn-lg btn-dark btn-dark" style=""> <i class =" fas fa-money-check-alt"></i> BUY</a>
               <a href="details.html" class="btn btn-lg btn-dark btn-light" style=""><i class =" fas fa-info-circle"></i> details</a>
           </div>
       </div>
       <div class="card">
           <div class="image">
               <img src="house.jpg">
           </div>
           <div class="text">
               <h2>Noritch</h2>
               <p>Football</p>
           </div>
       </div>
       <div class="card">
           <div class="image">
               <img src="house.jpg">
           </div>
           <div class="text">
               <h2>Noritch</h2>
               <p>Football</p>
           </div>
       </div>
       <div class="card">
           <div class="image">
               <img src="house.jpg">
           </div>
           <div class="text">
               <h2>Noritch</h2>
               <p>Football</p>
           </div>
       </div>
       <div class="card">
           <div class="image">
               <img src="house.jpg">
           </div>
           <div class="text">
               <h2>Noritch</h2>
               <p>Football</p>
           </div>
       </div>
       <div class="card">
           <div class="image">
               <img src="house.jpg">
           </div>
           <div class="text">
               <h2>Noritch</h2>
               <p>Football</p>
           </div>
       </div>
       <div class="card">
           <div class="image">
               <img src="house.jpg">
           </div>
           <div class="text">
               <h2>Noritch</h2>
               <p>Football</p>
           </div>
       </div>
       <div class="card">
           <div class="image">
               <img src="house.jpg">
           </div>
           <div class="text">
               <h2>Noritch</h2>
               <p>Football</p>
           </div>
       </div>
       <div class="card">
           <div class="image">
               <img src="house.jpg">
           </div>
           <div class="text">
               <h2>Noritch</h2>
               <p>price$ : <i>4</i></p>
               <p>area : <i>4</i></p>
               <p>Address : <i>4</i></p>
               <a href="#" class="btn btn-lg btn-dark btn-dark" style=""> <i class =" fas fa-money-check-alt"></i> BUY</a>
               <a href="details.html" class="btn btn-lg btn-dark btn-light" style=""><i class =" fas fa-info-circle"></i> details</a>
           </div>
       </div>
   </div>

</div>
</body>
</html>
