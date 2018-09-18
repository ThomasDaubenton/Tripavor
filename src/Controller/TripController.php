<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class TripController extends AbstractController
{
    /**
     * @Route("/", name="default")
     * @Template("trip/viewAll.html.twig")
     */
    public function viewAllAction() {
        $repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('App\Entity\trip\Trip');

        $currentUser = $this->getUser();

        if (! empty($currentUser)) {
            $listTrips = $repository->findByUser($currentUser->getId() ,array('dateDebut' => 'DESC'));
        } else {
            $listTrips = [];
        }

        $tab1 = array(); $tab2 = array(); $tab3 = array();

        for ($i=0; $i < sizeof($listTrips); $i=$i+3) {
            array_push($tab1, $i);
        }
        for ($i=1; $i < sizeof($listTrips); $i=$i+3) {
            array_push($tab2, $i);
        }
        for ($i=2; $i < sizeof($listTrips); $i=$i+3) {
            array_push($tab3, $i);
        }

        return array('voyages' => $listTrips, 'tab1' => $tab1, 'tab2' => $tab2, 'tab3' => $tab3);
    }
}
