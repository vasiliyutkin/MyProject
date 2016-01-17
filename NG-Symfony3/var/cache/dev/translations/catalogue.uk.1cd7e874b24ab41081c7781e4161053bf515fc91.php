<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('uk', array (
  'validators' => 
  array (
    'This value should be false.' => 'Значення повинно бути Ні.',
    'This value should be true.' => 'Значення повинно бути Так.',
    'This value should be of type {{ type }}.' => 'Тип значення повинен бути {{ type }}.',
    'This value should be blank.' => 'Значення повинно бути пустим.',
    'The value you selected is not a valid choice.' => 'Обране вами значення недопустиме.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Ви повинні обрати хоча б {{ limit }} варіант.|Ви повинні обрати хоча б {{ limit }} варіанти.|Ви повинні обрати хоча б {{ limit }} варіантів.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Ви повинні обрати не більше ніж {{ limit }} варіантів.',
    'One or more of the given values is invalid.' => 'Одне або кілька заданих значень є недопустимі.',
    'This field was not expected.' => 'Це поле не очікується.',
    'This field is missing.' => 'Це поле не вистачає.',
    'This value is not a valid date.' => 'Дане значення не є вірною датою.',
    'This value is not a valid datetime.' => 'Дане значення дати та часу недопустиме.',
    'This value is not a valid email address.' => 'Значення адреси электронної пошти недопустиме.',
    'The file could not be found.' => 'Файл не знайдено.',
    'The file is not readable.' => 'Файл не читається.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Файл занадто великий ({{ size }} {{ suffix }}). Дозволений максимальний розмір {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'MIME-тип файлу недопустимий ({{ type }}). Допустимі MIME-типи файлів {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Значення повинно бути {{ limit }} або менше.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Значення занадто довге. Повинно бути рівне {{ limit }} символу або менше.|Значення занадто довге. Повинно бути рівне {{ limit }} символам або менше.|Значення занадто довге. Повинно бути рівне {{ limit }} символам або менше.',
    'This value should be {{ limit }} or more.' => 'Значення повинно бути {{ limit }} або більше.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Значення занадто коротке. Повинно бути рівне {{ limit }} символу або більше.|Значення занадто коротке. Повинно бути рівне {{ limit }} символам або більше.|Значення занадто коротке. Повинно бути рівне {{ limit }} символам або більше.',
    'This value should not be blank.' => 'Значення не повинно бути пустим.',
    'This value should not be null.' => 'Значення не повинно бути null.',
    'This value should be null.' => 'Значення повинно бути null.',
    'This value is not valid.' => 'Значення недопустиме.',
    'This value is not a valid time.' => 'Значення часу недопустиме.',
    'This value is not a valid URL.' => 'Значення URL недопустиме.',
    'The two values should be equal.' => 'Обидва занчення повинні бути одинаковими.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Файл занадто великий. Максимальний допустимий розмір {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Файл занадто великий.',
    'The file could not be uploaded.' => 'Файл не можливо завантажити.',
    'This value should be a valid number.' => 'Значення має бути допустимим числом.',
    'This file is not a valid image.' => 'Цей файл не є допустимим форматом зображення.',
    'This is not a valid IP address.' => 'Це некоректна IP адреса.',
    'This value is not a valid language.' => 'Це некоректна мова.',
    'This value is not a valid locale.' => 'Це некоректна локалізація.',
    'This value is not a valid country.' => 'Це некоректна країна.',
    'This value is already used.' => 'Це значення вже використовується.',
    'The size of the image could not be detected.' => 'Не вдалося визначити розмір зображення.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Ширина зображення занадто велика ({{ width }}px). Максимально допустима ширина {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Ширина зображення занадто мала ({{ width }}px). Мінімально допустима ширина {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Висота зображення занадто велика ({{ height }}px). Максимально допустима висота {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Висота зображення занадто мала ({{ height }}px). Мінімально допустима висота {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Значення має бути поточним паролем користувача.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Значення повиино бути рівним {{ limit }} символу.|Значення повиино бути рівним {{ limit }} символам.|Значення повиино бути рівним {{ limit }} символам.',
    'The file was only partially uploaded.' => 'Файл був завантажений лише частково.',
    'No file was uploaded.' => 'Файл не був завантажений.',
    'No temporary folder was configured in php.ini.' => 'Не налаштована тимчасова директорія в php.ini.',
    'Cannot write temporary file to disk.' => 'Неможливо записати тимчасовий файл на диск.',
    'A PHP extension caused the upload to fail.' => 'Розширення PHP викликало помилку при завантаженні.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Ця колекція повинна містити {{ limit }} елемент чи більше.|Ця колекція повинна містити {{ limit }} елемента чи більше.|Ця колекція повинна містити {{ limit }} елементів чи більше.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Ця колекція повинна містити {{ limit }} елемент чи менше.|Ця колекція повинна містити {{ limit }} елемента чи менше.|Ця колекція повинна містити {{ limit }} елементов чи менше.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Ця колекція повинна містити рівно {{ limit }} елемент.|Ця колекція повинна містити рівно {{ limit }} елемента.|Ця колекція повинна містити рівно {{ limit }} елементів.',
    'Invalid card number.' => 'Невірний номер карти.',
    'Unsupported card type or invalid card number.' => 'Непідтримуваний тип карти або невірний номер карти.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Це не дійсний міжнародний номер банківського рахунку (IBAN).',
    'This value is not a valid ISBN-10.' => 'Значення не у форматі ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Значення не у форматі ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Значення не відповідає форматам ISBN-10 та ISBN-13.',
    'This value is not a valid ISSN.' => 'Значення має невірний формат ISSN.',
    'This value is not a valid currency.' => 'Значення має невірний формат валюти.',
    'This value should be equal to {{ compared_value }}.' => 'Значення повинно дорівнювати {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Значення має бути більше ніж {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Значення має бути більше або дорівнювати {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Значення має бути ідентичним {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Значення повинно бути менше ніж {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Значення повинно бути менше або дорівнювати {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Значення не повинно дорівнювати  {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Значення не повинно бути ідентичним {{ compared_value_type }} {{ compared_value }}.',
    'This form should not contain extra fields.' => 'Ця форма не повинна містити додаткових полів.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Завантажений файл занадто великий. Будь-ласка, спробуйте завантажити файл меншого розміру.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF значення недопустиме. Будь-ласка, спробуйте відправити форму знову.',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'This field was not expected.',
    'This field is missing.' => 'This field is missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'This value should be the user\'s current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected {{ charset }} charset.' => 'This value does not match the expected {{ charset }} charset.',
    'This is not a valid Business Identifier Code (BIC).' => 'This is not a valid Business Identifier Code (BIC).',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'Digest nonce has expired.' => 'Digest nonce has expired.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
  ),
  'messages' => 
  array (
    'intro' => '*** en_EN *** Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ac aliquet arcu, nec congue eros. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque porttitor eros non cursus hendrerit. Nullam in vulputate eros, sed aliquet mi. Cras sed neque sit amet ipsum fringilla eleifend eu id ipsum. Proin vestibulum, magna nec bibendum vehicula, nunc libero vehicula urna, sed congue tortor metus vel dolor. Etiam quis bibendum velit, ac posuere lorem. Aenean aliquam risus ligula, vitae pulvinar quam scelerisque ac. In aliquet ligula non enim suscipit cursus. Maecenas fermentum vel turpis eget finibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
