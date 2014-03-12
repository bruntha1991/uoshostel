<?php

/* uosuosBundle:Default:uos.html.twig */
class __TwigTemplate_be0849013fa4d437f132fe26d72d5e66ae81303b00e59260fa6f13af0252ce77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <title>University of Sumanadasa, Halls Management System</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <!-- Le styles -->
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <style type=\"text/css\">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src=\"../assets/js/html5shiv.js\"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/ico/apple-touch-icon-144-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/ico/apple-touch-icon-114-precomposed.png"), "html", null, true);
        echo "\">
      <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/ico/apple-touch-icon-72-precomposed.png"), "html", null, true);
        echo "\">
                    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/ico/apple-touch-icon-57-precomposed.png"), "html", null, true);
        echo "\">
                                   <link rel=\"shortcut icon\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/ico/favicon.png"), "html", null, true);
        echo "\">
  </head>

  <body>

    <div class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"navbar-inner\">
        <div class=\"container\">
          <button type=\"button\" class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"brand\" href=\"#\">Halls Management System for University of Sumanadasa</a>
          <div class=\"nav-collapse collapse\">
            <ul class=\"nav\">
   <!--           <li class=\"active\"><a href=\"#\">Home</a></li>
              <li><a href=\"#about\">About</a></li>
              <li><a href=\"#contact\">Contact</a></li>
              <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Dropdown <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"#\">Action</a></li>
                  <li><a href=\"#\">Another action</a></li>
                  <li><a href=\"#\">Something else here</a></li>
                  <li class=\"divider\"></li>
                  <li class=\"nav-header\">Nav header</li>
                  <li><a href=\"#\">Separated link</a></li>
                  <li><a href=\"#\">One more separated link</a></li>
                </ul>
              </li>
      -->

            </ul>
                  
              
            <form class=\"navbar-form pull-right\" method =\"POST\" action=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("uosuos_uos");
        echo "\">
              <input class=\"span2\" name=\"user_id\" type=\"text\" placeholder=\"User ID\">
              <input class=\"span2\" name=\"password\" type=\"password\" placeholder=\"Password\">
              <button type=\"submit\" class=\"btn\">Sign in</button>
            </form>





          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class=\"container\">

      <!-- Main hero unit for a primary marketing message or call to action -->
      
<div id=\"myCarousel\" class=\"carousel slide\">
      <div class=\"carousel-inner\">
        <div class=\"item active\">
            
      ";
        // line 89
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e0c97ce_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e0c97ce_0") : $this->env->getExtension('assets')->getAssetUrl("/images/example_slide-01_1.jpg");
            // line 91
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" alt=\"Example\"/>
";
        } else {
            // asset "e0c97ce"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e0c97ce") : $this->env->getExtension('assets')->getAssetUrl("/images/example.jpg");
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" alt=\"Example\"/>
";
        }
        unset($context["asset_url"]);
        // line 93
        echo " 
<div class=\"container\">
            <div class=\"carousel-caption\">
              <h1>Example headline.</h1>
              <p class=\"lead\">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class=\"btn btn-large btn-primary\" href=\"#\">Sign up today</a>
            </div>
          </div>
        </div>
        <div class=\"item\">
          ";
        // line 103
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e8d2308_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e8d2308_0") : $this->env->getExtension('assets')->getAssetUrl("/images/example_slide-02_1.jpg");
            // line 105
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" alt=\"Example\"/>
";
        } else {
            // asset "e8d2308"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e8d2308") : $this->env->getExtension('assets')->getAssetUrl("/images/example.jpg");
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" alt=\"Example\"/>
";
        }
        unset($context["asset_url"]);
        // line 107
        echo "          <div class=\"container\">
            <div class=\"carousel-caption\">
              <h1>Another example headline.</h1>
              <p class=\"lead\">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class=\"btn btn-large btn-primary\" href=\"#\">Learn more</a>
            </div>
          </div>
        </div>
        <div class=\"item\">
          ";
        // line 116
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b53d663_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b53d663_0") : $this->env->getExtension('assets')->getAssetUrl("/images/example_slide-03_1.jpg");
            // line 118
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" alt=\"Example\"/>
";
        } else {
            // asset "b53d663"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b53d663") : $this->env->getExtension('assets')->getAssetUrl("/images/example.jpg");
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" alt=\"Example\"/>
";
        }
        unset($context["asset_url"]);
        // line 120
        echo "          <div class=\"container\">
            <div class=\"carousel-caption\">
              <h1>One more for good measure.</h1>
              <p class=\"lead\">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class=\"btn btn-large btn-primary\" href=\"#\">Browse gallery</a>
            </div>
          </div>
        </div>
      </div>
      <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">&lsaquo;</a>
      <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">&rsaquo;</a>
    </div><!-- /.carousel -->
    





      <!-- Example row of columns -->
      
      <div class=\"row\">
        <div class=\"span4\">
            
          <h3>About us</h3>
          
          <p>us commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          
        </div>
        <div class=\"span4\">
          <h3>Contact us</h3>
          <p>
          Brunthavan Murugaiah </br>
          University of Moratuwa </br>
          Srilanka
          </p>
          
       </div>
        <div class=\"span4\">
          <h3>More details</h3>
          <p>a porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          
        </div>
      </div>
              
      <hr>

      <footer>
        <p>&copy; Augmented Software Solutions 2014</p>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap-transition.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap-alert.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap-modal.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap-dropdown.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap-scrollspy.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap-tab.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap-tooltip.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap-popover.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap-button.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap-collapse.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap-carousel.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap-typeahead.js"), "html", null, true);
        echo "\"></script>

  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "uosuosBundle:Default:uos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 187,  311 => 186,  307 => 185,  303 => 184,  299 => 183,  295 => 182,  291 => 181,  287 => 180,  283 => 179,  279 => 178,  275 => 177,  271 => 176,  267 => 175,  210 => 120,  196 => 118,  192 => 116,  181 => 107,  167 => 105,  163 => 103,  151 => 93,  137 => 91,  133 => 89,  107 => 66,  68 => 30,  64 => 29,  60 => 28,  56 => 27,  52 => 26,  41 => 18,  31 => 11,  19 => 1,);
    }
}
