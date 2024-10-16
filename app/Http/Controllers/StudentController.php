<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function list(Request $request)
    {
        // Get search and sort inputs from request
        $search = $request->input('search');
        $sortField = $request->input('sortField', 'id');
        $sortDirection = $request->input('sortDirection', 'asc');
        $perPage = $request->input('perPage', 10); // Default items per page
        
        // Query with search, sort, and pagination
        $students = Student::with('department')
            ->when($search, function ($query, $search) {
                return $query->where('first_name', 'like', "%{$search}%")
                             ->orWhere('last_name', 'like', "%{$search}%")
                             ->orWhere('email', 'like', "%{$search}%");
            })
            ->orderBy($sortField, $sortDirection)
            ->paginate($perPage)
            ->withQueryString();

            return Inertia::render('Student/List', [
                'students' => $students,
                'filters' => [
                    'search' => $search,
                    'sortField' => $sortField,
                    'sortDirection' => $sortDirection,
                    'perPage' => $perPage,
                ],
                'loading' => false, // This can be dynamic based on your logic
            ]);
    }
}

