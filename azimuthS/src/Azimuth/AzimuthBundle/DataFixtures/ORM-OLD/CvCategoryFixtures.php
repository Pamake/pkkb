<?php
namespace Azimuth\AzimuthBundle\DataFixtures\ORM;

use Azimuth\AzimuthBundle\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{

    public function load(ObjectManager $manager)
    {
       
            $category = new Category();
    				$category->setName('Travel');
    				$category->setLastUpdate(new \DateTime('2006-02-15 04:46:27'));				
            $manager->persist($category);
            
            $category1 = new Category();
    				$category1->setName('Sports');
    				$category1->setLastUpdate(new \DateTime('2006-02-14 22:04:36'));				
            $manager->persist($category1);
            
            $category2 = new Category();
    				$category2->setName('Sci-Fi');
    				$category2->setLastUpdate(new \DateTime('2006-02-14 22:04:36'));				
            $manager->persist($category2);
            
            $category3 = new Category();
    				$category3->setName('Documentary');
    				$category3->setLastUpdate(new \DateTime('2006-02-14 22:04:36'));				
            $manager->persist($category3);
            
            $category4 = new Category();
    				$category4->setName('Classics');
    				$category4->setLastUpdate(new \DateTime('2006-02-14 22:04:36'));				
            $manager->persist($category4);
            
            $category5 = new Category();
    				$category5->setName('Foreign');
    				$category5->setLastUpdate(new \DateTime('2006-02-14 22:04:36'));				
            $manager->persist($category5);
            
            $category6 = new Category();
    				$category6->setName('Animation');
    				$category6->setLastUpdate(new \DateTime('2006-02-14 22:04:36'));				
            $manager->persist($category6);
            
 				
        		$manager->flush();
        		
        		$this->addReference('category', $category);
        		$this->addReference('category1', $category1);
        		$this->addReference('category2', $category2);
        		$this->addReference('category3', $category3);
        		$this->addReference('category4', $category4);
        		$this->addReference('category5', $category5);
        		$this->addReference('category6', $category6);
        		
        		
        		
    }
    
    
}