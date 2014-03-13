<?php

/* uosuosBundle:Hall:index.html.twig */
class __TwigTemplate_3f0d69acc83de9de4308200de3c88411e02c211b6cbbe1cc77f609cf75e73709 extends Twig_Template
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
        echo "<div class=\"span8\">
    <div class=\"containerHome\" >
        <h1>Hall list</h1>
        
        <script src=\"assets/js/jquery.tablesorter.min.js\"></script>
        <script >
            \$(function() {
                \$(\"table#sortTableExample\").tablesorter({sortList: [[1, 0]]});
            });
        </script>
        <table class=\"table\">
            <thead>
                <tr>
                    <th>Hallname</th>
                    <th>Capacity</th>
                    <th>Gender</th>
                    
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
        ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 26
            echo "                <tr>
                    <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hall_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "hallname"), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "capacity"), "html", null, true);
            echo "</td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "gender"), "html", null, true);
            echo "</td>
                    
                    <td>
                        <ul>
                            <li>
                                <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hall_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">show</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hall_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">edit</a>
                            </li>
                        </ul>
                    </td>
                </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "            </tbody>
        </table>

        <ul>
            <li>
                <a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("hall_new");
        echo "\">
                    Create a new entry
                </a>
            </li>
        </ul>
    ";
    }

    // line 55
    public function block_sideMenu($context, array $blocks = array())
    {
        // line 56
        echo "
        <ul class=\"nav nav-list\">
            <li class=\"nav-header\"><b>Home</b></li>
            <li class=\"active\"><a href=\"\">Welcome</a></li>
            <li><a href=\"\">Add</a></li>
            <li><a href=\"#\">Link</a></li>
            <li><a href=\"";
        // line 62
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
        return "uosuosBundle:Hall:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 62,  118 => 56,  115 => 55,  105 => 48,  98 => 43,  86 => 37,  80 => 34,  72 => 29,  68 => 28,  62 => 27,  59 => 26,  55 => 25,  32 => 4,  29 => 3,);
    }
}
