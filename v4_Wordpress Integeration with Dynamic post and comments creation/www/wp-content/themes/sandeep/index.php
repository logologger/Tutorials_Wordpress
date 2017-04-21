<html>
<head>
    <title>Indian Restaurent</title>
    <meta name="description" content="Restaurent Indian">
    <meta name="viewport" content="width=device-width">
    <?php wp_head() ?>
    <!--<link href="style.css" type="text/css" rel="stylesheet"/>-->
    <!--<style>
        #logo{
            background-color: aqua;
            font-weight: bold;
            font-size: 125px;
            text-align: center;
        }
        #menu ul{
            margin:0;
            padding:0;
            list-style-type: none;
            display:flex;
            justify-content:center;
        }
        #menu li:hover{
            font-size:25px;
            background-color: rgba(100,0,0,0.3);
        }
        #menu li a {
                      font-weight: bold;
                      display:block;
                      padding:15px 20px;;
                      color:green;
                  }
        #content h1{
            font-weight:normal;
            font-size:25px;
            color:blue;
        }
 </style>-->
</head>
<body>
<div class="container">
    <header>
        <div id="logo">
            Indian Restaurent
        </div>
        <nav id="menu">
            <ul>
                <li><a href="wp-content\themes\exampletheme\Menu.html">Menu</a></li>
                <li><a href="wp-content\themes\exampletheme\Catering.html">Catering</a></li>
                <li><a href="#">Events & Offers</a></li>
                <li><a href="wp-content\themes\exampletheme\About.html">About</a></li>
                <li><a href="wp-content\themes\exampletheme\contact.html">Contact Us</a></li>
            </ul>
        </nav>
    </header>
    <div id="main">
        <div id="content">
            <article>
                <h1>Faluda Ice-cream</h1>
                <div id="slider">
                    <img src="wp-content\themes\exampletheme\ice-cream.jpg" width="100%" height="45%">
                </div>
                <p> Ice cream is a sweetened frozen food typically eaten as a snack or dessert.
                    It is usually made from dairy products and often combined with fruits or other
                    ingredients and flavours...<a href="wp-content\themes\exampletheme\readmore.html">
                        <img src="" id="readmore">readmore</a>
                </p>
            </article>
        </div>
    </div>
    <div id="content">
        <article>
            <h1>Dosa</h1>
            <div id="slider">
                <img src="wp-content\themes\exampletheme\Masala-Dosa.jpg" width="100%" height="45%">
            </div>
            <p> Dosa is a type of pancake made from a fermented batter.
                It is somewhat similar to a crepe but its main ingredients are rice and black gram<a href="#">
                    <img src="" id="readmore"></a>
            </p>
        </article>
    </div>
    <div id="content">
        <article>
            <h1>Biryani</h1>
            <div id="slider">
                <img src="wp-content\themes\exampletheme\biryani.jpg" width="100%" height="45%">
            </div>
            <p>Long-grained rice (like basmati) flavored with exotic spices such as saffron is layered with
                lamb, chicken, fish, or vegetables cooked in a thick gravy<a href="#">
                    <img src="" id="readmore"></a>
            </p>
        </article>
    </div>
    <div id="content">
        <article>
            <h1>Idli</h1>
            <div id="slider">
                <img src="wp-content\themes\exampletheme\idli.jpg" width="100%" height="45%">
            </div>
            <p> Idli is a savoury cake that is popular throughout India and neighbouring countries like Sri Lanka.
                The cakes are made by steaming a batter consisting of fermented black lentils and rice.<a href="#">
                    <img src="" id="readmore"></a>
            </p>
        </article>
    </div>
</div>
</body>
</html>