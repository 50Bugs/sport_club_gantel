<?php
    if($_REQUEST['name'] == ""){
        header('Location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="ua">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
    <style>
        .carousel-item img {
            object-fit: cover;
            aspect-ratio: 29/9;
            width: 100%;
            border-radius: 3rem;
        }

        a img {
            width: 3rem;
            height: auto;
        }

        img {
            object-fit: cover;
            aspect-ratio: 4/3;
        }

        section.sections {
            display: grid;
            grid-template-columns: auto auto auto;
            gap: 3rem;
            margin: 10rem;
            margin-top: auto;
            margin-bottom: auto;
        }

        section {
            margin: 10rem;
            margin-top: auto;
            margin-bottom: auto;
        }

        table {
            margin-bottom: 5rem !important;
        }

        section.treners{
            display: grid;
            grid-template-columns: auto auto auto auto;
            gap: 3rem;
            margin: 10rem;
            margin-top: auto;
            margin-bottom: auto;
        }

        span {
            margin: 3rem;
            margin-left: 10rem;
        }

        img.me-2 {
            width: 1.5rem;
            height: auto;
        }
        img.human{
            object-fit: cover;
            aspect-ratio: 3/4;
        }
    </style>
    <title>Sections</title>
</head>

<body onload="toast()">
    <header>
        <nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="src/dumbbells_icon-icons.com_59199.svg" />«Гантель»</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Головна</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://t.me/juggernxut">Контакти</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Вийти</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled"><?php echo 'Hi '.$_REQUEST['name'].'!'; ?></a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input list="brow" class="form-control me-2" type="search" placeholder="Пошук"
                            aria-label="Search" id="search">
                        <datalist id="brow">
                            <option value="Гандбол">
                            <option value="Карате">
                            <option value="Футбол">
                            <option value="Волейбол">
                            <option value="Теніс">
                            <option value="Гімнастика">
                            <option value="Плавання">
                            <option value="Баскетбол">
                            
                            <option value="Опенько">
                            <option value="Моставчук">
                            <option value="Якимів">
                            <option value="Усенко">
                            <option value="Вдівець">
                            <option value="Кордупенко">
                            <option value="Шмаль">
                            <option value="Маляр">
                        </datalist>
                        <button class="btn btn-outline-success" type="button"
                            onclick="window.location ='#'+document.getElementById('search').value">Пошук</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="src/pexels-mike-1192043 (1).jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Здоровий спосіб життя</h5>
                        <p>Уникніть захворювань пов'язаних з сидячим способом життя</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="src/pexels-rodnae-productions-7188044.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Рух</h5>
                        <p>Тримаєйте свої м'язи в тонусі</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="src/pexels-kindel-media-7426197.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Релакс</h5>
                        <p>Дайте вашій голові й тілу відпочинок</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <h2><span class="badge text-bg-dark">Секції</span></h2>

        <section class="sections">
            <div class="card" id="Карате" style="width: 18rem;">
                <img src="src/pexels-rodnae-productions-8611304 (1).jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Карате</h5>
                    <p class="card-text">Ваша дитина сильна, спритна й має явні спортивні завдатки? Їй буде корисно
                        займатись карате!</p>
                    <a href="mailto:sergiykit27@gmail.com" class="btn btn-primary">Написати тренеру</a>
                </div>
            </div>

            <div class="card" id="Футбол" style="width: 18rem;">
                <img src="src/pexels-sami-abdullah-11906365.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Футбол</h5>
                    <p class="card-text">Займаючись футболом, дитина розвиває навички роботи в команді,
                        цілеспрямованість, уміння долати труднощі, впевненість в собі та дисципліну.</p>
                    <a href="mailto:sergiykit27@gmail.com" class="btn btn-primary">Написати тренеру</a>
                </div>
            </div>

            <div class="card" id="Волейбол" style="width: 18rem;">
                <img src="src/pexels-jim-de-ramos-1263426.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Волейбол</h5>
                    <p class="card-text">Волейбол в клубі «Гантель» - це відпочинок і турбота про своє тіло. У нас ви
                        зможете відпочити і приділити час собі.</p>
                    <a href="mailto:sergiykit27@gmail.com" class="btn btn-primary">Написати тренеру</a>
                </div>
            </div>

            <div class="card" id="Теніс" style="width: 18rem;">
                <img src="src/pexels-cottonbro-5739122.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Теніс</h5>
                    <p class="card-text">«Теніс - це шахи в русі» - сказав єдиний у світі дворазовий володар Великого
                        шолома Род Лейвер.</p>
                    <a href="mailto:sergiykit27@gmail.com" class="btn btn-primary">Написати тренеру</a>
                </div>
            </div>

            <div class="card" id="Гімнастика" style="width: 18rem;">
                <img src="src/pexels-andrea-piacquadio-903171.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Гімнастика</h5>
                    <p class="card-text">У ритмічну гімнастику входить необмежений вибір рухів, що впливає на всі
                        частини тіла, на розвиток багатьох фізичних якостей, таких як: спритність, гнучкість,
                        витривалість, пластичність.</p>
                    <a href="mailto:sergiykit27@gmail.com" class="btn btn-primary">Написати тренеру</a>
                </div>
            </div>

            <div class="card" id="Плавання" style="width: 18rem;">
                <img src="src/pexels-guduru-ajay-bhargav-863988.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Плавання</h5>
                    <p class="card-text">Ні для кого не секрет, що заняття в басейні - один з найкращих способів
                        вдосконалювати свою фізичну форму, підвищити витривалість і зміцнити здоров'я.</p>
                    <a href="mailto:sergiykit27@gmail.com" class="btn btn-primary">Написати тренеру</a>
                </div>
            </div>

            <div class="card" id="Баскетбол" style="width: 18rem;">
                <img src="src/pexels-markus-spiske-1752757.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Баскетбол</h5>
                    <p class="card-text">Тренування проходять у найкращих баскетбольних залах міста з використанням
                        сучасного якісного інвентарю.</p>
                    <a href="mailto:sergiykit27@gmail.com" class="btn btn-primary">Написати тренеру</a>
                </div>
            </div>

            <div class="card" id="Гандбол" style="width: 18rem;">
                <img src="src/pexels-pixabay-262506.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Гандбол</h5>
                    <p class="card-text">Гандбол - універсальна спортивна гра, яка має спільні корені з футболом і
                        баскетболом, а з атлетизму мало в чому поступається регбі.</p>
                    <a href="mailto:sergiykit27@gmail.com" class="btn btn-primary">Написати тренеру</a>
                </div>
            </div>
        </section>

        <h2><span class="badge text-bg-dark">Тренери</span></h2>

        <section class="treners">
            <div class="card" id="Опенько" style="width: 12rem;">
                <img src="src/vova.jpg" class="card-img-top human" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Володимир Опенько</h5>
                    <p class="card-text">Ветеран м'яча і поля</p>
                </div>
            </div>

            <div class="card" id="Моставчук" style="width: 12rem;">
                <img src="src/petro.jpg" class="card-img-top human" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Петро Моставчук</h5>
                    <p class="card-text">Пятдесят сім років професіоналізму</p>
                </div>
            </div>

            <div class="card" id="Якимів" style="width: 12rem;">
                <img src="src/julia.jpg" class="card-img-top human" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Юлія Якимів</h5>
                    <p class="card-text"></p>
                </div>
            </div>

            <div class="card" id="Усенко" style="width: 12rem;">
                <img src="src/pexels-annushka-ahuja-7991683.jpg" class="card-img-top human" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Андрій Усенко</h5>
                    <p class="card-text">Подвійний чемпіон "Залізного кулака"</p>
                </div>
            </div>

            <div class="card" id="Вдівець" style="width: 12rem;">
                <img src="src/pexels-pixabay-207693.jpg" class="card-img-top human" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Петро Вдівець</h5>
                    <p class="card-text"></p>
                </div>
            </div>
            
            <div class="card" id="Кордупенко" style="width: 12rem;">
                <img src="src/pexels-pavel-danilyuk-6203689.jpg" class="card-img-top human" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Сергій Кордупенко</h5>
                    <p class="card-text"></p>
                </div>
            </div>
            
            <div class="card" id="Шмаль" style="width: 12rem;">
                <img src="src/pexels-scott-webb-136409.jpg" class="card-img-top human" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Анна Шмаль</h5>
                    <p class="card-text"></p>
                </div>
            </div>
            
            <div class="card" id="Маляр" style="width: 12rem;">
                <img src="src/pexels-artem-podrez-6253180.jpg" class="card-img-top human" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Тарас Маляр</h5>
                    <p class="card-text"></p>
                </div>
            </div>
        </section>

        <h2><span class="badge text-bg-dark">Опції</span></h2>

        <section>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Назва</th>
                    <th scope="col">Тренер</th>
                    <th scope="col">Ціна</th>
                    <th scope="col">Фото</th>
                    <th scope="col">Дні</th>
                    <th scope="col">Інвентар</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                    include("db.php");
                    $data = Get("SELECT * FROM `Section`;");
                    for ($i = 0; $i < mysqli_num_rows($data); $i++) {
                        $f = mysqli_fetch_array($data);
                        echo '
                  <tr><th scope="row">'.$i.'</th><td scope="col">'.$f['name'].'</td><td scope="col">'.$f['coach'].'</td><td scope="col">'.$f['price'].'₴</td><td scope="col">'.$f['photo'].'</td><td scope="col">'.$f['days'].'</td><td scope="col">'.$f['sport_inventory'].'</td></tr>';
                } ?>
                </tbody>
              </table>
        </section>
    </main>
    <footer>
        <?php
            if($_REQUEST['name'] == "admin"){
                echo '        <h2><span class="badge text-bg-info"><a class="nav-link" href="add.php">Додати запис (admin)</a></span></h2>';
            }
        ?>
    </footer>
    <div>
        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <img src="src/dumbbells_icon-icons.com_59199.svg" class="me-2" alt="...">
                    <strong class="me-auto">«Гантель»</strong>
                    <small>1 min ago</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    Вітаємо в "Гантелі"! Напишіть якщо виникли питання:<br />
                    <a href="mailto:sergiykit27@gmail.com" class="btn btn-primary disabled">Написати тренеру</a>
                </div>
            </div>
        </div>
        <script>
            const toastTrigger = document.getElementById('liveToastBtn')
            const toastLiveExample = document.getElementById('liveToast')
            var toast = () => {
                const toast = new bootstrap.Toast(toastLiveExample)

                toast.show()
            }
        </script>
    </div>
</body>

</html>
