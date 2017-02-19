<?php
/**
 * Created by PhpStorm.
 * User: marco
 * Date: 19.02.17
 * Time: 12:54
 */
namespace \MyVendor\Inventory\Controller;
use \TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use \TYPO3\CMS\Core\Utility\GeneralUtility;
use \MyVendor\Inventory\Domain\Model\Repository\ProductRepository;

class InventoryController extends ActionController {

    public function listAction() {
        $productRepository = GeneralUtility::makeInstance(ProductRepository::class);
        $products = $productRepository->findAll();
        $this->view->assign('products', $products);
    }
}
?>
