<?php
namespace Acme\AKB48Bundle\Entity;

use Symfony\Component\Serializer\Normalizer\NormalizableInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

/**
 * Member Entity
 *
 * @author hidenorigoto <hidenorigoto@gmail.com>
 */
class Member implements NormalizableInterface
{
    protected $id;

    protected $nickname;

    protected $firstName;
    protected $familyName;

    protected $firstNameKana;
    protected $familyNameKana;

    protected $firstNameEn;
    protected $familyNameEn;

    protected $birthday;
    protected $hometown;
    protected $class;
    protected $team;
    protected $graduatedAt;
    protected $declinedAt;

    private $createdAt        = null;
    private $updatedAt        = null;

    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
    }

    public function getNickname() {
        return $this->nickname;
    }
    public function setNickname($nickname) {
        $this->nickname = $nickname;
    }

    public function getFirstName() {
        return $this->firstName;
    }
    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function getFamilyName() {
        return $this->familyName;
    }
    public function setFamilyName($familyName) {
        $this->familyName = $familyName;
    }

    public function getFirstNameKana() {
        return $this->firstNameKana;
    }
    public function setFirstNameKana($firstNameKana) {
        $this->firstNameKana = $firstNameKana;
    }

    public function getFamilyNameKana() {
        return $this->familyNameKana;
    }
    public function setFamilyNameKana($familyNameKana) {
        $this->familyNameKana = $familyNameKana;
    }

    public function getFirstNameEn() {
        return $this->firstNameEn;
    }
    public function setFirstNameEn($firstNameEn) {
        $this->firstNameEn = $firstNameEn;
    }

    public function getFamilyNameEn() {
        return $this->familyNameEn;
    }
    public function setFamilyNameEn($familyNameEn) {
        $this->familyNameEn = $familyNameEn;
    }

    public function getBirthday() {
        return $this->birthday;
    }
    public function setBirthday($birthday) {
        $this->birthday = $birthday;
    }

    public function getHometown() {
        return $this->hometown;
    }
    public function setHometown($hometown) {
        $this->hometown = $hometown;
    }

    public function getClass() {
        return $this->class;
    }
    public function setClass($class) {
        $this->class = $class;
    }

    public function getTeam() {
        return $this->team;
    }
    public function setTeam($team) {
        $this->team = $team;
    }

    public function getGraduatedAt() {
        return $this->graduatedAt;
    }

    public function setGraduatedAt($graduatedAt) {
        $this->graduatedAt = $graduatedAt;
    }
    public function getDeclinedAt() {
        return $this->declinedAt;
    }

    public function setDeclinedAt($declinedAt) {
        $this->declinedAt = $declinedAt;
    }


    public function onPrePersist()
    {
        if (!$this->createdAt) {
            $this->createdAt = new \DateTime();
        }
    }

    public function onPreUpdate()
    {
        $this->updatedAt = new \DateTime();
    }


    public function getName()
    {
        return sprintf('%s %s', $this->getFamilyName(), $this->getFirstName());
    }

    public function getSlug()
    {
        return urlencode(sprintf('%s %s', $this->getFamilyNameEn(), $this->getFirstNameEn()));
    }

    /**
     * {@inheritdoc}
     */
    function normalize(NormalizerInterface $normalizer, $format, $properties = null)
    {
        $data = array();
        $data['nickname']            = $this->getNickname();
        $data['family_name']         = $this->getFamilyName();
        $data['first_name']          = $this->getFirstName();
        $data['family_name_kana']    = $this->getFamilyNameKana();
        $data['first_name_kana']     = $this->getFirstNameKana();
        $data['family_name_en']      = $this->getFamilyNameEn();
        $data['first_name_en']       = $this->getFirstNameEn();
        if ($birthday = $this->getBirthday()) {
            $data['birthday']        = $birthday->format('Y-m-d');
        } else {
            $data['birthday']        = '';
        }
        $data['hometown']            = $this->getHometown();
        $data['class']               = $this->getClass();
        $data['team']                = $this->getTeam();
        if ($graduatedAt = $this->getGraduatedAt()) {
            $data['graduated_at']    = $graduatedAt->format('Y-m-d');
        } else {
            $data['graduated_at']    = '';
        }
        if ($declinedAt = $this->getDeclinedAt()) {
            $data['declined_at']     = $declinedAt->format('Y-m-d');
        } else {
            $data['declined_at']     = '';
        }

        return $data;
    }

    /**
     * {@inheritdoc}
     */
    function denormalize(NormalizerInterface $normalizer, $data, $format = null)
    {
    }
}
