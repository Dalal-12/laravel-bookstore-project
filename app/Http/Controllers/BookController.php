<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function bookType(){
        $book=DB::table('books')->get();

       
        return view('book',['book'=>$book]) ; 
    }
  
    

    public function bookDetails($id){
        $book=DB::table('books')->where('id','=',$id)->first();
       
        return view('details',['book'=>$book]) ; 
    }

    public function checkout($id){
        $book=db::table('books')->where('id','=',$id)->first();
        return view('checkout',['book'=>$book]);
    }

    public function invoice(request $request){
        $row=[
            'firstName'=>$request->firstName,
            'lastName' =>$request->lastName,
            'email'    =>$request->email,
            'address'  =>$request->address,
            'country'  =>$request->country,
            'state'    =>$request->state,
            'title'    =>$request->title,
            'price'    =>$request->price

        ];
        DB::table('invoice')->insert($row);
        $book=DB::table('invoice')->where('email','=',$request->email)->first();

        return view('invoice',['inv'=>$book]);
        redirect()->route("book");
    }

    public function addToCart($id){
        $cart=db::table('books')->where('id','=',$id)->first();
        return view('cart',['cart'=>$cart]) ; 
    }

   

   

}
