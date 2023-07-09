<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>It's me</title>
</head>
<body>
    <div class="main" id="home">
        <div class="container">
            <div class="main_content">
                <header class="header">
                    <ul class="header_nav">
                        <li><div class="logo">AzaNet <br>Dev</div></li>
                        <li class="header_nav__a">
                            <a href="">Home<img src="/img/icons/home.svg" alt=""></a>
                        </li>
                        <li class="header_nav__a"><a href="">Contacts<img src="/img/icons/user.svg" alt=""></a></li>
                        <li class="header_nav__a"><a href="">Projects<img src="/img/icons/server.svg" alt=""></a></li>
                    </ul>
                </header>
                <div class="logo">AzaNetDev <span>Сафиуллин Азамат</span></div>
                <div class="main_content__block">
                    <div class="main_content__img_block">
                        <div class="block__img">
                            <img id="img_partfolio" src="/img/1.jpg" alt="photo_patrfolio">
                        </div>
                    </div>
                    <div class="main_content__text">
                        <h1>Меня зовут <span>Азамат</span></h1>
                        <p>Привет! Я Front-end разработчик.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main" id="projects">
        <div class="container">
            <div class="projects">
                <h2>Projects <img src="/img/icons/server.svg" alt=""></h2>
                <div class="projects_card">
                    <h2 class="projects_card__h2">AZNet <span>Сайт по продаже ВПН</span></h2>
                    <div class="projects_img">
                        <div>
                            <img src="/img/project1/1.webp" alt="">
                        </div>
                        <div>
                            <img src="/img/project1/2.webp" alt="">
                        </div>
                        <div>
                            <img src="/img/project1/3.webp" alt="">
                        </div>
                        <div>
                            <img src="/img/project1/4.webp" alt="">
                        </div>
                        <div>
                            <img src="/img/project1/5.webp" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main" id="contacts">
        <div class="container">
            <div class="contacts">
                <h2>Contacts <img src="/img/icons/user.svg" alt=""></h2>
                <div class="contacts_info">
                    <div class="contacts_into__card">
                        <h2>Email</h2>
                        <p>azam.safiullin20@gmail.com</p>
                    </div>
                    <div class="contacts_into__card">
                        <h2>Phone</h2>
                        <p>+7(937)789-52-47</p>
                    </div>
                    <div class="contacts_into__card">
                        <h2>Telegram</h2>
                        <a href="">@Azamat_Saf1</a>
                    </div>
                </div>
                <form class="contacts_form">
                    <div class="input_group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name">
                    </div>
                    <div class="input_group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email">
                    </div>
                    <div class="input_group">
                        <label for="comment">Comment</label>
                        <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
                    </div>
                    <input class="btn" type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
    <div class="main" id="resume">
        <div class="container">
            <div class="resume">
                
            </div>
        </div>
    </div>
</body>
</html>