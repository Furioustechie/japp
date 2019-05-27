<script>
    $(document).ready(function(){
        $.ajaxSetup({
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
           });
    
    function clear_icon()
     {
      $('#id_icon').html('');
      $('#case_no_icon').html('');
     }
    
     function fetch_data(page, sort_type, sort_by, query)
    {
     $.ajax({
      url:"/dashboard/fetch_data_allRecords?page="+page+"&sortby="+sort_by+"&sorttype="+sort_type+"&query="+query,
      success:function(data)
      {
        $('#data_allRecords').html('');
       $('#data_allRecords').html(data);
      }
     });
    }
    
    
    
    $(document).on('keyup', '#search', function(){
      var query = $('#search').val();
      var sort_by = $('#hidden_column_name').val();
      var sort_type = $('#hidden_sort_type').val();
      var page = $('#hidden_page').val();
      fetch_data(page,sort_type, sort_by, query);
     });
    
     //Sorting Block
    
     $(document).on('click', '.sorting', function(){
      var sort_by = $(this).data('column_name');
      var order_type = $(this).data('sorting_type');
      
      var reverse_order = '';
      if(order_type == 'asc')
      {
       $(this).data('sorting_type', 'desc');
       reverse_order = 'desc';
       clear_icon();
       $('#'+sort_by+'_icon').html('<span class="fa fa-angle-down"></span>');
      }
      if(order_type == 'desc')
      {
       $(this).data('sorting_type', 'asc');
       reverse_order = 'asc';
       clear_icon();
       $('#'+sort_by+'_icon').html('<span class="fa fa-angle-up"></span>');
      }
      $('#hidden_column_name').val(sort_by);
      $('#hidden_sort_type').val(reverse_order);
      var page = $('#hidden_page').val();
      var query = $('#search').val();
      fetch_data(page, reverse_order, sort_by, query);
     });
    
     //Pagination Block
        $(document).on('click', '.pagination a', function(event){
        event.preventDefault(); 
        var page = $(this).attr('href').split('page=')[1];
        $('#hidden_page').val(page);
        var sort_by = $('#hidden_column_name').val();
        var sort_type = $('#hidden_sort_type').val();
        var query = $('#search').val();
    
        $('li').removeClass('active');
                $(this).parent().addClass('active');
        fetch_data(page,sort_type, sort_by, query);
        });
    
    });
    </script>