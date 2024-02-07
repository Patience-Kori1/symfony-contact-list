<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Contacts;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ContactsFictures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create( 'fr_FR' );  // utiliser la langue Française
        $contact = new Contacts();
        $contact->setNom($faker->lastName())
                ->setPrenom($faker->firstName());
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
