<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{asset('/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .menu{
            font-size: 24px;
            display: inline-block;
            width: 100%;
        }
        .menu a:not(:first-child){
            padding-left: 2%;
        }
        .card{
            height: 300px;
            width: 30%;
            display: inline-block;
        }
        .card img{
            display: inline-block;
            max-width: 100%;
            max-height: 100%;
        }
        .card p{
            font-size: 24px;
            font-weight: bold;
        }
        .row{
            margin-top: 3%  ;
        }
        .sidebar{
            background-color: white;
        }
        .col-sm-2{
            margin-top: 8%;
        }
        .sidemenu{
            list-style: none;
            font-size: 24px;
            margin-top: 20%;
        }
        .sidemenu li{
            padding-top: 20%;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-10">
                <div>
                    <span class="fa fa-home" style="font-size: 100px"></span>
                    <h2>SWEET HOME</h2>
                </div>
                <div class="menu">
                    <a href="#">Home</a>
                    <a href="#">Best Home</a>
                    <a href="#">Life Style</a>
                    <a href="#">About Us</a>
                    <a href="#">Contact Us</a>
                </div>
                <div class="row">
                    @foreach($obj as $item)
                        <div class="card">
                            <img src="{{$item -> image}}">
                            <p>{{$item -> name}}</p>
                            <p class="district">{{$item -> district}}</p>
                            <p class="price">{{$item -> price}}</p>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-sm-2">
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">

                            <!--Thanh tìm kiếm-->
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                                </div>
                            </li>
                            <ul class="sidemenu">
                                <p style="background-color: darkgray">Search By District</p>
                                <li>
                                    <p class="district-filter">District 1</p>
                                </li>
                                <li>
                                    <p class="district-filter">District 2</p>
                                </li>
                                <li>
                                    <p class="district-filter">District 3</p>
                                </li>
                                <li>
                                    <p class="district-filter">District 4</p>
                                </li>
                                <li>
                                    <p class="district-filter">District 5</p>
                                </li>
                                <br>
                                <p style="background-color: darkgray">Search By Price</p>
                                <li>
                                    <p class="price-filter">< 10000 $</p>
                                </li><li>
                                    <p class="price-filter">10000 - 15000 $</p>
                                </li><li>
                                    <p class="price-filter">15000 - 30000 $</p>
                                </li><li>
                                    <p class="price-filter">30000 - 50000 $</p>
                                </li><li>
                                    <p class="price-filter">< 50000 $</p>
                                </li>
                            </ul>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
$(document).on('click' , '.district-filter', function (){
    $('.card').removeClass('hidden');
    var filter = $(this).text();
    $('.district').not(':contains('+ filter +')').closest('.card').addClass('hidden');
});
$(document).on('click','.price-filter',function (){
    $('.card').removeClass('hidden');
    var filter = $(this).text().split(" ");
    var filtered = filter.filter(function (item) {
        return (parseInt(item) == item);
    });
    $('.price').filter(function() {
        // Get the number and convert it to Number
        var num = +($(this).text().trim());
        if(filtered.length == 2){
            return num <= filtered[0] || num >= filtered[1];
        }
        else{
            return num >= filtered[0];
        }
    }).closest('.card').addClass('hidden');
});
</script>
</body>
</html>