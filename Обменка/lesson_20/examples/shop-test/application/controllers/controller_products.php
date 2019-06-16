<?php

class Controller_Products extends Controller
{

    public function __construct(){
        parent::__construct();
        $this->model = new Model_Products;
    }

    function action_index()
    {


        $this->view->generate('products/list_view.php', 'template_view.php',
            array(
                'title' => 'Список товаров',
                'products' => $this->model->get_data()
            )
        );
    }

    function action_view($id){

        $id = (int)$id[0];
        $data = $this->model->get_product($id);
        $this->view->generate('products/item_view.php', 'template_view.php',
            array(
                'title' => $data['title'],
                'product' => $data
            )
        );


    }
}