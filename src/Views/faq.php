<?php
ob_start();
$faqs = isset($data["faq"]) ? $data["faq"] : NULL;
?>
<div class="my-10 px-10 <?php echo isset($_SESSION["user"]) ? " flex justify-between" : "flex justify-center" ?>">
    <div class="<?php echo isset($_SESSION["user"]) ? "w-2/5" : "" ?>">
        <div class="mb-4 <?php echo isset($_SESSION["user"]) ? "" : "text-center" ?>">
            <h1 class="text-white text-2xl">FaQ</h1>
        </div>
        <?php foreach ($faqs as $faq) { ?>
        <div class="mb-4">
            <p class="sm:text-lg bg-blue-500 p-2 text-white"><strong>Question :
                </strong><?php echo $faq->getQuestion() ?></p>
            <p class="sm:text-lg bg-gray-200 p-2">Réponse : <?php echo $faq->getAnswer() ?></p>
        </div>
        <?php } ?>
    </div>

    <?php if (isset($_SESSION["user"])) { ?>
    <div class="flex justify-center<?php echo isset($_SESSION["user"]) ? "w-3/5" : "" ?>">

        <form class="flex flex-col items-center w-2/3 bg-white bg-opacity-20 rounded " action="/faq" method="post">
            <div>
                <h2 class="text-xl my-8">Espace Admin</h2>
            </div>
            <div class="flex flex-col items-center mb-4">
                <label class="sm:text-lg mb-2" for="question">Saisissez la question</label>
                <input class="bg-transparent rounded p-2 focus:outline-none text-center" type="text" name="question"
                    id="question" autocomplete="off" placeholder="question">
                <p class="text-red-500 mt-2"><?php echo error("question")?></p>
            </div>
            <div class="flex flex-col items-center mb-5">
                <label class="sm:text-lg mb-2" for="answer">Saisissez la réponse</label>
                <textarea class="bg-transparent rounded p-2 focus:outline-none resize-none text-center placeholder-white" name="answer"
                    name="answer" id="answer" cols="50" rows="7" placeholder="message"></textarea>
                <p class="text-red-500 mt-2"><?php echo  error("answer")?></p>
            </div>
            <button class="bg-transparent text-2xl hover:bg-blue-500 text-white px-3 py-2 rounded" type="submit"><i
                    class="fas fa-biohazard"></i></button>
        </form>
    </div>
</div>
<?php } ?>

<?php
unset($_SESSION["error"]);
$content = ob_get_clean();
require VIEW . "/template.php";