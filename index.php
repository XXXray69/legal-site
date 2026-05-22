<?php
$sent = false;
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $service = trim($_POST['service'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if ($name === '' || $phone === '') {
        $error = 'Пожалуйста, укажите имя и телефон.';
    } else {
        $line = date('Y-m-d H:i:s') . " | $name | $phone | $service | " . str_replace(["\r", "\n"], ' ', $message) . PHP_EOL;
        file_put_contents(__DIR__ . '/leads.txt', $line, FILE_APPEND | LOCK_EX);
        $sent = true;
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Юридическая помощь | Адвокат, юрист, защита в суде</title>
    <meta name="description" content="Юрист и адвокат: уголовный юрист, гражданский юрист, семейные споры, банкротство, ДТП, вред здоровью, судебная экспертиза, защита в суде, полиции и прокуратуре.">
    <meta name="keywords" content="адвокат, юрист, лучшие юристы, тяжкий вред здоровью, средний вред здоровью, лёгкий вред здоровью, судебная экспертиза, судмедэксперт, судебно-медицинская экспертиза, гражданский юрист, уголовный юрист, юрист по вреду здоровья, банкротство, семейные споры, разводы, алименты, договора, юрист по дтп, представитель потерпевшего, защита прав, правозащита, защита в суде, защита в полиции, защита в прокуратуре, судебные споры, представительство в суде">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<header class="header">
    <div class="container nav">
        <a href="#" class="logo">Право<span>Эксперт</span></a>
        <button class="burger" id="burger" aria-label="Меню">☰</button>
        <nav id="menu">
            <a href="#services">Услуги</a>
            <a href="#expertise">Экспертиза</a>
            <a href="#cases">Практика</a>
            <a href="#contact">Контакты</a>
        </nav>
    </div>
</header>

<main>
    <section class="hero">
        <div class="container hero-grid">
            <div class="hero-text">
                <p class="badge">Юридическая защита физических и юридических лиц</p>
                <h1>Адвокат и юрист для сложных судебных споров</h1>
                <p class="lead">Защита прав в суде, полиции и прокуратуре. Помощь по уголовным, гражданским, семейным делам, банкротству, ДТП и делам о вреде здоровью.</p>
                <div class="hero-actions">
                    <a class="btn primary" href="#contact">Получить консультацию</a>
                    <a class="btn ghost" href="#services">Смотреть услуги</a>
                </div>
            </div>
            <div class="hero-card">
                <h3>Срочная консультация</h3>
                <p>Разберём документы, оценим перспективы дела и предложим план защиты.</p>
                <ul>
                    <li>Представительство в суде</li>
                    <li>Защита потерпевшего</li>
                    <li>Судебно-медицинская экспертиза</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section" id="services">
        <div class="container">
            <div class="section-title">
                <p>Направления</p>
                <h2>Юридические услуги</h2>
            </div>
            <div class="cards">
                <article class="card"><h3>Уголовный юрист</h3><p>Защита в полиции, прокуратуре и суде. Подготовка позиции, жалоб, ходатайств и сопровождение следственных действий.</p></article>
                <article class="card"><h3>Гражданский юрист</h3><p>Судебные споры, взыскания, договоры, защита прав, представительство в суде и досудебное урегулирование.</p></article>
                <article class="card"><h3>Вред здоровью</h3><p>Тяжкий, средний и лёгкий вред здоровью. Помощь потерпевшим, компенсация морального вреда, работа с экспертизой.</p></article>
                <article class="card"><h3>Семейные споры</h3><p>Разводы, алименты, раздел имущества, споры о детях, соглашения и судебное сопровождение.</p></article>
                <article class="card"><h3>Банкротство</h3><p>Оценка долговой ситуации, подготовка документов, сопровождение процедуры банкротства физических лиц.</p></article>
                <article class="card"><h3>Юрист по ДТП</h3><p>Взыскание ущерба, споры со страховыми, защита водителя, представитель потерпевшего после ДТП.</p></article>
            </div>
        </div>
    </section>

    <section class="section dark" id="expertise">
        <div class="container split">
            <div>
                <p class="badge">Экспертное сопровождение</p>
                <h2>Судебная экспертиза и судмедэксперт</h2>
                <p>Помогаем правильно поставить вопросы эксперту, оспорить заключение, назначить повторную или дополнительную судебно-медицинскую экспертизу.</p>
            </div>
            <div class="steps">
                <div><span>01</span><p>Анализ материалов дела</p></div>
                <div><span>02</span><p>Подготовка правовой позиции</p></div>
                <div><span>03</span><p>Защита интересов в суде</p></div>
            </div>
        </div>
    </section>

    <section class="section" id="cases">
        <div class="container">
            <div class="section-title">
                <p>Почему выбирают нас</p>
                <h2>Сильная правовая защита</h2>
            </div>
            <div class="features">
                <div><strong>24/7</strong><span>первичная связь</span></div>
                <div><strong>10+</strong><span>направлений практики</span></div>
                <div><strong>100%</strong><span>конфиденциальность</span></div>
            </div>
        </div>
    </section>

    <section class="section contact" id="contact">
        <div class="container contact-grid">
            <div>
                <p class="badge">Свяжитесь с нами</p>
                <h2>Получите юридическую консультацию</h2>
                <p>Оставьте заявку — юрист свяжется с вами, уточнит ситуацию и предложит дальнейшие действия.</p>
                <p class="small">Замените телефон, адрес и почту на свои данные в файле index.php.</p>
            </div>
            <form method="post" class="form">
                <?php if ($sent): ?><div class="success">Заявка отправлена. Мы скоро свяжемся с вами.</div><?php endif; ?>
                <?php if ($error): ?><div class="error"><?= htmlspecialchars($error) ?></div><?php endif; ?>
                <input type="text" name="name" placeholder="Ваше имя" required>
                <input type="tel" name="phone" placeholder="Телефон" required>
                <select name="service">
                    <option>Уголовный юрист</option>
                    <option>Гражданский юрист</option>
                    <option>Юрист по вреду здоровью</option>
                    <option>Семейные споры</option>
                    <option>Банкротство</option>
                    <option>Юрист по ДТП</option>
                </select>
                <textarea name="message" rows="4" placeholder="Кратко опишите ситуацию"></textarea>
                <button class="btn primary" type="submit">Отправить заявку</button>
            </form>
        </div>
    </section>
</main>

<footer class="footer">
    <div class="container footer-grid">
        <p>© 2026 ПравоЭксперт. Юридическая помощь.</p>
        <p>Тел.: +7 (999) 000-00-00 · Email: info@law-site.ru</p>
    </div>
</footer>
<script src="assets/script.js"></script>
</body>
</html>
