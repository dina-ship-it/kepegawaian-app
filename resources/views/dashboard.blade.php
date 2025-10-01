@extends('layouts.app')

@section('content')
<div class="text-center bg-primary text-white p-5 rounded">
  <h2>Information System for Lecturer Community Service, Research, and Achievements</h2>
  <p>Integrated platform to manage and monitor lecturers' academic activities</p>
</div>

<div class="row text-center mt-4">
  <div class="col-md-2 offset-md-1">
    <div class="card shadow p-3">
      <div>👨‍🏫</div>
      <h4>{{ $data['lecturers'] }}</h4>
      <p>Total Lecturers</p>
    </div>
  </div>
  <div class="col-md-2">
    <div class="card shadow p-3">
      <div>🎓</div>
      <h4>{{ $data['students'] }}</h4>
      <p>Students Involved</p>
    </div>
  </div>
  <div class="col-md-2">
    <div class="card shadow p-3">
      <div>📚</div>
      <h4>{{ $data['research'] }}</h4>
      <p>Active Research</p>
    </div>
  </div>
  <div class="col-md-2">
    <div class="card shadow p-3">
      <div>📅</div>
      <h4>{{ $data['service'] }}</h4>
      <p>Community Service Program</p>
    </div>
  </div>
  <div class="col-md-2">
    <div class="card shadow p-3">
      <div>🏆</div>
      <h4>{{ $data['achievements'] }}</h4>
      <p>Achievements Achieved</p>
    </div>
  </div>
</div>
@endsection
