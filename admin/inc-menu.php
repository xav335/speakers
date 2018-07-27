	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                	<div class="navbar-header">
	                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	                        <span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
	                    </button>
                    <a class="navbar-brand" href="/admin/"><img src="/admin/img/logo2.png" height="35"/></a>
                	</div>
                	<div class="col-md-6 collapse navbar-collapse">
	           			<ul class="nav navbar-nav">
	           				<li class="dropdown">
					          	<a href="news-list.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Actualités Asso et Pro<span class="caret"></span></a>
					          	<ul class="dropdown-menu" role="menu">
					            	<li><a href="news-edit.php">Ajout</a></li>
					            	<li><a href="news-list.php">Modif / Suppr</a></li>
					          	</ul>
					        </li>
	                        <li class="dropdown">
					          	<a href="goldbook-list.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Livre d'or Asso<span class="caret"></span></a>
					          	<ul class="dropdown-menu" role="menu">
					            	<li><a href="goldbook-edit.php">Ajout</a></li>
					            	<li><a href="goldbook-list.php">Modif / Suppr</a></li>
					          	</ul>
					        </li>
	                         <li class="dropdown">
					          	<a href="goldbookpro-list.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Livre d'or Pro<span class="caret"></span></a>
					          	<ul class="dropdown-menu" role="menu">
					            	<li><a href="goldbookpro-edit.php">Ajout</a></li>
					            	<li><a href="goldbookpro-list.php">Modif / Suppr</a></li>
					          	</ul>
					        </li>
					        
	                    </ul>
                    </div> 
                    <div class="col-md-2 collapse navbar-collapse">
                      	<a class="btn btn-success pull-right" href="/admin/?action=getout">Déconnexion</a>
                     </div> 
                </div><!--/.nav-collapse -->
               
            </div>
        </nav>
<script type="text/javascript">
$(document).ready(function () {
	var url = window.location;
	// Will only work if string in href matches with location
	$('ul.nav a[href="'+ url +'"]').parent().addClass('active');

	// Will also work for relative and absolute hrefs
	$('ul.nav a').filter(function() {
	    return this.href == url;
	}).parent().addClass('active');
	});
</script>
