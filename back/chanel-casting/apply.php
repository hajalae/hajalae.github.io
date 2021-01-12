<?php 

    try
    {
        $bdd = new PDO('mysql:host=misteralosalae.mysql.db;dbname=misteralosalae;charset=utf8', 'misteralosalae', 'AlaeDB78');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }


    $req = $bdd->prepare('INSERT INTO chanel_casting(firstname, lastname, month, day, year, email, city, country, instagram, website) VALUES(:firstname, :lastname, :month, :day, :year, :email, :city, :country, :instagram, :website)');
    $req->execute(array(
        'firstname' => $_POST['firstname'],
        'lastname' => $_POST['lastname'],
        'month' => $_POST['month'],
        'day' => $_POST['day'],
        'year' => $_POST['year'],
        'email' => $_POST['email'],
        'city' => $_POST['city'],
        'country' => $_POST['country'],
        'instagram' => $_POST['instagram'],
        'website' => $_POST['website']
        ));

?>