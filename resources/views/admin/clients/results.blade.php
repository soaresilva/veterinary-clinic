<div class="container">
  @if(isset($clients))
          @foreach($clients as $client)
          <tr>
              <td>{{$client->first_name}}</td>
              <td>{{$client->surname}}</td>
          </tr>
          @endforeach
      </tbody>
  </table>
  @endif
</div>
