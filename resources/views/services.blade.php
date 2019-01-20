@extends('layouts.app')

@section('content')
        <H1>This is Services page</H1>
        <P>This is test landing page from laravel framework</p>
                <form action="{{url('')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="file" id="" name="file" class="form-control"><br>
                        <div class="form-group">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated"></div >
                            <div class="percent">0%</div >
                        </div>
                            <input type="submit" value="Submit" class="btn btn-success">
                            </div>
                        </form>
                       
<script>
        $('input[type=file]').change(function() { 

        var bar = $('.progress-bar');
        var percent = $('.percent');
        var status = $('#status');

        $('form').ajaxForm({
                beforeSend: function() {
                status.empty();
                var percentVal = '0%';
                bar.width(percentVal);
                percent.html(percentVal);
                },
                uploadProgress: function(event, position, total, percentComplete) {
                var percentVal = percentComplete + '%';
                bar.width(percentVal);
                percent.html(percentVal);
                },
                complete: function(xhr) {
                status.html(xhr.responseText);
                bar.hide();
                //alert('Success');
                }
        });
        $('form').submit(); 
        }); 
</script>
                          
@endsection