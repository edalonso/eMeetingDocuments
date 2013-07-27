<?php

/* CmarMeetingBundle:Meeting:show.html.twig */
class __TwigTemplate_95306273f7d5c71baefe78bc3d50caf8 extends Twig_Template
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
        echo "eMeeting Admin
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
<h1 style=\"color: black\">Meeting show</h1>
";
        // line 9
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 10
            echo "  <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index"), "html", null, true);
            echo "\" style=\"text-decoration:none\"><button class=\"button\" style=\"margin: 0px 0px 5px 0px\"><i class=\"icon-admin icon-black\"></i> Index</button></a>
";
        }
        // line 12
        echo "
<table class=\"record_properties\">
    <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Title</th>
            <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "title"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>State</th>
            <td>
              ";
        // line 26
        if (($this->getAttribute($this->getContext($context, "entity"), "state") == 0)) {
            echo " STATE NEW
              ";
        } elseif (($this->getAttribute($this->getContext($context, "entity"), "state") == 1)) {
            // line 27
            echo " STATE NOW
              ";
        } elseif (($this->getAttribute($this->getContext($context, "entity"), "state") == 2)) {
            // line 28
            echo " STATE FINISHED
              ";
        } elseif (($this->getAttribute($this->getContext($context, "entity"), "state") == 3)) {
            // line 29
            echo " STATE SCHEDULED
              ";
        } elseif (($this->getAttribute($this->getContext($context, "entity"), "state") == 4)) {
            // line 30
            echo " STATE CANCELLED
              ";
        } elseif (($this->getAttribute($this->getContext($context, "entity"), "state") == 0)) {
            // line 31
            echo " STATE LOCKED
              ";
        }
        // line 33
        echo "\t    </td>
        </tr>
        <tr>
            <th>Magic</th>
            <td>";
        // line 37
        if ($this->getAttribute($this->getContext($context, "entity"), "magic")) {
            echo " &times; ";
        }
        echo "</td>
        </tr>
        <tr>
            <th>Description</th>
            <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "description"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Date</th>
            <td>";
        // line 45
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "date"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Public</th>
            <td>";
        // line 49
        if ($this->getAttribute($this->getContext($context, "entity"), "public")) {
            echo " &times; ";
        }
        echo "</td>
        </tr>
    </tbody>
</table>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("meeting"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("meeting_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    ";
        // line 71
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "CmarMeetingBundle:Meeting:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
