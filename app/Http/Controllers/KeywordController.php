<?php
namespace App\Http\Controllers;
use App\Models\Keyword;
use Illuminate\Http\Request;

class KeywordController extends Controller
{
    public function keyword(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'word' => 'required|string|max:255',
            'category_id' => 'required|exists:email_categories,id',
        ]);

        // Create a new Keyword record
        Keyword::create($validated);

        // Redirect to the keywords index route
        return redirect()->route('keywords.index');
    }
}
