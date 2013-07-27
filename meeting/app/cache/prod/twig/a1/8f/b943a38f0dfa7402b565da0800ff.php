<?php

/* CmarMeetingBundle:Room:error.html.twig */
class __TwigTemplate_a18fb943a38f0dfa7402b565da0800ff extends Twig_Template
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
<div class=\"welcome\">
  <h2>Error Meeting Room</h2>
</div>

";
        // line 12
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 13
            echo "<left style=\"margin: 10px;\">
  <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin"), "html", null, true);
            echo "\" style=\"text-decoration:none\"><button class=\"button\"><i class=\"icon-admin icon-white\"></i> Admin</button></a>
</left>
";
        }
        // line 17
        echo "<div class=\"welcome\" style=\"margin: 10px;\">
  <div class=\"np\">
    ";
        // line 19
        echo twig_escape_filter($this->env, $this->getContext($context, "error_type"), "html", null, true);
        echo "
    <p style=\"padding: 20px 0px 10px 0px\">Contact the administrator: &nbsp;<a href=\"mailto:support@campusdomar.es\" style=\"color: white\">support@campusdomar.es</a> &nbsp;or &nbsp;Tel.: +34 986130013</p>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "CmarMeetingBundle:Room:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
