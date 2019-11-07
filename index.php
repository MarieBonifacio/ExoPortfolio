<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/index.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0caf2b0443.js" crossorigin="anonymous"></script>    <title>Document</title>
</head>
<body> 
    <div id="loader">
            <img class="spinner" src="./images/spinner.gif" alt="LOADING" />
        <div id="loaderL"></div>
        <div id="loaderR"></div>
    </div>
    <header>
        <div id="logo">
            <img src="images/petit-logo.png" />
            Maquette
        </div>
        <nav>
            <ul>
                <a href=""><li>Accueil</li></a>
                <a href=""><li>A propos</li></a>
                <a href=""><li>Contact</li></a>
            </ul>
        </nav>
    </header>

    <section id="top">
        <div id="title">
            <p>Lorem <span>IPSUM</span> dolor sit amet, <span>CONSECTETUR</span></p>
            <h1>Maquette Web Design</br> Développeur Web</h1>
        </div>
        <div id="overlay"></div>
    </section>

    <section id="middle">
        <div id="grid">
            <div id="uiux">
                <h2>ui ux design</h2>
                <em class="sub">exercitation ullamco laboris nsapi_virtual</em>
                <hr/>
                <p class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, neque quidem. Eos qui voluptate</p>
            </div>
            <div id="infos">
                <div class="content">
                    <p>lorem ipsum dolor sit amet</p>
                    <div class="flex">
                        <div>
                            info 1
                        </div>
                        <div>
                            info 2
                        </div>
                    </div>
                </div>
            </div>
            <div id="plus">
                <p>lorem ipsu dolor sit amet ametexercitation ullamco laboris nisi</p>
                <button>En savoir plus</button>
            </div>
            <div id="responsive">
            <h2>responsive design</h2>
                <em class="sub">exercitation ullamco laboris nsapi_virtual</em>
                <hr/>
                <p class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, neque quidem. Eos qui voluptate</p>
            </div>
        </div>   
    </section>

    <section id="bottom">
        <div id="left">
            <h2>services</h2>
            <p>Duis aute irure dolor in reprehenderit in volupte velit esse cillum.
        </div>
        <div id="right">
            <div id="click">
                <i class="far fa-times-circle close"></i>
                <div class="content"></div>
            </div>
            <div data-aos="fade-down-right" class="mini">
                <i class="fas fa-layer-group"></i>
                <h3>Interface design</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div data-aos="fade-down" class="mini">
                <i class="fas fa-pencil-ruler"></i>
                <h3>Theming</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div data-aos="fade-down-left" class="mini">
                <i class="fas fa-search"></i>
                <h3>Referencement</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div data-aos="fade-up-right" class="mini">
                <i class="fas fa-mobile-alt"></i>
                <h3>Mobile app</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div data-aos="fade-up" class="mini">
                <i class="far fa-object-ungroup"></i>
                <h3>Responsive design</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div data-aos="fade-up-left" class="mini">
                <i class="fas fa-user-edit"></i>
                <h3>Free updates</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div>
    </section>

    <footer>
        <div id="leftFooter">
            <p class="maquette">Maquette Web Design</p>
            <p class="rue">22 rue des rues</p>
            <p class="ville">78451 Ville</p>
            <p class="num">+333333333333</p>
        </div>
        <nav>
            <a href="#">Accueil</a>
            <a href="#">A propos</a>
            <a href="#">Services</a>
        </nav>
        <div id="rightFooter">
            <p class="lorem">Lorem ipsum dolor sit amet consectetur adipiscing elit</p>
            <p>copyright &copy; Copyrigft 2019<br/>Simplon</p>
        </div>
    </footer>
</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="./js/index.js"></script>
</html>