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
<br />
    <div class=\"np\" style=\"margin: 0px 0px 45px 25px; padding: 0px; background: none\">
      <label style=\"margin: 0px; font-size: 16px;\">URL to recordings <a href=\"#\" class=\"showr\" title=\"URL to view the recordings of this meeting.\"><i class=\"icon-help icon-white\"></i></a></label>
      <input style=\"width: 280px\" type=\"text\" readonly=\"readonly\" onclick=\"this.select()\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("recording_public_list", array("secretsalt" => $this->getAttribute($this->getContext($context, "meeting"), "secretsalt"))), "html", null, true);
        echo "\"/>
    </div>
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "meeting"), "recordings"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["recording"]) {
            // line 8
            echo "      <ul>
        <li style=\"font-weight: bolder; text-shadow: 0 1px 0 black; color: #FFFFFF\">
\t  ";
            // line 10
            if (($this->getAttribute($this->getContext($context, "recording"), "state") == 0)) {
                // line 11
                echo "\t    <a target=\"_blank\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index_recording", array("id" => $this->getAttribute($this->getContext($context, "recording"), "id"))), "html", null, true);
                echo "\" style=\"color: #FFFFFF; text-decoration:none\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "recording"), "title"), "html", null, true);
                echo "</a>
\t  ";
            } else {
                // line 13
                echo "\t    <a id=\"title_recording\" href=\"#\" onclick=\"return false\" style=\"color: grey; text-shadow: none; text-decoration:none\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "recording"), "title"), "html", null, true);
                echo "</a>
\t  ";
            }
            // line 15
            echo "\t  <span style=\"font-size: 12px; font-style: italic; margin: 5px 0px 5px 10px; padding-bottom: 5px; text-shadow: none;\"> at ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "recording"), "datecreated"), "Y-m-d H:i"), "html", null, true);
            echo "</span>
\t  <a href=\"#\" ";
            // line 16
            if (($this->getAttribute($this->getContext($context, "user"), "id") == $this->getAttribute($this->getAttribute($this->getContext($context, "meeting"), "owner"), "id"))) {
                echo " onclick=\"\$('#dialog-modal-recordings-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
                echo "').load('";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("locked_recording", array("id" => $this->getAttribute($this->getContext($context, "recording"), "id"), "locked" => 1)), "html", null, true);
                echo "')\" ";
            }
            echo ">
\t    <button ";
            // line 17
            if (($this->getAttribute($this->getContext($context, "user"), "id") != $this->getAttribute($this->getAttribute($this->getContext($context, "meeting"), "owner"), "id"))) {
                echo " disabled=\"true\" ";
            }
            echo " class=\"button\" style=\"padding: 0px; width: 18px; height: 20px;\">
\t      <i class=\"icon-pause icon-black\"></i>
\t    </button>
\t  </a>
\t</li>
      </ul>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 24
            echo "      <center style=\"font-size: 25px; margin-bottom: 5px\">No recordings at <br />\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "title"), "html", null, true);
            echo "\"</center>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recording'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 26
        echo "    <div style=\"margin-left: 75%; margin-bottom: 10px\">
      <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index"), "html", null, true);
        echo "\" style=\"margin-top: 25px; font-size: 12px; text-decoration: none\" class=\"button\">Cancel</a>
    </div>
</div>

<script type=\"text/javascript\">
  function change()
  {
    document.getElementById(title_recording).style.color=\"#7F8080\";
    
  }
</script>
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
