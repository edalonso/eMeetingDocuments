<?php

/* CmarMeetingBundle:User:meeting.html.twig */
class __TwigTemplate_ae801186615088885dedacfe54b244af extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div ";
        if (($this->getAttribute($this->getContext($context, "meeting"), "owner") != $this->getContext($context, "user"))) {
            echo " class=\"Invited np separator meetingrank ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif (($this->getAttribute($this->getContext($context, "meeting"), "owner") != $this->getContext($context, "user"))) {
            echo " class=\"Invited np separator meetingrank ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif ($this->getAttribute($this->getContext($context, "meeting"), "public")) {
            echo " class=\"Public np separator meetingrank ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif (($this->getAttribute($this->getContext($context, "meeting"), "public") == 0)) {
            echo " class=\"Private np separator meetingrank ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } else {
            echo " class=\"np separator meetingrank ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        }
        echo " data-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\"   ";
        if (($this->getAttribute($this->getContext($context, "meeting"), "owner") != $this->getContext($context, "user"))) {
            echo " style=\"border-color: #B9883C; heigth: 100%; border-radius: 10px; background-color: #6DAABC; margin: 15px; padding: 10px; clear: both; text-align: center; position:relative;\" ";
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
            echo " class=\"Invited info ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif ($this->getAttribute($this->getContext($context, "meeting"), "public")) {
            echo " class=\"Public info ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif (($this->getAttribute($this->getContext($context, "meeting"), "public") == 0)) {
            echo " class=\"Private info ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } else {
            echo " class=\"info ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("minimized_meeting", array("id_meeting" => $this->getAttribute($this->getContext($context, "meeting"), "id"), "id_user" => $this->getAttribute($this->getContext($context, "user"), "id"), "minimized" => 1)), "html", null, true);
        echo "\"><button class=\"button ClassTitle\" title=\"Button to minimized the meeting room\" style=\"margin-right: -55px\"><i class=\"icon-upload icon-white\"></i></button></a>
    <div style=\"float: left;\" ";
        // line 5
        if (($this->getAttribute($this->getContext($context, "meeting"), "owner") != $this->getContext($context, "user"))) {
            echo " class=\"Invited locked ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif ($this->getAttribute($this->getContext($context, "meeting"), "public")) {
            echo " class=\"Public locked ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif (($this->getAttribute($this->getContext($context, "meeting"), "public") == 0)) {
            echo " class=\"Private locked ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } else {
            echo " class=\"locked ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        }
        echo ">
      ";
        // line 6
        if ($this->getAttribute($this->getContext($context, "meeting"), "isLocked")) {
            // line 7
            echo "      <div ";
            if (($this->getAttribute($this->getContext($context, "meeting"), "owner") != $this->getContext($context, "user"))) {
                echo " class=\"Invited visible ";
                if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                    echo " Magic ";
                }
                echo "\" ";
            } elseif ($this->getAttribute($this->getContext($context, "meeting"), "public")) {
                echo " class=\"Public visible ";
                if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                    echo " Magic ";
                }
                echo "\" ";
            } elseif (($this->getAttribute($this->getContext($context, "meeting"), "public") == 0)) {
                echo " class=\"Private visible ";
                if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                    echo " Magic ";
                }
                echo "\" ";
            } else {
                echo " class=\"visible ";
                if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                    echo " Magic ";
                }
                echo "\" ";
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
            // line 12
            echo "      <a ";
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
        // line 14
        echo "    </div>
    <div ";
        // line 15
        if (($this->getAttribute($this->getContext($context, "meeting"), "owner") != $this->getContext($context, "user"))) {
            echo " class=\"Invited ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif ($this->getAttribute($this->getContext($context, "meeting"), "public")) {
            echo " class=\"Public ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif (($this->getAttribute($this->getContext($context, "meeting"), "public") == 0)) {
            echo " class=\"Private ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } else {
            echo " ";
        }
        echo " style=\"padding-top: 10px\">
      <span style=\"font-weight: bolder; font-size: 14px\">Start Date: </span>
      <span style=\"font-size: 14px; font-style: italic\">";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "date"), "Y-m-d H:i"), "html", null, true);
        echo "</span>
    </div>
    <div ";
        // line 19
        if (($this->getAttribute($this->getContext($context, "meeting"), "owner") != $this->getContext($context, "user"))) {
            echo " class=\"Invited ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif ($this->getAttribute($this->getContext($context, "meeting"), "public")) {
            echo " class=\"Public ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif (($this->getAttribute($this->getContext($context, "meeting"), "public") == 0)) {
            echo " class=\"Private ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } else {
            echo " ";
        }
        echo " style=\"width: 205px\">
      <span style=\"font-weight: bolder; font-size: 14px\">Type: </span>
      <span style=\"font-size: 13px; font-style: italic\">";
        // line 21
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 22
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic & ";
            } else {
                echo " No Magic & ";
            }
        }
        if (($this->getAttribute($this->getContext($context, "meeting"), "public") == 1)) {
            echo " Public <i class=\"icon-padlock-open\"></i>";
        } else {
            echo " Private <i class=\"icon-padlock-close\"></i>";
        }
        echo "</span>
    </div>
    <div ";
        // line 24
        if (($this->getAttribute($this->getContext($context, "meeting"), "owner") != $this->getContext($context, "user"))) {
            echo " class=\"Invited ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif ($this->getAttribute($this->getContext($context, "meeting"), "public")) {
            echo " class=\"Public ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif (($this->getAttribute($this->getContext($context, "meeting"), "public") == 0)) {
            echo " class=\"Private ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } else {
            echo " ";
        }
        echo ">
      <span style=\"font-weight: bolder; font-size: 14px;\">Number of participants: </span>
      <span style=\"font-size: 14px; font-style: italic\"> ";
        // line 26
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "users")) + 1), "html", null, true);
        echo " </span>
      <script type=\"text/javascript\">
\t\$(function() {
          \$( \".dialog-modal\" ).dialog({
            dialogClass: 'dialogWithShadow',
            hide: \"highlight\",
            autoOpen: false,
            modal: true,
            minWidth: 565,
\t    minHeith: 144,
            position: [700, 250],
            open: function() {
\t      self = \$(this);
\t      if (self.data(\"ajax\")) {
                self.load(self.data(\"url\")); 
              } 
\t    }
        });
\t
        \$( \"#dialog:ui-dialog\" ).dialog( \"destroy\" );
\t
\t\$( \"#opener-";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" ).click(function() {
          \$( \"#dialog-modal-users-";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" ).dialog( \"open\" );
          return false;
  \t});
\t
\t\$( \"#opener1-";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" ).click(function() {
          \$( \"#dialog-modal-users-";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" ).dialog( \"open\" );
          return false;
  \t});
\t
\t\$( \"#opener-recordings-";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" ).click(function() {
          \$( \"#dialog-modal-recordings-";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" ).dialog( \"open\" );
          return false;
  \t});
\t
\t\$( \"#opener-delete-";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" ).click(function() {
          \$( \"#dialog-modal-delete-";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" ).dialog( \"open\" );
          return false;
  \t});
\t
\t\$( \"#opener-reload-";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" ).click(function() {
          \$( \"#dialog-modal-reload-";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" ).dialog( \"open\" );
          return false;
  \t});
\t
\t\$( \"#opener-reload1-";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" ).click(function() {
          \$( \"#dialog-modal-reload1-";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" ).dialog( \"open\" );
          return false;
  \t});
\t
\t\$( \"#opener-nickname-";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" ).click(function() {
          \$( \"#dialog-modal-nickname-";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" ).dialog( \"open\" );
          return false;
  \t});
\t
\t\$( \"#opener-invite-";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" ).click(function() {
          \$( \"#dialog-modal-invite-";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" ).dialog( \"open\" );
          return false;
  \t});
\t
\t\$( \"#opener-invite1-";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" ).click(function() {
          \$( \"#dialog-modal-invite1-";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" ).dialog( \"open\" );
          return false;
  \t});
\t
\t\$( \"#opener-invite2-";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" ).click(function() {
          \$( \"#dialog-modal-invite2-";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" ).dialog( \"open\" );
          return false;
  \t});
\t});
      </script>
      <button id=\"opener-recordings-";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" style=\"font-size:12px; margin-top: 10px; width:168px;\" class=\"button otherblue\"><i style=\"float: left\" class=\"icon-recording icon-white\"></i> Recordings</button>\t
      <button id=\"opener-nickname-";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" style=\"font-size:12px; margin-top: 10px; width:168px;\" class=\"button otherblue\"><i style=\"float: left\" class=\"icon-user icon-white\"></i> Change Nick Name</button>\t
      ";
        // line 100
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 101
            echo "        ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "ismagic")) {
                // line 102
                echo "          <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("magic_meeting", array("id" => $this->getAttribute($this->getContext($context, "meeting"), "id"), "magic" => 0)), "html", null, true);
                echo "\"><button style=\"font-size:12px; margin-top: 10px; width:168px;\" class=\"button otherblue\"><i style=\"float: left\" class=\"icon-enabled icon-white\"></i>Change to Non Magic</button></a>
        ";
            } else {
                // line 104
                echo "          <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("magic_meeting", array("id" => $this->getAttribute($this->getContext($context, "meeting"), "id"), "magic" => 1)), "html", null, true);
                echo "\" ><button style=\"font-size:12px; margin-top: 10px; width:168px;\" class=\"button otherblue\"><i style=\"float: left\" class=\"icon-disabled icon-white\"></i>Change to Magic</button></a>
        ";
            }
            // line 106
            echo "      ";
        }
        // line 107
        echo "    </div>
  </div>
  <div ";
        // line 109
        if (($this->getAttribute($this->getContext($context, "meeting"), "owner") != $this->getContext($context, "user"))) {
            echo " class=\"Invited body ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif ($this->getAttribute($this->getContext($context, "meeting"), "public")) {
            echo " class=\"Public body ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif (($this->getAttribute($this->getContext($context, "meeting"), "public") == 0)) {
            echo " class=\"Private body ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } else {
            echo " class=\"body ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        }
        echo " style=\"padding-right: 210px;\">
    <div ";
        // line 110
        if ($this->getAttribute($this->getContext($context, "meeting"), "public")) {
            echo " class=\"Public ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif (($this->getAttribute($this->getContext($context, "meeting"), "public") == 0)) {
            echo " class=\"Private ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } else {
            echo " ";
        }
        echo " style=\"float: right; margin-right: 15px\">
      ";
        // line 111
        if ($this->getAttribute($this->getContext($context, "meeting"), "public")) {
            // line 112
            echo "        <a class=\"go\" target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index_room", array("salt" => $this->getAttribute($this->getContext($context, "meeting"), "salt"))), "html", null, true);
            echo "\" style=\"text-decoration:none\"><button style=\"padding: 20px 8px;\" class=\"button green\"><i class=\"icon-upload icon-white\"></i> Join</button></a>
      ";
        } else {
            // line 114
            echo "        <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index_secretroom", array("salt" => $this->getAttribute($this->getContext($context, "meeting"), "secretsalt"))), "html", null, true);
            echo "\" style=\"text-decoration:none\"><button style=\"padding: 20px 8px;\" class=\"button green\"><i class=\"icon-upload icon-white\"></i> Join</button></a>
      ";
        }
        // line 116
        echo "    </div>
    <a href=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("minimized_meeting", array("id_meeting" => $this->getAttribute($this->getContext($context, "meeting"), "id"), "id_user" => $this->getAttribute($this->getContext($context, "user"), "id"), "minimized" => 1)), "html", null, true);
        echo "\" style=\"text-decoration: none; color:#FFF\"><p class=\"expandable ClassTitle\" style=\"font-size:45px; text-align: left; width: 560px;\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "title"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "title"), "html", null, true);
        echo "</p></a>
    <p align=\"left\" style=\"font-size: 14px\">Owner's eMeeting: ";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "meeting"), "owner"), "name"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "meeting"), "owner"), "surname"), "html", null, true);
        echo " <br />Email's owner: ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "meeting"), "owner"), "email"), "html", null, true);
        echo "</p>
    <div ";
        // line 119
        if (($this->getAttribute($this->getContext($context, "meeting"), "owner") != $this->getContext($context, "user"))) {
            echo " class=\"Invited ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif ($this->getAttribute($this->getContext($context, "meeting"), "public")) {
            echo " class=\"Public ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif (($this->getAttribute($this->getContext($context, "meeting"), "public") == 0)) {
            echo " class=\"Private ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } else {
            echo " ";
        }
        echo " style=\"float: rigth; margin-top: 20px; padding: 10px;\">
      ";
        // line 120
        if (($this->getAttribute($this->getContext($context, "meeting"), "description") != null)) {
            // line 121
            echo "        <div ";
            if (($this->getAttribute($this->getContext($context, "meeting"), "owner") != $this->getContext($context, "user"))) {
                echo " class=\"Invited ";
                if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                    echo " Magic ";
                }
                echo "\" ";
            } elseif ($this->getAttribute($this->getContext($context, "meeting"), "public")) {
                echo " class=\"Public ";
                if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                    echo " Magic ";
                }
                echo "\" ";
            } elseif (($this->getAttribute($this->getContext($context, "meeting"), "public") == 0)) {
                echo " class=\"Private ";
                if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                    echo " Magic ";
                }
                echo "\" ";
            } else {
                echo " ";
            }
            echo " style=\"text-align:left\">
  \t  <b>Description</b>
  \t  <p style=\"margin: 15px; margin-top: 5px\">";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "description"), "html", null, true);
            echo "</p>
        </div>
      ";
        }
        // line 126
        echo "      <img align=\"right\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cmarmeeting/images/emeeting.png"), "html", null, true);
        echo "\"></img>
      ";
        // line 127
        if ($this->getAttribute($this->getContext($context, "meeting"), "public")) {
            // line 128
            echo "      <ul>
\t<p style=\"margin-bottom: 5px\">Invite External Partners (Presenter Access): <i id=\"opener-invite-";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
            echo "\" style=\"text-decoration: none; color: transparent; cursor: pointer;\" class=\"icon-letter icon-white\"></i>&nbsp;<a href=\"#\" class=\"showr\" title=\"To invite external DigiMar partners copy & send by email the link below or press on the envelope icon to compose a longer text.\"><i class=\"icon-help icon-white\"></i></a></p>
  \t<li style=\"list-style-type: none;\">
  \t  <input type=\"text\" readonly=\"readonly\" style=\"border: 1px solid #ccc; width: 52%; margin: 0px 0px 10px 10px;\" onclick=\"this.select()\" value=\"";
            // line 131
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("index_room", array("salt" => $this->getAttribute($this->getContext($context, "meeting"), "salt"))), "html", null, true);
            echo "\" />
\t</li>
      </ul>
      ";
        } else {
            // line 135
            echo "      <ul>
\t<p style=\"margin-bottom: 5px\">Invite External Partners (Presenter Access): <i id=\"opener-invite1-";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
            echo "\" style=\"text-decoration: none; color: transparent; cursor: pointer;\" class=\"icon-letter icon-white\"></i>&nbsp;<a href=\"#\" class=\"showr\" title=\"To invite external DigiMar partners Copy & send By Email the Link below or press on the envelope to send the text in the box.\"><i class=\"icon-help icon-white\"></i></a></p>
  \t<li style=\"list-style-type: none;\">
  \t  <input type=\"text\" readonly=\"readonly\" style=\"border: 1px solid #ccc; width: 52%; margin: 0px 0px 10px 10px;\" onclick=\"this.select()\" value=\"";
            // line 138
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("index_secretroom", array("salt" => $this->getAttribute($this->getContext($context, "meeting"), "secretsalt"))), "html", null, true);
            echo "\" />
\t  ";
            // line 139
            if (($this->getAttribute($this->getContext($context, "user"), "id") == $this->getAttribute($this->getAttribute($this->getContext($context, "meeting"), "owner"), "id"))) {
                // line 140
                echo "\t  <button id=\"opener-reload-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
                echo "\" style=\"background-color: transparent; border: none;\"><i style=\"vertical-align: baseline;\" class=\"icon-reload icon-white\"></i></button>
\t  ";
            }
            // line 142
            echo "  \t</li>
      <p style=\"margin-bottom: 5px; margin-left: -17px\">Invite External Partners (Limited Access): <i id=\"opener-invite2-";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
            echo "\" style=\"text-decoration: none; color: transparent; cursor: pointer;\" class=\"icon-letter icon-white\"></i>&nbsp;<a href=\"#\" class=\"showr\" title=\"This link allows you to invite partners at the eMeeting with limited functionality.\"><i class=\"icon-help icon-white\"></i></a></p>
  \t<li style=\"list-style-type: none;\">
  \t  <input type=\"text\" readonly=\"readonly\" style=\"border: 1px solid #ccc; width: 52%; margin: 0px 0px 10px 10px;\" onclick=\"this.select()\" value=\"";
            // line 145
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("index_secretroom", array("salt" => $this->getAttribute($this->getContext($context, "meeting"), "viewsalt"))), "html", null, true);
            echo "?guest=true\" />
\t  ";
            // line 146
            if (($this->getAttribute($this->getContext($context, "user"), "id") == $this->getAttribute($this->getAttribute($this->getContext($context, "meeting"), "owner"), "id"))) {
                // line 147
                echo "  \t  <button id=\"opener-reload1-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
                echo "\" style=\"background-color: transparent; border: none;\"><i style=\"vertical-align:  baseline;\" class=\"icon-reload icon-white\"></i></button>
\t  ";
            }
            // line 149
            echo "  \t</li>
      </ul>
      ";
        }
        // line 152
        echo "      <button style=\"font-size:12px; margin: 15px 0px 0px 30px; position: relative; float: left;\" id=\"opener-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" class=\"button otherblue\"><i class=\"icon-plus icon-white\"></i> Invite DigiMar Partners</button>
    </div>
  </div>
  
  <div id=\"dialog-modal-users-";
        // line 156
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" ";
        if (($this->getAttribute($this->getContext($context, "meeting"), "owner") != $this->getContext($context, "user"))) {
            echo " class=\"Invited dialog-modal ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif ($this->getAttribute($this->getContext($context, "meeting"), "public")) {
            echo " class=\"Public dialog-modal ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif (($this->getAttribute($this->getContext($context, "meeting"), "public") == 0)) {
            echo " class=\"Private dialog-modal ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } else {
            echo " class=\"dialog-modal\" ";
        }
        echo " data-ajax=\"true\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_form", array("id" => $this->getAttribute($this->getContext($context, "meeting"), "id"))), "html", null, true);
        echo "\" title=\"Invite DigiMar Partners\" style=\"overflow:auto\">
  </div>
  
  <div id=\"dialog-modal-delete-";
        // line 159
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" ";
        if (($this->getAttribute($this->getContext($context, "meeting"), "owner") != $this->getContext($context, "user"))) {
            echo " class=\"Invited dialog-modal ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif ($this->getAttribute($this->getContext($context, "meeting"), "public")) {
            echo " class=\"Public dialog-modal ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif (($this->getAttribute($this->getContext($context, "meeting"), "public") == 0)) {
            echo " class=\"Private dialog-modal ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } else {
            echo " class=\"dialog-modal\" ";
        }
        echo " title=\"Delete meeting: '";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "title"), "html", null, true);
        echo "'\" style=\"overflow:auto\">
    <div ";
        // line 160
        if (($this->getAttribute($this->getContext($context, "meeting"), "owner") != $this->getContext($context, "user"))) {
            echo " class=\"Invited ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif ($this->getAttribute($this->getContext($context, "meeting"), "public")) {
            echo " class=\"Public ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif (($this->getAttribute($this->getContext($context, "meeting"), "public") == 0)) {
            echo " class=\"Private ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } else {
            echo " ";
        }
        echo "align=\"center\" style=\"padding: 40px\" class=\"np\">
      <div ";
        // line 161
        if (($this->getAttribute($this->getContext($context, "meeting"), "owner") != $this->getContext($context, "user"))) {
            echo " class=\"Invited ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif ($this->getAttribute($this->getContext($context, "meeting"), "public")) {
            echo " class=\"Public ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif (($this->getAttribute($this->getContext($context, "meeting"), "public") == 0)) {
            echo " class=\"Private ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } else {
            echo " ";
        }
        echo " style=\"margin-bottom: 25px\">
\t<font size=\"4\">Are you sure?</font>
      </div>
      <a href=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index"), "html", null, true);
        echo "\" style=\"text-decoration:none\"><button class=\"button otherblue\">No way!</button></a>
      <a href=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index_cancel", array("id" => $this->getAttribute($this->getContext($context, "meeting"), "id"))), "html", null, true);
        echo "\" style=\"text-decoration:none\"><button class=\"button red\"><i class=\"icon-trash icon-white\"></i>Yes, I'm sure</button></a>
    </div>
  </div>
  
  <div id=\"dialog-modal-reload-";
        // line 169
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" ";
        if (($this->getAttribute($this->getContext($context, "meeting"), "owner") != $this->getContext($context, "user"))) {
            echo " class=\"Invited dialog-modal ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif ($this->getAttribute($this->getContext($context, "meeting"), "public")) {
            echo " class=\"Public dialog-modal ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif (($this->getAttribute($this->getContext($context, "meeting"), "public") == 0)) {
            echo " class=\"Private dialog-modal ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } else {
            echo " class=\"dialog-modal\" ";
        }
        echo " title=\"Generate New Salt to '";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "title"), "html", null, true);
        echo "'\" style=\"overflow:auto\">
    <div ";
        // line 170
        if (($this->getAttribute($this->getContext($context, "meeting"), "owner") != $this->getContext($context, "user"))) {
            echo " class=\"Invited ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif ($this->getAttribute($this->getContext($context, "meeting"), "public")) {
            echo " class=\"Public ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif (($this->getAttribute($this->getContext($context, "meeting"), "public") == 0)) {
            echo " class=\"Private ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } else {
            echo " ";
        }
        echo " align=\"center\" style=\"padding: 20px\" class=\"np\">
      <div ";
        // line 171
        if (($this->getAttribute($this->getContext($context, "meeting"), "owner") != $this->getContext($context, "user"))) {
            echo " class=\"Invited ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif ($this->getAttribute($this->getContext($context, "meeting"), "public")) {
            echo " class=\"Public ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif (($this->getAttribute($this->getContext($context, "meeting"), "public") == 0)) {
            echo " class=\"Private ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } else {
            echo " ";
        }
        echo " style=\"margin-bottom: 25px\">
\t<p>If a new URL is generated, all partners invited previously will not be able to join the eMeeting anymore. They will need to be sent the new URL again.</p>
\t<font size=\"4\">Are you sure?</font>
      </div>
      <a href=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index"), "html", null, true);
        echo "\" style=\"text-decoration:none\"><button class=\"button otherblue\">No way!</button></a>
      <a href=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("updatesecretsalt_meeting", array("id" => $this->getAttribute($this->getContext($context, "meeting"), "id"))), "html", null, true);
        echo "\" style=\"text-decoration:none\"><button class=\"button red\"><i class=\"icon-trash icon-white\"></i>Yes, I'm sure</button></a>
    </div>
  </div>
  
  <div id=\"dialog-modal-reload1-";
        // line 180
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" ";
        if (($this->getAttribute($this->getContext($context, "meeting"), "owner") != $this->getContext($context, "user"))) {
            echo " class=\"Invited dialog-modal ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif ($this->getAttribute($this->getContext($context, "meeting"), "public")) {
            echo " class=\"Public dialog-modal ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif (($this->getAttribute($this->getContext($context, "meeting"), "public") == 0)) {
            echo " class=\"Private dialog-modal ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } else {
            echo " class=\"dialog-modal\" ";
        }
        echo " title=\"Generate New Salt to '";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "title"), "html", null, true);
        echo "'\" style=\"overflow:auto\">
    <div ";
        // line 181
        if (($this->getAttribute($this->getContext($context, "meeting"), "owner") != $this->getContext($context, "user"))) {
            echo " class=\"Invited ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif ($this->getAttribute($this->getContext($context, "meeting"), "public")) {
            echo " class=\"Public ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif (($this->getAttribute($this->getContext($context, "meeting"), "public") == 0)) {
            echo " class=\"Private ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } else {
            echo " ";
        }
        echo " align=\"center\" style=\"padding: 20px\" class=\"np\">
      <div ";
        // line 182
        if (($this->getAttribute($this->getContext($context, "meeting"), "owner") != $this->getContext($context, "user"))) {
            echo " class=\"Invited ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif ($this->getAttribute($this->getContext($context, "meeting"), "public")) {
            echo " class=\"Public ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif (($this->getAttribute($this->getContext($context, "meeting"), "public") == 0)) {
            echo " class=\"Private ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } else {
            echo " ";
        }
        echo " style=\"margin-bottom: 25px\">
\t<p>If a new URL is generated, all partners invited previously will not be able to join the eMeeting anymore. They will need to be sent the new URL again.</p>
\t<font size=\"4\">Are you sure?</font>
      </div>
      <a href=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index"), "html", null, true);
        echo "\" style=\"text-decoration:none\"><button class=\"button otherblue\">No way!</button></a>
      <a href=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("updateviewsalt_meeting", array("id" => $this->getAttribute($this->getContext($context, "meeting"), "id"))), "html", null, true);
        echo "\" style=\"text-decoration:none\"><button class=\"button red\"><i class=\"icon-trash icon-white\"></i>Yes, I'm sure</button></a>
    </div>
  </div>
  
  <div id=\"dialog-modal-invite-";
        // line 191
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" ";
        if (($this->getAttribute($this->getContext($context, "meeting"), "owner") != $this->getContext($context, "user"))) {
            echo " class=\"Invited dialog-modal ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif ($this->getAttribute($this->getContext($context, "meeting"), "public")) {
            echo " class=\"Public dialog-modal ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif (($this->getAttribute($this->getContext($context, "meeting"), "public") == 0)) {
            echo " class=\"Private dialog-modal ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } else {
            echo " class=\"dialog-modal\" ";
        }
        echo " title=\"Invite External Partners to '";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "title"), "html", null, true);
        echo "'\" style=\"overflow:auto; width: 605px;\">
    <div ";
        // line 192
        if (($this->getAttribute($this->getContext($context, "meeting"), "owner") != $this->getContext($context, "user"))) {
            echo " class=\"Invited ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif ($this->getAttribute($this->getContext($context, "meeting"), "public")) {
            echo " class=\"Public ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif (($this->getAttribute($this->getContext($context, "meeting"), "public") == 0)) {
            echo " class=\"Private ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } else {
            echo " ";
        }
        echo " align=\"center\" style=\"width: 100%; heigth: 100%; padding: 0px; margin: 0px; background: none\">
      <textarea style=\"width: 500px; height: 180px; margin: 10px\" onclick=\"this.select()\" readonly=\"readonly\">    Hi:
    ";
        // line 194
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "name"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "surname"), "html", null, true);
        echo " wants to invite you to an eMeeting on DigiMar.
To access the eMeeting click on the link below.

";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("index_room", array("salt" => $this->getAttribute($this->getContext($context, "meeting"), "salt"))), "html", null, true);
        echo "

For more information visit: help.campusdomar.es</textarea>
      <p style=\"font-size: 20px; text-shadow: 0 1px 0 black; color: #FFF; font-weight: bolder\">Copy & send  by email the text above</p>
      <a href=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index"), "html", null, true);
        echo "\" style=\"float: right; font-size: 14px; border-radius: 4px; text-decoration: none; margin: 10px 5%;\" id=\"cancel\" class=\"button\"/>Cancel</a>
</div>
  <div id=\"dialog-modal-invite1-";
        // line 203
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" ";
        if (($this->getAttribute($this->getContext($context, "meeting"), "owner") != $this->getContext($context, "user"))) {
            echo " class=\"Invited dialog-modal ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif ($this->getAttribute($this->getContext($context, "meeting"), "public")) {
            echo " class=\"Public dialog-modal ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif (($this->getAttribute($this->getContext($context, "meeting"), "public") == 0)) {
            echo " class=\"Private dialog-modal ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } else {
            echo " class=\"dialog-modal\" ";
        }
        echo " title=\"Invite External Partners to '";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "title"), "html", null, true);
        echo "'\" style=\"overflow:auto; width: 605px;\">
    <div ";
        // line 204
        if (($this->getAttribute($this->getContext($context, "meeting"), "owner") != $this->getContext($context, "user"))) {
            echo " class=\"Invited ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif ($this->getAttribute($this->getContext($context, "meeting"), "public")) {
            echo " class=\"Public ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif (($this->getAttribute($this->getContext($context, "meeting"), "public") == 0)) {
            echo " class=\"Private ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } else {
            echo " ";
        }
        echo " align=\"center\" style=\"width: 100%; heigth: 100%; padding: 0px; margin: 0px; background: none\">
      <textarea style=\"width: 500px; height: 180px; margin: 10px\" onclick=\"this.select()\" readonly=\"readonly\">    Hi:
    ";
        // line 206
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "name"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "surname"), "html", null, true);
        echo " wants to invite you to an eMeeting on DigiMar.
To access to the eMeeting click on the link below.

";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("index_room", array("salt" => $this->getAttribute($this->getContext($context, "meeting"), "secretsalt"))), "html", null, true);
        echo "

For more information visit: help.campusdomar.es</textarea>
      <p style=\"font-size: 20px; text-shadow: 0 1px 0 black; color: #FFF; font-weight: bolder\">Copy & send  by email the text above</p>
      <a href=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index"), "html", null, true);
        echo "\" style=\"float: right; font-size: 14px; border-radius: 4px; text-decoration: none; margin: 10px 5%;\" id=\"cancel\" class=\"button\"/>Cancel</a>
</div>
  <div id=\"dialog-modal-invite2-";
        // line 215
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" ";
        if (($this->getAttribute($this->getContext($context, "meeting"), "owner") != $this->getContext($context, "user"))) {
            echo " class=\"Invited dialog-modal ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif ($this->getAttribute($this->getContext($context, "meeting"), "public")) {
            echo " class=\"Public dialog-modal ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif (($this->getAttribute($this->getContext($context, "meeting"), "public") == 0)) {
            echo " class=\"Private dialog-modal ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } else {
            echo " class=\"dialog-modal\" ";
        }
        echo " title=\"Invite External Partners to '";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "title"), "html", null, true);
        echo "'\" style=\"overflow:auto; width: 605px;\">
    <div ";
        // line 216
        if (($this->getAttribute($this->getContext($context, "meeting"), "owner") != $this->getContext($context, "user"))) {
            echo " class=\"Invited ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif ($this->getAttribute($this->getContext($context, "meeting"), "public")) {
            echo " class=\"Public ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif (($this->getAttribute($this->getContext($context, "meeting"), "public") == 0)) {
            echo " class=\"Private ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } else {
            echo " ";
        }
        echo " align=\"center\" style=\"width: 100%; heigth: 100%; padding: 0px; margin: 0px; background: none\">
      <textarea style=\"width: 500px; height: 180px; margin: 10px\" onclick=\"this.select()\" readonly=\"readonly\">    Hi:
    ";
        // line 218
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "name"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "surname"), "html", null, true);
        echo " wants to invite you to an eMeeting on DigiMar.
To access to the eMeeting click on the link below.

";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("index_room", array("salt" => $this->getAttribute($this->getContext($context, "meeting"), "viewsalt"))), "html", null, true);
        echo "

For more information visit: help.campusdomar.es</textarea>
      <p style=\"font-size: 20px; text-shadow: 0 1px 0 black; color: #FFF; font-weight: bolder\">Copy & send  by email the text above</p>
      <a href=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index"), "html", null, true);
        echo "\" style=\"float: right; font-size: 14px; border-radius: 4px; text-decoration: none; margin: 10px 5%;\" id=\"cancel\" class=\"button\"/>Cancel</a>
</div>

<div id=\"dialog-modal-nickname-";
        // line 228
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" ";
        if (($this->getAttribute($this->getContext($context, "meeting"), "owner") != $this->getContext($context, "user"))) {
            echo " class=\"Invited dialog-modal ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif ($this->getAttribute($this->getContext($context, "meeting"), "public")) {
            echo " class=\"Public dialog-modal ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif (($this->getAttribute($this->getContext($context, "meeting"), "public") == 0)) {
            echo " class=\"Private dialog-modal ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } else {
            echo " class=\"dialog-modal\" ";
        }
        echo " title=\"Change Nick Name for this eMeeting\" style=\"width: 605px; height: 90px;\">
  <div ";
        // line 229
        if (($this->getAttribute($this->getContext($context, "meeting"), "owner") != $this->getContext($context, "user"))) {
            echo " class=\"Invited np ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif ($this->getAttribute($this->getContext($context, "meeting"), "public")) {
            echo " class=\"Public np ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif (($this->getAttribute($this->getContext($context, "meeting"), "public") == 0)) {
            echo " class=\"Private np ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } else {
            echo " class=\"np\" ";
        }
        echo " style=\"padding: 50px 30px 15px;\">
    <form action=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("change_nickname"), "html", null, true);
        echo "\" method=\"get\" >
      <input type=\"hidden\" name=\"id_meeting\" value=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" />
      <input type=\"hidden\" name=\"id_user\" value=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "id"), "html", null, true);
        echo "\" />
      ";
        // line 233
        if (($this->getAttribute($this->getContext($context, "nicknames"), $this->getAttribute($this->getContext($context, "meeting"), "id"), array(), "array") != null)) {
            // line 234
            echo "      <input type=\"hidden\" name=\"id_nickname\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nicknames"), $this->getAttribute($this->getContext($context, "meeting"), "id"), array(), "array"), "id"), "html", null, true);
            echo "\" />
      ";
        }
        // line 236
        echo "      <ul>
\t<li style=\"list-style-type: none;\"><label for=\"form_NickName\" class=\"required\" style=\"margin: 10px;\">Nick Name: </label><input id=\"NickName\" name=\"Nick_name\" type=\"text;\" value=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "nicknames"), $this->getAttribute($this->getContext($context, "meeting"), "id"), array(), "array"), "html", null, true);
        echo "\"></input></li>
\t<li style=\"list-style-type: none; margin-left: 70px\"><input style=\"font-size: 14px; border-radius: 4px; margin: 20px\" type=\"submit\" value=\"Save\" class=\"button\"/><a href=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index"), "html", null, true);
        echo "\" style=\"font-size: 14px; border-radius: 4px; text-decoration: none; float: right; margin: 20px 65px 20px 20px;\" class=\"button\"/>Cancel</a></li>
</ul>
</form>
</div>
</div>

<div id=\"dialog-modal-recordings-";
        // line 244
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" ";
        if (($this->getAttribute($this->getContext($context, "meeting"), "owner") != $this->getContext($context, "user"))) {
            echo " class=\"Invited dialog-modal ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif ($this->getAttribute($this->getContext($context, "meeting"), "public")) {
            echo " class=\"Public dialog-modal ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } elseif (($this->getAttribute($this->getContext($context, "meeting"), "public") == 0)) {
            echo " class=\"Private dialog-modal ";
            if ($this->getAttribute($this->getContext($context, "meeting"), "magic")) {
                echo " Magic ";
            }
            echo "\" ";
        } else {
            echo " class=\"dialog-modal\" ";
        }
        echo " data-ajax=\"true\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("recording_list", array("id" => $this->getAttribute($this->getContext($context, "meeting"), "id"))), "html", null, true);
        echo "\" title=\"Recordings of '";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "title"), "html", null, true);
        echo "'\" style=\"overflow:auto\">
</div>
";
    }

    public function getTemplateName()
    {
        return "CmarMeetingBundle:User:meeting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
