<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    // Show all Comments with filter, pagination, and sorting
    public function getAll(Request $request)
    {
        // Retrieve query parameters
        $name = $request->input('name', '');
        $page = $request->input('page', 1); // Default to page 1
        $size = $request->input('size', 10); // Default to 10 items per page
        $sort = $request->input('sort', 'created_at'); // Default to sorting by 'created_at'
        $direction = $request->input('direction', 'desc'); // Default to descending order

        // Query the Comment model
        $query = Comment::query();

        // Apply title filter (PostgreSQL case-insensitive search)
        if ($name) {
            $query->whereRaw("LOWER(name) LIKE ?", ['%' . strtolower($name) . '%']);
        }

        // Apply sorting
        if (in_array($sort, ['name', 'created_at'])) {
            $query->orderBy($sort, $direction);
        }

        // Paginate the results with the 'size' parameter
        $Comments = $query->paginate($size, ['*'], 'page', $page);

        // Return response
        return response()->json([
            'message' => 'Comments retrieved successfully',
            'data' => $Comments,

        ], 200);
    }
}
