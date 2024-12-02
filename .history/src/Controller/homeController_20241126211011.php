<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        // Affiche la page d'accueil avec le template de base
        return $this->render('base.html.twig');
    }

    /**
     * @Route("/cart", name="cart")
     */
    public function cart(): Response
    {
        // Affiche la page du panier avec un template de panier spécifique
        return $this->render('cart.html.twig');  // Utilisez le fichier Twig cart.html.twig
    }

    /**
     * @Route("/checkout", name="checkout")
     */
    public function checkout(): Response
    {
        // Affiche la page de paiement avec un template de paiement spécifique
        return $this->render('checkout.html.twig');  // Utilisez le fichier Twig checkout.html.twig
    }

    /**
     * @Route("/shop", name="shop")
     */
    public function shop(): Response
    {
        // Affiche la page de boutique avec un template de boutique spécifique
        return $this->render('shop.html.twig');  // Utilisez le fichier Twig shop.html.twig
    }
}
