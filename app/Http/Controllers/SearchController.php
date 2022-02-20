<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\Models\Search;




class SearchController extends Controller

{

   public function index()

{

return view('search.search');

}



public function search(Request $request)

{

if($request->ajax())

{

$output="";

$products=Search::table('products')->where('Title','LIKE','%'.$request->search."%")->get();

if($products)

{

foreach ($products as $key => $product) {

$output.='<tr>'.

'<td>'.$product->id.'</td>'.

'<td>'.$product->Title.'</td>'.

'<td>'.$product->escription.'</td>'.

'<td>'.$product->price.'</td>'.

'</tr>';

}



return Response($output);



   }



   }



}

}