<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
  <!-- Bootstrap core CSS-->
  <link href="{{URL::to('/')}}/admin/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

  <!-- Custom fonts for this template-->
  <link href="{{URL::to('/')}}/admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <!-- Custom styles for this template-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.js"></script> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.css" rel="stylesheet">   


</head>

<body>
  <!-- Navigation-->



     <title>{{ env('APP_NAME') }}</title> 

  

        <div class="card-body">
          
           <a href=""><button class="btn btn-success">Ekspor Excel xls</button></a>
           <a href=""><button class="btn btn-success">Ekspor Excel xlsx</button></a>
           <a href=""><button class="btn btn-success">Ekspor CSV</button></a>

           <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;"
             action=""     class="form-horizontal" method="post"
             enctype="multipart/form-data">

              {!! csrf_field() !!}
               <p style="color: red">{{$errors->first('import_file')}}</p>



                <input type="file" name="import_file" />
             <button class="btn btn-primary">Impor File</button>
              <a  class="btn btn-secondary" href="javascript:history.back()">
                                    {{ __('Back') }}
                                </a>

              </form>



        </div>
     
   

 <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Ilyas Abduttawab</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
   
  <!-- Bootstrap core JavaScript-->
    <script src="{{URL::to('/')}}/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{URL::to('/')}}/admin/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="{{URL::to('/')}}/admin/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->

    
  </div>
</body>

</html>




