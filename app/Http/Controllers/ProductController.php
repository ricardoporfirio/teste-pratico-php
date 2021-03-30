<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::all();
        
        return view('products',[
            'products' => $products
        ]);
    }

    public function search(Request $request)
    {
         $products = Product::where($request->type,'like',"%$request->name%")->get();
         $results = "";
         foreach($products as $p) {
             $results.="<a href = '#' name='pushName' id='{$p->id}'>{$p->name}</a><br>";
         }
         
         echo $results;
         return;
  
    }

    public function addProduct(Request $request)
    {
        $product = Product::find($request->id);
        if ($product) {
            if(!session()->has('cart')) {
                $products = [];
                array_push($products,$product);
                session()->put('cart',$products);
            }
            else{
                $products = session()->get('cart');
                array_push($products,$product);
                Session::put('cart',$products);
            }
        }

        self::renderTable($products);
        return;

    }

    public function removeProduct(Request $request)
    {

        $products = session()->get('cart');

        if(count($products)>0) {
            unset($products[$request->id]);
            session()->forget('cart');
            session()->put('cart',$products);

            self::renderTable($products);
        }
        
        return;

    }

    private function renderTable(array $products): void
    {
        $table = "<tr>
        <td>Nome</th>
        <th>Preço</th>
        <th>Fornecedor(es)</th>
        <th>Remover</th>
      </tr>";
      $total=0;
      foreach($products as $key => $p) {
          $total+=(float)$p->price;
        $table .= "<tr>
            <td>$p->name</td>
            <td>$p->price</td>
            <td>".self::printSupliers($p)."</td>
            <td><a href = '#' name='pop' id='{$key}'>Remover</a></td>
        </tr>";
    }
        $table.="<tr><td colspan='2'>Total</td><td colspan='2'>R$ ".number_format($total,2,",",".")."</td></tr>";
        echo $table;
    }

    private function printSupliers(Product $product)
    {
        $supliers = "";
        foreach($product->suplier()->get() as $s) {
            $supliers.=$s->name."<br>";
        }
        return $supliers;
    }

}
