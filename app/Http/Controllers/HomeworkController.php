<?php

namespace App\Http\Controllers;

use App\Models\homework;
use App\Models\studenthomeworks;
use App\Models\students;
use App\Models\teacher;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File as FileFacade;

class HomeworkController extends Controller
{
    public function index() {
        //To-Do: If not assigned a class, let the student view an empty class

        if (Auth::guard('students')->check()) {
            $homework = homework::latest()->where('class', '=', Auth::guard('students')->user()->class)->get();
            return view('homework.index', ['homework' => $homework]);
        } else {
            return view('sessions.login');
        }
    }

    public function show(homework $homework) {
        $std = studenthomeworks::query()->latest()->where('student_id', '=',
            Auth::guard('students')->user()->id)->where('homework_id', '=', $homework->id)->get();



        return view('homework.show', [
            'homework' => $homework,
            'stdHomework' => $std
        ]);
    }

    public function update(homework $homework)
    {

        $document = request()->validate([
            'document' => 'required|mimes:pdf,docx,png,jpg,svg',
        ]);


        $document['document'] = request()->file('document')->store('documents');

        $std = studenthomeworks::query()->latest()->where('student_id', '=',
            Auth::guard('students')->user()->id)->where('homework_id', '=', $homework->id);

        $std->update($document);

        return back();
    }

}
