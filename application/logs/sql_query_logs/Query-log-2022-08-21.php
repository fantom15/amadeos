-------------------------------------
SELECT GET_LOCK('e070e90a03d669bf52c7bb2be075a202', 300) AS ci_session_lock 
 Execution Time:0.21554279327393

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '39b28e8d489fc0ef24eba4a7ea54b819872892b1' 
 Execution Time:0.066750049591064

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '39b28e8d489fc0ef24eba4a7ea54b819872892b1' 
 Execution Time:0.00032305717468262

-------------------------------------
SELECT GET_LOCK('e070e90a03d669bf52c7bb2be075a202', 300) AS ci_session_lock 
 Execution Time:0.00020599365234375

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '39b28e8d489fc0ef24eba4a7ea54b819872892b1' 
 Execution Time:0.00022101402282715

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00075507164001465

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.064394950866699

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.016122102737427

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00046014785766602

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00022792816162109

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00017714500427246

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00015783309936523

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00015401840209961

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00016689300537109

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00012302398681641

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00010895729064941

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00011086463928223

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00011610984802246

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010800361633301

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '39b28e8d489fc0ef24eba4a7ea54b819872892b1' 
 Execution Time:0.00037002563476562

-------------------------------------
SELECT GET_LOCK('e070e90a03d669bf52c7bb2be075a202', 300) AS ci_session_lock 
 Execution Time:0.00014090538024902

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '39b28e8d489fc0ef24eba4a7ea54b819872892b1' 
 Execution Time:0.00020599365234375

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00027203559875488

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.0002739429473877

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.018190145492554

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC 
 Execution Time:0.10129189491272

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC LIMIT 1, 0 
 Execution Time:0.0062799453735352

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00034379959106445

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00025105476379395

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00021100044250488

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00017499923706055

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00014901161193848

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.0001530647277832

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00013494491577148

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00015997886657715

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00018692016601562

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00014305114746094

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00014185905456543

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00028610229492188

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00022792816162109

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.000244140625

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '39b28e8d489fc0ef24eba4a7ea54b819872892b1' 
 Execution Time:0.00032901763916016

-------------------------------------
SELECT GET_LOCK('e070e90a03d669bf52c7bb2be075a202', 300) AS ci_session_lock 
 Execution Time:0.0001981258392334

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '39b28e8d489fc0ef24eba4a7ea54b819872892b1' 
 Execution Time:0.00025010108947754

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00037503242492676

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00042009353637695

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.0032191276550293

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC 
 Execution Time:0.0640709400177

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC LIMIT 1, 1 
 Execution Time:0.0082149505615234

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0002601146697998

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00021100044250488

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00024795532226562

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00040197372436523

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00026822090148926

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00023317337036133

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00016689300537109

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00016307830810547

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00015592575073242

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00011086463928223

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.0001060962677002

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00010299682617188

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:9.7036361694336E-5

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010180473327637

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '39b28e8d489fc0ef24eba4a7ea54b819872892b1' 
 Execution Time:0.00046300888061523

-------------------------------------
SELECT GET_LOCK('e070e90a03d669bf52c7bb2be075a202', 300) AS ci_session_lock 
 Execution Time:0.00022006034851074

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '39b28e8d489fc0ef24eba4a7ea54b819872892b1' 
 Execution Time:0.0003960132598877

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00049400329589844

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00028896331787109

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00037407875061035

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC 
 Execution Time:0.0063779354095459

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC LIMIT 1, 0 
 Execution Time:0.0064170360565186

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00029087066650391

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00028109550476074

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00018811225891113

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00017189979553223

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00022697448730469

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00026893615722656

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00011801719665527

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00012803077697754

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00015401840209961

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00011181831359863

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00010418891906738

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00010204315185547

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:9.7036361694336E-5

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010299682617188

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '39b28e8d489fc0ef24eba4a7ea54b819872892b1' 
 Execution Time:0.00034594535827637

-------------------------------------
SELECT GET_LOCK('e070e90a03d669bf52c7bb2be075a202', 300) AS ci_session_lock 
 Execution Time:0.00013995170593262

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '39b28e8d489fc0ef24eba4a7ea54b819872892b1' 
 Execution Time:0.00027084350585938

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00040984153747559

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00030303001403809

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00033092498779297

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC 
 Execution Time:0.0085868835449219

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC LIMIT 1, 1 
 Execution Time:0.0066959857940674

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00026082992553711

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00024700164794922

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00053596496582031

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00073409080505371

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00044798851013184

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.0005180835723877

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.0003809928894043

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00032997131347656

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00032401084899902

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00033116340637207

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00013208389282227

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00010991096496582

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:9.9897384643555E-5

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.0001070499420166

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '39b28e8d489fc0ef24eba4a7ea54b819872892b1' 
 Execution Time:0.0002739429473877

-------------------------------------
SELECT GET_LOCK('e070e90a03d669bf52c7bb2be075a202', 300) AS ci_session_lock 
 Execution Time:0.00018405914306641

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '39b28e8d489fc0ef24eba4a7ea54b819872892b1' 
 Execution Time:0.00024008750915527

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00037693977355957

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00026702880859375

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00073599815368652

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC 
 Execution Time:0.0079538822174072

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC LIMIT 1, 2 
 Execution Time:0.0085771083831787

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00081300735473633

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00076007843017578

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.0069489479064941

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00034689903259277

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.0002601146697998

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00034594535827637

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00027585029602051

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00028491020202637

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00029301643371582

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.0002591609954834

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00023388862609863

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00019383430480957

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00019407272338867

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00020718574523926

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '39b28e8d489fc0ef24eba4a7ea54b819872892b1' 
 Execution Time:0.00030207633972168

-------------------------------------
SELECT GET_LOCK('e070e90a03d669bf52c7bb2be075a202', 300) AS ci_session_lock 
 Execution Time:0.00014591217041016

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '39b28e8d489fc0ef24eba4a7ea54b819872892b1' 
 Execution Time:0.00022602081298828

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1661066000, `data` = '__ci_last_regenerate|i:1661066000;user_id|s:1:\"1\";email|s:20:\"fantom15dm@gmail.com\";'
WHERE `id` = '39b28e8d489fc0ef24eba4a7ea54b819872892b1' 
 Execution Time:0.0010678768157959

-------------------------------------
SELECT RELEASE_LOCK('e070e90a03d669bf52c7bb2be075a202') AS ci_session_lock 
 Execution Time:0.00012516975402832

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '7ca3db4098bf65ed602efb2c916ff2cb2b0e2dee' 
 Execution Time:0.00025701522827148

-------------------------------------
SELECT GET_LOCK('2ab7630d47f1a9d8d74f52c08e4ff843', 300) AS ci_session_lock 
 Execution Time:0.00014996528625488

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'fa8332d63dbfb6acd4c26db27370fcf549a4943b' 
 Execution Time:0.0097730159759521

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00029516220092773

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'users' 
 Execution Time:0.0001978874206543

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '2' 
 Execution Time:0.00027203559875488

-------------------------------------
SELECT COUNT(*) AS `numrows` FROM `users` 
 Execution Time:0.00013995170593262

-------------------------------------
SELECT *
FROM `users`
 LIMIT 20 
 Execution Time:0.00019001960754395

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00029420852661133

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00023412704467773

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00015902519226074

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00014400482177734

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00014615058898926

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00021195411682129

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00021791458129883

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00022101402282715

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00019288063049316

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00014591217041016

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00013184547424316

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00012993812561035

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00012993812561035

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00023818016052246

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'fa8332d63dbfb6acd4c26db27370fcf549a4943b' 
 Execution Time:0.00033092498779297

-------------------------------------
SELECT GET_LOCK('2ab7630d47f1a9d8d74f52c08e4ff843', 300) AS ci_session_lock 
 Execution Time:0.0001380443572998

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'fa8332d63dbfb6acd4c26db27370fcf549a4943b' 
 Execution Time:0.00016593933105469

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00026583671569824

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'users' 
 Execution Time:0.00019097328186035

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '2' 
 Execution Time:0.00028109550476074

-------------------------------------
SELECT COUNT(*) AS `numrows` FROM `users` 
 Execution Time:0.00013208389282227

-------------------------------------
SELECT *
FROM `users`
 LIMIT 1 
 Execution Time:0.00013995170593262

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00014805793762207

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00015997886657715

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00012111663818359

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00010895729064941

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00010204315185547

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010490417480469

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.0001060962677002

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00011801719665527

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00013494491577148

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00010919570922852

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00010395050048828

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00010490417480469

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

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'fa8332d63dbfb6acd4c26db27370fcf549a4943b' 
 Execution Time:0.00031709671020508

-------------------------------------
SELECT GET_LOCK('2ab7630d47f1a9d8d74f52c08e4ff843', 300) AS ci_session_lock 
 Execution Time:0.0001678466796875

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'fa8332d63dbfb6acd4c26db27370fcf549a4943b' 
 Execution Time:0.00020718574523926

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0061061382293701

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'users' 
 Execution Time:0.0014078617095947

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '2' 
 Execution Time:0.00049209594726562

-------------------------------------
SELECT COUNT(*) AS `numrows` FROM `users` 
 Execution Time:0.00053286552429199

-------------------------------------
SELECT *
FROM `users`
 LIMIT 1, 1 
 Execution Time:0.00045013427734375

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00029897689819336

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00020480155944824

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00019502639770508

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00017690658569336

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00014400482177734

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00012397766113281

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00011014938354492

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00012588500976562

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00014281272888184

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00011014938354492

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00010204315185547

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00010514259338379

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010418891906738

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00012302398681641

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'fa8332d63dbfb6acd4c26db27370fcf549a4943b' 
 Execution Time:0.00033402442932129

-------------------------------------
SELECT GET_LOCK('2ab7630d47f1a9d8d74f52c08e4ff843', 300) AS ci_session_lock 
 Execution Time:0.00049281120300293

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'fa8332d63dbfb6acd4c26db27370fcf549a4943b' 
 Execution Time:0.00032711029052734

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00041103363037109

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'users' 
 Execution Time:0.00030016899108887

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '2' 
 Execution Time:0.00040602684020996

-------------------------------------
SELECT COUNT(*) AS `numrows` FROM `users` 
 Execution Time:0.00020003318786621

-------------------------------------
SELECT *
FROM `users`
 LIMIT 1 
 Execution Time:0.0003659725189209

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00036001205444336

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00096917152404785

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00031280517578125

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00024700164794922

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00051188468933105

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.0024318695068359

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00042200088500977

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00039196014404297

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00037407875061035

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00029897689819336

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00024104118347168

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.0002140998840332

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00020909309387207

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00023984909057617

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'fa8332d63dbfb6acd4c26db27370fcf549a4943b' 
 Execution Time:0.00031185150146484

-------------------------------------
SELECT GET_LOCK('2ab7630d47f1a9d8d74f52c08e4ff843', 300) AS ci_session_lock 
 Execution Time:0.00027298927307129

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'fa8332d63dbfb6acd4c26db27370fcf549a4943b' 
 Execution Time:0.00023484230041504

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00035595893859863

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00024509429931641

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00034809112548828

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC 
 Execution Time:0.069391965866089

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC LIMIT 1, 0 
 Execution Time:0.0064141750335693

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00025105476379395

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00019717216491699

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00017213821411133

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00011706352233887

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.0001070499420166

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010299682617188

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:9.7036361694336E-5

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00011610984802246

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00013494491577148

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00010299682617188

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00010991096496582

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00010108947753906

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:9.608268737793E-5

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:9.8943710327148E-5

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'fa8332d63dbfb6acd4c26db27370fcf549a4943b' 
 Execution Time:0.00031089782714844

-------------------------------------
SELECT GET_LOCK('2ab7630d47f1a9d8d74f52c08e4ff843', 300) AS ci_session_lock 
 Execution Time:0.0001368522644043

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'fa8332d63dbfb6acd4c26db27370fcf549a4943b' 
 Execution Time:0.00023388862609863

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00042510032653809

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'users' 
 Execution Time:0.00024914741516113

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '2' 
 Execution Time:0.00058102607727051

-------------------------------------
SELECT COUNT(*) AS `numrows` FROM `users` 
 Execution Time:0.00029492378234863

-------------------------------------
SELECT *
FROM `users`
 LIMIT 20 
 Execution Time:0.00022292137145996

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00025391578674316

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00020217895507812

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00015091896057129

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00020098686218262

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00016307830810547

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00022101402282715

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00017404556274414

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00016498565673828

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00020599365234375

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00018692016601562

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00014901161193848

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00014996528625488

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00013899803161621

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00014686584472656

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'fa8332d63dbfb6acd4c26db27370fcf549a4943b' 
 Execution Time:0.00043702125549316

-------------------------------------
SELECT GET_LOCK('2ab7630d47f1a9d8d74f52c08e4ff843', 300) AS ci_session_lock 
 Execution Time:0.00013494491577148

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'fa8332d63dbfb6acd4c26db27370fcf549a4943b' 
 Execution Time:0.00017499923706055

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00028395652770996

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'users' 
 Execution Time:0.00017404556274414

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '2' 
 Execution Time:0.00056600570678711

-------------------------------------
SELECT COUNT(*) AS `numrows` FROM `users` 
 Execution Time:0.00027894973754883

-------------------------------------
SELECT *
FROM `users`
 LIMIT 20 
 Execution Time:0.00025510787963867

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00015902519226074

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00039100646972656

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00020503997802734

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00018501281738281

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00018095970153809

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00017690658569336

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.0001671314239502

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00019693374633789

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00021791458129883

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00017809867858887

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00017404556274414

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00017285346984863

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00016498565673828

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00017404556274414

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'fa8332d63dbfb6acd4c26db27370fcf549a4943b' 
 Execution Time:0.00030183792114258

-------------------------------------
SELECT GET_LOCK('2ab7630d47f1a9d8d74f52c08e4ff843', 300) AS ci_session_lock 
 Execution Time:0.00019097328186035

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'fa8332d63dbfb6acd4c26db27370fcf549a4943b' 
 Execution Time:0.00031805038452148

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0002899169921875

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00019192695617676

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00027990341186523

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC 
 Execution Time:0.053868770599365

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC LIMIT 1, 0 
 Execution Time:0.0071420669555664

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00040483474731445

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00025296211242676

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00018811225891113

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00014090538024902

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00016999244689941

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00017595291137695

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00016903877258301

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00018000602722168

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00018692016601562

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00014686584472656

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.0001380443572998

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00014090538024902

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00013208389282227

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.0001370906829834

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'fa8332d63dbfb6acd4c26db27370fcf549a4943b' 
 Execution Time:0.00061511993408203

-------------------------------------
SELECT GET_LOCK('2ab7630d47f1a9d8d74f52c08e4ff843', 300) AS ci_session_lock 
 Execution Time:0.00018811225891113

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'fa8332d63dbfb6acd4c26db27370fcf549a4943b' 
 Execution Time:0.00026297569274902

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00028419494628906

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'users' 
 Execution Time:0.00020098686218262

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '2' 
 Execution Time:0.00030517578125

-------------------------------------
SELECT COUNT(*) AS `numrows` FROM `users` 
 Execution Time:0.00013399124145508

-------------------------------------
SELECT *
FROM `users`
 LIMIT 1 
 Execution Time:0.00013494491577148

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00014495849609375

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.0001521110534668

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00011801719665527

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00010800361633301

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00010108947753906

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010418891906738

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010514259338379

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00011706352233887

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00012898445129395

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.0001060962677002

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00010013580322266

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00010418891906738

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010395050048828

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010395050048828

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'fa8332d63dbfb6acd4c26db27370fcf549a4943b' 
 Execution Time:0.00081706047058105

-------------------------------------
SELECT GET_LOCK('2ab7630d47f1a9d8d74f52c08e4ff843', 300) AS ci_session_lock 
 Execution Time:0.00021815299987793

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'fa8332d63dbfb6acd4c26db27370fcf549a4943b' 
 Execution Time:0.00024700164794922

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00037312507629395

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'users' 
 Execution Time:0.00025582313537598

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '2' 
 Execution Time:0.00035500526428223

-------------------------------------
SELECT COUNT(*) AS `numrows` FROM `users` 
 Execution Time:0.0001518726348877

-------------------------------------
SELECT *
FROM `users`
 LIMIT 1, 1 
 Execution Time:0.00024700164794922

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0001990795135498

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00016283988952637

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00012397766113281

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00010800361633301

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00011086463928223

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010585784912109

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010395050048828

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00012612342834473

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00013303756713867

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00010776519775391

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00015997886657715

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00011706352233887

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.0001060962677002

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010514259338379

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'fa8332d63dbfb6acd4c26db27370fcf549a4943b' 
 Execution Time:0.00037693977355957

-------------------------------------
SELECT GET_LOCK('2ab7630d47f1a9d8d74f52c08e4ff843', 300) AS ci_session_lock 
 Execution Time:0.00035285949707031

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'fa8332d63dbfb6acd4c26db27370fcf549a4943b' 
 Execution Time:0.00038599967956543

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00035285949707031

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'users' 
 Execution Time:0.00022387504577637

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '2' 
 Execution Time:0.00029110908508301

-------------------------------------
SELECT COUNT(*) AS `numrows` FROM `users` 
 Execution Time:0.00011992454528809

-------------------------------------
SELECT *
FROM `users`
 LIMIT 2, 1 
 Execution Time:0.00014591217041016

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0001521110534668

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00015401840209961

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.0001220703125

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00011897087097168

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00010395050048828

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.0001060962677002

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010514259338379

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00011897087097168

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00012993812561035

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00010800361633301

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00010085105895996

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00010395050048828

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010395050048828

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010395050048828

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'fa8332d63dbfb6acd4c26db27370fcf549a4943b' 
 Execution Time:0.0003809928894043

-------------------------------------
SELECT GET_LOCK('2ab7630d47f1a9d8d74f52c08e4ff843', 300) AS ci_session_lock 
 Execution Time:0.00017905235290527

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'fa8332d63dbfb6acd4c26db27370fcf549a4943b' 
 Execution Time:0.00020909309387207

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1661066609, `data` = '__ci_last_regenerate|i:1661066609;user_id|s:1:\"1\";email|s:20:\"fantom15dm@gmail.com\";'
WHERE `id` = 'fa8332d63dbfb6acd4c26db27370fcf549a4943b' 
 Execution Time:0.039348125457764

-------------------------------------
SELECT RELEASE_LOCK('2ab7630d47f1a9d8d74f52c08e4ff843') AS ci_session_lock 
 Execution Time:0.00020599365234375

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '469f449921b892cf76f48a75b097dff69bbf06ad' 
 Execution Time:0.015574932098389

-------------------------------------
SELECT GET_LOCK('540aaa261429d69189a8aaa4034f3af3', 300) AS ci_session_lock 
 Execution Time:0.00021004676818848

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '74eef568970e6ebcbdbd221d65be0e009e765dc2' 
 Execution Time:0.00040888786315918

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00047898292541504

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00031709671020508

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00069284439086914

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC 
 Execution Time:0.044168949127197

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC LIMIT 0, 1 
 Execution Time:0.0069091320037842

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00026988983154297

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00022101402282715

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00018596649169922

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00015783309936523

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00012493133544922

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00011801719665527

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00011587142944336

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00012803077697754

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00015616416931152

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00011897087097168

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00010895729064941

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:9.8943710327148E-5

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010013580322266

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:9.8943710327148E-5

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '74eef568970e6ebcbdbd221d65be0e009e765dc2' 
 Execution Time:0.00030684471130371

-------------------------------------
SELECT GET_LOCK('540aaa261429d69189a8aaa4034f3af3', 300) AS ci_session_lock 
 Execution Time:0.00016498565673828

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '74eef568970e6ebcbdbd221d65be0e009e765dc2' 
 Execution Time:0.00017690658569336

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00023603439331055

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00019598007202148

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00027608871459961

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC 
 Execution Time:0.0083088874816895

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC LIMIT 1, 1 
 Execution Time:0.0080149173736572

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00025486946105957

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00019598007202148

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00016903877258301

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00011491775512695

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00010490417480469

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010180473327637

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:9.5129013061523E-5

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00011610984802246

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00013303756713867

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00010299682617188

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00011014938354492

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:9.7990036010742E-5

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:9.2983245849609E-5

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:9.8228454589844E-5

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '74eef568970e6ebcbdbd221d65be0e009e765dc2' 
 Execution Time:0.00033092498779297

-------------------------------------
SELECT GET_LOCK('540aaa261429d69189a8aaa4034f3af3', 300) AS ci_session_lock 
 Execution Time:0.0002129077911377

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '74eef568970e6ebcbdbd221d65be0e009e765dc2' 
 Execution Time:0.00045585632324219

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00066399574279785

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00030994415283203

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00045990943908691

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC 
 Execution Time:0.056507110595703

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC LIMIT 2, 1 
 Execution Time:0.0092189311981201

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00027108192443848

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00022411346435547

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00015902519226074

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00014519691467285

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00010895729064941

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:9.8943710327148E-5

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010108947753906

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00011897087097168

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00013399124145508

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00010395050048828

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00010085105895996

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:9.3936920166016E-5

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:9.7990036010742E-5

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:9.8943710327148E-5

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '74eef568970e6ebcbdbd221d65be0e009e765dc2' 
 Execution Time:0.00030612945556641

-------------------------------------
SELECT GET_LOCK('540aaa261429d69189a8aaa4034f3af3', 300) AS ci_session_lock 
 Execution Time:0.00018501281738281

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '74eef568970e6ebcbdbd221d65be0e009e765dc2' 
 Execution Time:0.00023293495178223

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00028800964355469

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00022101402282715

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00026392936706543

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC 
 Execution Time:0.070302963256836

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC LIMIT 3, 1 
 Execution Time:0.24106907844543

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00031805038452148

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00023984909057617

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00022292137145996

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00018906593322754

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00015783309936523

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.0001368522644043

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00014114379882812

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00016093254089355

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00024104118347168

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00022602081298828

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00016617774963379

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00014495849609375

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00014686584472656

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00014400482177734

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '74eef568970e6ebcbdbd221d65be0e009e765dc2' 
 Execution Time:0.00032520294189453

-------------------------------------
SELECT GET_LOCK('540aaa261429d69189a8aaa4034f3af3', 300) AS ci_session_lock 
 Execution Time:0.00018000602722168

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '74eef568970e6ebcbdbd221d65be0e009e765dc2' 
 Execution Time:0.00038504600524902

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00042986869812012

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00027799606323242

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00045609474182129

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC 
 Execution Time:0.064866065979004

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC LIMIT 1, 1 
 Execution Time:0.0093650817871094

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0002598762512207

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00019598007202148

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00018095970153809

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00011610984802246

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00019288063049316

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00019502639770508

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00011301040649414

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00012707710266113

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00015115737915039

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00010919570922852

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00010299682617188

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00010204315185547

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:9.6797943115234E-5

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:9.9897384643555E-5

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '74eef568970e6ebcbdbd221d65be0e009e765dc2' 
 Execution Time:0.00031614303588867

-------------------------------------
SELECT GET_LOCK('540aaa261429d69189a8aaa4034f3af3', 300) AS ci_session_lock 
 Execution Time:0.002065896987915

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '74eef568970e6ebcbdbd221d65be0e009e765dc2' 
 Execution Time:0.00023818016052246

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0011210441589355

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.0020699501037598

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.0014920234680176

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC 
 Execution Time:0.0082879066467285

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC LIMIT 0, 1 
 Execution Time:0.0099859237670898

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00040984153747559

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00036287307739258

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00019598007202148

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00017690658569336

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00016188621520996

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00017380714416504

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00015902519226074

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00018000602722168

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00019502639770508

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00016117095947266

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00014495849609375

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00014710426330566

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00014805793762207

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00014400482177734

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '74eef568970e6ebcbdbd221d65be0e009e765dc2' 
 Execution Time:0.00031900405883789

-------------------------------------
SELECT GET_LOCK('540aaa261429d69189a8aaa4034f3af3', 300) AS ci_session_lock 
 Execution Time:0.00017690658569336

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '74eef568970e6ebcbdbd221d65be0e009e765dc2' 
 Execution Time:0.0017669200897217

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00060105323791504

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00031805038452148

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.0004279613494873

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC 
 Execution Time:0.058909893035889

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC LIMIT 1, 1 
 Execution Time:0.0086541175842285

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00031590461730957

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00021791458129883

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00018811225891113

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00021004676818848

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00017213821411133

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00015497207641602

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00014495849609375

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00016188621520996

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00018095970153809

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00013995170593262

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00013613700866699

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00013589859008789

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00016498565673828

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00015997886657715

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '74eef568970e6ebcbdbd221d65be0e009e765dc2' 
 Execution Time:0.00098991394042969

-------------------------------------
SELECT GET_LOCK('540aaa261429d69189a8aaa4034f3af3', 300) AS ci_session_lock 
 Execution Time:0.00042200088500977

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '74eef568970e6ebcbdbd221d65be0e009e765dc2' 
 Execution Time:0.00054693222045898

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00062799453735352

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00028610229492188

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00041913986206055

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC 
 Execution Time:0.01124906539917

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC LIMIT 2, 1 
 Execution Time:0.0093128681182861

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00036215782165527

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00035595893859863

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00023102760314941

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00060820579528809

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.0010271072387695

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00099396705627441

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00029420852661133

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00050687789916992

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00069093704223633

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00039005279541016

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00030684471130371

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00023603439331055

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00025296211242676

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.0001981258392334

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '74eef568970e6ebcbdbd221d65be0e009e765dc2' 
 Execution Time:0.00032997131347656

-------------------------------------
SELECT GET_LOCK('540aaa261429d69189a8aaa4034f3af3', 300) AS ci_session_lock 
 Execution Time:0.00015902519226074

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '74eef568970e6ebcbdbd221d65be0e009e765dc2' 
 Execution Time:0.00019097328186035

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0003049373626709

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00021505355834961

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00029182434082031

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC 
 Execution Time:0.062364101409912

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC LIMIT 3, 1 
 Execution Time:0.0076870918273926

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00027012825012207

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00019693374633789

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00014805793762207

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00013089179992676

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00012779235839844

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00011897087097168

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00012612342834473

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00014400482177734

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00015687942504883

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00012898445129395

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00012516975402832

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00011992454528809

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00012397766113281

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00012397766113281

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '74eef568970e6ebcbdbd221d65be0e009e765dc2' 
 Execution Time:0.00033402442932129

-------------------------------------
SELECT GET_LOCK('540aaa261429d69189a8aaa4034f3af3', 300) AS ci_session_lock 
 Execution Time:0.00020098686218262

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '74eef568970e6ebcbdbd221d65be0e009e765dc2' 
 Execution Time:0.00025606155395508

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00041794776916504

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00036191940307617

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.0005190372467041

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC 
 Execution Time:0.062888860702515

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC LIMIT 2, 1 
 Execution Time:0.006382942199707

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00025606155395508

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00024604797363281

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00017404556274414

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00013899803161621

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00018000602722168

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.0001368522644043

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.0001368522644043

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00015497207641602

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00016903877258301

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00017499923706055

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00019407272338867

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00014901161193848

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00013899803161621

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00017881393432617

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '74eef568970e6ebcbdbd221d65be0e009e765dc2' 
 Execution Time:0.00056695938110352

-------------------------------------
SELECT GET_LOCK('540aaa261429d69189a8aaa4034f3af3', 300) AS ci_session_lock 
 Execution Time:0.00071096420288086

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '74eef568970e6ebcbdbd221d65be0e009e765dc2' 
 Execution Time:0.00043702125549316

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00037503242492676

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00024509429931641

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00035905838012695

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC 
 Execution Time:0.18154692649841

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC LIMIT 1, 1 
 Execution Time:0.0066819190979004

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00024795532226562

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00021100044250488

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00016903877258301

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00014495849609375

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00015401840209961

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00019192695617676

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00013494491577148

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00019121170043945

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00023603439331055

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00018000602722168

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00013613700866699

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00013303756713867

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00012302398681641

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00012898445129395

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '74eef568970e6ebcbdbd221d65be0e009e765dc2' 
 Execution Time:0.00045394897460938

-------------------------------------
SELECT GET_LOCK('540aaa261429d69189a8aaa4034f3af3', 300) AS ci_session_lock 
 Execution Time:0.00012803077697754

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '74eef568970e6ebcbdbd221d65be0e009e765dc2' 
 Execution Time:0.00016498565673828

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.000244140625

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00018310546875

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00025415420532227

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC 
 Execution Time:0.0089068412780762

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC LIMIT 0, 1 
 Execution Time:0.0086350440979004

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00040578842163086

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00043511390686035

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00035905838012695

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00062894821166992

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00035190582275391

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00038909912109375

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00028204917907715

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00025701522827148

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00025391578674316

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00023794174194336

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00021910667419434

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00016903877258301

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00013399124145508

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00012612342834473

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '74eef568970e6ebcbdbd221d65be0e009e765dc2' 
 Execution Time:0.00032782554626465

-------------------------------------
SELECT GET_LOCK('540aaa261429d69189a8aaa4034f3af3', 300) AS ci_session_lock 
 Execution Time:0.00020694732666016

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '74eef568970e6ebcbdbd221d65be0e009e765dc2' 
 Execution Time:0.00060510635375977

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00064706802368164

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00050520896911621

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.001255989074707

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC 
 Execution Time:0.0085759162902832

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC LIMIT 1, 1 
 Execution Time:0.0083930492401123

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00033402442932129

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00030612945556641

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00023102760314941

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00028204917907715

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00022196769714355

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00019383430480957

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00018215179443359

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00021815299987793

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00023913383483887

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00018692016601562

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00017905235290527

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00018000602722168

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00017595291137695

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00018787384033203

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '74eef568970e6ebcbdbd221d65be0e009e765dc2' 
 Execution Time:0.0003809928894043

-------------------------------------
SELECT GET_LOCK('540aaa261429d69189a8aaa4034f3af3', 300) AS ci_session_lock 
 Execution Time:0.00015807151794434

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '74eef568970e6ebcbdbd221d65be0e009e765dc2' 
 Execution Time:0.00018978118896484

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00024199485778809

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00019693374633789

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.0002739429473877

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC 
 Execution Time:0.059439897537231

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC LIMIT 0, 2 
 Execution Time:0.006868839263916

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00022792816162109

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00019979476928711

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.0001678466796875

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.0001680850982666

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00012993812561035

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010299682617188

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010085105895996

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00011205673217773

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00013089179992676

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00010180473327637

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:9.9897384643555E-5

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:9.8943710327148E-5

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:9.8943710327148E-5

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:9.918212890625E-5

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '74eef568970e6ebcbdbd221d65be0e009e765dc2' 
 Execution Time:0.00035595893859863

-------------------------------------
SELECT GET_LOCK('540aaa261429d69189a8aaa4034f3af3', 300) AS ci_session_lock 
 Execution Time:0.00054001808166504

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '74eef568970e6ebcbdbd221d65be0e009e765dc2' 
 Execution Time:0.00058388710021973

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0003969669342041

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00022101402282715

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00027108192443848

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC 
 Execution Time:0.058120012283325

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC LIMIT 2, 2 
 Execution Time:0.0072131156921387

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00025796890258789

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00022101402282715

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00016307830810547

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00014901161193848

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00010800361633301

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010514259338379

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010299682617188

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00012302398681641

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00013995170593262

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00010919570922852

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:9.7036361694336E-5

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00010108947753906

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010085105895996

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:9.9897384643555E-5

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '74eef568970e6ebcbdbd221d65be0e009e765dc2' 
 Execution Time:0.00034093856811523

-------------------------------------
SELECT GET_LOCK('540aaa261429d69189a8aaa4034f3af3', 300) AS ci_session_lock 
 Execution Time:0.00020813941955566

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '74eef568970e6ebcbdbd221d65be0e009e765dc2' 
 Execution Time:0.0002601146697998

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00035285949707031

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00026512145996094

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00030684471130371

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC 
 Execution Time:0.053371906280518

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC LIMIT 0, 2 
 Execution Time:0.0076849460601807

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00025510787963867

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00022101402282715

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00015687942504883

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00012087821960449

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00010800361633301

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010299682617188

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010395050048828

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00011610984802246

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00014281272888184

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00010585784912109

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00010108947753906

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:9.918212890625E-5

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010013580322266

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:9.8943710327148E-5

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '74eef568970e6ebcbdbd221d65be0e009e765dc2' 
 Execution Time:0.0017671585083008

-------------------------------------
SELECT GET_LOCK('540aaa261429d69189a8aaa4034f3af3', 300) AS ci_session_lock 
 Execution Time:0.00031518936157227

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '74eef568970e6ebcbdbd221d65be0e009e765dc2' 
 Execution Time:0.00043106079101562

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00047087669372559

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.0003058910369873

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00043988227844238

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC 
 Execution Time:0.060039043426514

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC LIMIT 2, 2 
 Execution Time:0.0082318782806396

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00027108192443848

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.0002140998840332

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00017499923706055

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00016403198242188

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00012087821960449

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00011897087097168

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00011801719665527

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00013399124145508

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00015091896057129

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00011801719665527

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00010895729064941

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00011205673217773

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00011277198791504

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00011396408081055

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '74eef568970e6ebcbdbd221d65be0e009e765dc2' 
 Execution Time:0.0027940273284912

-------------------------------------
SELECT GET_LOCK('540aaa261429d69189a8aaa4034f3af3', 300) AS ci_session_lock 
 Execution Time:0.00030016899108887

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '74eef568970e6ebcbdbd221d65be0e009e765dc2' 
 Execution Time:0.00035715103149414

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0004119873046875

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00028514862060547

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.0003819465637207

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC 
 Execution Time:0.012060880661011

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC LIMIT 0, 2 
 Execution Time:0.0076961517333984

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00028109550476074

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.0001981258392334

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00015497207641602

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00014400482177734

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00014185905456543

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00014090538024902

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00014996528625488

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00019598007202148

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00020790100097656

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00014305114746094

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00019097328186035

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00025796890258789

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00037717819213867

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.0013132095336914

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '74eef568970e6ebcbdbd221d65be0e009e765dc2' 
 Execution Time:0.00027799606323242

-------------------------------------
SELECT GET_LOCK('540aaa261429d69189a8aaa4034f3af3', 300) AS ci_session_lock 
 Execution Time:0.00016188621520996

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '74eef568970e6ebcbdbd221d65be0e009e765dc2' 
 Execution Time:0.00028491020202637

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00036501884460449

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.0002288818359375

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00028181076049805

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC 
 Execution Time:0.0064971446990967

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC LIMIT 0, 2 
 Execution Time:0.0064239501953125

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00023198127746582

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00018501281738281

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00014710426330566

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00014185905456543

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00011110305786133

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00018596649169922

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00020909309387207

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00017094612121582

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00020289421081543

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00015091896057129

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00014901161193848

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00014495849609375

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.0001380443572998

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00014185905456543

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '74eef568970e6ebcbdbd221d65be0e009e765dc2' 
 Execution Time:0.00035691261291504

-------------------------------------
SELECT GET_LOCK('540aaa261429d69189a8aaa4034f3af3', 300) AS ci_session_lock 
 Execution Time:0.00028586387634277

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '74eef568970e6ebcbdbd221d65be0e009e765dc2' 
 Execution Time:0.00044798851013184

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00030398368835449

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'users' 
 Execution Time:0.00018501281738281

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '2' 
 Execution Time:0.00028800964355469

-------------------------------------
SELECT COUNT(*) AS `numrows` FROM `users` 
 Execution Time:0.00013303756713867

-------------------------------------
SELECT *
FROM `users`
 LIMIT 20 
 Execution Time:0.00016307830810547

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00015115737915039

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00014805793762207

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00012087821960449

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00010800361633301

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00010800361633301

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00011610984802246

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00021600723266602

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00017905235290527

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00032496452331543

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00019001960754395

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00015592575073242

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00014901161193848

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00013613700866699

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00014901161193848

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '74eef568970e6ebcbdbd221d65be0e009e765dc2' 
 Execution Time:0.00036787986755371

-------------------------------------
SELECT GET_LOCK('540aaa261429d69189a8aaa4034f3af3', 300) AS ci_session_lock 
 Execution Time:0.00040602684020996

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '74eef568970e6ebcbdbd221d65be0e009e765dc2' 
 Execution Time:0.0002601146697998

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00032496452331543

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00028800964355469

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00039100646972656

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC 
 Execution Time:0.1030068397522

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC LIMIT 0, 2 
 Execution Time:0.0073530673980713

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00037002563476562

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00034904479980469

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00029897689819336

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00021600723266602

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00016307830810547

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00015091896057129

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00015091896057129

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00014305114746094

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00032591819763184

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.0002448558807373

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00017595291137695

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00014996528625488

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00012803077697754

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00012588500976562

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '74eef568970e6ebcbdbd221d65be0e009e765dc2' 
 Execution Time:0.00035786628723145

-------------------------------------
SELECT GET_LOCK('540aaa261429d69189a8aaa4034f3af3', 300) AS ci_session_lock 
 Execution Time:0.00030899047851562

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '74eef568970e6ebcbdbd221d65be0e009e765dc2' 
 Execution Time:0.00027108192443848

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1661068397, `data` = '__ci_last_regenerate|i:1661068397;user_id|s:1:\"1\";email|s:20:\"fantom15dm@gmail.com\";'
WHERE `id` = '74eef568970e6ebcbdbd221d65be0e009e765dc2' 
 Execution Time:0.09720778465271

-------------------------------------
SELECT RELEASE_LOCK('540aaa261429d69189a8aaa4034f3af3') AS ci_session_lock 
 Execution Time:0.00013613700866699

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'bd2fe5b2d6a1d52dc3e44daed454c82822900c0d' 
 Execution Time:0.00020599365234375

-------------------------------------
SELECT GET_LOCK('fb1cdd5a733aef52b397b9805245ea8e', 300) AS ci_session_lock 
 Execution Time:0.0001218318939209

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '27555eba678284cbcda561ef327a83bd58078785' 
 Execution Time:0.00025296211242676

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00058507919311523

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00027704238891602

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00038409233093262

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC 
 Execution Time:0.2055139541626

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC LIMIT 0, 20 
 Execution Time:0.063135147094727

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00050783157348633

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00031614303588867

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.0002589225769043

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00028681755065918

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.0003349781036377

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00027084350585938

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00022792816162109

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00029993057250977

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00035214424133301

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00026392936706543

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00022506713867188

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.0001990795135498

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00026607513427734

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00036191940307617

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '27555eba678284cbcda561ef327a83bd58078785' 
 Execution Time:0.00027990341186523

-------------------------------------
SELECT GET_LOCK('fb1cdd5a733aef52b397b9805245ea8e', 300) AS ci_session_lock 
 Execution Time:0.00012588500976562

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '27555eba678284cbcda561ef327a83bd58078785' 
 Execution Time:0.00028681755065918

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00037884712219238

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00033187866210938

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.0006558895111084

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC 
 Execution Time:0.0084450244903564

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC LIMIT 0, 20 
 Execution Time:0.0093488693237305

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00029492378234863

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00021600723266602

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00019097328186035

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00015687942504883

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00011396408081055

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010418891906738

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010085105895996

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00011706352233887

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.0001378059387207

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00010514259338379

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:9.8943710327148E-5

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:9.9897384643555E-5

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:9.918212890625E-5

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:9.8943710327148E-5

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2df51a57b7a95eaa07594361808c7f0055a1dc8f' 
 Execution Time:0.00038313865661621

-------------------------------------
SELECT GET_LOCK('3337e9c0a52d2a6f5556cc34df0dc35a', 300) AS ci_session_lock 
 Execution Time:0.00030398368835449

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2df51a57b7a95eaa07594361808c7f0055a1dc8f' 
 Execution Time:0.00042414665222168

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00037097930908203

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00026392936706543

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00047802925109863

-------------------------------------
SELECT *
FROM `message`
WHERE `user_id` = '10' 
 Execution Time:0.00024199485778809

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00036478042602539

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00033092498779297

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00020003318786621

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00013899803161621

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00012898445129395

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00012803077697754

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00012993812561035

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00014901161193848

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00016593933105469

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00012397766113281

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.0001220703125

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00012111663818359

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00012111663818359

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.0001220703125

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2df51a57b7a95eaa07594361808c7f0055a1dc8f' 
 Execution Time:0.00031805038452148

-------------------------------------
SELECT GET_LOCK('3337e9c0a52d2a6f5556cc34df0dc35a', 300) AS ci_session_lock 
 Execution Time:0.00017309188842773

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2df51a57b7a95eaa07594361808c7f0055a1dc8f' 
 Execution Time:0.00027704238891602

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00046086311340332

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00034403800964355

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00048398971557617

-------------------------------------
SELECT *
FROM `message`
WHERE `user_id` = '10' 
 Execution Time:0.00033187866210938

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00023698806762695

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.0001671314239502

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00013303756713867

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00011110305786133

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00010895729064941

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010991096496582

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.0001070499420166

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00011992454528809

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00013184547424316

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00010490417480469

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.0001060962677002

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00010299682617188

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010490417480469

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010418891906738

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2df51a57b7a95eaa07594361808c7f0055a1dc8f' 
 Execution Time:0.00029587745666504

-------------------------------------
SELECT GET_LOCK('3337e9c0a52d2a6f5556cc34df0dc35a', 300) AS ci_session_lock 
 Execution Time:0.00020694732666016

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2df51a57b7a95eaa07594361808c7f0055a1dc8f' 
 Execution Time:0.00020003318786621

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0003058910369873

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00023102760314941

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00054001808166504

-------------------------------------
SELECT *
FROM `message`
WHERE `user_id` = '10' 
 Execution Time:0.00034093856811523

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00037813186645508

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00027203559875488

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00023198127746582

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00018882751464844

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00012302398681641

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00011420249938965

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00011205673217773

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00013494491577148

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00015711784362793

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00011110305786133

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00010895729064941

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.0001060962677002

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00011014938354492

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.0001060962677002

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2df51a57b7a95eaa07594361808c7f0055a1dc8f' 
 Execution Time:0.00027990341186523

-------------------------------------
SELECT GET_LOCK('3337e9c0a52d2a6f5556cc34df0dc35a', 300) AS ci_session_lock 
 Execution Time:0.00015997886657715

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2df51a57b7a95eaa07594361808c7f0055a1dc8f' 
 Execution Time:0.00020194053649902

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00028586387634277

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00025486946105957

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00054478645324707

-------------------------------------
SELECT *
FROM `message`
WHERE `user_id` = '10' 
 Execution Time:0.00038290023803711

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00054597854614258

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00046300888061523

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00033187866210938

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.0002751350402832

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00033688545227051

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00021004676818848

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.0001220703125

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00017189979553223

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00015997886657715

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00011086463928223

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00011396408081055

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00010800361633301

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010585784912109

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.0001060962677002

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2df51a57b7a95eaa07594361808c7f0055a1dc8f' 
 Execution Time:0.00029993057250977

-------------------------------------
SELECT GET_LOCK('3337e9c0a52d2a6f5556cc34df0dc35a', 300) AS ci_session_lock 
 Execution Time:0.00018095970153809

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2df51a57b7a95eaa07594361808c7f0055a1dc8f' 
 Execution Time:0.00020003318786621

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00051403045654297

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00035619735717773

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00063204765319824

-------------------------------------
SELECT *
FROM `message`
WHERE `user_id` = '10' 
 Execution Time:0.0002748966217041

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00057411193847656

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00033116340637207

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00036501884460449

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00029897689819336

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00034117698669434

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00035595893859863

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00042986869812012

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00024318695068359

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00025415420532227

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.0001828670501709

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00018405914306641

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00019288063049316

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00020098686218262

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.0001978874206543

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2df51a57b7a95eaa07594361808c7f0055a1dc8f' 
 Execution Time:0.00029778480529785

-------------------------------------
SELECT GET_LOCK('3337e9c0a52d2a6f5556cc34df0dc35a', 300) AS ci_session_lock 
 Execution Time:0.0001530647277832

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2df51a57b7a95eaa07594361808c7f0055a1dc8f' 
 Execution Time:0.00017905235290527

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00026297569274902

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00019311904907227

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00037407875061035

-------------------------------------
SELECT *
FROM `message`
WHERE `user_id` = '10' 
 Execution Time:0.00017881393432617

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0002291202545166

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00020098686218262

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00013113021850586

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00011801719665527

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00010800361633301

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.0001070499420166

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.0001060962677002

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00011992454528809

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00013208389282227

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00010418891906738

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00010395050048828

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00010395050048828

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010395050048828

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010418891906738

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2df51a57b7a95eaa07594361808c7f0055a1dc8f' 
 Execution Time:0.00032901763916016

-------------------------------------
SELECT GET_LOCK('3337e9c0a52d2a6f5556cc34df0dc35a', 300) AS ci_session_lock 
 Execution Time:0.00017213821411133

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2df51a57b7a95eaa07594361808c7f0055a1dc8f' 
 Execution Time:0.00026798248291016

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0003659725189209

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00022792816162109

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00029706954956055

-------------------------------------
SELECT *
FROM `message`
WHERE `user_id` = '10' 
 Execution Time:0.0001978874206543

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00023388862609863

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00046420097351074

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00022792816162109

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00019192695617676

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00016903877258301

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00026702880859375

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00019478797912598

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00018692016601562

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00021600723266602

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00022101402282715

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00016212463378906

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00014615058898926

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00011420249938965

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00011396408081055

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2df51a57b7a95eaa07594361808c7f0055a1dc8f' 
 Execution Time:0.00032782554626465

-------------------------------------
SELECT GET_LOCK('3337e9c0a52d2a6f5556cc34df0dc35a', 300) AS ci_session_lock 
 Execution Time:0.00025415420532227

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2df51a57b7a95eaa07594361808c7f0055a1dc8f' 
 Execution Time:0.00028705596923828

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00030398368835449

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00017786026000977

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00025701522827148

-------------------------------------
SELECT *
FROM `message`
WHERE `user_id` = '10' 
 Execution Time:0.00020194053649902

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0002591609954834

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00020885467529297

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00020194053649902

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00018715858459473

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.0001828670501709

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00024104118347168

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00024700164794922

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00017309188842773

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00023913383483887

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00015902519226074

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00014495849609375

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00020098686218262

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00018787384033203

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.0001671314239502

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2df51a57b7a95eaa07594361808c7f0055a1dc8f' 
 Execution Time:0.00035595893859863

-------------------------------------
SELECT GET_LOCK('3337e9c0a52d2a6f5556cc34df0dc35a', 300) AS ci_session_lock 
 Execution Time:0.00014781951904297

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2df51a57b7a95eaa07594361808c7f0055a1dc8f' 
 Execution Time:0.00019097328186035

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00024199485778809

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00019001960754395

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00027894973754883

-------------------------------------
SELECT *
FROM `message`
WHERE `user_id` = '10' 
 Execution Time:0.00017809867858887

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00014615058898926

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00014114379882812

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00011897087097168

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.0001060962677002

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.0001060962677002

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010490417480469

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010490417480469

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00011587142944336

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00012803077697754

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00010299682617188

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00010395050048828

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00010395050048828

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00020194053649902

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00012612342834473

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2df51a57b7a95eaa07594361808c7f0055a1dc8f' 
 Execution Time:0.00033903121948242

-------------------------------------
SELECT GET_LOCK('3337e9c0a52d2a6f5556cc34df0dc35a', 300) AS ci_session_lock 
 Execution Time:0.00015711784362793

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2df51a57b7a95eaa07594361808c7f0055a1dc8f' 
 Execution Time:0.00019097328186035

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00025796890258789

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00020003318786621

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00024104118347168

-------------------------------------
SELECT *
FROM `message`
WHERE `user_id` = '10' 
 Execution Time:0.00014901161193848

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00014400482177734

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00014400482177734

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00011897087097168

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00011491775512695

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00010895729064941

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.0001070499420166

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010585784912109

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00011801719665527

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00022196769714355

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00014185905456543

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00013303756713867

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00011420249938965

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00014901161193848

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00011491775512695

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2df51a57b7a95eaa07594361808c7f0055a1dc8f' 
 Execution Time:0.00028395652770996

-------------------------------------
SELECT GET_LOCK('3337e9c0a52d2a6f5556cc34df0dc35a', 300) AS ci_session_lock 
 Execution Time:0.00015902519226074

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2df51a57b7a95eaa07594361808c7f0055a1dc8f' 
 Execution Time:0.00016498565673828

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00037407875061035

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00026297569274902

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00027990341186523

-------------------------------------
SELECT *
FROM `message`
WHERE `user_id` = '10' 
 Execution Time:0.00018095970153809

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00019598007202148

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00021505355834961

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00015091896057129

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00015521049499512

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00013208389282227

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00013518333435059

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00013184547424316

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0001530647277832

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00029802322387695

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00022411346435547

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00022220611572266

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00022196769714355

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00056314468383789

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00033903121948242

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2df51a57b7a95eaa07594361808c7f0055a1dc8f' 
 Execution Time:0.00034499168395996

-------------------------------------
SELECT GET_LOCK('3337e9c0a52d2a6f5556cc34df0dc35a', 300) AS ci_session_lock 
 Execution Time:0.00018000602722168

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2df51a57b7a95eaa07594361808c7f0055a1dc8f' 
 Execution Time:0.00019216537475586

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00028896331787109

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00023603439331055

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00032901763916016

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC 
 Execution Time:0.41441583633423

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC LIMIT 0, 20 
 Execution Time:0.24545192718506

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00028610229492188

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00028300285339355

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00018715858459473

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.0001518726348877

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.0001521110534668

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00016093254089355

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00014185905456543

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0001380443572998

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00015711784362793

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00011396408081055

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00010800361633301

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.0001070499420166

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.0001380443572998

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.0001070499420166

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2df51a57b7a95eaa07594361808c7f0055a1dc8f' 
 Execution Time:0.00029110908508301

-------------------------------------
SELECT GET_LOCK('3337e9c0a52d2a6f5556cc34df0dc35a', 300) AS ci_session_lock 
 Execution Time:0.00018596649169922

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2df51a57b7a95eaa07594361808c7f0055a1dc8f' 
 Execution Time:0.00022006034851074

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1661069168, `data` = '__ci_last_regenerate|i:1661069168;user_id|s:1:\"1\";email|s:20:\"fantom15dm@gmail.com\";'
WHERE `id` = '2df51a57b7a95eaa07594361808c7f0055a1dc8f' 
 Execution Time:0.10577082633972

-------------------------------------
SELECT RELEASE_LOCK('3337e9c0a52d2a6f5556cc34df0dc35a') AS ci_session_lock 
 Execution Time:0.00016403198242188

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '278239211f409e9171fa83ab768df817e2fbcdb5' 
 Execution Time:0.00025105476379395

-------------------------------------
SELECT GET_LOCK('02a214351a7a803a0bfe7e8d2cf68597', 300) AS ci_session_lock 
 Execution Time:0.00013899803161621

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '672a10c2564523d6f7ace66192a8f4798ca548a8' 
 Execution Time:0.00022602081298828

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00046396255493164

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.0002899169921875

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00038981437683105

-------------------------------------
SELECT *
FROM `message`
WHERE `user_id` = '6' 
 Execution Time:0.0002751350402832

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00030994415283203

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00030398368835449

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00022506713867188

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00020813941955566

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00019383430480957

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00015020370483398

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00015401840209961

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0001680850982666

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00019192695617676

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00014805793762207

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00013208389282227

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00013422966003418

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.0001838207244873

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00020909309387207

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '672a10c2564523d6f7ace66192a8f4798ca548a8' 
 Execution Time:0.00054502487182617

-------------------------------------
SELECT GET_LOCK('02a214351a7a803a0bfe7e8d2cf68597', 300) AS ci_session_lock 
 Execution Time:0.00024700164794922

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '672a10c2564523d6f7ace66192a8f4798ca548a8' 
 Execution Time:0.00029206275939941

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1661069784, `data` = '__ci_last_regenerate|i:1661069784;user_id|s:1:\"1\";email|s:20:\"fantom15dm@gmail.com\";'
WHERE `id` = '672a10c2564523d6f7ace66192a8f4798ca548a8' 
 Execution Time:0.0021498203277588

-------------------------------------
SELECT RELEASE_LOCK('02a214351a7a803a0bfe7e8d2cf68597') AS ci_session_lock 
 Execution Time:0.0001380443572998

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '5b5201f07b578498583f4e3fbd7673e1404c43a0' 
 Execution Time:0.00030422210693359

-------------------------------------
SELECT GET_LOCK('19d7f3ca1bb36ba984777b48f9da5b0d', 300) AS ci_session_lock 
 Execution Time:0.00017285346984863

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '08b62ba3379b09ab8f984d7c8051cf50db288b81' 
 Execution Time:0.00018787384033203

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00040984153747559

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00033092498779297

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00037407875061035

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC 
 Execution Time:0.060749053955078

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC LIMIT 0, 20 
 Execution Time:0.0070819854736328

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00027179718017578

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00023603439331055

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00015401840209961

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00012016296386719

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.0001380443572998

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00011205673217773

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010800361633301

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00011301040649414

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00012993812561035

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00010180473327637

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:9.9897384643555E-5

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:9.8943710327148E-5

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:9.918212890625E-5

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010013580322266

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '08b62ba3379b09ab8f984d7c8051cf50db288b81' 
 Execution Time:0.00027894973754883

-------------------------------------
SELECT GET_LOCK('19d7f3ca1bb36ba984777b48f9da5b0d', 300) AS ci_session_lock 
 Execution Time:0.00028014183044434

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '08b62ba3379b09ab8f984d7c8051cf50db288b81' 
 Execution Time:0.00028705596923828

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00040888786315918

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00030708312988281

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.0004878044128418

-------------------------------------
UPDATE `message` SET `status` = 'read'
WHERE 0 = 'user_id'
AND 1 = '9'
AND 2 = 'admin_id IS NULL' 
 Execution Time:0.0002899169921875

-------------------------------------
SELECT *
FROM `message`
WHERE `user_id` = '9' 
 Execution Time:0.00036978721618652

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00030899047851562

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00022602081298828

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00043392181396484

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00032997131347656

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00025701522827148

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.0001671314239502

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00015401840209961

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00019311904907227

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00024199485778809

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00017499923706055

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00014495849609375

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00011205673217773

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010395050048828

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010204315185547

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '08b62ba3379b09ab8f984d7c8051cf50db288b81' 
 Execution Time:0.00029587745666504

-------------------------------------
SELECT GET_LOCK('19d7f3ca1bb36ba984777b48f9da5b0d', 300) AS ci_session_lock 
 Execution Time:0.0001521110534668

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '08b62ba3379b09ab8f984d7c8051cf50db288b81' 
 Execution Time:0.0001671314239502

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0005650520324707

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00042581558227539

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00060582160949707

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC 
 Execution Time:0.0087080001831055

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC LIMIT 0, 20 
 Execution Time:0.045870065689087

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00028610229492188

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00020503997802734

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00014686584472656

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00011301040649414

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00010395050048828

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010204315185547

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010204315185547

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00011014938354492

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00012683868408203

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00010299682617188

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00011301040649414

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00012397766113281

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.0001370906829834

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00011205673217773

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '08b62ba3379b09ab8f984d7c8051cf50db288b81' 
 Execution Time:0.00061511993408203

-------------------------------------
SELECT GET_LOCK('19d7f3ca1bb36ba984777b48f9da5b0d', 300) AS ci_session_lock 
 Execution Time:0.00017189979553223

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '08b62ba3379b09ab8f984d7c8051cf50db288b81' 
 Execution Time:0.00020384788513184

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00030779838562012

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00026488304138184

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00032997131347656

-------------------------------------
UPDATE `message` SET `status` = 'read'
WHERE 0 = 'user_id'
AND 1 = '9'
AND 2 = 'admin_id IS NULL' 
 Execution Time:0.00019097328186035

-------------------------------------
SELECT *
FROM `message`
WHERE `user_id` = '9' 
 Execution Time:0.00025296211242676

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00028681755065918

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00019407272338867

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00015401840209961

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00014114379882812

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00013899803161621

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00015115737915039

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00018191337585449

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00016403198242188

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00018715858459473

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00013899803161621

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00013899803161621

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00089097023010254

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.0039761066436768

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00039005279541016

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '08b62ba3379b09ab8f984d7c8051cf50db288b81' 
 Execution Time:0.00037789344787598

-------------------------------------
SELECT GET_LOCK('19d7f3ca1bb36ba984777b48f9da5b0d', 300) AS ci_session_lock 
 Execution Time:0.00020194053649902

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '08b62ba3379b09ab8f984d7c8051cf50db288b81' 
 Execution Time:0.00021004676818848

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00030994415283203

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00019693374633789

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00026488304138184

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC 
 Execution Time:0.007483959197998

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC LIMIT 0, 20 
 Execution Time:0.0061440467834473

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00050091743469238

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00039887428283691

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00027298927307129

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00027799606323242

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00027704238891602

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00023198127746582

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00019478797912598

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0001990795135498

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.0002439022064209

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00018405914306641

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00017499923706055

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00017189979553223

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00016999244689941

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00017189979553223

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '08b62ba3379b09ab8f984d7c8051cf50db288b81' 
 Execution Time:0.00036001205444336

-------------------------------------
SELECT GET_LOCK('19d7f3ca1bb36ba984777b48f9da5b0d', 300) AS ci_session_lock 
 Execution Time:0.00020503997802734

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '08b62ba3379b09ab8f984d7c8051cf50db288b81' 
 Execution Time:0.00028681755065918

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00032401084899902

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00023603439331055

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00031304359436035

-------------------------------------
UPDATE `message` SET `status` = 'read'
WHERE 0 = 'user_id'
AND 1 = '9'
AND 2 = 'admin_id IS NULL' 
 Execution Time:0.00013089179992676

-------------------------------------
SELECT *
FROM `message`
WHERE `user_id` = '9' 
 Execution Time:0.00024199485778809

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0011439323425293

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00051498413085938

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00034403800964355

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00036811828613281

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00032401084899902

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00024700164794922

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00039291381835938

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00030899047851562

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00024986267089844

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.0001990795135498

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00015687942504883

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00014591217041016

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00014185905456543

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00014400482177734

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '08b62ba3379b09ab8f984d7c8051cf50db288b81' 
 Execution Time:0.0003809928894043

-------------------------------------
SELECT GET_LOCK('19d7f3ca1bb36ba984777b48f9da5b0d', 300) AS ci_session_lock 
 Execution Time:0.0001678466796875

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '08b62ba3379b09ab8f984d7c8051cf50db288b81' 
 Execution Time:0.00019097328186035

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00026988983154297

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00020599365234375

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00027894973754883

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC 
 Execution Time:0.062179803848267

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC LIMIT 0, 20 
 Execution Time:0.0064170360565186

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00026702880859375

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00026178359985352

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00020194053649902

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00019717216491699

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00014185905456543

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00029897689819336

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00019311904907227

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00013113021850586

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00015616416931152

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00011396408081055

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00010514259338379

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00010204315185547

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010180473327637

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010108947753906

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '08b62ba3379b09ab8f984d7c8051cf50db288b81' 
 Execution Time:0.00092005729675293

-------------------------------------
SELECT GET_LOCK('19d7f3ca1bb36ba984777b48f9da5b0d', 300) AS ci_session_lock 
 Execution Time:0.00030207633972168

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '08b62ba3379b09ab8f984d7c8051cf50db288b81' 
 Execution Time:0.0003960132598877

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00041699409484863

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00033402442932129

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00072884559631348

-------------------------------------
UPDATE `message` SET `status` = 'read'
WHERE `user_id` = '9'
AND 0 = 'admin_id IS NULL' 
 Execution Time:0.0014898777008057

-------------------------------------
SELECT *
FROM `message`
WHERE `user_id` = '9' 
 Execution Time:0.00037598609924316

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0002892017364502

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00022697448730469

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00019407272338867

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00018906593322754

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00019097328186035

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00021815299987793

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00026512145996094

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00027608871459961

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00028491020202637

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00036501884460449

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00019598007202148

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00092506408691406

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00025701522827148

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.0004279613494873

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '08b62ba3379b09ab8f984d7c8051cf50db288b81' 
 Execution Time:0.00030016899108887

-------------------------------------
SELECT GET_LOCK('19d7f3ca1bb36ba984777b48f9da5b0d', 300) AS ci_session_lock 
 Execution Time:0.00025010108947754

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '08b62ba3379b09ab8f984d7c8051cf50db288b81' 
 Execution Time:0.00022697448730469

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00031518936157227

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00019598007202148

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00023913383483887

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC 
 Execution Time:0.053663015365601

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC LIMIT 0, 20 
 Execution Time:0.0070998668670654

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0002288818359375

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00022006034851074

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.0001671314239502

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00014209747314453

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00010991096496582

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010299682617188

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010299682617188

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00011086463928223

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00013184547424316

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00010395050048828

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.0001070499420166

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:9.9897384643555E-5

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:9.8943710327148E-5

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00013113021850586

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '08b62ba3379b09ab8f984d7c8051cf50db288b81' 
 Execution Time:0.00028014183044434

-------------------------------------
SELECT GET_LOCK('19d7f3ca1bb36ba984777b48f9da5b0d', 300) AS ci_session_lock 
 Execution Time:0.00026106834411621

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '08b62ba3379b09ab8f984d7c8051cf50db288b81' 
 Execution Time:0.00095915794372559

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1661070088, `data` = '__ci_last_regenerate|i:1661070088;user_id|s:1:\"1\";email|s:20:\"fantom15dm@gmail.com\";'
WHERE `id` = '08b62ba3379b09ab8f984d7c8051cf50db288b81' 
 Execution Time:0.072501182556152

-------------------------------------
SELECT RELEASE_LOCK('19d7f3ca1bb36ba984777b48f9da5b0d') AS ci_session_lock 
 Execution Time:0.00014686584472656

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '6229b9d1deeaba60b3cd90367acc4c459c19aea2' 
 Execution Time:0.0002129077911377

-------------------------------------
SELECT GET_LOCK('020dfc2716e25462284cef05a725a1c5', 300) AS ci_session_lock 
 Execution Time:0.00011301040649414

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'a99df9265d660d4b710f8a1ef405aa8e439e51ea' 
 Execution Time:0.00013089179992676

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00028800964355469

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00021505355834961

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00027799606323242

-------------------------------------
UPDATE `message` SET `status` = 'read'
WHERE `user_id` = '6'
AND 0 = 'admin_id IS NULL' 
 Execution Time:0.066622972488403

-------------------------------------
SELECT *
FROM `message`
WHERE `user_id` = '6' 
 Execution Time:0.00043106079101562

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0003809928894043

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00040388107299805

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00020813941955566

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00016307830810547

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00015711784362793

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00014781951904297

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.0001521110534668

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00018501281738281

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00027203559875488

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.0003049373626709

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00017499923706055

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00020098686218262

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00015497207641602

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00014305114746094

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'a99df9265d660d4b710f8a1ef405aa8e439e51ea' 
 Execution Time:0.0003669261932373

-------------------------------------
SELECT GET_LOCK('020dfc2716e25462284cef05a725a1c5', 300) AS ci_session_lock 
 Execution Time:0.00040888786315918

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'a99df9265d660d4b710f8a1ef405aa8e439e51ea' 
 Execution Time:0.00034093856811523

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00034499168395996

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00023007392883301

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00031900405883789

-------------------------------------
UPDATE `message` SET `status` = 'read'
WHERE `user_id` = '6'
AND 0 = 'admin_id IS NULL' 
 Execution Time:0.001093864440918

-------------------------------------
SELECT *
FROM `message`
WHERE `user_id` = '6' 
 Execution Time:0.00038599967956543

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0004270076751709

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.0002589225769043

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00022006034851074

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00018095970153809

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.0001981258392334

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00018310546875

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.0001828670501709

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00021004676818848

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00085186958312988

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00049209594726562

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00018310546875

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00020289421081543

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00024509429931641

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00023198127746582

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'a99df9265d660d4b710f8a1ef405aa8e439e51ea' 
 Execution Time:0.00028896331787109

-------------------------------------
SELECT GET_LOCK('020dfc2716e25462284cef05a725a1c5', 300) AS ci_session_lock 
 Execution Time:0.00015902519226074

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'a99df9265d660d4b710f8a1ef405aa8e439e51ea' 
 Execution Time:0.00033283233642578

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00037097930908203

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00031614303588867

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00044989585876465

-------------------------------------
INSERT INTO `message` (`user_id`, `text_message`, `admin_id`) VALUES ('6', 'If you want your benchmark data to be available to the Profiler all of your marked points must be set up in pairs, and each mark point name must end with _start and _end. Each pair of points must otherwise be named identically. Example:', '1') 
 Execution Time:0.082846879959106

-------------------------------------
UPDATE `message` SET `status` = 'read'
WHERE `user_id` = '6'
AND 0 = 'admin_id IS NULL' 
 Execution Time:0.054438829421997

-------------------------------------
SELECT *
FROM `message`
WHERE `user_id` = '6' 
 Execution Time:0.00044083595275879

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00026202201843262

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00020885467529297

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00018405914306641

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00015687942504883

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.0001680850982666

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00018692016601562

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.0002291202545166

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00023007392883301

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00046396255493164

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00030803680419922

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00018715858459473

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00020313262939453

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00017499923706055

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00014901161193848

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'a99df9265d660d4b710f8a1ef405aa8e439e51ea' 
 Execution Time:0.00028014183044434

-------------------------------------
SELECT GET_LOCK('020dfc2716e25462284cef05a725a1c5', 300) AS ci_session_lock 
 Execution Time:0.00012803077697754

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'a99df9265d660d4b710f8a1ef405aa8e439e51ea' 
 Execution Time:0.00030088424682617

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00032210350036621

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00055193901062012

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00075507164001465

-------------------------------------
INSERT INTO `message` (`user_id`, `text_message`, `admin_id`) VALUES ('6', 'It should be noted that flashdata variables are regular session vars, only marked in a specific way under the ‘__ci_vars’ key (please don’t touch that one, you’ve been warned).', '1') 
 Execution Time:0.050127983093262

-------------------------------------
UPDATE `message` SET `status` = 'read'
WHERE `user_id` = '6'
AND 0 = 'admin_id IS NULL' 
 Execution Time:0.0073471069335938

-------------------------------------
SELECT *
FROM `message`
WHERE `user_id` = '6' 
 Execution Time:0.00034904479980469

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00020694732666016

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00020313262939453

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00014686584472656

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00012803077697754

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00013518333435059

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.0001218318939209

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.0001060962677002

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00011801719665527

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00013613700866699

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00010585784912109

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00015997886657715

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00011181831359863

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010299682617188

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010204315185547

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'a99df9265d660d4b710f8a1ef405aa8e439e51ea' 
 Execution Time:0.00028896331787109

-------------------------------------
SELECT GET_LOCK('020dfc2716e25462284cef05a725a1c5', 300) AS ci_session_lock 
 Execution Time:0.0001671314239502

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'a99df9265d660d4b710f8a1ef405aa8e439e51ea' 
 Execution Time:0.00019407272338867

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00053310394287109

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00028395652770996

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00039482116699219

-------------------------------------
UPDATE `message` SET `status` = 'read'
WHERE `user_id` = '6'
AND 0 = 'admin_id IS NULL' 
 Execution Time:0.050644159317017

-------------------------------------
SELECT *
FROM `message`
WHERE `user_id` = '6' 
 Execution Time:0.0003969669342041

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00032615661621094

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00020694732666016

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00016403198242188

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00019693374633789

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00026798248291016

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00021886825561523

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00021195411682129

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00022792816162109

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00027108192443848

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00026297569274902

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00024294853210449

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00017881393432617

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00034594535827637

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00020289421081543

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'a99df9265d660d4b710f8a1ef405aa8e439e51ea' 
 Execution Time:0.00072503089904785

-------------------------------------
SELECT GET_LOCK('020dfc2716e25462284cef05a725a1c5', 300) AS ci_session_lock 
 Execution Time:0.0001978874206543

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'a99df9265d660d4b710f8a1ef405aa8e439e51ea' 
 Execution Time:0.00023698806762695

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00052309036254883

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00039410591125488

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.0006248950958252

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC 
 Execution Time:0.29163098335266

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC LIMIT 0, 20 
 Execution Time:0.060315132141113

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0003049373626709

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00023889541625977

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00016689300537109

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00012493133544922

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00010895729064941

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010013580322266

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010895729064941

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00011706352233887

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00014281272888184

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:9.9897384643555E-5

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00011205673217773

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:9.5129013061523E-5

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
WHERE `id` = 'a99df9265d660d4b710f8a1ef405aa8e439e51ea' 
 Execution Time:0.00029897689819336

-------------------------------------
SELECT GET_LOCK('020dfc2716e25462284cef05a725a1c5', 300) AS ci_session_lock 
 Execution Time:0.00016999244689941

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'a99df9265d660d4b710f8a1ef405aa8e439e51ea' 
 Execution Time:0.00020194053649902

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00046706199645996

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00022006034851074

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00045609474182129

-------------------------------------
UPDATE `message` SET `status` = 'read'
WHERE `user_id` = '10'
AND 0 = 'admin_id IS NULL' 
 Execution Time:0.00091218948364258

-------------------------------------
SELECT *
FROM `message`
WHERE `user_id` = '10' 
 Execution Time:0.00021719932556152

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00030279159545898

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00021100044250488

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00015497207641602

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00014805793762207

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00013184547424316

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00014090538024902

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00013899803161621

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00076198577880859

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00037503242492676

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00076794624328613

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00054097175598145

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00039911270141602

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00043606758117676

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.0002899169921875

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'a99df9265d660d4b710f8a1ef405aa8e439e51ea' 
 Execution Time:0.0003058910369873

-------------------------------------
SELECT GET_LOCK('020dfc2716e25462284cef05a725a1c5', 300) AS ci_session_lock 
 Execution Time:0.00020503997802734

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'a99df9265d660d4b710f8a1ef405aa8e439e51ea' 
 Execution Time:0.00030207633972168

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00056195259094238

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00036215782165527

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00070309638977051

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC 
 Execution Time:0.00850510597229

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC LIMIT 0, 20 
 Execution Time:0.0062050819396973

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00075387954711914

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00043582916259766

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00031208992004395

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00027704238891602

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00023794174194336

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00019311904907227

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00016999244689941

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00023293495178223

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00031208992004395

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00023007392883301

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00023603439331055

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00024509429931641

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00028300285339355

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00028491020202637

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'a99df9265d660d4b710f8a1ef405aa8e439e51ea' 
 Execution Time:0.00035500526428223

-------------------------------------
SELECT GET_LOCK('020dfc2716e25462284cef05a725a1c5', 300) AS ci_session_lock 
 Execution Time:0.00029683113098145

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'a99df9265d660d4b710f8a1ef405aa8e439e51ea' 
 Execution Time:0.00059199333190918

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1661070486, `data` = '__ci_last_regenerate|i:1661070486;user_id|s:1:\"1\";email|s:20:\"fantom15dm@gmail.com\";'
WHERE `id` = 'a99df9265d660d4b710f8a1ef405aa8e439e51ea' 
 Execution Time:0.4168541431427

-------------------------------------
SELECT RELEASE_LOCK('020dfc2716e25462284cef05a725a1c5') AS ci_session_lock 
 Execution Time:0.00018501281738281

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'f729fbea636cf83df96b4e0720074d7ad5a266d2' 
 Execution Time:0.00025010108947754

-------------------------------------
SELECT GET_LOCK('31cd93737e9f33371f86119586570a2a', 300) AS ci_session_lock 
 Execution Time:0.00011992454528809

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2f82c3245dba7d372a6ecbd3319b66e3f32fc1b9' 
 Execution Time:0.00017094612121582

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00059390068054199

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.0002751350402832

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00029206275939941

-------------------------------------
SELECT *
FROM `message`
WHERE `user_id` = '7' 
 Execution Time:0.0001678466796875

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00056290626525879

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00029516220092773

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00016403198242188

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00016307830810547

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00012493133544922

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00013089179992676

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00013303756713867

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00014996528625488

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00017285346984863

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.0001380443572998

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00012588500976562

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00012898445129395

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00014591217041016

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010395050048828

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2f82c3245dba7d372a6ecbd3319b66e3f32fc1b9' 
 Execution Time:0.00029397010803223

-------------------------------------
SELECT GET_LOCK('31cd93737e9f33371f86119586570a2a', 300) AS ci_session_lock 
 Execution Time:0.00036811828613281

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2f82c3245dba7d372a6ecbd3319b66e3f32fc1b9' 
 Execution Time:0.00027799606323242

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0003199577331543

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00021100044250488

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.0002899169921875

-------------------------------------
SELECT *
FROM `message`
WHERE `user_id` = '7' 
 Execution Time:0.00019097328186035

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00069499015808105

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00048613548278809

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00035405158996582

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00036907196044922

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00044798851013184

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00041699409484863

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00032615661621094

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00035810470581055

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00030088424682617

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00020790100097656

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00022292137145996

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00020217895507812

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00019311904907227

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00014090538024902

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2f82c3245dba7d372a6ecbd3319b66e3f32fc1b9' 
 Execution Time:0.00048089027404785

-------------------------------------
SELECT GET_LOCK('31cd93737e9f33371f86119586570a2a', 300) AS ci_session_lock 
 Execution Time:0.00018501281738281

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2f82c3245dba7d372a6ecbd3319b66e3f32fc1b9' 
 Execution Time:0.00055980682373047

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00040197372436523

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00023293495178223

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00030994415283203

-------------------------------------
INSERT INTO `message` (`user_id`, `text_message`, `admin_id`) VALUES ('7', 'It should be noted that flashdata variables are regular session vars, only marked in a specific way under the ‘__ci_vars’ key (please don’t touch that one, you’ve been warned).', '1') 
 Execution Time:0.054214954376221

-------------------------------------
SELECT *
FROM `message`
WHERE `user_id` = '7' 
 Execution Time:0.00029993057250977

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00025010108947754

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00018978118896484

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.0001528263092041

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00013995170593262

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00013518333435059

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.0001380443572998

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00012683868408203

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0002601146697998

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00019288063049316

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.0001380443572998

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00014495849609375

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00012993812561035

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00013089179992676

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.0001380443572998

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2f82c3245dba7d372a6ecbd3319b66e3f32fc1b9' 
 Execution Time:0.00046205520629883

-------------------------------------
SELECT GET_LOCK('31cd93737e9f33371f86119586570a2a', 300) AS ci_session_lock 
 Execution Time:0.00020384788513184

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2f82c3245dba7d372a6ecbd3319b66e3f32fc1b9' 
 Execution Time:0.00031685829162598

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00036978721618652

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00027298927307129

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00031304359436035

-------------------------------------
SELECT *
FROM `message`
WHERE `user_id` = '7' 
 Execution Time:0.00021719932556152

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0002140998840332

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00018787384033203

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.0001530647277832

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00015020370483398

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.0001370906829834

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00014185905456543

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00013494491577148

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00014996528625488

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.0001671314239502

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00014710426330566

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00013303756713867

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00014090538024902

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00020194053649902

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00019097328186035

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2f82c3245dba7d372a6ecbd3319b66e3f32fc1b9' 
 Execution Time:0.0003058910369873

-------------------------------------
SELECT GET_LOCK('31cd93737e9f33371f86119586570a2a', 300) AS ci_session_lock 
 Execution Time:0.00019311904907227

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2f82c3245dba7d372a6ecbd3319b66e3f32fc1b9' 
 Execution Time:0.00020384788513184

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.001467227935791

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.0018420219421387

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00078010559082031

-------------------------------------
SELECT *
FROM `message`
WHERE `user_id` = '7' 
 Execution Time:0.02900505065918

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00045895576477051

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00031685829162598

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00025391578674316

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00030016899108887

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00019192695617676

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.0001518726348877

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00014281272888184

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00015902519226074

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.0001828670501709

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00014805793762207

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00013899803161621

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.0001981258392334

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00027608871459961

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.0002131462097168

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2f82c3245dba7d372a6ecbd3319b66e3f32fc1b9' 
 Execution Time:0.0004279613494873

-------------------------------------
SELECT GET_LOCK('31cd93737e9f33371f86119586570a2a', 300) AS ci_session_lock 
 Execution Time:0.0001680850982666

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2f82c3245dba7d372a6ecbd3319b66e3f32fc1b9' 
 Execution Time:0.00024604797363281

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00042295455932617

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00047111511230469

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00039386749267578

-------------------------------------
SELECT *
FROM `message`
WHERE `user_id` = '7' 
 Execution Time:0.00021791458129883

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00017499923706055

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00015401840209961

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.0001220703125

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00011014938354492

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00010895729064941

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.0001070499420166

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010800361633301

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00011897087097168

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00014281272888184

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00010490417480469

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00010490417480469

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00010490417480469

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010299682617188

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:9.8943710327148E-5

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2f82c3245dba7d372a6ecbd3319b66e3f32fc1b9' 
 Execution Time:0.00033998489379883

-------------------------------------
SELECT GET_LOCK('31cd93737e9f33371f86119586570a2a', 300) AS ci_session_lock 
 Execution Time:0.00017905235290527

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2f82c3245dba7d372a6ecbd3319b66e3f32fc1b9' 
 Execution Time:0.00018978118896484

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1661070793, `data` = '__ci_last_regenerate|i:1661070793;user_id|s:1:\"1\";email|s:20:\"fantom15dm@gmail.com\";'
WHERE `id` = '2f82c3245dba7d372a6ecbd3319b66e3f32fc1b9' 
 Execution Time:0.059218168258667

-------------------------------------
SELECT RELEASE_LOCK('31cd93737e9f33371f86119586570a2a') AS ci_session_lock 
 Execution Time:0.00033807754516602

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '33800a744bf365a79fc32ffbf5d627c88d294640' 
 Execution Time:0.00040698051452637

-------------------------------------
SELECT GET_LOCK('ac62cdb4e2ea096aee8f7a1bad2b0801', 300) AS ci_session_lock 
 Execution Time:0.00019383430480957

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '98fb25b7c3835f974b9ae5b57cb8a4463a8a07fb' 
 Execution Time:0.00033998489379883

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00047087669372559

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00039792060852051

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00040006637573242

-------------------------------------
SELECT *
FROM `message`
WHERE `user_id` = '7' 
 Execution Time:0.00031900405883789

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00026798248291016

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00049781799316406

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00028419494628906

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00027799606323242

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00018596649169922

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00016307830810547

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00015592575073242

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00017499923706055

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00020289421081543

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00015401840209961

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00014090538024902

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00014495849609375

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00014495849609375

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00014400482177734

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '98fb25b7c3835f974b9ae5b57cb8a4463a8a07fb' 
 Execution Time:0.00031590461730957

-------------------------------------
SELECT GET_LOCK('ac62cdb4e2ea096aee8f7a1bad2b0801', 300) AS ci_session_lock 
 Execution Time:0.00013303756713867

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '98fb25b7c3835f974b9ae5b57cb8a4463a8a07fb' 
 Execution Time:0.00026512145996094

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00038909912109375

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00018596649169922

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00029397010803223

-------------------------------------
SELECT *
FROM `message`
WHERE `user_id` = '7' 
 Execution Time:0.00019216537475586

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00015592575073242

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00014591217041016

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00011801719665527

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00012111663818359

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.0001218318939209

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00013494491577148

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00015997886657715

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00014805793762207

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00015401840209961

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00011205673217773

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00010895729064941

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.0001070499420166

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.0001060962677002

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00011682510375977

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '98fb25b7c3835f974b9ae5b57cb8a4463a8a07fb' 
 Execution Time:0.00030303001403809

-------------------------------------
SELECT GET_LOCK('ac62cdb4e2ea096aee8f7a1bad2b0801', 300) AS ci_session_lock 
 Execution Time:0.0001370906829834

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '98fb25b7c3835f974b9ae5b57cb8a4463a8a07fb' 
 Execution Time:0.0001671314239502

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00023508071899414

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00016403198242188

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00026512145996094

-------------------------------------
INSERT INTO `message` (`user_id`, `text_message`, `admin_id`) VALUES ('7', 'If you want your benchmark data to be available to the Profiler all of your marked points must be set up in pairs, and each mark point name must end with _start and _end. Each pair of points must otherwise be named identically. Example:', '1') 
 Execution Time:0.061848163604736

-------------------------------------
SELECT *
FROM `message`
WHERE `user_id` = '7' 
 Execution Time:0.00038504600524902

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00025296211242676

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00024104118347168

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00020194053649902

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00017189979553223

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00014805793762207

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00013613700866699

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00014090538024902

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00015902519226074

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00017285346984863

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00016093254089355

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00011610984802246

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00011491775512695

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00011491775512695

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00011396408081055

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '98fb25b7c3835f974b9ae5b57cb8a4463a8a07fb' 
 Execution Time:0.00028514862060547

-------------------------------------
SELECT GET_LOCK('ac62cdb4e2ea096aee8f7a1bad2b0801', 300) AS ci_session_lock 
 Execution Time:0.00018000602722168

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '98fb25b7c3835f974b9ae5b57cb8a4463a8a07fb' 
 Execution Time:0.00018000602722168

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00020885467529297

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00020885467529297

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.0002739429473877

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC 
 Execution Time:0.067425966262817

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC LIMIT 0, 20 
 Execution Time:0.032042026519775

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00044488906860352

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00029897689819336

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.0002131462097168

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00021696090698242

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00018310546875

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00027203559875488

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00025296211242676

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00025796890258789

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00029206275939941

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.0003349781036377

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00021004676818848

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00018596649169922

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00016689300537109

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00016593933105469

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '98fb25b7c3835f974b9ae5b57cb8a4463a8a07fb' 
 Execution Time:0.00033211708068848

-------------------------------------
SELECT GET_LOCK('ac62cdb4e2ea096aee8f7a1bad2b0801', 300) AS ci_session_lock 
 Execution Time:0.00037193298339844

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '98fb25b7c3835f974b9ae5b57cb8a4463a8a07fb' 
 Execution Time:0.00029706954956055

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00032496452331543

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00026702880859375

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00048089027404785

-------------------------------------
SELECT *
FROM `message`
WHERE `user_id` = '7' 
 Execution Time:0.00023603439331055

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00025796890258789

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00022697448730469

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00016212463378906

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.0001680850982666

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.0001518726348877

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00013399124145508

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00012302398681641

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00014400482177734

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00023698806762695

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00023102760314941

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.0002131462097168

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00020098686218262

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00020599365234375

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00018501281738281

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '98fb25b7c3835f974b9ae5b57cb8a4463a8a07fb' 
 Execution Time:0.00044107437133789

-------------------------------------
SELECT GET_LOCK('ac62cdb4e2ea096aee8f7a1bad2b0801', 300) AS ci_session_lock 
 Execution Time:0.00018596649169922

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '98fb25b7c3835f974b9ae5b57cb8a4463a8a07fb' 
 Execution Time:0.00022697448730469

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1661071891, `data` = '__ci_last_regenerate|i:1661071891;user_id|s:1:\"1\";email|s:20:\"fantom15dm@gmail.com\";'
WHERE `id` = '98fb25b7c3835f974b9ae5b57cb8a4463a8a07fb' 
 Execution Time:0.086452960968018

-------------------------------------
SELECT RELEASE_LOCK('ac62cdb4e2ea096aee8f7a1bad2b0801') AS ci_session_lock 
 Execution Time:0.00020194053649902

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '0874f1ffac36d0c3b3d4cb767b70712919f965bc' 
 Execution Time:0.00031304359436035

-------------------------------------
SELECT GET_LOCK('0230f38eec5b90949ab0aba546a64893', 300) AS ci_session_lock 
 Execution Time:0.00016498565673828

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'e7d49634f029b509296fa88ab571bbe77cfa98c7' 
 Execution Time:0.00027585029602051

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0004580020904541

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00033020973205566

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.050601959228516

-------------------------------------
SELECT *
FROM `message`
WHERE `user_id` = '7' 
 Execution Time:0.00047612190246582

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0002899169921875

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00023412704467773

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.0001518726348877

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00015807151794434

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.0001380443572998

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00015902519226074

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00015115737915039

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0002138614654541

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00018501281738281

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00013613700866699

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00015091896057129

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00019717216491699

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00026988983154297

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00014805793762207

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'e7d49634f029b509296fa88ab571bbe77cfa98c7' 
 Execution Time:0.00034594535827637

-------------------------------------
SELECT GET_LOCK('0230f38eec5b90949ab0aba546a64893', 300) AS ci_session_lock 
 Execution Time:0.00021696090698242

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'e7d49634f029b509296fa88ab571bbe77cfa98c7' 
 Execution Time:0.00026297569274902

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00035190582275391

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.0002448558807373

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00053596496582031

-------------------------------------
INSERT INTO `message` (`user_id`, `text_message`, `admin_id`) VALUES ('7', 'If you want your benchmark data to be available to the Profiler all of your marked points must be set up in pairs, and each mark point name must end with _start and _end. Each pair of points must otherwise be named identically. Example:', '1') 
 Execution Time:0.17945098876953

-------------------------------------
SELECT *
FROM `message`
WHERE `user_id` = '7' 
 Execution Time:0.00048494338989258

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00044012069702148

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00046086311340332

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00037598609924316

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00035500526428223

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00042891502380371

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00048208236694336

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00044512748718262

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00033402442932129

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.0003359317779541

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00028896331787109

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00036001205444336

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00026607513427734

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00024008750915527

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00023388862609863

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'e7d49634f029b509296fa88ab571bbe77cfa98c7' 
 Execution Time:0.00029301643371582

-------------------------------------
SELECT GET_LOCK('0230f38eec5b90949ab0aba546a64893', 300) AS ci_session_lock 
 Execution Time:0.00013995170593262

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'e7d49634f029b509296fa88ab571bbe77cfa98c7' 
 Execution Time:0.00016903877258301

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00024080276489258

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00021481513977051

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.0002899169921875

-------------------------------------
SELECT *
FROM `message`
WHERE `user_id` = '7' 
 Execution Time:0.00019693374633789

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00014400482177734

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00013995170593262

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00011301040649414

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00012803077697754

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00017690658569336

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00020098686218262

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00017595291137695

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00013399124145508

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00014495849609375

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00011086463928223

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00010299682617188

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00010085105895996

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010013580322266

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010490417480469

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'e7d49634f029b509296fa88ab571bbe77cfa98c7' 
 Execution Time:0.00027585029602051

-------------------------------------
SELECT GET_LOCK('0230f38eec5b90949ab0aba546a64893', 300) AS ci_session_lock 
 Execution Time:0.00010991096496582

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'e7d49634f029b509296fa88ab571bbe77cfa98c7' 
 Execution Time:0.00019383430480957

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00023508071899414

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00016307830810547

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00030398368835449

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC 
 Execution Time:0.083662033081055

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC LIMIT 0, 20 
 Execution Time:0.030008792877197

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00033307075500488

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.0002291202545166

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00019407272338867

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00014400482177734

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00011420249938965

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010204315185547

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010395050048828

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00011515617370605

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.0001368522644043

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00010919570922852

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:9.7036361694336E-5

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00010013580322266

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:9.5129013061523E-5

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:9.5129013061523E-5

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'e7d49634f029b509296fa88ab571bbe77cfa98c7' 
 Execution Time:0.00083708763122559

-------------------------------------
SELECT GET_LOCK('0230f38eec5b90949ab0aba546a64893', 300) AS ci_session_lock 
 Execution Time:0.00030612945556641

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'e7d49634f029b509296fa88ab571bbe77cfa98c7' 
 Execution Time:0.00032901763916016

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00033807754516602

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00022196769714355

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00027680397033691

-------------------------------------
SELECT *
FROM `message`
WHERE `user_id` = '7' 
 Execution Time:0.00020384788513184

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00018882751464844

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00018477439880371

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00013899803161621

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.0001380443572998

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00020313262939453

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00019693374633789

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00019407272338867

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00015711784362793

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.0001838207244873

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00014805793762207

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00014209747314453

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.0001380443572998

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.0001368522644043

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00018095970153809

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'e7d49634f029b509296fa88ab571bbe77cfa98c7' 
 Execution Time:0.00044584274291992

-------------------------------------
SELECT GET_LOCK('0230f38eec5b90949ab0aba546a64893', 300) AS ci_session_lock 
 Execution Time:0.00041913986206055

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'e7d49634f029b509296fa88ab571bbe77cfa98c7' 
 Execution Time:0.00043892860412598

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0003509521484375

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00022697448730469

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00027608871459961

-------------------------------------
SELECT *
FROM `message`
WHERE `user_id` = '7' 
 Execution Time:0.00020289421081543

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00015902519226074

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00013899803161621

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00010895729064941

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00011801719665527

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00010204315185547

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010204315185547

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010108947753906

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00010800361633301

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00012397766113281

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00013899803161621

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.0001530647277832

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00011301040649414

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010299682617188

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.0001060962677002

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'e7d49634f029b509296fa88ab571bbe77cfa98c7' 
 Execution Time:0.00030612945556641

-------------------------------------
SELECT GET_LOCK('0230f38eec5b90949ab0aba546a64893', 300) AS ci_session_lock 
 Execution Time:0.00016188621520996

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'e7d49634f029b509296fa88ab571bbe77cfa98c7' 
 Execution Time:0.00018310546875

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00026321411132812

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00026488304138184

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00028395652770996

-------------------------------------
SELECT *
FROM `message`
WHERE `user_id` = '7' 
 Execution Time:0.00017714500427246

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00015807151794434

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00013899803161621

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00010991096496582

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00014591217041016

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00013089179992676

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00011086463928223

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010800361633301

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00011420249938965

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00013589859008789

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.0001070499420166

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00010204315185547

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00010085105895996

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:9.7036361694336E-5

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010108947753906

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'e7d49634f029b509296fa88ab571bbe77cfa98c7' 
 Execution Time:0.0003199577331543

-------------------------------------
SELECT GET_LOCK('0230f38eec5b90949ab0aba546a64893', 300) AS ci_session_lock 
 Execution Time:0.00015711784362793

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'e7d49634f029b509296fa88ab571bbe77cfa98c7' 
 Execution Time:0.0001828670501709

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1661072260, `data` = '__ci_last_regenerate|i:1661072260;user_id|s:1:\"1\";email|s:20:\"fantom15dm@gmail.com\";'
WHERE `id` = 'e7d49634f029b509296fa88ab571bbe77cfa98c7' 
 Execution Time:0.067551851272583

-------------------------------------
SELECT RELEASE_LOCK('0230f38eec5b90949ab0aba546a64893') AS ci_session_lock 
 Execution Time:0.00019001960754395

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '1b9d95d4702d4947dd031b76e77cb69eda746026' 
 Execution Time:0.00028085708618164

-------------------------------------
SELECT GET_LOCK('f2f03f7f2ebdccd6014366ace70b212b', 300) AS ci_session_lock 
 Execution Time:0.00014686584472656

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'bbad22aee5686f9aa9b868dc744ffbe9a73380b4' 
 Execution Time:0.00020503997802734

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0003509521484375

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00023388862609863

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00030088424682617

-------------------------------------
SELECT *
FROM `message`
WHERE `user_id` = '7' 
 Execution Time:0.00023198127746582

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00023579597473145

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00019598007202148

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00015711784362793

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00014591217041016

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00014114379882812

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00013589859008789

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00013494491577148

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00014996528625488

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00017285346984863

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00014090538024902

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00013494491577148

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00013184547424316

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00012493133544922

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00013208389282227

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'bbad22aee5686f9aa9b868dc744ffbe9a73380b4' 
 Execution Time:0.00030112266540527

-------------------------------------
SELECT GET_LOCK('f2f03f7f2ebdccd6014366ace70b212b', 300) AS ci_session_lock 
 Execution Time:0.00013613700866699

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'bbad22aee5686f9aa9b868dc744ffbe9a73380b4' 
 Execution Time:0.00016379356384277

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00039410591125488

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00023984909057617

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00026512145996094

-------------------------------------
SELECT *
FROM `message`
WHERE `user_id` = '7' 
 Execution Time:0.00022697448730469

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00026607513427734

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00021195411682129

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00015497207641602

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00018501281738281

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00014281272888184

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00014019012451172

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00014495849609375

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0001528263092041

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00018095970153809

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00014710426330566

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00037193298339844

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00019598007202148

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00013899803161621

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00011396408081055

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'bbad22aee5686f9aa9b868dc744ffbe9a73380b4' 
 Execution Time:0.00030899047851562

-------------------------------------
SELECT GET_LOCK('f2f03f7f2ebdccd6014366ace70b212b', 300) AS ci_session_lock 
 Execution Time:0.0002288818359375

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'bbad22aee5686f9aa9b868dc744ffbe9a73380b4' 
 Execution Time:0.00035810470581055

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00037312507629395

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00047516822814941

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00045609474182129

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC 
 Execution Time:0.12783002853394

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC LIMIT 0, 20 
 Execution Time:0.040993928909302

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0003659725189209

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00023603439331055

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00044488906860352

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00028109550476074

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00025582313537598

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00021719932556152

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00019192695617676

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00017786026000977

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.0001978874206543

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00015997886657715

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00014615058898926

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00013899803161621

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00014209747314453

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00014185905456543

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'bbad22aee5686f9aa9b868dc744ffbe9a73380b4' 
 Execution Time:0.00053691864013672

-------------------------------------
SELECT GET_LOCK('f2f03f7f2ebdccd6014366ace70b212b', 300) AS ci_session_lock 
 Execution Time:0.00048995018005371

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'bbad22aee5686f9aa9b868dc744ffbe9a73380b4' 
 Execution Time:0.00036501884460449

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1661072578, `data` = '__ci_last_regenerate|i:1661072578;user_id|s:1:\"1\";email|s:20:\"fantom15dm@gmail.com\";'
WHERE `id` = 'bbad22aee5686f9aa9b868dc744ffbe9a73380b4' 
 Execution Time:0.0062601566314697

-------------------------------------
SELECT RELEASE_LOCK('f2f03f7f2ebdccd6014366ace70b212b') AS ci_session_lock 
 Execution Time:0.00019097328186035

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '0c3b9f9b3fc3f40c3f8d06b58486c69bf47797d5' 
 Execution Time:0.00036811828613281

-------------------------------------
SELECT GET_LOCK('13f53c6fce70a8cd478b6f0b671c88dd', 300) AS ci_session_lock 
 Execution Time:0.00014901161193848

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '573066d1ff0f4286fb9101ff4395f7c0c17e564e' 
 Execution Time:0.05710506439209

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.096923112869263

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.027465105056763

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.021460056304932

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC 
 Execution Time:0.041028022766113

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC LIMIT 0, 20 
 Execution Time:0.0062010288238525

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00047492980957031

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00046801567077637

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00048303604125977

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00032496452331543

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.0003819465637207

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00028896331787109

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00030899047851562

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00030684471130371

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00034809112548828

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00029897689819336

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.0003049373626709

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00030398368835449

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00025081634521484

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00019598007202148

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '573066d1ff0f4286fb9101ff4395f7c0c17e564e' 
 Execution Time:0.00082778930664062

-------------------------------------
SELECT GET_LOCK('13f53c6fce70a8cd478b6f0b671c88dd', 300) AS ci_session_lock 
 Execution Time:0.00017786026000977

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '573066d1ff0f4286fb9101ff4395f7c0c17e564e' 
 Execution Time:0.00019693374633789

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00028491020202637

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00019097328186035

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00042104721069336

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC 
 Execution Time:0.023751020431519

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC LIMIT 0, 20 
 Execution Time:0.033046960830688

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00039911270141602

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.0003049373626709

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00024104118347168

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00020909309387207

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00018811225891113

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00018596649169922

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00018310546875

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00026512145996094

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00030303001403809

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00027298927307129

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00024604797363281

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00023102760314941

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00021505355834961

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00020194053649902

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '573066d1ff0f4286fb9101ff4395f7c0c17e564e' 
 Execution Time:0.00034594535827637

-------------------------------------
SELECT GET_LOCK('13f53c6fce70a8cd478b6f0b671c88dd', 300) AS ci_session_lock 
 Execution Time:0.00019097328186035

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '573066d1ff0f4286fb9101ff4395f7c0c17e564e' 
 Execution Time:0.00024795532226562

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00031781196594238

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00023698806762695

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.0003509521484375

-------------------------------------
UPDATE `message` SET `seen` = 'yes'
WHERE `user_id` IS NULL
AND 0 = 'admin_id IS NULL' 
 Execution Time:0.00025010108947754

-------------------------------------
SELECT *
FROM `message`
WHERE `user_id` = '7' 
 Execution Time:0.00037097930908203

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00033807754516602

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00022482872009277

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00018882751464844

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00013995170593262

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00011420249938965

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.0001068115234375

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010418891906738

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00011610984802246

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00014090538024902

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00010800361633301

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00010180473327637

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:9.5129013061523E-5

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010108947753906

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010013580322266

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '573066d1ff0f4286fb9101ff4395f7c0c17e564e' 
 Execution Time:0.00030398368835449

-------------------------------------
SELECT GET_LOCK('13f53c6fce70a8cd478b6f0b671c88dd', 300) AS ci_session_lock 
 Execution Time:0.00014209747314453

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '573066d1ff0f4286fb9101ff4395f7c0c17e564e' 
 Execution Time:0.00019288063049316

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00028109550476074

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00017905235290527

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.0002598762512207

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC 
 Execution Time:2.08580493927

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC LIMIT 0, 20 
 Execution Time:0.077761888504028

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0005347728729248

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.0004270076751709

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00031399726867676

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.0002741813659668

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00024008750915527

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00023698806762695

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00026583671569824

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00026607513427734

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00029110908508301

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00020599365234375

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.0001828670501709

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00017619132995605

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00020885467529297

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00029897689819336

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '573066d1ff0f4286fb9101ff4395f7c0c17e564e' 
 Execution Time:0.00033283233642578

-------------------------------------
SELECT GET_LOCK('13f53c6fce70a8cd478b6f0b671c88dd', 300) AS ci_session_lock 
 Execution Time:0.0001978874206543

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '573066d1ff0f4286fb9101ff4395f7c0c17e564e' 
 Execution Time:0.00023984909057617

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00034785270690918

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00024509429931641

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00033783912658691

-------------------------------------
UPDATE `message` SET `seen` = 'yes'
WHERE `user_id` = '7'
AND 0 = 'admin_id IS NULL' 
 Execution Time:0.34937596321106

-------------------------------------
SELECT *
FROM `message`
WHERE `user_id` = '7' 
 Execution Time:0.00041317939758301

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00028204917907715

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00030803680419922

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00020813941955566

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00020480155944824

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00019693374633789

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00016689300537109

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00016498565673828

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00017905235290527

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.0002129077911377

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00015997886657715

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00014400482177734

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00013399124145508

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00012803077697754

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00013613700866699

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '573066d1ff0f4286fb9101ff4395f7c0c17e564e' 
 Execution Time:0.0002901554107666

-------------------------------------
SELECT GET_LOCK('13f53c6fce70a8cd478b6f0b671c88dd', 300) AS ci_session_lock 
 Execution Time:0.00016617774963379

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '573066d1ff0f4286fb9101ff4395f7c0c17e564e' 
 Execution Time:0.00019192695617676

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00028705596923828

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00017309188842773

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00027298927307129

-------------------------------------
UPDATE `message` SET `seen` = 'yes'
WHERE `user_id` = '7'
AND 0 = 'admin_id IS NULL' 
 Execution Time:0.034969091415405

-------------------------------------
SELECT *
FROM `message`
WHERE `user_id` = '7' 
 Execution Time:0.00040507316589355

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00018715858459473

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00017809867858887

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00012302398681641

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00010085105895996

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00010418891906738

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010085105895996

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:9.9897384643555E-5

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
 Execution Time:0.00010108947753906

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:9.9897384643555E-5

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:9.8943710327148E-5

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:9.5129013061523E-5

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:9.8943710327148E-5

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '573066d1ff0f4286fb9101ff4395f7c0c17e564e' 
 Execution Time:0.00030398368835449

-------------------------------------
SELECT GET_LOCK('13f53c6fce70a8cd478b6f0b671c88dd', 300) AS ci_session_lock 
 Execution Time:0.00027918815612793

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '573066d1ff0f4286fb9101ff4395f7c0c17e564e' 
 Execution Time:0.00029397010803223

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1661072887, `data` = '__ci_last_regenerate|i:1661072887;user_id|s:1:\"1\";email|s:20:\"fantom15dm@gmail.com\";'
WHERE `id` = '573066d1ff0f4286fb9101ff4395f7c0c17e564e' 
 Execution Time:0.03914999961853

-------------------------------------
SELECT RELEASE_LOCK('13f53c6fce70a8cd478b6f0b671c88dd') AS ci_session_lock 
 Execution Time:0.00023484230041504

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'f9ff9ef3985ee0e2494ea12721272ef21a68c3a2' 
 Execution Time:0.00059413909912109

-------------------------------------
SELECT GET_LOCK('808fafcd08dc41418f66b94cabaf5151', 300) AS ci_session_lock 
 Execution Time:0.00019693374633789

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '0de20e28e35479b96b276dd8b8d938e9d38c419c' 
 Execution Time:0.00032496452331543

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00046086311340332

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00032997131347656

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00049901008605957

-------------------------------------
UPDATE `message` SET `seen` = 'yes'
WHERE `user_id` = '7'
AND `admin_id` IS NULL 
 Execution Time:0.050158023834229

-------------------------------------
SELECT *
FROM `message`
WHERE `user_id` = '7' 
 Execution Time:0.00046992301940918

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00035405158996582

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00026798248291016

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00022315979003906

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00021910667419434

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00012683868408203

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.0001218318939209

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00011920928955078

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00013089179992676

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00016117095947266

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00012302398681641

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00011682510375977

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00011396408081055

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010800361633301

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00011396408081055

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '0de20e28e35479b96b276dd8b8d938e9d38c419c' 
 Execution Time:0.00034213066101074

-------------------------------------
SELECT GET_LOCK('808fafcd08dc41418f66b94cabaf5151', 300) AS ci_session_lock 
 Execution Time:0.00028896331787109

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '0de20e28e35479b96b276dd8b8d938e9d38c419c' 
 Execution Time:0.00031590461730957

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00044584274291992

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00028586387634277

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00042891502380371

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC 
 Execution Time:0.093738079071045

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC LIMIT 0, 20 
 Execution Time:0.0087687969207764

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00041604042053223

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00037693977355957

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00030398368835449

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00024509429931641

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.0002748966217041

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00023984909057617

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00024700164794922

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00018692016601562

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00033116340637207

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00017714500427246

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.0001521110534668

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00014495849609375

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00014305114746094

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00014209747314453

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '0de20e28e35479b96b276dd8b8d938e9d38c419c' 
 Execution Time:0.0020830631256104

-------------------------------------
SELECT GET_LOCK('808fafcd08dc41418f66b94cabaf5151', 300) AS ci_session_lock 
 Execution Time:0.00022983551025391

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '0de20e28e35479b96b276dd8b8d938e9d38c419c' 
 Execution Time:0.00029802322387695

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00039196014404297

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00025296211242676

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00035500526428223

-------------------------------------
UPDATE `message` SET `seen` = 'yes'
WHERE `user_id` = '6'
AND `admin_id` IS NULL 
 Execution Time:0.046993970870972

-------------------------------------
SELECT *
FROM `message`
WHERE `user_id` = '6' 
 Execution Time:0.00041007995605469

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00041699409484863

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00037598609924316

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00025510787963867

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00028395652770996

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00017189979553223

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00014114379882812

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00013995170593262

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00014901161193848

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00023603439331055

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00014591217041016

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00014090538024902

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00012493133544922

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00013089179992676

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00012993812561035

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '0de20e28e35479b96b276dd8b8d938e9d38c419c' 
 Execution Time:0.00042200088500977

-------------------------------------
SELECT GET_LOCK('808fafcd08dc41418f66b94cabaf5151', 300) AS ci_session_lock 
 Execution Time:0.00042104721069336

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '0de20e28e35479b96b276dd8b8d938e9d38c419c' 
 Execution Time:0.00040483474731445

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1661077181, `data` = '__ci_last_regenerate|i:1661077181;user_id|s:1:\"1\";email|s:20:\"fantom15dm@gmail.com\";'
WHERE `id` = '0de20e28e35479b96b276dd8b8d938e9d38c419c' 
 Execution Time:0.0012588500976562

-------------------------------------
SELECT RELEASE_LOCK('808fafcd08dc41418f66b94cabaf5151') AS ci_session_lock 
 Execution Time:0.00018310546875

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'e93981d3f5bb55e2a6ed4a412dd479103b1e39a5' 
 Execution Time:0.00036811828613281

-------------------------------------
SELECT GET_LOCK('8e1aab3022093caaa394c895c73a860e', 300) AS ci_session_lock 
 Execution Time:0.00010013580322266

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '87897d9d9e654f87153bd6786a38dc961064c4d1' 
 Execution Time:0.00021195411682129

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00048398971557617

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00029206275939941

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00043487548828125

-------------------------------------
UPDATE `message` SET `seen` = 'yes'
WHERE `user_id` = '6'
AND `admin_id` IS NULL 
 Execution Time:0.0012571811676025

-------------------------------------
SELECT *
FROM `message`
WHERE `user_id` = '6' 
 Execution Time:0.00029206275939941

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00037288665771484

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00021696090698242

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00017404556274414

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00017595291137695

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00012707710266113

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00011897087097168

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00011086463928223

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00013089179992676

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.0001521110534668

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00011181831359863

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00011587142944336

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00011420249938965

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00011205673217773

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00011396408081055

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '87897d9d9e654f87153bd6786a38dc961064c4d1' 
 Execution Time:0.00027894973754883

-------------------------------------
SELECT GET_LOCK('8e1aab3022093caaa394c895c73a860e', 300) AS ci_session_lock 
 Execution Time:0.00017905235290527

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '87897d9d9e654f87153bd6786a38dc961064c4d1' 
 Execution Time:0.00022697448730469

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00028300285339355

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00022292137145996

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00028419494628906

-------------------------------------
UPDATE `message` SET `seen` = 'yes'
WHERE `user_id` = '6'
AND `admin_id` IS NULL 
 Execution Time:0.0034079551696777

-------------------------------------
SELECT *
FROM `message`
WHERE `user_id` = '6' 
 Execution Time:0.00060606002807617

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0003809928894043

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00031900405883789

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00025820732116699

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00026583671569824

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00024199485778809

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00023293495178223

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00023508071899414

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00020599365234375

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.0002140998840332

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00014901161193848

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00011682510375977

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00010299682617188

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010991096496582

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010395050048828

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '87897d9d9e654f87153bd6786a38dc961064c4d1' 
 Execution Time:0.00053310394287109

-------------------------------------
SELECT GET_LOCK('8e1aab3022093caaa394c895c73a860e', 300) AS ci_session_lock 
 Execution Time:0.00031590461730957

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '87897d9d9e654f87153bd6786a38dc961064c4d1' 
 Execution Time:0.00043320655822754

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00078701972961426

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00061297416687012

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00069308280944824

-------------------------------------
UPDATE `message` SET `seen` = 'yes'
WHERE `user_id` = '6'
AND `admin_id` IS NULL 
 Execution Time:0.027085781097412

-------------------------------------
SELECT *
FROM `message`
WHERE `user_id` = '6' 
 Execution Time:0.00056195259094238

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00029420852661133

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00020813941955566

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00012612342834473

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00013303756713867

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.0001070499420166

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010395050048828

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010204315185547

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00011396408081055

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00022602081298828

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00030398368835449

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00025510787963867

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00023412704467773

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00018501281738281

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00011610984802246

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '87897d9d9e654f87153bd6786a38dc961064c4d1' 
 Execution Time:0.00037693977355957

-------------------------------------
SELECT GET_LOCK('8e1aab3022093caaa394c895c73a860e', 300) AS ci_session_lock 
 Execution Time:0.00019097328186035

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '87897d9d9e654f87153bd6786a38dc961064c4d1' 
 Execution Time:0.00021600723266602

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00026512145996094

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00021910667419434

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00028586387634277

-------------------------------------
UPDATE `message` SET `seen` = 'yes'
WHERE `user_id` = '6'
AND `admin_id` IS NULL 
 Execution Time:0.020662069320679

-------------------------------------
SELECT *
FROM `message`
WHERE `user_id` = '6' 
 Execution Time:0.00043606758117676

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00042200088500977

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00041484832763672

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00023579597473145

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00023317337036133

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00020098686218262

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00020098686218262

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.0001981258392334

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0002138614654541

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00024509429931641

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00020480155944824

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00019097328186035

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00018501281738281

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00018692016601562

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00026988983154297

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '87897d9d9e654f87153bd6786a38dc961064c4d1' 
 Execution Time:0.00029492378234863

-------------------------------------
SELECT GET_LOCK('8e1aab3022093caaa394c895c73a860e', 300) AS ci_session_lock 
 Execution Time:0.00012683868408203

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '87897d9d9e654f87153bd6786a38dc961064c4d1' 
 Execution Time:0.00023913383483887

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00044488906860352

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'ebooks' 
 Execution Time:0.00029516220092773

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '5' 
 Execution Time:0.00069212913513184

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.021959066390991

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `status` = 'active'
ORDER BY `sort` ASC 
 Execution Time:0.011801958084106

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00040102005004883

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.0003049373626709

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00026988983154297

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00022411346435547

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00019598007202148

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.0001680850982666

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00017380714416504

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00018906593322754

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00021910667419434

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00017499923706055

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00017213821411133

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00016117095947266

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00016903877258301

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00014495849609375

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '87897d9d9e654f87153bd6786a38dc961064c4d1' 
 Execution Time:0.0036070346832275

-------------------------------------
SELECT GET_LOCK('8e1aab3022093caaa394c895c73a860e', 300) AS ci_session_lock 
 Execution Time:0.0013041496276855

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '87897d9d9e654f87153bd6786a38dc961064c4d1' 
 Execution Time:0.00078201293945312

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0011749267578125

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'users' 
 Execution Time:0.00038409233093262

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '2' 
 Execution Time:0.0031120777130127

-------------------------------------
SELECT COUNT(*) AS `numrows` FROM `users` 
 Execution Time:0.012882947921753

-------------------------------------
SELECT *
FROM `users`
 LIMIT 20 
 Execution Time:0.00024795532226562

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00033998489379883

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00025510787963867

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00020909309387207

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00016188621520996

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00014710426330566

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00014114379882812

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00013589859008789

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0001981258392334

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00023484230041504

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00021100044250488

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.0001990795135498

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00018501281738281

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.0001838207244873

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00016617774963379

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '87897d9d9e654f87153bd6786a38dc961064c4d1' 
 Execution Time:0.00034999847412109

-------------------------------------
SELECT GET_LOCK('8e1aab3022093caaa394c895c73a860e', 300) AS ci_session_lock 
 Execution Time:0.00017786026000977

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '87897d9d9e654f87153bd6786a38dc961064c4d1' 
 Execution Time:0.00027704238891602

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00031304359436035

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00018811225891113

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00028014183044434

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC 
 Execution Time:0.096644878387451

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC LIMIT 0, 20 
 Execution Time:0.0061180591583252

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00031614303588867

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00022697448730469

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00015711784362793

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.0001518726348877

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00012898445129395

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00012087821960449

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00012016296386719

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00013208389282227

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.0001521110534668

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00012493133544922

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00011801719665527

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00011801719665527

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00011301040649414

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00011301040649414

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '87897d9d9e654f87153bd6786a38dc961064c4d1' 
 Execution Time:0.00031304359436035

-------------------------------------
SELECT GET_LOCK('8e1aab3022093caaa394c895c73a860e', 300) AS ci_session_lock 
 Execution Time:0.00015902519226074

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '87897d9d9e654f87153bd6786a38dc961064c4d1' 
 Execution Time:0.00019311904907227

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00035881996154785

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'questions' 
 Execution Time:0.00020003318786621

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '6' 
 Execution Time:0.00028181076049805

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00035190582275391

-------------------------------------
SELECT *
FROM `ebooks` 
 Execution Time:0.00023293495178223

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` IS NULL 
 Execution Time:0.00017404556274414

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0002901554107666

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.0001978874206543

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00015497207641602

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00014209747314453

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00012993812561035

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00014686584472656

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00013184547424316

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00023293495178223

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00028896331787109

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.0002291202545166

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00024890899658203

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00027298927307129

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00019097328186035

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00021004676818848

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '87897d9d9e654f87153bd6786a38dc961064c4d1' 
 Execution Time:0.00038886070251465

-------------------------------------
SELECT GET_LOCK('8e1aab3022093caaa394c895c73a860e', 300) AS ci_session_lock 
 Execution Time:0.00015997886657715

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '87897d9d9e654f87153bd6786a38dc961064c4d1' 
 Execution Time:0.00033092498779297

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00021815299987793

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'admin_users' 
 Execution Time:0.00023818016052246

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '1' 
 Execution Time:0.00055909156799316

-------------------------------------
SELECT *
FROM `admin` 
 Execution Time:0.0004119873046875

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00041818618774414

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00024604797363281

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00024318695068359

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.0001981258392334

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.0001671314239502

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.0001521110534668

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '2' 
 Execution Time:0.00020503997802734

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00015091896057129

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00014686584472656

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.0001380443572998

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00014305114746094

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00014495849609375

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '3' 
 Execution Time:0.00016498565673828

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '4' 
 Execution Time:0.00016689300537109

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00014495849609375

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '5' 
 Execution Time:0.00026512145996094

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00021600723266602

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00018978118896484

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00016188621520996

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '6' 
 Execution Time:0.00021195411682129

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00012588500976562

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00014686584472656

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00020003318786621

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00016307830810547

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00012898445129395

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00012111663818359

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00011515617370605

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00011897087097168

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00011897087097168

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00013494491577148

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00014781951904297

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00012302398681641

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00011992454528809

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00011396408081055

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00011801719665527

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00011801719665527

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '87897d9d9e654f87153bd6786a38dc961064c4d1' 
 Execution Time:0.00032305717468262

-------------------------------------
SELECT GET_LOCK('8e1aab3022093caaa394c895c73a860e', 300) AS ci_session_lock 
 Execution Time:0.00018095970153809

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '87897d9d9e654f87153bd6786a38dc961064c4d1' 
 Execution Time:0.00023508071899414

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00038981437683105

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00028014183044434

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00040912628173828

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC 
 Execution Time:0.0073649883270264

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC LIMIT 0, 20 
 Execution Time:0.007850170135498

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00033116340637207

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00032782554626465

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00058102607727051

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00040388107299805

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00037002563476562

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00033187866210938

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00031399726867676

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00029778480529785

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00033187866210938

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00031614303588867

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00029110908508301

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00031900405883789

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00027203559875488

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.0002138614654541

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '87897d9d9e654f87153bd6786a38dc961064c4d1' 
 Execution Time:0.0003511905670166

-------------------------------------
SELECT GET_LOCK('8e1aab3022093caaa394c895c73a860e', 300) AS ci_session_lock 
 Execution Time:0.00026798248291016

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '87897d9d9e654f87153bd6786a38dc961064c4d1' 
 Execution Time:0.00025701522827148

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1661077555, `data` = '__ci_last_regenerate|i:1661077555;user_id|s:1:\"1\";email|s:20:\"fantom15dm@gmail.com\";'
WHERE `id` = '87897d9d9e654f87153bd6786a38dc961064c4d1' 
 Execution Time:0.0010740756988525

-------------------------------------
SELECT RELEASE_LOCK('8e1aab3022093caaa394c895c73a860e') AS ci_session_lock 
 Execution Time:0.00011301040649414

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'e57202d3db81337994068aa1aea09a7030c03c49' 
 Execution Time:0.00016188621520996

-------------------------------------
SELECT GET_LOCK('72de56121f3e0b4f2fef73467dd026a8', 300) AS ci_session_lock 
 Execution Time:8.392333984375E-5

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '88113f4eb63ec3ff28e81cdab59caa894ebe8ce0' 
 Execution Time:0.00011706352233887

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0004580020904541

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'users' 
 Execution Time:0.00030398368835449

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '2' 
 Execution Time:0.00036382675170898

-------------------------------------
SELECT COUNT(*) AS `numrows` FROM `users` 
 Execution Time:0.00017499923706055

-------------------------------------
SELECT *
FROM `users`
 LIMIT 20 
 Execution Time:0.00024104118347168

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00054693222045898

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00040507316589355

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00030708312988281

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00051617622375488

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.0002899169921875

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00025200843811035

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00023508071899414

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00024795532226562

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00028181076049805

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00020098686218262

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00018191337585449

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00018000602722168

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00017809867858887

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00016999244689941

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '88113f4eb63ec3ff28e81cdab59caa894ebe8ce0' 
 Execution Time:0.00029802322387695

-------------------------------------
SELECT GET_LOCK('72de56121f3e0b4f2fef73467dd026a8', 300) AS ci_session_lock 
 Execution Time:0.00017690658569336

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '88113f4eb63ec3ff28e81cdab59caa894ebe8ce0' 
 Execution Time:0.00021195411682129

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '88113f4eb63ec3ff28e81cdab59caa894ebe8ce0' 
 Execution Time:0.00047492980957031

-------------------------------------
SELECT GET_LOCK('72de56121f3e0b4f2fef73467dd026a8', 300) AS ci_session_lock 
 Execution Time:0.0003349781036377

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '88113f4eb63ec3ff28e81cdab59caa894ebe8ce0' 
 Execution Time:0.00029110908508301

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '88113f4eb63ec3ff28e81cdab59caa894ebe8ce0' 
 Execution Time:0.00027990341186523

-------------------------------------
SELECT GET_LOCK('72de56121f3e0b4f2fef73467dd026a8', 300) AS ci_session_lock 
 Execution Time:0.00019502639770508

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '88113f4eb63ec3ff28e81cdab59caa894ebe8ce0' 
 Execution Time:0.00020790100097656

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '88113f4eb63ec3ff28e81cdab59caa894ebe8ce0' 
 Execution Time:0.00068187713623047

-------------------------------------
SELECT GET_LOCK('72de56121f3e0b4f2fef73467dd026a8', 300) AS ci_session_lock 
 Execution Time:0.0011160373687744

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '88113f4eb63ec3ff28e81cdab59caa894ebe8ce0' 
 Execution Time:0.00030398368835449

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `status` = 'active' 
 Execution Time:0.00043106079101562

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '88113f4eb63ec3ff28e81cdab59caa894ebe8ce0' 
 Execution Time:0.00034189224243164

-------------------------------------
SELECT GET_LOCK('72de56121f3e0b4f2fef73467dd026a8', 300) AS ci_session_lock 
 Execution Time:0.00021195411682129

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '88113f4eb63ec3ff28e81cdab59caa894ebe8ce0' 
 Execution Time:0.00037598609924316

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `id` = '2'
AND `status` = 'active' 
 Execution Time:0.00055885314941406

-------------------------------------
SELECT `id`
FROM `questions`
WHERE `topic_id` = '2'
AND `status` = 'active'
ORDER BY `id` ASC
 LIMIT 1 
 Execution Time:0.049870014190674

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '88113f4eb63ec3ff28e81cdab59caa894ebe8ce0' 
 Execution Time:0.00030398368835449

-------------------------------------
SELECT GET_LOCK('72de56121f3e0b4f2fef73467dd026a8', 300) AS ci_session_lock 
 Execution Time:0.00014710426330566

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '88113f4eb63ec3ff28e81cdab59caa894ebe8ce0' 
 Execution Time:0.00023603439331055

-------------------------------------
SELECT `id`
FROM `questions`
WHERE `topic_id` = '2'
AND `status` = 'active' 
 Execution Time:0.00061893463134766

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00043582916259766

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '8' 
 Execution Time:0.049968004226685

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '88113f4eb63ec3ff28e81cdab59caa894ebe8ce0' 
 Execution Time:0.00028491020202637

-------------------------------------
SELECT GET_LOCK('72de56121f3e0b4f2fef73467dd026a8', 300) AS ci_session_lock 
 Execution Time:0.00014114379882812

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '88113f4eb63ec3ff28e81cdab59caa894ebe8ce0' 
 Execution Time:0.00022006034851074

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.00036978721618652

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '9' 
 Execution Time:0.00029993057250977

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '88113f4eb63ec3ff28e81cdab59caa894ebe8ce0' 
 Execution Time:0.00026988983154297

-------------------------------------
SELECT GET_LOCK('72de56121f3e0b4f2fef73467dd026a8', 300) AS ci_session_lock 
 Execution Time:0.0001370906829834

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '88113f4eb63ec3ff28e81cdab59caa894ebe8ce0' 
 Execution Time:0.00023794174194336

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '10' 
 Execution Time:0.0003969669342041

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '10' 
 Execution Time:0.00031399726867676

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '88113f4eb63ec3ff28e81cdab59caa894ebe8ce0' 
 Execution Time:0.00028395652770996

-------------------------------------
SELECT GET_LOCK('72de56121f3e0b4f2fef73467dd026a8', 300) AS ci_session_lock 
 Execution Time:0.00011897087097168

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '88113f4eb63ec3ff28e81cdab59caa894ebe8ce0' 
 Execution Time:0.00016188621520996

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00043702125549316

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '11' 
 Execution Time:0.00029802322387695

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '88113f4eb63ec3ff28e81cdab59caa894ebe8ce0' 
 Execution Time:0.00032591819763184

-------------------------------------
SELECT GET_LOCK('72de56121f3e0b4f2fef73467dd026a8', 300) AS ci_session_lock 
 Execution Time:0.00013899803161621

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '88113f4eb63ec3ff28e81cdab59caa894ebe8ce0' 
 Execution Time:0.00026202201843262

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '12' 
 Execution Time:0.00035595893859863

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '12' 
 Execution Time:0.00029802322387695

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '88113f4eb63ec3ff28e81cdab59caa894ebe8ce0' 
 Execution Time:0.00041508674621582

-------------------------------------
SELECT GET_LOCK('72de56121f3e0b4f2fef73467dd026a8', 300) AS ci_session_lock 
 Execution Time:0.00027799606323242

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '88113f4eb63ec3ff28e81cdab59caa894ebe8ce0' 
 Execution Time:0.00038504600524902

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '12' 
 Execution Time:0.0003809928894043

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '12' 
 Execution Time:0.000244140625

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '88113f4eb63ec3ff28e81cdab59caa894ebe8ce0' 
 Execution Time:0.00034809112548828

-------------------------------------
SELECT GET_LOCK('72de56121f3e0b4f2fef73467dd026a8', 300) AS ci_session_lock 
 Execution Time:0.00016498565673828

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '88113f4eb63ec3ff28e81cdab59caa894ebe8ce0' 
 Execution Time:0.00020289421081543

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '12' 
 Execution Time:0.00029492378234863

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '12' 
 Execution Time:0.00020694732666016

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '88113f4eb63ec3ff28e81cdab59caa894ebe8ce0' 
 Execution Time:0.00040006637573242

-------------------------------------
SELECT GET_LOCK('72de56121f3e0b4f2fef73467dd026a8', 300) AS ci_session_lock 
 Execution Time:0.00019693374633789

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '88113f4eb63ec3ff28e81cdab59caa894ebe8ce0' 
 Execution Time:0.00021505355834961

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '13' 
 Execution Time:0.00031614303588867

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '13' 
 Execution Time:0.00023293495178223

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '88113f4eb63ec3ff28e81cdab59caa894ebe8ce0' 
 Execution Time:0.00026607513427734

-------------------------------------
SELECT GET_LOCK('72de56121f3e0b4f2fef73467dd026a8', 300) AS ci_session_lock 
 Execution Time:0.00013399124145508

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '88113f4eb63ec3ff28e81cdab59caa894ebe8ce0' 
 Execution Time:0.00016093254089355

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `status` = 'active' 
 Execution Time:0.00025105476379395

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '5a7a006989d1d7934467e5e85df1a795a801e063' 
 Execution Time:0.00036311149597168

-------------------------------------
SELECT GET_LOCK('9a6da78e49de89a0ce5b1d3a749a0575', 300) AS ci_session_lock 
 Execution Time:0.00015115737915039

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '5a7a006989d1d7934467e5e85df1a795a801e063' 
 Execution Time:0.00018715858459473

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '5a7a006989d1d7934467e5e85df1a795a801e063' 
 Execution Time:0.00033783912658691

-------------------------------------
SELECT GET_LOCK('9a6da78e49de89a0ce5b1d3a749a0575', 300) AS ci_session_lock 
 Execution Time:0.00043511390686035

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '5a7a006989d1d7934467e5e85df1a795a801e063' 
 Execution Time:0.00053596496582031

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '5a7a006989d1d7934467e5e85df1a795a801e063' 
 Execution Time:0.00030303001403809

-------------------------------------
SELECT GET_LOCK('9a6da78e49de89a0ce5b1d3a749a0575', 300) AS ci_session_lock 
 Execution Time:0.00012993812561035

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '5a7a006989d1d7934467e5e85df1a795a801e063' 
 Execution Time:0.00016498565673828

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '5a7a006989d1d7934467e5e85df1a795a801e063' 
 Execution Time:0.00036501884460449

-------------------------------------
SELECT GET_LOCK('9a6da78e49de89a0ce5b1d3a749a0575', 300) AS ci_session_lock 
 Execution Time:0.00017213821411133

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '5a7a006989d1d7934467e5e85df1a795a801e063' 
 Execution Time:0.00021004676818848

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '5a7a006989d1d7934467e5e85df1a795a801e063' 
 Execution Time:0.00038719177246094

-------------------------------------
SELECT GET_LOCK('9a6da78e49de89a0ce5b1d3a749a0575', 300) AS ci_session_lock 
 Execution Time:0.00025010108947754

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '5a7a006989d1d7934467e5e85df1a795a801e063' 
 Execution Time:0.00023913383483887

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '5a7a006989d1d7934467e5e85df1a795a801e063' 
 Execution Time:0.00031304359436035

-------------------------------------
SELECT GET_LOCK('9a6da78e49de89a0ce5b1d3a749a0575', 300) AS ci_session_lock 
 Execution Time:0.00020098686218262

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '5a7a006989d1d7934467e5e85df1a795a801e063' 
 Execution Time:0.00022697448730469

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '5a7a006989d1d7934467e5e85df1a795a801e063' 
 Execution Time:0.00031495094299316

-------------------------------------
SELECT GET_LOCK('9a6da78e49de89a0ce5b1d3a749a0575', 300) AS ci_session_lock 
 Execution Time:0.00014781951904297

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '5a7a006989d1d7934467e5e85df1a795a801e063' 
 Execution Time:0.00020194053649902

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '5a7a006989d1d7934467e5e85df1a795a801e063' 
 Execution Time:0.00041007995605469

-------------------------------------
SELECT GET_LOCK('9a6da78e49de89a0ce5b1d3a749a0575', 300) AS ci_session_lock 
 Execution Time:0.00017404556274414

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '5a7a006989d1d7934467e5e85df1a795a801e063' 
 Execution Time:0.00020599365234375

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1661078661, `data` = '__ci_last_regenerate|i:1661078661;user_id|s:1:\"1\";email|s:20:\"fantom15dm@gmail.com\";topic_id|s:1:\"2\";questions_count|a:6:{i:0;s:1:\"8\";i:1;s:1:\"9\";i:2;s:2:\"10\";i:3;s:2:\"11\";i:4;s:2:\"12\";i:5;s:2:\"13\";}'
WHERE `id` = '5a7a006989d1d7934467e5e85df1a795a801e063' 
 Execution Time:0.001255989074707

-------------------------------------
SELECT RELEASE_LOCK('9a6da78e49de89a0ce5b1d3a749a0575') AS ci_session_lock 
 Execution Time:0.00011205673217773

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '9934b603d74ff879dbbfaf4f851c9dbc0232685c' 
 Execution Time:0.00017404556274414

-------------------------------------
SELECT GET_LOCK('3bcc4da8eee50c3174c1038d791268d7', 300) AS ci_session_lock 
 Execution Time:8.9168548583984E-5

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '481e5b60bc0efb217621178a2ea2b4752e3bab1d' 
 Execution Time:0.00010895729064941

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '481e5b60bc0efb217621178a2ea2b4752e3bab1d' 
 Execution Time:0.00040984153747559

-------------------------------------
SELECT GET_LOCK('3bcc4da8eee50c3174c1038d791268d7', 300) AS ci_session_lock 
 Execution Time:0.00029802322387695

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '481e5b60bc0efb217621178a2ea2b4752e3bab1d' 
 Execution Time:0.00046586990356445

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '481e5b60bc0efb217621178a2ea2b4752e3bab1d' 
 Execution Time:0.00028085708618164

-------------------------------------
SELECT GET_LOCK('3bcc4da8eee50c3174c1038d791268d7', 300) AS ci_session_lock 
 Execution Time:0.0001227855682373

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '481e5b60bc0efb217621178a2ea2b4752e3bab1d' 
 Execution Time:0.00016903877258301

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '481e5b60bc0efb217621178a2ea2b4752e3bab1d' 
 Execution Time:0.0002899169921875

-------------------------------------
SELECT GET_LOCK('3bcc4da8eee50c3174c1038d791268d7', 300) AS ci_session_lock 
 Execution Time:0.00013399124145508

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '481e5b60bc0efb217621178a2ea2b4752e3bab1d' 
 Execution Time:0.0001671314239502

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '481e5b60bc0efb217621178a2ea2b4752e3bab1d' 
 Execution Time:0.0003049373626709

-------------------------------------
SELECT GET_LOCK('3bcc4da8eee50c3174c1038d791268d7', 300) AS ci_session_lock 
 Execution Time:0.0001370906829834

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '481e5b60bc0efb217621178a2ea2b4752e3bab1d' 
 Execution Time:0.0001671314239502

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '481e5b60bc0efb217621178a2ea2b4752e3bab1d' 
 Execution Time:0.0008690357208252

-------------------------------------
SELECT GET_LOCK('3bcc4da8eee50c3174c1038d791268d7', 300) AS ci_session_lock 
 Execution Time:0.00021600723266602

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '481e5b60bc0efb217621178a2ea2b4752e3bab1d' 
 Execution Time:0.00018501281738281

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1661080429, `data` = '__ci_last_regenerate|i:1661080429;user_id|s:1:\"1\";email|s:20:\"fantom15dm@gmail.com\";topic_id|s:1:\"2\";questions_count|a:6:{i:0;s:1:\"8\";i:1;s:1:\"9\";i:2;s:2:\"10\";i:3;s:2:\"11\";i:4;s:2:\"12\";i:5;s:2:\"13\";}user_info|O:8:\"stdClass\":12:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-08-06 15:42:40\";}'
WHERE `id` = '481e5b60bc0efb217621178a2ea2b4752e3bab1d' 
 Execution Time:0.040336132049561

-------------------------------------
SELECT RELEASE_LOCK('3bcc4da8eee50c3174c1038d791268d7') AS ci_session_lock 
 Execution Time:0.00032997131347656

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '11e37135dea68364f045faf098ee8d01ab52b57d' 
 Execution Time:0.00037384033203125

-------------------------------------
SELECT GET_LOCK('6d56ff64da0bf0da81b548b519830204', 300) AS ci_session_lock 
 Execution Time:0.00028419494628906

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'bc7dd21f8ba3be42c05a37cda36daede48658392' 
 Execution Time:0.00037908554077148

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'bc7dd21f8ba3be42c05a37cda36daede48658392' 
 Execution Time:0.0003659725189209

-------------------------------------
SELECT GET_LOCK('6d56ff64da0bf0da81b548b519830204', 300) AS ci_session_lock 
 Execution Time:0.00020694732666016

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'bc7dd21f8ba3be42c05a37cda36daede48658392' 
 Execution Time:0.0002601146697998

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'bc7dd21f8ba3be42c05a37cda36daede48658392' 
 Execution Time:0.00029706954956055

-------------------------------------
SELECT GET_LOCK('6d56ff64da0bf0da81b548b519830204', 300) AS ci_session_lock 
 Execution Time:0.00013422966003418

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'bc7dd21f8ba3be42c05a37cda36daede48658392' 
 Execution Time:0.00016903877258301

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'bc7dd21f8ba3be42c05a37cda36daede48658392' 
 Execution Time:0.00050902366638184

-------------------------------------
SELECT GET_LOCK('6d56ff64da0bf0da81b548b519830204', 300) AS ci_session_lock 
 Execution Time:0.00028610229492188

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'bc7dd21f8ba3be42c05a37cda36daede48658392' 
 Execution Time:0.00033712387084961

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1661081316, `data` = '__ci_last_regenerate|i:1661081316;user_id|s:1:\"1\";email|s:20:\"fantom15dm@gmail.com\";topic_id|s:1:\"2\";questions_count|a:6:{i:0;s:1:\"8\";i:1;s:1:\"9\";i:2;s:2:\"10\";i:3;s:2:\"11\";i:4;s:2:\"12\";i:5;s:2:\"13\";}user_info|O:8:\"stdClass\":12:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-08-06 15:42:40\";}'
WHERE `id` = 'bc7dd21f8ba3be42c05a37cda36daede48658392' 
 Execution Time:0.017828941345215

-------------------------------------
SELECT RELEASE_LOCK('6d56ff64da0bf0da81b548b519830204') AS ci_session_lock 
 Execution Time:0.00026297569274902

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '3d2941da5bead9687c9db74d1c9e83504447857a' 
 Execution Time:0.00068902969360352

-------------------------------------
SELECT GET_LOCK('5106640a2763c34f1a2e9e29787c8c3a', 300) AS ci_session_lock 
 Execution Time:0.00015687942504883

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'db03b70f2a6acca98ad7ebfd3ef025bc10b82a1c' 
 Execution Time:0.00027298927307129

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'db03b70f2a6acca98ad7ebfd3ef025bc10b82a1c' 
 Execution Time:0.0003211498260498

-------------------------------------
SELECT GET_LOCK('5106640a2763c34f1a2e9e29787c8c3a', 300) AS ci_session_lock 
 Execution Time:0.00024199485778809

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'db03b70f2a6acca98ad7ebfd3ef025bc10b82a1c' 
 Execution Time:0.00019598007202148

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'db03b70f2a6acca98ad7ebfd3ef025bc10b82a1c' 
 Execution Time:0.0003809928894043

-------------------------------------
SELECT GET_LOCK('5106640a2763c34f1a2e9e29787c8c3a', 300) AS ci_session_lock 
 Execution Time:0.00027894973754883

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'db03b70f2a6acca98ad7ebfd3ef025bc10b82a1c' 
 Execution Time:0.0003199577331543

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `status` = 'active' 
 Execution Time:0.00060892105102539

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'db03b70f2a6acca98ad7ebfd3ef025bc10b82a1c' 
 Execution Time:0.00028181076049805

-------------------------------------
SELECT GET_LOCK('5106640a2763c34f1a2e9e29787c8c3a', 300) AS ci_session_lock 
 Execution Time:0.00022697448730469

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'db03b70f2a6acca98ad7ebfd3ef025bc10b82a1c' 
 Execution Time:0.00025606155395508

-------------------------------------
SELECT *
FROM `users`
WHERE `id` = '6' 
 Execution Time:0.0003659725189209

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'db03b70f2a6acca98ad7ebfd3ef025bc10b82a1c' 
 Execution Time:0.00030398368835449

-------------------------------------
SELECT GET_LOCK('5106640a2763c34f1a2e9e29787c8c3a', 300) AS ci_session_lock 
 Execution Time:0.00017499923706055

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'db03b70f2a6acca98ad7ebfd3ef025bc10b82a1c' 
 Execution Time:0.00022602081298828

-------------------------------------
SELECT *
FROM `users`
WHERE `id` = '6' 
 Execution Time:0.00030708312988281

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'db03b70f2a6acca98ad7ebfd3ef025bc10b82a1c' 
 Execution Time:0.00038599967956543

-------------------------------------
SELECT GET_LOCK('5106640a2763c34f1a2e9e29787c8c3a', 300) AS ci_session_lock 
 Execution Time:0.00014281272888184

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'db03b70f2a6acca98ad7ebfd3ef025bc10b82a1c' 
 Execution Time:0.00029110908508301

-------------------------------------
SELECT *
FROM `users`
WHERE `id` = '6' 
 Execution Time:0.00045108795166016

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'db03b70f2a6acca98ad7ebfd3ef025bc10b82a1c' 
 Execution Time:0.0030410289764404

-------------------------------------
SELECT GET_LOCK('5106640a2763c34f1a2e9e29787c8c3a', 300) AS ci_session_lock 
 Execution Time:0.00020599365234375

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'db03b70f2a6acca98ad7ebfd3ef025bc10b82a1c' 
 Execution Time:0.00022792816162109

-------------------------------------
SELECT *
FROM `message`
WHERE `user_id` = '6' 
 Execution Time:0.00043392181396484

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'db03b70f2a6acca98ad7ebfd3ef025bc10b82a1c' 
 Execution Time:0.00039291381835938

-------------------------------------
SELECT GET_LOCK('5106640a2763c34f1a2e9e29787c8c3a', 300) AS ci_session_lock 
 Execution Time:0.00023317337036133

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'db03b70f2a6acca98ad7ebfd3ef025bc10b82a1c' 
 Execution Time:0.00027704238891602

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `status` = 'active' 
 Execution Time:0.00039505958557129

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'db03b70f2a6acca98ad7ebfd3ef025bc10b82a1c' 
 Execution Time:0.00038790702819824

-------------------------------------
SELECT GET_LOCK('5106640a2763c34f1a2e9e29787c8c3a', 300) AS ci_session_lock 
 Execution Time:0.00015687942504883

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'db03b70f2a6acca98ad7ebfd3ef025bc10b82a1c' 
 Execution Time:0.00019502639770508

