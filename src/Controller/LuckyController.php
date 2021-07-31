<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// ...




class LuckyController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function number(): Response
    {
        //$number = random_int(0, 100);
		//$tokenGenerator = $this->container->get('fos_user.util.token_generator');
        //$number = substr($tokenGenerator->generateToken(), 0, 15);
	    //$number = generer(15);
		$number = $this->generer(15);
		

        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);
    }
	function generer($n = 15)
	{
     return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($n/strlen($x)) )),1,$n);
  }
}

?>