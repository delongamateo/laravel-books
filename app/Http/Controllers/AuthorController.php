<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use Illuminate\Support\Str;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::orderBy('name')->get();

        return view('authors.index', compact('authors'));
    }

    /**
     * display a form to create a new author
     */
    public function create()
    {
        $author = new Author;

        return view('authors.create', compact('author'));
    }

    /**
     * handle the submission of the create form
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:8',
            'bio' => [
                'required',
                'min:20',
                function ($attribute, $value, $fail) {
                    if (false !== strpos($value, 'damn')) {
                        $fail('No swearing in the class.');
                    }
                }
            ]
        ], [
            'name.required' => 'Just give us the name, man!',
            'name.min' => 'Nobody has a name that short'
        ]);

        // prepare empty object
        $author = new Author;

        // fill object with request data
        $author->name = $request->input('name');
        $author->bio = $request->input('bio');
        $author->slug = Str::slug( $author->name );

        // save the object
        $author->save();

        // flash success message
        session()->flash('success_message', 'Author saved!');

        // redirect to next page (edit)
        return redirect()->action('AuthorController@edit', [$author->id]);
    }

    /**
     * displays the form to edit an existing author
     */
    public function edit($id)
    {
        // retrieve saved object from the database
        $author = Author::findOrFail($id);

        return view('authors.edit', compact('author'));
    }

    /**
     * handles the submission of the edit form
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|min:8',
            'bio' => [
                'required',
                'min:20',
                function ($attribute, $value, $fail) {
                    if (false !== strpos($value, 'damn')) {
                        $fail('No swearing in the class.');
                    }
                }
            ]
        ], [
            'name.required' => 'Just give us the name, man!',
            'name.min' => 'Nobody has a name that short'
        ]);

        // retrieve saved object from the database
        $author = Author::findOrFail($id);

        // fill object with request data
        $author->name = $request->input('name');
        $author->bio = $request->input('bio');
        $author->slug = Str::slug( $author->name );

        // save the object
        $author->save();

        // flash success message
        session()->flash('success_message', 'Author saved!');

        // redirect to next page (edit)
        return redirect()->action('AuthorController@edit', [$author->id]);
    }
}
