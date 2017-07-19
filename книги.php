﻿<?php
/**
 * Export to PHP Array plugin for PHPMyAdmin
 * @version 0.2b
 */

//
// Database `задание`
//

// `задание`.`авторы`
$авторы = array(
  array('Имя' => 'Борис ','Фамилия' => 'Акунин','Номер_автора' => '1'),
  array('Имя' => 'Лилия','Фамилия' => 'Гиляровская','Номер_автора' => '2'),
  array('Имя' => 'Алла ','Фамилия' => 'Вехорева','Номер_автора' => '2'),
  array('Имя' => 'Лев','Фамилия' => 'Толстой','Номер_автора' => '4'),
  array('Имя' => 'Евгений','Фамилия' => 'Водолазкин','Номер_автора' => '5'),
  array('Имя' => 'Стивен','Фамилия' => 'Кинг','Номер_автора' => '6'),
  array('Имя' => 'Леонид ','Фамилия' => 'Нейман','Номер_автора' => '7'),
  array('Имя' => 'Камо ','Фамилия' => 'Демирчян','Номер_автора' => '7'),
  array('Имя' => 'Юринов ','Фамилия' => 'Виктор','Номер_автора' => '7'),
  array('Имя' => ' Герберт ','Фамилия' => 'Уэллс','Номер_автора' => '8'),
  array('Имя' => 'Чак','Фамилия' => 'Паланик','Номер_автора' => '3')
);

// `задание`.`книги`
$книги = array(
  array('ISBN' => '2-322-132476','Номер_автора' => '1','Название' => 'Азазель','Количество_страниц' => '200','Жанр' => 'детектив'),
  array('ISBN' => '2-321-23445','Номер_автора' => '2','Название' => 'Анализ и оценка финансовой устойчивости коммерческого предприятия','Количество_страниц' => '24','Жанр' => 'наука'),
  array('ISBN' => '1-232-123543','Номер_автора' => '3','Название' => 'Удушье','Количество_страниц' => '320','Жанр' => 'контркультура'),
  array('ISBN' => '3-377-11223','Номер_автора' => '4','Название' => 'Война и мир','Количество_страниц' => '700','Жанр' => 'роман'),
  array('ISBN' => '2-266-11156','Номер_автора' => '5','Название' => 'Лавр','Количество_страниц' => '267','Жанр' => 'роман'),
  array('ISBN' => '5-858-23325','Номер_автора' => '6','Название' => 'Под куполом','Количество_страниц' => '1106','Жанр' => 'фантастика'),
  array('ISBN' => '1-332-542133','Номер_автора' => '7','Название' => 'Руководство к лаборатории электромагнитного поля','Количество_страниц' => '237','Жанр' => 'наука'),
  array('ISBN' => '7-133-112376','Номер_автора' => '8','Название' => 'Человек-невидимка','Количество_страниц' => '250','Жанр' => 'фантастика'),
  array('ISBN' => '2-323-123533','Номер_автора' => '9','Название' => 'Над пропастью во ржи','Количество_страниц' => '432','Жанр' => 'роман,наука,контркультура')
);




//вывести название книги и ее авторов для жанра фантастика
SELECT `книги`.`название` , `книги`.`номер_автора` , `авторы`.`Имя` , `авторы`.`Фамилия` , `книги`.`Жанр` 
FROM `книги` , `авторы` 
WHERE `книги`.`номер_автора` = `авторы`.`номер_автора` 
AND `книги`.`Жанр` = 'фантастика' 

//Вывести все книги, где больше 2-х авторов
SELECT `книги`.`ISBN`, `книги`.`название`, `книги`.`номер_автора`, `книги`.`Количество_страниц` , `авторы`.`Имя` , `авторы`.`Фамилия` , `книги`.`Жанр` 
FROM `книги` , `авторы` 
WHERE `книги`.`номер_автора` = `авторы`.`номер_автора` 
AND `книги`.`номер_автора` > '2'

//Вывести количество книг по каждому жанру
SELECT COUNT(*) 
FROM книги
WHERE `Жанр`
LIKE 'роман','детектив','фантастика','контркультура','наука'

