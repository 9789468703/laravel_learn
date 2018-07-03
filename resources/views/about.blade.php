@extends('directory/layout')
@section('content')

      
      <?php
      /* 
         echo Form::open(array('url' => 'signup'));
            echo Form::text('username','Username');
            echo '<br/>';	
            
            echo Form::text('email', 'example@gmail.com');
            echo '<br/>';
     
            echo Form::password('password');
            echo '<br/>';
            
            echo Form::checkbox('name', 'value');
            echo '<br/>';
            
            echo Form::radio('name', 'value');
            echo '<br/>';
            
            echo Form::file('image');
            echo '<br/>';
            
            echo Form::select('size', array('L' => 'Large', 'S' => 'Small'));
            echo '<br/>';
            
            echo Form::submit('Click Me!');
         echo Form::close(); 
         */
      ?>
      <?php
      
         echo Form::open(array('url' => 'signup'));
         ?>
<!-- <form  action="signup" method="post"> -->
  <div class="form-group" >
  	<!-- @method('post') -->
  {{ csrf_field() }}
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <input name="_method" type="hidden" value="PATCH">
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<a href="showall" class="btn-primary">View all users</a>
@endsection

