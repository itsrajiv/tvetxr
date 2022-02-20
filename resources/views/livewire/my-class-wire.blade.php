<div>
{{-- START SECTION - MY CLASS --}}
@if (auth()->user()->currentClass)

    <div class="row el-element-overlay">
        <div class="col-md-12 text-center">
            <h1 class="card-title">{{auth()->user()->currentClass ? auth()->user()->currentClass->name : 'Not In Any Class'}}</h1>
            <h6 class="card-subtitle m-b-20 text-muted">View all resources available for your class</h6>
        </div>
        
        @foreach ($classcourses as $classcourse)
            <div class="col-lg-3 col-md-6" style="padding-bottom: 30px;">
                <a wire:click="selectItem({{$classcourse->course->id}} , 'showCourseContent')">
                <div class="card zoom2" style="box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;border-radius: 5px;">
                    <div class="el-card-item">
                
                            {{-- <div class="el-card-avatar el-overlay-1"> 
                                <img src="https://ui-avatars.com/api/?size=512&name={{$classcourse->course ? $classcourse->course->name : 'Undefined'}}&color={{mt_rand( 0, 0xFFFFF )}}" alt="user" style="cursor: pointer;"/>
                                
                            </div> --}}
                    
                            <div class="el-card-avatar el-overlay-1"> 
                                {{-- <img src="{{ URL::to('/assets/images/Course2.jpg') }}" alt="user" style="cursor: pointer;"/>   --}}
                                {{-- <img src="{{ asset(''.$classcourse->thumbnail_path.'') }}" alt="user" style="cursor: pointer;"/>  --}}
                                <img src="{{''.$classcourse->course->thumbnail_path.''}}" alt="Image Preview" style="width:480px;height:200px;"> 
                                {{-- <a href="{{URL::to(''.$classcourse->thumbnail_path.'')}}" target="_blank" class="btn btn-success"></a>  --}}
                            </div>

                        <div class="el-card-content" style="cursor: pointer;">
                        <h3 class="box-title">{{$classcourse->course ? $classcourse->course->name : 'Undefined'}}</h3> 
                        <small class="text-muted">{{$classcourse->course ? ($classcourse->course->lecturer ? $classcourse->course->lecturer->name : 'undefined') : 'undefined'}}</small>
                        <br/> </div>
                    </div>
                </div>
            </a>
            </div>
        @endforeach
    </div>

@else
    
    <!-- Tell user if no data in My Class -->
    <table style="width:100%;height:80vh">
        <tr>
            <td>
                <div class="row">
                    <div class="jumbotron jumbotron-fluid" style=" margin: auto;width: 50%;">
                        <div class="container">
                            <h2 class="display-3 text-center">You`re currently not in any class.</h2>
                            <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
    </table>

@endif


<!-- Modal - Show My Class Data When User Click on Subject -->
<div id="showCourseContentModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="showCourseContentModal" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header text-center">
                <table style="border:none;width:100%">
                    <tr>
                        <td style="border:none;width:95%"><h3 class="modal-title font-weight-bold" id="myLargeModalLabel">{{$course ? $course->name : ''}}</h3></td>
                        <td style="border:none;width:5%"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button></td>
                    </tr>
                </table>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card" style="box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;border-radius: 5px;">
                            <div class="card-body" style="overflow:scroll">
                                <table class="table table-hover" >
                                    <thead>
                                        <tr>
                                            <th>Resource Name</th>
                                            <th class="text-center">Resource File</th>
                                            <th>Created At</th>
                                            <th>Updated At</th>
                                        </tr>
                                    </thead>
                                    @if ($course)
                                        {{-- @foreach ($course->coursefile as $coursefile) --}}
                                        @foreach($course->coursefile->sortByDesc('created_at') as $coursefile)
                                      
                                        <tbody>
                                            <tr>
                                                <td>{{$coursefile->name}}</td>
                                                <td class="text-center">
                                                    @if ($coursefile->file_type == "360file")
                                                        <a href="{{URL::to('/video_360/'.$coursefile->id.'')}}" target="_blank" class="btn btn-success">View 360° Video</a>    
                                                    @elseif ($coursefile->file_type == "3dfile")
                                                        <a href="{{URL::to('/3d_model_view/'.$coursefile->id.'')}}" target="_blank" class="btn btn-success">View in VR</a>
                                                        <a href="{{URL::to('/ar_view/'.$coursefile->id.'')}}" target="_blank" class="btn btn-success">View in AR</a>
                                                    @elseif ($coursefile->file_type == "webglfile")
                                                        <a href="{{URL::to(''.$coursefile->file_path.'')}}" target="_blank" class="btn btn-success">Start Now</a> 
                                                    @else
                                                        <a href="{{URL::to(''.$coursefile->file_path.'')}}" target="_blank" class="btn btn-success">Download/View File</a> 
                                                    @endif
                                                    
                                                    <br>
                                                    <small>{{$coursefile->file_name}}</small>
                                                </td>
                                                <td>{{date('j F Y', strtotime($coursefile->created_at))}}</td>
                                                <td>{{date('j F Y', strtotime($coursefile->updated_at))}}</td>
                                            
                                            </tr>
                                        </tbody>
                                        
                                        @endforeach
                                    @endif
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<!-- Loading Animation When Click on Subject -->
<div wire:loading style="position: absolute;top: 0%;width: 100%;height: 100%;z-index: 9999;background-color:#d2d6dc66">
    <table style="width:100%;height:100%">
        <tr>
            <td style="text-align:center;vertical-align:middle">
                <i class="mdi mdi-loading mdi-spin mdi-48px"></i>
            </td>
        </tr>
    </table>
</div>

@push('scripts')

<script>
  document.addEventListener('livewire:load', function () {

        window.addEventListener('openModal_showCourseContent', event => {
            $('#showCourseContentModal').modal('show')
        })

  })
</script>

@endpush
{{-- END SECTION - MY CLASS --}}
</div>




