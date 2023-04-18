-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'ed1c071ff05609e85c6b423991848786735017c5' 
 Execution Time:0.00033998489379883

-------------------------------------
SELECT GET_LOCK('cb23f26f1feebbcc0b704f7b161a6d07', 300) AS ci_session_lock 
 Execution Time:0.00017189979553223

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'ed1c071ff05609e85c6b423991848786735017c5' 
 Execution Time:0.00041103363037109

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'ed1c071ff05609e85c6b423991848786735017c5' 
 Execution Time:0.00030112266540527

-------------------------------------
SELECT GET_LOCK('cb23f26f1feebbcc0b704f7b161a6d07', 300) AS ci_session_lock 
 Execution Time:0.00012612342834473

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'ed1c071ff05609e85c6b423991848786735017c5' 
 Execution Time:0.00017499923706055

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00031304359436035

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'ed1c071ff05609e85c6b423991848786735017c5' 
 Execution Time:0.00058388710021973

-------------------------------------
SELECT GET_LOCK('cb23f26f1feebbcc0b704f7b161a6d07', 300) AS ci_session_lock 
 Execution Time:0.00022292137145996

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'ed1c071ff05609e85c6b423991848786735017c5' 
 Execution Time:0.00029206275939941

-------------------------------------
SELECT *
FROM `languages`
WHERE `en_lang_name` = 'English' 
 Execution Time:0.00035691261291504

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `status` = 'active'
AND `language_id` = '2' 
 Execution Time:0.16116714477539

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00060296058654785

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'ed1c071ff05609e85c6b423991848786735017c5' 
 Execution Time:0.00050187110900879

-------------------------------------
SELECT GET_LOCK('cb23f26f1feebbcc0b704f7b161a6d07', 300) AS ci_session_lock 
 Execution Time:0.00017499923706055

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'ed1c071ff05609e85c6b423991848786735017c5' 
 Execution Time:0.00020289421081543

-------------------------------------
SELECT *
FROM `languages`
WHERE `en_lang_name` = 'Dutch' 
 Execution Time:0.00028300285339355

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `status` = 'active'
AND `language_id` = '1' 
 Execution Time:0.00022196769714355

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00026392936706543

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'ed1c071ff05609e85c6b423991848786735017c5' 
 Execution Time:0.00035309791564941

-------------------------------------
SELECT GET_LOCK('cb23f26f1feebbcc0b704f7b161a6d07', 300) AS ci_session_lock 
 Execution Time:0.0002751350402832

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'ed1c071ff05609e85c6b423991848786735017c5' 
 Execution Time:0.00035500526428223

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `id` = '2'
AND `status` = 'active' 
 Execution Time:0.00040197372436523

-------------------------------------
SELECT `id`
FROM `questions`
WHERE `topic_id` = '2'
AND `status` = 'active'
ORDER BY `id` ASC
 LIMIT 1 
 Execution Time:0.031987905502319

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.007720947265625

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'ed1c071ff05609e85c6b423991848786735017c5' 
 Execution Time:0.00028514862060547

-------------------------------------
SELECT GET_LOCK('cb23f26f1feebbcc0b704f7b161a6d07', 300) AS ci_session_lock 
 Execution Time:0.0001530647277832

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'ed1c071ff05609e85c6b423991848786735017c5' 
 Execution Time:0.0002129077911377

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.0004270076751709

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '8', 'a7a1ec9144afe78af98b1c2fa9f5f589') 
 Execution Time:0.093302011489868

-------------------------------------
SELECT `id`
FROM `questions`
WHERE `topic_id` = '2'
AND `status` = 'active' 
 Execution Time:0.00030517578125

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00020098686218262

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00025796890258789

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00031399726867676

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'ed1c071ff05609e85c6b423991848786735017c5' 
 Execution Time:0.00028681755065918

-------------------------------------
SELECT GET_LOCK('cb23f26f1feebbcc0b704f7b161a6d07', 300) AS ci_session_lock 
 Execution Time:0.00039911270141602

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'ed1c071ff05609e85c6b423991848786735017c5' 
 Execution Time:0.00038719177246094

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.0002899169921875

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '8'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00030183792114258

-------------------------------------
UPDATE `user_answers_temp` SET `answer` = '1', `status` = 'false'
WHERE `id` = '61' 
 Execution Time:0.091778993606567

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'ed1c071ff05609e85c6b423991848786735017c5' 
 Execution Time:0.00027108192443848

-------------------------------------
SELECT GET_LOCK('cb23f26f1feebbcc0b704f7b161a6d07', 300) AS ci_session_lock 
 Execution Time:0.00012397766113281

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'ed1c071ff05609e85c6b423991848786735017c5' 
 Execution Time:0.00044488906860352

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00024199485778809

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'ed1c071ff05609e85c6b423991848786735017c5' 
 Execution Time:0.0003969669342041

-------------------------------------
SELECT GET_LOCK('cb23f26f1feebbcc0b704f7b161a6d07', 300) AS ci_session_lock 
 Execution Time:0.00021600723266602

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'ed1c071ff05609e85c6b423991848786735017c5' 
 Execution Time:0.00020980834960938

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '9' 
 Execution Time:0.00026202201843262

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00019216537475586

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '9', 'a7a1ec9144afe78af98b1c2fa9f5f589') 
 Execution Time:0.036771059036255

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.00037980079650879

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00027585029602051

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00021910667419434

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'ed1c071ff05609e85c6b423991848786735017c5' 
 Execution Time:0.0002892017364502

-------------------------------------
SELECT GET_LOCK('cb23f26f1feebbcc0b704f7b161a6d07', 300) AS ci_session_lock 
 Execution Time:0.00013184547424316

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'ed1c071ff05609e85c6b423991848786735017c5' 
 Execution Time:0.00017905235290527

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.00027203559875488

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '9'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.0001990795135498

-------------------------------------
UPDATE `user_answers_temp` SET `answer` = 'C', `status` = 'false'
WHERE `id` = '62' 
 Execution Time:0.031621932983398

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'ed1c071ff05609e85c6b423991848786735017c5' 
 Execution Time:0.0002899169921875

-------------------------------------
SELECT GET_LOCK('cb23f26f1feebbcc0b704f7b161a6d07', 300) AS ci_session_lock 
 Execution Time:0.040938854217529

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'ed1c071ff05609e85c6b423991848786735017c5' 
 Execution Time:0.00041484832763672

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.00065207481384277

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '9'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00071597099304199

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'ed1c071ff05609e85c6b423991848786735017c5' 
 Execution Time:0.00028800964355469

-------------------------------------
SELECT GET_LOCK('cb23f26f1feebbcc0b704f7b161a6d07', 300) AS ci_session_lock 
 Execution Time:0.00012493133544922

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'ed1c071ff05609e85c6b423991848786735017c5' 
 Execution Time:0.00019192695617676

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00027322769165039

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'ed1c071ff05609e85c6b423991848786735017c5' 
 Execution Time:0.00033187866210938

-------------------------------------
SELECT GET_LOCK('cb23f26f1feebbcc0b704f7b161a6d07', 300) AS ci_session_lock 
 Execution Time:0.00013494491577148

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'ed1c071ff05609e85c6b423991848786735017c5' 
 Execution Time:0.0001680850982666

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '10' 
 Execution Time:0.00025010108947754

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00019311904907227

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '10', 'a7a1ec9144afe78af98b1c2fa9f5f589') 
 Execution Time:0.026756048202515

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '10' 
 Execution Time:0.00051188468933105

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00041484832763672

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00029182434082031

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'ed1c071ff05609e85c6b423991848786735017c5' 
 Execution Time:0.00037193298339844

-------------------------------------
SELECT GET_LOCK('cb23f26f1feebbcc0b704f7b161a6d07', 300) AS ci_session_lock 
 Execution Time:0.00016093254089355

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'ed1c071ff05609e85c6b423991848786735017c5' 
 Execution Time:0.00024199485778809

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '10' 
 Execution Time:0.00032711029052734

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '10'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00022721290588379

-------------------------------------
UPDATE `user_answers_temp` SET `answer` = '4', `status` = 'true'
WHERE `id` = '63' 
 Execution Time:0.0024518966674805

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'ed1c071ff05609e85c6b423991848786735017c5' 
 Execution Time:0.00028896331787109

-------------------------------------
SELECT GET_LOCK('cb23f26f1feebbcc0b704f7b161a6d07', 300) AS ci_session_lock 
 Execution Time:0.00012707710266113

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'ed1c071ff05609e85c6b423991848786735017c5' 
 Execution Time:0.00016379356384277

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00036001205444336

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'ed1c071ff05609e85c6b423991848786735017c5' 
 Execution Time:0.00028300285339355

-------------------------------------
SELECT GET_LOCK('cb23f26f1feebbcc0b704f7b161a6d07', 300) AS ci_session_lock 
 Execution Time:0.00013613700866699

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'ed1c071ff05609e85c6b423991848786735017c5' 
 Execution Time:0.0001680850982666

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00028896331787109

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00024318695068359

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '11', 'a7a1ec9144afe78af98b1c2fa9f5f589') 
 Execution Time:0.0091621875762939

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00026702880859375

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00026106834411621

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00021791458129883

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'ed1c071ff05609e85c6b423991848786735017c5' 
 Execution Time:0.00032401084899902

-------------------------------------
SELECT GET_LOCK('cb23f26f1feebbcc0b704f7b161a6d07', 300) AS ci_session_lock 
 Execution Time:0.00016903877258301

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'ed1c071ff05609e85c6b423991848786735017c5' 
 Execution Time:0.00020098686218262

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00026297569274902

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.0001990795135498

-------------------------------------
UPDATE `user_answers_temp` SET `answer` = 'yes', `status` = 'false'
WHERE `id` = '64' 
 Execution Time:0.049211978912354

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'ed1c071ff05609e85c6b423991848786735017c5' 
 Execution Time:0.00027704238891602

-------------------------------------
SELECT GET_LOCK('cb23f26f1feebbcc0b704f7b161a6d07', 300) AS ci_session_lock 
 Execution Time:0.00012588500976562

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'ed1c071ff05609e85c6b423991848786735017c5' 
 Execution Time:0.0002439022064209

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00041699409484863

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'ed1c071ff05609e85c6b423991848786735017c5' 
 Execution Time:0.00031709671020508

-------------------------------------
SELECT GET_LOCK('cb23f26f1feebbcc0b704f7b161a6d07', 300) AS ci_session_lock 
 Execution Time:0.0001680850982666

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'ed1c071ff05609e85c6b423991848786735017c5' 
 Execution Time:0.00020384788513184

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '12' 
 Execution Time:0.00033807754516602

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00020813941955566

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '12', 'a7a1ec9144afe78af98b1c2fa9f5f589') 
 Execution Time:0.031328916549683

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '12' 
 Execution Time:0.00027608871459961

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00023603439331055

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00025677680969238

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'ed1c071ff05609e85c6b423991848786735017c5' 
 Execution Time:0.00044703483581543

-------------------------------------
SELECT GET_LOCK('cb23f26f1feebbcc0b704f7b161a6d07', 300) AS ci_session_lock 
 Execution Time:0.00019717216491699

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'ed1c071ff05609e85c6b423991848786735017c5' 
 Execution Time:0.00026607513427734

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1671894170, `data` = '__ci_last_regenerate|i:1671894170;user_info|O:8:\"stdClass\":13:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:13:\"user_language\";s:1:\"2\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-11-14 19:33:55\";}site_lang|s:5:\"dutch\";topic_id|s:1:\"2\";test_hash|s:32:\"a7a1ec9144afe78af98b1c2fa9f5f589\";questions_count|a:6:{i:0;s:1:\"8\";i:1;s:1:\"9\";i:2;s:2:\"10\";i:3;s:2:\"11\";i:4;s:2:\"12\";i:5;s:2:\"13\";}'
WHERE `id` = 'ed1c071ff05609e85c6b423991848786735017c5' 
 Execution Time:0.031166791915894

-------------------------------------
SELECT RELEASE_LOCK('cb23f26f1feebbcc0b704f7b161a6d07') AS ci_session_lock 
 Execution Time:0.00014591217041016

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'c80c93a6717623aa974f0270f97e9c86417e43f0' 
 Execution Time:0.00020408630371094

-------------------------------------
SELECT GET_LOCK('642159225094235546c25b58846c8019', 300) AS ci_session_lock 
 Execution Time:0.0001060962677002

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '1c9840c4c4958e42a1a0c1e9a2bc05acfd16247e' 
 Execution Time:0.00015401840209961

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '12' 
 Execution Time:0.0003209114074707

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00021791458129883

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '12' 
 Execution Time:0.00018501281738281

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00018405914306641

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00036096572875977

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '1c9840c4c4958e42a1a0c1e9a2bc05acfd16247e' 
 Execution Time:0.00031399726867676

-------------------------------------
SELECT GET_LOCK('642159225094235546c25b58846c8019', 300) AS ci_session_lock 
 Execution Time:0.00017595291137695

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '1c9840c4c4958e42a1a0c1e9a2bc05acfd16247e' 
 Execution Time:0.00019478797912598

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00038695335388184

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00021100044250488

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00023794174194336

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00025200843811035

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00032210350036621

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '1c9840c4c4958e42a1a0c1e9a2bc05acfd16247e' 
 Execution Time:0.00049591064453125

-------------------------------------
SELECT GET_LOCK('642159225094235546c25b58846c8019', 300) AS ci_session_lock 
 Execution Time:0.00019598007202148

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '1c9840c4c4958e42a1a0c1e9a2bc05acfd16247e' 
 Execution Time:0.00032401084899902

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00064802169799805

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00044798851013184

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.0004279613494873

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00043797492980957

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00032401084899902

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '1c9840c4c4958e42a1a0c1e9a2bc05acfd16247e' 
 Execution Time:0.00029301643371582

-------------------------------------
SELECT GET_LOCK('642159225094235546c25b58846c8019', 300) AS ci_session_lock 
 Execution Time:0.00020313262939453

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '1c9840c4c4958e42a1a0c1e9a2bc05acfd16247e' 
 Execution Time:0.00024795532226562

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00054383277893066

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00033903121948242

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00031208992004395

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00035786628723145

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.0003359317779541

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '1c9840c4c4958e42a1a0c1e9a2bc05acfd16247e' 
 Execution Time:0.00041103363037109

-------------------------------------
SELECT GET_LOCK('642159225094235546c25b58846c8019', 300) AS ci_session_lock 
 Execution Time:0.00020194053649902

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '1c9840c4c4958e42a1a0c1e9a2bc05acfd16247e' 
 Execution Time:0.00029492378234863

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00032210350036621

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00079488754272461

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.0002138614654541

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00028204917907715

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00095009803771973

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '1c9840c4c4958e42a1a0c1e9a2bc05acfd16247e' 
 Execution Time:0.0003359317779541

-------------------------------------
SELECT GET_LOCK('642159225094235546c25b58846c8019', 300) AS ci_session_lock 
 Execution Time:0.00039005279541016

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '1c9840c4c4958e42a1a0c1e9a2bc05acfd16247e' 
 Execution Time:0.00028085708618164

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1671894480, `data` = '__ci_last_regenerate|i:1671894480;user_info|O:8:\"stdClass\":13:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:13:\"user_language\";s:1:\"2\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-11-14 19:33:55\";}site_lang|s:5:\"dutch\";topic_id|s:1:\"2\";test_hash|s:32:\"a7a1ec9144afe78af98b1c2fa9f5f589\";questions_count|a:6:{i:0;s:1:\"8\";i:1;s:1:\"9\";i:2;s:2:\"10\";i:3;s:2:\"11\";i:4;s:2:\"12\";i:5;s:2:\"13\";}'
WHERE `id` = '1c9840c4c4958e42a1a0c1e9a2bc05acfd16247e' 
 Execution Time:0.065176963806152

-------------------------------------
SELECT RELEASE_LOCK('642159225094235546c25b58846c8019') AS ci_session_lock 
 Execution Time:0.00024199485778809

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'e7b1708eaedd2ced3cd02f4e238b64656a043db4' 
 Execution Time:0.00035881996154785

-------------------------------------
SELECT GET_LOCK('ca31303a79acd6f91cc7d8887386c2c6', 300) AS ci_session_lock 
 Execution Time:0.00017905235290527

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '44da8414989d73c36225c0e6e470ca0fd238ce89' 
 Execution Time:0.0004878044128418

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00049519538879395

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00028586387634277

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.0001990795135498

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00029897689819336

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00036311149597168

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '44da8414989d73c36225c0e6e470ca0fd238ce89' 
 Execution Time:0.00028705596923828

-------------------------------------
SELECT GET_LOCK('ca31303a79acd6f91cc7d8887386c2c6', 300) AS ci_session_lock 
 Execution Time:0.00016093254089355

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '44da8414989d73c36225c0e6e470ca0fd238ce89' 
 Execution Time:0.00026392936706543

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00043797492980957

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.0003960132598877

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00050592422485352

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00034379959106445

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00020980834960938

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '44da8414989d73c36225c0e6e470ca0fd238ce89' 
 Execution Time:0.00030398368835449

-------------------------------------
SELECT GET_LOCK('ca31303a79acd6f91cc7d8887386c2c6', 300) AS ci_session_lock 
 Execution Time:0.00020098686218262

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '44da8414989d73c36225c0e6e470ca0fd238ce89' 
 Execution Time:0.00021791458129883

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00062799453735352

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00068306922912598

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.0011980533599854

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00057792663574219

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00046586990356445

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '44da8414989d73c36225c0e6e470ca0fd238ce89' 
 Execution Time:0.00038599967956543

-------------------------------------
SELECT GET_LOCK('ca31303a79acd6f91cc7d8887386c2c6', 300) AS ci_session_lock 
 Execution Time:0.00028204917907715

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '44da8414989d73c36225c0e6e470ca0fd238ce89' 
 Execution Time:0.00040698051452637

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1671894810, `data` = '__ci_last_regenerate|i:1671894810;user_info|O:8:\"stdClass\":13:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:13:\"user_language\";s:1:\"2\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-11-14 19:33:55\";}site_lang|s:5:\"dutch\";topic_id|s:1:\"2\";test_hash|s:32:\"a7a1ec9144afe78af98b1c2fa9f5f589\";questions_count|a:6:{i:0;s:1:\"8\";i:1;s:1:\"9\";i:2;s:2:\"10\";i:3;s:2:\"11\";i:4;s:2:\"12\";i:5;s:2:\"13\";}'
WHERE `id` = '44da8414989d73c36225c0e6e470ca0fd238ce89' 
 Execution Time:0.10631585121155

-------------------------------------
SELECT RELEASE_LOCK('ca31303a79acd6f91cc7d8887386c2c6') AS ci_session_lock 
 Execution Time:0.00020885467529297

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'abb3d15f067dd24b42954b64ab42014f9cd134e0' 
 Execution Time:0.0002739429473877

-------------------------------------
SELECT GET_LOCK('67c4e30d46a6230644bda9e5e2f9132f', 300) AS ci_session_lock 
 Execution Time:0.0001978874206543

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '1c6a204f4fd9ec899b705959711b57a5f0dc6a36' 
 Execution Time:0.00017714500427246

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00033998489379883

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00017786026000977

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00018215179443359

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00018501281738281

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00043582916259766

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '1c6a204f4fd9ec899b705959711b57a5f0dc6a36' 
 Execution Time:0.00053095817565918

-------------------------------------
SELECT GET_LOCK('67c4e30d46a6230644bda9e5e2f9132f', 300) AS ci_session_lock 
 Execution Time:0.0001828670501709

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '1c6a204f4fd9ec899b705959711b57a5f0dc6a36' 
 Execution Time:0.00021719932556152

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00052785873413086

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00030183792114258

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00024604797363281

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00026822090148926

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.0008080005645752

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '1c6a204f4fd9ec899b705959711b57a5f0dc6a36' 
 Execution Time:0.00031208992004395

-------------------------------------
SELECT GET_LOCK('67c4e30d46a6230644bda9e5e2f9132f', 300) AS ci_session_lock 
 Execution Time:0.00028300285339355

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '1c6a204f4fd9ec899b705959711b57a5f0dc6a36' 
 Execution Time:0.00037598609924316

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.0004580020904541

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00034403800964355

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00026297569274902

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00031805038452148

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00052404403686523

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '1c6a204f4fd9ec899b705959711b57a5f0dc6a36' 
 Execution Time:0.00025582313537598

-------------------------------------
SELECT GET_LOCK('67c4e30d46a6230644bda9e5e2f9132f', 300) AS ci_session_lock 
 Execution Time:0.00015091896057129

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '1c6a204f4fd9ec899b705959711b57a5f0dc6a36' 
 Execution Time:0.00021004676818848

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00051403045654297

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00046110153198242

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00022697448730469

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00024795532226562

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00033092498779297

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '1c6a204f4fd9ec899b705959711b57a5f0dc6a36' 
 Execution Time:0.00030994415283203

-------------------------------------
SELECT GET_LOCK('67c4e30d46a6230644bda9e5e2f9132f', 300) AS ci_session_lock 
 Execution Time:0.00019407272338867

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '1c6a204f4fd9ec899b705959711b57a5f0dc6a36' 
 Execution Time:0.00022792816162109

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1671896338, `data` = '__ci_last_regenerate|i:1671896338;user_info|O:8:\"stdClass\":13:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:13:\"user_language\";s:1:\"2\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-11-14 19:33:55\";}site_lang|s:5:\"dutch\";topic_id|s:1:\"2\";test_hash|s:32:\"a7a1ec9144afe78af98b1c2fa9f5f589\";questions_count|a:6:{i:0;s:1:\"8\";i:1;s:1:\"9\";i:2;s:2:\"10\";i:3;s:2:\"11\";i:4;s:2:\"12\";i:5;s:2:\"13\";}'
WHERE `id` = '1c6a204f4fd9ec899b705959711b57a5f0dc6a36' 
 Execution Time:0.054755926132202

-------------------------------------
SELECT RELEASE_LOCK('67c4e30d46a6230644bda9e5e2f9132f') AS ci_session_lock 
 Execution Time:0.00020790100097656

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'cbd0395ad8207209f1667533ae69a5ea85e70197' 
 Execution Time:0.00028395652770996

-------------------------------------
SELECT GET_LOCK('baedca1cec68165f8691a95cea9d4132', 300) AS ci_session_lock 
 Execution Time:0.00012898445129395

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '7ed0010a9f4989f3248d8105069a586276940ffe' 
 Execution Time:0.00020503997802734

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.0004420280456543

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00036978721618652

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00031208992004395

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00036096572875977

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00039100646972656

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '7ed0010a9f4989f3248d8105069a586276940ffe' 
 Execution Time:0.00032591819763184

-------------------------------------
SELECT GET_LOCK('baedca1cec68165f8691a95cea9d4132', 300) AS ci_session_lock 
 Execution Time:0.00016593933105469

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '7ed0010a9f4989f3248d8105069a586276940ffe' 
 Execution Time:0.00020408630371094

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.0003211498260498

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00023102760314941

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00022697448730469

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00020408630371094

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00030994415283203

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '7ed0010a9f4989f3248d8105069a586276940ffe' 
 Execution Time:0.00029611587524414

-------------------------------------
SELECT GET_LOCK('baedca1cec68165f8691a95cea9d4132', 300) AS ci_session_lock 
 Execution Time:0.00020599365234375

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '7ed0010a9f4989f3248d8105069a586276940ffe' 
 Execution Time:0.00027203559875488

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00033879280090332

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00032496452331543

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00023603439331055

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00022196769714355

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00027704238891602

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '7ed0010a9f4989f3248d8105069a586276940ffe' 
 Execution Time:0.00040793418884277

-------------------------------------
SELECT GET_LOCK('baedca1cec68165f8691a95cea9d4132', 300) AS ci_session_lock 
 Execution Time:0.00036907196044922

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '7ed0010a9f4989f3248d8105069a586276940ffe' 
 Execution Time:0.00043010711669922

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1671898603, `data` = '__ci_last_regenerate|i:1671898603;user_info|O:8:\"stdClass\":13:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:13:\"user_language\";s:1:\"2\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-11-14 19:33:55\";}site_lang|s:5:\"dutch\";topic_id|s:1:\"2\";test_hash|s:32:\"a7a1ec9144afe78af98b1c2fa9f5f589\";questions_count|a:6:{i:0;s:1:\"8\";i:1;s:1:\"9\";i:2;s:2:\"10\";i:3;s:2:\"11\";i:4;s:2:\"12\";i:5;s:2:\"13\";}'
WHERE `id` = '7ed0010a9f4989f3248d8105069a586276940ffe' 
 Execution Time:0.039232969284058

-------------------------------------
SELECT RELEASE_LOCK('baedca1cec68165f8691a95cea9d4132') AS ci_session_lock 
 Execution Time:0.00012803077697754

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '866db4934f2a20da4d6d09308bf9151d2ec5e1b1' 
 Execution Time:0.00018906593322754

-------------------------------------
SELECT GET_LOCK('376a61cab5eb18e04d338d5b9bb30a67', 300) AS ci_session_lock 
 Execution Time:7.7962875366211E-5

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '86fd77511bda9742ed57efb044ed1bab71b3df43' 
 Execution Time:0.00014019012451172

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00036406517028809

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00025296211242676

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.024540901184082

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00031900405883789

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.0005791187286377

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '86fd77511bda9742ed57efb044ed1bab71b3df43' 
 Execution Time:0.0003058910369873

-------------------------------------
SELECT GET_LOCK('376a61cab5eb18e04d338d5b9bb30a67', 300) AS ci_session_lock 
 Execution Time:0.00014781951904297

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '86fd77511bda9742ed57efb044ed1bab71b3df43' 
 Execution Time:0.00020599365234375

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00049090385437012

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00029301643371582

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00020599365234375

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00022697448730469

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00038886070251465

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '86fd77511bda9742ed57efb044ed1bab71b3df43' 
 Execution Time:0.00038886070251465

-------------------------------------
SELECT GET_LOCK('376a61cab5eb18e04d338d5b9bb30a67', 300) AS ci_session_lock 
 Execution Time:0.00022506713867188

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '86fd77511bda9742ed57efb044ed1bab71b3df43' 
 Execution Time:0.00025701522827148

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00032615661621094

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00020980834960938

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00018310546875

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00018906593322754

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00023698806762695

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '86fd77511bda9742ed57efb044ed1bab71b3df43' 
 Execution Time:0.00037503242492676

-------------------------------------
SELECT GET_LOCK('376a61cab5eb18e04d338d5b9bb30a67', 300) AS ci_session_lock 
 Execution Time:0.00019502639770508

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '86fd77511bda9742ed57efb044ed1bab71b3df43' 
 Execution Time:0.00026106834411621

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.0028049945831299

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00043702125549316

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.0001990795135498

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00016593933105469

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00018906593322754

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '86fd77511bda9742ed57efb044ed1bab71b3df43' 
 Execution Time:0.00072789192199707

-------------------------------------
SELECT GET_LOCK('376a61cab5eb18e04d338d5b9bb30a67', 300) AS ci_session_lock 
 Execution Time:0.00022602081298828

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '86fd77511bda9742ed57efb044ed1bab71b3df43' 
 Execution Time:0.00028109550476074

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1671905201, `data` = '__ci_last_regenerate|i:1671905201;user_info|O:8:\"stdClass\":13:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:13:\"user_language\";s:1:\"2\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-11-14 19:33:55\";}site_lang|s:5:\"dutch\";topic_id|s:1:\"2\";test_hash|s:32:\"a7a1ec9144afe78af98b1c2fa9f5f589\";questions_count|a:6:{i:0;s:1:\"8\";i:1;s:1:\"9\";i:2;s:2:\"10\";i:3;s:2:\"11\";i:4;s:2:\"12\";i:5;s:2:\"13\";}'
WHERE `id` = '86fd77511bda9742ed57efb044ed1bab71b3df43' 
 Execution Time:0.070945024490356

-------------------------------------
SELECT RELEASE_LOCK('376a61cab5eb18e04d338d5b9bb30a67') AS ci_session_lock 
 Execution Time:0.0001530647277832

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '74ac51399d3766050eda50a6cf899ac4c3c23a67' 
 Execution Time:0.00020980834960938

-------------------------------------
SELECT GET_LOCK('feaaf84221db7c70fcf94dbb59550218', 300) AS ci_session_lock 
 Execution Time:0.00010776519775391

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '5c3d42112323f77abfc3d0dac1571202c8a998b5' 
 Execution Time:0.00014615058898926

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00071597099304199

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.0005190372467041

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00037407875061035

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00032401084899902

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00046300888061523

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '5c3d42112323f77abfc3d0dac1571202c8a998b5' 
 Execution Time:0.03654408454895

-------------------------------------
SELECT GET_LOCK('feaaf84221db7c70fcf94dbb59550218', 300) AS ci_session_lock 
 Execution Time:0.00027203559875488

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '5c3d42112323f77abfc3d0dac1571202c8a998b5' 
 Execution Time:0.0003361701965332

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1671905563, `data` = '__ci_last_regenerate|i:1671905563;user_info|O:8:\"stdClass\":13:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:13:\"user_language\";s:1:\"2\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-11-14 19:33:55\";}site_lang|s:5:\"dutch\";topic_id|s:1:\"2\";test_hash|s:32:\"a7a1ec9144afe78af98b1c2fa9f5f589\";questions_count|a:6:{i:0;s:1:\"8\";i:1;s:1:\"9\";i:2;s:2:\"10\";i:3;s:2:\"11\";i:4;s:2:\"12\";i:5;s:2:\"13\";}'
WHERE `id` = '5c3d42112323f77abfc3d0dac1571202c8a998b5' 
 Execution Time:0.07566499710083

-------------------------------------
SELECT RELEASE_LOCK('feaaf84221db7c70fcf94dbb59550218') AS ci_session_lock 
 Execution Time:0.00013399124145508

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'bc321948f68edd7898f28dea4ded4628755949df' 
 Execution Time:0.00021004676818848

-------------------------------------
SELECT GET_LOCK('c64d246e42581e4c9de93bf713e578a3', 300) AS ci_session_lock 
 Execution Time:0.00010299682617188

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '3748ef919493a99baf24bbfc8b2e186bd6b414df' 
 Execution Time:0.0001530647277832

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00061511993408203

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00040197372436523

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00038313865661621

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00033187866210938

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00030684471130371

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '3748ef919493a99baf24bbfc8b2e186bd6b414df' 
 Execution Time:0.00031018257141113

-------------------------------------
SELECT GET_LOCK('c64d246e42581e4c9de93bf713e578a3', 300) AS ci_session_lock 
 Execution Time:0.0001380443572998

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '3748ef919493a99baf24bbfc8b2e186bd6b414df' 
 Execution Time:0.00024986267089844

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00028800964355469

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00020003318786621

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00020503997802734

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00018095970153809

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00022101402282715

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '3748ef919493a99baf24bbfc8b2e186bd6b414df' 
 Execution Time:0.00039076805114746

-------------------------------------
SELECT GET_LOCK('c64d246e42581e4c9de93bf713e578a3', 300) AS ci_session_lock 
 Execution Time:0.00016903877258301

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '3748ef919493a99baf24bbfc8b2e186bd6b414df' 
 Execution Time:0.00026106834411621

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00046300888061523

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00028300285339355

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00022506713867188

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00022792816162109

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00034904479980469

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '3748ef919493a99baf24bbfc8b2e186bd6b414df' 
 Execution Time:0.00029897689819336

-------------------------------------
SELECT GET_LOCK('c64d246e42581e4c9de93bf713e578a3', 300) AS ci_session_lock 
 Execution Time:0.00017690658569336

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '3748ef919493a99baf24bbfc8b2e186bd6b414df' 
 Execution Time:0.00020194053649902

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00026297569274902

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00020194053649902

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00019693374633789

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00018191337585449

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00017690658569336

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '3748ef919493a99baf24bbfc8b2e186bd6b414df' 
 Execution Time:0.00055289268493652

-------------------------------------
SELECT GET_LOCK('c64d246e42581e4c9de93bf713e578a3', 300) AS ci_session_lock 
 Execution Time:0.00018692016601562

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '3748ef919493a99baf24bbfc8b2e186bd6b414df' 
 Execution Time:0.00022006034851074

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00036001205444336

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00026512145996094

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00022411346435547

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00018405914306641

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.030025959014893

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '3748ef919493a99baf24bbfc8b2e186bd6b414df' 
 Execution Time:0.00039410591125488

-------------------------------------
SELECT GET_LOCK('c64d246e42581e4c9de93bf713e578a3', 300) AS ci_session_lock 
 Execution Time:0.00020694732666016

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '3748ef919493a99baf24bbfc8b2e186bd6b414df' 
 Execution Time:0.00028419494628906

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.0037109851837158

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00052309036254883

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00048017501831055

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00042295455932617

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00030398368835449

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '3748ef919493a99baf24bbfc8b2e186bd6b414df' 
 Execution Time:0.00046086311340332

-------------------------------------
SELECT GET_LOCK('c64d246e42581e4c9de93bf713e578a3', 300) AS ci_session_lock 
 Execution Time:0.00019097328186035

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '3748ef919493a99baf24bbfc8b2e186bd6b414df' 
 Execution Time:0.00035881996154785

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1671905972, `data` = '__ci_last_regenerate|i:1671905972;user_info|O:8:\"stdClass\":13:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:13:\"user_language\";s:1:\"2\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-11-14 19:33:55\";}site_lang|s:5:\"dutch\";topic_id|s:1:\"2\";test_hash|s:32:\"a7a1ec9144afe78af98b1c2fa9f5f589\";questions_count|a:6:{i:0;s:1:\"8\";i:1;s:1:\"9\";i:2;s:2:\"10\";i:3;s:2:\"11\";i:4;s:2:\"12\";i:5;s:2:\"13\";}'
WHERE `id` = '3748ef919493a99baf24bbfc8b2e186bd6b414df' 
 Execution Time:0.086974143981934

-------------------------------------
SELECT RELEASE_LOCK('c64d246e42581e4c9de93bf713e578a3') AS ci_session_lock 
 Execution Time:0.00088787078857422

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '1ddfff0a02e10456753387a2b0fd615ff3ecfd1d' 
 Execution Time:0.00061416625976562

-------------------------------------
SELECT GET_LOCK('5729363840817f33401c113d8268745d', 300) AS ci_session_lock 
 Execution Time:0.00013589859008789

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '7f9a7410c2c7d820d6f8d971cc40f6cb0a094482' 
 Execution Time:0.00024795532226562

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00079798698425293

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00049591064453125

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00027298927307129

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00029706954956055

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00033807754516602

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '7f9a7410c2c7d820d6f8d971cc40f6cb0a094482' 
 Execution Time:0.00028014183044434

-------------------------------------
SELECT GET_LOCK('5729363840817f33401c113d8268745d', 300) AS ci_session_lock 
 Execution Time:0.00016307830810547

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '7f9a7410c2c7d820d6f8d971cc40f6cb0a094482' 
 Execution Time:0.00020599365234375

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00032782554626465

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00021910667419434

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00016593933105469

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00018787384033203

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00055098533630371

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '7f9a7410c2c7d820d6f8d971cc40f6cb0a094482' 
 Execution Time:0.0003199577331543

-------------------------------------
SELECT GET_LOCK('5729363840817f33401c113d8268745d', 300) AS ci_session_lock 
 Execution Time:0.00014209747314453

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '7f9a7410c2c7d820d6f8d971cc40f6cb0a094482' 
 Execution Time:0.00017309188842773

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00026988983154297

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00020098686218262

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00020098686218262

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00029492378234863

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00028300285339355

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '7f9a7410c2c7d820d6f8d971cc40f6cb0a094482' 
 Execution Time:0.00033998489379883

-------------------------------------
SELECT GET_LOCK('5729363840817f33401c113d8268745d', 300) AS ci_session_lock 
 Execution Time:0.00018501281738281

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '7f9a7410c2c7d820d6f8d971cc40f6cb0a094482' 
 Execution Time:0.0002288818359375

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00049591064453125

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00030112266540527

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00021481513977051

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00028514862060547

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00029492378234863

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '7f9a7410c2c7d820d6f8d971cc40f6cb0a094482' 
 Execution Time:0.00029993057250977

-------------------------------------
SELECT GET_LOCK('5729363840817f33401c113d8268745d', 300) AS ci_session_lock 
 Execution Time:0.00035810470581055

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '7f9a7410c2c7d820d6f8d971cc40f6cb0a094482' 
 Execution Time:0.00028109550476074

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1671906568, `data` = '__ci_last_regenerate|i:1671906568;user_info|O:8:\"stdClass\":13:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:13:\"user_language\";s:1:\"2\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-11-14 19:33:55\";}site_lang|s:5:\"dutch\";topic_id|s:1:\"2\";test_hash|s:32:\"a7a1ec9144afe78af98b1c2fa9f5f589\";questions_count|a:6:{i:0;s:1:\"8\";i:1;s:1:\"9\";i:2;s:2:\"10\";i:3;s:2:\"11\";i:4;s:2:\"12\";i:5;s:2:\"13\";}'
WHERE `id` = '7f9a7410c2c7d820d6f8d971cc40f6cb0a094482' 
 Execution Time:0.071451187133789

-------------------------------------
SELECT RELEASE_LOCK('5729363840817f33401c113d8268745d') AS ci_session_lock 
 Execution Time:0.00015902519226074

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '26fee38585199f50b9e5ad0cf2a6bcbfc98734b5' 
 Execution Time:0.00022006034851074

-------------------------------------
SELECT GET_LOCK('5571f91aa97408e0513dc7de1b5b95af', 300) AS ci_session_lock 
 Execution Time:0.00011086463928223

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '9c7f219c8de73f185aa9bba302dcab1e4b80d7fc' 
 Execution Time:0.00018596649169922

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00033092498779297

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00028800964355469

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00032901763916016

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00039410591125488

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00028705596923828

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '9c7f219c8de73f185aa9bba302dcab1e4b80d7fc' 
 Execution Time:0.00031304359436035

-------------------------------------
SELECT GET_LOCK('5571f91aa97408e0513dc7de1b5b95af', 300) AS ci_session_lock 
 Execution Time:0.0001981258392334

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '9c7f219c8de73f185aa9bba302dcab1e4b80d7fc' 
 Execution Time:0.00028300285339355

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00032520294189453

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00022292137145996

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00018501281738281

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.0001981258392334

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00028896331787109

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '9c7f219c8de73f185aa9bba302dcab1e4b80d7fc' 
 Execution Time:0.00032281875610352

-------------------------------------
SELECT GET_LOCK('5571f91aa97408e0513dc7de1b5b95af', 300) AS ci_session_lock 
 Execution Time:0.00021886825561523

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '9c7f219c8de73f185aa9bba302dcab1e4b80d7fc' 
 Execution Time:0.00022196769714355

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.021209001541138

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.035146951675415

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.0004270076751709

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00037312507629395

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00043797492980957

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '9c7f219c8de73f185aa9bba302dcab1e4b80d7fc' 
 Execution Time:0.00031709671020508

-------------------------------------
SELECT GET_LOCK('5571f91aa97408e0513dc7de1b5b95af', 300) AS ci_session_lock 
 Execution Time:0.00013208389282227

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '9c7f219c8de73f185aa9bba302dcab1e4b80d7fc' 
 Execution Time:0.00016307830810547

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00047802925109863

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00032711029052734

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00024914741516113

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00023198127746582

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00031590461730957

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '9c7f219c8de73f185aa9bba302dcab1e4b80d7fc' 
 Execution Time:0.00030994415283203

-------------------------------------
SELECT GET_LOCK('5571f91aa97408e0513dc7de1b5b95af', 300) AS ci_session_lock 
 Execution Time:0.00017499923706055

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '9c7f219c8de73f185aa9bba302dcab1e4b80d7fc' 
 Execution Time:0.00026893615722656

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1671907016, `data` = '__ci_last_regenerate|i:1671907016;user_info|O:8:\"stdClass\":13:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:13:\"user_language\";s:1:\"2\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-11-14 19:33:55\";}site_lang|s:5:\"dutch\";topic_id|s:1:\"2\";test_hash|s:32:\"a7a1ec9144afe78af98b1c2fa9f5f589\";questions_count|a:6:{i:0;s:1:\"8\";i:1;s:1:\"9\";i:2;s:2:\"10\";i:3;s:2:\"11\";i:4;s:2:\"12\";i:5;s:2:\"13\";}'
WHERE `id` = '9c7f219c8de73f185aa9bba302dcab1e4b80d7fc' 
 Execution Time:0.039328098297119

-------------------------------------
SELECT RELEASE_LOCK('5571f91aa97408e0513dc7de1b5b95af') AS ci_session_lock 
 Execution Time:0.00024700164794922

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2219d1145cae88efef26ec3c62149c03b212b1a2' 
 Execution Time:0.00032997131347656

-------------------------------------
SELECT GET_LOCK('5b5fe0ec5fbe073ad8dbe59da412e77c', 300) AS ci_session_lock 
 Execution Time:0.00016403198242188

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '75237407121f070d268a3ec23079b165bfbc72c5' 
 Execution Time:0.0002129077911377

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00038290023803711

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00043916702270508

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00029897689819336

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00027298927307129

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00028109550476074

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '75237407121f070d268a3ec23079b165bfbc72c5' 
 Execution Time:0.00058913230895996

-------------------------------------
SELECT GET_LOCK('5b5fe0ec5fbe073ad8dbe59da412e77c', 300) AS ci_session_lock 
 Execution Time:0.00023293495178223

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '75237407121f070d268a3ec23079b165bfbc72c5' 
 Execution Time:0.00028491020202637

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00045084953308105

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00027298927307129

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.0003809928894043

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00028586387634277

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00027990341186523

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '75237407121f070d268a3ec23079b165bfbc72c5' 
 Execution Time:0.00028419494628906

-------------------------------------
SELECT GET_LOCK('5b5fe0ec5fbe073ad8dbe59da412e77c', 300) AS ci_session_lock 
 Execution Time:0.00011992454528809

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '75237407121f070d268a3ec23079b165bfbc72c5' 
 Execution Time:0.00030303001403809

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00040888786315918

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00030994415283203

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00025105476379395

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00037693977355957

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00036096572875977

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '75237407121f070d268a3ec23079b165bfbc72c5' 
 Execution Time:0.00028610229492188

-------------------------------------
SELECT GET_LOCK('5b5fe0ec5fbe073ad8dbe59da412e77c', 300) AS ci_session_lock 
 Execution Time:0.00019502639770508

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '75237407121f070d268a3ec23079b165bfbc72c5' 
 Execution Time:0.0002291202545166

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1671907417, `data` = '__ci_last_regenerate|i:1671907417;user_info|O:8:\"stdClass\":13:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:13:\"user_language\";s:1:\"2\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-11-14 19:33:55\";}site_lang|s:5:\"dutch\";topic_id|s:1:\"2\";test_hash|s:32:\"a7a1ec9144afe78af98b1c2fa9f5f589\";questions_count|a:6:{i:0;s:1:\"8\";i:1;s:1:\"9\";i:2;s:2:\"10\";i:3;s:2:\"11\";i:4;s:2:\"12\";i:5;s:2:\"13\";}'
WHERE `id` = '75237407121f070d268a3ec23079b165bfbc72c5' 
 Execution Time:0.075431108474731

-------------------------------------
SELECT RELEASE_LOCK('5b5fe0ec5fbe073ad8dbe59da412e77c') AS ci_session_lock 
 Execution Time:0.00023078918457031

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'c602dccef56903c0053d776160f0f742f6b943d8' 
 Execution Time:0.00030612945556641

-------------------------------------
SELECT GET_LOCK('09058aa08b982d867d135e12f3ab5e1b', 300) AS ci_session_lock 
 Execution Time:0.00013399124145508

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '17e14a92ef1afa2e59801af8175df1b9cace5a1c' 
 Execution Time:0.00077605247497559

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.001378059387207

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00092792510986328

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.0009760856628418

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.0020530223846436

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00028491020202637

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '17e14a92ef1afa2e59801af8175df1b9cace5a1c' 
 Execution Time:0.00051617622375488

-------------------------------------
SELECT GET_LOCK('09058aa08b982d867d135e12f3ab5e1b', 300) AS ci_session_lock 
 Execution Time:0.00022196769714355

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '17e14a92ef1afa2e59801af8175df1b9cace5a1c' 
 Execution Time:0.00027179718017578

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.0015380382537842

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00067710876464844

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.0003659725189209

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00049400329589844

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00028395652770996

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '17e14a92ef1afa2e59801af8175df1b9cace5a1c' 
 Execution Time:0.00031113624572754

-------------------------------------
SELECT GET_LOCK('09058aa08b982d867d135e12f3ab5e1b', 300) AS ci_session_lock 
 Execution Time:0.00012707710266113

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '17e14a92ef1afa2e59801af8175df1b9cace5a1c' 
 Execution Time:0.00016307830810547

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.0004429817199707

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00026702880859375

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.0001838207244873

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00024008750915527

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00024294853210449

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '17e14a92ef1afa2e59801af8175df1b9cace5a1c' 
 Execution Time:0.00034093856811523

-------------------------------------
SELECT GET_LOCK('09058aa08b982d867d135e12f3ab5e1b', 300) AS ci_session_lock 
 Execution Time:0.00022506713867188

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '17e14a92ef1afa2e59801af8175df1b9cace5a1c' 
 Execution Time:0.00021100044250488

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00032997131347656

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00023102760314941

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00020718574523926

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00025391578674316

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00037813186645508

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '17e14a92ef1afa2e59801af8175df1b9cace5a1c' 
 Execution Time:0.00052118301391602

-------------------------------------
SELECT GET_LOCK('09058aa08b982d867d135e12f3ab5e1b', 300) AS ci_session_lock 
 Execution Time:0.00018215179443359

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '17e14a92ef1afa2e59801af8175df1b9cace5a1c' 
 Execution Time:0.00021481513977051

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00059700012207031

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00029492378234863

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00025701522827148

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.0004429817199707

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00032281875610352

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '17e14a92ef1afa2e59801af8175df1b9cace5a1c' 
 Execution Time:0.00032591819763184

-------------------------------------
SELECT GET_LOCK('09058aa08b982d867d135e12f3ab5e1b', 300) AS ci_session_lock 
 Execution Time:0.00017690658569336

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '17e14a92ef1afa2e59801af8175df1b9cace5a1c' 
 Execution Time:0.00022506713867188

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00029301643371582

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00020694732666016

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00019693374633789

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00020313262939453

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00019001960754395

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '17e14a92ef1afa2e59801af8175df1b9cace5a1c' 
 Execution Time:0.00033116340637207

-------------------------------------
SELECT GET_LOCK('09058aa08b982d867d135e12f3ab5e1b', 300) AS ci_session_lock 
 Execution Time:0.00029087066650391

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '17e14a92ef1afa2e59801af8175df1b9cace5a1c' 
 Execution Time:0.00027203559875488

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1671907726, `data` = '__ci_last_regenerate|i:1671907726;user_info|O:8:\"stdClass\":13:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:13:\"user_language\";s:1:\"2\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-11-14 19:33:55\";}site_lang|s:5:\"dutch\";topic_id|s:1:\"2\";test_hash|s:32:\"a7a1ec9144afe78af98b1c2fa9f5f589\";questions_count|a:6:{i:0;s:1:\"8\";i:1;s:1:\"9\";i:2;s:2:\"10\";i:3;s:2:\"11\";i:4;s:2:\"12\";i:5;s:2:\"13\";}'
WHERE `id` = '17e14a92ef1afa2e59801af8175df1b9cace5a1c' 
 Execution Time:0.065941095352173

-------------------------------------
SELECT RELEASE_LOCK('09058aa08b982d867d135e12f3ab5e1b') AS ci_session_lock 
 Execution Time:0.00031185150146484

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '420b8c59dc13ebd7ca06cc1b5fed5282540be0a7' 
 Execution Time:0.0005180835723877

-------------------------------------
SELECT GET_LOCK('d09e42e691fa9b7a110e6cc0e4199c16', 300) AS ci_session_lock 
 Execution Time:0.00019407272338867

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '5fff20bd1bb62a8749ef499065553a1443e7acee' 
 Execution Time:0.00031495094299316

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00084996223449707

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00088810920715332

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00054812431335449

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00031399726867676

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00031709671020508

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '5fff20bd1bb62a8749ef499065553a1443e7acee' 
 Execution Time:0.00027585029602051

-------------------------------------
SELECT GET_LOCK('d09e42e691fa9b7a110e6cc0e4199c16', 300) AS ci_session_lock 
 Execution Time:0.00085902214050293

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '5fff20bd1bb62a8749ef499065553a1443e7acee' 
 Execution Time:0.00067305564880371

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00031900405883789

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00021886825561523

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00017118453979492

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00020289421081543

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00029277801513672

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '5fff20bd1bb62a8749ef499065553a1443e7acee' 
 Execution Time:0.00045084953308105

-------------------------------------
SELECT GET_LOCK('d09e42e691fa9b7a110e6cc0e4199c16', 300) AS ci_session_lock 
 Execution Time:0.00020694732666016

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '5fff20bd1bb62a8749ef499065553a1443e7acee' 
 Execution Time:0.00029087066650391

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00034618377685547

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00023007392883301

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00017499923706055

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.0001990795135498

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00024008750915527

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '5fff20bd1bb62a8749ef499065553a1443e7acee' 
 Execution Time:0.00035810470581055

-------------------------------------
SELECT GET_LOCK('d09e42e691fa9b7a110e6cc0e4199c16', 300) AS ci_session_lock 
 Execution Time:0.00019001960754395

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '5fff20bd1bb62a8749ef499065553a1443e7acee' 
 Execution Time:0.00023913383483887

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00035905838012695

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00034689903259277

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00025296211242676

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00025415420532227

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.0002448558807373

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '5fff20bd1bb62a8749ef499065553a1443e7acee' 
 Execution Time:0.00028014183044434

-------------------------------------
SELECT GET_LOCK('d09e42e691fa9b7a110e6cc0e4199c16', 300) AS ci_session_lock 
 Execution Time:0.00015020370483398

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '5fff20bd1bb62a8749ef499065553a1443e7acee' 
 Execution Time:0.00018405914306641

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1671908137, `data` = '__ci_last_regenerate|i:1671908137;user_info|O:8:\"stdClass\":13:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:13:\"user_language\";s:1:\"2\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-11-14 19:33:55\";}site_lang|s:5:\"dutch\";topic_id|s:1:\"2\";test_hash|s:32:\"a7a1ec9144afe78af98b1c2fa9f5f589\";questions_count|a:6:{i:0;s:1:\"8\";i:1;s:1:\"9\";i:2;s:2:\"10\";i:3;s:2:\"11\";i:4;s:2:\"12\";i:5;s:2:\"13\";}'
WHERE `id` = '5fff20bd1bb62a8749ef499065553a1443e7acee' 
 Execution Time:0.078933000564575

-------------------------------------
SELECT RELEASE_LOCK('d09e42e691fa9b7a110e6cc0e4199c16') AS ci_session_lock 
 Execution Time:0.00022578239440918

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '6bb43f966e6e80503ea059b8712ae5303ace86fe' 
 Execution Time:0.00036096572875977

-------------------------------------
SELECT GET_LOCK('dc1751aadeda5eb39cb00fd13fe3265e', 300) AS ci_session_lock 
 Execution Time:0.00017213821411133

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'd43d1d8a0dcc5ff0cf21bedcdd8ce007c5e9a2fd' 
 Execution Time:0.00023603439331055

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00059390068054199

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00053787231445312

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00085902214050293

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00038003921508789

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00067400932312012

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'd43d1d8a0dcc5ff0cf21bedcdd8ce007c5e9a2fd' 
 Execution Time:0.00028896331787109

-------------------------------------
SELECT GET_LOCK('dc1751aadeda5eb39cb00fd13fe3265e', 300) AS ci_session_lock 
 Execution Time:0.00013399124145508

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'd43d1d8a0dcc5ff0cf21bedcdd8ce007c5e9a2fd' 
 Execution Time:0.00020313262939453

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00030779838562012

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00020694732666016

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00016903877258301

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00025796890258789

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00023913383483887

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'd43d1d8a0dcc5ff0cf21bedcdd8ce007c5e9a2fd' 
 Execution Time:0.00063800811767578

-------------------------------------
SELECT GET_LOCK('dc1751aadeda5eb39cb00fd13fe3265e', 300) AS ci_session_lock 
 Execution Time:0.00019598007202148

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'd43d1d8a0dcc5ff0cf21bedcdd8ce007c5e9a2fd' 
 Execution Time:0.00021505355834961

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00026893615722656

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00020098686218262

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00019192695617676

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00018310546875

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00039887428283691

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'd43d1d8a0dcc5ff0cf21bedcdd8ce007c5e9a2fd' 
 Execution Time:0.00032210350036621

-------------------------------------
SELECT GET_LOCK('dc1751aadeda5eb39cb00fd13fe3265e', 300) AS ci_session_lock 
 Execution Time:0.00012111663818359

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'd43d1d8a0dcc5ff0cf21bedcdd8ce007c5e9a2fd' 
 Execution Time:0.00015902519226074

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '10' 
 Execution Time:0.00032186508178711

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00019192695617676

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '10' 
 Execution Time:0.00015401840209961

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00015497207641602

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00024700164794922

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'd43d1d8a0dcc5ff0cf21bedcdd8ce007c5e9a2fd' 
 Execution Time:0.00036406517028809

-------------------------------------
SELECT GET_LOCK('dc1751aadeda5eb39cb00fd13fe3265e', 300) AS ci_session_lock 
 Execution Time:0.00019717216491699

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'd43d1d8a0dcc5ff0cf21bedcdd8ce007c5e9a2fd' 
 Execution Time:0.0003201961517334

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '9' 
 Execution Time:0.0003359317779541

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00022196769714355

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.00017213821411133

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00022196769714355

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00027990341186523

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'd43d1d8a0dcc5ff0cf21bedcdd8ce007c5e9a2fd' 
 Execution Time:0.00034403800964355

-------------------------------------
SELECT GET_LOCK('dc1751aadeda5eb39cb00fd13fe3265e', 300) AS ci_session_lock 
 Execution Time:0.00016212463378906

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'd43d1d8a0dcc5ff0cf21bedcdd8ce007c5e9a2fd' 
 Execution Time:0.00020480155944824

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.00033807754516602

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00023889541625977

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00018811225891113

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = 'a7a1ec9144afe78af98b1c2fa9f5f589' 
 Execution Time:0.00022411346435547

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00031089782714844

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'd43d1d8a0dcc5ff0cf21bedcdd8ce007c5e9a2fd' 
 Execution Time:0.00031304359436035

-------------------------------------
SELECT GET_LOCK('dc1751aadeda5eb39cb00fd13fe3265e', 300) AS ci_session_lock 
 Execution Time:0.00016188621520996

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'd43d1d8a0dcc5ff0cf21bedcdd8ce007c5e9a2fd' 
 Execution Time:0.00019502639770508

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `id` = '2'
AND `status` = 'active' 
 Execution Time:0.030497074127197

-------------------------------------
SELECT `id`
FROM `questions`
WHERE `topic_id` = '2'
AND `status` = 'active'
ORDER BY `id` ASC
 LIMIT 1 
 Execution Time:0.019740104675293

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00030994415283203

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2a06a458fff387bdba65771d11eb11d17bfe16d8' 
 Execution Time:0.00029897689819336

-------------------------------------
SELECT GET_LOCK('de03aacb7140699391913c74427fb6a7', 300) AS ci_session_lock 
 Execution Time:0.00016593933105469

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2a06a458fff387bdba65771d11eb11d17bfe16d8' 
 Execution Time:0.00020217895507812

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2a06a458fff387bdba65771d11eb11d17bfe16d8' 
 Execution Time:0.00034379959106445

-------------------------------------
SELECT GET_LOCK('de03aacb7140699391913c74427fb6a7', 300) AS ci_session_lock 
 Execution Time:0.0002591609954834

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2a06a458fff387bdba65771d11eb11d17bfe16d8' 
 Execution Time:0.00033807754516602

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00050902366638184

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2a06a458fff387bdba65771d11eb11d17bfe16d8' 
 Execution Time:0.0003199577331543

-------------------------------------
SELECT GET_LOCK('de03aacb7140699391913c74427fb6a7', 300) AS ci_session_lock 
 Execution Time:0.00020790100097656

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2a06a458fff387bdba65771d11eb11d17bfe16d8' 
 Execution Time:0.00025510787963867

-------------------------------------
SELECT *
FROM `languages`
WHERE `en_lang_name` = 'English' 
 Execution Time:0.00033712387084961

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `status` = 'active'
AND `language_id` = '2' 
 Execution Time:0.06306004524231

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00036287307739258

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2a06a458fff387bdba65771d11eb11d17bfe16d8' 
 Execution Time:0.00030207633972168

-------------------------------------
SELECT GET_LOCK('de03aacb7140699391913c74427fb6a7', 300) AS ci_session_lock 
 Execution Time:0.0001370906829834

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2a06a458fff387bdba65771d11eb11d17bfe16d8' 
 Execution Time:0.00022006034851074

-------------------------------------
SELECT *
FROM `languages`
WHERE `en_lang_name` = 'Dutch' 
 Execution Time:0.00044989585876465

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `status` = 'active'
AND `language_id` = '1' 
 Execution Time:0.0003809928894043

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00059294700622559

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2a06a458fff387bdba65771d11eb11d17bfe16d8' 
 Execution Time:0.0003361701965332

-------------------------------------
SELECT GET_LOCK('de03aacb7140699391913c74427fb6a7', 300) AS ci_session_lock 
 Execution Time:0.0003659725189209

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2a06a458fff387bdba65771d11eb11d17bfe16d8' 
 Execution Time:0.00029492378234863

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `id` = '2'
AND `status` = 'active' 
 Execution Time:0.00030803680419922

-------------------------------------
SELECT `id`
FROM `questions`
WHERE `topic_id` = '2'
AND `status` = 'active'
ORDER BY `id` ASC
 LIMIT 1 
 Execution Time:0.00024104118347168

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.0003058910369873

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2a06a458fff387bdba65771d11eb11d17bfe16d8' 
 Execution Time:0.00030112266540527

-------------------------------------
SELECT GET_LOCK('de03aacb7140699391913c74427fb6a7', 300) AS ci_session_lock 
 Execution Time:0.00014901161193848

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2a06a458fff387bdba65771d11eb11d17bfe16d8' 
 Execution Time:0.00018811225891113

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.00032305717468262

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '8', '524f24fe2c6c2484aade1d90d16c527d') 
 Execution Time:0.062201976776123

-------------------------------------
SELECT `id`
FROM `questions`
WHERE `topic_id` = '2'
AND `status` = 'active' 
 Execution Time:0.00036311149597168

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00026702880859375

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00030183792114258

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00034189224243164

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2a06a458fff387bdba65771d11eb11d17bfe16d8' 
 Execution Time:0.00035309791564941

-------------------------------------
SELECT GET_LOCK('de03aacb7140699391913c74427fb6a7', 300) AS ci_session_lock 
 Execution Time:0.00021696090698242

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2a06a458fff387bdba65771d11eb11d17bfe16d8' 
 Execution Time:0.00028777122497559

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.00040698051452637

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00031590461730957

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00027894973754883

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00031399726867676

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00034999847412109

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2a06a458fff387bdba65771d11eb11d17bfe16d8' 
 Execution Time:0.00069999694824219

-------------------------------------
SELECT GET_LOCK('de03aacb7140699391913c74427fb6a7', 300) AS ci_session_lock 
 Execution Time:0.0015950202941895

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2a06a458fff387bdba65771d11eb11d17bfe16d8' 
 Execution Time:0.00033998489379883

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1671920302, `data` = '__ci_last_regenerate|i:1671920302;user_info|O:8:\"stdClass\":13:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:13:\"user_language\";s:1:\"2\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-11-14 19:33:55\";}site_lang|s:7:\"english\";topic_id|s:1:\"2\";test_hash|s:32:\"524f24fe2c6c2484aade1d90d16c527d\";questions_count|a:6:{i:0;s:1:\"8\";i:1;s:1:\"9\";i:2;s:2:\"10\";i:3;s:2:\"11\";i:4;s:2:\"12\";i:5;s:2:\"13\";}'
WHERE `id` = '2a06a458fff387bdba65771d11eb11d17bfe16d8' 
 Execution Time:0.096930980682373

-------------------------------------
SELECT RELEASE_LOCK('de03aacb7140699391913c74427fb6a7') AS ci_session_lock 
 Execution Time:0.00021195411682129

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'f884634b42d2c13fabb7944c0e7a8dbff95e00a4' 
 Execution Time:0.00028800964355469

-------------------------------------
SELECT GET_LOCK('f4072aa109d8a0e72efd43c731be437d', 300) AS ci_session_lock 
 Execution Time:0.00010895729064941

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '931b19ae147c0381f21cf0fc2dcee119def13228' 
 Execution Time:0.00015902519226074

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.00069308280944824

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.0007939338684082

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00041699409484863

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00039005279541016

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00036406517028809

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '931b19ae147c0381f21cf0fc2dcee119def13228' 
 Execution Time:0.0003359317779541

-------------------------------------
SELECT GET_LOCK('f4072aa109d8a0e72efd43c731be437d', 300) AS ci_session_lock 
 Execution Time:0.00021696090698242

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '931b19ae147c0381f21cf0fc2dcee119def13228' 
 Execution Time:0.00026512145996094

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.00035786628723145

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00023317337036133

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00018095970153809

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00045585632324219

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00029110908508301

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '931b19ae147c0381f21cf0fc2dcee119def13228' 
 Execution Time:0.00034594535827637

-------------------------------------
SELECT GET_LOCK('f4072aa109d8a0e72efd43c731be437d', 300) AS ci_session_lock 
 Execution Time:0.00021100044250488

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '931b19ae147c0381f21cf0fc2dcee119def13228' 
 Execution Time:0.0002899169921875

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.00043916702270508

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00034880638122559

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00031900405883789

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00031208992004395

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00036096572875977

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '931b19ae147c0381f21cf0fc2dcee119def13228' 
 Execution Time:0.00034809112548828

-------------------------------------
SELECT GET_LOCK('f4072aa109d8a0e72efd43c731be437d', 300) AS ci_session_lock 
 Execution Time:0.00020313262939453

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '931b19ae147c0381f21cf0fc2dcee119def13228' 
 Execution Time:0.00024580955505371

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1671920626, `data` = '__ci_last_regenerate|i:1671920626;user_info|O:8:\"stdClass\":13:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:13:\"user_language\";s:1:\"2\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-11-14 19:33:55\";}site_lang|s:7:\"english\";topic_id|s:1:\"2\";test_hash|s:32:\"524f24fe2c6c2484aade1d90d16c527d\";questions_count|a:6:{i:0;s:1:\"8\";i:1;s:1:\"9\";i:2;s:2:\"10\";i:3;s:2:\"11\";i:4;s:2:\"12\";i:5;s:2:\"13\";}'
WHERE `id` = '931b19ae147c0381f21cf0fc2dcee119def13228' 
 Execution Time:0.0025410652160645

-------------------------------------
SELECT RELEASE_LOCK('f4072aa109d8a0e72efd43c731be437d') AS ci_session_lock 
 Execution Time:0.0001368522644043

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'f7cba2bc5be3cd50c3cfa743b14142c734d11f29' 
 Execution Time:0.00019502639770508

-------------------------------------
SELECT GET_LOCK('8020e0678a8a6c5a81bdb57e997d1c8b', 300) AS ci_session_lock 
 Execution Time:9.3936920166016E-5

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00013589859008789

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.00039911270141602

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00025010108947754

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00019598007202148

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00034594535827637

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00029706954956055

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00043392181396484

-------------------------------------
SELECT GET_LOCK('8020e0678a8a6c5a81bdb57e997d1c8b', 300) AS ci_session_lock 
 Execution Time:0.00021576881408691

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00029206275939941

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.00042486190795898

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.0003821849822998

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00083017349243164

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.0053598880767822

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00034999847412109

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00032496452331543

-------------------------------------
SELECT GET_LOCK('8020e0678a8a6c5a81bdb57e997d1c8b', 300) AS ci_session_lock 
 Execution Time:0.00023102760314941

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00029611587524414

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.00043702125549316

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00036406517028809

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00026106834411621

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00028896331787109

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00032997131347656

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00040102005004883

-------------------------------------
SELECT GET_LOCK('8020e0678a8a6c5a81bdb57e997d1c8b', 300) AS ci_session_lock 
 Execution Time:0.00024104118347168

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00033807754516602

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.00041794776916504

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00032901763916016

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00028109550476074

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00035595893859863

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00038504600524902

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00030994415283203

-------------------------------------
SELECT GET_LOCK('8020e0678a8a6c5a81bdb57e997d1c8b', 300) AS ci_session_lock 
 Execution Time:0.00021100044250488

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00031113624572754

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.00043010711669922

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00034689903259277

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00031590461730957

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00035500526428223

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00034904479980469

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00034689903259277

-------------------------------------
SELECT GET_LOCK('8020e0678a8a6c5a81bdb57e997d1c8b', 300) AS ci_session_lock 
 Execution Time:0.0002140998840332

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00028300285339355

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.0017058849334717

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.0014400482177734

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00091886520385742

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00045490264892578

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00081992149353027

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00083494186401367

-------------------------------------
SELECT GET_LOCK('8020e0678a8a6c5a81bdb57e997d1c8b', 300) AS ci_session_lock 
 Execution Time:0.00020313262939453

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.0061678886413574

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.00036406517028809

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00027108192443848

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00021505355834961

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00024795532226562

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00028204917907715

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00053191184997559

-------------------------------------
SELECT GET_LOCK('8020e0678a8a6c5a81bdb57e997d1c8b', 300) AS ci_session_lock 
 Execution Time:0.00021600723266602

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00027990341186523

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.00043010711669922

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.0005180835723877

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00044512748718262

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.0003669261932373

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00038719177246094

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.0003659725189209

-------------------------------------
SELECT GET_LOCK('8020e0678a8a6c5a81bdb57e997d1c8b', 300) AS ci_session_lock 
 Execution Time:0.00025486946105957

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00031900405883789

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.00068783760070801

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00039005279541016

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00043416023254395

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00042510032653809

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00034022331237793

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00036096572875977

-------------------------------------
SELECT GET_LOCK('8020e0678a8a6c5a81bdb57e997d1c8b', 300) AS ci_session_lock 
 Execution Time:0.0015969276428223

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00040698051452637

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.0003349781036377

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '8'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00023603439331055

-------------------------------------
UPDATE `user_answers_temp` SET `answer` = '1', `status` = 'false'
WHERE `id` = '66' 
 Execution Time:0.0024220943450928

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00032401084899902

-------------------------------------
SELECT GET_LOCK('8020e0678a8a6c5a81bdb57e997d1c8b', 300) AS ci_session_lock 
 Execution Time:0.050411939620972

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00052809715270996

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.0023260116577148

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '8'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00091814994812012

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00030398368835449

-------------------------------------
SELECT GET_LOCK('8020e0678a8a6c5a81bdb57e997d1c8b', 300) AS ci_session_lock 
 Execution Time:0.0001380443572998

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00020694732666016

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00028491020202637

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.0002748966217041

-------------------------------------
SELECT GET_LOCK('8020e0678a8a6c5a81bdb57e997d1c8b', 300) AS ci_session_lock 
 Execution Time:0.00014710426330566

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00018215179443359

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '9' 
 Execution Time:0.0003960132598877

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00067806243896484

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '9', '524f24fe2c6c2484aade1d90d16c527d') 
 Execution Time:0.030730009078979

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.0003209114074707

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00026202201843262

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.0002601146697998

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.024235010147095

-------------------------------------
SELECT GET_LOCK('8020e0678a8a6c5a81bdb57e997d1c8b', 300) AS ci_session_lock 
 Execution Time:0.00059294700622559

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.0011961460113525

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.0003809928894043

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '9'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00081586837768555

-------------------------------------
UPDATE `user_answers_temp` SET `answer` = 'B', `status` = 'true'
WHERE `id` = '67' 
 Execution Time:0.0013320446014404

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.024271011352539

-------------------------------------
SELECT GET_LOCK('8020e0678a8a6c5a81bdb57e997d1c8b', 300) AS ci_session_lock 
 Execution Time:0.00027704238891602

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00047016143798828

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.0015649795532227

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '9'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00041317939758301

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00035881996154785

-------------------------------------
SELECT GET_LOCK('8020e0678a8a6c5a81bdb57e997d1c8b', 300) AS ci_session_lock 
 Execution Time:0.00016403198242188

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00019001960754395

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00028109550476074

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00045895576477051

-------------------------------------
SELECT GET_LOCK('8020e0678a8a6c5a81bdb57e997d1c8b', 300) AS ci_session_lock 
 Execution Time:0.0011999607086182

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00051212310791016

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '10' 
 Execution Time:0.00041913986206055

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00023102760314941

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '10', '524f24fe2c6c2484aade1d90d16c527d') 
 Execution Time:0.075279951095581

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '10' 
 Execution Time:0.0037598609924316

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.0011839866638184

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00030398368835449

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00030207633972168

-------------------------------------
SELECT GET_LOCK('8020e0678a8a6c5a81bdb57e997d1c8b', 300) AS ci_session_lock 
 Execution Time:0.00018310546875

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00021910667419434

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '10' 
 Execution Time:0.0003359317779541

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '10'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00025796890258789

-------------------------------------
UPDATE `user_answers_temp` SET `answer` = '3', `status` = 'false'
WHERE `id` = '68' 
 Execution Time:0.0037679672241211

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00029206275939941

-------------------------------------
SELECT GET_LOCK('8020e0678a8a6c5a81bdb57e997d1c8b', 300) AS ci_session_lock 
 Execution Time:0.0001370906829834

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00016689300537109

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00029301643371582

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00043606758117676

-------------------------------------
SELECT GET_LOCK('8020e0678a8a6c5a81bdb57e997d1c8b', 300) AS ci_session_lock 
 Execution Time:0.00081515312194824

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00056290626525879

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00040292739868164

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00023221969604492

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '11', '524f24fe2c6c2484aade1d90d16c527d') 
 Execution Time:0.021764039993286

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00037598609924316

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00027203559875488

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.03115701675415

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00030088424682617

-------------------------------------
SELECT GET_LOCK('8020e0678a8a6c5a81bdb57e997d1c8b', 300) AS ci_session_lock 
 Execution Time:0.00014996528625488

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00021791458129883

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00029206275939941

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '11'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00025200843811035

-------------------------------------
UPDATE `user_answers_temp` SET `answer` = 'no', `status` = 'true'
WHERE `id` = '69' 
 Execution Time:0.001978874206543

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.0028071403503418

-------------------------------------
SELECT GET_LOCK('8020e0678a8a6c5a81bdb57e997d1c8b', 300) AS ci_session_lock 
 Execution Time:0.02608585357666

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00056290626525879

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.0044400691986084

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '11'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.0013549327850342

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00031018257141113

-------------------------------------
SELECT GET_LOCK('8020e0678a8a6c5a81bdb57e997d1c8b', 300) AS ci_session_lock 
 Execution Time:0.00022792816162109

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00025105476379395

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00034594535827637

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00030612945556641

-------------------------------------
SELECT GET_LOCK('8020e0678a8a6c5a81bdb57e997d1c8b', 300) AS ci_session_lock 
 Execution Time:0.0001368522644043

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00017094612121582

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '12' 
 Execution Time:0.00028800964355469

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.000244140625

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '12', '524f24fe2c6c2484aade1d90d16c527d') 
 Execution Time:0.0091290473937988

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '12' 
 Execution Time:0.0002751350402832

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00022792816162109

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00035786628723145

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00061702728271484

-------------------------------------
SELECT GET_LOCK('8020e0678a8a6c5a81bdb57e997d1c8b', 300) AS ci_session_lock 
 Execution Time:0.00028705596923828

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00036215782165527

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '13' 
 Execution Time:0.00050616264343262

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00044417381286621

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '13', '524f24fe2c6c2484aade1d90d16c527d') 
 Execution Time:0.01976490020752

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '13' 
 Execution Time:0.00042819976806641

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00039005279541016

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00030612945556641

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00030994415283203

-------------------------------------
SELECT GET_LOCK('8020e0678a8a6c5a81bdb57e997d1c8b', 300) AS ci_session_lock 
 Execution Time:0.00018000602722168

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00022602081298828

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.0003199577331543

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00027894973754883

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00022101402282715

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00023913383483887

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00050616264343262

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00047397613525391

-------------------------------------
SELECT GET_LOCK('8020e0678a8a6c5a81bdb57e997d1c8b', 300) AS ci_session_lock 
 Execution Time:0.00043702125549316

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.0005500316619873

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.0004279613494873

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00031900405883789

-------------------------------------
SELECT GET_LOCK('8020e0678a8a6c5a81bdb57e997d1c8b', 300) AS ci_session_lock 
 Execution Time:0.00013995170593262

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00019502639770508

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '12' 
 Execution Time:0.0011401176452637

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00045680999755859

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '12' 
 Execution Time:0.00033402442932129

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00030088424682617

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00028705596923828

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00029897689819336

-------------------------------------
SELECT GET_LOCK('8020e0678a8a6c5a81bdb57e997d1c8b', 300) AS ci_session_lock 
 Execution Time:0.00013995170593262

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00017595291137695

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '13' 
 Execution Time:0.00033307075500488

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00021505355834961

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '13' 
 Execution Time:0.00016093254089355

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00018596649169922

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00029516220092773

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00028181076049805

-------------------------------------
SELECT GET_LOCK('8020e0678a8a6c5a81bdb57e997d1c8b', 300) AS ci_session_lock 
 Execution Time:0.00013589859008789

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00016617774963379

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00026297569274902

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00023412704467773

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00020003318786621

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00018978118896484

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00023484230041504

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00032305717468262

-------------------------------------
SELECT GET_LOCK('8020e0678a8a6c5a81bdb57e997d1c8b', 300) AS ci_session_lock 
 Execution Time:0.0001380443572998

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00017285346984863

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '13' 
 Execution Time:0.00029301643371582

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00020003318786621

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '13' 
 Execution Time:0.00015807151794434

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00020289421081543

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00020408630371094

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00030684471130371

-------------------------------------
SELECT GET_LOCK('8020e0678a8a6c5a81bdb57e997d1c8b', 300) AS ci_session_lock 
 Execution Time:0.00020003318786621

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.00035691261291504

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1671920927, `data` = '__ci_last_regenerate|i:1671920927;user_info|O:8:\"stdClass\":13:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:13:\"user_language\";s:1:\"2\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-11-14 19:33:55\";}site_lang|s:7:\"english\";topic_id|s:1:\"2\";test_hash|s:32:\"524f24fe2c6c2484aade1d90d16c527d\";questions_count|a:6:{i:0;s:1:\"8\";i:1;s:1:\"9\";i:2;s:2:\"10\";i:3;s:2:\"11\";i:4;s:2:\"12\";i:5;s:2:\"13\";}'
WHERE `id` = '906344a6509c14689ec2c261303953265d69bbe0' 
 Execution Time:0.041074991226196

-------------------------------------
SELECT RELEASE_LOCK('8020e0678a8a6c5a81bdb57e997d1c8b') AS ci_session_lock 
 Execution Time:0.00021600723266602

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'd43b206b424b738c1d84ae9df2f69fc1c96cbf9b' 
 Execution Time:0.00043010711669922

-------------------------------------
SELECT GET_LOCK('c839b9ee81da46fc144c36abec34e608', 300) AS ci_session_lock 
 Execution Time:0.00032591819763184

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '365f2da50b7723e41e8a2fff7e7673d674d1a3f2' 
 Execution Time:0.00029110908508301

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00044393539428711

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00036215782165527

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00023889541625977

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00027298927307129

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00023508071899414

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '365f2da50b7723e41e8a2fff7e7673d674d1a3f2' 
 Execution Time:0.00033783912658691

-------------------------------------
SELECT GET_LOCK('c839b9ee81da46fc144c36abec34e608', 300) AS ci_session_lock 
 Execution Time:0.0002131462097168

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '365f2da50b7723e41e8a2fff7e7673d674d1a3f2' 
 Execution Time:0.00025010108947754

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00035190582275391

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00026798248291016

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00018405914306641

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00023698806762695

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00027203559875488

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '365f2da50b7723e41e8a2fff7e7673d674d1a3f2' 
 Execution Time:0.00030303001403809

-------------------------------------
SELECT GET_LOCK('c839b9ee81da46fc144c36abec34e608', 300) AS ci_session_lock 
 Execution Time:0.00018715858459473

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '365f2da50b7723e41e8a2fff7e7673d674d1a3f2' 
 Execution Time:0.00021100044250488

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00031900405883789

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '365f2da50b7723e41e8a2fff7e7673d674d1a3f2' 
 Execution Time:0.00036311149597168

-------------------------------------
SELECT GET_LOCK('c839b9ee81da46fc144c36abec34e608', 300) AS ci_session_lock 
 Execution Time:0.00026702880859375

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '365f2da50b7723e41e8a2fff7e7673d674d1a3f2' 
 Execution Time:0.0005340576171875

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '12' 
 Execution Time:0.00053310394287109

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00038290023803711

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '12' 
 Execution Time:0.00027799606323242

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00030303001403809

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00028705596923828

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '365f2da50b7723e41e8a2fff7e7673d674d1a3f2' 
 Execution Time:0.00029420852661133

-------------------------------------
SELECT GET_LOCK('c839b9ee81da46fc144c36abec34e608', 300) AS ci_session_lock 
 Execution Time:0.00012898445129395

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '365f2da50b7723e41e8a2fff7e7673d674d1a3f2' 
 Execution Time:0.00018501281738281

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '13' 
 Execution Time:0.00028896331787109

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.0001828670501709

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '13' 
 Execution Time:0.00014877319335938

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.0001680850982666

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00021600723266602

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '365f2da50b7723e41e8a2fff7e7673d674d1a3f2' 
 Execution Time:0.0003819465637207

-------------------------------------
SELECT GET_LOCK('c839b9ee81da46fc144c36abec34e608', 300) AS ci_session_lock 
 Execution Time:0.0017452239990234

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '365f2da50b7723e41e8a2fff7e7673d674d1a3f2' 
 Execution Time:0.0003349781036377

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.0004420280456543

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00038790702819824

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00033211708068848

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00048708915710449

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.0004279613494873

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '365f2da50b7723e41e8a2fff7e7673d674d1a3f2' 
 Execution Time:0.0014088153839111

-------------------------------------
SELECT GET_LOCK('c839b9ee81da46fc144c36abec34e608', 300) AS ci_session_lock 
 Execution Time:0.0002601146697998

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '365f2da50b7723e41e8a2fff7e7673d674d1a3f2' 
 Execution Time:0.00045394897460938

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00033712387084961

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '365f2da50b7723e41e8a2fff7e7673d674d1a3f2' 
 Execution Time:0.0023479461669922

-------------------------------------
SELECT GET_LOCK('c839b9ee81da46fc144c36abec34e608', 300) AS ci_session_lock 
 Execution Time:0.00022101402282715

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '365f2da50b7723e41e8a2fff7e7673d674d1a3f2' 
 Execution Time:0.00033307075500488

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '12' 
 Execution Time:0.00031185150146484

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00024008750915527

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '12' 
 Execution Time:0.00021815299987793

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = '524f24fe2c6c2484aade1d90d16c527d' 
 Execution Time:0.00020480155944824

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00024199485778809

