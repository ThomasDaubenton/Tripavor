<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class MapController extends AbstractController
{
    /**
     * @Route("/map", name="viewMap")
     * @Template("map/viewMap.html.twig")
     * @Security("has_role('ROLE_USER')")
     */
    public function viewMapAction() {

        $repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('App\Entity\trip\Trip');

        $currentUser = $this->getUser();
        if (! empty($currentUser)) {
            $listTrips = $repository->findByUser($currentUser->getId() ,array('beginDate' => 'DESC'));
        } else {
            $listTrips = [];
        }
        $pays = array();

        foreach ($listTrips as $key => $value) {
            array_push($pays, $value->getPays()->getAlpha2());
        }

        return array('pays' => $pays);
    }
}
