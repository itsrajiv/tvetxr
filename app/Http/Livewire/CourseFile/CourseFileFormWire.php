<?php

namespace App\Http\Livewire\CourseFile;

use ZipArchive;
use App\Models\Course;
use Livewire\Component;
use App\Models\CourseFile;
use Livewire\WithFileUploads;

class CourseFileFormWire extends Component
{
    use WithFileUploads;

    public $id_coursefile;
    public $name;
    public $file_path;
    public $file_name;
    public $id_course;
    public $file_type;
   


    public function store()
    {
        $this->validate([
            'file_name' => 'required',
            'id_course' => 'required',
            'file_type' => 'required',
            'file_path' => 'required'
        ]);

        if ($this->file_type == "3dfile") {

            $this->validate([
                'file_path' => 'required|mimes:gltf,glb,dae,bin,glsl,glTF'
            ]);
          
        } else if($this->file_type == "360file"){

            $this->validate([
                'file_path' => 'required|mimes:mp4'
            ]);
        }
        else if($this->file_type == "webglfile"){

            $this->validate([
                'file_path' => 'required|mimes:zip'
            ]);
        }

            $add = New CourseFile;
            $add->name = $this->file_name;
            $add->id_course = $this->id_course;

            // Handle File Upload
            if ($this->file_path) {
                // Get filename with the extension
                $filenameWithExt = $this->file_path->getClientOriginalName();
                // Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just ext
          
                     $extension = pathinfo($filenameWithExt, PATHINFO_EXTENSION);
             
                // Filename to store
                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
                $folderNameToStore = $filename . '_' . time();

                if($extension == 'zip' ){

                    $file = $this->file_path->temporaryUrl();
                    $newfile = 'tmp_file.zip';

                    if (!copy($file, $newfile)) {
                        echo "failed to copy $file...\n";
                    }

                    $zip = new ZipArchive;
                    // $res = $zip->open($this->file_path->temporaryUrl());
                    $res = $zip->open($newfile);

                    if ($res === TRUE) {
                        try{
                            $zip->extractTo('storage'. DIRECTORY_SEPARATOR . 'coursefile'. DIRECTORY_SEPARATOR . ''.$folderNameToStore . ''. DIRECTORY_SEPARATOR );
                            $zip->close();
                        }
                        catch (Exception $ex){
                            session()->flash('message', 'Proccessing uploaded file error. Please try again.');
                        }
                        
                    } else {
                        session()->flash('message', 'Proccessing uploaded file error. Please try again.');
                    }
                }else{
                    // Upload Image
                    $this->file_path->storeAs('public' . DIRECTORY_SEPARATOR . 'coursefile', ($extension == 'zip'? $folderNameToStore : $fileNameToStore));
                }
                
            } else {
                $fileNameToStore = 'nofile_' . $this->id_course . '_' . time() . '.png';
                
                $img_path = public_path() . '' . DIRECTORY_SEPARATOR . 'storage' . DIRECTORY_SEPARATOR . 'coursefile' . DIRECTORY_SEPARATOR . 'nofile_' . $this->id_course . '_' . time() . '.png';
               
                copy(public_path() . '' . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR . 'noimage.png', $img_path);
            }

            //path
            $path = '' . DIRECTORY_SEPARATOR . 'storage' . DIRECTORY_SEPARATOR . 'coursefile' . DIRECTORY_SEPARATOR . '' . ($extension == 'zip'? $folderNameToStore : $fileNameToStore);
            
            $add->file_type = $this->file_type;
            $add->file_name = ($extension == 'zip'? $folderNameToStore : $fileNameToStore);
            $add->file_path = $path;
            $add->save();
    
            session()->flash('message', 'New resources successfully added into course');
        
       
        $this->emit('refreshParent');

    }

    
    public function render()
    {
        if (auth()->user()->role == "admin") {
            $courses = Course::orderBy('created_at','desc')->get();
        } else if(auth()->user()->role == "lecturer") {
            $courses = Course::where('id_lecturer',auth()->user()->id)->orderBy('created_at','desc')->get();
        }

        return view('livewire.course-file.course-file-form-wire')->with(compact('courses'));

        // return view('livewire.course-file.course-file-form-wire');
    }
}
