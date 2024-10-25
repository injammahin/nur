<?php

namespace App\Http\Controllers;

use App\Models\NewProduct;
use App\Models\NewProductFaq;
use Illuminate\Http\Request;

class NewProductFaqController extends Controller
{
    public function index(NewProduct $new_product)
    {
        $faqs = $new_product->faqs;
        return view('backend.new_product_faqs.index', compact('new_product', 'faqs'));
    }

    public function create(NewProduct $new_product)
    {
        return view('backend.new_product_faqs.create', compact('new_product'));
    }

    public function store(Request $request, NewProduct $new_product)
    {
        $request->validate([
            'faqs.*.question' => 'required|string',
            'faqs.*.answer' => 'required|string',
        ]);
    
        // Ensure 'faqs' input is an array
        if (is_array($request->faqs) && count($request->faqs) > 0) {
            foreach ($request->faqs as $faq) {
                NewProductFaq::create([
                    'new_product_id' => $new_product->id,
                    'question' => $faq['question'],
                    'answer' => $faq['answer']
                ]);
            }
    
            return redirect()->route('backend.new_products.faqs.index', $new_product)->with('success', 'FAQs added successfully.');
        } else {
            return redirect()->back()->with('error', 'No FAQs were provided.');
        }
    }
    
    public function destroy(NewProductFaq $faq)
    {
        $faq->delete();
        return redirect()->back()->with('success', 'FAQ deleted successfully.');
    }
    public function edit($new_product_id, $faq_id)
    {
        $new_product = NewProduct::findOrFail($new_product_id);
        $faq = NewProductFaq::findOrFail($faq_id);

        return view('backend.new_product_faqs.edit', compact('new_product', 'faq'));
    }
    public function update(Request $request, $new_product_id, $faq_id)
    {
        // Find the FAQ by its ID
        $faq = NewProductFaq::findOrFail($faq_id);

        // Validate the request data
        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);

        // Update the FAQ with new data
        $faq->update([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);

        // Redirect back with a success message
        return redirect()->route('backend.new_products.faqs.index', $new_product_id)
            ->with('success', 'FAQ updated successfully.');
    }
}
