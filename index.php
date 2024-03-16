<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jude Thaddeus Mbugua</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3ac804e4e0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <p id="name">Jude Mbugua</p>
    
        <div class="drop-container">
            <div class="btn-group dropleft">
                <a type="button" class="btn btn-secondary  menu-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa-solid fa-bars fa-xl men-icon"></i>
                </a>
                <div class="dropdown-menu drop-items-container">
                    <a class="dropdown-item" href="#">Portfolio</a>
                    <a class="dropdown-item" href="#">About Me</a>
                    <a class="dropdown-item" href="#">Contact Me</a>
                </div>
              </div>
        </div>

        <div class="image-container">
            <img src="images/image!.jpg" alt="none" id="myImage">
        </div>

        <div class="info-container">
            <p id="infoName">Jude Mbugua</p>
            <p id="infoOcc">Software Engineer</p>
            <button class="hire-btn">Hire Me</button>
            <button class="infoContact-btn">Contact</button>
        </div>

        <div class="projs-section">
            <p id="projsHeadText">Featured Work</p>
            <?php
                $name = 'Jude Mbugua';
                echo $name;
            ?>
            <div class="grid-container">
                <div class="g-item">
                    <div class="proj-image-container">
                        <img src="images/image!.jpg" alt="none" id="proj1Image">
                        <p id="proj1Name">Quality Comforts</p>
                        <a href="" target="_blank" rel="noopener noreferrer">
                            <button class="proj1-btn">View Project</button>
                        </a>
                    </div>
                </div>
                <div class="g-item">
                    <div class="proj-image-container">
                        <img src="images/image!.jpg" alt="none" id="proj1Image">
                        <p id="proj1Name">Maven Meals</p>
                        <a href="" target="_blank" rel="noopener noreferrer">
                            <button class="proj1-btn">View Project</button>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <hr>

        <div class="about-section">
            <p id="about_text">About Me</p>
            <div class="info-text-container">
                <p id="about_desc">Hello there! <span id="wave"> 👋</span> I'm a passionate software developer with a knack for crafting beautiful and functional websites and software solutions. Proficient in HTML, CSS, JavaScript, Python, Java, Django, and React, I love turning ideas into reality through clean code and creative design. Whether it's building interactive web applications or crafting seamless user experiences, I thrive on bringing visions to life. Let's collaborate and bring your projects to the next level!</p>
            </div>
        </div>
            <hr>
        <div class="contact-section">
            <p id="contact_header">Contact & Social Media</p>
            <form action="" class="contact-form">
                <input type="text" name=""  id="nameInput" placeholder="Your Name">
                <input type="email" name=""  id="emailInput" placeholder="Your Email">
                <textarea name="" id="emailMessage" placeholder="Your Message"></textarea>
            </form>
        </div>
   
        <footer>
            <div class="social-container">
                <img src="images/github.png" alt=""  class="iconImg" id="gitImage">
                <img src="images/instagram.png" alt="" class="iconImg" id="insta">
                <img src="images/whatsapp.png" alt="" class="iconImg" id="whatsapp">
                <p id="copyText">Jude Mbugua ©2022 <p>
            </div>
        </footer>
</body>
</html>

