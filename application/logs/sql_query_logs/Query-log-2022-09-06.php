-------------------------------------
SELECT GET_LOCK('e927528f2f90fcdf543a736b5d2f514c', 300) AS ci_session_lock 
 Execution Time:0.035249948501587

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '3da4b884ed4f06fc312c724133a7ca048dc8608f' 
 Execution Time:0.042792081832886

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '3da4b884ed4f06fc312c724133a7ca048dc8608f' 
 Execution Time:0.00028204917907715

-------------------------------------
SELECT GET_LOCK('e927528f2f90fcdf543a736b5d2f514c', 300) AS ci_session_lock 
 Execution Time:0.00012516975402832

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '3da4b884ed4f06fc312c724133a7ca048dc8608f' 
 Execution Time:0.00015616416931152

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '3da4b884ed4f06fc312c724133a7ca048dc8608f' 
 Execution Time:0.00028395652770996

-------------------------------------
SELECT GET_LOCK('e927528f2f90fcdf543a736b5d2f514c', 300) AS ci_session_lock 
 Execution Time:0.00013208389282227

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '3da4b884ed4f06fc312c724133a7ca048dc8608f' 
 Execution Time:0.00015807151794434

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '3da4b884ed4f06fc312c724133a7ca048dc8608f' 
 Execution Time:0.00028300285339355

-------------------------------------
SELECT GET_LOCK('e927528f2f90fcdf543a736b5d2f514c', 300) AS ci_session_lock 
 Execution Time:0.00012493133544922

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '3da4b884ed4f06fc312c724133a7ca048dc8608f' 
 Execution Time:0.00016307830810547

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '3da4b884ed4f06fc312c724133a7ca048dc8608f' 
 Execution Time:0.00032806396484375

-------------------------------------
SELECT GET_LOCK('e927528f2f90fcdf543a736b5d2f514c', 300) AS ci_session_lock 
 Execution Time:0.0001368522644043

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '3da4b884ed4f06fc312c724133a7ca048dc8608f' 
 Execution Time:0.00023698806762695

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1662488115, `data` = '__ci_last_regenerate|i:1662488115;user_info|O:8:\"stdClass\":12:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-08-06 15:42:40\";}'
WHERE `id` = '3da4b884ed4f06fc312c724133a7ca048dc8608f' 
 Execution Time:0.015753030776978

-------------------------------------
SELECT RELEASE_LOCK('e927528f2f90fcdf543a736b5d2f514c') AS ci_session_lock 
 Execution Time:0.00013184547424316

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'f107b0e3530799de7c39479e498ee10155882a3d' 
 Execution Time:0.00015997886657715

-------------------------------------
SELECT GET_LOCK('47ca6a50a9ba5c032abb6c4d48598f7e', 300) AS ci_session_lock 
 Execution Time:9.7036361694336E-5

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '1adcfb73753023ce1e38b49468fd88675f4c8b1e' 
 Execution Time:0.00011706352233887

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `status` = 'active' 
 Execution Time:0.017903804779053

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '1adcfb73753023ce1e38b49468fd88675f4c8b1e' 
 Execution Time:0.0002601146697998

-------------------------------------
SELECT GET_LOCK('47ca6a50a9ba5c032abb6c4d48598f7e', 300) AS ci_session_lock 
 Execution Time:0.00013017654418945

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '1adcfb73753023ce1e38b49468fd88675f4c8b1e' 
 Execution Time:0.00017023086547852

-------------------------------------
SELECT *
FROM `users`
WHERE `id` = '6' 
 Execution Time:0.00028109550476074

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '1adcfb73753023ce1e38b49468fd88675f4c8b1e' 
 Execution Time:0.00041985511779785

-------------------------------------
SELECT GET_LOCK('47ca6a50a9ba5c032abb6c4d48598f7e', 300) AS ci_session_lock 
 Execution Time:0.00013399124145508

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '1adcfb73753023ce1e38b49468fd88675f4c8b1e' 
 Execution Time:0.00027585029602051

-------------------------------------
SELECT *
FROM `message`
WHERE `user_id` = '6' 
 Execution Time:0.044420003890991

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '1adcfb73753023ce1e38b49468fd88675f4c8b1e' 
 Execution Time:0.00031280517578125

-------------------------------------
SELECT GET_LOCK('47ca6a50a9ba5c032abb6c4d48598f7e', 300) AS ci_session_lock 
 Execution Time:0.00012898445129395

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '1adcfb73753023ce1e38b49468fd88675f4c8b1e' 
 Execution Time:0.00016593933105469

-------------------------------------
SELECT *
FROM `message`
WHERE `user_id` = '6' 
 Execution Time:0.00039196014404297

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '1adcfb73753023ce1e38b49468fd88675f4c8b1e' 
 Execution Time:0.00041294097900391

-------------------------------------
SELECT GET_LOCK('47ca6a50a9ba5c032abb6c4d48598f7e', 300) AS ci_session_lock 
 Execution Time:0.00020909309387207

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '1adcfb73753023ce1e38b49468fd88675f4c8b1e' 
 Execution Time:0.00059294700622559

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `status` = 'active' 
 Execution Time:0.00038385391235352

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '1adcfb73753023ce1e38b49468fd88675f4c8b1e' 
 Execution Time:0.00030207633972168

-------------------------------------
SELECT GET_LOCK('47ca6a50a9ba5c032abb6c4d48598f7e', 300) AS ci_session_lock 
 Execution Time:0.00014019012451172

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '1adcfb73753023ce1e38b49468fd88675f4c8b1e' 
 Execution Time:0.00026416778564453

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `id` = '2'
AND `status` = 'active' 
 Execution Time:0.00046086311340332

-------------------------------------
SELECT `id`
FROM `questions`
WHERE `topic_id` = '2'
AND `status` = 'active'
ORDER BY `id` ASC
 LIMIT 1 
 Execution Time:0.089055061340332

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '1adcfb73753023ce1e38b49468fd88675f4c8b1e' 
 Execution Time:0.00034689903259277

-------------------------------------
SELECT GET_LOCK('47ca6a50a9ba5c032abb6c4d48598f7e', 300) AS ci_session_lock 
 Execution Time:0.00014185905456543

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '1adcfb73753023ce1e38b49468fd88675f4c8b1e' 
 Execution Time:0.00026893615722656

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1662488446, `data` = '__ci_last_regenerate|i:1662488446;user_info|O:8:\"stdClass\":12:{s:2:\"id\";s:1:\"6\";s:9:\"full_name\";s:12:\"david fantom\";s:5:\"email\";s:20:\"fantom15dm@gmail.com\";s:8:\"password\";s:40:\"c0433ddabc41160961d2d6dd1973c8f9a3301f4e\";s:5:\"phone\";s:11:\"09395191328\";s:5:\"image\";s:28:\"user-image-6-1659792910.jpeg\";s:6:\"gender\";s:4:\"male\";s:10:\"birth_date\";s:10:\"1991-02-17\";s:7:\"address\";s:6:\"Theran\";s:6:\"status\";s:6:\"active\";s:7:\"created\";s:19:\"2022-08-06 15:07:00\";s:7:\"updated\";s:19:\"2022-08-06 15:42:40\";}'
WHERE `id` = '1adcfb73753023ce1e38b49468fd88675f4c8b1e' 
 Execution Time:0.015813827514648

-------------------------------------
SELECT RELEASE_LOCK('47ca6a50a9ba5c032abb6c4d48598f7e') AS ci_session_lock 
 Execution Time:0.00027298927307129

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '20b4da91d4329fd22bd2455180ef08bacd3226de' 
 Execution Time:0.00040483474731445

-------------------------------------
SELECT GET_LOCK('a5ab43e8239fad668964305f9d4f1de0', 300) AS ci_session_lock 
 Execution Time:0.00017189979553223

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'd99600d3e82947fd4bb3a4731ef1e7ab7cab22ec' 
 Execution Time:0.00020813941955566

-------------------------------------
SELECT `id`
FROM `questions`
WHERE `topic_id` = '2'
AND `status` = 'active' 
 Execution Time:0.00049304962158203

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00031709671020508

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '8' 
 Execution Time:0.16918110847473

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'd99600d3e82947fd4bb3a4731ef1e7ab7cab22ec' 
 Execution Time:0.00037789344787598

-------------------------------------
SELECT GET_LOCK('a5ab43e8239fad668964305f9d4f1de0', 300) AS ci_session_lock 
 Execution Time:0.00017404556274414

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'd99600d3e82947fd4bb3a4731ef1e7ab7cab22ec' 
 Execution Time:0.0002281665802002

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.00030016899108887

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '9' 
 Execution Time:0.00019097328186035

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'd99600d3e82947fd4bb3a4731ef1e7ab7cab22ec' 
 Execution Time:0.00028204917907715

-------------------------------------
SELECT GET_LOCK('a5ab43e8239fad668964305f9d4f1de0', 300) AS ci_session_lock 
 Execution Time:0.00014686584472656

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'd99600d3e82947fd4bb3a4731ef1e7ab7cab22ec' 
 Execution Time:0.00020313262939453

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '10' 
 Execution Time:0.00039196014404297

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '10' 
 Execution Time:0.00053191184997559

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'd99600d3e82947fd4bb3a4731ef1e7ab7cab22ec' 
 Execution Time:0.00029397010803223

-------------------------------------
SELECT GET_LOCK('a5ab43e8239fad668964305f9d4f1de0', 300) AS ci_session_lock 
 Execution Time:0.00020098686218262

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'd99600d3e82947fd4bb3a4731ef1e7ab7cab22ec' 
 Execution Time:0.00020503997802734

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '11' 
 Execution Time:0.00030708312988281

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '11' 
 Execution Time:0.00019001960754395

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'd99600d3e82947fd4bb3a4731ef1e7ab7cab22ec' 
 Execution Time:0.00034594535827637

-------------------------------------
SELECT GET_LOCK('a5ab43e8239fad668964305f9d4f1de0', 300) AS ci_session_lock 
 Execution Time:0.0001981258392334

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'd99600d3e82947fd4bb3a4731ef1e7ab7cab22ec' 
 Execution Time:0.0002601146697998

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '12' 
 Execution Time:0.00033092498779297

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '12' 
 Execution Time:0.0002140998840332

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'd99600d3e82947fd4bb3a4731ef1e7ab7cab22ec' 
 Execution Time:0.00030517578125

-------------------------------------
SELECT GET_LOCK('a5ab43e8239fad668964305f9d4f1de0', 300) AS ci_session_lock 
 Execution Time:0.00020503997802734

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'd99600d3e82947fd4bb3a4731ef1e7ab7cab22ec' 
 Execution Time:0.0005500316619873

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '13' 
 Execution Time:0.00031089782714844

-------------------------------------
SELECT *
FROM `user_answers`
WHERE `user_id` = '6'
AND `question_id` = '13' 
 Execution Time:0.00018310546875

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'd99600d3e82947fd4bb3a4731ef1e7ab7cab22ec' 
 Execution Time:0.00030398368835449

-------------------------------------
SELECT GET_LOCK('a5ab43e8239fad668964305f9d4f1de0', 300) AS ci_session_lock 
 Execution Time:0.00018906593322754

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'd99600d3e82947fd4bb3a4731ef1e7ab7cab22ec' 
 Execution Time:0.0001990795135498

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `status` = 'active' 
 Execution Time:0.00042414665222168

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'd99600d3e82947fd4bb3a4731ef1e7ab7cab22ec' 
 Execution Time:0.00026798248291016

-------------------------------------
SELECT GET_LOCK('a5ab43e8239fad668964305f9d4f1de0', 300) AS ci_session_lock 
 Execution Time:0.00013494491577148

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'd99600d3e82947fd4bb3a4731ef1e7ab7cab22ec' 
 Execution Time:0.00025415420532227

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'd99600d3e82947fd4bb3a4731ef1e7ab7cab22ec' 
 Execution Time:0.00033712387084961

-------------------------------------
SELECT GET_LOCK('a5ab43e8239fad668964305f9d4f1de0', 300) AS ci_session_lock 
 Execution Time:0.00017786026000977

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'd99600d3e82947fd4bb3a4731ef1e7ab7cab22ec' 
 Execution Time:0.00020384788513184

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'd99600d3e82947fd4bb3a4731ef1e7ab7cab22ec' 
 Execution Time:0.00030779838562012

-------------------------------------
SELECT GET_LOCK('a5ab43e8239fad668964305f9d4f1de0', 300) AS ci_session_lock 
 Execution Time:0.00013494491577148

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'd99600d3e82947fd4bb3a4731ef1e7ab7cab22ec' 
 Execution Time:0.0001678466796875

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'd99600d3e82947fd4bb3a4731ef1e7ab7cab22ec' 
 Execution Time:0.00030016899108887

-------------------------------------
SELECT GET_LOCK('a5ab43e8239fad668964305f9d4f1de0', 300) AS ci_session_lock 
 Execution Time:0.00015783309936523

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'd99600d3e82947fd4bb3a4731ef1e7ab7cab22ec' 
 Execution Time:0.00019001960754395

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'd99600d3e82947fd4bb3a4731ef1e7ab7cab22ec' 
 Execution Time:0.00033783912658691

-------------------------------------
SELECT GET_LOCK('a5ab43e8239fad668964305f9d4f1de0', 300) AS ci_session_lock 
 Execution Time:0.00017404556274414

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'd99600d3e82947fd4bb3a4731ef1e7ab7cab22ec' 
 Execution Time:0.00022697448730469

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1662488835, `data` = '__ci_last_regenerate|i:1662488835;topic_id|s:1:\"2\";questions_count|a:6:{i:0;s:1:\"8\";i:1;s:1:\"9\";i:2;s:2:\"10\";i:3;s:2:\"11\";i:4;s:2:\"12\";i:5;s:2:\"13\";}'
WHERE `id` = 'd99600d3e82947fd4bb3a4731ef1e7ab7cab22ec' 
 Execution Time:0.076439142227173

-------------------------------------
SELECT RELEASE_LOCK('a5ab43e8239fad668964305f9d4f1de0') AS ci_session_lock 
 Execution Time:0.00018501281738281

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'aea06ff4678a878a4d7cfa9386e1c38a19f99d5b' 
 Execution Time:0.00028514862060547

-------------------------------------
SELECT GET_LOCK('741749aefa03688b6d47fb6f5bdece16', 300) AS ci_session_lock 
 Execution Time:0.0001678466796875

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '78c988f186da27170038a8e4e68b9a396b976f9d' 
 Execution Time:0.00017809867858887

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '78c988f186da27170038a8e4e68b9a396b976f9d' 
 Execution Time:0.00032401084899902

-------------------------------------
SELECT GET_LOCK('741749aefa03688b6d47fb6f5bdece16', 300) AS ci_session_lock 
 Execution Time:0.00045514106750488

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '78c988f186da27170038a8e4e68b9a396b976f9d' 
 Execution Time:0.0002439022064209

