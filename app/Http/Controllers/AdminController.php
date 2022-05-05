<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use DB;
use App\Models\Employee;
class AdminController extends Controller
{
    public function index()
    {
        // $data=DB::table('categories')
        //         ->select('categories.*',
        //         DB::raw("(SELECT SUM(products.product_price) FROM products 
        //         where products.category_id=categories.id 
        //         GROUP BY products.category_id as products"))->get();
        // dd($data);

        $flight=Employee::find(1);
        // $flight->getOriginal('name');
        dd($flight);
    }
}
