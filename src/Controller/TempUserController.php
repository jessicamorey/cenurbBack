<?php

namespace App\Controller;


use App\Entity\TempUser;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\OptionsResolver\Exception\InvalidArgumentException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class TempUserController extends Controller{
    
    /**
     * @var NormalizerInterface
     */
    private $normalizer;
    
    /**
     * @param NormalizerInterface $normalizer
     */
    public function __construct(
        NormalizerInterface $normalizer
        ) {
            $this->normalizer = $normalizer;
    }
    public function login(Request $request)
    {
        $params = json_decode($request->getContent(), true);
       
        
        if ($params && count($params))
        {
            //comprobamos que el email no este en uso
            /*$emailInUse = $this->getDoctrine()->getRepository(TempUser::class)->findOneBy(['email' => $params["email"]]);
            if ($emailInUse) {
                throw new InvalidArgumentException("Email in use");
            }
            $em = $this->getDoctrine()->getManager();
            */
            //creamos un nuevo usuario temporal
            $tempUser=new TempUser();
            $tempUser->setEmail($params["email"]);
            $tempUser->setLastName($params["lastName"]);
            $tempUser->setName($params["name"]);
            if (isset($params["phone"])){
                $tempUser->setPhone($params["phone"]);
            }
            
            //POR EL MOMENTO NO HACE FALTA PERSISTIRLO,
           
            /*$em->persist($tempUser);
            $em->flush();*/
            return new JsonResponse(
                $this->normalizer->normalize(
                    $tempUser, 'json', ['tempUser']
                    )
                );
        }
        
        throw new InvalidArgumentException();
    }
    
    
    
    
    
}