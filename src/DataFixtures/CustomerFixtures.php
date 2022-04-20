<?php

namespace App\DataFixtures;

use App\Factory\CustomerFactory;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class CustomerFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        //   CustomerFactory::new()->createMany(20);
        $manager->flush();
    }
}
