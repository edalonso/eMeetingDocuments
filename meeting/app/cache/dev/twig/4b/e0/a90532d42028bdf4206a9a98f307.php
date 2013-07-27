<?php

/* CmarMeetingBundle:Group:index.html.twig */
class __TwigTemplate_4be0a90532d42028bdf4206a9a98f307 extends Twig_Template
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
        echo "VidMeet (Video Meeting)
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
<h1 style=\"font-size: 32px; background-color: #D7E6EB; color: #32515E; border: none\">
<div class=\"primero\">
";
        // line 10
        if (twig_test_empty($this->getContext($context, "meetings_now"))) {
            // line 11
            echo "    Status: \"Free Meeting\"
";
        } else {
            // line 13
            echo "    Status: \"Open Meeting\"
";
        }
        // line 15
        echo "</div>
<span>Room:</span> ";
        // line 16
        echo twig_escape_filter($this->env, $this->getContext($context, "group"), "html", null, true);
        echo "
</h1>


";
        // line 20
        if ((!twig_test_empty($this->getContext($context, "meetings_now")))) {
            // line 21
            echo "
<h4>Current meetings for ";
            // line 22
            echo twig_escape_filter($this->env, $this->getContext($context, "group"), "html", null, true);
            echo ":</h4>
<ul>
  ";
            // line 24
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "meetings_now"));
            foreach ($context['_seq'] as $context["_key"] => $context["meeting"]) {
                // line 25
                echo "  <li>
    ";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "title"), "html", null, true);
                echo "
    <span>at \"";
                // line 27
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "date"), "Y-m-d H:i"), "html", null, true);
                echo "\" duration: \"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "duration"), "html", null, true);
                echo "\" min</span>
    <div>
      ";
                // line 29
                if ($this->getAttribute($this->getContext($context, "meeting"), "public")) {
                    // line 30
                    echo "        <a target=\"_blank\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index_room", array("salt" => $this->getAttribute($this->getContext($context, "meeting"), "salt"))), "html", null, true);
                    echo "\"><button>Go</button></a>
      ";
                } else {
                    // line 32
                    echo "        <a target=\"_blank\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index_secretroom", array("salt" => $this->getAttribute($this->getContext($context, "meeting"), "secretsalt"))), "html", null, true);
                    echo "\"><button>Go</button></a>
      ";
                }
                // line 34
                echo "      <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("indexgroup_cancel", array("id" => $this->getAttribute($this->getContext($context, "meeting"), "id"))), "html", null, true);
                echo "\"><button>cancel</button></a>
      <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("indexincrement_room", array("id" => $this->getAttribute($this->getContext($context, "meeting"), "id"))), "html", null, true);
                echo "\"><button>+ 30'</button></a>
      <script language=\"JavaScript\">
\tTargetDate = \"";
                // line 37
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "finishdate"), "m/d/Y H:i"), "html", null, true);
                echo "\";
\tBackColor = \"white\";
\tForeColor = \"dark\";
\tCountActive = true;
\tCountStepper = -1;
\tLeadingZero = true;
\tDisplayFormat = \"Time to Finish: %%H%% h. %%M%% m. %%S%% s.\";
\tFinishMessage = \"The meeting has finished.\";
      </script>
      <script language=\"JavaScript\" src=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cmarmeeting/js/countdown.js"), "html", null, true);
                echo "\"></script>
      <div>
        <h4>Invite partners:</h4>
        ";
                // line 49
                if ($this->getAttribute($this->getContext($context, "meeting"), "public")) {
                    // line 50
                    echo "          <input type=\"text\" readonly=\"readonly\" style=\"border: 1px solid #ccc; width: 50%\" onclick=\"this.select()\" value=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("index_room", array("salt" => $this->getAttribute($this->getContext($context, "meeting"), "salt"))), "html", null, true);
                    echo "\">
        ";
                } else {
                    // line 52
                    echo "          <input type=\"text\" readonly=\"readonly\" style=\"border: 1px solid #ccc; width: 50%\" onclick=\"this.select()\" value=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("index_secretroom", array("salt" => $this->getAttribute($this->getContext($context, "meeting"), "secretsalt"))), "html", null, true);
                    echo "\">
        ";
                }
                // line 54
                echo "      </div>
    </div>
  </li>
</ul>
";
                // line 61
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meeting'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        }
        // line 64
        echo "

<div style=\"overflow: hidden; ";
        // line 66
        if ((!twig_test_empty($this->getContext($context, "meetings_now")))) {
            echo " color:grey ";
        }
        echo "\">
  <div class=\"segundo\">
    <h4>Open Immediate Meeting for ";
        // line 68
        echo twig_escape_filter($this->env, $this->getContext($context, "group"), "html", null, true);
        echo ":</h4>
    <form action=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("indexgroup_immediate", array("key" => $this->getAttribute($this->getContext($context, "group"), "key"))), "html", null, true);
        echo "\" method=\"get\" >
      <div id=\"form\">
        <label for=\"form_Public\" class=\"required\" ";
        // line 71
        if (($this->getContext($context, "meetings_now") == null)) {
            echo " style=\"color:black\" ";
        }
        echo "> Permission: </label>
        <select id=\"form_Public\" name=\"public\" ";
        // line 72
        if ((!twig_test_empty($this->getContext($context, "meetings_now")))) {
            echo " disabled=\"true\" ";
        }
        echo ">
          <option value=\"public\">public</option>
          <option value=\"private\">private</option>
        </select>
        <label for=\"form_Duration\" class=\"required\" ";
        // line 76
        if (($this->getContext($context, "meetings_now") == null)) {
            echo " style=\"color:black\" ";
        }
        echo "> Duration: </label>
          <select id=\"form_Duration\" name=\"duration\" ";
        // line 77
        if ((!twig_test_empty($this->getContext($context, "meetings_now")))) {
            echo " disabled=\"true\" ";
        }
        echo ">
            <option value=\"30\">30 min</option>
            <option value=\"60\">60 min</option>
            <option value=\"90\">90 min</option>
          </select>
\t  <input type=\"submit\" ";
        // line 82
        if ((!twig_test_empty($this->getContext($context, "meetings_now")))) {
            echo " disabled=\"true\" ";
        }
        echo " value=\"Reserve\"/>
      </div>
    </form>
  </div>
  <div class=\"segundo\">
    <h4>Open Future Meeting for ";
        // line 87
        echo twig_escape_filter($this->env, $this->getContext($context, "group"), "html", null, true);
        echo ":</h4>
    <form action=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("indexgroup_immediate", array("key" => $this->getAttribute($this->getContext($context, "group"), "key"))), "html", null, true);
        echo "\" method=\"get\" >
      <div id=\"form\">
        <label for=\"form_Public\" class=\"required\" style=\"color:grey\"> Permission: </label>
        <select id=\"form_Public\" name=\"public\" disabled=\"true\" ";
        // line 91
        if ((!twig_test_empty($this->getContext($context, "meetings_now")))) {
            echo " disabled=\"true\" ";
        }
        echo ">
          <option value=\"public\">public</option>
          <option value=\"private\">private</option>
        </select>
        <label for=\"form_Duration\" class=\"required\" style=\"color:grey\"> Duration: </label>
        <select id=\"form_Duration\" name=\"duration\" disabled=\"true\" ";
        // line 96
        if ((!twig_test_empty($this->getContext($context, "meetings_now")))) {
            echo " disabled=\"true\" ";
        }
        echo ">
          <option value=\"30\">30 min</option>
          <option value=\"60\">60 min</option>
          <option value=\"90\">90 min</option>
        </select>
\t<input type=\"submit\" ";
        // line 101
        if ((!twig_test_empty($this->getContext($context, "meetings_now")))) {
            echo " disabled=\"true\" ";
        }
        echo " value=\"Reserve\" disabled=\"true\"/>
      </div>
    </form>
  </div>
</div>


";
        // line 120
        echo "

";
        // line 134
        echo "
<div class=\"banner\">
  <ul>
    <li><a href=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("indexgroup_historical", array("key" => $this->getAttribute($this->getContext($context, "group"), "key"))), "html", null, true);
        echo "\">Achievement Files for ";
        echo twig_escape_filter($this->env, $this->getContext($context, "group"), "html", null, true);
        echo " </a></li>
    ";
        // line 138
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 139
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin"), "html", null, true);
            echo "\">Admin</a></li>
    ";
        }
        // line 141
        echo "  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "CmarMeetingBundle:Group:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
