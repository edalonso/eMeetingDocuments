<?php

/* CmarMeetingBundle:Personal:index.html.twig */
class __TwigTemplate_e632acf5d7854e9247645f9c0b3f173b extends Twig_Template
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

<ul style=\"font-size: 32px; color: #32515E; list-style-type: none; padding:0px;\">
  <div class=\"np\">
    <li>
      <div class=\"primero\">
\t";
        // line 13
        if (twig_test_empty($this->getContext($context, "meetings_now_user"))) {
            // line 14
            echo "        <a class=\"button green\"></a>
\t";
        } else {
            // line 16
            echo "\t<a class=\"button red\"></a>
\t";
        }
        // line 18
        echo "      </div>
      <a target=\"_blank\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index"), "html", null, true);
        echo "\">Room: ";
        echo twig_escape_filter($this->env, $this->getContext($context, "user"), "html", null, true);
        echo "</a>
      
      ";
        // line 21
        if ((!twig_test_empty($this->getContext($context, "meetings_now_user")))) {
            // line 22
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "meetings_now_user"));
            foreach ($context['_seq'] as $context["_key"] => $context["meeting"]) {
                // line 23
                echo "          <span style=\"font-size: 15px; font-style: italic\">Meeting at \"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "date"), "Y-m-d H:i"), "html", null, true);
                echo "\" duration: \"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "duration"), "html", null, true);
                echo "\" min</span>
          ";
                // line 24
                if ($this->getAttribute($this->getContext($context, "meeting"), "public")) {
                    // line 25
                    echo "\t    <a target=\"_blank\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index_room", array("salt" => $this->getAttribute($this->getContext($context, "meeting"), "salt"))), "html", null, true);
                    echo "\"><button>Go</button></a>
\t  ";
                } else {
                    // line 27
                    echo "\t    <a target=\"_blank\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index_secretroom", array("salt" => $this->getAttribute($this->getContext($context, "meeting"), "secretsalt"))), "html", null, true);
                    echo "\"><button>Go</button></a>
\t  ";
                }
                // line 29
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meeting'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 30
            echo "      ";
        }
        // line 31
        echo "    </li>

    ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "groups"));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 34
            echo "    <li>
      ";
            // line 35
            if (twig_test_empty($this->getContext($context, "meetings_now_group"))) {
                // line 36
                echo "
      <div class=\"primero\">
\t";
                // line 38
                if ((!twig_test_empty($this->getContext($context, "meetings_now_group")))) {
                    // line 39
                    echo "          ";
                    if (($this->getAttribute($this->getContext($context, "meeting"), "group") == $this->getContext($context, "group"))) {
                        // line 40
                        echo "            <a class=\"button red\"></a>
          ";
                    } else {
                        // line 42
                        echo "            <a class=\"button green\"></a>
          ";
                    }
                    // line 44
                    echo "        ";
                } else {
                    // line 45
                    echo "\t  <a class=\"button green\"></a>
        ";
                }
                // line 47
                echo "      </div>
      <a target=\"_blank\" href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("indexgroup", array("key" => $this->getAttribute($this->getContext($context, "group"), "key"))), "html", null, true);
                echo "\">Room: ";
                echo twig_escape_filter($this->env, $this->getContext($context, "group"), "html", null, true);
                echo "</a>
      ";
            } else {
                // line 50
                echo "
      ";
                // line 51
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "meetings_now_group"));
                foreach ($context['_seq'] as $context["_key"] => $context["meeting"]) {
                    // line 52
                    echo "        <div class=\"primero\">
\t  ";
                    // line 53
                    if ((!twig_test_empty($this->getContext($context, "meetings_now_group")))) {
                        // line 54
                        echo "\t    ";
                        if (($this->getAttribute($this->getContext($context, "meeting"), "group") == $this->getContext($context, "group"))) {
                            // line 55
                            echo "\t      <a class=\"button red\"></a>
\t    ";
                        } else {
                            // line 57
                            echo "\t      <a class=\"button green\"></a>
\t    ";
                        }
                        // line 59
                        echo "\t  ";
                    } else {
                        // line 60
                        echo "\t      <a class=\"button green\"></a>
\t  ";
                    }
                    // line 62
                    echo "\t</div>
  
\t<a target=\"_blank\" href=\"";
                    // line 64
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("indexgroup", array("key" => $this->getAttribute($this->getContext($context, "group"), "key"))), "html", null, true);
                    echo "\">Room: ";
                    echo twig_escape_filter($this->env, $this->getContext($context, "group"), "html", null, true);
                    echo "</a>

\t";
                    // line 66
                    if (($this->getAttribute($this->getContext($context, "meeting"), "group") == $this->getContext($context, "group"))) {
                        // line 67
                        echo "\t  <span style=\"font-size: 15px; font-style: italic\">Meeting at \"";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "date"), "Y-m-d H:i"), "html", null, true);
                        echo "\" duration: \"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "duration"), "html", null, true);
                        echo "\" min</span>
\t  ";
                        // line 68
                        if ($this->getAttribute($this->getContext($context, "meeting"), "public")) {
                            // line 69
                            echo "            <a target=\"_blank\" href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index_room", array("salt" => $this->getAttribute($this->getContext($context, "meeting"), "salt"))), "html", null, true);
                            echo "\"><button>Go</button></a>
\t  ";
                        } else {
                            // line 71
                            echo "            <a target=\"_blank\" href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index_secretroom", array("salt" => $this->getAttribute($this->getContext($context, "meeting"), "secretsalt"))), "html", null, true);
                            echo "\"><button>Go</button></a>
\t  ";
                        }
                        // line 73
                        echo "\t";
                    }
                    // line 74
                    echo "       ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meeting'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 75
                echo "    ";
            }
            echo "  
  </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 78
        echo "</div>
</ul>
";
    }

    public function getTemplateName()
    {
        return "CmarMeetingBundle:Personal:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
