@foreach ($test as $item)

        <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->case_no }}</td>
                <td>{{ $item->prison_name }}</td>       
                </tr>   
   

@endforeach