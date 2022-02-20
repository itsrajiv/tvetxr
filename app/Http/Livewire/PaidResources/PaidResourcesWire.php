<?php

namespace App\Http\Livewire\PaidResources;

use App\Models\Course;
use Livewire\Component;
use App\Models\IpfsUser;
use App\Models\CourseFile;
use App\Models\IpfsResources;


class PaidResourcesWire extends Component
{

    public $id_coursefile;
    public $action;
    public $store;
    public $resourcesfile;
    public $thumbnail_path;
    public $resources_path;

    public $name = null;



    protected $listeners = [
        'refreshParent' => '$refresh',
        'buy',
        'postSearch',
        
    ];

  
    public function postSearch($name){

     $this->name = $name;

     $this->emit('refreshParent');

        
    }

//     public function getDownload($link_thumbnail){
//         //Suppose profile.docx file is stored under project/public/download/profile.docx
//         //  $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
//         // $headers = array(
//         //       'Content-Type: application/octet-stream',
//         //     );
//         //     return (new Response($file, 200))
//         //     ->header('Content-Type', 'image/jpeg');

//             // Get thumbnailname with the extension
//             // $filenameWithExt = $this->link_thumbnail->getClientOriginalName();
//             // $extension = $this->link_thumbnail->getClientOriginalExtension();
//             // // $target_path = $filenameWithExt;
//             // // Get just thumbnailname
//             // $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
//             // // thumbnailname to store
//             // $fileNameToStore = $filename . '_' . time() . '.' . $extension;
//             // // Upload Image
//             // $this->link_thumbnail->storeAs('public' . DIRECTORY_SEPARATOR . 'ipfsthumbnail', $fileNameToStore);
//             return response()->download($link_thumbnail);
// }


    // public function selectItem($resourcesfile , $action)
    // {
    //     $this->course = IpfsResources::find($resourcesfile);
    //     $this->action = $action;

    //     if($action == "showCourseFileContent")
    //     {
    //         $this->dispatchBrowserEvent('openModal_showCourseContent');
    //     }
    // }

    // public function buy()
    // {
    //     $this->resources_path->storeAs('public' . DIRECTORY_SEPARATOR . 'ipfsthumbnail', $fileNameToStore);
    // }

    // public function buy()
    // {
    //     $resourcesfile = IpfsUser::find($this->id);

    //     $resourcesfile->buy();

    // }

    public function buyResources($id_ipfsresources)
    {
        // dd($id_ipfsresources);
        $add = New IpfsUser();
        // $add->id_user = $this->file_name;     
        $add->id_ipfsresource = $id_ipfsresources;
        $add->id_user = auth()->user()->id;
        $add->save();
    }


    public function render()
    {

        if ($this->name != null) {
            if (auth()->user()->role == "admin") {
                $resourcesfiles = IpfsResources::where('resources_name' , 'like' , '%'.$this->name.'%')->orderBy('created_at','desc')->get();
            } else if(auth()->user()->role == "lecturer"){
                $resourcesfiles = IpfsResources::where('resources_name' , 'like' , '%'.$this->name.'%')->orderBy('created_at','desc')->get();
                // $resourcesfiles = IpfsResources::whereHas('course' , function ($query) {
                //     $query->where('id_lecturer' , auth()->user()->id);
                // })->where('resources_name' , 'like' , '%'.$this->name.'%')->get();
            }
        } else if($this->name == null || $this->name == ""){
            if (auth()->user()->role == "admin") {
                $resourcesfiles = IpfsResources::orderBy('created_at','desc')->get();
            } else if(auth()->user()->role == "lecturer"){
                $resourcesfiles = IpfsResources::where('resources_name' , 'like' , '%'.$this->name.'%')->orderBy('created_at','desc')->get();
                // $resourcesfiles = IpfsResources::whereHas('course' , function ($query) {
                //     $query->where('id_lecturer' , auth()->user()->id);
                // })->get();
            }
        }
        else{
            if (auth()->user()->role == "admin") {
                $resourcesfiles = IpfsResources::orderBy('created_at','desc')->get();
            } else if(auth()->user()->role == "lecturer"){
                $resourcesfiles = IpfsResources::where('resources_name' , 'like' , '%'.$this->name.'%')->orderBy('created_at','desc')->get();
                // $resourcesfiles = IpfsResources::whereHas('course' , function ($query) {
                //     $query->where('id_lecturer' , auth()->user()->id);
                // })->get();
            }
        }

        return view('livewire.paid-resources.paid-resources-wire')->with(compact('resourcesfiles'));

    }
}