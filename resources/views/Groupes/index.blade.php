@extends('master')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{__('message.gestion_de_groupe')}}</h1>
          </div>
        </div>
      </div>
    </section>
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8">
                        {{-- <h2>{{__('message.gestion_de_groupe')}}</h2> --}}
                    </div>
                </div>
                @if (Session::has('true'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{Session::get('true')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                <div class="col-sm-12 d-flex justify-content-between p-3">
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('groupe.create') }}" class="btn btn-primary">{{__('message.add_brief')}}</a>
                    </div>

                    <div class="search-box">
                        <i class="material-icons">&#xE8B6;</i>
                        <input type="text" class="form-control" id="search" placeholder="Search&hellip;">
                    </div>
                </div>
            </div>

    <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th style="width: 1em">{{__('message.logo')}}</th>
                <th>{{__('message.name')}}</th>
                <th>{{__('message.année')}}</th>
                <th>{{__('message.actions')}}</th>
            </tr>
        </thead>
      <tbody  class="table1" id="table1">
          @foreach ($groupsPag as $value )
          <tr>
              <td><img src="@if (isset($value->Logo))
                {{asset('./images/groupLog/'.$value->Logo)}}
              @else
                {{asset('./images/groupLog/1676462542.png')}}
              @endif" alt="" width="50" height="50"></td>
              <td>{{ $value->Nom_groupe }}</td>
              <td> {{ $value->Annee_formation_id }} </td>
              <td>
                  <a  href="{{ route('groupe.edit', $value->id)}}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                <form action="{{route('groupe.destroy', $value->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button id="trash-icon">
                        <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                    </button>
                </form>
              </td>
          </tr>
          @endforeach

      </tbody>
  </table>



        <div class="d-flex justify-content-between">
            <div class="d-flex justify-content-start">
                {!! $groupsPag->links() !!}
        </div>
      <div>
          <a href="{{route('group_pdf')}}" class="btn btn-outline-secondary" >{{__('message.export_pdf')}}</a>
          <a href="/exportexcel" class="btn btn-outline-secondary" >{{__('message.export_excel')}}</a>
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
              <form action="/importexcel" method="POST" enctype="multipart/form-data">
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

{{-- <script type="text/javascript"> 
    {{-- $('#search').on('keyup',function(){
        $value=$(this).val();
        $.ajax({
            type:'get',
            url:'{{route("searchbriefs")}}',
            data:{'searchbrief':$value},
            success:function(data){
                console.log(data);
                var brief=data.search;
                var html='';
                if(brief.length>0){
                    for(let i=0;i<brief.length;i++){
                        html+=`<tr>
                                    <td>${brief[i]['Nom_du_brief']}</td>
                                    <td>${brief[i]['Description']}</td>
                                    <td>${brief[i]['Duree']}</td>
                                    <td><a  href="/brief/${brief[i]['id']}/edit" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                    <form method="post" action="/brief/${brief[i]['id']}">
                                        <input type="hidden" name="_method" value="Delete">\
                                        <input type="hidden" name="_token" value='{{ csrf_token() }}'>
                                        <button id="trash-icon" type='submit'>
                                    <a  class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                </button></td>
                                </tr>`;
                    }
                }
                else{
                    html+='<tr>\
                    <td>no brief</td>\
                    </tr>';
                }
                $('#table1').html(html);
            }
        })
    })
    </script> --}}
@endsection