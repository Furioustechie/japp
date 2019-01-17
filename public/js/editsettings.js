

$(function() {
    var url = "/editsettings_Courts"
    $('#dataTableCourts').DataTable({

        processing: true,

        serverSide: true,
        ajax: url,
        

        columns: [

            { data: 'id', name: 'id' },

            { data: 'name_en', name: 'name_en' },

            { data: 'name_bn', name: 'name_bn' },
            
            {data: 'action', name: 'action', orderable: false, searchable: false}
            
        ]

    });

});
          

$('#dataTableCourts').on('click', '.CourtDelete', function (e) { 
                var id = $(this).attr('data-id');
               
              e.preventDefault();
              $.ajaxSetup({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                
              }
              });

              swal({
              title: "Are you sure ??",
              text: "You won't be able to revert this!", 
              icon: "warning",
              buttons: true,
              dangerMode: true,
              })
              .then((willDelete) => {
              if (willDelete) {
              
              $.ajax({

              url: "my-datatables/court_name_destroy/"+id,
              type: 'GET',
              dataType: "HTML",
              data: {
                  "id": id,
                  "_method": 'DELETE',
                              
                  },
                  success: function (data) {
                      swal("Done!","It was succesfully deleted!","success");
                    },
                  error: function (xhr, ajaxOptions, thrownError) {
                      swal("Error deleting!", "Name being used", "error");
                  }
              })
              .always(function (data) {
              $('#dataTableCourts').DataTable().draw(false);
              });
              
              } else {
              Swal({
              title:'Dismissed!',
              text:'Your record is safe.',
              type:'error',
              timer:5000,
              }) 
              }
              });
              });


/* Edit C0urts Item */
            $("body").on("click",".edit_court",function(){


            var id = $(this).data('id');
            var name_en = $(this).parent("td").prev("td").prev("td").text();
            var name_bn = $(this).parent("td").prev("td").text();


            $("#edit_court").find("input[name='name_en']").val(name_en);
            $("#edit_court").find("input[name='name_bn']").val(name_bn);
            $("#edit_court").find(".edit-id").val(id);


            });
            /* Updated new Item */
            $(".submit-edit").click(function(e){

            e.preventDefault();
            $.ajaxSetup({
                                  headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    
                                  }
                                  });
            //var id = $(this).attr('data-id');
            //var form_action = $("#edit-item").find("form").attr("action");
            var name_en = $("#edit_court").find("input[name='name_en']").val();


            var name_bn = $("#edit_court").find("input[name='name_bn']").val();
            var id = $("#edit_court").find(".edit-id").val();


            if(name_en != ''){
              $.ajax({

            url: "editsettings/update_court/"+id,
            type: 'post',
            //dataType: "JSON",
            data: {
                "id":id,
                "name_en": name_en,
                "name_bn": name_bn,
                "_method": 'POST',
                            
                },
                success: function (data) {
                  
                    swal("Done!","It was succesfully updated!","success");
                  },
                error: function (xhr, ajaxOptions, thrownError) {
                    swal("Error deleting!", "Name being used", "error");
                }
            })
            .always(function (data) {
                                  $('#dataTableCourts').DataTable().draw(false);
                                  });
            }else {
                                  Swal({
                                  title:'Dismissed!',
                                  text:'Your record is safe.',
                                  type:'error',
                                  timer:5000,
                                  }) 
                                  }


            });




  $(function() {
          var url = "/editsettings_Prisons"
                $('#dataTablePrison').DataTable({
          
                    processing: true,
                    serverSide: true,
                    ajax: url,
                    columns: [
                        { data: 'id', name: 'id' },
                        { data: 'name', name: 'name' },
                        {data: 'action', name: 'action', orderable: false, searchable: false}
                    ]
          
                });
          
            });
            
                      
           
$('#dataTablePrison').on('click', '.PrisonDelete', function (e) { 
                var id = $(this).attr('data-id');
               
              e.preventDefault();
              $.ajaxSetup({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                
              }
              });

              swal({
              title: "Are you sure ??",
              text: "You won't be able to revert this!", 
              icon: "warning",
              buttons: true,
              dangerMode: true,
              })
              .then((willDelete) => {
              if (willDelete) {
              
              $.ajax({

              url: "editsettings/prison_name_destroy/"+id,
              type: 'GET',
              dataType: "HTML",
              data: {
                  "id": id,
                  "_method": 'DELETE',
                              
                  },
                  success: function (data) {
                      swal("Done!","It was succesfully deleted!","success");
                    },
                  error: function (xhr, ajaxOptions, thrownError) {
                      swal("Error deleting!", "Name being used", "error");
                  }
              })
              .always(function (data) {
              $('#dataTablePrison').DataTable().draw(false);
              });
              
              } else {
              Swal({
              title:'Dismissed!',
              text:'Your record is safe.',
              type:'error',
              timer:5000,
              }) 
              }
              });
              });



  /* Edit Prisons Item */
               $("body").on("click",".edit_prisonName",function(){


               var id = $(this).data('id');
              /* var name = $(this).parent("td").prev("td").prev("td").text();*/
               var name = $(this).parent("td").prev("td").text();


               $("#edit_prisonName").find("input[name='rename_prison']").val(name);
             
               $("#edit_prisonName").find(".edit-id").val(id);


               });
               /* Updated new Item */
               $(".submit-prison").click(function(e){

               e.preventDefault();
               $.ajaxSetup({
                                     headers: {
                                       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                       
                                     }
                                     });
             
               var name = $("#edit_prisonName").find("input[name='rename_prison']").val();



               var id = $("#edit_prisonName").find(".edit-id").val();


               if(name != ''){
                 $.ajax({

               url: "editsettings/update_prison/"+id,
               type: 'post',
              
               data: {
                   "id":id,
                   "rename_prison": name,
              
                   "_method": 'POST',
                               
                   },
                   success: function (data) {
                     
                       swal("Done!","It was succesfully updated!","success");
                     },
                   error: function (xhr, ajaxOptions, thrownError) {
                       swal("Error deleting!", "Name being used", "error");
                   }
               })
               .always(function (data) {
                                     $('#dataTablePrison').DataTable().draw(false);
                                     });
               }else {
                                     Swal({
                                     title:'Dismissed!',
                                     text:'Your record is safe.',
                                     type:'error',
                                     timer:5000,
                                     }) 
                                     }


               });


$(function() {
var url = "/editsettings_Sentences"
        $('#dataTableSentences').DataTable({

            processing: true,
            serverSide: true,
            ajax: url,
            columns: [
                { data: 'id', name: 'id' },
                { data: 'sentence_name', name: 'sentence_name' },
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ]

        });

    });
                  
                            
                 
      $('#dataTableSentences').on('click', '.SentenceDelete', function (e) { 
                      var id = $(this).attr('data-id');
                     
                    e.preventDefault();
                    $.ajaxSetup({
                    headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      
                    }
                    });
      
                    swal({
                    title: "Are you sure ??",
                    text: "You won't be able to revert this!", 
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    })
                    .then((willDelete) => {
                    if (willDelete) {
                    
                    $.ajax({
      
                    url: "editsettings/sentence_name_destroy/"+id,
                    type: 'GET',
                    dataType: "HTML",
                    data: {
                        "id": id,
                        "_method": 'DELETE',
                                    
                        },
                        success: function (data) {
                            swal("Done!","It was succesfully deleted!","success");
                          },
                        error: function (xhr, ajaxOptions, thrownError) {
                            swal("Error deleting!", "Name being used", "error");
                        }
                    })
                    .always(function (data) {
                    $('#dataTableSentences').DataTable().draw(false);
                    });
                    
                    } else {
                    Swal({
                    title:'Dismissed!',
                    text:'Your record is safe.',
                    type:'error',
                    timer:5000,
                    }) 
                    }
                    });
                    });
      
      
      
        /* Edit Prisons Item */
                     $("body").on("click",".edit_sentenceName",function(){
      
      
                     var id = $(this).data('id');
                    /* var name = $(this).parent("td").prev("td").prev("td").text();*/
                     var name = $(this).parent("td").prev("td").text();
      
      
                     $("#edit_sentenceName").find("input[name='rename_sentence']").val(name);
                   
                     $("#edit_sentenceName").find(".edit-id").val(id);
      
      
                     });
                     /* Updated new Item */
                     $(".submit-sentence").click(function(e){
      
                     e.preventDefault();
                     $.ajaxSetup({
                                           headers: {
                                             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                             
                                           }
                                           });
                   
                     var name = $("#edit_sentenceName").find("input[name='rename_sentence']").val();
      
      
      
                     var id = $("#edit_sentenceName").find(".edit-id").val();
      
      
                     if(name != ''){
                       $.ajax({
      
                     url: "editsettings/update_sentence/"+id,
                     type: 'post',
                    
                     data: {
                         "id":id,
                         "rename_sentence": name,
                    
                         "_method": 'POST',
                                     
                         },
                         success: function (data) {
                           
                             swal("Done!","It was succesfully updated!","success");
                           },
                         error: function (xhr, ajaxOptions, thrownError) {
                             swal("Error deleting!", "Name being used", "error");
                         }
                     })
                     .always(function (data) {
                                           $('#dataTableSentence').DataTable().draw(false);
                                           });
                     }else {
                                           Swal({
                                           title:'Dismissed!',
                                           text:'Your record is safe.',
                                           type:'error',
                                           timer:5000,
                                           }) 
                                           }
      
      
                     });


    $(function() {
    var url = "/editsettings_Offences"
            $('#dataTableOffences').DataTable({
    
                processing: true,
                serverSide: true,
                ajax: url,
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                ]
    
            });
    
        });
                                          
                                                    
                                         
                              $('#dataTableOffences').on('click', '.OffenceDelete', function (e) { 
                                              var id = $(this).attr('data-id');
                                             
                                            e.preventDefault();
                                            $.ajaxSetup({
                                            headers: {
                                              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                              
                                            }
                                            });
                              
                                            swal({
                                            title: "Are you sure ??",
                                            text: "You won't be able to revert this!", 
                                            icon: "warning",
                                            buttons: true,
                                            dangerMode: true,
                                            })
                                            .then((willDelete) => {
                                            if (willDelete) {
                                            
                                            $.ajax({
                              
                                            url: "editsettings/sentence_name_destroy/"+id,
                                            type: 'GET',
                                            dataType: "HTML",
                                            data: {
                                                "id": id,
                                                "_method": 'DELETE',
                                                            
                                                },
                                                success: function (data) {
                                                    swal("Done!","It was succesfully deleted!","success");
                                                  },
                                                error: function (xhr, ajaxOptions, thrownError) {
                                                    swal("Error deleting!", "Name being used", "error");
                                                }
                                            })
                                            .always(function (data) {
                                            $('#dataTableOffences').DataTable().draw(false);
                                            });
                                            
                                            } else {
                                            Swal({
                                            title:'Dismissed!',
                                            text:'Your record is safe.',
                                            type:'error',
                                            timer:5000,
                                            }) 
                                            }
                                            });
                                            });
                              
                              
                              
                                /* Edit Prisons Item */
                                             $("body").on("click",".edit_offenceName",function(){
                              
                              
                                             var id = $(this).data('id');
                                            /* var name = $(this).parent("td").prev("td").prev("td").text();*/
                                             var name = $(this).parent("td").prev("td").text();
                              
                              
                                             $("#edit_offenceName").find("input[name='rename_offence']").val(name);
                                           
                                             $("#edit_offenceName").find(".edit-id").val(id);
                              
                              
                                             });
                                             /* Updated new Item */
                                             $(".submit-offence").click(function(e){
                              
                                             e.preventDefault();
                                             $.ajaxSetup({
                                                                   headers: {
                                                                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                                                     
                                                                   }
                                                                   });
                                           
                                             var name = $("#edit_offenceName").find("input[name='rename_offence']").val();
                              
                              
                              
                                             var id = $("#edit_offenceName").find(".edit-id").val();
                              
                              
                                             if(name != ''){
                                               $.ajax({
                              
                                             url: "editsettings/update_offence"+id,
                                             type: 'post',
                                            
                                             data: {
                                                 "id":id,
                                                 "rename_offence": name,
                                            
                                                 "_method": 'POST',
                                                             
                                                 },
                                                 success: function (data) {
                                                   
                                                     swal("Done!","It was succesfully updated!","success");
                                                   },
                                                 error: function (xhr, ajaxOptions, thrownError) {
                                                     swal("Error deleting!", "Name being used", "error");
                                                 }
                                             })
                                             .always(function (data) {
                                                                   $('#edit_offenceName').DataTable().draw(false);
                                                                   });
                                             }else {
                                                                   Swal({
                                                                   title:'Dismissed!',
                                                                   text:'Your record is safe.',
                                                                   type:'error',
                                                                   timer:5000,
                                                                   }) 
                                                                   }
                              
                              
                                             });
  
$(function() {
var url = "/editsettings_Status"
    $('#dataTableStatus').DataTable({

        processing: true,
        serverSide: true,
        ajax: url,
        columns: [
            { data: 'id', name: 'id' },
            { data: 'status_name', name: 'name' },
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]

    });

});
                                    
                                            
                                    
                        $('#dataTableStatus').on('click', '.StatusDelete', function (e) { 
                                        var id = $(this).attr('data-id');
                                        
                                    e.preventDefault();
                                    $.ajaxSetup({
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        
                                    }
                                    });
                        
                                    swal({
                                    title: "Are you sure ??",
                                    text: "You won't be able to revert this!", 
                                    icon: "warning",
                                    buttons: true,
                                    dangerMode: true,
                                    })
                                    .then((willDelete) => {
                                    if (willDelete) {
                                    
                                    $.ajax({
                        
                                    url: "editsettings/sentence_name_destroy/"+id,
                                    type: 'GET',
                                    dataType: "HTML",
                                    data: {
                                        "id": id,
                                        "_method": 'DELETE',
                                                    
                                        },
                                        success: function (data) {
                                            swal("Done!","It was succesfully deleted!","success");
                                            },
                                        error: function (xhr, ajaxOptions, thrownError) {
                                            swal("Error deleting!", "Name being used", "error");
                                        }
                                    })
                                    .always(function (data) {
                                    $('#dataTableStatus').DataTable().draw(false);
                                    });
                                    
                                    } else {
                                    Swal({
                                    title:'Dismissed!',
                                    text:'Your record is safe.',
                                    type:'error',
                                    timer:5000,
                                    }) 
                                    }
                                    });
                                    });
                        
                        
                        
                        /* Edit Prisons Item */
                                        $("body").on("click",".edit_statusName",function(){
                        
                        
                                        var id = $(this).data('id');
                                    /* var name = $(this).parent("td").prev("td").prev("td").text();*/
                                        var name = $(this).parent("td").prev("td").text();
                        
                        
                                        $("#edit_statusName").find("input[name='rename_status']").val(name);
                                    
                                        $("#edit_statusName").find(".edit-id").val(id);
                        
                        
                                        });
                                        /* Updated new Item */
                                        $(".submit-status").click(function(e){
                        
                                        e.preventDefault();
                                        $.ajaxSetup({
                                                            headers: {
                                                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                                                
                                                            }
                                                            });
                                    
                                        var name = $("#edit_statusName").find("input[name='rename_status']").val();
                        
                        
                        
                                        var id = $("#edit_statusName").find(".edit-id").val();
                        
                        
                                        if(name != ''){
                                        $.ajax({
                        
                                        url: "editsettings/update_status"+id,
                                        type: 'post',
                                    
                                        data: {
                                            "id":id,
                                            "rename_status": name,
                                    
                                            "_method": 'POST',
                                                        
                                            },
                                            success: function (data) {
                                            
                                                swal("Done!","It was succesfully updated!","success");
                                            },
                                            error: function (xhr, ajaxOptions, thrownError) {
                                                swal("Error deleting!", "Name being used", "error");
                                            }
                                        })
                                        .always(function (data) {
                                                            $('#edit_statusName').DataTable().draw(false);
                                                            });
                                        }else {
                                                            Swal({
                                                            title:'Dismissed!',
                                                            text:'Your record is safe.',
                                                            type:'error',
                                                            timer:5000,
                                                            }) 
                                                            }
                        
                        
                                        });