<div class="cv">
  <div class="col-md-6">
<br>
<br>
<div class="card" style=" color : white;background: linear-gradient(to right, rgb(0, 0, 0), rgb(67, 67, 67));;">
  <center><h3>Name : </h3></center></div>
  <br>
  <div class="card">
    <center><h3>{{$cv->name}}</h3></center>
  </div>
<br>
<div class="card col-md-12" style=" color : white; background: linear-gradient(to right, rgb(0, 0, 0), rgb(67, 67, 67));;">
  <center><h3>Email : </h3></center>
</div>
<br>
<div class="card col-md-12">
  <center><h3>{{$cv->email}} </h3></center>
</div>
<br>

@if ($cv->nationality == null)
@else
<div class="card" style="  color : white;background: linear-gradient(to right, rgb(0, 0, 0), rgb(67, 67, 67));;">
  <center><h3>Nationality : </h3></center>
</div>
<br>
<div class="card">
  <center><h3>{{$cv->nationality}} </h3></center>
</div>
<br>
@endif

@if ($cv->Socialstatus == null)

@else
<div class="card" style="  color : white;background: linear-gradient(to right, rgb(0, 0, 0), rgb(67, 67, 67));;">
  <center><h3>Socialstatus: </h3></center>
</div>
<br>
<div class="card">
  <center><h3>{{$cv->Socialstatus}}</h3></center>
</div>
<br>
@endif


@if ($cv->birthplace == null)

@else
<div class="card" style=" color : white; background: linear-gradient(to right, rgb(0, 0, 0), rgb(67, 67, 67));;">
  <center><h3>Birthplace: </h3></center>
</div>
<br>
<div class="card">
  <center><h3>{{$cv->birthplace}}</h3></center>
</div>
<br>
@endif

@if ($cv->birthdate == null)

@else
<div class="card" style=" color : white; background: linear-gradient(to right, rgb(0, 0, 0), rgb(67, 67, 67));;">
  <center><h3>Birthdate: </h3></center>
</div>
<br>
<div class="card">
  <center><h3>{{$cv->birthdate}}</h3></center>
</div>
<br>
@endif


@if ($cv->address == null)

@else
<div class="card" style=" color : white; background: linear-gradient(to right, rgb(0, 0, 0), rgb(67, 67, 67));;">
  <center><h3>Address: </h3></center>
</div>
<br>
<div class="card">
  <center><h3>{{$cv->address}}</h3></center>
</div>
<br>
@endif

<div class="card" style=" color : white; background: linear-gradient(to right, rgb(0, 0, 0), rgb(67, 67, 67));;">
  <center><h3>Phone : </h3></center>
</div>
<br>
<div class="card">
  <center><h3>0{{$cv->phone}}</h3></center>
</div>
<br>


<div class="card" style="  color : white;background: linear-gradient(to right, rgb(0, 0, 0), rgb(67, 67, 67));;">
  <center><h3>Workexperience : </h3></center>
</div>
<br>
<div class="card">
  <center><h3>{{$cv->Workexperience}}</h3></center>
</div>
<br>


<div class="card" style="  color : white;background: linear-gradient(to right, rgb(0, 0, 0), rgb(67, 67, 67));;">
  <center><h3>Qualifications : </h3></center>
</div>
<br>
<div class="card">
  <center><h3>{{$cv->qualifications}}</h3></center>
</div>
<br>


<div class="card" style=" color : white; background: linear-gradient(to right, rgb(0, 0, 0), rgb(67, 67, 67));;">
  <center><h3>Interests :</h3></center></div>
<br>
  <div class="card">
    <center><h3>{{$cv->Interests}}</h3></center>
  </div>
<br>
</div>
</div>
