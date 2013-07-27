<?php

/* CmarMeetingBundle:Wizard:end.html.twig */
class __TwigTemplate_0e3d6ec1976a79f698eae8df4eb99993 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CmarMeetingBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "End
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "Metadata &raquo; Data &raquo; Users &raquo; End

END!!!!!

<ul>
<li>title: ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "title"), "html", null, true);
        echo "</li>
<li>description: ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "description"), "html", null, true);
        echo "</li>
<li>date: ";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "date"), "F jS \\a\\t g:ia"), "html", null, true);
        echo "</li>
<li>duration: ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "duration"), "html", null, true);
        echo "</li>
<li>public: ";
        // line 16
        if ($this->getAttribute($this->getContext($context, "meeting"), "public")) {
            echo " public ";
        } else {
            echo " private ";
        }
        echo "</li>
</ul>

<a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index"), "html", null, true);
        echo "\">Volver al menu</a>

";
    }

    public function getTemplateName()
    {
        return "CmarMeetingBundle:Wizard:end.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
