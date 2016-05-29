create table shikanavi(no int primary key auto_increment,koyou int,shokushu int,basho int,keitai int,
name varchar(60),kyuuyo varchar(120),adress varchar(200),access varchar(200),title varchar(100),apeal varchar(500),
motometeru varchar(500),shikaku int,time varchar(100),taiguu varchar(150),kyuuzitsu varchar(100),kyuuka varchar(100),
ouboyouken varchar(200));

-- 検索画面では、職種（歯科助手、歯科衛生士、歯科技工士、歯科受付から選べる）
-- 、場所（都道府県）,雇用（正社員　パート）、サービス形態（クリニック、介護施設、デンタルエステ）から選べる
-- 出力する求人詳細画面は、病院名、給与、住所、アクセス方法、求人タイトル、アピールポイント、求めている人物像、必要資格
-- 時間帯、待遇詳細、休日、長期休暇、応募条件が出てくる

insert into shikanavi(koyou,shokushu,basho,keitai,name,kyuuyo,adress,access,title,apeal,motometeru,shikaku,time,taiguu,kyuuzitsu,kyuuka,ouboyouken) values(1,1,13,1,'サンプルクリニック','月18万円〜２３万円','世田谷区南烏山２−５','京王線芦花公園駅より徒歩１５分','最新設備に囲まれたオープニングクリニックにて歯科衛生士の募集','最新の設備と名医の元で最先端の歯科医学を学べます','歯科衛生士歴３年以上、35歳まで',1,'9時〜１８時','社会保険完備、交通費支給,家賃補助あり','完全土日休み','夏休み３日、正月休み８日','歯科衛生士資格のある人');


insert into shikanavi(koyou,shokushu,basho,keitai,name,kyuuyo,adress,access,title,apeal,motometeru,shikaku,time,taiguu,kyuuzitsu,kyuuka,ouboyouken) values(1,1,13,1,'ゴージャスクリニック','月２１万円〜２３万円','世田谷区南烏山3−５','京王線芦花公園駅より徒歩５分','最新設備に囲まれたオープニングクリニックにて歯科衛生士の募集','最新の設備と名医の元で最先端の歯科医学を学べます','歯科衛生士歴３年以上、30歳まで',1,'9時〜１８時','社会保険完備、交通費支給,家賃補助あり','完全土日休み','夏休み３日、正月休み８日','歯科衛生士資格のある人');