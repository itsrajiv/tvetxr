<?php

namespace App\Http\Livewire\Course;

use Livewire\Component;
use App\Models\User;
use App\Models\Course;
use Livewire\WithFileUploads;

class CourseFormWire extends Component
{
    use WithFileUploads;
    
    public $name;
    public $id_lecturer;
    public $thumbnail_path;
    public $model_id;

    protected $listeners = [
        'getModelId'
    ];

    public function updatedThumbnailPath()
    {
        $this->validate([
            'thumbnail_path' => 'image|max:4024', // 1MB Max
        ]);
    }

    public function getModelId($model_id)
    {
        $course = Course::find($model_id);

        $this->model_id = $course->id;
        $this->name = $course->name;
        $this->id_lecturer = $course->id_lecturer;
        $this->thumbnail_path = $course->thumbnail_path;

    }

    public function store()
    {
        
        if ($this->thumbnail_path) {
            // Get thumbnailname with the extension
            $filenameWithExt = $this->thumbnail_path->getClientOriginalName();
            $extension = $this->thumbnail_path->getClientOriginalExtension();
            // $target_path = $filenameWithExt;
            // Get just thumbnailname
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // thumbnailname to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            // Upload Image
            $this->thumbnail_path->storeAs('public' . DIRECTORY_SEPARATOR . 'coursethumbnail', $fileNameToStore);
        }

        if($this->model_id)
        {
            $this->validate([
                'name' => 'required|string|max:255',
            ]);
            
            $update = Course::find($this->model_id);
            $update->name = $this->name;
            $update->id_lecturer = $this->id_lecturer;
            $update->thumbnail_path = $this->thumbnail_path;
            $update->save();
    
            session()->flash('message', 'Course successfully updated');
        }
        else
        {
            $this->validate([
                'name' => 'required|string|max:255',
                'id_lecturer' => 'required',
                'thumbnail_path' => 'required|image',
            ]);

            $path = '' . DIRECTORY_SEPARATOR . 'storage' . DIRECTORY_SEPARATOR . 'coursethumbnail' . DIRECTORY_SEPARATOR . '' . $fileNameToStore;

            $add = New Course;
            $add->name = $this->name;
            $add->id_lecturer = $this->id_lecturer;
            $add->thumbnail_path = $path;
            $add->save();
    
            session()->flash('message', 'New course successfully added');
        }

        

        $this->emit('refreshParent');


    }

    public function render()
    {
        $lecturers = User::where('role' , 'lecturer')->orderBy('created_at','desc')->get();
        return view('livewire.course.course-form-wire')->with(compact('lecturers'));

        // return view('livewire.course.course-form-wire');
    }
}
