<?php

/* uosuosBundle:Hall:edit.html.twig */
class __TwigTemplate_fcb1e10c39c4529f37cb003be76a9f181167909725032c728cdc251e58158c4d extends Twig_Template
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

    // line 3
    public function block_container($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"span10\">
            <div class=\"containerHome\" >
    <h1>Hall edit</h1>

    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "edit_form"), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("hall");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "delete_form"), 'form');
        echo "</li>
</ul>
";
    }

    // line 20
    public function block_sideMenu($context, array $blocks = array())
    {
        // line 21
        echo "
<ul class=\"nav nav-list\">
                <li class=\"nav-header\"><b>Home</b></li>
              <li class=\"active\"><a href=\"\">Welcome</a></li>
              <li><a href=\"\">Add</a></li>
              <li><a href=\"#\">Link</a></li>
              <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("room_new");
        echo "\">Link</a></li>
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
        return "uosuosBundle:Hall:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 27,  62 => 21,  59 => 20,  52 => 16,  45 => 12,  38 => 8,  32 => 4,  29 => 3,);
    }
}
