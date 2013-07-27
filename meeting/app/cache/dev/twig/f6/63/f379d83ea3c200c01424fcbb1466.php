<?php

/* CmarMeetingBundle:Security:recoverError.html.twig */
class __TwigTemplate_f663f379d83ea3c200c01424fcbb1466 extends Twig_Template
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
        echo "eMeeting
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
Error User. Is possible that may not exist. 

";
    }

    public function getTemplateName()
    {
        return "CmarMeetingBundle:Security:recoverError.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
