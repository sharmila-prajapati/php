<?php
/**
 * Created by PhpStorm.
 * User: spraj
 * Date: 06.05.2018
 * Time: 13:53
 */

namespace App\Controller;
use App\Entity\Book;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Route("/books")
 */
class BookController extends Controller
{
    /**
     * @Route("/")
     */
    public function getAllBooks()
    {
        $number = mt_rand(0, 100);
        $book = new Book();
        $book.  setIsbn("ISBN1");
        $book.setTitle("Title1");



        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}