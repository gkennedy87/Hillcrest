{!! Form::open([=>,'method'=>'POST'])  !!}


    {{Form::label('first-name','First Name', ['class'=>'control-label'])}}
    {{Form::text('first-name',null,['class'=>'form-control form-control-lg', 'placeholder'=>'First Name']) }}
    {{Form::label('last-name','Last Name', ['class'=>'control-label mt-3'])}}
    {{Form::text('last-name',null,['class'=>'form-control form-control', 'placeholder'=>'Last Name']) }}
    {{Form::label('email','Email', ['class'=>'control-label mt-3'])}} 
    {{Form::email('due_date', null,['class'=>'form-control']) }}
    {{Form::checkbox('subscribe',null, ['class'=>'form-check-input', 'checked'=>'checked'])}}
    {{Form::label('subscribe',"Yes, I'd like to receive the Hillcrest Digital Newsletter.",['class'=>'form-check-label active'])}}

    <div class="row justify-content-center mt-3">
        <div class="col-sm-6">
            <button class="btn btn-block btn-primary" type="submit">Create Task</button>
        </div>
    </div>
{!! Form::close() !!}