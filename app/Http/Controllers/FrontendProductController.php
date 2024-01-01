<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Bidding;
use Carbon\Carbon;

class FrontendProductController extends Controller
{
    public function  singleProductView($productId)
    {
        $biddings=Bidding::where('product_id',$productId)->orderBy('price', 'DESC')->get();
        $product = Product::where('id', $productId)->first();
        $products = Product::all();
        $singleProduct=Product::find($productId);
        $currentDateTime = Carbon::now();
        $bid_expiration_date =Carbon::parse($product->bid_expiration_date);
        
        if($currentDateTime->gt($bid_expiration_date)){
            $maxBidderId = Bidding::where('price', Bidding::max('price'))->value('id');
            $changeStatus = Bidding::where('id',$maxBidderId)->update(['status'=>'win']);
            
           
        } 
        
        
        return view('admin.Frontend.Pages.product-view',compact('singleProduct','products','biddings'));

    }  
     public function store( Request $request, $id){
      

        $maxPrice = Bidding::max('price');
        $validate=Validator::make($request->all(),[
            'amount' => 'required|numeric|gt:' . $maxPrice,
        ],
        [
            'amount.gt' => "The amount must be greater than {$maxPrice}.",
        ]);

        if($validate->fails())
        {
            notify()->error('The amount must be greater than max price!');
            return redirect()->back()->withErrors($validate);
        }
        
        Bidding::create([
            'user_name'=>auth()->user()->name,
            'price'=>   $request->amount,
            'product_id' => $id,
            'status' => 'pending',
        ]);

        notify()->success('Bid submitted successfull');
        return redirect()->back();


     }
     //category wise prosuct show
     public function productUnderCategory($category_id){
        $products=Product::where('category_id',$category_id)->get();
        return view('admin.Frontend.Pages.product-under-category',compact('products'));
     }

     public function View(){
        $ViewAllProducts=Product::all();
        return view('admin.Frontend.Pages.product-all-view',compact('ViewAllProducts'));
     }
     // status will change the winner customer
     public function StatusUpdate($id){
       
        
        // Find the ID of the bidder with the maximum price
        $maxBidderId = Bidding::where('price', Bidding::max('price'))->value('id');

        //Update the status of the maximum bidder to 'win'
        $changeStatus = Bidding::where('id',$maxBidderId)->update(['status'=>'win']);
        // return redirect()->route('single.product', ['id'=>$id]);
        // return redirect()->route('single.product', $id);
        return redirect()->back();
        
    }
}
