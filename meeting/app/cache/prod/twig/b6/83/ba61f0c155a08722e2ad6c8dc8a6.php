<?php

/* CmarMeetingBundle:User:meeting_minimized.html.twig */
class __TwigTemplate_b683ba61f0c155a08722e2ad6c8dc8a6 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div ";
        if (($this->getAttribute($this->getContext($context, "meeting"), "owner") != $this->getContext($context, "user"))) {
            echo " class=\"invited np separator meetingrank\" ";
        } elseif ($this->getAttribute($this->getContext($context, "meeting"), "public")) {
            echo " class=\"public np separator meetingrank\" ";
        } elseif (($this->getAttribute($this->getContext($context, "meeting"), "public") == 0)) {
            echo " class=\"private np separator meetingrank\" ";
        } else {
            echo " class=\"np separator meetingrank\" ";
        }
        echo " data-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\"  ";
        if (($this->getAttribute($this->getContext($context, "meeting"), "owner") != $this->getContext($context, "user"))) {
            echo " style=\"border-color: #C68005; heigth: 100%; border-radius: 10px; background-color: #6DAABC; margin: 15px; padding: 10px; clear: both; text-align: center; position:relative;\" ";
        } elseif ($this->getAttribute($this->getContext($context, "meeting"), "public")) {
            echo " style=\"border-color: #10911E; heigth: 100%; border-radius: 10px; background-color: #6DAABC; margin: 15px; padding: 10px; clear: both; text-align: center; position:relative;\" ";
        } elseif (($this->getAttribute($this->getContext($context, "meeting"), "public") == 0)) {
            echo " style=\"border-color: #D41314; heigth: 100%; border-radius: 10px; background-color: #6DAABC; margin: 15px; padding: 10px; clear: both; text-align: center; position:relative;\" ";
        } else {
            echo " style=\"border-color: orange; heigth: 100%; border-radius: 10px; background-color: #6DAABC; margin: 15px; padding: 10px; clear: both; text-align: center; position:relative;\" ";
        }
        echo ">
  <div ";
        // line 2
        if (($this->getAttribute($this->getContext($context, "meeting"), "owner") != $this->getContext($context, "user"))) {
            echo " class=\"invited info\" ";
        } elseif ($this->getAttribute($this->getContext($context, "meeting"), "public")) {
            echo " class=\"public info\" ";
        } elseif (($this->getAttribute($this->getContext($context, "meeting"), "public") == 0)) {
            echo " class=\"private info\" ";
        } else {
            echo " class=\"info\" ";
        }
        echo " style=\"float:right; width:200px; padding: 10px 20px; margin:10px 0px; border-left:1px solid\">
    <button id=\"opener-delete-";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" class=\"button red\" ";
        if (($this->getAttribute($this->getContext($context, "meeting"), "owner") != $this->getContext($context, "user"))) {
            echo " disabled=\"true\" ";
        }
        echo "><i class=\"icon-trash icon-white\"></i> Delete</button>
    <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("minimized_meeting", array("id_meeting" => $this->getAttribute($this->getContext($context, "meeting"), "id"), "id_user" => $this->getAttribute($this->getContext($context, "user"), "id"), "minimized" => 0)), "html", null, true);
        echo "\"><button class=\"button ClassTitle\" title=\"Button to minimized the meeting room\" style=\"margin-right: -55px\"><i class=\"icon-download icon-white\"></i></button></a>
    <div style=\"float: left;\" ";
        // line 5
        if (($this->getAttribute($this->getContext($context, "meeting"), "owner") != $this->getContext($context, "user"))) {
            echo " class=\"invited locked\" ";
        } elseif ($this->getAttribute($this->getContext($context, "meeting"), "public")) {
            echo " class=\"public locked\" ";
        } elseif (($this->getAttribute($this->getContext($context, "meeting"), "public") == 0)) {
            echo " class=\"private locked\" ";
        } else {
            echo " class=\"locked\" ";
        }
        echo ">
      ";
        // line 6
        if ($this->getAttribute($this->getContext($context, "meeting"), "isLocked")) {
            // line 7
            echo "      <div ";
            if (($this->getAttribute($this->getContext($context, "meeting"), "owner") != $this->getContext($context, "user"))) {
                echo " class=\"invited visible\" ";
            } elseif ($this->getAttribute($this->getContext($context, "meeting"), "public")) {
                echo " class=\"public visible\" ";
            } elseif (($this->getAttribute($this->getContext($context, "meeting"), "public") == 0)) {
                echo " class=\"private visible\" ";
            } else {
                echo " class=\"visible\" ";
            }
            echo " id=\"capasuperior\" style=\"width: 650px;\">
      </div>
        <a  ";
            // line 9
            if (($this->getAttribute($this->getContext($context, "user"), "id") != $this->getAttribute($this->getAttribute($this->getContext($context, "meeting"), "owner"), "id"))) {
                echo " href=\"javascript:plegardesplegar ('capasuperior');\" ";
            } else {
                echo " href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("locked_meeting", array("id" => $this->getAttribute($this->getContext($context, "meeting"), "id"), "locked" => 0)), "html", null, true);
                echo "\" ";
            }
            echo "><button ";
            if (($this->getAttribute($this->getContext($context, "user"), "id") != $this->getAttribute($this->getAttribute($this->getContext($context, "meeting"), "owner"), "id"))) {
                echo " disabled=\"true\" ";
            }
            echo " class=\"button\"><i class=\"icon-enabled icon-white\"></i>Enable</button></a>
      ";
        } else {
            // line 11
            echo "        <a ";
            if (($this->getAttribute($this->getContext($context, "user"), "id") != $this->getAttribute($this->getAttribute($this->getContext($context, "meeting"), "owner"), "id"))) {
                echo " href=\"#\" ";
            } else {
                echo " href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("locked_meeting", array("id" => $this->getAttribute($this->getContext($context, "meeting"), "id"), "locked" => 1)), "html", null, true);
                echo "\" ";
            }
            echo "><button ";
            if (($this->getAttribute($this->getContext($context, "user"), "id") != $this->getAttribute($this->getAttribute($this->getContext($context, "meeting"), "owner"), "id"))) {
                echo " disabled=\"true\" ";
            }
            echo " class=\"button\"><i class=\"icon-disabled icon-white\"></i>Disable</button></a>
      ";
        }
        // line 13
        echo "    </div>
  </div>
  <div ";
        // line 15
        if (($this->getAttribute($this->getContext($context, "meeting"), "owner") != $this->getContext($context, "user"))) {
            echo " class=\"invited body\" ";
        } elseif ($this->getAttribute($this->getContext($context, "meeting"), "public")) {
            echo " class=\"public body\" ";
        } elseif (($this->getAttribute($this->getContext($context, "meeting"), "public") == 0)) {
            echo " class=\"private body\" ";
        } else {
            echo " class=\"body\" ";
        }
        echo " style=\"padding-right: 210px;\">
    <div ";
        // line 16
        if (($this->getAttribute($this->getContext($context, "meeting"), "owner") != $this->getContext($context, "user"))) {
            echo " class=\"invited\" ";
        } elseif ($this->getAttribute($this->getContext($context, "meeting"), "public")) {
            echo " class=\"public\" ";
        } elseif (($this->getAttribute($this->getContext($context, "meeting"), "public") == 0)) {
            echo " class=\"private\" ";
        } else {
            echo " ";
        }
        echo " style=\"float: right; margin-right: 15px\">
      ";
        // line 17
        if ($this->getAttribute($this->getContext($context, "meeting"), "public")) {
            // line 18
            echo "        <a class=\"go\" target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index_room", array("salt" => $this->getAttribute($this->getContext($context, "meeting"), "salt"))), "html", null, true);
            echo "\" style=\"text-decoration:none\"><button style=\"padding: 20px 8px;\" class=\"button green\"><i class=\"icon-upload icon-white\"></i> Join</button></a>
      ";
        } else {
            // line 20
            echo "        <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index_secretroom", array("salt" => $this->getAttribute($this->getContext($context, "meeting"), "secretsalt"))), "html", null, true);
            echo "\" style=\"text-decoration:none\"><button style=\"padding: 20px 8px;\" class=\"button green\"><i class=\"icon-upload icon-white\"></i> Join</button></a>
      ";
        }
        // line 22
        echo "    </div>
    <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("minimized_meeting", array("id_meeting" => $this->getAttribute($this->getContext($context, "meeting"), "id"), "id_user" => $this->getAttribute($this->getContext($context, "user"), "id"), "minimized" => 0)), "html", null, true);
        echo "\" style=\"text-decoration: none; color:#FFF\"><p class=\"expandable ClassTitle\" style=\"font-size:45px; text-align: left; width: 560px;\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "title"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "title"), "html", null, true);
        echo "</p></a>
    <p align=\"left\">Owner's eMeeting: ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "meeting"), "owner"), "name"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "meeting"), "owner"), "surname"), "html", null, true);
        echo " <br />Email's owner: ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "meeting"), "owner"), "email"), "html", null, true);
        echo "</p>
  </div>
</div>

<div id=\"dialog-modal-delete-";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" class=\"dialog-modal\" title=\"Delete meeting: '";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "title"), "html", null, true);
        echo "'\" style=\"overflow:auto\">
  <div align=\"center\" style=\"padding: 40px\" class=\"np\">
    <div style=\"margin-bottom: 25px\">
      <font size=\"4\">Are you sure?</font>
    </div>
    <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index"), "html", null, true);
        echo "\" style=\"text-decoration:none\"><button class=\"button otherblue\">No way!</button></a>
    <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index_cancel", array("id" => $this->getAttribute($this->getContext($context, "meeting"), "id"))), "html", null, true);
        echo "\" style=\"text-decoration:none\"><button class=\"button red\"><i class=\"icon-trash icon-white\"></i>Yes, I'm sure</button></a>
  </div>
</div>

<script type=\"text/javascript\">
  \$(function() {
    \$( \".dialog-modal\" ).dialog({
    dialogClass: 'dialogWithShadow',
    hide: \"highlight\",
    autoOpen: false,
    modal: true,
    minWidth: 565,
    minHeith: 144,
    position: [700, 250]
    });

    \$( \"#dialog:ui-dialog\" ).dialog( \"destroy\" );
    \$( \"#opener-delete-";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" ).click(function() {
      \$( \"#dialog-modal-delete-";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" ).dialog( \"open\" );
      return false;
    });
  });
</script>
";
    }

    public function getTemplateName()
    {
        return "CmarMeetingBundle:User:meeting_minimized.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
