
{{-- <html>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
  
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script> --}}

{{-- <head>
    <title>List of Paid File</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
 
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script type="text/javascript">
     var siteUrl = "{{url('/')}}";
  </script>
</head> --}}
{{-- <body> --}}
 
<div>
 
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      <h2>List of IPFS File by TVETXR</h2>
    </div>
    <form wire:submit.prevent="search">
        
        <div class="card-body">
        <label for="exampleInputEmail1">Search File By Their Name</label>
            <div class="input-group">
            
            <input type="text" id="name" wire:model="name" name="name" class="form-control"  placeholder="Please enter file name here...">
            <span class="input-group-btn">
                <button class="btn btn-secondary" style='height:38px' type="submit"><i class="fas fa-search"></i></button>
            </span>
            </div>
            <br>
            <div class="col-md-12 text-right"  style="color:blue; font-weight:bolder">
                @if (session()->has('message'))
                    {{ session('message') }}
                @endif
            <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                Search
            </button>
        </div>
        </div>
        
    </form>
    </div>
  </div>
   
 
  {{-- <script src="{{ asset('auto.js') }}"></script> --}}
{{-- </body> --}}
 
{{-- </html> --}}
 