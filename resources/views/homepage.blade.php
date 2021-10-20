<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Digital-Katana</title>
    <link rel="stylesheet" href="css/merged.css">
</head>
<body>
<div class="container">
    <div class="container__item landing-page-container">
        <div class="content__wrapper">

            <header class="header">
                <div class="menu-icon header__item">
                    <span class="menu-icon__line"></span>
                </div>

                <h1 class="heading header__item">Digital-Katana</h1>

                <ul class="social-container header__item">
                    <li class="social__icon social__icon--fb">
                        <a href="https://www.facebook.com/Digital-Katana-100855712398069">
                        <img src="{{asset('images/facebook.png')}}" alt="facebook">
                        </a>
                    </li>
                    <li class="social__icon social__icon--in">
                        <img src="{{asset('images/instagram.png')}}" alt="instagram">
                    </li>
                    <li class="social__icon social__icon--dr">
                        <a href="#">
                            <img src="{{asset('images/linkedin.png')}}" alt="linkedin">
                        </a>
                    </li>

                    <li class="social__icon social__icon--fb">
                        <a href="mailto:info@digital-katana.com">
                            <img src="{{asset('images/email.png')}}" alt="facebook">
                        </a>
                    </li>
                    <li class="social__icon social__icon--in">
                        <a href="tel:+995558313933">
                        <img src="{{asset('images/telephone.png')}}" alt="instagram">
                        </a>
                    </li>
                    <li class="social__icon social__icon--dr">
                        <a href="#">
                            <img src="{{asset('images/katana.png')}}" alt="linkedin">
                        </a>
                    </li>

                </ul>
            </header>

            <p class="coords">N 70° 41' 14"S  /   112°34'42"W</p>

            <div class="ellipses-container">

                <h2 class="greeting">Digital <br> Katana</h2>

                <div class="ellipses ellipses__outer--thin">

                    <div class="ellipses ellipses__orbit"></div>

                </div>

                <div class="ellipses ellipses__outer--thick"></div>
            </div>

            <div class="scroller">
                <p class="page-title">Work so hard that people think the Aliens did it</p>

                <div class="timeline">
                    <span class="timeline__unit"></span>
                    <span class="timeline__unit timeline__unit--active"></span>
                    <span class="timeline__unit"></span>
                </div>
            </div>
        </div>

    </div>

</div>
 </body>
</html>
