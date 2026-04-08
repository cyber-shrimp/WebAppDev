<?php
// часовой пояс для функции date
date_default_timezone_set('Europe/Moscow');

$title = "Aquarium shrimp - main page";

$current_page = "index";
?>

<!DOCTYPE html>
<head>
    <title>
        <?php
        echo $title;
        ?>
    </title>

    <style>
        @font-face { /* шрифт */
            font-family: 'Comfortaa'; 
            src: url('fonts/Comfortaa-Regular.ttf'); 
        }

        @font-face {
            font-family: 'Comfortaa';
            src: url('fonts/Comfortaa-Bold.ttf');
            font-weight: bold;
        }

        body {
            margin: 0;
            font-family: 'Comfortaa', sans-serif; /* применяем шрифт */
        }

        header {
            background: #40534C;
            color: #D6BD98;
            padding: 20px;
            position: fixed;
            top: 0;
            width: 100%;
        }

        table {
            margin-bottom: 20px;
        }

        footer {
            background: #1F3636;
            color: #677D6A;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        nav a {
            margin-right: 15px;
            color: #b19f85;
            text-decoration: none;
        }

        .selected_menu {
            font-weight: bold;
            text-decoration: underline;
        }

        main {
            background: #e2d4c1;
            color: #1F3636;
            margin-top: 130px;
            margin-bottom: 60;
            padding: 10px;
        }
    </style>
</head>

<body>

<header>
    <h1>Aquarium shrimp</h1>

    <nav>
        <a href="<?php $name='Main'; $link='index.php'; echo $link; ?>"
           <?php if ($current_page == $link) echo 'class="selected_menu"'; ?>>
           <?php echo $name; ?></a>

        <a href="<?php $name='Types'; $link='page1.php'; echo $link; ?>"
           <?php if ($current_page == $link) echo 'class="selected_menu"'; ?>>
           <?php echo $name; ?></a>

        <a href="<?php $name='Care'; $link='page2.php'; echo $link; ?>"
           <?php if ($current_page == $link) echo 'class="selected_menu"'; ?>>
           <?php echo $name; ?></a>
    </nav>
</header>

<main>

    <h2>About shrimp</h2>
    <h2>General info</h2>
    <p>
        Shrimp are small aquatic crustaceans that are widely kept in home aquariums.
        They are peaceful and friendly creatures and spend most of their time cleaning surfaces.
    </p>

    <p>
        Their diet includes algae, biofilm and organic waste, making them useful for maintaining aquarium cleanliness.
        Shrimp come in many colors and varieties, which makes them popular among aquarists.
    </p>

    <p>
        Keeping shrimp is relatively easy, but it requires stable water parameters.
        Temperature, pH and water quality should be monitored regularly.
    </p>

    <table border="1">
        <?php
        echo "<tr><td>creature type</td><td>possible colours</td><td>size</td></tr>";
        ?>

        <tr>
            <td><?php echo "crustacean"; ?></td>
            <td><?php echo "theres a lot..."; ?></td>
            <td><?php echo "2-3 cm"; ?></td>
        </tr>
    </table>

    <?php
    if (date('s') % 2 == 0)
        $img = "images/shrimp1.jpg";
    else
        $img = "images/shrimp2.jpg";

    echo '<img src="'.$img.'" width="300">';
    ?>

</main>

<footer>
    <?php
    echo "Formed on " . date("d.m.Y H:i:s");
    ?>
</footer>

</body>
</html>