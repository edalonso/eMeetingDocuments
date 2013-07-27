<?php

/* CmarMeetingBundle:User:adoTest.html.twig */
class __TwigTemplate_26692694c30b39ca921c8874a330af77 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<iframe style=\"height:196px;  width:760px\" border-radius=\"4px\" frameborder=\"0\" src=\"https://ado.campusdomar.es/common/intro/test.swf\"></iframe>

<!--  <object width=\"763\" align=\"middle\" height=\"200\" codebase=\"http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,1,0,0\" classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\" id=\"test\">
    <param value=\"https://ado.campusdomar.es/common/intro/test.swf\" name=\"MOVIE\">
    <param value=\"high\" name=\"QUALITY\">
    <param value=\"noscale\" name=\"SCALE\">
    <param value=\"/common/intro\" name=\"BASE\">
    <param value=\"false\" name=\"MENU\">
    <param value=\"#ffffff\" name=\"BGCOLOR\">
    <param value=\"sameDomain\" name=\"ALLOWSCRIPTACCESS\">
    <param value=\"true\" name=\"ALLOWFULLSCREEN\">
    <embed width=\"763\" align=\"middle\" height=\"200\" allowfullscreen=\"true\" allowscriptaccess=\"sameDomain\" bgcolor=\"#ffffff\" menu=\"false\" base=\"https://ado.campusdomar.es/common/intro\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\" type=\"application/x-shockwave-flash\" scale=\"noscale\" quality=\"high\" name=\"test\" src=\"https://ado.campusdomar.es/common/intro/test.swf\">
  </object>-->
  
<div style=\"position: relative; z-index: 3000; left: 680px\">
  <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index"), "html", null, true);
        echo "\" style=\"text-decoration: none; cursor: default; top: 140px;\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cmarmeeting/images/boton.png"), "html", null, true);
        echo "\"></img></a>
</div>
";
    }

    public function getTemplateName()
    {
        return "CmarMeetingBundle:User:adoTest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
