<html>

<head>
    <title>Resume</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #e8d9c9;

    }

    .body {
        scroll-snap-type: mandatory;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        scroll-behavior: smooth;
        flex-direction: column;
    }

    .container {
        text-align: center;
    }

    .container span {
        color: #0056ff;
    }

    .resume-title {
        margin-top: 20px;
        font-size: 24px;
        font-weight: bold;
        padding-top: 50px;
    }

    .resume-title i {
        color: blue;
    }

    .experience-title {
        display: flex;
        padding: 10px;
        font-size: 20px;
        font-weight: bold;
        margin-top: 40px;
    }

    .download-btn {
        background-color: blue;
        display: flex;
        text-align: left;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 20px;
        margin-left: 62%;
    }

    .experience-card {
        background-color: white;
        padding: 20px;
        margin-top: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        display: flex;
        justify-content: space-between;
        width: 600px;
    }

    .experience-details {
        text-align: left;
        padding: 20px;
    }

    .experience-details h3 {
        text-align: left;
        padding-bottom: 10px;
    }

    .experience-details h3 {
        color: blue;
        margin: 0;
    }

    .experience-details p {
        margin: 5px 0;
    }

    .experience-description {
        text-align: left;
        max-width: 300px;
    }

    .container2 {
        background-color: #ffffff;
        margin-top: 20px;
        padding: 30px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        max-width: 585px;
        width: 100%;
        margin-bottom: 10px;
    }

    h2 {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .section2 {
        margin-bottom: 40px;
    }

    .item2 {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }

    .item2 i {
        color: #007bff;
        margin-right: 10px;
    }
    </style>
</head>

<body>
    <?php include(
    "header.php"
  ) ?>
    <div class="body">
        <div class="container">
            <div class="resume-title"><span>■</span> Resume</div>
            <div class="experience-title">
                <p>Education</p>
                <button class="download-btn">DOWNLOAD<span>.</span>CV</button>
            </div>
            <div class="experience-card">
                <div class="experience-details">
                    <h3>2013 - 2019</h3>
                    <p>SDN 1 SUKAPURA</p>
                    <p>6 TAHUN</p>
                    <p>Tasikmalayas</p>
                </div>
                <div class="experience-description">
                    <p>
                        I'm a paragraph. Click here to add your own text and edit me. It’s
                        easy. Just click “Edit Text” or double click me to add your own
                        content and make changes to the font.
                    </p>
                    <p>
                        I’m a great place for you to tell a story and let your users know a
                        little more about you.
                    </p>
                </div>
            </div>
            <div class="experience-card">
                <div class="experience-details">
                    <h3>2019 - 2022</h3>
                    <p>SMPN 1 SUKARAJA</p>
                    <p>3 TAHUN</p>
                    <p>Tasikmalaya</p>
                </div>
                <div class="experience-description">
                    <p>
                        I'm a paragraph. Click here to add your own text and edit me. It’s
                        easy. Just click “Edit Text” or double click me to add your own
                        content and make changes to the font.
                    </p>
                    <p>
                        I’m a great place for you to tell a story and let your users know a
                        little more about you.
                    </p>
                </div>
            </div>
            <div class="experience-card">
                <div class="experience-details">
                    <h3>2022 - 2025</h3>
                    <p>SMK AL FALAH TANJUNGJAYA</p>
                    <p>3 TAHUN</p>
                    <p>Tasikmalaya</p>
                </div>
                <div class="experience-description">
                    <p>
                        I'm a paragraph. Click here to add your own text and edit me. It’s
                        easy. Just click “Edit Text” or double click me to add your own
                        content and make changes to the font.
                    </p>
                    <p>
                        I’m a great place for you to tell a story and let your users know a
                        little more about you.
                    </p>
                </div>
            </div>
        </div>

        <div class="container2">
            <div class="section2">
                <h2>Professional skillset</h2>
                <div class="item2">
                    <i class="fas fa-square"></i>Entrepreneursip
                </div>
                <div class="item2">
                    <i class="fas fa-square"></i>Go to Market Planning
                </div>
                <div class="item2">
                    <i class="fas fa-square"></i>Teamwork & Collaboration
                </div>
                <div class="item2"><i class="fas fa-square"></i>Digital Analytics</div>
                <div class="item2"><i class="fas fa-square"></i>Programming</div>
            </div>
            <div class="section2">
                <h2>Languages</h2>
                <div class="item2"><i class="fas fa-square"></i>English</div>
                <div class="item2">
                    <i class="fas fa-square"></i>Melayu
                </div>
                <div class="item2">
                    <i class="fas fa-square"></i>Java
                </div>
                <div class="item2">
                    <i class="fas fa-square"></i>Sundanese
                </div>
            </div>
        </div>
    </div>
    <?php include("footer.php") ?>
</body>

</html>