<?php
/**
 * This file is part of the "Lost and Found" project
 *
 * @copyright Stfalcon.com <info@stfalcon.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Controller\API;

use AppBundle\Entity\Category;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Response;

/**
 * API CategoryController
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 * @author Artem Genvald  <genvaldartem@gmail.com>
 *
 * @Rest\Prefix("/v1/categories")
 */
class CategoryController extends FOSRestController
{
    /**
     * @return Category[]
     *
     * @Rest\Get("", name="api_get_categories", defaults={"_format"="json"})
     */
    public function getCategoriesAction()
    {
        $categoryRepository = $this->getDoctrine()->getRepository('AppBundle:Category');

        $categories = $categoryRepository->getCategories();

        $serializer = $this->container->get('serializer');
        $reports = $serializer->serialize($categories, 'json');

        return new Response($reports);
    }
}
