<?php

/* CmarMeetingBundle:Group:historical.html.twig */
class __TwigTemplate_b501cf35154e42495fa274afcd31b164 extends Twig_Template
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
        echo "My Historical Meetings for ";
        echo twig_escape_filter($this->env, $this->getContext($context, "group"), "html", null, true);
        echo "
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<select id=\"selectmonth\">
  ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "num_meetings"));
        foreach ($context['_seq'] as $context["_key"] => $context["num_meeting"]) {
            // line 9
            echo "  <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "num_meeting"), "MES"), "html", null, true);
            echo "\"
          ";
            // line 10
            if (($this->getAttribute($this->getContext($context, "num_meeting"), "MES") == $this->getContext($context, "string_month"))) {
                // line 11
                echo "\t    selected=\"selected\" 
          ";
            }
            // line 13
            echo "\t  data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("index_month", array("string_month" => $this->getAttribute($this->getContext($context, "num_meeting"), "MES"))), "html", null, true);
            echo "\">
    ";
            // line 14
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
        // line 17
        echo "</select>

<script type=\"text/javascript\">
  var lista = document.getElementById('selectmonth');
  lista.onchange = function () {
    var url = lista.options[lista.selectedIndex].getAttribute('data-url');
    window.location = url;
  };
</script>

<ul>
  ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "meetings_finished"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["meeting"]) {
            // line 29
            echo "  <li>
    ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "title"), "html", null, true);
            echo " 
    <span style=\"font-size: 11px; font-style: italic\">at ";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "date"), "Y-m-d H:i"), "html", null, true);
            echo "</span> 
    ";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "meeting"), "recordings"));
            foreach ($context['_seq'] as $context["_key"] => $context["recording"]) {
                // line 33
                echo "    <ul>
      <li><a target=\"_blank\" href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index_recording", array("id" => $this->getAttribute($this->getContext($context, "recording"), "id"))), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "recording"), "title"), "html", null, true);
                echo "</a></li>
    </ul>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recording'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 37
            echo "  </li>
  
  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 40
            echo "  <li>Don not have historical meetings</li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meeting'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 42
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "CmarMeetingBundle:Group:historical.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
