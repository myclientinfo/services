<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Supplier;
use App\User;
use App\Type;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $categories = Category::with('services')->get();
        $types = Type::all();

        return view('register', compact('categories', 'types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request_data = $request->all();
        $request_data['password'] = bcrypt($request_data['password']);

        $user = User::create($request_data);
        $supplier = $user->supplier()->create($request->all());

        $this->associateItems($supplier, $request->only('services'));

        Auth::login($user);

        return redirect()->action('SuppliersController@show', [$supplier->id]);
    }

    /**
     * Associate items with the product
     *
     * @param array $items
     * @param Product $model
     */
    private function associateItems(Supplier $supplier, array $items = [])
    {
        foreach ($items as $item) {
            $supplier->services()->attach($item);
        }
    }

}
