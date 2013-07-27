<?php

/* CmarMeetingBundle:User:meeting.html.twig */
class __TwigTemplate_ae801186615088885dedacfe54b244af extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"np separator meetingrank\" data-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" style=\"heigth: 100%; border-radius: 10px; background-color: #6DAABC; margin: 15px; padding: 10px; clear: both; text-align: center; position:relative;\">
  <div class=\"info\" style=\"float:right; width:200px; padding: 10px 20px; margin:10px 0px; border-left:1px solid\">
    <button id=\"opener-delete-";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" class=\"button red\" ";
        if (($this->getAttribute($this->getContext($context, "meeting"), "owner") != $this->getContext($context, "user"))) {
            echo " disabled=\"true\" ";
        }
        echo "><i class=\"icon-trash icon-white\"></i> Delete</button>
    <div style=\"float: left;\" class=\"locked\">
      ";
        // line 5
        if ($this->getAttribute($this->getContext($context, "meeting"), "isLocked")) {
            // line 6
            echo "      <div class=\"visible\" id=\"capasuperior\" style=\"width: 660px;\">
      </div>
      <a  ";
            // line 8
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
            echo " class=\"button\"><i class=\"icon-enabled icon-white\"></i>Enabled</button></a>
      
      ";
        } else {
            // line 11
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
            echo " class=\"button\"><i class=\"icon-disabled icon-white\"></i>Disabled</button></a>
      ";
        }
        // line 13
        echo "    </div>
    <div style=\"padding-top: 10px\">
      <span style=\"font-weight: bolder; font-size: 14px\">Start Date: </span>
      <span style=\"font-size: 14px; font-style: italic\">";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "date"), "Y-m-d H:i"), "html", null, true);
        echo "</span>
    </div>
    <div>
      <span style=\"font-weight: bolder; font-size: 14px\">Type: </span>
      <span style=\"font-size: 14px; font-style: italic\">";
        // line 20
        if (($this->getAttribute($this->getContext($context, "meeting"), "public") == 1)) {
            echo " Public <i class=\"icon-padlock-open\"></i>";
        } else {
            echo " Private <i class=\"icon-padlock-close\"></i>";
        }
        echo "</span>
    </div>
    <div>
      <span style=\"font-weight: bolder; font-size: 14px;\">Number of participants: </span>
      <span style=\"font-size: 14px; font-style: italic\"> ";
        // line 24
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "users")) + 1), "html", null, true);
        echo " </span>
      <script type=\"text/javascript\">
\t\$(function() {
        \$( \".dialog-modal\" ).dialog({
        dialogClass: 'dialogWithShadow',
        hide: \"highlight\",
        autoOpen: false,
        modal: true,
        minWidth: 470,
\tminHeith: 144,
        position: [700, 250],
        open: function() {
\tself = \$(this);
\tif (self.data(\"ajax\")) {
        self.load(self.data(\"url\")); 
        } 
\t}
        });
\t
        \$( \"#dialog:ui-dialog\" ).dialog( \"destroy\" );
\t
\t\$( \"#opener-";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" ).click(function() {
        \$( \"#dialog-modal-users-";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" ).dialog( \"open\" );
        return false;
  \t});
\t
\t\$( \"#opener1-";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" ).click(function() {
        \$( \"#dialog-modal-users-";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" ).dialog( \"open\" );
        return false;
  \t});
\t
\t\$( \"#opener-recordings-";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" ).click(function() {
        \$( \"#dialog-modal-recordings-";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" ).dialog( \"open\" );
        return false;
  \t});
\t
\t\$( \"#opener-delete-";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" ).click(function() {
        \$( \"#dialog-modal-delete-";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" ).dialog( \"open\" );
        return false;
  \t});
\t
\t\$( \"#opener-reload-";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" ).click(function() {
        \$( \"#dialog-modal-reload-";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" ).dialog( \"open\" );
        return false;
  \t});
\t
\t\$( \"#opener-reload1-";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" ).click(function() {
        \$( \"#dialog-modal-reload1-";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" ).dialog( \"open\" );
        return false;
  \t});
\t
\t\$( \"#opener-nickname-";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" ).click(function() {
        \$( \"#dialog-modal-nickname-";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" ).dialog( \"open\" );
        return false;
  \t});
\t
\t\$( \"#opener-invite-";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" ).click(function() {
        \$( \"#dialog-modal-invite-";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" ).dialog( \"open\" );
        return false;
  \t});
\t
\t\$( \"#opener-invite1-";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" ).click(function() {
        \$( \"#dialog-modal-invite1-";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" ).dialog( \"open\" );
        return false;
  \t});
\t
\t\$( \"#opener-invite2-";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" ).click(function() {
        \$( \"#dialog-modal-invite2-";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" ).dialog( \"open\" );
        return false;
  \t});
\t});
      </script>
      <button id=\"opener-recordings-";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" style=\"font-size:12px; margin-top: 10px; width:168px;\" class=\"button otherblue\"><i style=\"float: left\" class=\"icon-recording icon-white\"></i> Recordings</button>\t
      <button id=\"opener-nickname-";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" style=\"font-size:12px; margin-top: 10px; width:168px;\" class=\"button otherblue\"><i style=\"float: left\" class=\"icon-user icon-white\"></i> Change Nick Name</button>\t
    </div>
  </div>
  <div class=\"body\" style=\"padding-right: 210px;\">
    <div style=\"float: right; margin-right: 15px\">
      ";
        // line 102
        if ($this->getAttribute($this->getContext($context, "meeting"), "public")) {
            // line 103
            echo "        <a class=\"go\" target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index_room", array("salt" => $this->getAttribute($this->getContext($context, "meeting"), "salt"))), "html", null, true);
            echo "\" style=\"text-decoration:none\"><button style=\"padding: 20px 8px;\" class=\"button green\"><i class=\"icon-upload icon-white\"></i> Join</button></a>
      ";
        } else {
            // line 105
            echo "        <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index_secretroom", array("salt" => $this->getAttribute($this->getContext($context, "meeting"), "secretsalt"))), "html", null, true);
            echo "\" style=\"text-decoration:none\"><button style=\"padding: 20px 8px;\" class=\"button green\"><i class=\"icon-upload icon-white\"></i> Join</button></a>
      ";
        }
        // line 107
        echo "    </div>
    <p class=\"expandable ClassTitle\" style=\"font-size:45px; text-align: left; width: 560px;\" title=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "title"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "title"), "html", null, true);
        echo "</p>
    <div style=\"float: rigth; margin-top: 20px; padding: 10px;\">
      ";
        // line 110
        if (($this->getAttribute($this->getContext($context, "meeting"), "description") != null)) {
            // line 111
            echo "        <div style=\"text-align:left\">
  \t  <b>Description</b>
  \t  <p style=\"margin: 15px; margin-top: 5px\">";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "description"), "html", null, true);
            echo "</p>
        </div>
      ";
        }
        // line 116
        echo "      <img align=\"right\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cmarmeeting/images/emeeting.png"), "html", null, true);
        echo "\"></img>
      ";
        // line 117
        if ($this->getAttribute($this->getContext($context, "meeting"), "public")) {
            // line 118
            echo "      <ul>
\t<p style=\"margin-bottom: 5px\">Invite External Partners (Presenter Access): <i id=\"opener-invite-";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
            echo "\" style=\"text-decoration: none; color: transparent; cursor: pointer;\" class=\"icon-letter icon-white\"></i>&nbsp;<a href=\"#\" class=\"showr\" title=\"To invite external DigiMar partners copy & send by email the link below or press on the envelope icon to compose a longer text.\"><i class=\"icon-help icon-white\"></i></a></p>
  \t<li style=\"list-style-type: none;\">
  \t  <input type=\"text\" readonly=\"readonly\" style=\"border: 1px solid #ccc; width: 52%; margin: 0px 0px 10px 10px;\" onclick=\"this.select()\" value=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("index_room", array("salt" => $this->getAttribute($this->getContext($context, "meeting"), "salt"))), "html", null, true);
            echo "\" />
\t</li>
      </ul>
      ";
        } else {
            // line 125
            echo "      <ul>
\t<p style=\"margin-bottom: 5px\">Invite External Partners (Presenter Access): <i id=\"opener-invite1-";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
            echo "\" style=\"text-decoration: none; color: transparent; cursor: pointer;\" class=\"icon-letter icon-white\"></i>&nbsp;<a href=\"#\" class=\"showr\" title=\"To invite external DigiMar partners Copy & send By Email the Link below or press on the envelope to send the text in the box.\"><i class=\"icon-help icon-white\"></i></a></p>
  \t<li style=\"list-style-type: none;\">
  \t  <input type=\"text\" readonly=\"readonly\" style=\"border: 1px solid #ccc; width: 52%; margin: 0px 0px 10px 10px;\" onclick=\"this.select()\" value=\"";
            // line 128
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("index_secretroom", array("salt" => $this->getAttribute($this->getContext($context, "meeting"), "secretsalt"))), "html", null, true);
            echo "\" />
\t  ";
            // line 129
            if (($this->getAttribute($this->getContext($context, "user"), "id") == $this->getAttribute($this->getAttribute($this->getContext($context, "meeting"), "owner"), "id"))) {
                // line 130
                echo "\t  <button id=\"opener-reload-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
                echo "\" style=\"background-color: transparent; border: none;\"><i style=\"vertical-align: baseline;\" class=\"icon-reload icon-white\"></i></button>
\t  ";
            }
            // line 132
            echo "  \t</li>
      <p style=\"margin-bottom: 5px; margin-left: -17px\">Invite External Partners (Limited Access): <i id=\"opener-invite2-";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
            echo "\" style=\"text-decoration: none; color: transparent; cursor: pointer;\" class=\"icon-letter icon-white\"></i>&nbsp;<a href=\"#\" class=\"showr\" title=\"This link allows you to invite partners at the eMeeting with limited functionality.\"><i class=\"icon-help icon-white\"></i></a></p>
  \t<li style=\"list-style-type: none;\">
  \t  <input type=\"text\" readonly=\"readonly\" style=\"border: 1px solid #ccc; width: 52%; margin: 0px 0px 10px 10px;\" onclick=\"this.select()\" value=\"";
            // line 135
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("index_secretroom", array("salt" => $this->getAttribute($this->getContext($context, "meeting"), "viewsalt"))), "html", null, true);
            echo "?guest=true\" />
\t  ";
            // line 136
            if (($this->getAttribute($this->getContext($context, "user"), "id") == $this->getAttribute($this->getAttribute($this->getContext($context, "meeting"), "owner"), "id"))) {
                // line 137
                echo "  \t  <button id=\"opener-reload1-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
                echo "\" style=\"background-color: transparent; border: none;\"><i style=\"vertical-align:  baseline;\" class=\"icon-reload icon-white\"></i></button>
\t  ";
            }
            // line 139
            echo "  \t</li>
      </ul>
      ";
        }
        // line 142
        echo "      <button style=\"font-size:12px; margin: 15px 0px 0px 30px; position: relative; float: left;\" id=\"opener-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" class=\"button otherblue\"><i class=\"icon-plus icon-white\"></i> Invite DigiMar Partners</button>
    </div>
  </div>
  
  <div id=\"dialog-modal-users-";
        // line 146
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" class=\"dialog-modal\" data-ajax=\"true\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_form", array("id" => $this->getAttribute($this->getContext($context, "meeting"), "id"))), "html", null, true);
        echo "\" title=\"Invite DigiMar Partners\" style=\"overflow:auto\">
  </div>
  
  <div id=\"dialog-modal-delete-";
        // line 149
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" class=\"dialog-modal\" title=\"Delete meeting: '";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "title"), "html", null, true);
        echo "'\" style=\"overflow:auto\">
    <div align=\"center\" style=\"padding: 40px\" class=\"np\">
      <div style=\"margin-bottom: 25px\">
\t<font size=\"4\">Are you sure?</font>
      </div>
      <a href=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index"), "html", null, true);
        echo "\" style=\"text-decoration:none\"><button class=\"button otherblue\">No way!</button></a>
      <a href=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index_cancel", array("id" => $this->getAttribute($this->getContext($context, "meeting"), "id"))), "html", null, true);
        echo "\" style=\"text-decoration:none\"><button class=\"button red\"><i class=\"icon-trash icon-white\"></i>Yes, I'm sure</button></a>
    </div>
  </div>
  
  <div id=\"dialog-modal-reload-";
        // line 159
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" class=\"dialog-modal\" title=\"Generate New Salt to '";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "title"), "html", null, true);
        echo "'\" style=\"overflow:auto\">
    <div align=\"center\" style=\"padding: 20px\" class=\"np\">
      <div style=\"margin-bottom: 25px\">
\t<p>If a new URL is generated, all partners invited previously will not be able to join the eMeeting anymore. They will need to be sent the new URL again.</p>
\t<font size=\"4\">Are you sure?</font>
      </div>
      <a href=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index"), "html", null, true);
        echo "\" style=\"text-decoration:none\"><button class=\"button otherblue\">No way!</button></a>
      <a href=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("updatesecretsalt_meeting", array("id" => $this->getAttribute($this->getContext($context, "meeting"), "id"))), "html", null, true);
        echo "\" style=\"text-decoration:none\"><button class=\"button red\"><i class=\"icon-trash icon-white\"></i>Yes, I'm sure</button></a>
    </div>
  </div>
  
  <div id=\"dialog-modal-reload1-";
        // line 170
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" class=\"dialog-modal\" title=\"Generate New Salt to '";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "title"), "html", null, true);
        echo "'\" style=\"overflow:auto\">
    <div align=\"center\" style=\"padding: 20px\" class=\"np\">
      <div style=\"margin-bottom: 25px\">
\t<p>If a new URL is generated, all partners invited previously will not be able to join the eMeeting anymore. They will need to be sent the new URL again.</p>
\t<font size=\"4\">Are you sure?</font>
      </div>
      <a href=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index"), "html", null, true);
        echo "\" style=\"text-decoration:none\"><button class=\"button otherblue\">No way!</button></a>
      <a href=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("updateviewsalt_meeting", array("id" => $this->getAttribute($this->getContext($context, "meeting"), "id"))), "html", null, true);
        echo "\" style=\"text-decoration:none\"><button class=\"button red\"><i class=\"icon-trash icon-white\"></i>Yes, I'm sure</button></a>
    </div>
  </div>
  
  <div id=\"dialog-modal-invite-";
        // line 181
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" class=\"dialog-modal\" title=\"Invite External Partners to '";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "title"), "html", null, true);
        echo "'\" style=\"overflow:auto; width: 605px;\">
    <div align=\"center\" style=\"width: 100%; heigth: 100%; padding: 0px; margin: 0px; background: none\">
      <textarea style=\"width: 445px; height: 180px; margin: 10px\" onclick=\"this.select()\" readonly=\"readonly\">    Hi:
    ";
        // line 184
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "name"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "surname"), "html", null, true);
        echo " wants to invite you to an eMeeting on DigiMar.
To access the eMeeting click on the link below.

";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("index_room", array("salt" => $this->getAttribute($this->getContext($context, "meeting"), "salt"))), "html", null, true);
        echo "

For more information visit: help.campusdomar.es</textarea>
      <a href=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index"), "html", null, true);
        echo "\" style=\"float: right; font-size: 14px; border-radius: 4px; text-decoration: none; margin: 10px 5%;\" id=\"cancel\" class=\"button\"/>Cancel</a>
</div>
  <div id=\"dialog-modal-invite1-";
        // line 192
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" class=\"dialog-modal\" title=\"Invite External Partners to '";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "title"), "html", null, true);
        echo "'\" style=\"overflow:auto; width: 605px;\">
    <div align=\"center\" style=\"width: 100%; heigth: 100%; padding: 0px; margin: 0px; background: none\">
      <textarea style=\"width: 445px; height: 180px; margin: 10px\" onclick=\"this.select()\" readonly=\"readonly\">    Hi:
    ";
        // line 195
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "name"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "surname"), "html", null, true);
        echo " wants to invite you to an eMeeting on DigiMar.
To access to the eMeeting click on the link below.

";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("index_room", array("salt" => $this->getAttribute($this->getContext($context, "meeting"), "secretsalt"))), "html", null, true);
        echo "

For more information visit: help.campusdomar.es</textarea>
      <a href=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index"), "html", null, true);
        echo "\" style=\"float: right; font-size: 14px; border-radius: 4px; text-decoration: none; margin: 10px 5%;\" id=\"cancel\" class=\"button\"/>Cancel</a>
</div>
  <div id=\"dialog-modal-invite2-";
        // line 203
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" class=\"dialog-modal\" title=\"Invite External Partners to '";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "title"), "html", null, true);
        echo "'\" style=\"overflow:auto; width: 605px;\">
    <div align=\"center\" style=\"width: 100%; heigth: 100%; padding: 0px; margin: 0px; background: none\">
      <textarea style=\"width: 445px; height: 180px; margin: 10px\" onclick=\"this.select()\" readonly=\"readonly\">    Hi:
    ";
        // line 206
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "name"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "surname"), "html", null, true);
        echo " wants to invite you to an eMeeting on DigiMar.
To access to the eMeeting click on the link below.

";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("index_room", array("salt" => $this->getAttribute($this->getContext($context, "meeting"), "viewsalt"))), "html", null, true);
        echo "

For more information visit: help.campusdomar.es</textarea>
      <a href=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index"), "html", null, true);
        echo "\" style=\"float: right; font-size: 14px; border-radius: 4px; text-decoration: none; margin: 10px 5%;\" id=\"cancel\" class=\"button\"/>Cancel</a>
</div>

<div id=\"dialog-modal-nickname-";
        // line 215
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" class=\"dialog-modal\" title=\"Change Nick Name for this eMeeting\" style=\"width: 605px; height: 90px;\">
  <div class=\"np\" style=\"padding: 50px 30px 15px;\">
    <form action=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("change_nickname"), "html", null, true);
        echo "\" method=\"get\" >
      <input type=\"hidden\" name=\"id_meeting\" value=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" />
      <input type=\"hidden\" name=\"id_user\" value=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "id"), "html", null, true);
        echo "\" />
      ";
        // line 220
        if (($this->getAttribute($this->getContext($context, "nicknames"), $this->getAttribute($this->getContext($context, "meeting"), "id"), array(), "array") != null)) {
            // line 221
            echo "      <input type=\"hidden\" name=\"id_nickname\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "nicknames"), $this->getAttribute($this->getContext($context, "meeting"), "id"), array(), "array"), "id"), "html", null, true);
            echo "\" />
      ";
        }
        // line 223
        echo "      <ul>
\t<li style=\"list-style-type: none;\"><label for=\"form_NickName\" class=\"required\" style=\"margin: 10px;\">Nick Name: </label><input id=\"NickName\" name=\"Nick_name\" type=\"text;\" value=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "nicknames"), $this->getAttribute($this->getContext($context, "meeting"), "id"), array(), "array"), "html", null, true);
        echo "\"></input></li>
\t<li style=\"list-style-type: none; margin-left: 70px\"><input style=\"font-size: 14px; border-radius: 4px; margin: 20px\" type=\"submit\" value=\"Save\" class=\"button\"/><a href=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index"), "html", null, true);
        echo "\" style=\"font-size: 14px; border-radius: 4px; text-decoration: none; float: right; margin: 20px 65px 20px 20px;\" class=\"button\"/>Cancel</a></li>
</ul>
</form>
</div>
</div>

<div id=\"dialog-modal-recordings-";
        // line 231
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "meeting"), "id"), "html", null, true);
        echo "\" class=\"dialog-modal\" data-ajax=\"true\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("recording_list", array("id" => $this->getAttribute($this->getContext($context, "meeting"), "id"))), "html", null, true);
        echo "\" title=\"Recordings: '";
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
