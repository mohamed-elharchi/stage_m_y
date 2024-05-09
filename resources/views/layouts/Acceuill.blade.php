<!DOCTYPE html>
<html lang="fr">

<head>
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="js/my.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- image icon page ++++++++++  -->
    <link rel="icon" href="{{ asset('images/moulay ismai (2).png') }}" type="image/x-icon" />

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <!-- navigation   -->
    <nav id="main-nav">
        <a href="#"><img src="{{ asset('images/logo.png') }}" alt="Example"></a>
        <div class="navigation">
            <ul>
                <i id="menu-close" class="ri-close-fill"></i>
                <li><a href="{{ route('accueil') }}">Accueil</a></li>
                <li><a href="{{ route('About') }}">À propos</a></li>
                <li><a href="{{ route('Nouvelles') }}">Nouvelles</a></li>
                <li><a href="{{ route('Calendriers') }}">Calendriers</a></li>
                {{-- <button class="butt1"><a href="{{ route('login') }}">Se connecter</a></button> --}}


            </ul>
            @auth
                @if (auth()->user()->role === 'director')
                    <a class="login" href="{{ route('general_guard') }}">Dashboard</a>
                @elseif(auth()->user()->role === 'general_guard')
                    <a class="login" href="{{ route('generalGuard_dashboard') }}">Dashboard</a>
                @elseif(auth()->user()->role === 'teacher')
                    <a class="login" href="{{ route('teacherDashboard') }}">Dashboard</a>
                @endif
                <a class="login" href="{{ route('logout') }}">Déconnecte</a>
            @endauth
            @guest
                <a class="login" href="{{ route('login') }}">Se connecter <i class="ri-login-circle-line"></i></a>
            @endguest
            <i id="menu-btn" class="ri-menu-line"></i>
        </div>

    </nav>
    <!-- end  navigation.+++  -->


    <div>
        @yield('content')
    </div>




    <!-- footer -->

    <footer class="footer-distributed">

        <div class="footer-right">
            <p class="footer-company-about">
                <span><i class="ri-attachment-2"></i> Développé Par :</span>

            </p>
            <div class="footer-icons">

                <pre class="ii"><i class="ri-attachment-line"></i><a href="https://www.linkedin.com/in/ayoub-jadani-a79550264/"> Ayoub Jadani      <i class="ri-linkedin-box-fill   iiii"></i></a> </pre>
                <pre class="ii"><i class="ri-attachment-line"></i><a href="https://www.linkedin.com/in/mohamed-zitouni-b98518264/"> Mohamed Zitouni   <i class="ri-linkedin-box-fill iiii"></i></a></pre>
                <pre class="ii"><i class="ri-attachment-line"></i><a href="https://www.linkedin.com/in/zakaria-baghdadi/"> Zakaria Baghdadi  <i class="ri-linkedin-box-fill iiii"></i></a></pre>
                <pre class="ii"><i class="ri-attachment-line"></i><a href="https://www.linkedin.com/in/mohamed-elharchi-b14566264/"> Mohamed El Harchi <i class="ri-linkedin-box-fill iiii"></i></a></pre>
                <pre class="ii"><i class="ri-attachment-line"></i><a href="https://www.linkedin.com/in/issam-najah-6b8a96177/"> Issam Najah       <i class="ri-linkedin-box-fill iiii"></i></a></pre>

            </div>
        </div>

        <div class="footer-right">
            <p class="footer-company-about">
                <span><i class="ri-attachment-2"></i> Mr le Directeur :</span>
                <strong>Lycée Moulay Ismail</strong> Bienvenue à notre lycée ! Nous sommes ravis de vous accueillir dans
                notre
                communauté éducative dynamique où chaque élève est encouragé à exceller et à s'épanouir. Ensemble,
                explorons
                de nouveaux horizons, cultivons le savoir et construisons un avenir prometteur.
            </p>
            <div class="footer-icons">
                <a href="#"><i class="ri-facebook-box-line"></i></a>
                <a href="#"><i class="ri-linkedin-box-line"></i></a>

            </div>
        </div>


        <div class="footer-left">
            <img src="{{ asset('images/mssmai.png') }}" alt="Example" class="logo2">

            <p class="footer-links">
                <a href="{{ route('accueil') }}">Accueil</a>
                <br>
                <a href="{{ route('About') }}">À propos</a>
                <br>
                <a href="{{ route('Calendriers') }}">Calendriers</a>
            </p>

            <p class="footer-company-name">Copyright © 2024 (JHBZ) <strong>Lycée Moulay Ismail </strong> Tous Droits
                Réservés</p>
        </div>

    </footer>

    <!--  end footer-->



    <!-- Button to scroll back to top -->
    <a href="#" class="scrollup" id="scroll-up"> <i class="ri-arrow-up-s-line"></i> </a>
    <!-- togl -->
    <div class="discussion">
        <div class="part11">
            <div class="ppa">

            </div>
            <h3>:تتبع الطلب</h3>
          <p>ادخل رقمك الهاتفي لتتابع حالة طلبك</p>
            <div class="ppb">
               <form>
                <label>Numéro de téléphone:</label>
                <input type="text" placeholder="(06 0000 0000)">
                <button type="submit" class="bouton-principal" ><i class="ri-send-plane-fill"></i></button>
               </form>
               <div></div>

             
            </div>

        </div>
        <div class="part22">

            <div class="part33">
                <div class="pp3t">
                    <h3>:طلب الشهادة المدرسية</h3>
                    <p style="font-size: 0.8rem">اختر وضعيتك الحالية , هل انت منقطع عن الدراسه او حاصل على شهاده البكالورية,  او تدرس في المدرسه الثانوية </p>
                </div>
                <div class="pp3i">
                    <div class="groupg">
                        <input type="radio" name="gender" value="homme" id="hommeRadio" onclick="showSection('homme')" checked="checked">

                        <label for="hommeRadio">ادرس في امدرسة الثانوية</label>
                    </div>
                    <div class="groupg">
                        <input type="radio" name="gender" value="femme" id="femmeRadio" onclick="showSection('femme')">
                        <label for="femmeRadio">منقطع عن الدراسة او حاصل على شهادة البكالورية</label>
                    </div>



                </div>

            </div>

            <div. class="part44">
                <div id="hommeSection" class="section">
                    <div class="formulaire">

                        <form>
                            <div class="groupe">
                                <label>Le nom complet:الاسم الكامل</label>
                                <input type="text" placeholder="الاسم الكامل">
                            </div>

                            <div class="groupe">
                                <label> Date de naissance:تاريخ الازدياد</label>
                                <input type="date">
                            </div>

                            <div class="groupe">
                                <label>Code Massar:رقم مسار</label>
                                <input type="text" placeholder="(H00000000000)">
                            </div>

                            <div class="groupe">
                                <label>Numéro de téléphone:رقم الهاتف</label>
                                <input type="text" placeholder="(06 0000 0000)">
                            </div>
                            <div>
                                <button type="submit" class="bouton-principal" >Envoyer la demande</button>
                                <label>:ارسال الطلب</label>
                            </div>

                        </form>
                    </div>

                </div>

                <div id="femmeSection" class="section">

                    <div class="formulaire">

                        <form>
                            <div class="groupe">
                                <label>Le nom complet:الاسم الكامل</label>
                                <input type="text" placeholder="الاسم الكامل">
                            </div>
                            <div class="groupe">
                                <label> Dernier année scolaire :اخر سنه دراسيه</label>
                                <input type="text" placeholder="0000/0000 ">
                            </div>
                            <div class="groupe">
                                <label> Date de naissance:تاريخ الازدياد</label>
                                <input type="date" placeholder="(0000-00-00)">
                            </div>
                            <div class="groupe">
                                <label>Numéro de téléphone:رقم الهاتف</label>
                                <input type="text" placeholder="(06 0000 0000)">
                            </div>

                            <button type="submit" class="bouton-principal">Envoyer la demande</button>
                            <label>:ارسال الطلب</label>
                        </form>
                    </div>

                </div>
        </div>




    </div>

    </div>


    <div class="articlex1">
        <button class="togle"><div class="ll"> <h4>Services</h4><p>الخدمات <i class="ri-cursor-fill"></i></p></div></button>
    </div>



</body>

</html>
