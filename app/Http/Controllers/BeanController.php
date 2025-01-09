<?php

namespace App\Http\Controllers;

use App\Models\Bean;
use Illuminate\Http\Request;

class BeanController extends Controller
{
    // Show all beans with filter, pagination, and sorting
    public function getAll(Request $request)
    {
        // Retrieve query parameters
        $title = $request->input('title', '');
        $page = $request->input('page', 1); // Default to page 1
        $size = $request->input('size', 10); // Default to 10 items per page
        $sort = $request->input('sort', 'created_at'); // Default to sorting by 'created_at'
        $direction = $request->input('direction', 'desc'); // Default to descending order

        // Query the Bean model
        $query = Bean::query();

        // Apply title filter (PostgreSQL case-insensitive search)
        if ($title) {
            $query->whereRaw("LOWER(title) LIKE ?", ['%' . strtolower($title) . '%']);
        }

        // Apply sorting
        if (in_array($sort, ['title', 'price', 'created_at', 'arrived_at', 'total_sales', 'total_likes'])) {
            $query->orderBy($sort, $direction);
        }

        // Paginate the results with the 'size' parameter
        $beans = $query->paginate($size, ['*'], 'page', $page);

        // Return response
        return response()->json([
            'message' => 'Beans retrieved successfully',
            'data' => $beans,

        ], 200);
    }
}
