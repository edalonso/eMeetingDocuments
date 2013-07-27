<?php

/* CmarMeetingBundle:User:historical.html.twig */
class __TwigTemplate_30e465ec548de73a5db356ada24f39b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 2
        echo "<select id=\"selectmonth\" style=\"margin: 10px; margin-bottom: 0px;\">
  ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "num_meetings"));
        foreach ($context['_seq'] as $context["_key"] => $context["num_meeting"]) {
            // line 4
            echo "  <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "num_meeting"), "MES"), "html", null, true);
            echo "\"
          ";
            // line 5
            if (($this->getAttribute($this->getContext($context, "num_meeting"), "MES") == $this->getContext($context, "string_month"))) {
                // line 6
                echo "\t    selected=\"selected\" 
          ";
            }
            // line 8
            echo "\t  data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("index_month", array("string_month" => $this->getAttribute($this->getContext($context, "num_meeting"), "MES"))), "html", null, true);
            echo "\">
    ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "num_meeting"), "MES"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "num_meeting"), "NUMMEETING"), "html", null, true);
            echo " meeting,  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "num_meeting"), "NUMRECORD"), "html", null, true);
            echo " recording
  </option>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['num_meeting'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 12
        echo "</select>
<script type=\"text/javascript\">
  var lista = document.getElementById('selectmonth');
  lista.onchange = function () {
    var url = lista.options[lista.selectedIndex].getAttribute('data-url');
    \$('#dialog-modal-achievement').load(url);
  };
</script>

<div class=\"np\" style=\"padding: 15px 0px 0px 40px\">
  <ul>
    ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "meetings_finished"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["meeting"]) {
            // line 24
            echo "    <li style=\"margin: 5px\">
      ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "title"), "html", null, true);
            echo " 
      ";
            // line 26
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "meeting"), "recordings"));
            foreach ($context['_seq'] as $context["_key"] => $context["recording"]) {
                // line 27
                echo "      <ul>
\t<li>
\t  <a style=\"color: #FFFFFF; text-decoration: none\" target=\"_blank\" href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index_recording", array("id" => $this->getAttribute($this->getContext($context, "recording"), "id"))), "html", null, true);
                echo "\"> Recording: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "recording"), "title"), "html", null, true);
                echo "</a>
\t    <span style=\"font-size: 11px; font-style: italic\">at ";
                // line 30
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "recording"), "datecreated"), "Y-m-d H:i"), "html", null, true);
                echo "</span> 
\t</li>
      </ul>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recording'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 34
            echo "    </li>
    
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 37
            echo "      <center style=\"font-size: 30px; margin: 30px; margin-bottom: 5px\">No achievement files yet</center>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meeting'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 39
        echo "  </ul>
  <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index"), "html", null, true);
        echo "\" style=\"border-radius: 4px; margin: 10px; margin-left: 70%; text-decoration: none\" id=\"cancel\" class=\"button\">Cancel</a>
</div>
";
    }

    public function getTemplateName()
    {
        return "CmarMeetingBundle:User:historical.html.twig";
    }

}
