<div>
    @push('styles')
    
    @endpush
    {{-- START SECTION - CLASS COURSE FORM  --}}
    @livewire('class-course.class-course-form-wire')
    {{-- END SECTION - CLASS COURSE FORM  --}}

    {{-- START SECTION - DATATABLE CLASS COURSE  --}}
    <div class="row">

            <div class="col-md-12">
    
        
            <div class="card" style="box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;border-radius: 5px;">
                <div class="card-body">
                    <table class="table table-hover" >
                        <thead>
                            <tr>
                                <th>Course Name</th>
                                <th>Class Name</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th style='width:40px'>Action</th>
                            </tr>
                        </thead>
                    
                            @foreach ($classcourses as $classcourse)
                            <tbody>
                                <tr>
                                    <td>{{$classcourse->course ? $classcourse->course->name : ''}}</td>
                                    <td>{{$classcourse->class ? $classcourse->class->name : ''}}</td>
                                    <td>{{date('j F Y', strtotime($classcourse->created_at))}}</td>
                                    <td>{{date('j F Y', strtotime($classcourse->updated_at))}}</td>
                                    <td>
                                        <table style="border:none">
                                            <tr>
                                                <td style="border:none">
                                                    <button type="button" wire:click="selectItem({{$classcourse->id}} , 'delete' )" class="btn btn-sm waves-effect waves-light btn-danger data-delete" data-form="{{$classcourse->id}}"><i class="fas fa-trash-alt"></i></button>
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
       {{-- END SECTION - DATATABLE CLASS COURSE  --}} 


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

