<html>

<head>
    <title>Projects</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #e8d8c3;
        margin: 0;
        padding: 0;
        scroll-behavior: smooth;
    }


    .containerp {
        max-width: 1200px;
        margin-top: 30px;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 120px;
        padding: 20px;
        justify-content: center;
    }

    .resume-title {
        font-size: 24px;
        font-weight: bold;
        padding-top: 20px;
    }

    .resume-title span {
        color: blue;
    }

    .headerp {
        text-align: center;
        margin-bottom: 40px;
    }

    .headerp h1 {
        font-size: 36px;
        color: #000;
        margin: 0;
    }

    .headerp p {
        font-size: 16px;
        color: #333;
        margin: 10px 0 0;
    }

    .project {
        display: flex;
        background-color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        overflow: hidden;
    }

    .project .content {
        padding: 20px;
        flex: 1;
    }

    .project .content h2 {
        font-size: 24px;
        /* color: #0056d2; */
        margin: 0;
    }

    .project .content h3 {
        font-size: 16px;
        color: #333;
        margin: 10px 0;
    }

    .project .content p {
        font-size: 14px;
        color: #333;
        line-height: 1.6;
    }

    .project .image {
        flex: 1;
        background-size: cover;
        width: 40%;
        height: 50%;
    }

    .project .content .highlight {
        width: 5px;
        height: 60px;
        background-color: #0056d2;
        position: absolute;
        left: 389px;
        top: 249;
    }
    </style>
</head>

<body>
    <?php include(
    "header.php"
  ) ?>
    <div class="containerp">
        <div class="headerp">
            <div class="resume-title"><span>■</span>Projects</div>
            <p>
                Ini adalah bagian project yang sudah saya buat semenjak saya tertarik
                dengan dunia IT atau dua programming.
            </p>
        </div>
        <div class="project">
            <div class="content">
                <div class="highlight"></div>
                <h2>Project Web Profil</h2>
                <h3>Front End</h3>
                <p>
                    Project ini di buat unutuk memperkenalkan diri saya atau suka di
                    sebut web portofilio
                </p>
            </div>
            <div class="image"><img src="../tugasempat/project1.png" alt="p1" /></div>
        </div>
    </div>
    <?php include("footer.php") ?>
</body>

</html>