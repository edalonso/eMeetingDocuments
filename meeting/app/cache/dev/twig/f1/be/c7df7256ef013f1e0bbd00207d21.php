<?php

/* CmarMeetingBundle:Wizard:date.html.twig */
class __TwigTemplate_f1bec7df7256ef013f1e0bbd00207d21 extends Twig_Template
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

";
        // line 9
        if ($this->getContext($context, "ErrorForDate")) {
            // line 10
            echo "<div><ul><li>";
            echo twig_escape_filter($this->env, $this->getContext($context, "ErrorForDate"), "html", null, true);
            echo "</li></ul></div>
";
        }
        // line 12
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("wizard_date_submit"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
    ";
        // line 13
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
        return "CmarMeetingBundle:Wizard:date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
