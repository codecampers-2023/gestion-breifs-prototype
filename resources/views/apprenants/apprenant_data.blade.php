@foreach ($data as $value )
        <tr>
            <td><img src="{{ !$value->Image ? "https://icon-library.com/images/person-head-icon/person-head-icon-27.jpg" : asset('./images/apprenant/'.$value->Image)}}" alt="" width="40"></td>
            <td>{{ $value->Nom }}</td>
            <td>{{ $value->Prenom }}</td>
            <td>
                <a  href="{{ route('apprenant.edit', $value->id)}}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                <form action="{{ route('apprenant.destroy', $value->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button id="trash-icon">
                        <a  class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
        <tr>
            <td colspan="3" align="center">
                {!! $data->links() !!}
            </td>
        </tr>
