<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Product;
use Illuminate\Http\Request;


class MainController extends Controller
{
    public function index()
    {
        $newProducts = Product::latest()->take(8)->get();
        $products = Product::latest()->skip(8)->take(10)->get();
        $categories = Category::all();
        $trending1 = Product::latest()->take(3)->get();
        $trending2 = Product::latest()->skip(3)->take(3)->get();
        $contact = Contact::first();
        return view('frontend.index', compact(
            'newProducts',
            'products',
            'categories',
            'trending1',
            'trending2',
            'contact'
        ));
    }
    public function products()
    {
        $newProducts = Product::latest()->take(8)->get();
        $products = Product::latest()->skip(8)->take(10)->get();
        $categories = Category::all();
        $trending1 = Product::latest()->take(3)->get();
        $trending2 = Product::latest()->skip(3)->take(3)->get();
        $contact = Contact::first();
        return view('frontend.products', compact(
            'newProducts',
            'products',
            'categories',
            'trending1',
            'trending2',
            'contact'
        ));
    }
    public function singleProduct($id)
    {
        $product = Product::find($id);
        $contact = Contact::first();
        return view('frontend.single-product', compact('product', 'contact'));
    }
    public function sortProducts($slug)
    {
        $category = Category::where('slug', $slug)->first();

        if ($category) {
            return view('frontend.sort-product', compact('category'));
        }

        abort(404, 'Category not found');
    }
    public function contact()
    {
        $contact = Contact::first();
        return view('frontend.contact', compact('contact'));
    }
}
