<?php

/* CmarMeetingBundle:Wizard:users.html.twig */
class __TwigTemplate_627cb2b9df89aca86073770c22a3d0b4 extends Twig_Template
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
        echo "Users
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("wizard_metadata"), "html", null, true);
        echo "\">Metadata</a> &raquo; <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("wizard_date"), "html", null, true);
        echo "\">Date</a> &raquo; <a href=\"#\">Users</a> &raquo; End

<form action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("wizard_users_submit"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
    ";
        // line 10
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
    <p>
        <button type=\"submit\">Finish</button>
    </p>
</form>
";
    }

    public function getTemplateName()
    {
        return "CmarMeetingBundle:Wizard:users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
