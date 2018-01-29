<?php
namespace Azimuth\PagesBundle\DataFixtures\ORM;

use Azimuth\PagesBundle\Entity\Categories;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;


class CategoriesFixtures extends Fixture
{

    public function load(ObjectManager $manager)
    {

        $categories = new Categories();
        $categories->setCategoryName('Termes et conditions');
        $manager->persist($categories);

        $manager->flush();

        $this->addReference('categories', $categories);
       /** $this->addReference('categories1', $categories1);
        $this->addReference('categories2', $categories2);
        $this->addReference('categories3', $categories3);
        $this->addReference('categories4', $categories4);
        $this->addReference('categories5', $categories5);
        $this->addReference('categories6', $categories6);
        $this->addReference('categories7', $categories7);
        $this->addReference('categories8', $categories8); */




    }


}