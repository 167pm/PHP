<?php

$textStorage = [];

function add(&$textStorage, $title, $text) {
    $textStorage[] = ['title' => $title, 'text' => $text];
}

function remove(&$textStorage, $index) {
    if (isset($textStorage[$index])) {
        unset($textStorage[$index]);
        return true;
    }
    return false;
}

function edit(&$textStorage, $index, $title, $text) {
    if (isset($textStorage[$index])) {
        $textStorage[$index] = ['title' => $title, 'text' => $text];
        return true;
    }
    return false;
}

add($textStorage, "Первый заголовок", "Первый текст");
add($textStorage, "Второй заголовок", "Второй текст");

echo "Содержимое после добавления:\n";
print_r($textStorage);

echo "\nРезультат удаления первого текста:\n";
echo remove($textStorage, 0) ? "Удалено\n" : "Текст не найден\n";
echo "\nРезультат удаления несуществующего текста (индекс 5):\n";
echo remove($textStorage, 5) ? "Удалено\n" : "Текст не найден\n";

echo "\nСодержимое после удаления:\n";
print_r($textStorage);

echo "\nРезультат редактирования второго текста:\n";
echo edit($textStorage, 1, "Обновленный заголовок", "Обновленный текст") ? "Обновлено\n" : "Текст не найден\n";

echo "\nСодержимое после редактирования:\n";
print_r($textStorage);

echo "\nРезультат редактирования несуществующего текста (индекс 10):\n";
echo edit($textStorage, 10, "Новый заголовок", "Новый текст") ? "Обновлено\n" : "Текст не найден\n";
?>
