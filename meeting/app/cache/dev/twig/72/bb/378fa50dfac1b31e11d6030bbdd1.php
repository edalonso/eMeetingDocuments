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
    <form id=\"caca\" action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index_immediate"), "html", null, true);
        echo "\" method=\"get\" >
      <input type=\"hidden\" name=\"selected_tag\" value=\"common_users\" id=\"selected_tag\"/>
      <div id=\"form\">
\t<ul>
\t  <li style=\"list-style-type: none; overflow: hidden; font-size: 18px; margin-bottom: 5px;\">
            <label for=\"form_Name\" class=\"required\"> Title: </label>
            <input style=\"width: 80%\" id=\"form_Name\" name=\"meeting_name\" type=\"text;\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "login"), "html", null, true);
        echo "'s Immediate eMeeting\"/></input>
\t  </li>
\t  <li style=\"list-style-type: none; overflow: hidden; font-size: 18px\">
            <label for=\"form_NickName\" class=\"required\"> Nick Name: </label>
            <input style=\"width: 68%\" id=\"form_NickName\" name=\"Nick_name\" type=\"text;\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "name"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "surname"), "html", null, true);
        echo "\"></input>
\t  </li>
\t  <li style=\"list-style-type: none; float: left; margin-top: 10px; margin-bottom: 10px; font-size: 18px\">
            <label for=\"form_Public\" class=\"required\"> Permission: </label>
            <select id=\"form_Public\" name=\"public\">
\t      <option value=\"public\">public</option>
\t      <option value=\"private\">private</option>
            </select>
\t  </li>
\t  ";
        // line 29
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 30
            echo "\t    <li style=\"list-style-type: none; float: left; margin-top: 10px; margin-bottom: 10px; font-size: 18px;\">
              <label for=\"form_magic_room\" class=\"required\"> Magic Room: </label>
\t      <input type=\"checkbox\" name=\"Checkbox_magic\"></input>
\t    </li>
\t  ";
        }
        // line 35
        echo "\t  <li style=\"list-style-type: none; float: left; font-size: 20px;margin-left: 88px;\">
\t    <div class=\"content common_users\">
\t      <h2 style=\"margin-top: 0px; margin-bottom: 5px\" align=\"center\">Description</h2>
              <textarea id=\"form_Dedcription\" style=\"border-radius: 4px; margin: 7px; width: 301px\" name=\"meeting_description\" cols=\"31\" rows=\"6\" placeholder=\"Introduce a Description ...\"></textarea>
\t    </div>
\t  </li>
\t  <input style=\"font-size: 14px; float: left; border-radius: 4px; margin: 10px 0px 0px 45px;\" type=\"submit\" value=\"Create\" class=\"button green\"></input>
\t  <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index"), "html", null, true);
        echo "\" style=\"float: right; text-decoration: none; margin: 10px 5%;\" id=\"cancel\" class=\"button\">Cancel</a>
\t</ul>
      </div>
    </form>
  </div>
</div>

<div id=\"dialog-modal-ado\" class=\"dialog-modal-ado\" data-ajax=\"true\" data-url=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ado_test"), "html", null, true);
        echo "\" title=\"Adobe Connect Test\" style=\"background: none; height: 223px !important;\">
</div>

<div id=\"dialog-modal-achievement\" class=\"dialog-modal\" data-ajax=\"true\" data-url=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index_historical"), "html", null, true);
        echo "\" title=\"All Recordings\" style=\"overflow:auto\">
</div>

<div id=\"dialog-modal-change-password\" title=\"Change password\" style=\"overflow:auto\">
  <div class=\"np\" style=\"padding: 30px 10px 20px 60px\">
    <div style=\"font-size: 18px; padding: 0px 0px 20px 0px;\">
      Enter your New Password below:
    </div>
    <form action=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("change_password", array("email" => $this->getAttribute($this->getContext($context, "user"), "email"))), "html", null, true);
        echo "\" method=\"post\" id=\"password\">
      <table>
\t<tbody>
          <tr>
            <td class=\"label\">
              <label for=\"cmar_meetingbundle_passwordtype_password_first\" class=\" required\">
\t\tNew Password:
              </label>
            </td>
            <td>
              <input style=\"width:99%\" type=\"password\" id=\"cmar_meetingbundle_passwordtype_password_first\" name=\"cmar_meetingbundle_passwordtype_first\" required=\"required\" />
            </td>
          </tr>
          <tr>
            <td class=\"label\">
              <label for=\"cmar_meetingbundle_passwordtype_password_second\" class=\" required\">
\t\tRe-enter Your New Password:
              </label>
            </td>
            <td>
              <input style=\"width:99%\" type=\"password\" id=\"cmar_meetingbundle_passwordtype_password_second\" name=\"cmar_meetingbundle_passwordtype_second\" required=\"required\" />
            </td>
          </tr>
          <tr>
            <td>
              <div class=\"error_password\" style=\"color: #b30000; font-weight: bolder; \">Passwords do not match!</div>
            </td>
            <td style=\"text-align: right;\">
              <input style=\"margin: 10px;\" class=\"button\" type=\"submit\" name=\"Cambiar\" value=\"Change\"/>
\t      <a href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index"), "html", null, true);
        echo "\" style=\"float: right; text-decoration: none; margin: 10px 5%;\" id=\"cancel\" class=\"button\">Cancel</a>
\t    </td>
\t  </tr>
\t</tbody>
      </table>
    </form>
  </div>
  
<script type=\"text/javascript\">
/*<![CDATA[*/

var \$error = \$(\".error_password\");
\$error.hide();

\$(\"form#password\").on(\"submit\", function(event) {
  var inputs = \$(this).find('input');
  var input_1 = inputs.first(),
      input_2 = inputs.eq(1);

  if (input_1.val() !== input_2.val()) {
    \$error.show();
    event.preventDefault();
  }
});


/*]]>*/
</script>


</div>

<left style=\"margin-left: 2%\">
  <button id=\"opener2\" class=\"button\"><i class=\"icon-achievement icon-black\"></i> All Recordings</button>
  <button id=\"opener\" class=\"button\"><i class=\"icon-indef icon-black\"></i> Adobe Connect Test</button>
  <a href=\"http://help.campusdomar.es/display/help/eMeeting+-+help\" style=\"text-decoration: none\" target=\"_blank\"><button class=\"button\"><i class=\"icon-help icon-black\"></i> eMeeting Help</button></a>
  <button id=\"opener3\" class=\"button\"><i class=\"icon-change-password icon-black\"></i> Change Password</button>
    <div class=\"btn-toolbar\">
      <div class=\"btn-group\">
\t<button class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">
\t  <span id=\"dropdown-title\">All eMeetings</span>
\t  <span class=\"caret\"></span>
\t</button>
\t<ul class=\"dropdown-menu\">
\t  <li style=\"margin: 3px\"><a href=\"#\" onclick=\"filter_emeetings('All eMeetings'); return false;\" style=\"text-decoration:none\"><span style=\"background-color: #000;\">&nbsp;&nbsp;&nbsp;&nbsp;</span> All eMeetings</a></li>
\t  <li style=\"margin: 3px\"><a onclick=\"filter_emeetings('Public'); return false;\"  href=\"#\" style=\"text-decoration:none\"><span style=\"background-color: #10911E;\">&nbsp;&nbsp;&nbsp;&nbsp;</span> Public</a></li>
\t  <li style=\"margin: 3px\"><a onclick=\"filter_emeetings('Private'); return false;\"  href=\"#\" style=\"text-decoration:none\"><span style=\"background-color: #D41314;\">&nbsp;&nbsp;&nbsp;&nbsp;</span> Private</a></li>
\t  <li style=\"margin: 3px\"><a onclick=\"filter_emeetings('Invited'); return false;\"  href=\"#\" style=\"text-decoration:none\"><span style=\"background-color: #B9883C;\">&nbsp;&nbsp;&nbsp;&nbsp;</span> Invited</a></li>
\t  ";
        // line 137
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 138
            echo "            <li style=\"margin: 3px\"><a onclick=\"filter_emeetings('Magic'); return false;\"  href=\"#\" style=\"text-decoration:none\"><span style=\"background-color: #FDEB97;\">&nbsp;&nbsp;&nbsp;&nbsp;</span> Magic</a></li>
\t  ";
        }
        // line 140
        echo "\t</ul>
      </div>
    </div>
  ";
        // line 143
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 144
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin"), "html", null, true);
            echo "\" style=\"text-decoration:none\"><button class=\"button\"><i class=\"icon-admin icon-black\"></i> Admin</button></a>
  ";
        }
        // line 146
        echo "</left>

<button style=\"float: right; margin-right: 2%\" id=\"opener1\" class=\"button\"><i class=\"icon-plus icon-black\"></i> eMeetings</button>

";
        // line 150
        if ((!twig_test_empty($this->getContext($context, "meetings_now")))) {
            // line 151
            echo "
";
            // line 153
            echo "<ul id=\"sortable\">
  ";
            // line 154
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
                // line 155
                echo "  <li class=\"ui-state-default\" style=\"list-style-type: none;\">
    ";
                // line 156
                if ($this->getAttribute($this->getAttribute($this->getContext($context, "nicknames"), $this->getAttribute($this->getContext($context, "meeting"), "id"), array(), "array"), "minimized")) {
                    // line 157
                    echo "      ";
                    $this->env->loadTemplate("CmarMeetingBundle:User:meeting_minimized.html.twig")->display($context);
                    // line 158
                    echo "    ";
                } else {
                    // line 159
                    echo "      ";
                    $this->env->loadTemplate("CmarMeetingBundle:User:meeting.html.twig")->display($context);
                    // line 160
                    echo "    ";
                }
                // line 161
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
            // line 163
            echo "</ul>

";
        } else {
            // line 167
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cmarmeeting/images/flecha.png"), "html", null, true);
            echo "\" class=\"arrow-up\"></img>
<div class=\"np\" style=\"border-radius: 10px; background-color: #6DAABC; margin: 50px 15px 30px 50px; padding: 10px;\">
  <p style=\"margin: 48px 225px; font-size: 22px\">To create an eMeeting press button</p>
  <div style=\"margin: 70px 10px 10px 170px;\">
    <p style=\"margin: 48px 0px; font-size: 45px\">No available eMeetings</p>
  </div>
</div>
";
        }
        // line 175
        echo "<script type=\"text/javascript\">
\$(function() {
    \$( \"#sortable\" ).sortable({
        update: function(event, ui) {
            var info = \$('.meetingrank').map(function(o,e){return \$(e).data('id')});
            \$.post(\"";
        // line 180
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
