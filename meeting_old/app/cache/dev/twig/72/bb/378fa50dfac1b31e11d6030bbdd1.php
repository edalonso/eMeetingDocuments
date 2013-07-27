<?php

/* CmarMeetingBundle:User:index.html.twig */
class __TwigTemplate_72bb378fa50dfac1b31e11d6030bbdd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
<div id=\"dialog-modal1\" title=\"Create an eMeeting\">
<div style=\"margin: 10px\" style=\"position: relative\">
  <form action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index_immediate"), "html", null, true);
        echo "\" method=\"get\" >
    <input type=\"hidden\" name=\"selected_tag\" value=\"common_users\" id=\"selected_tag\"/>
    <div id=\"form\">
      <ul>
\t<li style=\"list-style-type: none; overflow: hidden; font-size: 18px; margin-bottom: 5px;\">
          <label for=\"form_Name\" class=\"required\"> Title: </label>
          <input style=\"width: 80%\" id=\"form_Name\" name=\"meeting_name\" type=\"text;\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "login"), "html", null, true);
        echo "'s Immediate eMeeting\"></input>
\t</li>
\t<li style=\"list-style-type: none; overflow: hidden; font-size: 18px\">
          <label for=\"form_NickName\" class=\"required\"> Nick Name: </label>
          <input style=\"width: 64%\" id=\"form_NickName\" name=\"Nick_name\" type=\"text;\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "name"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "surname"), "html", null, true);
        echo "\"></input>
\t</li>
\t<li style=\"list-style-type: none; float: left; margin-top: 10px; margin-bottom: 10px; font-size: 18px\">
          <label for=\"form_Public\" class=\"required\"> Permission: </label>
          <select id=\"form_Public\" name=\"public\">
\t    <option value=\"public\">public</option>
\t    <option value=\"private\">private</option>
          </select>
\t</li>
\t<li style=\"list-style-type: none; float: left; font-size: 20px;\">
\t  <div class=\"content common_users\">
\t    <h2 style=\"margin-top: 0px; margin-bottom: 5px\" align=\"center\">Description</h2>
            <textarea id=\"form_Dedcription\" style=\"border-radius: 4px; margin: 7px; width: 301px\" name=\"meeting_description\" cols=\"31\" rows=\"6\" placeholder=\"Introduce a Description ...\"></textarea>
\t  </div>
\t</li>
\t";
        // line 52
        echo "\t<input style=\"font-size: 14px; float: left; border-radius: 4px; margin: 10px; margin-left: 10%\" type=\"submit\" value=\"Create\" class=\"button green\"/>
\t<a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index"), "html", null, true);
        echo "\" style=\"float: right; text-decoration: none; margin: 10px 5%;\" id=\"cancel\" class=\"button\"/>Cancel</a>
      </ul>
    </div>
  </form>
</div>
</div>

<div id=\"dialog-modal\" style=\"background: none;\" title=\"Adobe Connect Test\">
  <iframe width=\"760px\" height=\"196px\" border-radius=\"4px\" frameborder=\"0\" src=\"https://ado.campusdomar.es/common/intro/test.swf\">
  </iframe>
<div style=\"position: absolute; z-index: 3000; right: 25px\">
  <a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index"), "html", null, true);
        echo "\" style=\"text-decoration: none; cursor: default; top: 140px;\"/><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cmarmeeting/images/boton.png"), "html", null, true);
        echo "\"></img></a>
</div>
</div>

<div id=\"dialog-modal-achievement\" class=\"dialog-modal\" data-ajax=\"true\" data-url=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index_historical"), "html", null, true);
        echo "\" title=\"Achievement Files\" style=\"overflow:auto\">
</div>

<left style=\"margin-left: 2%\">
  <button id=\"opener2\" class=\"button\"><i class=\"icon-achievement icon-black\"></i> Achievement Files</button>
  <button id=\"opener\" class=\"button\"><i class=\"icon-indef icon-black\"></i> Adobe Connect Test</button>
  <a href=\"http://help.campusdomar.es/display/help/eMeeting+-+help\" style=\"text-decoration: none\" target=\"_blank\"><button class=\"button\"><i class=\"icon-help icon-black\"></i> eMeeting Help</button></a>
  ";
        // line 75
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 76
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin"), "html", null, true);
            echo "\" style=\"text-decoration:none\"><button class=\"button\"><i class=\"icon-admin icon-black\"></i> Admin</button></a>
  ";
        }
        // line 78
        echo "</left>

<button style=\"float: right; margin-right: 2%\" id=\"opener1\" class=\"button\"><i class=\"icon-plus icon-black\"></i> eMeetings</button>

";
        // line 82
        if ((!twig_test_empty($this->getContext($context, "meetings_now")))) {
            // line 83
            echo "
";
            // line 85
            echo "<ul id=\"sortable\">
  ";
            // line 86
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "meetings_now"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["meeting"]) {
                // line 87
                echo "  <li class=\"ui-state-default\" style=\"list-style-type: none;\">
    ";
                // line 88
                $this->env->loadTemplate("CmarMeetingBundle:User:meeting.html.twig")->display($context);
                // line 89
                echo "  </li>
  ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meeting'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 91
            echo "</ul>

";
        } else {
            // line 95
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cmarmeeting/images/flecha.png"), "html", null, true);
            echo "\" class=\"arrow-up\"></img>
<div class=\"np\" style=\"border-radius: 10px; background-color: #6DAABC; margin: 50px 15px 30px 50px; padding: 10px;\">
  <p style=\"margin: 48px 225px; font-size: 22px\">To create an eMeeting press button</p>
</div>
";
        }
        // line 100
        echo "
";
    }

    // line 105
    public function block_javascripts($context, array $blocks = array())
    {
        // line 106
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cmarmeeting/js/js.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cmarmeeting/js/jquery-1.7.1.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cmarmeeting/js/jquery-ui-1.8.18.custom.min.js"), "html", null, true);
        echo "\"></script>  
<script type=\"text/javascript\" src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cmarmeeting/js/jquery.tipTip.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cmarmeeting/js/tabla.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cmarmeeting/js/addbox.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cmarmeeting/js/autocomplete.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cmarmeeting/js/modal_dialog.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cmarmeeting/js/desplegable.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cmarmeeting/js/jquery.tokeninput.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
\$(function() { 
    var array_expandable = \$('.expandable');
    \$.map(array_expandable, truncar);
});
</script>
<script type=\"text/javascript\">
  \$(function(){
    \$(\".ClassTitle\").tipTip({defaultPosition: \"left\", edgeOffset: 1});
  });
</script>
<script type=\"text/javascript\">
  \$(function() {
    \$( \"#sortable\" ).sortable({
      update: function(event, ui) {
          var info = \$('.meetingrank').map(function(o,e){return \$(e).data('id')});
          \$.post(\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("update_rank"), "html", null, true);
        echo "\", \"data=\" + \$.makeArray(info).join(\",\") );
      }
    });
  });
</script>
";
    }

    public function getTemplateName()
    {
        return "CmarMeetingBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
