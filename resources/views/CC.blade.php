<html>

<head>
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/obj.css')}}">
</head>


<body>
<div id="wrapper_inside">
    <div id="wrapper">
        <header>

            <div class="menu_top_link">
                <div class="user_auth">
                    <ul class="auth">
                        <li class="user">
                            <a href="/login.html" title="login">Login</a> <a class="fix">|</a>
                            <a href="/register.html" title="Sign up" class="reg">Sign up</a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="clr"></div>
            <section class="banner">
                <div class="banner-left">
                    <a href="/home">
                        <img src="{{asset('img/logo.png')}}" alt="" class="logo">
                    </a>
                    <h1 style="color: black">THE RESTAURANT COMPARING</h1>

                </div>

                <div class="banner_menu">

                    <nav class="menu_top">
                        <ul>
                            <li class="home active"><a href="home" title="Home" class="home ads-evt">Home</a></li>
                            <li class="seri"><a href="" title="Compare" class="series ads-evt">Compare</a></li>
                            <li class="movies"><a href="" title=Top_Restaurant class="movie ads-evt">Top Restaurant</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="banner_right">
                    <div class="form">
                        <form onsubmit="" id="search-form" action="" method="get">
                            <div class="row">
                                <input placeholder="search" name="keyword_search" id="keyword" type="text" value="" autocomplete="off">
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </header>



    </div>
</div>
<div class="clr"></div>

    <div class="OBJ">
        <center>
            <div>
                <img src="{{asset('img/CC.png')}}" alt="">
            </div>
            <div class="Menu_CC">
                <img src="{{asset('img/menuCC.png')}}" alt="">

            </div>
        </center>

    </div>

</body>



</html>