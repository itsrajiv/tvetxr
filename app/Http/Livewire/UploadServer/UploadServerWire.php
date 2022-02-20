<?php

namespace App\Http\Livewire\UploadServer;

use Livewire\Component;
use App\Models\CourseFile;

class UploadServerWire extends Component
{

    public $id_coursefile;
    public $action;


    protected $listeners = [
        'refreshParent' => '$refresh',
        'delete'
    ];

  
    public function selectItem($modelid , $action)
    {
        $this->id_coursefile = $modelid;
        $this->action = $action;  
    }

    public function delete()
    {
        $coursefile = CourseFile::find($this->id_coursefile);

        $coursefile->delete();

    }

    public function render()
    {
        if (auth()->user()->role == "admin") {
            $coursefiles = CourseFile::all();
        } else if(auth()->user()->role == "lecturer"){
            $coursefiles = CourseFile::whereHas('course' , function ($query) {
                $query->where('id_lecturer' , auth()->user()->id);
            })->get();
        }

        return view('livewire.upload-server.upload-server-wire')->with(compact('coursefiles'));

        // return view('livewire.upload-server.upload-server-wire');
    }
}