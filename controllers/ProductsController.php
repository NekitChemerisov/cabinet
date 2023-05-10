<?php
class ProductsController extends Controller {

	
    private $pageTpl = "/views/products.tpl.php";
	
    public function __construct() {
		$this->model = new ProductsModel();
		$this->view = new View();
	}
	
    public function index() {
	
	
        $this->pageData['title'] = "Товары";

		$productsCount = $this->model->getProducts();

		$this->pageData['products'] = $productsCount;

        $this->view->render($this->pageTpl, $this->pageData);

}
}