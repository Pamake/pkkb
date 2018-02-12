<?php
/**
 * Created by PhpStorm.
 * User: kenp002
 * Date: 2018-01-31
 * Time: 14:57
 */

namespace Azimuth\AzimuthBundle\Controller;
use Azimuth\AzimuthBundle\Entity\Document;
use Azimuth\AzimuthBundle\Form\DocumentType;
use Azimuth\AzimuthBundle\Service\FileUploader;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DocumentController extends Controller
{

    public function addAction(Request $request, FileUploader $fileUploader)
    {
        $document = new Document();
        $fileUploader = new FileUploader();
       // $file = new UploadedFile();
        $form = $this->createForm(DocumentType::class, $document);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $file stores the uploaded PDF file
            var_dump($document->getBrochure());
            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $file = $document->getBrochure();
            //$fileUploader = $this->getFileUploader();
            $fileName = $fileUploader->upload($file);

            $document->setBrochure($fileName);


            // ... persist the $product variable or any other work

            return $this->redirect($this->generateUrl('carriere'));
        }

        return $this->render('AzimuthBundle:Default:Document/layout/document.html.twig', array(
            'form' => $form->createView(),
        ));
    }

}