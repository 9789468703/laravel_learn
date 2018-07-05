<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap CRUD Data Table for Database with Modal Form</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
    body {
        color: #566787;
    background: #f5f5f5;
    font-family: 'Varela Round', sans-serif;
    font-size: 13px;
  }
  .table-wrapper {
        background: #fff;
        padding: 20px 25px;
        margin: 30px 0;
    border-radius: 3px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
  .table-title {        
    padding-bottom: 15px;
    background: #435d7d;
    color: #fff;
    padding: 16px 30px;
    margin: -20px -25px 10px;
    border-radius: 3px 3px 0 0;
    }
    .table-title h2 {
    margin: 5px 0 0;
    font-size: 24px;
  }
  .table-title .btn-group {
    float: right;
  }
  .table-title .btn {
    color: #fff;
    float: right;
    font-size: 13px;
    border: none;
    min-width: 50px;
    border-radius: 2px;
    border: none;
    outline: none !important;
    margin-left: 10px;
  }
  .table-title .btn i {
    float: left;
    font-size: 21px;
    margin-right: 5px;
  }
  .table-title .btn span {
    float: left;
    margin-top: 2px;
  }
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
    padding: 12px 15px;
    vertical-align: middle;
    }
  table.table tr th:first-child {
    width: 60px;
  }
  table.table tr th:last-child {
    width: 100px;
  }
    table.table-striped tbody tr:nth-of-type(odd) {
      background-color: #fcfcfc;
  }
  table.table-striped.table-hover tbody tr:hover {
    background: #f5f5f5;
  }
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    } 
    table.table td:last-child i {
    opacity: 0.9;
    font-size: 22px;
        margin: 0 5px;
    }
  table.table td a {
    font-weight: bold;
    color: #566787;
    display: inline-block;
    text-decoration: none;
    outline: none !important;
  }
  table.table td a:hover {
    color: #2196F3;
  }
  table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #F44336;
    }
    table.table td i {
        font-size: 19px;
    }
  table.table .avatar {
    border-radius: 50%;
    vertical-align: middle;
    margin-right: 10px;
  }
    .pagination {
        float: right;
        margin: 0 0 5px;
    }
    .pagination li a {
        border: none;
        font-size: 13px;
        min-width: 30px;
        min-height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 2px !important;
        text-align: center;
        padding: 0 6px;
    }
    .pagination li a:hover {
        color: #666;
    } 
    .pagination li.active a, .pagination li.active a.page-link {
        background: #03A9F4;
    }
    .pagination li.active a:hover {        
        background: #0397d6;
    }
  .pagination li.disabled i {
        color: #ccc;
    }
    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }
    .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;
    }    
  /* Custom checkbox */
  .custom-checkbox {
    position: relative;
  }
  .custom-checkbox input[type="checkbox"] {    
    opacity: 0;
    position: absolute;
    margin: 5px 0 0 3px;
    z-index: 9;
  }
  .custom-checkbox label:before{
    width: 18px;
    height: 18px;
  }
  .custom-checkbox label:before {
    content: '';
    margin-right: 10px;
    display: inline-block;
    vertical-align: text-top;
    background: white;
    border: 1px solid #bbb;
    border-radius: 2px;
    box-sizing: border-box;
    z-index: 2;
  }
  .custom-checkbox input[type="checkbox"]:checked + label:after {
    content: '';
    position: absolute;
    left: 6px;
    top: 3px;
    width: 6px;
    height: 11px;
    border: solid #000;
    border-width: 0 3px 3px 0;
    transform: inherit;
    z-index: 3;
    transform: rotateZ(45deg);
  }
  .custom-checkbox input[type="checkbox"]:checked + label:before {
    border-color: #03A9F4;
    background: #03A9F4;
  }
  .custom-checkbox input[type="checkbox"]:checked + label:after {
    border-color: #fff;
  }
  .custom-checkbox input[type="checkbox"]:disabled + label:before {
    color: #b8b8b8;
    cursor: auto;
    box-shadow: none;
    background: #ddd;
  }
  /* Modal styles */
  .modal .modal-dialog {
    max-width: 400px;
  }
  .modal .modal-header, .modal .modal-body, .modal .modal-footer {
    padding: 20px 30px;
  }
  .modal .modal-content {
    border-radius: 3px;
  }
  .modal .modal-footer {
    background: #ecf0f1;
    border-radius: 0 0 3px 3px;
  }
    .modal .modal-title {
        display: inline-block;
    }
  .modal .form-control {
    border-radius: 2px;
    box-shadow: none;
    border-color: #dddddd;
  }
  .modal textarea.form-control {
    resize: vertical;
  }
  .modal .btn {
    border-radius: 2px;
    min-width: 100px;
  } 
  .modal form label {
    font-weight: normal;
  } 
</style>
<script type="text/javascript">
$(document).ready(function(){
  // Activate tooltip
  $('[data-toggle="tooltip"]').tooltip();
  
  // Select/Deselect checkboxes
  var checkbox = $('table tbody input[type="checkbox"]');
  $("#selectAll").click(function(){
    if(this.checked){
      checkbox.each(function(){
        this.checked = true;                        
      });
    } else{
      checkbox.each(function(){
        this.checked = false;                        
      });
    } 
  });
  checkbox.click(function(){
    if(!this.checked){
      $("#selectAll").prop("checked", false);
    }
  });
$(".delete").click(function(e) {
  e.preventDefault();
  var deleteuser =$(this).data('id'); 
  // console.log($(this).data('id'));
  $.ajax({
            url:'deleteid',
            type: "get",
            data:{deleteid:deleteuser},
        success: function () {
          location.reload();
        }
        });
  });
$( ".edit" ).on('click', function(e){
      var editid = $(this).data('id');
      var editusername = $(this).data('username');
      var editemail =$(this).data('email');
      var editaddress =$(this).data('address');
      var editphone =$(this).data('phone');
    $("input[name='editid']").val(editid);
    $("input[name='editname']").val(editusername);
    $("input[name='editemail']").val(editemail);
    $("input[name='editemail']").attr('disabled','true')
    $("textarea[name='address']").text(editaddress);
    $("input[name='editphone']").val(editphone);

    });
      $('#bulkdelete').click(function(){
        $('#checkbox1:checked').each(function(i){
          deleteuser = $(this).val();
            $.ajax({
            url:'deleteid',
            type: "get",
            data:{deleteid:deleteuser},
        success: function () {
          location.reload();
        }
        });
        });
        // location.reload();
      });
      $(document).ready(function() {
    $('#pagination').DataTable( {
        "pagingType": "full_numbers"
    } );
} );
});
</script>
</head>
    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">About</h4>
              <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Contact</h4>
              <ul class="list-unstyled">
                <li><a href="#link" class="text-white">Follow on Twitter</a></li>
                <li><a href="#link" class="text-white">Like on Facebook</a></li>
                <li><a href="#link" class="text-white">Email me</a></li>
              </ul>
            </div>

            
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="#link" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
            <strong>Album</strong>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>