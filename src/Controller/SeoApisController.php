<?php

namespace App\Controller;


use App\Entity\TempUser;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\OptionsResolver\Exception\InvalidArgumentException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\Response;

class SeoApisController extends Controller{
    
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
    
    /* Use it for json_encode some corrupt UTF-8 chars
     * useful for = malformed utf-8 characters possibly incorrectly encoded by json_encode
     * 
     * https://stackoverflow.com/questions/46305169/php-json-encode-malformed-utf-8-characters-possibly-incorrectly-encoded?rq=1
     */
    function utf8ize( $mixed ) {
        if (is_array($mixed)) {
            foreach ($mixed as $key => $value) {
                $mixed[$key] = $this->utf8ize($value);
            }
        } elseif (is_string($mixed)) {
            return mb_convert_encoding($mixed, "UTF-8", "UTF-8");
        }
        return $mixed;
    }
    /**
     * https://stackoverflow.com/questions/2820723/how-to-get-base-url-with-php
     * 
     * @return string
     */
    
    function url($type,$id){
        return sprintf(
            "%s://%s%s",
            isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
            $_SERVER['SERVER_NAME'],
            'public/images/'.$type.'/'.$id
            );
    }
    
    public function listCol(Request $request) //falta diferenciar col de nocol
    {
            //abrimos el manager de Seo
            $entityManager = $this->getDoctrine()->getManager('seo');
                   
            $sql = "
                SELECT 
                    t.`ID_ESP`, 
                    t.`DEN_ESP_CAS`, 
                    t.`DEN_ESP_LAT`, 
                    t.`DEN_ESP_ING`,
                    t.`DEN_ESP_CAT`,
                    t.`DEN_ESP_GAL`, 
                    t.`DEN_ESP_VAS` 
                FROM   
                    tablas_seo.t_especies t
            ";
            
            $stmt = $entityManager->getConnection()->prepare($sql);
            $stmt->execute();
            $array= new ArrayCollection();
            $array=$stmt->fetchAll();
            
            //ahora añadimos a cada grupo del array el campo de la imagen
            foreach ($array as &$group) {
                $group["image"] = url('col', $group['ID_ESP']);
            }

            return new Response(
                json_encode( $this->utf8ize( $array ) ), 200, ['content-type' => 'text/html; charset=UTF-8']
                );
    }
    
    public function listNoCol(Request $request) //falta diferenciar col de nocol
    {
        //abrimos el manager de Seo
        $entityManager = $this->getDoctrine()->getManager('seo');
        
        $sql = "
                SELECT
                    t.`ID_ESP`,
                    t.`DEN_ESP_CAS`,
                    t.`DEN_ESP_LAT`,
                    t.`DEN_ESP_ING`,
                    t.`DEN_ESP_CAT`,
                    t.`DEN_ESP_GAL`,
                    t.`DEN_ESP_VAS`
                FROM
                    tablas_seo.t_especies t
            ";
        
        $stmt = $entityManager->getConnection()->prepare($sql);
        $stmt->execute();
        $array= new ArrayCollection();
        $array=$stmt->fetchAll();
        
        //ahora añadimos a cada grupo del array el campo de la imagen
        foreach ($array as &$group) {
            $group["image"] = url('nocol', $group['ID_ESP']);
        }
        
        return new Response(
            json_encode( $this->utf8ize( $array ) ), 200, ['content-type' => 'text/html; charset=UTF-8']
            );
    }
    
    
    
}