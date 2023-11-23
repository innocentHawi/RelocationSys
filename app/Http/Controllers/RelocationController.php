<?php

namespace App\Http\Controllers;

use App\Models\Relocation;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Log;

class RelocationController extends Controller
{
    public function relocate(Request $request){
        //dd('Controller accessed!');

        $incomingFields = $request->validate([
            'addressfrom' => ['required', 'min:3', 'max:50'],
            'addressto' => ['required', 'min:3', 'max:50'],
            'appartment_from' => ['required', Rule::in(['Mini Flat', 'Flat', 'Terrace', 'Others'])],
            'appartment_to' => ['required', Rule::in(['Mini Flat', 'Flat', 'Terrace', 'Others'])],
            'bedroom_from' => 'nullable',
            'bedroom_to' => 'nullable',
            'floor_from' => 'nullable',
            'floor_to' => 'nullable',
            'Mfirst_name' => 'required',
            'Mlast_name' => 'required',
            'Memail' => 'required',
            'Mphone' => 'required',
            'myCheckbox1' => ['nullable', Rule::in(['Local Move'])],
            'myCheckbox2' => ['nullable', Rule::in(['Long distance move'])],
            'myCheckbox3' => ['nullable', Rule::in(['Office move'])],
            'myCheckbox4' => ['nullable', Rule::in(['Packing and Loading'])],
            'myCheckbox5' => ['nullable', Rule::in(['Unpacking and Rearranging'])],
            'myCheckbox6' => ['nullable', Rule::in(['Uninstallation And Installation of Electrical Appliances'])],
            'myCheckbox7' => ['nullable', Rule::in(['Storage'])],
            'myCheckbox8' => ['nullable', Rule::in(['Truck rental'])],
            'Mdate' => 'required',
            'Mtime' => 'nullable',
            'Mtextarea' => 'nullable',
            'file' => 'nullable|file'
        ]);
        dd('Controller accessed!');

        $incomingFields['addressfrom']=strip_tags($incomingFields['addressfrom']);
        $incomingFields['addressto']=strip_tags($incomingFields['addressto']);
        $incomingFields['appartment_from']=strip_tags($incomingFields['appartment_from']);
        $incomingFields['appartment_to']=strip_tags($incomingFields['appartment_to']);
        $incomingFields['bedroom_from']=strip_tags($incomingFields['bedroom_from']);
        $incomingFields['bedroom_to']=strip_tags($incomingFields['bedroom_to']);
        $incomingFields['floor_from']=strip_tags($incomingFields['floor_from']);
        $incomingFields['floor_to']=strip_tags($incomingFields['floor_to']);
        $incomingFields['Mfirst_name']=strip_tags($incomingFields['Mfirst_name']);
        $incomingFields['Mlast_name']=strip_tags($incomingFields['Mlast_name']);
        $incomingFields['Memail']=strip_tags($incomingFields['Memail']);
        $incomingFields['Mphone']=strip_tags($incomingFields['Mphone']);
        $checkboxes = ['myCheckbox1', 'myCheckbox2', 'myCheckbox3', 'myCheckbox4', 'myCheckbox5', 'myCheckbox6', 'myCheckbox7', 'myCheckbox8'];
        $checkboxValues = [];
        foreach ($checkboxes as $checkbox) {
            $checkboxValues[$checkbox] = $request->has($checkbox) ? strip_tags($request->input($checkbox)) : null;
        }

        $incomingFields['checkboxes'] = $checkboxValues;
        $incomingFields['Mdate']=strip_tags($incomingFields['Mdate']);
        $incomingFields['Mtime']=strip_tags($incomingFields['Mtime']);
        $incomingFields['Mtextarea']=strip_tags($incomingFields['Mtextarea']);
        $incomingFields['file'] = $request->file('file')->store('file');

        
        Relocation::create($incomingFields);
        return redirect('/index');
    }
}
