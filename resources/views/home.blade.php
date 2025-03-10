
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Гимназия Диалог"</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Mono&display=swap" rel="stylesheet">

</head>
<body>
    <!-- Шапка -->
    <header class="header">
        <div class="container">
            <nav class="nav">
                <ul class="nav-list">
                    <li><a href="#">Новости</a></li>
                    <li><a href="#">О нас</a></li>
                </ul>
                <a href="{{ route('login') }}" class="login">Войти</a>
            </nav>
        </div>
    </header>
    <!-- Основной контент -->
    <main class="main">
        <div class="container">
            <h1>Новости школы</h1>
            <div class="news-grid">
                <article class="news-card">
                    <img src="news1.jpg" alt="Новость 1">
                    <h2>Началась подготовка к олимпиадам</h2>
                    <p>Школа начинает подготовку к олимпиадам по математике и физике...</p>
                    <a href="#">Читать далее</a>
                </article>
                <article class="news-card">
                    <img src="news2.jpg" alt="Новость 2">
                    <h2>Ремонт спортивного зала</h2>
                    <p>Завершился ремонт спортзала. Теперь у нас новые тренажёры...</p>
                    <a href="#">Читать далее</a>
                </article>
                <article class="news-card">
                    <img src="news3.jpg" alt="Новость 3">
                    <h2>Открыта запись в секции</h2>
                    <p>Открыта запись в кружки робототехники, программирования и шахмат...</p>
                    <a href="#">Читать далее</a>
                </article>
            </div>
        </div>
    </main>
    <!-- Подвал -->
    <footer class="footer">
        <div class="container">
            <nav class="nav">
                <ul class="nav-list">
                    <li><a href="#">Новости</a></li>
                    <li><a href="#">О нас</a></li>
                </ul>
                <p class="address">Адрес школы: г. Владикавказ, ул. Владикавказская 69 Г</p>
            </nav>
        </div>
    </footer>

</body>
</html>

<style>
body {
    font-family: "Andale Mono", monospace;
    margin: 0;
    padding: 0;
    background-color: #000;
    color: white;
}

.container {
    width: 80%;
    margin: 0 auto;
}

.header {
    background-color: #111;
    padding: 15px 0;
}

.nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.nav-list {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    gap: 20px;
}

.nav-list a,
.login {
    text-decoration: none;
    color: white;
    font-weight: bold;
}

.login {
    background: white;
    color: #000;
    padding: 5px 10px;
    border-radius: 5px;
}

.main {
    padding: 40px 0;
    text-align: center;
}

.news-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 20px;
    margin-top: 20px;
}

.news-card {
    background: #111;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
}

.news-card img {
    width: 100%;
    border-radius: 5px;
}

.news-card h2 {
    font-size: 18px;
    margin: 10px 0;
    color: white;
}

.news-card p {
    font-size: 14px;
    color: #bbb;
}

.news-card a {
    display: inline-block;
    margin-top: 10px;
    color:rgb(122, 57, 172);
    text-decoration: none;
    font-weight: bold;
}

/* Подвал */
.footer {
    background-color: #111;
    padding: 15px 0;
    color: white;
    text-align: center;
}

.footer .nav-list a {
    color: white;
}

.address {
    margin-top: 10px;
    font-size: 14px;
    color: #bbb;
}
</style>
