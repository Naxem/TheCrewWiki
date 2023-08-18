<header id="nav" class="sidebar">
    <div class="logo">
        <a>Wiki<span class="yellow">Crew</span></a>
    </div>

    <div class="border"></div>

    <ul class="list">
        <a href="<?= ROOT_PATH ?>" class="list-item">Introduction</a>

        <ul class="secondary-list">
            <li class="list-item title">The Crew 2</li>

            <a href="<?= ROOT_PATH ?>pages/client/all_cars" class="list-item">Liste des véhicules</a>
            <a href="#" class="list-item">Liste des activités</a>
            <a href="#" class="list-item">Entreprise Motorflix</a>
        </ul>

    </ul>

    <?php if(empty($_SESSION['utilisateur'])) { ?>
        <div class="account">
            <a class="input_btn register" href="<?= ROOT_PATH ?>pages/client/connexion/register">S'inscrire</a>
            <a class="input_btn login" href="<?= ROOT_PATH ?>pages/client/connexion/login">Se connecter</a>
        </div>
    <?php } else {?>
        <div class="account">
            <a class="input_btn login" href="<?= ROOT_PATH ?>pages/client/user/mon_compte">Mon compte</a>
        </div>
    <?php } ?>
</header>

<script src="<?= ROOT_PATH ?>javascript/navbar.js"></script>