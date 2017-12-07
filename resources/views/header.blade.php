<div class="navbar">
    <nav class="navbar navbar-default">
  		<div class="container-fluid">
	    	<div class="navbar-header">
	      		<a class="navbar-brand" href="/">Thetford Family Cookbook</a>
	    	</div>
	    	@if(Auth::check())
	    	<ul class="nav navbar-nav">
		      <li><a href="/favorites">My Favorites</a></li>
		      <li><a href="/addRecipe">Add Recipe</a></li>
	      	</ul>
	      	<div class="top-right links">
                    <a href="{{ url('/logout') }}">Logout</a>
            </div>
	    	@endif

	    	@if(Auth::guest())
	    		<div class="top-right links">
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                </div>
	    	@endif
  		</div>
	</nav>
</div>

<style type="text/css">
	
	.top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
</style>
