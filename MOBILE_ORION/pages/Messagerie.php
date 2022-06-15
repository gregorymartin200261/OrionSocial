<link href= "css/messagerie.css" rel="stylesheet"> 
<?php
    $users = GetUserNotConnected();
    if(isset($_GET["userId"]))
    {
        //$messagerie = verrificationMessagerie($_GET["userId"]);
        //var_dump($messagerie);
    }
?>
        <div class="box-Messagerie">
            <div class="MESgauche">
                <h3 class=titreMES>Messagerie</h3>
                <?php foreach ($users as $user) : ?>
                    <div>
                        <a href="index.php?/pages/Messagerie.php?userId=<?= $user->userId ?>">
                            <ul class=boxconv>
                                <div class="pp">
                                    <img class="userpp" src="https://secure.gravatar.com/avatar/cc67cbcb5bc479a64a1cdc0c5f6a2e09/?default=https%3A%2F%2Fus.v-cdn.net%2F5020483%2Fuploads%2Fdefaultavatar%2FK2266OAKOLNC.jpg&rating=g&size=200">
                                </div>
                                <div class="username">
                                    <p><?= $user->Pseudo?></p>
                                </div>
                                
                            </ul>
                        </a>
                    </div>
                <?php endforeach ?>
            </div>
            <form action="" method="post">
            <div class="MESdroite">
                <div class="MESoverlay">
                    <h1>Hey, <?php echo $_SESSION["user"]->Pseudo ?></h1>
                    <?php var_dump($_GET['userId']); ?>
                    <P>Choisissez une conversation pour commencer a parler !</p>
                    <?php if(isset($_GET["userId"])) : ?>
                        
                        <form action="" method="post">
                            <div>
                                <textarea id="story" name="story" rows="5" cols="33"></textarea>
                            </div>
                            <button>envoyer</button>
                        </form>
                    <?php endif ?>
                </div>
            </div>
            </form>
        </div>
    </body>
</html>
