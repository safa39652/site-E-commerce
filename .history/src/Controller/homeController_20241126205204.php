<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class homeController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->render('base.html.twig');  // Utilisez le fichier Twig
    }

    /**
     * @Route("/cart", name="cart")
     */
    public function cart(): Response
    {
        return $this->render('cart.twig');  // Utilisez le fichier Twig
    }

    /**
     * @Route("/checkout", name="checkout")
     */
    public function checkout(): Response
    {
        return $this->render('checkout.twig');  // Utilisez le fichier Twig
    }
}
