@if(count($errors) > 0)
           
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger text-center">
                    {{$error}}
                </div>
            @endforeach
      
@endif

@if(session('success'))
<div class="alert alert-success text-center" role="alert">
{{session('success')}}
</div>
@endif

@if(session('error'))
<div class="alert alert-danger text-center" role="alert">
{{session('error')}}
</div>
@endif

<script>
window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 4000);
    </script>