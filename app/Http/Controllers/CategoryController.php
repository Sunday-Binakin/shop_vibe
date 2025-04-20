<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():JsonResponse
    {
        //
        try {
            $categories = Category::all();
            return response ()->json([
                'status'=>200,
                'data'=>$categories,
                'message'=>'Categories fetched successfully'
            ],200);
        } catch (\Throwable $e) {
            //throw $th;
            return response()->json([
                'status'=>500,
                'message'=>'Internal server error',
                'error'=>$e->getMessage()
            ],500);
        }
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
