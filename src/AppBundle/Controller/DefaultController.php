<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    
    /**
     * @Route("/api/pages", name="api_pages")      
     */
    public function apiPagesAction(Request $request) {
	$data = [
	    "data" => "JWT Token is valid"
	];
	$response = new JsonResponse();
	return $response->setData($data);
    }
}


//    "token": "eyJhbGciOiJSUzI1NiJ9.eyJyb2xlcyI6WyJST0xFX1VTRVIiXSwidXNlcm5hbWUiOiJ1c2VyIiwiaWF0IjoxNTE4NDcwMjI0LCJleHAiOjE1MTg0NzM4MjR9.jCEdr3Lx-a66_wd6aCGAkSLweb3e5b45oEr1qw8jBrPy9zh9qDbrMsdttILQV2vWFqLT49CK44PELzb03PLGv2o-CO9pLUxzl4NZp-KWQSiawNiCMAGh23GrMb_FMoU91II6U_5NbspfuacRvNKQL0i6v3hIyCj07OGUhJIvuzVWlq6n4D3NAlHd1EyKC9Hi1hGA3_zD_oVAxTG88GtGJVZgpgOYKflOSpATg2ogSMoOqpfbjK5qU_pUmR05QpLRW_uavHXdt6IasItN4fa6TA4NfSB6GTip3Lik-X4LarWsAimekTbQi3b43Xm6dXrxdnp_TMy2f-jhY8UdwVjnXsQc5-abxfLJDTVy3qXZID6cUP8xGjG05P6rSuHvbM4OicxpG8Y0s20awr5YMmgyKoae5AdLCAeCnGMCbHD85-al4oQbpibFd9V-oko7lgWT28MUIu6sGEYGaT40GOU05K-AiLfYU0COJz5Bo5KFyOrcPCM7A7r3eHtEEsCTH66e0mAPATuycRg7Z-G5-_VXMtXLdhD5a4FT527veap7OBVO-tLNpTIx7idbhHtAhEhHCQE0MtIKqjZGGY5U-FVlUNLJ7gzits2hEus8A_5LNnoKM64MWVxe_bwMc14rnq0HNHaNX4Gm24E_VgdDM316yFtW7HEZZNnA_J75IJT6WM4"