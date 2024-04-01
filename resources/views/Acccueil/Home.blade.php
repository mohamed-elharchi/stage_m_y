<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        
    </style>
</head>

<body>
    @extends('layouts.app')

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
            <h1>Nouvelles fonctionnalités</h2>
            <p>Découvrez toutes les fonctionnalités incroyables de notre lycée.</p>
            <div  class="carac-base" >

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
       
    @endsection



</body>

</html>
