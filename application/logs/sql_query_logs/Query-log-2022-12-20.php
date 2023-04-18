-------------------------------------
SELECT GET_LOCK('e5bb6adb7a9818ea5f61d85b45115020', 300) AS ci_session_lock 
 Execution Time:0.00022697448730469

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '50a115887b3439fa1c91d615857e239937ae434b' 
 Execution Time:0.012085914611816

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '50a115887b3439fa1c91d615857e239937ae434b' 
 Execution Time:0.00030708312988281

-------------------------------------
SELECT GET_LOCK('e5bb6adb7a9818ea5f61d85b45115020', 300) AS ci_session_lock 
 Execution Time:0.00016403198242188

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '50a115887b3439fa1c91d615857e239937ae434b' 
 Execution Time:0.00020098686218262

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00040388107299805

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '50a115887b3439fa1c91d615857e239937ae434b' 
 Execution Time:0.0002739429473877

-------------------------------------
SELECT GET_LOCK('e5bb6adb7a9818ea5f61d85b45115020', 300) AS ci_session_lock 
 Execution Time:0.00012397766113281

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '50a115887b3439fa1c91d615857e239937ae434b' 
 Execution Time:0.00016212463378906

-------------------------------------
SELECT *
FROM `languages`
WHERE `en_lang_name` = 'English' 
 Execution Time:0.00026488304138184

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `status` = 'active'
AND `language_id` = '2' 
 Execution Time:0.030620098114014

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00026512145996094

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '50a115887b3439fa1c91d615857e239937ae434b' 
 Execution Time:0.00028610229492188

-------------------------------------
SELECT GET_LOCK('e5bb6adb7a9818ea5f61d85b45115020', 300) AS ci_session_lock 
 Execution Time:0.00017595291137695

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '50a115887b3439fa1c91d615857e239937ae434b' 
 Execution Time:0.00024199485778809

-------------------------------------
SELECT *
FROM `languages`
WHERE `en_lang_name` = 'Dutch' 
 Execution Time:0.0003819465637207

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `status` = 'active'
AND `language_id` = '1' 
 Execution Time:0.0004880428314209

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00035190582275391

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '50a115887b3439fa1c91d615857e239937ae434b' 
 Execution Time:0.00039505958557129

-------------------------------------
SELECT GET_LOCK('e5bb6adb7a9818ea5f61d85b45115020', 300) AS ci_session_lock 
 Execution Time:0.00018215179443359

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '50a115887b3439fa1c91d615857e239937ae434b' 
 Execution Time:0.00022506713867188

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `id` = '2'
AND `status` = 'active' 
 Execution Time:0.00033688545227051

-------------------------------------
SELECT `id`
FROM `questions`
WHERE `topic_id` = '2'
AND `status` = 'active'
ORDER BY `id` ASC
 LIMIT 1 
 Execution Time:0.038884878158569

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00029397010803223

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '50a115887b3439fa1c91d615857e239937ae434b' 
 Execution Time:0.00030088424682617

-------------------------------------
SELECT GET_LOCK('e5bb6adb7a9818ea5f61d85b45115020', 300) AS ci_session_lock 
 Execution Time:0.00020194053649902

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '50a115887b3439fa1c91d615857e239937ae434b' 
 Execution Time:0.00023412704467773

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1671560268, `data` = '__ci_last_regenerate|i:1671560268;user_info|O:8:\"stdClass\":13:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:13:\"user_language\";s:1:\"2\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-11-14 19:33:55\";}site_lang|s:5:\"dutch\";'
WHERE `id` = '50a115887b3439fa1c91d615857e239937ae434b' 
 Execution Time:0.022281169891357

-------------------------------------
SELECT RELEASE_LOCK('e5bb6adb7a9818ea5f61d85b45115020') AS ci_session_lock 
 Execution Time:0.00018119812011719

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '72850024e8129cd390dd56aaed03f5fb7adfb7af' 
 Execution Time:0.00023293495178223

-------------------------------------
SELECT GET_LOCK('dde2597c46aedc468db6eea238d12d8b', 300) AS ci_session_lock 
 Execution Time:0.00012707710266113

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.00017309188842773

-------------------------------------
SELECT `id`
FROM `questions`
WHERE `topic_id` = '2'
AND `status` = 'active' 
 Execution Time:0.00036501884460449

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00026488304138184

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '8' 
 Execution Time:0.00018811225891113

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00036406517028809

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.00028085708618164

-------------------------------------
SELECT GET_LOCK('dde2597c46aedc468db6eea238d12d8b', 300) AS ci_session_lock 
 Execution Time:0.00011897087097168

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.00018501281738281

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00037193298339844

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '8' 
 Execution Time:0.0001981258392334

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00022792816162109

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.00031399726867676

-------------------------------------
SELECT GET_LOCK('dde2597c46aedc468db6eea238d12d8b', 300) AS ci_session_lock 
 Execution Time:0.00016522407531738

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.00025510787963867

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00030708312988281

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '8' 
 Execution Time:0.00018501281738281

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.00031614303588867

-------------------------------------
SELECT GET_LOCK('dde2597c46aedc468db6eea238d12d8b', 300) AS ci_session_lock 
 Execution Time:0.00012707710266113

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.00016188621520996

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00022196769714355

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '8' 
 Execution Time:0.00016903877258301

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.00029206275939941

-------------------------------------
SELECT GET_LOCK('dde2597c46aedc468db6eea238d12d8b', 300) AS ci_session_lock 
 Execution Time:0.00014209747314453

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.00026106834411621

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00026416778564453

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '8' 
 Execution Time:0.00017499923706055

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.00019192695617676

-------------------------------------
SELECT GET_LOCK('dde2597c46aedc468db6eea238d12d8b', 300) AS ci_session_lock 
 Execution Time:0.037286996841431

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.00044083595275879

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.0012369155883789

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '8' 
 Execution Time:0.00050902366638184

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.00028586387634277

-------------------------------------
SELECT GET_LOCK('dde2597c46aedc468db6eea238d12d8b', 300) AS ci_session_lock 
 Execution Time:0.00016593933105469

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.00021505355834961

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00030207633972168

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '8' 
 Execution Time:0.00017714500427246

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.00032591819763184

-------------------------------------
SELECT GET_LOCK('dde2597c46aedc468db6eea238d12d8b', 300) AS ci_session_lock 
 Execution Time:0.00013899803161621

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.00019192695617676

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00027990341186523

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '8' 
 Execution Time:0.00017905235290527

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.0002589225769043

-------------------------------------
SELECT GET_LOCK('dde2597c46aedc468db6eea238d12d8b', 300) AS ci_session_lock 
 Execution Time:0.013956069946289

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.00029182434082031

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00092911720275879

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '8' 
 Execution Time:0.00066208839416504

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.00024986267089844

-------------------------------------
SELECT GET_LOCK('dde2597c46aedc468db6eea238d12d8b', 300) AS ci_session_lock 
 Execution Time:0.00011897087097168

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.00016117095947266

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00026917457580566

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '8' 
 Execution Time:0.00017499923706055

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.0002748966217041

-------------------------------------
SELECT GET_LOCK('dde2597c46aedc468db6eea238d12d8b', 300) AS ci_session_lock 
 Execution Time:0.00015687942504883

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.00019097328186035

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00024700164794922

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '8' 
 Execution Time:0.00018906593322754

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.00031113624572754

-------------------------------------
SELECT GET_LOCK('dde2597c46aedc468db6eea238d12d8b', 300) AS ci_session_lock 
 Execution Time:0.00014114379882812

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.00024604797363281

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00031614303588867

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '8' 
 Execution Time:0.00017786026000977

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00017714500427246

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.00034308433532715

-------------------------------------
SELECT GET_LOCK('dde2597c46aedc468db6eea238d12d8b', 300) AS ci_session_lock 
 Execution Time:0.0001978874206543

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.00022220611572266

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00039911270141602

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '8' 
 Execution Time:0.00022506713867188

-------------------------------------
INSERT INTO `user_answers` (`user_id`, `question_id`, `question_type`, `answer`, `status`) VALUES ('6', '8', 'three_answer', 'Answer one1', 'false') 
 Execution Time:0.090226173400879

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.00041508674621582

-------------------------------------
SELECT GET_LOCK('dde2597c46aedc468db6eea238d12d8b', 300) AS ci_session_lock 
 Execution Time:0.21345901489258

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.00028204917907715

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.0009610652923584

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '8' 
 Execution Time:0.00055289268493652

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.00028610229492188

-------------------------------------
SELECT GET_LOCK('dde2597c46aedc468db6eea238d12d8b', 300) AS ci_session_lock 
 Execution Time:0.0001218318939209

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.00016498565673828

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00033402442932129

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '8' 
 Execution Time:0.0002291202545166

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00032496452331543

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.0010550022125244

-------------------------------------
SELECT GET_LOCK('dde2597c46aedc468db6eea238d12d8b', 300) AS ci_session_lock 
 Execution Time:0.00022792816162109

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.0002892017364502

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00032281875610352

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '8' 
 Execution Time:0.00016188621520996

-------------------------------------
INSERT INTO `user_answers` (`user_id`, `question_id`, `question_type`, `answer`, `status`) VALUES ('6', '8', 'three_answer', 'Answer three', 'false') 
 Execution Time:0.078275918960571

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.00027894973754883

-------------------------------------
SELECT GET_LOCK('dde2597c46aedc468db6eea238d12d8b', 300) AS ci_session_lock 
 Execution Time:0.0001370906829834

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.00023198127746582

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00032782554626465

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '8' 
 Execution Time:0.0002131462097168

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.0005500316619873

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.00030016899108887

-------------------------------------
SELECT GET_LOCK('dde2597c46aedc468db6eea238d12d8b', 300) AS ci_session_lock 
 Execution Time:0.00018787384033203

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.00021004676818848

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.055733919143677

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '8' 
 Execution Time:0.00085282325744629

-------------------------------------
INSERT INTO `user_answers` (`user_id`, `question_id`, `question_type`, `answer`, `status`) VALUES ('6', '8', 'three_answer', 'Answer two', 'false') 
 Execution Time:0.036069869995117

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.00033187866210938

-------------------------------------
SELECT GET_LOCK('dde2597c46aedc468db6eea238d12d8b', 300) AS ci_session_lock 
 Execution Time:0.00015401840209961

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.00019311904907227

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1671565752, `data` = '__ci_last_regenerate|i:1671565752;user_info|O:8:\"stdClass\":13:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:13:\"user_language\";s:1:\"2\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-11-14 19:33:55\";}site_lang|s:5:\"dutch\";topic_id|s:1:\"2\";questions_count|a:6:{i:0;s:1:\"8\";i:1;s:1:\"9\";i:2;s:2:\"10\";i:3;s:2:\"11\";i:4;s:2:\"12\";i:5;s:2:\"13\";}'
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.060277938842773

-------------------------------------
SELECT RELEASE_LOCK('dde2597c46aedc468db6eea238d12d8b') AS ci_session_lock 
 Execution Time:0.00021910667419434

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '69cc8ba391673056fac79530de1b2da14df93508' 
 Execution Time:0.00030088424682617

-------------------------------------
SELECT GET_LOCK('ee504d2785606c4a183c2dca9bb0c1d4', 300) AS ci_session_lock 
 Execution Time:0.00016403198242188

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'bd0cbf537dc8f9052c32e7e21cfcfd23621e1ed0' 
 Execution Time:0.00027203559875488

-------------------------------------
SELECT *
FROM `languages`
WHERE `en_lang_name` = 'Dutch' 
 Execution Time:0.00040602684020996

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `status` = 'active'
AND `language_id` = '1' 
 Execution Time:0.025618076324463

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00057601928710938

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.00027894973754883

-------------------------------------
SELECT GET_LOCK('dde2597c46aedc468db6eea238d12d8b', 300) AS ci_session_lock 
 Execution Time:0.00034093856811523

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.00023198127746582

-------------------------------------
SELECT *
FROM `languages`
WHERE `en_lang_name` = 'Dutch' 
 Execution Time:0.00034904479980469

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `status` = 'active'
AND `language_id` = '1' 
 Execution Time:0.00048995018005371

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00032806396484375

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.00028395652770996

-------------------------------------
SELECT GET_LOCK('dde2597c46aedc468db6eea238d12d8b', 300) AS ci_session_lock 
 Execution Time:0.00016498565673828

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.00024604797363281

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `id` = '2'
AND `status` = 'active' 
 Execution Time:0.00028300285339355

-------------------------------------
SELECT `id`
FROM `questions`
WHERE `topic_id` = '2'
AND `status` = 'active'
ORDER BY `id` ASC
 LIMIT 1 
 Execution Time:0.013361930847168

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00050091743469238

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.00029706954956055

-------------------------------------
SELECT GET_LOCK('dde2597c46aedc468db6eea238d12d8b', 300) AS ci_session_lock 
 Execution Time:0.00017595291137695

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.00034999847412109

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `id` = '2'
AND `status` = 'active' 
 Execution Time:0.00037693977355957

-------------------------------------
SELECT `id`
FROM `questions`
WHERE `topic_id` = '2'
AND `status` = 'active'
ORDER BY `id` ASC
 LIMIT 1 
 Execution Time:0.00038504600524902

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00022387504577637

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.00029802322387695

-------------------------------------
SELECT GET_LOCK('dde2597c46aedc468db6eea238d12d8b', 300) AS ci_session_lock 
 Execution Time:0.00013089179992676

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.00017905235290527

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `id` = '2'
AND `status` = 'active' 
 Execution Time:0.00054788589477539

-------------------------------------
SELECT `id`
FROM `questions`
WHERE `topic_id` = '2'
AND `status` = 'active'
ORDER BY `id` ASC
 LIMIT 1 
 Execution Time:0.00032305717468262

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00027894973754883

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.00029087066650391

-------------------------------------
SELECT GET_LOCK('dde2597c46aedc468db6eea238d12d8b', 300) AS ci_session_lock 
 Execution Time:0.0003199577331543

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.00021600723266602

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `id` = '2'
AND `status` = 'active' 
 Execution Time:0.00031089782714844

-------------------------------------
SELECT `id`
FROM `questions`
WHERE `topic_id` = '2'
AND `status` = 'active'
ORDER BY `id` ASC
 LIMIT 1 
 Execution Time:0.00025510787963867

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00023293495178223

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.0003058910369873

-------------------------------------
SELECT GET_LOCK('dde2597c46aedc468db6eea238d12d8b', 300) AS ci_session_lock 
 Execution Time:0.00014185905456543

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.00020599365234375

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `id` = '2'
AND `status` = 'active' 
 Execution Time:0.00026512145996094

-------------------------------------
SELECT `id`
FROM `questions`
WHERE `topic_id` = '2'
AND `status` = 'active'
ORDER BY `id` ASC
 LIMIT 1 
 Execution Time:0.00023508071899414

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00051212310791016

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.0028030872344971

-------------------------------------
SELECT GET_LOCK('dde2597c46aedc468db6eea238d12d8b', 300) AS ci_session_lock 
 Execution Time:0.00021195411682129

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.00021910667419434

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9a26e3a0635cb471f94663f4dec868da' 
 Execution Time:0.00028491020202637

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '8', '9a26e3a0635cb471f94663f4dec868da') 
 Execution Time:0.0010619163513184

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00023412704467773

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '8' 
 Execution Time:0.00017404556274414

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00054383277893066

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.00029897689819336

-------------------------------------
SELECT GET_LOCK('dde2597c46aedc468db6eea238d12d8b', 300) AS ci_session_lock 
 Execution Time:0.00013995170593262

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.00017905235290527

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '9a26e3a0635cb471f94663f4dec868da' 
 Execution Time:0.00029802322387695

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '9', '9a26e3a0635cb471f94663f4dec868da') 
 Execution Time:0.00097107887268066

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.00037598609924316

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '9' 
 Execution Time:0.00045108795166016

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.0003199577331543

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.00029611587524414

-------------------------------------
SELECT GET_LOCK('dde2597c46aedc468db6eea238d12d8b', 300) AS ci_session_lock 
 Execution Time:0.0001521110534668

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.0002281665802002

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1671566059, `data` = '__ci_last_regenerate|i:1671566059;user_info|O:8:\"stdClass\":13:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:13:\"user_language\";s:1:\"2\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-11-14 19:33:55\";}site_lang|s:5:\"dutch\";topic_id|s:1:\"2\";questions_count|a:6:{i:0;s:1:\"8\";i:1;s:1:\"9\";i:2;s:2:\"10\";i:3;s:2:\"11\";i:4;s:2:\"12\";i:5;s:2:\"13\";}test_hash|s:32:\"9a26e3a0635cb471f94663f4dec868da\";'
WHERE `id` = 'f39dfa4d12fef1ed741159d5b80d8121f177e2de' 
 Execution Time:0.33483600616455

-------------------------------------
SELECT RELEASE_LOCK('dde2597c46aedc468db6eea238d12d8b') AS ci_session_lock 
 Execution Time:0.00016689300537109

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'b0640d806ac3bb834604d3c84c3f3cd36836e3a6' 
 Execution Time:0.00024104118347168

-------------------------------------
SELECT GET_LOCK('1d66cbe8851064649530b452831d535f', 300) AS ci_session_lock 
 Execution Time:0.00012493133544922

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2398a6429f4086eb57c6eefe4ecc13500a1d3564' 
 Execution Time:0.00014400482177734

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9a26e3a0635cb471f94663f4dec868da' 
 Execution Time:0.00026178359985352

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.0001990795135498

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '8' 
 Execution Time:0.00017786026000977

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00025486946105957

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2398a6429f4086eb57c6eefe4ecc13500a1d3564' 
 Execution Time:0.00029706954956055

-------------------------------------
SELECT GET_LOCK('1d66cbe8851064649530b452831d535f', 300) AS ci_session_lock 
 Execution Time:0.00025796890258789

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2398a6429f4086eb57c6eefe4ecc13500a1d3564' 
 Execution Time:0.00032782554626465

-------------------------------------
SELECT `id`
FROM `questions`
WHERE `topic_id` = '3'
AND `status` = 'active' 
 Execution Time:0.0003199577331543

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '3'
AND `question_id` = '15'
AND `question_hash` = '9a26e3a0635cb471f94663f4dec868da' 
 Execution Time:0.00020503997802734

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '3', '15', '9a26e3a0635cb471f94663f4dec868da') 
 Execution Time:0.022825002670288

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '15' 
 Execution Time:0.00047802925109863

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '15' 
 Execution Time:0.00035405158996582

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00034618377685547

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2398a6429f4086eb57c6eefe4ecc13500a1d3564' 
 Execution Time:0.00060510635375977

-------------------------------------
SELECT GET_LOCK('1d66cbe8851064649530b452831d535f', 300) AS ci_session_lock 
 Execution Time:0.00021004676818848

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2398a6429f4086eb57c6eefe4ecc13500a1d3564' 
 Execution Time:0.00023984909057617

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1671566437, `data` = '__ci_last_regenerate|i:1671566437;user_info|O:8:\"stdClass\":13:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:13:\"user_language\";s:1:\"2\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-11-14 19:33:55\";}site_lang|s:5:\"dutch\";topic_id|s:1:\"3\";questions_count|a:2:{i:0;s:2:\"14\";i:1;s:2:\"15\";}test_hash|s:32:\"9a26e3a0635cb471f94663f4dec868da\";'
WHERE `id` = '2398a6429f4086eb57c6eefe4ecc13500a1d3564' 
 Execution Time:0.0010128021240234

-------------------------------------
SELECT RELEASE_LOCK('1d66cbe8851064649530b452831d535f') AS ci_session_lock 
 Execution Time:0.00013589859008789

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '8a9b62714cd3758cef369fafa75c2447fe18745d' 
 Execution Time:0.00018191337585449

-------------------------------------
SELECT GET_LOCK('0abe78a66cfb3cc7e48c9e5f2400af15', 300) AS ci_session_lock 
 Execution Time:0.00011396408081055

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '753c39f35b4a2db24c39cec4b36a4cb170d18097' 
 Execution Time:0.00020694732666016

-------------------------------------
SELECT `id`
FROM `questions`
WHERE `topic_id` = '2'
AND `status` = 'active' 
 Execution Time:0.0003361701965332

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9a26e3a0635cb471f94663f4dec868da' 
 Execution Time:0.00021004676818848

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.0002439022064209

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '8' 
 Execution Time:0.00024890899658203

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00026106834411621

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '753c39f35b4a2db24c39cec4b36a4cb170d18097' 
 Execution Time:0.00026702880859375

-------------------------------------
SELECT GET_LOCK('0abe78a66cfb3cc7e48c9e5f2400af15', 300) AS ci_session_lock 
 Execution Time:0.00012683868408203

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '753c39f35b4a2db24c39cec4b36a4cb170d18097' 
 Execution Time:0.00016212463378906

-------------------------------------
SELECT *
FROM `languages`
WHERE `en_lang_name` = 'Dutch' 
 Execution Time:0.00022006034851074

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `status` = 'active'
AND `language_id` = '1' 
 Execution Time:0.0002291202545166

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.0005180835723877

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '753c39f35b4a2db24c39cec4b36a4cb170d18097' 
 Execution Time:0.00034904479980469

-------------------------------------
SELECT GET_LOCK('0abe78a66cfb3cc7e48c9e5f2400af15', 300) AS ci_session_lock 
 Execution Time:0.00017404556274414

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '753c39f35b4a2db24c39cec4b36a4cb170d18097' 
 Execution Time:0.00036215782165527

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `id` = '2'
AND `status` = 'active' 
 Execution Time:0.00032401084899902

-------------------------------------
SELECT `id`
FROM `questions`
WHERE `topic_id` = '2'
AND `status` = 'active'
ORDER BY `id` ASC
 LIMIT 1 
 Execution Time:0.00025105476379395

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00023198127746582

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '753c39f35b4a2db24c39cec4b36a4cb170d18097' 
 Execution Time:0.00095701217651367

-------------------------------------
SELECT GET_LOCK('0abe78a66cfb3cc7e48c9e5f2400af15', 300) AS ci_session_lock 
 Execution Time:0.00021719932556152

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '753c39f35b4a2db24c39cec4b36a4cb170d18097' 
 Execution Time:0.00029492378234863

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9a26e3a0635cb471f94663f4dec868da' 
 Execution Time:0.00049304962158203

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '8', '9a26e3a0635cb471f94663f4dec868da') 
 Execution Time:0.010442018508911

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00037503242492676

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '8' 
 Execution Time:0.001823902130127

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.0003821849822998

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '753c39f35b4a2db24c39cec4b36a4cb170d18097' 
 Execution Time:0.00029110908508301

-------------------------------------
SELECT GET_LOCK('0abe78a66cfb3cc7e48c9e5f2400af15', 300) AS ci_session_lock 
 Execution Time:0.00015401840209961

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '753c39f35b4a2db24c39cec4b36a4cb170d18097' 
 Execution Time:0.00017786026000977

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '9a26e3a0635cb471f94663f4dec868da' 
 Execution Time:0.00032401084899902

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '9', '9a26e3a0635cb471f94663f4dec868da') 
 Execution Time:0.0013120174407959

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.00026917457580566

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '9' 
 Execution Time:0.00018906593322754

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00018095970153809

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '753c39f35b4a2db24c39cec4b36a4cb170d18097' 
 Execution Time:0.00029802322387695

-------------------------------------
SELECT GET_LOCK('0abe78a66cfb3cc7e48c9e5f2400af15', 300) AS ci_session_lock 
 Execution Time:0.00016498565673828

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '753c39f35b4a2db24c39cec4b36a4cb170d18097' 
 Execution Time:0.00020289421081543

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = '9a26e3a0635cb471f94663f4dec868da' 
 Execution Time:0.00037908554077148

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '10', '9a26e3a0635cb471f94663f4dec868da') 
 Execution Time:0.059206008911133

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '10' 
 Execution Time:0.00031685829162598

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '10' 
 Execution Time:0.000762939453125

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00031900405883789

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '753c39f35b4a2db24c39cec4b36a4cb170d18097' 
 Execution Time:0.0003349781036377

-------------------------------------
SELECT GET_LOCK('0abe78a66cfb3cc7e48c9e5f2400af15', 300) AS ci_session_lock 
 Execution Time:0.0001370906829834

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '753c39f35b4a2db24c39cec4b36a4cb170d18097' 
 Execution Time:0.00020408630371094

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '9a26e3a0635cb471f94663f4dec868da' 
 Execution Time:0.00030207633972168

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.00016593933105469

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '9' 
 Execution Time:0.00013589859008789

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00025701522827148

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '753c39f35b4a2db24c39cec4b36a4cb170d18097' 
 Execution Time:0.00029706954956055

-------------------------------------
SELECT GET_LOCK('0abe78a66cfb3cc7e48c9e5f2400af15', 300) AS ci_session_lock 
 Execution Time:0.00023102760314941

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '753c39f35b4a2db24c39cec4b36a4cb170d18097' 
 Execution Time:0.00024890899658203

-------------------------------------
SELECT `id`
FROM `questions`
WHERE `topic_id` = '3'
AND `status` = 'active' 
 Execution Time:0.00033307075500488

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '3'
AND `question_id` = '14'
AND `question_hash` = '9a26e3a0635cb471f94663f4dec868da' 
 Execution Time:0.00018310546875

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '3', '14', '9a26e3a0635cb471f94663f4dec868da') 
 Execution Time:0.0010170936584473

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '14' 
 Execution Time:0.00031208992004395

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '14' 
 Execution Time:0.00030088424682617

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.0020289421081543

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '753c39f35b4a2db24c39cec4b36a4cb170d18097' 
 Execution Time:0.0002751350402832

-------------------------------------
SELECT GET_LOCK('0abe78a66cfb3cc7e48c9e5f2400af15', 300) AS ci_session_lock 
 Execution Time:0.00012397766113281

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '753c39f35b4a2db24c39cec4b36a4cb170d18097' 
 Execution Time:0.00016117095947266

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1671566772, `data` = '__ci_last_regenerate|i:1671566772;user_info|O:8:\"stdClass\":13:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:13:\"user_language\";s:1:\"2\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-11-14 19:33:55\";}site_lang|s:5:\"dutch\";topic_id|s:1:\"3\";questions_count|a:2:{i:0;s:2:\"14\";i:1;s:2:\"15\";}test_hash|s:32:\"9a26e3a0635cb471f94663f4dec868da\";'
WHERE `id` = '753c39f35b4a2db24c39cec4b36a4cb170d18097' 
 Execution Time:0.0010249614715576

-------------------------------------
SELECT RELEASE_LOCK('0abe78a66cfb3cc7e48c9e5f2400af15') AS ci_session_lock 
 Execution Time:9.2029571533203E-5

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '9781601f02bb1cc4fe9beb1c3c9063dcb873c9bd' 
 Execution Time:0.00014495849609375

-------------------------------------
SELECT GET_LOCK('58ef011c32c0f7f741baf6effbda7f80', 300) AS ci_session_lock 
 Execution Time:9.4890594482422E-5

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '19474a92e8a05338cfba7bee2432d2907ec27cc3' 
 Execution Time:0.00027894973754883

-------------------------------------
SELECT *
FROM `languages`
WHERE `en_lang_name` = 'Dutch' 
 Execution Time:0.00024890899658203

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `status` = 'active'
AND `language_id` = '1' 
 Execution Time:0.0002439022064209

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00030899047851562

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '19474a92e8a05338cfba7bee2432d2907ec27cc3' 
 Execution Time:0.00045013427734375

-------------------------------------
SELECT GET_LOCK('58ef011c32c0f7f741baf6effbda7f80', 300) AS ci_session_lock 
 Execution Time:0.00020813941955566

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '19474a92e8a05338cfba7bee2432d2907ec27cc3' 
 Execution Time:0.00021004676818848

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `id` = '2'
AND `status` = 'active' 
 Execution Time:0.00032901763916016

-------------------------------------
SELECT `id`
FROM `questions`
WHERE `topic_id` = '2'
AND `status` = 'active'
ORDER BY `id` ASC
 LIMIT 1 
 Execution Time:0.00028204917907715

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00025105476379395

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '19474a92e8a05338cfba7bee2432d2907ec27cc3' 
 Execution Time:0.00029301643371582

-------------------------------------
SELECT GET_LOCK('58ef011c32c0f7f741baf6effbda7f80', 300) AS ci_session_lock 
 Execution Time:0.00012493133544922

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '19474a92e8a05338cfba7bee2432d2907ec27cc3' 
 Execution Time:0.00015997886657715

-------------------------------------
SELECT `id`
FROM `questions`
WHERE `topic_id` = '2'
AND `status` = 'active' 
 Execution Time:0.00026297569274902

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9a26e3a0635cb471f94663f4dec868da' 
 Execution Time:0.00017786026000977

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '8', '9a26e3a0635cb471f94663f4dec868da') 
 Execution Time:0.039339780807495

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.0004580020904541

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '8' 
 Execution Time:0.00025105476379395

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00026798248291016

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '19474a92e8a05338cfba7bee2432d2907ec27cc3' 
 Execution Time:0.00085902214050293

-------------------------------------
SELECT GET_LOCK('58ef011c32c0f7f741baf6effbda7f80', 300) AS ci_session_lock 
 Execution Time:0.00070405006408691

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '19474a92e8a05338cfba7bee2432d2907ec27cc3' 
 Execution Time:0.00078892707824707

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '9a26e3a0635cb471f94663f4dec868da' 
 Execution Time:0.00045490264892578

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '9', '9a26e3a0635cb471f94663f4dec868da') 
 Execution Time:0.056092977523804

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.00027203559875488

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '9' 
 Execution Time:0.00018310546875

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00047612190246582

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '19474a92e8a05338cfba7bee2432d2907ec27cc3' 
 Execution Time:0.00034213066101074

-------------------------------------
SELECT GET_LOCK('58ef011c32c0f7f741baf6effbda7f80', 300) AS ci_session_lock 
 Execution Time:0.00019001960754395

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '19474a92e8a05338cfba7bee2432d2907ec27cc3' 
 Execution Time:0.00026416778564453

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9a26e3a0635cb471f94663f4dec868da' 
 Execution Time:0.00048708915710449

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00030899047851562

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '8' 
 Execution Time:0.00018215179443359

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00024199485778809

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '19474a92e8a05338cfba7bee2432d2907ec27cc3' 
 Execution Time:0.00030088424682617

-------------------------------------
SELECT GET_LOCK('58ef011c32c0f7f741baf6effbda7f80', 300) AS ci_session_lock 
 Execution Time:0.00014400482177734

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '19474a92e8a05338cfba7bee2432d2907ec27cc3' 
 Execution Time:0.00017499923706055

-------------------------------------
SELECT `id`
FROM `questions`
WHERE `topic_id` = '3'
AND `status` = 'active' 
 Execution Time:0.00041508674621582

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '3'
AND `question_id` = '14'
AND `question_hash` = '9a26e3a0635cb471f94663f4dec868da' 
 Execution Time:0.00020098686218262

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '3', '14', '9a26e3a0635cb471f94663f4dec868da') 
 Execution Time:0.053735971450806

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '14' 
 Execution Time:0.00032615661621094

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '14' 
 Execution Time:0.00047802925109863

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00026702880859375

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '19474a92e8a05338cfba7bee2432d2907ec27cc3' 
 Execution Time:0.00029206275939941

-------------------------------------
SELECT GET_LOCK('58ef011c32c0f7f741baf6effbda7f80', 300) AS ci_session_lock 
 Execution Time:0.00012493133544922

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '19474a92e8a05338cfba7bee2432d2907ec27cc3' 
 Execution Time:0.00017309188842773

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1671567078, `data` = '__ci_last_regenerate|i:1671567078;user_info|O:8:\"stdClass\":13:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:13:\"user_language\";s:1:\"2\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-11-14 19:33:55\";}site_lang|s:5:\"dutch\";topic_id|s:1:\"3\";questions_count|a:2:{i:0;s:2:\"14\";i:1;s:2:\"15\";}test_hash|s:32:\"9a26e3a0635cb471f94663f4dec868da\";'
WHERE `id` = '19474a92e8a05338cfba7bee2432d2907ec27cc3' 
 Execution Time:0.0011088848114014

-------------------------------------
SELECT RELEASE_LOCK('58ef011c32c0f7f741baf6effbda7f80') AS ci_session_lock 
 Execution Time:0.00013589859008789

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'd0842f12d1425524460b59532ec10c3c060b533f' 
 Execution Time:0.00020790100097656

-------------------------------------
SELECT GET_LOCK('03edc2c30ae7e78c96171318202ff168', 300) AS ci_session_lock 
 Execution Time:0.00010204315185547

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'a3c4ebfc46658bcbceb195dece177c28350aefac' 
 Execution Time:0.00014400482177734

-------------------------------------
SELECT *
FROM `languages`
WHERE `en_lang_name` = 'Dutch' 
 Execution Time:0.00029492378234863

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `status` = 'active'
AND `language_id` = '1' 
 Execution Time:0.00028896331787109

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00044512748718262

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'a3c4ebfc46658bcbceb195dece177c28350aefac' 
 Execution Time:0.00028109550476074

-------------------------------------
SELECT GET_LOCK('03edc2c30ae7e78c96171318202ff168', 300) AS ci_session_lock 
 Execution Time:0.0001370906829834

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'a3c4ebfc46658bcbceb195dece177c28350aefac' 
 Execution Time:0.00017905235290527

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `id` = '2'
AND `status` = 'active' 
 Execution Time:0.00047993659973145

-------------------------------------
SELECT `id`
FROM `questions`
WHERE `topic_id` = '2'
AND `status` = 'active'
ORDER BY `id` ASC
 LIMIT 1 
 Execution Time:0.00092291831970215

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.0013148784637451

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'a3c4ebfc46658bcbceb195dece177c28350aefac' 
 Execution Time:0.00029516220092773

-------------------------------------
SELECT GET_LOCK('03edc2c30ae7e78c96171318202ff168', 300) AS ci_session_lock 
 Execution Time:0.00017094612121582

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'a3c4ebfc46658bcbceb195dece177c28350aefac' 
 Execution Time:0.0001990795135498

-------------------------------------
SELECT `id`
FROM `questions`
WHERE `topic_id` = '2'
AND `status` = 'active' 
 Execution Time:0.00030279159545898

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9a26e3a0635cb471f94663f4dec868da' 
 Execution Time:0.00019097328186035

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '8', '9a26e3a0635cb471f94663f4dec868da-hash3') 
 Execution Time:0.00092005729675293

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00022220611572266

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '8' 
 Execution Time:0.00018906593322754

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00036787986755371

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'a3c4ebfc46658bcbceb195dece177c28350aefac' 
 Execution Time:0.00028109550476074

-------------------------------------
SELECT GET_LOCK('03edc2c30ae7e78c96171318202ff168', 300) AS ci_session_lock 
 Execution Time:0.00019693374633789

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'a3c4ebfc46658bcbceb195dece177c28350aefac' 
 Execution Time:0.00018906593322754

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1671567767, `data` = '__ci_last_regenerate|i:1671567767;user_info|O:8:\"stdClass\":13:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:13:\"user_language\";s:1:\"2\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-11-14 19:33:55\";}site_lang|s:5:\"dutch\";topic_id|s:1:\"2\";questions_count|a:6:{i:0;s:1:\"8\";i:1;s:1:\"9\";i:2;s:2:\"10\";i:3;s:2:\"11\";i:4;s:2:\"12\";i:5;s:2:\"13\";}test_hash|s:32:\"9a26e3a0635cb471f94663f4dec868da\";'
WHERE `id` = 'a3c4ebfc46658bcbceb195dece177c28350aefac' 
 Execution Time:0.012650012969971

-------------------------------------
SELECT RELEASE_LOCK('03edc2c30ae7e78c96171318202ff168') AS ci_session_lock 
 Execution Time:0.00023198127746582

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '54d0f1d9807e525b433f83bae102cf3b52070749' 
 Execution Time:0.00028610229492188

-------------------------------------
SELECT GET_LOCK('00b33ae6c198b3d67b44faea941665f5', 300) AS ci_session_lock 
 Execution Time:0.00015401840209961

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'bb84b3a74117836678f9f5875825d03da39bb4cc' 
 Execution Time:0.00018405914306641

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '9a26e3a0635cb471f94663f4dec868da' 
 Execution Time:0.00041699409484863

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '9', '9a26e3a0635cb471f94663f4dec868da-hash3') 
 Execution Time:0.053973913192749

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.00039410591125488

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '9' 
 Execution Time:0.00023388862609863

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00019598007202148

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'bb84b3a74117836678f9f5875825d03da39bb4cc' 
 Execution Time:0.00030994415283203

-------------------------------------
SELECT GET_LOCK('00b33ae6c198b3d67b44faea941665f5', 300) AS ci_session_lock 
 Execution Time:0.00019288063049316

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'bb84b3a74117836678f9f5875825d03da39bb4cc' 
 Execution Time:0.00022101402282715

-------------------------------------
SELECT `id`
FROM `questions`
WHERE `topic_id` = '3'
AND `status` = 'active' 
 Execution Time:0.00041890144348145

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '3'
AND `question_id` = '20'
AND `question_hash` = '9a26e3a0635cb471f94663f4dec868da' 
 Execution Time:0.00028204917907715

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '3', '20', '9a26e3a0635cb471f94663f4dec868da-hash3') 
 Execution Time:0.028630018234253

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '20' 
 Execution Time:0.00034785270690918

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '20' 
 Execution Time:0.00026297569274902

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00028681755065918

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'bb84b3a74117836678f9f5875825d03da39bb4cc' 
 Execution Time:0.00029993057250977

-------------------------------------
SELECT GET_LOCK('00b33ae6c198b3d67b44faea941665f5', 300) AS ci_session_lock 
 Execution Time:0.0001380443572998

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'bb84b3a74117836678f9f5875825d03da39bb4cc' 
 Execution Time:0.00016903877258301

-------------------------------------
SELECT `id`
FROM `questions`
WHERE `topic_id` = '2'
AND `status` = 'active' 
 Execution Time:0.0003659725189209

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '9a26e3a0635cb471f94663f4dec868da' 
 Execution Time:0.000244140625

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '9', '9a26e3a0635cb471f94663f4dec868da-hash3') 
 Execution Time:0.16711091995239

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.0004889965057373

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '9' 
 Execution Time:0.00025701522827148

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.0002739429473877

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'bb84b3a74117836678f9f5875825d03da39bb4cc' 
 Execution Time:0.00028514862060547

-------------------------------------
SELECT GET_LOCK('00b33ae6c198b3d67b44faea941665f5', 300) AS ci_session_lock 
 Execution Time:0.00014996528625488

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'bb84b3a74117836678f9f5875825d03da39bb4cc' 
 Execution Time:0.00018596649169922

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1671568108, `data` = '__ci_last_regenerate|i:1671568108;user_info|O:8:\"stdClass\":13:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:13:\"user_language\";s:1:\"2\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-11-14 19:33:55\";}site_lang|s:5:\"dutch\";topic_id|s:1:\"2\";questions_count|a:6:{i:0;s:1:\"8\";i:1;s:1:\"9\";i:2;s:2:\"10\";i:3;s:2:\"11\";i:4;s:2:\"12\";i:5;s:2:\"13\";}test_hash|s:32:\"9a26e3a0635cb471f94663f4dec868da\";'
WHERE `id` = 'bb84b3a74117836678f9f5875825d03da39bb4cc' 
 Execution Time:0.055115938186646

-------------------------------------
SELECT RELEASE_LOCK('00b33ae6c198b3d67b44faea941665f5') AS ci_session_lock 
 Execution Time:0.00025486946105957

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'f01d92994a2c4960db86b71b068b74ecc56d8e7f' 
 Execution Time:0.00034594535827637

-------------------------------------
SELECT GET_LOCK('261fc6f7acc03e690bc3684a3bdcb2a2', 300) AS ci_session_lock 
 Execution Time:0.00036001205444336

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '1c30ba7760cd4992ac7aea656168463a325cd3f1' 
 Execution Time:0.00043416023254395

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '9' 
 Execution Time:0.00039196014404297

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '9a26e3a0635cb471f94663f4dec868da' 
 Execution Time:0.0003659725189209

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '9', '9a26e3a0635cb471f94663f4dec868da-hash3') 
 Execution Time:0.0009150505065918

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.00035309791564941

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '9' 
 Execution Time:0.00023913383483887

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00030899047851562

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '1c30ba7760cd4992ac7aea656168463a325cd3f1' 
 Execution Time:0.00027298927307129

-------------------------------------
SELECT GET_LOCK('261fc6f7acc03e690bc3684a3bdcb2a2', 300) AS ci_session_lock 
 Execution Time:0.0001518726348877

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '1c30ba7760cd4992ac7aea656168463a325cd3f1' 
 Execution Time:0.00019598007202148

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '9' 
 Execution Time:0.00028395652770996

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '9a26e3a0635cb471f94663f4dec868da' 
 Execution Time:0.00018000602722168

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '9', '9a26e3a0635cb471f94663f4dec868da-hash3') 
 Execution Time:0.009058952331543

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.00028109550476074

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '9' 
 Execution Time:0.00017309188842773

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00022602081298828

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '1c30ba7760cd4992ac7aea656168463a325cd3f1' 
 Execution Time:0.00028300285339355

-------------------------------------
SELECT GET_LOCK('261fc6f7acc03e690bc3684a3bdcb2a2', 300) AS ci_session_lock 
 Execution Time:0.00015807151794434

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '1c30ba7760cd4992ac7aea656168463a325cd3f1' 
 Execution Time:0.00023698806762695

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '9' 
 Execution Time:0.00030899047851562

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '9a26e3a0635cb471f94663f4dec868da' 
 Execution Time:0.00019311904907227

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', 0, '9a26e3a0635cb471f94663f4dec868da-hash3') 
 Execution Time:0.0022990703582764

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.00034284591674805

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '9' 
 Execution Time:0.00025701522827148

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00028204917907715

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '1c30ba7760cd4992ac7aea656168463a325cd3f1' 
 Execution Time:0.00029897689819336

-------------------------------------
SELECT GET_LOCK('261fc6f7acc03e690bc3684a3bdcb2a2', 300) AS ci_session_lock 
 Execution Time:0.00015711784362793

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '1c30ba7760cd4992ac7aea656168463a325cd3f1' 
 Execution Time:0.00021791458129883

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.00029706954956055

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9a26e3a0635cb471f94663f4dec868da' 
 Execution Time:0.00018596649169922

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '8', '9a26e3a0635cb471f94663f4dec868da-hash3') 
 Execution Time:0.09157395362854

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00031590461730957

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '8' 
 Execution Time:0.00021219253540039

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00022292137145996

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '1c30ba7760cd4992ac7aea656168463a325cd3f1' 
 Execution Time:0.00028395652770996

-------------------------------------
SELECT GET_LOCK('261fc6f7acc03e690bc3684a3bdcb2a2', 300) AS ci_session_lock 
 Execution Time:0.00013899803161621

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '1c30ba7760cd4992ac7aea656168463a325cd3f1' 
 Execution Time:0.00016689300537109

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '9' 
 Execution Time:0.0002739429473877

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '9a26e3a0635cb471f94663f4dec868da' 
 Execution Time:0.00019288063049316

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '9', '9a26e3a0635cb471f94663f4dec868da') 
 Execution Time:0.015052080154419

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.0004420280456543

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '9' 
 Execution Time:0.00031185150146484

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00023603439331055

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '1c30ba7760cd4992ac7aea656168463a325cd3f1' 
 Execution Time:0.00028300285339355

-------------------------------------
SELECT GET_LOCK('261fc6f7acc03e690bc3684a3bdcb2a2', 300) AS ci_session_lock 
 Execution Time:0.0001368522644043

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '1c30ba7760cd4992ac7aea656168463a325cd3f1' 
 Execution Time:0.00016403198242188

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.0002748966217041

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9a26e3a0635cb471f94663f4dec868da' 
 Execution Time:0.0001828670501709

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '8', '9a26e3a0635cb471f94663f4dec868da') 
 Execution Time:0.002072811126709

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00027203559875488

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '8' 
 Execution Time:0.00019693374633789

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00026702880859375

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '1c30ba7760cd4992ac7aea656168463a325cd3f1' 
 Execution Time:0.00030899047851562

-------------------------------------
SELECT GET_LOCK('261fc6f7acc03e690bc3684a3bdcb2a2', 300) AS ci_session_lock 
 Execution Time:0.00015592575073242

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '1c30ba7760cd4992ac7aea656168463a325cd3f1' 
 Execution Time:0.00020599365234375

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '9' 
 Execution Time:0.00039100646972656

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '9a26e3a0635cb471f94663f4dec868da' 
 Execution Time:0.0002138614654541

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.00017094612121582

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '9' 
 Execution Time:0.00015807151794434

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.073009967803955

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '1c30ba7760cd4992ac7aea656168463a325cd3f1' 
 Execution Time:0.00032496452331543

-------------------------------------
SELECT GET_LOCK('261fc6f7acc03e690bc3684a3bdcb2a2', 300) AS ci_session_lock 
 Execution Time:0.00014209747314453

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '1c30ba7760cd4992ac7aea656168463a325cd3f1' 
 Execution Time:0.00020813941955566

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.00026488304138184

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9a26e3a0635cb471f94663f4dec868da' 
 Execution Time:0.00023698806762695

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00027084350585938

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '8' 
 Execution Time:0.00017118453979492

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.0001680850982666

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '1c30ba7760cd4992ac7aea656168463a325cd3f1' 
 Execution Time:0.00028705596923828

-------------------------------------
SELECT GET_LOCK('261fc6f7acc03e690bc3684a3bdcb2a2', 300) AS ci_session_lock 
 Execution Time:0.00018692016601562

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '1c30ba7760cd4992ac7aea656168463a325cd3f1' 
 Execution Time:0.00022697448730469

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.019197225570679

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9a26e3a0635cb471f94663f4dec868da' 
 Execution Time:0.00042104721069336

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '8', '9a26e3a0635cb471f94663f4dec868da') 
 Execution Time:0.0010311603546143

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.0002591609954834

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '8' 
 Execution Time:0.00018692016601562

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00021195411682129

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '1c30ba7760cd4992ac7aea656168463a325cd3f1' 
 Execution Time:0.00094008445739746

-------------------------------------
SELECT GET_LOCK('261fc6f7acc03e690bc3684a3bdcb2a2', 300) AS ci_session_lock 
 Execution Time:0.00023698806762695

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '1c30ba7760cd4992ac7aea656168463a325cd3f1' 
 Execution Time:0.00029397010803223

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1671568685, `data` = '__ci_last_regenerate|i:1671568685;user_info|O:8:\"stdClass\":13:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:13:\"user_language\";s:1:\"2\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-11-14 19:33:55\";}site_lang|s:5:\"dutch\";topic_id|s:1:\"2\";questions_count|a:6:{i:0;s:1:\"8\";i:1;s:1:\"9\";i:2;s:2:\"10\";i:3;s:2:\"11\";i:4;s:2:\"12\";i:5;s:2:\"13\";}test_hash|s:32:\"9a26e3a0635cb471f94663f4dec868da\";'
WHERE `id` = '1c30ba7760cd4992ac7aea656168463a325cd3f1' 
 Execution Time:0.069927930831909

-------------------------------------
SELECT RELEASE_LOCK('261fc6f7acc03e690bc3684a3bdcb2a2') AS ci_session_lock 
 Execution Time:0.00087499618530273

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2ea332ebc27e9602431ee82b2327943ba643393c' 
 Execution Time:0.001910924911499

-------------------------------------
SELECT GET_LOCK('f229e67b70f15662aac6f6e800fa5a70', 300) AS ci_session_lock 
 Execution Time:0.00042986869812012

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '16e113f3a34892ec453f1b22494dfa1d46467765' 
 Execution Time:0.00068187713623047

-------------------------------------
SELECT *
FROM `languages`
WHERE `en_lang_name` = 'Dutch' 
 Execution Time:0.0039021968841553

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `status` = 'active'
AND `language_id` = '1' 
 Execution Time:0.031378984451294

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.0003509521484375

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '16e113f3a34892ec453f1b22494dfa1d46467765' 
 Execution Time:0.00028014183044434

-------------------------------------
SELECT GET_LOCK('f229e67b70f15662aac6f6e800fa5a70', 300) AS ci_session_lock 
 Execution Time:0.00010395050048828

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '16e113f3a34892ec453f1b22494dfa1d46467765' 
 Execution Time:0.0001530647277832

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `id` = '2'
AND `status` = 'active' 
 Execution Time:0.00021815299987793

-------------------------------------
SELECT `id`
FROM `questions`
WHERE `topic_id` = '2'
AND `status` = 'active'
ORDER BY `id` ASC
 LIMIT 1 
 Execution Time:0.066931962966919

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00024294853210449

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '16e113f3a34892ec453f1b22494dfa1d46467765' 
 Execution Time:0.00042414665222168

-------------------------------------
SELECT GET_LOCK('f229e67b70f15662aac6f6e800fa5a70', 300) AS ci_session_lock 
 Execution Time:0.0001981258392334

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '16e113f3a34892ec453f1b22494dfa1d46467765' 
 Execution Time:0.00024008750915527

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.0005490779876709

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9a26e3a0635cb471f94663f4dec868da' 
 Execution Time:0.00021195411682129

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '8', '9a26e3a0635cb471f94663f4dec868da') 
 Execution Time:0.0022718906402588

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00027990341186523

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '8' 
 Execution Time:0.00020790100097656

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00020194053649902

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '16e113f3a34892ec453f1b22494dfa1d46467765' 
 Execution Time:0.00047898292541504

-------------------------------------
SELECT GET_LOCK('f229e67b70f15662aac6f6e800fa5a70', 300) AS ci_session_lock 
 Execution Time:0.00024199485778809

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '16e113f3a34892ec453f1b22494dfa1d46467765' 
 Execution Time:0.00019097328186035

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '9' 
 Execution Time:0.00028610229492188

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '9a26e3a0635cb471f94663f4dec868da' 
 Execution Time:0.00019383430480957

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '9', '9a26e3a0635cb471f94663f4dec868da') 
 Execution Time:0.0024509429931641

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.00029897689819336

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '9' 
 Execution Time:0.00018596649169922

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00021791458129883

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '16e113f3a34892ec453f1b22494dfa1d46467765' 
 Execution Time:0.00045204162597656

-------------------------------------
SELECT GET_LOCK('f229e67b70f15662aac6f6e800fa5a70', 300) AS ci_session_lock 
 Execution Time:0.00031495094299316

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '16e113f3a34892ec453f1b22494dfa1d46467765' 
 Execution Time:0.00023198127746582

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
AND `question_hash` = '9a26e3a0635cb471f94663f4dec868da' 
 Execution Time:0.00028300285339355

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '10', '9a26e3a0635cb471f94663f4dec868da') 
 Execution Time:0.053998947143555

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '10' 
 Execution Time:0.00035691261291504

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '10' 
 Execution Time:0.0004727840423584

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00034403800964355

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '16e113f3a34892ec453f1b22494dfa1d46467765' 
 Execution Time:0.00041389465332031

-------------------------------------
SELECT GET_LOCK('f229e67b70f15662aac6f6e800fa5a70', 300) AS ci_session_lock 
 Execution Time:0.00017094612121582

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '16e113f3a34892ec453f1b22494dfa1d46467765' 
 Execution Time:0.00017189979553223

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '9' 
 Execution Time:0.00023698806762695

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '9a26e3a0635cb471f94663f4dec868da' 
 Execution Time:0.0001828670501709

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.0002138614654541

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '9' 
 Execution Time:0.00019192695617676

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00016903877258301

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '16e113f3a34892ec453f1b22494dfa1d46467765' 
 Execution Time:0.00029802322387695

-------------------------------------
SELECT GET_LOCK('f229e67b70f15662aac6f6e800fa5a70', 300) AS ci_session_lock 
 Execution Time:0.00019311904907227

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '16e113f3a34892ec453f1b22494dfa1d46467765' 
 Execution Time:0.0005490779876709

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '3'
AND `id` = '14' 
 Execution Time:0.00040292739868164

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '3', '14', 'fd3ac529130d3f4ad123b8f72aff0719') 
 Execution Time:0.0011520385742188

-------------------------------------
SELECT `id`
FROM `questions`
WHERE `topic_id` = '3'
AND `status` = 'active' 
 Execution Time:0.00040197372436523

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '14' 
 Execution Time:0.00029706954956055

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '14' 
 Execution Time:0.00044798851013184

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00042104721069336

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '16e113f3a34892ec453f1b22494dfa1d46467765' 
 Execution Time:0.0003960132598877

-------------------------------------
SELECT GET_LOCK('f229e67b70f15662aac6f6e800fa5a70', 300) AS ci_session_lock 
 Execution Time:0.00020098686218262

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '16e113f3a34892ec453f1b22494dfa1d46467765' 
 Execution Time:0.00021600723266602

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '3'
AND `id` = '15' 
 Execution Time:0.00026988983154297

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '3'
AND `question_id` = '15'
AND `question_hash` = 'fd3ac529130d3f4ad123b8f72aff0719' 
 Execution Time:0.00018095970153809

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '3', '15', 'fd3ac529130d3f4ad123b8f72aff0719') 
 Execution Time:0.0024371147155762

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '15' 
 Execution Time:0.00026416778564453

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '15' 
 Execution Time:0.00017380714416504

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00017404556274414

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '16e113f3a34892ec453f1b22494dfa1d46467765' 
 Execution Time:0.00028586387634277

-------------------------------------
SELECT GET_LOCK('f229e67b70f15662aac6f6e800fa5a70', 300) AS ci_session_lock 
 Execution Time:0.0001671314239502

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '16e113f3a34892ec453f1b22494dfa1d46467765' 
 Execution Time:0.00022006034851074

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '3'
AND `id` = '14' 
 Execution Time:0.00032496452331543

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '3'
AND `question_id` = '14'
AND `question_hash` = 'fd3ac529130d3f4ad123b8f72aff0719' 
 Execution Time:0.00018882751464844

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '14' 
 Execution Time:0.00018906593322754

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '14' 
 Execution Time:0.00016093254089355

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.0002138614654541

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '16e113f3a34892ec453f1b22494dfa1d46467765' 
 Execution Time:0.00029611587524414

-------------------------------------
SELECT GET_LOCK('f229e67b70f15662aac6f6e800fa5a70', 300) AS ci_session_lock 
 Execution Time:0.00012493133544922

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '16e113f3a34892ec453f1b22494dfa1d46467765' 
 Execution Time:0.00016212463378906

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '3'
AND `id` = '15' 
 Execution Time:0.00025510787963867

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '3'
AND `question_id` = '15'
AND `question_hash` = 'fd3ac529130d3f4ad123b8f72aff0719' 
 Execution Time:0.00018787384033203

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '15' 
 Execution Time:0.00018000602722168

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '15' 
 Execution Time:0.00018095970153809

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00017595291137695

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '16e113f3a34892ec453f1b22494dfa1d46467765' 
 Execution Time:0.00041985511779785

-------------------------------------
SELECT GET_LOCK('f229e67b70f15662aac6f6e800fa5a70', 300) AS ci_session_lock 
 Execution Time:0.00019383430480957

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '16e113f3a34892ec453f1b22494dfa1d46467765' 
 Execution Time:0.00027585029602051

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1671569280, `data` = '__ci_last_regenerate|i:1671569280;user_info|O:8:\"stdClass\":13:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:13:\"user_language\";s:1:\"2\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-11-14 19:33:55\";}site_lang|s:5:\"dutch\";topic_id|s:1:\"3\";questions_count|a:2:{i:0;s:2:\"14\";i:1;s:2:\"15\";}test_hash|s:32:\"fd3ac529130d3f4ad123b8f72aff0719\";'
WHERE `id` = '16e113f3a34892ec453f1b22494dfa1d46467765' 
 Execution Time:0.068312168121338

-------------------------------------
SELECT RELEASE_LOCK('f229e67b70f15662aac6f6e800fa5a70') AS ci_session_lock 
 Execution Time:0.00027298927307129

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '840aa8bd85df74ef7ebe3fe7694acce4ca8e9125' 
 Execution Time:0.00082802772521973

-------------------------------------
SELECT GET_LOCK('4d68364ca3edde6d188940e9e0aa7592', 300) AS ci_session_lock 
 Execution Time:0.00026702880859375

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'ad7baff6b8096ebd17976ccf1cac7d225d30d2a0' 
 Execution Time:0.00033402442932129

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '3'
AND `id` = '14' 
 Execution Time:0.00038290023803711

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '3'
AND `question_id` = '14'
AND `question_hash` = 'fd3ac529130d3f4ad123b8f72aff0719' 
 Execution Time:0.00026702880859375

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '14' 
 Execution Time:0.00020480155944824

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '14' 
 Execution Time:0.00018715858459473

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00033092498779297

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'ad7baff6b8096ebd17976ccf1cac7d225d30d2a0' 
 Execution Time:0.00039505958557129

-------------------------------------
SELECT GET_LOCK('4d68364ca3edde6d188940e9e0aa7592', 300) AS ci_session_lock 
 Execution Time:0.0002448558807373

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'ad7baff6b8096ebd17976ccf1cac7d225d30d2a0' 
 Execution Time:0.00022411346435547

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '3'
AND `id` = '14' 
 Execution Time:0.0004270076751709

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '3'
AND `question_id` = '14'
AND `question_hash` = 'fd3ac529130d3f4ad123b8f72aff0719' 
 Execution Time:0.00041890144348145

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '14' 
 Execution Time:0.00040912628173828

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '14' 
 Execution Time:0.00041913986206055

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.0002598762512207

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'ad7baff6b8096ebd17976ccf1cac7d225d30d2a0' 
 Execution Time:0.0002899169921875

-------------------------------------
SELECT GET_LOCK('4d68364ca3edde6d188940e9e0aa7592', 300) AS ci_session_lock 
 Execution Time:0.00019502639770508

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'ad7baff6b8096ebd17976ccf1cac7d225d30d2a0' 
 Execution Time:0.00022602081298828

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1671570861, `data` = '__ci_last_regenerate|i:1671570861;user_info|O:8:\"stdClass\":13:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:13:\"user_language\";s:1:\"2\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-11-14 19:33:55\";}site_lang|s:5:\"dutch\";topic_id|s:1:\"3\";questions_count|a:2:{i:0;s:2:\"14\";i:1;s:2:\"15\";}test_hash|s:32:\"fd3ac529130d3f4ad123b8f72aff0719\";'
WHERE `id` = 'ad7baff6b8096ebd17976ccf1cac7d225d30d2a0' 
 Execution Time:0.033200979232788

-------------------------------------
SELECT RELEASE_LOCK('4d68364ca3edde6d188940e9e0aa7592') AS ci_session_lock 
 Execution Time:0.00021100044250488

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'f4d7ed6e1213af73985a6294763027a7886636be' 
 Execution Time:0.00058197975158691

-------------------------------------
SELECT GET_LOCK('70e7f823a040ab994b97b32835919d60', 300) AS ci_session_lock 
 Execution Time:0.00022506713867188

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '5ff69b0272e157732d734b0e2c6c9c5c3a853cc5' 
 Execution Time:0.00026392936706543

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '3'
AND `id` = '14' 
 Execution Time:0.0023341178894043

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '3'
AND `question_id` = '14'
AND `question_hash` = 'fd3ac529130d3f4ad123b8f72aff0719' 
 Execution Time:0.0018231868743896

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '14' 
 Execution Time:0.0010411739349365

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '14' 
 Execution Time:0.001417875289917

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00036311149597168

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '5ff69b0272e157732d734b0e2c6c9c5c3a853cc5' 
 Execution Time:0.00035214424133301

-------------------------------------
SELECT GET_LOCK('70e7f823a040ab994b97b32835919d60', 300) AS ci_session_lock 
 Execution Time:0.00018000602722168

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '5ff69b0272e157732d734b0e2c6c9c5c3a853cc5' 
 Execution Time:0.00021696090698242

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '3'
AND `id` = '14' 
 Execution Time:0.00058698654174805

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '3'
AND `question_id` = '14'
AND `question_hash` = 'fd3ac529130d3f4ad123b8f72aff0719' 
 Execution Time:0.00028014183044434

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '14' 
 Execution Time:0.00030398368835449

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '14' 
 Execution Time:0.00031185150146484

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.0004420280456543

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '5ff69b0272e157732d734b0e2c6c9c5c3a853cc5' 
 Execution Time:0.00031805038452148

-------------------------------------
SELECT GET_LOCK('70e7f823a040ab994b97b32835919d60', 300) AS ci_session_lock 
 Execution Time:0.00013589859008789

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '5ff69b0272e157732d734b0e2c6c9c5c3a853cc5' 
 Execution Time:0.00017189979553223

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '3'
AND `question_id` = '14'
AND `question_hash` = 'fd3ac529130d3f4ad123b8f72aff0719' 
 Execution Time:0.0002741813659668

-------------------------------------
UPDATE `user_answers_temp` SET `status` = 'not_answered'
WHERE `user_id` = '6'
AND `topic_id` = '3'
AND `question_id` = '14'
AND `question_hash` = 'fd3ac529130d3f4ad123b8f72aff0719' 
 Execution Time:0.013922929763794

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '5ff69b0272e157732d734b0e2c6c9c5c3a853cc5' 
 Execution Time:0.00036501884460449

-------------------------------------
SELECT GET_LOCK('70e7f823a040ab994b97b32835919d60', 300) AS ci_session_lock 
 Execution Time:0.0001530647277832

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '5ff69b0272e157732d734b0e2c6c9c5c3a853cc5' 
 Execution Time:0.0002140998840332

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '3'
AND `id` = '15' 
 Execution Time:0.00032687187194824

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '3'
AND `question_id` = '15'
AND `question_hash` = 'fd3ac529130d3f4ad123b8f72aff0719' 
 Execution Time:0.00018191337585449

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '15' 
 Execution Time:0.00018095970153809

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '15' 
 Execution Time:0.00026798248291016

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00030398368835449

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '5ff69b0272e157732d734b0e2c6c9c5c3a853cc5' 
 Execution Time:0.00027298927307129

-------------------------------------
SELECT GET_LOCK('70e7f823a040ab994b97b32835919d60', 300) AS ci_session_lock 
 Execution Time:0.00016307830810547

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '5ff69b0272e157732d734b0e2c6c9c5c3a853cc5' 
 Execution Time:0.00025391578674316

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.00045609474182129

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '8', '9c2053ed885c36f0b2cad63303b4f841') 
 Execution Time:0.050252914428711

-------------------------------------
SELECT `id`
FROM `questions`
WHERE `topic_id` = '2'
AND `status` = 'active' 
 Execution Time:0.00034284591674805

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00020909309387207

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '8' 
 Execution Time:0.00015807151794434

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00025701522827148

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '5ff69b0272e157732d734b0e2c6c9c5c3a853cc5' 
 Execution Time:0.00054693222045898

-------------------------------------
SELECT GET_LOCK('70e7f823a040ab994b97b32835919d60', 300) AS ci_session_lock 
 Execution Time:0.00019288063049316

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '5ff69b0272e157732d734b0e2c6c9c5c3a853cc5' 
 Execution Time:0.00022101402282715

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.00034999847412109

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00020694732666016

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00017189979553223

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '8' 
 Execution Time:0.00015902519226074

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00032401084899902

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '5ff69b0272e157732d734b0e2c6c9c5c3a853cc5' 
 Execution Time:0.00026607513427734

-------------------------------------
SELECT GET_LOCK('70e7f823a040ab994b97b32835919d60', 300) AS ci_session_lock 
 Execution Time:0.00012493133544922

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '5ff69b0272e157732d734b0e2c6c9c5c3a853cc5' 
 Execution Time:0.00017094612121582

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00040292739868164

-------------------------------------
UPDATE `user_answers_temp` SET `status` = 'not_answered'
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.0027141571044922

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '5ff69b0272e157732d734b0e2c6c9c5c3a853cc5' 
 Execution Time:0.00031113624572754

-------------------------------------
SELECT GET_LOCK('70e7f823a040ab994b97b32835919d60', 300) AS ci_session_lock 
 Execution Time:0.00011682510375977

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '5ff69b0272e157732d734b0e2c6c9c5c3a853cc5' 
 Execution Time:0.00014805793762207

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '9' 
 Execution Time:0.00028395652770996

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00018692016601562

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '9', '9c2053ed885c36f0b2cad63303b4f841') 
 Execution Time:0.0172438621521

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.00023889541625977

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '9' 
 Execution Time:0.0001380443572998

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00016903877258301

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '5ff69b0272e157732d734b0e2c6c9c5c3a853cc5' 
 Execution Time:0.00027298927307129

-------------------------------------
SELECT GET_LOCK('70e7f823a040ab994b97b32835919d60', 300) AS ci_session_lock 
 Execution Time:0.00012803077697754

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '5ff69b0272e157732d734b0e2c6c9c5c3a853cc5' 
 Execution Time:0.0002448558807373

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00036191940307617

-------------------------------------
UPDATE `user_answers_temp` SET `status` = 'not_answered'
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.0030758380889893

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '5ff69b0272e157732d734b0e2c6c9c5c3a853cc5' 
 Execution Time:0.0002901554107666

-------------------------------------
SELECT GET_LOCK('70e7f823a040ab994b97b32835919d60', 300) AS ci_session_lock 
 Execution Time:0.00011897087097168

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '5ff69b0272e157732d734b0e2c6c9c5c3a853cc5' 
 Execution Time:0.00016188621520996

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '10' 
 Execution Time:0.00031709671020508

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00019288063049316

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '10', '9c2053ed885c36f0b2cad63303b4f841') 
 Execution Time:0.00075602531433105

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '10' 
 Execution Time:0.00023603439331055

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '10' 
 Execution Time:0.00022697448730469

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00023698806762695

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '5ff69b0272e157732d734b0e2c6c9c5c3a853cc5' 
 Execution Time:0.00032997131347656

-------------------------------------
SELECT GET_LOCK('70e7f823a040ab994b97b32835919d60', 300) AS ci_session_lock 
 Execution Time:0.00015401840209961

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '5ff69b0272e157732d734b0e2c6c9c5c3a853cc5' 
 Execution Time:0.00018405914306641

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '9' 
 Execution Time:0.00027298927307129

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00020194053649902

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.00014805793762207

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '9' 
 Execution Time:0.00016903877258301

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00016689300537109

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '5ff69b0272e157732d734b0e2c6c9c5c3a853cc5' 
 Execution Time:0.00032901763916016

-------------------------------------
SELECT GET_LOCK('70e7f823a040ab994b97b32835919d60', 300) AS ci_session_lock 
 Execution Time:0.00013995170593262

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '5ff69b0272e157732d734b0e2c6c9c5c3a853cc5' 
 Execution Time:0.00020909309387207

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00032711029052734

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '5ff69b0272e157732d734b0e2c6c9c5c3a853cc5' 
 Execution Time:0.00032401084899902

-------------------------------------
SELECT GET_LOCK('70e7f823a040ab994b97b32835919d60', 300) AS ci_session_lock 
 Execution Time:0.00033903121948242

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '5ff69b0272e157732d734b0e2c6c9c5c3a853cc5' 
 Execution Time:0.00031089782714844

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '10' 
 Execution Time:0.00034189224243164

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.0002739429473877

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '10' 
 Execution Time:0.00021791458129883

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '10' 
 Execution Time:0.00018692016601562

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00025391578674316

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '5ff69b0272e157732d734b0e2c6c9c5c3a853cc5' 
 Execution Time:0.00060296058654785

-------------------------------------
SELECT GET_LOCK('70e7f823a040ab994b97b32835919d60', 300) AS ci_session_lock 
 Execution Time:0.00018095970153809

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '5ff69b0272e157732d734b0e2c6c9c5c3a853cc5' 
 Execution Time:0.00020599365234375

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '9' 
 Execution Time:0.00026106834411621

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00021219253540039

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.00017786026000977

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '9' 
 Execution Time:0.00016093254089355

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00027298927307129

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '5ff69b0272e157732d734b0e2c6c9c5c3a853cc5' 
 Execution Time:0.00029397010803223

-------------------------------------
SELECT GET_LOCK('70e7f823a040ab994b97b32835919d60', 300) AS ci_session_lock 
 Execution Time:0.00012898445129395

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '5ff69b0272e157732d734b0e2c6c9c5c3a853cc5' 
 Execution Time:0.00020217895507812

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00031018257141113

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '5ff69b0272e157732d734b0e2c6c9c5c3a853cc5' 
 Execution Time:0.0003349781036377

-------------------------------------
SELECT GET_LOCK('70e7f823a040ab994b97b32835919d60', 300) AS ci_session_lock 
 Execution Time:0.00013494491577148

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '5ff69b0272e157732d734b0e2c6c9c5c3a853cc5' 
 Execution Time:0.00019598007202148

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '10' 
 Execution Time:0.00026893615722656

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00020909309387207

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '10' 
 Execution Time:0.00023388862609863

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '10' 
 Execution Time:0.00020790100097656

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00030684471130371

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '5ff69b0272e157732d734b0e2c6c9c5c3a853cc5' 
 Execution Time:0.00047707557678223

-------------------------------------
SELECT GET_LOCK('70e7f823a040ab994b97b32835919d60', 300) AS ci_session_lock 
 Execution Time:0.00030088424682617

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '5ff69b0272e157732d734b0e2c6c9c5c3a853cc5' 
 Execution Time:0.00034093856811523

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1671571747, `data` = '__ci_last_regenerate|i:1671571747;user_info|O:8:\"stdClass\":13:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:13:\"user_language\";s:1:\"2\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-11-14 19:33:55\";}site_lang|s:5:\"dutch\";topic_id|s:1:\"2\";questions_count|a:6:{i:0;s:1:\"8\";i:1;s:1:\"9\";i:2;s:2:\"10\";i:3;s:2:\"11\";i:4;s:2:\"12\";i:5;s:2:\"13\";}test_hash|s:32:\"9c2053ed885c36f0b2cad63303b4f841\";'
WHERE `id` = '5ff69b0272e157732d734b0e2c6c9c5c3a853cc5' 
 Execution Time:0.016695976257324

-------------------------------------
SELECT RELEASE_LOCK('70e7f823a040ab994b97b32835919d60') AS ci_session_lock 
 Execution Time:0.00014495849609375

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '9e6d54c9c857128a0d9441043e7f7260dd4d4689' 
 Execution Time:0.00020098686218262

-------------------------------------
SELECT GET_LOCK('8ac05eba7c708c38cbafdea5622642e1', 300) AS ci_session_lock 
 Execution Time:8.8930130004883E-5

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '81c6de29a2b703f1532f8f8f0e06f04b17bff62f' 
 Execution Time:0.0001068115234375

-------------------------------------
SELECT *
FROM `languages`
WHERE `en_lang_name` = 'Dutch' 
 Execution Time:0.00048995018005371

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `status` = 'active'
AND `language_id` = '1' 
 Execution Time:0.027884006500244

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.0012948513031006

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '81c6de29a2b703f1532f8f8f0e06f04b17bff62f' 
 Execution Time:0.00032782554626465

-------------------------------------
SELECT GET_LOCK('8ac05eba7c708c38cbafdea5622642e1', 300) AS ci_session_lock 
 Execution Time:0.00014805793762207

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '81c6de29a2b703f1532f8f8f0e06f04b17bff62f' 
 Execution Time:0.00018310546875

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `id` = '2'
AND `status` = 'active' 
 Execution Time:0.00026297569274902

-------------------------------------
SELECT `id`
FROM `questions`
WHERE `topic_id` = '2'
AND `status` = 'active'
ORDER BY `id` ASC
 LIMIT 1 
 Execution Time:0.037420034408569

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00036096572875977

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '81c6de29a2b703f1532f8f8f0e06f04b17bff62f' 
 Execution Time:0.00032305717468262

-------------------------------------
SELECT GET_LOCK('8ac05eba7c708c38cbafdea5622642e1', 300) AS ci_session_lock 
 Execution Time:0.00017285346984863

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '81c6de29a2b703f1532f8f8f0e06f04b17bff62f' 
 Execution Time:0.00032186508178711

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.00031304359436035

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00017595291137695

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '8', '9c2053ed885c36f0b2cad63303b4f841') 
 Execution Time:0.00082993507385254

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
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00017881393432617

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00043106079101562

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '81c6de29a2b703f1532f8f8f0e06f04b17bff62f' 
 Execution Time:0.00034809112548828

-------------------------------------
SELECT GET_LOCK('8ac05eba7c708c38cbafdea5622642e1', 300) AS ci_session_lock 
 Execution Time:0.00012707710266113

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '81c6de29a2b703f1532f8f8f0e06f04b17bff62f' 
 Execution Time:0.00019598007202148

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.00029397010803223

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.0001990795135498

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00020217895507812

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00018596649169922

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00028300285339355

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '81c6de29a2b703f1532f8f8f0e06f04b17bff62f' 
 Execution Time:0.00029802322387695

-------------------------------------
SELECT GET_LOCK('8ac05eba7c708c38cbafdea5622642e1', 300) AS ci_session_lock 
 Execution Time:0.00022101402282715

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '81c6de29a2b703f1532f8f8f0e06f04b17bff62f' 
 Execution Time:0.0002439022064209

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.0006260871887207

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '8' 
 Execution Time:0.0003359317779541

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '81c6de29a2b703f1532f8f8f0e06f04b17bff62f' 
 Execution Time:0.021427869796753

-------------------------------------
SELECT GET_LOCK('8ac05eba7c708c38cbafdea5622642e1', 300) AS ci_session_lock 
 Execution Time:0.085483074188232

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '81c6de29a2b703f1532f8f8f0e06f04b17bff62f' 
 Execution Time:0.00035691261291504

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00094890594482422

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '8' 
 Execution Time:0.0012321472167969

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '81c6de29a2b703f1532f8f8f0e06f04b17bff62f' 
 Execution Time:0.00035905838012695

-------------------------------------
SELECT GET_LOCK('8ac05eba7c708c38cbafdea5622642e1', 300) AS ci_session_lock 
 Execution Time:0.0001828670501709

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '81c6de29a2b703f1532f8f8f0e06f04b17bff62f' 
 Execution Time:0.00028586387634277

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00029683113098145

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '8' 
 Execution Time:0.00019001960754395

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '81c6de29a2b703f1532f8f8f0e06f04b17bff62f' 
 Execution Time:0.00026106834411621

-------------------------------------
SELECT GET_LOCK('8ac05eba7c708c38cbafdea5622642e1', 300) AS ci_session_lock 
 Execution Time:0.0056629180908203

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '81c6de29a2b703f1532f8f8f0e06f04b17bff62f' 
 Execution Time:0.00023913383483887

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00047397613525391

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '8' 
 Execution Time:0.021541833877563

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '81c6de29a2b703f1532f8f8f0e06f04b17bff62f' 
 Execution Time:0.00028204917907715

-------------------------------------
SELECT GET_LOCK('8ac05eba7c708c38cbafdea5622642e1', 300) AS ci_session_lock 
 Execution Time:0.00013279914855957

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '81c6de29a2b703f1532f8f8f0e06f04b17bff62f' 
 Execution Time:0.00017619132995605

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00025200843811035

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '8' 
 Execution Time:0.00016689300537109

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '81c6de29a2b703f1532f8f8f0e06f04b17bff62f' 
 Execution Time:0.00030207633972168

-------------------------------------
SELECT GET_LOCK('8ac05eba7c708c38cbafdea5622642e1', 300) AS ci_session_lock 
 Execution Time:0.00013613700866699

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '81c6de29a2b703f1532f8f8f0e06f04b17bff62f' 
 Execution Time:0.0001671314239502

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.0002739429473877

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '8' 
 Execution Time:0.00017189979553223

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '81c6de29a2b703f1532f8f8f0e06f04b17bff62f' 
 Execution Time:0.00029706954956055

-------------------------------------
SELECT GET_LOCK('8ac05eba7c708c38cbafdea5622642e1', 300) AS ci_session_lock 
 Execution Time:0.00012493133544922

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '81c6de29a2b703f1532f8f8f0e06f04b17bff62f' 
 Execution Time:0.00016093254089355

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.0003058910369873

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '8' 
 Execution Time:0.00019311904907227

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '81c6de29a2b703f1532f8f8f0e06f04b17bff62f' 
 Execution Time:0.0003349781036377

-------------------------------------
SELECT GET_LOCK('8ac05eba7c708c38cbafdea5622642e1', 300) AS ci_session_lock 
 Execution Time:0.00015807151794434

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '81c6de29a2b703f1532f8f8f0e06f04b17bff62f' 
 Execution Time:0.00017094612121582

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00025296211242676

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '8' 
 Execution Time:0.00017309188842773

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '81c6de29a2b703f1532f8f8f0e06f04b17bff62f' 
 Execution Time:0.00029993057250977

-------------------------------------
SELECT GET_LOCK('8ac05eba7c708c38cbafdea5622642e1', 300) AS ci_session_lock 
 Execution Time:0.00014281272888184

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '81c6de29a2b703f1532f8f8f0e06f04b17bff62f' 
 Execution Time:0.0001678466796875

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00038695335388184

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '8' 
 Execution Time:0.00030303001403809

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '81c6de29a2b703f1532f8f8f0e06f04b17bff62f' 
 Execution Time:0.0002589225769043

-------------------------------------
SELECT GET_LOCK('8ac05eba7c708c38cbafdea5622642e1', 300) AS ci_session_lock 
 Execution Time:0.00013399124145508

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '81c6de29a2b703f1532f8f8f0e06f04b17bff62f' 
 Execution Time:0.00016307830810547

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00026607513427734

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '8' 
 Execution Time:0.00018715858459473

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '81c6de29a2b703f1532f8f8f0e06f04b17bff62f' 
 Execution Time:0.00028014183044434

-------------------------------------
SELECT GET_LOCK('8ac05eba7c708c38cbafdea5622642e1', 300) AS ci_session_lock 
 Execution Time:0.00012612342834473

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '81c6de29a2b703f1532f8f8f0e06f04b17bff62f' 
 Execution Time:0.00018095970153809

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00025010108947754

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '8' 
 Execution Time:0.00016307830810547

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '81c6de29a2b703f1532f8f8f0e06f04b17bff62f' 
 Execution Time:0.00032305717468262

-------------------------------------
SELECT GET_LOCK('8ac05eba7c708c38cbafdea5622642e1', 300) AS ci_session_lock 
 Execution Time:0.00012612342834473

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '81c6de29a2b703f1532f8f8f0e06f04b17bff62f' 
 Execution Time:0.00018715858459473

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00026512145996094

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '8' 
 Execution Time:0.00017094612121582

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '81c6de29a2b703f1532f8f8f0e06f04b17bff62f' 
 Execution Time:0.00032496452331543

-------------------------------------
SELECT GET_LOCK('8ac05eba7c708c38cbafdea5622642e1', 300) AS ci_session_lock 
 Execution Time:0.027636051177979

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '81c6de29a2b703f1532f8f8f0e06f04b17bff62f' 
 Execution Time:0.00034999847412109

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00041890144348145

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '8' 
 Execution Time:0.00022697448730469

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '81c6de29a2b703f1532f8f8f0e06f04b17bff62f' 
 Execution Time:0.00027918815612793

-------------------------------------
SELECT GET_LOCK('8ac05eba7c708c38cbafdea5622642e1', 300) AS ci_session_lock 
 Execution Time:0.00022506713867188

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '81c6de29a2b703f1532f8f8f0e06f04b17bff62f' 
 Execution Time:0.0002281665802002

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1671572435, `data` = '__ci_last_regenerate|i:1671572435;user_info|O:8:\"stdClass\":13:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:13:\"user_language\";s:1:\"2\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-11-14 19:33:55\";}site_lang|s:5:\"dutch\";topic_id|s:1:\"2\";questions_count|a:6:{i:0;s:1:\"8\";i:1;s:1:\"9\";i:2;s:2:\"10\";i:3;s:2:\"11\";i:4;s:2:\"12\";i:5;s:2:\"13\";}test_hash|s:32:\"9c2053ed885c36f0b2cad63303b4f841\";'
WHERE `id` = '81c6de29a2b703f1532f8f8f0e06f04b17bff62f' 
 Execution Time:0.021381855010986

-------------------------------------
SELECT RELEASE_LOCK('8ac05eba7c708c38cbafdea5622642e1') AS ci_session_lock 
 Execution Time:0.00030398368835449

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '832aa8536c83cb0b5c1cce10b979265204601330' 
 Execution Time:0.00048708915710449

-------------------------------------
SELECT GET_LOCK('15f637adaa217002e6e54736475aae7c', 300) AS ci_session_lock 
 Execution Time:0.00026798248291016

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '7cd20736fc28b5ac6d63dc10ad968f75d1ddb8bd' 
 Execution Time:0.00056886672973633

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.00035905838012695

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00030708312988281

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00024795532226562

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00018787384033203

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00029206275939941

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '7cd20736fc28b5ac6d63dc10ad968f75d1ddb8bd' 
 Execution Time:0.00030994415283203

-------------------------------------
SELECT GET_LOCK('15f637adaa217002e6e54736475aae7c', 300) AS ci_session_lock 
 Execution Time:0.00012993812561035

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '7cd20736fc28b5ac6d63dc10ad968f75d1ddb8bd' 
 Execution Time:0.00017499923706055

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00025510787963867

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00017499923706055

-------------------------------------
UPDATE `user_answers_temp` SET `answer` = 'Answer two', `status` = 'false'
WHERE `id` = '47' 
 Execution Time:0.014885902404785

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '7cd20736fc28b5ac6d63dc10ad968f75d1ddb8bd' 
 Execution Time:0.00031208992004395

-------------------------------------
SELECT GET_LOCK('15f637adaa217002e6e54736475aae7c', 300) AS ci_session_lock 
 Execution Time:0.031795978546143

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '7cd20736fc28b5ac6d63dc10ad968f75d1ddb8bd' 
 Execution Time:0.00044918060302734

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.0021181106567383

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.0012879371643066

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '7cd20736fc28b5ac6d63dc10ad968f75d1ddb8bd' 
 Execution Time:0.00027894973754883

-------------------------------------
SELECT GET_LOCK('15f637adaa217002e6e54736475aae7c', 300) AS ci_session_lock 
 Execution Time:0.00013518333435059

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '7cd20736fc28b5ac6d63dc10ad968f75d1ddb8bd' 
 Execution Time:0.00017595291137695

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00024700164794922

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '7cd20736fc28b5ac6d63dc10ad968f75d1ddb8bd' 
 Execution Time:0.00041818618774414

-------------------------------------
SELECT GET_LOCK('15f637adaa217002e6e54736475aae7c', 300) AS ci_session_lock 
 Execution Time:0.00020289421081543

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '7cd20736fc28b5ac6d63dc10ad968f75d1ddb8bd' 
 Execution Time:0.00023818016052246

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '9' 
 Execution Time:0.00033092498779297

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00019693374633789

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '9', '9c2053ed885c36f0b2cad63303b4f841') 
 Execution Time:0.041402101516724

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.00053119659423828

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.0011911392211914

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00052690505981445

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '7cd20736fc28b5ac6d63dc10ad968f75d1ddb8bd' 
 Execution Time:0.00031089782714844

-------------------------------------
SELECT GET_LOCK('15f637adaa217002e6e54736475aae7c', 300) AS ci_session_lock 
 Execution Time:0.0001368522644043

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '7cd20736fc28b5ac6d63dc10ad968f75d1ddb8bd' 
 Execution Time:0.0001678466796875

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.00024008750915527

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00018095970153809

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00016212463378906

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.0001680850982666

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00015616416931152

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '7cd20736fc28b5ac6d63dc10ad968f75d1ddb8bd' 
 Execution Time:0.0003058910369873

-------------------------------------
SELECT GET_LOCK('15f637adaa217002e6e54736475aae7c', 300) AS ci_session_lock 
 Execution Time:0.00014400482177734

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '7cd20736fc28b5ac6d63dc10ad968f75d1ddb8bd' 
 Execution Time:0.00018715858459473

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00032901763916016

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00017285346984863

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '7cd20736fc28b5ac6d63dc10ad968f75d1ddb8bd' 
 Execution Time:0.00025391578674316

-------------------------------------
SELECT GET_LOCK('15f637adaa217002e6e54736475aae7c', 300) AS ci_session_lock 
 Execution Time:0.050878047943115

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '7cd20736fc28b5ac6d63dc10ad968f75d1ddb8bd' 
 Execution Time:0.00042390823364258

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.0016310214996338

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00055813789367676

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '7cd20736fc28b5ac6d63dc10ad968f75d1ddb8bd' 
 Execution Time:0.0002748966217041

-------------------------------------
SELECT GET_LOCK('15f637adaa217002e6e54736475aae7c', 300) AS ci_session_lock 
 Execution Time:0.00012588500976562

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '7cd20736fc28b5ac6d63dc10ad968f75d1ddb8bd' 
 Execution Time:0.00016188621520996

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00025010108947754

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00017714500427246

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '7cd20736fc28b5ac6d63dc10ad968f75d1ddb8bd' 
 Execution Time:0.00030994415283203

-------------------------------------
SELECT GET_LOCK('15f637adaa217002e6e54736475aae7c', 300) AS ci_session_lock 
 Execution Time:0.00013899803161621

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '7cd20736fc28b5ac6d63dc10ad968f75d1ddb8bd' 
 Execution Time:0.00017285346984863

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00028491020202637

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00017905235290527

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '7cd20736fc28b5ac6d63dc10ad968f75d1ddb8bd' 
 Execution Time:0.00033307075500488

-------------------------------------
SELECT GET_LOCK('15f637adaa217002e6e54736475aae7c', 300) AS ci_session_lock 
 Execution Time:0.00017309188842773

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '7cd20736fc28b5ac6d63dc10ad968f75d1ddb8bd' 
 Execution Time:0.00060796737670898

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.00040316581726074

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00028300285339355

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00025105476379395

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00034213066101074

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00035691261291504

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '7cd20736fc28b5ac6d63dc10ad968f75d1ddb8bd' 
 Execution Time:0.00030398368835449

-------------------------------------
SELECT GET_LOCK('15f637adaa217002e6e54736475aae7c', 300) AS ci_session_lock 
 Execution Time:0.00016689300537109

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '7cd20736fc28b5ac6d63dc10ad968f75d1ddb8bd' 
 Execution Time:0.00025510787963867

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.0003969669342041

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00020599365234375

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00019288063049316

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00018095970153809

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.0002751350402832

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '7cd20736fc28b5ac6d63dc10ad968f75d1ddb8bd' 
 Execution Time:0.00029301643371582

-------------------------------------
SELECT GET_LOCK('15f637adaa217002e6e54736475aae7c', 300) AS ci_session_lock 
 Execution Time:0.00012707710266113

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '7cd20736fc28b5ac6d63dc10ad968f75d1ddb8bd' 
 Execution Time:0.00016498565673828

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00024008750915527

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '7cd20736fc28b5ac6d63dc10ad968f75d1ddb8bd' 
 Execution Time:0.00030708312988281

-------------------------------------
SELECT GET_LOCK('15f637adaa217002e6e54736475aae7c', 300) AS ci_session_lock 
 Execution Time:0.0002288818359375

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '7cd20736fc28b5ac6d63dc10ad968f75d1ddb8bd' 
 Execution Time:0.00025701522827148

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '9' 
 Execution Time:0.00039196014404297

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00026702880859375

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.00016093254089355

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00014591217041016

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00019192695617676

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '7cd20736fc28b5ac6d63dc10ad968f75d1ddb8bd' 
 Execution Time:0.00030398368835449

-------------------------------------
SELECT GET_LOCK('15f637adaa217002e6e54736475aae7c', 300) AS ci_session_lock 
 Execution Time:0.0001370906829834

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '7cd20736fc28b5ac6d63dc10ad968f75d1ddb8bd' 
 Execution Time:0.0001671314239502

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.00029397010803223

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.0001828670501709

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00017905235290527

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.0001978874206543

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00018596649169922

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '7cd20736fc28b5ac6d63dc10ad968f75d1ddb8bd' 
 Execution Time:0.00034713745117188

-------------------------------------
SELECT GET_LOCK('15f637adaa217002e6e54736475aae7c', 300) AS ci_session_lock 
 Execution Time:0.00012779235839844

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '7cd20736fc28b5ac6d63dc10ad968f75d1ddb8bd' 
 Execution Time:0.00017690658569336

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1671572752, `data` = '__ci_last_regenerate|i:1671572752;user_info|O:8:\"stdClass\":13:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:13:\"user_language\";s:1:\"2\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-11-14 19:33:55\";}site_lang|s:5:\"dutch\";topic_id|s:1:\"2\";questions_count|a:6:{i:0;s:1:\"8\";i:1;s:1:\"9\";i:2;s:2:\"10\";i:3;s:2:\"11\";i:4;s:2:\"12\";i:5;s:2:\"13\";}test_hash|s:32:\"9c2053ed885c36f0b2cad63303b4f841\";'
WHERE `id` = '7cd20736fc28b5ac6d63dc10ad968f75d1ddb8bd' 
 Execution Time:0.070846080780029

-------------------------------------
SELECT RELEASE_LOCK('15f637adaa217002e6e54736475aae7c') AS ci_session_lock 
 Execution Time:0.00012302398681641

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '5a7adc865f2dffabea618d894adb211c95c77375' 
 Execution Time:0.0001678466796875

-------------------------------------
SELECT GET_LOCK('c44ae027a55ed92c8d8a747eea31b453', 300) AS ci_session_lock 
 Execution Time:7.6055526733398E-5

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '581aae236c5e401a0c1cc6d576677aada3628736' 
 Execution Time:0.0001070499420166

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.00048589706420898

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00030684471130371

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00029587745666504

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.000244140625

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00025606155395508

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '581aae236c5e401a0c1cc6d576677aada3628736' 
 Execution Time:0.00028800964355469

-------------------------------------
SELECT GET_LOCK('c44ae027a55ed92c8d8a747eea31b453', 300) AS ci_session_lock 
 Execution Time:0.00015497207641602

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '581aae236c5e401a0c1cc6d576677aada3628736' 
 Execution Time:0.00018906593322754

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.0002589225769043

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00017809867858887

-------------------------------------
UPDATE `user_answers_temp` SET `answer` = 'Answer three', `status` = 'false'
WHERE `id` = '47' 
 Execution Time:0.00098800659179688

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '581aae236c5e401a0c1cc6d576677aada3628736' 
 Execution Time:0.00020003318786621

-------------------------------------
SELECT GET_LOCK('c44ae027a55ed92c8d8a747eea31b453', 300) AS ci_session_lock 
 Execution Time:0.034842967987061

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '581aae236c5e401a0c1cc6d576677aada3628736' 
 Execution Time:0.00033307075500488

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.0013859272003174

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00047898292541504

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '581aae236c5e401a0c1cc6d576677aada3628736' 
 Execution Time:0.00028514862060547

-------------------------------------
SELECT GET_LOCK('c44ae027a55ed92c8d8a747eea31b453', 300) AS ci_session_lock 
 Execution Time:0.00014090538024902

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '581aae236c5e401a0c1cc6d576677aada3628736' 
 Execution Time:0.00017499923706055

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00024890899658203

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '581aae236c5e401a0c1cc6d576677aada3628736' 
 Execution Time:0.00049400329589844

-------------------------------------
SELECT GET_LOCK('c44ae027a55ed92c8d8a747eea31b453', 300) AS ci_session_lock 
 Execution Time:0.0012030601501465

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '581aae236c5e401a0c1cc6d576677aada3628736' 
 Execution Time:0.0010941028594971

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '9' 
 Execution Time:0.0010471343994141

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00036001205444336

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.00022792816162109

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.0002291202545166

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00030303001403809

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '581aae236c5e401a0c1cc6d576677aada3628736' 
 Execution Time:0.00078988075256348

-------------------------------------
SELECT GET_LOCK('c44ae027a55ed92c8d8a747eea31b453', 300) AS ci_session_lock 
 Execution Time:0.00023078918457031

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '581aae236c5e401a0c1cc6d576677aada3628736' 
 Execution Time:0.00034904479980469

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.00034999847412109

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00037789344787598

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00038695335388184

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00029802322387695

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00026583671569824

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '581aae236c5e401a0c1cc6d576677aada3628736' 
 Execution Time:0.00029301643371582

-------------------------------------
SELECT GET_LOCK('c44ae027a55ed92c8d8a747eea31b453', 300) AS ci_session_lock 
 Execution Time:0.00011801719665527

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '581aae236c5e401a0c1cc6d576677aada3628736' 
 Execution Time:0.00018000602722168

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00024294853210449

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00017118453979492

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '581aae236c5e401a0c1cc6d576677aada3628736' 
 Execution Time:0.00036096572875977

-------------------------------------
SELECT GET_LOCK('c44ae027a55ed92c8d8a747eea31b453', 300) AS ci_session_lock 
 Execution Time:0.00014805793762207

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '581aae236c5e401a0c1cc6d576677aada3628736' 
 Execution Time:0.00019383430480957

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00026106834411621

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00017690658569336

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '581aae236c5e401a0c1cc6d576677aada3628736' 
 Execution Time:0.00016593933105469

-------------------------------------
SELECT GET_LOCK('c44ae027a55ed92c8d8a747eea31b453', 300) AS ci_session_lock 
 Execution Time:0.058680057525635

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '581aae236c5e401a0c1cc6d576677aada3628736' 
 Execution Time:0.0003819465637207

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00082588195800781

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00046586990356445

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '581aae236c5e401a0c1cc6d576677aada3628736' 
 Execution Time:0.00034189224243164

-------------------------------------
SELECT GET_LOCK('c44ae027a55ed92c8d8a747eea31b453', 300) AS ci_session_lock 
 Execution Time:0.00026082992553711

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '581aae236c5e401a0c1cc6d576677aada3628736' 
 Execution Time:0.00043201446533203

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.00032496452331543

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00017786026000977

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00018405914306641

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00016403198242188

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00017809867858887

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '581aae236c5e401a0c1cc6d576677aada3628736' 
 Execution Time:0.00031805038452148

-------------------------------------
SELECT GET_LOCK('c44ae027a55ed92c8d8a747eea31b453', 300) AS ci_session_lock 
 Execution Time:0.0001678466796875

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '581aae236c5e401a0c1cc6d576677aada3628736' 
 Execution Time:0.0002281665802002

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00037693977355957

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00025677680969238

-------------------------------------
UPDATE `user_answers_temp` SET `answer` = 'Answer one1', `status` = 'false'
WHERE `id` = '47' 
 Execution Time:0.0016560554504395

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '581aae236c5e401a0c1cc6d576677aada3628736' 
 Execution Time:0.020594835281372

-------------------------------------
SELECT GET_LOCK('c44ae027a55ed92c8d8a747eea31b453', 300) AS ci_session_lock 
 Execution Time:0.00031208992004395

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '581aae236c5e401a0c1cc6d576677aada3628736' 
 Execution Time:0.00038385391235352

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00044488906860352

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00027608871459961

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '581aae236c5e401a0c1cc6d576677aada3628736' 
 Execution Time:0.00031089782714844

-------------------------------------
SELECT GET_LOCK('c44ae027a55ed92c8d8a747eea31b453', 300) AS ci_session_lock 
 Execution Time:0.00017309188842773

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '581aae236c5e401a0c1cc6d576677aada3628736' 
 Execution Time:0.00020503997802734

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '581aae236c5e401a0c1cc6d576677aada3628736' 
 Execution Time:0.0016491413116455

-------------------------------------
SELECT GET_LOCK('c44ae027a55ed92c8d8a747eea31b453', 300) AS ci_session_lock 
 Execution Time:0.00037884712219238

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '581aae236c5e401a0c1cc6d576677aada3628736' 
 Execution Time:0.00041007995605469

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00029587745666504

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.032251119613647

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.0097589492797852

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00027799606323242

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00014710426330566

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00014090538024902

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00012898445129395

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00013589859008789

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '8' 
 Execution Time:0.00012898445129395

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00021696090698242

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00026893615722656

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00023698806762695

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00020503997802734

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00022602081298828

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00019407272338867

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00018715858459473

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00015902519226074

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '8' 
 Execution Time:0.00013303756713867

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '581aae236c5e401a0c1cc6d576677aada3628736' 
 Execution Time:0.00032901763916016

-------------------------------------
SELECT GET_LOCK('c44ae027a55ed92c8d8a747eea31b453', 300) AS ci_session_lock 
 Execution Time:0.00060701370239258

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '581aae236c5e401a0c1cc6d576677aada3628736' 
 Execution Time:0.00048685073852539

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00038409233093262

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'questions' 
 Execution Time:0.00031805038452148

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '6' 
 Execution Time:0.00050902366638184

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00042295455932617

-------------------------------------
SELECT *
FROM `ebooks` 
 Execution Time:0.00042009353637695

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` IS NULL 
 Execution Time:0.00014400482177734

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00044083595275879

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00043392181396484

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.0003821849822998

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00035595893859863

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00022506713867188

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00022506713867188

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00028610229492188

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00022506713867188

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '8' 
 Execution Time:0.00021004676818848

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0002741813659668

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00025796890258789

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00029206275939941

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.0005338191986084

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00026798248291016

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.0001990795135498

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00014805793762207

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00015902519226074

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '8' 
 Execution Time:0.00013899803161621

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '581aae236c5e401a0c1cc6d576677aada3628736' 
 Execution Time:0.00038599967956543

-------------------------------------
SELECT GET_LOCK('c44ae027a55ed92c8d8a747eea31b453', 300) AS ci_session_lock 
 Execution Time:0.00022602081298828

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '581aae236c5e401a0c1cc6d576677aada3628736' 
 Execution Time:0.00029683113098145

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00035500526428223

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'questions' 
 Execution Time:0.00032496452331543

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '6' 
 Execution Time:0.00040698051452637

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `id` = '2' 
 Execution Time:0.00034594535827637

-------------------------------------
SELECT *
FROM `languages`
WHERE `id` = '1' 
 Execution Time:0.00026202201843262

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00023818016052246

-------------------------------------
SELECT *
FROM `ebooks` 
 Execution Time:0.00024294853210449

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2' 
 Execution Time:0.00039005279541016

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00031208992004395

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.0002598762512207

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00019598007202148

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00014901161193848

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00015497207641602

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00014400482177734

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00014090538024902

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00014090538024902

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '8' 
 Execution Time:0.00014090538024902

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00017499923706055

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00020408630371094

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.0001521110534668

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00015997886657715

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00014090538024902

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00014114379882812

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00012803077697754

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00012803077697754

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '8' 
 Execution Time:0.00015115737915039

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '581aae236c5e401a0c1cc6d576677aada3628736' 
 Execution Time:0.00033211708068848

-------------------------------------
SELECT GET_LOCK('c44ae027a55ed92c8d8a747eea31b453', 300) AS ci_session_lock 
 Execution Time:0.00016212463378906

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '581aae236c5e401a0c1cc6d576677aada3628736' 
 Execution Time:0.00031185150146484

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.004688024520874

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'questions' 
 Execution Time:0.00097107887268066

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '6' 
 Execution Time:0.00061583518981934

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00033187866210938

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `id` = '2' 
 Execution Time:0.00028181076049805

-------------------------------------
SELECT *
FROM `languages`
WHERE `id` = '1' 
 Execution Time:0.00022101402282715

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00016403198242188

-------------------------------------
SELECT *
FROM `ebooks` 
 Execution Time:0.00025486946105957

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2' 
 Execution Time:0.00024008750915527

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0028879642486572

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00038003921508789

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00018811225891113

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00020313262939453

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00019407272338867

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.0002140998840332

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00019407272338867

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00025606155395508

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '8' 
 Execution Time:0.00019598007202148

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0008699893951416

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.0010850429534912

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00090622901916504

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00033402442932129

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00023198127746582

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.0001990795135498

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00029397010803223

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00020194053649902

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '8' 
 Execution Time:0.00016903877258301

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '581aae236c5e401a0c1cc6d576677aada3628736' 
 Execution Time:0.00029587745666504

-------------------------------------
SELECT GET_LOCK('c44ae027a55ed92c8d8a747eea31b453', 300) AS ci_session_lock 
 Execution Time:0.00022578239440918

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '581aae236c5e401a0c1cc6d576677aada3628736' 
 Execution Time:0.00023293495178223

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1671573302, `data` = '__ci_last_regenerate|i:1671573302;user_info|O:8:\"stdClass\":13:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:13:\"user_language\";s:1:\"2\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-11-14 19:33:55\";}site_lang|s:5:\"dutch\";topic_id|s:1:\"2\";questions_count|a:6:{i:0;s:1:\"8\";i:1;s:1:\"9\";i:2;s:2:\"10\";i:3;s:2:\"11\";i:4;s:2:\"12\";i:5;s:2:\"13\";}test_hash|s:32:\"9c2053ed885c36f0b2cad63303b4f841\";user_id|s:1:\"1\";email|s:20:\"fantom15dm@gmail.com\";'
WHERE `id` = '581aae236c5e401a0c1cc6d576677aada3628736' 
 Execution Time:0.0015711784362793

-------------------------------------
SELECT RELEASE_LOCK('c44ae027a55ed92c8d8a747eea31b453') AS ci_session_lock 
 Execution Time:0.0001380443572998

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'cbd3341fbebb8a3d77c6e8d38950f10eebc3f482' 
 Execution Time:0.00019598007202148

-------------------------------------
SELECT GET_LOCK('6df6b1cec7722c4762103a5c81a69af8', 300) AS ci_session_lock 
 Execution Time:9.3936920166016E-5

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'fcd1d874c114ecc3e26441f07fbdd90d506636cd' 
 Execution Time:0.00013399124145508

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00036382675170898

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'questions' 
 Execution Time:0.00019693374633789

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '6' 
 Execution Time:0.00049901008605957

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.00057888031005859

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `id` = '2' 
 Execution Time:0.00029921531677246

-------------------------------------
SELECT *
FROM `languages`
WHERE `id` = '1' 
 Execution Time:0.00032997131347656

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.0003659725189209

-------------------------------------
SELECT *
FROM `ebooks` 
 Execution Time:0.00044918060302734

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2' 
 Execution Time:0.00053501129150391

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0004880428314209

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00059890747070312

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00043702125549316

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00036191940307617

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00062108039855957

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00053596496582031

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00037503242492676

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00030088424682617

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '8' 
 Execution Time:0.00035500526428223

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0002899169921875

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00030303001403809

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.0002131462097168

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00018501281738281

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00018501281738281

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00014710426330566

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.0001368522644043

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00013589859008789

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '8' 
 Execution Time:0.00013399124145508

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'fcd1d874c114ecc3e26441f07fbdd90d506636cd' 
 Execution Time:0.00032305717468262

-------------------------------------
SELECT GET_LOCK('6df6b1cec7722c4762103a5c81a69af8', 300) AS ci_session_lock 
 Execution Time:0.00020694732666016

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'fcd1d874c114ecc3e26441f07fbdd90d506636cd' 
 Execution Time:0.00028109550476074

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.00034117698669434

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00021004676818848

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00021100044250488

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00019097328186035

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00038290023803711

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'fcd1d874c114ecc3e26441f07fbdd90d506636cd' 
 Execution Time:0.00033402442932129

-------------------------------------
SELECT GET_LOCK('6df6b1cec7722c4762103a5c81a69af8', 300) AS ci_session_lock 
 Execution Time:0.00017786026000977

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'fcd1d874c114ecc3e26441f07fbdd90d506636cd' 
 Execution Time:0.0002439022064209

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00036311149597168

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00031185150146484

-------------------------------------
UPDATE `user_answers_temp` SET `answer` = '1', `status` = 'false'
WHERE `id` = '47' 
 Execution Time:0.0010068416595459

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'fcd1d874c114ecc3e26441f07fbdd90d506636cd' 
 Execution Time:0.067410945892334

-------------------------------------
SELECT GET_LOCK('6df6b1cec7722c4762103a5c81a69af8', 300) AS ci_session_lock 
 Execution Time:0.00022506713867188

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'fcd1d874c114ecc3e26441f07fbdd90d506636cd' 
 Execution Time:0.00030183792114258

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.0003199577331543

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00022101402282715

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00029492378234863

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00027179718017578

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.014456987380981

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'fcd1d874c114ecc3e26441f07fbdd90d506636cd' 
 Execution Time:0.0013790130615234

-------------------------------------
SELECT GET_LOCK('6df6b1cec7722c4762103a5c81a69af8', 300) AS ci_session_lock 
 Execution Time:0.001755952835083

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'fcd1d874c114ecc3e26441f07fbdd90d506636cd' 
 Execution Time:0.0003199577331543

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00042200088500977

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00030207633972168

-------------------------------------
UPDATE `user_answers_temp` SET `answer` = '2', `status` = 'true'
WHERE `id` = '47' 
 Execution Time:0.15947008132935

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'fcd1d874c114ecc3e26441f07fbdd90d506636cd' 
 Execution Time:0.00030398368835449

-------------------------------------
SELECT GET_LOCK('6df6b1cec7722c4762103a5c81a69af8', 300) AS ci_session_lock 
 Execution Time:0.00018405914306641

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'fcd1d874c114ecc3e26441f07fbdd90d506636cd' 
 Execution Time:0.0002131462097168

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.0003199577331543

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.0001838207244873

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00016498565673828

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00023078918457031

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00023698806762695

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'fcd1d874c114ecc3e26441f07fbdd90d506636cd' 
 Execution Time:0.00033712387084961

-------------------------------------
SELECT GET_LOCK('6df6b1cec7722c4762103a5c81a69af8', 300) AS ci_session_lock 
 Execution Time:0.00020194053649902

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'fcd1d874c114ecc3e26441f07fbdd90d506636cd' 
 Execution Time:0.00025200843811035

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.0019330978393555

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00084710121154785

-------------------------------------
UPDATE `user_answers_temp` SET `answer` = '1', `status` = 'false'
WHERE `id` = '47' 
 Execution Time:0.0022079944610596

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'fcd1d874c114ecc3e26441f07fbdd90d506636cd' 
 Execution Time:0.0013859272003174

-------------------------------------
SELECT GET_LOCK('6df6b1cec7722c4762103a5c81a69af8', 300) AS ci_session_lock 
 Execution Time:0.0042159557342529

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'fcd1d874c114ecc3e26441f07fbdd90d506636cd' 
 Execution Time:0.00031089782714844

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.0012691020965576

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.005159854888916

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'fcd1d874c114ecc3e26441f07fbdd90d506636cd' 
 Execution Time:0.00028586387634277

-------------------------------------
SELECT GET_LOCK('6df6b1cec7722c4762103a5c81a69af8', 300) AS ci_session_lock 
 Execution Time:0.00012707710266113

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'fcd1d874c114ecc3e26441f07fbdd90d506636cd' 
 Execution Time:0.00016283988952637

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00026106834411621

-------------------------------------
UPDATE `user_answers_temp` SET `status` = 'not_answered'
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.040996074676514

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'fcd1d874c114ecc3e26441f07fbdd90d506636cd' 
 Execution Time:0.00029897689819336

-------------------------------------
SELECT GET_LOCK('6df6b1cec7722c4762103a5c81a69af8', 300) AS ci_session_lock 
 Execution Time:0.00017595291137695

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'fcd1d874c114ecc3e26441f07fbdd90d506636cd' 
 Execution Time:0.00023388862609863

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1671573606, `data` = '__ci_last_regenerate|i:1671573606;user_info|O:8:\"stdClass\":13:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:13:\"user_language\";s:1:\"2\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-11-14 19:33:55\";}site_lang|s:5:\"dutch\";topic_id|s:1:\"2\";questions_count|a:6:{i:0;s:1:\"8\";i:1;s:1:\"9\";i:2;s:2:\"10\";i:3;s:2:\"11\";i:4;s:2:\"12\";i:5;s:2:\"13\";}test_hash|s:32:\"9c2053ed885c36f0b2cad63303b4f841\";user_id|s:1:\"1\";email|s:20:\"fantom15dm@gmail.com\";'
WHERE `id` = 'fcd1d874c114ecc3e26441f07fbdd90d506636cd' 
 Execution Time:0.065164089202881

-------------------------------------
SELECT RELEASE_LOCK('6df6b1cec7722c4762103a5c81a69af8') AS ci_session_lock 
 Execution Time:0.00034499168395996

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '86f3a66d05514373605ced788e5c5dcb2d570d42' 
 Execution Time:0.00040411949157715

-------------------------------------
SELECT GET_LOCK('daa4dbd2a3a3c04f406258c4a97dd4fb', 300) AS ci_session_lock 
 Execution Time:0.00022387504577637

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'c513fc0efdf35faef080e9dad16e0a818d33fc70' 
 Execution Time:0.00030899047851562

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '9' 
 Execution Time:0.0006248950958252

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00046205520629883

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.00076413154602051

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.0010011196136475

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00033903121948242

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'c513fc0efdf35faef080e9dad16e0a818d33fc70' 
 Execution Time:0.00031495094299316

-------------------------------------
SELECT GET_LOCK('daa4dbd2a3a3c04f406258c4a97dd4fb', 300) AS ci_session_lock 
 Execution Time:0.00015497207641602

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'c513fc0efdf35faef080e9dad16e0a818d33fc70' 
 Execution Time:0.00019502639770508

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.00057005882263184

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '9'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.0003669261932373

-------------------------------------
UPDATE `user_answers_temp` SET `answer` = 'B', `status` = 'true'
WHERE `id` = '48' 
 Execution Time:0.0014848709106445

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'c513fc0efdf35faef080e9dad16e0a818d33fc70' 
 Execution Time:0.00035190582275391

-------------------------------------
SELECT GET_LOCK('daa4dbd2a3a3c04f406258c4a97dd4fb', 300) AS ci_session_lock 
 Execution Time:0.11703205108643

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'c513fc0efdf35faef080e9dad16e0a818d33fc70' 
 Execution Time:0.00033402442932129

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.00088000297546387

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '9'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00063705444335938

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'c513fc0efdf35faef080e9dad16e0a818d33fc70' 
 Execution Time:0.0002748966217041

-------------------------------------
SELECT GET_LOCK('daa4dbd2a3a3c04f406258c4a97dd4fb', 300) AS ci_session_lock 
 Execution Time:0.00011086463928223

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'c513fc0efdf35faef080e9dad16e0a818d33fc70' 
 Execution Time:0.00017189979553223

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.0010018348693848

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00045180320739746

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00053119659423828

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.0016601085662842

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00047397613525391

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'c513fc0efdf35faef080e9dad16e0a818d33fc70' 
 Execution Time:0.00032591819763184

-------------------------------------
SELECT GET_LOCK('daa4dbd2a3a3c04f406258c4a97dd4fb', 300) AS ci_session_lock 
 Execution Time:0.00016593933105469

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'c513fc0efdf35faef080e9dad16e0a818d33fc70' 
 Execution Time:0.00022006034851074

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00026798248291016

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00017786026000977

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'c513fc0efdf35faef080e9dad16e0a818d33fc70' 
 Execution Time:0.00032687187194824

-------------------------------------
SELECT GET_LOCK('daa4dbd2a3a3c04f406258c4a97dd4fb', 300) AS ci_session_lock 
 Execution Time:0.00014090538024902

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'c513fc0efdf35faef080e9dad16e0a818d33fc70' 
 Execution Time:0.00028204917907715

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00030803680419922

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00018906593322754

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'c513fc0efdf35faef080e9dad16e0a818d33fc70' 
 Execution Time:0.0002601146697998

-------------------------------------
SELECT GET_LOCK('daa4dbd2a3a3c04f406258c4a97dd4fb', 300) AS ci_session_lock 
 Execution Time:0.00012612342834473

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'c513fc0efdf35faef080e9dad16e0a818d33fc70' 
 Execution Time:0.00024986267089844

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00031208992004395

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00018000602722168

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'c513fc0efdf35faef080e9dad16e0a818d33fc70' 
 Execution Time:0.0002899169921875

-------------------------------------
SELECT GET_LOCK('daa4dbd2a3a3c04f406258c4a97dd4fb', 300) AS ci_session_lock 
 Execution Time:0.0001368522644043

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'c513fc0efdf35faef080e9dad16e0a818d33fc70' 
 Execution Time:0.00018000602722168

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00024509429931641

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'c513fc0efdf35faef080e9dad16e0a818d33fc70' 
 Execution Time:0.00031089782714844

-------------------------------------
SELECT GET_LOCK('daa4dbd2a3a3c04f406258c4a97dd4fb', 300) AS ci_session_lock 
 Execution Time:0.00014996528625488

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'c513fc0efdf35faef080e9dad16e0a818d33fc70' 
 Execution Time:0.00019598007202148

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '9' 
 Execution Time:0.0003509521484375

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00029587745666504

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.00027894973754883

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00023984909057617

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00023293495178223

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'c513fc0efdf35faef080e9dad16e0a818d33fc70' 
 Execution Time:0.0002739429473877

-------------------------------------
SELECT GET_LOCK('daa4dbd2a3a3c04f406258c4a97dd4fb', 300) AS ci_session_lock 
 Execution Time:0.00014901161193848

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'c513fc0efdf35faef080e9dad16e0a818d33fc70' 
 Execution Time:0.00019598007202148

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.00033998489379883

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '9'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00023198127746582

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'c513fc0efdf35faef080e9dad16e0a818d33fc70' 
 Execution Time:0.00025010108947754

-------------------------------------
SELECT GET_LOCK('daa4dbd2a3a3c04f406258c4a97dd4fb', 300) AS ci_session_lock 
 Execution Time:0.075979948043823

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'c513fc0efdf35faef080e9dad16e0a818d33fc70' 
 Execution Time:0.00031518936157227

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.0009760856628418

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '9'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.0021250247955322

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'c513fc0efdf35faef080e9dad16e0a818d33fc70' 
 Execution Time:0.00030708312988281

-------------------------------------
SELECT GET_LOCK('daa4dbd2a3a3c04f406258c4a97dd4fb', 300) AS ci_session_lock 
 Execution Time:0.00020003318786621

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'c513fc0efdf35faef080e9dad16e0a818d33fc70' 
 Execution Time:0.00021910667419434

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '9' 
 Execution Time:0.00035309791564941

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00024294853210449

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.00019598007202148

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00022602081298828

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00031399726867676

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'c513fc0efdf35faef080e9dad16e0a818d33fc70' 
 Execution Time:0.0002741813659668

-------------------------------------
SELECT GET_LOCK('daa4dbd2a3a3c04f406258c4a97dd4fb', 300) AS ci_session_lock 
 Execution Time:0.00013899803161621

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'c513fc0efdf35faef080e9dad16e0a818d33fc70' 
 Execution Time:0.00019097328186035

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00023698806762695

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'c513fc0efdf35faef080e9dad16e0a818d33fc70' 
 Execution Time:0.00030398368835449

-------------------------------------
SELECT GET_LOCK('daa4dbd2a3a3c04f406258c4a97dd4fb', 300) AS ci_session_lock 
 Execution Time:0.00014400482177734

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'c513fc0efdf35faef080e9dad16e0a818d33fc70' 
 Execution Time:0.00029802322387695

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '10' 
 Execution Time:0.00039100646972656

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00027298927307129

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '10', '9c2053ed885c36f0b2cad63303b4f841') 
 Execution Time:0.15104389190674

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '10' 
 Execution Time:0.0003209114074707

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00022101402282715

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00040102005004883

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'c513fc0efdf35faef080e9dad16e0a818d33fc70' 
 Execution Time:0.00028514862060547

-------------------------------------
SELECT GET_LOCK('daa4dbd2a3a3c04f406258c4a97dd4fb', 300) AS ci_session_lock 
 Execution Time:0.00013613700866699

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'c513fc0efdf35faef080e9dad16e0a818d33fc70' 
 Execution Time:0.0001680850982666

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'c513fc0efdf35faef080e9dad16e0a818d33fc70' 
 Execution Time:0.00076389312744141

-------------------------------------
SELECT GET_LOCK('daa4dbd2a3a3c04f406258c4a97dd4fb', 300) AS ci_session_lock 
 Execution Time:0.00019192695617676

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'c513fc0efdf35faef080e9dad16e0a818d33fc70' 
 Execution Time:0.00021815299987793

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '10' 
 Execution Time:0.0003058910369873

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '10'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00019288063049316

-------------------------------------
UPDATE `user_answers_temp` SET `answer` = '4', `status` = 'true'
WHERE `id` = '49' 
 Execution Time:0.16366100311279

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'c513fc0efdf35faef080e9dad16e0a818d33fc70' 
 Execution Time:0.0002899169921875

-------------------------------------
SELECT GET_LOCK('daa4dbd2a3a3c04f406258c4a97dd4fb', 300) AS ci_session_lock 
 Execution Time:0.00019192695617676

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'c513fc0efdf35faef080e9dad16e0a818d33fc70' 
 Execution Time:0.00023984909057617

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00027203559875488

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'c513fc0efdf35faef080e9dad16e0a818d33fc70' 
 Execution Time:0.00030899047851562

-------------------------------------
SELECT GET_LOCK('daa4dbd2a3a3c04f406258c4a97dd4fb', 300) AS ci_session_lock 
 Execution Time:0.00018692016601562

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'c513fc0efdf35faef080e9dad16e0a818d33fc70' 
 Execution Time:0.00020909309387207

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00030803680419922

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00019693374633789

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '11', '9c2053ed885c36f0b2cad63303b4f841') 
 Execution Time:0.00081992149353027

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00018095970153809

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00015115737915039

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00019097328186035

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'c513fc0efdf35faef080e9dad16e0a818d33fc70' 
 Execution Time:0.00036191940307617

-------------------------------------
SELECT GET_LOCK('daa4dbd2a3a3c04f406258c4a97dd4fb', 300) AS ci_session_lock 
 Execution Time:0.00017595291137695

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'c513fc0efdf35faef080e9dad16e0a818d33fc70' 
 Execution Time:0.00021982192993164

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '10' 
 Execution Time:0.00027704238891602

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00018906593322754

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '10' 
 Execution Time:0.00018906593322754

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00016593933105469

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00019097328186035

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'c513fc0efdf35faef080e9dad16e0a818d33fc70' 
 Execution Time:0.00037312507629395

-------------------------------------
SELECT GET_LOCK('daa4dbd2a3a3c04f406258c4a97dd4fb', 300) AS ci_session_lock 
 Execution Time:0.00015497207641602

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'c513fc0efdf35faef080e9dad16e0a818d33fc70' 
 Execution Time:0.00020098686218262

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '9' 
 Execution Time:0.00029897689819336

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00018906593322754

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.00018501281738281

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00017309188842773

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00017905235290527

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'c513fc0efdf35faef080e9dad16e0a818d33fc70' 
 Execution Time:0.00033402442932129

-------------------------------------
SELECT GET_LOCK('daa4dbd2a3a3c04f406258c4a97dd4fb', 300) AS ci_session_lock 
 Execution Time:0.00014090538024902

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'c513fc0efdf35faef080e9dad16e0a818d33fc70' 
 Execution Time:0.00023102760314941

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1671573908, `data` = '__ci_last_regenerate|i:1671573908;user_info|O:8:\"stdClass\":13:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:13:\"user_language\";s:1:\"2\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-11-14 19:33:55\";}site_lang|s:5:\"dutch\";topic_id|s:1:\"2\";questions_count|a:6:{i:0;s:1:\"8\";i:1;s:1:\"9\";i:2;s:2:\"10\";i:3;s:2:\"11\";i:4;s:2:\"12\";i:5;s:2:\"13\";}test_hash|s:32:\"9c2053ed885c36f0b2cad63303b4f841\";user_id|s:1:\"1\";email|s:20:\"fantom15dm@gmail.com\";'
WHERE `id` = 'c513fc0efdf35faef080e9dad16e0a818d33fc70' 
 Execution Time:0.0011589527130127

-------------------------------------
SELECT RELEASE_LOCK('daa4dbd2a3a3c04f406258c4a97dd4fb') AS ci_session_lock 
 Execution Time:0.00012016296386719

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '005cf63b061a98f9ad92c791113d5c1afbce650d' 
 Execution Time:0.00019192695617676

-------------------------------------
SELECT GET_LOCK('1cf59d93f247d7c38489832c0cbfca8d', 300) AS ci_session_lock 
 Execution Time:9.5844268798828E-5

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '86c104384d6ff466db475903f3a206ae29a6d51c' 
 Execution Time:0.00013613700866699

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.00033712387084961

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00023484230041504

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00022101402282715

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00029301643371582

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.0002901554107666

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '86c104384d6ff466db475903f3a206ae29a6d51c' 
 Execution Time:0.00029611587524414

-------------------------------------
SELECT GET_LOCK('1cf59d93f247d7c38489832c0cbfca8d', 300) AS ci_session_lock 
 Execution Time:0.00012397766113281

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '86c104384d6ff466db475903f3a206ae29a6d51c' 
 Execution Time:0.00016307830810547

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00025606155395508

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00017619132995605

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '86c104384d6ff466db475903f3a206ae29a6d51c' 
 Execution Time:0.00030088424682617

-------------------------------------
SELECT GET_LOCK('1cf59d93f247d7c38489832c0cbfca8d', 300) AS ci_session_lock 
 Execution Time:0.00012707710266113

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '86c104384d6ff466db475903f3a206ae29a6d51c' 
 Execution Time:0.00019502639770508

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00027108192443848

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00024890899658203

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '86c104384d6ff466db475903f3a206ae29a6d51c' 
 Execution Time:0.00030612945556641

-------------------------------------
SELECT GET_LOCK('1cf59d93f247d7c38489832c0cbfca8d', 300) AS ci_session_lock 
 Execution Time:0.00016498565673828

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '86c104384d6ff466db475903f3a206ae29a6d51c' 
 Execution Time:0.00016999244689941

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '9' 
 Execution Time:0.00027585029602051

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00019001960754395

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.00014090538024902

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00014114379882812

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00020003318786621

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '86c104384d6ff466db475903f3a206ae29a6d51c' 
 Execution Time:0.00032901763916016

-------------------------------------
SELECT GET_LOCK('1cf59d93f247d7c38489832c0cbfca8d', 300) AS ci_session_lock 
 Execution Time:0.00014400482177734

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '86c104384d6ff466db475903f3a206ae29a6d51c' 
 Execution Time:0.00017499923706055

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00030279159545898

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '86c104384d6ff466db475903f3a206ae29a6d51c' 
 Execution Time:0.00040102005004883

-------------------------------------
SELECT GET_LOCK('1cf59d93f247d7c38489832c0cbfca8d', 300) AS ci_session_lock 
 Execution Time:0.00017690658569336

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '86c104384d6ff466db475903f3a206ae29a6d51c' 
 Execution Time:0.00020480155944824

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '10' 
 Execution Time:0.00040698051452637

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00024104118347168

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '10' 
 Execution Time:0.00016403198242188

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00016999244689941

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00020599365234375

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '86c104384d6ff466db475903f3a206ae29a6d51c' 
 Execution Time:0.00029420852661133

-------------------------------------
SELECT GET_LOCK('1cf59d93f247d7c38489832c0cbfca8d', 300) AS ci_session_lock 
 Execution Time:0.00012683868408203

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '86c104384d6ff466db475903f3a206ae29a6d51c' 
 Execution Time:0.00016307830810547

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00025010108947754

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '86c104384d6ff466db475903f3a206ae29a6d51c' 
 Execution Time:0.0003349781036377

-------------------------------------
SELECT GET_LOCK('1cf59d93f247d7c38489832c0cbfca8d', 300) AS ci_session_lock 
 Execution Time:0.00016212463378906

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '86c104384d6ff466db475903f3a206ae29a6d51c' 
 Execution Time:0.00035190582275391

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.0003969669342041

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00034093856811523

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00019097328186035

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00018978118896484

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00019598007202148

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '86c104384d6ff466db475903f3a206ae29a6d51c' 
 Execution Time:0.0005950927734375

-------------------------------------
SELECT GET_LOCK('1cf59d93f247d7c38489832c0cbfca8d', 300) AS ci_session_lock 
 Execution Time:0.00019693374633789

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '86c104384d6ff466db475903f3a206ae29a6d51c' 
 Execution Time:0.00025081634521484

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00037503242492676

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00026106834411621

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00030398368835449

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00030207633972168

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00031685829162598

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '86c104384d6ff466db475903f3a206ae29a6d51c' 
 Execution Time:0.00035309791564941

-------------------------------------
SELECT GET_LOCK('1cf59d93f247d7c38489832c0cbfca8d', 300) AS ci_session_lock 
 Execution Time:0.00039291381835938

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '86c104384d6ff466db475903f3a206ae29a6d51c' 
 Execution Time:0.00023293495178223

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00037312507629395

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00027298927307129

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00022792816162109

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00027704238891602

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00026106834411621

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '86c104384d6ff466db475903f3a206ae29a6d51c' 
 Execution Time:0.00030398368835449

-------------------------------------
SELECT GET_LOCK('1cf59d93f247d7c38489832c0cbfca8d', 300) AS ci_session_lock 
 Execution Time:0.00017595291137695

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '86c104384d6ff466db475903f3a206ae29a6d51c' 
 Execution Time:0.00020194053649902

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1671574266, `data` = '__ci_last_regenerate|i:1671574266;user_info|O:8:\"stdClass\":13:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:13:\"user_language\";s:1:\"2\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-11-14 19:33:55\";}site_lang|s:5:\"dutch\";topic_id|s:1:\"2\";questions_count|a:6:{i:0;s:1:\"8\";i:1;s:1:\"9\";i:2;s:2:\"10\";i:3;s:2:\"11\";i:4;s:2:\"12\";i:5;s:2:\"13\";}test_hash|s:32:\"9c2053ed885c36f0b2cad63303b4f841\";user_id|s:1:\"1\";email|s:20:\"fantom15dm@gmail.com\";'
WHERE `id` = '86c104384d6ff466db475903f3a206ae29a6d51c' 
 Execution Time:0.035454034805298

-------------------------------------
SELECT RELEASE_LOCK('1cf59d93f247d7c38489832c0cbfca8d') AS ci_session_lock 
 Execution Time:0.00014615058898926

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'a7d98a7b0908cbff9ef3b6b216c0130044a2ff9f' 
 Execution Time:0.0004880428314209

-------------------------------------
SELECT GET_LOCK('038f1597be30f1c633b3d3bfdb2fc150', 300) AS ci_session_lock 
 Execution Time:0.00013589859008789

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.00044894218444824

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00037813186645508

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00022006034851074

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00017881393432617

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00020503997802734

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00033402442932129

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.00033903121948242

-------------------------------------
SELECT GET_LOCK('038f1597be30f1c633b3d3bfdb2fc150', 300) AS ci_session_lock 
 Execution Time:0.00017690658569336

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.00023007392883301

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00049400329589844

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00042009353637695

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00026607513427734

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00022387504577637

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00025510787963867

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.00030803680419922

-------------------------------------
SELECT GET_LOCK('038f1597be30f1c633b3d3bfdb2fc150', 300) AS ci_session_lock 
 Execution Time:0.00015401840209961

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.00018095970153809

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '10' 
 Execution Time:0.00026512145996094

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00019001960754395

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '10' 
 Execution Time:0.00018692016601562

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00016689300537109

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00017309188842773

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.0003209114074707

-------------------------------------
SELECT GET_LOCK('038f1597be30f1c633b3d3bfdb2fc150', 300) AS ci_session_lock 
 Execution Time:0.00014209747314453

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.00022792816162109

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '9' 
 Execution Time:0.0004119873046875

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00036001205444336

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.00025105476379395

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00027894973754883

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00030994415283203

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.00028896331787109

-------------------------------------
SELECT GET_LOCK('038f1597be30f1c633b3d3bfdb2fc150', 300) AS ci_session_lock 
 Execution Time:0.00014209747314453

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.00017905235290527

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.00029110908508301

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00018596649169922

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00034379959106445

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00075006484985352

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00027918815612793

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.00035810470581055

-------------------------------------
SELECT GET_LOCK('038f1597be30f1c633b3d3bfdb2fc150', 300) AS ci_session_lock 
 Execution Time:0.000244140625

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.00036001205444336

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00037002563476562

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.00031709671020508

-------------------------------------
SELECT GET_LOCK('038f1597be30f1c633b3d3bfdb2fc150', 300) AS ci_session_lock 
 Execution Time:0.00019383430480957

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.00027990341186523

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '9' 
 Execution Time:0.00030183792114258

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00019216537475586

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.00018906593322754

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00016593933105469

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00026702880859375

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.00035715103149414

-------------------------------------
SELECT GET_LOCK('038f1597be30f1c633b3d3bfdb2fc150', 300) AS ci_session_lock 
 Execution Time:0.0001978874206543

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.00028300285339355

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00060486793518066

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.00034594535827637

-------------------------------------
SELECT GET_LOCK('038f1597be30f1c633b3d3bfdb2fc150', 300) AS ci_session_lock 
 Execution Time:0.0001530647277832

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.00018310546875

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '10' 
 Execution Time:0.00031900405883789

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00018501281738281

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '10' 
 Execution Time:0.00019717216491699

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00017714500427246

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00030684471130371

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.00033998489379883

-------------------------------------
SELECT GET_LOCK('038f1597be30f1c633b3d3bfdb2fc150', 300) AS ci_session_lock 
 Execution Time:0.00024294853210449

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.00028896331787109

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00038719177246094

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.00046205520629883

-------------------------------------
SELECT GET_LOCK('038f1597be30f1c633b3d3bfdb2fc150', 300) AS ci_session_lock 
 Execution Time:0.00041985511779785

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.00031399726867676

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00041890144348145

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.0005340576171875

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00039911270141602

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00032901763916016

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00042891502380371

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.00031900405883789

-------------------------------------
SELECT GET_LOCK('038f1597be30f1c633b3d3bfdb2fc150', 300) AS ci_session_lock 
 Execution Time:0.0001518726348877

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.00018692016601562

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
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00026488304138184

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00020384788513184

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00021505355834961

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00039005279541016

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.00027799606323242

-------------------------------------
SELECT GET_LOCK('038f1597be30f1c633b3d3bfdb2fc150', 300) AS ci_session_lock 
 Execution Time:0.00014114379882812

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.00018310546875

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.0003349781036377

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '11'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00020003318786621

-------------------------------------
UPDATE `user_answers_temp` SET `answer` = 'no', `status` = 'true'
WHERE `id` = '50' 
 Execution Time:0.0022399425506592

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.00027108192443848

-------------------------------------
SELECT GET_LOCK('038f1597be30f1c633b3d3bfdb2fc150', 300) AS ci_session_lock 
 Execution Time:0.00012707710266113

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.00016212463378906

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00025701522827148

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.00034904479980469

-------------------------------------
SELECT GET_LOCK('038f1597be30f1c633b3d3bfdb2fc150', 300) AS ci_session_lock 
 Execution Time:0.00016307830810547

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.00018692016601562

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '12' 
 Execution Time:0.00029206275939941

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00017595291137695

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '12', '9c2053ed885c36f0b2cad63303b4f841') 
 Execution Time:0.0014421939849854

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '12' 
 Execution Time:0.00020599365234375

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00021600723266602

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00041890144348145

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.00035214424133301

-------------------------------------
SELECT GET_LOCK('038f1597be30f1c633b3d3bfdb2fc150', 300) AS ci_session_lock 
 Execution Time:0.00017309188842773

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.00019598007202148

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00026106834411621

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00019001960754395

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.0002291202545166

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00022006034851074

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00018787384033203

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.00036311149597168

-------------------------------------
SELECT GET_LOCK('038f1597be30f1c633b3d3bfdb2fc150', 300) AS ci_session_lock 
 Execution Time:0.00021004676818848

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.00026178359985352

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00069689750671387

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00024795532226562

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00017595291137695

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00017905235290527

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00020813941955566

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.0003359317779541

-------------------------------------
SELECT GET_LOCK('038f1597be30f1c633b3d3bfdb2fc150', 300) AS ci_session_lock 
 Execution Time:0.00018787384033203

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.00025606155395508

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00032186508178711

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '11'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00025701522827148

-------------------------------------
UPDATE `user_answers_temp` SET `answer` = 'yes', `status` = 'false'
WHERE `id` = '50' 
 Execution Time:0.00099420547485352

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.00037002563476562

-------------------------------------
SELECT GET_LOCK('038f1597be30f1c633b3d3bfdb2fc150', 300) AS ci_session_lock 
 Execution Time:0.00048208236694336

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.00084710121154785

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00092697143554688

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '11'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00095987319946289

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.00029897689819336

-------------------------------------
SELECT GET_LOCK('038f1597be30f1c633b3d3bfdb2fc150', 300) AS ci_session_lock 
 Execution Time:0.000244140625

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.00041508674621582

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00031089782714844

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00022697448730469

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00016999244689941

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00015401840209961

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.0002129077911377

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.00027918815612793

-------------------------------------
SELECT GET_LOCK('038f1597be30f1c633b3d3bfdb2fc150', 300) AS ci_session_lock 
 Execution Time:0.00017499923706055

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.00022292137145996

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '10' 
 Execution Time:0.00030684471130371

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00021815299987793

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '10' 
 Execution Time:0.0001680850982666

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00018906593322754

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.024049997329712

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.00035715103149414

-------------------------------------
SELECT GET_LOCK('038f1597be30f1c633b3d3bfdb2fc150', 300) AS ci_session_lock 
 Execution Time:0.00014185905456543

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.00018095970153809

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '9' 
 Execution Time:0.0002899169921875

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00018906593322754

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.00015902519226074

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00016903877258301

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00022792816162109

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.00029087066650391

-------------------------------------
SELECT GET_LOCK('038f1597be30f1c633b3d3bfdb2fc150', 300) AS ci_session_lock 
 Execution Time:0.00014019012451172

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.00017094612121582

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.00026798248291016

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00018310546875

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00015807151794434

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '9c2053ed885c36f0b2cad63303b4f841' 
 Execution Time:0.00014209747314453

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00069999694824219

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.00032806396484375

-------------------------------------
SELECT GET_LOCK('038f1597be30f1c633b3d3bfdb2fc150', 300) AS ci_session_lock 
 Execution Time:0.0021979808807373

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.0011570453643799

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '3'
AND `id` = '14' 
 Execution Time:0.00057697296142578

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '3', '14', '2238efb8c0b2c8e9658f215ed37d54fa') 
 Execution Time:0.0011930465698242

-------------------------------------
SELECT `id`
FROM `questions`
WHERE `topic_id` = '3'
AND `status` = 'active' 
 Execution Time:0.039394855499268

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '14' 
 Execution Time:0.0003659725189209

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '3'
AND `question_id` = '14'
AND `question_hash` = '2238efb8c0b2c8e9658f215ed37d54fa' 
 Execution Time:0.001115083694458

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00054597854614258

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.00029897689819336

-------------------------------------
SELECT GET_LOCK('038f1597be30f1c633b3d3bfdb2fc150', 300) AS ci_session_lock 
 Execution Time:0.00014114379882812

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.00019383430480957

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.00030803680419922

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '8', 'c44c2130722f842913ac23132e8d7b03') 
 Execution Time:0.00098395347595215

-------------------------------------
SELECT `id`
FROM `questions`
WHERE `topic_id` = '2'
AND `status` = 'active' 
 Execution Time:0.00024700164794922

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00017285346984863

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.00018191337585449

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00030183792114258

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.00030684471130371

-------------------------------------
SELECT GET_LOCK('038f1597be30f1c633b3d3bfdb2fc150', 300) AS ci_session_lock 
 Execution Time:0.00018000602722168

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.00026392936706543

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.0010349750518799

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.00059986114501953

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00030112266540527

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.00031709671020508

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00044703483581543

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.0002892017364502

-------------------------------------
SELECT GET_LOCK('038f1597be30f1c633b3d3bfdb2fc150', 300) AS ci_session_lock 
 Execution Time:0.00014591217041016

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.00020503997802734

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00031208992004395

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '8'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.00019288063049316

-------------------------------------
UPDATE `user_answers_temp` SET `answer` = '2', `status` = 'true'
WHERE `id` = '53' 
 Execution Time:0.0012569427490234

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.00028800964355469

-------------------------------------
SELECT GET_LOCK('038f1597be30f1c633b3d3bfdb2fc150', 300) AS ci_session_lock 
 Execution Time:0.00012803077697754

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.0002140998840332

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.0003669261932373

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.00027799606323242

-------------------------------------
SELECT GET_LOCK('038f1597be30f1c633b3d3bfdb2fc150', 300) AS ci_session_lock 
 Execution Time:0.00013899803161621

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.00016999244689941

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '9' 
 Execution Time:0.00039482116699219

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.00030303001403809

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '9', 'c44c2130722f842913ac23132e8d7b03') 
 Execution Time:0.0040700435638428

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.00031805038452148

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.00060701370239258

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.0012209415435791

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.00030112266540527

-------------------------------------
SELECT GET_LOCK('038f1597be30f1c633b3d3bfdb2fc150', 300) AS ci_session_lock 
 Execution Time:0.00012898445129395

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.00018596649169922

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1671574576, `data` = '__ci_last_regenerate|i:1671574576;user_info|O:8:\"stdClass\":13:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:13:\"user_language\";s:1:\"2\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-11-14 19:33:55\";}site_lang|s:5:\"dutch\";topic_id|s:1:\"2\";questions_count|a:6:{i:0;s:1:\"8\";i:1;s:1:\"9\";i:2;s:2:\"10\";i:3;s:2:\"11\";i:4;s:2:\"12\";i:5;s:2:\"13\";}test_hash|s:32:\"c44c2130722f842913ac23132e8d7b03\";user_id|s:1:\"1\";email|s:20:\"fantom15dm@gmail.com\";'
WHERE `id` = '2fa296ff5163847d9bd02d0b06261f01e7d32a95' 
 Execution Time:0.012562036514282

-------------------------------------
SELECT RELEASE_LOCK('038f1597be30f1c633b3d3bfdb2fc150') AS ci_session_lock 
 Execution Time:0.00016188621520996

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'c977b724351297455af5591aafde11fe6c53f774' 
 Execution Time:0.00020313262939453

-------------------------------------
SELECT GET_LOCK('55df4d413a3af8545a915bd98c6c6d5a', 300) AS ci_session_lock 
 Execution Time:9.7990036010742E-5

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'cc409ec00af6f2cd0d7eac29f1fe48c3fdbb40a6' 
 Execution Time:0.00013494491577148

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '9' 
 Execution Time:0.00034904479980469

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.00023794174194336

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.00020909309387207

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.00031089782714844

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00029301643371582

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'cc409ec00af6f2cd0d7eac29f1fe48c3fdbb40a6' 
 Execution Time:0.00039196014404297

-------------------------------------
SELECT GET_LOCK('55df4d413a3af8545a915bd98c6c6d5a', 300) AS ci_session_lock 
 Execution Time:0.00030803680419922

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'cc409ec00af6f2cd0d7eac29f1fe48c3fdbb40a6' 
 Execution Time:0.00034379959106445

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.00058412551879883

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '9'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.0003819465637207

-------------------------------------
UPDATE `user_answers_temp` SET `answer` = 'C', `status` = 'false'
WHERE `id` = '54' 
 Execution Time:0.057074069976807

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'cc409ec00af6f2cd0d7eac29f1fe48c3fdbb40a6' 
 Execution Time:0.00039005279541016

-------------------------------------
SELECT GET_LOCK('55df4d413a3af8545a915bd98c6c6d5a', 300) AS ci_session_lock 
 Execution Time:0.24995899200439

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'cc409ec00af6f2cd0d7eac29f1fe48c3fdbb40a6' 
 Execution Time:0.00046014785766602

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.0014159679412842

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '9'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.00049495697021484

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'cc409ec00af6f2cd0d7eac29f1fe48c3fdbb40a6' 
 Execution Time:0.00028491020202637

-------------------------------------
SELECT GET_LOCK('55df4d413a3af8545a915bd98c6c6d5a', 300) AS ci_session_lock 
 Execution Time:0.00014114379882812

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'cc409ec00af6f2cd0d7eac29f1fe48c3fdbb40a6' 
 Execution Time:0.00017809867858887

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.00030612945556641

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'cc409ec00af6f2cd0d7eac29f1fe48c3fdbb40a6' 
 Execution Time:0.00032210350036621

-------------------------------------
SELECT GET_LOCK('55df4d413a3af8545a915bd98c6c6d5a', 300) AS ci_session_lock 
 Execution Time:0.00018692016601562

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'cc409ec00af6f2cd0d7eac29f1fe48c3fdbb40a6' 
 Execution Time:0.0002140998840332

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '10' 
 Execution Time:0.00033307075500488

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.00022292137145996

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '10', 'c44c2130722f842913ac23132e8d7b03') 
 Execution Time:0.0025870800018311

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '10' 
 Execution Time:0.00037908554077148

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.0007479190826416

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00029301643371582

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'cc409ec00af6f2cd0d7eac29f1fe48c3fdbb40a6' 
 Execution Time:0.00033998489379883

-------------------------------------
SELECT GET_LOCK('55df4d413a3af8545a915bd98c6c6d5a', 300) AS ci_session_lock 
 Execution Time:0.00023102760314941

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'cc409ec00af6f2cd0d7eac29f1fe48c3fdbb40a6' 
 Execution Time:0.00026893615722656

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '10' 
 Execution Time:0.00056314468383789

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '10'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.0003809928894043

-------------------------------------
UPDATE `user_answers_temp` SET `answer` = '3', `status` = 'false'
WHERE `id` = '55' 
 Execution Time:0.026889085769653

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'cc409ec00af6f2cd0d7eac29f1fe48c3fdbb40a6' 
 Execution Time:0.00034618377685547

-------------------------------------
SELECT GET_LOCK('55df4d413a3af8545a915bd98c6c6d5a', 300) AS ci_session_lock 
 Execution Time:0.00023007392883301

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'cc409ec00af6f2cd0d7eac29f1fe48c3fdbb40a6' 
 Execution Time:0.00026607513427734

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.00036287307739258

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'cc409ec00af6f2cd0d7eac29f1fe48c3fdbb40a6' 
 Execution Time:0.00032997131347656

-------------------------------------
SELECT GET_LOCK('55df4d413a3af8545a915bd98c6c6d5a', 300) AS ci_session_lock 
 Execution Time:0.00024199485778809

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'cc409ec00af6f2cd0d7eac29f1fe48c3fdbb40a6' 
 Execution Time:0.0004429817199707

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
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.00021195411682129

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '11', 'c44c2130722f842913ac23132e8d7b03') 
 Execution Time:0.015081167221069

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00030207633972168

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.00026202201843262

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00040316581726074

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'cc409ec00af6f2cd0d7eac29f1fe48c3fdbb40a6' 
 Execution Time:0.00033116340637207

-------------------------------------
SELECT GET_LOCK('55df4d413a3af8545a915bd98c6c6d5a', 300) AS ci_session_lock 
 Execution Time:0.00018000602722168

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'cc409ec00af6f2cd0d7eac29f1fe48c3fdbb40a6' 
 Execution Time:0.00021791458129883

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '10' 
 Execution Time:0.00035500526428223

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.00027990341186523

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '10' 
 Execution Time:0.00032496452331543

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.00045204162597656

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00029087066650391

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'cc409ec00af6f2cd0d7eac29f1fe48c3fdbb40a6' 
 Execution Time:0.00029182434082031

-------------------------------------
SELECT GET_LOCK('55df4d413a3af8545a915bd98c6c6d5a', 300) AS ci_session_lock 
 Execution Time:0.0001370906829834

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'cc409ec00af6f2cd0d7eac29f1fe48c3fdbb40a6' 
 Execution Time:0.0001828670501709

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '9' 
 Execution Time:0.00029206275939941

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.0001981258392334

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.00018596649169922

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.00016999244689941

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00019001960754395

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'cc409ec00af6f2cd0d7eac29f1fe48c3fdbb40a6' 
 Execution Time:0.00038504600524902

-------------------------------------
SELECT GET_LOCK('55df4d413a3af8545a915bd98c6c6d5a', 300) AS ci_session_lock 
 Execution Time:0.00017595291137695

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'cc409ec00af6f2cd0d7eac29f1fe48c3fdbb40a6' 
 Execution Time:0.00018191337585449

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.00026297569274902

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.00020098686218262

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.0001678466796875

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.0002140998840332

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.0001988410949707

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'cc409ec00af6f2cd0d7eac29f1fe48c3fdbb40a6' 
 Execution Time:0.00029802322387695

-------------------------------------
SELECT GET_LOCK('55df4d413a3af8545a915bd98c6c6d5a', 300) AS ci_session_lock 
 Execution Time:0.00018787384033203

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'cc409ec00af6f2cd0d7eac29f1fe48c3fdbb40a6' 
 Execution Time:0.00023984909057617

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.00031900405883789

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.00017881393432617

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00019097328186035

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.00017118453979492

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00032901763916016

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'cc409ec00af6f2cd0d7eac29f1fe48c3fdbb40a6' 
 Execution Time:0.00031781196594238

-------------------------------------
SELECT GET_LOCK('55df4d413a3af8545a915bd98c6c6d5a', 300) AS ci_session_lock 
 Execution Time:0.0001380443572998

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'cc409ec00af6f2cd0d7eac29f1fe48c3fdbb40a6' 
 Execution Time:0.00017404556274414

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.00034999847412109

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.00040102005004883

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.0005338191986084

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.00043296813964844

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.0011179447174072

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'cc409ec00af6f2cd0d7eac29f1fe48c3fdbb40a6' 
 Execution Time:0.00033307075500488

-------------------------------------
SELECT GET_LOCK('55df4d413a3af8545a915bd98c6c6d5a', 300) AS ci_session_lock 
 Execution Time:0.00020313262939453

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'cc409ec00af6f2cd0d7eac29f1fe48c3fdbb40a6' 
 Execution Time:0.00028800964355469

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.00039410591125488

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.00029897689819336

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00022196769714355

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.0002129077911377

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00019192695617676

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'cc409ec00af6f2cd0d7eac29f1fe48c3fdbb40a6' 
 Execution Time:0.00029301643371582

-------------------------------------
SELECT GET_LOCK('55df4d413a3af8545a915bd98c6c6d5a', 300) AS ci_session_lock 
 Execution Time:0.00017690658569336

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'cc409ec00af6f2cd0d7eac29f1fe48c3fdbb40a6' 
 Execution Time:0.00022697448730469

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00034308433532715

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '8'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.00022792816162109

-------------------------------------
UPDATE `user_answers_temp` SET `answer` = '3', `status` = 'false'
WHERE `id` = '53' 
 Execution Time:0.0011029243469238

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'cc409ec00af6f2cd0d7eac29f1fe48c3fdbb40a6' 
 Execution Time:0.00022101402282715

-------------------------------------
SELECT GET_LOCK('55df4d413a3af8545a915bd98c6c6d5a', 300) AS ci_session_lock 
 Execution Time:0.0022737979888916

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'cc409ec00af6f2cd0d7eac29f1fe48c3fdbb40a6' 
 Execution Time:0.00024294853210449

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00037193298339844

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '8'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.00026202201843262

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'cc409ec00af6f2cd0d7eac29f1fe48c3fdbb40a6' 
 Execution Time:0.0002741813659668

-------------------------------------
SELECT GET_LOCK('55df4d413a3af8545a915bd98c6c6d5a', 300) AS ci_session_lock 
 Execution Time:0.00032401084899902

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'cc409ec00af6f2cd0d7eac29f1fe48c3fdbb40a6' 
 Execution Time:0.00023913383483887

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.0002591609954834

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'cc409ec00af6f2cd0d7eac29f1fe48c3fdbb40a6' 
 Execution Time:0.00035905838012695

-------------------------------------
SELECT GET_LOCK('55df4d413a3af8545a915bd98c6c6d5a', 300) AS ci_session_lock 
 Execution Time:0.00015997886657715

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'cc409ec00af6f2cd0d7eac29f1fe48c3fdbb40a6' 
 Execution Time:0.0002138614654541

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '9' 
 Execution Time:0.00034809112548828

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.00023984909057617

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.00018596649169922

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.00018596649169922

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00026702880859375

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'cc409ec00af6f2cd0d7eac29f1fe48c3fdbb40a6' 
 Execution Time:0.00031900405883789

-------------------------------------
SELECT GET_LOCK('55df4d413a3af8545a915bd98c6c6d5a', 300) AS ci_session_lock 
 Execution Time:0.00016498565673828

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'cc409ec00af6f2cd0d7eac29f1fe48c3fdbb40a6' 
 Execution Time:0.00022315979003906

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.00029110908508301

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'cc409ec00af6f2cd0d7eac29f1fe48c3fdbb40a6' 
 Execution Time:0.0002751350402832

-------------------------------------
SELECT GET_LOCK('55df4d413a3af8545a915bd98c6c6d5a', 300) AS ci_session_lock 
 Execution Time:0.00012493133544922

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'cc409ec00af6f2cd0d7eac29f1fe48c3fdbb40a6' 
 Execution Time:0.00017714500427246

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '10' 
 Execution Time:0.00055289268493652

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.00034213066101074

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '10' 
 Execution Time:0.00022602081298828

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.0002138614654541

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00023818016052246

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'cc409ec00af6f2cd0d7eac29f1fe48c3fdbb40a6' 
 Execution Time:0.00029110908508301

-------------------------------------
SELECT GET_LOCK('55df4d413a3af8545a915bd98c6c6d5a', 300) AS ci_session_lock 
 Execution Time:0.00017690658569336

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'cc409ec00af6f2cd0d7eac29f1fe48c3fdbb40a6' 
 Execution Time:0.00018095970153809

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.00029587745666504

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'cc409ec00af6f2cd0d7eac29f1fe48c3fdbb40a6' 
 Execution Time:0.00029110908508301

-------------------------------------
SELECT GET_LOCK('55df4d413a3af8545a915bd98c6c6d5a', 300) AS ci_session_lock 
 Execution Time:0.00012493133544922

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'cc409ec00af6f2cd0d7eac29f1fe48c3fdbb40a6' 
 Execution Time:0.00015997886657715

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00028395652770996

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.00019288063049316

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00016093254089355

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.00014781951904297

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00026297569274902

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'cc409ec00af6f2cd0d7eac29f1fe48c3fdbb40a6' 
 Execution Time:0.00026583671569824

-------------------------------------
SELECT GET_LOCK('55df4d413a3af8545a915bd98c6c6d5a', 300) AS ci_session_lock 
 Execution Time:0.00012516975402832

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'cc409ec00af6f2cd0d7eac29f1fe48c3fdbb40a6' 
 Execution Time:0.00018692016601562

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00026798248291016

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '11'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.00019598007202148

-------------------------------------
UPDATE `user_answers_temp` SET `answer` = 'yes', `status` = 'false'
WHERE `id` = '56' 
 Execution Time:0.00087809562683105

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'cc409ec00af6f2cd0d7eac29f1fe48c3fdbb40a6' 
 Execution Time:0.00031709671020508

-------------------------------------
SELECT GET_LOCK('55df4d413a3af8545a915bd98c6c6d5a', 300) AS ci_session_lock 
 Execution Time:0.00015377998352051

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'cc409ec00af6f2cd0d7eac29f1fe48c3fdbb40a6' 
 Execution Time:0.0001981258392334

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.00031590461730957

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'cc409ec00af6f2cd0d7eac29f1fe48c3fdbb40a6' 
 Execution Time:0.00031590461730957

-------------------------------------
SELECT GET_LOCK('55df4d413a3af8545a915bd98c6c6d5a', 300) AS ci_session_lock 
 Execution Time:0.00016403198242188

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'cc409ec00af6f2cd0d7eac29f1fe48c3fdbb40a6' 
 Execution Time:0.00018620491027832

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '12' 
 Execution Time:0.00026988983154297

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.00019407272338867

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '12', 'c44c2130722f842913ac23132e8d7b03') 
 Execution Time:0.0010950565338135

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '12' 
 Execution Time:0.00018811225891113

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.0001530647277832

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00042510032653809

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'cc409ec00af6f2cd0d7eac29f1fe48c3fdbb40a6' 
 Execution Time:0.00036907196044922

-------------------------------------
SELECT GET_LOCK('55df4d413a3af8545a915bd98c6c6d5a', 300) AS ci_session_lock 
 Execution Time:0.00089716911315918

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'cc409ec00af6f2cd0d7eac29f1fe48c3fdbb40a6' 
 Execution Time:0.00023388862609863

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1671575764, `data` = '__ci_last_regenerate|i:1671575764;user_info|O:8:\"stdClass\":13:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:13:\"user_language\";s:1:\"2\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-11-14 19:33:55\";}site_lang|s:5:\"dutch\";topic_id|s:1:\"2\";questions_count|a:6:{i:0;s:1:\"8\";i:1;s:1:\"9\";i:2;s:2:\"10\";i:3;s:2:\"11\";i:4;s:2:\"12\";i:5;s:2:\"13\";}test_hash|s:32:\"c44c2130722f842913ac23132e8d7b03\";user_id|s:1:\"1\";email|s:20:\"fantom15dm@gmail.com\";'
WHERE `id` = 'cc409ec00af6f2cd0d7eac29f1fe48c3fdbb40a6' 
 Execution Time:0.042129039764404

-------------------------------------
SELECT RELEASE_LOCK('55df4d413a3af8545a915bd98c6c6d5a') AS ci_session_lock 
 Execution Time:0.002000093460083

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '7a630f6e1966d74e7efb45c2157ca8fff0e9e9ac' 
 Execution Time:0.00091099739074707

-------------------------------------
SELECT GET_LOCK('3fc7866a792b72877dd925aeb8a72eca', 300) AS ci_session_lock 
 Execution Time:0.00025296211242676

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'ebf375bd23deca3a54fdda8bf20f87b6533f26bc' 
 Execution Time:0.00033116340637207

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.012780904769897

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'questions' 
 Execution Time:0.022356033325195

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '6' 
 Execution Time:0.014804840087891

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '12' 
 Execution Time:0.00036406517028809

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `id` = '2' 
 Execution Time:0.017737150192261

-------------------------------------
SELECT *
FROM `languages`
WHERE `id` = '1' 
 Execution Time:0.00028204917907715

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00047397613525391

-------------------------------------
SELECT *
FROM `ebooks` 
 Execution Time:0.00032997131347656

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2' 
 Execution Time:0.00036382675170898

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00037908554077148

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00038409233093262

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00040197372436523

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.0011870861053467

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00041508674621582

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00069189071655273

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.0003058910369873

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00019097328186035

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '8' 
 Execution Time:0.00016212463378906

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00024509429931641

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00048398971557617

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00038504600524902

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.0003211498260498

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00028395652770996

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00030398368835449

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00014400482177734

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.0001368522644043

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '8' 
 Execution Time:0.00014305114746094

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'ebf375bd23deca3a54fdda8bf20f87b6533f26bc' 
 Execution Time:0.00028514862060547

-------------------------------------
SELECT GET_LOCK('3fc7866a792b72877dd925aeb8a72eca', 300) AS ci_session_lock 
 Execution Time:0.0001380443572998

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'ebf375bd23deca3a54fdda8bf20f87b6533f26bc' 
 Execution Time:0.00022387504577637

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00043296813964844

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'questions' 
 Execution Time:0.00030708312988281

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '6' 
 Execution Time:0.00031900405883789

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '13' 
 Execution Time:0.00022292137145996

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `id` = '2' 
 Execution Time:0.00017094612121582

-------------------------------------
SELECT *
FROM `languages`
WHERE `id` = '1' 
 Execution Time:0.00028109550476074

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00022292137145996

-------------------------------------
SELECT *
FROM `ebooks` 
 Execution Time:0.00018811225891113

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2' 
 Execution Time:0.00025510787963867

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0002598762512207

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00018596649169922

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00015521049499512

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00014710426330566

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00014996528625488

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.0001368522644043

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00014281272888184

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00017809867858887

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '8' 
 Execution Time:0.00014996528625488

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0001671314239502

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00020503997802734

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.0001528263092041

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00013303756713867

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00012898445129395

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00017499923706055

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00035309791564941

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00021910667419434

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '8' 
 Execution Time:0.0001518726348877

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'ebf375bd23deca3a54fdda8bf20f87b6533f26bc' 
 Execution Time:0.00032711029052734

-------------------------------------
SELECT GET_LOCK('3fc7866a792b72877dd925aeb8a72eca', 300) AS ci_session_lock 
 Execution Time:0.00032615661621094

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'ebf375bd23deca3a54fdda8bf20f87b6533f26bc' 
 Execution Time:0.00034117698669434

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00027298927307129

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'questions' 
 Execution Time:0.00020098686218262

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '6' 
 Execution Time:0.00028204917907715

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '12' 
 Execution Time:0.00024008750915527

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `id` = '2' 
 Execution Time:0.00015497207641602

-------------------------------------
SELECT *
FROM `languages`
WHERE `id` = '1' 
 Execution Time:0.00016903877258301

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00017499923706055

-------------------------------------
SELECT *
FROM `ebooks` 
 Execution Time:0.00022196769714355

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2' 
 Execution Time:0.00034689903259277

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00026607513427734

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00023293495178223

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00018596649169922

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00015997886657715

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00015687942504883

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00013399124145508

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.0001368522644043

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00013208389282227

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '8' 
 Execution Time:0.0001380443572998

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00043010711669922

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00021481513977051

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00012707710266113

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00010299682617188

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00010418891906738

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:9.7990036010742E-5

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:9.7990036010742E-5

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:9.7036361694336E-5

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '8' 
 Execution Time:9.7990036010742E-5

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'ebf375bd23deca3a54fdda8bf20f87b6533f26bc' 
 Execution Time:0.0003199577331543

-------------------------------------
SELECT GET_LOCK('3fc7866a792b72877dd925aeb8a72eca', 300) AS ci_session_lock 
 Execution Time:0.00021004676818848

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'ebf375bd23deca3a54fdda8bf20f87b6533f26bc' 
 Execution Time:0.00029802322387695

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00035810470581055

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.00031208992004395

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00024008750915527

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.0002140998840332

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00044608116149902

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'ebf375bd23deca3a54fdda8bf20f87b6533f26bc' 
 Execution Time:0.00033712387084961

-------------------------------------
SELECT GET_LOCK('3fc7866a792b72877dd925aeb8a72eca', 300) AS ci_session_lock 
 Execution Time:0.00019693374633789

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'ebf375bd23deca3a54fdda8bf20f87b6533f26bc' 
 Execution Time:0.00029611587524414

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '10' 
 Execution Time:0.00080513954162598

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.00065302848815918

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '10' 
 Execution Time:0.00031685829162598

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.00028085708618164

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00019216537475586

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'ebf375bd23deca3a54fdda8bf20f87b6533f26bc' 
 Execution Time:0.0003209114074707

-------------------------------------
SELECT GET_LOCK('3fc7866a792b72877dd925aeb8a72eca', 300) AS ci_session_lock 
 Execution Time:0.00024104118347168

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'ebf375bd23deca3a54fdda8bf20f87b6533f26bc' 
 Execution Time:0.00025105476379395

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '9' 
 Execution Time:0.00028514862060547

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.00024580955505371

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.00018596649169922

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.00017881393432617

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00020384788513184

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'ebf375bd23deca3a54fdda8bf20f87b6533f26bc' 
 Execution Time:0.00034499168395996

-------------------------------------
SELECT GET_LOCK('3fc7866a792b72877dd925aeb8a72eca', 300) AS ci_session_lock 
 Execution Time:0.00016379356384277

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'ebf375bd23deca3a54fdda8bf20f87b6533f26bc' 
 Execution Time:0.00025391578674316

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.00036096572875977

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.0002129077911377

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00014686584472656

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.0001530647277832

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.0001981258392334

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'ebf375bd23deca3a54fdda8bf20f87b6533f26bc' 
 Execution Time:0.00031304359436035

-------------------------------------
SELECT GET_LOCK('3fc7866a792b72877dd925aeb8a72eca', 300) AS ci_session_lock 
 Execution Time:0.00013613700866699

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'ebf375bd23deca3a54fdda8bf20f87b6533f26bc' 
 Execution Time:0.00016903877258301

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '9' 
 Execution Time:0.0002901554107666

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.0001978874206543

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.00017690658569336

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.00018692016601562

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.0003359317779541

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'ebf375bd23deca3a54fdda8bf20f87b6533f26bc' 
 Execution Time:0.00029301643371582

-------------------------------------
SELECT GET_LOCK('3fc7866a792b72877dd925aeb8a72eca', 300) AS ci_session_lock 
 Execution Time:0.00013494491577148

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'ebf375bd23deca3a54fdda8bf20f87b6533f26bc' 
 Execution Time:0.0001680850982666

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '10' 
 Execution Time:0.0002589225769043

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.00022196769714355

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '10' 
 Execution Time:0.00021004676818848

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.00018596649169922

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.0001978874206543

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'ebf375bd23deca3a54fdda8bf20f87b6533f26bc' 
 Execution Time:0.00030803680419922

-------------------------------------
SELECT GET_LOCK('3fc7866a792b72877dd925aeb8a72eca', 300) AS ci_session_lock 
 Execution Time:0.00013303756713867

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'ebf375bd23deca3a54fdda8bf20f87b6533f26bc' 
 Execution Time:0.00016593933105469

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
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.00023198127746582

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00018191337585449

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.00022506713867188

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00026488304138184

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'ebf375bd23deca3a54fdda8bf20f87b6533f26bc' 
 Execution Time:0.0003049373626709

-------------------------------------
SELECT GET_LOCK('3fc7866a792b72877dd925aeb8a72eca', 300) AS ci_session_lock 
 Execution Time:0.00015497207641602

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'ebf375bd23deca3a54fdda8bf20f87b6533f26bc' 
 Execution Time:0.0001988410949707

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '12' 
 Execution Time:0.00029301643371582

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.00019717216491699

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '12' 
 Execution Time:0.00017690658569336

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.00017690658569336

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00021505355834961

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'ebf375bd23deca3a54fdda8bf20f87b6533f26bc' 
 Execution Time:0.00035595893859863

-------------------------------------
SELECT GET_LOCK('3fc7866a792b72877dd925aeb8a72eca', 300) AS ci_session_lock 
 Execution Time:0.0002131462097168

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'ebf375bd23deca3a54fdda8bf20f87b6533f26bc' 
 Execution Time:0.00025081634521484

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '12' 
 Execution Time:0.00036406517028809

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.00031495094299316

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '12' 
 Execution Time:0.00029993057250977

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.00030994415283203

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00035715103149414

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'ebf375bd23deca3a54fdda8bf20f87b6533f26bc' 
 Execution Time:0.00051403045654297

-------------------------------------
SELECT GET_LOCK('3fc7866a792b72877dd925aeb8a72eca', 300) AS ci_session_lock 
 Execution Time:0.00017404556274414

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'ebf375bd23deca3a54fdda8bf20f87b6533f26bc' 
 Execution Time:0.00024509429931641

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1671576119, `data` = '__ci_last_regenerate|i:1671576119;user_info|O:8:\"stdClass\":13:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:13:\"user_language\";s:1:\"2\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-11-14 19:33:55\";}site_lang|s:5:\"dutch\";topic_id|s:1:\"2\";questions_count|a:6:{i:0;s:1:\"8\";i:1;s:1:\"9\";i:2;s:2:\"10\";i:3;s:2:\"11\";i:4;s:2:\"12\";i:5;s:2:\"13\";}test_hash|s:32:\"c44c2130722f842913ac23132e8d7b03\";user_id|s:1:\"1\";email|s:20:\"fantom15dm@gmail.com\";'
WHERE `id` = 'ebf375bd23deca3a54fdda8bf20f87b6533f26bc' 
 Execution Time:0.18549299240112

-------------------------------------
SELECT RELEASE_LOCK('3fc7866a792b72877dd925aeb8a72eca') AS ci_session_lock 
 Execution Time:0.00015902519226074

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'c8e502a8433332ec185e2eca7f05e21d7c39b101' 
 Execution Time:0.00024986267089844

-------------------------------------
SELECT GET_LOCK('08d1cc8174d021cb5d34d73b886f5b91', 300) AS ci_session_lock 
 Execution Time:0.00011682510375977

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'baf105d027c5c08c9d769d4bc2d5755daf39d58d' 
 Execution Time:0.00017309188842773

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '12' 
 Execution Time:0.00039291381835938

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.00045180320739746

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '12' 
 Execution Time:0.00031614303588867

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.00029206275939941

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00035715103149414

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'baf105d027c5c08c9d769d4bc2d5755daf39d58d' 
 Execution Time:0.00029516220092773

-------------------------------------
SELECT GET_LOCK('08d1cc8174d021cb5d34d73b886f5b91', 300) AS ci_session_lock 
 Execution Time:0.00013589859008789

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'baf105d027c5c08c9d769d4bc2d5755daf39d58d' 
 Execution Time:0.00018906593322754

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '12' 
 Execution Time:0.00021910667419434

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.00018405914306641

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '12' 
 Execution Time:0.00016379356384277

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = 'c44c2130722f842913ac23132e8d7b03' 
 Execution Time:0.00017285346984863

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00026512145996094

