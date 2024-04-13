@extends('layouts.Acceuill')
@section('title', 'lycce moulay ismail')

@section('content')
    <!--  Home -->

    <section id="acceuil">
        <div class="text">
            <h2>Bienvenue pour une Nouvelle Année Scolaire ! </h2>
            <p> Bienvenue à l'école ! Préparez-vous pour un nouveau chapitre passionnant
                rempli d'opportunités de croissance et de succès. Ensemble, embarquons
                dans cette aventure et faisons de cette année scolaire un moment inoubliable !</p>
            <div class="but22">
                <button class="but1">Lire Plus<i class="ri-arrow-right-up-fill"></i></button>
                <button class="but2">Nouvelles<i class="ri-news-line"></i></button>
            </div>
        </div>

        <button class="btn-left" id="prevBtn"><i class="ri-arrow-left-s-line"></i></button>
        <button class="btn-right" id="nextBtn"><i class="ri-arrow-right-s-line"></i></button>
    </section>
    <!-- end  Home -->

    <!--  caractéristiques -->


    <section id="caracter">
        <h1>Nouvelles Fonctionnalités</h2>
            <p>Découvrez toutes les fonctionnalités incroyables de notre lycée.</p>
            <div class="carac-base">

                <div class="fea-box">
                    <i class="ri-window-2-line"></i>
                    <h3>Système de suivi académique</h3>
                    <p>Suivez vos progrès académiques et consultez vos
                        résultats en temps réel grâce
                        à un système de suivi en ligne. "Massar"</p>
                </div>

                <div class="fea-box">
                    <i class="ri-calendar-check-line"></i>
                    <h3>Activités parascolaires virtuelles</h3>
                    <p>SRejoignez des clubs et des activités parascolaires virtuelles
                        pour développer vos compétences et passions en dehors des cours.</p>
                </div>

                <div class="fea-box">
                    <i class="ri-focus-mode"></i>
                    <h3>Orientation académique et professionnelle</h3>
                    <p>Bénéficiez de conseils et d'orientations académiques et professionnelles
                        personnalisés pour planifier votre avenir.</p>
                </div>
            </div>
    </section>

    <!-- end.  caractéristiques -->


    <!--  filiers######### -->
    <section id="filiere">
        <h1>Découvrez Nos Filières</h1>
        <p>Explorez les différentes voies éducatives offertes dans notre lycée pour trouver celle qui correspond le mieux à
            vos aspirations.</p>
        <div class="filiers">


            <div class="filier-box">
                <img src="images/Sciences Mathématiques (5).png" class="imaf">
            </div>

            <div class="filier-box">
                <img src="images/Sciences Mathématiques (1).png" class="imaf">
            </div>

            <div class="filier-box">
                <img src="images/Sciences Mathématiques (2).png" class="imaf">
            </div>

            <div class="filier-box">
                <img src="images/Sciences Mathématiques (3).png" class="imaf">
            </div>


            <div class="filier-box">
                <img src="images/Sciences Mathématiques (4).png" class="imaf">
            </div>

            <div class="filier-box">
                <img src="images/Sciences Mathématiques.png" class="imaf">
            </div>
        </div>
    </section>
    <!-- end   filiers######### -->




    <!-- comantairs.   -->
    <section id="Home">
        <h1>Témoignages Des élèves</h1>
  
        <div class="slideshow-container">
            <div class="mySlides">
                <i class="ri-user-fill user"></i>
                <p class="card__description">
                    "J'ai trouvé au lycée un environnement propice à
                    l'épanouissement personnel et académique. Les opportunités
                    offertes m'ont permis de développer mes talents et de m'engager
                    activement dans la communauté scolaire."
                </p>
                <h3 class="card__name">Ayoub Jadani</h3>
                <p class="time">2017/2020</p>
            </div>

            <div class="mySlides">
                <i class="ri-user-fill user"></i>
                <p class="card__description">
                    "Le lycée m'a donné les outils nécessaires pour atteindre mes
                    objectifs académiques et professionnels. Les enseignants dévoués et les
                    ressources disponibles ont été essentiels pour mon succès."
                </p>
                <h3 class="card__name">Mohamed Ezaitouni</h3>
                <p class="time">2017/2020</p>
            </div>

            <div class="mySlides">
                <i class="ri-user-fill user"></i>
                <p class="card__description">
                    "Les diverses activités parascolaires proposées par
                    le lycée ont enrichi mon expérience éducative. J'ai
                    pu explorer mes passions et développer
                    des compétences transversales importantes pour mon avenir."
                </p>
                <h3 class="card__name">Zakaria El Baghdadi</h3>
                <p class="time">2015/2019</p>
            </div>

            <div class="mySlides">
                <i class="ri-user-fill user"></i>
                <p class="card__description">
                    "Mon parcours au lycée a été marqué par des rencontres
                    inspirantes et des défis stimulants. J'ai été soutenu par
                    une communauté bienveillante qui m'a encouragé à
                    viser l'excellence académique et à poursuivre mes rêves."
                </p>
                <h3 class="card__name">Mohamed El Harchi</h3>
                <p class="time">2017/2020</p>
            </div>
            <button class="prev" onclick="plusSlides(-1)"><i class="ri-arrow-left-s-line rows"></i></button>
            <button class="next" onclick="plusSlides(1)"><i class="ri-arrow-right-s-line rows"></i></button>



            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
            </div>

        </div>


    </section>






    <!--end  comantairs-->
    <!--books -->
    <div id="books">
        <h1>Livres</h1>
        <p>Si vous êtes passionné par la lecture, parcourez notre sélection de livres:<button id="showSearchButton"><i class="ri-search-line"></i></button></p>
        
           
        <div id="searchContainer" style="display: none;">
            <div class="input-container">
                <i class="ri-search-line input-icon"></i>
                <input type="text" id="searchInput" placeholder="Entrez le terme de recherche">
            </div>
        </div>
        
        
      
        <section id="bookDisplay" class="book-display">
            <!-- Book cards will be dynamically added here -->
        </section>
    </div>
    

    <!--end  books -->
    <!-- contact -->
    <section id="contact" >
        
        <div class="container">
            <h1>Envoie-nous un message</h1>
            <p> vous pouvez m'envoyer un message à partir d'ici. C'est avec plaisir que je vous aide.</p>
            <div class="content">
                <div class="left-side">
                    <div class="address details">
                        <i class="ri-map-pin-line"></i>
                        <div class="topic">Adresse</div>
                        <div class="text-one">Driouch</div>
                        <div class="text-two">HAY AL AMAL 06</div>
                    </div>
                    <div class="phone details">
                        <i class="ri-phone-line"></i>
                        <div class="topic">Téléphone</div>
                        <div class="text-one">+212 70652357</div>
                        <div class="text-two">+212 62OO21O1</div>
                    </div>
                    <div class="email details">
                        <i class="ri-mail-line"></i>
                        <div class="topic">Email</div>
                        <div class="text-one">moulay_ismail@gmail.com</div>
                        <div class="text-two">info_ms@gmail.com</div>
                    </div>
                </div>

                <div class="right-side">
                    <div class="topic-text">Contact <i class="ri-message-3-line"></i></div>
                  
                    <form action="#">
                        <div class="input-box">
                            <input type="text" placeholder="Entrez votre nom">
                        </div>
                        <div class="input-box">
                            <input type="text" placeholder="Entrer votre Email">
                        </div>
                        <div class="input-box message-box">
                            <input type="texteria" placeholder=" Entrez votre message">
                        </div>
                        <div class="button">
                            <button type="submit">Envoyer <i class="ri-send-plane-fill"></i></button>

                        </div>
                    </form>
                </div>
            </div>
        </div>


    </section>

    <!--  end contact -->


    <!-- Button to scroll back to top -->
    <a href="#" class="scrollup" id="scroll-up"> <i class="ri-arrow-up-s-line"></i> </a>


    <!-- togl -->

    <div class="discussion">
        <div class="part1">
            <h2>Ajouter Vos Témoignages</h2>
        </div>


        <div class="part2">

            <p>
                "Exprimez-vous ! Partagez vos expériences uniques avec nous.
                Votre témoignage pourrait inspirer d'autres."
            </p>
        </div>

        <dir class="part3">
            <form class="formul-togl">

                <div class="inps">
                    <table>
                        <tr>
                            <td> <label for="a" class="i1"><i class="ri-id-card-line"></i></label></td>
                            <td> <input id="a" type="text" name="nom" class="n1" required
                                    placeholder="Entrez votre nom"></td>

                        </tr>
                        <tr>
                            <td> <label for="b" class="i1"><i class="ri-calendar-2-line"></i></label></td>
                            <td> <input id="b" type="text" name="time" class="n1" required
                                    placeholder="Année scolaire"></td>

                        </tr>

                    </table>
                </div>



                <div class="msg">
                    <input class="n2" type="text" placeholder="Entrez votre Témoignages ici...">
                    <button type="submit" name="ajouter" class="n3"><i class="ri-send-plane-fill"></i></button>

                </div>

            </form>


        </dir>

    </div>


    <div class="articlex1">
        <button class="togle"><i class="ri-message-3-line"></i></button>
    </div>



@endsection



</body>

</html>
