<div>
    <h1 id='h1_news'><?= $result['title']; ?></h1>
    <pre>
        ------ 22.04.2022 -------
        1) Добавлен bootstrap в fw/views/templates/header
        2) Сделан header и footer
        3) Создан компонент fw/components/interface.form
        4) Компонент fw/components/interface.form добавлен на index.php
        ------ 20.04.2022 -------
        1) Создан класс Directory как базовый класс для Request Server
        2) Создан класс Request extends Directory
        3) Создан класс Server extends Directory
        4) В класс Application добавлены методы получения экземпляра Request, Server
        5) В файловую структура была добавления директория компонентов fw/components
        6) Создан класс Base, который является базовым для компонентов
        7) Создан класс Template который отвечает за подключение шаблона к компоненту, подгружает стили и скрипты
        8) В класс Application добавлен метод includeComponent который добавлят компонент на страницу
        9) Доработан буффер, теперь если макросы не заполнены, заменяет их на пустую строку
        ------ 07.03.2022 -------
        1) Создан класс Page для работы с содержимым
        2) Пофикнеш баг конфиг класса
        3) Добавлена глобальная переменная CORE
        4) Добавлен трейт синглтон и использован в классе Appliction и Page
        5) Добавлена директория views/templates где хранятся части страниц

        ------ 05.03.2022 -------
        1) Создан конфиг и класс для работы с ним
        2) Создана функция авто регистрации классов
    </pre>
        <button type="submit" id='btn'>click for check js</button>
</div>