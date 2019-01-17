//---------Script for Sweetalrt action on editsettingPage-------SentenceName Deleted---------

$('.SentenceDelete').click(function (event) {
    var id = $(this).data("id");
    var token = $(this).data("token");
    swal({
        title: "Are you sure ??",
        text: "You won't be able to revert this!", 
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
  .then((willDelete) => {
    if (willDelete) {
    Swal({
        title:'Deleted!',
        text:'Your file has been deleted successfully.',
        type:'success',
        timer:5000,
        
    }) 
  $.ajax(
      {
        url: "editsettings/sentence_name_destroy/"+id,
        type: 'GET',
        dataType: "JSON",
        data: {
              "id": id,
              "_method": 'DELETE',
              "_token": token,               
              }
      });
      $(document).ajaxStop(function(){
                window.location.reload();
              });
      } else {
          Swal({
        title:'Dismissed!',
        text:'Your file is safe.',
        type:'error',
        timer:5000,
        }) 
      }
});
});
//---------Script for Sweetalrt action on editsettingPage-------Priosn Name Deleted---------
$('.PrisonDelete').click(function (event) {
    var id = $(this).data("id");
    var token = $(this).data("token");
    swal({
        title: "Are you sure ??",
        text: "You won't be able to revert this!", 
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
  .then((willDelete) => {
    if (willDelete) {
    Swal({
        title:'Deleted!',
        text:'Your file has been deleted successfully.',
        type:'success',
        timer:5000,
        
    }) 
  $.ajax(
      {
        url: "editsettings/prison_name_destroy/"+id,
        type: 'GET',
        dataType: "JSON",
        data: {
              "id": id,
              "_method": 'DELETE',
              "_token": token,               
              }
      });
      $(document).ajaxStop(function(){
                window.location.reload();
              });
      } else {
          Swal({
        title:'Dismissed!',
        text:'Your file is safe.',
        type:'error',
        timer:5000,
        }) 
      }
});
});
//---------Script for Sweetalrt action on editsettingPage-------Offence Name Deleted---------
$('.OffenceDelete').click(function (event) {
    var id = $(this).data("id");
    var token = $(this).data("token");
    swal({
        title: "Are you sure ??",
        text: "You won't be able to revert this!", 
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
  .then((willDelete) => {
    if (willDelete) {
    Swal({
        title:'Deleted!',
        text:'Your file has been deleted successfully.',
        type:'success',
        timer:5000,
        
    }) 
  $.ajax(
      {
        url: "editsettings/offence_name_destroy/"+id,
        type: 'GET',
        dataType: "JSON",
        data: {
              "id": id,
              "_method": 'DELETE',
              "_token": token,               
              }
      });
      $(document).ajaxStop(function(){
                window.location.reload();
              });
      } else {
          Swal({
        title:'Dismissed!',
        text:'Your file is safe.',
        type:'error',
        timer:5000,
        }) 
      }
});
});
//---------Script for Sweetalrt action on editsettingPage-------Status Name Deleted---------
$('.StatusDelete').click(function (event) {
    var id = $(this).data("id");
    var token = $(this).data("token");
    swal({
        title: "Are you sure ??",
        text: "You won't be able to revert this!", 
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
  .then((willDelete) => {
    if (willDelete) {
    Swal({
        title:'Deleted!',
        text:'Your file has been deleted successfully.',
        type:'success',
        timer:5000,
        
    }) 
  $.ajax(
      {
        url: "editsettings/status_name_destroy/"+id,
        type: 'GET',
        dataType: "JSON",
        data: {
              "id": id,
              "_method": 'DELETE',
              "_token": token,               
              }
      });
      $(document).ajaxStop(function(){
                window.location.reload();
              });
      } else {
          Swal({
        title:'Dismissed!',
        text:'Your file is safe.',
        type:'error',
        timer:5000,
        }) 
      }
});
});

//---------Script for Sweetalrt action on editsettingPage-------Courts Name Deleted---------
$('.CourtsDelete').click(function (event) {
    var id = $(this).data("id");
    var token = $(this).data("token");
    swal({
        title: "Are you sure ??",
        text: "You won't be able to revert this!", 
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
  .then((willDelete) => {
    if (willDelete) {
    Swal({
        title:'Deleted!',
        text:'Your file has been deleted successfully.',
        type:'success',
        timer:5000,
        
    }) 
  $.ajax(
      {
        url: "editsettings/courts_name_destroy/"+id,
        type: 'GET',
        dataType: "JSON",
        data: {
              "id": id,
              "_method": 'DELETE',
              "_token": token,               
              }
      });
      $(document).ajaxStop(function(){
                window.location.reload();
              });
      } else {
          Swal({
        title:'Dismissed!',
        text:'Your file is safe.',
        type:'error',
        timer:5000,
        }) 
      }
});
});


