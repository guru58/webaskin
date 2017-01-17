
              {{-- navbar section start here --}}

<nav class="navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">HDT Community</a>
    </div>
    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav navbar-right">
        <li class="active">
          <a href="{{route('home')}}">
            <i class="fa fa-home" aria-hidden="true"></i>Home 
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li>
          <a href="#">
          <i class="fa fa-info" aria-hidden="true"></i> About
          </a>
        </li>
        <li>
          <a href="#">
          <i class="fa fa-rss" aria-hidden="true"></i> Blog
          </a>
        </li>
        <li>
          <a href="#" data-toggle="modal" data-target="#question">
          <i class="fa fa-question" aria-hidden="true"></i> Ask
          </a>
        </li>
        @if(Sentinel::check())
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Sentinel::getUser()->username}}!
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li>
            <a href="/profile/{{Sentinel::getUser()->username}}">
              Profile
            </a>
          </li>
            <li class="logoutLi">
              <form action="/logout" method="POST" id="logout-form" >
                {{ csrf_field()}}
                <a href="#" class="logoutLink" onclick="document.getElementById('logout-form').submit()">Signout</a>
              </form>
            </li>
            
          </ul>
        </li>
        @else
        <li>
          <a href="#" data-toggle="modal" data-target="#register">
          <i class="fa fa-user-plus" aria-hidden="true"></i> Register
          </a>
        </li>
        <li>
          <a href="#" data-toggle="modal" data-target="#login">
          <i class="fa fa-sign-in" aria-hidden="true"></i> Login
          </a>
        </li>
        @endif
      </ul>

                                                         <!-- Ask Question Modal -->
      
      <div class="modal fade" id="question" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h3 class="modal-title">Ask Question</h3>
            </div>
            <div class="modal-body">
              <form method="POST" action="/question">
              {{csrf_field()}}
                <div class="form-group">
                  <label for="title">Title:</label>
                  <input type="text" class="form-control" id="title" name="title" placeholder="Enter question title here" required/>
                </div>
                
                <div class="form-group">
                  <label for="category">Select Category:</label>
                  <select class="form-control" id="category" name="category">
                    <option>PHP</option>
                    <option>HTML</option>
                    <option>CSS</option>
                    <option>MySql</option>
                  </select>
                </div>
            
                <div class="form-group">
                  <label for="description">Description:</label>
                  <textarea name="description" class="tinymce form-control" placeholder="Enter question description">
                  </textarea required>
                </div>
                <button type="submit" class="btn btn-info">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>


                                                     {{-- MODAL FOR REGISTER --}}

      <div class="modal fade" id="register" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h3 class="modal-title">Registeration !</h3>
            </div>
            <div class="modal-body">
              <form method="POST" action="/register">
                {{csrf_field()}}
                <div class="form-group">
                  <label for="name">Username:</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Choose your username" required/>
                </div>
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter your valid email" required/>
                </div>

                <div class="form-group">
                  <label for="password">Password:</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Enter new password" required/>
                </div>
                <div class="form-group">
                   <label for="password">Confirm Password:</label>
                   <input type="password" class="form-control" id="cp" name="cp" placeholder="Confirm password" required/>
                </div>
                <button type="submit" class="btn btn-info">Register</button>
              </form>
            </div>
          </div>
        </div>
      </div>


                                          <!-- MODAL FOR LOGIN SYSTEM -->

      <div class="modal fade" id="login" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">           
            <div class="modal-body row">
              <div class="col-md-6">
              <h3 class="modal-title">Login !</h3>
              <hr>
              <form method="POST" action="/login"> 
              {{csrf_field()}}
                <div class="form-group">
                  <label for="name">Username:</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username"/>
                </div>
                
                <div class="form-group">
                  <label for="password">Password:</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Enter new password"/>
                </div>
                <button type="submit" class="btn btn-info">Submit</button><a href="" id="resetLink">Reset password?</a>
              </form>
              </div>
              <br>
              <div class="col-md-6">
                Not A Member Yet?
                <hr>
                
                <h4 id="fb"><i class="fa fa-facebook" aria-hidden="true"></i> Sign in with facebook</h4>
                <h4 id="gp"><i class="fa fa-google" aria-hidden="true"></i> Sign in with google</h4>
                <h4 id="ln"><i class="fa fa-linkedin" aria-hidden="true"></i> Sign in with linkdin</h4>
              </div>
              <hr/>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>    
</div>
</nav>
