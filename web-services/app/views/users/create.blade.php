{{Form::open(['route'=>'user.store'])}}
  <div>
    {{Form::label('email', 'Email: ')}}
    {{Form::text('email')}}
  </div>
  <div>
    {{Form::label('first_name', 'First Name: ')}}
    {{Form::text('first_name')}}
  </div>
  <div>
    {{Form::label('last_name', 'Last Name: ')}}
    {{Form::text('last_name')}}
  </div>
  <div>
    {{Form::label('password', 'Password: ')}}
    {{Form::text('password')}}
  </div>
  <div>
    {{Form::label('detail', 'Detail: ')}}
    {{Form::text('detail')}}
  </div>
  <div>
    {{Form::submit('Sign in')}}
  </div>
{{Form::close()}}
