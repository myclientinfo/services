<?php

namespace App\Http\Controllers;

use App\Category;
use App\Supplier;
use App\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $services = isset($input['services'])?$input['services']:[];
        $type = $input['type'];

        if (empty($services)) {
            return redirect('search')->with('message', 'You must choose at least one supplier service');
        }

        $supplier_query = Supplier::whereHas('services', function ($q) use ($services) {
            $q->whereIn('service_id', $services);
        });


        if ($type) {
            $supplier_query->where('type_id', '=', $type);
        }

        $suppliers = $supplier_query->get();

        return view('search', compact('categories', 'input', 'suppliers', 'types', 'type', 'services'));
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
        return view('profile.show', compact('supplier'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function profile()
    {
        $supplier = Supplier::where('user_id', '=', Auth::user()->id)->first();
        return view('profile.show', compact('supplier'));
    }

    public function edit()
    {
        $supplier = Supplier::where('user_id', '=', Auth::user()->id)->first();
        $categories = Category::with('services')->get();
        $types = Type::all();
        $supplier_services = $supplier->services->lists('id')->toArray();

        return view('profile.edit', compact('supplier', 'categories', 'types', 'supplier_services'));
    }

    public function update(Request $request)
    {
        $supplier = Supplier::where('user_id', '=', Auth::user()->id)->first();
        $supplier->update($request->only(['type_id', 'title', 'summary', 'description']));
        $supplier->save();

        $supplier->services()->delete();

        foreach ($request->only('services') as $item) {
            $supplier->services()->attach($item);
        }
    }
}
