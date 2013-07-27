<?php

/* CmarMeetingBundle:Security:recover.html.twig */
class __TwigTemplate_2eae10d0eff51f2f488140367c6a5813 extends Twig_Template
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
        echo "<h2 style=\"border-bottom:4px solid #b19653; color:#b19653; font-weight:bold; font-size:18px; margin-bottom: 5px; padding: 0px 0px 5px 10px; margin-bottom:25px;\">Welcome <span style=\"color: #7F7F7F;\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "name"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "surname"), "html", null, true);
        echo "</span>. Reset your Password</h2>


<div style=\"font-size: 16px; margin: 5px;\">
  Enter your New Password below:
</div>



<div class=\"np\" style=\"margin: 10px\">
  <form action=\"#\" method=\"post\" onsubmit=\"return false;\">
    <table>
      <tbody> 
        <tr>
          <td class=\"label\">
            <label for=\"cmar_meetingbundle_passwordtype_password_first\" class=\" required\">
              New Password: 
            </label>
          </td>
          <td>
            <input style=\"width:99%\" type=\"password\" id=\"cmar_meetingbundle_passwordtype_password_first\" name=\"cmar_meetingbundle_passwordtype[password][first]\" required=\"required\" />
          </td>
        </tr>
        <tr>
          <td class=\"label\">    
            <label for=\"cmar_meetingbundle_passwordtype_password_second\" class=\" required\">
              Re-enter Your New Password:
            </label>
          </td>
          <td>
            <input style=\"width:99%\" type=\"password\" id=\"cmar_meetingbundle_passwordtype_password_second\" name=\"cmar_meetingbundle_passwordtype[password][second]\" required=\"required\" />
          </td>
        </tr>
        <tr>
          <td>
            <div class=\"error_password\" style=\"color: #b30000; font-weight: bolder; \">Passwords do not match!</div>
          </td>
          <td style=\"text-align: right;\">
            <input style=\"margin-top: 15px; color: #ffffff; background-color:#b19653; font-size:18px; border: 1px solid #7e6a39; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; cursor: pointer;\" type=\"submit\" name=\"Cambiar\" value=\"Change\"/>
          </td>
        </tr>
      </tbody>
    </table>
  </form>
</div>
";
        // line 52
        $this->env->loadTemplate("CmarMeetingBundle:Security:help.html.twig")->display($context);
        // line 53
        echo "


<script type=\"text/javascript\">
/*<![CDATA[*/

var \$error = \$(\".error_password\");
\$error.hide();

\$(\"form\").on(\"submit\", function(event) {
  /* stop form from submitting normally */
  event.preventDefault(); 
  
  var inputs = \$(this).find('input');
  var input_1 = inputs.first(),
      input_2 = inputs.eq(1);

  if (input_1.val() !== input_2.val()) {
    \$error.show();
  } else { 
    \$error.hide();
    \$.post(\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("recover", array("email" => $this->getAttribute($this->getContext($context, "user"), "email"), "hash" => $this->getContext($context, "hash"))), "html", null, true);
        echo "\", 
           { password: input_1.val() },
           function( data ) {
               \$('.np').html(data);
           }
    );
  }
});


/*]]>*/
</script>

";
    }

    public function getTemplateName()
    {
        return "CmarMeetingBundle:Security:recover.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
