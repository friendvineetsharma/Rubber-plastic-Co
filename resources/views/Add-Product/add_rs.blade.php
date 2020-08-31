<!DOCTYPE html>
<html>
 <head>
  <title>Add Service</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
   }
  </style>
 </head>
 <body>
  <br /><br /><br /><br /><br /><br />
  <div class="container box">
   <h3 align="center">Add Service</h3><br />

   @if(isset(Auth::user()->email))

   @if ($message = Session::get('error'))
   <div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
   </div>
   @endif

   @if (count($errors) > 0)
    <div class="alert alert-danger">
     <ul>
     @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
     @endforeach
     </ul>
    </div>
   @endif


   <form method="post" action="{{ url('/rs_add') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
     <label>Enter Rubbersheet-name</label>
     <input type="text" name="rsname" class="form-control" />
    </div>
    <div class="form-group">
     <label>Enter Price</label>
     <input type="number" name="rsprice" class="form-control" />
    </div>
    <div class="form-group">
     <label>Enter Category</label>
     <input type="text" name="rscategory" class="form-control" />
    </div>
    <div class="form-group">
     <label>Enter Introduction</label>
     <textarea name="rsintro" class="form-control"></textarea>
    </div>
    <div class="form-group">
     <label>Enter Description</label>
     <textarea name="rsdescription" class="form-control"></textarea>
    </div>
    <div class="form-group">
     <label>Enter Width</label>
     <input type="text" name="rswidth" class="form-control" />
    </div>
    <div class="form-group">
     <label>Enter Lenght</label>
     <input type="text" name="rslenght" class="form-control" />
    </div>
    <div class="form-group">
     <label>Enter Thickness</label>
     <input type="text" name="rsthickness" class="form-control" />
    </div>
    <div class="form-group">
     <label>Enter Reinforcement</label>
     <input type="text" name="rsreinforcement" class="form-control" />
    </div>
    <div class="form-group">
     <label>Enter Colour</label>
     <input type="text" name="rscolor" class="form-control" />
    </div>
    <div class="form-group">
     <label>Enter Application</label>
     <input type="text" name="rsapplication" class="form-control" />
    </div>
    <div class="form-group">
     <label>Enter Specific Gravity</label>
     <input type="text" name="rsgravity" class="form-control" />
    </div>
    <div class="form-group">
     <label>Enter Hardness</label>
     <input type="text" name="rshardness" class="form-control" />
    </div>
    <div class="form-group">
     <label>Enter Tensile Strength</label>
     <input type="text" name="rstensile" class="form-control" />
    </div>
    <div class="form-group">
     <label>Enter Elongation at break</label>
     <input type="text" name="rselongation" class="form-control" />
    </div>
    <div class="form-group">
     <label>Enter Compression Set</label>
     <input type="text" name="rscompression" class="form-control" />
    </div>
    <div class="form-group">
     <label>Enter Service Temperature Range</label>
     <input type="text" name="rstemp" class="form-control" />
    </div>
    <div class="form-group">
     <label>Enter Image1</label>
     <input type="file" name="rsimg1" class="form-control" />
    </div>
    <div class="form-group">
     <label>Enter Image2</label>
     <input type="file" name="rsimg2" class="form-control" />
    </div>
    <div class="form-group">
     <label>Enter Image3</label>
     <input type="file" name="rsimg3" class="form-control" />
    </div>
    <div class="form-group">
     <input type="submit" name="login" class="btn btn-primary" value="Submit" />
    </div>
   </form>
  </div>
  <br /><br /><br /><br /><br /><br />
 @else
  <script>window.location="/main";</script>
 @endif
 </body>
</html>
