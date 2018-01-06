<html>
    <head>

        <link rel="stylesheet" href="{{asset('css/home.css')}}">

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
                        <a href="">
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
    <div class="Menu">
        <div class="container">
            <div class="card-list">


                <div class="card">
                    <img src="{{ asset('img/ww.png') }}" alt="">
                    <center><p class="card-header">
                            Waroeng Western
                        </p>

                        <p class="card-content">
                            <button>View</button>

                        </p>
                    </center>
                </div>

                <div class="card">
                    <img src="{{ asset('img/kfc.png') }}" alt="">
                    <center><p class="card-header">
                            KFC
                        </p>

                        <p class="card-content">
                            <button>View</button>

                        </p>
                    </center>
                </div>

                <div class="card">
                    <img src="{{ asset('img/cc.png') }}" alt="">
                    <center><p class="card-header">
                            CHIZ AND CHIC
                        </p>

                        <p class="card-content">
                            <a href="/CC"><button>View</button></a>

                        </p>
                    </center>
                </div>

                <div class="card">
                    <img src="{{ asset('img/cor.png') }}" alt="">
                    <center><p class="card-header">
                           The Cortado
                        </p>

                        <p class="card-content">
                            <button>View</button>

                        </p>
                    </center>
                </div>

                <div class="card">
                    <img src="{{ asset('img/aw.png') }}" alt="">
                    <center><p class="card-header">
                            A&W
                        </p>

                        <p class="card-content">
                            <button>View</button>

                        </p>
                    </center>
                </div>

                <div class="card">
                    <img src="{{ asset('img/bk.png') }}" alt="">
                    <center><p class="card-header">
                            Burger King
                        </p>

                        <p class="card-content">
                            <button>View</button>

                        </p>
                    </center>
                </div>

                <div class="card">
                    <img src="{{ asset('img/mcd.png') }}" alt="">
                    <center><p class="card-header">
                            MC Donalds
                        </p>

                        <p class="card-content">
                            <button>View</button>

                        </p>
                    </center>
                </div>

                <div class="card">
                    <img src="{{ asset('img/star.png') }}" alt="">
                    <center><p class="card-header">
                           Starbucks
                        </p>

                        <p class="card-content">
                            <button>View</button>

                        </p>
                    </center>
                </div>




            </div>
        </div>

    </div>


    </body>







</html>