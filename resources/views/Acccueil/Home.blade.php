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
            <div>
                <button class="but1">Lire Plus<i class="ri-arrow-right-up-fill"></i></i>
                </button>
                <button class="but2">Nouvelles<i class="ri-news-line"></i></button>
            </div>
        </div>

        <button class="btn-left" id="prevBtn">&lt;</button>
        <button class="btn-right" id="nextBtn">&gt;</button>
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
                <img src="images/pexels-jeswin-thomas-3781338.jpg" class="imaf">
                <div class="details">
                    <h6>Sciences Mathématiques <i class="ri-ruler-line"></i></h6>
                    <p>Cette filière met l'accent sur l'étude des mathématiques et des sciences physiques, offrant aux
                        étudiants une solide base théorique et pratique pour poursuivre des études supérieures en
                        ingénierie, sciences, ou mathématiques appliquées. </p>

                </div>
            </div>


            <div class="filier-box">
                <img src="images/pexels-lucas-pezeta-5277388.jpg" class="imaf">
                <div class="details">
                    <h6>Sciences de la Vie et la Terre <i class="ri-plant-line"></i></h6>
                    <p>Cette filière explore les sciences naturelles, y compris la biologie, la géologie et l'écologie,
                        offrant aux étudiants une compréhension approfondie du monde vivant et de l'environnement, avec
                        des perspectives sur la santé, l'agriculture et la conservation.</p>

                </div>
            </div>

            <div class="filier-box">
                <img src="images/pexels-chokniti-khongchum-2280571.jpg" class="imaf">
                <div class="details">
                    <h6>Sciences Physiques Chimiques <i class="ri-ink-bottle-line"></i> </h6>
                    <p> pour Cette filière se concentre sur l'étude approfondie de la physique et de la chimie développant
                        les
                        compétences essentielles en analyse et expérimentation pour l'ingénierie,la recherche scientifique
                        et
                        la Physique-chimie essentiel pour les étudiants. </p>

                </div>
            </div>

            <div class="filier-box">
                <img src="images/pexels-pixabay-53621.jpg" class="imaf">
                <div class="details">
                    <h6>Sciences Économiques <i class="ri-calculator-line"></i></h6>
                    <p>Exploration approfondie des théories économiques et des concepts de gestion, préparant les
                        étudiants à des carrières variées dans le domaine financier, commercial Acquisition de compétences
                        analytiques essentielles pour comprendre
                        les dynamiques économiques contemporaines </p>

                </div>
            </div>


            <div class="filier-box">
                <img src="images/pexels-jean-marc-bonnel-19081217.jpg" class="imaf">
                <div class="details">
                    <h6>Sciences Humaines <i class="ri-globe-line"></i> </h6>
                    <p>Étude approfondie de disciplines telles que l'histoire,
                        la géographie et la sociologie, offrant une perspective critique sur la société et la culture .
                        Cette exploration permet aux étudiants de comprendre les dynamiques sociales,
                        historiques et géographiques du pays.</p>

                </div>
            </div>



            <div class="filier-box">
                <img src="images/section-litteraire-lycee.jpeg" class="imaf">
                <div class="details">
                    <h6>Baccalauréat Lettres <i class="ri-git-repository-line"></i></h6>
                    <p>Programme mettant l'accent sur l'étude approfondie de la littérature,
                        de la philosophie, de l'histoire et des langues vivantes, préparant les étudiants à des études
                        supérieures en lettres, en sciences humaines et dans d'autres domaines connexes Enseignement riche,
                        orienté littérature,
                        histoire </p>

                </div>
            </div>
        </div>
    </section>
    <!-- end   filiers######### -->




    <!-- comantairs.   -->
    <section id="Home">
        <h1>Témoignages Des élèves</h1>
        <p>Découvrez les témoignages inspirants de nos élèves, illustrant la diversité des parcours éducatifs dans notre
            lycée.</p>

        vos aspirations.</p>
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
        </div>


        <br>


        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>

        </div>
    </section>


    <!--end  comantairs-->

    <!-- contact -->


     <!--  end contact -->




@endsection



</body>

</html>
