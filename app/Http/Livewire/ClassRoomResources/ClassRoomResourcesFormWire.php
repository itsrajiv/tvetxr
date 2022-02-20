<?php

namespace App\Http\Livewire\ClassRoomResources;

use Livewire\Component;
use App\Models\Course;
use App\Models\CourseFile;
use App\Models\IpfsBuy;
use Livewire\WithFileUploads;
use App\Models\IpfsResources;
use App\Models\IpfsUser;

class ClassRoomResourcesFormWire extends Component
{
    use WithFileUploads;

    public $id_coursefile;
    public $name;
    public $file_path;
    public $file_name;
    public $id_course;
    public $file_type;
    public $id_id;
    public $id_filename;


    public function store()
    {
            $this->validate([
                'file_name' => 'required',
                'id_course' => 'required'
            ]);
            

            $add = New IpfsBuy;
            $add->id_ipfs_user = $this->file_name;
            $add->id_user = auth()->user()->id;
            $add->id_courses = $this->id_course;
          
            $add->save();
    
            session()->flash('message', 'New resources successfully added into course');
        
       
        $this->emit('refreshParent');

    }

    
    public function render()
    {
        if (auth()->user()->role == "admin") {
            $courses = Course::orderBy('created_at','desc')->get();
            $ipfsusers = IpfsUser::orderBy('created_at','desc')->get();
        } else if(auth()->user()->role == "lecturer") {
            // $courses = Course::where('id_lecturer' , '=' , auth()->user()->id)->get();
            $courses = Course::where('id_lecturer',auth()->user()->id)->orderBy('created_at','desc')->get();
            $ipfsusers = IpfsUser::where('id_user' , '=' , auth()->user()->id)->orderBy('created_at','desc')->get();
            // $ipfsusers = Course::where('id_user',auth()->user()->id)->get();
            // $courses = Course::where('id_lecturer',auth()->user()->id)->get();
            // $ipfsusers = IpfsUser::where('id_lecturer',auth()->user()->id)->get();
        }

        // return view('livewire.class-room-resources.class-room-resources-form-wire')->with(compact('courses'));
        return view('livewire.class-room-resources.class-room-resources-form-wire')->with(compact('courses', 'ipfsusers'));

        // return view('livewire.course-file.course-file-form-wire');
    }
}
