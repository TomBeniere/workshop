<?php 
    if (isset($_SESSION['user'])) {
        $this->redirect("/");
    }
    ob_start();
?>
<div class="flex justify-center my-10">
    <form class="text-center bg-white bg-opacity-20 rounded p-10 w-3/4 md:w-3/5 lg:w-1/2 xl:w-1/3" action="/register" method="post">
        <div class="mb-8">
            <h1 class="text-xl sm:text-2xl font-bold uppercase">Crée un compte</h1>
        </div>
        <div class="flex flex-col mb-5">
            <label class="sm:text-lg mb-4" for="username">Votre nom d'utilisateur</label>
            <input class="bg-transparent p-2 rounded text-center outline-none" type="text" name="username" id="username" autocomplete="off"
                placeholder="Nom d'utilisateur">
            <p class="text-red-500 mt-2"><?php echo error("username")?></p>
        </div>
        <div class="flex flex-col mb-5">
            <label class="sm:text-lg mb-4" for="email">Votre adresse mail</label>
            <input class="bg-transparent p-2 rounded text-center outline-none" type="email" name="email" id="email" autocomplete="off" placeholder="Adresse mail">
            <p class="text-red-500 mt-2"><?php echo error("email")?></p>
        </div>
        <div class="flex flex-col mb-8">
            <label class="sm:text-lg mb-4" for="password">Votre mot de passe</label>
            <input class="bg-transparent p-2 rounded text-center outline-none" type="password" name="password" id="password" autocomplete="off" placeholder="Mot de passe">
            <p class="text-red-500 mt-2"><?php echo error("password")?></p>
        </div>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">S'enregistrer</button>
    </form>
</div>
<?php
unset($_SESSION["error"]);
$content = ob_get_clean();
require VIEW . "/template.php";