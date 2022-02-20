<?php

namespace App\Http\Livewire\CourseFile;

use Livewire\Component;
use App\Models\CourseFile;
use App\Models\IpfsResources;

class CourseFileWire extends Component
{

    public $id_coursefile;
    public $action;
    public $ipfsresource;


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

    // public function getLatestRecord()
    // {
    //     $latests = \DB::table('course_file')->orderBy('created_at','desc')->get();

    //     dd($latests);
    // }

    public function render()
    {
        if (auth()->user()->role == "admin") {
            $coursefiles = CourseFile::orderBy('created_at','desc')->get();
        } else if(auth()->user()->role == "lecturer"){
            $coursefiles = CourseFile::whereHas('course' , function ($query) {      
                $query->where('id_lecturer' , auth()->user()->id);
            })->orderBy('created_at','desc')->get();
        }

        // $coursefiles = CourseFile::whereHas('course' , function ($query) {
        //     $query->where('id_lecturer' , auth()->user()->id); 
        //     $query->orderBy('created_at','desc');
        //     dd(query);
        // }) ->get() ;
        // $auth = auth()->user()->id;
        // $coursefiles = CourseFile::orderBy('created_at', 'desc')
        //                         ->where('id_lecturer','=',$auth)
        //                         ->get();
        // $auth = auth()->user()->id;
        // $coursefiles = CourseFile::whereHas('course', function($query){
        // $query->orderBy('created_at', 'desc');
        // $query->where('name', '=' , 'Bahasa Inggeris');
        // $query->where('id_lecturer' ,'=', auth()->user()->id);

        return view('livewire.course-file.course-file-wire')->with(compact('coursefiles'));

        // return view('livewire.course-file.course-file-wire');
    }
}
