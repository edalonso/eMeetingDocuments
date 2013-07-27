<?php

/* CmarMeetingBundle:Security:welcome.html.twig */
class __TwigTemplate_79e46983b5940021a5f75b7e03b60480 extends Twig_Template
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

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<h2 style=\"border-bottom:4px solid #b19653; color:#b19653; font-weight:bold; font-size:18px; margin-bottom: 5px; padding: 0px 0px 5px 10px; margin-bottom:25px;\">Application Form Change Password</h2>


<div style=\"font-size: 16px; margin: 5px;\">
  To reset your password, enter the email you use to sign in to \"Campus do Mar\".
</div>


<div class=\"np\" style=\"margin: 10px\">
  <form action=\"#\" method=\"post\">
    <table style=\"width: 100%;width: 300px; text-align: right;\">
      <tbody> 
        <tr>
          <td style=\"width: 300px;text-align: right;\">
            <label styte=\"font-weight: bolder;padding-right: 20px;\" for=\"email\" class=\" required\">Email: </label>
          </td>
          <td>
            <input style=\"width:300%\" type=\"email\" id=\"email\" name=\"email\" required=\"required\" />
          </td>
        </tr>
        <tr>
          <td>
            ";
        // line 30
        if ($this->getContext($context, "error")) {
            // line 31
            echo "              <div style=\"color: #b30000; font-weight: bolder;\">Email error.</div>
            ";
        }
        // line 33
        echo "          </td>
          <td style=\"text-align: right;\">
            <input type=\"submit\" style=\"margin-top: 15px; color: #ffffff; background-color:#b19653; font-size:18px; border: 1px solid #7e6a39; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; cursor: pointer;\" name=\"Cambiar\" value=\"Change\"/>
          </td>
        </tr>
      </tbody>
    </table>
  </form>
</div>
";
        // line 42
        $this->env->loadTemplate("CmarMeetingBundle:Security:help.html.twig")->display($context);
        // line 43
        echo "
";
    }

    public function getTemplateName()
    {
        return "CmarMeetingBundle:Security:welcome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
