<div>
    {{-- START SECTION - COURSE FILE FORM  --}}
    @livewire('paid-resources.paid-resources-form-wire')
    {{-- END SECTION - COURSE FILE FORM  --}}

    {{-- START SECTION - DATATABLE COURSE FILE  --}}
    <div class="row">
        <div class="col-md-12">
            <div class="card" style="box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;border-radius: 5px;">
                <div class="card-body" style="overflow:scroll">
                    <table class="table table-hover" >
                        <thead>
                            <tr>
                                {{-- <th>Course Name</th> --}}
                                <th>Resource Name</th>
                                <th class="text-center">Resource File</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Created By</th>
                                <th class='text-center' style='width:40px'>Get</th>
                            </tr>
                        </thead>
                     
                            @foreach ($resourcesfiles as $resourcesfile)
                            <tbody>
                                <tr>
                                    {{-- <td>{{$resourcesfile->course ? $resourcesfile->course->name : ''}}</td> --}}
                                    <td>{{$resourcesfile->resources_name}}</td>
                                    <td class="text-center">
                                        <a href="{{URL::to('https://ipfs.tvetxr.ga/ipfs/'.$resourcesfile->link_thumbnail.'')}}" target="_blank" class="btn btn-success">Preview Thumbnail</a>
                                       {{-- Preview Thumbnail</a> class="btn btn-success" --}}
                                        <br>
                                        <br>
                                        <img src="{{'https://ipfs.tvetxr.ga/ipfs/'.$resourcesfile->link_thumbnail.''}}" alt="Image Preview" style="width:480px;height:200px;">
                                         {{-- ?php getDownload($link_thumbnail); ?> --}}
                                        <i>{{$resourcesfile->resources_name}}</i>
                                    </td>
                                    <td>{{date('j F Y', strtotime($resourcesfile->created_at))}}</td>
                                    <td>{{date('j F Y', strtotime($resourcesfile->updated_at))}}</td>
                                    <td>{{($resourcesfile->created_by)}}</td>
                                    <td>
                                        <table style="border:none">
                                            <tr>
                                                <td class="text-center" style="border:none">  
                                                    {{-- <button wire:click="buyResources({{ $resourcesfile->id }})" class="btn btn-sm waves-effect waves-light btn-info bt" style="width:70px; height:30px;"><i class="fas fa-shopping-cart" style="font-size:18px;">Buy</i></button> --}}
                                                    <button type="button" wire:click="buyResources({{ $resourcesfile->id }})" class="btn btn-sm waves-effect waves-light btn-info data-buy"  style="width:70px; height:30px;"><i class="fas fa-shopping-cart" style="font-size:18px;">Get</i></button>
                                                    {{-- <button type="button" wire:click="selectItem({{$coursefile->id}} , 'delete' )" class="btn btn-sm waves-effect waves-light btn-danger data-delete" data-form="{{$coursefile->id}}"><i class="fas fa-trash-alt"></i></button> --}}
                                                    {{-- <a href='http://161.139.23.150:8080/ipfs/{{$resourcesfile->link_resources}}?filename={{$resourcesfile->resources_name}}.glb' target="_blank"  class="btn btn-sm waves-effect waves-light btn-info bt" style="width:70px; height:30px;" data-form="{{$resourcesfile->id}}"><i class="fas fa-shopping-cart" style="font-size:18px;">Buy</i></button> --}}
                                                    {{-- <a href="{{URL::to('http://161.139.23.150:8080/ipfs/'.$resourcesfile->link_resources.'?filename='.$resourcesfile->resources_name.'.glb')}}" target="_blank"  class="btn btn-sm waves-effect waves-light btn-info" style="width:70px; height:30px;" data-form="{{$resourcesfile->id}}"><i class="fas fa-shopping-cart" style="font-size:18px;">Buy</i></button> --}}
                                                    {{-- <button class="btn btn-default">Right <i class="fas fa-magic ml-1"></i></button> --}}
                                                    {{-- data-form="{{$resourcesfile->id}}" --}}
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


    $(document).on("click", ".data-buy", function (e) 
        {
            // e.preventDefault();
            // swal({
            // // title: "Buy this file ?",
            // // text: "You sure want to buy ?",
            // // icon: "warning",
            // // buttons: true,
            // // dangerMode: true,
            // })
            // .then((willBuy) => {
            //     // Livewire.emit('buyResources')
            // if (willBuy) {
            //     // window.alert("This is an alert message.") ;
            //     e.preventDefault();
                // window.alert("This is an alert message.") ;
                window.alert("Your newly chosen resources has successfully added into your account.");
            //     Livewire.emit('buyResources($resourcesfile->id)')
            // } 
            // });
        });

  })
</script>
{{-- END SECTION - SCRIPT FOR DELETE BUTTON  --}}

@endpush

</div>

