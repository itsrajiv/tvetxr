<?php

namespace App\Http\Livewire\UploadServer;

use Livewire\Component;
use App\Models\Course;
use App\Models\CourseFile;
use App\Models\IpfsResources;
use Livewire\WithFileUploads;

class UploadServerFormWire extends Component
{
    use WithFileUploads;

    public $id_coursefile;
    public $name;
    public $file_path;
    public $file_name;
    public $id_course;
    public $file_type;
    public $thumbnail_path;


    public function store()
    {
            $this->validate([
                'file_name' => 'required',
                'id_course' => 'required',
                'file_type' => 'required',
                'file_path' => 'required',
                'thumbnail_path' => 'required'
            ]);
       
            $hash_resource = "";
            $hash_thumbnail = "";


            // Handle File Upload
            if ($this->file_path) {
                // Get filename with the extension
                $filenameWithExt = $this->file_path->getClientOriginalName();
                // Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just ext
                if($this->file_type == "3dfile") {
                    $extension = "glb";
                } else {
                    $extension = $this->file_path->getClientOriginalExtension();
                }
                // Filename to store
                $fileNameToStore3d = $filename . '_' . time() . '.' . $extension;
                // Upload Image
                // $this->file_path->storeAs('public' . DIRECTORY_SEPARATOR . 'coursefile', $fileNameToStore);
            } 
            // else {
            //     $fileNameToStore = 'nofile_' . $this->id_course . '_' . time() . '.jpg';
                
            //     $img_path = public_path() . '' . DIRECTORY_SEPARATOR . 'storage' . DIRECTORY_SEPARATOR . 'coursefile' . DIRECTORY_SEPARATOR . 'nofile_' . $this->id_course . '_' . time() . '.jpg';
               
            //     copy(public_path() . '' . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR . 'noimage.jpg', $img_path);
            // }

            // Thumbnail File Upload
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
                $this->thumbnail_path->storeAs('public' . DIRECTORY_SEPARATOR . 'ipfsthumbnail', $fileNameToStore);
            }
            //  else {
            //     $fileNameToStore = 'nofile_' . $this->id_course . '_' . time() . '.' . $extension;
                
            //     $img_path = public_path() . '' . DIRECTORY_SEPARATOR . 'storage' . DIRECTORY_SEPARATOR . 'ipfsthumbnail' . DIRECTORY_SEPARATOR . 'nofile_' . $this->id_course . '_' . time() . '.jpg';
               
            //     copy(public_path() . '' . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR . 'noimage.jpg', $img_path);
            // }


            //curl file
            if(function_exists('curl_file_create')){
                $pathfile = curl_file_create($this->file_path->getRealPath(), mime_content_type($this->file_path->getRealPath()) , $fileNameToStore3d);
            }
            else
            {
                $pathfile =  '@' . realpath($this->file_path->getRealPath());

                
            }


            $postfields = array('file' => $pathfile);

            $ch = curl_init();

            // $targetURL = "http://161.139.23.150:5001/api/v0/add";
            $targetURL = "https://ipfsapi.tvetxr.ga/api/v0/add";
            curl_setopt($ch, CURLOPT_URL, $targetURL);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_HEADER, 1);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields );

            $result = curl_exec($ch);

            if (curl_errno($ch)) {
                echo 'Error:' . curl_error($ch) ;
            }
            else
            {
                $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
                $header_response = substr($result, 0 ,$header_size);
                $body_response = substr($result,$header_size);
                curl_close($ch);

                $json = json_decode($body_response);

                $hash_resource = $json->Hash;

                
                // dd('success - '.$header_response.' '.$body_response.'');
            }
            
            //curl thumbnail
            if(function_exists('curl_file_create')){
                $pathfile = curl_file_create($this->thumbnail_path->getRealPath(), mime_content_type($this->thumbnail_path->getRealPath()) , $fileNameToStore);
            }
            else
            {
                $pathfile =  '@' . realpath($this->thumbnail_path->getRealPath());
            }

            $postfields = array('file' => $pathfile);

            $ch = curl_init();

            // $targetURL = "http://161.139.23.150:5001/api/v0/add";
            $targetURL = "https://ipfsapi.tvetxr.ga/api/v0/add";
            
            curl_setopt($ch, CURLOPT_URL, $targetURL);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_HEADER, 1);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields );

            $result = curl_exec($ch);

            if (curl_errno($ch)) {
                echo 'Error:' . curl_error($ch) ;
            }
            else
            {
                $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
                $header_response = substr($result, 0 ,$header_size);
                $body_response = substr($result,$header_size);
                curl_close($ch);
                $json = json_decode($body_response);

                $hash_thumbnail = $json->Hash;
            }

            

            $path = '' . DIRECTORY_SEPARATOR . 'storage' . DIRECTORY_SEPARATOR . 'coursefile' . DIRECTORY_SEPARATOR . '' . $fileNameToStore;
            $path2 = '' . DIRECTORY_SEPARATOR . 'storage' . DIRECTORY_SEPARATOR . 'ipfsthumbnail' . DIRECTORY_SEPARATOR . '' . $fileNameToStore;
           
            // if ($hash_resource != null && $hash_resource != "") {

            $add = New IpfsResources;
            $add->resources_name = $this->file_name;  
            
           
            
            $add->link_resources = $hash_resource;
            // $add->resources_path = $path;  
            $add->resources_type = $this->file_type;  

            $add->link_thumbnail = $hash_thumbnail;
            // $add->thumbnail_path = $path2;
            $add->created_by = auth()->user()->email;
            $add->save();

            session()->flash('message', 'New resources successfully added into server');
            // }  

            $this->emit('refreshParent');
    }

    
    public function render()
    {
        if (auth()->user()->role == "admin") {
            $courses = Course::orderBy('created_at','desc')->get();
        } else if(auth()->user()->role == "lecturer") {
            $courses = Course::where('id_lecturer',auth()->user()->id)->orderBy('created_at','desc')->get();
        }

        return view('livewire.upload-server.upload-server-form-wire')->with(compact('courses'));

        // return view('livewire.upload-server.upload-server-wire');
    }
}
