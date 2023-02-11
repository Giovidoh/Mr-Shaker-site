<!-- VARIABLES -->
<?php
    include_once("php-partials/variables.php");
?>

<!-- FUNCTIONS -->
<?php
    include_once("php-partials/functions.php");
?>

<!-- HEADER -->
<?php
    include_once("php-partials/header.php");
?>

<!-- TITRE DE LA PAGE -->
<?php
    $title = "Accueil";
?>

<!-- MAIN -->
<main class="index-main">
    <div class="main-hero">
        <div class="main-hero__slider">
            <div class="main-hero__slides">
                <div class="main-hero__slides__slide">
                    <div class="main-hero__text">
                        <h2 class="main-hero__heading"></h2>
                        <p class="main-hero__intro">
                            Osez Mr. Shaker Bar Mobile Service, ce bar à cocktails atypiques qui se déplace jusqu'à votre lieu d'événement.
                        </p>
                    </div>
                </div>
                <div class="main-hero__slides__slide">
                    <div class="main-hero__text">
                        <h2 class="main-hero__heading"></h2>
                        <p class="main-hero__intro">
                            En choisissant Mr. Shaker Bar Mobile Service, c'est la garantie d'un événement unique en son genre avec la participation d'un mixologue professionnel, Mr Shaker, qui sera à votre écoute afin de réaliser les cocktails et les boissons qui vous ressemblent.
                        </p>
                    </div>
                </div>
                <div class="main-hero__slides__slide">
                    <div class="main-hero__text">
                        <h2 class="main-hero__heading"></h2>
                        <p class="main-hero__intro">
                            Mr. Shaker Bar Mobile Service s'adapte à votre envie et anime tout type d'événements particuliers et professionnels, allant de 10 à 500 personnes.
                        </p>
                    </div>
                </div>
                <div class="main-hero__slides__slide">
                    <div class="main-hero__text">
                        <h2 class="main-hero__heading"></h2>
                        <p class="main-hero__intro">
                            Osez Mr. Shaker Bar Mobile Service, ce bar à cocktails atypiques qui se déplace jusqu'à votre lieu d'événement.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-body">

        <section class="main-body__section-one">
            <div class="main-body__section-one__text">
                <h2 class="main-body__section-one__text__heading">Bienvenue chez <br> Mr Shaker !</h2>
                <p class="main-body__section-one__text__desc">
                    Mr. Shaker Bar Mobile Service est une structure togolaise spécialisée en service de bars mobiles sur mesure et haute gamme pour tout événement particulier ou professionnel.
                    <br><br>
                    En choisissant Mr. Shaker Bar Mobile Service, c'est la garantie d'un événement unique en son genre avec la participation d'un mixologue professionnel, Mr Shaker, qui sera à votre écoute afin de réaliser les cocktails et les boissons qui vous ressemblent.
                </p>
            </div>
            <div class="main-body__section-one__image">
                <div class="main-body__section-one__image__one"></div>
                <div class="main-body__section-one__image__two"></div>
            </div>
        </section>

        <section class="main-body__section-two">
            <?php
                echo add_plusButton($button_color_1);
                echo add_plusButton($button_color_2);
                echo add_plusButton($button_color_3);
                echo add_plusButton($button_color_4);
                echo add_plusButton($button_color_5);
                echo add_plusButton($button_color_6);

            ?>
        </section>

        <section class="main-body__section-three">

        </section>

        <section class="main-body__section-four">

        </section>

        <section class="main-body__section-five">

        </section>
    </div>
</main>

<!-- FOOTER -->
<?php
    include_once("php-partials/footer.php");
?>