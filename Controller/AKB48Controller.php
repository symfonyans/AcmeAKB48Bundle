<?php
namespace Acme\AKB48Bundle\Controller;

use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\CustomNormalizer;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Acme\AKB48Bundle\Serializer\Encoder\CsvEncoder;

/**
 * AKB48Bundle
 *
 * @author  hidenorigoto <hidenorigoto@gmail.com>
 * @lisence MIT
 */
class AKB48Controller extends Controller
{
    /**
     * Action 'index'
     *  現在のメンバー一覧
     */
    public function indexAction()
    {
        $format = $this->container->get('request')->get('_format');
        $em     = $this->container->get('doctrine.orm.default_entity_manager');

        $list   = $em->getRepository('Acme\AKB48Bundle\Entity\Member')->findByNormal();

        if (count($list) < 1) {
            return $this->forward('AcmeAKB48Bundle:AKB48:notInitialized');
        }

        $list   = $this->serialize($list, $format);

        return $this->render('AcmeAKB48Bundle:AKB48:index.'.$format.'.twig', array('list'=>$list));
    }

    /**
     * Action 'memberShow'
     *  メンバー詳細
     */
    public function memberShowAction($slug)
    {
        $em     = $this->container->get('doctrine.orm.default_entity_manager');
        $member = $em->getRepository('Acme\AKB48Bundle\Entity\Member')->findOneBySlug($slug);

        if (!$member) {
            throw new HttpException('404', 'そのようなメンバーは存在しません');
        }

        return $this->render('AcmeAKB48Bundle:AKB48:memberShow.html.twig', array('member'=>$member));
    }

    /**
     * Action 'teamShow'
     *  チームの現在のメンバー一覧
     */
    public function teamShowAction($team_name)
    {
        $format = $this->container->get('request')->get('_format');
        $em     = $this->container->get('doctrine.orm.default_entity_manager');

        $list   = $em->getRepository('Acme\AKB48Bundle\Entity\Member')->findByTeam($team_name);
        $list  = $this->serialize($list, $format);

        return $this->render('AcmeAKB48Bundle:AKB48:index.'.$format.'.twig', array('list'=>$list));
    }

    /**
     * Action 'graduated'
     *  卒業したメンバーの一覧
     */
    public function graduatedAction()
    {
        $format = $this->container->get('request')->get('_format');
        $em     = $this->container->get('doctrine.orm.default_entity_manager');

        $list   = $em->getRepository('Acme\AKB48Bundle\Entity\Member')->findByGraduated();
        $list   = $this->serialize($list, $format);

        return $this->render('AcmeAKB48Bundle:AKB48:index.'.$format.'.twig', array('list'=>$list));
    }

    /**
     * Action 'notInitialized'
     *  未初期化時の画面
     */
    public function notInitializedAction()
    {
        return $this->render('AcmeAKB48Bundle:AKB48:notInitialized.html.twig');
    }

    /**
     * JSON/CSVの場合にデータをシリアライズする
     */
    public function serialize($data, $format)
    {
        $serializer = new Serializer();
        $serializer->addNormalizer(new CustomNormalizer());

        $out = array();
        switch ($format) {
        case 'json':
            // TODO: なんか違う
            $serializer->setEncoder($format, new JsonEncoder());
            break;
        case 'csv':
            $serializer->setEncoder($format, new CsvEncoder());
            break;
        default:
            return $data;
        }

        if ($serializer->hasEncoder($format)) {
            foreach ($data as $member) {
                $out[] = $serializer->encode($member, $format);
            }
        }

        return $out;
    }
}
