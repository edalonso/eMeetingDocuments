<?php

/* CmarMeetingBundle:User:recordingList.html.twig */
class __TwigTemplate_3ecc0896e74fc06c8adc1a6c6d623612 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"container ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" class=\"np\" style=\"padding: 0px 20px; padding-bottom: 10px;\">
<br /><br />
  ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "meeting"), "recordings"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["recording"]) {
            // line 4
            echo "    <div class=\"np\" style=\"margin: 0px 0px 30px 15px; padding: 0px; background: none\">
      <label style=\"margin: 0px; font-size: 16px;\">URL to recordings <a href=\"#\" class=\"showr\" title=\"URL to view the recordings of this meeting.\"><i class=\"icon-help icon-white\"></i></a></label>
      <input type=\"text\" readonly=\"readonly\" onclick=\"this.select()\" value=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("recording_public_list", array("secretsalt" => $this->getAttribute($this->getContext($context, "meeting"), "secretsalt"))), "html", null, true);
            echo "\"/>
    </div>
    <ul>
      <li style=\"list-style-type: none;font-weight: bolder; text-shadow: 0 1px 0 black; color: #FFFFFF\"><a target=\"_blank\" href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index_recording", array("id" => $this->getAttribute($this->getContext($context, "recording"), "id"))), "html", null, true);
            echo "\" style=\"color: #FFFFFF; text-decoration:none\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "recording"), "title"), "html", null, true);
            echo "</a><span style=\"font-size: 12px; font-style: italic; margin: 5px; padding-bottom: 5px; margin-left: 10px;text-shadow: none;\"> at ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "recording"), "datecreated"), "Y-m-d H:i"), "html", null, true);
            echo "</span></li>
    </ul>
  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 12
            echo "    <center style=\"font-size: 25px; margin-bottom: 5px\">No recordings at <br />\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "title"), "html", null, true);
            echo "\"</center>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recording'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 14
        echo "  <div style=\"margin-left: 75%; margin-bottom: 10px\">
    <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index"), "html", null, true);
        echo "\" style=\"margin-top: 25px; font-size: 12px; text-decoration: none\" class=\"button\" >Cancel</a>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "CmarMeetingBundle:User:recordingList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
