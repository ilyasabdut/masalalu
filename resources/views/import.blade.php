@extends('layouts.app')

@section('content')
  <!-- Navigation-->
     <title>{{ env('APP_NAME') }}</title> 
      <div class="content-wrapper">
    <div class="container-fluid">
    
      
    <div class="row justify-content-center">
      <div class="col-sm-8">

         @csrf

                            @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif

                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif


     <div class="card">
        <div class="card-header">
          Import/Export
        </div>
        <div class="card-body">
          
           <a href="{{ URL::to('/exportmenu/') }}"><button class="btn btn-success">Export Excel xlsx</button></a>

           <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;"
             action="/importmenu"     class="form-horizontal" method="post"
             enctype="multipart/form-data">

              {!! csrf_field() !!}
               <p style="color: red">{{$errors->first('file')}}</p>

                <input type="file" name="file" />
             <button class="btn btn-primary">Import File</button>
              <a  class="btn btn-secondary" href="javascript:history.back()">
                                    {{ __('Back') }}
                                </a>

              </form>
        </div>
      </div>
    </div>
  </div>

</div>
</div>

 

@endsection


