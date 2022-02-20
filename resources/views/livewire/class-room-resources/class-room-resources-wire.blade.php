<div>
    {{-- START SECTION - COURSE FILE FORM  --}}
    @livewire('class-room-resources.class-room-resources-form-wire')
    {{-- END SECTION - COURSE FILE FORM  --}}

    {{-- START SECTION - DATATABLE COURSE FILE  --}}
    <div class="row">
        <div class="col-md-12">
            <div class="card" style="box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;border-radius: 5px;">
                <div class="card-body">
                    <table class="table table-hover" >
                        <thead>
                            <tr>
                                <th>Course Name</th>
                                <th>Resource Name</th>
                                <th class="text-center">Resource File</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th style='width:40px'>Action</th>
                            </tr>
                        </thead>
                    
                            @foreach ($ipfsbuys as $ipfsbuy)
                            <tbody>
                                <tr>
                                    
                                    <td>{{$ipfsbuy->course ? $ipfsbuy->course->name : ''}}</td>
                                    <td>{{$ipfsbuy->ipfsuser ? ($ipfsbuy->ipfsuser->ipfsresource ? $ipfsbuy->ipfsuser->ipfsresource->resources_name : '' ) : ''}}</td>
                                                <td class="text-center">
                                                    @if ($ipfsbuy->ipfsuser->ipfsresource->resources_type == "360file")
                                                        <a href="{{URL::to('/video_360_ipfs/'.$ipfsbuy->ipfsuser->ipfsresource->id.'')}}" target="_blank" class="btn btn-success">View 360° Video</a>    
                                                    @elseif ($ipfsbuy->ipfsuser->ipfsresource->resources_type == "3dfile")
                                                        <a href="{{URL::to('/3d_model_view_ipfs/'.$ipfsbuy->ipfsuser->ipfsresource->id.'')}}" target="_blank" class="btn btn-success">View in VR</a>
                                                        <a href="{{URL::to('/ar_view_ipfs/'.$ipfsbuy->ipfsuser->ipfsresource->id.'')}}" target="_blank" class="btn btn-success">View in AR</a>
                                                    @else
                                                        <a href="{{URL::to(''.$ipfsbuy->ipfsuser->ipfsresource->link_resources.'')}}" target="_blank" class="btn btn-success">View File</a> 
                                                    @endif
                                                    {{-- https://ipfs.io/ipfs/QmZzQp6QV9rJVK1y2K18pjFeVCctaDjAo1JYV5utgFRRHG?filename=2D_Waterfront.mp4 --}}
                                                    {{-- <a href='http://161.139.23.150:8080/ipfs/{{$ipfsbuy->ipfsuser->ipfsresource->link_resources}}?filename={{$ipfsbuy->ipfsuser->ipfsresource->resources_name}}.mp4'--}}
                                                    <br>
                                                    <small>{{$ipfsbuy->ipfsuser->ipfsresource->resources_name}}</small>
                                    </td>
                                    <td>{{date('j F Y', strtotime($ipfsbuy->created_at))}}</td>
                                    <td>{{date('j F Y', strtotime($ipfsbuy->updated_at))}}</td>
                                    <td>
                                        <table style="border:none">
                                            <tr>
                                                <td style="border:none">
                                                    {{-- <button type="button" wire:click="selectItem({{$ipfsbuy->ipfsuser->ipfsresource->id}} , 'delete' )" class="btn btn-sm waves-effect waves-light btn-danger data-delete" data-form="{{$ipfsbuy->ipfsuser->ipfsresource->id}}"><i class="fas fa-trash-alt"></i></button> --}}
                                                    <button type="button" wire:click="selectItem({{$ipfsbuy->id}} , 'delete' )" class="btn btn-sm waves-effect waves-light btn-danger data-delete" data-form="{{$ipfsbuy->id}}"><i class="fas fa-trash-alt"></i></button>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                    
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
      {{-- END SECTION - DATATABLE COURSE FILE  --}}        


      @push('scripts')

      {{-- START SECTION - SCRIPT FOR DELETE BUTTON  --}}
      <script>
          
        document.addEventListener('livewire:load', function () {
      
      
          $(document).on("click", ".data-delete", function (e) 
              {
                  e.preventDefault();
                  swal({
                  title: "Are you sure?",
                  text: "Once deleted, you will not be able to recover!",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                  })
                  .then((willDelete) => {
                  if (willDelete) {
                      e.preventDefault();
                      Livewire.emit('delete')
                  } 
                  });
              });
      
        })
      </script>
      {{-- END SECTION - SCRIPT FOR DELETE BUTTON  --}}
      
      @endpush

</div>

