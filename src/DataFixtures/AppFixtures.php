<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create('fr_FR');

        for ($c = 1; $c <= 10 ; $c++) {
            $category = (new Category())
                ->setName($faker->sentence(6, true))
            ;
            $this->addReference('cat'.$c, $category);

            $manager->persist($category);
        }

        for ($a = 1; $a <= 50 ; $a++) {
            /** @var Category $category */
            $category = $this->getReference('cat'.mt_rand(1,10));

            $article = (new Article())
                ->setTitle($faker->sentence(6, true))
                ->setContent($faker->realText())
                ->setIsActive($faker->boolean)
                ->setPublishedAt($faker->dateTimeThisMonth)
                ->setImage($faker->imageUrl(100,100))
                ->setCategory($category)
            ;

            $manager->persist($article);
        }

        $manager->flush();
    }
}
