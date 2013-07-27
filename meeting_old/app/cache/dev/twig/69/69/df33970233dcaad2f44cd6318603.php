<?php

/* CmarMeetingBundle:User:admin.html.twig */
class __TwigTemplate_6969df33970233dcaad2f44cd6318603 extends Twig_Template
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
        echo "Admin:
<ul>
  <li><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("meeting"), "html", null, true);
        echo "\" style=\"color: #000\">Admin Meeting</a></li>
  <li><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user"), "html", null, true);
        echo "\" style=\"color: #000\">Admin User</a></li>
  <li><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group"), "html", null, true);
        echo "\" style=\"color: #000\">Admin Group</a></li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "CmarMeetingBundle:User:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
