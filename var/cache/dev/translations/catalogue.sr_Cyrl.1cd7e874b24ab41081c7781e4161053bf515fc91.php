<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('sr_Cyrl', array (
  'validators' => 
  array (
    'This value should be false.' => 'Вредност треба да буде нетачна.',
    'This value should be true.' => 'Вредност треба да буде тачна.',
    'This value should be of type {{ type }}.' => 'Вредност треба да буде типа {{ type }}.',
    'This value should be blank.' => 'Вредност треба да буде празна.',
    'The value you selected is not a valid choice.' => 'Вредност треба да буде једна од понуђених.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Изаберите бар {{ limit }} могућност.|Изаберите бар {{ limit }} могућности.|Изаберите бар {{ limit }} могућности.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Изаберите највише {{ limit }} могућност.|Изаберите највише {{ limit }} могућности.|Изаберите највише {{ limit }} могућности.',
    'One or more of the given values is invalid.' => 'Једна или више вредности је невалидна.',
    'This field was not expected.' => 'Ово поље не очекује.',
    'This field is missing.' => 'Ово поље недостаје.',
    'This value is not a valid date.' => 'Вредност није валидан датум.',
    'This value is not a valid datetime.' => 'Вредност није валидан датум-време.',
    'This value is not a valid email address.' => 'Вредност није валидна адреса електронске поште.',
    'The file could not be found.' => 'Датотека не може бити пронађена.',
    'The file is not readable.' => 'Датотека није читљива.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Датотека је превелика ({{ size }} {{ suffix }}). Највећа дозвољена величина је {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Миме тип датотеке није валидан ({{ type }}). Дозвољени миме типови су {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Вредност треба да буде {{ limit }} или мање.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Вредност је предугачка. Треба да има {{ limit }} карактер или мање.|Вредност је предугачка. Треба да има {{ limit }} карактера или мање.|Вредност је предугачка. Треба да има {{ limit }} карактера или мање.',
    'This value should be {{ limit }} or more.' => 'Вредност треба да буде {{ limit }} или више.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Вредност је прекратка. Треба да има {{ limit }} карактер или више.|Вредност је прекратка. Треба да има {{ limit }} карактера или више.|Вредност је прекратка. Треба да има {{ limit }} карактера или више.',
    'This value should not be blank.' => 'Вредност не треба да буде празна.',
    'This value should not be null.' => 'Вредност не треба да буде null.',
    'This value should be null.' => 'Вредност треба да буде null.',
    'This value is not valid.' => 'Вредност је невалидна.',
    'This value is not a valid time.' => 'Вредност није валидно време.',
    'This value is not a valid URL.' => 'Вредност није валидан URL.',
    'The two values should be equal.' => 'Обе вредности треба да буду једнаке.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Датотека је превелика. Највећа дозвољена величина је {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Датотека је превелика.',
    'The file could not be uploaded.' => 'Датотека не може бити отпремљена.',
    'This value should be a valid number.' => 'Вредност треба да буде валидан број.',
    'This file is not a valid image.' => 'Ова датотека није валидна слика.',
    'This is not a valid IP address.' => 'Ово није валидна ИП адреса.',
    'This value is not a valid language.' => 'Вредност није валидан језик.',
    'This value is not a valid locale.' => 'Вредност није валидан локал.',
    'This value is not a valid country.' => 'Вредност није валидна земља.',
    'This value is already used.' => 'Вредност је већ искоришћена.',
    'The size of the image could not be detected.' => 'Величина слике не може бити одређена.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Ширина слике је превелика ({{ width }}px). Најећа дозвољена ширина је {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Ширина слике је премала ({{ width }}px). Најмања дозвољена ширина је {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Висина слике је превелика ({{ height }}px). Најећа дозвољена висина је {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Висина слике је премала ({{ height }}px). Најмања дозвољена висина је {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Вредност треба да буде тренутна корисничка лозинка.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Вредност треба да има тачно {{ limit }} карактер.|Вредност треба да има тачно {{ limit }} карактера.|Вредност треба да има тачно {{ limit }} карактера.',
    'The file was only partially uploaded.' => 'Датотека је само парцијално отпремљена.',
    'No file was uploaded.' => 'Датотека није отпремљена.',
    'No temporary folder was configured in php.ini.' => 'Привремени директоријум није конфигурисан у php.ini.',
    'Cannot write temporary file to disk.' => 'Немогуће писање привремене датотеке на диск.',
    'A PHP extension caused the upload to fail.' => 'PHP екстензија је проузроковала неуспех отпремања датотеке.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Ова колекција треба да садржи {{ limit }} или више елемената.|Ова колекција треба да садржи {{ limit }} или више елемената.|Ова колекција треба да садржи {{ limit }} или више елемената.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Ова колекција треба да садржи {{ limit }} или мање елемената.|Ова колекција треба да садржи {{ limit }} или мање елемената.|Ова колекција треба да садржи {{ limit }} или мање елемената.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Ова колекција треба да садржи тачно {{ limit }} елемент.|Ова колекција треба да садржи тачно {{ limit }} елемента.|Ова колекција треба да садржи тачно {{ limit }} елемената.',
    'Invalid card number.' => 'Невалидан број картице.',
    'Unsupported card type or invalid card number.' => 'Невалидан број картице или тип картице није подржан.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Ово није валидан међународни број банковног рачуна (IBAN).',
    'This value is not a valid ISBN-10.' => 'Ово није валидан ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Ово није валидан ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Ово није валидан ISBN-10 или ISBN-13.',
    'This value is not a valid ISSN.' => 'Ово није валидан ISSN.',
    'This value is not a valid currency.' => 'Ово није валидна валута.',
    'This value should be equal to {{ compared_value }}.' => 'Ова вредност треба да буде {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Ова вредност треба да буде већа од {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Ова вредност треба да буде већа или једнака {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ова вредност треба да буде идентична са {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Ова вредност треба да буде мања од {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Ова вредност треба да буде мања или једнака {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Ова вредност не треба да буде једнака {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ова вредност не треба да буде идентична са {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Размера ове слике је превелика ({{ ratio }}). Максимална дозвољена размера је {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Размера ове слике је премала ({{ ratio }}). Минимална очекивана размера је {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Слика је квадратна ({{ width }}x{{ height }}px). Квадратне слике нису дозвољене.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Слика је оријентације пејзажа ({{ width }}x{{ height }}px). Пејзажна оријентација слика није дозвољена.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Слика је оријантације портрета ({{ width }}x{{ height }}px). Портретна оријентација слика није дозвољена.',
    'This form should not contain extra fields.' => 'Овај формулар не треба да садржи додатна поља.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Отпремљена датотека је била превелика. Молим покушајте отпремање мање датотеке.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF вредност је невалидна. Покушајте поново.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Изузетак при аутентификацији.',
    'Authentication credentials could not be found.' => 'Аутентификациони подаци нису пронађени.',
    'Authentication request could not be processed due to a system problem.' => 'Захтев за аутентификацију не може бити обрађен због системских проблема.',
    'Invalid credentials.' => 'Невалидни подаци за аутентификацију.',
    'Cookie has already been used by someone else.' => 'Колачић је већ искоришћен од стране неког другог.',
    'Not privileged to request the resource.' => 'Немате права приступа овом ресурсу.',
    'Invalid CSRF token.' => 'Невалидан CSRF токен.',
    'Digest nonce has expired.' => 'Време криптографског кључа је истекло.',
    'No authentication provider found to support the authentication token.' => 'Аутентификациони провајдер за подршку токена није пронађен.',
    'No session available, it either timed out or cookies are not enabled.' => 'Сесија није доступна, истекла је или су колачићи искључени.',
    'No token could be found.' => 'Токен не може бити пронађен.',
    'Username could not be found.' => 'Корисничко име не може бити пронађено.',
    'Account has expired.' => 'Налог је истекао.',
    'Credentials have expired.' => 'Подаци за аутентификацију су истекли.',
    'Account is disabled.' => 'Налог је онемогућен.',
    'Account is locked.' => 'Налог је закључан.',
  ),
));

$catalogueSr = new MessageCatalogue('sr', array (
));
$catalogue->addFallbackCatalogue($catalogueSr);
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
    'app.translator.test1.msg2' => NULL,
    'app.translator.test1.msg1' => 'Hello %name%',
    'app.translator.test1.msg3' => 'Hello %name%',
    'app.translator.index.msg2' => 'Hello msg2',
    'app.translator.index.msg1' => 'Hello msg1',
    'app.translator.index.msg3' => 'Hello msg3',
    'app.translator.test2.msg3' => '{0}There is no apple|{1}There is one apple|]1,Inf[There are a bunch of apples',
    'app.translator.test2.msg2' => '{0}There is no apple for %name%|{1}There is one apple for %name%|]1,Inf[There are a bunch of apples for %name%',
    'app.translator.test2.msg1' => '{0}There is no apples|{1}There is one apple|]1,Inf[There are many apples',
    'layout' => NULL,
    'app.security.login.login' => NULL,
  ),
));
$catalogueSr->addFallbackCatalogue($catalogueEn);

return $catalogue;
