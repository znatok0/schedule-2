<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <title>Ресурс расписаний</title>
  </head>
  <body>
    <!-- Optional JavaScript -->
    <!-- jQuery Вторник, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="header-content">
                <a class="navbar-brand" href="{{ url('/') }}"><img class="logo" src="/img/index.png" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nac-item">
                            <form class="form-inline">
                                <input class="form-control mr-sm-2" type="search" placeholder="Поиск группы, преподавателя, аудитории" aria-label="Search">
                                <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button> -->
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
    <!-- Schedule main body -->
    <div class="main-body">
        <p class="week-p" class="week-number"><img class="arrow" src="/img/back.png" alt="back">Неделя №1<img class="arrow" src="/img/next.png" alt="next"></p>
        <table class="table schedule">
            <thead>
                <tr>
                <th scope="col">Время</th>
                <th scope="col">Понедельник</th>
                <th scope="col">Вторник</th>
                <th scope="col">Среда</th>
                <th scope="col">Четверг</th>
                <th scope="col">Пятница</th>
                <th scope="col">Суббота</th>
                <th scope="col">Воскресенье</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">9:00 - 9:50</th>
                    <td>Урок1</td>
                    <td>Урок1</td>
                    <td>Урок1</td>
                    <td>Урок1</td>
                    <td>Урок1</td>
                    <td>Урок1</td>
                    <td>Урок1</td>
                </tr>
                <tr>
                    <th scope="row">10:00 - 10:50</th>
                    <td>Урок2</td>
                    <td>Урок2</td>
                    <td>Урок2</td>
                    <td>Урок2</td>
                    <td>Урок2</td>
                    <td>Урок2</td>
                    <td>Урок2</td>
                </tr>
                <tr>
                    <th scope="row">11:00 - 11:50</th>
                    <td>Урок3</td>
                    <td>Урок3</td>
                    <td>Урок3</td>
                    <td>Урок3</td>
                    <td>Урок3</td>
                    <td>Урок3</td>
                    <td>Урок3</td>
                </tr>
            </tbody>
        </table>
    </main>
    <!-- Footer -->
    <footer>
        <center><p>ссылка на сайт разработчика</p></center>
    </footer>
    
  </body>
</html>