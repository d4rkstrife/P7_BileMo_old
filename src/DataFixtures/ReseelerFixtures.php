<?php

namespace App\DataFixtures;

use App\Factory\ReseelerFactory;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ReseelerFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        ReseelerFactory::new()->createMany(20);
        $manager->flush();
    }
}
