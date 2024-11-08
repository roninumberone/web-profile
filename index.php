<html>

<head>
    <title>Profile Roni</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet" />
    <style>
    body {
        margin: 0;
        font-family: "Roboto", sans-serif;
        display: flex;
        flex-direction: column;
        height: 101vh;
        scroll-behavior: smooth;
    }

    .main {
        display: flex;
        flex: 1;
        padding-top: 20px;
    }

    .sidebar {
        background-color: #e8dcd1;
        padding: 40px;
        width: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .profile-card {
        background-color: rgb(245, 235, 224);
        padding: 50px;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 50%;
        height: 40%;
    }

    .profile-card img {
        border-radius: 50%;
        width: 55%;
        height: 75%;
    }

    .profile-card h2 {
        margin: 10px 0;
        font-size: 24px;
        font-weight: bold;
    }

    .profile-card p {
        margin: 5px 0;
        color: #666;
    }

    .profile-card .social-icons {
        margin-top: 30px;
        padding: 10px;
        background-color: #fff;
    }

    .profile-card .social-icons a {
        margin: 0 10px;
        color: black;
        text-decoration: none;
    }

    .content {
        padding: 40px;
        width: 70%;
    }

    .content h1 {
        font-size: 48px;
        font-weight: bold;
    }

    .content h2 {
        font-size: 24px;
        margin: 20px 0;
    }

    .content .buttons {
        margin: 20px 0;
    }

    .content .buttons a {
        text-decoration: none;
        padding: 10px 20px;
        border-radius: 5px;
        margin-right: 10px;
        font-weight: bold;
    }

    .content .buttons .resume {
        background-color: blue;
        color: white;
    }

    .content .buttons .projects {
        border: 1px solid black;
        color: black;
    }

    .content p {
        margin: 20px 0;
        line-height: 1.6;
    }
    </style>
</head>

<body>
    <?php include(
    "header.php"
  ) ?>
    <div class="main">
        <div class="sidebar">
            <div class="profile-card">
                <img alt="Profile picture of Roni Romdhoni" height="600" src="../tugasempat/roni.jpg" width="400" />
                <h2>Roni Romdhoni</h2>
                <p>Mahasiswa Universitas UI</p>
                <div class="social-icons">
                    <a href="https://www.facebook.com/roni.romdhoni.75?mibextid=rS40aB7S9Ucbxw6v">
                        <i class="fab fa-facebook-f"> </i>
                    </a>
                    <a
                        href="https://www.linkedin.com/in/roni-romdhoni-424a39324?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">
                        <i class="fab fa-linkedin-in"> </i>
                    </a>
                    <a href="https://www.instagram.com/romdhoni10_/?igsh=MXZuajR4NGw5MW9oaw%3D%3D">
                        <i class="fab fa-instagram"> </i>
                    </a>
                </div>
            </div>
        </div>
        <div class="content">
            <h1>Hallo</h1>
            <h2>Inilah saya dan apa yang saya lakukan</h2>
            <div class="buttons">
                <a class="resume" href="resume.php"> RESUME </a>
                <a class="projects" href="project.php"> PROJECTS </a>
            </div>
            <p>
                Saya seorang lulusan dari sekolah smk Al falah , saya telah belajar di
                kelas kejuruan PPLG ACP selama 3 tahun, 3 tahun itu saya telah belajar
                banyak dalam hal pemrograman ,
            </p>
            <p>"Programmer Sadd; Saya adalah Mesin yang mengubah kopi menjadi kode"</p>
        </div>
    </div>
    <?php include("footer.php") ?>
</body>

</html>