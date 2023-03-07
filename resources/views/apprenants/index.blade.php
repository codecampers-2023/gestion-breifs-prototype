@extends('master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{__('message.title1')}}</h1>
          </div>
        
        </div>
      </div>
    </section>
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>{{__('message.apprenant')}}</h2></div>

                </div>
                <div class="col-sm-12 d-flex justify-content-between p-3">
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('apprenant.create') }}" class="btn btn-primary">{{__('message.+add apprenant')}}</a>


                        <select class="btn btn-secondary dropdown-toggle ml-2" name="filter" id="filter">
                            <option value="">{{__('message.all_groups')}}</option>
                            @foreach ($groupes as $value)
                            <option value="{{$value->id}}">{{$value->Nom_groupe}}</option>
                            @endforeach
                        </select>

                    </div>

                    <div class="search-box">
                        <i class="material-icons">&#xE8B6;</i>
                        <input type="text" class="form-control" name="serach" id="serach" placeholder="Search&hellip;">
                    </div>

                </div>
            </div>

    <table class="table table-striped table-hover table-bordered">
      <thead>
          <tr>
              <th>{{__('message.image')}}</th>
              <th>{{__('message.name')}}</th>
              <th>{{__('message.prenom')}}</th>
              <th>{{__('message.actions')}}</th>
          </tr>
      </thead>
      <tbody style="overflow-x: scroll">
        @include('apprenants.apprenant_data')
    </tbody>
  </table>
  <input type="hidden" name="hidden_page" id="hidden_page" value="1" />


  <div class="d-flex justify-content-between">
      <div>
            <a href="{{route('generatepdfapprenant')}}" class="btn btn-outline-secondary" >{{__('message.export_pdf')}}</a>
            <a href="/exportexcelapprenant" class="btn btn-outline-secondary" >{{__('message.export_excel')}}</a>
            <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModal">
                {{__('message.import_excel')}}
              </button>
       </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{__('message.modal_title')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="/importexcelapprenant" method="POST" enctype="multipart/form-data">
              @csrf

              <div class="modal-body">
                      <div class="form-group">
                          <input type="file" name="file" required>
                      </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('message.close_btn')}}</button>
                <button type="submit" class="btn btn-primary">{{__('message.save')}}</button>
              </div>
            </div>
          </form>
          </div>
        </div>
  </div>
</div>
</div>
</div>

<script>
$(document).ready(function(){
function fetch_data(page,query)
{
$.ajax({
 url:"/pagination/fetch_data?page="+page+"&query="+query,
 success:function(data)
 {
  // console.log(data);
  $('tbody').html('');
  $('tbody').html(data);
 }
})
}

$(document).on('keyup', '#serach', function(){
var query = $('#serach').val();
var page = $('#hidden_page').val();
fetch_data(page,query);
});


$(document).on('click', '.pagination a', function(event){
event.preventDefault();
var page = $(this).attr('href').split('page=')[1];
$('#hidden_page').val(page);
var query = $('#serach').val();
console.log(page);
console.log(query);
fetch_data(page,query);

});

////////////filter
function fetch2_data(page,query)
{
$.ajax({
 url:"/pagination/fetch2_data?page="+page+"&query="+query,
 success:function(data)
 {
  // console.log(data);
  $('tbody').html('');
  $('tbody').html(data);
 }
})
}

$(document).on('change', '#filter', function(){
var query = $('#filter').val();
var page = $('#hidden_page').val();
fetch2_data(page,query);
});

var query = $('#filter').val();
if(query!=''){
    $(document).on('click', '.pagination a', function(event){
event.preventDefault();
var page = $(this).attr('href').split('page=')[1];
$('#hidden_page').val(page);
var query = $('#filter').val();
console.log(page);
console.log(query);
fetch2_data(page,query);
});
}


});
</script>
@endsection
