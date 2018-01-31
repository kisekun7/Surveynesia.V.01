@extends('User.layouts.appquest')

@section('headSection')
@endsection

@section('main-content')

<h1>Questionnaire</h1>
    
<br />

<meta name="csrf-token" content="{{ csrf_token() }}"> 
<div class="row">
      <div class="col-lg-offset-1 col-md-10">
        
        <table class="table table-bordered responsive">
          <thead>
            <tr>
              <th width="5%" style="text-align: center">No</th>
              <th>Questions</th>
              <th colspan="2" width="10%" style="text-align: center">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($query as $querys)
            <tr>
              <td class="ourItem" style="text-align: center" >{{ $loop->index  + 1}}</td>
              <td>{{$querys->question}}</td>
              <td><form id="delete-form-{{ $querys->id }}" method="post" action="{{ route('quest.destroy',$querys->id)}}" style="display:none;">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                  </form>
                  <a href="" title="Delete" class="btn btn-danger" onclick="if(confirm('Are you Sure, you want to delete this?'))
                  {
                    event.preventDefault();document.getElementById('delete-form-{{ $querys->id }}').submit();
                  }
                  else{
                    event.preventDefault();
                  }"><i class="entypo-trash"></i></button></a></td>
                 <td>
                  <a class="btn btn-info" title="Details" href="/survey/{{$querys->id}}/question/{{$querys->code_quest}}/detail"><i class="entypo-doc-text-inv"></i></a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <div class="form-group">
              <div class="col-sm-1">
                <a href="question" type="submit" title="back" class="btn btn-info">New Question</a>
              </div>
              <div class="col-sm-offset-10 col-sm-1">
                <a href="{{url('/survey')}}" title="finish" class="btn btn-success">Finish</a> 
              </div>
            </div>
      </div>
    </div>

@endsection

@section('footerSection')

@endsection
