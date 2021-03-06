<?php
/**
 * Created by PhpStorm.
 * User: MyPc
 * Date: 14/02/2018
 * Time: 6:10 PM
 */

namespace App\Repositories;


use App\Entities\Product;
use App\Entities\ProductImage;
use App\Entities\ProductSlug;
use App\Entities\ProductSolutionX;
use Doctrine\ORM\EntityManager;

class ProductRepo{

    private $em;
    public function __construct(EntityManager $em){
        $this->em = $em;
    }

    public function findAll(){
        return $this->em->getRepository(Product::class)->findBy(['deleted'=>0]);
    }

    public function findById($id){
        return $this->em->getRepository(Product::class)->find($id);
    }

    public function saveOrUpdate(Product $product){
        $this->em->persist($product);
        $this->em->flush();
        return true;
    }

    public function removeExistingSolutionType($id){
        $existingSolutionTypes = $this->em->getRepository(ProductSolutionX::class)->findBy(['productSolutionId'=>$id]);
        foreach ($existingSolutionTypes as $existingSolutionType){
            $this->em->remove($existingSolutionType);
        }
        $this->em->flush();
    }

    public function removeExistingImages($id){
        $existingImages = $this->em->getRepository(ProductImage::class)->findBy(['productImageId'=>$id]);
        foreach ($existingImages as $existingImage){
            $this->em->remove($existingImage);
        }
        $this->em->flush();
    }
    public function getAllActiveProductsByParentId($id){
        return $this->em->getRepository(ProductSolutionX::class)->findBy(['productSolutionTypeId'=>$id,'isActive'=>1,'deleted'=>0]);
    }

    //amit
    public function getProductBySlug($slug){
        return $this->em->getRepository(ProductSlug::class)->findOneBy(array('urlSlug'=>$slug));
    }

    //Amit 20-06-2018
    public function getAllProductSlug(){
        return $this->em->getRepository(ProductSlug::class)->findAll();
    }

    public function getProductSlugById($id){
        return $this->em->getRepository(ProductSlug::class)->find($id);
    }

}