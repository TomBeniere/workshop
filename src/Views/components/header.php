<header class="p-10 bg-blue-500 text-white">
    <nav>
        <ul class="flex justify-end">
            <li class="p-2"><a href="/">Accueil</a></li>
            <li class="p-2"><a href="/faq">FaQ</a></li>
            <?php if (!isset($_SESSION["user"])) { ?>
            <li class="p-2"><a href="/register">S'enregistrer</a></li>
            <li class="p-2"><a href="/login">Se connecter</a></li>
            <?php } else { ?>
                <li class="p-2"><a href="#"><?php echo $_SESSION["user"]["username"]?></a></li>
                <li class="p-2"><a class="bg-red-500 hover:bg-red-600 text-white rounded px-3 py-2" href="/logout"><i class="fas fa-sign-out-alt"></i></a></li>
            <?php } ?>
        </ul>
    </nav>
</header>