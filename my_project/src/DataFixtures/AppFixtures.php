<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Usager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
		$usager = new Usager();
		$usager->setName("Chow");
		$usager->setSurname("Arty");
		$usager->setAdress("2 rue Jeanne d'Arc, 54000 Nancy");
        $manager->persist($usager);
		
		$manager->flush();
    }
}
