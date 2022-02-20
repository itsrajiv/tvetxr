<?php

namespace App\Http\Livewire\ClassRoomResources;

use Livewire\Component;
use App\Models\CourseFile;
use App\Models\IpfsBuy;

class ClassRoomResourcesWire extends Component
{

    //public $id_coursefile;
    public $action;
    public $id_ipfsbuy;

    protected $listeners = [
        'refreshParent' => '$refresh',
        'delete'
    ];

  
    public function selectItem($modelid , $action)
    {
        $this->id_ipfsbuy = $modelid;
        $this->action = $action;  
    }

    public function delete()
    {
        $ipfsbuy = IpfsBuy::findOrFail($this->id_ipfsbuy);
        
        $ipfsbuy->delete();

    }

    public function render()
    {
        if (auth()->user()->role == "admin") {
            $ipfsbuys = IpfsBuy::orderBy('created_at','desc')->get();
        } else if(auth()->user()->role == "lecturer"){
            $ipfsbuys = IpfsBuy::where('id_user' , '=' , auth()->user()->id)->orderBy('created_at','desc')->get();
        }

        return view('livewire.class-room-resources.class-room-resources-wire')->with(compact('ipfsbuys'));

    }
}