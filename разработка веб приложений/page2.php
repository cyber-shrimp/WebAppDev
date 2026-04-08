<?php
date_default_timezone_set('Europe/Moscow');
$title = "Care";
$current_page = "page2.php";
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
            margin-bottom: 60px; /* исправил */
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

    <h2>Shrimp care</h2>
    <h2>Maintenance</h2>

    <p>
        Shrimp require clean and stable water conditions to survive and thrive.
        It is important to regularly monitor temperature, pH and water hardness.
    </p>

    <p>
        Regular water changes and proper filtration help maintain a healthy environment.
        Feeding should be moderate to avoid water pollution.
    </p>

</main>

<footer>
    <?php echo "Formed on " . date("d.m.Y H:i:s"); ?>
</footer>

</body>
</html>