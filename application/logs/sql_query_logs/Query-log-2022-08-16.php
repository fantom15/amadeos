-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'b441dc311cc1d65732e7c41463ea38cbbad829da' 
 Execution Time:0.00047707557678223

-------------------------------------
SELECT GET_LOCK('6fca165127085a5b108fd79897d630a7', 300) AS ci_session_lock 
 Execution Time:0.00019502639770508

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'b441dc311cc1d65732e7c41463ea38cbbad829da' 
 Execution Time:0.00025796890258789

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00057005882263184

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00051689147949219

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00076913833618164

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC 
 Execution Time:0.047006130218506

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC LIMIT 1, 1 
 Execution Time:0.0076439380645752

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00035905838012695

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.0002739429473877

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00022077560424805

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00017285346984863

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00014495849609375

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00014019012451172

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00013089179992676

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00015687942504883

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.0001828670501709

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00014090538024902

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00013613700866699

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00013494491577148

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00013303756713867

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00014400482177734

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'b441dc311cc1d65732e7c41463ea38cbbad829da' 
 Execution Time:0.00033712387084961

-------------------------------------
SELECT GET_LOCK('6fca165127085a5b108fd79897d630a7', 300) AS ci_session_lock 
 Execution Time:0.00017905235290527

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'b441dc311cc1d65732e7c41463ea38cbbad829da' 
 Execution Time:0.00024294853210449

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1660644112, `data` = '__ci_last_regenerate|i:1660644112;user_id|s:1:\"1\";email|s:20:\"fantom15dm@gmail.com\";'
WHERE `id` = 'b441dc311cc1d65732e7c41463ea38cbbad829da' 
 Execution Time:0.0010638236999512

-------------------------------------
SELECT RELEASE_LOCK('6fca165127085a5b108fd79897d630a7') AS ci_session_lock 
 Execution Time:0.00010800361633301

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '70401a6ae3ce4fabd5244696c299edf17963f41c' 
 Execution Time:0.00015902519226074

-------------------------------------
SELECT GET_LOCK('19f1d0266329dbc5f9038e762f2f3631', 300) AS ci_session_lock 
 Execution Time:9.7036361694336E-5

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '7d2a2fd136e9472d240a4186a9ef49a00c66f2ec' 
 Execution Time:0.00013279914855957

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00042486190795898

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00027322769165039

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00029397010803223

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC 
 Execution Time:0.050549030303955

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC LIMIT 1, 1 
 Execution Time:0.00730299949646

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00031399726867676

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00023913383483887

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00015592575073242

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00011920928955078

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00010490417480469

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010204315185547

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010085105895996

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00010991096496582

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00012707710266113

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00010395050048828

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:9.9897384643555E-5

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:9.7990036010742E-5

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:9.8943710327148E-5

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:9.3936920166016E-5

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '7d2a2fd136e9472d240a4186a9ef49a00c66f2ec' 
 Execution Time:0.00028014183044434

-------------------------------------
SELECT GET_LOCK('19f1d0266329dbc5f9038e762f2f3631', 300) AS ci_session_lock 
 Execution Time:0.00013113021850586

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '7d2a2fd136e9472d240a4186a9ef49a00c66f2ec' 
 Execution Time:0.00016212463378906

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00024986267089844

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00020194053649902

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00028109550476074

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC 
 Execution Time:0.032127857208252

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC LIMIT 1, 1 
 Execution Time:0.027046918869019

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00039792060852051

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00032401084899902

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00021910667419434

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00015783309936523

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00014615058898926

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00014305114746094

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00013399124145508

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00016212463378906

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00019311904907227

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00014591217041016

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.0001370906829834

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00013613700866699

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00012803077697754

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00013399124145508

