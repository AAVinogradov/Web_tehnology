-- 2. Создать файл my.sql, в котором должна создаваться таблица с информацией об одногруппниках. В таблице должно быть четыре поля: id, name, age, address. Все поля в таблице обязательны для заполнения.

-- Необходимо добавить 5-10 одногруппников в данную таблицу.

-- Необходимо написать запрос на получение имен всех одногруппников (только имен, без всего остального), которые живут в Москве и их возраст находится в диапазоне [18, 30) лет.

-- Примечание:

-- Квадратные скобки при указании диапазона, означают "включительно", а круглые "не включительно", то есть диапазон (7, 9] означает "от 7, где 7 не попадает в данный диапазон, до 9 включительно". Такой синтаксис нельзя использовать в sql, вам нужно найти решение, как такое условие можно записать в sql по-другому.

-- Для проверок работы своего скрипта можете использовать свою базу данных, либо используйте сайт: https://onecompiler .com/mysql


-- create
CREATE TABLE groupmates (
  Id INTEGER PRIMARY KEY,
  name    TEXT NOT NULL,
  age     TEXT NOT NULL,
  address TEXT NOT NULL
);

-- insert
INSERT INTO groupmates VALUES (0001, 'Саня', '25', 'Ростов');
INSERT INTO groupmates VALUES (0002, 'Ваня', '32', 'Москва');
INSERT INTO groupmates VALUES (0003, 'Коля', '30', 'Краснодар');
INSERT INTO groupmates VALUES (0004, 'Настя', '21', 'Воронеж');
INSERT INTO groupmates VALUES (0005, 'Ольга', '37', 'Москва');


-- fetch 
SELECT * FROM groupmates where age >= 30 and address = 'Москва';
-- fetch 
SELECT name FROM groupmates where age >= 30 and address = 'Москва';