<!DOCTYPE html>
<html>

<head>
<title>Upload file</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"</script>

   
<script src="http://malsup.github.com/jquery.form.js"></script> 
    
</head>
<body>
                <form action="{{url('')}}" id="formid" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="file" id="" name="file"><br>
                        
                        
                        <div class="progress" id="prgbar">
                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="percent"></span>
                            <input type="submit" value="Submit" class="btn btn-success">
                            </div>
                        </form> 
</body>
</html>

@section('content')
        <H1>This is Services page</H1>
        <P>This is test landing page from laravel framework</p>
                <form action="{{url('')}}" id="formid" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="file" id="" name="file" class="form-control"><br>
                        <div class="form-group">
                        
                        <div class="progress" id="prgbar">
                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="percent"></span>
                            <input type="submit" value="Submit" class="btn btn-success">
                            </div>
                        </form>
                       
<script>
        $('#prgbar').hide();
        $('input[type=file]').change(function() { 

            $('formid').ajaxForm({
                beforeSend: function() {
                        ('#prgbar').show();
                        ('#bar').width('0%');
                        ('#percent').html('0%');
                },
                uploadProgress: function(event, position, total, percentComplete) {
                        ('#bar').width(percentComplete+'%');
                        ('#percent').html(percentComplete+'%');
                },
                success: function(){
                        ('#bar').width('100%');
                        ('#percent').html('100%');
                },
                complete: function(){
                        $('#prgbar').fadeOut();

                }
        });
        
        }); 
</script>
                          
@endsection