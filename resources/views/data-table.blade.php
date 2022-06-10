@foreach ($data->variable as $d)
    <tr>
        <td>{{$d->field1}}</td>
        <td>{{$d->field2}}</td>
        <td>{{$d->field3}}</td>
        <td>{{$d->field4}}</td>
        <td>{{$d->field5}}</td>
        <td class="text-center py-0 align-middle">
            <i class="fas fa-check-circle text-success"></i>
            <i class="fas fa-edit text-secundary"></i>
            <i class="fas fa-trash text-secundary"></i>
        </td>
    </tr>
@endforeach
