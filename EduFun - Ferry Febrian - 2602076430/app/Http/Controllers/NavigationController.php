<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Writer;
use Illuminate\Http\Request;
use PDO;

class NavigationController extends Controller
{
    public function dashboard()
    {
        $categories = Category::all();
        $courses = Course::all();
        $writers = Writer::all();

        return view('dashboard', compact('categories', 'courses', 'writers'));
    }

    public function category($category_id)
    {
        $categories = Category::all();
        $courses = Course::all();

        $course = Course::with('category')->where('category_id', $category_id)->get();
        $courseCategory = Course::with('category')->where('category_id', $category_id)->first();
        return view('category', compact('categories', 'courses', 'course', 'courseCategory'));
    }

    public function detail($course_id)
    {
        $categories = Category::all();
        $courses = Course::all();

        $course = Course::with('category', 'writer')->where('id', $course_id)->firstOrFail();
        return view('detail', compact('categories', 'courses', 'course'));
    }



    public function writer()
    {
        $categories = Category::all();
        $courses = Course::all();
        $writers = Writer::all();

        return view('writer', compact('categories', 'courses', 'writers'));
    }

    public function writerDetail($writer_id)
    {
        $categories = Category::all();
        $courses = Course::all();
        $writers = Writer::all();

        $course = Course::with('writer')->where('writer_id', $writer_id)->get();
        $courseWriter = Course::with('writer')->where('writer_id', $writer_id)->first();

        return view('writerDetail', compact('categories', 'courses', 'writers', 'course', 'courseWriter'));
    }

    public function aboutUs()
    {
        $categories = Category::all();
        return view('aboutUs', compact('categories'));
    }

    public function popular()
    {
        $courses = Course::with('category', 'writer')->paginate(2);
        $categories = Category::all();

        return view('popular', compact('courses', 'categories'));
    }
}
