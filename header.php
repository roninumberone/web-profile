<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet" />

    <style>
    body {
        margin: 0;
        font-family: "Roboto", sans-serif;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        scroll-behavior: smooth;

    }

    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
        background-color: #fff;
        border-bottom: 1px solid #e0e0e0;
        position: fixed;
        z-index: 9999;
        width: 100%;
    }

    .header .logo {
        display: flex;
        align-items: center;
    }

    .header .logo i {
        color: blue;
        margin-right: 10px;
    }

    .header .logo span {
        font-weight: bold;
        font-size: 20px;
    }

    .header .nav {
        display: flex;
        gap: 20px;
        margin-right: 30px;
    }

    .header .nav a {
        text-decoration: none;
        color: black;
        font-weight: 400;
    }

    .header .nav a:hover {
        color: blue;
    }
    </style>

</head>

<body>
    <div class="header">
        <div class="logo">
            <i class="fas fa-square"> </i>
            <span> Roni Romdhoni </span>
        </div>
        <div class="nav">
            <a href="index.php"> ABOUT ME </a>
            <a href="resume.php"> RESUME </a>
            <a href="project.php"> PROJECTS </a>
            <a href="contact.php"> CONTACT </a>
        </div>
    </div>
</body>

</html>