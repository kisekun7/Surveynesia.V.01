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
              <th width="40%" style="text-align: center;">Answer</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($sql as $question)
            <tr>
              <td class="ourItem" style="text-align: center" >{{ $loop->index  + 1}}</td>
              <td>{{$question->question}}</td>
              <td> 
                @foreach ($question->answer as $as)
                <li style="list-style:none;"><input type="radio" name="test">{{$as->answer}} </li>  
                @endforeach
              </td>
            
            </tr>
            @endforeach
          </tbody>
        </table>
        <div class="form-group">
              <div class="col-sm-1">
                <a href="question" type="submit" title="back" class="btn btn-info">New Question</a>
              </div>
              
            </div>
      </div>
    </div>

@endsection

@section('footerSection')

@endsection
