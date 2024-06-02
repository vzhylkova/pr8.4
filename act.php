<?php
// Перевіряємо, чи були передані змінні a і b через POST
if (isset($_POST['a']) && isset($_POST['b'])) {
    // Отримуємо значення змінних a і b з форми
    $a = $_POST['a'];
    $b = $_POST['b'];

    // Виводимо перший, а потім другий рядки
    echo "<h2>Вивід першого, а потім другого рядків:</h2>";
    echo "<p>$a $b</p>";

    // Виводимо другий, а потім перший рядки
    echo "<h2>Вивід другого, а потім першого рядків:</h2>";
    echo "<p>$b $a</p>";
} else {
    // Якщо змінні a і b не були передані через POST, виводимо повідомлення про помилку
    echo "<h2>Помилка: Введіть значення для рядків A і B через форму.</h2>";
}
?>
