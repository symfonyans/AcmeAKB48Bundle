<?php
namespace Acme\AKB48Bundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * MemberRepository
 *
 * @author hidenorigoto <hidenorigoto@gmail.com>
 */
class MemberRepository extends EntityRepository
{
    /**
     * チーム入りしている現役メンバーの一覧を取得する
     *
     * @return
     */
    public function findByNormal()
    {
        $q = $this->_em->createQuery(
            'select m from AcmeAKB48Bundle:Member'
            . " m where (m.team != '' and m.graduatedAt is null and m.declinedAt is null)"
            . ' order by m.familyNameKana asc,'
            . ' m.firstNameKana asc'
        );

        return $q->getResult();
    }

    /**
     * 卒業していない現役メンバーの一覧を取得する
     *
     * @return
     */
    public function findByNotGraduated()
    {
        $q = $this->_em->createQuery(
            'select m from AcmeAKB48Bundle:Member'
            . ' m where (m.graduatedAt is null and m.declinedAt is null)'
            . ' order by m.familyNameKana asc,'
            . ' m.firstNameKana asc'
        );

        return $q->getResult();
    }

    /**
     * 卒業メンバーの一覧を取得する
     *
     * @return
     */
    public function findByGraduated()
    {
        $q = $this->_em->createQuery(
            'select m from AcmeAKB48Bundle:Member'
            . ' m where not m.graduatedAt is null'
            . ' order by m.familyNameKana asc,'
            . ' m.firstNameKana asc'
        );

        return $q->getResult();
    }

    /**
     * 辞退メンバーの一覧を取得する
     *
     * @return
     */
    public function findByDeclined()
    {
        $q = $this->_em->createQuery(
            'select m from AcmeAKB48Bundle:Member'
            . ' m where not m.declinedAt is null'
            . ' order by m.familyNameKana asc,'
            . ' m.firstNameKana asc'
        );

        return $q->getResult();
    }

    /**
     * チーム名を指定してメンバーの一覧を取得する
     *
     * @param string $teamName
     *
     * @return
     */
    public function findByTeam($teamName)
    {
        if ($teamName === 'None') {
            $q = $this->_em->createQuery(
                "select m from AcmeAKB48Bundle:Member m"
                . " where m.team = '' and m.graduatedAt is null and m.declinedAt is null"
            );
        } else {
            $q = $this->_em->createQuery(
                'select m from AcmeAKB48Bundle:Member m'
                . ' where m.team = :team_name and m.graduatedAt is null and m.declinedAt is null'
            );
            $q->setParameters(array(
                'team_name' => $teamName,
            ));
        }

        return $q->getResult();
    }

    /**
     * スラグから1件のレコードを取得する
     *
     * @param string $slug
     *
     * @return
     */
    public function findOneBySlug($slug)
    {
        $parts = explode(' ', urldecode($slug));
        $familyName = $parts[0];
        $firstName = $parts[1];
        $q = $this->_em->createQuery(
            'select m from AcmeAKB48Bundle:Member m'
            . ' where m.firstNameEn = :first_name and'
            . ' m.familyNameEn = :family_name'
        );
        $q->setParameters(array(
            'family_name' => $familyName,
            'first_name' => $firstName,
        ));

        return $q->getOneOrNullResult();
    }
}
