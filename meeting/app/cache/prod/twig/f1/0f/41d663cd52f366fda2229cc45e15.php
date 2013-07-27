<?php

/* CmarMeetingBundle:Security:mailSent.html.twig */
class __TwigTemplate_f10f41d663cd52f366fda2229cc45e15 extends Twig_Template
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

<h2 style=\"border-bottom:4px solid #b19653; color:#b19653; font-weight:bold; font-size:18px; margin-bottom: 5px; padding: 0px 0px 5px 10px; margin-bottom:25px;\">Application Form Change Password</h2>


<div style=\"font-size: 16px; margin: 5px;\">
  To reset your password, enter the email you use to sign in to \"Campus do Mar\".
</div>


<div class=\"np\" style=\"padding: 20px 0px; margin: 10px\">
  <div style=\"text-align: center; text-shadow: 0px 1px 0px black\">
    <div style=\"font-size: 36px; padding: 20px; \"> <span class=\"icon mail\"></span> Email sent. </div>
    <div style=\"font-size: 18px\">Follow the instructions we've sent to your email address.</div>
    <div style=\"font-size: 18px\">Didn't receive the password reset email? Check your spam folder for an email from no-reply@campusdomar.es</div>
  </div>
</div>
";
        // line 24
        $this->env->loadTemplate("CmarMeetingBundle:Security:help.html.twig")->display($context);
        // line 25
        echo "
";
    }

    public function getTemplateName()
    {
        return "CmarMeetingBundle:Security:mailSent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
