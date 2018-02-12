<?php
/**
 * Created by PhpStorm.
 * User: kenp002
 * Date: 2018-01-31
 * Time: 13:58
 */

namespace Azimuth\AzimuthBundle\EventListener;
use Azimuth\AzimuthBundle\Entity\Document;
use Azimuth\AzimuthBundle\Service\FileUploader;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;
//use Symfony\Component\HttpFoundation\File\File;


class BrochureUploadListener
{
    private $uploader;

    public function __construct(FileUploader $uploader)
    {
        $this->uploader = $uploader;
    }

    public function prePersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        $this->uploadFile($entity);
    }

    public function preUpdate(PreUpdateEventArgs $args)
    {
        $entity = $args->getEntity();

        $this->uploadFile($entity);
    }

    private function uploadFile($entity)
    {
// upload only works for Document entities
        if (!$entity instanceof Document) {
            return;
        }

        $file = $entity->getBrochure();

        // only upload new files
        if ($file instanceof UploadedFile) {
            $fileName = $this->uploader->upload($file);
            $entity->setBrochure($fileName);
        }

    }


    public function postLoad(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        if (!$entity instanceof Document) {
            return;
        }

        if ($fileName = $entity->getBrochure()) {
            $entity->setBrochure(new File($this->uploader->getTargetDir().'/'.$fileName));
        }
    }
}