<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <title>Decyzje sprawy</title>
        <meta name="decription" content="...">
        <meta name="keywords" content="...">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/k_zarzadzanie_decyzjami.css">
        <link href="https://fonts.googleapis.com/css?family=Muli:400,800&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="container">
			<h1>Decyzje rozstrzygające sprawę</h1>
			<form method="post" action="<?php echo site_url('linki/do_zarzadzanie_sprawami'); ?>">
				<input type="submit" value="Cofnij">
			</form>
            <div class="inside-container">
                <table>
                    <thead>
                        <td>L.p. <td>Decyzja <td>Data wydania <td>Wydana przez <td>Uzasadnienie
                    <tbody>
                        <tr>
                            <td>1 <td>Do uzupełnienia <td>2019-11-21 <br> 14:33:23 <td>Nowak Adam, 43 <td>Niepoprawne wymiary zdjęcia
                        <tr>
                            <td>2 <td>Do uzupełnienia <td>2019-11-24 <br> 14:37:23 <td>Nowak Adam, 43 <td>Niepoprawne wymiary zdjęcia znowu
				</table>
				<form method="post" action="<?php echo site_url('linki/do_dodawanie_decyzji'); ?>">
					<input type="submit" value="Dodaj nową decyzję">
				</form>
            </div>
        </div>
    </body>
</html>