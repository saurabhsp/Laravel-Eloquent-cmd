<div>
<h1>Students</h1>
<!-- {{$data}} -->

<table border="2" style="border-collapse: collapse;">
    <tr>
        <th>Name</th>
        <th>City</th>
        <th>Batch</th>
        <th>Date</th>
    </tr> 
    @foreach($data as $student)
    <tr>
    <td>{{$student->name}}</td>
    <td>{{$student->city}}</td>
    <td>{{$student->Batch}}</td>
    <td>{{$student->dateofadmission}}</td>
    </tr>
    @endforeach
</table>
    
</div>
