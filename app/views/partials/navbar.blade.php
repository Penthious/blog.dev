
<div class="blog-masthead navContainer">
    <div class="container navSecond">
        <nav class="blog-nav">
            <a id="homeNav" class="blog-nav-item" href="{{{action('PostsController@index')}}}">Home</a>
            <a id="portfolioNav" class="blog-nav-item" href="{{{action('HomeController@showPortfolio')}}}">Portfolio</a>
            <a id="resumeNav" class="blog-nav-item" href="{{{action('HomeController@showResume')}}}">Resume</a>
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

            <a class="blog-nav-item" data-toggle="modal" data-target="#myModal"> Contact</a>
        </nav>
    </div>
</div>




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
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
