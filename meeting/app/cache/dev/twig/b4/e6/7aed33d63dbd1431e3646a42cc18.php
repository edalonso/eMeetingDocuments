<?php

/* CmarMeetingBundle:Meeting:index.html.twig */
class __TwigTemplate_b4e67aed33d63dbd1431e3646a42cc18 extends Twig_Template
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
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 8
            echo "  <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index"), "html", null, true);
            echo "\" style=\"text-decoration:none\"><button class=\"button\" style=\"margin: 0px 0px 5px 0px\"><i class=\"icon-admin icon-black\"></i> Index</button></a>
";
        }
        // line 10
        echo "
<h1 style=\"color: black\">Meeting list</h1>

<table class=\"records_list\">
    <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Owner</th>
            <th>URL</th>
            <th>State</th>
            <th>Magic</th>
            <th>Public</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 28
            echo "        <tr>
            <td><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("meeting_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</a></td>
            <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "title"), "html", null, true);
            echo "</td>
            <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "owner"), "html", null, true);
            echo "</td>
            <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "url"), "html", null, true);
            echo "</td>
            <td>
\t      ";
            // line 34
            if (($this->getAttribute($this->getContext($context, "entity"), "state") == 0)) {
                echo " STATE NEW
\t      ";
            } elseif (($this->getAttribute($this->getContext($context, "entity"), "state") == 1)) {
                // line 35
                echo " STATE NOW
\t      ";
            } elseif (($this->getAttribute($this->getContext($context, "entity"), "state") == 2)) {
                // line 36
                echo " STATE FINISHED
\t      ";
            } elseif (($this->getAttribute($this->getContext($context, "entity"), "state") == 3)) {
                // line 37
                echo " STATE SCHEDULED
\t      ";
            } elseif (($this->getAttribute($this->getContext($context, "entity"), "state") == 4)) {
                // line 38
                echo " STATE CANCELLED
\t      ";
            } elseif (($this->getAttribute($this->getContext($context, "entity"), "state") == 0)) {
                // line 39
                echo " STATE LOCKED
\t      ";
            }
            // line 41
            echo "\t    </td>
            <td>";
            // line 42
            if ($this->getAttribute($this->getContext($context, "entity"), "magic")) {
                echo " &nbsp;&nbsp;&nbsp;&times; ";
            }
            echo "</td>
            <td>";
            // line 43
            if ($this->getAttribute($this->getContext($context, "entity"), "public")) {
                echo " &nbsp;&nbsp;&nbsp;&times; ";
            }
            echo "</td>
            <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("meeting_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("meeting_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 56
        echo "    </tbody>
</table>

";
    }

    public function getTemplateName()
    {
        return "CmarMeetingBundle:Meeting:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
