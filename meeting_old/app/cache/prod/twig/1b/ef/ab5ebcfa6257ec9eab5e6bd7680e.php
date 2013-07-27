<?php

/* CmarMeetingBundle:Room:room.html.twig */
class __TwigTemplate_1befab5ebcfa6257ec9eab5e6bd7680e extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>ROOM</title>
        <style type=\"text/css\">
          html, body, div, iframe { margin:0; padding:0; height:100%; }
          iframe { display:block; width:100%; border:none; }
        </style>
        <link rel=\"shortcut icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("cmar.png"), "html", null, true);
        echo "\" />
    </head>
    <body>
      <iframe src=\"";
        // line 13
        if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
        echo twig_escape_filter($this->env, $_url_, "html", null, true);
        echo "\" ";
        // line 14
        echo "\t      name=\"iframe\" 
\t      scrolling=\"no\" frameborder=\"0\" marginheight=\"0px\" marginwidth=\"0px\"  >
      </iframe>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "CmarMeetingBundle:Room:room.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
