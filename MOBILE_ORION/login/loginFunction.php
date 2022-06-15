<?php
    function Connectuser($user)
    {
        try {
                global $dbh;
                $query = $dbh->prepare('SELECT * FROM users where Pseudo = :Pseudo and MotDePasse = :MotDePasse');
                $query->execute([
                    'Pseudo' => $_POST['Pseudo'],
                    'MotDePasse' => $_POST['MotDePasse']
                ]);
                $user = $query->fetch();
            }
            catch (PDOException $e) {
                $error = $e->getMessage();
                die($error);
            }
            return $user;
    }

    function CreateUser($user)
    {
        try {
            global $dbh;
            $query = $dbh->prepare('SELECT * FROM users where Pseudo = :Pseudo and MotDePasse = :MotDePasse');
            $query->execute([
                'Pseudo' => $_POST['Pseudo'],
                'MotDePasse' => $_POST['MotDePasse']
            ]);
            $user = $query->fetch();
    
            if (!$user) {
                $query = $dbh->prepare('INSERT INTO users (Pseudo, MotDePasse) VALUES (:Pseudo, :MotDePasse)');
                $query->execute([
                    'Pseudo' => $_POST['Pseudo'],
                    'MotDePasse' => $_POST['MotDePasse']
                ]);
                $query = $dbh->query('SELECT * FROM users where userId=' . $dbh->lastInsertId());
                $user = $query->fetch();
            }
        } catch (PDOException $e) {
            $error = $e->getMessage();
            die($error);
        }
    
        return $user;
    }
?>
