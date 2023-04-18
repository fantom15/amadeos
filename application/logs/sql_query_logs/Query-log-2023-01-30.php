-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'a084160caaa646f19bafb47a373e27716877d7df' 
 Execution Time:0.068791151046753

-------------------------------------
SELECT GET_LOCK('67bcd46f2a660fb78a80268d2c822f87', 300) AS ci_session_lock 
 Execution Time:0.023380994796753

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '64130b43861eacb8a0090b086493183685d17019' 
 Execution Time:0.00084614753723145

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '64130b43861eacb8a0090b086493183685d17019' 
 Execution Time:0.00083613395690918

-------------------------------------
SELECT GET_LOCK('67bcd46f2a660fb78a80268d2c822f87', 300) AS ci_session_lock 
 Execution Time:0.00017213821411133

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '64130b43861eacb8a0090b086493183685d17019' 
 Execution Time:0.00019693374633789

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00041794776916504

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '64130b43861eacb8a0090b086493183685d17019' 
 Execution Time:0.00033903121948242

-------------------------------------
SELECT GET_LOCK('67bcd46f2a660fb78a80268d2c822f87', 300) AS ci_session_lock 
 Execution Time:0.00019288063049316

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '64130b43861eacb8a0090b086493183685d17019' 
 Execution Time:0.000244140625

-------------------------------------
SELECT *
FROM `languages`
WHERE `en_lang_name` = 'English' 
 Execution Time:0.0005190372467041

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `status` = 'active'
AND `language_id` = '2' 
 Execution Time:0.042197942733765

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00031900405883789

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '64130b43861eacb8a0090b086493183685d17019' 
 Execution Time:0.0003209114074707

-------------------------------------
SELECT GET_LOCK('67bcd46f2a660fb78a80268d2c822f87', 300) AS ci_session_lock 
 Execution Time:0.00018501281738281

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '64130b43861eacb8a0090b086493183685d17019' 
 Execution Time:0.0002448558807373

-------------------------------------
SELECT *
FROM `languages`
WHERE `en_lang_name` = 'Dutch' 
 Execution Time:0.00048589706420898

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `status` = 'active'
AND `language_id` = '1' 
 Execution Time:0.00047183036804199

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00046300888061523

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '64130b43861eacb8a0090b086493183685d17019' 
 Execution Time:0.00029587745666504

-------------------------------------
SELECT GET_LOCK('67bcd46f2a660fb78a80268d2c822f87', 300) AS ci_session_lock 
 Execution Time:0.0002131462097168

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '64130b43861eacb8a0090b086493183685d17019' 
 Execution Time:0.00031399726867676

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `id` = '2'
AND `status` = 'active' 
 Execution Time:0.00041007995605469

-------------------------------------
SELECT `id`
FROM `questions`
WHERE `topic_id` = '2'
AND `status` = 'active'
ORDER BY `id` ASC
 LIMIT 1 
 Execution Time:0.19255709648132

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00063896179199219

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '64130b43861eacb8a0090b086493183685d17019' 
 Execution Time:0.00031399726867676

-------------------------------------
SELECT GET_LOCK('67bcd46f2a660fb78a80268d2c822f87', 300) AS ci_session_lock 
 Execution Time:0.0001518726348877

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '64130b43861eacb8a0090b086493183685d17019' 
 Execution Time:0.00025606155395508

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.00034999847412109

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '8', '464d222ff24a8c5b9b2effd0ffbdcc1a') 
 Execution Time:0.028589010238647

-------------------------------------
SELECT `id`
FROM `questions`
WHERE `topic_id` = '2'
AND `status` = 'active' 
 Execution Time:0.0005488395690918

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00043201446533203

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00059604644775391

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00030517578125

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '64130b43861eacb8a0090b086493183685d17019' 
 Execution Time:0.0024430751800537

-------------------------------------
SELECT GET_LOCK('67bcd46f2a660fb78a80268d2c822f87', 300) AS ci_session_lock 
 Execution Time:0.0035789012908936

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '64130b43861eacb8a0090b086493183685d17019' 
 Execution Time:0.00034022331237793

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.0025119781494141

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '8'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.0015521049499512

-------------------------------------
UPDATE `user_answers_temp` SET `answer` = '1', `status` = 'false'
WHERE `id` = '72' 
 Execution Time:0.14576888084412

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '64130b43861eacb8a0090b086493183685d17019' 
 Execution Time:0.00028300285339355

-------------------------------------
SELECT GET_LOCK('67bcd46f2a660fb78a80268d2c822f87', 300) AS ci_session_lock 
 Execution Time:0.0001380443572998

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '64130b43861eacb8a0090b086493183685d17019' 
 Execution Time:0.00020909309387207

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00031781196594238

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '8'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.0001978874206543

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '64130b43861eacb8a0090b086493183685d17019' 
 Execution Time:0.00032520294189453

-------------------------------------
SELECT GET_LOCK('67bcd46f2a660fb78a80268d2c822f87', 300) AS ci_session_lock 
 Execution Time:0.00081920623779297

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '64130b43861eacb8a0090b086493183685d17019' 
 Execution Time:0.00027894973754883

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.0004570484161377

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00031399726867676

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00020003318786621

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00022006034851074

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.0003669261932373

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '64130b43861eacb8a0090b086493183685d17019' 
 Execution Time:0.00039887428283691

-------------------------------------
SELECT GET_LOCK('67bcd46f2a660fb78a80268d2c822f87', 300) AS ci_session_lock 
 Execution Time:0.00048589706420898

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '64130b43861eacb8a0090b086493183685d17019' 
 Execution Time:0.00026106834411621

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.0005650520324707

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '64130b43861eacb8a0090b086493183685d17019' 
 Execution Time:0.0003659725189209

-------------------------------------
SELECT GET_LOCK('67bcd46f2a660fb78a80268d2c822f87', 300) AS ci_session_lock 
 Execution Time:0.00018095970153809

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '64130b43861eacb8a0090b086493183685d17019' 
 Execution Time:0.00028491020202637

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '9' 
 Execution Time:0.00037813186645508

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00027894973754883

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '9', '464d222ff24a8c5b9b2effd0ffbdcc1a') 
 Execution Time:0.016021966934204

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.00025391578674316

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00020909309387207

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00030684471130371

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '64130b43861eacb8a0090b086493183685d17019' 
 Execution Time:0.00031685829162598

-------------------------------------
SELECT GET_LOCK('67bcd46f2a660fb78a80268d2c822f87', 300) AS ci_session_lock 
 Execution Time:0.00016093254089355

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '64130b43861eacb8a0090b086493183685d17019' 
 Execution Time:0.00019097328186035

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.00027084350585938

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '9'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.0002291202545166

-------------------------------------
UPDATE `user_answers_temp` SET `answer` = 'C', `status` = 'false'
WHERE `id` = '73' 
 Execution Time:0.079348087310791

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '64130b43861eacb8a0090b086493183685d17019' 
 Execution Time:0.00021910667419434

-------------------------------------
SELECT GET_LOCK('67bcd46f2a660fb78a80268d2c822f87', 300) AS ci_session_lock 
 Execution Time:0.094856023788452

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '64130b43861eacb8a0090b086493183685d17019' 
 Execution Time:0.00039911270141602

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.00055217742919922

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '9'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00064897537231445

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '64130b43861eacb8a0090b086493183685d17019' 
 Execution Time:0.00034594535827637

-------------------------------------
SELECT GET_LOCK('67bcd46f2a660fb78a80268d2c822f87', 300) AS ci_session_lock 
 Execution Time:0.00024819374084473

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '64130b43861eacb8a0090b086493183685d17019' 
 Execution Time:0.00031089782714844

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.0003659725189209

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '64130b43861eacb8a0090b086493183685d17019' 
 Execution Time:0.00027799606323242

-------------------------------------
SELECT GET_LOCK('67bcd46f2a660fb78a80268d2c822f87', 300) AS ci_session_lock 
 Execution Time:0.00012803077697754

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '64130b43861eacb8a0090b086493183685d17019' 
 Execution Time:0.00020718574523926

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '10' 
 Execution Time:0.00051403045654297

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00078511238098145

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '10', '464d222ff24a8c5b9b2effd0ffbdcc1a') 
 Execution Time:0.065809011459351

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '10' 
 Execution Time:0.00061821937561035

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.0012238025665283

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.0003058910369873

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '64130b43861eacb8a0090b086493183685d17019' 
 Execution Time:0.00033688545227051

-------------------------------------
SELECT GET_LOCK('67bcd46f2a660fb78a80268d2c822f87', 300) AS ci_session_lock 
 Execution Time:0.0015561580657959

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '64130b43861eacb8a0090b086493183685d17019' 
 Execution Time:0.0007328987121582

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '10' 
 Execution Time:0.00030207633972168

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '10'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00020098686218262

-------------------------------------
UPDATE `user_answers_temp` SET `answer` = '6', `status` = 'false'
WHERE `id` = '74' 
 Execution Time:0.00095701217651367

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '64130b43861eacb8a0090b086493183685d17019' 
 Execution Time:0.00059199333190918

-------------------------------------
SELECT GET_LOCK('67bcd46f2a660fb78a80268d2c822f87', 300) AS ci_session_lock 
 Execution Time:0.00018906593322754

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '64130b43861eacb8a0090b086493183685d17019' 
 Execution Time:0.0002140998840332

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00033187866210938

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '64130b43861eacb8a0090b086493183685d17019' 
 Execution Time:0.00029516220092773

-------------------------------------
SELECT GET_LOCK('67bcd46f2a660fb78a80268d2c822f87', 300) AS ci_session_lock 
 Execution Time:0.0001380443572998

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '64130b43861eacb8a0090b086493183685d17019' 
 Execution Time:0.00018715858459473

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.0006861686706543

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00067710876464844

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '11', '464d222ff24a8c5b9b2effd0ffbdcc1a') 
 Execution Time:0.0311119556427

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00026178359985352

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.0001978874206543

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00026917457580566

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '64130b43861eacb8a0090b086493183685d17019' 
 Execution Time:0.00032281875610352

-------------------------------------
SELECT GET_LOCK('67bcd46f2a660fb78a80268d2c822f87', 300) AS ci_session_lock 
 Execution Time:0.00014996528625488

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '64130b43861eacb8a0090b086493183685d17019' 
 Execution Time:0.00018095970153809

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00025510787963867

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '11'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00020599365234375

-------------------------------------
UPDATE `user_answers_temp` SET `answer` = 'no', `status` = 'true'
WHERE `id` = '75' 
 Execution Time:0.018579959869385

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '64130b43861eacb8a0090b086493183685d17019' 
 Execution Time:0.00036001205444336

-------------------------------------
SELECT GET_LOCK('67bcd46f2a660fb78a80268d2c822f87', 300) AS ci_session_lock 
 Execution Time:0.00022602081298828

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '64130b43861eacb8a0090b086493183685d17019' 
 Execution Time:0.00023102760314941

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00034999847412109

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '64130b43861eacb8a0090b086493183685d17019' 
 Execution Time:0.00048494338989258

-------------------------------------
SELECT GET_LOCK('67bcd46f2a660fb78a80268d2c822f87', 300) AS ci_session_lock 
 Execution Time:0.00019598007202148

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '64130b43861eacb8a0090b086493183685d17019' 
 Execution Time:0.00097489356994629

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '12' 
 Execution Time:0.00054192543029785

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00024795532226562

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '12', '464d222ff24a8c5b9b2effd0ffbdcc1a') 
 Execution Time:0.023904085159302

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '12' 
 Execution Time:0.00050210952758789

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00057196617126465

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.0012991428375244

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '64130b43861eacb8a0090b086493183685d17019' 
 Execution Time:0.00091218948364258

-------------------------------------
SELECT GET_LOCK('67bcd46f2a660fb78a80268d2c822f87', 300) AS ci_session_lock 
 Execution Time:0.000244140625

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '64130b43861eacb8a0090b086493183685d17019' 
 Execution Time:0.00025200843811035

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1675082364, `data` = '__ci_last_regenerate|i:1675082364;user_info|O:8:\"stdClass\":13:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:13:\"user_language\";s:1:\"2\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-11-14 19:33:55\";}site_lang|s:5:\"dutch\";topic_id|s:1:\"2\";test_hash|s:32:\"464d222ff24a8c5b9b2effd0ffbdcc1a\";questions_count|a:6:{i:0;s:1:\"8\";i:1;s:1:\"9\";i:2;s:2:\"10\";i:3;s:2:\"11\";i:4;s:2:\"12\";i:5;s:2:\"13\";}'
WHERE `id` = '64130b43861eacb8a0090b086493183685d17019' 
 Execution Time:0.19330477714539

-------------------------------------
SELECT RELEASE_LOCK('67bcd46f2a660fb78a80268d2c822f87') AS ci_session_lock 
 Execution Time:0.00014495849609375

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'aead647d307565e6ea697a528ca6016f0b94cf28' 
 Execution Time:0.0003359317779541

-------------------------------------
SELECT GET_LOCK('2b84f999c0b467e4e998b96cffa9b0b0', 300) AS ci_session_lock 
 Execution Time:0.0003209114074707

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'defa2b7f1efdeefdab52d030faee6ad0b6b6e05e' 
 Execution Time:0.00054097175598145

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '10' 
 Execution Time:0.00032401084899902

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00028085708618164

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '10' 
 Execution Time:0.00023102760314941

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00021600723266602

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00035500526428223

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'defa2b7f1efdeefdab52d030faee6ad0b6b6e05e' 
 Execution Time:0.017383098602295

-------------------------------------
SELECT GET_LOCK('2b84f999c0b467e4e998b96cffa9b0b0', 300) AS ci_session_lock 
 Execution Time:0.00019192695617676

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'defa2b7f1efdeefdab52d030faee6ad0b6b6e05e' 
 Execution Time:0.00021791458129883

-------------------------------------
SELECT *
FROM `languages`
WHERE `en_lang_name` = 'Dutch' 
 Execution Time:0.014933109283447

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `status` = 'active'
AND `language_id` = '1' 
 Execution Time:0.024007081985474

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00040602684020996

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'defa2b7f1efdeefdab52d030faee6ad0b6b6e05e' 
 Execution Time:0.00028586387634277

-------------------------------------
SELECT GET_LOCK('2b84f999c0b467e4e998b96cffa9b0b0', 300) AS ci_session_lock 
 Execution Time:0.00013589859008789

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'defa2b7f1efdeefdab52d030faee6ad0b6b6e05e' 
 Execution Time:0.00016903877258301

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `id` = '2'
AND `status` = 'active' 
 Execution Time:0.00023388862609863

-------------------------------------
SELECT `id`
FROM `questions`
WHERE `topic_id` = '2'
AND `status` = 'active'
ORDER BY `id` ASC
 LIMIT 1 
 Execution Time:0.055797815322876

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00037312507629395

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'defa2b7f1efdeefdab52d030faee6ad0b6b6e05e' 
 Execution Time:0.00035691261291504

-------------------------------------
SELECT GET_LOCK('2b84f999c0b467e4e998b96cffa9b0b0', 300) AS ci_session_lock 
 Execution Time:0.00023508071899414

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'defa2b7f1efdeefdab52d030faee6ad0b6b6e05e' 
 Execution Time:0.00032782554626465

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.00035309791564941

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.0002129077911377

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '8', '464d222ff24a8c5b9b2effd0ffbdcc1a') 
 Execution Time:0.16645789146423

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00055408477783203

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00031304359436035

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00031900405883789

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'defa2b7f1efdeefdab52d030faee6ad0b6b6e05e' 
 Execution Time:0.00051093101501465

-------------------------------------
SELECT GET_LOCK('2b84f999c0b467e4e998b96cffa9b0b0', 300) AS ci_session_lock 
 Execution Time:0.0002288818359375

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'defa2b7f1efdeefdab52d030faee6ad0b6b6e05e' 
 Execution Time:0.00026893615722656

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00046491622924805

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '8'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00024914741516113

-------------------------------------
UPDATE `user_answers_temp` SET `answer` = '1', `status` = 'false'
WHERE `id` = '77' 
 Execution Time:0.038863182067871

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'defa2b7f1efdeefdab52d030faee6ad0b6b6e05e' 
 Execution Time:0.00036787986755371

-------------------------------------
SELECT GET_LOCK('2b84f999c0b467e4e998b96cffa9b0b0', 300) AS ci_session_lock 
 Execution Time:0.00020694732666016

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'defa2b7f1efdeefdab52d030faee6ad0b6b6e05e' 
 Execution Time:0.00024199485778809

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.00032615661621094

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00029611587524414

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00029110908508301

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00047516822814941

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.0002751350402832

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'defa2b7f1efdeefdab52d030faee6ad0b6b6e05e' 
 Execution Time:0.00028300285339355

-------------------------------------
SELECT GET_LOCK('2b84f999c0b467e4e998b96cffa9b0b0', 300) AS ci_session_lock 
 Execution Time:0.00013518333435059

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'defa2b7f1efdeefdab52d030faee6ad0b6b6e05e' 
 Execution Time:0.00028085708618164

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00027894973754883

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'defa2b7f1efdeefdab52d030faee6ad0b6b6e05e' 
 Execution Time:0.00029492378234863

-------------------------------------
SELECT GET_LOCK('2b84f999c0b467e4e998b96cffa9b0b0', 300) AS ci_session_lock 
 Execution Time:0.00013399124145508

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'defa2b7f1efdeefdab52d030faee6ad0b6b6e05e' 
 Execution Time:0.00017023086547852

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1675082669, `data` = '__ci_last_regenerate|i:1675082669;user_info|O:8:\"stdClass\":13:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:13:\"user_language\";s:1:\"2\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-11-14 19:33:55\";}site_lang|s:5:\"dutch\";topic_id|s:1:\"2\";test_hash|s:32:\"464d222ff24a8c5b9b2effd0ffbdcc1a\";questions_count|a:6:{i:0;s:1:\"8\";i:1;s:1:\"9\";i:2;s:2:\"10\";i:3;s:2:\"11\";i:4;s:2:\"12\";i:5;s:2:\"13\";}'
WHERE `id` = 'defa2b7f1efdeefdab52d030faee6ad0b6b6e05e' 
 Execution Time:0.022174119949341

-------------------------------------
SELECT RELEASE_LOCK('2b84f999c0b467e4e998b96cffa9b0b0') AS ci_session_lock 
 Execution Time:0.00084781646728516

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '025aaa876a7ec5affe310f843a37685e3963d42e' 
 Execution Time:0.0007929801940918

-------------------------------------
SELECT GET_LOCK('f628f60e3ab9b83c790434b81cc62b3d', 300) AS ci_session_lock 
 Execution Time:0.00032997131347656

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '17495d6348015a736e2030283454713bd9467418' 
 Execution Time:0.00028395652770996

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
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00030303001403809

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '9', '464d222ff24a8c5b9b2effd0ffbdcc1a') 
 Execution Time:0.021499156951904

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.00048398971557617

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00046300888061523

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00088381767272949

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '17495d6348015a736e2030283454713bd9467418' 
 Execution Time:0.00031399726867676

-------------------------------------
SELECT GET_LOCK('f628f60e3ab9b83c790434b81cc62b3d', 300) AS ci_session_lock 
 Execution Time:0.00017189979553223

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '17495d6348015a736e2030283454713bd9467418' 
 Execution Time:0.00022602081298828

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.0002598762512207

-------------------------------------
UPDATE `user_answers_temp` SET `status` = 'not_answered'
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.074526786804199

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '17495d6348015a736e2030283454713bd9467418' 
 Execution Time:0.00027990341186523

-------------------------------------
SELECT GET_LOCK('f628f60e3ab9b83c790434b81cc62b3d', 300) AS ci_session_lock 
 Execution Time:0.00015497207641602

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '17495d6348015a736e2030283454713bd9467418' 
 Execution Time:0.00024700164794922

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '10' 
 Execution Time:0.00031304359436035

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00021886825561523

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '10', '464d222ff24a8c5b9b2effd0ffbdcc1a') 
 Execution Time:0.039009809494019

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '10' 
 Execution Time:0.00031399726867676

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00022697448730469

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00028109550476074

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '17495d6348015a736e2030283454713bd9467418' 
 Execution Time:0.00025606155395508

-------------------------------------
SELECT GET_LOCK('f628f60e3ab9b83c790434b81cc62b3d', 300) AS ci_session_lock 
 Execution Time:0.00010514259338379

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '17495d6348015a736e2030283454713bd9467418' 
 Execution Time:0.0001678466796875

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.0002601146697998

-------------------------------------
UPDATE `user_answers_temp` SET `status` = 'not_answered'
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.066874980926514

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '17495d6348015a736e2030283454713bd9467418' 
 Execution Time:0.0003211498260498

-------------------------------------
SELECT GET_LOCK('f628f60e3ab9b83c790434b81cc62b3d', 300) AS ci_session_lock 
 Execution Time:0.00017094612121582

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '17495d6348015a736e2030283454713bd9467418' 
 Execution Time:0.00020599365234375

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00041294097900391

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00025510787963867

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '11', '464d222ff24a8c5b9b2effd0ffbdcc1a') 
 Execution Time:0.0064268112182617

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00030088424682617

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00025486946105957

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00031709671020508

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '17495d6348015a736e2030283454713bd9467418' 
 Execution Time:0.00028514862060547

-------------------------------------
SELECT GET_LOCK('f628f60e3ab9b83c790434b81cc62b3d', 300) AS ci_session_lock 
 Execution Time:0.00011992454528809

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '17495d6348015a736e2030283454713bd9467418' 
 Execution Time:0.00016403198242188

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00023698806762695

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '11'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00020289421081543

-------------------------------------
UPDATE `user_answers_temp` SET `answer` = 'yes', `status` = 'false'
WHERE `id` = '80' 
 Execution Time:0.070348978042603

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '17495d6348015a736e2030283454713bd9467418' 
 Execution Time:0.00020909309387207

-------------------------------------
SELECT GET_LOCK('f628f60e3ab9b83c790434b81cc62b3d', 300) AS ci_session_lock 
 Execution Time:0.075567960739136

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '17495d6348015a736e2030283454713bd9467418' 
 Execution Time:0.00036406517028809

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.0008549690246582

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '11'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00034117698669434

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '17495d6348015a736e2030283454713bd9467418' 
 Execution Time:0.00032496452331543

-------------------------------------
SELECT GET_LOCK('f628f60e3ab9b83c790434b81cc62b3d', 300) AS ci_session_lock 
 Execution Time:0.00014114379882812

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '17495d6348015a736e2030283454713bd9467418' 
 Execution Time:0.0002129077911377

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00035309791564941

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '17495d6348015a736e2030283454713bd9467418' 
 Execution Time:0.00031399726867676

-------------------------------------
SELECT GET_LOCK('f628f60e3ab9b83c790434b81cc62b3d', 300) AS ci_session_lock 
 Execution Time:0.00020909309387207

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '17495d6348015a736e2030283454713bd9467418' 
 Execution Time:0.00025701522827148

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '12' 
 Execution Time:0.00033998489379883

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00025510787963867

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '12', '464d222ff24a8c5b9b2effd0ffbdcc1a') 
 Execution Time:0.0241379737854

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '12' 
 Execution Time:0.00032687187194824

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00033211708068848

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00058412551879883

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '17495d6348015a736e2030283454713bd9467418' 
 Execution Time:0.00034689903259277

-------------------------------------
SELECT GET_LOCK('f628f60e3ab9b83c790434b81cc62b3d', 300) AS ci_session_lock 
 Execution Time:0.00028514862060547

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '17495d6348015a736e2030283454713bd9467418' 
 Execution Time:0.00039911270141602

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1675083121, `data` = '__ci_last_regenerate|i:1675083121;user_info|O:8:\"stdClass\":13:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:13:\"user_language\";s:1:\"2\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-11-14 19:33:55\";}site_lang|s:5:\"dutch\";topic_id|s:1:\"2\";test_hash|s:32:\"464d222ff24a8c5b9b2effd0ffbdcc1a\";questions_count|a:6:{i:0;s:1:\"8\";i:1;s:1:\"9\";i:2;s:2:\"10\";i:3;s:2:\"11\";i:4;s:2:\"12\";i:5;s:2:\"13\";}'
WHERE `id` = '17495d6348015a736e2030283454713bd9467418' 
 Execution Time:0.029255151748657

-------------------------------------
SELECT RELEASE_LOCK('f628f60e3ab9b83c790434b81cc62b3d') AS ci_session_lock 
 Execution Time:0.00020003318786621

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'eda921070c5bd35dcd423241672e180c5334c035' 
 Execution Time:0.00029611587524414

-------------------------------------
SELECT GET_LOCK('06dc34afdb6971b170fd92c41f3d3835', 300) AS ci_session_lock 
 Execution Time:0.00014281272888184

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '7757480e8d484587d3324a3a5d7919256a24aff1' 
 Execution Time:0.00021219253540039

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '13' 
 Execution Time:0.00038003921508789

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00031018257141113

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '13', '464d222ff24a8c5b9b2effd0ffbdcc1a') 
 Execution Time:0.0072720050811768

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '13' 
 Execution Time:0.00027203559875488

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00030183792114258

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00032901763916016

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '7757480e8d484587d3324a3a5d7919256a24aff1' 
 Execution Time:0.00031185150146484

-------------------------------------
SELECT GET_LOCK('06dc34afdb6971b170fd92c41f3d3835', 300) AS ci_session_lock 
 Execution Time:0.00015902519226074

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '7757480e8d484587d3324a3a5d7919256a24aff1' 
 Execution Time:0.00019717216491699

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00024890899658203

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00022196769714355

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
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00020098686218262

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00041699409484863

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '7757480e8d484587d3324a3a5d7919256a24aff1' 
 Execution Time:0.00028514862060547

-------------------------------------
SELECT GET_LOCK('06dc34afdb6971b170fd92c41f3d3835', 300) AS ci_session_lock 
 Execution Time:0.0001680850982666

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '7757480e8d484587d3324a3a5d7919256a24aff1' 
 Execution Time:0.00025200843811035

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '12' 
 Execution Time:0.00030899047851562

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00022101402282715

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '12' 
 Execution Time:0.00017094612121582

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00018596649169922

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00028109550476074

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '7757480e8d484587d3324a3a5d7919256a24aff1' 
 Execution Time:0.00029301643371582

-------------------------------------
SELECT GET_LOCK('06dc34afdb6971b170fd92c41f3d3835', 300) AS ci_session_lock 
 Execution Time:0.00023198127746582

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '7757480e8d484587d3324a3a5d7919256a24aff1' 
 Execution Time:0.00028514862060547

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '12' 
 Execution Time:0.00033783912658691

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00020694732666016

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '12' 
 Execution Time:0.0001988410949707

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00018596649169922

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00027608871459961

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '7757480e8d484587d3324a3a5d7919256a24aff1' 
 Execution Time:0.00028085708618164

-------------------------------------
SELECT GET_LOCK('06dc34afdb6971b170fd92c41f3d3835', 300) AS ci_session_lock 
 Execution Time:0.00012302398681641

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '7757480e8d484587d3324a3a5d7919256a24aff1' 
 Execution Time:0.00016593933105469

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '13' 
 Execution Time:0.00036406517028809

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00020194053649902

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '13', '464d222ff24a8c5b9b2effd0ffbdcc1a') 
 Execution Time:0.021672010421753

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '13' 
 Execution Time:0.00026297569274902

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00032901763916016

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00027203559875488

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '7757480e8d484587d3324a3a5d7919256a24aff1' 
 Execution Time:0.0012729167938232

-------------------------------------
SELECT GET_LOCK('06dc34afdb6971b170fd92c41f3d3835', 300) AS ci_session_lock 
 Execution Time:0.0013160705566406

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '7757480e8d484587d3324a3a5d7919256a24aff1' 
 Execution Time:0.0017120838165283

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1675083603, `data` = '__ci_last_regenerate|i:1675083603;user_info|O:8:\"stdClass\":13:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:13:\"user_language\";s:1:\"2\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-11-14 19:33:55\";}site_lang|s:5:\"dutch\";topic_id|s:1:\"2\";test_hash|s:32:\"464d222ff24a8c5b9b2effd0ffbdcc1a\";questions_count|a:6:{i:0;s:1:\"8\";i:1;s:1:\"9\";i:2;s:2:\"10\";i:3;s:2:\"11\";i:4;s:2:\"12\";i:5;s:2:\"13\";}'
WHERE `id` = '7757480e8d484587d3324a3a5d7919256a24aff1' 
 Execution Time:0.0036599636077881

-------------------------------------
SELECT RELEASE_LOCK('06dc34afdb6971b170fd92c41f3d3835') AS ci_session_lock 
 Execution Time:0.00087118148803711

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'ab55ef374f2ef716a4507874a83e5d32bef81e02' 
 Execution Time:0.00029492378234863

-------------------------------------
SELECT GET_LOCK('4b408efeca9cca37840f8608b0925bc7', 300) AS ci_session_lock 
 Execution Time:0.00027203559875488

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '26b5a60482314ab7cd7d2b8ef2db3e1150ce1c6a' 
 Execution Time:0.0004889965057373

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '12' 
 Execution Time:0.0006260871887207

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00033211708068848

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '12' 
 Execution Time:0.00028896331787109

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00029301643371582

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.0003662109375

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '26b5a60482314ab7cd7d2b8ef2db3e1150ce1c6a' 
 Execution Time:0.00032401084899902

-------------------------------------
SELECT GET_LOCK('4b408efeca9cca37840f8608b0925bc7', 300) AS ci_session_lock 
 Execution Time:0.00018715858459473

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '26b5a60482314ab7cd7d2b8ef2db3e1150ce1c6a' 
 Execution Time:0.00020599365234375

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '13' 
 Execution Time:0.00033688545227051

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00020384788513184

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '13' 
 Execution Time:0.00017809867858887

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00019979476928711

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00027704238891602

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '26b5a60482314ab7cd7d2b8ef2db3e1150ce1c6a' 
 Execution Time:0.00038790702819824

-------------------------------------
SELECT GET_LOCK('4b408efeca9cca37840f8608b0925bc7', 300) AS ci_session_lock 
 Execution Time:0.00025391578674316

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '26b5a60482314ab7cd7d2b8ef2db3e1150ce1c6a' 
 Execution Time:0.00033211708068848

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '26b5a60482314ab7cd7d2b8ef2db3e1150ce1c6a' 
 Execution Time:0.0003349781036377

-------------------------------------
SELECT GET_LOCK('4b408efeca9cca37840f8608b0925bc7', 300) AS ci_session_lock 
 Execution Time:0.0001978874206543

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '26b5a60482314ab7cd7d2b8ef2db3e1150ce1c6a' 
 Execution Time:0.00024604797363281

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00030183792114258

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.021085023880005

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00040578842163086

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.0002439022064209

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00020909309387207

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00014901161193848

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00013303756713867

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00013899803161621

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '8' 
 Execution Time:0.00020289421081543

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00022697448730469

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00025510787963867

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00019598007202148

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00017619132995605

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00018405914306641

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00023102760314941

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00030994415283203

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00018405914306641

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '8' 
 Execution Time:0.00018906593322754

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '26b5a60482314ab7cd7d2b8ef2db3e1150ce1c6a' 
 Execution Time:0.00030684471130371

-------------------------------------
SELECT GET_LOCK('4b408efeca9cca37840f8608b0925bc7', 300) AS ci_session_lock 
 Execution Time:0.00013613700866699

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '26b5a60482314ab7cd7d2b8ef2db3e1150ce1c6a' 
 Execution Time:0.00016403198242188

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00022602081298828

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'questions' 
 Execution Time:0.014294862747192

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '6' 
 Execution Time:0.040979862213135

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00037693977355957

-------------------------------------
SELECT *
FROM `ebooks` 
 Execution Time:0.00022292137145996

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` IS NULL 
 Execution Time:0.00015521049499512

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00034499168395996

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.0009610652923584

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00025105476379395

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00022506713867188

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00018000602722168

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00041913986206055

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00018405914306641

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00014495849609375

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '8' 
 Execution Time:0.00013589859008789

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00018882751464844

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00019407272338867

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00015115737915039

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00013589859008789

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00013113021850586

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00019407272338867

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00019192695617676

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00014495849609375

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '8' 
 Execution Time:0.00014376640319824

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '26b5a60482314ab7cd7d2b8ef2db3e1150ce1c6a' 
 Execution Time:0.00031709671020508

-------------------------------------
SELECT GET_LOCK('4b408efeca9cca37840f8608b0925bc7', 300) AS ci_session_lock 
 Execution Time:0.00017905235290527

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '26b5a60482314ab7cd7d2b8ef2db3e1150ce1c6a' 
 Execution Time:0.00025200843811035

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0003819465637207

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'questions' 
 Execution Time:0.00024104118347168

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '6' 
 Execution Time:0.00029492378234863

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `id` = '2' 
 Execution Time:0.00018191337585449

-------------------------------------
SELECT *
FROM `languages`
WHERE `id` = '1' 
 Execution Time:0.00014996528625488

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00013899803161621

-------------------------------------
SELECT *
FROM `ebooks` 
 Execution Time:0.00013208389282227

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2' 
 Execution Time:0.00017595291137695

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00018811225891113

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00017809867858887

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00016403198242188

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00013613700866699

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00011110305786133

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010085105895996

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:9.7990036010742E-5

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:9.6797943115234E-5

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '8' 
 Execution Time:9.7990036010742E-5

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00014114379882812

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00016093254089355

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.0001060962677002

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:9.918212890625E-5

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:9.7990036010742E-5

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010299682617188

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
 Execution Time:9.7036361694336E-5

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '26b5a60482314ab7cd7d2b8ef2db3e1150ce1c6a' 
 Execution Time:0.0013489723205566

-------------------------------------
SELECT GET_LOCK('4b408efeca9cca37840f8608b0925bc7', 300) AS ci_session_lock 
 Execution Time:0.00023102760314941

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '26b5a60482314ab7cd7d2b8ef2db3e1150ce1c6a' 
 Execution Time:0.00036501884460449

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00033187866210938

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'questions' 
 Execution Time:0.00022792816162109

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '6' 
 Execution Time:0.00039100646972656

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '12' 
 Execution Time:0.00058484077453613

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `id` = '2' 
 Execution Time:0.0011589527130127

-------------------------------------
SELECT *
FROM `languages`
WHERE `id` = '1' 
 Execution Time:0.00062894821166992

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00098085403442383

-------------------------------------
SELECT *
FROM `ebooks` 
 Execution Time:0.00038504600524902

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2' 
 Execution Time:0.00033307075500488

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00032997131347656

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.0005791187286377

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00039291381835938

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00029206275939941

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00027585029602051

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00031709671020508

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00031685829162598

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00027012825012207

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '8' 
 Execution Time:0.00026512145996094

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0002288818359375

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.001183032989502

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00026297569274902

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00058102607727051

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00034904479980469

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00020503997802734

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00033998489379883

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00014209747314453

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '8' 
 Execution Time:0.00088214874267578

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '26b5a60482314ab7cd7d2b8ef2db3e1150ce1c6a' 
 Execution Time:0.0003049373626709

-------------------------------------
SELECT GET_LOCK('4b408efeca9cca37840f8608b0925bc7', 300) AS ci_session_lock 
 Execution Time:0.00013613700866699

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '26b5a60482314ab7cd7d2b8ef2db3e1150ce1c6a' 
 Execution Time:0.0001671314239502

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00029802322387695

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'questions' 
 Execution Time:0.00028491020202637

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '6' 
 Execution Time:0.00041890144348145

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '13' 
 Execution Time:0.00028181076049805

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `id` = '2' 
 Execution Time:0.00016212463378906

-------------------------------------
SELECT *
FROM `languages`
WHERE `id` = '1' 
 Execution Time:0.00020503997802734

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00038313865661621

-------------------------------------
SELECT *
FROM `ebooks` 
 Execution Time:0.00017905235290527

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2' 
 Execution Time:0.00020599365234375

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0003199577331543

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00020790100097656

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00018692016601562

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00014591217041016

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00011801719665527

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00013613700866699

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010299682617188

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00010490417480469

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '8' 
 Execution Time:9.7990036010742E-5

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00011301040649414

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00013995170593262

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.0001070499420166

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:9.7990036010742E-5

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:9.7036361694336E-5

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:9.7990036010742E-5

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010299682617188

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:9.608268737793E-5

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '8' 
 Execution Time:9.608268737793E-5

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '26b5a60482314ab7cd7d2b8ef2db3e1150ce1c6a' 
 Execution Time:0.00029706954956055

-------------------------------------
SELECT GET_LOCK('4b408efeca9cca37840f8608b0925bc7', 300) AS ci_session_lock 
 Execution Time:0.00014805793762207

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '26b5a60482314ab7cd7d2b8ef2db3e1150ce1c6a' 
 Execution Time:0.00020098686218262

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00024199485778809

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'questions' 
 Execution Time:0.00018620491027832

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '6' 
 Execution Time:0.00027179718017578

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '12' 
 Execution Time:0.00021505355834961

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `id` = '2' 
 Execution Time:0.00017118453979492

-------------------------------------
SELECT *
FROM `languages`
WHERE `id` = '1' 
 Execution Time:0.00013613700866699

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00011587142944336

-------------------------------------
SELECT *
FROM `ebooks` 
 Execution Time:0.00012516975402832

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2' 
 Execution Time:0.00018692016601562

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00020194053649902

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00017499923706055

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.0001518726348877

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.0001380443572998

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.0001070499420166

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010013580322266

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:9.918212890625E-5

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:9.7990036010742E-5

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '8' 
 Execution Time:0.00010395050048828

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00010895729064941

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00013399124145508

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00010108947753906

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:9.7990036010742E-5

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
 Execution Time:9.7990036010742E-5

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:9.6797943115234E-5

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '8' 
 Execution Time:9.8943710327148E-5

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '26b5a60482314ab7cd7d2b8ef2db3e1150ce1c6a' 
 Execution Time:0.00030612945556641

-------------------------------------
SELECT GET_LOCK('4b408efeca9cca37840f8608b0925bc7', 300) AS ci_session_lock 
 Execution Time:0.00015497207641602

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '26b5a60482314ab7cd7d2b8ef2db3e1150ce1c6a' 
 Execution Time:0.00020694732666016

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00028705596923828

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'questions' 
 Execution Time:0.00018000602722168

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '6' 
 Execution Time:0.00026917457580566

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '13' 
 Execution Time:0.00057697296142578

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `id` = '2' 
 Execution Time:0.00030684471130371

-------------------------------------
SELECT *
FROM `languages`
WHERE `id` = '1' 
 Execution Time:0.0002899169921875

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00035405158996582

-------------------------------------
SELECT *
FROM `ebooks` 
 Execution Time:0.00050616264343262

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2' 
 Execution Time:0.00037789344787598

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00054383277893066

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00039815902709961

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00026893615722656

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00025796890258789

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00023603439331055

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00023317337036133

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00032401084899902

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00037884712219238

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '8' 
 Execution Time:0.00024580955505371

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00022006034851074

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00025582313537598

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.0001990795135498

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00020694732666016

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.000244140625

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00022411346435547

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00020503997802734

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00017404556274414

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '8' 
 Execution Time:0.0001678466796875

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '26b5a60482314ab7cd7d2b8ef2db3e1150ce1c6a' 
 Execution Time:0.00033402442932129

-------------------------------------
SELECT GET_LOCK('4b408efeca9cca37840f8608b0925bc7', 300) AS ci_session_lock 
 Execution Time:0.0002138614654541

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '26b5a60482314ab7cd7d2b8ef2db3e1150ce1c6a' 
 Execution Time:0.00022292137145996

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '13' 
 Execution Time:0.00043916702270508

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.0003511905670166

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '13' 
 Execution Time:0.00027608871459961

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00021815299987793

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00039482116699219

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '26b5a60482314ab7cd7d2b8ef2db3e1150ce1c6a' 
 Execution Time:0.00032591819763184

-------------------------------------
SELECT GET_LOCK('4b408efeca9cca37840f8608b0925bc7', 300) AS ci_session_lock 
 Execution Time:0.00023412704467773

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '26b5a60482314ab7cd7d2b8ef2db3e1150ce1c6a' 
 Execution Time:0.0002589225769043

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1675085849, `data` = '__ci_last_regenerate|i:1675085849;user_info|O:8:\"stdClass\":13:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:13:\"user_language\";s:1:\"2\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-11-14 19:33:55\";}site_lang|s:5:\"dutch\";topic_id|s:1:\"2\";test_hash|s:32:\"464d222ff24a8c5b9b2effd0ffbdcc1a\";questions_count|a:6:{i:0;s:1:\"8\";i:1;s:1:\"9\";i:2;s:2:\"10\";i:3;s:2:\"11\";i:4;s:2:\"12\";i:5;s:2:\"13\";}user_id|s:1:\"1\";email|s:20:\"fantom15dm@gmail.com\";'
WHERE `id` = '26b5a60482314ab7cd7d2b8ef2db3e1150ce1c6a' 
 Execution Time:0.042717933654785

-------------------------------------
SELECT RELEASE_LOCK('4b408efeca9cca37840f8608b0925bc7') AS ci_session_lock 
 Execution Time:0.00014114379882812

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'f07956983fe01358f8ed263f03ef4c6e23180a12' 
 Execution Time:0.00019001960754395

-------------------------------------
SELECT GET_LOCK('76b8ee12624cd4e8d6d90d7537264e7c', 300) AS ci_session_lock 
 Execution Time:9.5129013061523E-5

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'da0dd982e2a715eeb124e427d75c46daec82ebb7' 
 Execution Time:0.00013279914855957

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '13' 
 Execution Time:0.00041103363037109

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00033402442932129

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '13' 
 Execution Time:0.00025391578674316

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00029492378234863

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00027704238891602

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'da0dd982e2a715eeb124e427d75c46daec82ebb7' 
 Execution Time:0.00029206275939941

-------------------------------------
SELECT GET_LOCK('76b8ee12624cd4e8d6d90d7537264e7c', 300) AS ci_session_lock 
 Execution Time:0.00012588500976562

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'da0dd982e2a715eeb124e427d75c46daec82ebb7' 
 Execution Time:0.00016593933105469

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '13'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00029778480529785

-------------------------------------
UPDATE `user_answers_temp` SET `answer` = '{\"answer_3\":\"incorrect\"}', `status` = 'both'
WHERE `id` = '83' 
 Execution Time:0.0021600723266602

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'da0dd982e2a715eeb124e427d75c46daec82ebb7' 
 Execution Time:0.00059080123901367

-------------------------------------
SELECT GET_LOCK('76b8ee12624cd4e8d6d90d7537264e7c', 300) AS ci_session_lock 
 Execution Time:0.0001990795135498

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'da0dd982e2a715eeb124e427d75c46daec82ebb7' 
 Execution Time:0.00022196769714355

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '13'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00035595893859863

-------------------------------------
UPDATE `user_answers_temp` SET `answer` = 'null', `status` = 'both'
WHERE `id` = '83' 
 Execution Time:0.0011398792266846

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'da0dd982e2a715eeb124e427d75c46daec82ebb7' 
 Execution Time:0.015773057937622

-------------------------------------
SELECT GET_LOCK('76b8ee12624cd4e8d6d90d7537264e7c', 300) AS ci_session_lock 
 Execution Time:0.00026607513427734

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'da0dd982e2a715eeb124e427d75c46daec82ebb7' 
 Execution Time:0.00029492378234863

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '13'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.020035028457642

-------------------------------------
UPDATE `user_answers_temp` SET `answer` = 'null', `status` = 'both'
WHERE `id` = '83' 
 Execution Time:0.012943983078003

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'da0dd982e2a715eeb124e427d75c46daec82ebb7' 
 Execution Time:0.0003211498260498

-------------------------------------
SELECT GET_LOCK('76b8ee12624cd4e8d6d90d7537264e7c', 300) AS ci_session_lock 
 Execution Time:0.00020599365234375

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'da0dd982e2a715eeb124e427d75c46daec82ebb7' 
 Execution Time:0.00022697448730469

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '13' 
 Execution Time:0.00041699409484863

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00028085708618164

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '13' 
 Execution Time:0.00022411346435547

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00025296211242676

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.017383098602295

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'da0dd982e2a715eeb124e427d75c46daec82ebb7' 
 Execution Time:0.00032687187194824

-------------------------------------
SELECT GET_LOCK('76b8ee12624cd4e8d6d90d7537264e7c', 300) AS ci_session_lock 
 Execution Time:0.00015091896057129

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'da0dd982e2a715eeb124e427d75c46daec82ebb7' 
 Execution Time:0.00017905235290527

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '13'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00027704238891602

-------------------------------------
UPDATE `user_answers_temp` SET `answer` = '{\"answer_4\":\"correct\"}', `status` = 'both'
WHERE `id` = '83' 
 Execution Time:0.0035021305084229

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'da0dd982e2a715eeb124e427d75c46daec82ebb7' 
 Execution Time:0.00032901763916016

-------------------------------------
SELECT GET_LOCK('76b8ee12624cd4e8d6d90d7537264e7c', 300) AS ci_session_lock 
 Execution Time:0.00015902519226074

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'da0dd982e2a715eeb124e427d75c46daec82ebb7' 
 Execution Time:0.00017809867858887

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '13'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00026202201843262

-------------------------------------
UPDATE `user_answers_temp` SET `answer` = '{\"answer_4\":\"correct\"}', `status` = 'both'
WHERE `id` = '83' 
 Execution Time:0.035984039306641

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'da0dd982e2a715eeb124e427d75c46daec82ebb7' 
 Execution Time:0.00046110153198242

-------------------------------------
SELECT GET_LOCK('76b8ee12624cd4e8d6d90d7537264e7c', 300) AS ci_session_lock 
 Execution Time:0.00020289421081543

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'da0dd982e2a715eeb124e427d75c46daec82ebb7' 
 Execution Time:0.00022792816162109

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '13'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00041007995605469

-------------------------------------
UPDATE `user_answers_temp` SET `answer` = '{\"answer_4\":\"correct\",\"answer_2\":\"correct\"}', `status` = 'both'
WHERE `id` = '83' 
 Execution Time:0.076747894287109

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'da0dd982e2a715eeb124e427d75c46daec82ebb7' 
 Execution Time:0.00031900405883789

-------------------------------------
SELECT GET_LOCK('76b8ee12624cd4e8d6d90d7537264e7c', 300) AS ci_session_lock 
 Execution Time:0.00014090538024902

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'da0dd982e2a715eeb124e427d75c46daec82ebb7' 
 Execution Time:0.00017380714416504

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '13'
AND `question_hash` = '464d222ff24a8c5b9b2effd0ffbdcc1a' 
 Execution Time:0.00042200088500977

-------------------------------------
UPDATE `user_answers_temp` SET `answer` = '{\"answer_4\":\"correct\",\"answer_2\":\"correct\",\"answer_3\":\"incorrect\"}', `status` = 'both'
WHERE `id` = '83' 
 Execution Time:0.040130853652954

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'a2f4ab5a06f1ddf18d032ceb9fc995b65e61e579' 
 Execution Time:0.00032591819763184

-------------------------------------
SELECT GET_LOCK('797fd0ed5b79ded9536b06d084c34b6d', 300) AS ci_session_lock 
 Execution Time:0.00017309188842773

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'a2f4ab5a06f1ddf18d032ceb9fc995b65e61e579' 
 Execution Time:0.00024890899658203

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'a2f4ab5a06f1ddf18d032ceb9fc995b65e61e579' 
 Execution Time:0.00059914588928223

-------------------------------------
SELECT GET_LOCK('797fd0ed5b79ded9536b06d084c34b6d', 300) AS ci_session_lock 
 Execution Time:0.0001990795135498

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'a2f4ab5a06f1ddf18d032ceb9fc995b65e61e579' 
 Execution Time:0.00024008750915527

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00029206275939941

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'a2f4ab5a06f1ddf18d032ceb9fc995b65e61e579' 
 Execution Time:0.00031900405883789

-------------------------------------
SELECT GET_LOCK('797fd0ed5b79ded9536b06d084c34b6d', 300) AS ci_session_lock 
 Execution Time:0.00012707710266113

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'a2f4ab5a06f1ddf18d032ceb9fc995b65e61e579' 
 Execution Time:0.0006110668182373

-------------------------------------
SELECT *
FROM `languages`
WHERE `en_lang_name` = 'English' 
 Execution Time:0.00029110908508301

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `status` = 'active'
AND `language_id` = '2' 
 Execution Time:0.02530312538147

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00037503242492676

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'a2f4ab5a06f1ddf18d032ceb9fc995b65e61e579' 
 Execution Time:0.00029492378234863

-------------------------------------
SELECT GET_LOCK('797fd0ed5b79ded9536b06d084c34b6d', 300) AS ci_session_lock 
 Execution Time:0.00012803077697754

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'a2f4ab5a06f1ddf18d032ceb9fc995b65e61e579' 
 Execution Time:0.00016903877258301

-------------------------------------
SELECT *
FROM `languages`
WHERE `en_lang_name` = 'Dutch' 
 Execution Time:0.001492977142334

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `status` = 'active'
AND `language_id` = '1' 
 Execution Time:0.00049495697021484

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00034904479980469

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'a2f4ab5a06f1ddf18d032ceb9fc995b65e61e579' 
 Execution Time:0.00029611587524414

-------------------------------------
SELECT GET_LOCK('797fd0ed5b79ded9536b06d084c34b6d', 300) AS ci_session_lock 
 Execution Time:0.00015401840209961

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'a2f4ab5a06f1ddf18d032ceb9fc995b65e61e579' 
 Execution Time:0.00020790100097656

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `id` = '2'
AND `status` = 'active' 
 Execution Time:0.00055599212646484

-------------------------------------
SELECT `id`
FROM `questions`
WHERE `topic_id` = '2'
AND `status` = 'active'
ORDER BY `id` ASC
 LIMIT 1 
 Execution Time:0.075263977050781

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00058102607727051

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'a2f4ab5a06f1ddf18d032ceb9fc995b65e61e579' 
 Execution Time:0.00040507316589355

-------------------------------------
SELECT GET_LOCK('797fd0ed5b79ded9536b06d084c34b6d', 300) AS ci_session_lock 
 Execution Time:0.00026893615722656

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'a2f4ab5a06f1ddf18d032ceb9fc995b65e61e579' 
 Execution Time:0.00036716461181641

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.00035905838012695

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '8', 'd5785530669f4c220805996bc8b5bc6a') 
 Execution Time:0.02876615524292

-------------------------------------
SELECT `id`
FROM `questions`
WHERE `topic_id` = '2'
AND `status` = 'active' 
 Execution Time:0.00029301643371582

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.0001838207244873

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00022602081298828

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.0003809928894043

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'a2f4ab5a06f1ddf18d032ceb9fc995b65e61e579' 
 Execution Time:0.00029397010803223

-------------------------------------
SELECT GET_LOCK('797fd0ed5b79ded9536b06d084c34b6d', 300) AS ci_session_lock 
 Execution Time:0.00024700164794922

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'a2f4ab5a06f1ddf18d032ceb9fc995b65e61e579' 
 Execution Time:0.00028109550476074

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00038409233093262

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '8'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00021600723266602

-------------------------------------
UPDATE `user_answers_temp` SET `answer` = '2', `status` = 'true'
WHERE `id` = '84' 
 Execution Time:0.029247999191284

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'a2f4ab5a06f1ddf18d032ceb9fc995b65e61e579' 
 Execution Time:0.00029611587524414

-------------------------------------
SELECT GET_LOCK('797fd0ed5b79ded9536b06d084c34b6d', 300) AS ci_session_lock 
 Execution Time:0.00014710426330566

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'a2f4ab5a06f1ddf18d032ceb9fc995b65e61e579' 
 Execution Time:0.00027108192443848

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00067710876464844

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'a2f4ab5a06f1ddf18d032ceb9fc995b65e61e579' 
 Execution Time:0.00029993057250977

-------------------------------------
SELECT GET_LOCK('797fd0ed5b79ded9536b06d084c34b6d', 300) AS ci_session_lock 
 Execution Time:0.00019502639770508

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'a2f4ab5a06f1ddf18d032ceb9fc995b65e61e579' 
 Execution Time:0.00024604797363281

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '9' 
 Execution Time:0.00036382675170898

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00024199485778809

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '9', 'd5785530669f4c220805996bc8b5bc6a') 
 Execution Time:0.053503036499023

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
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00026297569274902

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.0003361701965332

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'a2f4ab5a06f1ddf18d032ceb9fc995b65e61e579' 
 Execution Time:0.00023198127746582

-------------------------------------
SELECT GET_LOCK('797fd0ed5b79ded9536b06d084c34b6d', 300) AS ci_session_lock 
 Execution Time:0.00016307830810547

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'a2f4ab5a06f1ddf18d032ceb9fc995b65e61e579' 
 Execution Time:0.00023508071899414

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.00028610229492188

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '9'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.0002439022064209

-------------------------------------
UPDATE `user_answers_temp` SET `answer` = 'B', `status` = 'true'
WHERE `id` = '85' 
 Execution Time:0.20771908760071

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'a2f4ab5a06f1ddf18d032ceb9fc995b65e61e579' 
 Execution Time:0.00017595291137695

-------------------------------------
SELECT GET_LOCK('797fd0ed5b79ded9536b06d084c34b6d', 300) AS ci_session_lock 
 Execution Time:0.2113151550293

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'a2f4ab5a06f1ddf18d032ceb9fc995b65e61e579' 
 Execution Time:0.00024199485778809

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.0006868839263916

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '9'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00064706802368164

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'a2f4ab5a06f1ddf18d032ceb9fc995b65e61e579' 
 Execution Time:0.00039315223693848

-------------------------------------
SELECT GET_LOCK('797fd0ed5b79ded9536b06d084c34b6d', 300) AS ci_session_lock 
 Execution Time:0.00021600723266602

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'a2f4ab5a06f1ddf18d032ceb9fc995b65e61e579' 
 Execution Time:0.00022506713867188

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00032711029052734

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'a2f4ab5a06f1ddf18d032ceb9fc995b65e61e579' 
 Execution Time:0.0022990703582764

-------------------------------------
SELECT GET_LOCK('797fd0ed5b79ded9536b06d084c34b6d', 300) AS ci_session_lock 
 Execution Time:0.00021505355834961

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'a2f4ab5a06f1ddf18d032ceb9fc995b65e61e579' 
 Execution Time:0.00034117698669434

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '10' 
 Execution Time:0.00034594535827637

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00026798248291016

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '10', 'd5785530669f4c220805996bc8b5bc6a') 
 Execution Time:0.001183032989502

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '10' 
 Execution Time:0.00026297569274902

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00024199485778809

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00031089782714844

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'a2f4ab5a06f1ddf18d032ceb9fc995b65e61e579' 
 Execution Time:0.0012578964233398

-------------------------------------
SELECT GET_LOCK('797fd0ed5b79ded9536b06d084c34b6d', 300) AS ci_session_lock 
 Execution Time:0.00049400329589844

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'a2f4ab5a06f1ddf18d032ceb9fc995b65e61e579' 
 Execution Time:0.00028681755065918

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00033402442932129

-------------------------------------
UPDATE `user_answers_temp` SET `status` = 'not_answered'
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00098705291748047

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'a2f4ab5a06f1ddf18d032ceb9fc995b65e61e579' 
 Execution Time:0.00028204917907715

-------------------------------------
SELECT GET_LOCK('797fd0ed5b79ded9536b06d084c34b6d', 300) AS ci_session_lock 
 Execution Time:0.00015687942504883

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'a2f4ab5a06f1ddf18d032ceb9fc995b65e61e579' 
 Execution Time:0.00019502639770508

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00031208992004395

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00019502639770508

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '11', 'd5785530669f4c220805996bc8b5bc6a') 
 Execution Time:0.073148012161255

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00054097175598145

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00095486640930176

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00078797340393066

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'a2f4ab5a06f1ddf18d032ceb9fc995b65e61e579' 
 Execution Time:0.00025010108947754

-------------------------------------
SELECT GET_LOCK('797fd0ed5b79ded9536b06d084c34b6d', 300) AS ci_session_lock 
 Execution Time:0.00014400482177734

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'a2f4ab5a06f1ddf18d032ceb9fc995b65e61e579' 
 Execution Time:0.0001828670501709

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00034999847412109

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '11'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00026416778564453

-------------------------------------
UPDATE `user_answers_temp` SET `answer` = 'no', `status` = 'true'
WHERE `id` = '87' 
 Execution Time:0.0053360462188721

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'a2f4ab5a06f1ddf18d032ceb9fc995b65e61e579' 
 Execution Time:0.00017690658569336

-------------------------------------
SELECT GET_LOCK('797fd0ed5b79ded9536b06d084c34b6d', 300) AS ci_session_lock 
 Execution Time:0.029966115951538

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'a2f4ab5a06f1ddf18d032ceb9fc995b65e61e579' 
 Execution Time:0.00025415420532227

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00069999694824219

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '11'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.0014448165893555

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'a2f4ab5a06f1ddf18d032ceb9fc995b65e61e579' 
 Execution Time:0.00058984756469727

-------------------------------------
SELECT GET_LOCK('797fd0ed5b79ded9536b06d084c34b6d', 300) AS ci_session_lock 
 Execution Time:0.00020003318786621

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'a2f4ab5a06f1ddf18d032ceb9fc995b65e61e579' 
 Execution Time:0.00022792816162109

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00033211708068848

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'a2f4ab5a06f1ddf18d032ceb9fc995b65e61e579' 
 Execution Time:0.00028109550476074

-------------------------------------
SELECT GET_LOCK('797fd0ed5b79ded9536b06d084c34b6d', 300) AS ci_session_lock 
 Execution Time:0.0001370906829834

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'a2f4ab5a06f1ddf18d032ceb9fc995b65e61e579' 
 Execution Time:0.00016498565673828

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '12' 
 Execution Time:0.00029802322387695

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00020813941955566

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '12', 'd5785530669f4c220805996bc8b5bc6a') 
 Execution Time:0.0029301643371582

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '12' 
 Execution Time:0.00098705291748047

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00061488151550293

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00045084953308105

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'a2f4ab5a06f1ddf18d032ceb9fc995b65e61e579' 
 Execution Time:0.00040507316589355

-------------------------------------
SELECT GET_LOCK('797fd0ed5b79ded9536b06d084c34b6d', 300) AS ci_session_lock 
 Execution Time:0.00014901161193848

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'a2f4ab5a06f1ddf18d032ceb9fc995b65e61e579' 
 Execution Time:0.00019502639770508

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '12'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00058221817016602

-------------------------------------
UPDATE `user_answers_temp` SET `answer` = '{\"answer_3\":\"incorrect\"}', `status` = 'both'
WHERE `id` = '88' 
 Execution Time:0.039833068847656

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'a2f4ab5a06f1ddf18d032ceb9fc995b65e61e579' 
 Execution Time:0.00028014183044434

-------------------------------------
SELECT GET_LOCK('797fd0ed5b79ded9536b06d084c34b6d', 300) AS ci_session_lock 
 Execution Time:0.0001380443572998

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'a2f4ab5a06f1ddf18d032ceb9fc995b65e61e579' 
 Execution Time:0.00017905235290527

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '12'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00029516220092773

-------------------------------------
UPDATE `user_answers_temp` SET `answer` = '{\"answer_3\":\"incorrect\",\"answer_2\":\"correct\"}', `status` = 'both'
WHERE `id` = '88' 
 Execution Time:0.071254014968872

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'a2f4ab5a06f1ddf18d032ceb9fc995b65e61e579' 
 Execution Time:0.00032186508178711

-------------------------------------
SELECT GET_LOCK('797fd0ed5b79ded9536b06d084c34b6d', 300) AS ci_session_lock 
 Execution Time:0.00012993812561035

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'a2f4ab5a06f1ddf18d032ceb9fc995b65e61e579' 
 Execution Time:0.00018501281738281

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '12'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00041890144348145

-------------------------------------
UPDATE `user_answers_temp` SET `answer` = '{\"answer_3\":\"incorrect\",\"answer_2\":\"correct\",\"answer_4\":\"incorrect\"}', `status` = 'both'
WHERE `id` = '88' 
 Execution Time:0.049866914749146

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'a2f4ab5a06f1ddf18d032ceb9fc995b65e61e579' 
 Execution Time:0.00027298927307129

-------------------------------------
SELECT GET_LOCK('797fd0ed5b79ded9536b06d084c34b6d', 300) AS ci_session_lock 
 Execution Time:0.00016188621520996

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'a2f4ab5a06f1ddf18d032ceb9fc995b65e61e579' 
 Execution Time:0.00017786026000977

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '12'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00036096572875977

-------------------------------------
UPDATE `user_answers_temp` SET `answer` = '{\"answer_3\":\"incorrect\",\"answer_2\":\"correct\",\"answer_4\":\"incorrect\",\"answer_1\":\"incorrect\"}', `status` = 'both'
WHERE `id` = '88' 
 Execution Time:0.0024440288543701

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'a2f4ab5a06f1ddf18d032ceb9fc995b65e61e579' 
 Execution Time:0.00042295455932617

-------------------------------------
SELECT GET_LOCK('797fd0ed5b79ded9536b06d084c34b6d', 300) AS ci_session_lock 
 Execution Time:0.00021696090698242

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'a2f4ab5a06f1ddf18d032ceb9fc995b65e61e579' 
 Execution Time:0.00029492378234863

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '12' 
 Execution Time:0.00034809112548828

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00045394897460938

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '12' 
 Execution Time:0.00029611587524414

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.0011608600616455

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00041508674621582

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'a2f4ab5a06f1ddf18d032ceb9fc995b65e61e579' 
 Execution Time:0.00029897689819336

-------------------------------------
SELECT GET_LOCK('797fd0ed5b79ded9536b06d084c34b6d', 300) AS ci_session_lock 
 Execution Time:0.00013589859008789

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'a2f4ab5a06f1ddf18d032ceb9fc995b65e61e579' 
 Execution Time:0.00016498565673828

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00031900405883789

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'a2f4ab5a06f1ddf18d032ceb9fc995b65e61e579' 
 Execution Time:0.0002748966217041

-------------------------------------
SELECT GET_LOCK('797fd0ed5b79ded9536b06d084c34b6d', 300) AS ci_session_lock 
 Execution Time:0.00010395050048828

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'a2f4ab5a06f1ddf18d032ceb9fc995b65e61e579' 
 Execution Time:0.00015783309936523

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1675094321, `data` = '__ci_last_regenerate|i:1675094321;user_info|O:8:\"stdClass\":13:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:13:\"user_language\";s:1:\"2\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-11-14 19:33:55\";}site_lang|s:5:\"dutch\";topic_id|s:1:\"2\";test_hash|s:32:\"d5785530669f4c220805996bc8b5bc6a\";questions_count|a:6:{i:0;s:1:\"8\";i:1;s:1:\"9\";i:2;s:2:\"10\";i:3;s:2:\"11\";i:4;s:2:\"12\";i:5;s:2:\"13\";}'
WHERE `id` = 'a2f4ab5a06f1ddf18d032ceb9fc995b65e61e579' 
 Execution Time:0.026211023330688

-------------------------------------
SELECT RELEASE_LOCK('797fd0ed5b79ded9536b06d084c34b6d') AS ci_session_lock 
 Execution Time:0.00019097328186035

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'fa27845e9469693a4616cb7c0e5d55ccdadfc03c' 
 Execution Time:0.00029206275939941

-------------------------------------
SELECT GET_LOCK('27eb81a68d2b7aa0913a20cd11da1a08', 300) AS ci_session_lock 
 Execution Time:0.00013113021850586

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '1e36b4a1967ef8be5c85d2fd9b2abe63cd9360cd' 
 Execution Time:0.00027203559875488

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '13' 
 Execution Time:0.00036382675170898

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00029492378234863

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '13', 'd5785530669f4c220805996bc8b5bc6a') 
 Execution Time:0.01793909072876

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '13' 
 Execution Time:0.00038814544677734

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00032615661621094

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00023198127746582

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '1e36b4a1967ef8be5c85d2fd9b2abe63cd9360cd' 
 Execution Time:0.00043416023254395

-------------------------------------
SELECT GET_LOCK('27eb81a68d2b7aa0913a20cd11da1a08', 300) AS ci_session_lock 
 Execution Time:0.00053882598876953

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '1e36b4a1967ef8be5c85d2fd9b2abe63cd9360cd' 
 Execution Time:0.00039887428283691

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '12' 
 Execution Time:0.00055313110351562

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00032711029052734

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '12' 
 Execution Time:0.00035309791564941

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00050497055053711

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.0002899169921875

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '1e36b4a1967ef8be5c85d2fd9b2abe63cd9360cd' 
 Execution Time:0.00031495094299316

-------------------------------------
SELECT GET_LOCK('27eb81a68d2b7aa0913a20cd11da1a08', 300) AS ci_session_lock 
 Execution Time:0.00023412704467773

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '1e36b4a1967ef8be5c85d2fd9b2abe63cd9360cd' 
 Execution Time:0.00095510482788086

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '13' 
 Execution Time:0.00041604042053223

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00024700164794922

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '13' 
 Execution Time:0.00021600723266602

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00017094612121582

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00020694732666016

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '1e36b4a1967ef8be5c85d2fd9b2abe63cd9360cd' 
 Execution Time:0.00031900405883789

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '1e36b4a1967ef8be5c85d2fd9b2abe63cd9360cd' 
 Execution Time:0.0003199577331543

-------------------------------------
SELECT GET_LOCK('27eb81a68d2b7aa0913a20cd11da1a08', 300) AS ci_session_lock 
 Execution Time:0.00020790100097656

-------------------------------------
SELECT GET_LOCK('27eb81a68d2b7aa0913a20cd11da1a08', 300) AS ci_session_lock 
 Execution Time:0.055423974990845

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '1e36b4a1967ef8be5c85d2fd9b2abe63cd9360cd' 
 Execution Time:0.00019097328186035

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '13' 
 Execution Time:0.00064682960510254

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00048589706420898

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '13' 
 Execution Time:0.00030899047851562

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.0007929801940918

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00037598609924316

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '1e36b4a1967ef8be5c85d2fd9b2abe63cd9360cd' 
 Execution Time:0.00021982192993164

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1675094677, `data` = '__ci_last_regenerate|i:1675094677;user_info|O:8:\"stdClass\":13:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:13:\"user_language\";s:1:\"2\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-11-14 19:33:55\";}site_lang|s:5:\"dutch\";topic_id|s:1:\"2\";test_hash|s:32:\"d5785530669f4c220805996bc8b5bc6a\";questions_count|a:6:{i:0;s:1:\"8\";i:1;s:1:\"9\";i:2;s:2:\"10\";i:3;s:2:\"11\";i:4;s:2:\"12\";i:5;s:2:\"13\";}'
WHERE `id` = '1e36b4a1967ef8be5c85d2fd9b2abe63cd9360cd' 
 Execution Time:0.054421186447144

-------------------------------------
SELECT RELEASE_LOCK('27eb81a68d2b7aa0913a20cd11da1a08') AS ci_session_lock 
 Execution Time:0.00017309188842773

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'd52a38f9eeb3bea929a6ba091f67a7a422648e58' 
 Execution Time:0.00022387504577637

-------------------------------------
SELECT GET_LOCK('fbf17b9e61a1e6404f5cb4fba25ba745', 300) AS ci_session_lock 
 Execution Time:9.608268737793E-5

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '35650931aa2ab6a2a3ee472035caaf88b5313ef7' 
 Execution Time:0.0001380443572998

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '13' 
 Execution Time:0.00052213668823242

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00050783157348633

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '13' 
 Execution Time:0.00043201446533203

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00092887878417969

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.0003669261932373

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '1e36b4a1967ef8be5c85d2fd9b2abe63cd9360cd' 
 Execution Time:0.00028085708618164

-------------------------------------
SELECT GET_LOCK('27eb81a68d2b7aa0913a20cd11da1a08', 300) AS ci_session_lock 
 Execution Time:0.00013995170593262

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '1e36b4a1967ef8be5c85d2fd9b2abe63cd9360cd' 
 Execution Time:0.00018191337585449

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '13' 
 Execution Time:0.00041508674621582

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00032901763916016

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '13' 
 Execution Time:0.00026702880859375

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00030112266540527

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00036787986755371

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '1e36b4a1967ef8be5c85d2fd9b2abe63cd9360cd' 
 Execution Time:0.00027894973754883

-------------------------------------
SELECT GET_LOCK('27eb81a68d2b7aa0913a20cd11da1a08', 300) AS ci_session_lock 
 Execution Time:0.00014209747314453

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '1e36b4a1967ef8be5c85d2fd9b2abe63cd9360cd' 
 Execution Time:0.00021791458129883

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '13' 
 Execution Time:0.00075292587280273

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.0010459423065186

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '13' 
 Execution Time:0.00062799453735352

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00055313110351562

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00029397010803223

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '1e36b4a1967ef8be5c85d2fd9b2abe63cd9360cd' 
 Execution Time:0.00034213066101074

-------------------------------------
SELECT GET_LOCK('27eb81a68d2b7aa0913a20cd11da1a08', 300) AS ci_session_lock 
 Execution Time:0.00022602081298828

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '1e36b4a1967ef8be5c85d2fd9b2abe63cd9360cd' 
 Execution Time:0.00043010711669922

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1675095056, `data` = '__ci_last_regenerate|i:1675095056;user_info|O:8:\"stdClass\":13:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:13:\"user_language\";s:1:\"2\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-11-14 19:33:55\";}site_lang|s:5:\"dutch\";topic_id|s:1:\"2\";test_hash|s:32:\"d5785530669f4c220805996bc8b5bc6a\";questions_count|a:6:{i:0;s:1:\"8\";i:1;s:1:\"9\";i:2;s:2:\"10\";i:3;s:2:\"11\";i:4;s:2:\"12\";i:5;s:2:\"13\";}'
WHERE `id` = '1e36b4a1967ef8be5c85d2fd9b2abe63cd9360cd' 
 Execution Time:0.11207008361816

-------------------------------------
SELECT RELEASE_LOCK('27eb81a68d2b7aa0913a20cd11da1a08') AS ci_session_lock 
 Execution Time:0.0003349781036377

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '35be07552be39f26c1756d049d24d6a348e4cb80' 
 Execution Time:0.00035405158996582

-------------------------------------
SELECT GET_LOCK('6f0052cbe16525b8ddbe4c306fb6a67f', 300) AS ci_session_lock 
 Execution Time:0.00014901161193848

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '7ee237b3e834ac34595ee6dc670fa65bd49c2369' 
 Execution Time:0.00086283683776855

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '13' 
 Execution Time:0.00034189224243164

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00023317337036133

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '13' 
 Execution Time:0.00018596649169922

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00020384788513184

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00025296211242676

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '7ee237b3e834ac34595ee6dc670fa65bd49c2369' 
 Execution Time:0.00027704238891602

-------------------------------------
SELECT GET_LOCK('6f0052cbe16525b8ddbe4c306fb6a67f', 300) AS ci_session_lock 
 Execution Time:0.00011992454528809

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '7ee237b3e834ac34595ee6dc670fa65bd49c2369' 
 Execution Time:0.00015902519226074

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '13' 
 Execution Time:0.00038886070251465

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00046801567077637

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '13' 
 Execution Time:0.0010430812835693

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00054788589477539

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00028085708618164

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '7ee237b3e834ac34595ee6dc670fa65bd49c2369' 
 Execution Time:0.00029587745666504

-------------------------------------
SELECT GET_LOCK('6f0052cbe16525b8ddbe4c306fb6a67f', 300) AS ci_session_lock 
 Execution Time:0.00013613700866699

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '7ee237b3e834ac34595ee6dc670fa65bd49c2369' 
 Execution Time:0.00025200843811035

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '13'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00032281875610352

-------------------------------------
UPDATE `user_answers_temp` SET `answer` = '{\"answer_3\":\"incorrect\"}', `status` = 'both'
WHERE `id` = '89' 
 Execution Time:0.0024950504302979

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '7ee237b3e834ac34595ee6dc670fa65bd49c2369' 
 Execution Time:0.00049209594726562

-------------------------------------
SELECT GET_LOCK('6f0052cbe16525b8ddbe4c306fb6a67f', 300) AS ci_session_lock 
 Execution Time:0.00018811225891113

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '7ee237b3e834ac34595ee6dc670fa65bd49c2369' 
 Execution Time:0.00032806396484375

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '13'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00037407875061035

-------------------------------------
UPDATE `user_answers_temp` SET `answer` = '{\"answer_3\":\"incorrect\",\"answer_1\":\"incorrect\"}', `status` = 'both'
WHERE `id` = '89' 
 Execution Time:0.0026459693908691

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '7ee237b3e834ac34595ee6dc670fa65bd49c2369' 
 Execution Time:0.00052595138549805

-------------------------------------
SELECT GET_LOCK('6f0052cbe16525b8ddbe4c306fb6a67f', 300) AS ci_session_lock 
 Execution Time:0.00029993057250977

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '7ee237b3e834ac34595ee6dc670fa65bd49c2369' 
 Execution Time:0.0011560916900635

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '13'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.0036499500274658

-------------------------------------
UPDATE `user_answers_temp` SET `answer` = '{\"answer_3\":\"incorrect\",\"answer_1\":\"incorrect\",\"answer_2\":\"correct\"}', `status` = 'both'
WHERE `id` = '89' 
 Execution Time:0.0030210018157959

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '7ee237b3e834ac34595ee6dc670fa65bd49c2369' 
 Execution Time:0.00034189224243164

-------------------------------------
SELECT GET_LOCK('6f0052cbe16525b8ddbe4c306fb6a67f', 300) AS ci_session_lock 
 Execution Time:0.00015997886657715

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '7ee237b3e834ac34595ee6dc670fa65bd49c2369' 
 Execution Time:0.00021004676818848

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '13'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.0003509521484375

-------------------------------------
UPDATE `user_answers_temp` SET `answer` = '{\"answer_3\":\"incorrect\",\"answer_1\":\"incorrect\",\"answer_2\":\"correct\",\"answer_4\":\"incorrect\"}', `status` = 'both'
WHERE `id` = '89' 
 Execution Time:0.0023260116577148

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '7ee237b3e834ac34595ee6dc670fa65bd49c2369' 
 Execution Time:0.00029611587524414

-------------------------------------
SELECT GET_LOCK('6f0052cbe16525b8ddbe4c306fb6a67f', 300) AS ci_session_lock 
 Execution Time:0.0001370906829834

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '7ee237b3e834ac34595ee6dc670fa65bd49c2369' 
 Execution Time:0.00018095970153809

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1675095698, `data` = '__ci_last_regenerate|i:1675095698;user_info|O:8:\"stdClass\":13:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:13:\"user_language\";s:1:\"2\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-11-14 19:33:55\";}site_lang|s:5:\"dutch\";topic_id|s:1:\"2\";test_hash|s:32:\"d5785530669f4c220805996bc8b5bc6a\";questions_count|a:6:{i:0;s:1:\"8\";i:1;s:1:\"9\";i:2;s:2:\"10\";i:3;s:2:\"11\";i:4;s:2:\"12\";i:5;s:2:\"13\";}'
WHERE `id` = '7ee237b3e834ac34595ee6dc670fa65bd49c2369' 
 Execution Time:0.092819213867188

-------------------------------------
SELECT RELEASE_LOCK('6f0052cbe16525b8ddbe4c306fb6a67f') AS ci_session_lock 
 Execution Time:0.0001680850982666

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '50213df1609f2982442d3bf49b10804d09db3299' 
 Execution Time:0.00023412704467773

-------------------------------------
SELECT GET_LOCK('add65b325a16e6fd86964f7754b204ed', 300) AS ci_session_lock 
 Execution Time:0.00011014938354492

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '21bfccaf85258bdbec1835ea9e0147d51f2ff1e9' 
 Execution Time:0.00023102760314941

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '13' 
 Execution Time:0.00054597854614258

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00033116340637207

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '13' 
 Execution Time:0.0002281665802002

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00033998489379883

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00029397010803223

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '21bfccaf85258bdbec1835ea9e0147d51f2ff1e9' 
 Execution Time:0.0010809898376465

-------------------------------------
SELECT GET_LOCK('add65b325a16e6fd86964f7754b204ed', 300) AS ci_session_lock 
 Execution Time:0.00020813941955566

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '21bfccaf85258bdbec1835ea9e0147d51f2ff1e9' 
 Execution Time:0.00025510787963867

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '13' 
 Execution Time:0.00031185150146484

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00020694732666016

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '13' 
 Execution Time:0.00019598007202148

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.0001981258392334

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00020098686218262

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'fed732540e95ab092b2b0f6ed3dd3844d9a50a9b' 
 Execution Time:0.00032520294189453

-------------------------------------
SELECT GET_LOCK('d7f4445847a374be46daadd49445bf03', 300) AS ci_session_lock 
 Execution Time:0.00016307830810547

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'fed732540e95ab092b2b0f6ed3dd3844d9a50a9b' 
 Execution Time:0.0001978874206543

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1675098339, `data` = '__ci_last_regenerate|i:1675098339;user_info|O:8:\"stdClass\":13:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:13:\"user_language\";s:1:\"2\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-11-14 19:33:55\";}site_lang|s:5:\"dutch\";topic_id|s:1:\"2\";test_hash|s:32:\"d5785530669f4c220805996bc8b5bc6a\";questions_count|a:6:{i:0;s:1:\"8\";i:1;s:1:\"9\";i:2;s:2:\"10\";i:3;s:2:\"11\";i:4;s:2:\"12\";i:5;s:2:\"13\";}'
WHERE `id` = 'fed732540e95ab092b2b0f6ed3dd3844d9a50a9b' 
 Execution Time:0.020675897598267

-------------------------------------
SELECT RELEASE_LOCK('d7f4445847a374be46daadd49445bf03') AS ci_session_lock 
 Execution Time:0.00020694732666016

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'a6345563b38ae94b02ecf7935eb39a313651d1e2' 
 Execution Time:0.00026082992553711

-------------------------------------
SELECT GET_LOCK('597485a6a9b59ec6741495c088aafe26', 300) AS ci_session_lock 
 Execution Time:0.00015401840209961

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'e806895ffc780cc02072d43d15c9305e35b96665' 
 Execution Time:0.0001838207244873

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '13' 
 Execution Time:0.00045108795166016

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00029921531677246

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '13' 
 Execution Time:0.00023603439331055

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00026106834411621

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00040793418884277

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'e806895ffc780cc02072d43d15c9305e35b96665' 
 Execution Time:0.00052809715270996

-------------------------------------
SELECT GET_LOCK('597485a6a9b59ec6741495c088aafe26', 300) AS ci_session_lock 
 Execution Time:0.00025606155395508

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'e806895ffc780cc02072d43d15c9305e35b96665' 
 Execution Time:0.00032305717468262

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '13' 
 Execution Time:0.00060009956359863

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.0004119873046875

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '13' 
 Execution Time:0.00040698051452637

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00039005279541016

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00043988227844238

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'e806895ffc780cc02072d43d15c9305e35b96665' 
 Execution Time:0.00032806396484375

-------------------------------------
SELECT GET_LOCK('597485a6a9b59ec6741495c088aafe26', 300) AS ci_session_lock 
 Execution Time:0.00027203559875488

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'e806895ffc780cc02072d43d15c9305e35b96665' 
 Execution Time:0.00034689903259277

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00033998489379883

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'e806895ffc780cc02072d43d15c9305e35b96665' 
 Execution Time:0.00030899047851562

-------------------------------------
SELECT GET_LOCK('597485a6a9b59ec6741495c088aafe26', 300) AS ci_session_lock 
 Execution Time:0.00016999244689941

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'e806895ffc780cc02072d43d15c9305e35b96665' 
 Execution Time:0.00022697448730469

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1675098765, `data` = '__ci_last_regenerate|i:1675098765;user_info|O:8:\"stdClass\":13:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:13:\"user_language\";s:1:\"2\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-11-14 19:33:55\";}site_lang|s:5:\"dutch\";topic_id|s:1:\"2\";test_hash|s:32:\"d5785530669f4c220805996bc8b5bc6a\";questions_count|a:6:{i:0;s:1:\"8\";i:1;s:1:\"9\";i:2;s:2:\"10\";i:3;s:2:\"11\";i:4;s:2:\"12\";i:5;s:2:\"13\";}'
WHERE `id` = 'e806895ffc780cc02072d43d15c9305e35b96665' 
 Execution Time:0.11152601242065

-------------------------------------
SELECT RELEASE_LOCK('597485a6a9b59ec6741495c088aafe26') AS ci_session_lock 
 Execution Time:0.00020003318786621

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '8013608ab03b1452ed8a66e18ee25d24af2562f0' 
 Execution Time:0.00030899047851562

-------------------------------------
SELECT GET_LOCK('37572e2b3ee5206c4074c4dc79f67a7f', 300) AS ci_session_lock 
 Execution Time:0.0002140998840332

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2e4182ad45c26c17d17a746ae6cb6ab5cb5a5cc7' 
 Execution Time:0.00029397010803223

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00059890747070312

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00031805038452148

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2e4182ad45c26c17d17a746ae6cb6ab5cb5a5cc7' 
 Execution Time:0.00028800964355469

-------------------------------------
SELECT GET_LOCK('37572e2b3ee5206c4074c4dc79f67a7f', 300) AS ci_session_lock 
 Execution Time:0.00019598007202148

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2e4182ad45c26c17d17a746ae6cb6ab5cb5a5cc7' 
 Execution Time:0.00025391578674316

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00063896179199219

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00030708312988281

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2e4182ad45c26c17d17a746ae6cb6ab5cb5a5cc7' 
 Execution Time:0.00035285949707031

-------------------------------------
SELECT GET_LOCK('37572e2b3ee5206c4074c4dc79f67a7f', 300) AS ci_session_lock 
 Execution Time:0.00018596649169922

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2e4182ad45c26c17d17a746ae6cb6ab5cb5a5cc7' 
 Execution Time:0.00022101402282715

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00032782554626465

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00022292137145996

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2e4182ad45c26c17d17a746ae6cb6ab5cb5a5cc7' 
 Execution Time:0.00033187866210938

-------------------------------------
SELECT GET_LOCK('37572e2b3ee5206c4074c4dc79f67a7f', 300) AS ci_session_lock 
 Execution Time:0.00022196769714355

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2e4182ad45c26c17d17a746ae6cb6ab5cb5a5cc7' 
 Execution Time:0.00026202201843262

-------------------------------------
SELECT *
FROM `languages`
WHERE `en_lang_name` = 'Dutch' 
 Execution Time:0.00027704238891602

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `status` = 'active'
AND `language_id` = '1' 
 Execution Time:0.018358945846558

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00028491020202637

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2e4182ad45c26c17d17a746ae6cb6ab5cb5a5cc7' 
 Execution Time:0.00034594535827637

-------------------------------------
SELECT GET_LOCK('37572e2b3ee5206c4074c4dc79f67a7f', 300) AS ci_session_lock 
 Execution Time:0.00038599967956543

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2e4182ad45c26c17d17a746ae6cb6ab5cb5a5cc7' 
 Execution Time:0.00043106079101562

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `id` = '2'
AND `status` = 'active' 
 Execution Time:0.0037951469421387

-------------------------------------
SELECT `id`
FROM `questions`
WHERE `topic_id` = '2'
AND `status` = 'active'
ORDER BY `id` ASC
 LIMIT 1 
 Execution Time:0.069284200668335

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00042295455932617

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2e4182ad45c26c17d17a746ae6cb6ab5cb5a5cc7' 
 Execution Time:0.00030398368835449

-------------------------------------
SELECT GET_LOCK('37572e2b3ee5206c4074c4dc79f67a7f', 300) AS ci_session_lock 
 Execution Time:0.0001380443572998

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2e4182ad45c26c17d17a746ae6cb6ab5cb5a5cc7' 
 Execution Time:0.00016498565673828

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.00027203559875488

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00022006034851074

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00016903877258301

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00016307830810547

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.0011789798736572

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2e4182ad45c26c17d17a746ae6cb6ab5cb5a5cc7' 
 Execution Time:0.00035691261291504

-------------------------------------
SELECT GET_LOCK('37572e2b3ee5206c4074c4dc79f67a7f', 300) AS ci_session_lock 
 Execution Time:0.00025296211242676

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2e4182ad45c26c17d17a746ae6cb6ab5cb5a5cc7' 
 Execution Time:0.00034093856811523

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00041508674621582

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2e4182ad45c26c17d17a746ae6cb6ab5cb5a5cc7' 
 Execution Time:0.00034403800964355

-------------------------------------
SELECT GET_LOCK('37572e2b3ee5206c4074c4dc79f67a7f', 300) AS ci_session_lock 
 Execution Time:0.00017213821411133

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2e4182ad45c26c17d17a746ae6cb6ab5cb5a5cc7' 
 Execution Time:0.00021910667419434

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '9' 
 Execution Time:0.00029993057250977

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00022792816162109

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.00018811225891113

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00022983551025391

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00024199485778809

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2e4182ad45c26c17d17a746ae6cb6ab5cb5a5cc7' 
 Execution Time:0.00028586387634277

-------------------------------------
SELECT GET_LOCK('37572e2b3ee5206c4074c4dc79f67a7f', 300) AS ci_session_lock 
 Execution Time:0.00013613700866699

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2e4182ad45c26c17d17a746ae6cb6ab5cb5a5cc7' 
 Execution Time:0.00027585029602051

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00029706954956055

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2e4182ad45c26c17d17a746ae6cb6ab5cb5a5cc7' 
 Execution Time:0.00062084197998047

-------------------------------------
SELECT GET_LOCK('37572e2b3ee5206c4074c4dc79f67a7f', 300) AS ci_session_lock 
 Execution Time:0.00031614303588867

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2e4182ad45c26c17d17a746ae6cb6ab5cb5a5cc7' 
 Execution Time:0.00059604644775391

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '10' 
 Execution Time:0.00031805038452148

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00027084350585938

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '10' 
 Execution Time:0.00016307830810547

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.0001680850982666

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00019311904907227

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2e4182ad45c26c17d17a746ae6cb6ab5cb5a5cc7' 
 Execution Time:0.00027799606323242

-------------------------------------
SELECT GET_LOCK('37572e2b3ee5206c4074c4dc79f67a7f', 300) AS ci_session_lock 
 Execution Time:0.00013399124145508

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2e4182ad45c26c17d17a746ae6cb6ab5cb5a5cc7' 
 Execution Time:0.00021505355834961

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.01908802986145

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2e4182ad45c26c17d17a746ae6cb6ab5cb5a5cc7' 
 Execution Time:0.00038480758666992

-------------------------------------
SELECT GET_LOCK('37572e2b3ee5206c4074c4dc79f67a7f', 300) AS ci_session_lock 
 Execution Time:0.00025796890258789

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2e4182ad45c26c17d17a746ae6cb6ab5cb5a5cc7' 
 Execution Time:0.0003819465637207

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.03469705581665

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00045204162597656

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00034809112548828

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00040197372436523

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.0086829662322998

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2e4182ad45c26c17d17a746ae6cb6ab5cb5a5cc7' 
 Execution Time:0.00029897689819336

-------------------------------------
SELECT GET_LOCK('37572e2b3ee5206c4074c4dc79f67a7f', 300) AS ci_session_lock 
 Execution Time:0.0001828670501709

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2e4182ad45c26c17d17a746ae6cb6ab5cb5a5cc7' 
 Execution Time:0.00019311904907227

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00074601173400879

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2e4182ad45c26c17d17a746ae6cb6ab5cb5a5cc7' 
 Execution Time:0.0020031929016113

-------------------------------------
SELECT GET_LOCK('37572e2b3ee5206c4074c4dc79f67a7f', 300) AS ci_session_lock 
 Execution Time:0.00065708160400391

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2e4182ad45c26c17d17a746ae6cb6ab5cb5a5cc7' 
 Execution Time:0.00030398368835449

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '12' 
 Execution Time:0.00035595893859863

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00026321411132812

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '12' 
 Execution Time:0.00031089782714844

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00033402442932129

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00032591819763184

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2e4182ad45c26c17d17a746ae6cb6ab5cb5a5cc7' 
 Execution Time:0.00039005279541016

-------------------------------------
SELECT GET_LOCK('37572e2b3ee5206c4074c4dc79f67a7f', 300) AS ci_session_lock 
 Execution Time:0.0002739429473877

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2e4182ad45c26c17d17a746ae6cb6ab5cb5a5cc7' 
 Execution Time:0.00062799453735352

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00046801567077637

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2e4182ad45c26c17d17a746ae6cb6ab5cb5a5cc7' 
 Execution Time:0.00045490264892578

-------------------------------------
SELECT GET_LOCK('37572e2b3ee5206c4074c4dc79f67a7f', 300) AS ci_session_lock 
 Execution Time:0.00024604797363281

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2e4182ad45c26c17d17a746ae6cb6ab5cb5a5cc7' 
 Execution Time:0.00043010711669922

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '13' 
 Execution Time:0.00046014785766602

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00040292739868164

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '13' 
 Execution Time:0.0003058910369873

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00036191940307617

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00036907196044922

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2e4182ad45c26c17d17a746ae6cb6ab5cb5a5cc7' 
 Execution Time:0.00035810470581055

-------------------------------------
SELECT GET_LOCK('37572e2b3ee5206c4074c4dc79f67a7f', 300) AS ci_session_lock 
 Execution Time:0.00031495094299316

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2e4182ad45c26c17d17a746ae6cb6ab5cb5a5cc7' 
 Execution Time:0.00057005882263184

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00038290023803711

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00018191337585449

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2e4182ad45c26c17d17a746ae6cb6ab5cb5a5cc7' 
 Execution Time:0.070508003234863

-------------------------------------
SELECT GET_LOCK('37572e2b3ee5206c4074c4dc79f67a7f', 300) AS ci_session_lock 
 Execution Time:0.00027680397033691

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2e4182ad45c26c17d17a746ae6cb6ab5cb5a5cc7' 
 Execution Time:0.00030088424682617

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00041007995605469

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00031280517578125

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2e4182ad45c26c17d17a746ae6cb6ab5cb5a5cc7' 
 Execution Time:0.00053000450134277

-------------------------------------
SELECT GET_LOCK('37572e2b3ee5206c4074c4dc79f67a7f', 300) AS ci_session_lock 
 Execution Time:0.00027298927307129

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2e4182ad45c26c17d17a746ae6cb6ab5cb5a5cc7' 
 Execution Time:0.00026798248291016

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1675099203, `data` = '__ci_last_regenerate|i:1675099203;user_info|O:8:\"stdClass\":13:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:13:\"user_language\";s:1:\"2\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-11-14 19:33:55\";}site_lang|s:5:\"dutch\";topic_id|s:1:\"2\";test_hash|s:32:\"d5785530669f4c220805996bc8b5bc6a\";questions_count|a:6:{i:0;s:1:\"8\";i:1;s:1:\"9\";i:2;s:2:\"10\";i:3;s:2:\"11\";i:4;s:2:\"12\";i:5;s:2:\"13\";}'
WHERE `id` = '2e4182ad45c26c17d17a746ae6cb6ab5cb5a5cc7' 
 Execution Time:0.1472339630127

-------------------------------------
SELECT RELEASE_LOCK('37572e2b3ee5206c4074c4dc79f67a7f') AS ci_session_lock 
 Execution Time:0.00026988983154297

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'a8fe944704d41457d408661688c1a1af318ae94f' 
 Execution Time:0.0014238357543945

-------------------------------------
SELECT GET_LOCK('1ed3a75df734502ca2a731acca0850bf', 300) AS ci_session_lock 
 Execution Time:0.0010380744934082

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '0d1bc462491c71fc33ad6fd34dd398ba039d7eb6' 
 Execution Time:0.0003199577331543

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '13' 
 Execution Time:0.00045013427734375

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00091910362243652

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '13' 
 Execution Time:0.0010759830474854

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00124192237854

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00036096572875977

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '0d1bc462491c71fc33ad6fd34dd398ba039d7eb6' 
 Execution Time:0.00033783912658691

-------------------------------------
SELECT GET_LOCK('1ed3a75df734502ca2a731acca0850bf', 300) AS ci_session_lock 
 Execution Time:0.00023913383483887

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '0d1bc462491c71fc33ad6fd34dd398ba039d7eb6' 
 Execution Time:0.00050497055053711

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00046300888061523

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00050902366638184

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '0d1bc462491c71fc33ad6fd34dd398ba039d7eb6' 
 Execution Time:0.00027894973754883

-------------------------------------
SELECT GET_LOCK('1ed3a75df734502ca2a731acca0850bf', 300) AS ci_session_lock 
 Execution Time:0.00011706352233887

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '0d1bc462491c71fc33ad6fd34dd398ba039d7eb6' 
 Execution Time:0.00016689300537109

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '13' 
 Execution Time:0.00044107437133789

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00045013427734375

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '13' 
 Execution Time:0.00064611434936523

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00045299530029297

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00031089782714844

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '0d1bc462491c71fc33ad6fd34dd398ba039d7eb6' 
 Execution Time:0.00030803680419922

-------------------------------------
SELECT GET_LOCK('1ed3a75df734502ca2a731acca0850bf', 300) AS ci_session_lock 
 Execution Time:0.00014185905456543

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '0d1bc462491c71fc33ad6fd34dd398ba039d7eb6' 
 Execution Time:0.00018000602722168

-------------------------------------
SELECT *
FROM `languages`
WHERE `en_lang_name` = 'Dutch' 
 Execution Time:0.00027704238891602

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `status` = 'active'
AND `language_id` = '1' 
 Execution Time:0.015968084335327

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00062394142150879

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '0d1bc462491c71fc33ad6fd34dd398ba039d7eb6' 
 Execution Time:0.0003662109375

-------------------------------------
SELECT GET_LOCK('1ed3a75df734502ca2a731acca0850bf', 300) AS ci_session_lock 
 Execution Time:0.00020503997802734

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '0d1bc462491c71fc33ad6fd34dd398ba039d7eb6' 
 Execution Time:0.00025200843811035

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `id` = '2'
AND `status` = 'active' 
 Execution Time:0.00035500526428223

-------------------------------------
SELECT `id`
FROM `questions`
WHERE `topic_id` = '2'
AND `status` = 'active'
ORDER BY `id` ASC
 LIMIT 1 
 Execution Time:0.00037288665771484

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00035905838012695

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '0d1bc462491c71fc33ad6fd34dd398ba039d7eb6' 
 Execution Time:0.00033116340637207

-------------------------------------
SELECT GET_LOCK('1ed3a75df734502ca2a731acca0850bf', 300) AS ci_session_lock 
 Execution Time:0.00022387504577637

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '0d1bc462491c71fc33ad6fd34dd398ba039d7eb6' 
 Execution Time:0.00030612945556641

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1675099571, `data` = '__ci_last_regenerate|i:1675099571;user_info|O:8:\"stdClass\":13:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:13:\"user_language\";s:1:\"2\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-11-14 19:33:55\";}site_lang|s:5:\"dutch\";topic_id|s:1:\"2\";test_hash|s:32:\"d5785530669f4c220805996bc8b5bc6a\";questions_count|a:6:{i:0;s:1:\"8\";i:1;s:1:\"9\";i:2;s:2:\"10\";i:3;s:2:\"11\";i:4;s:2:\"12\";i:5;s:2:\"13\";}'
WHERE `id` = '0d1bc462491c71fc33ad6fd34dd398ba039d7eb6' 
 Execution Time:0.022279977798462

-------------------------------------
SELECT RELEASE_LOCK('1ed3a75df734502ca2a731acca0850bf') AS ci_session_lock 
 Execution Time:0.0001521110534668

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'c92bd9c2a3b527473b44401d6c5b88715abe6ac8' 
 Execution Time:0.00023078918457031

-------------------------------------
SELECT GET_LOCK('1d3e7c75592d32cf7f63c74c217d55ff', 300) AS ci_session_lock 
 Execution Time:0.0001060962677002

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'dae76101c7efbee660c190f26e937d476ed8d1c1' 
 Execution Time:0.00014781951904297

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_hash` = 'd5785530669f4c220805996bc8b5bc6a' 
 Execution Time:0.00045919418334961

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00039792060852051

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'dae76101c7efbee660c190f26e937d476ed8d1c1' 
 Execution Time:0.00033402442932129

-------------------------------------
SELECT GET_LOCK('1d3e7c75592d32cf7f63c74c217d55ff', 300) AS ci_session_lock 
 Execution Time:0.00017786026000977

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'dae76101c7efbee660c190f26e937d476ed8d1c1' 
 Execution Time:0.0002131462097168

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_hash` IS NULL 
 Execution Time:0.00037407875061035

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00020122528076172

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'dae76101c7efbee660c190f26e937d476ed8d1c1' 
 Execution Time:0.00031399726867676

-------------------------------------
SELECT GET_LOCK('1d3e7c75592d32cf7f63c74c217d55ff', 300) AS ci_session_lock 
 Execution Time:0.00012898445129395

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'dae76101c7efbee660c190f26e937d476ed8d1c1' 
 Execution Time:0.00019001960754395

-------------------------------------
SELECT *
FROM `languages`
WHERE `en_lang_name` = 'Dutch' 
 Execution Time:0.00032210350036621

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `status` = 'active'
AND `language_id` = '1' 
 Execution Time:0.00022697448730469

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00038790702819824

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'dae76101c7efbee660c190f26e937d476ed8d1c1' 
 Execution Time:0.00039291381835938

-------------------------------------
SELECT GET_LOCK('1d3e7c75592d32cf7f63c74c217d55ff', 300) AS ci_session_lock 
 Execution Time:0.0002131462097168

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'dae76101c7efbee660c190f26e937d476ed8d1c1' 
 Execution Time:0.00030994415283203

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `id` = '2'
AND `status` = 'active' 
 Execution Time:0.00048089027404785

-------------------------------------
SELECT `id`
FROM `questions`
WHERE `topic_id` = '2'
AND `status` = 'active'
ORDER BY `id` ASC
 LIMIT 1 
 Execution Time:0.0003969669342041

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.0027790069580078

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'dae76101c7efbee660c190f26e937d476ed8d1c1' 
 Execution Time:0.00074315071105957

-------------------------------------
SELECT GET_LOCK('1d3e7c75592d32cf7f63c74c217d55ff', 300) AS ci_session_lock 
 Execution Time:0.00028300285339355

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'dae76101c7efbee660c190f26e937d476ed8d1c1' 
 Execution Time:0.00040602684020996

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.00074291229248047

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '8', '08579f5065246f3c516d93e7a65b57de') 
 Execution Time:0.063577175140381

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00032210350036621

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '08579f5065246f3c516d93e7a65b57de' 
 Execution Time:0.00033307075500488

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.0003199577331543

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'dae76101c7efbee660c190f26e937d476ed8d1c1' 
 Execution Time:0.00034308433532715

-------------------------------------
SELECT GET_LOCK('1d3e7c75592d32cf7f63c74c217d55ff', 300) AS ci_session_lock 
 Execution Time:0.0001530647277832

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'dae76101c7efbee660c190f26e937d476ed8d1c1' 
 Execution Time:0.00021195411682129

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.00033903121948242

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '08579f5065246f3c516d93e7a65b57de' 
 Execution Time:0.00022292137145996

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00026798248291016

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '08579f5065246f3c516d93e7a65b57de' 
 Execution Time:0.0002138614654541

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.0003960132598877

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'dae76101c7efbee660c190f26e937d476ed8d1c1' 
 Execution Time:0.0017650127410889

-------------------------------------
SELECT GET_LOCK('1d3e7c75592d32cf7f63c74c217d55ff', 300) AS ci_session_lock 
 Execution Time:0.00022101402282715

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'dae76101c7efbee660c190f26e937d476ed8d1c1' 
 Execution Time:0.00026893615722656

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '08579f5065246f3c516d93e7a65b57de' 
 Execution Time:0.00059199333190918

-------------------------------------
UPDATE `user_answers_temp` SET `status` = 'not_answered'
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '08579f5065246f3c516d93e7a65b57de' 
 Execution Time:0.026780843734741

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'dae76101c7efbee660c190f26e937d476ed8d1c1' 
 Execution Time:0.00028800964355469

-------------------------------------
SELECT GET_LOCK('1d3e7c75592d32cf7f63c74c217d55ff', 300) AS ci_session_lock 
 Execution Time:0.00017499923706055

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'dae76101c7efbee660c190f26e937d476ed8d1c1' 
 Execution Time:0.00019097328186035

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '9' 
 Execution Time:0.00028109550476074

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '08579f5065246f3c516d93e7a65b57de' 
 Execution Time:0.00029683113098145

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '9', '08579f5065246f3c516d93e7a65b57de') 
 Execution Time:0.018573999404907

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.00066804885864258

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '08579f5065246f3c516d93e7a65b57de' 
 Execution Time:0.00091791152954102

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00040292739868164

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'dae76101c7efbee660c190f26e937d476ed8d1c1' 
 Execution Time:0.00032997131347656

-------------------------------------
SELECT GET_LOCK('1d3e7c75592d32cf7f63c74c217d55ff', 300) AS ci_session_lock 
 Execution Time:0.00024008750915527

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'dae76101c7efbee660c190f26e937d476ed8d1c1' 
 Execution Time:0.00032997131347656

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '08579f5065246f3c516d93e7a65b57de' 
 Execution Time:0.00046300888061523

-------------------------------------
UPDATE `user_answers_temp` SET `status` = 'not_answered'
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '08579f5065246f3c516d93e7a65b57de' 
 Execution Time:0.0017452239990234

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'dae76101c7efbee660c190f26e937d476ed8d1c1' 
 Execution Time:0.00098705291748047

-------------------------------------
SELECT GET_LOCK('1d3e7c75592d32cf7f63c74c217d55ff', 300) AS ci_session_lock 
 Execution Time:0.00026512145996094

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'dae76101c7efbee660c190f26e937d476ed8d1c1' 
 Execution Time:0.00062894821166992

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '10' 
 Execution Time:0.00038695335388184

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = '08579f5065246f3c516d93e7a65b57de' 
 Execution Time:0.00041699409484863

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '10', '08579f5065246f3c516d93e7a65b57de') 
 Execution Time:0.0011918544769287

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '10' 
 Execution Time:0.00025200843811035

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = '08579f5065246f3c516d93e7a65b57de' 
 Execution Time:0.00026392936706543

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00025105476379395

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'dae76101c7efbee660c190f26e937d476ed8d1c1' 
 Execution Time:0.00035381317138672

-------------------------------------
SELECT GET_LOCK('1d3e7c75592d32cf7f63c74c217d55ff', 300) AS ci_session_lock 
 Execution Time:0.00020909309387207

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'dae76101c7efbee660c190f26e937d476ed8d1c1' 
 Execution Time:0.00026512145996094

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = '08579f5065246f3c516d93e7a65b57de' 
 Execution Time:0.00051498413085938

-------------------------------------
UPDATE `user_answers_temp` SET `status` = 'not_answered'
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = '08579f5065246f3c516d93e7a65b57de' 
 Execution Time:0.0021929740905762

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'dae76101c7efbee660c190f26e937d476ed8d1c1' 
 Execution Time:0.0002899169921875

-------------------------------------
SELECT GET_LOCK('1d3e7c75592d32cf7f63c74c217d55ff', 300) AS ci_session_lock 
 Execution Time:0.00013184547424316

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'dae76101c7efbee660c190f26e937d476ed8d1c1' 
 Execution Time:0.00018906593322754

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00039196014404297

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '08579f5065246f3c516d93e7a65b57de' 
 Execution Time:0.00028395652770996

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '11', '08579f5065246f3c516d93e7a65b57de') 
 Execution Time:0.00094509124755859

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00081896781921387

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '08579f5065246f3c516d93e7a65b57de' 
 Execution Time:0.00050020217895508

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00037598609924316

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'dae76101c7efbee660c190f26e937d476ed8d1c1' 
 Execution Time:0.00038909912109375

-------------------------------------
SELECT GET_LOCK('1d3e7c75592d32cf7f63c74c217d55ff', 300) AS ci_session_lock 
 Execution Time:0.00025582313537598

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'dae76101c7efbee660c190f26e937d476ed8d1c1' 
 Execution Time:0.00026798248291016

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '08579f5065246f3c516d93e7a65b57de' 
 Execution Time:0.0004580020904541

-------------------------------------
UPDATE `user_answers_temp` SET `status` = 'not_answered'
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '08579f5065246f3c516d93e7a65b57de' 
 Execution Time:0.006976842880249

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'dae76101c7efbee660c190f26e937d476ed8d1c1' 
 Execution Time:0.00036001205444336

-------------------------------------
SELECT GET_LOCK('1d3e7c75592d32cf7f63c74c217d55ff', 300) AS ci_session_lock 
 Execution Time:0.0001981258392334

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'dae76101c7efbee660c190f26e937d476ed8d1c1' 
 Execution Time:0.00022697448730469

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '12' 
 Execution Time:0.00033187866210938

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = '08579f5065246f3c516d93e7a65b57de' 
 Execution Time:0.00026106834411621

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '12', '08579f5065246f3c516d93e7a65b57de') 
 Execution Time:0.035245180130005

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '12' 
 Execution Time:0.0002748966217041

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = '08579f5065246f3c516d93e7a65b57de' 
 Execution Time:0.00056314468383789

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00027608871459961

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'dae76101c7efbee660c190f26e937d476ed8d1c1' 
 Execution Time:0.0005180835723877

-------------------------------------
SELECT GET_LOCK('1d3e7c75592d32cf7f63c74c217d55ff', 300) AS ci_session_lock 
 Execution Time:0.00030803680419922

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'dae76101c7efbee660c190f26e937d476ed8d1c1' 
 Execution Time:0.0003960132598877

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1675100356, `data` = '__ci_last_regenerate|i:1675100356;user_info|O:8:\"stdClass\":13:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:13:\"user_language\";s:1:\"2\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-11-14 19:33:55\";}site_lang|s:5:\"dutch\";topic_id|s:1:\"2\";questions_count|a:6:{i:0;s:1:\"8\";i:1;s:1:\"9\";i:2;s:2:\"10\";i:3;s:2:\"11\";i:4;s:2:\"12\";i:5;s:2:\"13\";}test_hash|s:32:\"08579f5065246f3c516d93e7a65b57de\";'
WHERE `id` = 'dae76101c7efbee660c190f26e937d476ed8d1c1' 
 Execution Time:0.075886011123657

-------------------------------------
SELECT RELEASE_LOCK('1d3e7c75592d32cf7f63c74c217d55ff') AS ci_session_lock 
 Execution Time:0.00018095970153809

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '16477e223e6f86761e99c6ecc5d8bc2de8446acc' 
 Execution Time:0.00022101402282715

-------------------------------------
SELECT GET_LOCK('2158bb26a07f25c67c81af2fa0928a45', 300) AS ci_session_lock 
 Execution Time:0.00014615058898926

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'd71c41f02254deaa230bd694eb0b77422ebbc04a' 
 Execution Time:0.00014901161193848

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.00068497657775879

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '08579f5065246f3c516d93e7a65b57de' 
 Execution Time:0.00052309036254883

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00029182434082031

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '08579f5065246f3c516d93e7a65b57de' 
 Execution Time:0.00034904479980469

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00046896934509277

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'd71c41f02254deaa230bd694eb0b77422ebbc04a' 
 Execution Time:0.0004270076751709

-------------------------------------
SELECT GET_LOCK('2158bb26a07f25c67c81af2fa0928a45', 300) AS ci_session_lock 
 Execution Time:0.00023412704467773

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'd71c41f02254deaa230bd694eb0b77422ebbc04a' 
 Execution Time:0.00029087066650391

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '08579f5065246f3c516d93e7a65b57de' 
 Execution Time:0.00068283081054688

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'd71c41f02254deaa230bd694eb0b77422ebbc04a' 
 Execution Time:0.00036406517028809

-------------------------------------
SELECT GET_LOCK('2158bb26a07f25c67c81af2fa0928a45', 300) AS ci_session_lock 
 Execution Time:0.00017094612121582

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'd71c41f02254deaa230bd694eb0b77422ebbc04a' 
 Execution Time:0.0002138614654541

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '9' 
 Execution Time:0.00027108192443848

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '08579f5065246f3c516d93e7a65b57de' 
 Execution Time:0.00029301643371582

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.00020408630371094

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '08579f5065246f3c516d93e7a65b57de' 
 Execution Time:0.00021696090698242

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00031304359436035

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'd71c41f02254deaa230bd694eb0b77422ebbc04a' 
 Execution Time:0.0003359317779541

-------------------------------------
SELECT GET_LOCK('2158bb26a07f25c67c81af2fa0928a45', 300) AS ci_session_lock 
 Execution Time:0.0001530647277832

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'd71c41f02254deaa230bd694eb0b77422ebbc04a' 
 Execution Time:0.00018405914306641

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '08579f5065246f3c516d93e7a65b57de' 
 Execution Time:0.00032186508178711

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'd71c41f02254deaa230bd694eb0b77422ebbc04a' 
 Execution Time:0.00030112266540527

-------------------------------------
SELECT GET_LOCK('2158bb26a07f25c67c81af2fa0928a45', 300) AS ci_session_lock 
 Execution Time:0.00017595291137695

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'd71c41f02254deaa230bd694eb0b77422ebbc04a' 
 Execution Time:0.00041079521179199

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '10' 
 Execution Time:0.00037217140197754

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = '08579f5065246f3c516d93e7a65b57de' 
 Execution Time:0.00030803680419922

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '10' 
 Execution Time:0.00033807754516602

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = '08579f5065246f3c516d93e7a65b57de' 
 Execution Time:0.00040888786315918

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.0003209114074707

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'd71c41f02254deaa230bd694eb0b77422ebbc04a' 
 Execution Time:0.00042104721069336

-------------------------------------
SELECT GET_LOCK('2158bb26a07f25c67c81af2fa0928a45', 300) AS ci_session_lock 
 Execution Time:0.00026702880859375

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'd71c41f02254deaa230bd694eb0b77422ebbc04a' 
 Execution Time:0.00026202201843262

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = '08579f5065246f3c516d93e7a65b57de' 
 Execution Time:0.0006871223449707

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'd71c41f02254deaa230bd694eb0b77422ebbc04a' 
 Execution Time:0.00030088424682617

-------------------------------------
SELECT GET_LOCK('2158bb26a07f25c67c81af2fa0928a45', 300) AS ci_session_lock 
 Execution Time:0.00014305114746094

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'd71c41f02254deaa230bd694eb0b77422ebbc04a' 
 Execution Time:0.00018000602722168

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.00031304359436035

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '08579f5065246f3c516d93e7a65b57de' 
 Execution Time:0.0002598762512207

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00021982192993164

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '08579f5065246f3c516d93e7a65b57de' 
 Execution Time:0.00023698806762695

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00048398971557617

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'd71c41f02254deaa230bd694eb0b77422ebbc04a' 
 Execution Time:0.0003049373626709

-------------------------------------
SELECT GET_LOCK('2158bb26a07f25c67c81af2fa0928a45', 300) AS ci_session_lock 
 Execution Time:0.00015711784362793

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'd71c41f02254deaa230bd694eb0b77422ebbc04a' 
 Execution Time:0.00020909309387207

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '08579f5065246f3c516d93e7a65b57de' 
 Execution Time:0.00067400932312012

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'd71c41f02254deaa230bd694eb0b77422ebbc04a' 
 Execution Time:0.00040197372436523

-------------------------------------
SELECT GET_LOCK('2158bb26a07f25c67c81af2fa0928a45', 300) AS ci_session_lock 
 Execution Time:0.00014686584472656

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'd71c41f02254deaa230bd694eb0b77422ebbc04a' 
 Execution Time:0.00020599365234375

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '12' 
 Execution Time:0.00033402442932129

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = '08579f5065246f3c516d93e7a65b57de' 
 Execution Time:0.00024890899658203

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '12' 
 Execution Time:0.00031590461730957

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = '08579f5065246f3c516d93e7a65b57de' 
 Execution Time:0.00026607513427734

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00032901763916016

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.00031399726867676

-------------------------------------
SELECT GET_LOCK('582a8d7f3eeea6d2ebbac0c42289b7e3', 300) AS ci_session_lock 
 Execution Time:0.00073909759521484

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.001924991607666

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.00029897689819336

-------------------------------------
SELECT GET_LOCK('582a8d7f3eeea6d2ebbac0c42289b7e3', 300) AS ci_session_lock 
 Execution Time:0.00014901161193848

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.00020718574523926

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00038599967956543

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.00034308433532715

-------------------------------------
SELECT GET_LOCK('582a8d7f3eeea6d2ebbac0c42289b7e3', 300) AS ci_session_lock 
 Execution Time:0.00025415420532227

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.00026512145996094

-------------------------------------
SELECT *
FROM `languages`
WHERE `en_lang_name` = 'English' 
 Execution Time:0.00037813186645508

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `status` = 'active'
AND `language_id` = '2' 
 Execution Time:0.070376873016357

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.0002901554107666

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.00035500526428223

-------------------------------------
SELECT GET_LOCK('582a8d7f3eeea6d2ebbac0c42289b7e3', 300) AS ci_session_lock 
 Execution Time:0.00017309188842773

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.00024795532226562

-------------------------------------
SELECT *
FROM `languages`
WHERE `en_lang_name` = 'Dutch' 
 Execution Time:0.0003209114074707

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `status` = 'active'
AND `language_id` = '1' 
 Execution Time:0.00087594985961914

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00031018257141113

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.00033283233642578

-------------------------------------
SELECT GET_LOCK('582a8d7f3eeea6d2ebbac0c42289b7e3', 300) AS ci_session_lock 
 Execution Time:0.00047016143798828

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.00025701522827148

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `id` = '2'
AND `status` = 'active' 
 Execution Time:0.00039005279541016

-------------------------------------
SELECT `id`
FROM `questions`
WHERE `topic_id` = '2'
AND `status` = 'active'
ORDER BY `id` ASC
 LIMIT 1 
 Execution Time:0.035542964935303

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00042891502380371

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.00032520294189453

-------------------------------------
SELECT GET_LOCK('582a8d7f3eeea6d2ebbac0c42289b7e3', 300) AS ci_session_lock 
 Execution Time:0.00019383430480957

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.00025296211242676

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.00042390823364258

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '8', '49822e258979fae42edc1149ae783661') 
 Execution Time:0.001323938369751

-------------------------------------
SELECT `id`
FROM `questions`
WHERE `topic_id` = '2'
AND `status` = 'active' 
 Execution Time:0.00033783912658691

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00020718574523926

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '49822e258979fae42edc1149ae783661' 
 Execution Time:0.00026702880859375

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.0005190372467041

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.00030517578125

-------------------------------------
SELECT GET_LOCK('582a8d7f3eeea6d2ebbac0c42289b7e3', 300) AS ci_session_lock 
 Execution Time:0.00015091896057129

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.00016093254089355

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00043678283691406

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '8'
AND `question_hash` = '49822e258979fae42edc1149ae783661' 
 Execution Time:0.00025701522827148

-------------------------------------
UPDATE `user_answers_temp` SET `answer` = '2', `status` = 'true'
WHERE `id` = '95' 
 Execution Time:0.0027270317077637

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.00066614151000977

-------------------------------------
SELECT GET_LOCK('582a8d7f3eeea6d2ebbac0c42289b7e3', 300) AS ci_session_lock 
 Execution Time:0.00023508071899414

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.0002439022064209

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '49822e258979fae42edc1149ae783661' 
 Execution Time:0.00044608116149902

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.00030207633972168

-------------------------------------
SELECT GET_LOCK('582a8d7f3eeea6d2ebbac0c42289b7e3', 300) AS ci_session_lock 
 Execution Time:0.00013518333435059

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.00020599365234375

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '9' 
 Execution Time:0.00033283233642578

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '49822e258979fae42edc1149ae783661' 
 Execution Time:0.00024890899658203

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '9', '49822e258979fae42edc1149ae783661') 
 Execution Time:0.018047094345093

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.00028085708618164

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '49822e258979fae42edc1149ae783661' 
 Execution Time:0.00025296211242676

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00030612945556641

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.0026841163635254

-------------------------------------
SELECT GET_LOCK('582a8d7f3eeea6d2ebbac0c42289b7e3', 300) AS ci_session_lock 
 Execution Time:0.00018095970153809

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.00025606155395508

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.00030183792114258

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '9'
AND `question_hash` = '49822e258979fae42edc1149ae783661' 
 Execution Time:0.00022196769714355

-------------------------------------
UPDATE `user_answers_temp` SET `answer` = 'C', `status` = 'false'
WHERE `id` = '96' 
 Execution Time:0.0020849704742432

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.00057506561279297

-------------------------------------
SELECT GET_LOCK('582a8d7f3eeea6d2ebbac0c42289b7e3', 300) AS ci_session_lock 
 Execution Time:0.03034496307373

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.00063300132751465

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.0014209747314453

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '9'
AND `question_hash` = '49822e258979fae42edc1149ae783661' 
 Execution Time:0.0012218952178955

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.00064706802368164

-------------------------------------
SELECT GET_LOCK('582a8d7f3eeea6d2ebbac0c42289b7e3', 300) AS ci_session_lock 
 Execution Time:0.00018119812011719

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.00025320053100586

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '49822e258979fae42edc1149ae783661' 
 Execution Time:0.00042009353637695

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.00028610229492188

-------------------------------------
SELECT GET_LOCK('582a8d7f3eeea6d2ebbac0c42289b7e3', 300) AS ci_session_lock 
 Execution Time:0.0003509521484375

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.00023603439331055

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '10' 
 Execution Time:0.0003049373626709

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = '49822e258979fae42edc1149ae783661' 
 Execution Time:0.0002288818359375

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '10', '49822e258979fae42edc1149ae783661') 
 Execution Time:0.00096297264099121

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '10' 
 Execution Time:0.00020003318786621

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = '49822e258979fae42edc1149ae783661' 
 Execution Time:0.00023913383483887

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.0001981258392334

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.00029397010803223

-------------------------------------
SELECT GET_LOCK('582a8d7f3eeea6d2ebbac0c42289b7e3', 300) AS ci_session_lock 
 Execution Time:0.00013494491577148

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.00016498565673828

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = '49822e258979fae42edc1149ae783661' 
 Execution Time:0.00027990341186523

-------------------------------------
UPDATE `user_answers_temp` SET `status` = 'not_answered'
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = '49822e258979fae42edc1149ae783661' 
 Execution Time:0.028109788894653

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.00036287307739258

-------------------------------------
SELECT GET_LOCK('582a8d7f3eeea6d2ebbac0c42289b7e3', 300) AS ci_session_lock 
 Execution Time:0.00060701370239258

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.00056719779968262

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '11' 
 Execution Time:0.0003349781036377

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '49822e258979fae42edc1149ae783661' 
 Execution Time:0.00025606155395508

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '11', '49822e258979fae42edc1149ae783661') 
 Execution Time:0.00077700614929199

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00021600723266602

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '49822e258979fae42edc1149ae783661' 
 Execution Time:0.00022101402282715

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00021100044250488

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.00043916702270508

-------------------------------------
SELECT GET_LOCK('582a8d7f3eeea6d2ebbac0c42289b7e3', 300) AS ci_session_lock 
 Execution Time:0.0001981258392334

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.00054812431335449

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00039100646972656

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '11'
AND `question_hash` = '49822e258979fae42edc1149ae783661' 
 Execution Time:0.00032806396484375

-------------------------------------
UPDATE `user_answers_temp` SET `answer` = 'no', `status` = 'true'
WHERE `id` = '98' 
 Execution Time:0.0014441013336182

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.00029706954956055

-------------------------------------
SELECT GET_LOCK('582a8d7f3eeea6d2ebbac0c42289b7e3', 300) AS ci_session_lock 
 Execution Time:0.00013899803161621

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.00016498565673828

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '11'
AND `question_hash` = '49822e258979fae42edc1149ae783661' 
 Execution Time:0.00027108192443848

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.00028800964355469

-------------------------------------
SELECT GET_LOCK('582a8d7f3eeea6d2ebbac0c42289b7e3', 300) AS ci_session_lock 
 Execution Time:0.00013899803161621

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.00018787384033203

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '12' 
 Execution Time:0.0003821849822998

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = '49822e258979fae42edc1149ae783661' 
 Execution Time:0.00037503242492676

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '12', '49822e258979fae42edc1149ae783661') 
 Execution Time:0.047529935836792

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '12' 
 Execution Time:0.00058889389038086

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = '49822e258979fae42edc1149ae783661' 
 Execution Time:0.00042486190795898

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00030398368835449

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.00030088424682617

-------------------------------------
SELECT GET_LOCK('582a8d7f3eeea6d2ebbac0c42289b7e3', 300) AS ci_session_lock 
 Execution Time:0.00013399124145508

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.00018811225891113

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = '49822e258979fae42edc1149ae783661' 
 Execution Time:0.000823974609375

-------------------------------------
UPDATE `user_answers_temp` SET `status` = 'not_answered'
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = '49822e258979fae42edc1149ae783661' 
 Execution Time:0.0014448165893555

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.0003819465637207

-------------------------------------
SELECT GET_LOCK('582a8d7f3eeea6d2ebbac0c42289b7e3', 300) AS ci_session_lock 
 Execution Time:0.00021505355834961

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.0026850700378418

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '13' 
 Execution Time:0.0003819465637207

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = '49822e258979fae42edc1149ae783661' 
 Execution Time:0.00032186508178711

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '13', '49822e258979fae42edc1149ae783661') 
 Execution Time:0.017495155334473

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '13' 
 Execution Time:0.00027084350585938

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = '49822e258979fae42edc1149ae783661' 
 Execution Time:0.018576145172119

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.0098209381103516

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.00032901763916016

-------------------------------------
SELECT GET_LOCK('582a8d7f3eeea6d2ebbac0c42289b7e3', 300) AS ci_session_lock 
 Execution Time:0.00046491622924805

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.00027704238891602

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_hash` = '49822e258979fae42edc1149ae783661' 
 Execution Time:0.00040006637573242

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00031614303588867

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.00035905838012695

-------------------------------------
SELECT GET_LOCK('582a8d7f3eeea6d2ebbac0c42289b7e3', 300) AS ci_session_lock 
 Execution Time:0.00018596649169922

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.00021600723266602

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '12' 
 Execution Time:0.00034689903259277

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '12', 'de880e7a81c5be0534104ae1df91423e') 
 Execution Time:0.080020904541016

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '12' 
 Execution Time:0.00039410591125488

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = 'de880e7a81c5be0534104ae1df91423e' 
 Execution Time:0.00039386749267578

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00033998489379883

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.00026512145996094

-------------------------------------
SELECT GET_LOCK('582a8d7f3eeea6d2ebbac0c42289b7e3', 300) AS ci_session_lock 
 Execution Time:0.0001368522644043

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.00016689300537109

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = 'de880e7a81c5be0534104ae1df91423e' 
 Execution Time:0.00028610229492188

-------------------------------------
UPDATE `user_answers_temp` SET `status` = 'not_answered'
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = 'de880e7a81c5be0534104ae1df91423e' 
 Execution Time:0.00097799301147461

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.00031018257141113

-------------------------------------
SELECT GET_LOCK('582a8d7f3eeea6d2ebbac0c42289b7e3', 300) AS ci_session_lock 
 Execution Time:0.00017905235290527

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.00021600723266602

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '13' 
 Execution Time:0.0002748966217041

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = 'de880e7a81c5be0534104ae1df91423e' 
 Execution Time:0.0002281665802002

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '13', 'de880e7a81c5be0534104ae1df91423e') 
 Execution Time:0.024516105651855

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '13' 
 Execution Time:0.00036716461181641

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = 'de880e7a81c5be0534104ae1df91423e' 
 Execution Time:0.00037002563476562

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00037121772766113

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.0017600059509277

-------------------------------------
SELECT GET_LOCK('582a8d7f3eeea6d2ebbac0c42289b7e3', 300) AS ci_session_lock 
 Execution Time:0.0002129077911377

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.0017740726470947

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_hash` = 'de880e7a81c5be0534104ae1df91423e' 
 Execution Time:0.00040197372436523

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.0010261535644531

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.00031900405883789

-------------------------------------
SELECT GET_LOCK('582a8d7f3eeea6d2ebbac0c42289b7e3', 300) AS ci_session_lock 
 Execution Time:0.00018787384033203

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.00048613548278809

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '12' 
 Execution Time:0.00036501884460449

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '12', 'af6f2bf6b2505ca6616da67c9e3db736') 
 Execution Time:0.0023741722106934

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '12' 
 Execution Time:0.00024104118347168

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '12'
AND `question_hash` = 'af6f2bf6b2505ca6616da67c9e3db736' 
 Execution Time:0.00024604797363281

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00020599365234375

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.00027608871459961

-------------------------------------
SELECT GET_LOCK('582a8d7f3eeea6d2ebbac0c42289b7e3', 300) AS ci_session_lock 
 Execution Time:0.00015592575073242

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.00017118453979492

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '13' 
 Execution Time:0.0004880428314209

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = 'af6f2bf6b2505ca6616da67c9e3db736' 
 Execution Time:0.00027608871459961

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '13', 'af6f2bf6b2505ca6616da67c9e3db736') 
 Execution Time:0.11527013778687

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '13' 
 Execution Time:0.00077414512634277

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = 'af6f2bf6b2505ca6616da67c9e3db736' 
 Execution Time:0.00078606605529785

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00033712387084961

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.00032806396484375

-------------------------------------
SELECT GET_LOCK('582a8d7f3eeea6d2ebbac0c42289b7e3', 300) AS ci_session_lock 
 Execution Time:0.00017595291137695

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.00023412704467773

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1675111933, `data` = '__ci_last_regenerate|i:1675111933;user_info|O:8:\"stdClass\":13:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:13:\"user_language\";s:1:\"2\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-11-14 19:33:55\";}site_lang|s:5:\"dutch\";topic_id|s:1:\"2\";questions_count|a:6:{i:0;s:1:\"8\";i:1;s:1:\"9\";i:2;s:2:\"10\";i:3;s:2:\"11\";i:4;s:2:\"12\";i:5;s:2:\"13\";}test_hash|s:32:\"af6f2bf6b2505ca6616da67c9e3db736\";'
WHERE `id` = '697be9c18099988ec9f88853382bb5c00742c339' 
 Execution Time:0.023698091506958

-------------------------------------
SELECT RELEASE_LOCK('582a8d7f3eeea6d2ebbac0c42289b7e3') AS ci_session_lock 
 Execution Time:0.00015878677368164

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'b5359a57512e9aead5a4079a3352cb124ce1147a' 
 Execution Time:0.00020909309387207

-------------------------------------
SELECT GET_LOCK('642420496550b2ee45150e544a05775a', 300) AS ci_session_lock 
 Execution Time:9.4175338745117E-5

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'c0edf044c44f4701fa9203775ed0a3f653d17cd9' 
 Execution Time:0.00014114379882812

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '13' 
 Execution Time:0.00044488906860352

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = 'af6f2bf6b2505ca6616da67c9e3db736' 
 Execution Time:0.00031208992004395

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '13' 
 Execution Time:0.00022602081298828

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = 'af6f2bf6b2505ca6616da67c9e3db736' 
 Execution Time:0.00022697448730469

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00026798248291016

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'c0edf044c44f4701fa9203775ed0a3f653d17cd9' 
 Execution Time:0.0006721019744873

-------------------------------------
SELECT GET_LOCK('642420496550b2ee45150e544a05775a', 300) AS ci_session_lock 
 Execution Time:0.00019693374633789

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'c0edf044c44f4701fa9203775ed0a3f653d17cd9' 
 Execution Time:0.00030207633972168

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '13' 
 Execution Time:0.00034213066101074

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = 'af6f2bf6b2505ca6616da67c9e3db736' 
 Execution Time:0.0002598762512207

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '13' 
 Execution Time:0.00020217895507812

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '13'
AND `question_hash` = 'af6f2bf6b2505ca6616da67c9e3db736' 
 Execution Time:0.00029277801513672

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00025105476379395

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'c0edf044c44f4701fa9203775ed0a3f653d17cd9' 
 Execution Time:0.00029516220092773

-------------------------------------
SELECT GET_LOCK('642420496550b2ee45150e544a05775a', 300) AS ci_session_lock 
 Execution Time:0.00015592575073242

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'c0edf044c44f4701fa9203775ed0a3f653d17cd9' 
 Execution Time:0.00026106834411621

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_hash` = 'af6f2bf6b2505ca6616da67c9e3db736' 
 Execution Time:0.00039005279541016

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00065493583679199

