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
        // line 15
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("cmar.png"), "html", null, true);
        echo "\" />
        ";
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "    </head>
    <body onload=\"updateClock(); setInterval('updateClock()', 1000 )\">
      <div id=\"top\"></div>
      <div id=\"content\" style=\"box-shadow: 0 2px 4px rgba(0, 0, 0, 0.6);-moz-box-shadow: 0 2px 4px rgba(0, 0, 0, 0.6);\">
        <div style=\"font-size: 12px; background: url(";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cmarmeeting/images/sprite.png"), "html", null, true);
        echo ") repeat-x scroll 0 0 transparent; padding-top: 2px; padding-bottom: 4px;\">
\t  <div style=\"margin: 10px 10px 10px 14px; line-height: 0.8;\">
            <span id=\"clock\">&nbsp;</span>
            <span style=\"float: right; font-weight: bold; margin-right: 1%\">";
        // line 28
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "app"), "user")) ? ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username")) : ("Anonymous")), "html", null, true);
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
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cmarmeeting/images/banner_emeeting.png"), "html", null, true);
        echo "\"/>
\t  </div> 

        </div>
        ";
        // line 39
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "notice"), "method")) {
            // line 40
            echo "        <div id=\"mbox-cont\" class=\"mbox-cont\">
          ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "notice"), "method"), "html", null, true);
            echo "
        </div>  
\t<script type=\"text/javascript\">
           setTimeout(function(){\$(\"#mbox-cont\").fadeOut(5000);}, 5000);
\t</script>
        ";
        }
        // line 47
        echo "
        ";
        // line 48
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "error"), "method")) {
            // line 49
            echo "          <div id=\"mbox-cont1\" class=\"mbox-cont\" style=\"color:red\">
            ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "error"), "method"), "html", null, true);
            echo "
          </div>
\t<script type=\"text/javascript\">
           setTimeout(function(){\$(\"#mbox-cont1\").fadeOut(5000);}, 5000);
\t</script>
        ";
        }
        // line 56
        echo "        
        <div style=\"margin: 0px; position: relative\">
          ";
        // line 58
        $this->displayBlock('body', $context, $blocks);
        // line 59
        echo "        </div>
        
        <div id=\"footer\">
          <div id=\"waves\"></div>
          <div style=\"padding: 10px 0; background-color: #333333; color: #929292\">
            <div>
              <img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cmarmeeting/images/logos-pie.png"), "html", null, true);
        echo "\" alt=\"patrocinadores\">
              <p style=\"font-size: 12px\">
                Proxecto financiado polo Ministerio de Educaci&oacute;n no marco do programa Campus de Excelencia Internacional
              </p>
            </div>
          </div>
        </div>
      </div>
      <div id=\"message\">
\t<a style=\"text-decoration: none; color: #222222;font-weight: bold;\" href=\"#top\">Back to Top</a>
\t<span></span>
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cmarmeeting/css/0-reset.css"), "html", null, true);
        echo " \"/>
          <link rel=\"STYLESHEET\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cmarmeeting/css/1-cmar.css"), "html", null, true);
        echo " \"/>
          <link rel=\"STYLESHEET\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cmarmeeting/css/1-meeting.css"), "html", null, true);
        echo " \"/>
          <link rel=\"STYLESHEET\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cmarmeeting/css/4-tipTip.css"), "html", null, true);
        echo " \"/>
          <link rel=\"STYLESHEET\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cmarmeeting/css/6-token-input.css"), "html", null, true);
        echo " \"/>
          <link rel=\"STYLESHEET\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cmarmeeting/css/5-jquery.karmicgraphs.css"), "html", null, true);
        echo " \"/>
          <link rel=\"STYLESHEET\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cmarmeeting/css/6-bootstrap.css"), "html", null, true);
        echo " \"/>
\t";
    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        // line 17
        echo "\t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "db0f246_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_db0f246_0") : $this->env->getExtension('assets')->getAssetUrl("js/db0f246_part_1_0-jquery-1.7.1.min_1.js");
            // line 18
            echo "\t  <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t";
            // asset "db0f246_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_db0f246_1") : $this->env->getExtension('assets')->getAssetUrl("js/db0f246_part_1_1-jquery-ui-1.8.18.custom.min_2.js");
            echo "\t  <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t";
            // asset "db0f246_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_db0f246_2") : $this->env->getExtension('assets')->getAssetUrl("js/db0f246_part_1_2-jquery.tipTip_3.js");
            echo "\t  <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t";
            // asset "db0f246_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_db0f246_3") : $this->env->getExtension('assets')->getAssetUrl("js/db0f246_part_1_2-js_4.js");
            echo "\t  <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t";
            // asset "db0f246_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_db0f246_4") : $this->env->getExtension('assets')->getAssetUrl("js/db0f246_part_1_2-tabla_5.js");
            echo "\t  <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t";
            // asset "db0f246_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_db0f246_5") : $this->env->getExtension('assets')->getAssetUrl("js/db0f246_part_1_3-addbox_6.js");
            echo "\t  <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t";
            // asset "db0f246_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_db0f246_6") : $this->env->getExtension('assets')->getAssetUrl("js/db0f246_part_1_4-autocomplete_7.js");
            echo "\t  <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t";
            // asset "db0f246_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_db0f246_7") : $this->env->getExtension('assets')->getAssetUrl("js/db0f246_part_1_5-modal_dialog_8.js");
            echo "\t  <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t";
            // asset "db0f246_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_db0f246_8") : $this->env->getExtension('assets')->getAssetUrl("js/db0f246_part_1_6-desplegable_9.js");
            echo "\t  <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t";
            // asset "db0f246_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_db0f246_9") : $this->env->getExtension('assets')->getAssetUrl("js/db0f246_part_1_7-jquery.tokeninput_10.js");
            echo "\t  <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t";
            // asset "db0f246_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_db0f246_10") : $this->env->getExtension('assets')->getAssetUrl("js/db0f246_part_1_8-meeting_11.js");
            echo "\t  <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t";
            // asset "db0f246_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_db0f246_11") : $this->env->getExtension('assets')->getAssetUrl("js/db0f246_part_1_9-jquery.karmicgraphs_12.js");
            echo "\t  <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t";
            // asset "db0f246_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_db0f246_12") : $this->env->getExtension('assets')->getAssetUrl("js/db0f246_part_1_99-anonymous_13.js");
            echo "\t  <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t";
            // asset "db0f246_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_db0f246_13") : $this->env->getExtension('assets')->getAssetUrl("js/db0f246_part_1_onTop_14.js");
            echo "\t  <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t";
        } else {
            // asset "db0f246"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_db0f246") : $this->env->getExtension('assets')->getAssetUrl("js/db0f246.js");
            echo "\t  <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
\t";
        }
        unset($context["asset_url"]);
        // line 20
        echo "        ";
    }

    // line 58
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
