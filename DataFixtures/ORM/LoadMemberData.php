<?php
namespace Acme\AKB48Bundle\DataFixtures\orm;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Acme\AKB48Bundle\Entity\Member;

/**
 * update info
 */

/**
 * @author hidenorigoto <hidenorigoto@gmail.com>
 */
class LoadMemberData implements FixtureInterface
{
    public function load($em)
    {
        // 阿部マリア
        $member = new Member();
        $member->setNickName('まりあ');
        $member->setFirstName('マリア');
        $member->setFamilyName('阿部');
        $member->setFirstNameKana('まりあ');
        $member->setFamilyNameKana('あべ');
        $member->setFirstNameEn('Maria');
        $member->setFamilyNameEn('Abe');
        $member->setBirthday(new \DateTime('1995-11-29'));
        $member->setHometown('神奈川');
        $member->setClass('10');
        $member->setTeam('');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 秋元才加
        $member = new Member();
        $member->setNickName('さやか');
        $member->setFirstName('才加');
        $member->setFamilyName('秋元');
        $member->setFirstNameKana('さやか');
        $member->setFamilyNameKana('あきもと');
        $member->setFirstNameEn('Sayaka');
        $member->setFamilyNameEn('Akimoto');
        $member->setBirthday(new \DateTime('1988-07-26'));
        $member->setHometown('千葉');
        $member->setClass('2');
        $member->setTeam('K');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 近野莉菜
        $member = new Member();
        $member->setNickName('チカリーナ');
        $member->setFirstName('莉菜');
        $member->setFamilyName('近野');
        $member->setFirstNameKana('りな');
        $member->setFamilyNameKana('ちかの');
        $member->setFirstNameEn('Rina');
        $member->setFamilyNameEn('Chikano');
        $member->setBirthday(new \DateTime('1993-04-23'));
        $member->setHometown('東京');
        $member->setClass('5');
        $member->setTeam('B');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 藤江れいな
        $member = new Member();
        $member->setNickName('れいにゃん');
        $member->setFirstName('れいな');
        $member->setFamilyName('藤江');
        $member->setFirstNameKana('れいな');
        $member->setFamilyNameKana('ふじえ');
        $member->setFirstNameEn('Reina');
        $member->setFamilyNameEn('Fujie');
        $member->setBirthday(new \DateTime('1994-02-01'));
        $member->setHometown('千葉');
        $member->setClass('4');
        $member->setTeam('K');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 藤田奈那
        $member = new Member();
        $member->setNickName('なぁな');
        $member->setFirstName('奈那');
        $member->setFamilyName('藤田');
        $member->setFirstNameKana('なな');
        $member->setFamilyNameKana('ふじた');
        $member->setFirstNameEn('Nana');
        $member->setFamilyNameEn('Fujita');
        $member->setBirthday(new \DateTime('1996-12-28'));
        $member->setHometown('京都');
        $member->setClass('10');
        $member->setTeam('');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 早野薫
        $member = new Member();
        $member->setNickName('かおりん');
        $member->setFirstName('薫');
        $member->setFamilyName('早野');
        $member->setFirstNameKana('かおる');
        $member->setFamilyNameKana('はやの');
        $member->setFirstNameEn('Kaoru');
        $member->setFamilyNameEn('Hayano');
        $member->setBirthday(new \DateTime('1992-12-12'));
        $member->setHometown('東京');
        $member->setClass('2');
        $member->setTeam('K');
        $member->setGraduatedAt(new \DateTime('2009-04-26'));
        $em->persist($member);

        // 平嶋夏海
        $member = new Member();
        $member->setNickName('なっちゃん');
        $member->setFirstName('夏海');
        $member->setFamilyName('平嶋');
        $member->setFirstNameKana('なつみ');
        $member->setFamilyNameKana('ひらじま');
        $member->setFirstNameEn('Natsumi');
        $member->setFamilyNameEn('Hirajima');
        $member->setBirthday(new \DateTime('1992-05-28'));
        $member->setHometown('東京');
        $member->setClass('1');
        $member->setTeam('B');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 星野みちる
        $member = new Member();
        $member->setNickName('みっちー');
        $member->setFirstName('みちる');
        $member->setFamilyName('星野');
        $member->setFirstNameKana('みちる');
        $member->setFamilyNameKana('ほしの');
        $member->setFirstNameEn('Michiru');
        $member->setFamilyNameEn('Hoshino');
        $member->setBirthday(new \DateTime('1985-11-19'));
        $member->setHometown('千葉');
        $member->setClass('1');
        $member->setTeam('A');
        $member->setGraduatedAt(new \DateTime('2007-06-26'));
        $em->persist($member);

        // 市川美織
        $member = new Member();
        $member->setNickName('みおりん');
        $member->setFirstName('美織');
        $member->setFamilyName('市川');
        $member->setFirstNameKana('みおり');
        $member->setFamilyNameKana('いちかわ');
        $member->setFirstNameEn('Ichikawa');
        $member->setFamilyNameEn('Miori');
        $member->setBirthday(new \DateTime('1994-02-12'));
        $member->setHometown('埼玉');
        $member->setClass('10');
        $member->setTeam('');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 今井優
        $member = new Member();
        $member->setNickName('ゆう');
        $member->setFirstName('優');
        $member->setFamilyName('今井');
        $member->setFirstNameKana('ゆう');
        $member->setFamilyNameKana('いまい');
        $member->setFirstNameEn('Yu');
        $member->setFamilyNameEn('Imai');
        $member->setBirthday(new \DateTime('1985-04-17'));
        $member->setHometown('埼玉');
        $member->setClass('2');
        $member->setTeam('K');
        $member->setGraduatedAt(new \DateTime('2007-06-22'));
        $em->persist($member);

        // 井上奈瑠
        $member = new Member();
        $member->setNickName('なるぽん');
        $member->setFirstName('奈瑠');
        $member->setFamilyName('井上');
        $member->setFirstNameKana('なる');
        $member->setFamilyNameKana('いのうえ');
        $member->setFirstNameEn('Naru');
        $member->setFamilyNameEn('Inoe');
        $member->setBirthday(new \DateTime('1991-12-18'));
        $member->setHometown('大阪');
        $member->setClass('3');
        $member->setTeam('B');
        $member->setGraduatedAt(new \DateTime('2008-09-29'));
        $em->persist($member);

        // 入山杏奈
        $member = new Member();
        $member->setNickName('あんにん');
        $member->setFirstName('杏奈');
        $member->setFamilyName('入山');
        $member->setFirstNameKana('あんな');
        $member->setFamilyNameKana('いりやま');
        $member->setFirstNameEn('Anna');
        $member->setFamilyNameEn('Iriyama');
        $member->setBirthday(new \DateTime('1995-12-03'));
        $member->setHometown('千葉');
        $member->setClass('10');
        $member->setTeam('');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 石田晴香
        $member = new Member();
        $member->setNickName('はるきゃん');
        $member->setFirstName('晴香');
        $member->setFamilyName('石田');
        $member->setFirstNameKana('はるか');
        $member->setFamilyNameKana('いしだ');
        $member->setFirstNameEn('Haruka');
        $member->setFamilyNameEn('Ishida');
        $member->setBirthday(new \DateTime('1993-12-02'));
        $member->setHometown('埼玉');
        $member->setClass('5');
        $member->setTeam('B');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 板野友美
        $member = new Member();
        $member->setNickName('ともちん');
        $member->setFirstName('友美');
        $member->setFamilyName('板野');
        $member->setFirstNameKana('ともみ');
        $member->setFamilyNameKana('いたの');
        $member->setFirstNameEn('Tomomi');
        $member->setFamilyNameEn('Itano');
        $member->setBirthday(new \DateTime('1991-07-03'));
        $member->setHometown('大阪');
        $member->setClass('1');
        $member->setTeam('K');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 岩佐美咲
        $member = new Member();
        $member->setNickName('わさみん');
        $member->setFirstName('美咲');
        $member->setFamilyName('岩佐');
        $member->setFirstNameKana('みさき');
        $member->setFamilyNameKana('いわさ');
        $member->setFirstNameEn('Misaki');
        $member->setFamilyNameEn('Iwasa');
        $member->setBirthday(new \DateTime('1995-01-30'));
        $member->setHometown('千葉');
        $member->setClass('7');
        $member->setTeam('A');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 伊豆田莉奈
        $member = new Member();
        $member->setNickName('いずりーな');
        $member->setFirstName('莉奈');
        $member->setFamilyName('伊豆田');
        $member->setFirstNameKana('りな');
        $member->setFamilyNameKana('いずた');
        $member->setFirstNameEn('Rina');
        $member->setFamilyNameEn('Izuta');
        $member->setBirthday(new \DateTime('1995-11-26'));
        $member->setHometown('埼玉');
        $member->setClass('10');
        $member->setTeam('');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 金沢有希
        $member = new Member();
        $member->setNickName('ゆうちゃん');
        $member->setFirstName('有希');
        $member->setFamilyName('金沢');
        $member->setFirstNameKana('ゆうき');
        $member->setFamilyNameKana('かなざわ');
        $member->setFirstNameEn('Yuki');
        $member->setFamilyNameEn('Kanazawa');
        $member->setBirthday(new \DateTime('1993-05-01'));
        $member->setHometown('北海道');
        $member->setClass('10');
        $member->setTeam('');
        $member->setGraduatedAt(null);
        $member->setDeclinedAt(new \DateTime('2011-02-20'));
        $em->persist($member);

        // 河西智美
        $member = new Member();
        $member->setNickName('とも～み');
        $member->setFirstName('智美');
        $member->setFamilyName('河西');
        $member->setFirstNameKana('ともみ');
        $member->setFamilyNameKana('かさい');
        $member->setFirstNameEn('Tomomi');
        $member->setFamilyNameEn('Kasai');
        $member->setBirthday(new \DateTime('1991-11-16'));
        $member->setHometown('東京');
        $member->setClass('2');
        $member->setTeam('B');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 柏木由紀
        $member = new Member();
        $member->setNickName('ゆきりん');
        $member->setFirstName('由紀');
        $member->setFamilyName('柏木');
        $member->setFirstNameKana('ゆき');
        $member->setFamilyNameKana('かしわぎ');
        $member->setFirstNameEn('Yuki');
        $member->setFamilyNameEn('Kashiwagi');
        $member->setBirthday(new \DateTime('1991-07-15'));
        $member->setHometown('鹿児島');
        $member->setClass('3');
        $member->setTeam('B');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 片山陽加
        $member = new Member();
        $member->setNickName('はーちゃん');
        $member->setFirstName('陽加');
        $member->setFamilyName('片山');
        $member->setFirstNameKana('はるか');
        $member->setFamilyNameKana('かたやま');
        $member->setFirstNameEn('Haruka');
        $member->setFamilyNameEn('Katayama');
        $member->setBirthday(new \DateTime('1990-05-10'));
        $member->setHometown('愛知');
        $member->setClass('3');
        $member->setTeam('A');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 加藤玲奈
        $member = new Member();
        $member->setNickName('れなっち');
        $member->setFirstName('玲奈');
        $member->setFamilyName('加藤');
        $member->setFirstNameKana('れな');
        $member->setFamilyNameKana('かとう');
        $member->setFirstNameEn('Rena');
        $member->setFamilyNameEn('Kato');
        $member->setBirthday(new \DateTime('1997-07-10'));
        $member->setHometown('千葉');
        $member->setClass('10');
        $member->setTeam('');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 川崎希
        $member = new Member();
        $member->setNickName('のぞフィス');
        $member->setFirstName('希');
        $member->setFamilyName('川崎');
        $member->setFirstNameKana('のぞみ');
        $member->setFamilyNameKana('かわさき');
        $member->setFirstNameEn('Nozomi');
        $member->setFamilyNameEn('Kawasaki');
        $member->setBirthday(new \DateTime('1987-08-23'));
        $member->setHometown('神奈川');
        $member->setClass('1');
        $member->setTeam('A');
        $member->setGraduatedAt(new \DateTime('2009-02-27'));
        $em->persist($member);

        // 菊地あやか
        $member = new Member();
        $member->setNickName('あやりん');
        $member->setFirstName('あやか');
        $member->setFamilyName('菊地');
        $member->setFirstNameKana('あやか');
        $member->setFamilyNameKana('きくち');
        $member->setFirstNameEn('Ayaka');
        $member->setFamilyNameEn('Kikuchi');
        $member->setBirthday(new \DateTime('1993-06-30'));
        $member->setHometown('東京');
        $member->setClass('7');
        $member->setTeam('K');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 北原里英
        $member = new Member();
        $member->setNickName('きたりえ');
        $member->setFirstName('里英');
        $member->setFamilyName('北原');
        $member->setFirstNameKana('りえ');
        $member->setFamilyNameKana('きたはら');
        $member->setFirstNameEn('Rie');
        $member->setFamilyNameEn('Kitahara');
        $member->setBirthday(new \DateTime('1991-06-24'));
        $member->setHometown('愛知');
        $member->setClass('5');
        $member->setTeam('B');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 小林香菜
        $member = new Member();
        $member->setNickName('かぁち');
        $member->setFirstName('香菜');
        $member->setFamilyName('小林');
        $member->setFirstNameKana('かな');
        $member->setFamilyNameKana('こばやし');
        $member->setFirstNameEn('Kana');
        $member->setFamilyNameEn('Kobayashi');
        $member->setBirthday(new \DateTime('1991-05-17'));
        $member->setHometown('埼玉');
        $member->setClass('2');
        $member->setTeam('B');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 小林茉里奈'
        $member = new Member();
        $member->setNickName('まりんちゃん');
        $member->setFirstName('茉里奈');
        $member->setFamilyName('小林');
        $member->setFirstNameKana('まりな');
        $member->setFamilyNameKana('こばやし');
        $member->setFirstNameEn('Marina');
        $member->setFamilyNameEn('Kobayashi');
        $member->setBirthday(new \DateTime('1996-02-24'));
        $member->setHometown('東京');
        $member->setClass('10');
        $member->setTeam('');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 小原春香
        $member = new Member();
        $member->setNickName('春ちゃん');
        $member->setFirstName('春香');
        $member->setFamilyName('小原');
        $member->setFirstNameKana('はるか');
        $member->setFamilyNameKana('こはら');
        $member->setFirstNameEn('Haruka');
        $member->setFamilyNameEn('Kohara');
        $member->setBirthday(new \DateTime('1988-04-12'));
        $member->setHometown('広島');
        $member->setClass('5');
        $member->setTeam('B');
        $member->setGraduatedAt(new \DateTime('2010-04-16'));
        $em->persist($member);

        // 小嶋陽菜
        $member = new Member();
        $member->setNickName('こじはる');
        $member->setFirstName('陽菜');
        $member->setFamilyName('小嶋');
        $member->setFirstNameKana('はるな');
        $member->setFamilyNameKana('こじま');
        $member->setFirstNameEn('Haruna');
        $member->setFamilyNameEn('Kojima');
        $member->setBirthday(new \DateTime('1988-04-19'));
        $member->setHometown('埼玉');
        $member->setClass('1');
        $member->setTeam('A');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 駒谷仁美
        $member = new Member();
        $member->setNickName('ひぃピンク');
        $member->setFirstName('仁美');
        $member->setFamilyName('駒谷');
        $member->setFirstNameKana('ひとみ');
        $member->setFamilyNameKana('こまたに');
        $member->setFirstNameEn('Hitomi');
        $member->setFamilyNameEn('Komatani');
        $member->setBirthday(new \DateTime('1988-12-16'));
        $member->setHometown('埼玉');
        $member->setClass('1');
        $member->setTeam('A');
        $member->setGraduatedAt(new \DateTime('2008-11-23'));
        $em->persist($member);

        // 小森美果
        $member = new Member();
        $member->setNickName('こもりん');
        $member->setFirstName('美果');
        $member->setFamilyName('小森');
        $member->setFirstNameKana('みか');
        $member->setFamilyNameKana('こもり');
        $member->setFirstNameEn('Mika');
        $member->setFamilyNameEn('Komori');
        $member->setBirthday(new \DateTime('1994-07-19'));
        $member->setHometown('愛知');
        $member->setClass('7');
        $member->setTeam('B');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 倉持明日香
        $member = new Member();
        $member->setNickName('もっちぃ');
        $member->setFirstName('明日香');
        $member->setFamilyName('倉持');
        $member->setFirstNameKana('あすか');
        $member->setFamilyNameKana('くらもち');
        $member->setFirstNameEn('Asuka');
        $member->setFamilyNameEn('Kuramochi');
        $member->setBirthday(new \DateTime('1989-09-11'));
        $member->setHometown('神奈川');
        $member->setClass('4');
        $member->setTeam('A');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 前田亜美
        $member = new Member();
        $member->setNickName('あーみん');
        $member->setFirstName('亜美');
        $member->setFamilyName('前田');
        $member->setFirstNameKana('あみ');
        $member->setFamilyNameKana('まえだ');
        $member->setFirstNameEn('Ami');
        $member->setFamilyNameEn('Maeda');
        $member->setBirthday(new \DateTime('1995-06-01'));
        $member->setHometown('東京');
        $member->setClass('7');
        $member->setTeam('A');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 前田敦子
        $member = new Member();
        $member->setNickName('あっちゃん');
        $member->setFirstName('敦子');
        $member->setFamilyName('前田');
        $member->setFirstNameKana('あつこ');
        $member->setFamilyNameKana('まえだ');
        $member->setFirstNameEn('Atsuko');
        $member->setFamilyNameEn('Maeda');
        $member->setBirthday(new \DateTime('1991-07-10'));
        $member->setHometown('千葉');
        $member->setClass('1');
        $member->setTeam('A');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 増田有華
        $member = new Member();
        $member->setNickName('ゆったん');
        $member->setFirstName('有華');
        $member->setFamilyName('増田');
        $member->setFirstNameKana('ゆか');
        $member->setFamilyNameKana('ますだ');
        $member->setFirstNameEn('Yuka');
        $member->setFamilyNameEn('Masuda');
        $member->setBirthday(new \DateTime('1991-08-03'));
        $member->setHometown('大阪');
        $member->setClass('2');
        $member->setTeam('B');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 増山加弥乃
        $member = new Member();
        $member->setNickName('かや');
        $member->setFirstName('加弥乃');
        $member->setFamilyName('増山');
        $member->setFirstNameKana('かやの');
        $member->setFamilyNameKana('ますやま');
        $member->setFirstNameEn('Kayano');
        $member->setFamilyNameEn('Masuyama');
        $member->setBirthday(new \DateTime('1994-02-12'));
        $member->setHometown('東京');
        $member->setClass('1');
        $member->setTeam('A');
        $member->setGraduatedAt(new \DateTime('2007-11-30'));
        $em->persist($member);

        // 松原夏海
        $member = new Member();
        $member->setNickName('なっつみぃ');
        $member->setFirstName('夏海');
        $member->setFamilyName('松原');
        $member->setFirstNameKana('なつみ');
        $member->setFamilyNameKana('まつばら');
        $member->setFirstNameEn('Natsumi');
        $member->setFamilyNameEn('Matsubara');
        $member->setBirthday(new \DateTime('1990-06-19'));
        $member->setHometown('福岡');
        $member->setClass('2');
        $member->setTeam('A');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 松井咲子
        $member = new Member();
        $member->setNickName('さきっぺ');
        $member->setFirstName('咲子');
        $member->setFamilyName('松井');
        $member->setFirstNameKana('さきこ');
        $member->setFamilyNameKana('まつい');
        $member->setFirstNameEn('Sakiko');
        $member->setFamilyNameEn('Matsui');
        $member->setBirthday(new \DateTime('1990-12-10'));
        $member->setHometown('埼玉');
        $member->setClass('7');
        $member->setTeam('K');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 松岡由紀
        $member = new Member();
        $member->setNickName('まつゆき');
        $member->setFirstName('由紀');
        $member->setFamilyName('松岡');
        $member->setFirstNameKana('ゆき');
        $member->setFamilyNameKana('まつおか');
        $member->setFirstNameEn('Yuki');
        $member->setFamilyNameEn('Matsuoka');
        $member->setBirthday(new \DateTime('1987-10-07'));
        $member->setHometown('神奈川');
        $member->setClass('3');
        $member->setTeam('B');
        $member->setGraduatedAt(new \DateTime('2009-02-01'));
        $em->persist($member);

        // 峯岸みなみ
        $member = new Member();
        $member->setNickName('みいちゃん');
        $member->setFirstName('みなみ');
        $member->setFamilyName('峯岸');
        $member->setFirstNameKana('みなみ');
        $member->setFamilyNameKana('みねぎし');
        $member->setFirstNameEn('Minami');
        $member->setFamilyNameEn('Minegishi');
        $member->setBirthday(new \DateTime('1992-11-15'));
        $member->setHometown('東京');
        $member->setClass('1');
        $member->setTeam('K');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 宮崎美穂
        $member = new Member();
        $member->setNickName('みゃお');
        $member->setFirstName('美穂');
        $member->setFamilyName('宮崎');
        $member->setFirstNameKana('みほ');
        $member->setFamilyNameKana('みやざき');
        $member->setFirstNameEn('Miho');
        $member->setFamilyNameEn('Miyazaki');
        $member->setBirthday(new \DateTime('1993-07-30'));
        $member->setHometown('東京');
        $member->setClass('5');
        $member->setTeam('B');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 宮澤佐江
        $member = new Member();
        $member->setNickName('さえ');
        $member->setFirstName('佐江');
        $member->setFamilyName('宮澤');
        $member->setFirstNameKana('さえ');
        $member->setFamilyNameKana('みやざわ');
        $member->setFirstNameEn('Sae');
        $member->setFamilyNameEn('Miyazawa');
        $member->setBirthday(new \DateTime('1990-08-13'));
        $member->setHometown('東京');
        $member->setClass('2');
        $member->setTeam('K');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 森杏奈
        $member = new Member();
        $member->setNickName('なんちゃん');
        $member->setFirstName('杏奈');
        $member->setFamilyName('森');
        $member->setFirstNameKana('あんな');
        $member->setFamilyNameKana('もり');
        $member->setFirstNameEn('Anna');
        $member->setFamilyNameEn('Mori');
        $member->setBirthday(new \DateTime('1994-03-21'));
        $member->setHometown('千葉');
        $member->setClass('9');
        $member->setTeam('');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 永尾まりや
        $member = new Member();
        $member->setNickName('まりや');
        $member->setFirstName('まりや');
        $member->setFamilyName('永尾');
        $member->setFirstNameKana('まりや');
        $member->setFamilyNameKana('ながお');
        $member->setFirstNameEn('Mariya');
        $member->setFamilyNameEn('Nagao');
        $member->setBirthday(new \DateTime('1994-03-10'));
        $member->setHometown('神奈川');
        $member->setClass('9');
        $member->setTeam('');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 仲川遥香
        $member = new Member();
        $member->setNickName('はるごん');
        $member->setFirstName('遥香');
        $member->setFamilyName('仲川');
        $member->setFirstNameKana('はるか');
        $member->setFamilyNameKana('なかがわ');
        $member->setFirstNameEn('Haruka');
        $member->setFamilyNameEn('Nakagawa');
        $member->setBirthday(new \DateTime('1992-02-10'));
        $member->setHometown('東京');
        $member->setClass('3');
        $member->setTeam('A');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 仲俣汐里
        $member = new Member();
        $member->setNickName('しおりん');
        $member->setFirstName('汐里');
        $member->setFamilyName('仲俣');
        $member->setFirstNameKana('しおり');
        $member->setFamilyNameKana('なかまた');
        $member->setFirstNameEn('Shiori');
        $member->setFamilyNameEn('Nakamata');
        $member->setBirthday(new \DateTime('1992-07-25'));
        $member->setHometown('東京');
        $member->setClass('10');
        $member->setTeam('');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 中村麻里子
        $member = new Member();
        $member->setNickName('こまり');
        $member->setFirstName('麻里子');
        $member->setFamilyName('中村');
        $member->setFirstNameKana('まりこ');
        $member->setFamilyNameKana('なかむら');
        $member->setFirstNameEn('Mariko');
        $member->setFamilyNameEn('Nakamura');
        $member->setBirthday(new \DateTime('1993-12-16'));
        $member->setHometown('千葉');
        $member->setClass('9');
        $member->setTeam('');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 中西里菜
        $member = new Member();
        $member->setNickName('りなてぃん');
        $member->setFirstName('里菜');
        $member->setFamilyName('中西');
        $member->setFirstNameKana('りな');
        $member->setFamilyNameKana('なかにし');
        $member->setFirstNameEn('Rina');
        $member->setFamilyNameEn('Nakanishi');
        $member->setBirthday(new \DateTime('1988-06-26'));
        $member->setHometown('大分');
        $member->setClass('1');
        $member->setTeam('A');
        $member->setGraduatedAt(new \DateTime('2008-11-23'));
        $em->persist($member);

        // 中田ちさと
        $member = new Member();
        $member->setNickName('ちぃちゃん');
        $member->setFirstName('ちさと');
        $member->setFamilyName('中田');
        $member->setFirstNameKana('ちさと');
        $member->setFamilyNameKana('なかた');
        $member->setFirstNameEn('Chisato');
        $member->setFamilyNameEn('Nakata');
        $member->setBirthday(new \DateTime('1990-10-08'));
        $member->setHometown('埼玉');
        $member->setClass('4');
        $member->setTeam('A');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 中塚智実
        $member = new Member();
        $member->setNickName('ともちゃん');
        $member->setFirstName('智実');
        $member->setFamilyName('中塚');
        $member->setFirstNameKana('ともみ');
        $member->setFamilyNameKana('なかつか');
        $member->setFirstNameEn('Tomomi');
        $member->setFamilyNameEn('Nakatsuka');
        $member->setBirthday(new \DateTime('1993-06-18'));
        $member->setHometown('埼玉');
        $member->setClass('5');
        $member->setTeam('K');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 仲谷明香
        $member = new Member();
        $member->setNickName('なかやん');
        $member->setFirstName('明香');
        $member->setFamilyName('仲谷');
        $member->setFirstNameKana('さやか');
        $member->setFamilyNameKana('なかや');
        $member->setFirstNameEn('Sayaka');
        $member->setFamilyNameEn('Nakaya');
        $member->setBirthday(new \DateTime('1991-10-15'));
        $member->setHometown('岩手');
        $member->setClass('3');
        $member->setTeam('A');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 成田梨紗
        $member = new Member();
        $member->setNickName('りさ');
        $member->setFirstName('梨紗');
        $member->setFamilyName('成田');
        $member->setFirstNameKana('りさ');
        $member->setFamilyNameKana('なりた');
        $member->setFirstNameEn('Risa');
        $member->setFamilyNameEn('Narita');
        $member->setBirthday(new \DateTime('1991-03-01'));
        $member->setHometown('東京');
        $member->setClass('1');
        $member->setTeam('A');
        $member->setGraduatedAt(new \DateTime('2008-11-23'));
        $em->persist($member);

        // 成瀬理沙
        $member = new Member();
        $member->setNickName('なるる');
        $member->setFirstName('理沙');
        $member->setFamilyName('成瀬');
        $member->setFirstNameKana('りさ');
        $member->setFamilyNameKana('なるせ');
        $member->setFirstNameEn('Risa');
        $member->setFamilyNameEn('Naruse');
        $member->setBirthday(new \DateTime('1993-08-13'));
        $member->setHometown('埼玉');
        $member->setClass('4');
        $member->setTeam('K');
        $member->setGraduatedAt(new \DateTime('2009-05-24'));
        $em->persist($member);

        // 仁藤萌乃
        $member = new Member();
        $member->setNickName('もえの');
        $member->setFirstName('萌乃');
        $member->setFamilyName('仁藤');
        $member->setFirstNameKana('もえの');
        $member->setFamilyNameKana('にとう');
        $member->setFirstNameEn('Moeno');
        $member->setFamilyNameEn('Nito');
        $member->setBirthday(new \DateTime('1992-07-22'));
        $member->setHometown('東京');
        $member->setClass('5');
        $member->setTeam('K');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 野口玲菜
        $member = new Member();
        $member->setNickName('ぐっさん');
        $member->setFirstName('玲菜');
        $member->setFamilyName('野口');
        $member->setFirstNameKana('れいな');
        $member->setFamilyNameKana('のぐち');
        $member->setFirstNameEn('Reina');
        $member->setFamilyNameEn('Noguchi');
        $member->setBirthday(new \DateTime('1993-04-15'));
        $member->setHometown('埼玉');
        $member->setClass('3');
        $member->setTeam('B');
        $member->setGraduatedAt(new \DateTime('2009-02-01'));
        $em->persist($member);

        // 野中美郷
        $member = new Member();
        $member->setNickName('みちゃ');
        $member->setFirstName('美郷');
        $member->setFamilyName('野中');
        $member->setFirstNameKana('みさと');
        $member->setFamilyNameKana('のなか');
        $member->setFirstNameEn('Misato');
        $member->setFamilyNameEn('Nonaka');
        $member->setBirthday(new \DateTime('1991-04-20'));
        $member->setHometown('福岡');
        $member->setClass('6');
        $member->setTeam('K');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 野呂佳代
        $member = new Member();
        $member->setNickName('ノンティー');
        $member->setFirstName('佳代');
        $member->setFamilyName('野呂');
        $member->setFirstNameKana('かよ');
        $member->setFamilyNameKana('のろ');
        $member->setFirstNameEn('Kayo');
        $member->setFamilyNameEn('Noro');
        $member->setBirthday(new \DateTime('1983-10-28'));
        $member->setHometown('東京');
        $member->setClass('2');
        $member->setTeam('K');
        $member->setGraduatedAt(new \DateTime('2010-02-21'));
        $em->persist($member);

        // 大場美奈
        $member = new Member();
        $member->setNickName('みなるん');
        $member->setFirstName('美奈');
        $member->setFamilyName('大場');
        $member->setFirstNameKana('みな');
        $member->setFamilyNameKana('おおば');
        $member->setFirstNameEn('Mina');
        $member->setFamilyNameEn('Oba');
        $member->setBirthday(new \DateTime('1992-04-03'));
        $member->setHometown('神奈川');
        $member->setClass('9');
        $member->setTeam('');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 大江朝美
        $member = new Member();
        $member->setNickName('おーいぇ');
        $member->setFirstName('朝美');
        $member->setFamilyName('大江');
        $member->setFirstNameKana('ともみ');
        $member->setFamilyNameKana('おおえ');
        $member->setFirstNameEn('Tomomi');
        $member->setFamilyNameEn('Oe');
        $member->setBirthday(new \DateTime('1989-06-15'));
        $member->setHometown('東京');
        $member->setClass('1');
        $member->setTeam('A');
        $member->setGraduatedAt(new \DateTime('2008-11-23'));
        $em->persist($member);

        // 大堀恵
        $member = new Member();
        $member->setNickName('めーたん');
        $member->setFirstName('恵');
        $member->setFamilyName('大堀');
        $member->setFirstNameKana('めぐみ');
        $member->setFamilyNameKana('おおほり');
        $member->setFirstNameEn('Megumi');
        $member->setFamilyNameEn('Ohori');
        $member->setBirthday(new \DateTime('1983-08-25'));
        $member->setHometown('千葉');
        $member->setClass('2');
        $member->setTeam('K');
        $member->setGraduatedAt(new \DateTime('2010-02-21'));
        $em->persist($member);

        // 奥真奈美
        $member = new Member();
        $member->setNickName('まぁちゃん');
        $member->setFirstName('真奈美');
        $member->setFamilyName('奥');
        $member->setFirstNameKana('まなみ');
        $member->setFamilyNameKana('おく');
        $member->setFirstNameEn('Manami');
        $member->setFamilyNameEn('Oku');
        $member->setBirthday(new \DateTime('1995-11-22'));
        $member->setHometown('東京');
        $member->setClass('2');
        $member->setTeam('B');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 小野恵令奈
        $member = new Member();
        $member->setNickName('えれぴょん');
        $member->setFirstName('恵令奈');
        $member->setFamilyName('小野');
        $member->setFirstNameKana('えれな');
        $member->setFamilyNameKana('おの');
        $member->setFirstNameEn('Erena');
        $member->setFamilyNameEn('Ono');
        $member->setBirthday(new \DateTime('1993-11-26'));
        $member->setHometown('東京');
        $member->setClass('2');
        $member->setTeam('B');
        $member->setGraduatedAt(new \DateTime('2010-09-27'));
        $em->persist($member);

        // 折井あゆみ
        $member = new Member();
        $member->setNickName('あゆ姉');
        $member->setFirstName('あゆみ');
        $member->setFamilyName('折井');
        $member->setFirstNameKana('あゆみ');
        $member->setFamilyNameKana('おりい');
        $member->setFirstNameEn('Ayumi');
        $member->setFamilyNameEn('Ori');
        $member->setBirthday(new \DateTime('1985-07-20'));
        $member->setHometown('長野');
        $member->setClass('1');
        $member->setTeam('A');
        $member->setGraduatedAt(new \DateTime('2007-01-25'));
        $em->persist($member);

        // 大島麻衣
        $member = new Member();
        $member->setNickName('まいまい');
        $member->setFirstName('麻衣');
        $member->setFamilyName('大島');
        $member->setFirstNameKana('まい');
        $member->setFamilyNameKana('おおしま');
        $member->setFirstNameEn('Mai');
        $member->setFamilyNameEn('Oshima');
        $member->setBirthday(new \DateTime('1987-09-11'));
        $member->setHometown('千葉');
        $member->setClass('1');
        $member->setTeam('A');
        $member->setGraduatedAt(new \DateTime('2009-04-26'));
        $em->persist($member);

        // 大島優子
        $member = new Member();
        $member->setNickName('ゆうこ');
        $member->setFirstName('優子');
        $member->setFamilyName('大島');
        $member->setFirstNameKana('ゆうこ');
        $member->setFamilyNameKana('おおしま');
        $member->setFirstNameEn('Yuko');
        $member->setFamilyNameEn('Oshima');
        $member->setBirthday(new \DateTime('1988-10-17'));
        $member->setHometown('栃木');
        $member->setClass('2');
        $member->setTeam('K');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 多田愛佳
        $member = new Member();
        $member->setNickName('らぶたん');
        $member->setFirstName('愛佳');
        $member->setFamilyName('多田');
        $member->setFirstNameKana('あいか');
        $member->setFamilyNameKana('おおた');
        $member->setFirstNameEn('Aika');
        $member->setFamilyNameEn('Ota');
        $member->setBirthday(new \DateTime('1994-12-08'));
        $member->setHometown('埼玉');
        $member->setClass('3');
        $member->setTeam('A');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 大家志津香
        $member = new Member();
        $member->setNickName('しいちゃん');
        $member->setFirstName('志津香');
        $member->setFamilyName('大家');
        $member->setFirstNameKana('しづか');
        $member->setFamilyNameKana('おおや');
        $member->setFirstNameEn('Shizuka');
        $member->setFamilyNameEn('Oya');
        $member->setBirthday(new \DateTime('1991-12-28'));
        $member->setHometown('福岡');
        $member->setClass('4');
        $member->setTeam('A');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 佐伯美香
        $member = new Member();
        $member->setNickName('美香ちぃ');
        $member->setFirstName('美香');
        $member->setFamilyName('佐伯');
        $member->setFirstNameKana('みか');
        $member->setFamilyNameKana('さえき');
        $member->setFirstNameEn('Mika');
        $member->setFamilyNameEn('Saeki');
        $member->setBirthday(new \DateTime('1989-10-29'));
        $member->setHometown('栃木');
        $member->setClass('4');
        $member->setTeam('B');
        $member->setGraduatedAt(new \DateTime('2009-08-23'));
        $em->persist($member);

        // 指原莉乃
        $member = new Member();
        $member->setNickName('さっしー');
        $member->setFirstName('莉乃');
        $member->setFamilyName('指原');
        $member->setFirstNameKana('りの');
        $member->setFamilyNameKana('さしはら');
        $member->setFirstNameEn('Rino');
        $member->setFamilyNameEn('Sashihara');
        $member->setBirthday(new \DateTime('1992-11-21'));
        $member->setHometown('大分');
        $member->setClass('5');
        $member->setTeam('A');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 佐藤亜美菜
        $member = new Member();
        $member->setNickName('あみな');
        $member->setFirstName('亜美菜');
        $member->setFamilyName('佐藤');
        $member->setFirstNameKana('あみな');
        $member->setFamilyNameKana('さとう');
        $member->setFirstNameEn('Amina');
        $member->setFamilyNameEn('Sato');
        $member->setBirthday(new \DateTime('1990-10-16'));
        $member->setHometown('東京');
        $member->setClass('4');
        $member->setTeam('B');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 佐藤夏希
        $member = new Member();
        $member->setNickName('Nなっち');
        $member->setFirstName('夏希');
        $member->setFamilyName('佐藤');
        $member->setFirstNameKana('なつき');
        $member->setFamilyNameKana('さとう');
        $member->setFirstNameEn('Natsuki');
        $member->setFamilyNameEn('Sato');
        $member->setBirthday(new \DateTime('1990-07-01'));
        $member->setHometown('北海道');
        $member->setClass('2');
        $member->setTeam('B');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 佐藤すみれ
        $member = new Member();
        $member->setNickName('すーちゃん');
        $member->setFirstName('すみれ');
        $member->setFamilyName('佐藤');
        $member->setFirstNameKana('すみれ');
        $member->setFamilyNameKana('さとう');
        $member->setFirstNameEn('Sumire');
        $member->setFamilyNameEn('Sato');
        $member->setBirthday(new \DateTime('1993-11-20'));
        $member->setHometown('埼玉');
        $member->setClass('7');
        $member->setTeam('B');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 佐藤由加理
        $member = new Member();
        $member->setNickName('ゆかりん');
        $member->setFirstName('由加理');
        $member->setFamilyName('佐藤');
        $member->setFirstNameKana('ゆかり');
        $member->setFamilyNameKana('さとう');
        $member->setFirstNameEn('Yukari');
        $member->setFamilyNameEn('Sato');
        $member->setBirthday(new \DateTime('1988-11-22'));
        $member->setHometown('静岡');
        $member->setClass('1');
        $member->setTeam('A');
        $member->setGraduatedAt(new \DateTime('2010-05-27'));
        $em->persist($member);

        // 島田晴香
        $member = new Member();
        $member->setNickName('はるぅ');
        $member->setFirstName('晴香');
        $member->setFamilyName('島田');
        $member->setFirstNameKana('はるか');
        $member->setFamilyNameKana('しまだ');
        $member->setFirstNameEn('Haruka');
        $member->setFamilyNameEn('Shimada');
        $member->setBirthday(new \DateTime('1992-12-16'));
        $member->setHometown('静岡');
        $member->setClass('9');
        $member->setTeam('');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 島崎遥香
        $member = new Member();
        $member->setNickName('ぱるる');
        $member->setFirstName('遥香');
        $member->setFamilyName('島崎');
        $member->setFirstNameKana('はるか');
        $member->setFamilyNameKana('しまざき');
        $member->setFirstNameEn('Haruka');
        $member->setFamilyNameEn('Shimazaki');
        $member->setBirthday(new \DateTime('1994-03-30'));
        $member->setHometown('埼玉');
        $member->setClass('9');
        $member->setTeam('');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 篠田麻里子
        $member = new Member();
        $member->setNickName('まりこ');
        $member->setFirstName('麻里子');
        $member->setFamilyName('篠田');
        $member->setFirstNameKana('まりこ');
        $member->setFamilyNameKana('しのだ');
        $member->setFirstNameEn('Mariko');
        $member->setFamilyNameEn('Shinoda');
        $member->setBirthday(new \DateTime('1986-03-11'));
        $member->setHometown('福岡');
        $member->setClass('1.5');
        $member->setTeam('A');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 鈴木まりや
        $member = new Member();
        $member->setNickName('まりやんぬ');
        $member->setFirstName('まりや');
        $member->setFamilyName('鈴木');
        $member->setFirstNameKana('まりや');
        $member->setFamilyNameKana('すずき');
        $member->setFirstNameEn('Mariya');
        $member->setFamilyNameEn('Suzuki');
        $member->setBirthday(new \DateTime('1991-04-29'));
        $member->setHometown('埼玉');
        $member->setClass('7');
        $member->setTeam('B');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 高田彩奈
        $member = new Member();
        $member->setNickName('あやな');
        $member->setFirstName('彩奈');
        $member->setFamilyName('高田');
        $member->setFirstNameKana('あやな');
        $member->setFamilyNameKana('たかだ');
        $member->setFirstNameEn('Ayana');
        $member->setFamilyNameEn('Takada');
        $member->setBirthday(new \DateTime('1988-07-21'));
        $member->setHometown('愛知');
        $member->setClass('2');
        $member->setTeam('K');
        $member->setGraduatedAt(new \DateTime('2007-06-22'));
        $em->persist($member);

        // 高橋みなみ
        $member = new Member();
        $member->setNickName('たかみな');
        $member->setFirstName('みなみ');
        $member->setFamilyName('高橋');
        $member->setFirstNameKana('みなみ');
        $member->setFamilyNameKana('たかはし');
        $member->setFirstNameEn('Minami');
        $member->setFamilyNameEn('Takahashi');
        $member->setBirthday(new \DateTime('1991-04-08'));
        $member->setHometown('東京');
        $member->setClass('1');
        $member->setTeam('A');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 高城亜樹
        $member = new Member();
        $member->setNickName('あきちゃ');
        $member->setFirstName('亜樹');
        $member->setFamilyName('高城');
        $member->setFirstNameKana('あき');
        $member->setFamilyNameKana('たかじょう');
        $member->setFirstNameEn('Aki');
        $member->setFamilyNameEn('Takajo');
        $member->setBirthday(new \DateTime('1991-10-03'));
        $member->setHometown('東京');
        $member->setClass('6');
        $member->setTeam('A');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 竹内美宥
        $member = new Member();
        $member->setNickName('みゆみゆ');
        $member->setFirstName('美宥');
        $member->setFamilyName('竹内');
        $member->setFirstNameKana('みゆ');
        $member->setFamilyNameKana('たけうち');
        $member->setFirstNameEn('Miyu');
        $member->setFamilyNameEn('Takeuchi');
        $member->setBirthday(new \DateTime('1996-01-12'));
        $member->setHometown('東京');
        $member->setClass('9');
        $member->setTeam('');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 田名部生来
        $member = new Member();
        $member->setNickName('たなみん');
        $member->setFirstName('生来');
        $member->setFamilyName('田名部');
        $member->setFirstNameKana('みく');
        $member->setFamilyNameKana('たなべ');
        $member->setFirstNameEn('Miku');
        $member->setFamilyNameEn('Tanabe');
        $member->setBirthday(new \DateTime('1992-12-02'));
        $member->setHometown('滋賀');
        $member->setClass('3');
        $member->setTeam('K');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 戸島花
        $member = new Member();
        $member->setNickName('はな');
        $member->setFirstName('花');
        $member->setFamilyName('戸島');
        $member->setFirstNameKana('はな');
        $member->setFamilyNameKana('とじま');
        $member->setFirstNameEn('Hana');
        $member->setFamilyNameEn('Tojima');
        $member->setBirthday(new \DateTime('1988-07-11'));
        $member->setHometown('埼玉');
        $member->setClass('1');
        $member->setTeam('A');
        $member->setGraduatedAt(new \DateTime('2008-11-23'));
        $em->persist($member);

        // 内田眞由美
        $member = new Member();
        $member->setNickName('ウッチー');
        $member->setFirstName('眞由美');
        $member->setFamilyName('内田');
        $member->setFirstNameKana('まゆみ');
        $member->setFamilyNameKana('うちだ');
        $member->setFirstNameEn('Mayumi');
        $member->setFamilyNameEn('Uchida');
        $member->setBirthday(new \DateTime('1993-12-27'));
        $member->setHometown('東京');
        $member->setClass('5');
        $member->setTeam('K');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 上村彩子
        $member = new Member();
        $member->setNickName('あーや');
        $member->setFirstName('彩子');
        $member->setFamilyName('上村');
        $member->setFirstNameKana('あやこ');
        $member->setFamilyNameKana('うえむら');
        $member->setFirstNameEn('Ayako');
        $member->setFamilyNameEn('Uemura');
        $member->setBirthday(new \DateTime('1986-02-07'));
        $member->setHometown('埼玉');
        $member->setClass('2');
        $member->setTeam('K');
        $member->setGraduatedAt(new \DateTime('2006-06-17'));
        $em->persist($member);

        // 梅田彩佳
        $member = new Member();
        $member->setNickName('うめちゃん');
        $member->setFirstName('彩佳');
        $member->setFamilyName('梅田');
        $member->setFirstNameKana('あやか');
        $member->setFamilyNameKana('うめだ');
        $member->setFirstNameEn('Ayaka');
        $member->setFamilyNameEn('Umeda');
        $member->setBirthday(new \DateTime('1989-01-03'));
        $member->setHometown('福岡');
        $member->setClass('2');
        $member->setTeam('K');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 浦野一美
        $member = new Member();
        $member->setNickName('CinDy');
        $member->setFirstName('一美');
        $member->setFamilyName('浦野');
        $member->setFirstNameKana('かずみ');
        $member->setFamilyNameKana('うらの');
        $member->setFirstNameEn('Kazumi');
        $member->setFamilyNameEn('Urano');
        $member->setBirthday(new \DateTime('1985-10-23'));
        $member->setHometown('埼玉');
        $member->setClass('1');
        $member->setTeam('B');
        $member->setGraduatedAt(new \DateTime('2010-04-16'));
        $em->persist($member);

        // 宇佐美友紀
        $member = new Member();
        $member->setNickName('ゆっきぃ');
        $member->setFirstName('友紀');
        $member->setFamilyName('宇佐美');
        $member->setFirstNameKana('ゆき');
        $member->setFamilyNameKana('うさみ');
        $member->setFirstNameEn('Yuki');
        $member->setFamilyNameEn('Usami');
        $member->setBirthday(new \DateTime('1984-12-06'));
        $member->setHometown('埼玉');
        $member->setClass('1');
        $member->setTeam('A');
        $member->setGraduatedAt(new \DateTime('2006-03-31'));
        $em->persist($member);

        // 渡辺麻友
        $member = new Member();
        $member->setNickName('まゆゆ');
        $member->setFirstName('麻友');
        $member->setFamilyName('渡辺');
        $member->setFirstNameKana('まゆ');
        $member->setFamilyNameKana('わたなべ');
        $member->setFirstNameEn('Mayu');
        $member->setFamilyNameEn('Watanabe');
        $member->setBirthday(new \DateTime('1994-03-26'));
        $member->setHometown('埼玉');
        $member->setClass('3');
        $member->setTeam('B');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 渡辺志穂
        $member = new Member();
        $member->setNickName('しほ');
        $member->setFirstName('志穂');
        $member->setFamilyName('渡辺');
        $member->setFirstNameKana('しほ');
        $member->setFamilyNameKana('わたなべ');
        $member->setFirstNameEn('Shiho');
        $member->setFamilyNameEn('Watanabe');
        $member->setBirthday(new \DateTime('1987-10-25'));
        $member->setHometown('兵庫');
        $member->setClass('1');
        $member->setTeam('B');
        $member->setGraduatedAt(new \DateTime('2007-10-02'));
        $em->persist($member);

        // 山内鈴蘭
        $member = new Member();
        $member->setNickName('らんらん');
        $member->setFirstName('鈴蘭');
        $member->setFamilyName('山内');
        $member->setFirstNameKana('すずらん');
        $member->setFamilyNameKana('やまうち');
        $member->setFirstNameEn('Suzuran');
        $member->setFamilyNameEn('Yamauchi');
        $member->setBirthday(new \DateTime('1994-12-08'));
        $member->setHometown('千葉');
        $member->setClass('9');
        $member->setTeam('');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 横山由依
        $member = new Member();
        $member->setNickName('ゆい');
        $member->setFirstName('由依');
        $member->setFamilyName('横山');
        $member->setFirstNameKana('ゆい');
        $member->setFamilyNameKana('よこやま');
        $member->setFirstNameEn('Yui');
        $member->setFamilyNameEn('Yokoyama');
        $member->setBirthday(new \DateTime('1992-12-08'));
        $member->setHometown('京都');
        $member->setClass('9');
        $member->setTeam('K');
        $member->setGraduatedAt(null);
        $em->persist($member);

        // 米沢瑠美
        $member = new Member();
        $member->setNickName('よねちゃん');
        $member->setFirstName('瑠美');
        $member->setFamilyName('米沢');
        $member->setFirstNameKana('るみ');
        $member->setFamilyNameKana('よねざわ');
        $member->setFirstNameEn('Rumi');
        $member->setFamilyNameEn('Yonezawa');
        $member->setBirthday(new \DateTime('1991-06-06'));
        $member->setHometown('埼玉');
        $member->setClass('3');
        $member->setTeam('K');
        $member->setGraduatedAt(null);
        $em->persist($member);

        $em->flush();
    }
}

