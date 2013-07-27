<?php

/* CmarMeetingBundle::base.html.twig */
class __TwigTemplate_b0534bf6aa09502b6a869a78a4b4f1a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("cmar.png"), "html", null, true);
        echo "\" />
        ";
        // line 14
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "    </head>
    <body onload=\"updateClock(); setInterval('updateClock()', 1000 )\">
      <div id=\"content\" style=\"box-shadow: 0 2px 4px rgba(0, 0, 0, 0.6);-moz-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.6);\">
        <div style=\"font-size: 12px; background: url(";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cmarmeeting/images/sprite.png"), "html", null, true);
        echo ") repeat-x scroll 0 0 transparent; padding-top: 2px; padding-bottom: 4px;\">
\t  <div style=\"margin: 10px 10px 10px 14px; line-height: 0.8;\">
            <span id=\"clock\">&nbsp;</span>
            <span style=\"float: right; font-weight: bold; margin-right: 1%\">";
        // line 24
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_app_, "user")) ? ($this->getAttribute($this->getAttribute($_app_, "user"), "username")) : ("Anonymous")), "html", null, true);
        echo " - <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("logout"), "html", null, true);
        echo "\" style=\"font-weight: normal;\">Logout</a></span>
\t  </div>
        </div>
        <div id=\"hear\">
\t  <div style=\"float:right;\">
\t  </div>
          <div>
\t    <img alter=\"CAMPUSDOMAR\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cmarmeeting/images/banner_emeeting.png"), "html", null, true);
        echo "\"/>
\t  </div> 

        </div>

        ";
        // line 36
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($this->getAttribute($_app_, "session"), "hasFlash", array(0 => "notice"), "method")) {
            // line 37
            echo "        <div id=\"mbox-cont\" class=\"mbox-cont\">
          ";
            // line 38
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "session"), "flash", array(0 => "notice"), "method"), "html", null, true);
            echo "
        </div>  
\t<script type=\"text/javascript\">
           setTimeout(function(){\$(\"#mbox-cont\").fadeOut(5000);}, 5000);
\t</script>
        ";
        }
        // line 44
        echo "
        ";
        // line 45
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($this->getAttribute($_app_, "session"), "hasFlash", array(0 => "error"), "method")) {
            // line 46
            echo "          <div id=\"mbox-cont1\" class=\"mbox-cont\" style=\"color:red\">
            ";
            // line 47
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "session"), "flash", array(0 => "error"), "method"), "html", null, true);
            echo "
          </div>
\t<script type=\"text/javascript\">
           setTimeout(function(){\$(\"#mbox-cont1\").fadeOut(5000);}, 5000);
\t</script>
        ";
        }
        // line 53
        echo "        
        <div style=\"margin: 0px; position: relative\">
          ";
        // line 55
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo "        </div>
        
        <div id=\"footer\">
          <div id=\"waves\"></div>
          <div style=\"padding: 10px 0; background-color: #333333; color: #929292\">
            <div>
              <img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cmarmeeting/images/logos-pie.png"), "html", null, true);
        echo "\" alt=\"patrocinadores\">
              <p style=\"font-size: 12px\">
                Proxecto financiado polo Ministerio de Educaci&oacute;n no marco do programa Campus de Excelencia Internacional
              </p>
            </div>
          </div>
        </div>
      </div>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "          <link rel=\"STYLESHEET\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cmarmeeting/css/reset.css"), "html", null, true);
        echo " \"/>
          <link rel=\"STYLESHEET\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cmarmeeting/css/cmar.css"), "html", null, true);
        echo " \"/>
          <link rel=\"STYLESHEET\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cmarmeeting/css/meeting.css"), "html", null, true);
        echo " \"/>
          <link rel=\"STYLESHEET\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cmarmeeting/css/tipTip.css"), "html", null, true);
        echo " \"/>
          <link rel=\"STYLESHEET\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cmarmeeting/css/token-input.css"), "html", null, true);
        echo " \"/>
\t";
    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        // line 15
        echo "           <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cmarmeeting/js/js.js"), "html", null, true);
        echo "\"></script>
           <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cmarmeeting/js/jquery-1.7.1.min.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "CmarMeetingBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
