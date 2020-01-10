<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <title>Dodawanie nowego dokumentu</title>
    <meta name="decription" content="...">
    <meta name="keywords" content="...">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" type="text/css" href ="<?php echo base_url(); ?>css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/k_dodawanie_dokumentu.css">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,800&display=swap" rel="stylesheet">

</head>

<body>
    <div class="container">
        <h1>Dodawanie nowego dokumentu</h1>
        <form id="dodawanie-form" method="post" action="<?php echo site_url('zarzadzanie_dokumentami/dodawanie_dokumentu'); ?>">
            <div id="drag-and-drop"><i><u>przeciągnij tutaj</u></i></div>
            <div>
                <input id="submit" name ="submit" type="submit" value="Dodaj">
                <input id="reset" name ="reset" type="submit" value="Anuluj">
            </div>
        </form>
    </div>
</body>

</html>
