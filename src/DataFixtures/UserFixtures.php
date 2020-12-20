<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{

    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        $admin = (new User())
            ->setUsername('Admin')
            ->setEmail('admin@admin.local')
            ->setRegisterAt(new \DateTime('now'))
            ->setRoles(['ROLE_USER', 'ROLE_ADMIN', 'ROLE_SUPER'])
        ;

        $admin->setPassword($this->encoder->encodePassword($admin, '27eGMpj9H'));

        $manager->persist($admin);
        $manager->flush();

        $faker = Faker\Factory::create('fr_FR');

        for ($u=0; $u <= 10; $u++) {
            $user = (new User())
                ->setUsername($faker->userName)
                ->setEmail($faker->email)
                ->setRegisterAt($faker->dateTimeThisMonth)
                ->setRoles(['ROLE_USER'])
            ;

            $user->setPassword($this->encoder->encodePassword($user, $faker->password));
            $manager->persist($user);
        }

        $manager->flush();
    }

}
