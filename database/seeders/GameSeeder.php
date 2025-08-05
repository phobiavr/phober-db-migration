<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //TODO:: switch to factory

        $now = new DateTime();

        $games = array(
            array(
                'id'          => '1', 'name' => 'Batman Arkham', 'slug' => 'batman-arkham',
                'video'       => 'A8BtoB8MjQ8',
                'description' => '{"az": "Batman’ın əfsanəvi qadjetlərindən istifadə edərək onun ən yaxın dostlarının həyatı üçün təhlükəli olan sui-qəsdin qarşısını alın.\\n\\nMaskanı taxdıqdan sonra özünüzü necə hiss edəcəksiniz?\\n\\nGotham\'i təmizləmə tapşırığınız hələ yeni başlayır, bu dəfə heç vaxt olmadığı qədər qorxuducu və real. Bu virtual reallığa qərq olun və yenilənmiş hekayədə savaşaraq Wayne Manor və Batcave kimi yerləri kəşf edin.", "en": "Experience Gotham City through the eyes of the World\'s Greatest Detective in an all-new Arkham mystery.", "ru": "Взгляните на Готэм глазами величайшего детектива на планете и раскройте новое дело Аркхема."}',
                'rating'      => '4', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '2', 'name' => 'Arizona Sunshine', 'slug' => 'arizona-sunshine',
                'video'       => 'AQNb-pyzCHY',
                'description' => '{"az": "İsti çöllər və təhlükəli kanyonlardan tərk edilmiş qaranlıq mədən ocaqlarına qədər fərqli sahələri sərbəst olaraq kəşf edin və silahları tapmaqla sağ qalmaq üçün əlinizdən gələni edin. Müxtəlif çeşidli silahlarla gərçək həyatdaki kimi nişan alın və atəş açın. Gücünüz yetmədikdə isə dostlarınızla birgə komanda olaraq bütün ssenarini birlikdə oynayın! Bunun üçün Phobia mərkəzində komandalar üçün nəzərdə tutulmuş ayrı zallar da təqdim olunur!\\n\\nArizona Sunshine - VR üçün xüsusi olaraq hazırlanmış zombi mövzulu şuterdir. Birinci şəxs tərəfindən oynanılır. Arizona Sunshine oyunu oturacaqda oturaraq yalnız baş hərəkətləri etməklə kifayətlənmir, bu oyuna bütün bədən cəlb olunur və əsas qəhrəman bütün hərəkətləri oyunda əks etdirir.", "en": "Built exclusively for VR, Arizona Sunshine puts you in the midst of a zombie apocalypse. Handle weapons with real-life movements, freely explore a post-apocalyptic world, and put your survival skills to the test in VR - putting the undead back to rest is more thrilling than ever before.", "ru": "Разработанная исключительно для виртуальной реальности, игра \\"Солнечная Аризона\\" погружает вас в самый эпицентр зомби-апокалипсиса. Реалистичные движения при обращении с оружием, открытый для исследования постапокалиптический мир, возможность испытать свои навыки выживания в виртуальной реальности - упокоение неупокоенных еще никогда не было таким захватывающим приключением!"}',
                'rating'      => '5', 'multiplayer' => '1', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '3', 'name' => 'theBlu', 'slug' => 'theblu',
                'video'       => 'eQkDfxe9F4k',
                'description' => '{"az": "Dərin sualtı aləmin gözəlliklərini kəşf edin! Bu hissləri sözlə ifadə etmək mümkün deyil, sadəcə özünüz sınayın!", "en": "", "ru": ""}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '4', 'name' => 'Superhot', 'slug' => 'superhot',
                'video'       => '86aGaUzlvJ4',
                'description' => '{"az": "Ağlasığmaz hisslər! Dinamika və həyəcan! Lakin siz hərəkətsiz dayandığınız an ətrafınızdakı hər şey donur. Bu izaholunmazdır və bu hissləri sizə Phobia yaşadacaq! Əgər siz buna hazırsınızsa.", "en": "Lose track of what’s real. Commit yourself, body and mind. Confront the evocative, elegantly brutal world of SUPERHOT VR. Enemies pouring into the room from all sides, a dozen bullets coursing through the air.... wait. Something is different here....", "ru": "Впервые запустив SUPERHOT VR, сразу понимаешь, что игра и виртуальная реальность просто созданы друг для друга. Здесь ты чувствуешь себя настоящим Нео из фильма «Матрица», ведь теперь тебе подвластен контроль над временем. И вот ты, уворачиваясь от летящих в тебя пуль, раздаёшь «хэдшоты» налево и направо. Даже голыми руками с лёгкостью разбиваешь головы несущимся на тебя бандитам, а уж если в твоём распоряжении оказался, например, тесак для разделки мяса, противникам совсем не позавидуешь."}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '5', 'name' => 'Serious Sam',
                'slug'        => 'serious-sam-fusion-2017', 'video' => 'VEkC_YAW1kk',
                'description' => '{"az": "Oyunçular arasında ən populyar oyunlardan birini Virtual Realıqda sına! Bu oyun qarşımızda çox sadə qanlı şuter kimi çıxış edir, lakin bu dəfə tam yeni hisslər və emosiyalarla! Virtual Reallığa düşən şuter həvəskarı üçün başqa nə lazımdır?", "en": "Serious Sam is back! And this time it\'s REAL!", "ru": "Serious Sam VR: The Last Hope - это Serious Sam для очков виртуальной реальности Oculus Rift и HTC Vive. В распоряжении игроков окажется классический арсенал Сэма, включая ракетницы, пулеметы и легендарная Серьезная пушка."}',
                'rating'      => '4', 'multiplayer' => '1', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '6', 'name' => 'A Lost Room', 'slug' => 'a-lost-room',
                'video'       => 'NA4Stcx9K8w',
                'description' => '{"az": "Son zamanlar böyük marağa səbəb olan Quest Room artıq Virtual Reallıq sistemindədir! Bu oyunda siz ilk baxışdan “adi” bir otaqdan çixiş yolunu tapmalı olacaqsınız. İpucuları axtarın, maraqlı tapşırıqları həll edin və bu “adi” otaqdan çıxmağa çalışın!\\n\\nBu dəfə siz tamamilə kvestə qərq olarkən qıraqdan izləyən dostlarınız sizə kömək edə biləcəklər!", "en": "A Lost Room is an escape game without the boundaries of the real world, powered by VR. In a place where anything can happen, what will you do to escape this huge complex alive?", "ru": "A Lost Room - игра-головоломка, в которой Вы должны выбраться из обычной, на первый взгляд, комнаты. Ищите подсказки, решайте интересные пазлы и найдите выход из \\"обычной\\" комнаты!"}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '7', 'name' => 'Google Earth VR', 'slug' => 'google-earth-vr',
                'video'       => 'agEAWYNkE8A',
                'description' => '{"az": "Dünyanın istənilən yerinə səyahət etməyə və ən böyük xəyallarınızı gərçəkləşdirməyə hazırsınız? Earth VR sizə bu imkanı yaradır! İlk olaraq haralara səyahət edəcəksiniz?", "en": "Google Earth VR lets you explore the world from totally new perspectives in virtual reality. Stroll the streets of Tokyo, soar over the Grand Canyon, or walk around the Eiffel Tower.", "ru": "Готовы исследовать мир в виртуальной реальности и посетить самые любимые места на планете? Earth VR дарит вам такую возможность!"}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '8', 'name' => 'Gnomes & Goblins', 'slug' => 'gnomes-goblins',
                'video'       => 'Bt2SPU0CwIs',
                'description' => '{"az": "Yaradıcı cırtdanlar yoxsa hiyləgər qoblinlər? Uşaqlar üçün nəzərdə tutulmuş bu oyunda qəhrəmanımız kimin tərəfində olduğunu seçərək sehrli nağıl dünyasına qərq olacaq və möcüzələr aləmini kəşf edə biləcək. Nağıllar dünyası balaca dostlarını gözləyir!", "en": "Explore the interactive fantasy world of Gnomes &amp; Goblins from Jon Favreau, produced by Wevr in collaboration with Reality One. Interact with an enigmatic resident and take a first step into the lucid dream of Gnomes &amp; Goblins and its many realms and denizens.", "ru": "Изучите интерактивный мир фантазий гномов и гоблинов. Взаимодействуйте с загадочными жителями и сделайте первый шаг в ясный сон Гномов и Гоблинов."}',
                'rating'      => '3', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '9', 'name' => 'Tilt Brush', 'slug' => 'tilt-brush',
                'video'       => 'e73uSpDk9uA',
                'description' => '{"az": "İncəsənət və onun qədər hədsiz Virtual Reallıq bir arada. Hisslərinizi 3D formatında əks etdirin, bütün otağı kətan əvəzi istifadə edin və eskizlər ətrafında gəzin. Bir halda ki, bu VR-dır alov, ulduzlar və ya qar dənəcikləri kimi imkansız materiallardan istifadə edin!", "en": "Tilt Brush lets you paint in 3D space with virtual reality. Unleash your creativity with three-dimensional brush strokes, stars, light, and even fire. Your room is your canvas. Your palette is your imagination. The possibilities are endless.", "ru": "Пожалуй, впервые цифровая живопись настолько приблизилась к традиционной, но сразу сделала шаг дальше, ведь в виртуальной реальности холстом становится любое пространство вокруг, а любая картина трехмерна. Управление Tilt Brush достаточно интуитивно и может осуществляться со смартфона. В отличие от традиционных кистей и красок в новой системе материалом для красок могут стать например искры, языки пламени, капли дождя или звезды. Картина перестает быть статической, превращаясь в динамический объект."}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '10', 'name' => 'A-Escape VR', 'slug' => 'a-escape-vr',
                'video'       => 'nQfgmhfc_1g',
                'description' => '{"az": "Xüsusi olaraq VR üçün hazırlanmış kvest. Həyəcan və qorxularınızı kənara atın və çıxış yolunu tapın. Hər şey öz əllərinizdədir, öz gücünüzə güvənin!", "en": "A-Escape is an escape room game built from the ground up for VR. Will you escape in time?", "ru": "A-Escape VR - это паззл для очков виртуальной реальности, выполненный в жанре \\"room escape\\", где игрокам нужно разгадать ряд загадок, дабы покинуть запечатанную комнату."}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '11', 'name' => 'Fruit Ninja VR', 'slug' => 'fruit-ninja-vr',
                'video'       => '8Fteatr4Oro',
                'description' => '{"az": "Halfbrick Studios’dan yenilik! Virtual Reallıqda Ninja qılıncı ilə meyvələri doğramaq telefon versiyasından daha əyləncəli və maraqlıdır!\\n\\nFaktiki olaraq bu mobil cihazlarımızda artıq oynadığımız həmin Fruit Ninja oyunudur, yalnız VR versiyada. Və əgər elə bilirsinizsə ki, bu oyun çox sadədir və diqqətinizə laiq deyil bir daha düşünün - VR’ın ən əyləncəli oyunlarından birini ötürmüş olmayacaqsınız ki?", "en": "Step inside the Fruit Ninja universe and experience a slice of virtual reality like never before. Play Fruit Ninja VR now!", "ru": "Взгляните на мир Fruit Ninja под другим углом, и привычная реальность заиграет для вас новыми гранями! Fruit Ninja VR – уже доступна для загрузки."}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '12', 'name' => 'Paranormal Activity: The Lost Soul',
                'slug'        => 'paranormal-activity-the-lost-soul', 'video' => 'J1IKMfGN500',
                'description' => '{"az": "“Paranormal Activity” filmini xatırlayırsınız? Onun əsasında qurulmuş macəra dolu VR-qorxu oyununa başlamazdan öncə filmi bir daha izləməyinizi tövsiyyə edirik. Naməlum güc tərəfindən ələ alınmış evdən nəyin bahasına olursa olsun sağ çıxmağa çalışın. Hadisələrin gözlənilməz gedişatına hazır olun. Bu oyun ürəyi zəif olanlar üçün deyil!", "en": "Engineered from conception for VR, “PARANORMAL ACTIVITY: THE LOST SOUL” immerses you in a terrifying realistic environment with haunting atmosphere, and the need to survive. With very limited guidance, your free-movement enables you to discover the secrets that lie in this house of horror.", "ru": "Paranormal Activity: The Lost Soul - это приключенческий VR-хоррор по мотивам фильма \\"Паранормальное явление\\". Игроки оказываются в доме, на который напало нечто, и пытаются выжить любой ценой."}',
                'rating'      => '4', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '13', 'name' => 'Raw Data', 'slug' => 'raw-data',
                'video'       => 'JCP8uLcNELE',
                'description' => '{"az": "Diqqətinizi toplayın, zəkanızı işlədin və gizli məlumatları əldə edin!\\n\\nBu oyunda siz transmilli korporasiyaların əlindən qiymətli məlumatları almaq üçün bir sürü ağıllı androidlərlə gərgin və həyəcanverici mübarizə aparmalı olacaqsınız.\\n\\nRaw Data sizə göründüyündən çox daha üstün hissləri yaşadacaq və əsl mübarizənin nə olduğunu göstərəcək!", "en": "Built from the ground up for VR, Raw Data’s action gameplay, intuitive controls, challenging enemies, and sci-fi atmosphere will completely immerse you within the surreal world of Eden Corp. Go solo or team up and become the adrenaline-charged heroes of your own futuristic technothriller.", "ru": "Raw Data - это аркадный шутер для VR-шлемов и очков, в котором игроки должны украсть ценные данные у транснациональной корпорации, ради которых они сражаются с толпами андроидов, а так же с другими людьми по сети."}',
                'rating'      => null, 'multiplayer' => '1', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '14', 'name' => 'The Lab', 'slug' => 'the-lab',
                'video'       => '6v780xoFeo4',
                'description' => '{"az": "Ox ataraq qədim əsirlərdəki tək qalanı müdafiə edin; yeni texnoloqiyalar dünyasında robotları parçalayın; robot-itə oyuncaq ataraq ətrafınızdakı mənzərədən zövq alın; kiçik kosmik gəmini idarə edərək hücümlardan qorunun və digər maraqlı oyunlara qatılın. Ən əsası isə bütün ssenariləri Virtual Reallıqda yaşayın!\\n\\nThe Lab hal hazırda Virtual Reallıq üçün təqdim olunan və HTC Vive üzərindən oynanılan ən maraqlı oyunlardan biridir. Əslində bu bir ədəd oyun deyil, bir neçə mini-oyundan ibarət birlikdir və bu birliyin hər bir hissəsi özünə görə maraqlı və əyləncəlidir.", "en": "Welcome to The Lab, a compilation of Valve’s room-scale VR experiments set in a pocket universe within Aperture Science. Fix a robot, defend a castle, adopt a mechanical dog, and more. Still not sold? It’s free!", "ru": "The Lab – одна из лучших на данный момент игр для виртуальной реальности, которая достаётся обладателям HTC Vive. На самом деле, это даже не одна игра, а набор из 3 мини-игр, каждая из которых по-своему интересна."}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '15', 'name' => 'The Belko Experiment',
                'slug'        => 'the-belko-experiment', 'video' => '3ybfZCJwM1w',
                'description' => '{"az": "Eyni adlı film əsasında yaradılmış oyun. Qorxu və həyəcanla dolu kvest. Bu deyildi sizin istədiyiniz? O zaman hazır olun, bağlı ofisdən çıxış yolunu tapın, amma saniyələrinizi saymağı da unutmayın!", "en": "Exploring the themes in THE BELKO EXPERIMENT, the Belko VR – Escape Room Experiment provokes the question: “What does it take to survive at work?” Players are prompted to solve a series of challenging puzzles in order to escape from their office before a microchip in their head explodes.", "ru": "Игра, созданная на основе одноименного фильма. Квест наполненный страхом и волнением. Не этого ли вы ждали? Готовьтесь найти выход из закрытого здания офиса и не забывайте подсчитывать секунды!"}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '16', 'name' => 'VR Funhouse', 'slug' => 'vr-funhouse',
                'video'       => 'SED9KE2eScI',
                'description' => '{"az": "Son yeniləmədən sonra VR Funhouse oyun birliyi hədsiz imkanlar əldə edib.\\n\\nVR Funhouse ilə əyləncəyə başlayın! Burada siz oyun və əyləncə dolu əsl lunapark atmosferinə qərq olacaqsınız. Tirdə hərəkət edən nişanlara atəş açacaqsınız, klounların üzərinə su tapançasından yapışqan yaşıl maddə atacaqsınız, nişanlara odlu oxlar atacaqsınız, şarları partladacaqsınız və başqa maraqlı və əyləncəli oyunlara qatılacaqsınız!", "en": "Step right up to VR Funhouse and enter a virtual carnival full of fun and games. Be an archer with flaming arrows. Test your skill shooting skeet targets blasted from a cannon. See how many moles you can punch, whack, and much more.", "ru": "В VR Funhouse вам предстоит окунуться в атмосферу настоящего парка аттракционов, полного игр и веселья. С последним обновлением VR Funhouse получила поддержку модов, благодаря чему игровое сообщество теперь располагает бесконечными возможностями для веселья!Поменяйте пистолет с аттракциона на автомат, подожгите волосы кротам или создайте собственную мини игру в виртуальной реальности. С модами в VR Funhouse просто бесконечные возможности для игры."}',
                'rating'      => '3', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '17', 'name' => 'Locked In VR', 'slug' => 'locked-in-vr',
                'video'       => 'R-ow6neZnQ4',
                'description' => '{"az": "Əsl həyəcan hissini yaşamaq istəyirsiniz? O zaman “Locked In VR” oyununa qərq olun və vahiməli zirzəmidən çıxış yolunu tapın! İçinizi bürüyən qorxunu kənara qoyun və burda həbs olunmağınız haqqında bütün gərçəkləri öyrənin. Vaxtınız çox az, otaq çox qaranlıq, “O” isə çox yaxındır.", "en": "Locked In VR is an escape room type experience. The player must use his wits and senses to find his way out of the basement and uncover the terrible truth about his imprisonment.", "ru": "Locked In VR – игра жанра «побег из комнаты», в которой вам предстоит найти выход из мрачного подвала. Используйте ум и интуицию, чтобы отыскать путь на свободу и раскрыть страшную правду о своем заключении. Времени на все у вас будет не много, поэтому действуйте быстро. Нужно успеть покинуть подвал до того, как появится тот, кто вас запер."}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '18', 'name' => 'Fancy Skiing VR', 'slug' => 'fancy-skiing-vr',
                'video'       => 'JHyXRykkmE0',
                'description' => '{"az": "Şəhərdə olarkən xizək sürməkdən ötrü darıxırsınız? Bu oyun hər kəs üçündür, həm yeni başlayanlar, həm də artıq xizək sevənlər üçün. Rekordları qırın, qış mövsümünə hazırlaşın və əsl adrenalin hissini yaşayın!", "en": "Fancy Skiing is developed by HashVR Studio built with the Unity Engine.The game\'s structure is based on real skiing that players use the handles just as ski poles to get power and lean left or right to control the direction, which brings players a strong immersion.", "ru": "Fancy Skiing VR - это VR-игра, посвященная горнолыжному спорту. Эта игра как для начинающих, так и для любителей горных лыж. Готовьтесь к зимнему сезону, бейте все рекорды и ощутите настоящий адреналин!"}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '19', 'name' => 'AFFECTED: The Manor',
                'slug'        => 'affected-the-manor', 'video' => 'oXVu-t2u_0E',
                'description' => '{"az": "AFFECTED - The Manor VR doğurdan da qorxulu horrordur. Bu oyunda siz tərk edilmiş evin hər bir küncündə əsl vahimə ilə rastlaşacaqsınız. Oyunda qorxu atmosferini yaratmaq üçün virtual reallığın bütün imkanlarından istifadə olunub.", "en": "The first chapter of the AFFECTED trilogy is now available on Steam for the HTC Vive. AFFECTED has been commended as one of the best Virtual Reality experiences to date and thus far has over 200 million YouTube hits and countless features worldwide. The most popular horror experience in VR", "ru": "AFFECTED - The Manor VR - это действительно страшный хоррор. Вы погрузитесь в настоящую пучину ужаса, скрывающуюся за каждым углом заброшенного дома. Игра действительно очень страшная и использует все возможности виртуальной реальности для создания соответствующей атмосферы."}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '20', 'name' => 'Apollo 11', 'slug' => 'apollo-11',
                'video'       => 'Lx3zWmpAF5M',
                'description' => '{"az": "Apollo 11 VR bəşəriyyət tarixində görülmüş böyük səyahət haqqında hekayədir.\\n\\nİlk dəfə siz bu inanılmaz tarixi hadisəni bu anları real həyatda yaşayanların yerində dayanaraq hiss edə biləcəksiniz. Sizə yalnız o zamanın detallarını kəşf etdirən deyil, həm də içinizdə NASAnın qızıl erası zamanı \\"Apollon\\" proqramı üzərində işləyənlərə qarşı hörmət hissini oyadan bir təcrübəyə hazır olun.\\n\\nApollo 11 VR sənədli filmin yeni növüdür və burda siz yalnız 1969-cu ilin hadisələrini yaşamayacaqsınız, həm də komanda modulu idarəsini öz üzərinizə götürə, Aya eniş apparatını endirə, Ayın səthini araşdıra və Yerə qayıtmaq üzrə eksperimentlər apara biləcəksiniz.", "en": "Apollo 11 VR is the story of the greatest journey ever taken by humankind. This VR experience is a recreation of the events which took place between July 16th and July 24th, 1969. Now for the first time ever you get to experience this historic event through the eyes of those who lived through it.", "ru": "Apollo 11 VR - это история о величайшем путешествии в истории человечества.\\n\\nВпервые в истории, вы прочувствуете невероятное историческое событие стоя на месте тех, кто действительно прожил эти моменты в реальной жизни. Приготовьтесь к опыту, который не только откроет вам детали того времени, но и зародит в вас чувство уважения к людям, работающим над программой «Аполлон» во время золотой эры НАСА.\\n\\nApollo 11 VR - это новый тип документального фильма, и вы не только сможете пережить события 1969 года, но и взять управление над командным модулем, посадить лунный посадочный аппарат, исследовать поверхность Луны и развернуть эксперименты перед возвратом на Землю."}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '21', 'name' => 'ARAYA', 'slug' => 'araya',
                'video'       => 'f6mJHJ4Wp64',
                'description' => '{"az": "ARAYA birinci şəxs tərəfindən oynanılan horrordur. Hadisələr Tayland hospitallarının birində baş verir.\\n\\nOyunçu üç fərqli qəhrəman tərəfindən hadisələri izləyərək böyük bir pazzlın bütün parçalarını birləşdirməli və Araya adlı şəxsin ölümünün arxasında nələrin dayandığını tapmalıdır.", "en": "ARAYA is a first-person horror game. Players will get a new thrilling experience inside a Thai hospital. The story will be told from the perspectives of 3 different characters. Players will explore different areas of the hospital in order to piece together the mysterious murder case of Araya.", "ru": "ARAYA - это мрачный хоррор с видом от первого лица, действие которого разворачиваются в одном из госпиталей Тайланда.\\n\\nНаблюдая за происходящими событиями от лица трех различных героев, игрок должен будет сложить воедино все части одной большой мозаики и узнать, кто же стоит за убийством некой Арайи."}',
                'rating'      => '4', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '22', 'name' => 'Archangel', 'slug' => 'archangel',
                'video'       => 'QAUqcFdiAwk',
                'description' => '{"az": "Postapokalipsis janrında virtual şuter. Bu oyunda oyunçular öz üzərinə \\"Arxanqel\\" adlı mexaniki robotun pilotu rolunu götürəcəklər.\\n\\nHadisələr XXI-ci əsrin sonlarında, HUMNX meqakorporasiyası tərəfindən idarə olunan Birləşmiş Ştatlardan qalan ərazidə baş verir.\\n\\nSon ümid - altımərtəbəli \\"Arxanqel\\" robotunun pilotu olaraq əsas hücum gücü kimi çıxış etdiyiniz ABŞ-ın azadlıq ordusudur.", "en": "Step into the cockpit of a six-story mech and feel its might at your command! You are the tip of the spear in the United States Free Forces’ war against the overwhelming mechanized forces of HUMNX, a tyrannical corporation that rules a post-apocalyptic America.", "ru": "Постапокалиптический виртуальный шутер, в котором игрокам предстоит принять роль пилота роботизированного костюма-меха «Архангел».\\n\\nСобытия игры разворачиваются в конце XXI века на территории того, что осталось от Соединенных Штатов, контролируемых мегакорпорацией HUMNX. Последняя надежда на спасение — Освободительные войска США, главной атакущей силой которых являетесь вы — пилот шестиэтажного прототипа робота «Архангел».\\n\\nВнезапная атака HUMNX вынудила военных выпустить первого «Архангела» на поле боя слишком рано, поэтому вам самим придется изучать возможности меха и учиться им управлять. В арсенале робота — разнообразное улучшаемое оружие и массивные металлические кулаки для ближнего боя."}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '23', 'name' => 'The Assembly', 'slug' => 'the-assembly',
                'video'       => 'bDzNuoyr6oA',
                'description' => '{"az": "The Assembly oyununda alimlər tərəfindən yaradılmış gizli təşkilat yer alır. Təşkilatın iştirakçıları hesab edirlər ki, mənəvi dəyərlər onların ali potensialını məhdudlaşdırır. Bunkerdə alimlər öz təcrübələrini aparır, bəzilərinin tədqiqat obyekti isə canlı insan olur. The Assembly oyununda təşkilatın laboratoriyasına düşmüş iki əsas qəhrəman çıxış edir.", "en": "A first-person interactive story inspired by real-world anxieties, The Assembly is a long-form game designed for VR. Explore a morally ambiguous organization as two individuals and face tough decisions from contrasting perspectives, that culminates in one of the multiple thrilling conclusions.", "ru": "В The Assembly будет фигурировать тайная организация, созданная учеными. Ее участники считают, что мораль сдерживает их научный потенциал. В бункере ученые проводят свои опыты, причем в одном из них объектом исследования становится живой человек. В The Assembly будет два главных героя, которые попадают в лабораторию организации."}',
                'rating'      => '4', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '24', 'name' => 'Audioshield', 'slug' => 'audioshield',
                'video'       => '7oF9XSenf40',
                'description' => '{"az": "Audioshield musiqili vizualizatordur. Çarpıcı, aktiv və maraqlı oyun.\\n\\nAudioshield oyununda sizin əllərinizdə qırmızı və göy qalxanlar olur. Onların vasitəsi ilə siz musiqinin ritmini tutaraq üzərinizə gələn qırmızı, göy və bənövşəyi rənglərdə nəhəng topları blok etməli olacaqsınız.", "en": "Block the beats! Audioshield puts you at the point of impact for every hit in your songs. Block incoming orbs with your shields and feel the music. Works with any song file, plus online music streaming and Song of the Day.", "ru": "Audioshield — это музыкальный визуализатор. Поразительная, активная и попросту интересная игра.\\n\\nВ Audioshield у вас в руках появляются красный и синий щит с помощью которого вы должны блокировать гигантские пузыри красного, синего или фиолетового цвета, по мере того, как они несутся на вас."}',
                'rating'      => null, 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '25', 'name' => 'Bartender VR Simulator',
                'slug'        => 'bartender-vr-simulator', 'video' => 'g7QsM00SsYU',
                'description' => '{"az": "Bartender VR Simulator barmenlər arasında dünya çempionatının altıqat qalibi Tomek Malek ilə əməkdaşlıq nəticəsində yaradılmış VR oyundur. Bu oyunda oyunçular özlərini barmen rolunda sınayır, içkilər hazırlamağı, müştərilərlə ünsiyyət qurmağı və digər maraqlı şeyləri öyrənirlər.", "en": "Developed in cooperation with a six-time Bartending World Champion, Tomek Malek, Bartender VR Simulator offers you a unique combination of a simulator, bartending course and incredible immersive VR game.", "ru": "Bartender VR Simulator - это VR-игра, созданная в сотрудничестве с шестикратным победителем мирового чемпионата барменов Томеком Малеком, в которой игроки принимают на себя роль бармена, и учатся правильно смешивать напитки, общаться с клиентами и многим другим вещам."}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '26', 'name' => 'Bloody Zombies', 'slug' => 'bloody-zombies',
                'video'       => 'ZbwpT5gGPZw',
                'description' => '{"az": "Bloody Zombies oyununda sizi sağ qalanlar qrupunu bütün mövcud vasitələrdən istifadə edərək məhv etməyə çalışan bir çox zombi gözləyir. İti caynaqlar, öz-özünü məhv etmə və digər silahlara qarşı siz qəhrəmanların bütün bacarıqlarını və taktiki düşüncəni istifadə etməli olacaqsınız. Zombilər ətrafında sağ qalmaq üçün bütün vasitələrə əl atmaq olar.", "en": "Fight across the ruins of London using carefully refined Free-Form Combat, taking down a terrifying variety of mutated zombies with an expanding special move-set. Created for 1-4 players, for online and offline play, Bloody Zombies is also enhanced with HTC Vive and Oculus Rift.", "ru": "В Bloody Zombies вас ждут множество смертоносных зомби и боссов, которые будут использовать все доступные способы для того, чтобы уничтожить группу выживших. В ход пойдут острые когти, самоуничтожение и другое оружие, против которого игрокам придется применить все возможные навыки персонажей, выработать тактику и совершенствовать свои способности. Любые средства хороши для того, чтобы выжить в окружении голодных зомби."}',
                'rating'      => '4', 'multiplayer' => '1', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '27', 'name' => 'Battlezone', 'slug' => 'battlezone',
                'video'       => 'qAaaI3wyYPw',
                'description' => '{"az": "Virtual Reallığın gücünü hiss edin. Dünyanın ən təhlükəli nəqliyyat vasitələrindən biri olan \\"Cobra\\" tankının pilot kabinasında öz bacarıqlarınızı sınayın.", "en": "Strap into the cockpit of the Cobra – the most powerful tank ever built – and experience first-person VR combat across neon-scarred sci-fi landscapes in an explosive campaign for 1-4 players.", "ru": "Ощутите всю мощь VR и перенеситесь в кабину пилота одного из самых опасных транспортных средств на планете – танк «Кобра» (Cobra)."}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '28', 'name' => 'Blue Effect', 'slug' => 'blue-effect',
                'video'       => 'EyEcLlqB7Ho',
                'description' => '{"az": "Blue Effect VR – Virtual Reallıq cihazları üçün yaradılmış qorxulu şuterdir. Bu oyun sizin cəsarətinizlə dözümlülüyünüzü sınağa çəkəcək. Yüksək texnologiyalarla təchiz olunmuş silahlarla həyatda qalmaq uğruna mübarizə aparın. Dərin qorxularınızla üz üzə gəlməyə hazırsınız!", "en": "Our VR only, Blue Effect is an atmospheric sci-fi wave shooter that will thrill you with excitement, test your endurance and your bravery! Use our unique control system, enjoy outstanding sound design and fight for your survival. Are you ready to face your darkest fears?", "ru": "Blue Effect VR – хоррор-шутер на выживание для устройств виртуальной реальности, который испытает вашу отвагу и выносливость. Вооружайтесь высокотехнологичным оружием и сразитесь за свое выживание с мерзкими тварями. Готовы ли вы встретиться лицом к лицу со своими темными страхами?"}',
                'rating'      => '5', 'multiplayer' => '1', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '29', 'name' => 'Bowslinger', 'slug' => 'bowslinger',
                'video'       => 'Suk86RP6Csw',
                'description' => '{"az": "Bowslinger - Virtual Reallıqda orta əsr xarabalıqları arasında ox atmadı. Belinizdəki kisədən oxu çıxarın, yayı dartın, nişan alın və atəş açın! Müxtəlif tapşırıqları yerinə yetirin və Robin Hudu belə qısqandıracaq sürət və dəqiqliyi inkişaf etdirin!", "en": "Ever wanted to shoot an apple off someone’s head? Step into the world of Bowslinger, a VR archery game for the Vive. Grab a bow &amp; arrow and William Tell your way to becoming a master archer. Train your speed and precision with various challenges that would make Robin Hood himself jealous!", "ru": "Bowslinger - стрельба из лука в виртуальной реальности посреди средневековых руин. Возьмите стрелу из колчана на спине, натяните тетиву, прицельтесь и стреляйте! Выполняя различные задачи, развивайте такую скорость и точность, которые заставили бы завидовать даже Робина Гуда!"}',
                'rating'      => null, 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '30', 'name' => 'BOXVR', 'slug' => 'boxvr',
                'video'       => 'jcay328wPh0',
                'description' => '{"az": "Ritm hissi üzərində qurulmuş ruhlandırıcı boks məşqləri. Peşəkar təlimçilər tərəfindən hazırlanan və mütəmadi olaraq yenilənən müxtəlif məşqləri təqdim edən yeganə əlavədir.", "en": "Rhythm-Based Boxing Inspired Workouts. The only VR workout app with regularly updated workouts by professional fitness instructors.", "ru": "Вдохновляющие тренировки по боксу, основанные на чувстве ритма. Единственное приложение с регулярно обновляющимися тренировками от профессиональных инструкторов по фитнесу."}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '31', 'name' => 'The Brookhaven Experiment',
                'slug'        => 'the-brookhaven-experiment', 'video' => 'Ke5FtyfgXL8',
                'description' => '{"az": "Bu oyunda sizə elə gələcək ki, siz silahı hər zamankından yüz dəfə daha yavaş doldurursunuz, çünki həmin anda dəhşətli zombilər yaxınlaşır və sizi həyəcanlanmağa vadar edir. Sağ qalmaq üçün özünüzü ələ almalı, fənərin akkumulyatoruna qənaət etməli, hər an ətrafa baxmalı və bütün hərəkətlərinizi planlaşdırmalı olacaqsınız ki, silahı doldurma zamanı dəhşətli zombilərlə üz üzə gəlməyəsiniz.", "en": "The Brookhaven Experiment is a VR survival shooter for the HTC Vive. Players will have to use the weapons and tools provided to survive ever more terrifying waves of horrific monsters in an attempt to figure out what caused the beginning of the end of the world, and, if they\'re strong enough, stop it from happening.", "ru": "В The Brookhaven Experiment кажется, что Вы перезаряжаете пистолет в сто раз медленнее, чем обычно, потому что в это время к Вам приближаются ужасные зомби, заставляя Вас нервничать. Чтобы выбраться живым, нужно не терять головы, экономить батарейки на фонарике, постоянно смотреть по сторонам и тщательно планировать свои действия, чтобы вдруг не оказаться в процессе перезарядки прямо перед ужасным лицом врага."}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '32', 'name' => 'A Chair in a room: Greenwater',
                'slug'        => 'a-chair-in-a-room-greenwater', 'video' => 'GIE0pNn_Hd4',
                'description' => '{"az": "A Chair in a Room: Greenwater — psixiki xəstəxanada müalicə alan şəxs rolunda olacağınız gərgin qorxu oyunudur. Burda siz özünüz haqqında 6097 nömrəsindən başqa heç nə bilmirsiniz. Hardan olduğunuz və niyə bura düşdüyünüz sir olaraq qalır. Siz sadəcə həkimin verdiyi dərmanları qəbul edirsiniz və özünüz haqda məlumat tapmağa çalışırsınız.", "en": "Explore your surroundings as the protagonist of your own horror story as you immerse yourself in this tense VR thriller set in America’s Deep South. Navigate your way through your memories, piecing together the clues and puzzles, to solve the mystery of how you have awoken in the sinister Greenwater", "ru": "A Chair in a Room: Greenwater — это напряженная игра ужасов виртуальной реальности, в которой вам предстоит выступить в роли пациента психиатрической клиники. Вы не знаете о себе ничего, кроме имени и номера – 6079. Откуда вы и почему здесь оказались, остается загадкой. Вы пьете таблетки, которые дает врач и пытаетесь выяснить о себе хоть что-то."}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '33', 'name' => 'Chess Ultra', 'slug' => 'chess-ultra',
                'video'       => 'vB3D5X-V028',
                'description' => '{"az": "Dünyanın ən intellektual oyununu Virtual Reallıqda sınayın. Yüksək keyfiyyətli qrafika, fiqurların yerini öz əlinizlə dəyişmək imkanı və güclü rəqiblər sizə real oyun hissini yaşadacaq.\\n\\nİxtiyarınıza mükəmməl şahmat dəstləri, rəqib seçmə imkanı və oyun müddəti veriləcəkdir. Şahmat tarixinə öz adınızı yazmaq imkanını əldən buraxmayın!", "en": "Introducing Chess Ultra; the most breathtaking chess game ever made. Experience stunning 4K visuals, seamless online multiplayer, Grandmaster approved AI and full VR compatibility.", "ru": "Сыграйте в самую интеллектуальную игру всех времен в виртуальном мире. Графика с высоким уровнем разрешения и сильные противники дадут ощущение реальной игры. Даже сможете самостоятельно (собственными руками) передвигать фигуры по доске.\\n\\nВам будут доступны идеальные наборы шахмат, возможность выбора противника и продолжительности игры. Не упустите невероятную возможность войти в историю шахмат!"}',
                'rating'      => '4', 'multiplayer' => '1', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '34', 'name' => 'Climbey', 'slug' => 'climbey',
                'video'       => 'ZH_oth0tZYo',
                'description' => '{"az": "Climbey - Virtual Reallıqda yüksəklikləri fəth etmək üçün yaradılmış oyundur. Əsas məqsədiniz mümkün qədər tez zamanda bütün maneələrdən keçərək ən hündür nöqtəyə qalxmaqdır. Oyunu anlamaq çox asandır, lakin mənimsəmək bir az çətin olacaq. Qorxularınızla üz üzə gəlməyə cəsarətiniz var?", "en": "Climbey is a VR-only climbing game! The goal is to climb to the finish as fast as you can, avoiding obstacles and trying not to fall along the way.", "ru": "Climbey — игра для восхождения в виртуальной реальности! Вам предстоит как можно быстрее подняться к финишной точке, при этом максимально избегая возникающих на вашем пути препятствий. Игру очень легко понять, но крайне сложно освоить. Осмелитесь ли вы бросить себе вызов?"}',
                'rating'      => '5', 'multiplayer' => '1', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '35', 'name' => 'Dead Hungry', 'slug' => 'dead-hungry',
                'video'       => 'AwEh7uKIt10',
                'description' => '{"az": "Dünyanın sonu gəldi, zombilər qoşunu yaxınlaşır və siz xilas olmağın tək bir yolunu bilirsiniz: ətli və pendirli cheeseburger\'lər! Əfsanəvi PixelJunk seriyasının yaradıcılarının təqdim etdiyi bu yeni və dinamik oyunda siz heç nədən qorxmayan və əlinin altına keçən hər şeydən düzəltdiyi hamburgerlərlə zombiləri insanlara çevirən fastfood işçisi rolunda olacaqsınız. Məktəbliləri, ofis içşilərini və hətta sumo döyüşçülərini aclıqdan xilas edin!", "en": "Dead Hungry is a fast-paced VR game developed by Q-Games, creators of the PixelJunk series. Restore zombies to human form by loading up huge hamburgers and hurling them to the grateful undead. Your weapons of choice are burgers, pizza, fries--and anything else you can pick up!", "ru": "Миру настал конец, орда зомби приближается, и вы знаете только один способ спастись: тройной чизбургер с говядиной и сыром! В новой динамичной игре от создателей легендарной серии PixelJunk вы окажетесь в роли бесстрашного работника закусочной на колесах, который может превращать зомби в людей с помощью гамбургеров, сделанных из всего, что попадается под руку. Спасите школьниц, офисных клерков и борцов сумо от мертвецкого голода."}',
                'rating'      => null, 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '36', 'name' => 'Dead Secret', 'slug' => 'dead-secret',
                'video'       => 'GKxUTExxmks',
                'description' => '{"az": "Sirli cinayətin jurnalist araşdırması haqqında bəhs edən triller elementləri ilə qarışıq horror. Gizli keçmişi olan Harris Bullard beş gün əvvəl öz iş otağında ölü tapılmışdır. Şübhəli şəxslər yoxdur və polis cinayətkarı axtarmaqda tələsmir. Siz dəlilləri və Harrıs Bullardın keçmişini araşdıraraq bu cinayətin sirrini tapmalı olacaqsınız.", "en": "Dead Secret is a first-person horror mystery set in rural Kansas in 1965. A reclusive professor is dead and it’s up to you to crack the case before you become the next victim. Investigate the murder and explore the story Time Magazine called “captivating” and “deeply creepy” .", "ru": "Dead Secret — это хоррор с элементами триллера, который рассказывает об одном журналистском расследовании загадочного убийства. Харрис Буллард, затворник с загадочным прошлым, был найден мертвым в своем кабинете пять дней назад. Подозреваемых нет, и полиция не спешит искать убийцу. Вам предстоит раскрыть тайну этого загадочного преступления, изучая улики и раскрывая тайны прошлого Харриса Булларда."}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '37', 'name' => 'Don\'t Knock Twice',
                'slug'        => 'dont-knock-twice', 'video' => 'rJ-axeMT_Lg',
                'description' => '{"az": "Don\'t Knock Twice - süjeti şəhər əfsanəsi üzərində qurulmuş, birinci şəxs tərəfindən oynanılan horror oyunudur. İnanclara görə şəhərdə Baba-Yaqa adlı (bəli, sovet dövrünün nağıllarından tanıdığımız həmin Baba-Yaqa) bir iblis yaşayır. Bu iblis insanları qulluqçu kimi işlədir ki, onlar ona uşaqları yem olaraq gətirsin. Bu iblisin qapısını iki dəfə döyən hər kəs şübhəsiz onun növbəti qurbanına çevrilir.", "en": "Don\'t Knock Twice is a first-person horror game based on a psychologically terrifying urban legend. One knock to wake her from her bed, twice to raise her from the dead. Supports VR on HTC Vive and Oculus Rift for the ultimate horror experience!", "ru": "Don\'t Knock Twice — хоррор от первого лица, сюжет которого сосредоточен на городской легенде. По старым поверьям, существует некий демон, Баба Яга (да-да, та самая героиня советских сказок), который использует людей в качестве слуг, чтобы те помогали ему питаться детской плотью. Тот, кто постучит в дверь к этому демону два раза, гарантировано становится его целью и возможной жертвой."}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '38', 'name' => 'Don\'t let Go', 'slug' => 'dont-let-go',
                'video'       => 'LH8SsFc0MEA',
                'description' => '{"az": "Qeyri-adi horror: siz ofisdə oturursunuz, masanın üstündə, sizin qabağınızda noutbuk var. Klavişləri basın və saxlayın. Buraxmaq olmaz. Daha sonra isə otaqda qəribə hadisələr baş verəcək, amma siz klavişləri buraxmayın!", "en": "In these 2 short experiences, you are sat in a chair with your hands in front of you on the keyboard. Now, whatever happens, Don\'t Let Go!", "ru": "Необычная страшилка: вы сидите в офисе, на столе, перед вами, лежит ноутбук. Нажмите на клавиши и держите их. Отпускать нельзя. Скоро в комнате будут происходить странные вещи…"}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '39', 'name' => 'Dota 2', 'slug' => 'dota-2',
                'video'       => 'SHMFmr_Cbp8',
                'description' => '{"az": "Dota 2 - artıq Virtual Reallıq rejimində də təqdim olunan əfsanəvi oyundur. İndi asanlıqla cybersport turnirini keçirmək, gücünüzü və bacarıqlarınızı göstərmək mümkündür!", "en": "Every day, millions of players worldwide enter battle as one of over a hundred Dota heroes. And no matter if it\'s their 10th hour of play or 1,000th, there\'s always something new to discover. With regular updates that ensure a constant evolution of gameplay, features, and heroes, Dota 2 has truly taken on a life of its", "ru": "Dota 2 – это легендарная игра, которая стала теперь доступна и в формате виртуальной реальности. Теперь можно с легкостью устроить настоящий киберспортивный турнир и померяться силами и скилами."}',
                'rating'      => '4', 'multiplayer' => '1', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '40', 'name' => 'Duck Season', 'slug' => 'duck-season',
                'video'       => '_hGZBbhiTmE',
                'description' => '{"az": "Virtual Reallıqda - ördəklər ovu simulyatoru! 90-lara qaytaran bu oyun horror elementləri və 8 fərqli sonluqları ilə daha da əyləncəli oldu!", "en": "The game of your dreams just dropped DUCK SEASON, a hunter with ridiculous graphics. Luckily, it\'s summer vacation and Mom just surprised you with a one day rental of it! Unfortunately, as you binge play it becomes apparent that all is not right with Duck Season...", "ru": "Сначала кажется, что Duck Season - это обычная VR-версия культовой ретро-игры Duck Hunt для NES. Однако, после того, как вы запустите эту игру на приставке, станет понятно, что эта охота на уток совсем не та, что раньше: утки теперь разрываются на кровавые ошмётки, а пёс-помощник выглядит настолько странно, что никто вас не осудит, если вы его пристрелите."}',
                'rating'      => '4', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '41', 'name' => 'Eleven: Table Tennis VR',
                'slug'        => 'eleven-table-tennis-vr', 'video' => 'LN9k6AY4jC0',
                'description' => '{"az": "Virtual Reallıqda stolüstü tennis simulyatoru. Oyuna tamamilə qərq olun, bütün dünya üzrə oyunçularla yarışın, zərbələr üzərində işləyin, reaksiya sürətini artırın, bacarıqlarınızı tətbiq edin və ən güclü rəqiblərlə yarışa hazırlaşın. Sizi real insanlarla real bir yarış gözləyir, o dərəcə real ki, Virtual Reallıqda olduğunuzu unudacaqsınız!", "en": "The ultimate Table Tennis simulator. Play opponents in online multiplayer or practice against the advanced AI. With physics designed to be as real as ever achieved in a Table Tennis simulator, you will forget you are in VR.", "ru": "Eleven: Table Tennis VR – симулятор игры в настольный теннис в виртуальном мире. Окунитесь с головой в игру, вступите в схватку с противниками по всему миру, отрабатывайте удары, повышайте скорость реакции, применяйте полученные навыки и тогда сможете бросить вызов самым продвинутым игрокам. Вам предстоит реальный бой с реальными людьми, вы гарантированно забудете о том, что находитесь в виртуальном пространстве."}',
                'rating'      => '4', 'multiplayer' => '1', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '42', 'name' => 'Emily Wants To Play',
                'slug'        => 'emily-wants-to-play', 'video' => 'AAHvF_2o0A4',
                'description' => '{"az": "Pizza çatdıran kuryerin sonuncu sifarişi qalıb. Saatlar 11-i göstərir, sifarişi gətirdiyi yer xeyli boş görünür, evin özü isə tərk edilmiş, pəncərələr taxtalarla qapanıb, qazon baxımsız haldadır. Pizzanın çatdırılması üçün bu yer qəribə olsa da, yağan yağış və evdən sızan işıq onu evə yaxınlaşmağa vadar edir.", "en": "It’s 11pm and the last house on your route. The windows are boarded up, the yard is overgrown, but the lights are on and the front door is open… strange place to deliver a pizza. You’re getting soaked from the rain, so you hesitantly step inside the house. You shouldn’t have done that.", "ru": "У безымянного доставщика пиццы выдался тяжелый день. Но вот он почти подошел к концу — на часах 11 ночи, остался последний дом. Район оказался пустоватым, да и дом выглядел каким-то заброшенным с заколотыми наглухо окнами и неухоженным газоном, заросшим травой. Но дождь лил как из ведра, в доме прослеживались признаки света, а заказ был последним в списке. Место для доставки пиццы очень странное, спору нет, но хозяева ведь дома, похоже."}',
                'rating'      => '3', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '43', 'name' => 'Escape Bloody Mary',
                'slug'        => 'escape-bloody-mary', 'video' => 'W58f4ff9p4s',
                'description' => '{"az": "Qanlı Meri əfsanəsi əsasında qurulmuş qısa horror oyunu. İşığı söndürün, şamları yandırın və güzgüyə baxaraq onun adını üç dəfə səsləyin. Bundan sonra ya siz çıxışı tapacaqsınız, ya Meri sizin ruhunuzu alacaq!", "en": "If you summon an evil spirit, you have to be prepared to face the consequences. Locked in your bathroom you must use your surroundings to stop Bloody Mary from coming through your mirror and claiming your soul in this thrilling VR escape.", "ru": "Escape Bloody Mary – непродолжительный хоррор для VR, основанный на легенде о Кровавой Мэри. Выключите свет, зажгите свечи и произнесите ее имя три раза, глядя в зеркало в ванной, чтобы призвать ее. Сможете ли вы найти выход, прежде чем Кровавая Мэри заберет вашу душу?"}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '44', 'name' => 'Everest VR', 'slug' => 'everest-vr',
                'video'       => 'w-3D_et6cfo',
                'description' => '{"az": "Everest VR - Virtual Reallıqda birinci şəxs tərəfindən oynanılan tədqiqat macərasıdır. Everest zirvəsinə öz otağınızdan belə qalxa bilərsiniz. Oyunçulara dağçıların əsas marşrutları üzrə dünyanın ən arzu olunan zirvəsinə səyahət etmək imkanı verilir.", "en": "Experience what it feels like to climb Mount Everest through a sequence of immersive first-person locations as you strive to reach the top of the world. Incomparable visual fidelity combined with player agency in a VR journey that feels both real and emotionally stunning.", "ru": "Everest VR - исследовательское приключение с видом от первого лица для устройств виртуальной реальности. Вы сможете взойти на Эверест прямо из своей комнаты. Игра предлагает отправиться в путешествие по основным маршрутам альпинистов к заветной вершине всего мира."}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '45', 'name' => 'Fast Action Hero',
                'slug'        => 'fast-action-hero', 'video' => 'HQKthtBriuo',
                'description' => '{"az": "Bu dəfə sən Max Payne tərzində triller qəhrəmanısan: əllərində silahlar, güllələrin səsi və dağılan divarların gurultusu. İçindəki hissləri çölə burax, dağıt, sındır, kəs. Tozun yerə oturmasını və düşmənlərin son səslərinin kəsilməsini gözlə... və yenidən başla.", "en": "Dive into your favorite action movie: a smoking gun in your hand, bullets whizzing past your ears while the walls start to crumble around you!", "ru": "Приветствуем, теперь ты герой боевика в стиле Макс Пейн: в руках по пистолету, свист пулей, грохот разрушенных стен. Выпусти на волю внутреннего зверя, круши, ломай, режь. Дай пыли осесть, а стонам врагов затихнуть… и начни все сначала. Пройди весь путь от начала до конца и дай своей воле сломаться под натиском противника."}',
                'rating'      => '4', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '46', 'name' => 'Final Soccer VR', 'slug' => 'final-soccer-vr',
                'video'       => 'oPAHNtMdFBM',
                'description' => '{"az": "Final Soccer VR xüsusi olaraq virtual reallıq üçün nəzərdə tutulmuş futbol simulyatorudur. Bu simulyator oyunçulara qapıçı və ya hücumçu rolunda unudulmaz oyun təcrübəsi yaşadır.", "en": "Final Soccer VR is a football simulator specially designed for Virtual Reality. It offers an incredible experience playing as a goalkeeper (VIVE/OCULUS) or striker (VIVE). This game was named previously Final Goalie.", "ru": "Final Soccer VR — это футбольный симулятор, разработанный специально для виртуальной реальности. Он предлагает невероятный опыт игры в качестве голкипера или нападающего."}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '47', 'name' => 'First Person Tennis',
                'slug'        => 'first-person-tennis', 'video' => 'j6iKOceRtSI',
                'description' => '{"az": "First Person Tennis - oyunu mümkün dərəcədə reallıq hissi ilə yaşamaq üçün yalnız birinci şəxs tərəfindən oynanılan dünyadakı ilk video oyundur.\\n\\n13 real turniri keçərək və öz rekordlarınızı yüksəldərək dünyanın 1 nömrəli oyunçusu olun!", "en": "First Person Tennis is the first tennis simulator developed for HTC Vive and Oculus Rift. Now, you can play on a real tennis court and face professional tennis players. You\'ll have to show all your technical and tactical skills. The game is designed for gamepad or keyboard too.", "ru": "First Person Tennis является первой видеоигрой в мире, созданной только с видом от первого лица, чтобы дать вам улучшенный реализм игры. Попытайтесь стать номером 1 в мире, пройдя все 13 реальных турниров и побив свои личные рекорды!"}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '48', 'name' => 'FORM', 'slug' => 'form',
                'video'       => '-xhlIR4DIkg',
                'description' => '{"az": "Tapmacaların yuxu və xatirələrdən ibarət olduğu sürreal macəranı sınayın. Qədim artefaktın sirrini tapın. Ətrafınızda gözəlləşən dünyanı kəşf edin.", "en": "Enter a surreal adventure where puzzles are built from dreams and memories. Solve the mystery behind an ancient artifact. Advance through a world that transforms around you. Transcend this existence.", "ru": "Испытайте сюрреалистическое приключение, где головоломки создаются из снов и воспоминаний. Раскройте секрет древнего артефакта. Продвигайтесь через мир, который преображается вокруг вас."}',
                'rating'      => '4', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '49', 'name' => 'The Gallery: Episode 1',
                'slug'        => 'the-gallery-episode-1', 'video' => 'XL0QmNBX3TQ',
                'description' => '{"az": "The Gallery - xüsusi olaraq virtual reallıq sistemləri üçün yaradılmış, tədqiqatlar haqqında bəhs edən fantastik epizodik oyundur. Bu oyun 80-ci illərin fantasy janrında olan macəra dolu filmlərinin abu-havasını ötürür.", "en": "Your missing sister, an ancient machine, and a sinister presence await in this first chapter of The Gallery, the groundbreaking built-for-VR adventure series inspired by dark 80’s fantasy films. Join the VR adventure, and answer the Call of the Starseed.", "ru": "The Gallery - эпизодическая фэнтезийная игра об исследованиях, созданная специально для систем виртуальной реальности. Она разработана в духе приключенческих фильмов в жанре фэнтези 80-х годов."}',
                'rating'      => null, 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '50', 'name' => 'The Gallery: Episode 2',
                'slug'        => 'the-gallery-episode-2', 'video' => '0iBttgugMEU',
                'description' => '{"az": "Ovucunuzda sirli yeni gücü hiss etdikdən sonra siz keçmişi sirlərlə dolu, çoxdan unudulmuş Ember dünyasına getməli olacaqsınız. Elsini tapın, Ember tarixinin sirrini açın və qaranlıq fiqurun əsl niyyətini öyrənin", "en": "After receiving your Gauntlet, a mysterious new power in the palm of your hand, you must travel to Ember, a long-forgotten world whose past holds many secrets. Find Elsie, uncover the history of Ember, and reveal the true intentions of the dark figure in the Starseed.", "ru": "Получив свою Рукавицу, таинственную новую силу на ладони, вы должны отправиться в Эмбер, давно забытый мир, чье прошлое содержит много секретов. Найдите Элси, раскройте историю Эмбера и покажите истинные намерения темной фигуры в Звездном семени."}',
                'rating'      => '4', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '51', 'name' => 'The Gleam: VR Escape the Room',
                'slug'        => 'the-gleam-vr-escape-the-room', 'video' => 'Grogq1cMB_s',
                'description' => '{"az": "The Gleam - HTC Vive üçün yaradılmış kvest oyunudur. Tapmacaların cavablarını tapın, şifrəni öyrənin və \\"The Gleam\\" sirlərini aşkar edin ki, bu dəhşətli cəhənnəmdən çıxa biləsiniz.", "en": "The Gleam is an escape the room game for the HTC Vive. Solve puzzles, decipher code, and unravel the mysteries of the \\"gleam\\" in order to escape from this claustrophobic hell.", "ru": "The Gleam - это квест, созданный специально для HTC Vive. Разрешите головоломки, расшифруйте код и разгадайте тайны The Gleam, чтобы освободиться от этого ужасающего ада."}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '52', 'name' => 'GORN', 'slug' => 'gorn',
                'video'       => '_32xYeyqQtA',
                'description' => '{"az": "GORN - Broforce və Genital Jousting yaradıcılarından təqdim olunan VR-ekşn oyunudur. Bu oyunda oyunçular meydanda qladiator rolunda yarışırlar. Oyunçuları müxtəlif silahlar, realistik fikizi cəhətlər və onların əsasında qurulmuş döyüş sistemi gözləyir.", "en": "GORN is a ludicrously violent VR gladiator simulator, made by Free Lives, the developers of Broforce and Genital Jousting.", "ru": "GORN - это аркадный VR-экшен от создателей Broforce и Genital Jousting, где игроки сражаются сражаются на аренах в роли гладиаторов. Игроков ждут множество видов оружия, реалистичная физика и основанная на ней боевая система, позволяющая творить с противниками разные нехорошие вещи."}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '53', 'name' => 'Gun Club VR', 'slug' => 'gun-club-vr',
                'video'       => 'ir8chcbAHPY',
                'description' => '{"az": "Gun Club VR - poliqon ərazisində qeyri-adi nişanlar və canlı ölülər üzərində müxtəlif çoxsaylı silahları test etməyə imkan verən virtual tirdir.", "en": "Take to the range with an arsenal of the world’s most powerful weaponry in Gun Club VR. Addictive gameplay and unsurpassed realism combine to make Gun Club VR the ultimate virtual weapon simulator. The only thing missing is the smell of the gunpowder.", "ru": "Gun Club VR - это виртуальный тир, в котором игроки оказываются на полигоне вместе с огромным количеством разнообразного оружия, которое можно тестировать как на обычных мишенях, так и на нестандартных - вроде полчищ живых мертвецов."}',
                'rating'      => '4', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '54', 'name' => 'Gunheart', 'slug' => 'gunheart',
                'video'       => '1dCyc5yBFYM',
                'description' => '{"az": "Gunheart oyununda oyunçu, ağlı və qəlbi bütün qalaktika üzrə ölüm törədən robot-maşınlarla bağlı olan futuristik ovçu rolunda çıxış edəcək. Hərəkətlər hər kəsə artıq tanış olan VR-teleport vasitəsi ilə həyata keçirilir. Burda siz rəqiblərinizi müxtəlif silahlarla məhv edərək növbəti səviyyələrə keçə bilirsiniz.", "en": "Gunheart is a co-op shooter built from the ground up for virtual reality. You and your friends will inhabit robotic bounty hunters trying to make a buck at the edge of the galaxy; there you will blast aliens, explore exotic locations, and rake in cash to boost your rig.", "ru": "В Gunheart игрок станет футуристическим охотником, чей ум и сердце связаны с роботами-машинами для убийств по всей галактике. Движение обрабатывается по уже знакомой пользователям VR телепортации, вы можете проходить через уровни, уничтожая врагов различным оружием, которое можно держать в любой руке. Оружие представлено разнообразными видами, начиная с арбалетов, заканчивая штурмовыми винтовками. Также можно перемещаться на возвышенности, чтобы получить преимущество перед врагами. Однако учтите, что соперники быстро адаптируются. Gunheart предлагает вам пройти сюжетный уровень, а также поучаствовать в кооперативе до трех игроков."}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '55', 'name' => 'I Expect You To Die',
                'slug'        => 'i-expect-you-to-die', 'video' => '5u7XSzGTN2o',
                'description' => '{"az": "I Expect You To Die, sizi qüsursuz xarici görünüşə malik, yüksək səviyyədə təlimatlandırılmış gizli agentə çevirəcək. Bütün agentlər kimi siz də son dərəcə təhlükəli əməliyyatlara qarışmalı, çıxılmaz vəziyyətlərə və dəhşətli yerlərə düşməli olacaqsınız. Sağ qalmaq üçün ağlınızı, bütün bacarıqlarınızı və zəkanızı işlədin. Faciəvi sonluğun qarşısını almaq üçün mümkün olan bütün resursları istifadə edin.", "en": "Play as a secret agent armed with telekinetic abilities on a mission to stop Zoraxis, a nefarious global weapons and pharmaceutical corporation.", "ru": "I Expect You To Die превратит вас в одетого с иголочки и хорошо обученного секретного агента. Как и всем агентам, вам придется браться за крайне опасные для жизни операции, находиться в безвыходных ситуациях и самых мерзких местах. Используйте всю свою смекалку, ум и изворотливость для того, чтобы выжить. Воспользуйся всеми возможными ресурсами, которые найдете для предотвращения трагического исхода. А мы говорили уже о способностях к телекинезу? Хотя, вы и так все узнаете."}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '56', 'name' => 'Iron Wolf VR', 'slug' => 'ironwolf-vr',
                'video'       => 'LCwl-uA7ZAo',
                'description' => '{"az": "IronWolf VR - virtual reallıq cihazları üçün yaradılmış sualtı gəmi simulyatorudur. Bu simulyatorda oyunçular düşmən gəmilərini məhv edir, konvoylara hücum etməli və düşmənlərin dağıdıcı hücumlarından gizlənməli olacaqlar.", "en": "IronWolf VR is a roomscale submarine game playable either singleplayer or online co-op with motion controls. Built from the ground up for VR, each part of the submarine has been crafted for an optimal VR experience", "ru": "IronWolf VR - это симулятор подводной лодки для очков виртуальной реальности, в которой игроки уничтожают вражеские корабли, охотятся на конвои и уходят от атак эсминцев противника. Игроки могут играть как в одиночку, так и по Сети, выполняя задания вместе с друзьями."}',
                'rating'      => '4', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '57', 'name' => 'Island 359', 'slug' => 'island-359',
                'video'       => 'WX5Z-w2vWx4',
                'description' => '{"az": "Helikopterdən enər-enməz, sağ qalmaq uğrunda mübarizə aparan dinozavrlarla dolu mənzərəli tropik adaya ayaq basan oyunçular ilk andan hadisələr mərkəzinə düşürlər. Oyunçulara tam sərbəstlik və çoxsaylı müxtəlif silahlar verilir. Ərazini kəşf etmək və böyük məsafələri tez keçmək üçün isə teleport rejimindən fərqlənən, sürətli qabağa yığmanı xatırladan yeni \\"sprint\\" sistemi kömək edəcək.", "en": "Island 359 is a Virtual Reality survival game for the HTC Vive and Oculus Rift+Touch. Players will use the guns, knives, upgrades, and other tools found on the island to survive for as long as they can against hordes of dinosaurs, as they explore the increasingly dangerous island.", "ru": "Игроки сразу попадут в гущу событий, высадившись с вертолета на живописный тропический остров, заполненный борющимися за выживание динозаврами.\\n\\nУ вас будет полная свобода действий и куча разнообразного оружия и снаряжения, а исследовать территорию острова и преодолевать большие расстояния без эффекта укачивания поможет новая система \\"спринта\\", которая напоминает ускоренную перемотку видео вперед и ощущаться игроком более естественно, нежели телепорты."}',
                'rating'      => '4', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '58', 'name' => 'Job Simulator', 'slug' => 'job-simulator',
                'video'       => 'JIZrTK3jD-Y',
                'description' => '{"az": "İstehzalı simulyator. Robotların insanları bütün sahələr üzrə əvəz etdiyi bir dünyada siz \\"iş simulyatoruna\\" düşəcəksiniz və işləməyin necə bir hiss olduğunu öyrənəcəksiniz.", "en": "In a world where robots have replaced all human jobs, step into the \\"Job Simulator\\" to learn what it was like \'to job\'.", "ru": "Ироничный симулятор. В мире, где роботы заменили людей во всех делах, вам предстоит попасть в «симулятор работы», чтобы узнать, каково это было – «работать»."}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '59', 'name' => 'Killing Floor', 'slug' => 'killing-floor',
                'video'       => 'QnTj9-E8gDs',
                'description' => '{"az": "Kooperativ zombi-şuter. Oyunçular ağlını itirmiş alimin eksperimentləri nəticəsində azadlığa çıxan və xaos yaradan zombilərin tələsinə düşürlər. Amansız monstrlardan qurtulmaq üçün oyunçulara samballı arsenal təqdim olunur.", "en": "6-player co-op survival horror at its finest! Free updates, free special events and a ridiculous amount of fun!", "ru": "Killing Floor – это кооперативный зомби-шутер. Игроки оказываются в ловушке после того, как плоды экспериментов безумного ученого вырываются на свободу и начинают сеять хаос. Чтобы отбиваться от безжалостных толп монстров, игроку предоставляется внушительный арсенал. Например, огнеметом можно заварить двери и тем самым задержать врагов."}',
                'rating'      => '5', 'multiplayer' => '1', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '60', 'name' => 'La Peri', 'slug' => 'la-peri',
                'video'       => 'Hzz0KOuVv9c',
                'description' => '{"az": "Fransız bəstəkar Paul Duk\'un eyni adlı xoreoqrafik poemasının kompozisiyası əsasında qurulmuş virtual balet. Sizi Ölümsüzlük Çiçəyini axtaran şəhzadə İsgəndərin unudulmaz hekayəsi gözləyir. Özünüzü səhnədə, La Peri dünyasının personajlarından biri tək hiss edin.", "en": "Enter a realm of enchantment with \\"FIREBIRD - La Péri\\", and play the role of Iskender, a prince seeking the \\"flower of immortality\\". You will appear on the stage, visit the ethereal world of La Péri, and witness a magical and poetic encounter as one of the characters...", "ru": "Виртуальный балет для VR-устройств, основанный на композиции для одноименной хореографической поэмы французского композитора Поля Дюка. Вас ждет уникальная история Искендера – принца, ищущего Цветок Бессмертия. Вы окажетесь на сцене и посетите эфемерный мир La Peri как один из персонажей."}',
                'rating'      => '4', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '61', 'name' => 'Music Inside', 'slug' => 'music-inside',
                'video'       => 'yVW6_1lNRns',
                'description' => '{"az": "HTC Vive və Oculus Touch ilə uyğunlaşan ən yaxşı ritmik VR oyun! Music Inside! Burda siz öz musiqi kitabxananızdan və ya SoundCloud\'un hədsiz siyahısından istənilən mahnını seçə bilərsiniz.", "en": "The best VR rhythm game compatible with HTC Vive and Oculus Touch! Music Inside! You can choose any song from either your own music library or the never-ending list on SoundCloud.", "ru": "Лучшая ритмичная VR-игра, совместимая с HTC Vive и Oculus Touch! Music Inside! Вы можете выбрать любую песню из вашей собственной музыкальной библиотеки или бесконечного списка в SoundCloud."}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '62', 'name' => 'Narcosis', 'slug' => 'narcosis',
                'video'       => 'HJxFR-iW0NY',
                'description' => '{"az": "Narcosis oyununda Sakit okeanın qaranlıq dərinliklərində sağ qalmağa çalışın!", "en": "Survival, horror at the sunless depths of the Pacific Ocean: Stranded on the seafloor with low light and few tools, an industrial diver takes desperate steps to surface before his oxygen — and sanity — give out.", "ru": "Попробуйте выжить в беспросветных глубинах Тихого океана с Narcosis!"}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '63', 'name' => 'NBA 2KVR Experience',
                'slug'        => 'nba-2kvr-experience', 'video' => 'Xe90JNkSCvk',
                'description' => '{"az": "\\"NBA 2KVR Experience\\" sizə basketbol sahəsinə çıxmaq və Paul George\'dan məsləhətlər almaq üçün bənzərsiz imkan yaradır. Rahat mənimsənən, əyləncəli virtual basketbol matçlarında iştirak edin və təcrübələrinizi artırın. NBA 2KVR Experience ilə peşəkar basketbol matçının abu-havasını hiss edin!", "en": "NBA 2KVR Experience gives you the thrill of walking right onto the court, with All-Star Paul George providing guidance and tips. Compete in a series of fun and intuitive virtual reality basketball mini-games with numerous Gatorade boosts available to improve your performance.", "ru": "NBA 2KVR Experience предоставит вам потрясающую возможность выйти прямо на площадку, где Пол Джордж, игрок матча всех звезд, будет помогать вам советами и подсказками. Участвуйте в легких в освоении и веселых баскетбольных мини-играх в виртуальной реальности с доступом ко многочисленным усилениям Gatorade, улучшающим ваши характеристики. С помощью NBA 2KVR Experience вы сможете ощутить атмосферу профессиональной баскетбольной площадки."}',
                'rating'      => '4', 'multiplayer' => '1', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '64', 'name' => 'Neurowake', 'slug' => 'neurowake',
                'video'       => 'KsnAew_wo_U',
                'description' => '{"az": "Neurowake - xüsusi olaraq VR üçün yaradılmış komanda oyunudur. Unikal bacarıqları və müxtəlif silahları ilə fərqlənən beş əfsanəvi qəhrəmandan birini seçin və ayrı-ayrı məkanlarda, fərqli matç tiplərində yarışın!", "en": "Neurowake is a team-based FPS game, designed exclusively for VR. Choose between one of five epic heroes, each with their own unique weapons and skills and compete across a variety of environments and match types!", "ru": "Neurowake - это командная игра, разработанная исключительно для VR. Выберите одного из пяти легендарных героев, каждый из которых наделен уникальными навыками и оружием, и соревнуйтесь в различных средах и типах матчей!"}',
                'rating'      => '5', 'multiplayer' => '1', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '65', 'name' => 'Obduction', 'slug' => 'obduction',
                'video'       => 'wViIcp9BgSw',
                'description' => '{"az": "Obduction – qeyri-adi dünyalarda möhtəşəm, bənzərsiz, unikal və unudulmaz səyahətdir. Burda siz atəş açmalı olmayacaqsınız. Burda ölmək belə mümkün deyil!", "en": "A new sci-fi adventure from Cyan, the creators of Myst. Abducted far across the universe, you find yourself on a broken alien landscape with odd pieces of Earth. Explore, uncover, solve, and find a way to make it home.", "ru": "Obduction – великолепная, завораживающая, уникальная и захватывающая прогулка по очень необычным мирам. Здесь не придется стрелять. Даже умереть здесь нельзя!"}',
                'rating'      => null, 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '66', 'name' => 'Obscura', 'slug' => 'obscura',
                'video'       => 'QkZmyqHnbFc',
                'description' => '{"az": "Qorxunun yeni reallığı. Gördükləriniz xəyallarınızın ardından gələrək tezliklə onları kabusa çevirəcək.", "en": "A new reality of fear. What you see may follow into your dreams, that will soon turn into nightmares.", "ru": "Новая действительность страха. То, что Вы видите, может следовать в Ваши мечты, которые скоро превратятся в кошмары."}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '67', 'name' => 'Ocean Rift', 'slug' => 'ocean-rift',
                'video'       => 'YFH3n3L1t9Y',
                'description' => '{"az": "Ocean Rift ilə sualtı aləmi kəşf edin. Burda sizi mərcan riflərindən, manqrov bataqlıqlarından və gəmi qəzalarından tutmuş dərin sular, Arktika və Atlantidaya qədər fərqli mühitlər gözləyir.", "en": "Ocean Rift features 12 habitats ready for you to explore. Environments range from coral reefs, mangrove swamps and shipwrecks, to the deep sea, Arctic and Atlantis.", "ru": "Исследуйте подводный мир с Ocean Rift. Вас ожидает множество различных мест обитания от коралловых рифов, мангровых болот и кораблекрушений до глубоких морей, Арктики и Атлантиды."}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '68', 'name' => 'OK Bob', 'slug' => 'ok-bob',
                'video'       => '1tw-atNk70o',
                'description' => '{"az": "OK Bob - qısa və atmosferli kvest oyunudur. İp uclarını tapın, qeydləri oxuyun və tapşırıqları həll edin ki, son nəticədə burdan çıxış yolunu tapa biləsiniz.\\n\\nOK Bob xüsusi olaraq VR üçün yaradılmış oyundur!", "en": "OK Bob is a short atmospheric escape room game. Find clues, read notes, and solve puzzles to ultimately make your escape. OK Bob was created exclusively for VR.", "ru": "OK Bob - короткая атмосферная игра-квест. Найдите подсказки, прочитайте заметки и разрешите головоломки, чтобы в конечном итоге спастись.\\n\\nOK Bob был создан исключительно для VR!"}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '69', 'name' => 'Onward', 'slug' => 'onward',
                'video'       => '7BuUTI50dEc',
                'description' => '{"az": "Onward - virtual reallıq cihazları üçün yaradılmış taktik hərbi şuterdir. Oyunçular məqsədlərinə çatmaq üçün koordinasiya, kommunikasiya və atıcılıq bacarıqlarını nümayiş etdirməli olacaqlar.", "en": "Onward is a Mil-Sim paced tactical multiplayer shooter, being developed for virtual reality head mounted displays. Players will use coordination, communication, and marksmanship skill to complete objectives in online infantry combat.", "ru": "Onward - это тактический военный шутер для устройств виртуальной реальности. Игрокам предстоит показать свои навыки координации, коммуникации и меткой стрельбы для достижения победы в этом бою."}',
                'rating'      => '5', 'multiplayer' => '1', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '70', 'name' => 'Overkill VR', 'slug' => 'overkill-vr',
                'video'       => '698piynmbrU',
                'description' => '{"az": "Sizin əlinizdə xüsusi missiya və tapança ilə pulemyot kimi silahlardan əlavə həqiqətən ağır silahlarla zəngin samballı arsenal mövcuddur. Düşmənlərinizi məhv edin və özünüzü qoruyun. Ətrafı 360 dərəcə nəzarətdə saxlayın.", "en": "Overkill VR is an outstanding FPS VR Game for the HTC Vive. You get to utilize your movements to shield yourself from the onslaught of enemies. There are a few things that can be found cumbersome such as aiming but overall you\'ll have a great experience with the game.", "ru": "У вас есть ваша миссия и внушительный арсенал оружия, в который входят как пистолеты, пулеметы, так и действительно тяжелое вооружение, такое, как РПГ. Уничтожайте врагов и не дайте убить себя, контролируйте обстановку на все 360-градусов."}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '71', 'name' => 'Pavlov VR', 'slug' => 'pavlov-vr',
                'video'       => 'JcC-zq91OF0',
                'description' => '{"az": "Pavlovun Stalinqraddakı evini müasir zamana uyğun şəkildə, müasir silahlar və texnoloqiyalarla mühasirə edilməsini əks etdirən VR – şuter. Standart silah dəstinə bıçaqlar, tapançalar, avtomatlar, tüfənqlər və snayper silahları daxildir.", "en": "Pavlov is a multiplayer shooter for the HTC Vive.", "ru": "Pavlov VR – это многопользовательский VR-шутер, в котором игроки разыгрывают осаду Дома Павлова в Сталинграде, только на современный манер - с современным оружием, технологиями и прочим."}',
                'rating'      => '5', 'multiplayer' => '1', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '72', 'name' => 'Rise of Insanity',
                'slug'        => 'rise-of-insanity', 'video' => 'c06ps3Mz_D8',
                'description' => '{"az": "Rise of Insanity oyununda Sən psixologiya doktoru olaraq insan zehninin ən qaranlıq sirlərini öyrənəcəksən. Qorxularına qalib gəl və Sənin ailənin başına nələrin gəldiyini öyrən. Bu dəhşət Səni haralara gətirib çıxaracaq?", "en": "In Rise of Insanity, as a doctor of psychology, you will discover the gloomiest parts of the human brain. Overcome your fear and find out what really happened to your family.", "ru": "В Rise of Insanity Ты, как доктор психологии, обнаружишь самые темные углы человеческого разума. Преодолей свой страх и узнай, что на самом деле произошло в Твоей семье. До чего доведет Тебя безумие?"}',
                'rating'      => '4', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '73', 'name' => 'Robinson: The Journey',
                'slug'        => 'robinson-the-journey', 'video' => 'joudsgnr96E',
                'description' => '{"az": "Robinson: The Journey - macəra dolu VR oyundur. Bu oyunda oyunçuya uzaq bir planetə düşən və ordakı dəhşətli canlılarla mübarizə apararaq sağ qalmağa çalışan tək kosmonavtın rolu verilir.", "en": "When the Esmeralda crashes on Tyson III, Robin is left stranded. He must rely on his wits – and HIGS, an AI unit from the ship – to survive. As he searches for the lost crew and comes face-to-face with dinosaurs, Robin discovers that Tyson III is not the paradise once promised.", "ru": "Robinson: The Journey - это приключенческая VR-игра от Crytek, в которой игроку отводится роль одинокого космонавта, оказавшегося на отдаленной планете, населенной различными недружелюбными существами, где тот пытается выжить любой ценой."}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '74', 'name' => 'Sairento VR', 'slug' => 'sairento-vr',
                'video'       => 'qWI7SCkQhnY',
                'description' => '{"az": "VR cihazlar üçün nəzərdə tutulan arkada oyunudur. Burda oyunçular yüksək texnologiyalı samuraylar rolunda yaxın gələcəyin Yaponiyasına yollanırlar və burda onları amansız döyüşlər gözləyir.", "en": "VR was made for this. Perform triple jumps, wall runs, power slides and slow time down while blasting away at a foe before landing to deliver a blade attack on another. Kit yourself with katanas, firearms, bows, throwing glaives and legendary relics. Keep upgrading as you play", "ru": "Sairento VR - это аркадный экшн для VR-устройств, где игроки в роли высокотехнологичных самураев отправляются в Японию недалекого будущего, где начинается безумная резня."}',
                'rating'      => '5', 'multiplayer' => '1', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '75', 'name' => 'SHOW MUST GO ON', 'slug' => 'show-must-go-on',
                'video'       => '2gvLlmS-X-4',
                'description' => '{"az": "SHOW MUST GO ON - sizə hədsiz əyləncə yaşadacaq sadə ritm oyunur!\\n\\nSəhnəyə çıxın və öz musiqili şounuzu göstərin. Səhnəni rənglər və işıqlarla bəzəyin. Etməli olduğunuz tək şey, ritmi hiss etməkdir!", "en": "SHOW MUST GO ON is an easy to play rhythm VR game. Jump onto the stage and make your music show. Feel the beat. Hit the drums. Puncture the bubbles. Play with the rhythm. Fill the stage with colors and lights. If you like energetic music, rhythm and drums, this game will give you a lot of fun!", "ru": "SHOW MUST GO ON - это простая игра в ритм, которая подарит вам массу удовольствия!\\n\\nВыходите на сцену и делайте свое музыкальное шоу. Заполните сцену яркими цветами и светом. Все, что вам нужно сделать, это почувствовать ритм!"}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '76', 'name' => 'The Solus Project',
                'slug'        => 'the-solus-project', 'video' => 'jeVRQiFVmeI',
                'description' => '{"az": "The Solus Project - survivor elementləri ilə macəradır, öyrəşdiyimiz kimi macəra elementləri ilə survivor deyil. Müəlliflər ilk öncə maraqlı bir hekayə göstərmək istəyirlər. Buna görə də bizi ardıcıl, yavaş, lakin inadlı bir şəkildə ssenari ilə tanış edirlər: yağışlı, küləkli açıq məkanları yeraltılar və məbədlər əvəz edir və bu məkanlarda əsl macəra başlayır.", "en": "The Solus Project is a single player exploration adventure with survival elements. The adventure is set on a mysterious planet and is the spiritual successor to The Ball - 2010 PC Gamer Action/Adventure Game Of The Year.", "ru": "The Solus Project — это приключение с элементами выживания, а не наоборот. Авторы прежде всего хотят рассказать интересную историю. И поэтому очень грамотно, мягко, но настойчиво ведут нас по сценарию, сменяя открытые, подверженные всем ветрам и дождям локации какими-то подземельями, заброшенными комплексами и храмами, где начинается полноценное сюжетное приключение."}',
                'rating'      => '4', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '77', 'name' => 'Space Bit Attack',
                'slug'        => 'space-bit-attack', 'video' => 'Wn6xvGoVgUI',
                'description' => '{"az": "Space Bit Attack - retro-arkadanın klassikasına tamamilə yeni baxışdır. Bu oyun sizə kosmik idarə etmənin gərçək bir təcrübəsini yaşadacaq.", "en": "Space Bit Attack is an entirely new and captivating take on a retro arcade classic that gives you the space pilot experience you’ve always wanted from the cabinet games of yesteryear. Each level of this virtual world features a swarm of aliens poised to attack.", "ru": "Space Bit Attack - это совершенно новый и захватывающий взгляд на классику ретро-аркады, которая подарит вам опыт настоящего космического пилотирования."}',
                'rating'      => '4', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '78', 'name' => 'Sparc', 'slug' => 'sparc',
                'video'       => 'MztlLpmqR0c',
                'description' => '{"az": "Sparc – virtual reallıqda əsl kibersportu gözləyənlər üçün maraqlı oyundur. Bu oyunda taktik addımlara, planlaşdırmaya və təbii ki, bacarığa böyük yer verilir. Sadəcə iki düyməyə basmaqla rəqiblərinizi məğlub etmək alınmayacaq, qalibiyyət uğrunda sözün əsl mənasında tərləməli olacaqsınız.", "en": "Sparc is a vSport - a unique physical sport only possible in virtual reality, in which players compete in fast-paced, full-body VR gameplay and connect in an online community.", "ru": "Sparc – увлекательная игра для тех, кто всегда мечтал о настоящем киберспорте для виртуальной реальности. Незамысловатая на первый взгляд механика постепенно раскрывается перед игроком, после чего наступает осознание, что в этой игре есть место тактике, планированию и, разумеется, мастерству, наработать которое не так просто. Одолеть противника, нажимая всего пару кнопок, у вас не выйдет. За победу придётся попотеть в реальном смысле этого слова."}',
                'rating'      => '5', 'multiplayer' => '1', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '79', 'name' => 'SportsBar VR', 'slug' => 'sportsbar-vr',
                'video'       => 'PtUlAcuEB28',
                'description' => '{"az": "SportsBar VR - HTC Vive və Oculus Rift cihazları üçün nəzərdə tutulmuş birinci şəxs tərəfindən oynanılan sosial elementli əyləncəli oyundur. Bütün hadisələr gərçək barların birində baş verir, burda sizi bilyard, stolüstü xokkey, skibol, darts və digər əyləncəli oyunlar gözləyir.", "en": "The new Sports Bar VR with cross-play is a major social experience update &amp; now available on Steam. A single through 8-player cross-platform virtual sports bar overflowing with fun and silly props, featuring an awesome set of fun games and new game modes for pool, darts, shuffleboard &amp; more.", "ru": "SportsBar VR - развлекательная игра с социальными элементами и видом от первого лица для устройств виртуальной реальности HTC Vive и Oculus Rift. Все события происходят в самом настоящем баре, где вас ожидает множество развлечений, среди которых бильярд с восемью и девятью шарами, аэрохоккей, скибол, дартс и многое другое."}',
                'rating'      => '4', 'multiplayer' => '1', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '80', 'name' => 'Super VR Trainer',
                'slug'        => 'super-vr-trainer', 'video' => 'lJsgb3ncS_M',
                'description' => '{"az": "Super VR Trainer - Virtual Reallıq üçün nəzərdə tutulan, fərqli oyun təcrübələri yaşadan altı oyunun birliyidir. Onların sırasında zombilərə qarşı şuter, Star Wars\'ın işıq qılıncı ilə qılıncoynatma, nizə atıcılarına qarşı mübarizə, basketbol, hoverboard üzərində uçuşlar və məntiqi düşüncə tələb edən pazzl oyunu var.", "en": "Unleash your power shooting your opponents with your bow, deflecting blaster shots with your laser swords, surviving an infested hospital, being the king of basket or surfing with your hoverboard. Welcome to Super VR Trainer!", "ru": "Super VR Trainer - это смесь из шести игр для виртуальной реальности, каждая из которых предоставляет разный игровой опыт. В числе прочих есть шутер про истребление зомби, махание световым мечом из Star Wars, игра на уклонение против копьеметателей, баскетбол, полеты на ховербоарде, а также логический паззл."}',
                'rating'      => '4', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '81', 'name' => 'Surgeon Simulator',
                'slug'        => 'surgeon-simulator', 'video' => 'WaN85mKM-_Y',
                'description' => '{"az": "Surgeon Simulator - qalmaqallı və tənqidçilər tərəfindən qəbul edilmiş, detalları və yumoru ilə oyunçuların sevgisini qazanmış cərrah simulyatoru artıq virtual reallıqda!", "en": "Surgeon Simulator is bringing the ER to VR! The most critically acclaimed and infamous surgery simulation game as you have never seen it before! Featuring all of the surgeries and twisted humour of the original favourite plus a few new surprises...", "ru": "Surgeon Simulator - скандально известный и признанный критиками симулятор хирурга, со всеми деталями и юмором, так полюбившимися игрокам теперь в виртуальной реальности!"}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '82', 'name' => 'SVRVIVE: The Deus Helix',
                'slug'        => 'svrvive-the-deus-helix', 'video' => 'PiVTY2ckT1Y',
                'description' => '{"az": "SVRVIVE: The Deus Helix — yad planetli agent rolunda bəşəriyyəti xilas etməyə çalışan əsas qəhrəman haqqında macəra oyunu.", "en": "A challenging mystery adventure game ranked as one of the best HTC Vive games of 2017 (PC Advisor). With every mission comes entirely new worlds and puzzles. The story takes you through one of the longest VR games to date.", "ru": "SVRVIVE: The Deus Helix — это приключенческая игра, в которой главный герой становится инопланетным агентом, пытающимся спасти вселенную."}',
                'rating'      => '4', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '83', 'name' => 'The Talos Principle VR',
                'slug'        => 'the-talos-principle-vr', 'video' => 'fKXpqdcAv8w',
                'description' => '{"az": "The Talos Principle VR — Croteam studiyasının virtual reallıq üçün təqdim etdiyi, birinci şəxs tərəfindən oynanılan, dünyaca məhşur fəlsəfi elmi-fantastik tapmaca oyununun yeni versiyası.", "en": "The Talos Principle VR is a virtual reality version of Croteam\'s critically acclaimed first-person puzzle game in the tradition of philosophical science fiction.", "ru": "The Talos Principle VR — это новая версия всемирно признанной философской научно-фантастической головоломки от первого лица от студии Croteam для виртуальной реальности."}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '84', 'name' => 'Tethered', 'slug' => 'tethered',
                'video'       => '_xHtgdvHLwA',
                'description' => '{"az": "Tethered - bu inanılmaz strateji oyunda sizi real zaman rejimində on üç unikal ada gözləyir! Belə təcrübəni siz hələ yaşamamışdınız", "en": "Thirteen unique islands await your guiding hand in this beautiful and engrossing real-time strategy game, unlike anything you have experienced before!", "ru": "Tethered - тринадцать уникальных островов ждут вас в этой захватывающей стратегической игре в режиме реального времени! Такого вы еще не испытывали!"}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '85', 'name' => 'The Thrill of the Fight',
                'slug'        => 'the-thrill-of-the-fight', 'video' => 'C-cL8REEjwI',
                'description' => '{"az": "Vurtual rinqdə xüsusi üslüblara və boks texnikalarına sahib unikal qəhrəmanlarla yarışın. Nokaut zərbəsini vaxtında yetirmək üçün zamanı və bütün bacarıqlarınızı istifadə edin. Rinqin əsl kralı olmaq üçün huk zərbələrindən qorunun, ceb zərbələrini yetirin və vaxtında bloklar qoyun.", "en": "The Thrill of the Fight is a room-scale VR boxing game. Face off in the virtual ring where you\'ll jab, dodge, and sweat your way to the top of the boxing world. Grab your gloves, step through the ropes, and become a champion.", "ru": "Посетите виртуальный ринг и сразитесь с уникальными претендентами, обладающими своими собственными стилями и техниками бокса. Используйте тайминг и все свое умение, чтобы вовремя нанести нокаутирующий удар. Уклоняйтесь от хуков, посылайте джебы и блокируйте удары, чтобы стать настоящим королем ринга."}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '86', 'name' => 'Time Machine VR', 'slug' => 'time-machine-vr',
                'video'       => 'NvkNqG2YM1g',
                'description' => '{"az": "", "en": "", "ru": ""}', 'rating' => null,
                'multiplayer' => '0', 'created_at' => $now, 'updated_at' => $now
            ),
            array(
                'id'          => '87', 'name' => 'Toon Ocean VR', 'slug' => 'toon-ocean-vr',
                'video'       => 'iXjWdb4f6i0',
                'description' => '{"az": "Toon Ocean VR - okean sularının mehriban sakinləri ilə tanış ola biləcəyiniz dörd möcüzəli hadisənin kolleksiyasıdır.", "en": "Toon Ocean VR is a collection of four magical experiences in which you can meet friendly inhabitants of the ocean.", "ru": "Toon Ocean VR - это коллекция из четырех волшебных событий, в которых вы можете встретить дружелюбных жителей океана."}',
                'rating'      => '4', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '88', 'name' => 'Tornuffalo', 'slug' => 'tornuffalo',
                'video'       => 'ofTgodtwCPU',
                'description' => '{"az": "Bəşəriyyət zəlzələlər, vulkanlar, daşqınlar və qasırğalarla üz üzə gəlib, lakin ən dəhşətli və təhlükəli təbii fəlakət - «Tornuffalo» kimi tanınan hava fenomenidir. Bu virtual reallıq oyununda zərbələrə, bloklara və yayınmalara hazır olun.", "en": "Humankind has faced earthquakes, volcanoes, floods, and hurricanes—but the most dangerous natural disaster is a weather phenomenon known as the \\"Tornuffalo\\". Get ready to dodge, block and hit in this room-scale VR game.", "ru": "Человечество столкнулось с землетрясениями, вулканами, наводнениями и ураганами, но самым опасным стихийным бедствием является явление погоды, известное как «Tornuffalo». Будьте готовы к уклонениям, блокировкам и ударам в этой виртуальной реальности."}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '89', 'name' => 'The Vanishing of Ethan Carter',
                'slug'        => 'the-vanishing-of-ethan-carter', 'video' => 'dtk_aEEPneE',
                'description' => '{"az": "Mənzərəli düzənliyi biz Ethan Carter adlı müştərisini axtaran detektiv Paul Prospero rolunda ziyarət edirik. Bu iş tez bir zamanda Lovecraft dəhşətlərini xatırlatmağa başlayır. Carter ailəsinin üzvləri, sanki bir güc tərəfindən sıxılıb bir birini öldürür; detektiv Prospero\'nun qarşısına isə baş verənlərin reallığını şübhə altına salan qəribə hadisələr çıxır.", "en": "The Vanishing of Ethan Carter is a first-person story-driven mystery. Purchase this game to get both the original and the Unreal Engine 4 remaster called The Vanishing of Ethan Carter Redux.", "ru": "Живописную долину мы посещаем в роли детектива Пола Просперо, ищущего своего клиента – мальчика Итана Картера. Дело быстро принимает, по-настоящему, лавкрафтовские тона. Члены семьи Картеров убивают друг друга, словно одурманенные чем-то; по пути Просперо встречаются наистраннейшие вещи, заставляющие усомниться в реальности происходящего."}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '90', 'name' => 'VR: Vacate the Room',
                'slug'        => 'vr-varcale-the-room', 'video' => 'hqCwsXSGPks',
                'description' => '{"az": "VR: Vacate the Room sadəcə qısa kvest oyunu deyil, bu inanılmaz VR təcrübəsidir. Burda siz doğru cavabların izinə düşməli, tapmacaları həll etməli və çıxış yolunu tapmalı olacaqsınız.", "en": "VR: Vacate the Room is a short Escape the Room game.It is a VR Experience where you need to find clues to solve puzzles and find your way out.", "ru": "VR: Vacate the Room - это не просто короткая квест-игра. Это невероятный опыт VR, в котором вам предстоит найти подсказки для решения головоломок и найти выход."}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '91', 'name' => 'The Wizards', 'slug' => 'the-wizards',
                'video'       => 'ANZmJnzz9rk',
                'description' => '{"az": "The Wizard\'s Pen - söz oyunudur. Sizin Sehrbaz dostunuz itkin düşüb. Onu tapmaq üçün siz rebusları həll etməli olacaqsınız. Bunun üçün dostunuzun sehrli reseptlər kitabını diqqətlə vərəqləyin, gizli söz və kəlmələri oxuya bilmək üçün isə sehrli qələmi istifadə edin.", "en": "Become a powerful Wizard and take fate into your own hands! Immerse yourself in a beautiful fantasy world and use motion controllers to destroy your enemies by weaving elemental magic!", "ru": "The Wizard\'s Pen - головоломка со словами. Пропал ваш друг Волшебник. Вы сможете его отыскать, разгадывая ребусы. Для этого изучите его книгу с волшебными рецептами и воспользуйтесь магическим пером, чтобы суметь прочесть спрятанные слова и фразы."}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '92', 'name' => 'Zombie Training Simulator',
                'slug'        => 'zombie-training-simulator', 'video' => 'MDR8FtwO5wc',
                'description' => '{"az": "Bəs siz zombi apokalipsisə hazırsınız? Biz bir araşdırma apardıq və hazır olduğunuza əmin olmaq istəyirik. Xəbərlərdə zombilərin artıq burda olduqları haqda xəbər yayılanda, dostunuzun zəng edib \\"Onlar burdadır, kömək et\\" dediyində, siz nə cavab verəcəksiniz? Doğrudur, siz deyəcəksiniz ki, \\"Gəlirəm, bir azdan ordayam\\". Və bu Zombie Training Simulator sayəsində baş verəcək!", "en": "Are you ready for the zombie apocalypse? We\'ve done the research and want to make sure you\'re prepared. When the news reports the zombies are here and your friend gives you a call, \\"They\'re here. I need you,\\" how will you respond? That\'s right, you\'ll say \\"I\'ll be right over\\". We\'ve got this thanks to Zombie Training Simulator!", "ru": "Готовы ли вы к зомби апокалипсису? Мы провели исследование и хотим убедиться, что вы готовы. Когда в новостях сообщается, что зомби здесь, а ваш друг звонит вам со словами: \\"Они здесь, мне нужна твоя помощь\\", как вы ответите? Правильно, вы скажете: \\"Я скоро буду\\". И это благодаря Zombie Training Simulator!"}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '93', 'name' => 'ZomDay', 'slug' => 'zomday',
                'video'       => 'P-M0YrEa6o8',
                'description' => '{"az": "ZomDay – kifayət qədər sürətli oyundur, burda siz SEAT (Special Event Action Team) döyüşçüsü rolunda zombi ordusu ilə mübarizə aparacaqsınız. Amansız zombilər bir biri ilə sözləşərək hücuma keçəcəklər və bu oyunu daha da çətinləşdirəcək. Hər sağ qaldığınız mərhələdən sonra hesab sistemi sizin döyüş keyfiyyətlərinizi qiymətləndirəcək: dəqiqlik, kəlləyə atəş zərbələri, travmalar, zərbələr və s. Reytinqiniz nə qədər yüksək olsa təcrübənizin dəyəri bir o qədər artacaq.", "en": "As zombie crisis broke out around the world,you will play one of the warrior of S.E.A.T(Special Event Action Team) to fight against the zombies all over the world. ZomDay is a fast pace VR shooting game contains multi-player mod,exciting Boss fight,character perk and hardcore weapon system.", "ru": "ZomDay – достаточно быстрая игра, в которой вы в роли воина SEAT (Special Event Action Team) сразитесь в целой армией зомби. Неумолимые зомби волной пойдут в атаку, сотрудничая друг с другом, что значительно усложнит игровой процесс. После каждого выживания система расчетов будет оценивать ваши боевые качества: точность, выстрел в голову, травму, удар и т. д. Вы должны правильно использовать драгоценное время между атаками, чтобы купить мощное оборудование в магазине, собрать растраченный воздух. Чем выше рейтинг боевых действий, тем больше будет расход воздуха и ценность опыта."}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '94', 'name' => 'Just In Time Incorporated',
                'slug'        => 'just-in-time-incorporated', 'video' => 'tyIbJs72f34',
                'description' => '{"az": "Just In Time Incorporated - \\"Sığorta\\" haqqında əyləncəli oyundur. Yeni bir əməkdaş kimi siz müştərilərinizi ölümdən xilas etməli olacaqsınız, çünki təbii fəlakətlər slow-motion rejimində baş verir. Sizin Hiper-Əlcəkləriniz sizə ultra sürətli, teleportasiya edən güllələri tutmağa imkan verir və bu əladır, çünki ölüm bu komediyalı ekşn oyununun hər küncündə gizlənir!", "en": "As a \\"Death Prevention Insurance” agent, your job is saving clients from certain death as disasters play out in slow-motion. Your Hyper-Gloves allow you to move super-fast, teleport and even catch bullets. It\'s a good thing too because death lurks in every corner in this virtual reality action/comedy.", "ru": "Just In Time Incorporated - веселая игра о «Страховании». Как новый сотрудник, вы должны будете спасти ваших клиентов от смерти, поскольку стихийные бедствия разворачиваются в замедленном темпе. Ваши Гипер-Перчатки позволяют вам перемещать сверхбыстрые, телепортируемые пули. И это отлично, потому что смерть скрывается в каждом уголке этого комедийного экшена для виртуальной реальности!"}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '95', 'name' => 'HOMEBOUND', 'slug' => 'homebound',
                'video'       => 'm26P_pFBBJc',
                'description' => '{"az": "Oyunda sizə qəzaya uğrayan bir kosmik apparatın sərnişini rolu verilir. Sağ qalmaq üçün mümkün qədər tez bir zamanda siz hərəkət planı fikirləşməli olacaqsınız. Qəza prosesi otuz dəqiqə davam edir və bu yarımsaat ərzində kosmik apparat asteroidlər sahəsindən və stratosferadan keçərək möhkəm sürətlə yerə düşəcək.", "en": "Immerse yourself in the most beautiful and spine-chilling VR experience to date. Experience a series of catastrophic events in the cold void of deep space as you crash rapidly towards earth. When disaster strikes, your one mission is to make it out alive as fast as you can. Dead or alive, you are Homebound.", "ru": "В игре вам отводится незавидная роль пассажира космического аппарата, который терпит крушение. Нужно как можно скорее придумать план действий для своего спасения. Весь процесс падения занимает около тридцати минут, за которые аппарат пронесется через поле астероидов, стратосферу и с огромной скоростью рухнет на землю."}',
                'rating'      => '4', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '96', 'name' => 'High Noon VR', 'slug' => 'high-noon-vr',
                'video'       => 'DkKvRDJEKfQ',
                'description' => '{"az": "Şəhərdə yeni şerif ortaya çıxdı! High Noon - Vəhşi Qərb təpələrində itkin düşən balaca bir şəhərin yeni şerifi rolunda çıxış edəcəyiniz əyləncəli VR-şuterdir.", "en": "There is a new sheriff in town! High Noon is a fun VR shooter where you play as a sheriff in a small town somewhere in the Wild West.", "ru": "В городе новый шериф! High Noon — весёлый VR шутер, в котором вам предстоит примерить на себя роль нового шерифа небольшого городка, затерянного где-то в прериях Дикого Запада."}',
                'rating'      => '3', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '97', 'name' => 'Henry the Hamster Handler',
                'slug'        => 'henry-the-hamster-handler', 'video' => 'Z5R7vlsBCDQ',
                'description' => '{"az": "Sizin adınız Henridir, əfsanəvi birəlli dağsiçanı yetişdiricisi. Hamsters Inc. korporasiyasına daxil olmağınızın zamanı gəldi. Burda sizin əsas məqsədiniz - sonu yaxınlaşan dağsiçanlarının istehsalı və yayılmasıdır.", "en": "You are Henry, the legendary one-handed hamster handler, and it\'s your job to save the mass-produced balls of fluff! It’s time to punch in at Hamsters Inc., where your usual menial task of hamster production and distribution has gone kaput!", "ru": "Вы Генри, легендарный однорукий дрессировщик хомяков, и ваша задача - сохранить массовое производство пушистых шариков! Пришло время вступить в Hamsters Inc., где ваша обычная задача - производство и распространение хомяков, которым наступает конец!"}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '98', 'name' => 'Gunship Battle 2 VR',
                'slug'        => 'gunship-battle-2-vr', 'video' => '1zYNEC1iSJ8',
                'description' => '{"az": "Dünyanın ən mükəmməl döyüş gəmisi kabinasının idarəsini öz üzərinizə götürün! Epizodik hekayə ilə komplektdə VR səhnələr və inanılmaz gameplay təqdim olunur, Gunship Battle 2 sadəcə daha bir VR təcrübəsi deyil, mükəmməl bir oyundur. Bu ekşn-səyahətini elə indi özünüzə bəxş edin!", "en": "Take control of the most advanced gunship cockpit on the planet! Complete with an episodic story, VR cut scenes and immersive gameplay, this game is not just another VR experience, but a full-fledged game. Indulge yourself in this action-packed journey now!", "ru": "Gunship battle 2 VR - помогите профессиональному пилоту спасти мир. Управляйте современным военным вертолетом и участвуйте в воздушных сражениях. Дилан, главный герой этой игры для Андроид, участвовал в секретном правительственном проекте. Он потерял свою память и семью. Теперь он должен отомстить злодеям. Дилан занимает пилотское кресло боевого вертолета и устремляется в бой. Проведите его над океанами и сушей. Уничтожайте воздушные и наземные цели при помощи ракет и автоматических пушек вертолета. Выполняйте фигуры высшего пилотажа."}',
                'rating'      => '4', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '99', 'name' => 'VR Golf Online', 'slug' => 'vr-golf-online',
                'video'       => 'mGxatItMrrg',
                'description' => '{"az": "VR Golf Online - saatlarla qolf və ya tennis oynayaraq istirahət etməyi sevənlər üçün nəzərdə tutulur. Yaradıcılar çox çalışdılar və oyunu daha da maraqlı etmək üçün 36 ədəd fərqli kort yaratdılar. Oyunun əvvəlində istifadəçini qısa təlim gözləyir, daha sonra isə matç. VR Golf simulyatorunu həm tək oynamaq və kompyuterlə yarışmaq, həm online rejimdə oynamaq mümkündür. Online oyunda siz rəqiblərinizlə real zaman rejimində yarışacaqsınız.", "en": "When Golf meets the limitless possibilities of Virtual Reality, the green is only inches away! Practice your swing and develop your techniques to improve your handicap. Step onto one of the 36 realistic holes, with additional courses planned for the near future.", "ru": "Игра рассчитана на тех, кто часами готов отдыхать, играя в теннис или гольф. Разработчики постарались и сделали 36 отдельных кортов. В самом начале игры пользователя ждет короткое обучение, а затем непосредственно сам матч. Можно играть одному и сражаться с компьютером, либо включить он-лайн режим. Тогда приложение найдет вам соперника в режиме реального времени."}',
                'rating'      => '5', 'multiplayer' => '1', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '100', 'name' => 'VR Invaders', 'slug' => 'vr-invaders',
                'video'       => 'FnKxWSOU4j4',
                'description' => '{"az": "Bu inanılmaz şuter-ekşn oyununda düşmənlərinizi məhv edin. Dar və qaranlıq yerlərdən tutmuş geniş işıqlı yerlərə qədər fərqli məkanlarda yarışın. Qarşınıza çıxan hər şeyi məhv edin! Bu işğaldan sonra detallı şəkildə təsvir olunmuş hər mərhələ virtual xarabalıqlara çevriləcək.", "en": "Dive into a virtual sci-fi world as the freelance hacker Thomas Hall to save a cyber artist that got stuck in virtual reality. Fight legions of enemy drones with your multi-functional loadout. Slow time, transform your weapon and blast through your enemies in this immersive VR shooter.", "ru": "Разнеси врагов на кусочки в безумном шутер-экшене. Сражайся в самых разных локациях — от тесных и замкнутых до просторных и светлых. Сметай все на своем пути! Каждый детально прорисованный уровень после твоего вторжения превратится в виртуальные руины."}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '101', 'name' => 'Space Pirate Trainer',
                'slug'        => 'space-pirate-trainer', 'video' => '_AtYAfCPKO4',
                'description' => '{"az": "Space Pirate Trainer - oyunçulara özlərini kosmik quldurlarının rolunda sınamağa imkan verən VR cihazlar üçün nəzərdə tutulmuş, arkada janrında kosmik ekşn oyunudur.", "en": "Space Pirate Trainer is the official trainer for wannabe space pirates. Pick up your blasters, put on your sneakers, and dance your way into the Space Pirate Trainer hall of fame.", "ru": "Space Pirate Trainer - это аркадный космический экшен для VR-устройств, который позволяет игрокам побывать в шкуре космического пирата."}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '102', 'name' => 'Rick and Morty: Virtual Rick-ality',
                'slug'        => 'rick-and-morty', 'video' => 'yC-vwRtxXxk',
                'description' => '{"az": "Rick and Morty: Virtual Rick-ality - macəra dolu VR oyundur. Yaradıcı şirkət hələ Job Simulator oyununun hazırlanması zamanında göstərdiyi komediya istedadlarını və qabiliyyətlərini istifadə edərək \\"Rick and Morty\\" serialının yüksək standartlarına cavab verən əyləncəli və maraqlı oyunu uğurla təqdim edib.", "en": "Rick and Morty: Virtual Rick-ality smashes together the absolute VR chaos of the award-winning Job Simulator with the ridiculous, all-out, take-no-prisoners comedy of Rick and Morty.", "ru": "Rick and Morty: Virtual Rick-ality - это приключенческая VR-игра. Компания использовала все свои комедийные таланты, которые проявила еще в Job Simulator, создав по-настоящему веселую и захватываю игру во вселенной «Рика и Морти», которая соответствует высоким стандартам самого сериала."}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '103', 'name' => 'Proton War', 'slug' => 'protonwar',
                'video'       => 'EkCCoRnOd5A',
                'description' => '{"az": "Proton War - birinci şəxs tərəfindən oynanılan və VR cihazlar tərəfindən dəstəklənən kosmik şuterdir. Bu oyunda istifadəçilər divar üzərində qaçış, ikiqat tullanma və digər akrobatik tryukları istifadə edərək müxtəlif arenalarda yarışırlar.", "en": "Multiplayer focused, Fast paced FPS with an emphasis on quick and flowing movement. Featuring DM, TDM, CTF, Domination, AI to practice against, and a Horde mode for single player or co-op. Full Room Scale VR with HTC Vive and Oculus Touch. Also included, Non-VR and Seated VR!", "ru": "Proton War - это космический шутер с видом от первого лица и поддержкой VR-устройств, где игроки сражаются друг с другом на разнообразных аренах, используя бег по стенам, двойные прыжки и другие акробатические трюки"}',
                'rating'      => '3', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '104', 'name' => 'Primal Carnage', 'slug' => 'primal-carnage',
                'video'       => 'eGjErADcqas',
                'description' => '{"az": "Primal Carnage - \\"Yura Dövrü Parkı\\" filmindən ilhamlanaraq yaradılmış şuterdir. Oyunçular insanlar və ya dinozavrlar tərəfində oynamaq arasında seçim edəcəklər. Multyplayer rajimində hər iki tərəf arasında inanılmaz mübarizəni yaşamaq mümkündür. Burda bir tərəfi seçmək çox çətin olacaq. Dinozavrların beş növündən birini seçərək oyunu yalnız üçüncü şəxs tərəfindən oynamaq mümkündür, insanlar tərəfini seçənlər birinci şəxs tərəfindən oyanayacaqlar.", "en": "Unleash your inner dinosaur! Primal Carnage is an online multiplayer shooter that immerses its players in skilled PVP combat. Fight as man or beast in savage class-based deathmatches and a tense objective-oriented escape mode!", "ru": "Primal Carnage - шутер, создание которого вдохновил фильм \\"Парк Юрского периода\\". Игрок выбирает между тем, чтобы играть за людей или за динозавров. В режиме многопользовательской игры можно воплотить настоящие схватки между охотниками обоих видов. Здесь будет сложно сделать ставку на кого-то одного. Если вы выбираете один из пяти классов динозавров, вид камеры будет от третьего лица. А если людей, то вид будет от первого лица."}',
                'rating'      => '5', 'multiplayer' => '1', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '105', 'name' => 'Legendary Hunter VR',
                'slug'        => 'legendary-hunter-v', 'video' => 'X3hpfm8o9NY',
                'description' => '{"az": "Legendary Hunter VR — əfsanəvi Duck Hunt oyunu tərzində, VR texnologiyaların istifadəsi ilə yaradılmış ördək ovu simulyatorudur. Qəddar qarğaların və arıların hücumlarını dəf edərək ördəkləri ovlayın. Gərgin iş gününün sonunda əylənmək üçün əla oyundur.", "en": "Legendary Hunter VR is a VR duck hunting game inspired by the old classic NES game Duck Hunt. Hunt Duck during the daytime while surviving vicious crow attacks. And survive the wolves and the crocodiles at night. Enjoy the day/night cycles with dynamic weather and atmospheric surround sound.", "ru": "Legendary Hunter VR — охота на уток с использованием технологии VR в стиле известной классической игры Duck Hunt (NES). Охотьтесь на уток, отбивая атаки злобных ворон и пчел. Расслабляющая игра, в которую хочется играть после напряженного рабочего дня."}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '106', 'name' => 'Guns\'n\'Stories: Bulletproof VR',
                'slug'        => 'gunss-stories-bulletprof-vr', 'video' => 'HoN213PmrUY',
                'description' => '{"az": "Guns’n’Stories: Bulletproof - oyunçuları Vəhşi Qərb abu-havasına tamamilə qərq edən dinamik VR-şuterdir. Oyunun qarışıq süjeti ilə addımlayaraq siz təhlükəli, amma bir o qədər də gülməli düşmənlərə rast gələcəksiniz və Böyük Bosla mübarizə aparacaqsınız", "en": "Just shooting and just fascinating stories! Listen to narratives and go deeply into each story, that you have never seen. You will appear in Sintown world of Wild West era, you need to destroy amounts of enemies, fight with crafty bosses. Your best fellow travelers are cynic humor and charisma.", "ru": "Guns’n’Stories: Bulletproof это динамичный VR-Вестерн шутер, который полностью и без остатка погружает игроков в атмосферу странного Дикого Запада. Следуя по запутанному сюжету, вы столкнетесь с толпами грозных, но комичных врагов и сразитесь с Большими Боссами."}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '107', 'name' => 'Ghost Town Mine Ride & Shootin\' Gallery',
                'slug'        => 'ghost-town-mine-ride-shootin-gallery',
                'video'       => '114RvHaPfvU',
                'description' => '{"az": "Ghost Town Mine Ride &amp; Shootin’ Gallery oyununda sizi adından da məlum olduğu kimi tərk edilmiş şaxtaya səyahət gözləyir. Burda sizin gəlişinizə heç də sevinməyən təhlükəli kabus-şaxtyorlar yaşayırlar. Bu vahiməli yerdən çıxış yolunu axtararaq düşmənlərinizə tapança ilə atəş açmalı və bir nöqtədən başqa nöqtəyə keçmək üçün teleport etməli olacaqsınız.", "en": "Explore an abandoned tourist attraction, test your shot at the Shootin\' Gallery, then board the mine cart ride for a descent into Hell! A thrilling new horror experience. Can you make it out Alive?", "ru": "В игре Ghost Town Mine Ride &amp; Shootin’ Gallery, что уже понятно по названию, игрока ожидает путешествие по заброшенной шахте. В ней до сих пор обитают злобные призраки шахтеры, которые совсем не рады вашему визиту. Расправляться с врагами придется посредством пистолета, а также телепортируясь из точки в точку в поисках выхода из этого зловещего места."}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '108', 'name' => 'A Fear Of Heights, And Other Things',
                'slug'        => 'a-fear-of-heights-and-other-things',
                'video'       => 'mF2kBhee1vM',
                'description' => '{"az": "Yeni istifadəçiləri virtual reallıq təcrübəsi ilə tanış etmək üçün müxtəlif səhnələrin kolleksiyası. Bu horror oyunu deyil və burda sizi qəflətən qorxuda biləcək heç nə olmayacaq!", "en": "A collection of scenes for demonstrating VR presence to new users. Not a horror game, and has no jump scares.", "ru": "Коллекция сцен для демонстрации присутствия в виртуальной реальности новым пользователям. Это не игра ужасов, и здесь нет ничего, что вас напугает!"}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '109', 'name' => 'The Exorcist: Legion VR',
                'slug'        => 'exorcist-legion-vr', 'video' => 'l77NM3j49Kk&t=2s',
                'description' => '{"az": "The Exorcist: Legion VR - oyunçuları horror ustası William Peter Blatty tərəfindən yaradılmış vahimə dünyasına aparan macəralı VR-layihədir. Oyunçular dəhşətli aləmi kəşf edirlər, ekzorsizm sənətini öyrənirlər və həm bütün dünyanın, həm şəxsi dünyalarının qorxulu kabuslarına qarşı mübarizə aparırlar.", "en": "The Exorcist: Legion VR is an interactive VR experience set in the academy-award winning world created by horror maestro William Peter Blatty. Each chapter features a unique demonic entity that will test your courage and resolve. Available for HTC Vive and Oculus Rift. Not for the faint-hearted.", "ru": "The Exorcist: Legion VR - это мрачный приключенческий VR-проект, который переносит игроков в мир ужасов, созданный мастером хорроров Вильямом Питером Блатти. Игроки исследуют мрачный мир, учатся искусству экзорцизмов, а также пытаются выступить против страшнеших кошмаров - как всего мира, так и своих собственных."}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '110', 'name' => 'FATED: The Silent Oath',
                'slug'        => 'fated-the-silent-oath', 'video' => 'gRDSIu69KIw',
                'description' => '{"az": "FATED: The Silent Oath oyununda hadisələr mistik vikinqlər dövründə baş verir və kişilik, cəsarət və fədakarlıq haqqında bəhs edilir. Burda hər bir ata və hər bir ər ailəsini xilas etmək üçün mümkün olmayanları belə bacarmalıdır. Süjetin əsasında Raqnarök dövründə insanın və ailəsinin sürgün olunması dayanır. Bu çətin dövrdə qəhrəman təsirli və eyni zamanda dəhşətli hadisələri yaşayaraq özü və yaxınları haqqında bilmədiklərini öyrənir.", "en": "Set in the mythical age of Vikings, FATED: The Silent Oath tells a tale of courage and sacrifice where an everyday father and husband must do the impossible to save his family from the destruction of the world at the hands of giants of old.", "ru": "События FATED: The Silent Oath разворачиваются в мистический век викингов и рассказывают историю о мужестве и самопожертвовании, где каждый день отец и муж должны делать невозможное, чтобы спасти свою семью. В центре сюжета лежит история изгнания человека и его семьи во время Рагнарока. В своих скитаниях герой узнает больше о себе и о своих близких, преодолевая череду трогательных и одновременно ужасающих событий."}',
                'rating'      => '4', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '111', 'name' => 'EVE: Valkyrie – Warzone',
                'slug'        => 'eve-valkyrie-warzone', 'video' => 'WtwxbVBNAWA',
                'description' => '{"az": "EVE: Valkyrie – EVE dünyasında daha bir oyundur, ilkin versiyadan fərqi ondadır ki, bu oyunu yalnız VR cihazlar vasitəsi ilə oynamaq mümkündür. Janr olaraq bu layihə birinci şəxs tərəfindən idarə olunan kosmik gəmi simulyatorudur. Oyunçuların öhdəsinə unikal sinifə aid kosmik gəmiləri idarə etmək və kosmos üstündə bitməyən bir mübarizəyə qoşulmaq düşəcək.", "en": "EVE: Valkyrie – Warzone is a first-person spaceship shooter that puts you in the cockpit for fast, fun, intense multiplayer space combat.", "ru": "EVE: Valkyrie — это игра во вселенной EVE, которая отличается от \\"старшей\\" версии поддержкой устройств виртуальной реальности. По жанру проект является симулятором космического корабля с видом от первого лица. Игроки возьмут на себя управление космическими кораблями одного из нескольких уникальных классов, и включатся в непрекращающуюся борьбу за космос."}',
                'rating'      => null, 'multiplayer' => '1', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '112', 'name' => 'Eagle Flight', 'slug' => 'eagle-flight',
                'video'       => 'DqiMmS1PMXQ',
                'description' => '{"az": "Sadə baş hərəkəti ilə istiqamətlən və təyinat nöqtəsinə çat. Səmalara yüksəl, yarış və qazan! Oyundan tam zövq almaq üçün dostlarınla komanda şəklində yarış və unudulmaz hisslər yaşa!", "en": "Developed exclusively for VR Eagle Flight sends you to the skies of Paris to experience the freedom of flying like never before! As an eagle, you soar past iconic landmarks and dive through narrow streets in order to fight opponents and protect your territory.", "ru": "VR-проект Eagle Flight – путешествие над Парижем! Изучайте город и защищайте свою территорию от врагов. Участвуйте в жарких сетевых битвах на 6 игроков! Выполняйте маневры, чтобы победить!"}',
                'rating'      => '5', 'multiplayer' => '1', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '113', 'name' => 'Drunk or Dead', 'slug' => 'drunk-of-dead',
                'video'       => 'yl-cmt3MlXg',
                'description' => '{"az": "Drunk or Dead əyləncəli party oyunudur. Virus bütün ayıq insanları zombilərə çevirib. Dünyanın sonu yaxınlaşmışkən barlara əsl hücum elan edin! Gözəl xanımlarla içə bildiyiniz qədər için və zombiləri öldürün ki, rekordları qırasınız!", "en": "Drunk or Dead is a fun party game. A virus has turned all sober people into zombies. Go bar hopping in the midst of apocalypse! Drink in the company of beautiful girls and finish off hordes of zombies! Set your own record!", "ru": "Drunk or Dead - игра для веселой вечеринки. Вирус обратил всех трезвых людей в зомби! Устройте тур по барам в разгар конца света! Пей в компании невероятных красоток и мочи толпы зомби! Поставь свой рекорд!"}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '114', 'name' => 'Dream Coaster VR',
                'slug'        => 'dream-coaster-vr', 'video' => 'OjeTyJUc9NA',
                'description' => '{"az": "Dream Coaster VR - virtual reallıqda \\"roller coaster\\" atraksionunun sumalyatorudur. Burda sizi hər bir döngəsində möcüzələr gizlənən fantastik dünyalara unudulmaz səyahət gözləyir. Oyunun adına aldanmayın, bu atraksion sizi şübhəsiz oyaq saxlayacaq!", "en": "Dream Coaster VR is an extremely realistic roller coaster simulator equipped with series of different environmental themes and ultra-immersive impression of height and speed. Do not let the name trick you - this roller coaster will surely keep you wide awake!", "ru": "Dream Coaster VR – симулятор американских горок в виртуальной реальности, в котором вас ждет незабываемая поездка по волшебным фантастическим мирам, где за каждым поворотом может находится все что угодно. Не позволяйте названию обмануть вас – эти американские горки точно не дадут вам уснуть!"}',
                'rating'      => '4', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '115', 'name' => 'Dreadhalls', 'slug' => 'dreadhalls',
                'video'       => 'SSgj6HkyO_E',
                'description' => '{"az": "Siz yeraltıda oyanacaqsınız. Çıxışı tapmaq üçün labirinti araşdırın, amma orda məskən salan məxluqlardan uzaq durmağa çalışın. Yeganə silahınız görünməzlik, cəsarət və zəyif işıq olacaq. İşığı vaxtı vaxtında yağlamağı da unutmayın, yoxsa bu qaranlıq sizi məhv edəcək.", "en": "You are trapped deep inside a massive dungeon. Explore it, survive it and find a way to escape. Your only weapons will be stealth, your own courage, and a faint light. Dreadhalls is an intense and scary experience, not for the faint of heart. You have been warned!", "ru": "Вы проснетесь в подземелье. Исследуйте лабиринт в поисках выхода, избегая при этом существ, которые обитают там. Единственным оружием будет незаметность, храбрость и слабый свет, который вам будет необходимо подпитывать маслом - иначе кромешная тьма поглотит вас."}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '116', 'name' => 'Downward Spiral: Prologue',
                'slug'        => 'downward-spiral-prologue', 'video' => 'QqEy8jjT7oE',
                'description' => '{"az": "Downward Spiral: Prologue oyununda özünüzü çəkisizlikdə kosmonavt rolunda hiss edin!\\n\\nDostlarla bir birinizə qarşı yarışın və ya eyni komandada inanılmaz kosmos dünyasına səyahət edin!", "en": "Downward Spiral: Prologue is a mysterious and atmospheric zero gravity thriller powered by innovative, free movement in VR without motion sickness.", "ru": "Downward — игра, в которой Вы сможете ощутить себя космонавтом в невесомости!\\n\\nСразитесь с друзьями или отправьтесь в путешествие компанией до 4 человек в захватывающем мире без гравитации!"}',
                'rating'      => '5', 'multiplayer' => '1', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '117', 'name' => 'Bullet Sorrow VR',
                'slug'        => 'bullet-sorrow-vr', 'video' => 'XvYCyYx6ins',
                'description' => '{"az": "Bullet Sorrow VR - VIrtual Reallıq cihazları üçün arkada-şuter oyunudur. Oyunçular xüsusi agent rolunda çıxış edirlər. Gizli bazaya düşən agentlər silahlarını və yeni əldə etdikləri ultra bacarıqlarını istifadə edərək burdan çıxış yolunu tapmalı olacaqlar.", "en": "Bullet Sorrow VR is a Multi-player Online FPS game, also contains full story single stages to discover. Using progressive Bullet Time abilities and a bunker-cover system, evade attacks and move on! Available on Oculus Rift and HTC Vive.", "ru": "Bullet Sorrow VR - это аркадный шутер для VR-устройств, где игроки оказываются в шкуре спецагента, обнаруживаюшего себя на секретной базе, откуда он должен выбраться, используя оружие и новообретенные сверхспособности."}',
                'rating'      => '5', 'multiplayer' => '1', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '118', 'name' => 'Alice VR', 'slug' => 'alice-vr',
                'video'       => 'IfB-hhI9Hhs',
                'description' => '{"az": "Alice VR - müxtəlif tapmacalarla dolu macəra dolu tədqiqat oyunu, virtual reallıqda unikal təcrübə. Bənzərsiz mənzərə və tərzli elektron musiqisi. Alice VR dünyasına xoş gəlmisiniz!", "en": "Alice VR is a single player story-driven exploration game with puzzles designed to be a unique VR experience. Set on a mysterious planet and inspired by Alice in Wonderland, it\'s a thrilling, immersive adventure with beautiful graphics and an atmospheric electronic soundtrack.", "ru": "Alice VR - это остросюжетная исследовательская игра с множеством головоломок, уникальное приключение в виртуальной реальности. Прекрасные пейзажи, стильная электронная музыка. Добро пожаловать в мир Alice VR!"}',
                'rating'      => '3', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '119', 'name' => 'ADR1FT', 'slug' => 'adr1ft',
                'video'       => 'kpA0vcfAiV0',
                'description' => '{"az": "ADR1FT - birinci şəxs tərəfindən oynanılan macəradır. Bu oyunda çətin vəziyyətə düşən astronaft-qadının hekayəsi bəhs edilir. Yaddaşını itirən astronavt oksigen itirən zədələnmiş skafandrla açıq kosmosda məhv edilmiş stansiya xarabalıqlarında oyanır. İndi yeganə sağ qalan qəhrəmanımız ekipaj üzvlərini məhv edən qəzanın səbəblərini tapmalıdır. Skafandrı düzəltmək və evə qayıtmaq üçün oyunçu açıq kosmosun sərt şərtlərində dağıntıları araşdıraraq və dəyərli resursları toplayaraq sağ qalmaq üçün mübarizə aparmalıdır.", "en": "ADR1FT is the story of an astronaut who wakes up floating silently in space amongst the debris of destroyed space station…the only survivor of a catastrophic event, left with no memory, a critically damaged EVA suit leaking oxygen and no way home.", "ru": "ADR1FT - это игра от первого лица (FPX), которая рассказывает историю женщины-астронавта, попавшей в беду. Она очнулась в открытом космосе среди обломков уничтоженной станции, потеряв память, в поврежденном скафандре, теряющем кислород. Теперь единственная выжившая должна выяснить причину катастрофы, погубившей всех членов экипажа. Игроку предстоит бороться за жизнь, исследуя обломки и собирая бесценные ресурсы в суровых условиях открытого космоса, чтобы починить скафандр и вернуться домой."}',
                'rating'      => '4', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '120', 'name' => 'ARKTIKA.1', 'slug' => 'arktika-1',
                'video'       => 'Ehpe6ea6-LY',
                'description' => '{"az": "ARKTIKA.1 - birinci şəxs tərəfindən oynanılan canlı və dinamik şuterdir. Yüz il sonra dünyanı qəflətən yeni buz dövrü bürüyəcək və öldürücü soyuq hər bir evə sızacaq. Yalnız ekvatorda hələ də günəş altında yer tapmaq mümkündür, amma şimalın və cənubun bəşəriyyət üçün çox lazımlı resursların qaldığı bəzi yerlərdə kiçik insan qrupları hələ də həyata tutunmağa çalışır. Keçmiş Rusiyanın şaxtalı sahələrindəki son koloniyalardan biri qarətçi, işğalçı və dəhşətli buzlu məxluqlarla mübarizə aparmağa çalışır. Onların sağ qalmasına kömək edin. Bəşəriyyətə iknci bir şans verin.", "en": "From the creators of the Metro series comes a new vision of the apocalypse. ARKTIKA.1 is a highly immersive, action-packed, first-person shooter designed exclusively for Oculus Touch. Nearly a century in the future, the world has fallen into a new ice age in the aftermath of a silent apocalypse. Only the equatorial regions remain habitable, yet pockets of humanity survive in small numbers all over the planet, hanging onto existence in the resource-rich territories to the north and south--resources that everyone wants to control... Protect the colony in the wastelands of old Russia from raiders, marauders, and horrifying creatures. Be the savior.", "ru": "ARKTIKA.1 - это яркий и динамичный шутер от первого лица. Через сто лет мир незаметно накроет новый ледниковый период, и убийственный холод просочится в каждый дом. Лишь на экваторе все еще можно найти место под солнцем, но кое-где на севере и юге, там, где остались так необходимые всему человечеству ресурсы, небольшие группы людей все еще цепляются за жизнь. Одна из последних колоний на морозных просторах бывшей России пытается выстоять против мародеров, захватчиков и жутких ледяных тварей. Помогите им выжить. Дайте человечеству второй шанс."}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '121', 'name' => 'Blade Runner 2049: Memory Lab',
                'slug'        => 'blade-runner-2049', 'video' => '0hLWGaiSI8U',
                'description' => '{"az": "Blade Runner 2049 oyununda istifadəçilər öz üzərinə spinnerin idarəsini götürməli (xeyr, məhşur aksesuarı deyil, polislərin hava apparatını) və gələcək Los Angelesin küçələrində replikantları izləməli olacaqlar.", "en": "In this single-player adventure from the world of Blade Runner 2049, you\'ve been transported to the Wallace Corporation\'s Memory Lab where an eager Joi-Tech model hologram is ready to scan your mind to reveal the circumstances behind your latest retirement. You\'ll travel from the memory lab and into strange and thrilling recreations of the future, complete with fully volumetric characters and interactive elements. Within each scene you\'ll use futuristic tools to uncover clues to reveal and evidence to hide. Featuring Oculus Touch support and a sprawling, 360º world, Memory Lab brings the Blade Runner universe to you like never before.", "ru": "В Blade Runner 2049 игрокам предстоит взять под управление спиннер (нет, не популярный аксессуар, а летательный аппарат полицейских) и выследить репликанта на улицах Лос-Анджелеса будущего."}',
                'rating'      => '4', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '122', 'name' => 'Blocks', 'slug' => 'blocks',
                'video'       => 'lVdRqt8IsSk',
                'description' => '{"az": "Blocks - sizə modelləşdirmə sahəsində təcrübənizdən asılı olmayaraq virtual reallıqda rahatlıqla 3D-obyektləri yaratmağa imkan verir. Altı sadə aləti istifadə edərək siz öz tətbiqlərinizi canlandıra, həcmli əsərlər yarada və sadəcə öz təsəvvür gücünüzü sərbəst buraxa bilərsiniz.", "en": "Blocks lets you easily create 3D objects in virtual reality, no matter your modelling experience. Using six simple tools, you can bring your applications to life, create a volumetric masterpiece, or simply let your imagination run wild. Get inspired by others’ creations or publish your own to inspire the world around you. No matter your modeling experience, you’ll create beautiful 3D objects in no time.", "ru": "Blocks позволяет легко создавать 3D-объекты в виртуальной реальности, независимо от вашего опыта моделирования. Используя шесть простых инструментов, вы можете оживить свои приложения, создать объемный шедевр или просто позволить вашему воображению разбежаться."}',
                'rating'      => '4', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '123', 'name' => 'Coco VR', 'slug' => 'coco-vr',
                'video'       => 'KIqJQyW6cNg',
                'description' => '{"az": "Məhşur Pixar studiyası ilk dəfə olaraq virtual reallıq cihazları üçün Coco VR adlı filmi təqdim etdi.\\n\\nBu studiyanın təqdim etdiyi yeni filmlər virtual reallığa səyahət etmək üçün istiqamətləndirilmiş əyləncəli kontentdir. Baxmayaraq ki, bu filmdir baş verən hadisələri izləyici idarə edir. Faktiki olaraq izləyici oyunçuya çevrilir", "en": "Coco VR is Pixar’s stunning debut into virtual reality: an adventure into the beautiful Disney-Pixar film, Coco. You can choose either a single or multi-player experience, and follow the magical alebrije into the luminous world of Coco filled with lovable characters and beautiful settings from the film.", "ru": "Известная студия Pixar впервые решила выпустить фильм для пользования очками виртуальной реальности Coco VR.\\n\\nНовинки фильмов, выпущенные данной студией – это развлекательный контент, направленный на нахождение в виртуальной реальности. Несмотря на то, что это фильм, в нем за действия героя отвечает сам зритель. По факту, он становится игроком."}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '124', 'name' => 'Dead and Buried', 'slug' => 'dead-and-buried',
                'video'       => 'hT1v3ZopqCQ',
                'description' => '{"az": "Oyun Vəhşi Qərb tərzində qurulub. Oyunçu şəxsi Kolt revolveri ilə fərqli məkanlara düşəcək. Bu oyunda kontrollerlərin üzərindəki tutacaqların, düymələrin və sensorların köməyi ilə nişan almaq, atəş açmaq, silahı təkrar doldurmaq və hətta barmaqda fırlatmaq mümkün olacaq.", "en": "Free with Oculus Touch Activation! Step into a world full of gunslingers and ghosts in Dead and Buried. Grab your Touch controllers and become the best gunslinger in the wild west in this multiplayer action shooter. Battle it out in the old saloon. Rob a runaway train. Team up with other bandits and defend against hordes of ghastly creatures. Finally, you can live out your wild west fantasies thanks to virtual reality.", "ru": "Игра выполнена в стиле Дикого Запада, и игроку предстоит попадать по различным объектам, используя личный шестизарядный кольт. При помощи ручек, кнопок и сенсоров, которые расположены на контроллерах, игрок сможет наводить оружие, стрелять из него, перезаряжать, даже эффектно крутить на пальце, как это делают в фильмах отчаянные стрелки."}',
                'rating'      => '5', 'multiplayer' => '1', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '125', 'name' => 'Echo Arena', 'slug' => 'echo-arena',
                'video'       => 'xMD2tBufa3Y',
                'description' => '{"az": "Echo Arena - çəkisizlikdə olan iki komandanın qarşıdurmasını əks etdirən, \\"TRON: Legacy\\" filminin tərzində hazırlanan komanda oyunudur. Komandanın məqsədi - diskləri rəqibin qorunma zonasına atmaqdır.", "en": "Echo Arena now supports parties of 15 players and 5v5 private matches, with 5 more slots available for spectators! In the Arena, your team will face off against the competition in a zero-gravity clash of robotic glory as you glide, boost, and punch your way to scoring goals in a breathtaking virtual arena.", "ru": "Echo Arena - это многопользовательская игра, в стиле фильма «Трон: Наследие», которая включает в себя противостояние двух команд находящихся в невесомости. Цель команды - забросить диск в зачетную зону оппонента."}',
                'rating'      => '5', 'multiplayer' => '1', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '126', 'name' => 'Edge of Nowhere', 'slug' => 'edge-of-nowhere',
                'video'       => '5RtzPiUR-_8',
                'description' => '{"az": "Edge of Nowhere – üçüncü şəxs tərəfindən oynanılan, periodik şəkildə birinci şəxs görüntüsünə çevrilən, eksklüziv olaraq Oculus Rift virtual reallıq cihazları üçün yaradılmış ekşn oyunudur. Bu oyunda itkin düşmüş ekspedisiyanın izlərini axtararaq qarlı dağların zirvələrinə çatan dağçı-alimin hekayəsi haqqında bəhs edilir.", "en": "Edge of Nowhere is a third-person VR adventure from acclaimed independent developer Insomniac Games. Victor Howard is on a journey to find his fiancée, Ava Thorne, who is part of a lost expedition in Antarctica. His rescue mission takes a sudden turn as he ventures deeper into a dark monstrous world where reality warps and twists around him. Desperate to find the one he loves, Victor must encounter disturbing monsters and scale looming ice walls as he descends further into madness. In Edge of Nowhere, nothing is what it seems and the unexpected lurks from all sides.", "ru": "Edge of Nowhere – экшен от третьего лица с периодическим переключением на вид от первого, являющийся эксклюзивом для шлема виртуальной реальности Oculus Rift, расскажет нам историю об учёном-скалолазе, которому довелось отправиться к вершинам заснеженных гор, дабы найти следы пропавшей экспедиции"}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '127', 'name' => 'Face Your Fears', 'slug' => 'face-your-fears',
                'video'       => 'QX-uORleXI8',
                'description' => '{"az": "Bu oyunda siz göydələnin kənarında dayanaraq nəhəng robotla insanların inanılmaz qarşıdurmasını izləməli və yüksəklik qorxunuzu sınamalı və ya uşaqlığınıza dönərək yataq otağınızda ən dəhşətli qorxularınızla üz üzə gəlməli olacaqsınız!", "en": "New Content: A simple, old prop plane ferries its passengers just as it has a thousand times before. Things take a turn for the worst when the engine starts sputtering. Will Flight 101 have to turn back? Will the engine restart? Face Your Fears will scare you, creep you out, or cause your jaw to drop in awe and amazement. Some of these experiences are terrifying, some fun and spooky, some are simply mysterious! Robots and ghosts and femme fatales can all be found within! Try looking around, looking up, looking behind you. You never know what’s lurking in the dark. Share the experience with your friends! It’s even more fun to watch them scream and jump!", "ru": "В данной игре Вам предоставляется возможность проверить, боитесь ли Вы высоты, стоя на краю небоскреба и наблюдая за масштабным сражением между гигантским роботом и человечеством, либо, оказавшись ребенком в детской спальне, встретиться лицом к лицу со своими самыми жуткими кошмарами!"}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '128', 'name' => 'Final Goalie: Football Simulator',
                'slug'        => 'final-goalie-football-simulator', 'video' => '_1JP30K3OMI',
                'description' => '{"az": "Final Goalie: Football Simulator – virtual reallıq cihazları üçün yaradılmış qapıçı simulyatorudur. Bu oyunun bənzərsiz gedişatından zövq almağınız üçün üç fərqli oyun rejimi təqdim olunur.\\n\\nSimulator rejimi əsl futbol həvəskarları üçün yaradılıb. Burda sizi peşəkar oyunçuların hərəkətlərinin əks olunması yolu ilə hazırlanmış 100% realistik qrafika və animasiya gözləyir.\\n\\nArcade rejimi özü ilə bərabər əsl həyəcanı gətirir. Burda siz topları ata və tuta, həmçinin hərəkətin yavaşlanması və nəhəng qapıçı əlcəkləri kimi bonusları aktiv edə biləcəksiniz.\\n\\nMultiplayer rejimi isə sizə online rejimdə bir neçə rəqibinizlə yarışmaq və penaltı vurmaq imkanlarını yaradır.", "en": "Final Goalie is the Goalkeeper Simulator Game specially designed for Virtual Reality offering an Amazing Experience in 3 different game modes.\\n\\nSimulator Mode For lovers of pure football ! 100% realistic graphics and animations made by capturing the movements of professional players. You can choose between playing a quick game or try and defeat 150 levels where you face the best teams in the world!\\n\\nArcade Mode A super fun madness!!! You can catch and throw balls to activate the most diverse and spectacular power-ups such as slow-motion, giant gloves, etc. As with the Simulator Mode, you can choose between playing quick game or make your way through 150 varied levels.\\n\\nMultiplayer OCULUS VS mobile Compete against your friends in the novel and fun Online Mode where you can make penalty shots from your smartphone with the Final Kick game (free app with over 20 million players) Hilarious interaction where your friends will see you moving in real time!", "ru": "Final Goalie: Football Simulator – симулятор вратаря, разработанный для устройств виртуальной реальности. Вас ждет три различных игровых режима, которые позволят вам сполна насладиться увлекательным игровым процессом.\\n\\nРежим Simulator предназначен для настоящих любителей футбола. В нем вас ждет 100% реалистичная графика и анимация, сделанная путем захвата движений профессиональных игроков.\\n\\nРежим Arcade принесет с собой настоящее безумие. Здесь вы сможет бросать и ловить мячи, а также активировать самые различные бонусы, к примеру, замедление движения или гигантские вратарские перчатки.\\n\\nТретий режим, Multiplayer HTC-VIVE VS Mobile, позволит вам сразиться против своих друзей в веселом сетевом режиме, в котором вы сможете пробивать пенальти, используя приложение"}',
                'rating'      => '5', 'multiplayer' => '1', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '129', 'name' => 'Killing Floor: Incursion',
                'slug'        => 'killing-floor-incursion', 'video' => 'QnTj9-E8gDs',
                'description' => '{"az": "Killing Floor: Incursion oyununda siz \\"Horzine\\" şirkətinin mühafizə əməkdaşı roluna girməli, müxtəlif çeşidli tapança, tüfəng, balta və digərlərin arasında silah seçməli, həmfikirlərinizi tapmalı və həyatınız üçün amansız mübarizə aparmalı olacaqsınız. Məkanı araşdırın, tapmacaları həll edin və silahları tapın. Sonunda siz \\"Horzine\\" şirkətinin əsl niyyətini öyrənəcəksiniz və kimlərə inana biləcəyinizi başa düşəcəksiniz. Dəhşətli fermalardan tutmuş yüksək texnologiyalı zavodlara qədər tamamilə fərqli yerlərdə yarışın və mutantların hücumu arxasında nələrin və ya kimlərin dayandığını tapın.", "en": "From the award-winning developer, Tripwire Interactive (makers of Red Orchestra and Killing Floor franchises), comes a multi-hour, story-driven adventure made for VR. Travel through diverse environments, from creepy farmhouses to bone-filled catacombs to high tech facilities, either solo or in co-op mode. Explore the detailed world while fighting for your life with pistols, shotguns, axes, and even the occasional leftover limb. When it’s all over, invite a friend to go back with you and see if you can pull them through alive, or try to survive in Hardcore mode with increased difficulty levels. Try your skills in Holdout mode and see how long you can last against a never-ending horde of Zeds. Good luck!", "ru": "В сюжетной игре «Killing Floor: Incursion» вам придется вжиться в роль служащего охранного подразделения компании Horzine, выбрать оружие из множества вариантов, включающих пистолеты, дробовики, топоры и многое другое, найти союзников, а затем отчаянно сражаться за свою жизнь. Игроки будут исследовать местность, решать загадки, искать оружие и боеприпасы. В конце концов они раскроют истинные намерения компании Horzine и поймут, кому здесь в самом деле можно доверять. Сражайтесь в самых разных местах — от жутких ферм до высокотехнологичных заводов — и выясните, кто... или что стоит за нашествием мутантов."}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '130', 'name' => 'Lucky’s Tale', 'slug' => 'luckys-tale',
                'video'       => '__opKU__gvU',
                'description' => '{"az": "Lucky\'s Tale - xüsusi olaraq Oculus Rift üçün yaradılmış macəra dolu platformerdir. Oyunçular Lucky qəhrəmanı ilə birlikdə qeyri-adi canlılarla, sirlərlə və tapmacalarla dolu mənzərəli dünyaya səyahət edəcəklər", "en": "Lucky’s Tale is a delightful platforming adventure game designed exclusively for the Oculus Rift. Join Lucky as he runs, jumps, climbs and spins his way through a bright, colorful world filled with thrilling challenges, wacky creatures, and all the shiny things a little fox could ever want!\\n\\nBuilt from the ground up for virtual reality, Lucky’s Tale offers a unique twist on the 3rd person perspective platformer. Its innovative approach to the camera, character motion, environment and gameplay all work together to provide a highly comfortable experience while allowing players to freely roam diverse, immersive environments. Whether you’re racing with Lucky through lush trees, dodging swamp pits, battling menacing bosses, or mastering mini-games, youʼll feel like you’ve truly gone inside the world of a video game thanks to the magic of VR.", "ru": "Lucky\'s Tale - это приключенческий платформер, созданный специально для Oculus Rift. Игрокам вместе с Лаки предстоит путешествие по красочному миру, полному разнообразных существ, загадок и тайн. Игра доступна всем пользователям Oculus Rift."}',
                'rating'      => '4', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '131', 'name' => 'Minecraft', 'slug' => 'minecraft',
                'video'       => 'z0YhOa8H7j0',
                'description' => '{"az": "Virtual Reallıq texnologiyaların sayəsində Minecraft dünyasına səyahət edin. Dünyaları inşa edin, ətrafı araşdırın və moblarlı məhv edin - qısacası, istədiyiniz hər şeyi edin, lakin bu dəfə adi monitor ekranında deyil, virtual reallığın sərhədsiz dünyasında! Virtual reallıqda dəhşətli moblarla üz üzə görüş yeni məna kəsb edəcək, qaranlıq mağaralar üç həcmli səsləndirmənin sayəsində daha qorxulu olacaq, günəşin işığı isə virtual dünyada daha xoş olacaq, nəinki ekran arxasında.", "en": "Get right inside the world of Minecraft with virtual reality. Build, explore and battle mobs - do all the things you know and love - but from a fresh perspective. With a VR headset on, coming face-to-face with monstrous mobs takes on new meaning; creeping into dark caves inspires even greater trepidation thanks to 3D audio; and the light of a gorgeous sunrise seems to envelop you more completely", "ru": "Окажитесь внутри мира Minecraft благодаря технологии виртуальной реальности. Стройте, исследуйте мир и сражайтесь с мобами – словом, делайте все то, что вам так нравится, но не на обычном экране, а с эффектом погружения в виртуальный мир! Если у вас на голове шлем виртуальной реальности, встреча лицом к лицу с чудовищными мобами обретет новый смысл, попадание в темные пещеры будет вызывать у вас более сильные чувства благодаря трехмерному звуку, а купаться в лучах солнечного света приятнее, если солнце светит не в окне экрана, а во всем (виртуальном) мире."}',
                'rating'      => '4', 'multiplayer' => '1', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '132', 'name' => 'Ripcoil', 'slug' => 'ripcoil',
                'video'       => 'et8uiz6ldtY',
                'description' => '{"az": "Ripcoil - Oculus Touch üçün futuristik arkada oyunudur. Oyunçular futuristik duellərdə iştirak edərək rəqiblərinin sahəsinə diskləri atmalı olacaqlar. Oyun prosesi harda olduğunuzu unutduraraq oyuna tamamilə qərq edir. Kontrollerlərin və VR eynəklərinin izlənilməsi sistemi isə virtual reallıqla tam sinxronu təmin edir.", "en": "Enter a futuristic gladiatorial arena packed with rabid fans as you face off against networked opponents in a disc throwing duel. A wholly unique navigation system will allow you to deftly position your hover board as you reach out with your Touch controllers to launch, catch and punch the speeding, spinning Ripcoil disc", "ru": "Ripcoil - футуристическая аркада для Oculus Touch. Игрокам предстоит принять участие в футуристических дуэлях, стараясь поразить метательными дисками участки за противником. Игровой процесс заставляет забыть где ты находишься, а благодаря отслеживанию перемещений контроллеров и шлема достигается полная синхронизация действий с виртуальным аватаром."}',
                'rating'      => '5', 'multiplayer' => '1', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '133', 'name' => 'Robo Recall', 'slug' => 'robo-recall',
                'video'       => 'dYYH1ED3-r8',
                'description' => '{"az": "Robo Recall - Oculus Rift virtual reallıq eynəkləri üçün yaradılmış, Oculus Touch qarniturunu dəstəkləyən, birinci şəxs tərəfindən oynanılan ekşn-şuterdir. Ən yeni silahlarla robotlara qarşı sonunadək mübarizə aparın və şəhəri robotların hücumundan xilas edin!", "en": "Robo Recall is an action-packed VR first-person shooter with visceral Touch gameplay and an in-depth scoring system. Earn the high score by using creative combat tactics and skill shots as you teleport through city streets and rooftops in an awe-inspiring ballet of bullets. Tear apart your interactive robot foes and use them to fend off the enemy onslaught. Unlock, customize and test weapons before taking on advanced challenges that put your newfound skills to the test!", "ru": "Robo Recall - это экшн-шутер от первого лица для шлемов виртуальной реальности Oculus Rift с поддержкой Oculus Touch. Сражайся до последнего против восставших роботов при помощи самого инновационного оружия и спаси город от безумного нашествия!"}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '134', 'name' => 'Rock Band VR', 'slug' => 'rock-band-vr',
                'video'       => 'qffTOh3hQHI',
                'description' => '{"az": "Rock Band VR - \\"Rock Band\\" seriyasının VR versiyasıdır. Burda istifadəçilər həm Rock qrupunun üzvü rolunda musiqi alətləri ilə çixiş edirlər, həm də virtual səhnəni VR cihazlar vasitəsi ilə izləyirlər!", "en": "Get ready for the most authentic high-energy rock\'n\'roll simulation ever! Strap on your guitar, join your band on stage and rock out like nobody\'s watching!\\n\\nWith 60 outstanding playable tracks, classic game mode, campaign mode, and leaderboards, Rock Band VR brings you hundreds of hours of ultimate rock\'n\'roll simulation!", "ru": "Rock Band VR - VR-версия серии Rock Band, в которой игроки не только \\"отыгрывают\\" роль члена рок-группы с помощью инструментов, но и смотрят на виртуальную сцену с помощью шлема виртуальной реальности!"}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '135', 'name' => 'The Climb', 'slug' => 'the-climb',
                'video'       => 'EeKbmJTbyek',
                'description' => '{"az": "The Climb - virtual reallıqda alpinizm simulyatorudur. Yüksək zirvələri fəth edin, öz hərəkətlərinizi sərbəst idarə edin, ətrafı kəşf edin və öz alter-eqonuzun yüksəklikdən düşməsini \\"canlı yayımda\\" izləyin. Həmçinin bu simulyatorda virtual alpinistlərə yeni zirvələri və mərhələləri təqdim edən üç fərqli çətinlik səviyyəsi təqdim olunur.", "en": "Scale huge heights and feel the exhilaration of extreme free solo climbing. Explore and enjoy the view or compete for the fastest times on leaderboards with Touch or gamepad controls.\\n\\nFree solo climbing – Experience the adrenaline rush as you ascend to epic heights, explore caves, find shortcuts, and more.\\n\\nMultiplayer and achievements – Race other players’ ghosts, rise up leaderboards and earn over 100 achievements to unlock gear.\\n\\nBouldering – Beat intense routes that demand perfect technique.\\n\\nTourist mode – Climb with simplified mechanics, ideal for introducing friends to VR. Outstanding environments – Feel the thrill in four beautiful, immersive locations by day or night.", "ru": "The Climb - это VR-симулятор альпинизма, в котором игрокам предстоит покорить множество высоких гор: они вольны полностью управлять своими движениями, осматриваться или наблюдать за падениями своего альтер-эго в \\"прямом эфире\\". Так же игроки могут покорить три разных сложности, каждая из которых предлагает виртуальным альпинистам новые высоты и вызовы."}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '136', 'name' => 'The Unspoken', 'slug' => 'the-unspoken',
                'video'       => 'qmPw2cJNzGE',
                'description' => '{"az": "The Unspoken - Oculus Rift virtual reallıq cihazları üçün yaradılmış \\"fighting\\" adlandırdığımız qaydasız döyüş elementləri ilə tamamlanmış ekşn oyunudur. Burda oyunçular güləşçi sehrbazlar rolunda təkbətək mübarizədə yarışırlar.", "en": "You’re a rising star in Chicago’s dueling underground. When two of your fellow acolytes go missing, it’s up to you to investigate. You find a city unhinged, its neon back-alleys crawling with demons—and you uncover a grim history that won’t stay buried. Play the single-player Acolytes Chapter, or challenge other spell-casters in the arena to rise up through the ranks of an urban magic fight club.\\n\\nManipulate the environment around you with the powerful arcane forces that flow through your fingertips. Summon eldritch monstrosities with your bare hands. Unlock your full potential with gesture-based spell-casting. From a finessed flick of the wrist to a visceral push, the play style is up to you - five classes channel their energies to cast over thirty spells. You’ll levitate cars, unleash electricity, and see the future.", "ru": "The Unspoken - это мультиплеерный экшен с элементами файтинга для шлема виртуальной реальности Oculus Rift. Игроки в роли боевых магов выясняют отношения один-на-один"}',
                'rating'      => '5', 'multiplayer' => '1', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '137', 'name' => 'VR Sports Challenge',
                'slug'        => 'vr-sports-challenge', 'video' => 'j_C8c2S5ANE',
                'description' => '{"az": "VR Sports Challenge oyununda tunneldən sahəyə, stadiona, taxta və ya buz meydançasına elit bir idmançı obrazında çıxanda dəbilqənizi almağı, uğurlu beysbol çubuğunuzu hazırlamağı, idman ayaqqabılarınızın bağlarını möhkəm bağlamağı və ya konkilərinizi itiləməyi unutmayın. Ən sevdiyiniz idman yarışlarında xəyal belə edə bilməyəcəyiniz əfsanəvi hisslər yaşayın!", "en": "Grab a helmet, polish your lucky bat, lace up your kicks, and sharpen your skates as you step out of the tunnel and onto the gridiron, ballpark, hardwood, and ice as an elite athlete in VR Sports Challenge. Live the mythical moments from your favorite sports that you\'ve only dreamed about: call the plays and drive your team to the end zone as an all-pro quarterback, knock the ball out of the park as long ball slugger, drain threes from around the horn as a hot handed shooter, and lock down victory on the ice as an impenetrable goalie", "ru": "Возьмите шлем, отполируйте свою счастливую биту, завяжите шнурки и заточите свои коньки, когда выходите из туннеля на поле, стадион, площадку или лед в качестве элитного спортсмена в VR Sports Challenge. Ощутите легендарные моменты из ваших любимых видов спорта, о которых вы могли только мечтать!"}',
                'rating'      => '4', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '138', 'name' => 'Wilson Heart', 'slug' => 'wilson-heart',
                'video'       => 'E3fDcGgYsQs',
                'description' => '{"az": "Wilson\'s Heart birinci şəxs tərəfindən oynanılan, həyəcanverici psixoloji trillerdir. Hadisələr 1940-ci illərin, qorxuducu transformasıyaya məruz qalan xəstəxanasında baş verir. Virtual Reallığın bu macərasında siz üzəyinin başqa sirli cihazla dəyişdirildiyinin fərqinə varan xəstəsi, Robert Vilsonun rolunda olacaqsınız.", "en": "Wilson\'s Heart is an immersive first-person psychological thriller set in a 1940s hospital that has undergone a haunting transformation. In this original VR adventure, you become Robert Wilson, a patient who awakens to the shocking discovery that his heart has been replaced with a mysterious device.", "ru": "Wilson\'s Heart - это захватывающий психологический триллер первого лица, установленный в больнице 1940-х годов, которая претерпела преследующую трансформацию. В этом оригинальном приключении VR вы становитесь Робертом Уилсоном, пациентом, который пробуждает шокирующее открытие, что его сердце заменено таинственным устройством."}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '139', 'name' => 'Dreamdeck', 'slug' => 'dreamdeck',
                'video'       => null,
                'description' => '{"az": "Dreamdeck sizi inanılmaz yerlərə və möcüzəli dünyalara aparır.", "en": "Dreamdeck transports you to impossible places and magical worlds.", "ru": "Dreamdeck переносит вас в невозможные места и волшебные миры"}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '140', 'name' => 'Assetto Corsa', 'slug' => 'asseto-corsa',
                'video'       => 'KDRPJf9CIr4',
                'description' => '{"az": "Assetto Corsa - innovativ fiziki xüsusiyyətlərə sahib yarış simulyatorudur. Layihənin əsas üstünlüklərindən biri odur ki, istifadəçilər oyunun interfeysini tamamilə özünə uyğun şəkildə dəyişdirə bilərlər.", "en": "Assetto Corsa is a racing game often praised for its realistic physics and smooth graphical style. The VR implementation, which first arrived on Oculus Rift.", "ru": "Assetto Corsa - гоночный автосимулятор с продвинутой физической моделью. Главной особенностью проекта является то, что пользователь может полностью настраивать интерфейс игры под себя любимого. Для любителей модостроения доступна поддержка создания модов. Assetto Corsa задумана разработчиками с целью передать реальный опыт вождения, для чего в игре представлены официально лицензированные трассы и автомобили, созданные с применением технологии лазерного сканирования."}',
                'rating'      => '5', 'multiplayer' => '0', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '141', 'name' => 'Dirt Rally', 'slug' => 'dirt-rally',
                'video'       => 'muvsQrid9w0',
                'description' => '{"az": "DiRT Rally - DiRT seriyasından olan və oyunçuları seriyanın əvvəllərinə qaytaran yarış oyunudur. Oyunda günün vaxtını və hava şəraitini dəyişmək imkanları verilir. Həmçinin oyunçuları qeyri-adi \\"avtomobilin zədələnməsi və təmiri sistemi\\" gözləyir.", "en": "DiRT Rally is the most authentic and thrilling rally game ever made. It perfectly captures the white-knuckle feeling of racing on the edge as you hurtle along dangerous roads, knowing that one crash could end it all.", "ru": "DiRT Rally - это гоночная игра из серии DiRT, которая возвращает игроков к истокам серии. В игре представлены возможности смены времен суток и погодных условий, игроков ожидает оригинальная система повреждений и ремонта авто."}',
                'rating'      => '5', 'multiplayer' => '1', 'created_at' => $now,
                'updated_at'  => $now
            ),
            array(
                'id'          => '142', 'name' => 'Project CARS2', 'slug' => 'project-cars2',
                'video'       => 'Cd6T_HlgPm0',
                'description' => '{"az": "Project Cars 2 oyunu hər kəs üçün deyil. Bu oyun sizi əsl yarışa hazırlamır, lakin yarış bolidini idarə edənlərin necə böyük çətinliklərlə rastlaşdığını göstərir.", "en": "Already the most technically-advanced racing game on the planet supporting 12K, second screen apps, and 40+ wheels and peripherals, the world of virtual reality as made possible via the Oculus Rift and HTC Vive now offers players the", "ru": "Project Cars 2 — игра не для всех. Она не готовит к настоящим гонкам, но пытается дать понять, насколько тяжёл труд человека, сидящего за рулем гоночного болида."}',
                'rating'      => '5', 'multiplayer' => '1', 'created_at' => $now,
                'updated_at'  => $now
            )
        );

        DB::connection('db_device')->table("games")->insert($games);
    }
}
