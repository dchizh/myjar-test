<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends Controller {
    public function productsList(){
        $Products = array();
        $Products[] = array(
            "name" => "1 Month",
            "duration" => "1 month",
            "interest" => "0.8",
            "resource_uri" => "/api/v1/public/product/1"
        );
        $Products[] = array(
            "name" => "2 Month",
            "duration" => "2 month",
            "interest" => "0.9",
            "resource_uri" => "/api/v1/public/product/2"
        );
        $Products[] = array(
            "name" => "3 Month",
            "duration" => "3 month",
            "interest" => "1",
            "resource_uri" => "/api/v1/public/product/3"
        );

        return response()->json(array(
            'error' => false,
            'products' => $Products),200
        );
    }
    public function productInfo($id){
        switch ($id){
            case "1": {
               return response()->json(array(
                    'error' => false,
                    'productInfo' => array(
						"name" => "1 Month",
                        "duration" => "1 month",
                        "interest" => "0.8",
                        "resource_uri" => "/api/v1/public/product/1"
						)
					),200
               );
            };
            case "2": {
               return response()->json(array(
                    'error' => false,
                    'productInfo' => array(
						"name" => "2 Months",
                        "duration" => "2 month",
                        "interest" => "0.9",
                        "resource_uri" => "/api/v1/public/product/2"
						)
					),200
               );
            };
            case "3": {
               return response()->json(array(
                    'error' => false,
                    'productInfo' => array(
						"name" => "3 Months",
                        "duration" => "3 months",
                        "interest" => "1",
                        "resource_uri" => "/api/v1/public/product/3"
						)
					),200
               );
            };			
        }
        return response()->json(array(
			'error' => true,
            'productInfo' => array()
		),200
		);
    }
};
?>