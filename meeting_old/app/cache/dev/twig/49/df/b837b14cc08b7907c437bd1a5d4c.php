<?php

/* CmarMeetingBundle:Security:login.html.twig */
class __TwigTemplate_49dfb837b14cc08b7907c437bd1a5d4c extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta content=\"text/html; charset=utf-8\" http-equiv=\"content-type\">
  <link rel=\"shortcut icon\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("cmar.png"), "html", null, true);
        echo "\" />
  <title>eMeeting</title>
  <link rel=\"STYLESHEET\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cmarmeeting/css/reset.css"), "html", null, true);
        echo " \"/>
  <link rel=\"STYLESHEET\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cmarmeeting/css/login.css"), "html", null, true);
        echo " \"/>
  <link rel=\"STYLESHEET\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cmarmeeting/css/meeting.css"), "html", null, true);
        echo " \"/>\t  
</head>

<body id=\"login\">
  <div id=\"wrappertop\"></div>
  
  <div id=\"wrapper\">
    <div id=\"content\">
      <div id=\"header\">
\t<h1><a target=\"_blank\" href=\"http://www.campusdomar.es\"><img style=\"display: block; margin-left: auto; margin-right: auto;\" alt=\"Campus do Mar\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cmarmeeting/images/campusdomar_logo.gif"), "html", null, true);
        echo " \"></a></h1>
      </div>
      <div id=\"darkbanner\" class=\"banner320\">
\t<h2>Login</h2>
      </div>
      <div id=\"darkbannerwrap\"> </div>
      ";
        // line 24
        if ($this->getContext($context, "error")) {
            // line 25
            echo "        ";
            if (($this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "error"), "message")) != "Your session has timed-out, or you have disabled cookies.")) {
                // line 26
                echo "          <div id=\"mbox-cont\" class=\"mbox-cont\" style=\"color: red\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "error"), "message")), "html", null, true);
                echo "</div>
          <script type=\"text/javascript\">
            setTimeout(function(){\$(\"#mbox-cont\").fadeOut(5000);}, 5000);
          </script>
        ";
            }
            // line 31
            echo "      ";
        }
        echo "      
      <form action=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_check"), "html", null, true);
        echo "\" method=\"post\">
\t<fieldset class=\"form\">
\t  <label for=\"username\">Email:</label>
\t  <input style=\"height: 20px\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" />
\t  
\t  <label for=\"password\">Password:</label>
\t  <input style=\"height: 20px\" type=\"password\" id=\"password\" name=\"_password\" />
\t  
\t  ";
        // line 44
        echo "\t  <ul id=\"forgottenpassword\">
\t    <li>
\t      <input style=\"width: 80px; font-size: 15px; background: url(";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cmarmeeting/images/key.png"), "html", null, true);
        echo ") no-repeat 0 0 transparent; background-position: 4px 6px; background-color: #FFFFFF; margin-left: 80px\" type=\"submit\" name=\"login\" value=\"Login\"/>
\t    </li>
\t
\t    <li class=\"boldtext\">|</li>
\t    <li>
\t      <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index_welcome"), "html", null, true);
        echo "\">Forgotten it?</a>
\t    </li>
\t  </ul>
\t</fieldset>
      </form>
    </div>
  </div>
</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "CmarMeetingBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
