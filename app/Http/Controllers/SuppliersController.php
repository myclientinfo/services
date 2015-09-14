<?php

namespace App\Http\Controllers;

use App\Category;
use App\Supplier;
use App\Type;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $input = ['services'=>[]];
        $categories = Category::with('services')->get();
        $suppliers = [];
        $types = Type::all();

        return view('search', compact('categories', 'input', 'suppliers', 'types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  Request  $request
     * @return Response
     */
    public function search(Request $request)
    {
        $input = $request->except('token');
        $categories = Category::with('services')->get();
        $types = Type::all();

        $supplier_query = Supplier::whereHas('services', function($q) use ($input){
            $q->whereIn('service_id', $input['services']);
        });

        if ($input['type']) {
            $supplier_query->where('type_id', '=', $input['type']);
        }

        $suppliers = $supplier_query->get();

        return view('search', compact('categories', 'input', 'suppliers', 'types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $supplier = Supplier::find($id);

        return view('show', compact('supplier'));
    }
}
