<?php
date_default_timezone_set('Europe/Moscow');
$title = "Types";
$current_page = "page1.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>

    <style>
        @font-face {
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
            font-family: 'Comfortaa', sans-serif;
        }

        header {
            background: #40534C;
            color: #D6BD98;
            padding: 20px;
            position: fixed;
            top: 0;
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
            margin-bottom: 60px;
            padding: 10px;
        }

        footer {
            background: #1F3636;
            color: #677D6A;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
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

    <h2>Types of shrimp</h2>
    <h2>Popular species</h2>
    <p>Neocaridina and Caridina are popular shrimp.</p>

    <h2>Examples</h2>
    <table border="1">
        <tr>
            <td>Species</td>
            <td>Color</td>
            <td>Size</td>
        </tr>
        <tr>
            <td>Neocaridina</td>
            <td>Red, Yellow, Blue, Green</td>
            <td>2-3 cm</td>
        </tr>
        <tr>
            <td>Caridina</td>
            <td>Crystal Red, Black King Kong</td>
            <td>2-4 cm</td>
        </tr>
    </table>

</main>

<footer>
    <?php echo "Formed on " . date("d.m.Y H:i:s"); ?>
</footer>

</body>
</html>