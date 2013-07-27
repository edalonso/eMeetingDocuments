<?php

/* CmarMeetingBundle:Security:recoverHashError.html.twig */
class __TwigTemplate_85a7b773b4c2793c0a7aa14aae6fd489 extends Twig_Template
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

<h2>Error Link Chage Password</h2>


<div>
  To reset your password, enter the email you use to sign in to \"Campus do Mar\".
</div>


<div class=\"np\">
  <div style=\"text-align: center; text-shadow: 0px 1px 0px black\">
    <div style=\"font-size: 36px; padding: 20px; \"> <span class=\"icon close\"></span> Error Link. </div>
    <div> Is possible that this link has expired. Try again at this <a style=\"\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index_welcome"), "html", null, true);
        echo "\">link</a> </div>
  </div>
</div>
";
        // line 23
        $this->env->loadTemplate("CmarMeetingBundle:Security:help.html.twig")->display($context);
        // line 24
        echo "

";
    }

    public function getTemplateName()
    {
        return "CmarMeetingBundle:Security:recoverHashError.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
