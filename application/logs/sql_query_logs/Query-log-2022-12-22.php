-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '379ebb944d020e00ab82d231b4750edeaaba3503' 
 Execution Time:0.00027704238891602

-------------------------------------
SELECT GET_LOCK('335032987e8d627b8478615123277a07', 300) AS ci_session_lock 
 Execution Time:0.00016188621520996

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'bc4767ac8159d02746761f51eb96ff41458e9339' 
 Execution Time:0.00018215179443359

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'bc4767ac8159d02746761f51eb96ff41458e9339' 
 Execution Time:0.00026893615722656

-------------------------------------
SELECT GET_LOCK('335032987e8d627b8478615123277a07', 300) AS ci_session_lock 
 Execution Time:0.00012803077697754

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'bc4767ac8159d02746761f51eb96ff41458e9339' 
 Execution Time:0.00024700164794922

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.0018899440765381

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'bc4767ac8159d02746761f51eb96ff41458e9339' 
 Execution Time:0.00035691261291504

-------------------------------------
SELECT GET_LOCK('335032987e8d627b8478615123277a07', 300) AS ci_session_lock 
 Execution Time:0.00017499923706055

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'bc4767ac8159d02746761f51eb96ff41458e9339' 
 Execution Time:0.00019598007202148

-------------------------------------
SELECT *
FROM `languages`
WHERE `en_lang_name` = 'English' 
 Execution Time:0.00029993057250977

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `status` = 'active'
AND `language_id` = '2' 
 Execution Time:0.015533924102783

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00050711631774902

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'bc4767ac8159d02746761f51eb96ff41458e9339' 
 Execution Time:0.00031113624572754

-------------------------------------
SELECT GET_LOCK('335032987e8d627b8478615123277a07', 300) AS ci_session_lock 
 Execution Time:0.00019001960754395

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'bc4767ac8159d02746761f51eb96ff41458e9339' 
 Execution Time:0.00024700164794922

-------------------------------------
SELECT *
FROM `languages`
WHERE `en_lang_name` = 'Dutch' 
 Execution Time:0.00048398971557617

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `status` = 'active'
AND `language_id` = '1' 
 Execution Time:0.00041103363037109

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.0003669261932373

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'bc4767ac8159d02746761f51eb96ff41458e9339' 
 Execution Time:0.0003809928894043

-------------------------------------
SELECT GET_LOCK('335032987e8d627b8478615123277a07', 300) AS ci_session_lock 
 Execution Time:0.00023198127746582

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'bc4767ac8159d02746761f51eb96ff41458e9339' 
 Execution Time:0.00028586387634277

-------------------------------------
SELECT *
FROM `ebooks`
WHERE `id` = '2'
AND `status` = 'active' 
 Execution Time:0.00043201446533203

-------------------------------------
SELECT `id`
FROM `questions`
WHERE `topic_id` = '2'
AND `status` = 'active'
ORDER BY `id` ASC
 LIMIT 1 
 Execution Time:0.00042891502380371

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.0030319690704346

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'bc4767ac8159d02746761f51eb96ff41458e9339' 
 Execution Time:0.00035500526428223

-------------------------------------
SELECT GET_LOCK('335032987e8d627b8478615123277a07', 300) AS ci_session_lock 
 Execution Time:0.00014185905456543

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'bc4767ac8159d02746761f51eb96ff41458e9339' 
 Execution Time:0.00017404556274414

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '8' 
 Execution Time:0.00025296211242676

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '8', '177f079ce2b2374da53e642a8b550eed') 
 Execution Time:0.025815010070801

-------------------------------------
SELECT `id`
FROM `questions`
WHERE `topic_id` = '2'
AND `status` = 'active' 
 Execution Time:0.00041794776916504

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00028800964355469

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '177f079ce2b2374da53e642a8b550eed' 
 Execution Time:0.00032901763916016

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.0003199577331543

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'bc4767ac8159d02746761f51eb96ff41458e9339' 
 Execution Time:0.00031304359436035

-------------------------------------
SELECT GET_LOCK('335032987e8d627b8478615123277a07', 300) AS ci_session_lock 
 Execution Time:0.00012588500976562

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'bc4767ac8159d02746761f51eb96ff41458e9339' 
 Execution Time:0.00016307830810547

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '8' 
 Execution Time:0.00032305717468262

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '8'
AND `question_hash` = '177f079ce2b2374da53e642a8b550eed' 
 Execution Time:0.00025701522827148

-------------------------------------
UPDATE `user_answers_temp` SET `answer` = '2', `status` = 'true'
WHERE `id` = '58' 
 Execution Time:0.00323486328125

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'bc4767ac8159d02746761f51eb96ff41458e9339' 
 Execution Time:0.00031113624572754

-------------------------------------
SELECT GET_LOCK('335032987e8d627b8478615123277a07', 300) AS ci_session_lock 
 Execution Time:0.00014305114746094

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'bc4767ac8159d02746761f51eb96ff41458e9339' 
 Execution Time:0.00021696090698242

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '8'
AND `question_hash` = '177f079ce2b2374da53e642a8b550eed' 
 Execution Time:0.00025391578674316

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'bc4767ac8159d02746761f51eb96ff41458e9339' 
 Execution Time:0.00030112266540527

-------------------------------------
SELECT GET_LOCK('335032987e8d627b8478615123277a07', 300) AS ci_session_lock 
 Execution Time:0.00033903121948242

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'bc4767ac8159d02746761f51eb96ff41458e9339' 
 Execution Time:0.00028705596923828

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '9' 
 Execution Time:0.00030088424682617

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '177f079ce2b2374da53e642a8b550eed' 
 Execution Time:0.00019097328186035

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '9', '177f079ce2b2374da53e642a8b550eed') 
 Execution Time:0.0008389949798584

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.00018095970153809

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '177f079ce2b2374da53e642a8b550eed' 
 Execution Time:0.00020384788513184

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00019598007202148

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'bc4767ac8159d02746761f51eb96ff41458e9339' 
 Execution Time:0.00028705596923828

-------------------------------------
SELECT GET_LOCK('335032987e8d627b8478615123277a07', 300) AS ci_session_lock 
 Execution Time:0.00014209747314453

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'bc4767ac8159d02746761f51eb96ff41458e9339' 
 Execution Time:0.00020217895507812

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.00028300285339355

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '9'
AND `question_hash` = '177f079ce2b2374da53e642a8b550eed' 
 Execution Time:0.00021910667419434

-------------------------------------
UPDATE `user_answers_temp` SET `answer` = 'B', `status` = 'true'
WHERE `id` = '59' 
 Execution Time:0.085966110229492

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'bc4767ac8159d02746761f51eb96ff41458e9339' 
 Execution Time:0.00027799606323242

-------------------------------------
SELECT GET_LOCK('335032987e8d627b8478615123277a07', 300) AS ci_session_lock 
 Execution Time:0.11936712265015

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'bc4767ac8159d02746761f51eb96ff41458e9339' 
 Execution Time:0.00028491020202637

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '9' 
 Execution Time:0.0011970996856689

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `question_id` = '9'
AND `question_hash` = '177f079ce2b2374da53e642a8b550eed' 
 Execution Time:0.00049614906311035

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'bc4767ac8159d02746761f51eb96ff41458e9339' 
 Execution Time:0.0003199577331543

-------------------------------------
SELECT GET_LOCK('335032987e8d627b8478615123277a07', 300) AS ci_session_lock 
 Execution Time:0.00018906593322754

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'bc4767ac8159d02746761f51eb96ff41458e9339' 
 Execution Time:0.00020694732666016

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '9'
AND `question_hash` = '177f079ce2b2374da53e642a8b550eed' 
 Execution Time:0.00034809112548828

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'bc4767ac8159d02746761f51eb96ff41458e9339' 
 Execution Time:0.0024459362030029

-------------------------------------
SELECT GET_LOCK('335032987e8d627b8478615123277a07', 300) AS ci_session_lock 
 Execution Time:0.00053215026855469

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'bc4767ac8159d02746761f51eb96ff41458e9339' 
 Execution Time:0.00063586235046387

-------------------------------------
SELECT *
FROM `questions`
WHERE `topic_id` = '2'
AND `id` = '10' 
 Execution Time:0.0017938613891602

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = '177f079ce2b2374da53e642a8b550eed' 
 Execution Time:0.00048708915710449

-------------------------------------
INSERT INTO `user_answers_temp` (`user_id`, `topic_id`, `question_id`, `question_hash`) VALUES ('6', '2', '10', '177f079ce2b2374da53e642a8b550eed') 
 Execution Time:0.13954186439514

-------------------------------------
SELECT *
FROM `questions`
WHERE `id` = '10' 
 Execution Time:0.00032591819763184

-------------------------------------
SELECT *
FROM `user_answers_temp`
WHERE `user_id` = '6'
AND `topic_id` = '2'
AND `question_id` = '10'
AND `question_hash` = '177f079ce2b2374da53e642a8b550eed' 
 Execution Time:0.00032186508178711

-------------------------------------
SELECT *
FROM `languages`
WHERE `status` = 'active' 
 Execution Time:0.00027084350585938

