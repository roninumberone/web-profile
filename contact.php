<html>

<head>
    <title>Contact Form</title>
    <style>
    body {
        background-color: #e6d5c3;
        font-family: Arial, sans-serif;
        scroll-behavior: smooth;
    }

    .containerc {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    h1 {
        font-size: 24px;
        font-weight: bold;
        color: #000;
        text-align: center;
        padding-top: 100px;
    }

    h1 span {
        color: #0056ff;
    }

    .form-container {
        background-color: #fff;
        padding: 50px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 500px;
        margin-top: 20px;
        margin-bottom: 200px;
    }

    .form-container form {
        display: flex;
        flex-direction: column;
    }

    .form-container form label {
        font-size: 14px;
        margin-bottom: 10px;
        color: #000;
    }

    .form-container form input,
    .form-container form textarea {
        border: none;
        border-bottom: 1px solid #000;
        padding: 10px;
        margin-bottom: 20px;
        font-size: 14px;
        outline: none;
    }

    .form-container form input:focus,
    .form-container form textarea:focus {
        border-bottom: 1px solid #0056ff;
    }

    .form-container form .half-width {
        display: flex;
        justify-content: space-between;
    }

    .form-container form .half-width input {
        width: 48%;
    }

    .form-container form button {
        background-color: #0056ff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 20px;
        font-size: 14px;
        cursor: pointer;
        align-self: flex-start;
    }
    </style>
</head>

<body>
    <?php include(
    "header.php"
  ) ?>
    <h1><span>■</span> Let's talk</h1>
    <div class="containerc">

        <div class="form-container">
            <form>
                <div class="half-width">
                    <div>
                        <label for="first-name">First Name *</label>
                        <input type="text" id="first-name" name="first-name" required />
                    </div>
                    <div>
                        <label for="last-name">Last Name *</label>
                        <input type="text" id="last-name" name="last-name" required />
                    </div>
                </div>
                <label for="email">Email *</label>
                <input type="email" id="email" name="email" required />
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" />
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="4"></textarea>
                <button type="submit">Send</button>
            </form>
        </div>
    </div>
    <?php include("footer.php") ?>
</body>

</html>