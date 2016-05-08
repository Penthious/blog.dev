
<div class="blog-masthead navContainer">
    <div class="container">
        <nav class="blog-nav">

            <a id="homeNav" class="blog-nav-item" href="{{{action('PostsController@index')}}}">Home</a>
            <a id="portfolioNav" class="blog-nav-item" href="{{{action('HomeController@showPortfolio')}}}">Portfolio</a>
            <a id="resumeNav" class="blog-nav-item" href="{{{action('HomeController@showResume')}}}">Resume</a>

            <!-- drop down for projects -->
            <div class="dropdown blog-nav-item">
                <a id="projectsNav" class="dropdown-toggle blog-nav-item" data-toggle="dropdown">Projects
                    <span id="toggleGlyph" class="glyphicon glyphicon-triangle-left"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{{action('HomeController@showSimon')}}}"><span id="simplesimonNav" aria-hidden="true"></span>Simple Simon</a></li>
                        <li><a href="{{{action('HomeController@showWhachaMole')}}}"><span id="whackamoleNav" aria-hidden="true"></span>Whack a Mole</a></li>
                        <li><a href="{{{action('HomeController@showCalculator')}}}"><span id="calculatorNav" aria-hidden="true"></span>Calculator</a></li>
                        <li><a href="{{{action('HomeController@showWeatherMap')}}}"><span id="weathermapNav" aria-hidden="true"></span>Weather Map</a></li>
                        <li><a href="{{{action('HomeController@showTicTacToe')}}}"><span id="tictactoeNav" aria-hidden="true"></span>Tic-Tac-Toe</a></li>
                    </ul>
                </div>
                <!-- end drop down for projects -->

                <!-- start login form -->
                <a class="blog-nav-item" data-toggle="modal" data-target="#myModal"> Contact</a>
                @if (Auth::check())
                    <a href="{{{action('UsersController@show',Auth::user()->id)}}}" class="blog-nav-item"> {{{Auth::user()->username}}}'s, account</a>
                    <a href="{{{action('UsersController@logout')}}}" class="blog-nav-item"> Sign out</a>
                @else
                <ul class="nav navbar-nav navbar-right">
                    <li><p class="navbar-text line_height_class">Already have an account?</p></li>
                    <li class="dropdown">
                        <a class="blog-nav-item" href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="line_height_class">Login</b> <span class="caret"></span></a>
                        <ul id="login-dp" class="dropdown-menu">
                            <li>
                                <div class="row">
                                    <div class="col-md-12">
                                        Login via
                                        <div class="social-buttons">
                                            <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                                            <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                                        </div>
                                        or
                                        {{Form::open(['action'=>'UsersController@doLogin', 'method' => 'post'])}}
                                            <div class="form-group">
                                                {{ Form::label('email', 'Email',['class'=>'sr-only']) }}

                                                {{ Form::text('email', null, [ 'class'=>"form-control",'placeholder' => 'Email address'], 'required') }}
                                                @if ($errors->has('email'))
                                                    {{ $errors->first('email', '<span class="help-block errorsColor">:message</span>') }}
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label('password', 'Password',['class'=>'sr-only']) }}

                                                {{ Form::password('password', [ 'class' => "form-control",'placeholder' => 'Password'], 'required') }}
                                                @if ($errors->has('password'))
                                                    {{ $errors->first('password', '<span class="help-block errorsColor">:message</span>') }}
                                                @endif
                                                <div class="help-block text-right"><a href="">Forgot your password ?</a></div>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> keep me logged-in
                                                </label>
                                            </div>
                                        {{Form::close()}}
                                    </div>
                                    <div class="bottom text-center">
                                        New here ? <a href="{{{action('UsersController@create')}}}"><b>Join Us</b></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
                @endif
                <!-- end login -->
        </nav><!--end nav bar -->
    </div><!-- end blog-masthead navContainer -->
</div><!-- end container navSecond -->





<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content modalStyle">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title textBoxColors" id="myModalLabel">Tomas Leffew</h4>
      </div>
      <div class="modal-body">
        <p class="textBoxColors">Phone: (210)-290-4890</p>
        <br>
        <p class="textBoxColors">Email: <a href="mailto:tleffew1994@gmail.com">tleffew1994@gmail.com</a></p>

      </div>
      <div class="modal-footer">
          <div class="tomasFooter">
              <p class="tomasSize">Tomas Leffew</p>
              <a target="_blank" href="https://www.facebook.com/tomas.leffew.9"><img src="/img/facebooksocial.png" alt="facebook" class="hoverInvert"></a>
              <a target="_blank" href="https://twitter.com/Penthious/"><img src="/img/twittersocial.png" alt="twitter" class="hoverInvert"></a>
              <a target="_blank" href="https://www.linkedin.com/in/penthious"><img src="/img/linkedinsocial.png" alt="facebook" class="hoverInvert"></a>
              <a target="_blank" href="https://github.com/Penthious"><img src="/img/githubsocial.png" alt="facebook" class="hoverInvert" id="githubsocial"></a>
          </div>
        <button id="login_button" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
