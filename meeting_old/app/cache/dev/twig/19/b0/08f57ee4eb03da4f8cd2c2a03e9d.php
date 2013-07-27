<?php

/* CmarMeetingBundle:User:recordingPublicList.html.twig */
class __TwigTemplate_19b008f57ee4eb03da4f8cd2c2a03e9d extends Twig_Template
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
        echo "
<h2 style=\"border-bottom: 4px solid #b19653; color: #b19653; font-weight: bold; font-size: 18px; margin-bottom: 5px; padding: 0px 0px 5px 10px; margin-bottom: 25px;\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "title"), "html", null, true);
        echo "'s recordings</h2>

<div class=\"np\" style=\"margin: 20px\">
  ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "meeting"), "recordings"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["recording"]) {
            // line 12
            echo "  <ul>
    <li style=\"list-style-type: none;font-weight: bolder; text-shadow: 0 1px 0 black; color: #FFFFFF\">
      <a target=\"_blank\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index_public_recording", array("title" => $this->getAttribute($this->getContext($context, "recording"), "title"))), "html", null, true);
            echo "\" style=\"color: #FFFFFF; text-decoration:none\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "recording"), "title"), "html", null, true);
            echo "</a>
      <span style=\"font-size: 12px; font-style: italic; margin: 5px; padding-bottom: 5px; margin-left: 10px;text-shadow: none;\"> at ";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "recording"), "datecreated"), "Y-m-d H:i"), "html", null, true);
            echo "</span>
    </li>
  </ul>
  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 19
            echo "    <center style=\"font-size: 25px; margin-bottom: 5px\">No recordings at <br />\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "title"), "html", null, true);
            echo "\"</center>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recording'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 21
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "CmarMeetingBundle:User:recordingPublicList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
