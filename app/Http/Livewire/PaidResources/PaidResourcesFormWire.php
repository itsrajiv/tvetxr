<?php

namespace App\Http\Livewire\PaidResources;

use Illuminate\Http\Request;
use Livewire\Component;
use App\Models\Course;
use App\Models\CourseFile;
use App\Models\IpfsResources;
use Livewire\WithFileUploads;

class PaidResourcesFormWire extends Component
{
    use WithFileUploads;

    public $name;
   

    // public function index()
    // {
    //     return view('paid-resources-form-wire');
    // }
   
    public function search()
    {
  
        $this->emit('postSearch', $this->name);
        session()->flash('message', 'Your searching completed');
        // $this->emit('refreshParent');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function autocomplete(Request $request)
    // {
    //     $res = IpfsResources::select("name")
    //             ->where("name","LIKE","%{$request->term}%")
    //             ->get();
    
    //     return response()->json($res);
    // }


    // public function store()
    // {
    //         $this->validate([
    //             'resources_name' => 'required',
    //         ]);

    //         // $add = New IPFSResources();
    //         // $add->name = $this->resources_name;
    //         // $add->id_course = $this->id_course;

    //         // Handle File Upload
    //         if ($this->resources_path) {
    //             // Get filename with the extension
    //             $filenameWithExt = $this->resources_path->getClientOriginalName();
    //             // Get just filename
    //             $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
    //             // Get just ext
    //             if($this->resources_type == "3dfile") {
    //                 $extension = "glb";
    //             } else {
    //                 $extension = $this->resources_path->getClientOriginalExtension();
    //             }
    //             // Filename to store
    //             $fileNameToStore = $filename . '_' . time() . '.' . $extension;
    //             // Upload Image
    //             $this->resources_path->storeAs('public' . DIRECTORY_SEPARATOR . 'resourcesfile', $fileNameToStore);
    //         } else {
    //             $fileNameToStore = 'nofile_' . $this->id_course . '_' . time() . '.png';
                
    //             $img_path = public_path() . '' . DIRECTORY_SEPARATOR . 'storage' . DIRECTORY_SEPARATOR . 'resourcesfile' . DIRECTORY_SEPARATOR . 'nofile_' . $this->id_course . '_' . time() . '.png';
               
    //             copy(public_path() . '' . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR . 'noimage.png', $img_path);
    //         }

    //         //path
    //         $path = '' . DIRECTORY_SEPARATOR . 'storage' . DIRECTORY_SEPARATOR . 'resourcesfile' . DIRECTORY_SEPARATOR . '' . $fileNameToStore;
            
    //         // $add->resources_type = $this->resources_type;
    //         // $add->resources_name = $fileNameToStore;
    //         // $add->resources_path = $path;
    //         // $add->save();
    
    //         session()->flash('message', 'New resources successfully added into course');
        
       
    //     $this->emit('refreshParent');

    // }

    // public function search(Request $request)
    // {
    //     //get the general information about the website
    //     $website = General::query()->firstOrFail();

    //     $key = trim($request->get('q'));

    //     $posts = Post::query()
    //         ->where('title', 'like', "%{$key}%")
    //         ->orWhere('content', 'like', "%{$key}%")
    //         ->orderBy('created_at', 'desc')
    //         ->get();

    //     //get all the categories
    //     $categories = Category::all();

    //     //get all the tags
    //     $tags = Tag::all();

    //     //get the recent 5 posts
    //     $recent_posts = Post::query()
    //         ->where('is_published', true)
    //         ->orderBy('created_at', 'desc')
    //         ->take(5)
    //         ->get();

    //     return view('search', [
    //         'website' => $website,
    //         'key' => $key,
    //         'posts' => $posts,
    //         'categories' => $categories,
    //         'tags' => $tags,
    //         'recent_posts' => $recent_posts
    //     ]);
    // }

    public function render()
    {
        if (auth()->user()->role == "admin") {
            $courses = Course::all();
        } else if(auth()->user()->role == "lecturer") {
            $courses = Course::where('id_lecturer',auth()->user()->id)->get();
        }
        
        return view('livewire.paid-resources.paid-resources-form-wire')->with(compact('courses'));

        // return view('livewire.course-file.course-file-form-wire');
    }
}
