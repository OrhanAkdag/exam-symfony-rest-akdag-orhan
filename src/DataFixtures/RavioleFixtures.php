<?php

namespace App\DataFixtures;

use App\Entity\Raviole;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class RavioleFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // create 20 products! Bam!
        for ($i = 0; $i < 20; $i++) {
            $product = new Raviole();
            $product->setTitre('Raviole n° '.$i);
            $product->setDescription('Description de la raviole n° '.$i);
            $product->setPrix($i+5);
            $product->setQuantiteDisponible($i+1);
            $manager->persist($product);
        }

        $manager->flush();
    }
}
