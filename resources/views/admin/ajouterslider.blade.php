@extends('layouts.appadmin')

@section('titre')
    add slider
@endsection

@section('contenu_admin')
    


        <div class="row grid-margin">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">add slider</h4>

                  @if(Session::has('status'))

                  <div class="alert alert-success">
                    {{Session::get('status')}}
                  </div>
                    
                  @endif

                  @if(count($errors)>0)
                   <div class="alert alert-danger">
                    <ul>
                      @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                      @endforeach
                    </ul>
                   </div>
                  @endif

                  {{--<form class="cmxform" id="commentForm" method="get" action="#">--}}
                    {{--<fieldset>--}}
                        {!!Form::open(['action'=>'SliderController@sauverslider','method'=>'POST',
                        'class'=>'cmxform','id'=>'commentForm', 'enctype'=>'multipart/form-data'])!!}
                        {{ csrf_field() }}
                      <div class="form-group">
                          {{Form::label('','description one',['for'=>'cname'])}}
                          {{Form::text('description1','',['class'=>'form-control','id'=>'cname'])}}
                       {{-- <label for="cname">Name (required, at least 2 characters)</label>
                        <input id="cname" class="form-control" name="name" minlength="2" type="text" required>--}}
                      </div>
                      <div class="form-group">
                        {{Form::label('','description tow',['for'=>'cname'])}}
                        {{Form::text('description2','',['class'=>'form-control','id'=>'cname'])}}
                                        </div>
                      
                        <div class="form-group">
                        {{Form::label('','image',['for'=>'cname'])}}
                        {{Form::file('slider_image',['class'=>'form-control','id'=>'cname'])}}
                        </div>                                    
                     {{-- <div class="form-group">
                        <label for="cemail">E-Mail (required)</label>
                        <input id="cemail" class="form-control" type="email" name="email" required>
                      </div>
                      <div class="form-group">
                        <label for="curl">URL (optional)</label>
                        <input id="curl" class="form-control" type="url" name="url">
                      </div>
                      <div class="form-group">
                        <label for="ccomment">Your comment (required)</label>
                        <textarea id="ccomment" class="form-control" name="comment" required></textarea>
                      </div>--}}

                     {{-- <input class="btn btn-primary" type="submit" value="Submit">--}}
                     {{Form::submit('Ajouter',['class'=>'btn btn-primary'])}}
                 {{--   </fieldset>
                  </form>--}}
                  {!!Form::close()!!}
                </div>
              </div>
            </div>
          </div>



@endsection

@section('script')
{{--
<script src="backend/js/form-validation.js"></script>
<script src="backend/js/bt-maxLength.js"></script>--}}
    
@endsection