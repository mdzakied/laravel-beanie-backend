<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // Show all articles with filter, pagination, and sorting
    public function getAll(Request $request)
    {
        // Retrieve query parameters
        $title = $request->input('title', '');
        $page = $request->input('page', 1); // Default to page 1
        $size = $request->input('size', 10); // Default to 10 items per page
        $sort = $request->input('sort', 'created_at'); // Default to sorting by 'created_at'
        $direction = $request->input('direction', 'desc'); // Default to descending order

        // Query the Article model
        $query = Article::query();

        // Apply title filter (PostgreSQL case-insensitive search)
        if ($title) {
            $query->whereRaw("LOWER(title) LIKE ?", ['%' . strtolower($title) . '%']);
        }

        // Apply sorting
        if (in_array($sort, ['title', 'created_at'])) {
            $query->orderBy($sort, $direction);
        }

        // Paginate the results with the 'size' parameter
        $articles = $query->paginate($size, ['*'], 'page', $page);

        // Return response
        return response()->json([
            'message' => 'Articles retrieved successfully',
            'data' => $articles,

        ], 200);
    }
}
