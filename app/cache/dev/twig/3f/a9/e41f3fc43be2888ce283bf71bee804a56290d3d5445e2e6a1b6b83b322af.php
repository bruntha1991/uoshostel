<?php

/* uosuosBundle:Hall:show.html.twig */
class __TwigTemplate_3fa9e41f3fc43be2888ce283bf71bee804a56290d3d5445e2e6a1b6b83b322af extends Twig_Template
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
        // line 5
        echo "<div class=\"span2\">
            <div class=\"containerHome\" >
    <h1>Hall</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Hallname</th>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "hallname"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Capacity</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "capacity"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Gender</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "gender"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li class=\"nav-header\">
        <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("hall");
        echo "\">
            Back to the list
        </a>
    </li>
    <li class=\"nav-header\">
        <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hall_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li class=\"nav-header\">";
        // line 40
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "delete_form"), 'form');
        echo "</li>
</ul>
";
    }

    // line 44
    public function block_sideMenu($context, array $blocks = array())
    {
        // line 45
        echo "
<ul class=\"nav nav-list\">
                <li class=\"nav-header\"><b>Home</b></li>
              <li class=\"active\"><a href=\"\">Welcome</a></li>
              <li><a href=\"\">Add</a></li>
              <li><a href=\"#\">Link</a></li>
              <li><a href=\"";
        // line 51
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
        return "uosuosBundle:Hall:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 51,  94 => 45,  91 => 44,  84 => 40,  77 => 36,  69 => 31,  56 => 21,  49 => 17,  42 => 13,  32 => 5,  29 => 3,);
    }
}
