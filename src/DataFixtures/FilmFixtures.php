<?php

namespace App\DataFixtures;

use App\Entity\Film;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;


class FilmFixtures extends Fixture

{
    private $faker;

    public function __construct()
    {
        $this->faker = Factory::create('fr_FR');
    }

    public function load(ObjectManager $manager): void
    {
        for ($i=0; $i<100;$i++) {
            $film = new Film();
            $film->setTitre(substr($this->faker->realText(20), 0, -1));
            $film->setDescription(substr($this->faker->realText(50), 0, -1));
            $realisateur = $this->faker->lastName . " " . $this->faker->firstName;
            $film->setRealisateur($realisateur);
            $manager->persist($film);
        }
        $manager->flush();
    }
}
