<?php 
session_start();
require('functions.php');

// si le formulaire à eté soumis
    if(isset($_POST['register'])){
        // si tout les champs ont été remplis
        if(not_empty(['name', 'first_name','email','number', 'password', 'password_confirm', 'gender'])){

                    $errors = [];
                    extract($_POST);

                    if(mb_strlen($name) < 3 ){
                        $errors[] = "Nom trop court (Minimum trois caractères)";
                    }
                    if(mb_strlen($first_name) < 3 ){
                        $errors[] = "Prénoms trop court (Minimum trois caractères)";
                    }

                    if(! filter_var($email, FILTER_VALIDATE_EMAIL)){
                        $errors[] = "Addresse email invalide";
                    }
                    
                    if(mb_strlen($password) < 6 ){
                        $errors[] = " Mot de passe trop court (Minimum six caractères)";
                    }else{
                        if($password != $password_confirm){
                            $errors[] = "Les deux mots de passe ne concordent pas!";
                        }
                    }
                    if(mb_strlen($gender) < 2 ){
                        $errors[] = "Choissisez votre sexe";
                    }
                    // la fonction is_already_use sera developper plus tard
        
                    if(is_already_in_use('name', $name, 'users')){
                    
                        $errors[] = "Nom  déja utilisé";
                    }

                    if(is_already_in_use('email', $email, 'users')){
                    
                        $errors[] = "Adresse email déja utilisé";
                    }

                   

                    // compter le nombre d'erreur
                    if(count($errors) == 0){
                        
                    // insertion des données dans la base de données
                        $q = $db ->prepare('INSERT INTO users(name, first_name, email, number, password, gender)
                                             VALUES(:name, :first_name, :email, :number, :password, :gender)');
                        $q -> execute([
                            'name' => $name,
                            'pseudo' => $first_name,
                            'email' => $email,
                            'password' => sha1($password),
                            'gender' => $gender
                        ]);
                        header('Location:home.php');
                        exit();

                    }else{
                        save_input_data();
                    }
                }else
                    $errors[] = "Veuillez remplir tout les champs";
                    save_input_data();

        }else{
            clear_input_data();
        }
?>

