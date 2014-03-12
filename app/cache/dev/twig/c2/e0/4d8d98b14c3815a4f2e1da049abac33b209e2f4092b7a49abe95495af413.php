<?php

/* uosuosBundle:Hall:new.html.twig */
class __TwigTemplate_c2e04d8d98b14c3815a4f2e1da049abac33b209e2f4092b7a49abe95495af413 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'container' => array($this, 'block_container'),
            'sideMenu' => array($this, 'block_sideMenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_container($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"span10\">
            <div class=\"containerHome\" >
                
    <h1>Hall creation</h1>

    ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("hall");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
    }

    // line 24
    public function block_sideMenu($context, array $blocks = array())
    {
        // line 25
        echo "
<ul class=\"nav nav-list\">
                <li class=\"nav-header\"><b>Home</b></li>
              <li class=\"active\"><a href=\"\">Welcome</a></li>
              <li><a href=\"\">Add</a></li>
              <li><a href=\"#\">Link</a></li>
              <li><a href=\"#\">Link</a></li>
              <li class=\"nav-header\">Sidebar</li>
              <li><a href=\"#\">Link</a></li>
              <li><a href=\"#\">Link</a></li>
              <li><a href=\"#\">Link</a></li>
              <li><a href=\"#\">Link</a></li>
              <li><a href=\"#\">Link</a></li>
              <li><a href=\"#\">Link</a></li>
              <li class=\"nav-header\">Hall Hall Hall</li>
              <li><a href=\"\">Add Hall</a></li>
              <li><a href=\"\">Edit Hall</a></li>
              <li><a href=\"\">Delete Hall</a></li>              
            </ul>
";
    }

    public function getTemplateName()
    {
        return "uosuosBundle:Hall:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 25,  56 => 24,  46 => 17,  39 => 13,  32 => 8,  29 => 7,);
    }
}
