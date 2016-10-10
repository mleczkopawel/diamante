<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="js/jquery-3.1.1.min.js"></script>
</head>
<body>

<header>
    <div class="container-fluid black">
        <div class="container">
            <div class="row ">
                <a href="#" class="js-search-button spol"><img src="image/sc.png"></a>
                <input type="text" class="src js-search" placeholder="Szukaj....">
                <a href="#" class="spol"><img src="image/sn.png"></a>
                <a href="#" class="spol"><img src="image/in.png"></a>
                <a href="#" class="spol"><img src="image/fb.png"></a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row title">
            <h1><span class="big">DIAMANTE</span> BLOG </h1>
        </div>
        <div class="row center bords">
            <ul class="navi pawel-center">
                <li class="bord-right"><a href="#">HOME</a></li>
                <li class="bord-right"><a href="#">MODA</a></li>
                <li class="bord-right"><a href="#">STYL ŻYCIA</a></li>
                <li class="bord-right"><a href="#">MUZYKA</a></li>
                <li class="bord-right"><a class="color-red" href="#">SKLEP</a></li>
                <li><a href="#">KONTAKT</a></li>

            </ul>
        </div>
    </div>

</header>
<div class="container main">
    <div class="row">
        <div class="col-lg-6 home-img js-image-0">
            <p class="text-img">HALO</p>
        </div>
        <div class="col-lg-6 home-img js-image-1">
        </div>
        <div class="col-lg-6 home-img js-image-2">
            <p class="text-img">HALO</p>
        </div>
        <div class="col-lg-6 home-img js-image-3">
        </div>
    </div>
</div>
<footer>
    <div class="container">
        <p class="dmt">DIAMANTE WEAR 2016</p>
    </div>
</footer>
<script>
    var searchInput = $('.js-searh').val();
    var searchButton = $('.js-search-button');

    $(document).ready(function () {
        $(searchInput).on('keypress', function (e) {
            if ((e.which && e.which == 13) || (e.keyCode && e.keyCode)) {
                $(searchButton).click();
                return false;
            } else {
                return true;
            }
        });

        $(searchButton).on('click', function (e) {
            $.ajax({
                url: 'http://localhost/hf/diamante',
                type: 'POST',
                dataType: 'json',
                data: {
                    search: searchInput
                },
                success: function (response) {
                    console.log(response);
                }
            });
            e.preventDefault();
            return false;
        });

        for (i = 0; i < 8; i++) {
            if (i%2 == 0) {
                $('.js-image-' + i).addClass('left-cnt');
            }
        }
    })
</script>
</body>
</html>