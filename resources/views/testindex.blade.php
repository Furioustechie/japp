<html>
 <head>
  <title>Laravel Live Data Search with Sorting & Pagination using Ajax</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  {{-- @include('inc.scriptstyle') --}}
 </head>
 <body>
        <div class="form-group">
                <input type="text" name="serach" id="serach" class="form-control" />
               </div>
<table class="table">
<thead>
<tr>
<th class="sorting" data-sorting_type="asc" data-column_name="id" style="cursor: pointer">ID<span id="id_icon"></th>
<th class="sorting" data-sorting_type="asc" data-column_name="case_no" style="cursor: pointer">Case NO<span id="case_icon"></th>
<th class="sorting" data-sorting_type="asc" data-column_name="prison_name" style="cursor: pointer">Prison Name<span id="prison_icon"></th>
</tr>
</thead>
<tbody>
@include('testtable')
</tbody>
</table>
<div>
        <input type="hidden" name="hidden_page" id="hidden_page" value="1" />
        <input type="hidden" name="hidden_column_name" id="hidden_column_name" value="id" />
        <input type="hidden" name="hidden_sort_type" id="hidden_sort_type" value="asc" />
</div>
{{ $test->links() }}
</body>
{{-- @include('inc.style') --}}
</html>
<script>
        $(document).ready(function(){
        
         function clear_icon()
         {
          $('#id_icon').html('');
          $('#case_icon').html('');
         }
        
         function fetch_data(page, sort_type, sort_by, query)
         {
          $.ajax({
           url:"/testtable?page="+page+"&sortby="+sort_by+"&sorttype="+sort_type+"&query="+query,
           success:function(data)
           {
            $('tbody').html('');
            $('tbody').html(data);
           }
          })
         }
        
         $(document).on('keyup', '#serach', function(){
          var query = $('#serach').val();
          var column_name = $('#hidden_column_name').val();
          var sort_type = $('#hidden_sort_type').val();
          var page = $('#hidden_page').val();
          fetch_data(page, sort_type, column_name, query);
         });
        
         $(document).on('click', '.sorting', function(){
          var column_name = $(this).data('column_name');
          var order_type = $(this).data('sorting_type');
          var reverse_order = '';
          if(order_type == 'asc')
          {
           $(this).data('sorting_type', 'desc');
           reverse_order = 'desc';
           clear_icon();
           $('#'+column_name+'_icon').html('<span class="glyphicon glyphicon-triangle-bottom"></span>');
          }
          if(order_type == 'desc')
          {
           $(this).data('sorting_type', 'asc');
           reverse_order = 'asc';
           clear_icon
           $('#'+column_name+'_icon').html('<span class="glyphicon glyphicon-triangle-top"></span>');
          }
          $('#hidden_column_name').val(column_name);
          $('#hidden_sort_type').val(reverse_order);
          var page = $('#hidden_page').val();
          var query = $('#serach').val();
          fetch_data(page, reverse_order, column_name, query);
         });
        
         $(document).on('click', '.pagination a', function(event){
          event.preventDefault();
          var page = $(this).attr('href').split('page=')[1];
          $('#hidden_page').val(page);
          var column_name = $('#hidden_column_name').val();
          var sort_type = $('#hidden_sort_type').val();
        
          var query = $('#serach').val();
        
          $('li').removeClass('active');
                $(this).parent().addClass('active');
          fetch_data(page, sort_type, column_name, query);
         });
        
        });
        </script>
        
