<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Item;
Use App\Models\ShoppingCart;
use Illuminate\Support\Facades\DB;
class ShoppingCartController extends Controller
{
    public function cartList()
    {
    
        $cartItems = ShoppingCart::all();
       $total=ShoppingCart::sum('price');
        return view('components/ShoppingCart/cart', compact('cartItems','total'));
    }
    public function addToCart(Request $request)
    {   
        $item=Item::all();
        $dataArray=array();
        foreach($item as $i){
            if($i->i_id==$request->taglia){
                $id=$i->i_id;
               $taglia= $i->taglia;
               $stock=$i->stock;
            }}
     
        $dataArray[]=([      
             'item_id' => $id,
             'image_link' => $request->image_link,
            'title' =>$request->title,
            'taglia' =>$taglia,
             'quantity' => intval($request->quantity),
             'price' =>floatval($request->price),
             'vip_price' =>floatval($request->vip_price),
             'stock' => intval($stock),
        ]);
    
        ShoppingCart::insert($dataArray);     
return back();
    }
    public function updateCart(Request $request)
    {
        DB::table('shopping_carts')->where('id', $request->id)->update(['quantity' => $request->quantity]);
        return redirect()->route('cart.list');
    }
    public function removeCart(Request $request)
    {
        ShoppingCart::where('id',$request->id)->delete();
        return redirect()->route('cart.list');
    }
    public function clearAllCart()
    {
        DB::table('shopping_carts')->delete();
        return redirect()->route('cart.list');
    }
    public function back()
    {
return back();
    }
}
