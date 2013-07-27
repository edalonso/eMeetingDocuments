<?php

/* CmarMeetingBundle:Wizard:error.html.twig */
class __TwigTemplate_796e3208b014d4100b5740da7662dc07 extends Twig_Template
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
        echo "Date
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("wizard_metadata"), "html", null, true);
        echo "\">Metadata</a> &raquo; <a href=\"#\">Date</a> &raquo; Users &raquo; End

<div>Meeting do not created, contact with your admin</div>

";
    }

    public function getTemplateName()
    {
        return "CmarMeetingBundle:Wizard:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
