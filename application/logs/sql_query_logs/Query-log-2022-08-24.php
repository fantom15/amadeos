-------------------------------------
SELECT GET_LOCK('7c5006a5836df5bf0251cf2fb28870c5', 300) AS ci_session_lock 
 Execution Time:0.00035285949707031

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '7f042933c9a2cf72d034b7a13c8aa41c57e4eb68' 
 Execution Time:0.0012140274047852

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '7f042933c9a2cf72d034b7a13c8aa41c57e4eb68' 
 Execution Time:0.00030899047851562

-------------------------------------
SELECT GET_LOCK('7c5006a5836df5bf0251cf2fb28870c5', 300) AS ci_session_lock 
 Execution Time:0.00018596649169922

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '7f042933c9a2cf72d034b7a13c8aa41c57e4eb68' 
 Execution Time:0.00022101402282715

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00035309791564941

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00046181678771973

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00046896934509277

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00028300285339355

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00021219253540039

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00024604797363281

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00026512145996094

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00021195411682129

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00023007392883301

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00022196769714355

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00017499923706055

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00015401840209961

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00014805793762207

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.0001671314239502

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00064516067504883

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00036287307739258

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '7f042933c9a2cf72d034b7a13c8aa41c57e4eb68' 
 Execution Time:0.00033402442932129

-------------------------------------
SELECT GET_LOCK('7c5006a5836df5bf0251cf2fb28870c5', 300) AS ci_session_lock 
 Execution Time:0.00018095970153809

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '7f042933c9a2cf72d034b7a13c8aa41c57e4eb68' 
 Execution Time:0.00028085708618164

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00037884712219238

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'messages' 
 Execution Time:0.00051593780517578

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '4' 
 Execution Time:0.00095009803771973

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC 
 Execution Time:0.040704011917114

-------------------------------------
SELECT `message`.*, GROUP_CONCAT(`message`.`text_message`) AS 'text_message', `users`.* FROM `message` INNER JOIN `users` ON `message`.`user_id` = `users`.`id` WHERE `message`.`status` = 'unread' AND `message`.`admin_id` IS NULL GROUP BY `user_id` ORDER BY `message`.`created` DESC LIMIT 0, 20 
 Execution Time:0.042087078094482

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00042295455932617

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00032782554626465

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.0002739429473877

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00029087066650391

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00023198127746582

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00018882751464844

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00014495849609375

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00014209747314453

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0001521110534668

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00018692016601562

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00016689300537109

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.0001368522644043

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00015497207641602

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.0001370906829834

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00015401840209961

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.0001370906829834

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '7f042933c9a2cf72d034b7a13c8aa41c57e4eb68' 
 Execution Time:0.00032901763916016

-------------------------------------
SELECT GET_LOCK('7c5006a5836df5bf0251cf2fb28870c5', 300) AS ci_session_lock 
 Execution Time:0.00013995170593262

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '7f042933c9a2cf72d034b7a13c8aa41c57e4eb68' 
 Execution Time:0.00032210350036621

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00040197372436523

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'packages' 
 Execution Time:0.00029110908508301

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '7' 
 Execution Time:0.00036191940307617

-------------------------------------
SELECT *
FROM `packages` 
 Execution Time:0.019461870193481

-------------------------------------
SELECT *
FROM `discount` 
 Execution Time:0.00084805488586426

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00041294097900391

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00033092498779297

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00021719932556152

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00018310546875

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00015115737915039

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00026702880859375

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.0002601146697998

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00021004676818848

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00022101402282715

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00026392936706543

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.0002140998840332

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00019598007202148

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.0001981258392334

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00034213066101074

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00047707557678223

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00025796890258789

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '7f042933c9a2cf72d034b7a13c8aa41c57e4eb68' 
 Execution Time:0.00033903121948242

-------------------------------------
SELECT GET_LOCK('7c5006a5836df5bf0251cf2fb28870c5', 300) AS ci_session_lock 
 Execution Time:0.00020217895507812

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '7f042933c9a2cf72d034b7a13c8aa41c57e4eb68' 
 Execution Time:0.00025796890258789

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00037908554077148

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'packages' 
 Execution Time:0.00026392936706543

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '7' 
 Execution Time:0.00026297569274902

-------------------------------------
SELECT *
FROM `packages` 
 Execution Time:0.00016403198242188

-------------------------------------
SELECT *
FROM `discount` 
 Execution Time:0.014858961105347

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00046396255493164

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00030708312988281

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.0002439022064209

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00022387504577637

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00022101402282715

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00021505355834961

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00020313262939453

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00020694732666016

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00023603439331055

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00027322769165039

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00021219253540039

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00030899047851562

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.0004420280456543

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00037693977355957

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00031495094299316

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00026392936706543

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '7f042933c9a2cf72d034b7a13c8aa41c57e4eb68' 
 Execution Time:0.00029897689819336

-------------------------------------
SELECT GET_LOCK('7c5006a5836df5bf0251cf2fb28870c5', 300) AS ci_session_lock 
 Execution Time:0.00014686584472656

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '7f042933c9a2cf72d034b7a13c8aa41c57e4eb68' 
 Execution Time:0.00019383430480957

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1661336835, `data` = '__ci_last_regenerate|i:1661336835;user_id|s:1:\"1\";email|s:20:\"fantom15dm@gmail.com\";'
WHERE `id` = '7f042933c9a2cf72d034b7a13c8aa41c57e4eb68' 
 Execution Time:0.099724054336548

-------------------------------------
SELECT RELEASE_LOCK('7c5006a5836df5bf0251cf2fb28870c5') AS ci_session_lock 
 Execution Time:0.0003058910369873

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '764e70c141253743a9a504d6f9f543d5e6166c0c' 
 Execution Time:0.00037789344787598

-------------------------------------
SELECT GET_LOCK('51bac1e2771ef65534fed9727fb3593a', 300) AS ci_session_lock 
 Execution Time:0.00017595291137695

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'de581cacbc5f34504fd364b26fcea4278a0f154f' 
 Execution Time:0.00026798248291016

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00049209594726562

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'packages' 
 Execution Time:0.00050187110900879

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '7' 
 Execution Time:0.00038909912109375

-------------------------------------
SELECT *
FROM `packages` 
 Execution Time:0.00024080276489258

-------------------------------------
SELECT *
FROM `discount` 
 Execution Time:0.00020194053649902

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00027012825012207

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00027012825012207

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00022506713867188

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00024795532226562

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.0002439022064209

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00032401084899902

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00017213821411133

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00016093254089355

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00019097328186035

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00020909309387207

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.0001368522644043

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00012612342834473

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00015807151794434

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00019311904907227

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00017499923706055

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.0001368522644043

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'de581cacbc5f34504fd364b26fcea4278a0f154f' 
 Execution Time:0.00036191940307617

-------------------------------------
SELECT GET_LOCK('51bac1e2771ef65534fed9727fb3593a', 300) AS ci_session_lock 
 Execution Time:0.00020503997802734

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'de581cacbc5f34504fd364b26fcea4278a0f154f' 
 Execution Time:0.00022196769714355

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00032305717468262

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'packages' 
 Execution Time:0.00019693374633789

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '7' 
 Execution Time:0.00022196769714355

-------------------------------------
SELECT *
FROM `packages` 
 Execution Time:0.00015592575073242

-------------------------------------
SELECT *
FROM `discount` 
 Execution Time:0.00013208389282227

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00034809112548828

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00032615661621094

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00019383430480957

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.0002589225769043

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00020599365234375

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00020098686218262

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00013113021850586

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00011610984802246

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00014090538024902

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00015997886657715

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00014495849609375

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00016212463378906

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00011014938354492

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
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00010585784912109

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'de581cacbc5f34504fd364b26fcea4278a0f154f' 
 Execution Time:0.00027704238891602

-------------------------------------
SELECT GET_LOCK('51bac1e2771ef65534fed9727fb3593a', 300) AS ci_session_lock 
 Execution Time:0.00012803077697754

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'de581cacbc5f34504fd364b26fcea4278a0f154f' 
 Execution Time:0.00016093254089355

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00043296813964844

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'packages' 
 Execution Time:0.00034689903259277

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '7' 
 Execution Time:0.00034785270690918

-------------------------------------
SELECT *
FROM `packages` 
 Execution Time:0.00028085708618164

-------------------------------------
SELECT *
FROM `discount` 
 Execution Time:0.00018501281738281

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0018739700317383

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00039386749267578

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00022411346435547

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00020408630371094

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00018692016601562

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00017404556274414

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00018906593322754

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00021100044250488

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00057697296142578

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00045204162597656

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.0015308856964111

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00065398216247559

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00075602531433105

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00081205368041992

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.0051941871643066

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.0011041164398193

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'de581cacbc5f34504fd364b26fcea4278a0f154f' 
 Execution Time:0.00030207633972168

-------------------------------------
SELECT GET_LOCK('51bac1e2771ef65534fed9727fb3593a', 300) AS ci_session_lock 
 Execution Time:0.00013613700866699

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'de581cacbc5f34504fd364b26fcea4278a0f154f' 
 Execution Time:0.0001671314239502

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00025796890258789

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'packages' 
 Execution Time:0.00019693374633789

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '7' 
 Execution Time:0.00024890899658203

-------------------------------------
SELECT *
FROM `packages` 
 Execution Time:0.00015401840209961

-------------------------------------
SELECT *
FROM `discount` 
 Execution Time:0.00010490417480469

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00014400482177734

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.0001990795135498

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00017881393432617

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00020289421081543

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00017285346984863

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.015161037445068

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00047683715820312

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00056600570678711

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0015971660614014

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00045680999755859

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00029802322387695

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00025320053100586

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00025105476379395

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00024914741516113

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00024604797363281

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00024008750915527

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'de581cacbc5f34504fd364b26fcea4278a0f154f' 
 Execution Time:0.00037002563476562

-------------------------------------
SELECT GET_LOCK('51bac1e2771ef65534fed9727fb3593a', 300) AS ci_session_lock 
 Execution Time:0.00018095970153809

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'de581cacbc5f34504fd364b26fcea4278a0f154f' 
 Execution Time:0.00021505355834961

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00024986267089844

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'packages' 
 Execution Time:0.00019311904907227

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '7' 
 Execution Time:0.00023698806762695

-------------------------------------
SELECT *
FROM `packages` 
 Execution Time:0.00015115737915039

-------------------------------------
SELECT *
FROM `discount` 
 Execution Time:0.0001060962677002

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00014495849609375

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00014495849609375

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00011610984802246

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00011801719665527

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.0001070499420166

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010085105895996

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010395050048828

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00010395050048828

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00011587142944336

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00013208389282227

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.0001070499420166

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00010490417480469

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:9.8943710327148E-5

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
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00018787384033203

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'de581cacbc5f34504fd364b26fcea4278a0f154f' 
 Execution Time:0.00037002563476562

-------------------------------------
SELECT GET_LOCK('51bac1e2771ef65534fed9727fb3593a', 300) AS ci_session_lock 
 Execution Time:0.00017595291137695

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'de581cacbc5f34504fd364b26fcea4278a0f154f' 
 Execution Time:0.0001828670501709

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00026297569274902

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'packages' 
 Execution Time:0.00019598007202148

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '7' 
 Execution Time:0.00021195411682129

-------------------------------------
SELECT *
FROM `packages` 
 Execution Time:0.00012707710266113

-------------------------------------
SELECT *
FROM `discount` 
 Execution Time:0.00010204315185547

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0001521110534668

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00020408630371094

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00012898445129395

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00012803077697754

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00011396408081055

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
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.0001060962677002

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00011992454528809

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00013494491577148

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00010895729064941

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00010490417480469

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:9.918212890625E-5

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
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00010299682617188

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'de581cacbc5f34504fd364b26fcea4278a0f154f' 
 Execution Time:0.00042891502380371

-------------------------------------
SELECT GET_LOCK('51bac1e2771ef65534fed9727fb3593a', 300) AS ci_session_lock 
 Execution Time:0.00022602081298828

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'de581cacbc5f34504fd364b26fcea4278a0f154f' 
 Execution Time:0.0003049373626709

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00033307075500488

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'packages' 
 Execution Time:0.00020790100097656

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '7' 
 Execution Time:0.00025582313537598

-------------------------------------
SELECT *
FROM `packages` 
 Execution Time:0.00015592575073242

-------------------------------------
SELECT *
FROM `discount` 
 Execution Time:0.00012898445129395

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00028109550476074

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00030207633972168

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00021910667419434

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00016212463378906

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00014305114746094

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00012493133544922

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00013184547424316

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00012588500976562

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00014805793762207

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00019097328186035

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00014591217041016

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00014209747314453

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00012898445129395

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00013399124145508

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00013017654418945

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00013279914855957

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'de581cacbc5f34504fd364b26fcea4278a0f154f' 
 Execution Time:0.00038981437683105

-------------------------------------
SELECT GET_LOCK('51bac1e2771ef65534fed9727fb3593a', 300) AS ci_session_lock 
 Execution Time:0.00019311904907227

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'de581cacbc5f34504fd364b26fcea4278a0f154f' 
 Execution Time:0.00031495094299316

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00081205368041992

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'packages' 
 Execution Time:0.00033998489379883

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '7' 
 Execution Time:0.00028800964355469

-------------------------------------
SELECT *
FROM `packages` 
 Execution Time:0.0001530647277832

-------------------------------------
SELECT *
FROM `discount` 
 Execution Time:0.00012302398681641

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00020313262939453

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00017404556274414

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00012493133544922

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
 Execution Time:0.00010204315185547

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010395050048828

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00011301040649414

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
 Execution Time:0.00010585784912109

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00010418891906738

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:9.8943710327148E-5

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
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00010299682617188

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'de581cacbc5f34504fd364b26fcea4278a0f154f' 
 Execution Time:0.00035500526428223

-------------------------------------
SELECT GET_LOCK('51bac1e2771ef65534fed9727fb3593a', 300) AS ci_session_lock 
 Execution Time:0.00017094612121582

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'de581cacbc5f34504fd364b26fcea4278a0f154f' 
 Execution Time:0.00023698806762695

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00039005279541016

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'packages' 
 Execution Time:0.00034713745117188

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '7' 
 Execution Time:0.00054407119750977

-------------------------------------
SELECT *
FROM `packages` 
 Execution Time:0.00030803680419922

-------------------------------------
SELECT *
FROM `discount` 
 Execution Time:0.00019502639770508

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00026512145996094

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00022792816162109

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.0001671314239502

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00016903877258301

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00011420249938965

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010395050048828

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.0001068115234375

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.0001060962677002

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00012397766113281

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00014615058898926

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00010919570922852

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00010490417480469

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:9.9897384643555E-5

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
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00010395050048828

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'de581cacbc5f34504fd364b26fcea4278a0f154f' 
 Execution Time:0.00038385391235352

-------------------------------------
SELECT GET_LOCK('51bac1e2771ef65534fed9727fb3593a', 300) AS ci_session_lock 
 Execution Time:0.00023007392883301

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'de581cacbc5f34504fd364b26fcea4278a0f154f' 
 Execution Time:0.00025582313537598

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00057101249694824

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'packages' 
 Execution Time:0.00038409233093262

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '7' 
 Execution Time:0.00051498413085938

-------------------------------------
SELECT *
FROM `packages` 
 Execution Time:0.00031423568725586

-------------------------------------
SELECT *
FROM `discount` 
 Execution Time:0.00025200843811035

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00056791305541992

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00023412704467773

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00016999244689941

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00016903877258301

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00012111663818359

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010490417480469

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.0001070499420166

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00010585784912109

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00011897087097168

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00013995170593262

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00010991096496582

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00010490417480469

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:9.9897384643555E-5

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
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00010490417480469

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'de581cacbc5f34504fd364b26fcea4278a0f154f' 
 Execution Time:0.00035405158996582

-------------------------------------
SELECT GET_LOCK('51bac1e2771ef65534fed9727fb3593a', 300) AS ci_session_lock 
 Execution Time:0.00017094612121582

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'de581cacbc5f34504fd364b26fcea4278a0f154f' 
 Execution Time:0.00021791458129883

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0002739429473877

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'packages' 
 Execution Time:0.00019001960754395

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '7' 
 Execution Time:0.00021195411682129

-------------------------------------
SELECT *
FROM `packages` 
 Execution Time:0.00015497207641602

-------------------------------------
SELECT *
FROM `discount` 
 Execution Time:0.00012993812561035

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00020217895507812

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00019288063049316

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00012493133544922

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00012588500976562

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00010800361633301

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010204315185547

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010490417480469

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00010418891906738

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00011801719665527

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00013399124145508

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.0001070499420166

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00010395050048828

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:9.8943710327148E-5

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
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00010299682617188

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'de581cacbc5f34504fd364b26fcea4278a0f154f' 
 Execution Time:0.0002899169921875

-------------------------------------
SELECT GET_LOCK('51bac1e2771ef65534fed9727fb3593a', 300) AS ci_session_lock 
 Execution Time:0.00028395652770996

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'de581cacbc5f34504fd364b26fcea4278a0f154f' 
 Execution Time:0.00029301643371582

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00031709671020508

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'packages' 
 Execution Time:0.00017189979553223

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '7' 
 Execution Time:0.00019311904907227

-------------------------------------
SELECT *
FROM `packages` 
 Execution Time:0.00012803077697754

-------------------------------------
SELECT *
FROM `discount` 
 Execution Time:0.00010204315185547

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00014901161193848

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00016283988952637

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.0001220703125

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00012421607971191

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00011396408081055

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010299682617188

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00011110305786133

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00011086463928223

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00011897087097168

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00037693977355957

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00045490264892578

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00020885467529297

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00019311904907227

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00023293495178223

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00018405914306641

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00022411346435547

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'de581cacbc5f34504fd364b26fcea4278a0f154f' 
 Execution Time:0.00052690505981445

-------------------------------------
SELECT GET_LOCK('51bac1e2771ef65534fed9727fb3593a', 300) AS ci_session_lock 
 Execution Time:0.00025486946105957

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'de581cacbc5f34504fd364b26fcea4278a0f154f' 
 Execution Time:0.00048208236694336

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00033187866210938

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'packages' 
 Execution Time:0.00018811225891113

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '7' 
 Execution Time:0.00019216537475586

-------------------------------------
SELECT *
FROM `packages` 
 Execution Time:0.00012397766113281

-------------------------------------
SELECT *
FROM `discount` 
 Execution Time:0.00010108947753906

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00014901161193848

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.0001380443572998

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00011491775512695

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00010800361633301

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.0001060962677002

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010013580322266

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010395050048828

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00010395050048828

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00011610984802246

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
 Execution Time:0.00010490417480469

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:9.918212890625E-5

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010299682617188

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010180473327637

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00010395050048828

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'de581cacbc5f34504fd364b26fcea4278a0f154f' 
 Execution Time:0.00029206275939941

-------------------------------------
SELECT GET_LOCK('51bac1e2771ef65534fed9727fb3593a', 300) AS ci_session_lock 
 Execution Time:0.00019192695617676

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'de581cacbc5f34504fd364b26fcea4278a0f154f' 
 Execution Time:0.00043702125549316

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1661337143, `data` = '__ci_last_regenerate|i:1661337143;user_id|s:1:\"1\";email|s:20:\"fantom15dm@gmail.com\";'
WHERE `id` = 'de581cacbc5f34504fd364b26fcea4278a0f154f' 
 Execution Time:0.023569107055664

-------------------------------------
SELECT RELEASE_LOCK('51bac1e2771ef65534fed9727fb3593a') AS ci_session_lock 
 Execution Time:0.00018882751464844

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '5da39f4de61ce8b8d5832fc63b22ba6d357e6857' 
 Execution Time:0.0001978874206543

-------------------------------------
SELECT GET_LOCK('c3793abb06cb503ca4578f55e765ae55', 300) AS ci_session_lock 
 Execution Time:0.00010418891906738

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '5095385b7dfa13b6e3d215fa7b16c4ba46fb499d' 
 Execution Time:0.00013899803161621

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00025701522827148

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'packages' 
 Execution Time:0.00019192695617676

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '7' 
 Execution Time:0.00019598007202148

-------------------------------------
SELECT *
FROM `packages` 
 Execution Time:0.00014901161193848

-------------------------------------
SELECT *
FROM `discount` 
 Execution Time:0.00010490417480469

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0002281665802002

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00062108039855957

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00029087066650391

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00024986267089844

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00023603439331055

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00025510787963867

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00021195411682129

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00023102760314941

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00025105476379395

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00028014183044434

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00023508071899414

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00022101402282715

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00020408630371094

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.0002138614654541

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00020790100097656

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00020003318786621

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '5095385b7dfa13b6e3d215fa7b16c4ba46fb499d' 
 Execution Time:0.00031805038452148

-------------------------------------
SELECT GET_LOCK('c3793abb06cb503ca4578f55e765ae55', 300) AS ci_session_lock 
 Execution Time:0.00027585029602051

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '5095385b7dfa13b6e3d215fa7b16c4ba46fb499d' 
 Execution Time:0.00029683113098145

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00040578842163086

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'packages' 
 Execution Time:0.00022482872009277

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '7' 
 Execution Time:0.00021004676818848

-------------------------------------
SELECT *
FROM `packages` 
 Execution Time:0.00014090538024902

-------------------------------------
SELECT *
FROM `discount` 
 Execution Time:0.00011801719665527

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00067710876464844

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00051093101501465

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00031614303588867

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00033712387084961

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00056695938110352

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00024199485778809

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00020599365234375

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00020384788513184

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00022101402282715

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00027108192443848

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00020003318786621

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00020003318786621

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00018692016601562

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00018215179443359

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00018882751464844

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00019502639770508

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '5095385b7dfa13b6e3d215fa7b16c4ba46fb499d' 
 Execution Time:0.00027108192443848

-------------------------------------
SELECT GET_LOCK('c3793abb06cb503ca4578f55e765ae55', 300) AS ci_session_lock 
 Execution Time:0.00013303756713867

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '5095385b7dfa13b6e3d215fa7b16c4ba46fb499d' 
 Execution Time:0.00015807151794434

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00025415420532227

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'packages' 
 Execution Time:0.0002129077911377

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '7' 
 Execution Time:0.00024795532226562

-------------------------------------
SELECT *
FROM `packages` 
 Execution Time:0.00014019012451172

-------------------------------------
SELECT *
FROM `discount` 
 Execution Time:0.00010395050048828

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0001530647277832

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00015115737915039

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
 Execution Time:0.0001070499420166

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010204315185547

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010514259338379

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00010585784912109

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00011706352233887

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00013113021850586

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.0001068115234375

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00010514259338379

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.0001528263092041

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00014591217041016

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00011491775512695

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.0001070499420166

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '5095385b7dfa13b6e3d215fa7b16c4ba46fb499d' 
 Execution Time:0.00030994415283203

-------------------------------------
SELECT GET_LOCK('c3793abb06cb503ca4578f55e765ae55', 300) AS ci_session_lock 
 Execution Time:0.00011992454528809

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '5095385b7dfa13b6e3d215fa7b16c4ba46fb499d' 
 Execution Time:0.00017499923706055

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00046110153198242

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'packages' 
 Execution Time:0.00033211708068848

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '7' 
 Execution Time:0.00026488304138184

-------------------------------------
SELECT *
FROM `packages` 
 Execution Time:0.00016283988952637

-------------------------------------
SELECT *
FROM `discount` 
 Execution Time:0.00019383430480957

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00035691261291504

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00019192695617676

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00014901161193848

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00015497207641602

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00012397766113281

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00011420249938965

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00011301040649414

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00012898445129395

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00012993812561035

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00014591217041016

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00013399124145508

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00024294853210449

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00016593933105469

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00022602081298828

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00022792816162109

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00034594535827637

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '5095385b7dfa13b6e3d215fa7b16c4ba46fb499d' 
 Execution Time:0.0280921459198

-------------------------------------
SELECT GET_LOCK('c3793abb06cb503ca4578f55e765ae55', 300) AS ci_session_lock 
 Execution Time:0.00018596649169922

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '5095385b7dfa13b6e3d215fa7b16c4ba46fb499d' 
 Execution Time:0.00022196769714355

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00031900405883789

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'packages' 
 Execution Time:0.00022196769714355

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '7' 
 Execution Time:0.00024294853210449

-------------------------------------
SELECT *
FROM `packages` 
 Execution Time:0.00018882751464844

-------------------------------------
SELECT *
FROM `discount` 
 Execution Time:0.0001528263092041

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0001680850982666

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00020003318786621

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00015115737915039

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
 Execution Time:0.00010108947753906

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010490417480469

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.0001060962677002

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00011897087097168

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00013899803161621

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00010800361633301

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00010514259338379

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:9.8943710327148E-5

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
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00010299682617188

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '5095385b7dfa13b6e3d215fa7b16c4ba46fb499d' 
 Execution Time:0.00036311149597168

-------------------------------------
SELECT GET_LOCK('c3793abb06cb503ca4578f55e765ae55', 300) AS ci_session_lock 
 Execution Time:0.00019407272338867

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '5095385b7dfa13b6e3d215fa7b16c4ba46fb499d' 
 Execution Time:0.00017118453979492

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00027203559875488

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'packages' 
 Execution Time:0.0001678466796875

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '7' 
 Execution Time:0.00021696090698242

-------------------------------------
SELECT *
FROM `packages` 
 Execution Time:0.00013113021850586

-------------------------------------
SELECT *
FROM `discount` 
 Execution Time:0.00011777877807617

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0002739429473877

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00028514862060547

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00024700164794922

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00029301643371582

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00023388862609863

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00020194053649902

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00019121170043945

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00019717216491699

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00021600723266602

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00030708312988281

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00049209594726562

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00029802322387695

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00021886825561523

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00026202201843262

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00027203559875488

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00025606155395508

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '5095385b7dfa13b6e3d215fa7b16c4ba46fb499d' 
 Execution Time:0.00035500526428223

-------------------------------------
SELECT GET_LOCK('c3793abb06cb503ca4578f55e765ae55', 300) AS ci_session_lock 
 Execution Time:0.00016689300537109

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '5095385b7dfa13b6e3d215fa7b16c4ba46fb499d' 
 Execution Time:0.00019693374633789

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1661337661, `data` = '__ci_last_regenerate|i:1661337661;user_id|s:1:\"1\";email|s:20:\"fantom15dm@gmail.com\";'
WHERE `id` = '5095385b7dfa13b6e3d215fa7b16c4ba46fb499d' 
 Execution Time:0.056292057037354

-------------------------------------
SELECT RELEASE_LOCK('c3793abb06cb503ca4578f55e765ae55') AS ci_session_lock 
 Execution Time:0.00024199485778809

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '3bf7daa3b9eeace1e851ff723e32d6445455b2a3' 
 Execution Time:0.022655963897705

-------------------------------------
SELECT GET_LOCK('215de0e51fb3abbc79fe0ff53583273b', 300) AS ci_session_lock 
 Execution Time:0.00014996528625488

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '64b5f4033640fdf2e7e4bbe5045aa7987fe64fe1' 
 Execution Time:0.004004955291748

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00030779838562012

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'packages' 
 Execution Time:0.0001988410949707

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '7' 
 Execution Time:0.0002140998840332

-------------------------------------
SELECT *
FROM `packages` 
 Execution Time:0.00020194053649902

-------------------------------------
SELECT *
FROM `discount` 
 Execution Time:0.00014400482177734

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00022101402282715

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00020694732666016

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00014996528625488

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00015878677368164

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00014209747314453

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00014400482177734

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00016689300537109

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00013899803161621

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00019502639770508

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00028610229492188

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00025200843811035

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00050497055053711

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00037884712219238

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00028300285339355

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00028896331787109

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00023698806762695

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '64b5f4033640fdf2e7e4bbe5045aa7987fe64fe1' 
 Execution Time:0.00035500526428223

-------------------------------------
SELECT GET_LOCK('215de0e51fb3abbc79fe0ff53583273b', 300) AS ci_session_lock 
 Execution Time:0.00022006034851074

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '64b5f4033640fdf2e7e4bbe5045aa7987fe64fe1' 
 Execution Time:0.00024199485778809

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00048708915710449

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'packages' 
 Execution Time:0.00029897689819336

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '7' 
 Execution Time:0.00032615661621094

-------------------------------------
SELECT *
FROM `packages` 
 Execution Time:0.00020503997802734

-------------------------------------
SELECT *
FROM `discount` 
 Execution Time:0.00018692016601562

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00029611587524414

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00027108192443848

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00025010108947754

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00021195411682129

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00026488304138184

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00019979476928711

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.0001990795135498

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00021505355834961

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00024199485778809

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00024700164794922

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00022387504577637

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00022315979003906

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00018787384033203

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00020503997802734

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00018310546875

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.0002140998840332

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '64b5f4033640fdf2e7e4bbe5045aa7987fe64fe1' 
 Execution Time:0.00046801567077637

-------------------------------------
SELECT GET_LOCK('215de0e51fb3abbc79fe0ff53583273b', 300) AS ci_session_lock 
 Execution Time:0.00035810470581055

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '64b5f4033640fdf2e7e4bbe5045aa7987fe64fe1' 
 Execution Time:0.00034499168395996

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0003960132598877

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'packages' 
 Execution Time:0.00024604797363281

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '7' 
 Execution Time:0.00029683113098145

-------------------------------------
SELECT *
FROM `packages` 
 Execution Time:0.00021004676818848

-------------------------------------
SELECT *
FROM `discount` 
 Execution Time:0.00014400482177734

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00071215629577637

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00055909156799316

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00038909912109375

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00027084350585938

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00027179718017578

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00034880638122559

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.0003969669342041

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00026583671569824

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00024104118347168

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00040197372436523

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00029897689819336

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00021791458129883

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00018596649169922

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00018596649169922

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00018095970153809

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00014781951904297

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '64b5f4033640fdf2e7e4bbe5045aa7987fe64fe1' 
 Execution Time:0.00026988983154297

-------------------------------------
SELECT GET_LOCK('215de0e51fb3abbc79fe0ff53583273b', 300) AS ci_session_lock 
 Execution Time:0.00014305114746094

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '64b5f4033640fdf2e7e4bbe5045aa7987fe64fe1' 
 Execution Time:0.00016283988952637

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0002591609954834

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'packages' 
 Execution Time:0.00019502639770508

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '7' 
 Execution Time:0.00023579597473145

-------------------------------------
SELECT *
FROM `packages` 
 Execution Time:0.0001521110534668

-------------------------------------
SELECT *
FROM `discount` 
 Execution Time:0.00010490417480469

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00014805793762207

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00014495849609375

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00011897087097168

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00012302398681641

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
 Execution Time:0.00015401840209961

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00011682510375977

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00011992454528809

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00016999244689941

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.0001530647277832

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.0010428428649902

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.002687931060791

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.0018489360809326

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00032711029052734

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.0002739429473877

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '64b5f4033640fdf2e7e4bbe5045aa7987fe64fe1' 
 Execution Time:0.00030398368835449

-------------------------------------
SELECT GET_LOCK('215de0e51fb3abbc79fe0ff53583273b', 300) AS ci_session_lock 
 Execution Time:0.00013518333435059

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '64b5f4033640fdf2e7e4bbe5045aa7987fe64fe1' 
 Execution Time:0.0001671314239502

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00025606155395508

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'packages' 
 Execution Time:0.00020503997802734

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '7' 
 Execution Time:0.00023508071899414

-------------------------------------
SELECT *
FROM `packages` 
 Execution Time:0.00015091896057129

-------------------------------------
SELECT *
FROM `discount` 
 Execution Time:0.0001060962677002

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00015687942504883

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00014996528625488

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00011801719665527

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00019097328186035

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00017094612121582

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00013613700866699

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.0003049373626709

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00051999092102051

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00026607513427734

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.0002751350402832

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.0002901554107666

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.0002591609954834

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00029993057250977

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.0002589225769043

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00084781646728516

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00037384033203125

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '64b5f4033640fdf2e7e4bbe5045aa7987fe64fe1' 
 Execution Time:0.0002899169921875

-------------------------------------
SELECT GET_LOCK('215de0e51fb3abbc79fe0ff53583273b', 300) AS ci_session_lock 
 Execution Time:0.00012397766113281

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '64b5f4033640fdf2e7e4bbe5045aa7987fe64fe1' 
 Execution Time:0.00018692016601562

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00032496452331543

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'packages' 
 Execution Time:0.0002899169921875

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '7' 
 Execution Time:0.00027585029602051

-------------------------------------
SELECT *
FROM `packages` 
 Execution Time:0.00017619132995605

-------------------------------------
SELECT *
FROM `discount` 
 Execution Time:0.00014591217041016

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00023484230041504

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00020909309387207

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00016903877258301

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00017905235290527

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.0001530647277832

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00014305114746094

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00014591217041016

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00014495849609375

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00016593933105469

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00019288063049316

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00015592575073242

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00014090538024902

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00013494491577148

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00013995170593262

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.0001380443572998

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00014281272888184

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '64b5f4033640fdf2e7e4bbe5045aa7987fe64fe1' 
 Execution Time:0.00039410591125488

-------------------------------------
SELECT GET_LOCK('215de0e51fb3abbc79fe0ff53583273b', 300) AS ci_session_lock 
 Execution Time:0.00020718574523926

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '64b5f4033640fdf2e7e4bbe5045aa7987fe64fe1' 
 Execution Time:0.00024104118347168

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00034713745117188

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'packages' 
 Execution Time:0.00021791458129883

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '7' 
 Execution Time:0.00023698806762695

-------------------------------------
SELECT *
FROM `packages` 
 Execution Time:0.00014710426330566

-------------------------------------
SELECT *
FROM `discount` 
 Execution Time:0.00011992454528809

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00070500373840332

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00081491470336914

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00048303604125977

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00042891502380371

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00042009353637695

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00041604042053223

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00040078163146973

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00037407875061035

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00054383277893066

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00049805641174316

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00028395652770996

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00025296211242676

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00019097328186035

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00018501281738281

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00017905235290527

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00017499923706055

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '64b5f4033640fdf2e7e4bbe5045aa7987fe64fe1' 
 Execution Time:0.00029420852661133

-------------------------------------
SELECT GET_LOCK('215de0e51fb3abbc79fe0ff53583273b', 300) AS ci_session_lock 
 Execution Time:0.00015115737915039

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '64b5f4033640fdf2e7e4bbe5045aa7987fe64fe1' 
 Execution Time:0.0002281665802002

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1661337972, `data` = '__ci_last_regenerate|i:1661337972;user_id|s:1:\"1\";email|s:20:\"fantom15dm@gmail.com\";'
WHERE `id` = '64b5f4033640fdf2e7e4bbe5045aa7987fe64fe1' 
 Execution Time:0.029557943344116

-------------------------------------
SELECT RELEASE_LOCK('215de0e51fb3abbc79fe0ff53583273b') AS ci_session_lock 
 Execution Time:0.00012111663818359

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'f9b3bd3f6756bbc006f9fa6176a9e2ee9a9e7d45' 
 Execution Time:0.00021195411682129

-------------------------------------
SELECT GET_LOCK('e38e9d111d8a4bcb4346d2abd3611bb9', 300) AS ci_session_lock 
 Execution Time:0.00012588500976562

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'cedd990362f6b77aff3c2c82545d0d617ff18770' 
 Execution Time:0.028687953948975

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00036001205444336

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'packages' 
 Execution Time:0.00040292739868164

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '7' 
 Execution Time:0.00029087066650391

-------------------------------------
SELECT *
FROM `packages` 
 Execution Time:0.00020694732666016

-------------------------------------
SELECT *
FROM `discount` 
 Execution Time:0.00014305114746094

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00023102760314941

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00024700164794922

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00016093254089355

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00016498565673828

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00014686584472656

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00014495849609375

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.0001380443572998

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00014400482177734

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00016283988952637

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00018095970153809

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00012588500976562

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00012302398681641

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00012111663818359

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00018095970153809

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00015091896057129

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00012397766113281

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'cedd990362f6b77aff3c2c82545d0d617ff18770' 
 Execution Time:0.00043797492980957

-------------------------------------
SELECT GET_LOCK('e38e9d111d8a4bcb4346d2abd3611bb9', 300) AS ci_session_lock 
 Execution Time:0.00019311904907227

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'cedd990362f6b77aff3c2c82545d0d617ff18770' 
 Execution Time:0.00023293495178223

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00046801567077637

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'packages' 
 Execution Time:0.00034904479980469

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '7' 
 Execution Time:0.00031399726867676

-------------------------------------
SELECT *
FROM `packages` 
 Execution Time:0.00019598007202148

-------------------------------------
SELECT *
FROM `discount` 
 Execution Time:0.00015807151794434

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0004270076751709

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00030708312988281

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00024199485778809

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00021505355834961

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00016593933105469

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00015401840209961

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00016188621520996

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00016403198242188

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00018191337585449

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00020313262939453

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.0001671314239502

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00016188621520996

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00015497207641602

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00015997886657715

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00015997886657715

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00015902519226074

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'cedd990362f6b77aff3c2c82545d0d617ff18770' 
 Execution Time:0.00031280517578125

-------------------------------------
SELECT GET_LOCK('e38e9d111d8a4bcb4346d2abd3611bb9', 300) AS ci_session_lock 
 Execution Time:0.0001378059387207

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'cedd990362f6b77aff3c2c82545d0d617ff18770' 
 Execution Time:0.00016903877258301

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00025296211242676

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'packages' 
 Execution Time:0.00020599365234375

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '7' 
 Execution Time:0.00023388862609863

-------------------------------------
SELECT *
FROM `packages` 
 Execution Time:0.0001518726348877

-------------------------------------
SELECT *
FROM `discount` 
 Execution Time:0.0001060962677002

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00014615058898926

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00014615058898926

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
 Execution Time:0.0001060962677002

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
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00010395050048828

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00011610984802246

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00012993812561035

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.0001068115234375

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.0001060962677002

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00010395050048828

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010418891906738

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010395050048828

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00010490417480469

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'cedd990362f6b77aff3c2c82545d0d617ff18770' 
 Execution Time:0.00030922889709473

-------------------------------------
SELECT GET_LOCK('e38e9d111d8a4bcb4346d2abd3611bb9', 300) AS ci_session_lock 
 Execution Time:0.00016617774963379

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'cedd990362f6b77aff3c2c82545d0d617ff18770' 
 Execution Time:0.00022101402282715

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00028896331787109

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'packages' 
 Execution Time:0.00020599365234375

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '7' 
 Execution Time:0.00023508071899414

-------------------------------------
SELECT *
FROM `packages` 
 Execution Time:0.00016617774963379

-------------------------------------
SELECT *
FROM `discount` 
 Execution Time:0.00012898445129395

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0001990795135498

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.0001828670501709

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00015711784362793

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00015377998352051

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00015902519226074

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00014996528625488

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00025606155395508

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00035715103149414

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00027298927307129

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00026297569274902

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00041794776916504

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00024986267089844

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00030922889709473

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.0007169246673584

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00082087516784668

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.0010161399841309

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'cedd990362f6b77aff3c2c82545d0d617ff18770' 
 Execution Time:0.00030779838562012

-------------------------------------
SELECT GET_LOCK('e38e9d111d8a4bcb4346d2abd3611bb9', 300) AS ci_session_lock 
 Execution Time:0.00015997886657715

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = 'cedd990362f6b77aff3c2c82545d0d617ff18770' 
 Execution Time:0.0001978874206543

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1661339424, `data` = '__ci_last_regenerate|i:1661339424;user_id|s:1:\"1\";email|s:20:\"fantom15dm@gmail.com\";'
WHERE `id` = 'cedd990362f6b77aff3c2c82545d0d617ff18770' 
 Execution Time:0.02239203453064

-------------------------------------
SELECT RELEASE_LOCK('e38e9d111d8a4bcb4346d2abd3611bb9') AS ci_session_lock 
 Execution Time:0.00015497207641602

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '78659e4c6cad0bcdae791ab7fd2cf07d5c83d040' 
 Execution Time:0.00043678283691406

-------------------------------------
SELECT GET_LOCK('1567ea63cbaf382a6d15f32690e936f2', 300) AS ci_session_lock 
 Execution Time:0.00014519691467285

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2c643b87169c4a741616b2789b880e01f0879dc8' 
 Execution Time:0.011986017227173

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00060200691223145

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'packages' 
 Execution Time:0.00047707557678223

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '7' 
 Execution Time:0.00032711029052734

-------------------------------------
SELECT *
FROM `packages` 
 Execution Time:0.00017690658569336

-------------------------------------
SELECT *
FROM `discount` 
 Execution Time:0.0001370906829834

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00029492378234863

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00020694732666016

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00015711784362793

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00014495849609375

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00014400482177734

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00014400482177734

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.0001370906829834

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00013995170593262

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00015807151794434

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00018000602722168

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00014686584472656

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00013899803161621

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00013995170593262

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00013184547424316

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.0001380443572998

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00013995170593262

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2c643b87169c4a741616b2789b880e01f0879dc8' 
 Execution Time:0.00031900405883789

-------------------------------------
SELECT GET_LOCK('1567ea63cbaf382a6d15f32690e936f2', 300) AS ci_session_lock 
 Execution Time:0.00015616416931152

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2c643b87169c4a741616b2789b880e01f0879dc8' 
 Execution Time:0.00017809867858887

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00027608871459961

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'packages' 
 Execution Time:0.00023603439331055

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '7' 
 Execution Time:0.00022387504577637

-------------------------------------
SELECT *
FROM `packages` 
 Execution Time:0.00019502639770508

-------------------------------------
SELECT *
FROM `discount` 
 Execution Time:0.0001370906829834

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00024294853210449

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00018596649169922

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00020694732666016

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00022506713867188

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00020289421081543

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00018501281738281

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00087404251098633

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.0003809928894043

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00035309791564941

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00026988983154297

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00022411346435547

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00028109550476074

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00031805038452148

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00016307830810547

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00014901161193848

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00014710426330566

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2c643b87169c4a741616b2789b880e01f0879dc8' 
 Execution Time:0.00032401084899902

-------------------------------------
SELECT GET_LOCK('1567ea63cbaf382a6d15f32690e936f2', 300) AS ci_session_lock 
 Execution Time:0.0001671314239502

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2c643b87169c4a741616b2789b880e01f0879dc8' 
 Execution Time:0.00022602081298828

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0002892017364502

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'packages' 
 Execution Time:0.00026297569274902

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '7' 
 Execution Time:0.00031900405883789

-------------------------------------
SELECT *
FROM `packages` 
 Execution Time:0.00022602081298828

-------------------------------------
SELECT *
FROM `discount` 
 Execution Time:0.00020909309387207

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00018978118896484

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00020813941955566

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00014495849609375

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00020790100097656

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00017404556274414

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00015997886657715

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00016188621520996

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00013613700866699

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00014400482177734

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00017094612121582

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00011086463928223

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00010585784912109

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00010085105895996

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00011920928955078

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00018787384033203

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00020909309387207

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2c643b87169c4a741616b2789b880e01f0879dc8' 
 Execution Time:0.00028896331787109

-------------------------------------
SELECT GET_LOCK('1567ea63cbaf382a6d15f32690e936f2', 300) AS ci_session_lock 
 Execution Time:0.00012397766113281

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2c643b87169c4a741616b2789b880e01f0879dc8' 
 Execution Time:0.00016188621520996

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00036716461181641

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'packages' 
 Execution Time:0.00028014183044434

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '7' 
 Execution Time:0.00030112266540527

-------------------------------------
SELECT *
FROM `packages` 
 Execution Time:0.00025415420532227

-------------------------------------
SELECT *
FROM `discount` 
 Execution Time:0.00020694732666016

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.001453161239624

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00036883354187012

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00026488304138184

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00023698806762695

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.0010561943054199

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00031018257141113

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00021195411682129

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00020194053649902

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00021791458129883

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00027799606323242

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00022506713867188

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00022506713867188

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00021600723266602

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.0001518726348877

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.0001370906829834

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00013089179992676

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2c643b87169c4a741616b2789b880e01f0879dc8' 
 Execution Time:0.0011441707611084

-------------------------------------
SELECT GET_LOCK('1567ea63cbaf382a6d15f32690e936f2', 300) AS ci_session_lock 
 Execution Time:0.00027084350585938

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2c643b87169c4a741616b2789b880e01f0879dc8' 
 Execution Time:0.00031185150146484

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00031900405883789

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'packages' 
 Execution Time:0.0001981258392334

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '7' 
 Execution Time:0.00022006034851074

-------------------------------------
SELECT *
FROM `packages` 
 Execution Time:0.00015592575073242

-------------------------------------
SELECT *
FROM `discount` 
 Execution Time:0.00012898445129395

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0002140998840332

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00018310546875

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00015807151794434

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00017380714416504

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00014305114746094

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00014090538024902

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00014710426330566

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00015902519226074

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00016617774963379

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00030803680419922

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00019717216491699

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00014615058898926

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00013399124145508

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.0001368522644043

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00014185905456543

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00014209747314453

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '2c643b87169c4a741616b2789b880e01f0879dc8' 
 Execution Time:0.00032305717468262

-------------------------------------
SELECT GET_LOCK('1567ea63cbaf382a6d15f32690e936f2', 300) AS ci_session_lock 
 Execution Time:0.00019001960754395

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '2c643b87169c4a741616b2789b880e01f0879dc8' 
 Execution Time:0.00023889541625977

-------------------------------------
UPDATE `ci_session` SET `timestamp` = 1661339749, `data` = '__ci_last_regenerate|i:1661339749;user_id|s:1:\"1\";email|s:20:\"fantom15dm@gmail.com\";'
WHERE `id` = '2c643b87169c4a741616b2789b880e01f0879dc8' 
 Execution Time:0.074413776397705

-------------------------------------
SELECT RELEASE_LOCK('1567ea63cbaf382a6d15f32690e936f2') AS ci_session_lock 
 Execution Time:0.0002140998840332

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = 'ce316bf23d59a01f7364c698630c37eaba647e25' 
 Execution Time:0.00044989585876465

-------------------------------------
SELECT GET_LOCK('d779ebc3324e532c10cc0f0e981f0dfb', 300) AS ci_session_lock 
 Execution Time:0.00019097328186035

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '10dd5d0a629ccea44818195787e69c95665833b3' 
 Execution Time:0.00032997131347656

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00037097930908203

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'packages' 
 Execution Time:0.00025200843811035

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '7' 
 Execution Time:0.00030207633972168

-------------------------------------
SELECT *
FROM `packages` 
 Execution Time:0.00017499923706055

-------------------------------------
SELECT *
FROM `discount` 
 Execution Time:0.00012111663818359

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00025081634521484

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00023698806762695

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00027990341186523

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00022482872009277

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00022387504577637

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00020885467529297

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00023198127746582

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00013208389282227

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0001370906829834

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00016117095947266

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00011420249938965

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00010895729064941

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00010585784912109

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010108947753906

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010395050048828

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00010395050048828

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '10dd5d0a629ccea44818195787e69c95665833b3' 
 Execution Time:0.00033903121948242

-------------------------------------
SELECT GET_LOCK('d779ebc3324e532c10cc0f0e981f0dfb', 300) AS ci_session_lock 
 Execution Time:0.00020790100097656

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '10dd5d0a629ccea44818195787e69c95665833b3' 
 Execution Time:0.00072002410888672

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00031614303588867

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'packages' 
 Execution Time:0.00020599365234375

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '7' 
 Execution Time:0.00026392936706543

-------------------------------------
SELECT *
FROM `packages` 
 Execution Time:0.00018906593322754

-------------------------------------
SELECT *
FROM `discount` 
 Execution Time:0.0021159648895264

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0003349781036377

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00028705596923828

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00023388862609863

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00021100044250488

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.0002288818359375

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00024509429931641

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00022792816162109

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00020503997802734

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00022077560424805

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00026202201843262

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00021100044250488

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
 Execution Time:0.00019311904907227

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00018215179443359

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00021696090698242

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '10dd5d0a629ccea44818195787e69c95665833b3' 
 Execution Time:0.00030112266540527

-------------------------------------
SELECT GET_LOCK('d779ebc3324e532c10cc0f0e981f0dfb', 300) AS ci_session_lock 
 Execution Time:0.00013613700866699

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '10dd5d0a629ccea44818195787e69c95665833b3' 
 Execution Time:0.00024819374084473

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0004730224609375

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'packages' 
 Execution Time:0.00029397010803223

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '7' 
 Execution Time:0.00075101852416992

-------------------------------------
SELECT *
FROM `packages` 
 Execution Time:0.062519073486328

-------------------------------------
SELECT *
FROM `discount` 
 Execution Time:0.00021696090698242

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00019216537475586

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00020503997802734

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00015592575073242

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00012993812561035

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00011014938354492

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010204315185547

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010490417480469

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00010490417480469

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00012016296386719

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00014495849609375

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00010991096496582

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00010395050048828

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:9.8943710327148E-5

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
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00010299682617188

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '10dd5d0a629ccea44818195787e69c95665833b3' 
 Execution Time:0.00032401084899902

-------------------------------------
SELECT GET_LOCK('d779ebc3324e532c10cc0f0e981f0dfb', 300) AS ci_session_lock 
 Execution Time:0.00014495849609375

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '10dd5d0a629ccea44818195787e69c95665833b3' 
 Execution Time:0.00017619132995605

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00035405158996582

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'packages' 
 Execution Time:0.00021910667419434

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '7' 
 Execution Time:0.00033998489379883

-------------------------------------
SELECT *
FROM `packages` 
 Execution Time:0.00033998489379883

-------------------------------------
SELECT *
FROM `discount` 
 Execution Time:0.00015687942504883

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00024604797363281

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00020289421081543

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00018095970153809

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00014901161193848

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00011801719665527

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010514259338379

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.0001070499420166

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00010585784912109

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00012493133544922

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00014901161193848

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00011301040649414

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.0001070499420166

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00010108947753906

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010299682617188

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010490417480469

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00010395050048828

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '10dd5d0a629ccea44818195787e69c95665833b3' 
 Execution Time:0.00036001205444336

-------------------------------------
SELECT GET_LOCK('d779ebc3324e532c10cc0f0e981f0dfb', 300) AS ci_session_lock 
 Execution Time:0.00016498565673828

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '10dd5d0a629ccea44818195787e69c95665833b3' 
 Execution Time:0.00020194053649902

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0002598762512207

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'packages' 
 Execution Time:0.00020003318786621

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '7' 
 Execution Time:0.00023198127746582

-------------------------------------
SELECT *
FROM `packages` 
 Execution Time:0.00015687942504883

-------------------------------------
SELECT *
FROM `discount` 
 Execution Time:0.00013303756713867

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00021505355834961

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00019192695617676

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00015592575073242

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00014615058898926

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00014400482177734

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00013899803161621

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00013995170593262

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00014114379882812

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00015497207641602

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00017380714416504

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00014495849609375

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00013995170593262

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00013399124145508

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00013613700866699

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00013494491577148

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00013589859008789

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '10dd5d0a629ccea44818195787e69c95665833b3' 
 Execution Time:0.00028395652770996

-------------------------------------
SELECT GET_LOCK('d779ebc3324e532c10cc0f0e981f0dfb', 300) AS ci_session_lock 
 Execution Time:0.0001368522644043

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '10dd5d0a629ccea44818195787e69c95665833b3' 
 Execution Time:0.00016593933105469

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00025701522827148

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'packages' 
 Execution Time:0.00019502639770508

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '7' 
 Execution Time:0.00023508071899414

-------------------------------------
SELECT *
FROM `packages` 
 Execution Time:0.00015091896057129

-------------------------------------
SELECT *
FROM `discount` 
 Execution Time:0.0001060962677002

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00014805793762207

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00014495849609375

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00011801719665527

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00012612342834473

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00010991096496582

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010085105895996

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010395050048828

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00024604797363281

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00018405914306641

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00020003318786621

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00015902519226074

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.0001530647277832

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00017690658569336

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00015091896057129

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00014686584472656

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00014209747314453

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '10dd5d0a629ccea44818195787e69c95665833b3' 
 Execution Time:0.00028896331787109

-------------------------------------
SELECT GET_LOCK('d779ebc3324e532c10cc0f0e981f0dfb', 300) AS ci_session_lock 
 Execution Time:0.00012898445129395

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '10dd5d0a629ccea44818195787e69c95665833b3' 
 Execution Time:0.0001680850982666

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00024795532226562

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'packages' 
 Execution Time:0.00018811225891113

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '7' 
 Execution Time:0.0002131462097168

-------------------------------------
SELECT *
FROM `packages` 
 Execution Time:0.0001521110534668

-------------------------------------
SELECT *
FROM `discount` 
 Execution Time:0.00012993812561035

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00018310546875

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00017690658569336

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00014805793762207

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00014090538024902

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00014090538024902

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00013399124145508

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.0001370906829834

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00013589859008789

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00014996528625488

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00016903877258301

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.0001370906829834

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.0001368522644043

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00013089179992676

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00013303756713867

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00013494491577148

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00013494491577148

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '10dd5d0a629ccea44818195787e69c95665833b3' 
 Execution Time:0.0002901554107666

-------------------------------------
SELECT GET_LOCK('d779ebc3324e532c10cc0f0e981f0dfb', 300) AS ci_session_lock 
 Execution Time:0.0001368522644043

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '10dd5d0a629ccea44818195787e69c95665833b3' 
 Execution Time:0.00016403198242188

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.0002739429473877

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'packages' 
 Execution Time:0.0001981258392334

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '7' 
 Execution Time:0.00021004676818848

-------------------------------------
SELECT *
FROM `packages` 
 Execution Time:0.00012707710266113

-------------------------------------
SELECT *
FROM `discount` 
 Execution Time:0.00010895729064941

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00036096572875977

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00028300285339355

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00032711029052734

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.0002291202545166

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00023698806762695

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00045180320739746

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00041103363037109

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00043106079101562

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00039911270141602

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00032186508178711

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00025200843811035

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00017595291137695

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00011801719665527

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00011205673217773

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010991096496582

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00010800361633301

-------------------------------------
SELECT 1
FROM `ci_session`
WHERE `id` = '10dd5d0a629ccea44818195787e69c95665833b3' 
 Execution Time:0.00029110908508301

-------------------------------------
SELECT GET_LOCK('d779ebc3324e532c10cc0f0e981f0dfb', 300) AS ci_session_lock 
 Execution Time:0.0001370906829834

-------------------------------------
SELECT `data`
FROM `ci_session`
WHERE `id` = '10dd5d0a629ccea44818195787e69c95665833b3' 
 Execution Time:0.00016880035400391

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00029587745666504

-------------------------------------
SELECT *
FROM `menu`
WHERE `menu_name` = 'packages' 
 Execution Time:0.00020694732666016

-------------------------------------
SELECT *
FROM `admin_permission`
WHERE `admin_id` = '1'
AND `permission_id` = '7' 
 Execution Time:0.00023794174194336

-------------------------------------
SELECT *
FROM `packages` 
 Execution Time:0.00015115737915039

-------------------------------------
SELECT *
FROM `discount` 
 Execution Time:0.00010585784912109

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00019598007202148

-------------------------------------
SELECT * FROM admin_permission WHERE admin_id = '1' 
 Execution Time:0.00019097328186035

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '1' 
 Execution Time:0.00012516975402832

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '2' 
 Execution Time:0.00011110305786133

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00010800361633301

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010204315185547

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010490417480469

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.00010514259338379

-------------------------------------
SELECT * FROM admin WHERE  id = '1' LIMIT 1 
 Execution Time:0.00011801719665527

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
 Execution Time:0.00010585784912109

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '4' 
 Execution Time:0.00010013580322266

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '5' 
 Execution Time:0.00010490417480469

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '6' 
 Execution Time:0.00010395050048828

-------------------------------------
SELECT *
FROM `menu`
WHERE `id` = '7' 
 Execution Time:0.0001060962677002

