<?php

namespace App\Controller;

use App\Entity\BookStorage;
use App\Form\BookStorageType;
use App\Repository\BookStorageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/book/storage")
 */
class BookStorageController extends Controller
{
    /**
     * @Route("/", name="book_storage_index", methods="GET")
     */
    public function index(BookStorageRepository $bookStorageRepository): Response
    {
        return render('book_storage/index.html.twig', ['book_storages' => "/new"]);

    }

    /**
     * @Route("/new", name="book_storage_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $bookStorage = new BookStorage();
        $form = $this->createForm(BookStorageType::class, $bookStorage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($bookStorage);
            $em->flush();

            return $this->redirectToRoute('book_storage_index');
        }

        return $this->render('book_storage/new.html.twig', [
            'book_storage' => $bookStorage,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="book_storage_show", methods="GET")
     */
    public function show(BookStorage $bookStorage): Response
    {
        return $this->render('book_storage/show.html.twig', ['book_storage' => $bookStorage]);
    }

    /**
     * @Route("/{id}/edit", name="book_storage_edit", methods="GET|POST")
     */
    public function edit(Request $request, BookStorage $bookStorage): Response
    {
        $form = $this->createForm(BookStorageType::class, $bookStorage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('book_storage_edit', ['id' => $bookStorage->getId()]);
        }

        return $this->render('book_storage/edit.html.twig', [
            'book_storage' => $bookStorage,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="book_storage_delete", methods="DELETE")
     */
    public function delete(Request $request, BookStorage $bookStorage): Response
    {
        if ($this->isCsrfTokenValid('delete'.$bookStorage->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($bookStorage);
            $em->flush();
        }

        return $this->redirectToRoute('book_storage_index');
    }
}
