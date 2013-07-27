<?php

/* CmarMeetingBundle:Wizard:metadata.html.twig */
class __TwigTemplate_f0f4a90cc928da7e11d7e8ab77edc4de extends Twig_Template
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
        echo "Metadata
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<a href=\"#\">Metadata</a> &raquo; Date &raquo; Users &raquo; End

<form action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("wizard_metadata_submit"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
    ";
        // line 10
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
    <p>
        <button type=\"submit\">Next &raquo;</button>
    </p>
</form>
";
    }

    public function getTemplateName()
    {
        return "CmarMeetingBundle:Wizard:metadata.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
