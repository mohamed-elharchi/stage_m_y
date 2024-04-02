@extends('layouts.app')
@section('title', 'lycce moulay ismail')

@section('content')
    <!--  Home -->

    <section id="Home">
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




    <!--  filiers######### -->
    <section id="filiere">
        <h1>Découvrez Nos Filières</h1>
        <p>Explorez les différentes voies éducatives offertes dans notre lycée pour trouver celle qui correspond le mieux à
            vos aspirations.</p>
        <div class="filiers">
            <div class="filier-box">
                <img src="images/pexels-jeswin-thomas-3781338.jpg" class="imaf">
                <div class="details">
                    <h6>Sciences Mathématiques(SM)</h6>
                    <p>Cette filière met l'accent sur l'étude des mathématiques et des sciences physiques, offrant aux
                        étudiants une solide base théorique et pratique pour poursuivre des études supérieures en
                        ingénierie, sciences, ou mathématiques appliquées. <i class="ri-ruler-line"></i></p>

                </div>
            </div>


            <div class="filier-box">
                <img src="images/pexels-lucas-pezeta-5277388.jpg" class="imaf">
                <div class="details">
                    <h6>Sciences de la Vie et la Terre(SVT)</h6>
                    <p>Cette filière explore les sciences naturelles, y compris la biologie, la géologie et l'écologie,
                         offrant aux étudiants une compréhension approfondie du monde vivant et de l'environnement, avec
                          des perspectives sur la santé, l'agriculture et la conservation.<i class="ri-plant-line"></i></p>
                  
                </div>
            </div>

            <div class="filier-box">
                <img src="images/pexels-chokniti-khongchum-2280571.jpg" class="imaf">
                <div class="details">
                    <h6>Sciences Physiques Chimiques(PC) </h6>
                    <p> pour Cette filière se concentre sur l'étude approfondie de la physique et de la chimie développant les
                         compétences essentielles  en analyse et expérimentation pour l'ingénierie,la recherche scientifique et 
                         la Physique-chimie essentiel pour les étudiants. <i class="ri-ink-bottle-line"></i> </p>
                  
                </div>
            </div>

            <div class="filier-box">
                <img src="images/pexels-pixabay-53621.jpg" class="imaf">
                <div class="details">
                    <h6>Sciences Économiques (SE)</h6>
                    <p>Exploration approfondie des théories économiques et des concepts de gestion, préparant les
                         étudiants à des carrières variées dans le domaine financier, commercial  Acquisition de compétences analytiques  essentielles pour comprendre 
                        les dynamiques économiques contemporaines <i class="ri-calculator-line"></i></p>
                 
                </div>
            </div>


            <div class="filier-box">
                <img src="images/pexels-jean-marc-bonnel-19081217.jpg" class="imaf">
                <div class="details">
                    <h6>Sciences Humaines (SH) </h6>
                    <p>Étude approfondie de disciplines telles que l'histoire,
                         la géographie et la sociologie, offrant une perspective critique sur la société et la culture .
                          Cette exploration permet aux étudiants de comprendre les dynamiques sociales,
                         historiques et géographiques du pays.<i class="ri-globe-line"></i> </p>

                </div>
            </div>



            <div class="filier-box">
                <img src="images/section-litteraire-lycee.jpeg" class="imaf">
                <div class="details">
                    <h6>Baccalauréat Lettres (BAC L)</h6>
                    <p>Programme mettant l'accent sur l'étude approfondie de la littérature,
                         de la philosophie, de l'histoire et des langues vivantes, préparant les étudiants à des études supérieures en lettres, en sciences humaines et dans d'autres domaines connexes       Enseignement riche, orienté littérature,
                         histoire  <i class="ri-git-repository-line"></i></p>
                    
                </div>
            </div>
        </div>

    </section>


@endsection



</body>

</html>
